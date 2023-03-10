-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 08:11 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE IF NOT EXISTS `costumer` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id`, `username`, `nama`, `alamat`, `phone`, `email`, `pass`) VALUES
(4, '', 'Enrico Risnanda H', '0858', 0, 'Bumiayu', 'pass'),
(5, '', 'Munaroh', '123347282812', 0, 'enricohimawan12@gmail.com', 'ayuh'),
(6, '', 'Enrico Risnanda H', 'Bumiayu', 2147483647, 'enricohimawan12@gmail.com', 'aaaa'),
(7, '', 'Bagus', 'Cilacap', 2147483647, 'Bagus@gmail.com', 'yaaa'),
(8, '', 'Umang', 'Wangon', 2147483647, 'umang@gmail.com', 'yuhu'),
(9, '', 'Yoyo', 'Purbalingga', 2147483647, 'enricohimawan12@gmail.com', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `bandara` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kota`, `bandara`) VALUES
(1, 'Yogyakarta', 'Adi Sucipto'),
(2, 'Jakarta', 'Soekarno Hatta'),
(3, 'Bali', 'Ngurah Rai');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE IF NOT EXISTS `pesawat` (
  `id` int(11) NOT NULL,
  `kode_p` varchar(10) NOT NULL,
  `maskapai` varchar(30) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id`, `kode_p`, `maskapai`, `kuota`) VALUES
(1, '001A', 'Air Asia', 100),
(3, '001G', 'Garuda Indonesia', 80),
(4, '001B', 'Lion Air', 82),
(5, '001C', 'Qatar Airwaeys', 80);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `depart` date NOT NULL,
  `depart_time` time NOT NULL,
  `arrived_time` time NOT NULL,
  `id_kota` int(30) NOT NULL,
  `id_ktujuan` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `id_pesawat`, `depart`, `depart_time`, `arrived_time`, `id_kota`, `id_ktujuan`, `harga`) VALUES
(19, 1, '2018-01-30', '22:00:00', '23:45:00', 1, '2', 100000),
(20, 4, '2018-02-06', '15:45:00', '16:03:00', 2, '3', 450001),
(21, 3, '2018-02-05', '19:04:00', '21:00:00', 1, '3', 200000),
(35, 5, '2018-02-05', '19:02:00', '20:23:00', 3, '1', 340000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
