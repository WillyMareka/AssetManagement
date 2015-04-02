CREATE TABLE `deduction_allowance` (
  `da_id` int(11) NOT NULL AUTO_INCREMENT,
  `da_name` varchar(255) NOT NULL,
  `da_type` varchar(255) NOT NULL,
  PRIMARY KEY (`da_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1