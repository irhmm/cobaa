-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2023 at 03:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `id` int NOT NULL,
  `nama` varchar(70) NOT NULL,
  `desk` varchar(150) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `pict` longblob NOT NULL,
  `pict2` longblob NOT NULL,
  `pict3` longblob NOT NULL,
  `harga` int NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`id`, `nama`, `desk`, `spec`, `pict`, `pict2`, `pict3`, `harga`, `kategori`) VALUES
(12329, 'wdiskhndc', 'sifrad', 'kabdhv1', 0x2e2e2f67616d6261722f494d475f363739302e4a5047, 0x2e2e2f67616d6261722f494d475f363739332e4a5047, 0x2e2e2f67616d6261722f494d475f363830312e4a5047, 12000, 'Genteng'),
(12330, 'kontol', 'kontol bapak kau pecah', 'hahahaha hayuuukkk', 0x2e2e2f67616d6261722f494d475f363739372e4a5047, 0x2e2e2f67616d6261722f494d475f363739312e4a5047, 0x2e2e2f67616d6261722f494d475f363739362e4a5047, 15000, '4');

-- --------------------------------------------------------

--
-- Table structure for table `datalogin`
--

CREATE TABLE `datalogin` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datalogin`
--

INSERT INTO `datalogin` (`user`, `pass`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12331;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
