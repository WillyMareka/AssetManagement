ALTER TABLE `assetmanagement`.`da_jobgroup` 
DROP FOREIGN KEY `da_jobgroup`;
ALTER TABLE `assetmanagement`.`da_jobgroup` 
ADD CONSTRAINT `da_jobgroup`
  FOREIGN KEY (`jg_id`)
  REFERENCES `assetmanagement`.`job_group` (`jg_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
  
  
ALTER TABLE `assetmanagement`.`da_jobgroup` 
DROP FOREIGN KEY `deduction_allowance`;
ALTER TABLE `assetmanagement`.`da_jobgroup` 
ADD CONSTRAINT `deduction_allowance`
  FOREIGN KEY (`da_id`)
  REFERENCES `assetmanagement`.`deduction_allowance` (`da_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
  
ALTER TABLE `assetmanagement`.`payments` 
DROP FOREIGN KEY `emp_job_group`;
ALTER TABLE `assetmanagement`.`payments` 
ADD CONSTRAINT `emp_job_group`
  FOREIGN KEY (`ejg_id`)
  REFERENCES `assetmanagement`.`employee_job_group` (`ejg_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
  
  ALTER TABLE `assetmanagement`.`employee_penalties` 
ADD CONSTRAINT `employee_job_group`
  FOREIGN KEY (`ejg_id`)
  REFERENCES `assetmanagement`.`employee_job_group` (`ejg_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
