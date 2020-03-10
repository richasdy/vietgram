-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Mar 2020 pada 04.37
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
-- Database: `instaClone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `like` int(11) NOT NULL DEFAULT 0,
  `location` varchar(255) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id_photo`, `id`, `url`, `caption`, `like`, `location`, `timeStamp`) VALUES
(1, 1, 'https://i1.wp.com/dailyspin.id/wp-content/uploads/2020/01/2-21.jpg?fit=700%2C500&ssl=1', 'noobson-topson-godson', 12, 'Jakarta', '2020-03-05 20:56:03'),
(2, 2, 'https://i.pinimg.com/originals/2d/cd/80/2dcd80c6f5a21a437313adde93b373d8.png', 'dota2 logo', 20, 'Bandung', '2020-03-05 20:56:14'),
(8, 2, 'https://static1.fjcdn.com/comments/Manliest+sport+dota+2+_ed46988bd8bcdec5e2a54a1383547c6e.jpg', 'troll face', 110, '', '2019-02-23 18:38:01'),
(14, 2, 'uploads/Data Struckture.png', 'data struckture', 0, 'paris', '2020-03-09 17:36:09'),
(15, 2, 'uploads/ILMY 1 (1).png', 'ilmy', 0, 'ilmyy', '2020-03-09 23:03:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id_profiles` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fotoProfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id_profiles`, `id`, `name`, `username`, `website`, `bio`, `email`, `phone_number`, `gender`, `fotoProfile`) VALUES
(1, 2, 'Alexander', 'Alexander', 'htttp://www.withindra.rf.gd', 'new Username', 'deri@gmail.com', '0888-9999-2222', 'male', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvmWDbIvo56ARwAUhhWaxH7IiEH9PtTYbK3dYMQQpV2ENQIQRa'),
(2, 1, 'matumba', 'matumbaman', 'http://www.liquidpedia.com', 'Lasse matumbaman ex team liquid', 'matumba@gmail.com', '0888-9999-2222', 'cant', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ6W8_KVTqabPY9dhh9FmGZ_CvXTnPwl9b2m90ISb-fj4FKosH9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fotoProfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `email`, `fotoProfile`) VALUES
(1, 'matumbaman', 'deri', 'matumba@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvmWDbIvo56ARwAUhhWaxH7IiEH9PtTYbK3dYMQQpV2ENQIQRa'),
(2, 'Alexander', 'der', 'deri@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ6W8_KVTqabPY9dhh9FmGZ_CvXTnPwl9b2m90ISb-fj4FKosH9');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `FK_id_photo` (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profiles`),
  ADD KEY `FK_id` (`id`);

--
-- Indeks untuk tabel `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `FK_id_photo` FOREIGN KEY (`id`) REFERENCES `Users` (`id`);

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
