-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buta`
--

-- --------------------------------------------------------

--
-- Table structure for table `g&s`
--

CREATE TABLE `g&s` (
  `id` int(11) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `full` varchar(128) NOT NULL,
  `tn` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `g&s`
--

INSERT INTO `g&s` (`id`, `Nama`, `jabatan`, `full`, `tn`) VALUES
(1, 'Samsul', 'Satpam', 'mg full.png', 'mg tn.png'),
(2, 'Arita, S.pd', 'Guru MTK', 'fg full.png', 'fg tn.png'),
(23, 'Asep, M.pd', 'Wakasek Kurikulum', 'MG full.png', 'mg tn.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_1`
--

CREATE TABLE `kelas_1` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nick` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `quote` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_1`
--

INSERT INTO `kelas_1` (`id`, `nama`, `nick`, `img`, `alamat`, `no_hp`, `quote`) VALUES
(1, 'M Zulfan K', 'Abah', 'M', 'Bogor', 80808, '\"Senakal nakalnya kami para cowo,gapernah tuh sampe hamil diluar nikah\"'),
(2, 'Kirana P', 'Akira', 'F', 'Cibinong', 81257, '\"Spread love everywhere you go. Let no one ever come to you without leaving happier.\"'),
(3, 'Farhan R', 'Kece', 'M', 'Depok', 8123, '\"Kadang-kadang langit bisa kelihatan seperti lembar kosong. Padahal sebenarnya tidak. Bintang kamu tetap di sana. Bumi hanya sedang berputar.\"'),
(4, 'Selvy Tiara', 'Si paling sopan', 'F', 'Bekasi', 8987, '\"Jangan salahkan dirimu atas keputusan yang salah. Setiap orang membuatnya. Jadikan mereka pelajaran tuk keputusanmu selanjutnya.\"');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_2`
--

CREATE TABLE `kelas_2` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nick` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `quote` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_2`
--

INSERT INTO `kelas_2` (`id`, `nama`, `nick`, `img`, `alamat`, `no_hp`, `quote`) VALUES
(1, 'Rizky', 'si arab', 'm', 'Banten', 222, '\"Mimpi besarmu tak akan tercapai jika kamu tidak mau keluar dari zona nyaman, lawanlah rasa malas dan buktikan bahwa mimpimu akan terwujud.\"'),
(2, 'Kevin', 'rokes', 'm', 'Bogor', 12125, '\"selama 3 tahun saya gatau ngapain aja\"'),
(5, '', '', 'a', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `g&s`
--
ALTER TABLE `g&s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_1`
--
ALTER TABLE `kelas_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_2`
--
ALTER TABLE `kelas_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `g&s`
--
ALTER TABLE `g&s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kelas_1`
--
ALTER TABLE `kelas_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas_2`
--
ALTER TABLE `kelas_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
