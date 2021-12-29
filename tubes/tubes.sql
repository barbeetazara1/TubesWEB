-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 04:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `id_warnet` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `tanggal`, `jam_awal`, `jam_akhir`, `id_warnet`, `id_paket`) VALUES
(1, '2021-11-19', '12:28:00', '13:26:00', 0, 0),
(2, '2021-11-11', '12:30:00', '12:29:00', 0, 0),
(3, '2021-11-04', '14:29:00', '12:31:00', 0, 0),
(4, '2021-11-09', '14:30:00', '15:30:00', 0, 0),
(5, '2021-11-19', '12:42:00', '13:42:00', 0, 0),
(6, '2021-12-02', '12:44:00', '12:47:00', 0, 0),
(7, '2021-12-09', '13:18:00', '13:20:00', 0, 0),
(8, '2021-11-02', '13:36:00', '14:33:00', 0, 0),
(9, '2021-11-04', '14:11:00', '14:17:00', 0, 0),
(10, '2021-11-11', '14:50:00', '14:55:00', 0, 0),
(11, '2021-12-14', '08:50:00', '09:50:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nama_wilayah`
--

CREATE TABLE `nama_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `wilayah` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_wilayah`
--

INSERT INTO `nama_wilayah` (`id_wilayah`, `wilayah`) VALUES
(1, 'Jakarta'),
(2, 'Tangerang'),
(3, 'Bekasi'),
(4, 'Bandung'),
(5, 'Surabaya'),
(6, 'Yogyakarta'),
(7, 'Manado');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`) VALUES
(1, 'Paket Begadang'),
(2, 'Paket Gamers'),
(3, 'Paket VVIP');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_metode` int(11) NOT NULL,
  `jenis_pembayaran` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_metode`, `jenis_pembayaran`) VALUES
(1, 'Bayar di Tempat'),
(2, 'Go-Pay'),
(3, 'OVO'),
(4, 'Dana'),
(5, 'M-Banking');

-- --------------------------------------------------------

--
-- Table structure for table `tubes1`
--

CREATE TABLE `tubes1` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `passw` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tubes1`
--

INSERT INTO `tubes1` (`id_pelanggan`, `nama`, `email`, `no_hp`, `passw`) VALUES
(34, 'Arka', 'arka@gmai.com', '04820474', '$2y$10$dr1fKDpC7SN7JJ9U6BKPCO64Ss51LE2.oJRdubRqVthWS7VW5wUve'),
(35, 'Arka', 'arka@gmail.com', '94274947', '$2y$10$ITmdLMpj0U7Qqgh5qwUHs.URtep.oodShgrdkc8Kmr9BazzVEiy92'),
(36, 'ary', 'ari@gmail.com', '8923572857', '$2y$10$Ykf8wFtK9roC.cbu23IHRu20DTvXFoxc6DmQVkkyUsd0wMcNb6p9.');

-- --------------------------------------------------------

--
-- Table structure for table `warnet`
--

CREATE TABLE `warnet` (
  `id_warnet` int(11) NOT NULL,
  `nama_warnet` varchar(258) NOT NULL,
  `email` varchar(258) NOT NULL,
  `id_wilayah` int(32) NOT NULL,
  `passw` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warnet`
--

INSERT INTO `warnet` (`id_warnet`, `nama_warnet`, `email`, `id_wilayah`, `passw`) VALUES
(6, 'jayabahari', 'jayabahari@gmail.com', 0, '$2y$10$PI0Gfk/cIkV.DD.N2n0YNeQRWWpB6okzT69wmRunk.QzYUq6c4NhC'),
(7, 'barokahwarnet', 'barokah@gmail.com', 0, '$2y$10$EzYE/D4k8VlSUDAz0Vind.B8sOGUwuYJSDvzajiZGEMIIJC1sN6fq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `nama_wilayah`
--
ALTER TABLE `nama_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `tubes1`
--
ALTER TABLE `tubes1`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `warnet`
--
ALTER TABLE `warnet`
  ADD PRIMARY KEY (`id_warnet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nama_wilayah`
--
ALTER TABLE `nama_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tubes1`
--
ALTER TABLE `tubes1`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `warnet`
--
ALTER TABLE `warnet`
  MODIFY `id_warnet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
