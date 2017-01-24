-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Janvier 2017 à 12:26
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpcombat`
--

-- --------------------------------------------------------

--
-- Structure de la table `bibli`
--

CREATE TABLE `bibli` (
  `nom` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bibli`
--

INSERT INTO `bibli` (`nom`, `date`, `id`) VALUES
('teggdgdgdg', '2017-01-23 13:38:43', 5),
('zeqrzetrte', '2017-01-23 13:38:43', 7),
('trghdwdfgdg', '2017-01-23 13:38:43', 8),
('rtetetre555', '2017-01-23 13:38:43', 9),
('5856846treter', '2017-01-23 13:38:43', 10),
('sss', '2017-01-23 15:32:27', 11),
('qsdqsdsqd', '2017-01-23 15:35:25', 13),
('trt', '2017-01-24 11:18:02', 17);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bibli`
--
ALTER TABLE `bibli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bibli`
--
ALTER TABLE `bibli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
