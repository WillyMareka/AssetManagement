CREATE TABLE `house_assign` (
  `ha_id` int(11) NOT NULL AUTO_INCREMENT,
  `ha_houseid` int(11) NOT NULL,
  `ha_block` varchar(255) NOT NULL,
  `ha_tenantid` int(11) NOT NULL,
  `ha_houseno` int(11) NOT NULL,
  `ha_estate` varchar(255) NOT NULL,
  `ha_pnumber` int(11) NOT NULL,
  `ha_rent` int(11) NOT NULL,
  `ha_housetype` varchar(255) NOT NULL,
  `ha_national` varchar(255) NOT NULL,
  `ha_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ha_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1