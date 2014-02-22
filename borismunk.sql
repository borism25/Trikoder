-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Računalo: 127.0.0.1
-- Vrijeme generiranja: Velj 22, 2014 u 04:00 
-- Verzija poslužitelja: 5.6.11
-- PHP verzija: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `borismunk`
--
CREATE DATABASE IF NOT EXISTS `borismunk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `borismunk`;

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `inovice`
--

CREATE TABLE IF NOT EXISTS `inovice` (
  `ID` int(18) NOT NULL AUTO_INCREMENT,
  `entity` varchar(255) NOT NULL,
  `AOP` varchar(255) NOT NULL,
  `Item_Price` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`,`AOP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Izbacivanje podataka za tablicu `inovice`
--

INSERT INTO `inovice` (`ID`, `entity`, `AOP`, `Item_Price`) VALUES
(1, 'Plava Kosulja', '40', '25'),
(2, 'zelena kosulja', '50', '35'),
(5, 'zelena majica', '50', '35'),
(6, 'crvena majica', '50', '35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
