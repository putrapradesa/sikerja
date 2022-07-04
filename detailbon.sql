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
-- Table structure for table `detailbon`
--

CREATE TABLE `detailbon` (
  `Id` int(11) UNSIGNED NOT NULL,
  `CreatedUtc` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `DeletedUtc` datetime NOT NULL,
  `BonId` int(11) NOT NULL,
  `Alat&Bahan` varchar(255) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailbon`
--

INSERT INTO `detailbon` (`Id`, `CreatedUtc`, `CreatedBy`, `IsDeleted`, `DeletedUtc`, `BonId`, `Alat&Bahan`, `Jumlah`) VALUES
(1, '2022-06-22 19:34:22', 'admin', 0, '0000-00-00 00:00:00', 0, 'Ram', 0),
(2, '2022-06-22 19:34:22', 'admin', 0, '0000-00-00 00:00:00', 0, 'Mobo', 0),
(3, '2022-06-22 19:47:46', 'admin', 0, '0000-00-00 00:00:00', 1, 'mkjkh', 0),
(4, '2022-06-22 19:47:46', 'admin', 0, '0000-00-00 00:00:00', 1, 'tang', 0),
(5, '2022-06-25 08:31:15', 'admin', 0, '0000-00-00 00:00:00', 4, 'Ram', 1),
(6, '2022-06-25 08:31:15', 'admin', 0, '0000-00-00 00:00:00', 4, 'Mobo', 1),
(7, '2022-06-25 08:35:58', 'admin', 0, '0000-00-00 00:00:00', 4, 'Ram', 1),
(8, '2022-06-25 09:23:18', 'admin', 0, '0000-00-00 00:00:00', 2, 'Ram', 1),
(9, '2022-06-27 08:30:44', 'admin', 0, '0000-00-00 00:00:00', 5, 'Ram', 1),
(11, '2022-06-27 10:19:58', 'admin', 0, '0000-00-00 00:00:00', 6, 'Harddisk', 1),
(12, '2022-06-27 10:19:58', 'admin', 0, '0000-00-00 00:00:00', 6, 'Ram', 2),
(13, '2022-07-01 08:47:34', 'admin', 0, '0000-00-00 00:00:00', 8, 'Ram', 2),
(14, '2022-07-01 08:47:34', 'admin', 0, '0000-00-00 00:00:00', 8, 'Mobo', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailbon`
--
ALTER TABLE `detailbon`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailbon`
--
ALTER TABLE `detailbon`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
