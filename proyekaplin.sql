-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 10:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekaplin`
--
CREATE DATABASE IF NOT EXISTS `proyekaplin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyekaplin`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(100) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `batas_bawah` int(6) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`nama_barang`, `stok`, `satuan`, `batas_bawah`, `username`) VALUES
('Garam', 1000, 'gram', 2000, 'cielo'),
('Gula', 15000, 'gram', 1000, 'cielo'),
('Kopi', 150000, 'gram', 1000, 'cielo');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `username_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`username_karyawan`, `nama_karyawan`, `alamat`, `no_telp`, `tanggal_daftar`, `username`, `password`, `status`) VALUES
('cielo', 'Gracielo Justine S', 'Ngagel Wasana V No.17', '087751065053', '08-05-2020', 'cielo', '$2y$10$K62eYTdlHWyaEXgOg9ZUMeAx1NgF2Ha3ZMZy6uUAuoxGXYUCnt5re', '0'),
('cielo1', 'Gracielo Justine S', 'Ngagel Wasana V No.17', '0877510650', '08-05-2020', 'cielo', '$2y$10$sL1iO7AaeTFi3NtBbb3p0eJ/2JowQ95qGBZNzupVWGAp93EYq4Qd.', '0'),
('wira', 'Wira Rafi Aji', 'Ngagel Wasana V1 No.20', '0812345678', '08-05-2020', 'cielo', '$2y$10$Xw6bC7wpyN8NP2i4aaRZP.hpQhVrux9.R4k5f0uSBVCZNiXaRwh/i', '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_telp` varchar(10) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`nama_supplier`, `alamat`, `no_telp`, `username`, `keterangan`) VALUES
('Test1', '12334', '1234567890', 'cielo', 'asd'),
('Test12', '1111', '1111111111', 'cielo', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `packages` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `company`, `fullname`, `email`, `phone`, `packages`) VALUES
('cielo', '$2y$10$Kr7TG5jOGTUs1d3Kv6MnKeBZUSLY9c2HDJYibNjuwOorbPEMR8/6S', 'AbalAbal', 'Gracielo Justine S', 'cielo.justine@yahoo.com', '087751065053', 'silver'),
('cielo1', '$2y$10$nVPwk7vqzPGUSf9pMlugW.cbjfnfku/XccKbY.XvlV6bdmGMFsYGW', 'apaaja', 'Gracielo Justine S', 'cielo.justine1@yahoo.com', '0812345678910', 'silver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`nama_barang`,`username`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`username_karyawan`,`username`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`nama_supplier`,`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
