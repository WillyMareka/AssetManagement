CREATE TABLE `house_type` (
  `housetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`housetype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1