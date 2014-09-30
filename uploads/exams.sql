-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2012 at 08:49 AM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exams`
--

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE IF NOT EXISTS `flat` (
  `id` varchar(10) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `total`) VALUES
('B081046', 3, 3, 0, 1, 1, 3, 0, 2, 0, 0, 0),
('B081093', 0, 4, 2, 3, 3, 1, 3, 2, 1, 0, 0),
('B081167', 0, 4, 0, 3, 2, 2, 3, 0, 0, 0, 0),
('B081220', 2, 5, 2, 3, 3, 1, 3, 2, 0, 1, 0),
('B081313', 0, 3, 2, 1, 3, 1, 3, 2, 0, 0, 0),
('B081336', 0, 0, 3, 2, 3, 1, 2, 3, 0, 0, 0),
('B081349', 0, 5, 1, 3, 3, 1, 0, 2, 1, 1, 0),
('B081415', 0, 5, 2, 3, 2, 1, 3, 2, 1, 0, 0),
('B081422', 3, 1, 0, 1, 2, 1, 3, 2, 1, 0, 0),
('B081467', 1, 1, 2, 1, 3, 1, 3, 2, 1, 0, 0),
('B081524', 2, 5, 0, 0, 2, 1, 0, 2, 1, 0, 0),
('B081543', 3, 4, 2, 3, 1, 3, 0, 2, 0, 0, 0),
('B081551', 3, 5, 2, 0, 1, 1, 3, 2, 0, 1, 0),
('B081594', 2, 5, 0, 0, 2, 1, 0, 2, 1, 0, 0),
('B081600', 0, 4, 0, 3, 1, 0, 3, 2, 0, 0, 0),
('B081616', 0, 2, 3, 3, 0, 1, 3, 0, 0, 1, 0),
('B081643', 1, 4, 0, 3, 3, 0, 3, 0, 1, 0, 0),
('B081697', 2, 4, 0, 3, 3, 2, 0, 2, 0, 0, 0),
('B081744', 3, 4, 1, 0, 1, 1, 3, 2, 0, 1, 0),
('B081791', 2, 5, 3, 2, 2, 0, 3, 3, 0, 0, 0),
('B081863', 0, 0, 2, 2, 3, 0, 0, 0, 0, 1, 0),
('B081906', 0, 4, 3, 3, 2, 3, 3, 2, 0, 0, 0),
('B081911', 0, 4, 2, 2, 0, 1, 3, 0, 0, 1, 0),
('B081926', 1, 1, 0, 1, 3, 1, 0, 2, 1, 0, 0),
('B081932', 2, 5, 1, 0, 2, 1, 0, 2, 1, 0, 0),
('B081977', 0, 5, 2, 3, 2, 1, 3, 2, 1, 0, 0),
('B082007', 0, 4, 2, 3, 1, 0, 3, 2, 0, 0, 0),
('B082035', 0, 4, 0, 3, 2, 1, 3, 2, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `sub` varchar(12) NOT NULL,
  `q1` char(1) NOT NULL,
  `q2` char(1) NOT NULL,
  `q3` char(1) NOT NULL,
  `q4` char(1) NOT NULL,
  `q5` char(1) NOT NULL,
  `q6` char(1) NOT NULL,
  `q7` char(1) NOT NULL,
  `q8` char(1) NOT NULL,
  `q9` char(1) NOT NULL,
  `q10` char(1) NOT NULL,
  PRIMARY KEY (`sub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`sub`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('se', 'b', 'c', 'c', 'a', 'a', 'b', 'c', 'd', 'a', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `se`
--

CREATE TABLE IF NOT EXISTS `se` (
  `id` varchar(10) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se`
--

INSERT INTO `se` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `total`) VALUES
('B081046', 3, 1, 0, 4, 3, 2, 1, 0, 0, 1, 3),
('B081093', 3, 2, 1, 1, 0, 3, 3, 2, 1, 0, 2),
('B081167', 2, 0, 0, 1, 1, 1, 0, 0, 3, 0, 5),
('B081220', 1, 3, 0, 1, 3, 1, 2, 3, 0, 1, 2),
('B081313', 3, 0, 0, 1, 3, 2, 1, 2, 0, 2, 3),
('B081336', 3, 3, 0, 1, 0, 2, 3, 0, 2, 1, 3),
('B081349', 3, 0, 0, 2, 2, 1, 2, 2, 0, 1, 3),
('B081415', 2, 1, 2, 2, 3, 1, 3, 0, 0, 2, 2),
('B081422', 2, 3, 0, 2, 1, 1, 0, 3, 0, 1, 3),
('B081467', 3, 0, 1, 3, 2, 2, 3, 1, 0, 1, 2),
('B081524', 2, 1, 0, 1, 1, 1, 1, 0, 1, 1, 2),
('B081543', 2, 0, 1, 0, 0, 1, 1, 3, 0, 2, 4),
('B081551', 3, 3, 0, 0, 0, 0, 3, 2, 0, 2, 5),
('B081594', 2, 1, 0, 1, 1, 1, 1, 2, 1, 1, 1),
('B081600', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 4),
('B081616', 3, 3, 0, 1, 3, 1, 3, 0, 0, 1, 3),
('B081643', 3, 1, 0, 1, 0, 2, 1, 3, 0, 3, 3),
('B081697', 2, 3, 0, 2, 1, 1, 0, 2, 1, 3, 2),
('B081744', 2, 3, 1, 1, 3, 3, 0, 3, 0, 3, 2),
('B081791', 2, 1, 0, 3, 3, 1, 0, 1, 3, 3, 2),
('B081863', 3, 1, 1, 1, 0, 0, 0, 0, 0, 1, 5),
('B081906', 3, 3, 0, 1, 1, 3, 1, 0, 0, 1, 3),
('B081911', 2, 0, 0, 1, 2, 1, 1, 3, 0, 1, 3),
('B081926', 3, 0, 1, 3, 2, 2, 3, 1, 0, 1, 2),
('B081932', 2, 1, 2, 1, 2, 1, 1, 2, 1, 2, 0),
('B081977', 2, 1, 2, 2, 3, 1, 0, 0, 0, 2, 3),
('B082007', 2, 0, 0, 1, 1, 1, 0, 0, 0, 1, 5),
('B082035', 3, 3, 0, 0, 3, 1, 0, 0, 1, 1, 4);
