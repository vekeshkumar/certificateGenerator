-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 03:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iit_certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `iit_cert_details`
--

CREATE TABLE IF NOT EXISTS `iit_cert_details` (
  `Name` varchar(100) NOT NULL,
  `Training` varchar(100) NOT NULL,
  `Trainee` varchar(100) NOT NULL,
  `datee` varchar(100) NOT NULL,
  `EmailID` varchar(200) NOT NULL,
  `Cert_id` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iit_cert_details`
--

INSERT INTO `iit_cert_details` (`Name`, `Training`, `Trainee`, `datee`, `EmailID`, `Cert_id`) VALUES
('Vekesh Kumar.D', 'PHP and MySQL', 'Prof.JayaSudha M', '14 Sept 2015', 'vekeshkumar109@gmail.com', ''),
('Sowndar Raja Rao', 'C and Cpp', 'Dr.Subbulaskmi.T', '24 May 2015', '', 'Vd391GI3U6'),
('Sowndar Raja Rao', 'C and Cpp', 'Dr.Subbulaskmi.T', '24 May 2015', '', 'c0y3empD1W'),
('Sowndar Raja Rao', 'C and Cpp', 'Dr.Subbulaskmi.T', '24 May 2015', '', 'D7iEvMCXCk'),
('Sowndar Raja Rao', 'C and Cpp', 'Dr.Subbulaskmi.T', '24 May 2015', '', 'v80hJKlk0X'),
('Sowndar Raja Rao', 'C and Cpp', 'Dr.Subbulaskmi.T', '24 May 2015', '', '3lOQl972U7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('Admin', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
