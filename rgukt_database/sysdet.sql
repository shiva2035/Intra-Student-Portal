-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 04:01 PM
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
-- Table structure for table `sysdet`
--

CREATE TABLE IF NOT EXISTS `sysdet` (
  `id` varchar(50) NOT NULL,
  `name` varchar(7) NOT NULL,
  `applied` char(10) NOT NULL,
  `inst` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `confirmed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysdet`
--

INSERT INTO `sysdet` (`id`, `name`, `applied`, `inst`, `city`, `confirmed`) VALUES
('J.V.Satyavathi', 'B082958', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('G.Vijender Reddy', 'B081692', 'Y', 'STPL', 'HYDERABAD', 'Confirmed'),
('K.Srinivas', 'B082480', 'Y', 'DRDO', 'Hyderabad', 'confirmed'),
('K. Madhu', 'B082428', 'Y', 'TCS', '', 'pending'),
('GOPIKRISHNA PULI', 'B081766', 'N', '-', '-', '-'),
('Naga Raju Budigam', 'B083095', 'Y', 'Hyderabad Central University', 'Hyderabad', 'Confirmed'),
('GOPIKRISHNA PULI', 'B081766', 'N', '-', '-', '-'),
('Kova Shyamsunder', 'B082182', 'N', 'No', '', 'No'),
('Polipelly Hareesh', 'B082327', 'N', 'No', 'No', 'No'),
('Jhansi Puppala', 'B082013', 'Y', 'Deloitte', 'Hyderabad', 'pending'),
('Prameela Pyata', 'B081964', 'Y', 'BHEL', 'Hyderabad', 'pending'),
('Polipelly Hareesh', 'B082327', 'N', 'No', 'No', 'No'),
('Kova Shyamsunder', 'B082182', 'N', 'N', '', 'N'),
('Kova Shyamsunder', 'B082182', 'N', 'N', '', 'N'),
('Enagandula Anusha', 'B081789', 'Y', 'NTPC', 'RAMAGUNDAM', 'CONFIRM'),
('Badigeru Venkatesh', 'B082847', 'N', '', '', ''),
('Enjamoori Balamani', 'B081954', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('CH.SWATHI', 'B082951', 'N', '', '', ''),
('Enjamoori Balamani', 'B081954', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('Kova Shyamsunder', 'B082182', 'N', 'N', 'N', 'N'),
('AMGOTH BALAKISHAN', 'B083026', 'N', '', '', ''),
('Bhagya', 'B082260', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('B.Lavanya', 'B082269', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('Rajesh Munagalashetti', 'B083083', 'N', '', '', ''),
('AMGOTH BALAKISHAN', 'B083026', 'N', '', '', ''),
('P.Ashwini', 'B082175', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('Thakur Madhavi', 'B082318', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('Nalamasa Shobhan Babu', 'B081595', 'Y', 'Intelli', 'Hyderabad', 'pending'),
('J.Shailaja', 'B082461', 'Y', 'Envy Infotech Company', 'Hyderabad', 'pending'),
('P.LAVANYA', 'B082521', 'Y', 'ENVY-INFOTECH', 'HYDERABAD', 'pending'),
('YELLA SABITHA', 'B082116', 'Y', 'ENVY Infotech', 'HYDERABAD', 'Pending'),
('Shiva Kumar K', 'B082035', 'N', '-', '-', '-'),
('Ch.Srilatha', 'B081602', '', '', '', ''),
('M.Priyanka', 'B082155', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('B.Swapna', 'B081620', 'Y', 'Envy Infotech', 'Hyderabad', 'pending'),
('Swamy G', 'B082442', 'Y', 'NGO', 'West Godavari', 'pending'),
('K.Chaithanya', 'B082210', 'Y', 'Idea labs', 'Hyderabad', 'pending'),
('DODLA MAMATHA', 'B081449', 'N', '', '', ''),
('Ch.Srilatha', 'B081602', 'Y', 'Envy Infotech Company', 'Hyderabad', 'Pending'),
('B.Srilatha', 'B082930', 'N', '', '', ''),
('K. Sravani', 'B081906', 'N', '', '', ''),
('Singampally Ramalakshmi', 'B083005', 'N', '', '', ''),
('Krishna Kumari B', 'B082176', 'N', '', '', ''),
('K.Samyukta ', 'B082105', 'Y', 'Envy Infotech', 'Hyderabad', 'pending'),
('Bontula Babita Venkata Naga Lakshmi', 'B081660', 'N', '', '', ''),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Vinaykumar Masampally', 'B081426', 'Y', 'Intel Corporation', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '', ''),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('SK.RAZAK', 'B082650', 'N', '--', '--', '--'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '--', '--'),
('SK.RAZAK', 'B082650', 'N', '--', '--', '--'),
('Katam Hariprasad', 'B081415', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '--', '--'),
('Thakur Madhavi', 'B082318', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('DORNALA SRAVAN KUMAR', 'B082736', 'N', '--', '--', '--'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Polimera Lakshmi', 'B082722', 'Y', '', 'Hyderabad', 'pending'),
('FIRDOSE', 'B081616', 'N', '', '', ''),
('Kosanam Avanija', 'B082361', 'Y', 'Infogroups', 'Hyderabad', 'pending'),
('B.Shailaja', 'B081853', 'N', '', '', ''),
('Mohammad sadak', 'B081744', 'N', '', '', ''),
('Kosanam Avanija', 'B082361', 'Y', 'Infogroups', 'Hyderabad', 'pending'),
('', '', '', '', '', ''),
('Polimera Lakshmi', 'B082722', 'Y', '', 'Hyderabad', 'pending');
