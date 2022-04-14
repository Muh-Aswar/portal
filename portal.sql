-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2022 at 07:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesRegistrasi`
--

CREATE TABLE IF NOT EXISTS `aksesRegistrasi` (
  `idCard` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nomorHP` int(13) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesRegistrasi`
--

INSERT INTO `aksesRegistrasi` (`idCard`, `nama`, `nomorHP`, `dept`, `jabatan`, `password`) VALUES
(5012121, 'ARIF', 2147483647, 'IRGA', 'PELAKSANA', '123'),
(5012123, 'YUSRIL', 2147483647, 'IRGA', 'UH', '123'),
(5012222, 'ANDINI', 2147483647, 'CI', 'OPERATOR', '123'),
(5012345, 'ASWAR', 2147483647, 'IRGA', 'OPERATOR', '123');

-- --------------------------------------------------------

--
-- Table structure for table `InputEngineering`
--

CREATE TABLE IF NOT EXISTS `InputEngineering` (
  `idEngineering` int(5) NOT NULL,
  `tindakan` varchar(35) NOT NULL,
  `analisa` varchar(35) NOT NULL,
  `pelaksana` varchar(12) NOT NULL,
  `mulaiPengerjaan` date NOT NULL,
  `selesaiPengerjaan` date NOT NULL,
  `downTime` int(10) NOT NULL,
  `lamaDownTime` int(10) NOT NULL,
  `catatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `InputEngineering`
--

INSERT INTO `InputEngineering` (`idEngineering`, `tindakan`, `analisa`, `pelaksana`, `mulaiPengerjaan`, `selesaiPengerjaan`, `downTime`, `lamaDownTime`, `catatan`) VALUES
(0, 'Modifikasi', 'Rusak karena terlalu lama di pakai', 'maintenanc', '2022-03-23', '2022-03-23', 0, 2, 'rekondisi');

-- --------------------------------------------------------

--
-- Table structure for table `inputKoordinasi`
--

CREATE TABLE IF NOT EXISTS `inputKoordinasi` (
  `id` int(5) NOT NULL,
  `tglDikerja` date NOT NULL,
  `estimasi` int(15) NOT NULL,
  `namaTeknisi` varchar(25) NOT NULL,
  `namaPerwakilan` varchar(25) NOT NULL,
  `potensiKontaminasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputKoordinasi`
--

INSERT INTO `inputKoordinasi` (`id`, `tglDikerja`, `estimasi`, `namaTeknisi`, `namaPerwakilan`, `potensiKontaminasi`) VALUES
(0, '2022-03-03', 9, 'Bacce', 'Bacce', 'ya'),
(0, '0000-00-00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inputUser`
--

CREATE TABLE IF NOT EXISTS `inputUser` (
  `id` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `dept` varchar(10) NOT NULL,
  `status` varchar(6) NOT NULL,
  `lampiranStatus` varchar(5) NOT NULL,
  `lampiranDesk` varchar(35) NOT NULL,
  `kegiatan` varchar(15) NOT NULL,
  `lokasi` int(5) NOT NULL,
  `mesin` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputUser`
--

INSERT INTO `inputUser` (`id`, `tanggal`, `dept`, `status`, `lampiranStatus`, `lampiranDesk`, `kegiatan`, `lokasi`, `mesin`) VALUES
(1, '2022-03-02', 'IRGA', 'normal', 'tidak', 'HGHGH', 'baru', 1, 'Line 4'),
(2, '2022-02-01', 'IRGA', 'normal', 'tidak', 'Roller', 'baru', 1, 'Line 2'),
(3, '0000-00-00', 'IRGA', 'urgen', 'ya', 'Pintu Miring', 'baru', 1, 'Line 3'),
(4, '2022-03-17', 'PRODUKSI', 'normal', 'tidak', 'Epoxy', 'baru', 1, 'Line 4'),
(5, '2022-03-25', 'PRODUKSI', 'normal', 'tidak', 'Plafon rusak', 'modif', 1, 'Line 2'),
(6, '0000-00-00', 'IRGA', 'normal', 'tidak', 'ajsdkfajs', 'baru', 1, 'Line 1'),
(8, '2022-03-02', 'PRODUKSI', 'normal', 'tidak', '', 'baru', 1, 'Line 1'),
(9, '2022-03-02', 'PRODUKSI', 'normal', 'tidak', 'Ganti Bohlam', 'baru', 1, 'Line 1'),
(10, '0000-00-00', '', '', '', '', '', 0, 'Line 1'),
(11, '0000-00-00', '', '', '', '', '', 0, 'Line 1'),
(12, '0000-00-00', '', '', '', '', '', 0, 'Line 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesRegistrasi`
--
ALTER TABLE `aksesRegistrasi`
  ADD PRIMARY KEY (`idCard`);

--
-- Indexes for table `InputEngineering`
--
ALTER TABLE `InputEngineering`
  ADD PRIMARY KEY (`idEngineering`);

--
-- Indexes for table `inputUser`
--
ALTER TABLE `inputUser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputUser`
--
ALTER TABLE `inputUser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
