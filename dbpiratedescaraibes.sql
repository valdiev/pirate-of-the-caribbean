-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 03 fév. 2023 à 08:56
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pirateofthecaribbean`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

CREATE TABLE `actors` (
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `maincharacter` tinyint(1) DEFAULT '0',
  `charactername` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actors`
--

INSERT INTO `actors` (`firstname`, `lastname`, `id`, `maincharacter`, `charactername`) VALUES
('Keira', 'Knightley', 3, 0, ''),
('Geoffrey', 'Rush', 4, 0, ''),
('Jack', 'Davenport', 5, 0, ''),
('Jonathan', 'Pryce', 6, 0, ''),
('Bill', 'Nighy', 7, 0, ''),
('Penélope', 'Cruz', 8, 0, ''),
('Ian', 'McShane', 9, 0, ''),
('Javier', 'Bardem', 10, 0, ''),
('Kaya', 'Scodelario', 11, 0, ''),
('Brenton', 'Thwaites', 12, 0, ''),
('Johnny', 'Depp', 13, 1, 'Jack Sparrow'),
('test', 'test', 14, 0, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `actors_movies`
--

CREATE TABLE `actors_movies` (
  `actors_id` int(10) DEFAULT NULL,
  `movies_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actors_movies`
--

INSERT INTO `actors_movies` (`actors_id`, `movies_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(1, 2),
(3, 2),
(7, 2),
(1, 3),
(3, 3),
(4, 3),
(1, 4),
(4, 4),
(9, 4),
(8, 4),
(1, 5),
(10, 5),
(12, 5),
(11, 5),
(4, 5),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(14, 1),
(14, 2);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_movie` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_movie`, `description`, `date`, `firstname`, `lastname`) VALUES
(1, 1, 'super le film', '2023-02-02 22:53:06', 'no', 'name'),
(2, 2, 'nul à chier', '2023-02-02 22:55:34', 'théo', 'théo'),
(3, 5, '', '2023-02-02 23:34:30', '', ''),
(4, 5, 'tttt', '2023-02-02 23:34:37', 'tet', 'tet'),
(5, 1, 'super\r\n', '2023-02-03 09:50:45', 'theo', 'theo');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `title` varchar(255) DEFAULT NULL,
  `synopsis` varchar(10000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`title`, `synopsis`, `date`, `duration`, `id`, `video`) VALUES
('La Malédiction du Black Pearl', 'Petite, Elizabeth Swann, la fille du gouverneur, a sauvé de la noyade Will Turner après le naufrage de son bateau. Les années ont passé, Will et Elizabeth ont grandi. Will est devenu forgeron à Port Royal, et Elizabeth se prépare à épouser le commodore Norrington. Cependant, la vie d\'Elizabeth bascule lorsque le capitaine Barbossa et sa bande de pirates décident d\'attaquer Port Royal et la prennent en otage. Malheureusement pour lui, Barbossa a commis deux erreurs.', '2003-08-13', 143, 1, 'https://www.youtube.com/embed/DOuLRJc2zyM'),
('Le secret du coffre maudit', 'Lorsque le pirate fantôme Davy Jones vient réclamer sa dette de sang à l\'excentrique capitaine Jack Sparrow, ce dernier cherche un moyen d\'échapper à ce cruel destin qui garantirait la damnation de son âme pour l\'éternité. L\'astucieux pirate parvient cependant à interrompre le mariage des amis de Jack, Will Turner et Elizabeth Swann.', '2006-08-02', 151, 2, 'https://www.youtube.com/embed/ZJwdTWd8o_w'),
('Jusqu’au bout du monde', 'Une jeune fille s\'éprend d\'un mystérieux voyageur qui parcourt le monde pour remplir une mission secrète.', '2007-05-23', 169, 3, 'https://www.youtube.com/embed/rF6k1bXAVIg'),
('La fontaine de Jouvence', 'Dans cette histoire pleine d\'action, où vérité, trahison, jeunesse éternelle et mort forment un cocktail explosif, le capitaine Jack Sparrow retrouve une femme qu\'il a connue autrefois. Leurs liens sont-ils faits d\'amour ou cette femme n\'est-elle qu\'une aventurière sans scrupules qui cherche à l\'utiliser pour découvrir la légendaire Fontaine de Jouvence ?', '2011-05-18', 137, 4, 'https://www.youtube.com/embed/Kcqf4RqBaUI'),
('La vengeance de Salazar', 'Jack Sparrow est confronté au redoutable Capitaine Salazar et ses pirates meurtriers; Jack Sparrow se retrouve dans le Triangle des Bermudes à la recherche du légendaire Trident de Poséidon, un puissant artéfact qui donne un pouvoir absolu sur les mers.', '2017-05-24', 129, 5, 'https://www.youtube.com/embed/D8_6fSXPJr4');

-- --------------------------------------------------------

--
-- Structure de la table `movies_images`
--

CREATE TABLE `movies_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(25) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `url` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies_images`
--

INSERT INTO `movies_images` (`id`, `movie_id`, `size`, `type`, `url`) VALUES
(1, 1, '', '', 'https://fr.web.img4.acsta.net/medias/nmedia/18/35/07/46/affiche2.jpg'),
(2, 2, '', '', 'https://fr.web.img6.acsta.net/medias/nmedia/18/36/00/56/18604499.jpg'),
(3, 3, '', '', 'https://fr.web.img3.acsta.net/medias/nmedia/18/62/88/97/18754731.jpg'),
(4, 4, '', '', 'https://fr.web.img3.acsta.net/medias/nmedia/18/79/98/60/19713505.jpg'),
(5, 5, '', '', 'https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/000/987/pirates-des-caraibes-5-la-vengeance-de-salazar-affiche-987230.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `date_created`) VALUES
(101, 'admin', 'admin', 'admin@admin.fr', 'admin', '2023-01-06 11:29:35'),
(102, 'admin', 'admin', 'admin@admin.fr', 'admin', '2023-01-06 11:29:39');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies_images`
--
ALTER TABLE `movies_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `movies_images`
--
ALTER TABLE `movies_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
