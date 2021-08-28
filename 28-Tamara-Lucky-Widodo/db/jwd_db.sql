-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2021 pada 07.55
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsiswa_nourut`
--

CREATE TABLE `tsiswa_nourut` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(355) NOT NULL,
  `alamat` varchar(455) NOT NULL,
  `nilai_harian` int(5) NOT NULL,
  `nilai_mid_test` int(5) NOT NULL,
  `nilai_final_test` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsiswa_nourut`
--

INSERT INTO `tsiswa_nourut` (`id`, `nim`, `nama`, `alamat`, `nilai_harian`, `nilai_mid_test`, `nilai_final_test`) VALUES
(1, 'JWD001', 'Nurhayati', 'Jl. Nangka 3', 90, 75, 80),
(2, 'JWD002', 'Mashadi', 'Jl. Madukoro 5', 80, 60, 80),
(3, 'JWD003', 'Murtono', 'Jl. Murbei 10', 80, 70, 75),
(4, 'JWD004', 'Sriyati', 'Jl. Unta 44', 76, 87, 90),
(5, 'JWD005', 'Mustofa', 'Jl. Kelinci 65', 78, 65, 80),
(6, 'JWD006', 'Elsa', 'Jl. Borobudur 30', 60, 78, 70),
(7, 'JWD007', 'Nia Rahma', 'Jl. Baskoro 38', 90, 90, 90),
(16, 'JWD008', 'Ariq', 'Jl Merdeka', 80, 90, 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'user', 'tamara', '81dc9bdb52d04dc20036dbd8313ed055', 'Tamara Lucky Widodo'),
(3, 'admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin JWD');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tsiswa_nourut`
--
ALTER TABLE `tsiswa_nourut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tsiswa_nourut`
--
ALTER TABLE `tsiswa_nourut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
