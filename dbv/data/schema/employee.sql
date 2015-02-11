CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` int(11) NOT NULL,
  `nhif_id` int(11) NOT NULL,
  `kra_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(7) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_employed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1