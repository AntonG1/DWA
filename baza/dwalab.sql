-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2015 at 08:19 AM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dwalab`
--
CREATE DATABASE IF NOT EXISTS `dwalab` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dwalab`;

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(60) NOT NULL,
  `ime` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `username`, `password`, `ime`) VALUES
(1, 'anton', '1a1dc91c907325c69271ddf0c944bc72', 'Anton Galfi'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user user');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE IF NOT EXISTS `proizvodi` (
  `Naziv_proizvoda` varchar(100) NOT NULL,
  `Tip_proizvoda` varchar(100) DEFAULT NULL,
  `Opis_proizvoda` varchar(200) DEFAULT NULL,
  `Vegetarijanski` varchar(2) DEFAULT NULL,
  `Halal` varchar(2) DEFAULT NULL,
  `Košer` varchar(2) DEFAULT NULL,
  `Alergeni` varchar(100) DEFAULT NULL,
  `Cijena` varchar(100) DEFAULT NULL,
  UNIQUE KEY `Naziv proizvoda` (`Naziv_proizvoda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`Naziv_proizvoda`, `Tip_proizvoda`, `Opis_proizvoda`, `Vegetarijanski`, `Halal`, `Košer`, `Alergeni`, `Cijena`) VALUES
('Gibanica', 'ostalo', 'Ovo je slani tip kolača, punjena je orasima', 'NE', 'NE', 'NE', 'jaja,orasi,kivi', '10 Kn'),
('Sirnica', 'ostalo', 'Ovo je slani tip kolača, punjen sirom', 'NE', 'NE', 'NE', 'jaja,mlijeko,kivi', '12 Kn'),
('Burek', 'ostalo', 'Ovo je slani tip kolača, punjen mesom', 'NE', 'NE', 'NE', 'jaja,kivi,jagode', '14Kn'),
('Sacher torta', 'kolač', 'Čokoladna torta u više slojeva', 'DA', 'DA', 'DA', 'kivi,jagode,kikiriki', '16Kn'),
('Mađarica', 'kolač', 'Čokoladni tip torte u više slojeva, s korama', 'NE', 'NE', 'NE', 'jaja,rakovi,kivi', '10 Kn'),
('Kremšnita', 'kolač', 'krem kolač', 'DA', 'DA', 'NE', 'kikiriki,jaja,jagode', '8 Kn'),
('Šampita', 'kolač', 'slatki kolač', 'NE', 'DA', 'NE', 'ananas,jaja,kikiriki', '5 Kn'),
('Piškote', 'keks', 'slatko tijesto', 'NE', 'DA', 'DA', 'jagode,rakovi,jaja', '10 Kn'),
('Čokoladni keksi – čisti', 'keks', 'slatki keksi', 'NE', 'DA', 'NE', 'orašasti plodovi,jaja,kikiriki', '8 Kn'),
('Čokoladni keksi – brusnice', 'keks', 'slatki keksi s brusnicama', 'DA', 'DA', 'NE', 'jagode,jaja,kikiriki', '10 Kn'),
('Voćni kup', 'kolač', 'ukusno voće', 'DA', 'NE', 'DA', 'kivi,jaja,kikiriki', '5 Kn'),
('Čokolada s čilijem', 'čokolada', 'slatko pikantno', 'DA', 'NE', 'DA', 'rakovi,ananas,kikiriki', '8 Kn'),
('Čokolada s citrusnim aromama', 'čokolada', 'kiselo i slatko', 'NE', 'DA', 'DA', 'ananas,jaja,kikiriki', '5 Kn'),
('Belgijske praline', 'čokolada', 'slatko s kremom', 'NE', 'NE', 'NE', 'jagode,jaja,kikiriki', '8 Kn'),
('Praline s konjakom', 'čokolada', 'čokolada s alkoholom', 'NE', 'NE', 'NE', 'kikiriki,mlijeko,kikiriki', '10 Kn'),
('Macarons', 'keks', 'nekakvi keksi', 'NE', 'NE', 'NE', 'jaja,mlijeko,rakovi', '3 Kn'),
('Croisant', 'ostalo', 'lisnato tijesto', 'NE', 'NE', 'NE', 'ananas,mlijeko,rakovi', '12 Kn'),
('Banana split', 'kolač', 'sladoled', 'NE', 'DA', 'NE', 'mlijeko,rakovi,soja', '10 Kn'),
('Ganache torta', 'torta', 'slatka torta', 'DA', 'DA', 'DA', 'kikiriki,mlijeko,rakovi', '14Kn'),
('ZKD torta', 'torta', 'torta od bijele čokolade', 'NE', 'NE', 'DA', 'jagode,mlijeko,rakovi', '14Kn'),
('Voćna torta', 'torta', 'različito voće', 'NE', 'DA', 'DA', 'ananas,rakovi,soja', '5 Kn'),
('Tiramisu', 'kolač', 'kremasti kolač', 'NE', 'DA', 'NE', 'mlijeko,rakovim,soja', '12 Kn'),
('Crne kocke', 'kolač', 'crna čokolada', 'DA', 'DA', 'NE', 'kivi,rakovi,soja', '8 Kn'),
('Kesten štapić', 'kolač', 'kolač od kestena', 'NE', 'NE', 'NE', 'ananas,rakovi,jaja', '12 Kn'),
('Kesten šnita', 'kolač', 'tjestenina s kestenom', 'DA', 'DA', 'DA', 'ananas,rakovi,soja', '10 Kn'),
('Kokos štangice', 'keks', 'slatki kokos', 'DA', 'DA', 'DA', 'kivi,kikiriki,rakovi', '16Kn'),
('Palice', 'keks', 'slani prutići', 'NE', 'NE', 'NE', 'ananas,rakovi,jaja', '8 Kn'),
('Bananko', 'kolač', 'čokolada i banana', 'DA', 'NE', 'DA', 'rakovi, mlijeko,rakovi', '10 Kn'),
('Breskvice', 'keks', 'kolač od breskve', 'DA', 'DA', 'NE', 'jagode,mlijeko,rakovi', '16Kn'),
('Čupavci', 'kolač', 'kolač s čokoladaom i kokosom', 'NE', 'NE', 'NE', 'ananas,soja,jaja', '10 Kn'),
('Čokoladni mousse', 'kolač', 'tekuća čokolada', 'NE', 'NE', 'NE', 'orašasti plodovi,ananas,soja', '8 Kn'),
('Išler', 'kolač', 'slatko voće', 'DA', 'DA', 'NE', 'mlijeko,soja,ananas', '5 Kn'),
('Lambada', 'kolač', 'čokolada i alkohol', 'NE', 'DA', 'DA', 'jagode,ananas,soja', '8 Kn'),
('Medenjaci', 'keks', 'med i višnja', 'DA', 'DA', 'DA', 'kivi,soja,ananas', '14Kn'),
('Rafaelo kuglice', 'kolač', 'lješnjak i kokos', 'DA', 'DA', 'NE', 'mlijeko,soja,ananas', '16Kn'),
('Šubare', 'kolač', 'slani kolač', 'NE', 'NE', 'NE', 'jagode,rakovi,ananas', '8 Kn'),
('Iločki Traminac', 'piće', 'tekuča čokolada', 'NE', 'NE', 'NE', 'jagode,ananas,soja', '14Kn'),
('voćni punč', 'piće', 'tekuće voće', 'NE', 'NE', 'DA', 'mlijeko,rakovi,ananas', '18 Kn'),
('Dorina', 'čokolada', 'Čokolada s keksom', 'DA', 'NE', 'NE', 'soja,jaja,mlijeko,orašasti plodovi', '10 Kn'),
('', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tipovi_podataka`
--

CREATE TABLE IF NOT EXISTS `tipovi_podataka` (
  `Tipovi delicija` varchar(9) DEFAULT NULL,
  `B` varchar(10) DEFAULT NULL,
  `C` varchar(10) DEFAULT NULL,
  `Tipovi alergena` varchar(17) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipovi_podataka`
--

INSERT INTO `tipovi_podataka` (`Tipovi delicija`, `B`, `C`, `Tipovi alergena`) VALUES
('Torte', NULL, NULL, 'soja'),
('Keksi', NULL, NULL, 'jaja'),
('Kolači', NULL, NULL, 'kikiriki'),
('Čokolade', NULL, NULL, 'mlijeko'),
('Pića', NULL, NULL, 'rakovi'),
('Ostalo', NULL, NULL, 'školjke'),
(NULL, NULL, NULL, 'orašasti plodovi'),
(NULL, NULL, NULL, 'jagode'),
(NULL, NULL, NULL, 'kivi'),
(NULL, NULL, NULL, 'ananas');

-- --------------------------------------------------------

--
-- Table structure for table `unosalergen`
--

CREATE TABLE IF NOT EXISTS `unosalergen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alergen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unosalergen`
--

INSERT INTO `unosalergen` (`id`, `alergen`) VALUES
(1, 'soja'),
(2, 'jaja'),
(3, 'kikiriki'),
(4, 'mlijeko'),
(5, 'rakovi'),
(6, 'školjke'),
(7, 'orašasti plodovi'),
(8, 'jagoda'),
(9, 'kivi'),
(10, 'ananas');

-- --------------------------------------------------------

--
-- Table structure for table `unostip`
--

CREATE TABLE IF NOT EXISTS `unostip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `unostip`
--

INSERT INTO `unostip` (`id`, `tip`) VALUES
(1, 'torta'),
(2, 'keks'),
(3, 'kolač'),
(4, 'čokolada'),
(5, 'piće'),
(6, 'ostalo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
