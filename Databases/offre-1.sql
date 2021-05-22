-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 01:19
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `nom_offre` varchar(50) NOT NULL,
  `image_offre` varchar(1000) NOT NULL,
  `descrip_offre` varchar(1000) NOT NULL,
  `type_offre` varchar(11) NOT NULL,
  `prix_offre` int(11) NOT NULL,
  `etat_offre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `nom_offre`, `image_offre`, `descrip_offre`, `type_offre`, `prix_offre`, `etat_offre`) VALUES
(5, 'vegano1', 'n1.jpg', 'salade epinard / salade cesar / broudou / ratatouille', 'healthy', 3404, 'en promo'),
(12, 'mehdiiii', 'n2.jpg', 'essai', 'healthy', 900, ' '),
(13, 'promo', 'veg1.jpg', 'wesrdtfgyhuji', '1', 557, ''),
(14, 'try', 'n2.jpg', 'try', '1', 2821, ''),
(15, 'ekher', 'veg2.jpg', 'esjiok', '3', 495, 'en promo'),
(17, 'veganooo', 'veg2.jpg', 'dxfgvn', '2', 145, ''),
(18, 'veganooo', 'n2.jpg', 'dxfgvn', '2', 145, ''),
(19, 'trying', 'veg1.jpg', 'dxcfgvybhunji', '2', 100, ''),
(20, 'erdtfgy', 'veg1.jpg', 'edrtfgy', 'vegan', 176, ' '),
(21, 'Sirttt', 'veg2.jpg', 'trfgyhuj', 'vegan', 900, ' '),
(22, 'veganorg', 'veg2.jpg', 'ersdtfh', 'healthy', 436, ' '),
(23, 'veganooo', 'veg2.jpg', 'dxgubhij', 'vegan', 150, ''),
(24, 'dernier', 'veg3.jpg', 'szedjn', 'healthy', 148, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
