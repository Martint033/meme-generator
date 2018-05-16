-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 15 mai 2018 à 16:49
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

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
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `title`, `image`) VALUES
(1, 'coffee', 'http://localhost/meme-generator/assets/images/medias/jpg/coffee.jpg'),
(2, 'sheep', 'http://localhost/meme-generator/assets/images/medias/jpg/sheep.jpg'),
(3, 'alcohol', 'http://localhost/meme-generator/assets/images/medias/jpg/alcohol_art.jpg'),
(4, 'apple', 'http://localhost/meme-generator/assets/images/medias/jpg/apple_artwork.jpg'),
(5, 'balance', 'http://localhost/meme-generator/assets/images/medias/jpg/balance_zen.jpg'),
(6, 'doge', 'http://localhost/meme-generator/assets/images/medias/jpg/doge.jpg'),
(7, 'flip', 'http://localhost/meme-generator/assets/images/medias/jpg/flipTable.jpg'),
(8, 'rangutan', 'http://localhost/meme-generator/assets/images/medias/jpg/rangutan.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `link_img_meme`
--

CREATE TABLE `link_img_meme` (
  `id_image` int(255) NOT NULL,
  `id_meme` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `link_img_tag`
--

CREATE TABLE `link_img_tag` (
  `id_image` int(255) NOT NULL,
  `id_tag` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
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
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
