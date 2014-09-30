-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:59 PM
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
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `class` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `present` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `absent_id` varchar(50) NOT NULL,
  UNIQUE KEY `class` (`class`),
  UNIQUE KEY `class_2` (`class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`class`, `dept`, `present`, `absent`, `total`, `absent_id`) VALUES
('ABII_002', 'CSE', 12, 15, 70, 'B082035,B081941'),
('ABI_001', 'CSE', 10, 10, 20, 'B082035'),
('ABI_014', 'CSE', 29, 25, 54, 'none');
