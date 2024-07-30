# ************************************************************
# Sequel Ace SQL dump
# Version 20067
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.4.2-MariaDB-ubu2404)
# Database: shirt_collection
# Generation Time: 2024-07-30 09:29:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table shirts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shirts`;

CREATE TABLE `shirts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `team` varchar(255) DEFAULT 'National Team',
  `year_collected` year(4) DEFAULT NULL,
  `shirt_front` varchar(255) NOT NULL,
  `shirt_back` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

LOCK TABLES `shirts` WRITE;
/*!40000 ALTER TABLE `shirts` DISABLE KEYS */;

INSERT INTO `shirts` (`id`, `country`, `team`, `year_collected`, `shirt_front`, `shirt_back`)
VALUES
	(1,'England','National Team','2003','england_front.png','england_back.png'),
	(2,'Mexico','National Team','2023','mexico_front.png','mexico_back.png'),
	(3,'Ghana','National Team','2005','ghana_front.png','ghana_back.png'),
	(4,'Peru','National Team','2016','peru_front.png','peru_back.png'),
	(5,'Honduras','National Team','2006','honduras_front.png','honduras_back.png'),
	(6,'Croatia','National Team','2019','croatia_front.png','croatia_back.png'),
	(7,'Spain','Barcelona','2017','barcelona_front.png','barcelona_back.png');

/*!40000 ALTER TABLE `shirts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
