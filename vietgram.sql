-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2020 pada 07.18
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

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
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `username` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`username`, `url`, `caption`, `likes`) VALUES
('adriffieldd', 'http://dummyimage.com/156x158.jpg/5fa2dd/ffffff', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra', 103),
('amacswayde5', 'http://dummyimage.com/239x237.jpg/5fa2dd/ffffff', 'suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam', 383),
('csemberb', 'http://dummyimage.com/103x236.jpg/ff4444/ffffff', 'velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat', 43),
('amacswayde5', 'http://dummyimage.com/162x107.jpg/ff4444/ffffff', 'in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo', 221),
('csemberb', 'http://dummyimage.com/245x180.jpg/dddddd/000000', 'integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna', 369),
('adriffieldd', 'http://dummyimage.com/204x208.jpg/cc0000/ffffff', 'consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et', 123),
('dparradye7', 'http://dummyimage.com/114x154.jpg/dddddd/000000', 'in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula', 170),
('csemberb', 'http://dummyimage.com/175x188.jpg/ff4444/ffffff', 'ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis', 421),
('dparradye7', 'http://dummyimage.com/163x247.jpg/5fa2dd/ffffff', 'interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio', 270),
('egoforth1', 'http://dummyimage.com/173x211.jpg/ff4444/ffffff', 'vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean', 85),
('enazareth', 'http://dummyimage.com/217x250.jpg/dddddd/000000', 'dui vel sem sed sagittis nam congue risus semper porta volutpat', 406),
('egoforth1', 'http://dummyimage.com/161x103.jpg/dddddd/000000', 'mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in', 39),
('enazareth', 'http://dummyimage.com/217x168.jpg/dddddd/000000', 'fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis', 171),
('faizaaulia', 'http://dummyimage.com/215x118.jpg/dddddd/000000', 'erat volutpat in congue etiam justo etiam pretium iaculis justo in hac', 491),
('faizaaulia', 'http://dummyimage.com/125x115.jpg/cc0000/ffffff', 'curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut', 195),
('ffooter2', 'http://dummyimage.com/125x186.jpg/5fa2dd/ffffff', 'risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl', 266),
('ffooter2', 'http://dummyimage.com/204x156.jpg/5fa2dd/ffffff', 'lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam', 332),
('gformigli9', 'http://dummyimage.com/196x140.jpg/cc0000/ffffff', 'in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst', 149),
('gformigli9', 'http://dummyimage.com/184x211.jpg/5fa2dd/ffffff', 'elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus', 278),
('gsallg', 'http://dummyimage.com/244x110.jpg/ff4444/ffffff', 'lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla', 191),
('gsallg', 'http://dummyimage.com/113x160.jpg/5fa2dd/ffffff', 'augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus', 220),
('hcanhama', 'http://dummyimage.com/234x216.jpg/ff4444/ffffff', 'id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas', 441),
('rgerbl6', 'http://dummyimage.com/197x210.jpg/ff4444/ffffff', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc', 466),
('rgerbl6', 'http://dummyimage.com/243x148.jpg/cc0000/ffffff', 'arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula', 292),
('vgarkenj', 'http://dummyimage.com/236x130.jpg/5fa2dd/ffffff', 'accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a', 41),
('vgarkenj', 'http://dummyimage.com/151x127.jpg/5fa2dd/ffffff', 'pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper', 228),
('mboam3', 'http://dummyimage.com/234x178.jpg/cc0000/ffffff', 'nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis', 99),
('faizaaulia', 'http://dummyimage.com/200x212.jpg/ff4444/ffffff', 'faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi', 95),
('mboam3', 'http://dummyimage.com/130x149.jpg/dddddd/000000', 'congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque', 413),
('mboam3', 'http://dummyimage.com/250x145.jpg/5fa2dd/ffffff', 'cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at', 433),
('faizaaulia', 'http://dummyimage.com/175x116.jpg/dddddd/000000', 'purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut', 387),
('mboam3', 'http://dummyimage.com/102x137.jpg/cc0000/ffffff', 'quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non', 195),
('nbrewi', 'http://dummyimage.com/239x176.jpg/cc0000/ffffff', 'congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec', 254),
('nbrewi', 'http://dummyimage.com/199x241.jpg/cc0000/ffffff', 'lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna', 169),
('gformigli9', 'http://dummyimage.com/211x150.jpg/cc0000/ffffff', 'integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla', 71),
('gformigli9', 'http://dummyimage.com/111x214.jpg/cc0000/ffffff', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio', 165),
('gformigli9', 'http://dummyimage.com/191x144.jpg/dddddd/000000', 'nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus', 311),
('mwadhamsf', 'http://dummyimage.com/206x186.jpg/cc0000/ffffff', 'nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id', 28),
('mwadhamsf', 'http://dummyimage.com/142x173.jpg/ff4444/ffffff', 'lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada', 362),
('hcanhama', 'http://dummyimage.com/136x127.jpg/dddddd/000000', 'eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante', 71),
('gsallg', 'http://dummyimage.com/202x248.jpg/5fa2dd/ffffff', 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in', 88),
('gsallg', 'http://dummyimage.com/135x150.jpg/cc0000/ffffff', 'in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis', 142),
('gsallg', 'http://dummyimage.com/200x157.jpg/cc0000/ffffff', 'quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a', 4),
('faizaaulia', 'http://dummyimage.com/113x206.jpg/cc0000/ffffff', 'nisl nunc rhoncus dui vel sem sed sagittis nam congue', 279),
('pplanke0', 'http://dummyimage.com/240x179.jpg/5fa2dd/ffffff', 'pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut', 371),
('pplanke0', 'http://dummyimage.com/187x169.jpg/cc0000/ffffff', 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', 196),
('pplanke0', 'http://dummyimage.com/114x142.jpg/5fa2dd/ffffff', 'mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea', 297),
('pplanke0', 'http://dummyimage.com/121x140.jpg/dddddd/000000', 'id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede', 5),
('pplanke0', 'http://dummyimage.com/181x121.jpg/cc0000/ffffff', 'est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum', 357);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `gender` enum('male','female','cant') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`username`, `name`, `email`, `website`, `bio`, `phone_number`, `gender`) VALUES
('adriffieldd', '', 'ihuxterd@stanford.edu', '', '', '', NULL),
('amacswayde5', '', 'hpescott5@seattletimes.com', '', '', '', NULL),
('csemberb', '', 'rbauldreyb@huffingtonpost.com', '', '', '', NULL),
('dparradye7', '', 'ktutchener7@vinaora.com', '', '', '', NULL),
('egoforth1', '', 'cknollesgreen1@4shared.com', '', '', '', NULL),
('enazareth', '', 'efooterh@icio.us', '', '', '', NULL),
('faizaaulia', 'Faiza Aulia Rahma Putra', 'faiz@faiza.com', 'faizaaulia.com', 'Moklet24Hours', '082143213456', 'male'),
('ffooter2', '', 'kgofton2@google.it', '', '', '', NULL),
('gformigli9', '', 'fketts9@apple.com', '', '', '', NULL),
('gsallg', '', 'cmeritg@pbs.org', '', '', '', NULL),
('gshakespearec', '', 'yshatliffec@google.com.au', '', '', '', NULL),
('hcanhama', '', 'rwillatta@blogger.com', '', '', '', NULL),
('mboam3', '', 'moffell3@harvard.edu', '', '', '', NULL),
('mwadhamsf', '', 'btampinf@indiegogo.com', '', '', '', NULL),
('nbrewi', '', 'dkarpenyai@mlb.com', '', '', '', NULL),
('nlefrance', '', 'dbriande@google.com', '', '', '', NULL),
('nrickwood8', '', 'cjude8@prnewswire.com', '', '', '', NULL),
('pplanke0', '', 'mshorten0@soundcloud.com', '', '', '', NULL),
('rgerbl6', '', 'tplan6@cnn.com', '', '', '', NULL),
('smatthesius4', '', 'bjanson4@globo.com', '', '', '', NULL),
('vgarkenj', '', 'sworswickj@issuu.com', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('adriffieldd', 'yemfWF', 'ihuxterd@stanford.edu'),
('amacswayde5', 'wJ2HMR', 'hpescott5@seattletimes.com'),
('csemberb', '8iiBv1X9oEHm', 'rbauldreyb@huffingtonpost.com'),
('dparradye7', 'tAFFenLTVyn', 'ktutchener7@vinaora.com'),
('egoforth1', 'RCvaIB', 'cknollesgreen1@4shared.com'),
('enazareth', 'Ia8VP1aHa', 'efooterh@icio.us'),
('faizaaulia', 'faizaaulia', 'faiz@faiza.com'),
('ffooter2', 'rWCOkbrKY', 'kgofton2@google.it'),
('gformigli9', 'NPEpwjmPD5fG', 'fketts9@apple.com'),
('gsallg', 'Bd1yKSWfx', 'cmeritg@pbs.org'),
('gshakespearec', 'x9CoJrsNw7Zz', 'yshatliffec@google.com.au'),
('hcanhama', 'c77SoCmz0', 'rwillatta@blogger.com'),
('mboam3', 'MgJTLvxma4', 'moffell3@harvard.edu'),
('mwadhamsf', 'lp4Zz2DvIQ0', 'btampinf@indiegogo.com'),
('nbrewi', '1tXyX3oGDh', 'dkarpenyai@mlb.com'),
('nlefrance', 'qtze8FG', 'dbriande@google.com'),
('nrickwood8', 'XuJJCb', 'cjude8@prnewswire.com'),
('pplanke0', 'ThIYAX9l', 'mshorten0@soundcloud.com'),
('rgerbl6', 'Icl2Iq', 'tplan6@cnn.com'),
('smatthesius4', 'wiIVRmJGVpB', 'bjanson4@globo.com'),
('vgarkenj', 'iJl75zkT', 'sworswickj@issuu.com');

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `after_insert_users` AFTER INSERT ON `users` FOR EACH ROW BEGIN
	INSERT INTO profiles(username, email, gender) VALUES(new.username,new.email,null);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD KEY `username_photo` (`username`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `profiles_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
