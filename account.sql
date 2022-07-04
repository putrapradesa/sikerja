-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 01:57 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(5) UNSIGNED NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `CreatedUtc` datetime DEFAULT current_timestamp(),
  `IsDelete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `Nama`, `Username`, `Password`, `Role`, `CreatedUtc`, `IsDelete`) VALUES
(1, 'admintampan', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2022-06-23 09:03:13', 0),
(2, 'userugly', 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User', '2022-06-23 09:54:15', 0),
(3, 'user12', 'user1', '12dea96fec20593566ab75692c9949596833adc9', 'User', '2022-06-23 09:54:54', 1),
(4, 'user2', 'user2', '12dea96fec20593566ab75692c9949596833adc9', 'User', '2022-06-23 09:55:44', 1),
(5, 'user3', 'user3', '12dea96fec20593566ab75692c9949596833adc9', 'User', '2022-06-23 09:57:59', 1),
(6, 'user132', 'user132', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'User', '2022-06-27 08:37:48', 1),
(7, 'Ruang Gladiol', 'gladiol1', '18f6f107b908c60b25ae14791ef9fccf164aa97b', 'User', '2022-06-29 07:53:40', 0),
(8, 'user32', 'user32', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'User', '2022-07-01 08:20:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
