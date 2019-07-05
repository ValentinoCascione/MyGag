-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `container` longtext NOT NULL,
  `image` text NOT NULL,
  `date` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `post` (`id`, `title`, `container`, `image`, `date`, `id_user`) VALUES
(33,	'zazdzadazdfeafdaazdzadz',	'qqzdzqd',	'https://www.rom-game.fr/multimedia/news/171005_dofus.jpg',	NULL,	19);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `username`, `password`, `admin`) VALUES
(19,	'popo',	'$2y$12$BBy86TZfnRu2N48YbaiXEuDYbwYRtiM34mRdgbGaoVHPveIZJLGeS',	1),
(20,	'sss',	'$2y$12$N9G2yWqt0p7nPENk65.lJurQ4kIwwqrviDIg5GTd/nJ5BDHIoHxaC',	0);

-- 2019-07-05 13:50:41
