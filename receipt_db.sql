-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2014 at 03:05 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `receipt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Adminuser` varchar(10) NOT NULL,
  `Adminpwd` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Adminuser`, `Adminpwd`) VALUES
(1, 'admin', 'adm123');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `Receipt_No` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(65) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Item01` varchar(50) NOT NULL,
  `Item02` varchar(50) DEFAULT '________',
  `Item03` varchar(50) DEFAULT '________',
  `Item04` varchar(50) DEFAULT '________',
  `Item05` varchar(50) DEFAULT '________',
  `Amount01` double NOT NULL,
  `Amount02` double DEFAULT '0',
  `Amount03` double DEFAULT '0',
  `Amount04` double DEFAULT '0',
  `Amount05` double DEFAULT '0',
  `Total` double DEFAULT NULL,
  PRIMARY KEY (`Receipt_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`Receipt_No`, `Name`, `Address`, `Phone`, `Date`, `Item01`, `Item02`, `Item03`, `Item04`, `Item05`, `Amount01`, `Amount02`, `Amount03`, `Amount04`, `Amount05`, `Total`) VALUES
('RC61073', 'Mark Johnson Cassidi', '24, Broad rd, Marina, Lagos Island, Lagos', '07025698216', '2014-11-27 14:09:03', 'Laptop', 'Phone', 'Laptop Bag', 'Phone Pouch', '', 75000, 35000, 3000, 1200, 0, 114200),
('RC50879', 'Micheal Adewale', '89, Bode thomas road, Palmgroove, Lagos', '09078452312', '2014-11-28 14:29:07', 'G11 Laptop', 'Phone Pouch', '', '', '', 13500, 1500, 0, 0, 0, 15000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
