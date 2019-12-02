-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 10:15 AM
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
-- Database: `es_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `image`, `password`, `date_created`) VALUES
(6, 'Admin', 'alfonso', 'default1.jpg', '$2y$10$RvVYgo42792Sni6uvIKSieQ79XnIC72pIfdGZWYRigpRON.tGjcRC', 1573977778);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `tingkat kepercayaan` float NOT NULL,
  `jawaban_ya` char(5) DEFAULT NULL,
  `jawaban_tidak` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`, `tingkat kepercayaan`, `jawaban_ya`, `jawaban_tidak`) VALUES
(1, 'G0001', 'Gejala Pertama', 0, NULL, NULL),
(2, 'G0002', 'Gejala Kedua', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_diagnosa`
--

CREATE TABLE `tbl_hasil_diagnosa` (
  `id_konsultasi` int(11) NOT NULL,
  `kode_kerusakan` char(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tingkat_kepercayaan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kerusakan`
--

CREATE TABLE `tbl_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `kode_kerusakan` varchar(5) NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `solusi` text NOT NULL,
  `faktor_kepastian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kerusakan`
--

INSERT INTO `tbl_kerusakan` (`id_kerusakan`, `kode_kerusakan`, `nama_kerusakan`, `gambar`, `solusi`, `faktor_kepastian`) VALUES
(4, 'K0002', 'Ram', 'ram6.png', '1. Lepas ram yang ada di slotnya\r\n2. Bersihkan dengan penghapus karet\r\n3. Pasang kembali seperti semula        ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `kode_gejala` int(11) NOT NULL,
  `kode_kerusakan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_diagnosa`
--

CREATE TABLE `tmp_diagnosa` (
  `id_pelanggan` int(11) NOT NULL,
  `id_kerusakan` char(5) NOT NULL,
  `id_gejala` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_kerusakan`
--

CREATE TABLE `tmp_kerusakan` (
  `id_pelanggan` int(11) NOT NULL,
  `kode_kerusakan` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
