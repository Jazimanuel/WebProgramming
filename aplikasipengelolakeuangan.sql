-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasipengelolakeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `depan` varchar(20) NOT NULL,
  `tengah` varchar(20) NOT NULL,
  `belakang` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `WN` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nhp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `pp` blob NOT NULL,
  `username` varchar(30) NOT NULL,
  `pw1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`depan`, `tengah`, `belakang`, `tempat`, `tanggal`, `nik`, `WN`, `email`, `nhp`, `alamat`, `kodepos`, `pp`, `username`, `pw1`) VALUES
('xaviera', 'disney', 'reques', 'Jakarta', '2022-03-28', '310085652121', 'Indonesia', 'xaviera@gmail.com', '082565102212', 'Taman Kebon Jeruk No.21', '12122', 0x46696c6555706c6f61642f535f5f31383538373733362e6a7067, 'xaviera', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
