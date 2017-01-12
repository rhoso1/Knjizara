-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 04:14 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`id`, `poslovnice`, `naslov`, `zanr`, `autor`) VALUES
(1, 27, 'ProbamoBazu', 'ProbamoBazu', 'rhoso1'),
(2, 29, 'Lovac na zmajeve', 'Roman, probamo urediti', 'Khaled Hosseini'),
(3, 29, 'Inferno', 'Roman, edit', 'Dan Brown'),
(4, 29, 'Crveno i crno', 'Roman,edit', 'Stendhal'),
(5, 29, 'Ana Karenjina', 'Roman', 'Lav Tolstoj'),
(6, 29, 'Starac i more', 'Roman', 'Ernest Hemingway'),
(7, 29, 'Stranac', 'Roman', 'Albert Camus'),
(8, 29, 'Don Kihot', 'Roman', 'Miguel de Servantes'),
(9, 29, 'Ljubav u doba kolere', 'Roman', 'Gabrijel Garcia Marquez'),
(10, 29, 'Patnje mladog Vertera', 'Roman', 'Johan Wolfgang von Goethe'),
(11, 29, 'Zovem se Crvena', 'Roman', 'Orhan Pamuk');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `poslovnice`, `naslov`, `sadrzaj`, `autor`) VALUES
(1, 27, 'Probamo unijeti u mysql', 'Probamo unijeti u bazu', 'rhoso1'),
(2, 29, 'Novost', 'Otvaramo novu poslovnicu u Sarajevu.\nTom prilikom će se upriličiti svečanost i pozivamo Vas da se odazovete u što većem broju.', 'rhoso1'),
(3, 29, 'Novost', 'Kod nas možete pronaći sve što Vam je potrebno za školu, kao i albumi, čestike i još mnogo toga.', 'rhoso1'),
(4, 29, 'proba Novost', 'Proba za unos novosti', 'rhoso1');

-- --------------------------------------------------------

--
-- Table structure for table `poslovnice`
--

CREATE TABLE IF NOT EXISTS `poslovnice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grad` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `adresa` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `poslovnice`
--

INSERT INTO `poslovnice` (`id`, `grad`, `adresa`) VALUES
(27, 'Proba', 'Proba'),
(28, 'Sarajevo', 'Zmaja od Bosne, bb'),
(29, 'Zenica', 'Titova, bb');

-- --------------------------------------------------------

--
-- Table structure for table `webservis`
--

CREATE TABLE IF NOT EXISTS `webservis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grad` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `adresa` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `webservis`
--

INSERT INTO `webservis` (`id`, `grad`, `adresa`) VALUES
(1, 'Sarajevo', ' ZmajaOdBosne '),
(2, 'Zenica', 'ZmajaOdBosne '),
(3, 'Tuzla', 'ZmajaOdBosne'),
(4, 'WebServis', 'ZmajaOdBosne');

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
