-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:13 PM
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
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `au_date` date NOT NULL,
  `au_location` varchar(50) NOT NULL,
  `au_tajuk` varchar(50) NOT NULL,
  `au_tuanrumah` varchar(50) NOT NULL,
  `usrah_id` varchar(50) NOT NULL,
  `naqib_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`au_date`, `au_location`, `au_tajuk`, `au_tuanrumah`, `usrah_id`, `naqib_id`) VALUES
('2018-11-01', 'Taman Muhammad Abduh', 'Kitab Hadis 40', 'Nur Syahirah ', 'U1', 'N1'),
('2018-11-02', 'Taman Jaafar Hassan', 'Durus Thani', 'Muhammad Azam', 'U2', 'N2'),
('2018-11-08', 'Taman Muhammad Abduh', 'Kitab Hadis 40', 'Nur Maisarah', 'U3', 'N3'),
('2018-11-15', 'Taman Jaafar Hassan', 'Durus Thani', 'Nur Ain', 'U4', 'N2'),
('2018-12-12', 'Taman Sri Wang', 'Kitab Hadis 40', 'Aina Huda', 'U5', 'N2'),
('2018-12-15', 'Sungai Kapar Indah', 'Kitab Hadis 40', 'Hasbullah Ibrahim', 'U5', 'N3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`au_date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
