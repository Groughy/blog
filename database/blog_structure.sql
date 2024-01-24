-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Categories`;
CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Categories_has_Posts`;
CREATE TABLE `Categories_has_Posts` (
  `categories_id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  PRIMARY KEY (`categories_id`,`posts_id`),
  KEY `fk_Categories_has_Posts_Posts1_idx` (`posts_id`),
  KEY `fk_Categories_has_Posts_Categories1_idx` (`categories_id`),
  CONSTRAINT `fk_Categories_has_Posts_Categories1` FOREIGN KEY (`categories_id`) REFERENCES `Categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categories_has_Posts_Posts1` FOREIGN KEY (`posts_id`) REFERENCES `Posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Comments`;
CREATE TABLE `Comments` (
  `id` int(11) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `content` varchar(150) DEFAULT NULL,
  `addTime` datetime DEFAULT NULL,
  `posts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_COMMENTAIRES_POSTS1_idx` (`posts_id`),
  CONSTRAINT `Comments_ibfk_2` FOREIGN KEY (`posts_id`) REFERENCES `Posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Posts`;
CREATE TABLE `Posts` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(150) DEFAULT NULL,
  `dateFrom` datetime DEFAULT NULL,
  `dateUntil` datetime DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_POSTS_USERS1_idx` (`users_id`),
  CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname_UNIQUE` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-01-24 12:01:38
