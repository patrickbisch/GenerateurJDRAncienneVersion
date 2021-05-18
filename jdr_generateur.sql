-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 18 mai 2021 à 07:03
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jdr_generateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `jdr_campagne`
--

CREATE TABLE `jdr_campagne` (
  `id_campagne` int(11) NOT NULL,
  `campagne` varchar(40) NOT NULL,
  `id_jdr` int(11) NOT NULL,
  `id_maitre` int(11) NOT NULL,
  `nbJoueur` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jdr_campagne`
--

INSERT INTO `jdr_campagne` (`id_campagne`, `campagne`, `id_jdr`, `id_maitre`, `nbJoueur`) VALUES
(1, 'Les royaumes combattants', 1, 3, 5),
(2, 'La derniere chance', 2, 2, 3),
(5, 'La trêve des confiseurs', 2, 5, 2),
(6, 'Star Finder', 4, 7, 2),
(7, 'Pirates des caraibes', 5, 7, 0),
(8, 'Le dernier Empereur', 1, 2, 2),
(9, 'L\'astrolab', 7, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `jdr_joueur`
--

CREATE TABLE `jdr_joueur` (
  `id_joueur` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `adresseEmail` varchar(80) DEFAULT NULL,
  `adresseEmailErreur` int(2) NOT NULL DEFAULT '1',
  `password` varchar(20) DEFAULT NULL,
  `passwordErreur` int(2) NOT NULL DEFAULT '1',
  `codeConfirmation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jdr_joueur`
--

INSERT INTO `jdr_joueur` (`id_joueur`, `nom`, `prenom`, `adresseEmail`, `adresseEmailErreur`, `password`, `passwordErreur`, `codeConfirmation`) VALUES
(1, NULL, 'PNJ', NULL, 1, NULL, 1, NULL),
(2, 'BISCH', 'Patrick', 'p.bisch@ics-nice.com', 0, NULL, 1, NULL),
(3, 'BURGES', 'Karine', 'k.burges@free.fr', 0, NULL, 1, NULL),
(4, 'JORDEANS', 'Frederic', NULL, 1, NULL, 1, NULL),
(5, 'BURGES', 'Fabrice', NULL, 1, NULL, 1, NULL),
(6, 'ROBIN', 'Cyril', NULL, 1, NULL, 1, NULL),
(7, 'GOUMILLOUX', 'David', NULL, 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `jdr_message`
--

CREATE TABLE `jdr_message` (
  `id_message` int(11) NOT NULL,
  `texte` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jdr_message`
--

INSERT INTO `jdr_message` (`id_message`, `texte`) VALUES
(1, 'GESTION DES JOUEURS'),
(2, 'GESTION DES CAMPAGNES'),
(3, 'JDR Outils'),
(4, 'Prenom / Nom'),
(5, 'Maitre'),
(6, 'Table'),
(7, 'Email'),
(8, 'Campagne'),
(9, 'JDR'),
(10, 'Permet de visualiser  le détail de la campagne'),
(11, 'Ce JDR ne gére pas les personnages'),
(12, 'Le joueur n\'a pas d\'adresse email'),
(13, 'Permet de visualiser le joueur'),
(14, 'Permet de visualiser la liste des campagnes'),
(15, 'Permet de visualiser la liste des joueurs'),
(16, 'Permet de créer une nouvelle campagne'),
(17, 'Permet d\'ajouter un nouveau joueur'),
(18, 'Nb. Jou.');

-- --------------------------------------------------------

--
-- Structure de la table `jdr_table`
--

CREATE TABLE `jdr_table` (
  `id_campagne` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jdr_table`
--

INSERT INTO `jdr_table` (`id_campagne`, `id_joueur`) VALUES
(1, 2),
(5, 2),
(6, 2),
(2, 3),
(5, 3),
(1, 4),
(2, 4),
(1, 5),
(2, 5),
(6, 5),
(8, 5),
(1, 6),
(1, 7),
(8, 7);

-- --------------------------------------------------------

--
-- Structure de la table `jdr_type`
--

CREATE TABLE `jdr_type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reference` varchar(3) NOT NULL,
  `referenceErreur` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jdr_type`
--

INSERT INTO `jdr_type` (`id_type`, `type`, `reference`, `referenceErreur`) VALUES
(1, 'QIN', 'QIN', 0),
(2, 'Donjon 3.5', '', 1),
(3, 'Donjon 5', '', 1),
(4, 'Starfinder', '', 1),
(5, 'Pasthfinder', '', 1),
(6, 'Prophecy', '', 1),
(7, 'Les Ombres d\'Esteren', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `qin_avantage`
--

CREATE TABLE `qin_avantage` (
  `id_message` int(11) NOT NULL,
  `texte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qin_avantage`
--

INSERT INTO `qin_avantage` (`id_message`, `texte`) VALUES
(1, 'Agilité du Singe'),
(2, 'Aimé de la Nature'),
(3, 'Aisance du Courtisan');

-- --------------------------------------------------------

--
-- Structure de la table `qin_desavantage`
--

CREATE TABLE `qin_desavantage` (
  `id_message` int(11) NOT NULL,
  `texte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qin_desavantage`
--

INSERT INTO `qin_desavantage` (`id_message`, `texte`) VALUES
(1, 'Alcoolique'),
(2, 'Amnésie'),
(3, 'Ascèse'),
(4, 'Suivante');

-- --------------------------------------------------------

--
-- Structure de la table `qin_message`
--

CREATE TABLE `qin_message` (
  `id_message` int(11) NOT NULL,
  `texte` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qin_message`
--

INSERT INTO `qin_message` (`id_message`, `texte`) VALUES
(1, 'GESTION DES PERSONNAGES'),
(2, 'Campagne : %s'),
(3, 'CREATION D\'UN PERSONNAGES'),
(4, 'MODIFICATION DU PERSONNAGE'),
(5, 'Nom'),
(6, 'Joueur'),
(7, 'Classe'),
(8, 'Age'),
(9, 'Avantage'),
(10, 'Désavantage'),
(11, 'Feu'),
(12, 'Bois'),
(13, 'Terre'),
(14, 'Métal'),
(15, 'Eau');

-- --------------------------------------------------------

--
-- Structure de la table `qin_messages_fr`
--

CREATE TABLE `qin_messages_fr` (
  `groupe` int(11) NOT NULL DEFAULT '0',
  `numero` int(11) NOT NULL DEFAULT '0',
  `texte` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qin_messages_fr`
--

INSERT INTO `qin_messages_fr` (`groupe`, `numero`, `texte`) VALUES
(2, 0, 'Fanghi'),
(2, 1, 'Wuxia'),
(3, 0, 'Feu'),
(3, 1, 'Expérience'),
(3, 2, 'Métal'),
(3, 3, 'Chi'),
(3, 4, 'Terre'),
(3, 5, 'Résistance'),
(3, 6, 'Bois'),
(3, 7, 'Défense passive'),
(3, 8, 'Eau'),
(6, 0, 'Souffle de vie'),
(6, 1, 'Normal :'),
(6, 2, 'Contusion :'),
(6, 3, 'Légère :'),
(6, 4, 'Grave :'),
(6, 5, 'Fatale :'),
(7, 0, 'Acrobatie :'),
(7, 1, 'Artisanat :'),
(7, 2, 'Discrétion :'),
(7, 3, 'Equitation :'),
(7, 4, 'Escalade :'),
(7, 5, 'Esquive :'),
(7, 6, 'Forge :'),
(7, 7, 'Larcins :'),
(7, 8, 'Natation :'),
(7, 9, 'Survie :'),
(8, 0, 'Arts :'),
(8, 1, 'Commandement :'),
(8, 2, 'Comédie :'),
(8, 3, 'Commerce :'),
(8, 4, 'Danse :'),
(8, 5, 'Diplomatie :'),
(8, 6, 'Eloquence :'),
(8, 7, 'Etiquette :'),
(8, 8, 'Héraldique :'),
(8, 9, 'Intimidation :'),
(8, 10, 'Jeux :'),
(8, 11, 'Langues'),
(8, 12, 'Musique :'),
(8, 13, 'Séduction :'),
(9, 0, 'Architecture :'),
(9, 1, 'Bureaucratie :'),
(9, 2, 'Calligraphie :'),
(9, 3, 'Herboristerie :'),
(9, 4, 'Histoire :'),
(9, 5, 'Investigation :'),
(9, 6, 'Littérature :'),
(9, 7, 'Loi :'),
(9, 8, 'Médecine :'),
(9, 9, 'Navigation :'),
(9, 10, 'Perception :'),
(9, 11, 'Savoir :'),
(9, 12, 'Sciences :'),
(10, 0, 'Alchimie externe :'),
(10, 1, 'Alchimie interne :'),
(10, 2, 'Bouddhisme :'),
(10, 3, 'Confucianisme :'),
(10, 4, 'Divination :'),
(10, 5, 'Empathie :'),
(10, 6, 'Exorcisme :'),
(10, 7, 'Légendes :'),
(10, 8, 'Méditation :'),
(10, 9, 'Qigong :'),
(10, 10, 'Taoïsme :'),
(10, 11, 'Théologie :'),
(11, 0, 'Art de la guerre :'),
(11, 1, 'Artificier :'),
(11, 2, 'Bangshu :'),
(11, 3, 'Boxe :'),
(11, 4, 'Boxe externe :'),
(11, 5, 'Boxe interne :'),
(11, 6, 'Chuishu :'),
(11, 7, 'Daoshu :'),
(11, 8, 'Dunshu :'),
(11, 9, 'Gongshu :'),
(11, 10, 'Improvisation :'),
(11, 11, 'Jianshu :'),
(11, 12, 'Lancer :'),
(11, 13, 'Qiangshu :'),
(11, 14, 'Nushu :');

-- --------------------------------------------------------

--
-- Structure de la table `qin_personnage`
--

CREATE TABLE `qin_personnage` (
  `id_personnage` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `experience` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `age` int(11) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `trait` varchar(10) NOT NULL,
  `chi` int(3) NOT NULL DEFAULT '0',
  `resistance` int(2) NOT NULL DEFAULT '0',
  `defense_passive` int(2) NOT NULL DEFAULT '0',
  `pv` varchar(20) NOT NULL DEFAULT '0;0;0;0;0',
  `avantage` varchar(40) NOT NULL,
  `desavantage` varchar(40) NOT NULL,
  `id_campagne` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `id_avantage` int(11) NOT NULL DEFAULT '0',
  `id_desavantage` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qin_personnage`
--

INSERT INTO `qin_personnage` (`id_personnage`, `nom`, `experience`, `total`, `age`, `classe`, `trait`, `chi`, `resistance`, `defense_passive`, `pv`, `avantage`, `desavantage`, `id_campagne`, `id_joueur`, `id_avantage`, `id_desavantage`) VALUES
(7, 'Tortue Rapide', 20, 40, 28, 'Wuxia', '3/4/4/5/2', 64, 9, 8, '12;8;6;3;2', 'Aisance du Courtisan', 'Amnésie', 1, 2, 2, 3),
(8, '2 directions', 10, 20, 24, '', '1/1/1/1/1', 0, 0, 0, '0;0;0;0;0', '', '', 1, 5, 0, 0),
(9, '3 verites', 5, 10, 18, '', '1/1/1/1/1', 0, 0, 0, '0;0;0;0;0', '', '', 1, 4, 0, 0),
(10, 'Wang', 20, 60, 26, '', '1/1/1/1/1', 0, 0, 0, '0;0;0;0;0', '', '', 1, 6, 0, 0),
(11, 'Ciu May lin', 10, 15, 32, '', '1/1/1/1/1', 0, 0, 0, '0;0;0;0;0', '', '', 1, 7, 0, 0),
(12, 'L\'alchimiste fou', 50, 50, 40, '', '1/1/1/1/1', 0, 0, 0, '0;0;0;0;0', '', '', 1, 1, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jdr_campagne`
--
ALTER TABLE `jdr_campagne`
  ADD PRIMARY KEY (`id_campagne`),
  ADD KEY `id_jdr` (`id_jdr`),
  ADD KEY `id_maitre` (`id_maitre`);

--
-- Index pour la table `jdr_joueur`
--
ALTER TABLE `jdr_joueur`
  ADD PRIMARY KEY (`id_joueur`);

--
-- Index pour la table `jdr_message`
--
ALTER TABLE `jdr_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `jdr_table`
--
ALTER TABLE `jdr_table`
  ADD PRIMARY KEY (`id_campagne`,`id_joueur`),
  ADD KEY `id_joueur` (`id_joueur`);

--
-- Index pour la table `jdr_type`
--
ALTER TABLE `jdr_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `qin_avantage`
--
ALTER TABLE `qin_avantage`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `qin_desavantage`
--
ALTER TABLE `qin_desavantage`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `qin_message`
--
ALTER TABLE `qin_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `qin_messages_fr`
--
ALTER TABLE `qin_messages_fr`
  ADD PRIMARY KEY (`groupe`,`numero`);

--
-- Index pour la table `qin_personnage`
--
ALTER TABLE `qin_personnage`
  ADD PRIMARY KEY (`id_personnage`),
  ADD KEY `joueur` (`id_joueur`),
  ADD KEY `id_campagne` (`id_campagne`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jdr_campagne`
--
ALTER TABLE `jdr_campagne`
  MODIFY `id_campagne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `jdr_joueur`
--
ALTER TABLE `jdr_joueur`
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `jdr_message`
--
ALTER TABLE `jdr_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `jdr_type`
--
ALTER TABLE `jdr_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `qin_avantage`
--
ALTER TABLE `qin_avantage`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `qin_desavantage`
--
ALTER TABLE `qin_desavantage`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `qin_message`
--
ALTER TABLE `qin_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `qin_personnage`
--
ALTER TABLE `qin_personnage`
  MODIFY `id_personnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jdr_campagne`
--
ALTER TABLE `jdr_campagne`
  ADD CONSTRAINT `jdr_campagne_ibfk_1` FOREIGN KEY (`id_jdr`) REFERENCES `jdr_type` (`id_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `jdr_campagne_ibfk_2` FOREIGN KEY (`id_maitre`) REFERENCES `jdr_joueur` (`id_joueur`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `jdr_table`
--
ALTER TABLE `jdr_table`
  ADD CONSTRAINT `jdr_table_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `jdr_joueur` (`id_joueur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `jdr_table_ibfk_2` FOREIGN KEY (`id_campagne`) REFERENCES `jdr_campagne` (`id_campagne`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `qin_personnage`
--
ALTER TABLE `qin_personnage`
  ADD CONSTRAINT `qin_personnage_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `jdr_joueur` (`id_joueur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `qin_personnage_ibfk_2` FOREIGN KEY (`id_campagne`) REFERENCES `jdr_campagne` (`id_campagne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
