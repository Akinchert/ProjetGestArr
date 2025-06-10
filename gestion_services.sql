-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 juin 2025 à 02:03
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
-- Structure de la table `carrivee`
--

CREATE TABLE `carrivee` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reference` varchar(50) NOT NULL,
  `expediteur` varchar(50) NOT NULL,
  `objet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carrivee`
--

INSERT INTO `carrivee` (`id`, `date`, `reference`, `expediteur`, `objet`) VALUES
(1, '2025-06-04', 'Ref: N° 003/25/CRB/CL/PN', 'CROIX-ROUGE', 'Damande d\'audience'),
(2, '2025-06-04', 'Ref: N° 003/25/CRB/CL/PN', 'CROIX-ROUGE', 'Damande d\'audience');

-- --------------------------------------------------------

--
-- Structure de la table `cdepart`
--

CREATE TABLE `cdepart` (
  `id` int(11) NOT NULL,
  `date_envoie` date NOT NULL,
  `destinataire` varchar(50) NOT NULL,
  `objet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cdepart`
--

INSERT INTO `cdepart` (`id`, `date_envoie`, `destinataire`, `objet`) VALUES
(1, '2025-06-04', 'CROIX-ROUGE', 'Reponse au courrier Ref:N°003/05/25/CRB/CL/PN/');

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
  `fichier_pdf` varchar(255) DEFAULT NULL,
  `statut` enum('En attente','En cours','Traitée') DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `numero_suivi`, `nom_demandeur`, `email`, `service`, `date_demande`, `fichier_pdf`, `statut`) VALUES
(1, NULL, 'AKADIRI Faicole', '', 'Copie Integrale', '2025-05-12', '', 'En cours'),
(2, 'DOSSIER-682201b08fcfc', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-12', '', 'Traitée'),
(3, 'DOSSIER-682209bf96c48', 'Lamidi', 'akin@gmail.com', 'légalisation', '2025-05-12', '', 'En cours'),
(4, 'DOSSIER-6824a99784738', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', '', 'En attente'),
(5, 'DOSSIER-6824c586a9d24', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', '', 'En attente'),
(6, 'DOSSIER-6824c97ef1b18', 'Lamidi', 'k@k.fr', 'Collecte des déchets', '2025-05-14', '', 'En attente'),
(7, 'DOSSIER-6824cce23de9f', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', '', 'En attente'),
(8, 'DOSSIER-6824cd01ae215', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', '', 'En attente'),
(9, 'DOSSIER-6824ce7931535', 'AKANY Liliane', 'k@k.fr', 'légalisation', '2025-05-14', '', 'En attente'),
(10, 'DOSSIER-6825f20f92aa2', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', '', 'En attente'),
(11, 'DOSSIER-6825f30131ad7', 'olaitan DANGBE', 'S@GMAIL.COM', 'légalisation', '2025-05-15', '', 'En attente'),
(12, 'DOSSIER-6825f483407d3', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', '', 'En attente'),
(13, 'DOSSIER-6825f6d517d80', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', '', 'En attente'),
(14, 'DOSSIER-6825f77cb4ced', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-15', '', 'En cours'),
(15, 'DOSSIER-6825f869eeaf5', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', '', 'En attente'),
(16, 'DOSSIER-6825f8796ebe1', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', '', 'En attente'),
(17, 'DOSSIER-6825fa92e602e', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', '', 'En attente'),
(18, 'DOSSIER-6825fd93d5de5', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'légalisation', '2025-05-15', '', 'En attente'),
(19, 'DOSSIER-6826020460d0f', 'AKADIRI Faicole', 'k@k.fr', 'Service de nettoyage', '2025-05-15', '', 'En attente'),
(20, 'DOSSIER-6826023916e4f', 'AKADIRI Faicole', 'k@k.fr', 'Service de nettoyage', '2025-05-15', '', 'En attente'),
(21, 'DOSSIER-68261545c4bcb', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', '', 'En attente'),
(22, 'DOSSIER-6826161059f0c', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', '', 'En attente'),
(23, 'DOSSIER-6826163c990ef', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', '', 'En attente'),
(24, 'DOSSIER-68261853b6c8f', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', '', 'En attente'),
(25, 'DOSSIER-682618afe183a', 'AKANY Liliane', 'akin@gmail.com', 'Collecte des déchets', '2025-05-15', '', 'En attente'),
(26, 'DOSSIER-6830c6dae6de5', 'lola', 'akinchert@gmail.com', 'légalisation', '2025-05-23', '', 'Traitée'),
(27, 'DOSSIER-6835b8779352d', 'AKANY Liliane', 'akinchert@yahoo.fr', 'Autorisation parentale PASSEPORT', '2025-05-27', '', 'Traitée'),
(28, 'DOSSIER-6835bbb81a408', 'olaitan DANGBE', 'akinchert619@gmail.com', 'Autorisation parentale VISA', '2025-05-27', '', 'En attente'),
(29, 'DOSSIER-6835cbad7d905', 'olaitan DANGBE', 'akinchert619@gmail.com', 'Autorisation parentale VISA', '2025-05-27', '', 'En attente'),
(30, 'DOSSIER-6835cbd334bb1', 'AKANY Liliane', 'akinchert619@gmail.com', 'Procuration', '2025-05-27', '', 'En attente'),
(31, 'DOSSIER-6835cf59c745f', 'AKANY Liliane', 'akinchert619@gmail.com', 'Procuration', '2025-05-27', '', 'En attente'),
(32, 'DOSSIER-6835d06e53f11', 'AKANY Liliane', 'akinchert619@gmail.com', 'Procuration', '2025-05-27', '', 'En attente'),
(33, 'DOSSIER-6835d0e7f24b1', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-27', '', 'En attente'),
(34, 'DOSSIER-6835d338f0d3f', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'Procuration', '2025-05-27', '', 'En attente'),
(35, 'DOSSIER-6835d55265d48', 'AKANY Liliane', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-05-27', '', 'En attente'),
(36, 'DOSSIER-6835e00bf3594', 'AKANY Liliane', 'akinchert619@gmail.com', 'Copie Integrale', '2025-05-27', '', 'En attente'),
(37, 'DOSSIER-68446f69af750', 'ANNANI Hikmanth', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '', 'En attente'),
(38, 'DOSSIER-6844704657e6d', 'ANNANI Hikmanth', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '', 'En attente'),
(39, 'DOSSIER-684477e971f26', 'AKADIRI Faicole', 'akinchert619@gmail.com', 'Copie simple', '2025-06-07', '', 'En attente'),
(40, 'DOSSIER-6844780032d7b', 'AKADIRI Faicole', 'akinchert619@gmail.com', 'Copie simple', '2025-06-07', '', 'En attente'),
(41, 'DOSSIER-6844785788fe2', 'ANANNI Halali', 'akinchert619@gmail.com', 'Copie simple', '2025-06-07', '', 'En attente'),
(42, '10H/68448eb395940', 'Houdath BADAROU', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', NULL, 'En attente'),
(43, '10H/68448efd5f219', 'Houdath BADAROU', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '68448efd5f23d_Facture_EM01151777-7_20250425154749.pdf', 'En attente'),
(44, '10H/68449ffb166e9', 'MARTIS Okanlawan', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '68449ffb16708_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(45, '10H/6844a9b268203', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-07', '6844a9b26826d_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(46, '10H/6844aacb2df97', 'Ololade AKANNI', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-07', '6844aacb2dfc4_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(47, '10H/6844aaf26c0c7', 'Houdath BADAROU', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-07', '6844aaf26c0ec_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(48, '10H/6844abbe09f93', 'AKANY Liliane', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-07', '6844abbe09fb7_Facture_EM01151777-7_20250425162023.pdf', 'En attente'),
(49, '10H/6844b29415312', 'ANANNI Hikmath', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '6844b2941533f_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(50, '10H/6844b4265a75a', 'Ololade AKANNI', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-07', '6844b4265a77a_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(51, '10H/6844b4545c2d5', 'ANANNI Hikmath', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-07', '6844b4545c2f7_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(52, '10H/6844b82dde18f', 'ALALA Tokpe', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-08', '6844b82dde1bd_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(53, '10H/6844b8a06dd06', 'Lamidi', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-08', '6844b8a06dd21_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(54, '10H/6844b971e897e', 'AKADIRI Faicole', 'akin@gmail.com', 'Copie Integrale', '2025-06-08', '6844b971e89a0_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(55, '10H/6844b9e87cc2f', 'AKADIRI Faicole', 'akin@gmail.com', 'Copie Integrale', '2025-06-08', '6844b9e87cc4e_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(56, '10H/6844ba400fdce', 'AKADIRI Faicole', 'akin@gmail.com', 'Copie Integrale', '2025-06-08', '6844ba400fdf1_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(57, '10H/6844bab944049', 'AKADIRI Faicole', 'akinchert@yahoo.fr', 'Copie simple', '2025-06-08', '6844bab944064_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(58, '10H/6844bb52bb1c9', 'Houdath BADAROU', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-08', '6844bb52bb1f3_Facture_EM01151777-7_20250425154749.pdf', 'En attente'),
(59, '10H/6844c47dc4304', 'olaitan DANGBE', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-08', '6844c47dc439e_Mentions_légales Arrondissement-3.pdf', 'En attente'),
(60, '10H/6844c50249e39', 'ANANNI Hikmath', 'akinchert@yahoo.fr', 'Copie Integrale', '2025-06-08', '6844c50249e52_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(61, '10H/684612c058188', 'olaitan DANGBE', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684612c0581a9_Facture_EM01151777-7_20250425154822.pdf', 'Traitée'),
(62, '10H/6846135badd99', 'Ololade AKANNI', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '6846135baddcc_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(63, '10H/684613afe094f', 'MARTIS Okanlawan', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684613afe0974_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(64, '10H/6846145c06b56', 'olaitan DANGBE', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '6846145c06b83_Facture_EM01151777-7_20250425154749 (1).pdf', 'En attente'),
(65, '10H/684614a0bad0c', 'ASSOGBA  Jean', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684614a0bad32_Mentions_légales Arrondissement-3.pdf', 'En attente'),
(66, '10H/684617206398d', 'ALALA Tokpe', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '68461720639b7_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(67, '10H/684618bb3a2e1', 'Lamidi', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684618bb3a30d_Mentions_légales Arrondissement-2.pdf', 'En attente'),
(68, '10H/68461f1d7ebf6/MPN/SE/SAA1/divEC', 'ANANNI Hikmath', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '68461f1d7ec21_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(69, '10H/6846214ab79c0/MPN/ARR1/SE/SAA/divEC', 'Ololade AKANNI', 'akinchert619@gmail.com', 'Copie simple', '2025-06-09', '6846214ab79eb_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(70, '10H/68471372e5489/MPN/ARR1/SE/SAA/divEC', 'AMANI Latifatoulai', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '68471372e54a6_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(71, '10H/68472494a7bac/MPN/ARR1/SE/SAA/divEC', 'Houdath BADAROU', 'akinchert619@gmail.com', 'Copie simple', '2025-06-09', '68472494a7bcc_Facture_EM01151777-7_20250425154926.pdf', 'En attente'),
(72, '10H/684727fec1899/MPN/ARR1/SE/SAA/divEC', 'halil AKADIRI', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684727fec18e8_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(73, '10H/68472e89def2d/MPN/ARR1/SE/SAA/divEC', 'AKADIRI Faicole', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '68472e89def4c_Facture_EM01151777-7_20250425154749.pdf', 'En attente'),
(74, '10H/68473d9180c9c/MPN/ARR1/SE/SAA/divEC', 'Ololade AKANNI', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '68473d9180cb4_Facture_EM01151777-7_20250425154822.pdf', 'En attente'),
(75, '10H/6847402f46f87/MPN/ARR1/SE/SAA/divEC', 'ALALA Tokpe', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '6847402f46fa8_Facture_EM01151777-7_20250425160033.pdf', 'En attente'),
(76, '10H/684742636b23c/MPN/ARR1/SE/SAA/divEC', 'AKADIRI Raimi', 'akinchert619@gmail.com', 'Copie Integrale', '2025-06-09', '684742636b274_Facture_EM01151777-7_20250425154749.pdf', 'En attente');

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
(11, 'akadiri Maida', 'S@GMAIL.COM', 'Suggestion', 'dddddddddddd', '2025-05-15 16:45:37', 'Non traitée'),
(12, 'akadiri Maida', 'akinchert619@gmail.com', 'Suggestion', 'Revoyez le code', '2025-06-09 02:13:00', 'Non traitée'),
(13, 'akadiri Maida', 'akinchert619@gmail.com', 'Suggestion', 'Revoyez le code', '2025-06-09 02:18:44', 'Non traitée'),
(14, 'akadiri Maida', 'akinchert619@gmail.com', 'Suggestion', 'Revoyez le code', '2025-06-09 02:19:46', 'Non traitée'),
(15, 'akadiri Maida', 'akinchert619@gmail.com', 'Suggestion', 'Revoyez le code', '2025-06-09 02:21:24', 'Non traitée');

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

CREATE TABLE `registre` (
  `id` int(11) NOT NULL,
  `numero_suivi` varchar(50) NOT NULL,
  `nom_demandeur` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `entite` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date_demande` date NOT NULL,
  `observations` varchar(100) NOT NULL,
  `fichier_pdf` longblob DEFAULT NULL,
  `date_reponse` date DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registre`
--

INSERT INTO `registre` (`id`, `numero_suivi`, `nom_demandeur`, `email`, `telephone`, `entite`, `service`, `date_demande`, `observations`, `fichier_pdf`, `date_reponse`, `statut`) VALUES
(1, 'REG.1ER.ARR/PN-6835f21c02f54', 'AKADIRI Faicole', '', '0197458474', 'halil', 'Mariage', '2025-05-27', 'Dépôt du droit de mariage et les pièces. A programmer', NULL, NULL, NULL),
(2, 'REG.1ER.ARR/PN-6835fa788b769', 'AKANY Liliane', '', '0197458474', 'halil', 'Paternite', '2025-05-27', 'aucun', NULL, NULL, NULL),
(3, 'REG.1ER.ARR/PN-6836ebc45a94e', 'Ololade AKANNI', 'akinchert619@gmail.com', '0197458474', 'halil', 'copieI', '2025-05-28', 'Neant', NULL, NULL, NULL),
(4, 'REG.1ER.ARR/PN-6837485b8d3a6', 'Ololade AKANNI', 'akinchert619@gmail.com', '0197458474', 'halil', 'copieI', '2025-05-28', 'Neant', NULL, NULL, NULL),
(5, '', '', '', '', '', '', '0000-00-00', '', 0x7265706f6e73655f313734383539323635312e706466, NULL, 'Répondu'),
(6, 'REG.1ER.ARR/PN-68397a1f99645', 'ALAO Brice', 'admin@gmail.com', '96997577', 'halil', 'Naissance', '2025-05-30', 'Aucun', NULL, NULL, NULL),
(7, 'REG.1ER.ARR/PN-683f1ec3534b6', 'ASSOGBA  Jean', 'akinchert619@gmail.com', '0197458474', 'halil', 'souche', '2025-06-03', 'Neant', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `numero_suivi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nom_demandeur` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `fichier_pdf` longblob NOT NULL,
  `date_traitement` date DEFAULT NULL,
  `statut` varchar(100) NOT NULL,
  `envoyee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `numero_suivi`, `email`, `nom_demandeur`, `service`, `fichier_pdf`, `date_traitement`, `statut`, `envoyee`) VALUES
(1, 'REG.1ER.ARR/PN-6836ebc45a94e', 'akinchert619@gmail.com', 'Ololade AKANNI', '', 0x313734383539353734335f466163747572655f454d30313135313737372d375f32303235303432353136323032332e706466, NULL, 'en attente', 1),
(2, 'REG.1ER.ARR/PN-6837485b8d3a6', 'akinchert619@gmail.com', 'Ololade AKANNI', '', 0x313734383539363939345f466163747572655f454d30313135313737372d375f32303235303432353136323032332e706466, '0000-00-00', 'Traité', 0),
(3, 'REG.1ER.ARR/PN-68397a1f99645', 'admin@gmail.com', 'ALAO Brice', '', 0x313734383539373434345f466163747572655f454d30313135313737372d375f32303235303432353136323032332e706466, '2025-05-30', 'Traité', 0),
(4, 'REG.1ER.ARR/PN-6836ebc45a94e', 'akinchert619@gmail.com', 'Ololade AKANNI', '', 0x313734383730363738325f466163747572655f454d30313135313737372d375f32303235303432353136323032332e706466, '2025-05-31', 'Traité', 1),
(5, 'REG.1ER.ARR/PN-683f1ec3534b6', 'akinchert619@gmail.com', 'ASSOGBA  Jean', '', 0x313734383936373232335f466163747572655f454d30313135313737372d375f32303235303432353135343733322e706466, '2025-06-03', 'Traité', 1),
(6, '10H/6846145c06b56', 'akinchert619@gmail.com', 'Copie Integrale', '', 0x313734393437383730365f466163747572655f454d30313135313737372d375f32303235303432353135343832322e706466, '2025-06-09', 'Traité', 1),
(7, '10H/684612c058188', 'akinchert619@gmail.com', 'olaitan DANGBE', 'Copie Integrale', 0x313734393437393532395f466163747572655f454d30313135313737372d375f32303235303432353135343932362e706466, '2025-06-09', 'Traité', 1),
(8, '10H/68471372e5489/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'AMANI Latifatoulai', 'Copie Integrale', 0x313734393438383639375f466163747572655f454d30313135313737372d375f32303235303432353135343734392e706466, '2025-06-09', 'Traité', 1),
(9, '10H/68472494a7bac/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'Houdath BADAROU', 'Copie simple', 0x313734393439323934355f466163747572655f454d30313135313737372d375f3230323530343235313534373439202831292e706466, '2025-06-09', 'Traité', 1),
(10, '10H/684727fec1899/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'halil AKADIRI', 'Copie Integrale', 0x313734393439343030385f466163747572655f454d30313135313737372d375f32303235303432353135343734392e706466, '2025-06-09', 'Traité', 1),
(11, '10H/68472e89def2d/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'AKADIRI Faicole', 'Copie Integrale', 0x313734393439353437315f466163747572655f454d30313135313737372d375f32303235303432353135343932362e706466, '2025-06-09', 'Traité', 1),
(12, '10H/68473d9180c9c/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'Ololade AKANNI', 'Copie Integrale', 0x313734393439393335305f466163747572655f454d30313135313737372d375f32303235303432353135343832322e706466, '2025-06-09', 'Traité', 1),
(13, '10H/6847402f46f87/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'ALALA Tokpe', 'Copie Integrale', 0x313734393439393939325f466163747572655f454d30313135313737372d375f32303235303432353135343932362e706466, '2025-06-09', 'Traité', 1),
(14, '10H/684742636b23c/MPN/ARR1/SE/SAA/divEC', 'akinchert619@gmail.com', 'AKADIRI Raimi', 'Copie Integrale', 0x313734393530303535335f466163747572655f454d30313135313737372d375f32303235303432353136303033332e706466, '2025-06-09', 'Traité', 1);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `Type` enum('En ligne','Presentiel') NOT NULL DEFAULT 'Presentiel',
  `prix` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `Type`, `prix`, `created_at`) VALUES
(6, 'Copie Integrale', 'Timbre 1000 - Copie de la souche', 'En ligne', '2200.00', '2025-05-08 11:15:44'),
(7, 'Autorisation parentale VISA', 'Copie du CIP des parents et du mineur', 'Presentiel', '1300.00', '2025-05-26 09:50:51'),
(8, 'Autorisation parentale PASSEPORT', 'Copie du CIP des parents et du mineur', 'Presentiel', '1300.00', '2025-05-26 10:13:58'),
(9, 'Légalisation', 'Timbre de 500 et la copie originale', 'Presentiel', '500.00', '2025-05-26 11:28:57'),
(10, 'Copie simple', 'Copie de la souche', 'En ligne', '1200.00', '2025-05-26 11:31:39'),
(11, 'Procuration', 'Copie de CIP des deux parties', 'Presentiel', '1300.00', '2025-05-26 11:40:34'),
(12, 'Certificat de décès', 'Fiche de renseignement - Cip du défunt et du déclarant', 'Presentiel', '2300.00', '2025-05-26 11:42:28');

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
-- Structure de la table `tentatives_connexion`
--

CREATE TABLE `tentatives_connexion` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `date_tentative` datetime NOT NULL DEFAULT current_timestamp(),
  `reussie` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'halil', 'k@k.fr', '$2y$10$ouwhYYx0QBTWtC3uBKuYye6QZ0U1swwrFOUjfAy2kn3UH3TN/sSNK', 'personnel', '2025-05-08 21:20:18'),
(12, 'ololade', 'akinchert619@gmail.com', '$2y$10$fljVBv.alPCHUnA9S91mNuLmN9G1k09YmWakJLYUFDzQWHm9/duMq', 'client', '2025-06-08 22:23:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carrivee`
--
ALTER TABLE `carrivee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cdepart`
--
ALTER TABLE `cdepart`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
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
-- Index pour la table `tentatives_connexion`
--
ALTER TABLE `tentatives_connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `unique_username_email` (`username`,`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carrivee`
--
ALTER TABLE `carrivee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cdepart`
--
ALTER TABLE `cdepart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `registre`
--
ALTER TABLE `registre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `suivi_dossiers`
--
ALTER TABLE `suivi_dossiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `tentatives_connexion`
--
ALTER TABLE `tentatives_connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
