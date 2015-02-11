-- --------------------------------------------------------------------------------
-- Routine DDL
-- Note: comments before and after the routine body will not be stored by the server
-- --------------------------------------------------------------------------------
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `facility_monitoring`(criteria VARCHAR (45), analysis VARCHAR(45))
BEGIN

CASE criteria 
WHEN 'facility' THEN
SELECT 
				    f.facility_name as 'Facility Name',
				    f.facility_code as 'Facility Code',
                    c.county as 'County',
                    d.district as 'Sub-County',
                    MAX(fi.`created_at`) as 'Date Last Issued',
				    IFNULL(DATEDIFF(NOW(), MAX(fi.`created_at`)),0) as 'Days from last issue',
                    MAX(rd.`date_sent`) as 'Date Last Redistributed',
				    IFNULL(DATEDIFF(NOW(), MAX(rd.`date_sent`)),0) as 'Days From last Redistributed',
					MAX(fo.`order_date`) as 'Date Last ordered',
				    IFNULL(DATEDIFF(NOW(), MAX(fo.`order_date`)),0) as 'Days From Last order',

					 (CASE
                         WHEN l.decommissioned = '1' THEN MAX(l.`end_time_of_event`)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Date Last Decommissioned
',
                     (CASE
                         WHEN l.decommissioned = '1' THEN IFNULL(DATEDIFF(NOW(), MAX(l.`end_time_of_event`)),0)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Days From Last Decommissioned',

                    MAX(fo.`order_date`) as 'Date From Last Received Order',
				    IFNULL(DATEDIFF(NOW(), MAX(fo.`order_date`)),0) as 'Days From Last Received Order',
					MAX(l.end_time_of_event) as 'Date Last Seen',
				    IFNULL(DATEDIFF(NOW(), MAX(l.end_time_of_event)),0) as 'Days From Last Seen'
				    
				FROM
				    user u,
				    log l,
				    facility_issues fi,
                    facilities f
                 JOIN districts d ON d.id = f.district
				 JOIN counties c ON c.id = d.county
			     JOIN redistribution_data rd ON rd.source_facility_code = f.facility_code
				 JOIN facility_orders fo ON fo.facility_code = f.facility_code
				WHERE
				        f.facility_code = u.facility
				        AND l.user_id = u.id
                        
				        AND u.facility = f.facility_code
				        AND fi.`issued_by` = u.id
				        AND f.facility_code = analysis;

 WHEN 'district' THEN
   SELECT 
				              
				    f.facility_name as 'Facility Name',
				    f.facility_code as 'Facility Code',
					c.county as 'County',
                    d.district as 'Sub-County',
					MAX(fi.`created_at`) as 'Date Last Issued',
				    IFNULL(DATEDIFF(NOW(), MAX(fi.`created_at`)),0) as 'Days from last issue',
				    MAX(l.end_time_of_event) as 'Date Last Seen',
				    (DATEDIFF(NOW(), MAX(l.end_time_of_event))) as 'Days From Last Seen',
                   
                    
                    (CASE
                         WHEN l.decommissioned = '1' THEN MAX(l.`end_time_of_event`)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Date Last Decommissioned',
                     (CASE
                         WHEN l.decommissioned = '1' THEN IFNULL(DATEDIFF(NOW(), MAX(l.`end_time_of_event`)),0)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Days From Last Decommissioned'

				FROM
				    log l,
				    facilities f,
                    counties c,
				    districts d,
				    facility_issues fi,
                    user u
                    
				WHERE
				        fi.`issued_by` = u.id
				        AND l.user_id = u.id
				        AND u.facility = f.facility_code
				        AND f.district = d.id
						AND fi.facility_code = f.facility_code
				        AND d.id=analysis
				GROUP BY f.facility_code;

WHEN 'county' THEN
   SELECT 
				              
				    f.facility_name as 'Facility Name',
				    f.facility_code as 'Facility Code',
					c.county as 'County',
                    d.district as 'Sub-County',
					MAX(fi.`created_at`) as 'Date Last Issued',
				    IFNULL(DATEDIFF(NOW(), MAX(fi.`created_at`)),0) as 'Days from last issue',
				    MAX(l.end_time_of_event) as 'Date Last Seen',
				    (DATEDIFF(NOW(), MAX(l.end_time_of_event))) as 'Days From Last Seen',
                   
                    
                    (CASE
                         WHEN l.decommissioned = '1' THEN MAX(l.`end_time_of_event`)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Date Last Decommissioned',
                     (CASE
                         WHEN l.decommissioned = '1' THEN IFNULL(DATEDIFF(NOW(), MAX(l.`end_time_of_event`)),0)
                         WHEN l.decommissioned = '0' THEN 0
				     END) AS 'Days From Last Decommissioned'

				FROM
				    log l,
				    facilities f,
                    counties c,
				    districts d,
				    facility_issues fi,
                    user u
                    
				WHERE
				        fi.issued_by = u.id
				        AND l.user_id = u.id
                        AND fi.facility_code = f.facility_code
                        AND d.county = c.id
				        AND u.facility = f.facility_code
				        AND f.district = d.id
				        AND d.county = analysis
				GROUP BY f.facility_name;

END CASE;

END