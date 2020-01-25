-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 05:04 PM
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
(5, 'Pengetahuan'),
(6, 'Laporan');

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
(13, 'G13', 'Ketika dinyalakan terdapat bunyi beep yang panjang dan terus menerus pada laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_diagnosa`
--

CREATE TABLE `tbl_hasil_diagnosa` (
  `id_hasil` int(11) NOT NULL,
  `hasil_probabilitas` float NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `solusi` text NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil_diagnosa`
--

INSERT INTO `tbl_hasil_diagnosa` (`id_hasil`, `hasil_probabilitas`, `nama_kerusakan`, `nama_user`, `solusi`, `waktu`) VALUES
(5, 100, 'Rusak pada IC Power', 'Member', 'Ganti dengan IC yang baruProses penggantian ini membutuhkan keahlian khusus,tidak disarankan untuk mengganti/memperbaikinya sendiri   ', 1576814169),
(6, 80, 'Rusak pada IC Power', 'Herdhani Eko', 'Ganti dengan IC yang baruProses penggantian ini membutuhkan keahlian khusus,tidak disarankan untuk mengganti/memperbaikinya sendiri   ', 1576814575),
(7, 66, 'Rusak pada Keyboard', 'Herdhani Eko', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 1577676233),
(8, 66, 'Rusak pada Keyboard', 'Member', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 1578761537),
(9, 66, 'Rusak pada Keyboard', 'Member', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 1579072194),
(10, 66, 'Rusak pada Keyboard', 'Member', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 1579357189),
(11, 66, 'Rusak pada Keyboard', 'Member', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 1579361910),
(12, 100, 'Rusak pada IC Vga', 'Member', 'Bongkar chasing komputer atau keluarkan motherboard dari chasing atau laptop Anda. Hati-hati ketika membongkar motherboard jangan sampai perangkatnya rusak;\r\nUntuk laptop lepaskan headsink serta kipas (fun) pendingin yang melindungi chipset VGA;\r\nJangan sampai salah, karena chipset VGA ini mirip dengan processor. Perhatikan lagi contoh gambar chipset VGA diatas;\r\nPanaskan chipset VGA menggunakan alat-alat yang sudah dipersiapkan tadi yaitu hot air gun, hair drayer, atau lilin. Untuk durasi memanaskannya kira-kira 5 menit. Kemudian pasang kembali dan coba apakah sekarang sudah ada perubahan pada layar monitor atau belum? Jika belum lakukan lagi kegiatan pemanasan hingga 10 menit durasinya. Gagal juga? Lakukan lagi hingga langkah pemanasan ini berhasil;\r\nUntuk pemanasan menggunakan hair drayer atur jaraknya kira-kira 5 cm, sedangkan jika menggunakan lilin kira-kira 10 cm. \r\nHati-hati pemanasan dengan lilin jangan sampai membakar perangkat pada motherboard.     ', 1579362117);

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
(1, 'K01', 'Rusak pada IC Power', 'Ganti dengan IC yang baruProses penggantian ini membutuhkan keahlian khusus,tidak disarankan untuk mengganti/memperbaikinya sendiri   ', 0.2, 'IC_Power2.jpg'),
(2, 'K02', 'Rusak pada IC Vga', 'Bongkar chasing komputer atau keluarkan motherboard dari chasing atau laptop Anda. Hati-hati ketika membongkar motherboard jangan sampai perangkatnya rusak;\r\nUntuk laptop lepaskan headsink serta kipas (fun) pendingin yang melindungi chipset VGA;\r\nJangan sampai salah, karena chipset VGA ini mirip dengan processor. Perhatikan lagi contoh gambar chipset VGA diatas;\r\nPanaskan chipset VGA menggunakan alat-alat yang sudah dipersiapkan tadi yaitu hot air gun, hair drayer, atau lilin. Untuk durasi memanaskannya kira-kira 5 menit. Kemudian pasang kembali dan coba apakah sekarang sudah ada perubahan pada layar monitor atau belum? Jika belum lakukan lagi kegiatan pemanasan hingga 10 menit durasinya. Gagal juga? Lakukan lagi hingga langkah pemanasan ini berhasil;\r\nUntuk pemanasan menggunakan hair drayer atur jaraknya kira-kira 5 cm, sedangkan jika menggunakan lilin kira-kira 10 cm. \r\nHati-hati pemanasan dengan lilin jangan sampai membakar perangkat pada motherboard.     ', 0.2, 'IC_Vga2.jpg'),
(3, 'K03', 'Rusak pada Inverter/gangguan pada fleksibel kabel', 'Ganti dengan inverter yang baru,jika masih bermasalah maka ganti layar monitor anda dengan yang baru.       ', 0.1, 'screen_inverter4.jpg'),
(4, 'K04', 'Rusak pada LCD', 'Cek konekektor atau socket yang berhubungan dengan monitor,jika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih LCD yang sejenis        ', 0.3, 'lcd6.jpg'),
(5, 'K05', 'Rusak pada Keyboard', 'Bersihkan keyboard dari kotoran/debu.\r\nJika masih bermasalah,disarankan untuk mengganti dengan yang baru,namun jangan lupa untuk memilih Keyboard yang sejenis', 0.2, 'keyboard5.jpg');

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
(1, 1, 1, 1),
(2, 1, 2, 0.5),
(3, 1, 3, 1),
(5, 1, 4, 0.5),
(6, 1, 5, 0),
(7, 1, 6, 0),
(8, 1, 7, 0),
(9, 1, 8, 0),
(10, 1, 9, 0),
(11, 1, 10, 0),
(12, 1, 11, 0),
(13, 1, 12, 0),
(14, 1, 13, 0),
(15, 2, 1, 0.5),
(16, 2, 2, 0),
(17, 2, 3, 0.5),
(18, 2, 4, 0),
(19, 2, 5, 1),
(20, 2, 6, 0.5),
(21, 2, 7, 0.5),
(22, 2, 8, 0),
(23, 2, 9, 0),
(24, 2, 10, 0),
(25, 2, 11, 0),
(26, 2, 12, 0),
(27, 2, 13, 0.5),
(28, 3, 1, 1),
(29, 3, 2, 0),
(30, 3, 3, 0),
(31, 3, 4, 0),
(32, 3, 5, 1),
(33, 3, 6, 0),
(34, 3, 7, 1),
(35, 3, 8, 1),
(36, 3, 9, 0),
(37, 3, 10, 0),
(38, 3, 11, 0),
(39, 3, 12, 0),
(40, 3, 13, 0),
(41, 4, 1, 0.33),
(42, 4, 2, 0),
(43, 4, 3, 0),
(44, 4, 4, 0),
(45, 4, 5, 0.33),
(46, 4, 6, 0),
(47, 4, 7, 0),
(48, 4, 8, 0.33),
(49, 4, 9, 1),
(50, 4, 10, 1),
(51, 4, 11, 0.33),
(52, 4, 12, 0),
(53, 4, 13, 0),
(54, 5, 1, 0),
(55, 5, 2, 0),
(56, 5, 3, 0),
(57, 5, 4, 0),
(58, 5, 5, 1),
(59, 5, 6, 0),
(60, 5, 7, 0),
(61, 5, 8, 0),
(62, 5, 9, 0),
(63, 5, 10, 0),
(64, 5, 11, 0),
(65, 5, 12, 0.5),
(66, 5, 13, 1);

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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `image`, `password`, `role_id`, `date_created`) VALUES
(6, 'Alfonso Aryando S', 'alfonso', 'face-1.jpg', '$2y$10$RvVYgo42792Sni6uvIKSieQ79XnIC72pIfdGZWYRigpRON.tGjcRC', 1, 1573977778),
(7, 'Member', 'Member', 'default.jpg', '$2y$10$gam52naGqUaHYPkQ49WDn.NtUmAUqZ5jdoMwKGAkw8DW8daCdLmoW', 2, 1575266061),
(10, 'Herdhani Eko', 'herdhani', 'default.jpg', '$2y$10$9ZOtFTPipOtsZDWatw4RvuqbTtWIHo/ZSotuGaAsfL4MDkz4u/8cm', 2, 1576725354);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_final`
--

CREATE TABLE `tmp_final` (
  `id` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `probabilitas` float NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_final`
--

INSERT INTO `tmp_final` (`id`, `id_gejala`, `id_kerusakan`, `probabilitas`, `hasil_probabilitas`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 0.5, 1),
(3, 1, 3, 1, 0),
(4, 1, 4, 0.33, 0),
(5, 1, 5, 0, 0),
(6, 13, 1, 0, 0),
(7, 13, 2, 0.5, 1),
(8, 13, 3, 0, 0),
(9, 13, 4, 0, 0),
(10, 13, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_user` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`id_user`, `id_gejala`) VALUES
(7, 1),
(7, 13);

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
(10, 1, 5),
(11, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`id_gejala`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tmp_final`
--
ALTER TABLE `tmp_final`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kerusakan`
--
ALTER TABLE `tbl_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tmp_final`
--
ALTER TABLE `tmp_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD CONSTRAINT `tbl_pengetahuan_ibfk_1` FOREIGN KEY (`id_kerusakan`) REFERENCES `tbl_kerusakan` (`id_kerusakan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
