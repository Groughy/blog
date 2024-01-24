-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `Categories` (`id`, `name`) VALUES
(1,	'Loisir'),
(2,	'Jeux');

INSERT INTO `Comments` (`id`, `content`, `addTime`, `posts_id`, `users_id`) VALUES
(1,	'BRAVO',	'2024-01-23 11:24:40',	1,	2),
(2,	'Franchement, peut mieux faire !',	'2024-01-23 00:00:00',	3,	4),
(3,	'A fond la forme !',	'2024-01-23 00:00:00',	3,	5);

INSERT INTO `Posts` (`id`, `title`, `content`, `dateFrom`, `dateUntil`, `priority`, `users_id`) VALUES
(1,	'Sport',	'Biathlon',	'2024-01-23 00:00:00',	'2024-01-30 00:00:00',	0,	5),
(3,	'J\'écris un fake article',	'C\'est l\'article de la mort qui tue',	'2024-01-23 00:00:00',	'2024-01-30 00:00:00',	3,	3),
(4,	'A',	'AAAAAAAA',	'2024-01-24 15:29:39',	'2024-01-30 00:00:00',	NULL,	5),
(5,	'B',	'BBBBBBBB',	'2024-01-24 15:29:59',	'2024-01-30 00:00:00',	NULL,	2),
(6,	'C',	'CCCCCCCCC',	'2024-01-24 15:30:15',	'2024-01-30 00:00:00',	NULL,	3),
(7,	'D',	'DDDDDDDDD',	'2024-01-24 15:30:30',	'2024-01-30 00:00:00',	NULL,	2),
(8,	'E',	'EEREEEEEE',	'2024-01-24 15:30:43',	'2024-01-30 00:00:00',	NULL,	3),
(9,	'F',	'FFFFFFFFF',	'2024-01-23 00:00:00',	'2024-01-30 00:00:00',	NULL,	3),
(10,	'G',	'GGGGGGGGGGGGGG',	'2024-01-24 15:36:54',	'2024-01-30 00:00:00',	NULL,	2),
(11,	'H',	'HHHHHHHHHHHH',	'2024-01-24 15:37:05',	'2024-01-30 00:00:00',	NULL,	5),
(12,	'I',	'IIIIIIIIIIIIIIIII',	'2024-01-24 15:37:21',	'2024-01-30 00:00:00',	NULL,	5);

INSERT INTO `Posts_has_Categories` (`posts_id`, `categories_id`) VALUES
(1,	1),
(3,	2);

INSERT INTO `Users` (`id`, `nickname`, `name`, `firstName`) VALUES
(2,	'Val',	NULL,	'Valentine'),
(3,	'Sébastien',	NULL,	'Sébastien'),
(4,	'Blue',	NULL,	'Titi'),
(5,	'Sandrine',	NULL,	'Sandrine');

-- 2024-01-24 14:45:35
