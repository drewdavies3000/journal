DROP DATABASE IF EXISTS `journal`;
CREATE DATABASE IF NOT EXISTS `journal`;
USE `journal`;
CREATE TABLE `journal_entries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `journal_entry` varchar(255) NOT NULL,
  `author_name` varchar(20) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
);
