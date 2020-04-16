-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietgram_bagas`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment` varchar(200) COLLATE utf8_bin NOT NULL,
  `photo_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `person` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment`, `photo_name`, `person`) VALUES
('Woodieee <3', 'feed1_andy.jpg', 'dimas_yuli');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `likes` int(8) NOT NULL,
  `comment` int(8) NOT NULL,
  `caption` varchar(500) COLLATE utf8_bin NOT NULL,
  `location` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_name`, `username`, `likes`, `comment`, `caption`, `location`) VALUES
('feed1_andy.jpg', 'andy456', 6377, 876, 'when my brother was sad ', 'Andy\'s House'),
('feed1_bagas.jpg', 'bagas_dz', 675, 290, 'Kupu kupu yang lucu\r\nKemana engkau terbang\r\nHilir mudik mencari\r\nBunga bunga yang kembang', ''),
('feed1_kucing.jpg', 'kucing_ouren', 7591, 3544, 'What was that?!', 'Somewhere'),
('feed2_andy.jpg', 'andy456', 5821, 649, 'Beautiful cowgirl <3', 'In Front Of the Window'),
('feed2_bagas.jpg', 'bagas_dz', 444, 540, 'Home Sweet Home', 'Mirage'),
('feed3_andy.jpg', 'andy456', 8840, 3265, 'Best duo ever!', 'Andy\'s Bedroom'),
('feed3_bagas.jpg', 'bagas_dz', 773, 323, 'ehehehehe', 'Disana jauh'),
('feed4_bagas.jpg', 'bagas_dz', 907, 44, 'Aku adalah aku. Aku bukanlah kamu', 'Dirumah'),
('feed_bagas_dz.jpg', 'bagas_dz', 0, 0, 'someday..', ''),
('feed_bagas_dz1.jpg', 'bagas_dz', 0, 0, 'gatau siapa', 'youtube'),
('feed_bagas_dz2.jpg', 'bagas_dz', 0, 0, 'anu', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `website` varchar(100) COLLATE utf8_bin NOT NULL,
  `bio` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `phone` varchar(12) COLLATE utf8_bin NOT NULL,
  `gender` varchar(14) COLLATE utf8_bin NOT NULL,
  `ava` varchar(50) COLLATE utf8_bin NOT NULL,
  `follower` int(6) NOT NULL,
  `following` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `username`, `website`, `bio`, `email`, `phone`, `gender`, `ava`, `follower`, `following`) VALUES
('Andyka Fernando', 'andy456', 'https://www.pixar.com/', 'Toys have Stories', 'andy456@gmail.com', '0813XXXXXXXX', 'Male', 'ava_andy.jpg', 8830, 642),
('Bagas Millen Alhafidz', 'bagas_dz', 'https://www.instagram.com/bagas_dz', 'This is me', 'bagasmillena@gmail.com', '0822XXXXXXXX', 'male', 'ava_bagas.jpg', 1235, 65),
('Mia W', 'kucing_ouren', 'www.whiskasindonesia.com', 'king of CAT', 'kucing_oren@gmail.com', '0857XXXXXXXX', 'Can\'t remember', 'ava_kucing_oren.jpg', 5422, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('andy456', 'zxc', 'andy456@gmail.com'),
('bagas_dz', 'qwer', 'bagasmillena@gmail.com'),
('kucing_ouren', 'asd', 'kucing_oren@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_name`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
