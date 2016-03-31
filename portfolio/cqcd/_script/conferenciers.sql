-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2013 at 07:25 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cqcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `conferenciers`
--

CREATE TABLE `conferenciers` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` enum('Lundi, 11 mars 2013','Mardi, 12 mars 2013','','') CHARACTER SET utf8 NOT NULL,
  `heure` varchar(255) CHARACTER SET utf8 NOT NULL,
  `categorie` enum('Conférence plénière','Main-d''œuvre','Maturité des marchés','Nouvelles technologies') CHARACTER SET utf8 NOT NULL,
  `presentation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `heureArrivee` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `conferenciers`
--

INSERT INTO `conferenciers` (`id`, `nom`, `titre`, `date`, `heure`, `categorie`, `presentation`, `heureArrivee`) VALUES
(1, `Alain Ménard`, `Vice-président principal, exploitation et développement - Sobeys`, `Lundi, 11 mars 2013`, `11 h 35 à 12 h 30`, `Maturité des marchés`, `Tendance lourde ou phénomène marginal : le showrooming!`, `11 h`),
(2, 'Carlos Leitao', 'Économiste en chef - Banque Laurentienne  ', 'Lundi, 11 mars 2013', '10 h 00 à 11 h 15', 'Conférence plénière', 'Contexte économique, globalisation, marchés émergents', '9 h'),
(3, 'Christian Bourque', 'Vice-président executif -Léger Marketing', 'Lundi, 11 mars 2013', '10 h 00 à 11 h 15', 'Conférence plénière', 'Contexte économique, globalisation, marchés émergents', '9 h'),
(4, 'Christine Beaulieu', '"Animatrice du panel, Présidente, MBA, PMP  - Gestion Christine Beaulieu Inc"', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Main-d''œuvre', 'L'engagement du réseau de l'éducation dans le commerce de détail', '11 h'),
(5, 'Conférencier à venir', '', 'Mardi, 12 mars 2013', '10 h 30 à 11 h 15', 'Main-d''œuvre', '', '9 h 45'),
(6, 'Denis Carter', 'Spécialiste en recrutement - DCR', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Main-d''œuvre', 'L'engagement du réseau de l'éducation dans le commerce de détail', '11 h'),
(7, 'François Berthiaume', 'Président directeur général - CFC Dolmen', 'Mardi, 12 mars 2013', '13 h 25 à 14 h 25', 'Conférence plénière', 'Intrapreneuriat-Entrepreunariat', '12 h'),
(8, 'François Gaumond', 'Directeur commercial – Umen Innovation', 'Mardi, 12 mars 2013', '10 h 30 à 11 h 15', 'Maturité des marchés', 'État du commerce électronique au Québec', '9 h 45'),
(9, 'François Plaisance', 'Président – VCS', 'Mardi, 12 mars 2013', '14 h 45 à 15 h 30', 'Nouvelles technologies', 'Les multiples visages de la fraude dans le commerce de détail', '14 h 00'),
(12, 'Georges Pothier', 'Animateur du panel économique, chef d''antenne - Argent TVA  ', 'Lundi, 11 mars 2013', '10 h 00 à 11 h 15', 'Conférence plénière', 'Contexte économique, globalisation, marchés émergents', '9 h'),
(13, 'Gerry Doutre', 'Président et chef de la direction – Aliments Ultima ', 'Lundi, 11 mars 2013', '14 h 50 à 15 h 45', 'Main-d''œuvre', 'Se démarquer dans un marché à forte compétition', '14 h 20'),
(14, 'Jacques Nantel', 'Professeur titulaire – HEC Montréal', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Main-d''œuvre', 'L'engagement du réseau de l'éducation dans le commerce de détail', '11 h'),
(16, 'Jacques Pelletier', 'Président du Conseil - L''observateur', 'Lundi, 11 mars 2013', '13 h 45 à 14 h 30', 'Conférence plénière', 'La place du consommateur', '13 h 15'),
(17, 'Jean Lapierre', 'Analyste politique', 'Lundi, 11 mars 2013', '15 h 40 à 16 h 40', 'Conférence plénière', 'Perspectives économiques et politiques 2013', '15 h'),
(20, 'Jean Laramée', 'Vice-président principal, région de l''Est - Exploitation - Ivanhoé Cambridge ', 'Lundi, 11 mars 2013', '14 h 50 à 15 h 45', 'Maturité des marchés', 'Face à face locataire - locateur', '14 h 20'),
(21, 'Jean Stéphane Tremblay', 'Vice-président executif - FGL Sports', 'Lundi, 11 mars 2013', '10 h 00 à 11 h 15', 'Conférence plénière', 'Contexte économique, globalisation, marchés émergents', '9 h'),
(22, 'Jean-Pierre Lefebvre', 'Animateur du panel, Président - Place J.R. lefebvre Inc.', 'Mardi, 12 mars 2013', '13 h 25 à 14 h 25', 'Conférence plénière', 'Intrapreneuriat-Entrepreunariat', '12 h'),
(23, 'Léopold Turgeon', 'Président directeur général - CQCD', 'Lundi, 11 mars 2013', '9 h 15 à 10 h 00', 'Conférence plénière', 'J'y crois! Osez le changement!', '8 h'),
(24, 'Louise Pauzé', 'Consultante - Happico', 'Mardi, 12 mars 2013', '11 h 25 à 12 h 10', 'Main-d''œuvre', 'Comment être un employeur de choix', '10 h 30'),
(25, 'Marc Giroux', 'Vice-président, marketing et communications – Metro  Inc.', 'Mardi, 12 mars 2013', '9 h 10 à 10 h 10', 'Conférence plénière', 'Personnaliser une stratégie de croissance : l'exemple Metro Inc.', '8 h 30'),
(26, 'Marie Andrée Boutin', 'Vice-Présidente, Immobilier - Groupe Aldo', 'Lundi, 11 mars 2013', '14 h 50 à 15 h 45', 'Maturité des marchés', 'Face à face locataire - locateur', '14 h 20'),
(28, 'Mélanie Grenier', 'Vice-présidente adjointe, Agence Virtuelle - Banque Laurentienne', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Nouvelles technologies', 'Démystifier les médias sociaux, les apprivoiser et les inclure dans votre stratégie de développement d'affaires', '11 h'),
(29, 'Nathaly Riverin', 'Directrice générale - Ecole de l'entrepreneurship de Beauce ', 'Mardi, 12 mars 2013', '13 h 25 à 14 h 25', 'Conférence plénière', 'Intrapreneuriat-Entrepreunariat', '12 h'),
(30, 'Patrick Tremblay', 'Président directeur régional – Mountain Equipment Co-op', 'Lundi, 11 mars 2013', '15 h 45 à 16 h 45', 'Conférence plénière', 'L'importance de dynamiser et revitaliser l'espace commercial', '15 h 20'),
(31, 'Philippe Lasnier', 'Consultant – Vision Détail Inc.', 'Mardi, 12 mars 2013', '11 h 25 à 12 h 10', 'Nouvelles technologies', 'La mobilité dans les points de ventes : orientations et décisions', '10 h 30'),
(32, 'Philippe Pinatel', 'Directeur général - Sephora', 'Mardi, 12 mars 2013', '14 h 45 à 15 h 30', 'Maturité des marchés', 'Comment prendre sa place! L'avènement de Sephora au Canada', '14 h 00'),
(33, 'Scott Duby', 'Global Retail Solutions Leader, Smarter Commerce - IBM', 'Mardi, 12 mars 2013', '7 h 30 à 8 h 30', 'Conférence plénière', 'De la transaction à la relation : comment se rapprocher du client Maître', '7 h 10'),
(34, 'Scott Duby', 'Global Retail Solutions Leader, Smarter Commerce - IBM', 'Mardi, 12 mars 2013', '10 h 30 à 11 h 15', 'Nouvelles technologies', 'L'avenir du magasinage', '9 h 45'),
(35, 'Sophie Marchand', 'Experte en modélisation d'affaires – ModelCom', 'Mardi, 12 mars 2013', '11 h 25 à 12 h 10', 'Maturité des marchés', 'Modélisation et intelligence d'affaires : un mariage heureux', '10 h 30'),
(36, 'Stéphane Bernier', 'Directeur principal du design commercial – Aedifica', 'Lundi, 11 mars 2013', '15 h 45 à 16 h 45', 'Conférence plénière', 'L'importance de dynamiser et revitaliser l'espace commercial', '15 h 20'),
(37, 'Stéphane Gagnon', 'Premier vice-président Marketing et Gestion de produits - Banque Laurentienne', 'Lundi, 11 mars 2013', '15 h 45 à 16 h 45', 'Conférence plénière', 'L'importance de dynamiser et revitaliser l'espace commercial', '15 h 20'),
(38, 'Stéphane Gauvin', 'Ph. D. Professeur Titulaire - Université Laval', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Main-d''œuvre', 'L'engagement du réseau de l'éducation dans le commerce de détail', '11 h'),
(39, 'Steve Plamondon', 'Animateur du panel, consultant', 'Lundi, 11 mars 2013', '14 h 50 à 15 h 45', 'Maturité des marchés', 'Face à face locataire - locateur', '14 h 20'),
(40, 'Sylvain Matte', 'Associé principal - Coefficient marketing', 'Mardi, 12 mars 2013', '14 h 45 à 15 h 30', 'Main-d''œuvre', 'Session de créativité pour la rétention de personnel', '14 h 00'),
(41, 'Sylvain Sénécal', 'Professeur  – HEC Montréal', 'Lundi, 11 mars 2013', '11 h 35 à 12 h 30', 'Maturité des marchés', 'Tendance lourde ou phénomène marginal : le showrooming!', '11 h'),
(42, 'Sylvain Toutant', 'Président - GMCR Canada', 'Mardi, 12 mars 2013', '13 h 25 à 14 h 25', 'Conférence plénière', 'Intrapreneuriat-Entrepreunariat', '12 h');
