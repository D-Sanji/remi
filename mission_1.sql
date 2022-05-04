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
-- Base de données : `mission_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomTache` text NOT NULL,
  `Etat` text NOT NULL,
  `NivPrio` int(11) NOT NULL,
  `id_Resp` int(11) NOT NULL,
  `id_Employe` int(11) DEFAULT NULL,
  `Libelle_Statut` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Resp` (`id_Resp`),
  KEY `id_Employe` (`id_Employe`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `NomTache`, `Etat`, `NivPrio`, `id_Resp`, `id_Employe`, `Libelle_Statut`) VALUES
(7, 'changer poubelle moche', 'en attente', 2, 1, 1, NULL),
(8, 'changer imprimante', 'en attente', 2, 1, 3, NULL),
(9, 'changer ampoule', 'en cours ', 1, 1, 5, NULL),
(10, 'reparer PC secretaire', 'en cours', 3, 1, 3, NULL),
(12, 'changer ecran salle reunion', 'en attente', 2, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` text NOT NULL,
  `MotDePasse` varchar(30) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Role` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `Pseudo`, `MotDePasse`, `Nom`, `Prenom`, `Role`) VALUES
(1, 'remi.libessart', 'admin', 'Libessart', 'Rémi', 'administrateur'),
(2, 'remi', 'admin', 'Libessart', 'Rémi', 'utilisateur'),
(3, 'remilib', 'admin', 'Libessart', 'Remi', 'employe'),
(4, 'remilibessart', 'admin', 'Libessart', 'Remi', 'administrateur'),
(5, 'rlibessart', 'admin', 'Libessart', 'Remi', 'employe');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_ibfk_1` FOREIGN KEY (`id_Resp`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `taches_ibfk_2` FOREIGN KEY (`id_Employe`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
