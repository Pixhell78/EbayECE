-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 avr. 2020 à 11:16
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ebayece`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `PSEUDO` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MAIL` (`MAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID`, `NOM`, `PRENOM`, `MAIL`, `PSEUDO`) VALUES
(1, 'vdb', 'hugo', 'hugo@ece.fr', 'hugovdb');


-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACHETEUR` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codepostal` text NOT NULL,
  `pays` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ACHETEUR_ID` (`ACHETEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--


-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

DROP TABLE IF EXISTS `banque`;
CREATE TABLE IF NOT EXISTS `banque` (
  `NUMERO` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `CODE` int(11) NOT NULL,
  `SOLDE` float NOT NULL,
  PRIMARY KEY (`NUMERO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `enchere`
--

DROP TABLE IF EXISTS `enchere`;
CREATE TABLE IF NOT EXISTS `enchere` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OBJET` int(11) NOT NULL,
  `ACHETEUR_ID` int(11) NOT NULL,
  `OFFRE` float UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `objet_id` (`OBJET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enchere`
--

INSERT INTO `enchere` (`ID`, `OBJET`, `ACHETEUR_ID`, `OFFRE`) VALUES
(1, 20, 1, 220);

-- --------------------------------------------------------


--
-- Structure de la table `pannier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OBJET` int(11) NOT NULL,
  `ACHETEUR_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `objet_id` (`OBJET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `moffre`
--

DROP TABLE IF EXISTS `moffre`;
CREATE TABLE IF NOT EXISTS `moffre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACHETEUR_ID` int(11) NOT NULL,
  `OBJET1` int(11) NOT NULL,
  `OFFREA` float UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `objet_id1` (`OBJET1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `VENDEUR` int(11) NOT NULL,
  `TYPE` enum('enchere','immediat','meilleuroffre') NOT NULL,
  `TYPEOBJET` enum('ferailletresor','musee','vip') NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `IMAGE` text NOT NULL,
  `PRIX` float UNSIGNED NOT NULL,
  `FIN` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `vendeur_id` (`VENDEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`ID`, `NOM`, `VENDEUR`, `TYPE`,`TYPEOBJET`, `DESCRIPTION`, `IMAGE`, `PRIX`, `FIN`) VALUES
(15, 'Guitare FENDER', 1, 'immediat','vip', 'Guitare fender, ideale pour un niveau intermediaire', 'guitare.jpg', 350, '2020-04-30 00:00:00'),
(16, 'Veste en jean bleue', 1, 'immediat','vip', 'Veste en jean bleue jamais portee', 'veste_jean.jpg', 30, '2020-04-30 00:00:00'),
(17, 'Collier', 7, 'immediat','vip', 'Collier d\'alliage nacre/argent veritable', 'collier_nacre.jpg', 100, '2020-04-30 00:00:00'),
(18, 'Montre', 7, 'enchere','vip', 'Montre en quartz', 'montre.jpg', 1000, '2020-04-22 00:00:00'),
(19, 'Vase', 1, 'enchere','vip', 'Vase en ceramique', 'vase.jpg', 50, '2020-04-21 10:00:00'),
(20, 'Ballon d or', 1, 'enchere','vip', 'Replique du ballon d or', 'ballon_or.jpg', 200, '2020-04-25 10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `PSEUDO` text NOT NULL,
  `ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MAIL` (`MAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`ID`, `NOM`, `PRENOM`, `MAIL`, `PSEUDO`,  `ADMIN`) VALUES
(1, 'vdb', 'hugo', 'hugo@ece.fr', 'Hugo',  1),
(7, 'benard', 'antoire', 'atoine@ece.fr', 'Antoine',  1);

--
-- Contraintes pour les tables déchargées
--


--
-- Contraintes pour la table `enchere`
--
ALTER TABLE `enchere`
  ADD CONSTRAINT `objet_id` FOREIGN KEY (`OBJET`) REFERENCES `objet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;


-- Contraintes pour la table `moffre`
--
ALTER TABLE `moffre`
  ADD CONSTRAINT `objet_id1` FOREIGN KEY (`OBJET1`) REFERENCES `objet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `objet`
--
ALTER TABLE `objet`
  ADD CONSTRAINT `vendeur_id` FOREIGN KEY (`VENDEUR`) REFERENCES `vendeur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
