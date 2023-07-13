CREATE TABLE `prefecture` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nom` varchar NOT NULL,
	`sliderpicture1` varchar NOT NULL,
	`sliderpicture2` varchar NOT NULL,
	`sliderpicture3` varchar NOT NULL,
	`sliderpicture4` varchar NOT NULL,
	`sliderpicture5` varchar NOT NULL,
	`sliderpicture6` varchar NOT NULL,
	`sliderpicture7` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `articles` (
	`id` int NOT NULL AUTO_INCREMENT,
	`titre` varchar(10) NOT NULL,
	`contenu` TEXT NOT NULL,
	`date_creation` TIMESTAMP NOT NULL,
	`lienbrasserie` varchar(100) NOT NULL,
	`picture1` varchar NOT NULL,
	`picture2` varchar NOT NULL,
	`picture3` varchar NOT NULL,
	`picture4` varchar NOT NULL,
	`picture5` varchar NOT NULL,
	`picture6` varchar NOT NULL,
	`recapitulatif_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recapitulatif` (
	`id` int NOT NULL AUTO_INCREMENT,
	`prefecture` varchar(10) NOT NULL,
	`brasserie` varchar(10) NOT NULL,
	`adresse` varchar(100) NOT NULL,
	`marque` varchar(10) NOT NULL,
	`marque2` varchar(10) NOT NULL,
	`marque3` varchar(10) NOT NULL,
	`remarque` TEXT NOT NULL,
	`latitude` FLOAT NOT NULL,
	`longitude` FLOAT NOT NULL,
	`prefecture_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `articles` ADD CONSTRAINT `articles_fk0` FOREIGN KEY (`recapitulatif_id`) REFERENCES `recapitulatif`(`id`);

ALTER TABLE `recapitulatif` ADD CONSTRAINT `recapitulatif_fk0` FOREIGN KEY (`prefecture_id`) REFERENCES `prefecture`(`id`);




