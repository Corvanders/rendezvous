-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 août 2021 à 20:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rendezvous`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `jour` date NOT NULL,
  `telephone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UC_Person` (`prenom`,`nom`,`jour`)
) ENGINE=InnoDB AUTO_INCREMENT=12;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`, `sexe`, `jour`, `telephone`) VALUES
(1, 'sas', 'sasazssza', 'sazszazs@sazsa', 'h', '2021-08-07', ''),
(2, 'Longueville', 'FranÃ§ois', 'mrlongueville@gmail.com', 'h', '2021-08-07', ''),
(3, 'Michelline', 'CÃ©lestine', 'celestine@jyfu.com', 'f', '2021-08-14', ''),
(4, 'Ladena', 'Bina', 'binladena@issou.com', 'f', '2024-12-14', ''),
(5, 'Chuck', 'Norris', 'chucknorris@gmail.com', 'h', '2025-07-22', ''),
(6, 'Cassos', 'Magalie', 'cassosmagalie@gmail.com', 'Inconnue', '2025-11-29', '0669696969'),
(7, 'Longueville', 'FranÃ§ois', 'mrlongueville@gmail.com', 'h', '2024-06-04', '0669696969'),
(9, 'Longueville', 'FranÃ§ois', 'mrlongueville@gmail.com', 'h', '2021-08-08', '0642236113'),
(11, 'Romain', 'FranÃ§ois', 'mrlongueville@gmail.com', 'h', '2021-08-08', '0642236113');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
