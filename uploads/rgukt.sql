-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2012 at 07:35 PM
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
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `uname` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `from` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`uname`, `subject`, `message`, `from`, `time`) VALUES
('', '', 'http://localhost/shiva/intramail/logo2.png\r\n', 'B082035', '19:33:50'),
('B081167', 'Hi', 'how are you good afternoon', 'B082035', '19:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `logged_in`
--

CREATE TABLE IF NOT EXISTS `logged_in` (
  `uname` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logged_in`
--

INSERT INTO `logged_in` (`uname`, `status`, `time`) VALUES
('B082035', 'yes', '224355');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `uname` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `to` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`uname`, `subject`, `message`, `to`, `time`) VALUES
('B082035', 'Hi', 'how are you good afternoon', 'B081167', '19:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

CREATE TABLE IF NOT EXISTS `studetails` (
  `uname` varchar(10) NOT NULL,
  `pass1` varchar(20) DEFAULT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `ss` varchar(5) DEFAULT NULL,
  `a1` varchar(50) DEFAULT NULL,
  `a2` varchar(50) DEFAULT NULL,
  `a3` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `hostel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`) VALUES
('B082035', 'shiva2035', 'SHIVAKUMAR', 'KANNEBOINA', 'KRISHNAIAH', 'PADMA', 'Student', 'Computer Science and Engineering(CSE)', '1993-01-29', 'Male', 'BC-D', 'NAGARAM', 'JAJIREDDY GUDEM', 'NALGONDA', 'SHIVA2035.IIIT@GMAIL.COM', '9963808956', '313', 'SF-12');
