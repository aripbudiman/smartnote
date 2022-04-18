-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 04:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyeksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `catat`
--

CREATE TABLE `catat` (
  `id_proyeksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(100) NOT NULL,
  `nama` int(50) NOT NULL,
  `droping` int(200) DEFAULT NULL,
  `pf_droping` int(50) DEFAULT NULL,
  `tabungan` int(200) DEFAULT NULL,
  `pf_tabungan` int(50) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catat`
--

INSERT INTO `catat` (`id_proyeksi`, `tanggal`, `hari`, `nama`, `droping`, `pf_droping`, `tabungan`, `pf_tabungan`, `creat_at`) VALUES
(32, '2022-04-18', 'Senin', 21, 20000000, 10, 1000000, 2, '2022-04-16 21:40:48'),
(33, '2022-04-18', 'Senin', 24, 10000000, 5, 2500000, 5, '2022-04-16 21:41:23'),
(34, '2022-04-18', 'Senin', 25, 30000000, 15, 3000000, 6, '2022-04-16 21:41:59'),
(35, '2022-04-18', 'Senin', 26, 14000000, 7, 500000, 1, '2022-04-16 21:42:29'),
(36, '2022-04-19', 'Selasa', 21, 40000000, 20, 3951000, 15, '2022-04-16 21:46:10'),
(37, '2022-04-20', 'Rabu', 26, 9500000, 3, 2250000, 5, '2022-04-16 21:46:50'),
(38, '2022-04-20', 'Rabu', 21, 0, 0, 600000, 1, '2022-04-16 21:47:24'),
(39, '2022-04-21', 'Kamis', 26, 58000000, 29, 0, 0, '2022-04-16 21:48:16'),
(40, '2022-04-21', 'Kamis', 21, 0, 0, 5925000, 15, '2022-04-16 21:48:45'),
(41, '2022-04-25', 'Senin', 24, 4000000, 2, 0, 0, '2022-04-16 21:49:33'),
(42, '2022-04-25', 'Senin', 25, 4000000, 2, 0, 0, '2022-04-16 21:49:55'),
(43, '2022-04-26', 'Selasa', 24, 64000000, 21, 650000, 1, '2022-04-16 21:51:04'),
(44, '2022-04-26', 'Selasa', 25, 50000000, 25, 5000000, 10, '2022-04-16 21:51:39'),
(45, '2022-04-26', 'Selasa', 21, 100000000, 5, 0, 0, '2022-04-16 21:52:29'),
(46, '2022-04-27', 'Rabu', 21, 40000000, 20, 5000000, 5, '2022-04-16 21:52:52'),
(47, '2022-04-27', 'Rabu', 24, 10000000, 5, 1000000, 1, '2022-04-16 21:53:14'),
(48, '2022-04-27', 'Rabu', 25, 60000000, 30, 2000000, 2, '2022-04-16 21:53:45'),
(49, '2022-04-27', 'Rabu', 26, 20000000, 10, 6000000, 2, '2022-04-16 21:54:09'),
(50, '2022-04-28', 'Kamis', 21, 24000000, 12, 5000000, 2, '2022-04-16 21:54:42'),
(51, '2022-04-28', 'Kamis', 24, 60000000, 30, 2000000, 1, '2022-04-16 21:55:04'),
(52, '2022-04-28', 'Kamis', 25, 30000000, 15, 2000000, 2, '2022-04-16 21:55:24'),
(53, '2022-04-28', 'Kamis', 26, 10000000, 2, 1000000, 1, '2022-04-16 21:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `card_warna` int(50) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nik`, `nama_petugas`, `img`, `card_warna`, `creat_at`) VALUES
(19, '518.2017.0306', 'Muhamad arip budiman', 'IMG20200927113824.jpg', 1, '2022-04-17 19:29:55'),
(20, '518.2017.0380', 'mega ranisa', 'arip12.jpg', 2, '2022-04-17 19:30:00'),
(21, '518.2021.0559', 'yogi saputra', 'cypher-valorant-4k-game-d1.jpg', 3, '2022-04-17 19:30:06'),
(24, '518.2022.0572', 'Deni Wardiman', '4k-wonder-woman-2020-cosplay-sw.jpg', 4, '2022-04-17 19:30:12'),
(25, '518.2022.0569', 'Sandy Martha', 'source.gif', 1, '2022-04-17 19:30:20'),
(26, '518.2019.0459', 'Rian Andriani Aziz', 'maxresdefault.jpg', 2, '2022-04-17 19:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id_warna` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id_warna`, `warna`) VALUES
(1, 'hijau'),
(2, 'kuning'),
(3, 'bulao'),
(4, 'hitam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catat`
--
ALTER TABLE `catat`
  ADD PRIMARY KEY (`id_proyeksi`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catat`
--
ALTER TABLE `catat`
  MODIFY `id_proyeksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
