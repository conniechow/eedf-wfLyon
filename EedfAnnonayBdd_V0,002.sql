/******************** Création des tables ********************/
/* CREATE TABLE Crée une nouvelle table SQL  */
/*************************************************************/

CREATE TABLE `Photo` (
	`id_photo` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT NOT NULL,
	`urlphoto` varchar(100) NOT NULL,
	`namephoto` varchar(50) NOT NULL,
	`descphoto` varchar(255) NOT NULL,
	PRIMARY KEY (`id_photo`)
);

CREATE TABLE `Users` (
	`id_user` INT (4) NOT NULL AUTO_INCREMENT,
	`username` varchar(60) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`role` varchar(255) NOT NULL UNIQUE,
	`token` varchar(255) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `Participant` (
	`id_participant` INT (4) NOT NULL AUTO_INCREMENT,
	`id_section` INT NOT NULL,
	`id_user` INT NOT NULL,
	`name` varchar(255) NOT NULL,
	`firstname` varchar(255) NOT NULL,
	`pseudo` varchar(255),
	`infosup` varchar(255),
	PRIMARY KEY (`id_participant`)
);

CREATE TABLE `events` (
	`id_event` INT (4) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) NOT NULL DEFAULT 'sans titre',
	`startdate` DATE NOT NULL,
	`enddate` DATE NOT NULL,
	`description` varchar(500) NOT NULL,
	`id_participant` INT NOT NULL,
	PRIMARY KEY (`id_event`)
);

CREATE TABLE `Sections` (
	`id_section` INT (2) NOT NULL AUTO_INCREMENT,
	`rank` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`id_section`)
);

CREATE TABLE `Gallery` (
	`id_gallery` INT (4) NOT NULL AUTO_INCREMENT,
	`id_event` INT(4) NOT NULL,
	`galleryname` varchar(500) NOT NULL,
	PRIMARY KEY (`id_gallery`)
);

CREATE TABLE `ListeParticipants` (
	`id_participant` INT(4) NOT NULL,
	`id_event` INT (4) NOT NULL
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

ALTER TABLE `listeparticipants` ADD CONSTRAINT `listeparticipants_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`);
ALTER TABLE `Photo` ADD CONSTRAINT `Photo_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events`(`id_event`);
ALTER TABLE `Users` ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Participant`(`id_user`);
ALTER TABLE `Participant` ADD CONSTRAINT `Participant_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `ListeParticipants`(`id_participant`);
ALTER TABLE `events` ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `Gallery`(`id_event`);
ALTER TABLE `Sections` ADD CONSTRAINT `Sections_ibfk_1` FOREIGN KEY (`id_section`) REFERENCES `Participant`(`id_section`);