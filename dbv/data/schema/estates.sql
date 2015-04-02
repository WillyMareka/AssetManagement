CREATE TABLE `estates` (
  `estate_id` int(11) NOT NULL AUTO_INCREMENT,
  `estate_name` varchar(255) NOT NULL,
  `estate_status` tinyint(1) NOT NULL DEFAULT '1',
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`estate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1