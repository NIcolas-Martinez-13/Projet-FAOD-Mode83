-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 29 août 2023 à 10:15
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
-- Structure de la table `utilisateurconnecte`
--

CREATE TABLE `utilisateurconnecte` (
  `id` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `genre` tinyint(3) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `CommuneNaissance` varchar(50) NOT NULL,
  `paysNaissance` varchar(50) NOT NULL,
  `codePostal` decimal(10,0) NOT NULL,
  `niveauFormation` tinyint(6) NOT NULL,
  `numeroSecu` decimal(15,0) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurconnecte`
--

INSERT INTO `utilisateurconnecte` (`id`, `Username`, `nom`, `email`, `password`, `genre`, `date_naissance`, `CommuneNaissance`, `paysNaissance`, `codePostal`, `niveauFormation`, `numeroSecu`, `telephone`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`) VALUES
(10, 'Dovak1', '', 'mzns26@gmail.com', '$2y$10$uDK1kbSlDNnAMbe90JO9FO5GWeeC3MUrDJHxyDsTNHkke3QAx37lS', 0, NULL, '', '', '0', 0, '0', '', '7AC4PtlJJAwZsnmNgSGQHKGTxEMZoPQ5hnV8UaSA7CCZtXUsFEy7YENQTKjc', NULL, NULL, NULL, NULL),
(11, 'localhost', '', 'martinez.nicolas13320@gmail.com', '$2y$10$yH4wsAwd1qM4Y9QPDk4CIu2KDZTXHyNS1FT5Axt/tRMZTgtRR1O7y', 0, NULL, '', '', '0', 0, '0', '', NULL, '2023-08-29 09:30:43', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurconnecte`
--
ALTER TABLE `utilisateurconnecte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurconnecte`
--
ALTER TABLE `utilisateurconnecte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
