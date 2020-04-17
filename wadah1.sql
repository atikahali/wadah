-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 09:13 AM
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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` int(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `date`, `place`, `street`, `city`, `postcode`, `state`) VALUES
('005', 'Gotong Royong', '2018-12-01', 'Masjid', 'UiTM', 'Arau', 2600, 'Perlis'),
('006', 'Ceramah', '2018-12-02', 'Masjid', 'UiTM', 'Arau', 2600, 'Perlis');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `dob`, `gender`, `username`, `password`) VALUES
('Atikah Ali', '1997-03-24', 'Female', 'qaliey', '*9905D4D1083B406F421052565F6843F1E6C3E4A8');

-- --------------------------------------------------------

--
-- Table structure for table `ahli`
--

CREATE TABLE `ahli` (
  `ic_ahli` varchar(14) NOT NULL,
  `usrah_ahli` varchar(50) NOT NULL,
  `idwadah_ahli` varchar(50) NOT NULL,
  `nama_ahli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahli`
--

INSERT INTO `ahli` (`ic_ahli`, `usrah_ahli`, `idwadah_ahli`, `nama_ahli`) VALUES
('001217023422', 'Haura', 'A5', 'Nabila'),
('040417023423', 'El-Hambra', 'A11', 'Aiman Yasin Adli'),
('931209882345', 'Maghribi', 'A4', 'Saad Lamjarred'),
('951209234561', 'Maghribi', 'A13', 'Adi Hazwan'),
('961111025730', 'Haura', 'A22', 'Nur Ainna Adilla'),
('961207012212', 'Haura', 'A3', 'Sharifah Nurliana'),
('970612021213', 'El-Hambra', 'A10', 'Muhammad Syahmi'),
('970707128923', 'Aqsa', 'A6', 'Mohd Abdullah'),
('971207025750', 'Haura', 'A1', 'Hana Wahida Adli'),
('971212107881', 'Aqsa', 'A2', 'Abdul Majid'),
('981212034457', 'El-Hambra', 'A12', 'Ahmad Taha'),
('981212034561', 'Maghribi', 'W11', 'Abu Hurairah'),
('990707123443', 'Maghribi', 'W10', 'Muhammad Fikri');

-- --------------------------------------------------------

--
-- Table structure for table `inventori`
--

CREATE TABLE `inventori` (
  `noSiri` varchar(50) NOT NULL,
  `kategoriBarang` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `qty` int(11) NOT NULL,
  `inventori` date NOT NULL,
  `pembekal` varchar(100) NOT NULL,
  `seliaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventori`
--

INSERT INTO `inventori` (`noSiri`, `kategoriBarang`, `nama`, `qty`, `inventori`, `pembekal`, `seliaan`) VALUES
('A201', 'alatan multimedia', 'laptop', 3, '2018-12-12', 'qad collection', '2018-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `au_date` date NOT NULL,
  `au_location` varchar(50) NOT NULL,
  `au_tajuk` varchar(50) NOT NULL,
  `au_tuanrumah` varchar(50) NOT NULL,
  `usrah_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`au_date`, `au_location`, `au_tajuk`, `au_tuanrumah`, `usrah_id`) VALUES
('2018-11-01', 'Taman Muhammad Abduh', 'Kitab Hadis 40', 'Nur Syahirah ', 'U1'),
('2018-11-02', 'Taman Jaafar Hassan', 'Durus Thani', 'Muhammad Azam', 'U2'),
('2018-11-08', 'Taman Muhammad Abduh', 'Kitab Hadis 40', 'Nur Maisarah', 'U3'),
('2018-11-15', 'Taman Jaafar Hassan', 'Durus Thani', 'Nur Ain', 'U4'),
('2018-12-15', 'Sungai Kapar Indah', 'Kitab Hadis 40', 'Hasbullah Ibrahim', 'U5');

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
('N2', 'W2', 'Zaidi Mohammed', '700831023457', 'Lelaki', 'Jalan Kebun'),
('N3', 'W3', 'Adli Ibrahim', '741017102341', 'Lelaki', 'Kampung Tupai');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `datebirth` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` int(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `question1` varchar(1) NOT NULL,
  `question2` varchar(1) NOT NULL,
  `question3` varchar(1) NOT NULL,
  `question4` varchar(1) NOT NULL,
  `question5` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `name`, `gender`, `datebirth`, `street`, `city`, `postcode`, `state`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
('970324115152', 'Atikah Ali', 'Female', '1997-03-24', 'PT 4047', 'Arau', 2600, 'Perlis', '3', '2', '3', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `noAhli` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telefon` int(11) NOT NULL,
  `sewaan` text NOT NULL,
  `nama_barang` text NOT NULL,
  `tarikh` date NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`noAhli`, `nama`, `alamat`, `telefon`, `sewaan`, `nama_barang`, `tarikh`, `qty`) VALUES
('B101', 'nur ainna adilla', 'taman mergong jaya', 124345689, 'alatan sukan', 'bola', '2018-12-24', 1),
('B301', 'ahmad bin zaki', 'taman ria', 123457886, 'pa system', 'mikrofon', '2018-12-11', 3);

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
('U1', 'Haura', '08:00:00', 'Thursday', 'N1', 'Kitab Hadis 40', 'PKPIM'),
('U2', 'Aqsa', '09:00:00', 'Friday', 'N2', 'Kitab Hadis 40', 'ABIM'),
('U3', 'Maghribi', '11:00:00', 'Thursday', 'N2', 'Kitab Hadis 40', 'WADAH'),
('U4', 'El-Hambra', '12:10:00', 'Tuesday', 'N3', 'Kitab Hadis 40', 'PKPIM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahli`
--
ALTER TABLE `ahli`
  ADD PRIMARY KEY (`ic_ahli`);

--
-- Indexes for table `inventori`
--
ALTER TABLE `inventori`
  ADD PRIMARY KEY (`noSiri`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`au_date`);

--
-- Indexes for table `naqib`
--
ALTER TABLE `naqib`
  ADD PRIMARY KEY (`naqib_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`noAhli`);

--
-- Indexes for table `usrah`
--
ALTER TABLE `usrah`
  ADD PRIMARY KEY (`usrah_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
