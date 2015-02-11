CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `ejg_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `payment_for` varchar(255) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `emp_job_group_idx` (`ejg_id`),
  CONSTRAINT `emp_job_group` FOREIGN KEY (`ejg_id`) REFERENCES `employee_job_group` (`ejg_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1