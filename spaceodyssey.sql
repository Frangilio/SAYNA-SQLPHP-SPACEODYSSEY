-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3309
-- Généré le :  lun. 13 nov. 2023 à 05:57
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spaceodyssey`
--

-- --------------------------------------------------------

--
-- Structure de la table `astronaute`
--

DROP TABLE IF EXISTS `astronaute`;
CREATE TABLE IF NOT EXISTS `astronaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `sante` varchar(40) NOT NULL,
  `taille` decimal(10,0) NOT NULL,
  `poids` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `status` varchar(40) NOT NULL,
  `planete_id` int(11) NOT NULL,
  `astronaute_id` int(11) NOT NULL,
  `vaisseau_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `astronaute_id` (`astronaute_id`),
  KEY `planete_id` (`planete_id`),
  KEY `vaisseau_id` (`vaisseau_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `planete`
--

DROP TABLE IF EXISTS `planete`;
CREATE TABLE IF NOT EXISTS `planete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `circonference` double NOT NULL,
  `distance` double NOT NULL,
  `documentation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vaisseau`
--

DROP TABLE IF EXISTS `vaisseau`;
CREATE TABLE IF NOT EXISTS `vaisseau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `place` int(11) NOT NULL,
  `astronaute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `astronaute_id` (`astronaute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`astronaute_id`) REFERENCES `astronaute` (`id`),
  ADD CONSTRAINT `mission_ibfk_2` FOREIGN KEY (`planete_id`) REFERENCES `planete` (`id`),
  ADD CONSTRAINT `mission_ibfk_3` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseau` (`id`);

--
-- Contraintes pour la table `vaisseau`
--
ALTER TABLE `vaisseau`
  ADD CONSTRAINT `vaisseau_ibfk_1` FOREIGN KEY (`astronaute_id`) REFERENCES `astronaute` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
