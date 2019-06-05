-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 juin 2019 à 13:03
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sgmbtp`
--

-- --------------------------------------------------------

--
-- Structure de la table `nouveaute`
--

DROP TABLE IF EXISTS `nouveaute`;
CREATE TABLE IF NOT EXISTS `nouveaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameproduct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yearproduct` int(11) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `typeproduct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoursproduct` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `nouveaute`
--

INSERT INTO `nouveaute` (`id`, `nameproduct`, `modele`, `yearproduct`, `kilometrage`, `typeproduct`, `hoursproduct`, `price`, `img`) VALUES
(1, 'Renault Premium', '320.18', 2008, 464000, 'Diesel', 1, 2000, '1'),
(11, 'Renault Premium', '320.18', 2004, 124000, 'Diesel', 45, 321455, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
