-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `Categories` (`id`, `name`) VALUES
(1,	'Loisir'),
(2,	'Jeux');


INSERT INTO `Comments` (`id`, `nickname`, `content`, `addTime`, `posts_id`) VALUES
(1,	'Sébastien',	'BRAVO',	'2024-01-23 11:24:40',	1),
(2,	'Matéo',	'Franchement, peut mieux faire !',	'2024-01-23 00:00:00',	3),
(3,	'Sandrine',	'A fond la forme !',	'2024-01-23 00:00:00',	3);

INSERT INTO `Posts` (`id`, `title`, `content`, `dateFrom`, `dateUntil`, `priority`, `users_id`) VALUES
(1,	'Sport',	'Biathlon',	'2024-01-23 00:00:00',	'2024-01-30 00:00:00',	0,	5),
(3,	'J\'écris un fake article',	'C\'est l\'article de la mort qui tue',	'2024-01-23 00:00:00',	'2024-01-30 00:00:00',	3,	3);

INSERT INTO `Users` (`id`, `nickname`, `name`, `surname`) VALUES
(2,	'Val',	NULL,	'Valentine'),
(3,	'Sébastien',	NULL,	'Sébastien'),
(4,	'Blue',	NULL,	'Titi'),
(5,	'Sandrine',	NULL,	'Sandrine');

-- 2024-01-24 09:57:35
