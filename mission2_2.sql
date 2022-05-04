-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 mai 2022 à 12:10
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mission2.2`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `jour` date NOT NULL,
  `heuredebut` time NOT NULL,
  `heurefin` time NOT NULL,
  `id_salle` varchar(150) NOT NULL,
  `id_reserveur` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_salle` (`id_salle`,`id_reserveur`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `jour`, `heuredebut`, `heurefin`, `id_salle`, `id_reserveur`) VALUES
(4, '2022-03-26', '10:00:00', '11:00:00', 'amphitheatre', 'remi.libessart'),
(5, '2022-03-26', '08:00:00', '09:00:00', 'amphitheatre', 'remi.libessart'),
(6, '2022-03-29', '08:00:00', '09:00:00', 'amphitheatre', 'remi.libessart'),
(7, '2022-03-29', '17:00:00', '18:00:00', 'salle reunion 8', 'remi.libessart'),
(25, '2022-05-04', '10:00:00', '11:00:00', 'salle reunion 7', 'remi.libessart');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `nom`) VALUES
(1, 'amphitheatre'),
(2, 'salle multimedia'),
(3, 'salle reunion 1'),
(4, 'salle reunion 2'),
(5, 'salle reunion 3 '),
(6, 'salle reunion 4'),
(7, 'salle reunion 5'),
(8, 'salle reunion 6'),
(9, 'salle reunion 7'),
(10, 'salle reunion 8');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`) VALUES
(1, 'Libessart', 'Rémi', 'remi.libessart', 'admin'),
(2, 'Libessart', 'Rémi', 'libessart.remi', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
