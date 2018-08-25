-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2018 at 03:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6089858_skp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Dinas'),
(2, 'Kepala Bagian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lembaga`
--

CREATE TABLE `tbl_lembaga` (
  `id_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `alamat_lembaga` text NOT NULL,
  `email_lembaga` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_palru`
--

CREATE TABLE `tbl_palru` (
  `id_palru` int(3) NOT NULL,
  `nama_palru` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_palru`
--

INSERT INTO `tbl_palru` (`id_palru`, `nama_palru`) VALUES
(1, 'Pembina Utama, IV/e'),
(2, 'Pembina Utama Madya, I'),
(3, 'Pembina Utama Muda, IV'),
(4, 'Pembina Tingkat I, IV/'),
(5, 'Pembina, IV/a'),
(6, 'Penata Tingkat I, III/'),
(7, 'Penata, III/c'),
(8, 'Penata Muda Tingkat I,'),
(9, 'Penata Muda, III/a'),
(10, 'Pengatur Tingkat I, II'),
(11, 'Pengatur, II/c'),
(12, 'Pengatur Muda Tingat I'),
(13, 'Pengatur Muda, II/a'),
(14, 'Juru Tingat I, I/d'),
(15, 'Juru, I/c'),
(16, 'Juru Muda Tingkat I, I'),
(17, 'Juru Muda, I/a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip_pegawai` varchar(18) NOT NULL,
  `email_pegawai` varchar(100) NOT NULL,
  `password_pegawai` varchar(100) NOT NULL DEFAULT '',
  `id_palru` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status_pegawai` enum('PNS','NON PNS') NOT NULL,
  `aktif_pegawai` enum('Aktif',' Tidak Aktif') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `nip_pegawai`, `email_pegawai`, `password_pegawai`, `id_palru`, `id_jabatan`, `status_pegawai`, `aktif_pegawai`) VALUES
(1, 'Fuad', '1995', 'test', '12345', 1, 1, 'PNS', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perilaku`
--

CREATE TABLE `tbl_perilaku` (
  `id_pegawai` varchar(8) NOT NULL,
  `orientasi_pelayanan` varchar(30) NOT NULL,
  `integritas` varchar(30) NOT NULL,
  `komitmen` varchar(20) NOT NULL,
  `disiplin` varchar(20) NOT NULL,
  `kerjasama` varchar(20) NOT NULL,
  `kepemimpinan` varchar(20) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `rata_rata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periode`
--

CREATE TABLE `tbl_periode` (
  `id_periode` int(11) NOT NULL,
  `jangka_waktu_penilaian` text,
  `tgl_formulir` text,
  `tgl_form_penilaian_penilai` text,
  `tgl_form_penilaian_dinilai` text,
  `tgl_form_penilaian_atasan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_palru`
--
ALTER TABLE `tbl_palru`
  ADD PRIMARY KEY (`id_palru`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_palru`
--
ALTER TABLE `tbl_palru`
  MODIFY `id_palru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
