-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 20:43
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rh`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `da_entretien` varchar(30) DEFAULT NULL,
  `experience` text,
  `question` text,
  `salaire` int(11) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `etapsuiv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `nom`, `prenom`, `telephone`, `email`, `poste`, `da_entretien`, `experience`, `question`, `salaire`, `statut`, `commentaire`, `etapsuiv`) VALUES
(18, 'admane', 'amine', '0791378061', 'ga_admane@esi.dz', 'designer', '2018-04-07', 'aucun', '', 4000, '', '', 'a suivre'),
(17, 'bachounda', 'chakib', '0669425144', 'gc_bachounda@esi.dz', 'back-end', '2018-04-19', 'null', '- question 1 : votre age ? 20 ans\r\n- question 2 : niveau ? bac+2', 55000, 'a revoir', '', 'rappeler'),
(16, 'azzouz', 'bahaeddine', '0558945479', 'gb_azzouz@esi.dz', 'front-end', '2018-04-13', 'designer', '- question 1 : votre age ? 20 ans\r\n- question 2 : niveau ? bac+2 ', 45000, 'en pause', '', 'a recruter'),
(19, 'Sahraoui', 'Amine', '0555818555', 'ga_sahraoui@esi.dz', 'PFE', '2018-05-10', 'Aucune', '', 12000, '', '', ''),
(20, 'Mekaoui', 'Mehdi', '0555828655', 'gm_mekaoui@esi.dz', 'Responsable BDD', '2018-05-25', 'aucune', '', 19000, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `datebegin` varchar(255) NOT NULL,
  `datend` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `matricule`, `datebegin`, `datend`, `type`) VALUES
(90, 33, '2018-05-01', '2018-05-10', 's'),
(89, 35, '2018-04-05', '2018-04-06', 'p'),
(85, 34, '2018-06-13', '2018-06-15', 'm'),
(94, 35, '2018-06-26', '2018-06-30', 's'),
(87, 35, '2018-05-11', '2018-05-17', 'm'),
(93, 34, '2018-05-15', '2018-05-19', 'p'),
(92, 37, '2018-05-22', '2018-05-27', 'p');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `naissance` varchar(30) DEFAULT NULL,
  `situation` varchar(255) DEFAULT NULL,
  `embauche` varchar(30) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `projet` varchar(255) DEFAULT NULL,
  `immatriculation` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `nbjour` varchar(11) DEFAULT NULL,
  `cbancaire` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `demission` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `email`, `naissance`, `situation`, `embauche`, `poste`, `responsable`, `salaire`, `projet`, `immatriculation`, `statut`, `adresse`, `telephone`, `nbjour`, `cbancaire`, `commentaire`, `demission`) VALUES
(35, 'yessad', 'samy', 'gs_yessad@esi.dz', '1998-06-21', 'CÃ©libataire', '2018-03-14', 'front-end', 'daoudi', 60000, 'grh', 'mml55', 'Actif', 'alger centre', '0555818655', '6', 'mljh44', '', ''),
(34, 'bouchafa', 'lotfi ', 'gl_bouchafa@esi.dz', '1998-12-13', 'CÃ©libataire', '2018-03-07', 'back-end', 'kacet', 64000, 'grh', 'mlkk44', 'Actif', 'birkhadem', '0551824453', '14', '255dd', '', ''),
(33, 'sadeg', 'mouloud', 'gm_sadeg@esi.dz', '1996-07-22', 'CÃ©libataire', '2018-02-28', 'full-stack', 'kacet', 65000, 'grh', 'rm2015', 'Actif', 'Docteur Trollard', '0557832035', '11', '514llm5', '', ''),
(37, 'Mebhah', 'Khaled', 'gk_mebhah@esi.dz', '1999-11-11', 'MariÃ©', '2018-05-01', 'Responsable BDD', 'Douzi', 12000, 'CliniTech', '111111', 'Actif', 'Rouiba', '0555337221', '7', '12345', '', ''),
(38, 'Morsi', 'Younes', 'gy_morsi@esi.dz', '1998-12-31', 'CÃ©libataire', '2018-04-28', 'Graphiste stagiaire', 'Osema Touati', 5000, 'CliniTech', '12345', 'Actif', '12 Rouiba', '0555123456', '0', '1222222', '', ''),
(39, 'Touati', 'Osema', 'go_touati@esi.dz', '1997-04-12', 'CÃ©libataire', '2018-04-12', 'Chef d\'Ã©quipe', 'Personne', 700000, 'CliniTech', '123455', 'Actif', '122 Blida', '0667123456', '18', '1234556', '', ''),
(40, 'Bouchekhima', 'Anis', 'ga_bouchekhima@esi.dz', '1997-03-12', 'MariÃ©', '2018-01-01', 'Sous-chef d\'Ã©quipe', 'Osema Touati', 600000, 'CliniTech', '1234555', 'Actif', '30 SÃ©tif', '0555333843', '24', '22222', '', ''),
(41, 'Douzi', 'Alaa', 'ga_douzi@esi.dz', '1998-11-11', 'CÃ©libataire', '2018-05-02', 'Chef d\'Ã©quipe', 'personne', 500000, 'CliniTech', '1234566', 'Actif', '122  Alger', '05586834734', '15', '233443', '', '2018-05-02'),
(42, 'Benrekia', 'Mohamed Ali', 'gm_benrekia@esi.dz', '1999-04-12', 'CÃ©libataire', '2018-03-15', 'Concepteur de jeux', 'Sara Boukais', 26000, 'Tetris', '304853', 'Actif', '123 Blida', '06673423', '7', '3049542', '', ''),
(43, 'Ferhat', 'Ferhat', 'gf_ferhat@xn--si-7fu.dz', '1998-05-04', 'CÃ©libataire', '2017-12-08', 'Responsable dossiers', 'personne', 120000, 'PFE', '003343', 'Actif', '44 Bab Ezzouar', '04545484', '4', '12223', '', '2018-01-31');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `date_evaluation` date DEFAULT NULL,
  `next_eva` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id`, `matricule`, `date_evaluation`, `next_eva`) VALUES
(15, 35, '2018-04-23', '2019-02-02'),
(16, 34, NULL, '2018-05-22'),
(17, 33, '2018-04-22', '2018-04-21'),
(18, 38, NULL, '2021-02-05'),
(19, 41, '2018-05-02', '2019-05-20'),
(20, 40, '2018-05-02', '2020-03-03');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

DROP TABLE IF EXISTS `parametres`;
CREATE TABLE IF NOT EXISTS `parametres` (
  `specialite` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `adrgerant` varchar(255) NOT NULL,
  `msgacueille` text NOT NULL,
  `tel` varchar(30) NOT NULL,
  `gerant` varchar(255) NOT NULL,
  `raisonsocial` varchar(255) NOT NULL,
  `rc` varchar(255) NOT NULL,
  `siteweb` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `idfisc` varchar(30) NOT NULL,
  `imgacueille` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`specialite`, `adress`, `fax`, `adrgerant`, `msgacueille`, `tel`, `gerant`, `raisonsocial`, `rc`, `siteweb`, `theme`, `logo`, `idfisc`, `imgacueille`) VALUES
('INFORMATIQUE', '15 ARONDISMENT', '', 'sadeg.mld@gmail.com', 'Bienvenue\r\n', '0557832035', 'Proudlock', 'SARL', '02150', 'esi.dz', '343a40', 'public/theme/logo.jpg', '010166', 'public/theme/imgac1.jpg?public/theme/imgac2.jpg?public/theme/imgac3.jpg?non');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

DROP TABLE IF EXISTS `salaire`;
CREATE TABLE IF NOT EXISTS `salaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) DEFAULT NULL,
  `salaire` varchar(255) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `matricule`, `salaire`, `date`) VALUES
(59, 33, '60000', '22-04-2018'),
(60, 34, '65000', '22-04-2018'),
(61, 35, '59000', '22-04-2018'),
(62, 33, '65000', '22-04-2018'),
(63, 35, '60000', '22-04-2018'),
(64, 34, '64000', '22-04-2018'),
(65, 36, '0', '26-04-2018'),
(66, 37, '12000', '02-05-2018'),
(67, 38, '5000', '02-05-2018'),
(68, 39, '700000', '02-05-2018'),
(69, 40, '600000', '02-05-2018'),
(70, 41, '500000', '02-05-2018'),
(71, 42, '26000', '02-05-2018'),
(72, 43, '120000', '02-05-2018');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiant`, `password`, `type`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
