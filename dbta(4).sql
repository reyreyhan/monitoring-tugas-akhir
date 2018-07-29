-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 10:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_ta_mahasiswa`
--

CREATE TABLE `bimbingan_ta_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nrp` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `Minggu` int(11) NOT NULL,
  `status` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bimbingan_ta_mahasiswa`
--

INSERT INTO `bimbingan_ta_mahasiswa` (`id`, `nama`, `nrp`, `nip`, `judul`, `tanggal`, `isi`, `Minggu`, `status`, `id_kategori`) VALUES
(1, 'Ripat', '4103151011', '1111', 'TA Ripat', '2018-06-28 08:41:53', 'Judul', 1, '1', 3),
(2, 'Ripat', '4103151011', '2222', 'TA Ripat', '2018-06-28 08:41:59', 'Coding', 2, '1', 3),
(3, 'Ripat', '4103151011', '3333', 'TA Ripat', '2018-06-28 08:42:03', 'Database', 3, '1', 3),
(4, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-06-28 08:42:06', 'Coding 2', 3, '1', 3),
(5, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-06-28 08:42:09', 'test2', 5, '1', 3),
(6, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-06-28 08:42:11', 'test tanggal', 6, '1', 3),
(8, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-06-28 09:33:52', 'Judul', 1, '1', 1),
(9, 'Ripat', '4103151011', '3333', 'TA Ripat', '2018-06-28 09:34:19', 'Dosen', 1, '1', 1),
(10, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-07-02 10:05:00', 'Cek Tanggal', 6, '0', 3),
(11, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-05-01 11:20:00', 'Tanggal Maneh', 6, '0', 3),
(12, 'Ripat', '4103151011', '4444', 'TA Ripat', '2018-05-08 08:22:00', 'Bingung', 1, '0', 1),
(13, 'Ripat', '4103151011', '1111', 'TA Ripat (biar tidak di tolak)', '2018-07-09 04:23:00', '1', 1, '0', 3),
(14, 'Ripat', '4103151011', '1111', 'TA Ripat (biar tidak di tolak)', '2018-07-02 04:23:00', '1', 1, '0', 1),
(15, 'Ripat', '4103151011', '4444', 'TA Ripat (biar tidak di tolak)', '2018-07-03 01:05:00', '1', 1, '0', 3),
(16, 'Ripat', '4103151011', '4444', 'TA Ripat (biar tidak di tolak)', '2018-01-01 12:00:00', '1', 1, '0', 1),
(17, 'Dwi', '4210161011', '22233332244445', 'saya', '2018-07-23 00:19:48', 'tes koor', 1, '1', 1),
(18, 'Dwi', '4210161011', '4444', 'saya', '2018-07-22 12:20:00', 'dosen 4 jadi koor', 2, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `id_role` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `email`, `password`, `nama`, `nip`, `id_role`) VALUES
(1, 'dosen@pens.ac.id', '1', 'dosen', '12345678987654321', 2),
(2, 'admin@pens.ac.id', '1', 'admin', '111111111111222222', 3),
(3, 'koor@pens.ac.id', '1', 'koor', '22233332244445', 4),
(4, 'dosen1@pens.ac.id', '1', 'Dosen Satu', '1111', 2),
(5, 'dosen2@pens.ac.id', '1', 'Dosen Dua', '2222', 2),
(6, 'dosen3@pens.ac.id', '1', 'Dosen Tiga', '3333', 2),
(7, 'dosen4@pens.ac.id', '1', 'Dosen Empat', '4444', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(4) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `id_kategori` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `id_kategori`) VALUES
(1, 'Proposal', 1),
(2, 'Lembar Persetujuan Sidang TPPA', 1),
(3, 'Lembar Monitoring Bimbingan', 1),
(4, 'Proposal Akhir', 2),
(5, 'Lembar Revisi', 2),
(6, 'Draft Buku TA', 3),
(7, 'Lembar Persetujuan Sidang TA', 3),
(8, 'Lembar Monitoring Bimbingan', 3),
(9, 'File PPT', 3),
(10, 'Buku Akhir', 4),
(11, 'Lembar Revisi', 4),
(12, 'Lembar Pengesahan', 4),
(13, 'Poster', 4),
(14, 'Revisi Literatur', 4),
(15, 'Journal/Paper', 4),
(16, 'Hasil', 4),
(17, 'File PPT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(4) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'TPPA'),
(2, 'Revisi TPPA'),
(3, 'TA'),
(4, 'Revisi TA');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nrp` varchar(12) NOT NULL,
  `id_role` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `email`, `password`, `nama`, `nrp`, `id_role`) VALUES
(1, 'ripat@pens.ac.id', '1', 'Ripat', '4103151011', 1),
(2, 'rey@pens.ac.id', '1', 'Reyhan Alphard Savero', '4210161023', 1),
(3, 'dwi@pens.ac.id', '1', 'Dwi', '4210161011', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1522981989),
('m130524_201442_init', 1522981992);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(8) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `pengumuman`) VALUES
(1, 'dsadas', 'dsadsa'),
(2, 'dua', 'dua'),
(3, 'tiga', 'tiga'),
(4, 'empat', 'empat');

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(10) UNSIGNED NOT NULL,
  `deadline` datetime NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jml_bimbingan` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `deadline`, `id_jenis`, `id_kategori`, `jml_bimbingan`) VALUES
(1, '2018-07-11 11:22:00', 0, 1, '8'),
(2, '2018-07-06 11:22:00', 0, 2, '2'),
(3, '2018-07-20 11:22:00', 0, 3, '5'),
(4, '2018-07-13 11:22:00', 0, 4, '6');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(4) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'mahasiswa'),
(2, 'dosen'),
(3, 'admin'),
(4, 'koor pa');

-- --------------------------------------------------------

--
-- Table structure for table `set_ta_mahasiswa`
--

CREATE TABLE `set_ta_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nrp` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `nip1` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nip2` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nip3` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nip4` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `abstrak` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `set_ta_mahasiswa`
--

INSERT INTO `set_ta_mahasiswa` (`id`, `nrp`, `nip1`, `nip2`, `nip3`, `nip4`, `judul`, `abstrak`, `status`, `tgl_request`) VALUES
(6, '4103151011', '4444', '3333', '2222', '1111', 'TA Ripat (biar tidak di tolak) ,,,', 'Ini TA Ripat (biar tidak di tolak) ..', '2', '2018-07-09 04:55:41'),
(8, '4210161023', '1111', '2222', '3333', '4444', 'TA (Update)', 'TA (Update)', '2', '2018-07-08 18:49:31'),
(12, '4210161011', '22233332244445', '1111', '4444', '2222', 'saya', 'saya', '2', '2018-07-22 17:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `upload_ta_mahasiswa`
--

CREATE TABLE `upload_ta_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nrp` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upload_ta_mahasiswa`
--

INSERT INTO `upload_ta_mahasiswa` (`id`, `nrp`, `file`, `deadline`, `status`, `tgl_upload`, `id_kategori`, `id_jenis`) VALUES
(2, '4103151011', '4103151011_Ripat_3_7.docx', '2018-07-08 18:52:06', 0, '2018-07-08 18:52:06', 3, 7),
(3, '4103151011', '4103151011_Ripat_3_8.docx', '2018-07-08 18:52:11', 0, '2018-07-08 18:52:11', 3, 8),
(10, '4103151011', '4103151011_Ripat_2_5.docx', '2018-07-08 22:51:51', 1, '2018-07-08 22:51:51', 2, 5),
(21, '4103151011', '4103151011_Ripat_3_6.docx', '2018-07-08 23:01:14', 1, '2018-07-08 23:01:14', 3, 6),
(25, '4210161023', '4210161023_Reyhan Alphard Savero_4_10.docx', '2018-07-08 20:11:50', 0, '2018-07-08 20:11:50', 4, 10),
(27, '4103151011', '4103151011_Ripat_1_2.docx', '2018-07-09 04:53:27', 1, '2018-07-09 04:53:27', 1, 2),
(29, '4103151011', '4103151011_Ripat_1_1.docx', '2018-07-08 22:33:04', 1, '2018-07-08 22:33:04', 1, 1),
(30, '4103151011', '4103151011_Ripat_4_10.docx', '2018-07-08 23:09:50', 1, '2018-07-08 23:09:50', 4, 10),
(32, '4103151011', '4103151011_Ripat_4_11.docx', '2018-07-08 23:10:18', 0, '2018-07-08 23:10:18', 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `noid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `noid`, `username`, `role`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'test', 'dosen', 'LLlC6qHlFggXiyUsglKfgGuLu027wYEC', '$2y$13$3J9XHDm9FXlPK/.FpCgk0eG1msyuLUGDILyRWI08T9qEabLazzSGu', NULL, 'coba@mail.com', 10, 1522982063, 1522982063),
(2, '', 'dosen2', 'dosen', '02OD1zmIsROwTEJ7geTfnJ6yAdpeKNZB', '$2y$13$mZbQd/C2k4F4bQDQVP0IFezMOscyvOt72z0m4Bz0WFVkiticKfgHG', NULL, 'dosen@gmail.com', 10, 1524710202, 1524710202),
(3, '4103151011', 'mahasiswa1', 'mahasiswa', '', '', NULL, 'mahasiswa@mail.com', 10, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan_ta_mahasiswa`
--
ALTER TABLE `bimbingan_ta_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nrp` (`nrp`),
  ADD KEY `nip` (`nip`),
  ADD KEY `judul` (`judul`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_ta_mahasiswa`
--
ALTER TABLE `set_ta_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nrp` (`nrp`),
  ADD KEY `judul` (`judul`);

--
-- Indexes for table `upload_ta_mahasiswa`
--
ALTER TABLE `upload_ta_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nrp` (`nrp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `noid` (`noid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbingan_ta_mahasiswa`
--
ALTER TABLE `bimbingan_ta_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `set_ta_mahasiswa`
--
ALTER TABLE `set_ta_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `upload_ta_mahasiswa`
--
ALTER TABLE `upload_ta_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
