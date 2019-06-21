-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 juin 2019 à 20:04
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
-- Structure de la table `a`
--

DROP TABLE IF EXISTS `a`;
CREATE TABLE IF NOT EXISTS `a` (
  `id_loisir` int(11) NOT NULL,
  `ID_UTI` int(11) NOT NULL,
  PRIMARY KEY (`id_loisir`,`ID_UTI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `a`
--

INSERT INTO `a` (`id_loisir`, `ID_UTI`) VALUES
(1, 1),
(1, 3),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(5, 2);

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
(1, 6),
(1, 7),
(2, 1),
(2, 4),
(2, 5),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `competences_lang`
--

DROP TABLE IF EXISTS `competences_lang`;
CREATE TABLE IF NOT EXISTS `competences_lang` (
  `ID_LANG` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_LANG` varchar(15) NOT NULL,
  `NIVEAU_LANG` int(3) NOT NULL,
  `CERTIFICATION_LANG` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_LANG`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences_lang`
--

INSERT INTO `competences_lang` (`ID_LANG`, `NOM_LANG`, `NIVEAU_LANG`, `CERTIFICATION_LANG`) VALUES
(3, 'Anglais', 70, NULL),
(2, 'Espagnol', 60, NULL),
(4, 'Portugais', 90, NULL),
(5, 'Anglais', 50, NULL),
(6, 'Anglais', 60, NULL),
(7, 'Espagnol', 40, NULL),
(1, 'Français', 100, NULL);

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
  `image_cles` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_COMP_CLES`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence_cles`
--

INSERT INTO `competence_cles` (`ID_COMP_CLES`, `NOM_CLES`, `NIVEAU_CLES`, `CERTIFICATION_CLES`, `image_cles`) VALUES
(13, 'Python', 80, NULL, '1.png'),
(12, 'CCNA1', 60, NULL, '6.png'),
(11, 'Windows Serveur', 70, NULL, '5.png'),
(10, 'CSS3', 80, NULL, '4.png'),
(9, 'HTML5', 80, NULL, '3.png'),
(8, 'Langage C', 70, NULL, '2.png'),
(7, 'Python', 70, NULL, '1.png'),
(6, 'CCNA1', 30, NULL, '6.png'),
(5, 'Windows Serveur', 30, NULL, '5.png'),
(4, 'CSS3', 50, NULL, '4.png'),
(3, 'HTML5', 50, NULL, '3.png'),
(2, 'Langage C', 75, NULL, '2.png'),
(1, 'Python', 80, NULL, '1.png'),
(14, 'Langage C', 80, NULL, '2.png'),
(15, 'HTML5', 70, NULL, '3.png'),
(16, 'CSS3', 70, NULL, '4.png'),
(17, 'Windows Serveur', 70, NULL, '5.png'),
(18, 'CCNA1', 60, NULL, '6.png');

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
(3, 2),
(4, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

DROP TABLE IF EXISTS `experience_pro`;
CREATE TABLE IF NOT EXISTS `experience_pro` (
  `ID_EXP` int(11) NOT NULL AUTO_INCREMENT,
  `POSTE_EXP` varchar(20) NOT NULL,
  `NOM_ENTREPRISE` varchar(20) NOT NULL,
  `DATE_DEBUT_EXP` year(4) NOT NULL,
  `DATE_FIN_EXP` year(4) DEFAULT NULL,
  `FONCTION_EXP` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_EXP`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience_pro`
--

INSERT INTO `experience_pro` (`ID_EXP`, `POSTE_EXP`, `NOM_ENTREPRISE`, `DATE_DEBUT_EXP`, `DATE_FIN_EXP`, `FONCTION_EXP`) VALUES
(5, 'Stagiaire', 'Mairie de Houilles', 2015, 2015, 'Stage d\'observation du secteur événementielle d\'une mairie.'),
(4, 'CDD', 'Emerson', 2018, 2018, 'Manutention des pièces, réception de colis et redistribution de pièce'),
(3, 'Stagiaire', 'Bureau Veritas', 2014, 2014, 'Stage d\'observation de ventes en entreprise'),
(2, 'Stagiaire', 'Rugby Club Suresnois', 2012, 2012, 'Stage d\'observation d\'entrainement et d’amélioration sportive.'),
(1, 'Stagiaire', 'Hopital Foch', 2014, 2014, 'Stage d\'observation du système de soin d\'un hôpital.');

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
-- Structure de la table `loisirs`
--

DROP TABLE IF EXISTS `loisirs`;
CREATE TABLE IF NOT EXISTS `loisirs` (
  `id_loisir` int(11) NOT NULL AUTO_INCREMENT,
  `loisir` varchar(30) NOT NULL,
  PRIMARY KEY (`id_loisir`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `loisirs`
--

INSERT INTO `loisirs` (`id_loisir`, `loisir`) VALUES
(1, 'Sport'),
(2, 'Voyage'),
(3, 'Jeux vidéos'),
(4, 'Développement'),
(5, 'Foot');

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
(7, 'YNOV', 2018, 2019, 'Bachelor Informatique'),
(1, 'Collège Emile Zola', 2011, 2015, 'Brevet des collèges'),
(3, 'Lycée George Braques', 2014, 2018, 'Baccalauréat Scientifique'),
(4, 'Collège Gabriel Périe', 2010, 2014, 'Brevet des collèges'),
(5, 'Lycée Marceau', 2015, 2018, 'Baccalauréat Scientifique'),
(6, 'Collège Louis Pergaud', 2011, 2015, 'Brevet des collèges'),
(2, 'Lycée Paul Langevin', 2015, 2018, 'Baccalauréat STL');

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `id_uti` int(2) NOT NULL,
  `id_projet` int(2) NOT NULL,
  PRIMARY KEY (`id_uti`,`id_projet`)
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
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(2) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(50) NOT NULL,
  `description_projet` varchar(2500) NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `description_projet`) VALUES
(1, 'Sportify', 'une petite description'),
(2, 'Waytopia', 'Création d\'un site internet permettant au internaute de regarder des article parlant de l’écologie, recevoir des tips pour avoir une vie plus saine et plus écologique,et création d’événement écologique pour améliorer la vie en ville.'),
(3, 'rzerzgrzeg', ' rezgrz egz th zth zht z h rhrghzefgh fghjgsqd gfsqdg fqdsg fhqhksdg fhqfg hdqsgf hdqsg fhdsq gfsqdg hfqdsghf ghdsq gf sqdgfhkqdg hqdsgkuqgsd hgkqfh gshqdgkjsqdjkg qdfughnqds ughlng ndfg qjkswg jkqfdgqd fgnk fqkjgh fdjghkqjd gjkfqdhqufkd hg,qdks hjkqhq d'),
(4, 'thzhzrthzr', 'z th tzh zhrzhsd shtjfghfg h'),
(5, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(6, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(7, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(8, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(9, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(10, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(11, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf'),
(12, 'dsfdqsqdsfdqqdfs', 'fshgqdhqdghqgf');

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
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 1),
(7, 2),
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
  `image_uti` varchar(1000) DEFAULT NULL,
  `age_uti` int(11) DEFAULT NULL,
  `description_uti` varchar(250) DEFAULT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID_UTI`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTI`, `NOM_UTI`, `PRENOM_UTI`, `ADRESSE_UTI`, `VILLE_UTI`, `CODEPOSTAL_UTI`, `PAYS_UTI`, `MAIL_UTI`, `TEL_UTI`, `image_uti`, `age_uti`, `description_uti`, `pseudo`, `password`) VALUES
(1, 'RICHARD', 'Jeremy', '5 allée des roses', 'Suresnes', 92150, 'France', 'jeremy.richard@ynov.com', 647557759, '1.png', 18, 'Actuellement étudiant en informatique au campus Ynov informatique je compte obtenir un diplôme d\'expert informatique ', 'jerem', 'admin'),
(2, 'TEIXEIRA', 'David', '52 rue Henri Barbusse', 'Bezons', 95870, 'France', 'david.teixeira@ynov.com', 658736152, '2.png', 20, 'Actuellement étudiant en informatique au campus Ynov informatique je compte obtenir un diplôme d\'expert informatique ', 'dadou', 'admin'),
(3, 'Ruiz', 'Thomas', '2 routes du marchais', 'Billancelles', 28190, 'France', 'Thomas.ruiz@ynov.com', 781711166, '3.png', 19, 'Actuellement étudiant en informatique au campus Ynov informatique je compte obtenir un diplôme d\'expert informatique ', 'thomas', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
