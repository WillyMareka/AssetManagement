ALTER TABLE `estates` ADD `location` TEXT NOT NULL AFTER `estate_name`;

ALTER TABLE `estates` CHANGE `location` `estate_location` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `estates` ADD `map_description` TEXT NOT NULL AFTER `date_registered`;

ALTER TABLE `estates` CHANGE `estate_location` `estate_location` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;