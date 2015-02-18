ALTER TABLE `assetmanagement`.`house` 
ADD INDEX `housetype_idx` (`housetype_id` ASC);
ALTER TABLE `assetmanagement`.`house` 
ADD CONSTRAINT `housetype`
  FOREIGN KEY (`housetype_id`)
  REFERENCES `assetmanagement`.`house_type` (`housetype_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
