-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 13 nov. 2023 à 08:50
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hb_pdo_pe7`
--

-- --------------------------------------------------------

--
-- Structure de la table `connected`
--

DROP TABLE IF EXISTS `connected`;
CREATE TABLE IF NOT EXISTS `connected` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscribers`
--

INSERT INTO `subscribers` (`id`, `last_name`, `first_name`, `email`, `password`, `active`) VALUES
(1, 'Doe', 'John', 'John_Doe@gmail.com', 'try', 1),
(2, 'Durand', 'Pierre', 'Pierre_Durand@gmail.com', 'try', 1),
(3, 'Sabatier', 'Claire', 'Claire_Sabatier@gmail.com', 'try', 1),
(4, 'Manuel', 'Marie', 'Marie_Manuel@gmail.com', 'try', 0),
(5, '', '', 'test@gmail.com', '$2y$10$QFS1igtfJX7IvFs/IXefiuuadjV.M2BhviqZBakPizaBZKXXifzri', 1),
(6, '', '', 'test@gmail.com', '$2y$10$Q4R7sMP9HBIigxgocZWWHeqh8nKPQg3SOJxKagfpWKglmcWmupTiS', 1),
(7, 'marley', 'bob', '', '$2y$10$4P0j2S6MiMvuzA3L8j/Ze.2zaG2mAdO8C3F6CoKBDOuY1vEYiVzHS', 1),
(8, 'mor', 'mar', 'mm@gmail.com', '$2y$10$VZJdbs3bXEqYLRPBAZI86eCFf1sVj23JZgmnndzAJ0TKyOvI9/iqS', 1),
(9, 'PHO', 'Lam', 'lp@gmail.com', '$2y$10$G06FJpxfHMuyAHkTufd.QeOIj3BMMxtAwRs8chmptykOzy8Y5SzpO', 1),
(10, 'MAD', 'Dady', 'dm@gmail.com', '$2y$10$3aj5UEuWSTp9A4mQJfrPkegquOmX1wwrEbvd.QGv1UoXmpz0ilcrC', 1),
(11, 'MAM', 'Sam', 'sm@gmail.com', '$2y$10$RvRgUvVPeATpk9f3KruPl.mIaG4ZPAf84kDczrPX9mcoO0O1DWj0e', 1),
(12, 'MAM', 'Sam', 'sm@gmail.com', '$2y$10$RnXzfPaWXYZ8IVy.QG8GXe4z1UfY.jfr7GmBHk.ZHnhrvFuA9sPQq', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `email`, `password`, `active`) VALUES
(1, 'Louisy', 'Clency', 'test@test.com', 'test', 0),
(2, 'Dubost', 'Damien', 'damien@gmail.com', 'test', 1),
(3, 'Eljorf', 'Ghazi', 'ghazi@gmail.com', 'test', 1),
(4, 'Charrassier', 'Clément', 'clement@gmail.com', 'test', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
