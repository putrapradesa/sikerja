-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 01:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikerja2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bon`
--

CREATE TABLE `bon` (
  `Id` int(11) UNSIGNED NOT NULL,
  `CreatedUtc` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `DeletedUtc` datetime NOT NULL,
  `NamaPemesan` varchar(255) NOT NULL,
  `TanggalPemesan` datetime NOT NULL,
  `IdBagian` int(10) NOT NULL,
  `Request` text NOT NULL,
  `BagianPenerima` varchar(255) NOT NULL,
  `PenerimaTugas` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Tipe` varchar(255) NOT NULL,
  `NamaBagian` varchar(100) DEFAULT NULL,
  `Keterangan` text DEFAULT NULL,
  `TanggalSelesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bon`
--

INSERT INTO `bon` (`Id`, `CreatedUtc`, `CreatedBy`, `IsDeleted`, `DeletedUtc`, `NamaPemesan`, `TanggalPemesan`, `IdBagian`, `Request`, `BagianPenerima`, `PenerimaTugas`, `Status`, `Tipe`, `NamaBagian`, `Keterangan`, `TanggalSelesai`) VALUES
(1, '2022-06-21 10:27:26', 'admin', 0, '2022-06-21 05:26:39', 'admin', '2022-06-21 05:26:39', 1, 'coba bon', 'it', 'Putra', 'selesai', 'perbaikan', 'Kantor', NULL, NULL),
(2, '2022-06-24 09:04:27', 'user', 0, '0000-00-00 00:00:00', 'user', '2022-06-13 00:00:00', 0, 'Coba User', '', 'Putra', 'selesai', '', NULL, 'coba', NULL),
(3, '2022-06-24 09:16:08', 'user', 0, '0000-00-00 00:00:00', 'user', '2022-06-23 00:00:00', 0, 'user23', '', 'Adi', 'gagal', '', NULL, 'ggal23', NULL),
(4, '2022-06-24 09:19:19', 'user', 0, '0000-00-00 00:00:00', 'user', '2022-06-13 00:00:00', 0, 'BBB', 'IT', 'Putra', 'gagal', '', 'userugly', 'Gagal Harus Diperbaharui', NULL),
(5, '2022-06-25 09:24:21', 'user', 0, '0000-00-00 00:00:00', 'user', '2022-06-30 00:00:00', 0, 'Coba Buat', 'IT', 'Putra', 'selesai', '', 'userugly', 'Selesai dikerjakan', NULL),
(6, '2022-06-27 08:25:30', 'user', 0, '0000-00-00 00:00:00', 'Alex', '0000-00-00 00:00:00', 0, 'Perbaikan Komputer', 'IT', 'Bayu', 'selesai', '', 'userugly', 'Berhasil Dikerjakan', NULL),
(7, '2022-06-29 08:07:53', 'gladiol1', 0, '0000-00-00 00:00:00', 'user12', '2022-06-28 00:00:00', 0, 'Perbaikan Server', 'IT', 'Adi', 'gagal', '', 'Gladiol', 'Server harus diremajakan', NULL),
(8, '2022-07-01 08:43:43', 'user', 0, '0000-00-00 00:00:00', 'user', '2022-07-02 00:00:00', 0, 'cobarequest1', 'IT', 'Putra', 'selesai', '', 'userugly', 'Coba Seelsai', NULL),
(9, '2022-07-01 08:55:52', 'gladiol1', 0, '0000-00-00 00:00:00', 'user', '2022-07-01 00:00:00', 0, 'pasang listrik', 'IT', '', 'tolak', '', 'Ruang Gladiol', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bon`
--
ALTER TABLE `bon`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bon`
--
ALTER TABLE `bon`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
