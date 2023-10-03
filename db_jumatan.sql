-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jumatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('superadmin','admin','cicurug','wikrama','cibedug','cisarua') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'superadmin', 'superadmin', 'superadmin'),
(3, 'admin', 'admin', 'admin'),
(9, 'guru', 'cicurug', 'cicurug'),
(10, 'guru', 'wikrama', 'wikrama');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mujahidin`
--

CREATE TABLE `tb_mujahidin` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(300) NOT NULL,
  `rayon` varchar(300) NOT NULL,
  `kehadiran` enum('hadir','izin','sakit','alpha') NOT NULL,
  `alasan_tidak_hadir` varchar(300) NOT NULL,
  `date` date DEFAULT NULL,
  `type` enum('cicurug_1','cicurug_2','cicurug_3','wikrama_1','wikrama_2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mujahidin`
--

INSERT INTO `tb_mujahidin` (`id`, `siswa_id`, `rayon`, `kehadiran`, `alasan_tidak_hadir`, `date`, `type`) VALUES
(3, 'bopeng', 'Cicurug 2', '', '', NULL, 'cicurug_2'),
(4, 'giblar', 'Cicurug 1', '', '', NULL, 'cicurug_1'),
(5, 'angger', 'Cicurug 3', '', '', NULL, 'cicurug_3'),
(6, 'gemoy', 'Wikrama 1', '', '', NULL, 'wikrama_1'),
(7, 'Hirzi', 'Wikrama 2', '', '', NULL, 'wikrama_2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mujahidin`
--
ALTER TABLE `tb_mujahidin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_mujahidin`
--
ALTER TABLE `tb_mujahidin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
