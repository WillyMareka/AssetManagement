ALTER TABLE `employee` CHANGE `kra_id` `kra_pin` INT(11) NOT NULL;

ALTER TABLE `employee` CHANGE `nhif_id` `nhif_no` INT(11) NOT NULL;

ALTER TABLE `assetmanagement`.`tenant_house` 
ADD INDEX `house_idx` (`house_id` ASC);
ALTER TABLE `assetmanagement`.`tenant_house` 
ADD CONSTRAINT `house`
  FOREIGN KEY (`house_id`)
  REFERENCES `assetmanagement`.`house` (`house_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


ALTER TABLE `assetmanagement`.`tenant_house` 
ADD INDEX `tenant_house_idx` (`tenant_id` ASC);
ALTER TABLE `assetmanagement`.`tenant_house` 
ADD CONSTRAINT `tenant_house`
  FOREIGN KEY (`tenant_id`)
  REFERENCES `assetmanagement`.`tenant` (`tenant_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;