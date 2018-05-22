-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 12:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `saran` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'ripat@pens.ac.id', '1', 'Ripat', '4103151011', 1);

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
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `jml_bimbingan` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `nama`, `jenis`, `jml_bimbingan`) VALUES
(1, 'Proposal', 'TPPA', '8');

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
(1, 'dosen'),
(2, 'mahasiswa'),
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
(1, '4103151011', '1', '2', '1', '2', 'Test Judul 2', 'lorem ipsum dolor', '1', '2018-04-26 02:43:31'),
(2, '4103151011', '1', '2', '', '', 'Test Judul 2', 'lorem ipsum dolor', '1', '2018-04-26 02:48:14'),
(3, '4103151011', '1', '2', '', '', 'judul1 ', 'ini abstrak judul 1', '', '2018-05-07 02:04:47');

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
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `set_ta_mahasiswa`
--
ALTER TABLE `set_ta_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_ta_mahasiswa`
--
ALTER TABLE `upload_ta_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
