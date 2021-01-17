-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:47 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kopma`
--

CREATE TABLE `data_kopma` (
  `id_barang` int(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kopma`
--

INSERT INTO `data_kopma` (`id_barang`, `nama_barang`, `harga_barang`) VALUES
(6, 'cappucino', 50000),
(8, 'topi', 5000),
(9, 'es teh', 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kopma`
--
ALTER TABLE `data_kopma`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
