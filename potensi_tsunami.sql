-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 04:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `potensi_tsunami`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_input`
--

CREATE TABLE `tb_input` (
  `ID` int(11) NOT NULL,
  `DGB` varchar(30) NOT NULL,
  `JS` int(1) NOT NULL,
  `K` varchar(6) NOT NULL,
  `M` varchar(3) NOT NULL,
  `Latitude` varchar(7) NOT NULL,
  `Longitude` varchar(7) NOT NULL,
  `Efek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_input`
--

INSERT INTO `tb_input` (`ID`, `DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Efek`) VALUES
(1, 'Papua', 1, '17', '7.7', '0.212', '1.223', 'Berpotensi Tsunami');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `ID` int(2) DEFAULT NULL,
  `DGB` varchar(30) DEFAULT NULL,
  `JS` int(1) DEFAULT NULL,
  `K` varchar(6) DEFAULT NULL,
  `M` varchar(3) DEFAULT NULL,
  `Latitude` varchar(7) DEFAULT NULL,
  `Longitude` varchar(7) DEFAULT NULL,
  `Label` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`ID`, `DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Label`) VALUES
(1, 'Papua', 2, '17', '7.7', '-0.414', '132.885', 1),
(2, 'Bengkulu', 2, '10', '7.9', '-4.59', '101.22', 1),
(3, 'Kep. Mentawai', 1, '10', '7.8', '-4.92', '94.39', 1),
(4, 'Simeuleu NAD', 1, '12.93', '8.4', '2.34', '93.04', 1),
(5, 'Aceh Sinabang', 2, '34', '7.6', '2.33', '97.02', 1),
(6, 'Aceh Meulaboh', 2, '30', '7.2', '3.61', '95.84', 1),
(7, 'Mentawai Sumbar', 2, '10', '7.2', '-3.61', '99.93', 1),
(8, 'Jawa Barat', 3, '30', '7.3', '-8.24', '107.32', 1),
(9, 'Padang', 3, '71', '7.6', '-0.84', '99.65', 1),
(10, 'Aceh Andaman', 2, '30', '9', '3.295', '95.982', 1),
(11, 'Irian Jaya', 1, '33', '7.6', '-1.73', '134.34', 1),
(12, 'Minahasa', 2, '24', '7.8', '0.729', '119.931', 1),
(13, 'Irian Jaya', 2, '33', '8.1', '-0.891', '136.952', 1),
(14, 'NTT', 2, '28', '7.5', '-8.48', '121.896', 1),
(15, 'Jawa Timur', 2, '18', '7.8', '-10.477', '112.835', 1),
(16, 'Laut Banda', 3, '670', '6.9', '-7.37', '123.5', 2),
(17, 'Laut Banda', 2, '649', '6.5', '-7.018', '123.357', 2),
(18, 'Laut Flores', 3, '587', '7.7', '-7.137', '122.589', 2),
(19, 'Laut Jawa', 3, '559', '6.5', '-5.606', '110.201', 2),
(20, 'Nias', 2, '10', '6.2', '1.6', '97.42', 2),
(21, 'Simeuleu NAD', 2, '24', '6.4', '2.51', '95.9', 2),
(22, 'Manggarai Barat NTT', 1, '124.99', '5.9', '-8.76', '119.6', 2),
(23, 'Tahuna Sulawesi Utara', 1, '100', '6.6', '2.46', '126.51', 2),
(24, 'Gorontalo', 3, '108', '6', '0.45', '122.07', 2),
(25, 'Pesisir Selatan Sumatera Barat', 2, '72', '6.5', '-2.29', '100.46', 2),
(26, 'Lebak Banten', 1, '10', '6.4', '-7.21', '105.91', 2),
(27, 'Pantai Selatan Jawa Timur', 3, '69', '6.2', '-9.32', '113.12', 2),
(28, 'Ransiki Papua Barat', 1, '32.7', '6.6', '-1.49', '134.43', 2),
(29, 'Bengkulu', 3, '33', '6.5', '-4.612', '101.905', 2),
(30, 'Kebumen', 2, '48', '6.5', '-8.48', '109.17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Arie', 'ariearfn@gmail.com', 'ariearfn', 'aiypwzqp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
