ALTER TABLE `users` ADD `user_status` TINYINT NOT NULL AFTER `user_type`;

ALTER TABLE `users` ADD `date_registered` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `user_status`;

ALTER TABLE `users` CHANGE `user_type` `user_type` TINYINT(1) NOT NULL;

ALTER TABLE `users` CHANGE `user_status` `activated` TINYINT(1) NOT NULL;