-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Mai 2018 à 15:51
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(6, 1, 'simo', 'trop beau ton blog', '2017-12-12 09:24:50'),
(7, 2, 'simo', 'oui', '2017-12-12 09:26:22'),
(8, 1, 'simo', 'beauuuuu', '2017-12-12 09:31:44'),
(9, 2, 'simo', 'yep', '2017-12-12 09:33:01'),
(10, 1, 'zineb ', 'très bon article', '2017-12-12 11:07:59'),
(11, 1, 'moha', 'oui ta rauison', '2017-12-12 11:08:34'),
(12, 1, 'bobo', 'ca roule', '2017-12-12 11:14:01'),
(13, 1, 'mari ', 'oui', '2017-12-12 11:17:45'),
(14, 1, 'mehdi', 'tres bien', '2017-12-12 11:18:01'),
(15, 1, 'kamil', 'bar toi', '2017-12-13 06:57:04'),
(16, 1, 'mounir ', 'a oui', '2017-12-13 06:57:25'),
(17, 1, 'pablo', 'hola', '2017-12-13 06:57:52'),
(18, 1, 'mounir', 'tes toi', '2017-12-13 06:58:14'),
(19, 1, 'simo', 'ca marche bien', '2017-12-13 06:58:42'),
(20, 1, 'le gour', 'salam', '2017-12-13 06:58:55'),
(21, 1, 'mohamed', 'oui', '2017-12-25 09:25:44'),
(22, 2, 'mohamed', 'salut', '2017-12-22 09:21:05'),
(23, 2, 'mohamed', 'cava  ', '2017-12-25 10:56:01'),
(24, 2, 'simo', 'oui', '2018-01-01 09:38:04'),
(25, 2, 'simo', 'oui', '2018-01-01 09:46:30'),
(26, 2, 'simo', 'bye bye', '2018-01-01 09:46:50'),
(27, 2, 'simo', 'oui', '2018-01-01 09:47:27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
