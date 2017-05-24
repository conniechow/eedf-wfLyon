-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 14:20
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wflyon`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `motivation` text CHARACTER SET utf8,
  `phone` varchar(255) NOT NULL,
  `confirm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `token`, `motivation`, `phone`, `confirm`) VALUES
(14, 'tt', 'tt@tt.com', '$2y$10$BtVz5.ODca9h8NshRQQQbe8zB1IdtoH7hM/jcRxIKO.OTiZGfhb/2', 'admin', NULL, 'sdsd', '01478523698', 0),
(17, 'hgfh', 'ttttt@tt.comt', '$2y$10$k9M6OHt/rk8NHt7/IFWP3eutKWoaDuimpY7FrbPlyBm76WXy/lHkm', 'admin', NULL, 'fhd', '0147852369', 0),
(18, 'werwer', 'hgggg@fffff.com', '$2y$10$klIrlFeoFuFqh4KdhTSJruCO.bWxBYuvz7c7wGrWawVO/yp.tvRCK', 'admin', NULL, 'gffg', 'Guillermo', 0),
(20, '', 'hhhghg@dddf.com', '$2y$10$VhF3BMvqarzfjub217.dx.g3jnEfM4CvANR2Lp916dLnC5qOVKUAS', 'admin', NULL, '', '156546', 1),
(21, 'fg', 'df@df.com', '$2y$10$I/5M5sZdIu.mnX4ZciyX9OlU/DtvfYzOytLEZ2kRWdo.xaU6RaZra', 'admin', NULL, '', '123456789', 0),
(22, 'sdfsdf', 'dfgdfg@sdfsd.com', '$2y$10$.dig8XU2H0xzTBGG/53tgeqEEc2Mh86IbAbKoU8coUHfu9jLvdp9m', 'admin', NULL, '', '123', 0),
(24, 'sdfsd', 'fsssssgfgfg@ijijij.com', '$2y$10$En1dLnNSBx4rf6PMuc0PbecLNwLqjCfmJE9OkHyLxsbkkmodRc/.u', 'admin', NULL, 'fdfd', '12354', 0),
(25, 'dsfsdf', 'sdfsdfsdfsdfsd@sddfgdfgd.com', '$2y$10$iQGmHmYo1BUJ2kScEUCA.OhrakH8VeQX4AVDwLbcPEFL9o8pi.1sm', 'admin', NULL, 'sdf', '1354646987646', 0),
(28, 'tt', 'gonzalezdecastro.guillermo@gmail.com', '$2y$10$i0pBW87V1Ibb31jHc7xsT.MOzboSDRFLa29dX9hb91f22PI0BKf6S', 'admin', NULL, 'sdsd', '54', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
