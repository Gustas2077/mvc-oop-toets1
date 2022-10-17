-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2022 at 10:30 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `richestpeople`
--

DROP TABLE IF EXISTS `richestpeople`;
CREATE TABLE IF NOT EXISTS `richestpeople` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `MyName` varchar(200) NOT NULL,
  `Networth` varchar(200) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Company` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `richestpeople`
--

INSERT INTO `richestpeople` (`Id`, `MyName`, `Networth`, `Age`, `Company`) VALUES
(2, 'Jeff Bezos', '183000000000', 58, 'Amazon'),
(3, 'Bernard Arnault', '142000000000', 73, 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', 66, 'Microsoft'),
(5, 'Warren Buffet', '126000000000', 91, 'Berkshire Hathaway');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
