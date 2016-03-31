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
-- Table structure for table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `q9` varchar(100) NOT NULL,
  `q10` varchar(100) NOT NULL,
  `q11` varchar(100) NOT NULL,
  `q12` varchar(100) NOT NULL,
  `q13` varchar(100) NOT NULL,
  `q14` varchar(100) NOT NULL,
  `q15` varchar(100) NOT NULL,
  `q16` varchar(100) NOT NULL,
  `q17` varchar(100) NOT NULL,
  `q18` varchar(100) NOT NULL,
  `q19` varchar(100) NOT NULL,
  `q20` varchar(100) NOT NULL,
  `q21` varchar(255) NOT NULL,
  `q22` varchar(255) NOT NULL,
  `q23` varchar(100) NOT NULL,
  `q24` varchar(100) NOT NULL,
  `q25` varchar(100) NOT NULL,
  `q26` varchar(100) NOT NULL,
  `q27` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `prenom`, `nom`, `courriel`, `telephone`, `compagnie`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`) VALUES
(1, 'ASD', 'FGH', 'ASDASD', 'QWEDD', 'AQW', '4', '2', '1', '3', '2', '2', '2', '1', '2', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '3', '2', '4', '5', '4', '2', 'C''Ã©tait trÃ¨s bien', 'C''Ã©tait trÃ¨s bon', 'Institution financiÃ¨re', 'Supervision / gÃ©rance', 'Par un collÃ¨gue / ami', '46-55 ans', 'homme'),
(2, 'peter', 'Tester', 'test@testing.com', '747813414', 'Testing', '4', '2', '1', '3', '2', '2', '2', '1', '2', '4', 'Sur place la journÃƒÂ©e mÃƒÂªme', '0', '1', '2', '3', '2', '4', '5', '4', '2', 'C''ÃƒÂ©tait trÃƒÂ¨s bien', 'C''ÃƒÂ©tait trÃƒÂ¨s bon', 'Institution financiÃƒÂ¨re', 'Supervision / gÃƒÂ©rance', 'Par un collÃƒÂ¨gue / ami', '46-55 ans', 'femme'),
(3, 'Peter', 'Testo', 'Testo', '23242324', 'Testo', '4', '2', '1', '3', '2', '2', '2', '1', '2', '4', 'Sur place la journÃƒÂ©e mÃƒÂªme', '0', '1', '2', '3', '2', '4', '5', '4', '2', 'C''ÃƒÂ©tait trÃƒÂ¨s bien', 'C''ÃƒÂ©tait trÃƒÂ¨s bon', 'Institution financiÃƒÂ¨re', 'Supervision / gÃƒÂ©rance', 'Par un collÃƒÂ¨gue / ami', '46-55 ans', 'femme'),
(4, 'Testa', 'sdgas', 'dsgsdg', 'adgsd', 'sdgsg', '4', '2', '1', '3', '2', '2', '2', '1', '2', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '3', '2', '4', '5', '4', '2', 'C''Ã©tait trÃ¨s bien', 'C''Ã©tait trÃ¨s bon', 'Institution financiÃ¨re', 'Supervision / gÃ©rance', 'Par un collÃ¨gue / ami', '46-55 ans', 'femme'),
(5, 'Ã©Ã©Ã©Ã©Ã©', 'Ã Ã Ã Ã Ã ', 'eeÃ¨;Ã¨.Ã¨.', 'Ã¨Ã¨.^Ã¨;""', 'ÃªÃªÃªÃªÃªÃªÃª^', '5', '1', '3', '4', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '4', '2', '2', '4', '3', '4', '3', '2', 'Ã€Ã‡ÃŠÃ‚Ãˆ;.Ã‰''"''"', '''AL''DFLÃˆÃ‰Ã‰ÃˆÃ‰', 'SociÃ©tÃ© immobiliÃ¨re / Centre commercial', 'SÃ©curitÃ© / prÃ©vention des pertes', 'Par un collÃ¨gue / ami', '56-65 ans', 'femme'),
(6, 'asdasd', 'adfsdfs', 'dgsgsf', 'aads', 'dsfdfs', '5', '1', '3', '4', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '4', '2', '2', '4', '3', '4', '3', '2', 'Ã€Ã‡ÃŠÃ‚Ãˆ;.Ã‰''"''"', '''AL''DFLÃˆÃ‰Ã‰ÃˆÃ‰', 'SociÃ©tÃ© immobiliÃ¨re / Centre commercial', 'SÃ©curitÃ© / prÃ©vention des pertes', 'Par un collÃ¨gue / ami', '56-65 ans', 'femme'),
(7, 'Ã©Ã©Ã©Ã©Ã©', 'Ã§Ã§Ã§Ã§Ã§', 'Ã¨Ã¨Ã¨Ã¨', 'Ã©...', 'ÃªÃªÃªÃªÃ¢Ã¢', '5', '1', '3', '4', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '4', '2', '2', '4', '3', '4', '3', '2', 'Ã€Ã‡ÃŠÃ‚Ãˆ;.Ã‰''"''"', '''AL''DFLÃˆÃ‰Ã‰ÃˆÃ‰', 'SociÃ©tÃ© immobiliÃ¨re / Centre commercial', 'SÃ©curitÃ© / prÃ©vention des pertes', 'Par un collÃ¨gue / ami', '56-65 ans', 'femme'),
(8, 'ads', '', '', '', 'ads', '5', '1', '3', '4', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '4', '2', '2', '4', '3', '4', '3', '2', 'Ã€Ã‡ÃŠÃ‚Ãˆ;.Ã‰''"''"', '''AL''DFLÃˆÃ‰Ã‰ÃˆÃ‰', 'SociÃ©tÃ© immobiliÃ¨re / Centre commercial', 'SÃ©curitÃ© / prÃ©vention des pertes', 'Par un collÃ¨gue / ami', '56-65 ans', 'femme'),
(9, 'asd', 'asd', 'asd', 'asd', 'asd', '5', '1', '3', '4', '2', '3', '4', '2', '3', '4', 'Par la poste', '0', '0', '2', '2', '4', '3', '4', '3', '2', 'Content', 'Non', 'Grand Magasin - magasin Ã  rayons', 'PropriÃ©taire / PrÃ©sident', 'Par un collÃ¨gue / ami', '56-65 ans', 'femme'),
(10, 'asddffd', 'asdds', 'asddsdf', 'asdd', 'asdd', '5', '1', '3', '3', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '2', '4', '3', '4', '3', '2', 'Content', 'Non', 'Autre site Internet', 'Autre', 'Autre site Internet', '56-65 ans', 'femme'),
(11, 'asddffd', 'asddffdasd', 'asdasdasd', 'asddffd', 'asddffdasd', '5', '1', '3', '3', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '2', '4', '3', '4', '3', '2', 'Content', 'Non', 'asd', 'asd', '', '56-65 ans', 'femme'),
(12, 'asddffd', 'asddffd', 'asddffdads', 'asddffd', 'asddffdadsas', '5', '1', '3', '3', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '2', '4', '3', '4', '3', '2', 'Content', 'Non', 'ads', 'dfg', '', '56-65 ans', 'femme'),
(13, 'asddffd', 'asddffd', 'asddffddd', 'asddffd', 'asddffd', '5', '1', '3', '3', '2', '3', '4', '2', '3', '4', 'Sur place la journÃ©e mÃªme', '0', '1', '2', '2', '4', '3', '4', '3', '2', 'Content', 'Non', 'ads', 'Ventes / Marketing', 'www', '56-65 ans', 'femme'),
(14, 'John', 'Turner', 'jturner452@groupeviva.com', '4502583695', 'Groupe Viva', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'En ligne sur le site Internet CQCD', '5', '0', '5', '5', '5', '5', '5', '5', '5', 'Testing', 'Testing Ã©', 'Grand Magasin - magasin Ã  rayons', 'Supervision / gÃ©rance', 'Par un collÃ¨gue / ami', '56-65 ans', 'homme'),
(15, 'Johnd', 'Turner', 'jturner452d@groupeviva.com', '4502583695', 'Groupe Viva', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'Sur place la journÃ©e mÃªme', '0', '5', '5', '5', '5', '5', '5', '5', '5', 'Testing', 'Testing Ã©', 'Testing', 'Testing', 'Testing', '56-65 ans', 'homme'),
(16, 'John', 'Turner', 'jturner019@test.com', '45045894632', 'Test', '3', '3', '2', '4', '3', '4', '3', '4', '3', '5', 'Par la poste', '0', '0', '5', '3', '4', '4', '4', '5', '4', 'Test', 'TrÃ¨s bien', 'Test', 'Supervision / gÃ©rance', 'Distribution de brochures par mon centre commercial', '46-55 ans', 'homme');
