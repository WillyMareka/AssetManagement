CREATE TABLE `job_group` (
  `jg_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_group` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`jg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1