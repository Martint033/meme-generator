-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 21 mai 2018 à 21:30
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
(1, 'meme1', 'assets/medias/images/53ea2c3791b06abb36e4f7b3efe2f6bc.jpg', NULL, '2018-05-18 14:17:51', 16),
(2, 'coucou', 'pouet', 'pouetrandom', '2018-05-21 19:06:00', 14);

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
(3, 'alcohol', 'assets/medias/images/alcohol.jpg', 'alcohol123459'),
(4, 'apple', 'assets/medias/images/apple.jpg', 'apple123459'),
(5, 'balance', 'assets/medias/images/balance.jpg', 'balance123459'),
(6, 'doge', 'assets/medias/images/doge.jpg', 'doge123459'),
(7, 'flip', 'assets/medias/images/flip.jpg', 'flip123459'),
(8, 'rangutan', 'assets/medias/images/rangutan.jpg', 'rangutan123459'),
(9, '', 'assets/medias/images/ab07302cce47eeed8e97de191180f784.png', 'ab07302cce47eeed8e97de191180f784'),
(10, '', 'assets/medias/images/d9fc4bdaccbacca2078d1ccb66de68c2.gif', 'd9fc4bdaccbacca2078d1ccb66de68c2'),
(14, 'dancing cat', 'assets/medias/images/a35107c7c6a2ccdb329f52dd9a1a34de.jpg', 'a35107c7c6a2ccdb329f52dd9a1a34de'),
(15, 'jumping kid', 'assets/medias/images/9fdc54aca357ddb70c625ad4cafd10d6.jpg', '9fdc54aca357ddb70c625ad4cafd10d6'),
(16, 'Einstein Musclé', 'assets/medias/images/53ea2c3791b06abb36e4f7b3efe2f6bc.jpg', '53ea2c3791b06abb36e4f7b3efe2f6bc');

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
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
