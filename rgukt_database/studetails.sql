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
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`, `type`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Krishnaiah', 'Padma', 'Student', 'CSE', '0000-00-00', 'M', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'B082035@rgukt.in', '9963808956', '312', 'sf12', 'Student'),
('B082035', 'shiva2035', 'Kanneboina', 'Shiva Kumar', 'KRISHNAIAH', 'PADMA', 'Student', 'Computer Science and Engineering(CSE)', '1993-01-29', 'Male', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'shiva2035.iiit@gmail.com', '9963808956', '312', 'SF-12', 'student'),
('b082182', 'password', 'password', 'Shyam', '', '', 'Student', 'Computer Science(CSE)', '1993-08-10', 'Male', 'BC-B', '', '', '', '', '', '312', '', ''),
('company', 'company', 'Placement', 'Portal', 'rgukt', 'rgukt', 'b.tect', 'CSE', '2013-09-15', 'm', 'gener', 'rgukt basar', 'mudhole', 'adilabad', 'shiva2035.iiit@rgukt.in', '504107', '312-CSE', 'sf-12', 'company');
