-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table articles',
  `title` varchar(100) NOT NULL COMMENT 'nom de la table',
  `content` text NOT NULL COMMENT 'contenu de l''article',
  `created_at` date NOT NULL COMMENT 'date de rédaction de l''article',
  `updated_at` date NOT NULL COMMENT 'date de modification de l''article',
  `brewery_id` int(11) NOT NULL COMMENT 'lien vers la table brewery',
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brewery_id` (`brewery_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`brewery_id`) REFERENCES `breweries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`, `brewery_id`, `slug`) VALUES
(1,	'Réception pour l\'anniversaire de l\'empereur  le 18 mars 2023',	'Jusqu\'à récemment mes activités avec l\'ambassade du Japon me permettaient d\'être invité à la réception annuelle à l\'occasion de l\'anniversaire de l\'empereur.\r\nPoint notable supplémentaire, notre anniversaire tombait les même jour et mois, le 23 décembre. Changement avec le nouvel empereur, ce n\'est plus le jour anniversaire que nous avons en commun mais le jour et l\'année de naissance. Ce dernier étant né en début d\'année, cela permet de faire la réception par un temps plus clément et ainsi de profiter du jardin. Très belle réception encore cette année, Pierre Hermé était invité et à été décoré par M.l\'Ambassadeur. Plein de bonnes choses et, bien sûr, quelques sake a déguster. Je vous reparlerais du Mizubasho, dont j\'ai un peu abusé, du Asamurasaki, sans odeur mais d\'une belle couleur orange/rosé, et du Kagatori.\r\nMais le sujet du jour c\'est bien le Shichikanba 七冠馬.\r\nLa chose intéressante est que le logo de cette marque ressemble à un fer à cheval (teitetsu 蹄鉄) car cette marque est liée à une course de chevaux (kyousouba 競走馬). Ce que j\'ai appris le lendemain en me rendant sur le site. Anecdote, comme la réception se terminait et que je discutais encore avec la dame qui présentait ce sake elle m\'a donné la bouteille entamée.\r\n',	'2023-05-15',	'2023-07-03',	3,	'reception-pour-lanniversaire-de-lempereur'),
(2,	'Je bois à une belle journée : shirakabekura 白壁蔵',	'Le nom ne m\'est pas in connu mais je n\'ai pu visiter cette maison lors de mon passage à Kobe : trop de pluie ce jour là. L\'entreprise est intéressante, sur son site on trouve clairement affiché une vocation écologiste (kankyoukatsudou 環境活動). Certes, c\'est le cas de nombreuses marques de sake qui insistent souvent sur la pureté des ingrédients : riz, eau, levure. Mais parmis les grands producteurs c\'est encore une rareté. Deux marques dominent : Mio et Shirakabekura.\r\nMio 澪 (remou, sillage) est une marque de sake pétillant lancée en 2011. On la trouve assez communément en France. Elle titre 5%, ce qui en fait une intéressante boissons d\'apéritif.\r\nShirakabekura est certainnement moins connu et ma surprise a été grande de\'en trouver dans une boutique du 13 ème arrondissement. D\'autant plus intéressante a été cette trouvaille que c\'est le Kimoto de la maison qui était en vente : l\'occasion de faire coup double. Bien entendu, le prix aussi était doublé... 21,80€ au lieu de 1200 Yens (10€ environ).',	'2023-05-02',	'2023-05-02',	4,	'belle-journee-shirakabekura'),
(3,	'Fini l\'encombrement du buffet avec mes bouteilles de Dewasakura 出羽桜',	'Fin du premier mois de formation, l\'occasion d\'avancer mon site web et donc de faire aussi un peu de ménage dans les bouteilles vides...\r\nVoici plus de 1 an que je décore le buffet de jolies bouteilles de sake. Commendées au Japon elles sont arrivées en France dans des valises. Au fur et à mesure des retours de voyage. Impossible de me souvenir dans quel ordre elles ont été bues. Impossible aussi de les comparer lors d\'une dégustation.\r\nElles ont toutefois chacune leur originalité.\r\nEn commençant de gauche à droite dans l\'ordre de l\'image :\r\nLa première bouteille, un junmai daiginjo (純米 大吟醸), porte le label GI (Geographical Indication). En effet, le riz utilisé, Yukimekami 雪女神, a été créé à Yamagata il y a plus de 30 ans pour un concours. On ne le trouve que dans ce sake.\r\nLa seconde bouteille, Dewa non sato 出羽の里, sous son air banal et bien qu\'il soit un simple junmai (純米酒) a reçu maint prix dans les concours internationaux.\r\nLa troisième, porte elle aussi un label d\'indication géographique, celui-ci spécifique à Yamagata. Dewa33 (33 peut se lire sansan) est son nom. Sansan (燦々) signifiant brillant en français.\r\nLa bouteille suivante, un junmai daiginjo (純米 大吟醸).\r\nutilise lui aussi une variété rare de riz : Yukiwakamaru (雪若丸). Ce riz est donné comme le \"frère cadet\" du Tsuyahime vu ci-après. Lui aussi est regardé comme un des porte-drapeau des riz de Yamagata. Plus jeune, de 9 ans, il est aussi considéré comme plus \"masculin\" car un peu moins doux et collant. Une appréciations difficile à confirmer pour moi mais étudiée très sérieusement au Japon :\r\nEvaluation du riz Evaluation détaillée\r\nLa 5 ème bouteille, un junmai ginjo (純米 吟醸), bénéficie de l\'emploi du riz Omachi (雄町). Le Omachi est originaire de la préfecture d’Okayama. Découverte en 1889, c’est une variété de riz extrêmement ancienne encore cultivée de nos jours. Elle représente environ 3% de la production et 90% de cette production se fait dans le département de Okayama. Nous sommes loin de Yamagata. Une quarantaine de brasseries utilisent, de base, cette variété.\r\nFinalement, dernière bouteille, un junmai ginjo (純米 吟醸) fait à 100% de Tsuyahime : つや姫. Autre porte drapeau du riz de Yamagata, celui-ci ne peut être cultivé que dans des zones autorisées par le Département de la promotion et du planning des variétés ! (ブランド化戦略推進本部長). Aucun engrais chimique n\'est toléré. Qui plus est, après la récolte, le taux de protéines est évalué et ne doit pas dépasser 6,4% !!',	'2023-04-15',	'2023-04-15',	2,	'bouteilles-de-dewasakura'),
(4,	'Une rencontre fortuite : Mimurosugi 三諸杉',	'C\'est à Nara, dans une petite boutique près de la gare, sur le conseil du gérant (grognon) que j\'ai acheté, et bu, du sake Mimurosugi 三諸杉 de la maison Imanishi. Sans le savoir, 4 jours plus tard nous sommes passés à Miwa (三輪) au terme d\'une longue promenade et avons mangé des célèbres nouilles de Miwa (chez そうめん処 森正). près du Omiwa jinga (大神神社) et encore plus près de la brasserie Imanishi... Un junmai \"spécial\" 特別純米 extrêmement agréable à boire avec deux particularités :\r\nUn riz assez rare venant exclusivement du département de Nara : Tsuyuhakaze 露葉風.\r\nUne levure particulière : Yamanokami 山乃かみ酵母. Cette levure est tirée de la fleur de Lys (Lys rouge ou encore Lys araignée). Au Japon cette fleur pousse communément le long des routes, des rizières et des cours d\'eau. Elle est parfois surnommée « fleur des morts » ou « fleur de l’au-delà » en raison de son importante présence à proximité des cimetières. Peu appréciée de ma femme, les Japonais l’utilisent pour fleurir les tombeaux, elle est le symbole de la séparation définitive. Loin de cette croyance, j\'apprécie, moi, simplement, sa couleur rouge en automne et son élégance.\r\nUn résultat exceptionnel. Ni trop doux, ni trop sec, pour moi un équilibre parfait. A boire sans soif, pour lui même.\r\n\r\nPour les connaisseurs on se référera au film Higanbana (彼岸花) de Ozu.\r\nPremier film d\'Ozu tourné en couleur, il brosse un émouvant portrait de père de famille tiraillé entre conservatisme et progressisme mais aussi en creux celui de femmes en opposition. Le scénario : Wataru Hirayama se montre fort réticent lorsqu\'il apprend que sa fille Setsuko refuse le mariage qu\'il a arrangé pour elle. C\'est contre sa volonté qu\'il assiste au mariage. Le couple part ensuite pour Hiroshima. Poussé par ses amis, Hirayama surmonte ses convictions et va leur rendre visite. Un parallèle avec la fleur qui veut que lorsqu\'elle fleurit les feuilles tombent et que lorsque les feuilles poussent les fleurs se fanent. Impossible rencontre.',	'2023-04-02',	'2023-04-02',	5,	'rencontre-fortuite-mimurosugi');

DROP TABLE IF EXISTS `articles_images`;
CREATE TABLE `articles_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table des images des articles',
  `link` varchar(100) NOT NULL COMMENT 'lien vers les images de l''article',
  `created_at` date NOT NULL COMMENT 'date de creation de l''image',
  `updated_at` date NOT NULL COMMENT 'modification de l''image',
  `articles_id` int(11) NOT NULL COMMENT 'lien vers la table articles',
  PRIMARY KEY (`id`),
  KEY `articles_id` (`articles_id`),
  CONSTRAINT `articles_images_ibfk_1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `articles_images` (`id`, `link`, `created_at`, `updated_at`, `articles_id`) VALUES
(1,	'\"../images/images_sake/shichikanba_recadré.png\"',	'2023-07-16',	'2023-07-16',	1),
(2,	'\"../images/images_sake/Shirakabekura_Kimoto.jpg\"',	'2023-07-16',	'2023-07-16',	2),
(3,	'\"../images/images_sake/Dewasakura/Mes_Dewasakura.PNG\"',	'2023-07-16',	'2023-07-16',	3),
(4,	'\"../images/images_sake/Mimurosugi.png\"',	'2023-07-16',	'2023-07-16',	4);

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table marques',
  `brand_name` varchar(100) NOT NULL COMMENT 'nom de la marque',
  `created_at` date NOT NULL COMMENT 'date entrée de la date dans la table',
  `updated_at` date NOT NULL COMMENT 'date de modification (rare ?)',
  `brewery_id` int(11) NOT NULL COMMENT 'clé étrangère',
  PRIMARY KEY (`id`),
  KEY `brewery_id` (`brewery_id`),
  CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`brewery_id`) REFERENCES `breweries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`, `brewery_id`) VALUES
(7,	'Dassai 獺祭',	'2023-07-03',	'2023-07-03',	1),
(8,	'Dewasakura 出羽桜',	'2023-07-03',	'2023-07-03',	2),
(9,	'Nanakanba 七冠馬',	'2023-07-03',	'2023-07-03',	3),
(10,	'Shirakabekura 白壁蔵',	'2023-07-03',	'2023-07-03',	4),
(11,	'Mimurosugi 三諸杉',	'2023-08-01',	'2023-08-01',	5);

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
  CONSTRAINT `breweries_ibfk_1` FOREIGN KEY (`prefecture_id`) REFERENCES `prefecture` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `breweries` (`id`, `name`, `address`, `link`, `comment`, `latitude`, `longitude`, `created_at`, `updated_at`, `prefecture_id`) VALUES
(1,	'Asahi 旭',	'〒742-0422 山口県岩国市周東町獺越2167-4',	'https://www.asahishuzo.ne.jp/fr/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	1),
(2,	'Dewasakura 出羽桜',	'〒994-0044 山形県天童市一日町一丁目4番6号',	'https://www.dewazakura.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	2),
(3,	'Hikami 簸上',	'島根県仁多郡奥出雲町横田1222',	'https://sake-hikami.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	3),
(4,	'Takara 宝',	'兵庫県松戸市新作字高田111 〒271-0052',	'https://www.takarashuzo.co.jp/',	NULL,	NULL,	NULL,	'2023-07-03',	'2023-07-03',	4),
(5,	'Imanishi  今西',	'〒633-0001 奈良県桜井市大字三輪510番地',	'https://imanishisyuzou.com/company/',	NULL,	NULL,	NULL,	'2023-07-15',	'2023-07-15',	5);

DROP TABLE IF EXISTS `prefecture`;
CREATE TABLE `prefecture` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table',
  `name` varchar(100) NOT NULL COMMENT 'nom de la préfecture',
  `created_at` date NOT NULL COMMENT 'date d''entrée en base',
  `updated_at` date NOT NULL COMMENT 'date de modification',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `prefecture` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Yamaguchi 山口',	'2023-07-03',	'2023-07-03'),
(2,	'Yamagata 山形',	'2023-07-03',	'2023-07-03'),
(3,	'Shimane 島根',	'2023-07-03',	'2023-07-03'),
(4,	'Hyogo 兵庫',	'2023-07-03',	'2023-07-03'),
(5,	'Nara 奈良',	'2023-07-15',	'2023-07-15');

DROP TABLE IF EXISTS `prefecture_images`;
CREATE TABLE `prefecture_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la table images de la préfecture',
  `prefecture_images_link` varchar(100) NOT NULL COMMENT 'lien vers les images de la préfecture (slider)',
  `created_at` date NOT NULL COMMENT 'date d''introduction de l''image',
  `updated_at` date NOT NULL COMMENT 'date de modification de l''image',
  `prefecture_id` int(11) NOT NULL COMMENT 'clé étrangère vers prefecture',
  PRIMARY KEY (`id`),
  KEY `prefecture_id` (`prefecture_id`),
  CONSTRAINT `prefecture_images_ibfk_1` FOREIGN KEY (`prefecture_id`) REFERENCES `prefecture` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;