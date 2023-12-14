-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 07:10 PM
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
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama_kamera` varchar(255) DEFAULT NULL,
  `model_kamera` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `nama_penyewa` varchar(255) DEFAULT NULL,
  `invoiceid` char(255) DEFAULT NULL,
  `nomor_penyewa` char(255) DEFAULT '081574999858',
  `tanggal` date DEFAULT NULL,
  `lokasi_penyewa` char(255) DEFAULT 'Deket stasiun'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama_kamera`, `model_kamera`, `waktu`, `harga`, `nama_penyewa`, `invoiceid`, `nomor_penyewa`, `tanggal`, `lokasi_penyewa`) VALUES
(1, 'Canon 3000d', 'Canon', '12JAM', '40.000', 'Muhamad Dafa Prasetya', 'MuCC157812J', '081574999858', NULL, 'Deket stasiun'),
(2, 'Canon 3000d', 'Canon', '12JAM', '40.000', 'Muhamad Dafa Prasetya', 'MUCC149812J', '081574999858', NULL, 'Deket stasiun'),
(3, 'Canon 3000d', 'Canon', '12JAM', '40.000', 'Muhamad Dafa Prasetya', 'MUC140812J', '081574999858', NULL, 'Deket stasiun'),
(4, 'Canon 3000d', 'Canon', '12JAM', '40.000', 'Muhamad Dafa Prasetya', 'MUON197012J', '085882010378', NULL, 'Deket stasiun'),
(5, 'Canon 3000d', 'Canon', '12JAM', '40.000', 'Muhamad Dafa Prasetya', 'MUANO165812J', '0858820103787', '2023-12-14', 'Deket stasiun'),
(6, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUAON141324J', '0877271662711', '2023-12-14', 'Deket stasiun'),
(7, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUONO105624J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(8, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUANNO163724J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(9, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUONO175624J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(10, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUON162024J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(11, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUNOO109224J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(12, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUAO162524J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(13, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Yunus', 'YUONON131424J', '09812812381238', '2023-12-14', 'Deket stasiun'),
(14, 'Canon 3000d', 'Canon', '24JAM', '40.000', 'Muhamad Dafa Prasetya', 'MUANNO164324J', '12412412412', '2023-12-14', 'Deket stasiun');

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'tidak disewakan',
  `model` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT 'uploads/default.jpg',
  `harga1` varchar(255) DEFAULT '40.000',
  `harga2` varchar(255) DEFAULT '80.000',
  `waktu2` varchar(255) DEFAULT '24JAM',
  `waktu1` varchar(255) DEFAULT '12JAM',
  `waktusewa` varchar(255) DEFAULT '-',
  `hargasewa` varchar(255) DEFAULT '-',
  `namapenyewa` varchar(255) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id`, `nama`, `keterangan`, `status`, `model`, `gambar`, `harga1`, `harga2`, `waktu2`, `waktu1`, `waktusewa`, `hargasewa`, `namapenyewa`) VALUES
(15, 'Canon 3000d', 'Camera yang cocok untuk kita semua', 'tidak disewakan', 'Canon', 'uploads/Canon_3000d1.png', '40.000', '80.000', '24JAM', '12JAM', '-', '-', '-'),
(16, 'Canon 600d', 'Bla bla bla', 'tidak disewakan', 'Canon', 'uploads/Canon_600d2.png', '40.000', '80.000', '24JAM', '12JAM', '-', '-', '-'),
(17, 'Canon EOS 1100d', 'gatau', 'tidak disewakan', 'Canon', 'uploads/Canon_EOS_1100d97.jpg', '80.000', '40.000', '12 Jam', '24 Jam', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `email`) VALUES
(1, 'dafaprstya150@gmail.com', '$2y$10$UP/mQ1mUgphprW9P275MbuoEnYAr0j9M8iZIR6BIcCwPXCNfzLX3.', 'user', 'dafaprstya'),
(2, 'intan', '$2y$10$RjSfhubjVifAfrTHUghDr.hPbCRTuigTVLn/qWhhfV.P6PZE/u0NS', 'user', 'dafaprstya'),
(3, 'dafaprstya250@gmail.com', '$2y$10$TMtDOo7KWI0zJ6v.IJrtI.uKDP9p52HOqWBeGpl6K2Yq/CnXNAT0W', 'user', 'dafaprstya'),
(4, 'dafaprstya150', '$2y$10$opSaHa5CTf4QOXDZupxSY.vhfapVnixShkwGO2gBytPrp2bUNm3eK', 'admin', 'dafaprstya150@gmail.com'),
(5, 'tatan', '$2y$10$TROrKSbT0g87xgv0t2XmVOqvA70J9vcRWBJ4MOC6kq3W4o4135lcC', 'user', 'intantatan0104@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
