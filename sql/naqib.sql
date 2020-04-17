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
-- Table structure for table `naqib`
--

CREATE TABLE `naqib` (
  `naqib_id` varchar(50) NOT NULL,
  `idWadah` varchar(50) NOT NULL,
  `naqib_name` varchar(50) NOT NULL,
  `IC_number` varchar(14) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `naqib_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `naqib`
--

INSERT INTO `naqib` (`naqib_id`, `idWadah`, `naqib_name`, `IC_number`, `gender`, `naqib_address`) VALUES
('N1', 'W1', 'Zaidah Mohammed', '900831025662', 'Perempuan', 'Jalan Kebun'),
('N2', 'W2', 'Zaidi Mohammed', '700831023451', 'Lelaki', 'Jalan Kebun'),
('N3', 'W3', 'Adli Ibrahim', '741017102341', 'Lelaki', 'Kampung Tupai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naqib`
--
ALTER TABLE `naqib`
  ADD PRIMARY KEY (`naqib_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
