-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 mai 2021 à 02:08
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
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  `nomClient` varchar(20) NOT NULL,
  `emailClient` varchar(40) NOT NULL,
  `phoneClient` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `description`, `date`, `nomClient`, `emailClient`, `phoneClient`, `etat`) VALUES
(10, 'La Tunisie célèbre, avec tous les pays membres de l\'Organisation Météorologique Mondiale, la Journée météorologique mondiale le 23 mars de chaque année. Pour l’année 2021, l\'organisation a choisi de célébrer cette journée avec le slogan l’Océan – le temps et le climat.\r\nLa Tunisie célèbre, avec tous les pays membres de l\'Organisation Météorologique Mondiale, la Journée météorologique mondiale le 23 mars de chaque année. Pour l’année 2021, l\'organisation a choisi de célébrer cette journée avec le slogan l’Océan – le temps et le climat.', '2021-04-21', 'Sahar Zouari', 'sahar.zouari@esprit.tn', 50745839, 1),
(15, 'waaaa', '2021-05-06', 'Sahar Zouari', 'sahar.zouari@esprit.tn', 50745839, 0),
(17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. Sed semper orci sit amet porta placerat. Etiam quis finibus eros', '2021-04-08', 'aziz cherif', 'fatimayaacoubiiii@gmail.com', 52246787, 1),
(18, 'ma wesletnich', '2021-04-14', 'Sahar Zouari', 'sahar.zouari@esprit.tn', 50745839, 0),
(19, 'sdqwdqwdq', '2021-04-28', 'Saha', 'sahar.zouari@esprit.tn', 50745839, 0),
(20, 'hello', '2021-04-26', 'helo', 'sahar.zouari@esprit.tn', 50745839, 0),
(21, 'qweq', '2021-04-26', 'azz', '@', 28327313, 0),
(22, 'wa', '2021-04-30', '111', 'sahar.zouari@esprit.tn', 0, 0),
(23, 'wa', '2021-04-30', '111', 'sahar.zouari@esprit.tn', 345, 1),
(24, 'dorsaf', '2021-04-26', 'dorsaf', 'fatimayaacoubiiii@gmail.com', 52246787, 1),
(25, 'dorsaf12', '2021-04-26', 'dorsaffff', 'fatimayaacoubiiii@gmail.com', 52246787, 1),
(26, 'dorsaf123', '2021-04-26', 'dorsaffffw', 'fatimayaacoubiiii@gmail.com', 52246787, 1),
(27, 'wa', '2021-04-26', 'Sahar', 'sahar.zouari@esprit.tn', 50745839, 1),
(28, 'wa', '2021-04-26', 'Sahar', 'sahar.zouari@esprit.tn', 50745839, 1),
(30, 'sadio ', '2021-04-27', 'Sahar', 'mohamedaziz.cherif@esprit.tn', 50745839, 1),
(31, 'ytytytty', '2021-04-27', 'Sahaqwe', 'sahar.zouari@esprit.tn', 50745839, 1),
(32, 'waa', '2021-05-02', 'aziz', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(33, 'helllo friend', '2021-05-02', 'aziz', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(34, 'many', '2021-05-02', 'azizy', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(35, 'qweq', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(36, 'qweqqws', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(37, 'qweqqwsqweqwdq', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(38, 'qweqqwsqweqwdqsdqw', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(39, 'qweqqwsqweqwdqsdqwqwd', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(40, 'qweqqwsqweqwdqsdqwqwdqwdqw', '2021-05-02', 'azizchry', 'mohamedaziz.cherif@esprit.tn', 28327313, 1),
(41, 'meka ma wesletech', '2021-05-03', 'aziz', 'mohamedaziz.cherif@esprit.tn', 28327313, 0),
(42, 'waawawa', '2021-05-04', 'sahar', 'mohamedaziz.cherif@esprit.tn', 28327312, 1),
(43, 'mekla khayba', '2021-05-04', 'sahar', 'sahar.zouari@esprit.tn', 28327312, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
