-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:56 PM
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
  `Label` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_input`
--

INSERT INTO `tb_input` (`ID`, `DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Label`) VALUES
(10, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(11, 'Jailolo, Maluku Utara', 1, '34', '6', '1.41', '126.81', '2'),
(12, 'Lombok, Nusa Tenggara Barat', 2, '15', '6.9', '-8.34', '116.46', '2'),
(13, 'Nusa Tenggara Barat', 2, '9', '6.5', '-8.36', '116.58', '2'),
(14, 'Sumba Timur, Nusa Tenggara Tim', 3, '23', '6', '-10.42', '120.2', '2'),
(15, 'Situbondo, Jawa Timur', 3, '6', '6.1', '-7.39', '114.43', '2'),
(16, 'Bengkulu', 2, '28', '6.9', '-4.022', '101.776', '2'),
(17, 'Gorontalo', 3, '108', '6', '0.46', '121.99', '2'),
(18, 'P.Buru, Maluku', 1, '16', '5.7', '-3.42', '126.03', '2'),
(19, 'Bengkulu Utara, Bengkulu', 2, '35', '6.4', '-3.78', '101.61', '2'),
(20, 'Kep. Mentawai', 2, '10', '6.2', '-1.3', '99.66', '2'),
(21, 'Ambon, Maluku', 2, '39', '6.1', '-3.69', '127.83', '2'),
(22, 'Morotai, Maluku Utara', 1, '39', '5.7', '2.51', '128.18', '2'),
(23, 'Ternate, Maluku Utara', 3, '35', '7.1', '1.271', '126.249', '1'),
(24, 'Kep. Mentawai, Samudra Hindia', 1, '10', '7.8', '-4.92', '94.39', '1'),
(25, 'Bengkulu', 2, '61', '5.8', '-4.37', '102.07', '2'),
(26, 'Pesisir Selatan, Sumatra Barat', 2, '72', '6.5', '-2.29', '100.46', '2'),
(27, 'Ternate, Maluku Utara', 2, '58', '6.4', '1.37', '126.37', '2'),
(28, 'Dompu, NTB', 2, '18', '5.6', '-8.23', '117.86', '2'),
(29, 'Pantai Selatan, Jawa Timur', 3, '69', '6.2', '-9.32', '113.12', '2'),
(30, 'Pidie Jaya, Aceh', 3, '10', '6.4', '5.19', '96.36', '2'),
(31, 'Sorong, Papua Barat', 2, '10', '6.8', '-0.59', '131.27', '2'),
(32, 'Kebumen, Jawa Tengah', 2, '48', '6.5', '-8.48', '109.17', '2'),
(33, 'Ambon, Maluku', 3, '10', '5.7', '-3.72', '127.48', '2'),
(34, 'Ternate, Maluku Utara', 3, '10', '7.3', '1.95', '126.49', '1'),
(35, 'Malang, Jawa Timur', 2, '9.44', '5.9', '-9.1', '113', '2'),
(36, 'Morotai, Maluku Utara', 3, '54.46', '6', '2.68', '128.54', '2'),
(37, 'NTT, Manggarai Barat', 3, '124.99', '5.9', '-8.76', '119.6', '2'),
(38, 'Simeuleu, NAD', 1, '12.93', '8.4', '2.34', '93.04', '1'),
(39, 'Ransiki, Papua Barat', 1, '32.7', '6.6', '-1.49', '134.43', '2'),
(40, 'Sukabumi, Jawa Barat', 2, '52.86', '5.7', '-7.91', '106.24', '2'),
(41, 'Simeuleu, NAD', 2, '24', '6.4', '2.51', '95.9', '2'),
(42, 'Kepulauan Aru, Papua Barat', 3, '22', '7', '-4.92', '134.07', '1'),
(43, 'Cilacap, Jawa Tengah', 3, '10', '7.1', '-10.01', '107.69', '1'),
(44, 'Tahuna, Sulawesi Utara', 1, '100', '6.6', '2.46', '126.51', '2'),
(45, 'Mukomuko, Bengkulu', 2, '28', '6', '-2.88', '100.97', '2'),
(46, 'Laut Banda', 3, '33', '6.5', '-4.029', '128.02', '2'),
(47, 'Mentawai', 2, '37', '6.3', '-3.85', '100.91', '2'),
(48, 'Sinabang, Aceh', 2, '34', '7.6', '2.33', '97.02', '1'),
(49, 'Meulaboh, Aceh', 2, '30', '7.2', '3.61', '95.84', '1'),
(50, 'Sukabumi, Jawa Barat', 3, '13', '6', '-8.22', '107.21', '2'),
(51, 'Aceh-Andaman, Aceh', 3, '21', '7.5', '7.68', '91.99', '1'),
(52, 'Mamuju, Sulawesi Barat', 1, '10', '5.3', '-1.44', '119.25', '2'),
(53, 'Serui, Papua', 1, '10', '7.1', '-2.17', '136.59', '1'),
(54, 'Tasikmalaya, Jawa Barat', 2, '34', '6.3', '-8.37', '107.98', '2'),
(55, 'Mentawai, Sumatra Barat', 2, '10', '7.2', '-3.61', '99.93', '1'),
(56, 'Laut Banda', 3, '670', '6.9', '-7.37', '123.5', '2'),
(57, 'Jawa Barat', 3, '30', '7.3', '-8.24', '107.32', '1'),
(58, 'Sumbawa', 3, '36', '6.7', '-8.34', '118.7', '2'),
(59, 'Papua', 2, '31', '6.2', '-0.68', '134.18', '2'),
(60, 'Nias', 2, '10', '6.2', '1.6', '97.42', '2'),
(61, 'Kep. Mentawai', 2, '22', '6.5', '-2.405', '99.931', '2'),
(62, 'Kep. Mentawai', 2, '58', '7.4', '-2.49', '100.06', '1'),
(63, 'Kep. Mentawai', 2, '18', '6.5', '-2.41', '99.79', '2'),
(64, 'Kep. Mentawai', 2, '27', '7', '-2.45', '99.49', '1'),
(65, 'Halmahera', 2, '10', '6.6', '1.88', '127.27', '2'),
(66, 'Minahasa', 2, '10', '7.7', '1.41', '122.18', '1'),
(67, 'Sulawesi Utara', 2, '63', '6.7', '1.18', '126.42', '2'),
(68, 'Maluku', 3, '20', '6.5', '-0.94', '127.15', '2'),
(69, 'Maluku', 2, '62', '6.5', '2.85', '127.46', '2'),
(70, 'Jawa Barat', 3, '284', '6.9', '-6.13', '107.68', '2'),
(71, 'Jawa Timur', 1, '10', '5.3', '-7.75', '114.38', '2'),
(72, 'Bengkulu', 2, '10', '7.9', '-4.59', '101.22', '1'),
(73, 'Kep. Mentawai', 2, '24', '7.7', '-2.88', '100.43', '1'),
(74, 'Kep. Mentawai', 2, '20', '6.3', '-1.69', '99.5', '2'),
(75, 'Kep. Mentawai', 2, '30', '7.1', '-2.22', '99.41', '1'),
(76, 'Painan, Sumatra Barat', 2, '55', '6.8', '-2.03', '100.01', '2'),
(77, 'Lais', 2, '10', '7', '-4.18', '100.7', '1'),
(78, 'NTB', 2, '50', '6.7', '-8.27', '118.35', '2'),
(79, 'Sumbawa', 2, '15', '6.8', '-8.11', '118.52', '2'),
(80, 'Laut Banda', 3, '33', '7.4', '-4.8', '127.8', '1'),
(81, 'Seram', 3, '33', '6.4', '-3.7', '127.4', '2'),
(82, 'Nias', 3, '16', '6.4', '0.1', '97.06', '2'),
(83, 'Jawa Tengah', 1, '33', '5.9', '-8.26', '110.31', '2'),
(84, 'Selatan Jawa', 2, '33', '7.7', '-9.46', '107.2', '1'),
(85, 'Laut Sulawesi', 2, '525', '7.1', '5.293', '123.337', '2'),
(86, 'Kep. Talaud', 3, '40', '6.5', '4.756', '126.421', '2'),
(87, 'Sulawesi', 3, '10', '6.5', '-5.562', '122.129', '2'),
(88, 'Simeuleu', 2, '36', '6.8', '2.908', '95.592', '2'),
(89, 'Laut Banda', 2, '202', '7.1', '-6.527', '129.933', '1'),
(90, 'Sumatra Barat', 2, '19', '6.7', '-1.644', '99.607', '2'),
(91, 'Kep. Mentawai', 3, '30', '6.5', '-1.714', '99.779', '2'),
(92, 'Nias', 2, '34', '6.7', '0.587', '98.459', '2'),
(93, 'Nias', 2, '30', '6.9', '1.989', '97.041', '2'),
(94, 'Nias', 2, '21', '6.7', '1.819', '97.082', '2'),
(95, 'Simeuleu', 2, '21', '6.5', '2.164', '96.786', '2'),
(96, 'NTB', 3, '33', '6.1', '-8.34', '115.87', '2'),
(97, 'Maluku', 1, '33', '6.8', '-3.01', '127.44', '2'),
(98, 'Sumatra Barat', 3, '43', '6', '-1.55', '100.51', '2'),
(99, 'Irian Jaya', 2, '13', '6.5', '-0.443', '133.091', '2'),
(100, 'Bali', 3, '80', '5.5', '-8.75', '115', '2'),
(101, 'NTT', 2, '10', '7.5', '-8.152', '124.868', '1'),
(102, 'Aceh-Andaman', 2, '30', '9', '3.295', '95.982', '1'),
(103, 'NTT', 2, '33', '5.3', '-7.96', '120.05', '2'),
(104, 'Sulawesi Utara', 2, '33', '6.4', '2.66', '128.27', '2'),
(105, 'Selat Sunda', 2, '11', '6.5', '-6.963', '104.181', '2'),
(106, 'Sul-teng', 2, '60', '5.9', '-1.06', '121.08', '2'),
(107, 'Irian Jaya', 1, '33', '7.6', '-1.73', '134.34', '1'),
(108, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(109, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(110, 'Padang', 3, '71', '7.6', '-0.84', '99.65', '2'),
(111, 'Minahasa', 2, '24', '7.8', '0.729', '119.931', '1'),
(112, 'Irian Jaya', 2, '33', '8.1', '-0.891', '136.952', '1'),
(113, 'Jawa Timur', 2, '18', '7.8', '-10.477', '112.835', '1'),
(114, 'Papua', 2, '10', '6.4', '-0.414', '1.223', '2'),
(115, 'Ternate, Maluku Utara', 3, '35', '7.1', '1.271', '126.249', '1'),
(116, 'Jawa Timur', 2, '18', '7.8', '-10.477', '112.835', '1'),
(117, 'Laut Banda', 2, '649', '6.5', '-7.018', '123.357', '2'),
(118, 'Laut Flores', 3, '587', '7.7', '-7.137', '122.589', '2'),
(119, 'Laut Banda', 2, '202', '7.1', '-6.527', '129.933', '1'),
(120, 'Laut Jawa', 3, '559', '6.5', '-5.606', '110.201', '2'),
(121, 'Bengkulu', 3, '33', '6.5', '-4.612', '101.905', '2'),
(122, 'Laut Banda', 2, '16', '6.6', '-4.11', '127.394', '2'),
(123, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(124, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(125, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(126, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(127, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(128, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(129, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(130, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(131, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(132, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(133, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(134, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(135, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(136, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(137, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(138, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(139, 'Lebak,Banten', 1, '10', '6.4', '-7.21', '105.91', '2'),
(140, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(141, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(142, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(143, 'Palembang', 2, '10', '10', '-2.9909', '104.756', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `ID` int(10) NOT NULL,
  `DGB` varchar(30) NOT NULL,
  `JS` int(1) NOT NULL,
  `K` varchar(6) NOT NULL,
  `M` varchar(3) NOT NULL,
  `Latitude` varchar(7) NOT NULL,
  `Longitude` varchar(7) NOT NULL,
  `Label` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`ID`, `DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Label`) VALUES
(1, 'Papua', 2, '17', '7.7', '-0.414', '132.885', '1'),
(2, 'Bengkulu', 2, '10', '7.9', '-4.590', '101.220', '1'),
(3, 'Kep. Mentawai', 1, '10', '7.8', '-4.920', '94.390', '1'),
(4, 'Simeuleu NAD', 1, '12.93', '8.4', '2.340', '93.040', '1'),
(5, 'Aceh Sinabang', 2, '34', '7.6', '2.330', '97.020', '1'),
(6, 'Aceh Meulaboh', 2, '30', '7.2', '3.610', '95.840', '1'),
(7, 'Mentawai Sumbar', 2, '10', '7.2', '-3.610', '99.930', '1'),
(8, 'Jawa Barat', 3, '30', '7.3', '-8.240', '107.320', '1'),
(9, 'Padang', 3, '71', '7.6', '-0.840', '99.650', '1'),
(10, 'Aceh Andaman', 2, '30', '9.0', '3.295', '95.982', '1'),
(11, 'Irian Jaya', 1, '33', '7.6', '-1.730', '134.340', '1'),
(12, 'Minahasa', 2, '24', '7.8', '0.729', '119.931', '1'),
(13, 'Irian Jaya', 2, '33', '8.1', '-0.891', '136.952', '1'),
(14, 'NTT', 2, '28', '7.5', '-8.480', '121.896', '1'),
(15, 'Jawa Timur', 2, '18', '7.8', '-10.477', '112.835', '1'),
(16, 'Laut Banda', 3, '670', '6.9', '-7.370', '123.500', '2'),
(17, 'Laut Banda', 2, '649', '6.5', '-7.018', '123.357', '2'),
(18, 'Laut Flores', 3, '587', '7.7', '-7.137', '122.589', '2'),
(19, 'Laut Jawa', 3, '559', '6.5', '-5.606', '110.201', '2'),
(20, 'Nias', 2, '10', '6.2', '1.600', '97.420', '2'),
(21, 'Simeuleu NAD', 2, '24', '6.4', '2.510', '95.900', '2'),
(22, 'Manggarai Barat NTT', 1, '124.99', '5.9', '-8.760', '119.600', '2'),
(23, 'Tahuna Sulawesi Utara', 1, '100', '6.6', '2.460', '126.510', '2'),
(24, 'Gorontalo', 3, '108', '6.0', '0.450', '122.070', '2'),
(25, 'Pesisir Selatan Sumatera Barat', 2, '72', '6.5', '-2.290', '100.460', '2'),
(26, 'Lebak Banten', 1, '10', '6.4', '-7.210', '105.910', '2'),
(27, 'Pantai Selatan Jawa Timur', 3, '69', '6.2', '-9.320', '113.120', '2'),
(28, 'Ransiki Papua Barat', 1, '32.70', '6.6', '-1.490', '134.430', '2'),
(29, 'Bengkulu', 3, '33', '6.5', '-4.612', '101.905', '2'),
(30, 'Kebumen', 2, '48', '6.5', '-8.480', '109.170', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(2, 'Admin Sistem', 'admin@admin.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(3, 'Arie Arifin', 'arie@gmail.com', 'ariearfn', 'a2c7fd93ac63593b01b777cac872c9e4', 'umum'),
(18, 'arie', 'ariearfn@gmail.com', 'arie', 'db76becac4ca1a766a3d61a35ac47149', ''),
(20, 'Ridho Maiska Pratama', 'ridho.maiska.pratama@stmkg.ac.id', 'ridho', '4b43b0aee35624cd95b910189b3dc231', ''),
(22, 'Ridho Maiska Pratama', 'ridho.maiska.pratama@stmkg.ac.id', 'ridhomaiska', 'c006cfc408a40fc9662b89c1eb962af0', ''),
(23, 'testes', 'testes@gmail.com', 'tes1', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
