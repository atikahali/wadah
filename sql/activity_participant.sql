-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:35 PM
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
-- Table structure for table `activity_participant`
--

CREATE TABLE `activity_participant` (
  `act_part` varchar(50) NOT NULL,
  `act_id` varchar(50) NOT NULL,
  `part_ic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_participant`
--

INSERT INTO `activity_participant` (`act_part`, `act_id`, `part_ic`) VALUES
('B101', '001', '970324115152');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_participant`
--
ALTER TABLE `activity_participant`
  ADD PRIMARY KEY (`act_part`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
