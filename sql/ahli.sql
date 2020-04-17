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
-- Table structure for table `ahli`
--

CREATE TABLE `ahli` (
  `ic_ahli` varchar(14) NOT NULL,
  `idwadah_ahli` varchar(50) NOT NULL,
  `nama_ahli` varchar(50) NOT NULL,
  `usrah_ahli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahli`
--

INSERT INTO `ahli` (`ic_ahli`, `idwadah_ahli`, `nama_ahli`, `usrah_ahli`) VALUES
('040417023423', 'A11', 'Aiman Yasin Adli', 'El-Hambra'),
('740229112331', 'W15', 'Maszlee Ahmad', 'Aqsa'),
('910101075662', 'W13', 'Nadhirah Mohd Napi', 'Haura'),
('921008034544', 'W12', 'Nadia Aqilah', 'Haura'),
('930831025668', 'W14', 'Adila Muskanan', 'Haura'),
('931209882345', 'A4', 'Saad Lamjarred', 'Maghribi'),
('950808025442', 'A14', 'Ainun Arbaina', 'Haura'),
('951209234561', 'A13', 'Adi Hazwan', 'Maghribi'),
('970612021213', 'A10', 'Muhammad Syahmi', 'El-Hambra'),
('970707128923', 'A6', 'Mohd Abdullah', 'Aqsa'),
('971207025750', 'A1', 'Hana Wahida Adli', 'Haura'),
('971212107881', 'A2', 'Abdul Majid', 'Aqsa'),
('981212034457', 'A12', 'Ahmad Taha', 'El-Hambra'),
('981212034561', 'W11', 'Abu Hurairah', 'Maghribi'),
('990707123443', 'W10', 'Muhammad Fikri', 'Maghribi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahli`
--
ALTER TABLE `ahli`
  ADD PRIMARY KEY (`ic_ahli`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
