-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 mai 2018 à 17:30
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meme_generator`
--

-- --------------------------------------------------------

--
-- Structure de la table `link_img_tag`
--

CREATE TABLE `link_img_tag` (
  `id_image` int(255) NOT NULL,
  `id_tag` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `link_img_tag`
--

INSERT INTO `link_img_tag` (`id_image`, `id_tag`) VALUES
(1, 10),
(2, 2),
(2, 3),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(4, 2),
(4, 8),
(5, 6),
(5, 10),
(6, 1),
(6, 2),
(6, 5),
(7, 5),
(8, 9);

-- --------------------------------------------------------

--
-- Structure de la table `link_meme_tag`
--

CREATE TABLE `link_meme_tag` (
  `id_memes` int(255) NOT NULL,
  `id_tag` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `memes`
--

CREATE TABLE `memes` (
  `id_m` int(11) NOT NULL,
  `title_m` varchar(255) DEFAULT NULL,
  `meme` varchar(255) DEFAULT NULL,
  `newName_m` varchar(255) DEFAULT NULL,
  `date_m` timestamp NULL DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `memes`
--

INSERT INTO `memes` (`id_m`, `title_m`, `meme`, `newName_m`, `date_m`, `id_picture`) VALUES
(11, 'TEST', 'assets/medias/memes/5b040e2248c02.png', '5b040e2248c02', '2018-05-22 12:33:38', 6),
(12, 'TEST', 'assets/medias/memes/5b040ed4c2ceb.png', '5b040ed4c2ceb', '2018-05-22 12:36:36', 16),
(13, 'TEST', 'assets/medias/memes/5b04125840851.png', '5b04125840851', '2018-05-22 12:51:36', 17),
(14, 'TEST', 'assets/medias/memes/5b0413f5da9a4.png', '5b0413f5da9a4', '2018-05-22 12:58:29', 8),
(15, 'petite chatte', 'assets/medias/memes/5b041e37c0b18.png', '5b041e37c0b18', '2018-05-22 13:42:15', 6),
(32, 'hamster qui rit', 'assets/medias/memes/5b04293a6a4a1.png', '5b04293a6a4a1', '2018-05-22 14:29:14', 10),
(33, 'good night cat', 'assets/medias/memes/5b042a1533c37.jpg', '5b042a1533c37', '2018-05-22 14:32:53', 18),
(35, 'hello barakstein', 'assets/medias/memes/5b04337936d4c.jpg', '5b04337936d4c', '2018-05-22 15:12:57', 16),
(36, 'bg einstein', 'assets/medias/memes/5b0433ff07649.jpg', '5b0433ff07649', '2018-05-22 15:15:11', 16);

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id_p` int(11) NOT NULL,
  `title_p` varchar(50) DEFAULT NULL,
  `picture` varchar(225) DEFAULT NULL,
  `newName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id_p`, `title_p`, `picture`, `newName`) VALUES
(1, 'coffee', 'assets/medias/images/coffee.jpg', 'coffee123459'),
(2, 'sheep', 'assets/medias/images/sheep.jpg', 'sheep123459'),
(4, 'apple', 'assets/medias/images/apple.jpg', 'apple123459'),
(6, 'doge', 'assets/medias/images/doge.jpg', 'doge123459'),
(7, 'flip', 'assets/medias/images/flip.jpg', 'flip123459'),
(8, 'rangutan', 'assets/medias/images/rangutan.jpg', 'rangutan123459'),
(10, '', 'assets/medias/images/d9fc4bdaccbacca2078d1ccb66de68c2.gif', 'd9fc4bdaccbacca2078d1ccb66de68c2'),
(16, 'Einstein Musclé', 'assets/medias/images/53ea2c3791b06abb36e4f7b3efe2f6bc.jpg', '53ea2c3791b06abb36e4f7b3efe2f6bc'),
(17, '', 'assets/medias/images/d686c4eef16f5bd02c609d77b36cd082.jpg', 'd686c4eef16f5bd02c609d77b36cd082'),
(18, 'sleepy cat', 'assets/medias/images/630a505056f3eecaeb39833d1a358b43.jpg', '630a505056f3eecaeb39833d1a358b43');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id_t` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id_t`, `tag`) VALUES
(1, 'animaux'),
(2, 'drole'),
(3, 'alcool'),
(4, 'chat'),
(5, 'meme'),
(6, 'art'),
(7, 'musique'),
(8, 'informatique'),
(9, 'rangoutan'),
(10, 'nature');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`id_m`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `memes`
--
ALTER TABLE `memes`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
