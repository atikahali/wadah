-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadah1`
--

-- --------------------------------------------------------

--
-- Table structure for table `usrah`
--

CREATE TABLE `usrah` (
  `usrah_id` varchar(50) NOT NULL,
  `usrah_naqib` varchar(50) NOT NULL,
  `usrah_time` time NOT NULL,
  `usrah_day` varchar(10) NOT NULL,
  `naqib_id` varchar(50) NOT NULL,
  `usrah_discussion` varchar(50) NOT NULL,
  `usrah_level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usrah`
--

INSERT INTO `usrah` (`usrah_id`, `usrah_naqib`, `usrah_time`, `usrah_day`, `naqib_id`, `usrah_discussion`, `usrah_level`) VALUES
('U1', 'Haura', '08:00:00', 'Thursday', 'N1', 'Kitab Hadis 40', 'WADAH'),
('U2', 'Aqsa', '09:00:00', 'Friday', 'N2', 'Kitab Hadis 40', 'ABIM'),
('U3', 'Maghribi', '11:00:00', 'Thursday', 'N2', 'Kitab Hadis 40', 'WADAH'),
('U4', 'El-Hambra', '12:10:00', 'Tuesday', 'N3', 'Kitab Hadis 40', 'PKPIM'),
('U5', 'Al-Iman', '10:00:00', 'Sunday', 'N3', 'Al-Misbah', 'PKPIM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usrah`
--
ALTER TABLE `usrah`
  ADD PRIMARY KEY (`usrah_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
