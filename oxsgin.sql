-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 01 août 2021 à 00:12
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oxsgin`
--

-- --------------------------------------------------------

--
-- Structure de la table `toy`
--

CREATE TABLE `toy` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `phone` int(255) NOT NULL,
  `place` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `toy`
--

INSERT INTO `toy` (`id`, `name`, `code`, `phone`, `place`, `date`) VALUES
(18, 'linde gaz', 'الجزائر', 660792324, 'https://www.google.com/maps/dir//linde+gas+reghaia/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x128e5b52c6979931:0xb2dc5142268ce76a?sa=X&ved=2ahUKEwih9-X64YvyAhWlyoUKHdozBCUQ9RcwC3oECDcQAw', '2021-07-30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'root', 'sahib@burning-desire.in', '0d3c7d2741ca2d1cb11fadf3e5645830', '2021-07-30 18:32:42'),
(2, 'admin@gmail.com', 'zaidanline67@gmail.com', '0d3c7d2741ca2d1cb11fadf3e5645830', '2021-07-30 19:33:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `toy`
--
ALTER TABLE `toy`
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
-- AUTO_INCREMENT pour la table `toy`
--
ALTER TABLE `toy`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
