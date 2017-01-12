-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 01:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knjizaraebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpodaci`
--

CREATE TABLE IF NOT EXISTS `adminpodaci` (
  `username` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `adminpodaci`
--

INSERT INTO `adminpodaci` (`username`, `password`) VALUES
('rhoso1', 'ebook');

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE IF NOT EXISTS `knjige` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poslovnice` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `zanr` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poslovnice` (`poslovnice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`id`, `poslovnice`, `naslov`, `zanr`, `autor`) VALUES
(1, 1, 'Lovac na zmajeve', 'Roman', 'Khaled Hosseini'),
(2, 1, 'Inferno', 'Roman', 'Dan Brown'),
(3, 1, 'Crveno i crno', 'Roman', 'Stendhal'),
(4, 1, 'Ana Karenjina', 'Roman', 'Lav Tolstoj'),
(5, 1, 'Starac i more', 'Roman', 'Ernest Hemingway'),
(6, 1, 'Stranac', 'Roman', 'Albert Camus'),
(7, 1, 'Don Kihot', 'Roman', 'Miguel de Servantes'),
(8, 1, 'Ljubav u doba kolere', 'Roman', 'Gabrijel Garcia Marquez'),
(9, 1, 'Patnje mladog Vertera', 'Roman', 'Johan Wolfgang von Goethe'),
(10, 1, 'Zovem se Crvena', 'Roman', 'Orhan Pamuk');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poslovnice` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `sadrzaj` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poslovnice` (`poslovnice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `poslovnice`, `naslov`, `sadrzaj`, `autor`) VALUES
(1, 1, 'Novost', 'Otvaramo novu poslovnicu u Sarajevu.\nTom prilikom će se upriličiti svečanost i pozivamo Vas da se odazovete u što većem broju.', 'rhoso1'),
(2, 1, 'Novost', 'Kod nas možete pronaći sve što Vam je potrebno za školu, kao i albumi, čestike i još mnogo toga.', 'rhoso1'),
(3, 1, 'proba Novost', 'Proba za unos novosti', 'rhoso1'),
(38, 14, 'probasql', 'probasql', 'probasql');

-- --------------------------------------------------------

--
-- Table structure for table `poslovnice`
--

CREATE TABLE IF NOT EXISTS `poslovnice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grad` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `adresa` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `poslovnice`
--

INSERT INTO `poslovnice` (`id`, `grad`, `adresa`) VALUES
(1, 'Mostar', 'ZmajaOdBosne'),
(2, 'Mostar', 'Titova'),
(14, 'Mostar', 'BezBroja'),
(16, 'Sarajevo', 'ZmajaOdBosne'),
(17, 'Zenica', 'ZmajaOdBosne'),
(23, 'WebServis', 'ZmajaOdBosne'),
(24, 'Proba', 'Proba'),
(25, 'Sarajevo', 'Zmaja od Bosne, bb'),
(26, 'Zenica', 'Titova, bb');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `knjige`
--
ALTER TABLE `knjige`
  ADD CONSTRAINT `knjige_ibfk_1` FOREIGN KEY (`poslovnice`) REFERENCES `poslovnice` (`id`);

--
-- Constraints for table `novosti`
--
ALTER TABLE `novosti`
  ADD CONSTRAINT `novosti_ibfk_1` FOREIGN KEY (`poslovnice`) REFERENCES `poslovnice` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
