-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 18 mai 2018 à 10:27
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
  `title_m` varchar(255) NOT NULL,
  `meme` varchar(255) NOT NULL,
  `date_m` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id_p` int(11) NOT NULL,
  `title_p` varchar(50) NOT NULL,
  `picture` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id_p`, `title_p`, `picture`) VALUES
(1, 'coffee', 'assets/medias/images/coffee.jpg'),
(2, 'sheep', 'assets/medias//images/sheep.jpg'),
(3, 'alcohol', 'assets/medias/images/alcohol.jpg'),
(4, 'apple', 'assets/medias/images/apple.jpg'),
(5, 'balance', 'assets/medias/images/balance.jpg'),
(6, 'doge', 'assets/medias/images/doge.jpg'),
(7, 'flip', 'assets/medias/images/flip.jpg'),
(8, 'rangutan', 'assets/medias/images/rangutan.jpg');

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
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
