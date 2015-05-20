-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Mai 2015 à 02:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(90) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `srcimg` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `vedette` tinyint(1) NOT NULL,
  `type` varchar(4) NOT NULL,
  `idcateg` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `prix`, `srcimg`, `description`, `vedette`, `type`, `idcateg`) VALUES
(1, 'Radiohead Pocket', '99', '197762_mrp_in_l1.jpg', '', 1, 'h', 0),
(2, 'Cafe Racer Jacket', '389', '340809_mrp_in_l.jpg', '', 1, 'h', 0),
(3, 'Rough Sunset Jacket', '123', '196623_mrp_in_l.jpg', '', 1, '', 0),
(4, 'Red Garage', '83', '340332_mrp_in_l.jpg', '', 1, '', 0),
(5, 'Shirt With Attributes', '56', '328390_mrp_in_l.jpg', '', 1, '', 0),
(6, 'Simple Kinky Shirt', '98', '194809_mrp_in_l.jpg', '', 1, '', 0),
(7, 'Blues Denim', '10', '340333_mrp_in_l.jpg', '', 0, '', 0),
(8, 'Cafe Racer Jacket', '300', '340809_mrp_in_l.jpg', '', 0, '', 0),
(9, 'Leather Sling Track', '112', '311772_mrp_in_l.jpg', '', 0, '', 0),
(10, 'Mahogany Footprint', '79', '328427_mrp_e1_l.jpg', '', 0, '', 0),
(11, 'Moscot Crowbar', '259', '343841_mrp_in_l.jpg', '', 0, '', 0),
(12, 'Radiohead Pocket', '99', '197762_mrp_in_l1.jpg', '', 0, '', 0),
(13, 'Red Garage', '83', '340332_mrp_in_l.jpg', '', 0, '', 0),
(14, 'Ripped Jeans', '169', '341243_mrp_in_l.jpg', '', 0, '', 0),
(15, '196623_mrp_in_l.jpg', '123', 'Rough Sunset Jacket', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(11) NOT NULL,
  `idarticle` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_arti` (`idarticle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

CREATE TABLE IF NOT EXISTS `couleurs` (
  `idarticle` int(11) NOT NULL,
  `couleur` varchar(30) NOT NULL,
  `imgcouleur` varchar(60) NOT NULL,
  PRIMARY KEY (`idarticle`,`couleur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL DEFAULT '',
  `prenom` varchar(30) DEFAULT NULL,
  `titre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tel` int(8) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `codpost` int(6) NOT NULL,
  `codtel` int(3) NOT NULL,
  `adresse1` varchar(70) NOT NULL,
  `adresse2` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email_3` (`email`),
  UNIQUE KEY `email_4` (`email`),
  UNIQUE KEY `email_5` (`email`),
  UNIQUE KEY `email_6` (`email`),
  UNIQUE KEY `email_7` (`email`),
  FULLTEXT KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `nom`, `prenom`, `titre`, `email`, `password`, `tel`, `ville`, `codpost`, `codtel`, `adresse1`, `adresse2`) VALUES
(37, 't.houssem', 'Trabelsi', 'Houssem', 'mr', 't.houssemg@gmail.com', '123456', 0, '', 0, 0, '', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_arti` FOREIGN KEY (`idarticle`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `couleurs`
--
ALTER TABLE `couleurs`
  ADD CONSTRAINT `fk_col_article` FOREIGN KEY (`idarticle`) REFERENCES `articles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
