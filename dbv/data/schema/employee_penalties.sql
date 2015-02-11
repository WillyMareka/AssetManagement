CREATE TABLE `employee_penalties` (
  `ep_id` int(11) NOT NULL AUTO_INCREMENT,
  `ejg_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `penalty_for` varchar(255) NOT NULL,
  `month_for` date NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`ep_id`),
  KEY `emp_job_group_idx` (`ejg_id`),
  CONSTRAINT `employee_job_group` FOREIGN KEY (`ejg_id`) REFERENCES `employee_job_group` (`ejg_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1