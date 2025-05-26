-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 mai 2025 à 10:10
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_services`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` int(11) NOT NULL,
  `numero_suivi` varchar(50) DEFAULT NULL,
  `nom_demandeur` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date_demande` date NOT NULL,
  `statut` enum('En attente','En cours','Traitée') DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `numero_suivi`, `nom_demandeur`, `email`, `service`, `date_demande`, `statut`) VALUES
(1, NULL, 'AKADIRI Faicole', '', 'Copie Integrale', '2025-05-12', 'En cours'),
(2, 'DOSSIER-682201b08fcfc', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-12', 'Traitée'),
(3, 'DOSSIER-682209bf96c48', 'Lamidi', 'akin@gmail.com', 'légalisation', '2025-05-12', 'En cours'),
(4, 'DOSSIER-6824a99784738', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', 'En attente'),
(5, 'DOSSIER-6824c586a9d24', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', 'En attente'),
(6, 'DOSSIER-6824c97ef1b18', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', 'En attente'),
(7, 'DOSSIER-6824cce23de9f', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', 'En attente'),
(8, 'DOSSIER-6824cd01ae215', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', 'En attente'),
(9, 'DOSSIER-6824ce7931535', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', 'En attente'),
(10, 'DOSSIER-6825f20f92aa2', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', 'En attente'),
(11, 'DOSSIER-6825f30131ad7', 'olaitan DANGBE', 'S@GMAIL.COM', 'légalisation', '2025-05-15', 'En attente'),
(12, 'DOSSIER-6825f483407d3', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', 'En attente'),
(13, 'DOSSIER-6825f6d517d80', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', 'En attente'),
(14, 'DOSSIER-6825f77cb4ced', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', 'En cours'),
(15, 'DOSSIER-6825f869eeaf5', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', 'En attente'),
(16, 'DOSSIER-6825f8796ebe1', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', 'En attente'),
(17, 'DOSSIER-6825fa92e602e', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', 'En attente'),
(18, 'DOSSIER-6825fd93d5de5', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', 'En attente'),
(19, 'DOSSIER-6826020460d0f', 'AKADIRI Faicole', 'k@k.fr', 'Service de nettoyage', '2025-05-15', 'En attente'),
(20, 'DOSSIER-6826023916e4f', 'AKADIRI Faicole', 'k@k.fr', 'Service de nettoyage', '2025-05-15', 'En attente'),
(21, 'DOSSIER-68261545c4bcb', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', 'En attente'),
(22, 'DOSSIER-6826161059f0c', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', 'En attente'),
(23, 'DOSSIER-6826163c990ef', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', 'En attente'),
(24, 'DOSSIER-68261853b6c8f', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', 'En attente'),
(25, 'DOSSIER-682618afe183a', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', 'En attente'),
(26, 'DOSSIER-6830c6dae6de5', 'lola', 'akinchert@gmail.com', 'légalisation', '2025-05-23', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(11) NOT NULL,
  `nom_citoyen` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type_reclamation` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date_soumission` datetime DEFAULT current_timestamp(),
  `statut` varchar(50) DEFAULT 'Non traitée'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `nom_citoyen`, `email`, `type_reclamation`, `message`, `date_soumission`, `statut`) VALUES
(1, 'akadiri Maida', 'akin@gmail.com', 'Suggestion', 'Bien vouloir permettre au citoyen de supprimer', '2025-05-12 20:51:34', 'Non traitée'),
(2, 'akadiri Maida', 'k@k.fr', 'Suggestion', 'bien vouloir changer la couleur de la  page d\'acceuil', '2025-05-13 18:00:35', 'Non traitée'),
(3, 'akadiri Maida', 'k@k.fr', 'Suggestion', 'bien vouloir changer la couleur de la  page d\'acceuil', '2025-05-13 18:06:49', 'Non traitée'),
(4, 'akinchert', 'akinchert@yahoo.fr', 'Plaintes', 'Manque de respect', '2025-05-13 18:07:19', 'Non traitée'),
(5, 'akinchert', 'akinchert@yahoo.fr', 'Plaintes', 'Manque de respect', '2025-05-13 18:09:40', 'Non traitée'),
(6, 'akinchert', 'akinchert@yahoo.fr', 'Plaintes', 'Manque de respect', '2025-05-13 18:10:17', 'Non traitée'),
(7, 'akinchert', 'akinchert@yahoo.fr', 'Plaintes', 'Manque de respect', '2025-05-13 18:11:18', 'Non traitée'),
(8, 'akinchert', 'akinchert@yahoo.fr', 'Plaintes', 'Manque de respect', '2025-05-13 18:16:36', 'Non traitée'),
(9, 'Jeanne', 'akin@gmail.com', 'Doléance', 'akim est un cas', '2025-05-14 18:57:51', 'Non traitée'),
(10, 'akadiri Maida', 'S@GMAIL.COM', 'Suggestion', 'dddddddddddd', '2025-05-15 16:45:19', 'Non traitée'),
(11, 'akadiri Maida', 'S@GMAIL.COM', 'Suggestion', 'dddddddddddd', '2025-05-15 16:45:37', 'Non traitée');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `prix`, `created_at`) VALUES
(1, 'Service de nettoyage', 'Nettoyage des rues', '0.00', '2025-05-06 20:48:03'),
(2, 'Collecte des déchets', 'Ramassage quotidien des ordures', '0.00', '2025-05-06 20:48:03'),
(5, 'légalisation', 'Timbre de 500 et la copie originale', '0.00', '2025-05-08 10:36:46'),
(6, 'Copie Integrale', 'Timbre 1000 - Copie de la souche', '1200.00', '2025-05-08 11:15:44');

-- --------------------------------------------------------

--
-- Structure de la table `suivi_dossiers`
--

CREATE TABLE `suivi_dossiers` (
  `id` int(11) NOT NULL,
  `id_demande` int(11) DEFAULT NULL,
  `action` text DEFAULT NULL,
  `effectue_par` varchar(100) DEFAULT NULL,
  `date_action` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suivi_dossiers`
--

INSERT INTO `suivi_dossiers` (`id`, `id_demande`, `action`, `effectue_par`, `date_action`) VALUES
(1, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-12 23:08:01'),
(2, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-12 23:12:02'),
(3, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-12 23:13:21'),
(4, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-12 23:16:14'),
(5, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-12 23:18:51'),
(6, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 13:27:02'),
(7, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 13:29:00'),
(8, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 13:29:15'),
(9, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 14:37:17'),
(10, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 14:39:16'),
(11, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:42:07'),
(12, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:42:34'),
(13, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:48:48'),
(14, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:49:12'),
(15, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:49:40'),
(16, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:50:25'),
(17, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 15:51:07'),
(18, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:49:19'),
(19, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:49:45'),
(20, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:51:20'),
(21, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:53:25'),
(22, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:54:08'),
(23, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:54:44'),
(24, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:58:26'),
(25, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 16:58:56'),
(26, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:00:16'),
(27, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:01:17'),
(28, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:01:38'),
(29, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:51:16'),
(30, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:54:47'),
(31, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 17:59:46'),
(32, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:00:35'),
(33, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:06:49'),
(34, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:07:19'),
(36, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:10:17'),
(37, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:11:19'),
(38, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:16:36'),
(39, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:25:23'),
(40, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:31:07'),
(41, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:31:40'),
(42, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:34:05'),
(43, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:34:40'),
(44, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:52:21'),
(45, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:53:34'),
(46, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:54:58'),
(47, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:55:27'),
(48, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:56:15'),
(49, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:56:33'),
(50, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:57:26'),
(51, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:57:30'),
(52, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 18:57:44'),
(53, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:00:37'),
(54, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:00:43'),
(55, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:03:53'),
(56, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:04:25'),
(57, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:05:21'),
(58, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:08:30'),
(59, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:10:47'),
(60, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:10:54'),
(61, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:19:14'),
(62, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 19:19:20'),
(63, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 22:39:10'),
(64, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 23:12:12'),
(65, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 23:12:42'),
(66, NULL, 'Statut mis à jour à \'\'', 'Admin', '2025-05-13 23:15:46'),
(67, NULL, 'Statut mis à jour à [\'\', \'\']', 'Admin', '2025-05-13 23:18:19'),
(68, NULL, 'Statut mis à jour à [\'\']', 'Admin', '2025-05-13 23:18:42'),
(69, NULL, 'Statut mis à jour à [\'\']', 'Admin', '2025-05-14 10:21:42'),
(70, NULL, 'Statut mis à jour à [\'\']', 'Admin', '2025-05-14 10:22:39'),
(71, NULL, 'Statut mis à jour à [\'\']', 'Admin', '2025-05-14 10:22:56');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client','personnel') DEFAULT 'client',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', '', 'admin', 'admin', '2025-05-06 20:48:03'),
(2, 'client', '', 'client_password_hash', 'client', '2025-05-06 20:48:03'),
(3, 'akinchert', 'akinchert@yahoo.fr', '$2y$10$NfsV7OrnhOLmiE0DzuYyCuV6P/jB6rZwKS/OgzDOj1O6S9zPNWdX2', 'client', '2025-05-06 22:14:29'),
(4, 'akadiri', 'akin@gmail.com', '$2y$10$mXUqHevkod5LZFaf//jH1ulttC2idQiUXqzCmrzzyoh1hzYxfeI4e', 'admin', '2025-05-06 22:50:55'),
(7, 'admin1', 'akinchert@gmail.com', '123456', 'admin', '2025-05-08 21:00:31'),
(8, 'halil', 'k@k.fr', '$2y$10$ouwhYYx0QBTWtC3uBKuYye6QZ0U1swwrFOUjfAy2kn3UH3TN/sSNK', 'personnel', '2025-05-08 21:20:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_suivi` (`numero_suivi`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suivi_dossiers`
--
ALTER TABLE `suivi_dossiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_demande` (`id_demande`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `suivi_dossiers`
--
ALTER TABLE `suivi_dossiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `suivi_dossiers`
--
ALTER TABLE `suivi_dossiers`
  ADD CONSTRAINT `suivi_dossiers_ibfk_1` FOREIGN KEY (`id_demande`) REFERENCES `demandes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
