-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 04:00 PM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rgukt`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `cid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`cid`, `title`, `message`, `link`, `date`, `time`, `type`) VALUES
('BSR20141300', 'TCS Shortlisted Candidates', '', 'RGUKT_BASAR_TCS_SELECTS.html', '2014-01-30', '03:21 PM', 'Examination'),
('BSR20141301', 'Infosys Shortlisted Candidates', 'List of Students Shortlisted for Infosys', 'index.html', '2014-01-30', '03:35 PM', 'Examination');
