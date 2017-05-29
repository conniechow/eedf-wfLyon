DROP DATABASE `wflyon`;
CREATE DATABASE `wflyon` COLLATE 1utf8_general_ci;
USE `wflyon`;

/******************** Création des tables ********************/
/* CREATE TABLE Crée une nouvelle table SQL  */
/*************************************************************/

CREATE TABLE `Photo` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT NOT NULL,
	`urlphoto` varchar(100) NOT NULL,
	`namephoto` varchar(50) NOT NULL,
	`descphoto` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Users` (
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

CREATE TABLE `Participant` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_section` INT NOT NULL,
	`id_user` INT NOT NULL,
	`name` varchar(255) NOT NULL,
	`firstname` varchar(255) NOT NULL,
	`pseudo` varchar(255),
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
	`id_participant` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Sections` (
	`id` INT (2) NOT NULL AUTO_INCREMENT,
	`rank` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Gallery` (
	`id` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT(4) NOT NULL,
	`galleryname` varchar(500) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ListeParticipants` (
	`id_participant` INT(4) NOT NULL,
	`id_event` INT (4) NOT NULL
);

CREATE TABLE `Documents` (
	`id` INT(4) NOT NULL AUTO_INCREMENT,
	`docname` varchar(255) NOT NULL,
	`docdescription` varchar(500) NOT NULL,
	`date` DATE NOT NULL,
	`docfile` varchar(255) NOT NULL,
	`size` INT(4) NOT NULL,
	PRIMARY KEY (`id`)
);


/******************** Déclaration des Index ********************/
/*ALTER TABLE ==> Modifie la définition d'une table en changeant, en ajoutant ou en supprimant des colonnes et des contraintes, en réaffectant et reconstruisant des partitions, en désactivant ou en activant des contraintes et des déclencheurs. */
/**************************************************************/

ALTER TABLE `gallery` ADD INDEX(`id_event`);
ALTER TABLE `photo` ADD INDEX(`id_event`);
ALTER TABLE `events` ADD INDEX(`id_participant`);
ALTER TABLE `participant` ADD INDEX(`id_section`);
ALTER TABLE `participant` ADD INDEX(`id_user`);
ALTER TABLE `listeparticipants` ADD INDEX(`id_participant`);
ALTER TABLE `listeparticipants` ADD INDEX(`id_event`);


/******************** Création des contraintes  ********************/
/*******************************************************************/
/*
A refaire 

*/

ALTER TABLE `listeparticipants` ADD CONSTRAINT `listeparticipants_participant` FOREIGN KEY (`id_participant`) REFERENCES `participant`(`id`);
ALTER TABLE `listeparticipants` ADD CONSTRAINT `listeparticipants_event` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `gallery` ADD CONSTRAINT `gallery_events` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `photo` ADD CONSTRAINT `Photo_events` FOREIGN KEY (`id_event`) REFERENCES `events`(`id`);
ALTER TABLE `participant` ADD CONSTRAINT `participant_users` FOREIGN KEY (`id_user`) REFERENCES `users`(`id`);
ALTER TABLE `participant` ADD CONSTRAINT `participant_sections` FOREIGN KEY (`id_section`) REFERENCES `sections`(`id`);

/**************************  Création d'information pour test **************************/

/*********** SECTION ************/
INSERT INTO `sections` (`id`, `rank`) VALUES (NULL, 'Animateur'), (NULL, 'Parent'), (NULL, 'Lutins'), (NULL, 'Louveteaux'), (NULL, 'Éclaireurs'), (NULL, 'Ainés');
