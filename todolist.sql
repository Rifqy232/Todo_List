-- Adminer 4.8.1 MySQL 10.6.9-MariaDB-1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nim` char(10) NOT NULL,
  `born_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `biodata` (`id`, `name`, `nim`, `born_place`, `birth_date`, `address`, `image`) VALUES
(1,	'Muhammad Rifqy Yudhiestra R.',	'D121201015',	'Takalar',	'2002-03-02',	'BTN Griya Raihan Pratama',	'foto');

DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hobby` varchar(255) NOT NULL,
  `id_user` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `biodata` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hobbies` (`id`, `hobby`, `id_user`) VALUES
(1,	'Bermain gitar',	1),
(2,	'Bermain badminton',	1),
(3,	'Dengar musik',	1);

-- 2022-09-15 15:57:20
