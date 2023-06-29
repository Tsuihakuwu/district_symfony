-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.6.12-MariaDB-0ubuntu0.22.04.1 - Ubuntu 22.04
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour the_district
CREATE DATABASE IF NOT EXISTS `the_district` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `the_district`;

-- Listage de la structure de table the_district. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.categorie : ~0 rows (environ)
DELETE FROM `categorie`;
INSERT INTO `categorie` (`id`, `libelle`, `image`, `active`) VALUES
	(4, 'Pizza', 'pizza_cat.webp', 1),
	(5, 'Burger', 'burger_cat.webp', 1),
	(9, 'Wraps', 'wrap_cat.webp', 1),
	(10, 'Pasta', 'pasta_cat.webp', 1),
	(11, 'Sandwich', 'sandwich_cat.webp', 0),
	(12, 'Asian Food', 'asian_food_cat.webp', 0),
	(13, 'Salade', 'salade_cat.webp', 1),
	(14, 'Veggie', 'veggie_cat.webp', 1);

-- Listage de la structure de table the_district. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6EEAA67DFB88E14F` (`utilisateur_id`),
  CONSTRAINT `FK_6EEAA67DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.commande : ~8 rows (environ)
DELETE FROM `commande`;
INSERT INTO `commande` (`id`, `utilisateur_id`, `date_commande`, `total`, `etat`) VALUES
	(1, 3, '2020-11-30 04:07:17', 20.00, 3),
	(2, 4, '2021-05-04 01:35:34', 10.00, 3),
	(3, 6, '2021-07-20 06:10:37', 7.00, 3),
	(4, 7, '2021-07-20 06:40:21', 8.00, 2),
	(5, 8, '2021-07-20 06:40:57', 6.00, 1),
	(6, 9, '2021-07-20 07:06:06', 20.00, 4),
	(7, 10, '2021-07-20 07:11:06', 12.00, 0),
	(9, 2, '2020-11-30 03:52:43', 16.00, 3);

-- Listage de la structure de table the_district. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.contact : ~14 rows (environ)
DELETE FROM `contact`;
INSERT INTO `contact` (`id`, `objet`, `email`, `message`) VALUES
	(31, 'sqdqsdqs', 'fsdfsdfsd@fdsfdsf.co', 'sqdsqdqd'),
	(32, 'dsfsdf', 'fsdfsdfsd@fdsfdsf.co', 'eaazeaze'),
	(33, 'dsfsdf', 'fsdfsdfsd@fdsfdsf.co', 'eaazeaze'),
	(34, 'dsf', 'fsdfsdfsd@fdsfdsf.co', 'gfdgd'),
	(35, 'hfghfgh', 'fsdfsdfsd@fdsfdsf.co', 'ghfghfhf'),
	(36, 'hfghfgh', 'fsdfsdfsd@fdsfdsf.co', 'ghfghfhf'),
	(37, 'hfghfgh', 'fsdfsdfsd@fdsfdsf.co', 'ghfghfhf'),
	(38, 'sdsds', 'fsdfsdfsd@fdsfdsf.co', 'sdsds'),
	(39, 'sdsdsd', 'fsdfsdfsd@fdsfdsf.co', 'dsdqsdqs'),
	(40, 'hjgjghj', 'fsdfsdfsd@fdsfdsf.co', 'sdqdqsdsq'),
	(41, 'dsfsdf', 'fsdfsdfsd@fdsfdsf.co', 'dsqdsd'),
	(42, 'dsfsdf', 'fsdfsdfsd@fdsfdsf.co', 'dsqdsd'),
	(43, 'hfghfgh', 'fsdfsdfsd@fdsfdsf.co', 'dsfsdfsdfsd'),
	(44, 'hfghfgh', 'fsdfsdfsd@fdsfdsf.co', 'dqsdqsdsq'),
	(45, 'RGPD', 'fsdfsdfsd@fdsfdsf.co', 'oscour');

-- Listage de la structure de table the_district. detail
CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `plat_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2E067F93D73DB560` (`plat_id`),
  KEY `IDX_2E067F9382EA2E54` (`commande_id`),
  CONSTRAINT `FK_2E067F9382EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  CONSTRAINT `FK_2E067F93D73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.detail : ~8 rows (environ)
DELETE FROM `detail`;
INSERT INTO `detail` (`id`, `quantite`, `plat_id`, `commande_id`) VALUES
	(17, 4, 4, 9),
	(18, 2, 5, 1),
	(19, 1, 5, 2),
	(20, 1, 9, 3),
	(21, 2, 10, 4),
	(22, 1, 14, 5),
	(23, 4, 9, 6),
	(24, 4, 16, 7);

-- Listage de la structure de table the_district. messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.messenger_messages : ~0 rows (environ)
DELETE FROM `messenger_messages`;

-- Listage de la structure de table the_district. plat
CREATE TABLE IF NOT EXISTS `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2038A207BCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_2038A207BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.plat : ~12 rows (environ)
DELETE FROM `plat`;
INSERT INTO `plat` (`id`, `libelle`, `description`, `prix`, `image`, `active`, `categorie_id`) VALUES
	(4, 'District Burger', 'Burger composé d\'un bun\'s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .', 8.00, 'hamburger.webp', 1, 5),
	(5, 'Pizza Bianca', 'Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.', 14.00, 'pizza-salmon.webp', 1, 4),
	(9, 'Buffalo Chicken Wrap', 'Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.', 5.00, 'buffalo-chicken.webp', 1, 9),
	(10, 'Cheeseburger', 'Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.', 8.00, 'cheesburger.webp', 1, 5),
	(12, 'Spaghetti aux légumes', 'Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide', 10.00, 'spaghetti-legumes.webp', 1, 10),
	(13, 'Salade César', 'Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l\'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.', 7.00, 'cesar_salad.webp', 1, 13),
	(14, 'Pizza Margherita', 'Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...', 14.00, 'pizza-margherita.webp', 1, 4),
	(15, 'Courgettes farcies au quinoa', 'Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!', 8.00, 'courgettes_farcies.webp', 1, 14),
	(16, 'Lasagnes', 'Découvrez notre recette des lasagnes, l\'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l\'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.', 12.00, 'lasagnes_viande.webp', 1, 10),
	(17, 'Tagliatelles au saumon', 'Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!', 12.00, 'tagliatelles-saumon.webp', 1, 10),
	(18, 'Pizza Royale', 'La pizza Royale est une savoureuse création culinaire, garnie de jambon, champignons, poivrons, oignons et olives noires. Sa croûte croustillante en fait un choix parfait pour les amateurs de pizza. La pizza est cuite à la perfection et est idéale pour une soirée pizza entre amis ou pour une soirée de détente en famille.', 14.90, 'pizza_royale.webp', 1, 4),
	(19, 'Pizza Hawaïenne', 'La pizza hawaïenne est une délicieuse création culinaire originaire de l\'archipel polynésien. Elle est garnie d\'une sauce tomate savoureuse, de mozzarella fondante, de jambon cuit et d\'ananas frais qui apportent une touche sucrée et acidulée. Cette pizza est un choix populaire pour ceux qui cherchent un peu d\'exotisme dans leur repas.', 14.00, 'pizza-hawaienne.webp', 1, 4);

-- Listage de la structure de table the_district. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `is_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table the_district.utilisateur : ~9 rows (environ)
DELETE FROM `utilisateur`;
INSERT INTO `utilisateur` (`id`, `email`, `password`, `nom`, `prenom`, `telephone`, `adresse`, `cp`, `ville`, `roles`, `is_verified`) VALUES
	(1, 'matthias@thedistrict.fr', 'admin1!', 'SERGEANT', 'Matthias', '0606060606', '255 Admin Street', '69000', 'Lyon', '["ROLE_ADMIN"]', 1),
	(2, 'kelly@gmail.com', 'TEST_USER', 'Dillard', 'Kelly', '7896547800', '308 Post Avenue', '10001', 'New York', '["ROLE_USER"]', 0),
	(3, 'thom@gmail.com', 'TEST_USER', 'Gilchrist', 'Thomas', '7410001450', '1277 Sunburst Drive', '90001', 'Los Angeles', '["ROLE_USER"]', 0),
	(4, 'martha@gmail.com', 'TEST_USER', 'Woods', 'Martha', '78540001200', '478 Avenue Street', '60601', 'Chicago', '["ROLE_USER"]', 0),
	(6, 'charlie@gmail.com', 'TEST_USER', 'N/C', 'Charlie', '7458965550', '3140 Bartlett Avenue', '77001', 'Houston', '["ROLE_USER"]', 0),
	(7, 'hedley@gmail.com', 'TEST_USER', 'Hedley', 'Claudia', '7451114400', '1119 Kinney Street', '85001', 'Phoenix', '["ROLE_USER"]', 0),
	(8, 'venno@gmail.com', 'TEST_USER', 'Vargas', 'Vernon', '7414744440', '1234 Hazelwood Avenue', '19101', 'Philadelphie', '["ROLE_USER"]', 0),
	(9, 'carlos@gmail.com', 'TEST_USER', 'Grayson', 'Carlos', '7401456980', '2969 Hartland Avenue', '75201', 'Dallas', '["ROLE_USER"]', 0),
	(10, 'jonathan@gmail.com', 'TEST_USER', 'Caudill', 'Jonathan', '7410256996', '1959 Limer Street', '95101', 'San Jose', '["ROLE_USER"]', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
