-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `Categories` (`id`, `name`)
VALUES (1, 'Loisir'),
       (2, 'Jeux');

INSERT INTO `Comments` (`id`, `content`, `addTime`, `posts_id`, `users_id`)
VALUES (1, 'BRAVO', '2024-01-23 11:24:40', 1, 2),
       (2, 'Franchement, peut mieux faire !', '2024-01-23 00:00:00', 3, 4),
       (3, 'A fond la forme !', '2024-01-23 00:00:00', 3, 5);

INSERT INTO `Posts` (`id`, `title`, `content`, `dateFrom`, `dateUntil`, `priority`, `users_id`)
VALUES (1, 'L\'ascension d\'Arthas Menethil', 'Arthas Menethil, prince de Lordaeron, a connu une destinée tragique en cherchant à sauver son peuple du Fléau. Consumé par le pouvoir du Roi-Liche, il devint le chevalier de la mort et le principal antagoniste de l\'extension "Wrath of the Lich King".', NOW(), NOW(), 1, 1),
    (2, 'Le parcours de Jaina Proudmoore', 'Jaina Proudmoore, sorcière puissante, a joué un rôle crucial dans la Troisième Guerre. Après la destruction de Theramore, elle a occupé des positions clés pour l\'Alliance, naviguant entre la recherche de la paix et la défense de ses principes.', NOW(), NOW(), 1, 2),
       (3, 'Illidan Stormrage : Héros ou Vilain ?', 'Illidan Stormrage, frère de Malfurion, a sacrifié une partie de lui-même pour obtenir un pouvoir immense pendant la Troisième Guerre. Ses actions controversées ont fait de lui un personnage complexe, luttant entre sa soif de pouvoir et son désir de protéger Azeroth.', NOW(), NOW(), 1, 3),
(4, 'Tyrande Whisperwind : Gardienne d\'Elune', 'Tyrande Whisperwind, haute-prêtresse des Elfes de la Nuit, a joué un rôle crucial dans la défense de Kalimdor contre l\'invasion démoniaque. Son leadership pendant la Troisième Guerre a été essentiel pour la survie de son peuple.', NOW(), NOW(), 1, 4),
(5, 'Malfurion Stormrage : Gardien d\'Elune', 'Malfurion Stormrage, archidruide des Elfes de la Nuit, a été un leader clé pendant la Troisième Guerre. Son expertise dans la magie druidique a été cruciale pour la survie de Kalimdor face à la menace démoniaque.', NOW(), NOW(), 1, 5),
       (6, 'Sylvanas Windrunner : Reine Banshee des Réprouvés', 'Sylvanas Windrunner, autrefois ranger générale elfe, est devenue la reine banshee des Réprouvés après sa mort aux mains d\'Arthas. Sa quête de vengeance et son leadership complexe ont façonné le destin des Réprouvés.', NOW(), NOW(), 1, 6),
       (7, 'Kel\'Thuzad : Liche de Naxxramas', 'Kel\'Thuzad, autrefois puissant mage de Dalaran, fut corrompu par le Roi-Liche pour devenir l\'un des principaux architectes de la propagation du Fléau pendant la Troisième Guerre. Sa résurrection en tant que liche a marqué un tournant crucial.', NOW(), NOW(), 1, 7),
       (8, 'Maiev Shadowsong : Gardienne implacable', 'Maiev Shadowsong, gardienne emblématique, a pour mission de surveiller les prisonniers dangereux. Elle a joué un rôle majeur dans la traque d\'Illidan après la Troisième Guerre, cherchant à venger la destruction de sa prison, la prison du Mont Hyjal.', NOW(), NOW(), 1, 8),
       (9, 'Kael\'thas Sunstrider : Le Prince déchu', 'Kael\'thas Sunstrider, le Prince déchu des Elfes de Sang, a eu un parcours tragique après la Troisième Guerre. Trompé par des promesses de pouvoir, il s\'est égaré, conduisant à des événements tragiques et à sa déchéance.', NOW(), NOW(), 1, 14),
       (10, 'Thrall : Chef de la Horde', 'Thrall, autrefois chef de la Horde pendant la Troisième Guerre, a joué un rôle crucial dans la défense d\'Azeroth contre la Légion Ardente. Son leadership a été essentiel pour unifier la Horde et les autres races d\'Azeroth contre les menaces communes.', NOW(), NOW(), 1, 9),
       (11, 'Grommash Hellscream : Chef de guerre des Orcs', 'Grommash Hellscream, chef de guerre des Orcs, a joué un rôle central pendant la Troisième Guerre. Son acte héroïque lors de la libération des Orcs de la corruption démoniaque a marqué un tournant important dans l\'histoire de la Horde.', NOW(), NOW(), 1, 10),
       (12, 'Tichondrius : Seigneur démon', 'Tichondrius, seigneur démon, était l\'un des principaux serviteurs du Roi-Liche pendant la Troisième Guerre. Sa présence et son influence ont été déterminantes dans la propagation du Fléau sur Azeroth.', NOW(), NOW(), 1, 11),
       (13, 'Sargeras : Le Titan corrompu', 'Sargeras, le Titan corrompu, a joué un rôle majeur en influençant la Troisième Guerre à travers le Roi-Liche. Sa quête de purification radicale a conduit à des événements cataclysmiques et a eu des conséquences sur l\'ensemble d\'Azeroth.', NOW(), NOW(), 1, 12);

INSERT INTO `Posts_has_Categories` (`posts_id`, `categories_id`)
VALUES (1, 1),
       (3, 2);

INSERT INTO `Users` (`id`, `nickname`, `name`, `firstName`)
VALUES (1, 'ArthasMenethil', 'Arthas', 'Menethil'),
       (2, 'JainaProudmoore', 'Jaina', 'Proudmoore'),
       (3, 'IllidanStormrage', 'Illidan', 'Stormrage'),
       (4, 'TyrandeWhisperwind', 'Tyrande', 'Whisperwind'),
       (5, 'MalfurionStormrage', 'Malfurion', 'Stormrage'),
       (6, 'SylvanasWindrunner', 'Sylvanas', 'Windrunner'),
       (7, 'KelThuzadLich', 'KelThuzad', 'Lich'),
       (8, 'MaievShadowsong', 'Maiev', 'Shadowsong'),
       (9, 'KaelthasSunstrider', 'Kael\'thas', 'Sunstrider'),
       (10, 'Thrall', 'Thrall', ''),
       (11, 'GrommashHellscream', 'Grommash', 'Hellscream'),
       (12, 'TichondriusDreadlord', 'Tichondrius', 'Dreadlord'),
       (13, 'Sargeras', 'Sargeras', '');

-- 2024-01-24 14:45:35
