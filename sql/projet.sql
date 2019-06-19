-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 juin 2019 à 10:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `ID_UTI` int(11) NOT NULL,
  `ID_LANG` int(11) NOT NULL,
  PRIMARY KEY (`ID_UTI`,`ID_LANG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`ID_UTI`, `ID_LANG`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(2, 5),
(3, 1),
(3, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `competences_lang`
--

DROP TABLE IF EXISTS `competences_lang`;
CREATE TABLE IF NOT EXISTS `competences_lang` (
  `ID_LANG` int(11) NOT NULL,
  `NOM_LANG` varchar(15) NOT NULL,
  `NIVEAU_LANG` int(3) NOT NULL,
  `CERTIFICATION_LANG` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_LANG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences_lang`
--

INSERT INTO `competences_lang` (`ID_LANG`, `NOM_LANG`, `NIVEAU_LANG`, `CERTIFICATION_LANG`) VALUES
(1, 'Français', 100, NULL),
(2, 'Anglais', 70, NULL),
(3, 'Espagnol', 60, NULL),
(4, 'Portugais', 90, NULL),
(5, 'Anglais', 50, NULL),
(6, 'Anglais', 60, NULL),
(7, 'Espagnol', 40, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `competence_cles`
--

DROP TABLE IF EXISTS `competence_cles`;
CREATE TABLE IF NOT EXISTS `competence_cles` (
  `ID_COMP_CLES` int(11) NOT NULL,
  `NOM_CLES` varchar(15) NOT NULL,
  `NIVEAU_CLES` int(3) NOT NULL,
  `CERTIFICATION_CLES` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_COMP_CLES`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence_cles`
--

INSERT INTO `competence_cles` (`ID_COMP_CLES`, `NOM_CLES`, `NIVEAU_CLES`, `CERTIFICATION_CLES`) VALUES
(1, 'HTML5', 80, NULL),
(2, 'CSS3', 80, NULL),
(3, 'PYTHON', 70, NULL),
(4, 'LANGAGE C', 70, NULL),
(5, 'WINDOWS SERVER', 70, NULL),
(6, 'CCNA1', 60, NULL),
(7, 'PYTHON', 80, NULL),
(8, 'LANGAGE C', 80, NULL),
(9, 'HTML5', 70, NULL),
(10, 'CSS3', 70, NULL),
(11, 'WINDOWS SERVER', 70, NULL),
(12, 'CCNA1', 60, NULL),
(13, 'PYTHON', 80, NULL),
(14, 'LANGAGE C', 75, NULL),
(15, 'HTML5', 50, NULL),
(16, 'CSS3', 50, NULL),
(17, 'WINDOWS SERVER', 30, NULL),
(18, 'CCNA1', 30, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `id_img` int(2) NOT NULL,
  `id_projet` int(2) NOT NULL,
  PRIMARY KEY (`id_img`,`id_projet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detenir`
--

INSERT INTO `detenir` (`id_img`, `id_projet`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `ID_EXP` int(11) NOT NULL,
  `ID_UTI` int(11) NOT NULL,
  PRIMARY KEY (`ID_EXP`,`ID_UTI`),
  KEY `ID_UTI` (`ID_UTI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `effectuer`
--

INSERT INTO `effectuer` (`ID_EXP`, `ID_UTI`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 3),
(5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

DROP TABLE IF EXISTS `experience_pro`;
CREATE TABLE IF NOT EXISTS `experience_pro` (
  `ID_EXP` int(11) NOT NULL,
  `POSTE_EXP` varchar(20) NOT NULL,
  `NOM_ENTREPRISE` varchar(20) NOT NULL,
  `DATE_DEBUT_EXP` year(4) NOT NULL,
  `DATE_FIN_EXP` year(4) DEFAULT NULL,
  `FONCTION_EXP` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_EXP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience_pro`
--

INSERT INTO `experience_pro` (`ID_EXP`, `POSTE_EXP`, `NOM_ENTREPRISE`, `DATE_DEBUT_EXP`, `DATE_FIN_EXP`, `FONCTION_EXP`) VALUES
(1, 'Stagiaire', 'Hopital Soch', 2014, 2014, 'Observation du service de réhabilitation fonctionnelle.'),
(2, 'Stagiaire', 'Rugby Club Suresnois', 2012, 2012, 'Observation du milieu sportif.'),
(3, 'CDD', 'Emerson', 2018, 2018, 'Manutention, réception et distribution des pièces'),
(4, 'Stagiaire', 'Mairie de Houilles', 2015, 2015, 'Observation du services événementielle.'),
(5, 'Stagiaire', 'Bureau Veritas', 2014, 2014, 'Ma fonction au sein de l’entreprise était l’observation du monde\r\nprofessionnel');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id_img` int(2) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Projet` int(2) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id_img`, `Nom`, `Projet`) VALUES
(1, '1.png', 1),
(2, '2.png', 1),
(3, '3.png', 1),
(4, '4.png', 1),
(5, '5.png', 1),
(6, '6.png', 1),
(7, '7.png', 2),
(8, '8.png', 2),
(9, '9.png', 2),
(10, '10.png', 2),
(11, '11.png', 2),
(12, '12.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `parcours_scolaire`
--

DROP TABLE IF EXISTS `parcours_scolaire`;
CREATE TABLE IF NOT EXISTS `parcours_scolaire` (
  `ID_SCOLAIRE` int(11) NOT NULL,
  `NOM_ECOLE` varchar(40) NOT NULL,
  `DATE_DEBUT_SCOLARITE` year(4) NOT NULL,
  `DATE_FIN_SCOLARITE` year(4) DEFAULT NULL,
  `DIPLOME` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_SCOLAIRE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parcours_scolaire`
--

INSERT INTO `parcours_scolaire` (`ID_SCOLAIRE`, `NOM_ECOLE`, `DATE_DEBUT_SCOLARITE`, `DATE_FIN_SCOLARITE`, `DIPLOME`) VALUES
(1, ' YNOV', 2018, 2019, 'Bachelor'),
(2, 'Lycée Paul Langevin', 2015, 2018, 'Baccalauréat STL'),
(3, 'Collège Emile Zola', 2011, 2015, 'Brevet des collèges'),
(4, 'Lycée George Braques', 2014, 2018, 'Baccalauréat Scientifique'),
(5, 'Collège Gabriel Périe', 2010, 2014, 'Brevet des collèges'),
(6, 'Lycée Marceau', 2015, 2018, 'Baccalauréat Scientifique'),
(7, 'Collège Louis Pergaud', 2011, 2015, 'Brevet des collèges');

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `id_uti` int(2) NOT NULL,
  `id_projet` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participe`
--

INSERT INTO `participe` (`id_uti`, `id_projet`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `ID_UTI` int(11) NOT NULL,
  `ID_COMP_CLES` int(11) NOT NULL,
  PRIMARY KEY (`ID_UTI`,`ID_COMP_CLES`),
  KEY `ID_COMP_CLES` (`ID_COMP_CLES`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posseder`
--

INSERT INTO `posseder` (`ID_UTI`, `ID_COMP_CLES`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(2) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Description` varchar(2500) NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `Nom`, `Description`) VALUES
(1, 'Sportify', ''),
(2, 'Waytopia', 'Création d\'un site internet permettant au internaute de regarder des article parlant de l’écologie, recevoir des tips pour avoir une vie plus saine et plus écologique,et création d’événement écologique pour améliorer la vie en ville.');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

DROP TABLE IF EXISTS `suivre`;
CREATE TABLE IF NOT EXISTS `suivre` (
  `ID_SCOLAIRE` int(11) NOT NULL,
  `ID_UTI` int(11) NOT NULL,
  PRIMARY KEY (`ID_SCOLAIRE`,`ID_UTI`),
  KEY `ID_UTI` (`ID_UTI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `suivre`
--

INSERT INTO `suivre` (`ID_SCOLAIRE`, `ID_UTI`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 3),
(7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_UTI` int(11) NOT NULL,
  `NOM_UTI` varchar(30) NOT NULL,
  `PRENOM_UTI` varchar(15) NOT NULL,
  `ADRESSE_UTI` char(50) NOT NULL,
  `VILLE_UTI` char(20) NOT NULL,
  `CODEPOSTAL_UTI` int(5) NOT NULL,
  `PAYS_UTI` char(15) NOT NULL,
  `MAIL_UTI` varchar(500) NOT NULL,
  `TEL_UTI` int(10) NOT NULL,
  `Age` int(2) NOT NULL,
  PRIMARY KEY (`ID_UTI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTI`, `NOM_UTI`, `PRENOM_UTI`, `ADRESSE_UTI`, `VILLE_UTI`, `CODEPOSTAL_UTI`, `PAYS_UTI`, `MAIL_UTI`, `TEL_UTI`, `Age`) VALUES
(1, 'Richard', 'Jeremy', '5 allée des roses', 'Suresnes', 92150, 'France', 'jeremy.richard@ynov.com', 647557759, 18),
(2, 'DA SILVA TEIXEIRA', 'David', '52 rue Henri Barbusse', 'Bezons', 95870, 'France', 'david.teixeira@ynov.com', 658736152, 19),
(3, 'Ruiz', 'Thomas', '2 routes du marchais', 'Billancelles', 28190, 'France', 'Thomas.ruiz@ynov.com', 781711166, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
