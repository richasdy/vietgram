-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 06:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `id_post` int(10) NOT NULL,
  `comment` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comments`, `username`, `id_post`, `comment`) VALUES
(1, 'billgates', 4, 'woooahh! cool'),
(2, 'amalkhrn', 3, 'hmmm yeah'),
(3, 'elonmusk', 1, 'so,what?'),
(4, 'elonmusk', 2, 'not yet!'),
(5, 'instagram', 2, 'ok'),
(6, 'billgates', 3, 'turn to microsoft?');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id_folls` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `follow_to` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id_folls`, `username`, `follow_to`) VALUES
(1, 'amalkhrn', 'billgates'),
(2, 'amalkhrn', 'elonmusk'),
(3, 'amalkhrn', 'instagram'),
(4, 'elonmusk', 'amalkhrn'),
(5, 'billgates', 'elonmusk'),
(6, 'instagram', 'elonmusk');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `caption` varchar(2500) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `likes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `caption`, `photo`, `likes`) VALUES
(1, 'i do something', 'https://as1.ftcdn.net/jpg/02/45/17/20/500_F_245172081_MdhCugtp0nnFU43B8mceh0YPUAkyvul8.jpg', 250),
(2, 'i\'ve done', 'https://as1.ftcdn.net/jpg/02/45/17/20/500_F_245172081_MdhCugtp0nnFU43B8mceh0YPUAkyvul8.jpg', 500),
(3, 'random images', 'https://media.gettyimages.com/photos/number-one-wood-material-on-table-concept-top-winner-success-picture-id842083046?b=1&k=6&m=842083046&s=612x612&w=0&h=ttVtMd6JKY3rN2MVCvxkuz_eUp13ypuLbTbAoE2VHqk=', 1000),
(4, 'yeah', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDzo19qgKBhkM2pl-5qnhhQ0BINysxleN2-7PRHhfhhgjegF7L&usqp=CAU', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `email` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `id` int(10) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`email`, `bio`, `gender`, `id`, `fullname`, `phone_number`, `username`, `website`, `photo`, `verified`) VALUES
('amalkhairinn@gmail.com', 'Hi,there! I\'m using Instagram.', 'male', 1, 'Amal Khairin', '085123456789', 'amalkhrn', 'https://amalkhairin.surge.sh', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSecQceshS_TGpRJJ2ESiCum1AuFn0BEH9fiYCEVSyWJ9GGD74p&usqp=CAU', 0),
('billgates@microsoft.org', 'Windows is better than apple, belive it :)', 'L', 2, 'Bill Gates', '085123654987', 'billgates', 'https://billgates.com', 'https://pbs.twimg.com/profile_images/988775660163252226/XpgonN0X_400x400.jpg', 1),
('elonmusk@gmail.com', 'Tesla\'s cars are free if you give your money to me', 'L', 3, 'Elon Musk', '085987654321', 'elonmusk', 'https://spacex.com', 'https://upload.wikimedia.org/wikipedia/commons/e/ed/Elon_Musk_Royal_Society.jpg', 1),
('instagram@mail.com', 'Huh! I\'ll delete your trash account!', 'L', 4, 'Instagram', '085456124987', 'instagram', 'https://instagram.com', 'https://rilispedia.com/wp-content/uploads/2019/12/Glyph-Icon-hero.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('amalkhrn', 'amal123'),
('billgates', 'bill123'),
('elonmusk', 'elon123'),
('instagram', 'instagram123');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `id_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `username`, `id_post`) VALUES
(1, 'amalkhrn', 1),
(2, 'amalkhrn', 2),
(3, 'billgates', 4),
(4, 'elonmusk', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`),
  ADD KEY `user_comment_fk` (`username`),
  ADD KEY `post_comment_fk` (`id_post`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id_folls`),
  ADD KEY `user_follow_fk` (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_fk` (`id_post`),
  ADD KEY `user_post_fk` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id_folls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `post_comment_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `user_comment_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `user_follow_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `post_fk` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `user_post_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
