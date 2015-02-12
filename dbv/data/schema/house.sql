CREATE TABLE `house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_no` int(11) NOT NULL,
  `housetype_id` int(11) NOT NULL,
  `block` varchar(255) NOT NULL,
  `estate_name` varchar(255) NOT NULL,
  `rent` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1