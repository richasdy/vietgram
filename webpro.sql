-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Apr 2020 pada 16.56
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `url` varchar(50) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `like_photo` tinyint(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('alex', 'alex', 'alex@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`name`),
  ADD KEY `profile_FK` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_FK` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
