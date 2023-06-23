CREATE DATABASE IF NOT EXISTS `SAKE_SITE` DEFAULT CHARACTER SET UTF8MB4 COLLATE utf8_general_ci;
USE `SAKE_SITE`;

CREATE TABLE `ARTICLE` (
  `article_code` VARCHAR(42),
  `titre` VARCHAR(42),
  `contenu` VARCHAR(42),
  `date_creation` VARCHAR(42),
  `lien_brasserie` VARCHAR(42),
  `lien_prefecture` VARCHAR(42),
  `image1` VARCHAR(42),
  `image2` VARCHAR(42),
  `image3` VARCHAR(42),
  `image4` VARCHAR(42),
  `image5` VARCHAR(42),
  `image6` VARCHAR(42),
  `prefecture_code` VARCHAR(42),
  `brasserie_code` VARCHAR(42),
  PRIMARY KEY (`article_code`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4;

CREATE TABLE `BRASSERIE` (
  `brasserie_code` VARCHAR(42),
  `prefecture` VARCHAR(42),
  `brasserie` VARCHAR(42),
  `adresse` VARCHAR(42),
  `marque` VARCHAR(42),
  `marque2` VARCHAR(42),
  `marque3` VARCHAR(42),
  `remarque` VARCHAR(42),
  `latitude` VARCHAR(42),
  `longitude` VARCHAR(42),
  PRIMARY KEY (`brasserie_code`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4;

CREATE TABLE `PREFECTURE` (
  `prefecture_code` VARCHAR(42),
  `nom` VARCHAR(42),
  `sliderimage1` VARCHAR(42),
  `sliderimage2` VARCHAR(42),
  `sliderimage3` VARCHAR(42),
  `sliderimage4` VARCHAR(42),
  `sliderimage5` VARCHAR(42),
  `sliderimage6` VARCHAR(42),
  `brasserie_code` VARCHAR(42),
  PRIMARY KEY (`prefecture_code`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4;

ALTER TABLE `ARTICLE` ADD FOREIGN KEY (`brasserie_code`) REFERENCES `BRASSERIE` (`brasserie_code`);
ALTER TABLE `ARTICLE` ADD FOREIGN KEY (`prefecture_code`) REFERENCES `PREFECTURE` (`prefecture_code`);
ALTER TABLE `PREFECTURE` ADD FOREIGN KEY (`brasserie_code`) REFERENCES `BRASSERIE` (`brasserie_code`);