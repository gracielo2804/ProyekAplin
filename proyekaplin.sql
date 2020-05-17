-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 03:06 PM
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
  `username` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`nama_barang`, `stok`, `satuan`, `batas_bawah`, `username`, `harga`, `gambar`) VALUES
('Kopi', 5500, 'gram', 5000, 'cielo', 100, 'kopi.jpg'),
('Tepung', 100000, 'gram', 10000, 'cielo', 150, 'tepung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `d_nota`
--

DROP TABLE IF EXISTS `d_nota`;
CREATE TABLE `d_nota` (
  `id_nota` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_nota`
--

INSERT INTO `d_nota` (`id_nota`, `nama_barang`, `jumlah`, `total`, `username`) VALUES
('TRX150520201', 'Kopi', '35', '7000', 'cielo'),
('TRX150520201', 'Garam', '20', '2000', 'cielo'),
('TRX150520202', 'Garam', '20', '2000', 'cielo'),
('TRX150520202', 'Kopi', '11', '2200', 'cielo');

-- --------------------------------------------------------

--
-- Table structure for table `h_nota`
--

DROP TABLE IF EXISTS `h_nota`;
CREATE TABLE `h_nota` (
  `id_nota` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `totalbayar` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_nota`
--

INSERT INTO `h_nota` (`id_nota`, `tanggal`, `totalbayar`, `username`) VALUES
('TRX150520201', '15-05-2020', '9000', 'cielo'),
('TRX150520202', '15-05-2020', '4200', 'cielo');

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
('cielo', 'Gracielo Justine S', 'Ngagel Wasana V No.17', '087751065053', '08-05-2020', 'cielo', '$2y$10$K62eYTdlHWyaEXgOg9ZUMeAx1NgF2Ha3ZMZy6uUAuoxGXYUCnt5re', '1'),
('cielo1', 'Gracielo Justine S', 'Ngagel Wasana V No.17', '0877510650', '08-05-2020', 'cielo', '$2y$10$sL1iO7AaeTFi3NtBbb3p0eJ/2JowQ95qGBZNzupVWGAp93EYq4Qd.', '0'),
('wira', 'Wira Rafi Aji', 'Ngagel Wasana V1 No.20', '0812345678', '08-05-2020', 'cielo', '$2y$10$Xw6bC7wpyN8NP2i4aaRZP.hpQhVrux9.R4k5f0uSBVCZNiXaRwh/i', '1'),
('wira', 'Wira Rafi Aji', 'Ngagel Wasana V No.17', '081234567890', '15-05-2020', 'cielo123', '$2y$10$7ffnJsSEY7igHkFhJqeDVO3s3phuzoXZ3yBWfSd/.i.V4hBo3fqgu', '1');

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
('cielo123', '$2y$10$kdb3399oiTXZoeSuEfnX0u/s0gulZafjs8NMpLyeAEG87ieYe2VyG', 'Test', 'Gracielo Justine S', 'cielo.justine2804@gmail.com', '087751065053', 'silver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`nama_barang`,`username`);

--
-- Indexes for table `h_nota`
--
ALTER TABLE `h_nota`
  ADD PRIMARY KEY (`id_nota`,`username`);

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
