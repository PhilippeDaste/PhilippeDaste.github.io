

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table marques',
  `name` varchar(100) NOT NULL COMMENT 'nom de la marque',
  `created_at` date NOT NULL COMMENT 'date entrée de la date dans la table',
  `updated_at` date NOT NULL COMMENT 'date de modification (rare ?)',
  `brewery_id` int(11) NOT NULL COMMENT 'clé étrangère',
  PRIMARY KEY (`id`),
  KEY `brewery_id` (`brewery_id`),
  CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`brewery_id`) REFERENCES `breweries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`, `brewery_id`) VALUES
(7,	'Dassai 獺祭',	'2023-07-03',	'2023-07-03',	1),
(8,	'Dewasakura 出羽桜',	'2023-07-03',	'2023-07-03',	2),
(9,	'Nanakanba 七冠馬',	'2023-07-03',	'2023-07-03',	3),
(10,	'Shirakabekura 白壁蔵',	'2023-07-03',	'2023-07-03',	4),
(11,	'Mimurosugi 三諸杉',	'2023-08-01',	'2023-08-01',	5);




SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `breweries`;
CREATE TABLE `breweries` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table brasseries',
  `name` varchar(100) NOT NULL COMMENT 'nom de la brasserie',
  `address` varchar(100) NOT NULL COMMENT 'adresse de la brasserie',
  `link` varchar(100) NOT NULL COMMENT 'url de la brasserie',
  `comment` varchar(100) DEFAULT NULL COMMENT 'commentaire Eventuel',
  `latitude` decimal(10,8) DEFAULT NULL COMMENT 'latitude de la brasserie',
  `longitude` decimal(10,8) DEFAULT NULL COMMENT 'longitude de la brasserie',
  `created_at` date NOT NULL COMMENT 'date entrée dans la BDD',
  `updated_at` date NOT NULL COMMENT 'date de modification',
  `prefecture_id` int(11) NOT NULL COMMENT 'clé vers prefecture',
  PRIMARY KEY (`id`),
  KEY `prefecture_id` (`prefecture_id`),
  CONSTRAINT `breweries_ibfk_1` FOREIGN KEY (`prefecture_id`) REFERENCES `prefectures` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `breweries` (`id`, `name`, `address`, `link`, `comment`, `latitude`, `longitude`, `created_at`, `updated_at`, `prefecture_id`) VALUES
(1,	'Asahi 旭',	'〒742-0422 山口県岩国市周東町獺越2167-4',	'https://www.asahishuzo.ne.jp/fr/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	1),
(2,	'Dewasakura 出羽桜',	'〒994-0044 山形県天童市一日町一丁目4番6号',	'https://www.dewazakura.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	2),
(3,	'Hikami 簸上',	'島根県仁多郡奥出雲町横田1222',	'https://sake-hikami.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	3),
(4,	'Takara 宝',	'兵庫県松戸市新作字高田111 〒271-0052',	'https://www.takarashuzo.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	4),
(5,	'Imanishi  今西',	'〒633-0001 奈良県桜井市大字三輪510番地',	'https://imanishisyuzou.com/company/',	NULL,	NULL,	NULL,	'2023-07-15',	'2023-07-15',	5);