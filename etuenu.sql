-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 19 Juin 2019 à 23:09
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-8+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `etuenu`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `e_mail`, `pass`, `module`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `annee` varchar(30) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `groupe` varchar(10) NOT NULL,
  `pr` varchar(10) NOT NULL,
  `part` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `e_mail`, `pass`, `annee`, `specialite`, `groupe`, `pr`, `part`) VALUES
(16, 'bou', 'soumia', 'etu1', '1111', '2 mas', 'res', '1\n', '11', '11'),
(15, 'bou', 'soumia', 'etu2', '1111', '2 mas', 'res', '1\n', '11', '11'),
(17, 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', '11', '11'),
(18, 'jsjs', 'jsjs', 'jsjs', 'jdjd', 'hsus', 'jdjd', 'bdj', '11', '11'),
(19, 'ozozo', 'odod', 'ozozo', 'idido', 'odod', 'osodo', 'idid', '11', '0'),
(20, 'ilham', 'boukhemis', 'ilham', 'ilhamboukhemis. ib@gmail.com', 'master2', 'res', '1', '11', '11'),
(21, 'soumia', 'bouraghdad', 'soumia', 'soumiabba@yahoo.com', '2 master', 'reseau', '1', '11', '11');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `anne` varchar(30) NOT NULL,
  `semestre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_etud` int(11) NOT NULL,
  `id_module` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `msg`
--

INSERT INTO `msg` (`id`, `type`, `msg`, `id_prof`, `id_etud`, `id_module`) VALUES
(1, 'qst', 'hjiikkjvcx', 0, 0, 0),
(2, 'qst', 'ugcvjjuuu', 0, 0, 0),
(3, 'qst', 'jdkikekfk', 0, 0, 0),
(4, 'qst', 'iuhujhh', 0, 0, 0),
(5, 'qst', 'uzidii', 0, 0, 0),
(6, 'qst', 'salam', 0, 0, 0),
(7, 'qst', 'salam', 0, 0, 0),
(8, 'qst', 'bonjour', 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
