CREATE TABLE `da_jobgroup` (
  `dajg_id` int(11) NOT NULL AUTO_INCREMENT,
  `da_id` int(11) NOT NULL,
  `jg_id` int(11) NOT NULL,
  PRIMARY KEY (`dajg_id`),
  KEY `da_jobgroup_idx` (`jg_id`),
  KEY `deduction_allowance_idx` (`da_id`),
  CONSTRAINT `da_jobgroup` FOREIGN KEY (`jg_id`) REFERENCES `job_group` (`jg_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `deduction_allowance` FOREIGN KEY (`da_id`) REFERENCES `deduction_allowance` (`da_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1