DROP DATABASE `wflyon`;
CREATE DATABASE `wflyon` COLLATE `utf8_general_ci`;
USE `wflyon`;

/******************** Création des tables ********************/
/* CREATE TABLE Crée une nouvelle table SQL  */
/*************************************************************/

CREATE TABLE `photo` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT NOT NULL,
	`urlphoto` varchar(100) NOT NULL,
	`namephoto` varchar(50) NOT NULL,
	`descphoto` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`username` varchar(60) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`role` varchar(255) NOT NULL UNIQUE,
	`token` varchar(255) NOT NULL,
	`motivation` text CHARACTER SET utf8,
  	`phone` varchar(10) NOT NULL,
  	`confirm` tinyint(1) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `members` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_section` INT NOT NULL,
	`id_user` INT NOT NULL,
	`name` varchar(255) NOT NULL,
	`firstname` varchar(255) NOT NULL,
	`totem` varchar(255),
	`infosup` varchar(255),
	`register` BOOLEAN NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `events` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) NOT NULL DEFAULT 'sans titre',
	`startdate` DATE NOT NULL,
	`enddate` DATE NOT NULL,
	`description` varchar(500) NOT NULL,
	`id_member` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `sections` (
	`id` INT (2) NOT NULL AUTO_INCREMENT,
	`rank` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `gallery` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT(4) NOT NULL,
	`galleryname` varchar(500) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `listemembers` (
	`id_member` INT(4) NOT NULL,
	`id_event` INT (4) NOT NULL
);

CREATE TABLE `documents` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`docname` varchar(255) NOT NULL,
	`docdescription` varchar(500) NOT NULL,
	`date` DATE NOT NULL,
	`docfile` varchar(255) NOT NULL,
	`size` INT(4) NOT NULL,
	`id_categorie` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

/******************** Déclaration des Index ********************/
/*ALTER TABLE ==> Modifie la définition d'une table en changeant, en ajoutant ou en supprimant des colonnes et des contraintes, en réaffectant et reconstruisant des partitions, en désactivant ou en activant des contraintes et des déclencheurs. */
/**************************************************************/

ALTER TABLE `gallery` ADD INDEX(`id_event`);
ALTER TABLE `photo` ADD INDEX(`id_event`);
ALTER TABLE `events` ADD INDEX(`id_member`);
ALTER TABLE `members` ADD INDEX(`id_section`);
ALTER TABLE `members` ADD INDEX(`id_user`);
ALTER TABLE `listemembers` ADD INDEX(`id_member`);
ALTER TABLE `listemembers` ADD INDEX(`id_event`);
ALTER TABLE `Documents` ADD INDEX(`id_categorie`);
ALTER TABLE `Documents` ADD INDEX(`id_categorie`);

/******************** Création des contraintes  ********************/
/*******************************************************************/

ALTER TABLE `listemembers` ADD CONSTRAINT `listemembers_member` FOREIGN KEY (`id_member`) REFERENCES `members`(`id`);
ALTER TABLE `listemembers` ADD CONSTRAINT `listemembers_event` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `gallery` ADD CONSTRAINT `gallery_events` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `photo` ADD CONSTRAINT `Photo_events` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `members` ADD CONSTRAINT `member_users` FOREIGN KEY (`id_user`) REFERENCES `users`(`id`);
ALTER TABLE `members` ADD CONSTRAINT `member_sections` FOREIGN KEY (`id_section`) REFERENCES `sections`(`id`);

/**************************  Création d'information pour test **************************/

/*********** Sections************/
INSERT INTO `sections` (`id`, `rank`) VALUES (NULL, 'Animateur'), (NULL, 'Parent'), (NULL, 'Lutins'), (NULL, 'Louveteaux'), (NULL, 'Éclaireurs'), (NULL, 'Ainés');

/*********** Users ************/
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('nordine', 'nordine', '1', '$2y$10$iCI5Bmf5SlqF.oKuNt6feOW.OHOoC0772gmY3mVrQ46PhbgCGVg26', 'superadmin');
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('fregevu', 'fregevuf@yahoo.fr', '0643163491', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'admin');
INSERT INTO `users` (`username`, `email`, `phone`, `password`, `role`) VALUES ('andre', 'estherandre07@orange.fr', '0', '$2y$10$cFMjZxLjZZHee0Jj7CRHWumafMGZyTshanTZH237f0SvvwW6t2mOW', 'adherent');