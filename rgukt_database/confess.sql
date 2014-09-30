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
-- Table structure for table `confess`
--

CREATE TABLE IF NOT EXISTS `confess` (
  `id` varchar(7) NOT NULL,
  `message` varchar(200) NOT NULL,
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confess`
--

INSERT INTO `confess` (`id`, `message`, `ip`) VALUES
('B082035', 'Happy Diwali to all folks', '127.0.0.1'),
('B082035', 'Best Wishes on Ugadi', '127.0.0.1'),
('admin', 'Hello Friends Good Evening', '127.0.0.1');
