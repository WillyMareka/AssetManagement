ALTER TABLE `tenant_payment` CHANGE `payment_for` `rent` TINYINT(1) NOT NULL;

ALTER TABLE `tenant_payment` CHANGE `amount_paid` `rent_paid` INT(11) NOT NULL;

ALTER TABLE `tenant_payment` ADD `security` TINYINT(1) NOT NULL AFTER `rent_paid`;

ALTER TABLE `tenant_payment` ADD `security_paid` INT(11) NOT NULL AFTER `security`;

ALTER TABLE `tenant_payment` ADD `maintenance` TINYINT(1) NOT NULL AFTER `security_paid`;

ALTER TABLE `tenant_payment` ADD `maintenance_paid` INT(11) NOT NULL AFTER `maintenance`;