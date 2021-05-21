-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 mai 2021 à 16:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

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
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(20) NOT NULL,
  `id_command` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `id_command`, `message`, `status`, `time`) VALUES
(1, '', 'cavac', 1, '2021-05-03 22:48:27'),
(2, '', 'okokoook', 1, '2021-05-03 23:11:31'),
(3, '', 'azertyu', 1, '2021-05-03 23:39:45'),
(4, '', 'azeazrgf', 1, '2021-05-03 23:40:15'),
(5, '', 'zzzzzzzz', 1, '2021-05-03 23:40:27'),
(6, '123', 'dddd', 1, '2021-05-04 00:35:00'),
(7, '159', 'lllllllll', 1, '2021-05-04 00:47:57'),
(8, '999', 'ppppppp', 1, '2021-05-04 00:48:06'),
(9, '204', 'la liveraison est en ratard !! mais la qualité est cava ', 1, '2021-05-04 02:02:59'),
(10, '123', 'bbbbbbb', 1, '2021-05-04 03:40:23'),
(11, '12', 'toute est ok', 1, '2021-05-04 15:14:29'),
(12, '123', 'livreur en retard', 1, '2021-05-04 15:31:16'),
(13, '123', 'jjjj', NULL, '2021-05-04 15:37:28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
