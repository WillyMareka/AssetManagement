CREATE TABLE `employee_job_group` (
  `ejg_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_group_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`ejg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1