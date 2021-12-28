-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2021 at 04:30 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakultet`
--

-- --------------------------------------------------------

--
-- Table structure for table `predmet`
--

DROP TABLE IF EXISTS `predmet`;
CREATE TABLE IF NOT EXISTS `predmet` (
  `sifra_Predmeta` text NOT NULL,
  `naziv_Predmeta` text NOT NULL,
  `semestar` text NOT NULL,
  `godina_Studija` text NOT NULL,
  `smer` text NOT NULL,
  `predavac` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predmet`
--

INSERT INTO `predmet` (`sifra_Predmeta`, `naziv_Predmeta`, `semestar`, `godina_Studija`, `smer`, `predavac`) VALUES
('BM6261', 'Proizvodni sistemi', 'Terzic', 'VI', 'Vojno inzenjerstvo', 'Mika Mikic'),
('BRTSI5402', 'Digitalna elektronika', 'V', 'Treca', 'Racunarska tehnika', 'Lazar Lazarevic'),
('BRTSI2500', 'Algoritmi i strukture podataka', 'II', 'Prva', 'Racunarska tehnika', 'Petar Petrovic'),
('BVI6104-2', 'Proizvodni sistemi', 'Savkovic', 'VI', 'Industrijski inzenjering', 'Zika Zikic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
