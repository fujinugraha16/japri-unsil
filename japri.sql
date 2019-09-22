-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:24 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `japri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `bonus` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `pass`, `bonus`) VALUES
(1, 'admin', 'Herman', '21232f297a57a5a743894a0e4a801fc3', 11750000);

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id_crew` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `piutang` bigint(9) NOT NULL,
  `bagihasil` bigint(9) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`id_crew`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `piutang`, `bagihasil`, `keterangan`) VALUES
(1, 'Aay ramadhan', 'cirebon', '2012-12-29', 'kkasdfk', 58000, 576350, '-'),
(2, 'Acep Ahmad saroni', '', '0000-00-00', '', 0, 93600, '-'),
(3, 'Agung Wahyu Ginanjar', '', '0000-00-00', '', 222711700, 158535, '-'),
(4, 'Alifah Nursyabani', '', '0000-00-00', '', 0, 903200, '-'),
(5, 'Alya Choirunnisa', '', '0000-00-00', '', 0, 2750, '-'),
(6, 'Anggita Rifamuthya', '', '0000-00-00', '', 293100, 69800, '-'),
(7, 'Anida Camelia', '', '0000-00-00', '', 2436000, 730800, '-'),
(8, 'Annisa Nur rahmah', '', '0000-00-00', '', 0, 9300, '-'),
(9, 'Annisa Choirunnisa', '', '0000-00-00', '', 129000, 39500, '-'),
(10, 'Annisa Syahrani', '', '0000-00-00', '', 0, 5000, '-'),
(11, 'Atthariq daffa', '', '0000-00-00', '', 13000, 3900, '-'),
(12, 'Ayuni Dewi', '', '0000-00-00', '', 0, 45500, '-'),
(13, 'Budianto', '', '0000-00-00', '', 33500, 6050, '-'),
(14, 'Cindi Irmadati', '', '0000-00-00', '', 136500, 60700, '-'),
(15, 'Dahlia Aisyah', '', '0000-00-00', '', 2500, 31150, '-'),
(16, 'Dede Rahma', '', '0000-00-00', '', 21000, 5900, '-'),
(17, 'Dede Rohaeni', '', '0000-00-00', '', 64500, 40650, '-'),
(18, 'Depi Siti Wahyuni', '', '0000-00-00', '', 67000, 19300, '-'),
(19, 'Desi Lestari', '', '0000-00-00', '', 40000, 62295, '-'),
(20, 'Dhimas - PLS', '', '0000-00-00', '', 3000, 900, '-'),
(21, 'Dicky', '', '0000-00-00', '', 0, 0, '-'),
(22, 'Dina khusnul Khotimah', '', '0000-00-00', '', 66500, 75550, '-'),
(23, 'Dini Dinahastuti', '', '0000-00-00', '', 0, 31200, '-'),
(24, 'Erna puspitasari', '', '0000-00-00', '', 0, 40805, '-'),
(25, 'Fadila Prameswari', '', '0000-00-00', '', 201500, 64550, '-'),
(26, 'Farel Amar', '', '0000-00-00', '', 0, 0, '-'),
(27, 'Fazri', '', '0000-00-00', '', 205500, 79050, '-'),
(28, 'Felictya Azzahra', '', '0000-00-00', '', 94500, 28350, '-'),
(29, 'Fitria Febrianti', '', '0000-00-00', '', 260500, 75750, '-'),
(30, 'Hamzah', '', '0000-00-00', '', 51000, 13300, '-'),
(31, 'Heri Muhammad Farhan', '', '0000-00-00', '', 213104500, 63931350, '-'),
(32, 'Hesti Novianti', '', '0000-00-00', '', 100000, 29600, '-'),
(33, 'Ichsan Alif', '', '0000-00-00', '', 1500, 450, '-'),
(34, 'Ilmiyatul', '', '0000-00-00', '', 0, 22950, '-'),
(35, 'Indra Nurfadillah', '', '0000-00-00', '', 0, 5700, '-'),
(36, 'Irfan - FISIP', '', '0000-00-00', '', 0, 5550, '-'),
(37, 'Japri - Ai Intan', '', '0000-00-00', '', 0, 0, '-'),
(38, 'Japri - Rizal', '', '0000-00-00', '', 0, 0, '-'),
(39, 'Keukeu Herawati', '', '0000-00-00', '', 10000, 3000, '-'),
(40, 'Khoirunnisa Maudy Sofiani', '', '0000-00-00', '', 0, 10350, '-'),
(41, 'Krisda Destira', '', '0000-00-00', '', 0, 0, '-'),
(42, 'Lavia Sucia', '', '0000-00-00', '', 64500, 19350, '-'),
(43, 'Lisna Muniroh', '', '0000-00-00', '', 18000, 23800, '-'),
(44, 'Listia Melawati', '', '0000-00-00', '', 103000, 66850, '-'),
(45, 'M. Adha Zafarulloh', '', '0000-00-00', '', 0, 600, '-'),
(46, 'M. Ahmad Hanafi', '', '0000-00-00', '', 31850, 0, '-'),
(47, 'M. Alwin', '', '0000-00-00', '', 358250, 176725, '-'),
(48, 'M. Nurhasa Fauzi', '', '0000-00-00', '', 147000, 63900, '-'),
(49, 'Marina Anggraeni', '', '0000-00-00', '', 0, 0, '-'),
(50, 'Mella Tringastuti', '', '0000-00-00', '', 105000, 47050, '-'),
(51, 'Mu\'min Muttaqin', '', '0000-00-00', '', 725500, 74550, '-'),
(52, 'Mumu', '', '0000-00-00', '', 0, 8400, '-'),
(53, 'Nabila Siti Nurfauziah', '', '0000-00-00', '', 0, 0, '-'),
(54, 'Nadya Tasyafira ', '', '0000-00-00', '', 94500, 27950, '-'),
(55, 'Nirmala', '', '0000-00-00', '', 0, 0, '-'),
(56, 'Nisa Sundari', '', '0000-00-00', '', 19000, 26965, '-'),
(57, 'Novelia', '', '0000-00-00', '', 0, 0, '-'),
(58, 'Pina Prianti', '', '0000-00-00', '', 0, 686, '-'),
(59, 'Rahmania sacarin', '', '0000-00-00', '', 61500, 176350, '-'),
(60, 'Rati Aprianti', '', '0000-00-00', '', 345500, 124600, '-'),
(61, 'Revaldy Zacky', '', '0000-00-00', '', 0, 5100, '-'),
(62, 'Revi Febriana', '', '0000-00-00', '', 88000, 25200, '-'),
(63, 'Reza M. Ardhy', '', '0000-00-00', '', 0, 0, '-'),
(64, 'Rezkita', '', '0000-00-00', '', 68000, 38000, '-'),
(65, 'Rifkie', '', '0000-00-00', '', 168500, 68750, '-'),
(66, 'Rika Dewi Nirwana', '', '0000-00-00', '', 13000, 23800, '-'),
(67, 'Rika Silvia', '', '0000-00-00', '', 190000, 83050, '-'),
(68, 'Rima Melati', '', '0000-00-00', '', 0, 19650, '-'),
(69, 'Rina Nuranisa', '', '0000-00-00', '', 537300, 126455, '-'),
(70, 'Rizki', '', '0000-00-00', '', 54600, 33630, '-'),
(71, 'Rosa Nurhalisa', '', '0000-00-00', '', 0, 0, '-'),
(72, 'Sandi - KESMAS', '', '0000-00-00', '', 0, 0, '-'),
(73, 'Siti Aisyah', '', '0000-00-00', '', 15500, 4250, '-'),
(74, 'Siti Eka', '', '0000-00-00', '', 30000, 5100, '-'),
(75, 'Siti Fatimah', '', '0000-00-00', '', 0, 0, '-'),
(76, 'Sulis', '', '0000-00-00', '', 28500, 70950, '-'),
(77, 'Susi', '', '0000-00-00', '', 31500, 87550, '-'),
(78, 'Viviana', '', '0000-00-00', '', 0, 0, '-'),
(79, 'Walida', '', '0000-00-00', '', 0, 240, '-'),
(80, 'Wana Rimba', '', '0000-00-00', '', 0, 900, '-'),
(81, 'Windi Widiasari', '', '0000-00-00', '', 18000, 11655, '-'),
(82, 'Yesi', '', '0000-00-00', '', 0, 31700, '-'),
(83, 'No Crew', '', '0000-00-00', '', 0, 0, ''),
(84, 'Herman', 'cirebon', '2019-05-18', 'ghghgh', 0, 802080, '-');

-- --------------------------------------------------------

--
-- Table structure for table `detil_print`
--

CREATE TABLE `detil_print` (
  `id_print` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `harga` bigint(9) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_print`
--

INSERT INTO `detil_print` (`id_print`, `nama`, `harga`, `tanggal`) VALUES
(1, 'Herman', 835200, '2019-05-12 11:54:44'),
(2, 'Herman', 835200, '2019-05-12 11:55:32'),
(3, 'Herman', 835200, '2019-05-12 11:56:12'),
(4, 'Herman', 835200, '2019-05-12 11:56:35'),
(5, 'Herman', 835200, '2019-05-12 11:56:56'),
(6, 'Herman', 835200, '2019-05-12 13:36:24'),
(7, 'Herman', 266200, '2019-05-13 22:09:31'),
(8, 'Herman', 266200, '2019-05-13 22:09:53'),
(9, 'Herman', 1318000, '2019-05-13 22:40:59'),
(10, 'Herman', 249600, '2019-05-14 15:13:36'),
(11, 'Herman', 424000, '2019-05-15 10:19:37'),
(12, 'Herman', 424000, '2019-05-15 10:58:17'),
(13, 'Herman', 424000, '2019-05-15 11:01:14'),
(14, 'Herman', 424000, '2019-05-15 11:02:31'),
(15, 'Herman', 424000, '2019-05-15 11:02:57'),
(16, 'Herman', 9600, '2019-05-15 11:19:42'),
(17, 'Herman', 9600, '2019-05-15 11:20:33'),
(18, 'Herman', 9600, '2019-05-15 11:20:57'),
(19, 'Herman', 2402400, '2019-05-15 11:23:00'),
(20, 'Skripsi', 406000, '2019-05-15 11:24:48'),
(21, 'Skripsi', 406000, '2019-05-15 11:25:26'),
(22, 'Skripsi', 406000, '2019-05-15 11:26:13'),
(23, 'Skripsi', 406000, '2019-05-15 11:27:02'),
(24, 'Skripsi', 406000, '2019-05-15 11:27:25'),
(25, 'Skripsi', 406000, '2019-05-15 11:27:46'),
(26, 'Herman', 129000, '2019-05-15 11:28:27'),
(27, 'Herman', 213104500, '2019-05-15 11:40:17'),
(28, 'yuda', 125100, '2019-05-15 11:44:42'),
(29, 'Herman', 1150650, '2019-05-15 16:11:47'),
(30, 'Herman', 93280, '2019-05-15 16:14:00'),
(31, 'abdul', 63000, '2019-05-15 16:17:11'),
(32, 'qabdul', 15000, '2019-05-15 16:21:25'),
(33, 'Tugas Penelitian Kesmas', 15000, '2019-05-15 16:22:20'),
(34, 'Skripsi', 15000, '2019-05-15 16:23:30'),
(35, 'Herman', 63000, '2019-05-15 16:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `potongan` bigint(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id_discount`, `nama`, `potongan`) VALUES
(1, 'Tidak ada', 0),
(6, 'Skripsi', 20),
(7, 'Tugas Penelitian Kesmas', 10);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `barang` text NOT NULL,
  `harga` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `barang`, `harga`) VALUES
(1, 'Print Normal', 600),
(2, 'Print 50% Warna', 750),
(3, 'Print 100% warna', 1000),
(4, 'Jilid', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id_ledger` int(11) NOT NULL,
  `keterangan` longtext,
  `debit` bigint(7) NOT NULL,
  `kredit` bigint(10) NOT NULL,
  `saldo` bigint(7) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`id_ledger`, `keterangan`, `debit`, `kredit`, `saldo`, `tanggal`) VALUES
(1, 'PENDAPATAN PRINT', 835200, 0, 835200, '2019-05-12 11:55:32'),
(2, 'PENDAPATAN PRINT', 835200, 0, 1670400, '2019-05-12 11:56:12'),
(3, 'PENDAPATAN PRINT', 835200, 0, 2505600, '2019-05-12 11:56:35'),
(4, 'PENDAPATAN PRINT', 835200, 0, 3340800, '2019-05-12 11:56:56'),
(5, 'PENDAPATAN PRINT', 835200, 0, 4176000, '2019-05-12 13:36:24'),
(6, 'PENDAPATAN PRINT', 266200, 0, 4442200, '2019-05-13 22:09:31'),
(7, 'PENDAPATAN PRINT', 266200, 0, 4708400, '2019-05-13 22:09:53'),
(8, 'PENDAPATAN PRINT', 1318000, 0, 6026400, '2019-05-13 22:40:59'),
(9, 'PENDAPATAN PRINT', 249600, 0, 6276000, '2019-05-14 15:13:37'),
(10, 'PENDAPATAN PRINT', 424000, 0, 6700000, '2019-05-15 10:19:37'),
(11, 'PENDAPATAN PRINT', 424000, 0, 7124000, '2019-05-15 10:58:18'),
(12, 'PENDAPATAN PRINT', 424000, 0, 7548000, '2019-05-15 11:01:14'),
(13, 'PENDAPATAN PRINT', 424000, 0, 7972000, '2019-05-15 11:02:31'),
(14, 'PENDAPATAN PRINT', 424000, 0, 8396000, '2019-05-15 11:02:57'),
(15, 'PENDAPATAN PRINT', 9600, 0, 8405600, '2019-05-15 11:19:42'),
(16, 'PENDAPATAN PRINT', 9600, 0, 8415200, '2019-05-15 11:20:33'),
(17, 'PENDAPATAN PRINT', 9600, 0, 8424800, '2019-05-15 11:20:57'),
(18, 'PENDAPATAN PRINT', 2402400, 0, 10827200, '2019-05-15 11:23:00'),
(19, 'PENDAPATAN PRINT', 406000, 0, 11233200, '2019-05-15 11:24:48'),
(20, 'PENDAPATAN PRINT', 406000, 0, 11639200, '2019-05-15 11:25:27'),
(21, 'PENDAPATAN PRINT', 406000, 0, 12045200, '2019-05-15 11:26:13'),
(22, 'PENDAPATAN PRINT', 406000, 0, 12451200, '2019-05-15 11:27:02'),
(23, 'PENDAPATAN PRINT', 406000, 0, 12857200, '2019-05-15 11:27:25'),
(24, 'PENDAPATAN PRINT', 406000, 0, 13263200, '2019-05-15 11:27:46'),
(25, 'PENDAPATAN PRINT', 129000, 0, 13392200, '2019-05-15 11:28:27'),
(26, 'PENDAPATAN PRINT', 213104500, 0, 226496700, '2019-05-15 11:40:17'),
(27, 'PENDAPATAN PRINT', 125100, 0, 226621800, '2019-05-15 11:44:43'),
(28, 'PENDAPATAN PRINT Agung Wahyu Ginanjar', 20000, 0, 226621800, '2019-05-15 15:57:42'),
(29, 'PENDAPATAN PRINT Agung Wahyu Ginanjar', 446000000, 0, 226621800, '2019-05-15 15:57:57'),
(30, 'PENDAPATAN PRINT Agung Wahyu Ginanjar', 223395300, 0, 226621800, '2019-05-15 15:58:28'),
(31, 'PENDAPATAN PRINT Agung Wahyu Ginanjar', 223395300, 0, 450017100, '2019-05-15 16:00:47'),
(32, 'PENDAPATAN PRINT Alifah Nursyabani', 2402400, 0, 452419500, '2019-05-15 16:03:03'),
(33, 'PIUTANG PRINTHERMAN', 1150650, 0, 453570150, '2019-05-15 16:11:47'),
(34, 'PENDAPATAN PRINT Herman', 2301300, 0, 455871450, '2019-05-15 16:12:51'),
(35, 'PENDAPATAN PRINT', 93280, 0, 455964730, '2019-05-15 16:14:00'),
(36, 'PIUTANG PRINT AAY RAMADHAN', 63000, 0, 456027730, '2019-05-15 16:17:11'),
(37, 'PENDAPATAN PRINT AAY RAMADHAN', 20000, 0, 456047730, '2019-05-15 16:17:32'),
(38, 'PIUTANG PRINT AAY RAMADHAN', 0, 15000, 456062730, '2019-05-15 16:21:25'),
(39, 'PIUTANG PRINT AAY RAMADHAN', 0, 15000, 456062730, '2019-05-15 16:22:20'),
(40, 'PENDAPATAN PRINT AAY RAMADHAN', 15000, 0, 456077730, '2019-05-15 16:22:38'),
(41, 'PENDAPATAN PRINT', 15000, 0, 456092730, '2019-05-15 16:23:30'),
(42, 'PENDAPATAN PRINT', 63000, 0, 456155730, '2019-05-15 16:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `crew` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `print` int(11) NOT NULL,
  `ledger` int(11) NOT NULL,
  `jumlah` bigint(9) NOT NULL,
  `jilid` tinyint(4) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `harga_awal` bigint(9) NOT NULL,
  `harga_diskon` bigint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `crew`, `discount`, `admin`, `print`, `ledger`, `jumlah`, `jilid`, `tanggal`, `harga_awal`, `harga_diskon`) VALUES
(1, 31, 6, 1, 5, 4, 2040, 3, '2019-05-12 11:56:56', 1044000, 835200),
(2, 31, 6, 1, 6, 5, 2040, 3, '2019-05-12 13:36:25', 1044000, 835200),
(3, 1, 6, 1, 8, 7, 432, 2, '2019-05-13 22:09:54', 332750, 266200),
(4, 1, 6, 1, 9, 8, 2556, 1, '2019-05-13 22:40:59', 1647500, 1318000),
(5, 2, 6, 1, 10, 9, 600, 4, '2019-05-14 15:13:37', 312000, 249600),
(9, 1, 6, 1, 16, 15, 4, 3, '2019-05-15 11:19:42', 12000, 9600),
(10, 1, 6, 1, 17, 16, 4, 3, '2019-05-15 11:20:33', 12000, 9600),
(11, 1, 6, 1, 18, 17, 4, 3, '2019-05-15 11:20:57', 12000, 9600),
(12, 4, 6, 1, 19, 18, 6000, 1, '2019-05-15 11:23:00', 3003000, 2402400),
(13, 7, 1, 1, 20, 19, 800, 2, '2019-05-15 11:24:48', 406000, 406000),
(14, 7, 1, 1, 21, 20, 800, 2, '2019-05-15 11:25:27', 406000, 406000),
(15, 7, 1, 1, 22, 21, 800, 2, '2019-05-15 11:26:13', 406000, 406000),
(16, 7, 1, 1, 23, 22, 800, 2, '2019-05-15 11:27:02', 406000, 406000),
(17, 7, 1, 1, 24, 23, 800, 2, '2019-05-15 11:27:25', 406000, 406000),
(18, 7, 1, 1, 25, 24, 800, 2, '2019-05-15 11:27:46', 406000, 406000),
(19, 9, 1, 1, 26, 25, 240, 3, '2019-05-15 11:28:27', 129000, 129000),
(20, 31, 1, 1, 27, 26, 213465, 2, '2019-05-15 11:40:17', 213104500, 213104500),
(21, 6, 7, 1, 28, 27, 256, 3, '2019-05-15 11:44:43', 139000, 125100),
(22, 84, 7, 1, 29, 33, 2098, 1, '2019-05-15 16:11:47', 1278500, 1150650),
(23, 84, 6, 1, 30, 35, 161, 3, '2019-05-15 16:14:01', 116600, 93280),
(24, 1, 1, 1, 31, 36, 100, 1, '2019-05-15 16:17:11', 63000, 63000),
(25, 1, 1, 1, 32, 38, 20, 1, '2019-05-15 16:21:25', 15000, 15000),
(26, 1, 1, 1, 33, 39, 20, 1, '2019-05-15 16:22:20', 15000, 15000),
(27, 1, 1, 1, 34, 41, 20, 1, '2019-05-15 16:23:30', 15000, 15000),
(28, 1, 1, 1, 35, 42, 100, 1, '2019-05-15 16:24:05', 63000, 63000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id_crew`);

--
-- Indexes for table `detil_print`
--
ALTER TABLE `detil_print`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`id_ledger`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`,`crew`,`discount`,`admin`,`print`,`ledger`),
  ADD KEY `fk_transaksi_crew_idx` (`crew`),
  ADD KEY `fk_transaksi_discount1_idx` (`discount`),
  ADD KEY `fk_transaksi_admin1_idx` (`admin`),
  ADD KEY `fk_transaksi_detil_print1_idx` (`print`),
  ADD KEY `fk_transaksi_ledger1_idx` (`ledger`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `id_crew` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `detil_print`
--
ALTER TABLE `detil_print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id_ledger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_admin1` FOREIGN KEY (`admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_crew` FOREIGN KEY (`crew`) REFERENCES `crew` (`id_crew`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_detil_print1` FOREIGN KEY (`print`) REFERENCES `detil_print` (`id_print`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_discount1` FOREIGN KEY (`discount`) REFERENCES `discount` (`id_discount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_ledger1` FOREIGN KEY (`ledger`) REFERENCES `ledger` (`id_ledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
