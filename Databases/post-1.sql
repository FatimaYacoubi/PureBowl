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
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `description`, `date`, `titre`, `image`, `etat`) VALUES
(37, 'Le couscous est d\'une part une semoule de blé dur préparée à l\'huile d\'olive et d\'autre part, une spécialité culinaire issue de la cuisine berbère, à base de couscous, de légumes, d\'épices, d\'huile d\'olive et de viande ou de poisson ....', '2021-04-26', 'Couscous', 'img-01.jpg', 1),
(40, 'La mloukhiya, mouloukhiya, mloukhiyé est un plat oriental populaire en Tunisie, en Libye et au Moyen-Orient. Le nom est celui de la plante connue sous le nom de corète potagère.', '2021-04-27', 'Mloukhiya', 'img-03.jpg', 1),
(41, 'La ojja est un plat tunisien à base d\'œufs, connu pour sa facilité de préparation. Les ingrédients principaux sont des œufs, des tomates, des poivrons et des épices, le tout étant cuit à l\'huile d\'olive. D\'autres ingrédients peuvent être ajoutés, éventuellement de la merguez.', '2021-04-27', 'Ojja', 'img-06.jpg', 1),
(42, 'Les spaghetti ou spaghettis sont un plat de pâtes longues, fines et cylindriques, typique de la cuisine italienne.', '2021-04-27', 'Spaghetti', 'spaghetti.png', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
