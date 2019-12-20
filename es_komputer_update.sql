-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 11:37 PM
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
(4, 'Kerusakan'),
(5, 'Pengetahuan');

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
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` char(3) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(1, 'G01', 'Laptop tidak menampilkan gambar pada layar.'),
(2, 'G02', 'Mesin tidak hidup'),
(3, 'G03', 'Indikator lampu yang terhubung pada charger laptop mati'),
(4, 'G04', 'Laptop mati ketika dicolokkan charger'),
(5, 'G05', 'Mesin masih hidup'),
(6, 'G06', 'Jika dihubungkan ke lcd external melalui vga card masih bisa menampilkan gambar'),
(7, 'G07', 'Cahaya pada layar laptop redup gelap,tetapi masih menampilkan gambar'),
(8, 'G08', 'Layar kadang hidup-mati dalam menampilkan gambar'),
(9, 'G09', 'Terdapat garis-garis pada LCD laptop'),
(10, 'G10', 'Terdapat dot pixel pada laptop'),
(11, 'G11', 'Terdapat goresan/tidak dapat menampilkan sebagian gambar dari dalam LCD'),
(12, 'G12', 'Ada bagian/semua tombol keyboard yang tidak berfungsi'),
(13, 'G13', 'Ketika dinyalakan terdapat bunyi beep yang panjang dan terus menerus pada laptop'),
(14, 'G14', 'Touchpad tidak berfungsi'),
(15, 'G15', 'Ketika menyala,kursor menekan-nekan menu sendiri'),
(16, 'G16', 'Tidak bisa masuk OS'),
(17, 'G17', 'Menampilkan pesan error pada harddisk pada saat menjalankan OS'),
(18, 'G18', 'Bisa masuk windows,namun lambat saat menjalankannya'),
(19, 'G19', 'Sudah melakukan install ulang,namun gagal'),
(20, 'G20', 'Pernah melakukan proses instalasi OS,namun gagal ketika proses instalasi berlangsung'),
(21, 'G21', 'OS berjalan lambat'),
(22, 'G22', 'Terdapat pesan error yang selalu muncul pada OS'),
(23, 'G23', 'Charger tidak mau mengisi daya ke laptop'),
(24, 'G24', 'Indikator lampu pada charger tidak hidup');

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
  `kode_kerusakan` char(3) NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `solusi` text NOT NULL,
  `probabilitas` float NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kerusakan`
--

INSERT INTO `tbl_kerusakan` (`id_kerusakan`, `kode_kerusakan`, `nama_kerusakan`, `solusi`, `probabilitas`, `gambar`) VALUES
(1, 'K01', 'Rusak pada IC Power', 'Solusi 1          ', 0.8, 'IC_Power1.jpg'),
(2, 'K02', 'Rusak pada IC Vga', 'Solusi 2          ', 0.7, 'IC_Vga1.jpg'),
(3, 'K03', 'Rusak pada Inverter/gangguan pada fleksibel kabel', 'solusi 3          ', 0.4, 'screen_inverter3.jpg'),
(4, 'K04', 'Rusak pada LCD', 'Solusi 4          ', 0.4, 'lcd3.jpg'),
(5, 'K05', 'Rusak pada Keyboard', 'Solusi 5          ', 0.6, 'keyboard2.jpg'),
(6, 'K06', 'Rusak pada touchpad', 'Solusi 6          ', 0.3, 'touchpad1.jpg'),
(7, 'K07', 'Kerusakan pada Harddisk', 'Solusi 7          ', 0.8, 'hdd2.jpg'),
(8, 'K08', 'Kerusakan pada Operating System &#40;OS&#41;', 'Solusi 8          ', 0.9, 'OS1.png'),
(9, 'K09', 'Kerusakan pada Charger', 'solusi 9          ', 0.3, 'adapter2.jpg');

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
  `id` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`id`, `id_kerusakan`, `id_gejala`, `probabilitas`) VALUES
(13, 1, 1, 1),
(14, 1, 2, 0.8),
(15, 1, 3, 0.5),
(16, 2, 1, 0.8),
(17, 2, 5, 0.7),
(18, 2, 6, 1),
(19, 1, 4, 0.9),
(20, 1, 5, 0),
(21, 1, 6, 0),
(22, 1, 7, 0),
(23, 1, 8, 0),
(25, 1, 9, 0),
(26, 1, 10, 0),
(27, 1, 11, 0),
(28, 1, 12, 0),
(29, 1, 13, 0),
(30, 1, 14, 0),
(31, 1, 15, 0),
(32, 1, 16, 0),
(33, 1, 17, 0),
(34, 1, 18, 0),
(35, 1, 19, 0),
(36, 1, 20, 0),
(37, 1, 21, 0),
(38, 1, 22, 0),
(39, 1, 23, 0),
(42, 1, 24, 0),
(43, 2, 2, 0),
(44, 2, 3, 0),
(45, 2, 4, 0),
(46, 2, 7, 0),
(47, 2, 8, 0),
(48, 2, 9, 0),
(49, 2, 10, 0),
(50, 2, 11, 0),
(51, 2, 12, 0),
(52, 2, 13, 0),
(53, 2, 14, 0),
(54, 2, 15, 0),
(55, 2, 16, 0),
(56, 2, 17, 0),
(57, 2, 18, 0),
(58, 2, 19, 0),
(59, 2, 20, 0),
(60, 2, 21, 0),
(62, 2, 22, 0),
(63, 2, 23, 0),
(64, 2, 24, 0),
(65, 3, 1, 0),
(66, 3, 2, 0),
(67, 3, 3, 0),
(68, 3, 4, 0),
(69, 3, 5, 0),
(70, 3, 6, 0),
(71, 3, 7, 0.9),
(72, 3, 8, 0.9),
(73, 3, 9, 0),
(74, 3, 10, 0),
(75, 3, 11, 0),
(77, 3, 12, 0),
(78, 3, 13, 0),
(79, 3, 14, 0),
(80, 3, 15, 0),
(81, 3, 16, 0),
(82, 3, 17, 0),
(83, 3, 18, 0),
(84, 3, 19, 0),
(85, 3, 20, 0),
(86, 3, 21, 0),
(87, 3, 22, 0),
(88, 3, 23, 0),
(89, 3, 24, 0),
(90, 4, 1, 0.7),
(91, 4, 2, 0),
(92, 4, 3, 0),
(93, 4, 4, 0),
(94, 4, 5, 0),
(95, 4, 6, 0),
(96, 4, 7, 0),
(97, 4, 8, 0),
(98, 4, 9, 0.6),
(99, 4, 10, 0.7),
(100, 4, 11, 0),
(101, 4, 12, 0),
(102, 4, 13, 0),
(103, 4, 14, 0),
(104, 4, 15, 0),
(105, 4, 16, 0),
(106, 4, 17, 0),
(107, 4, 18, 0),
(108, 4, 19, 0),
(109, 4, 20, 0),
(110, 4, 21, 0),
(111, 4, 22, 0),
(112, 4, 23, 0),
(113, 4, 24, 0),
(114, 5, 1, 0),
(115, 5, 2, 0),
(116, 5, 3, 0),
(117, 5, 4, 0),
(118, 5, 5, 0),
(119, 5, 6, 0),
(120, 5, 7, 0),
(121, 5, 8, 0),
(122, 5, 9, 0),
(123, 5, 10, 0),
(124, 5, 11, 0),
(125, 5, 12, 1),
(126, 5, 13, 0.8),
(127, 5, 14, 0),
(128, 5, 15, 0),
(129, 5, 16, 0),
(130, 5, 17, 0),
(131, 5, 18, 0),
(132, 5, 19, 0),
(133, 5, 20, 0),
(134, 5, 21, 0),
(135, 5, 22, 0),
(136, 5, 23, 0),
(137, 5, 24, 0),
(138, 6, 1, 0),
(139, 6, 2, 0),
(140, 6, 3, 0),
(141, 6, 4, 0),
(142, 6, 5, 0),
(143, 6, 6, 0),
(144, 6, 7, 0),
(145, 6, 8, 0),
(146, 6, 9, 0),
(147, 6, 10, 0),
(148, 6, 11, 0),
(149, 6, 12, 0),
(150, 6, 13, 0),
(151, 6, 14, 1),
(152, 6, 15, 0.8),
(153, 6, 16, 0),
(154, 6, 17, 0),
(155, 6, 18, 0),
(156, 6, 19, 0),
(157, 6, 20, 0),
(158, 6, 21, 0),
(159, 6, 22, 0),
(160, 6, 23, 0),
(161, 6, 24, 0),
(162, 7, 1, 0),
(163, 7, 2, 0),
(164, 7, 3, 0),
(165, 7, 4, 0),
(166, 7, 5, 0),
(167, 7, 6, 0),
(168, 7, 7, 0),
(169, 7, 8, 0),
(170, 7, 9, 0),
(171, 7, 10, 0),
(172, 7, 11, 0),
(173, 7, 12, 0),
(174, 7, 13, 0),
(175, 7, 14, 0),
(176, 7, 15, 0),
(177, 7, 16, 0.5),
(178, 7, 17, 0.8),
(179, 7, 18, 0.5),
(180, 7, 19, 1),
(181, 7, 20, 1),
(182, 7, 21, 0),
(183, 7, 22, 0),
(184, 7, 23, 0),
(185, 7, 24, 0),
(186, 8, 1, 0),
(187, 8, 2, 0),
(188, 8, 3, 0),
(189, 8, 4, 0),
(190, 8, 5, 0),
(191, 8, 6, 0),
(192, 8, 7, 0),
(193, 8, 8, 0),
(194, 8, 9, 0),
(195, 8, 10, 0),
(196, 8, 11, 0),
(197, 8, 12, 0),
(198, 8, 13, 0),
(199, 8, 14, 0),
(200, 8, 15, 0),
(201, 8, 16, 1),
(202, 8, 17, 0),
(203, 8, 18, 0),
(204, 8, 19, 0),
(205, 8, 20, 0),
(206, 8, 21, 0.8),
(207, 8, 22, 0.6),
(208, 8, 23, 0),
(209, 8, 24, 0),
(210, 9, 1, 0),
(211, 9, 2, 0),
(212, 9, 3, 0.8),
(213, 9, 4, 0.6),
(214, 9, 5, 0),
(215, 9, 6, 0),
(216, 9, 7, 0),
(217, 9, 8, 0),
(218, 9, 9, 0),
(219, 9, 10, 0),
(220, 9, 11, 0),
(221, 9, 12, 0),
(222, 9, 13, 0),
(223, 9, 14, 0),
(224, 9, 15, 0),
(225, 9, 16, 0),
(226, 9, 17, 0),
(227, 9, 18, 0),
(228, 9, 19, 0),
(229, 9, 20, 0),
(230, 9, 21, 0),
(231, 9, 22, 0),
(232, 9, 23, 1),
(233, 9, 24, 1);

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
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_admin` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
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
(9, 1, 4),
(10, 1, 5);

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
-- Indexes for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`id_gejala`),
  ADD KEY `kode_kerusakan` (`id_kerusakan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
