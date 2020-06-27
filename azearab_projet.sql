-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 juin 2020 à 17:19
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `azearab_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `utulisateurs`
--

CREATE TABLE `utulisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_integration` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utulisateurs`
--

INSERT INTO `utulisateurs` (`id`, `nom`, `adress`, `mail`, `date_integration`, `password`) VALUES
(7, 'youssef salim', 'test Adress 20200', 'ucefsalim@gmail.com', '2020-06-27 14:17:00', '$2y$10$K/BN4sTCoPQ.wORmXcJ.DOVMgqLNzjTW31gUXbc3CS9FhIGSw501S'),
(9, 'youssef salim', '20220', 'bbbb@gmail.Com', '2020-06-27 15:11:54', '$2y$10$x3KhkCau/AuLT/.tW2CZter0n7fBow3hbAik5iw.IYzu9HtIgs8Iu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utulisateurs`
--
ALTER TABLE `utulisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utulisateurs`
--
ALTER TABLE `utulisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
