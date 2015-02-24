CREATE TABLE `tenant_payment` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenant_id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `transaction_no` varchar(255) NOT NULL,
  `payment_for` varchar(255) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `date_of_payment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1