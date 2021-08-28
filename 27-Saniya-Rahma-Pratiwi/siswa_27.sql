-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 05:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_27`
--

-- --------------------------------------------------------

--
-- Table structure for table `tsiswa_27`
--

CREATE TABLE `tsiswa_27` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `n1` int(11) DEFAULT NULL,
  `n2` int(11) DEFAULT NULL,
  `n3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsiswa_27`
--

INSERT INTO `tsiswa_27` (`id`, `nim`, `nama`, `alamat`, `n1`, `n2`, `n3`) VALUES
(6, 'JWD001', 'Nurhayati', 'Jl.', 70, 70, 70),
(7, 'JWD002', 'Mashadi', 'Jl. Madukoro 5', 80, 60, 80),
(8, 'JWD003', 'Murtono', 'Jl. Murbei 10', 80, 70, 75),
(9, 'JWD004', 'Sriyati', 'Jl. Unta 44', 76, 70, 75),
(10, 'JWD005', 'Mustofa', 'Jl. Kelinci 65', 78, 65, 80),
(11, 'JWD006', 'Elsa', 'Jl. Borobudur 30', 50, 45, 40),
(13, 'JWD007', 'Nia Rama', 'Jl. Baskoro 38', 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('member', 'aa08769cdcb26674c6706093503ff0a3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tsiswa_27`
--
ALTER TABLE `tsiswa_27`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tsiswa_27`
--
ALTER TABLE `tsiswa_27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
