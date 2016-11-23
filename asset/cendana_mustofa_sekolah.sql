-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 02:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cendana_mustofa_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
`id_matpel` int(10) unsigned NOT NULL,
  `pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `pelajaran`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'CSS'),
(4, 'Java Script'),
(5, 'MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(10) unsigned NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_matpel` int(10) NOT NULL,
  `nilai` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_matpel`, `nilai`) VALUES
(1, 1, 1, 'A+'),
(2, 1, 2, 'A'),
(3, 1, 3, 'B+'),
(4, 1, 4, 'A+'),
(5, 1, 5, 'A'),
(6, 2, 1, 'A'),
(7, 2, 2, 'B'),
(8, 2, 3, 'B'),
(9, 2, 4, 'B+'),
(10, 2, 5, 'A'),
(18, 5, 1, 'B'),
(19, 5, 2, 'B+'),
(20, 5, 3, 'C'),
(23, 5, 5, 'A+'),
(24, 5, 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(10) unsigned NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL DEFAULT 'L',
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jenkel`, `alamat`) VALUES
(1, 'Mustofa', 'L', 'Daerah Istimewa Kepanjen'),
(2, 'Halim', 'L', 'Daerah Istimewa Sukoraharjo'),
(5, 'Sukirman', 'L', 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
 ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
MODIFY `id_matpel` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
