-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 07:44 AM
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Gejala'),
(4, 'Kerusakan');

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
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `image`, `password`, `role_id`, `date_created`) VALUES
(6, 'Alfonso Aryando S', 'alfonso', 'face-1.jpg', '$2y$10$RvVYgo42792Sni6uvIKSieQ79XnIC72pIfdGZWYRigpRON.tGjcRC', 1, 1573977778),
(7, 'Member', 'Member', 'default.jpg', '$2y$10$gam52naGqUaHYPkQ49WDn.NtUmAUqZ5jdoMwKGAkw8DW8daCdLmoW', 2, 1575266061);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` char(3) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `tingkat_kepercayaan` float NOT NULL,
  `jawaban_ya` char(3) NOT NULL,
  `jawaban_tidak` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`, `tingkat_kepercayaan`, `jawaban_ya`, `jawaban_tidak`) VALUES
('G01', 'Battery tidak bisa dicharge', 0.7, '', ''),
('G02', 'Lampu indikator adaptor laptop berkedip-kedip', 0.6, '', ''),
('G03', 'Tidak ada indikator masuk power', 0.8, '', ''),
('G04', 'Saat dinyalakan ada proses POST namun berhenti sesaat dan tidak masuk OS', 0.5, '', ''),
('G05', 'Tampil pesan di monitor \"Harddisk Failur/Harddisk Error\"', 0.6, '', ''),
('G06', 'Kecepatan CPU lambat/bad sector', 0.7, '', ''),
('G07', 'CD/DVD tidak terdeteksi', 0.8, '', ''),
('G08', 'CD/DVD tidak dapat membaca/menulis,dan hanya bisa membaca saja', 0.8, '', ''),
('G09', 'Laptop kadang sulit dihidupkan', 0.4, '', ''),
('G10', 'Setelah dihidupkan tidak muncul apapun dilayar monitot', 0.4, '', ''),
('G11', 'Mati total', 1, '', ''),
('G12', 'Indikator charger nyala,tapi setelah di charge lampu indikator pada charger mati', 0.9, '', ''),
('G13', 'Tidak ada suara beep setelah laptop dihidupkan', 0.3, '', ''),
('G14', 'Bunyi beep terus menerus', 0.8, '', ''),
('G15', 'Layar monitor blue screen', 0.7, '', ''),
('G16', 'Saat monitor menyala,muncul garis pada monitor', 0.5, '', ''),
('G17', 'Warna layar pada layar monitor bergantu-ganti', 0.9, '', ''),
('G18', 'Tampilan layar tidak stabil', 0.7, '', ''),
('G19', 'Speaker laptop tidak bersuara', 0.5, '', ''),
('G20', 'Port USB tidak mengenali perangkat yang terhubung', 0.2, '', ''),
('G21', 'Kursor bergerak-gerak tak beraturan', 0.3, '', ''),
('G22', 'Keyboard tidak berfungsi', 0.6, '', ''),
('G23', 'Kursor tidak bergerak', 0.3, '', ''),
('G24', 'Terdapat tanda silang pada icon battery atau \"Battery not detected\"', 0.3, '', ''),
('G25', 'Laptop mati saat charger dicabut,meski sebelumnya telah di charge', 0.8, '', ''),
('G26', 'Setelah hidup,layar monitor menyala,namun menjadi gelap/mati dalam waktu tertentu', 0.5, '', '');

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
  `kode_kerusakan` char(3) NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `solusi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kerusakan`
--

INSERT INTO `tbl_kerusakan` (`kode_kerusakan`, `nama_kerusakan`, `solusi`, `gambar`) VALUES
('K01', 'Kerusakan pertamax', 'Ganti', 'ram11.png'),
('K02', 'Kerusakan Kedua', 'Solusi kerusakan kedua', 'ram12.png');

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
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(8, 1, 3),
(9, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
