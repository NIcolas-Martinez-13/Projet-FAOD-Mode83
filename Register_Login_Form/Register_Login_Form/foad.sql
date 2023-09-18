-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 18 sep. 2023 à 07:59
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foad`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `idAdresse` int(11) NOT NULL,
  `codePostal` decimal(10,0) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`idAdresse`, `codePostal`, `adresse`, `pays`) VALUES
(50, '13320', 'allée des norias', 'france');

-- --------------------------------------------------------

--
-- Structure de la table `habite`
--

CREATE TABLE `habite` (
  `idUser` int(11) NOT NULL,
  `idAdresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`idUser`, `nom`, `email`, `telephone`) VALUES
(1, 'Leach', 'syquzola@mailinator.com', '15279075042'),
(2, 'Small', 'qaqi@mailinator.com', '16791883867'),
(9, 'Ochoa', 'mzns26@gmail.com', '2868813933');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurconnecte`
--

CREATE TABLE `utilisateurconnecte` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `genre` enum('Homme','Femme','Non_binaire','') DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `codePostal` decimal(10,0) DEFAULT NULL,
  `niveauFormation` enum('Doctorat','Master','premier_Cycle','Lycee','College','Autre') DEFAULT NULL,
  `numeroSecu` varchar(15) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurconnecte`
--

INSERT INTO `utilisateurconnecte` (`idUser`, `Username`, `nom`, `prenom`, `email`, `password`, `genre`, `date_naissance`, `adresse`, `ville`, `pays`, `codePostal`, `niveauFormation`, `numeroSecu`, `telephone`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`) VALUES
(26, 'kyzudel', 'Cochran', 'Indigo', 'kovyw@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'bZEylefOkmSMw0uJWGkzjXeB3ZxhjmJp7zqX9zVusvHg3GalIN9HYwcm6B1L', NULL, NULL, NULL, NULL),
(27, 'zatyqos', 'Gould', 'Nicole', 'lawajy@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'aTmqCIga1YGXfjyE2fC9EEfvTaun6ansoKkTXeUTTSVRRcjJ86j0WYVyMIMg', NULL, NULL, NULL, NULL),
(28, 'revedoqen', 'Harvey', 'Hanae', 'qexivy@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Femme', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'wpuzHq3DrHyboY0JLnOrhh2pgPeg0dGE6c9g2fVotBImAoK2j9baHeJUlREH', NULL, NULL, NULL, NULL),
(29, 'cakagyz', 'Mayer', 'Lacy', 'fuje@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Non_binaire', '1978-09-22', '', NULL, NULL, NULL, NULL, NULL, NULL, 'fZYpyLJysFCnDSWZqZU25cOKe2f6j0tVfn5d3WpYhHb801vmAE0arTw1VskQ', NULL, NULL, NULL, NULL),
(30, 'jabyvijyd', 'Carrillo', 'Yen', 'zomuta@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Femme', '2014-04-01', '', 'Ut dolorem aliquip t', NULL, NULL, NULL, NULL, NULL, 'sdbMEHJFdIe2jRt08sn0W9iWhF3eUuVPiWSidMwPmoQIoesvretK72zEdRmq', NULL, NULL, NULL, NULL),
(31, 'mezanyhidi', 'Davis', 'Holmes', 'bakaloj@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', '1972-06-24', '', 'In perferendis commo', 'Aute eius nihil impe', '27029', NULL, NULL, NULL, 'o27bwv2Xvlk9fOnny4qNhgKcOG4Ynv9k1zuCAHGY8NKt0Xi0cVXWhdo6Ycww', NULL, NULL, NULL, NULL),
(32, 'komewum', 'Jennings', 'Sasha', 'zamusu@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', '1977-07-14', '', 'Minima dolores ipsum', 'Voluptatum quia sed ', '39630', NULL, NULL, NULL, '2TPeU0RAdw4mlx0Ie1s4mNacXXCUVqPlw7C5VB9gBdZNFOmzRhuI0Ca2fXi5', NULL, NULL, NULL, NULL),
(33, 'buvynod', 'Russo', 'Kirby', 'xoma@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', '1973-03-28', '', 'Eius aliquip hic qua', 'Alias sunt enim volu', '81354', 'Master', '123423423423423', '1647 9437721', NULL, '2023-09-01 16:02:18', NULL, NULL, NULL),
(51, 'niquzyb', 'Clay', 'Tad', 'folifodec@mailinator.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', '1997-02-23', '', 'Corrupti ut eiusmod', 'Molestias quasi dolo', '48072', 'premier_Cycle', '100020300000002', '16392712172', 'BeJy2CHSo62cIuoGslGmi6RuvA85GZZGahik08wJaMSCfgg5iZadD0zaJaHf', NULL, NULL, NULL, NULL),
(68, 'larymyfod', 'Walton', 'Dorian', 'Xineus1366@gmail.com', '$2y$10$qlZLWMojGcyQ3G00MaT/QOnOxjHldUCbkX8rAs.tDpapGCtqoyx5m', 'Homme', '2000-01-30', '', 'Eaque cupiditate ad ', 'Fugiat veniam est ', '54644', 'College', '100020300204230', '5490103915', NULL, '2023-09-14 13:43:02', NULL, NULL, '5BRudFR69chXUEJWBb33bYGC9JCyBixMVgtM88H45dMbXhhTshgSyVN9keW21mdc7U3ahCh6sFgFiFZ9XyP5piwfVUCrPtDF0rqz2CKEVVOCJD4yW5c6jio27Z5cpEHQqMk1kqEz5xVPEYvO0nLt5lrxZRYUM1IkMTAMi4GbcMMzy08xOcMacuRUm2HXltxCKzJxvKYDVScmPxVOI1JbmEauZHd2xvZo8yMljUZTcfNjJscRAEzlNpL1Vc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`idAdresse`);

--
-- Index pour la table `habite`
--
ALTER TABLE `habite`
  ADD PRIMARY KEY (`idUser`,`idAdresse`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `utilisateurconnecte`
--
ALTER TABLE `utilisateurconnecte`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `idAdresse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateurconnecte`
--
ALTER TABLE `utilisateurconnecte`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
