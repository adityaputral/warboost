-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 01:12 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warboost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booster`
--

CREATE TABLE `booster` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ingame_nickname` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` double NOT NULL,
  `id_status` int(11) NOT NULL,
  `path_profilpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booster`
--

INSERT INTO `booster` (`id`, `username`, `password`, `nama`, `ingame_nickname`, `tanggal_lahir`, `nomor_hp`, `email`, `rating`, `id_status`, `path_profilpic`) VALUES
(1, 'testing', 'testing', 'test', 'anonymous', '2018-07-08', '08123456789', 'testing@gmail.com', 4, 3, 'anonymous-test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(50) NOT NULL,
  `path_logo` varchar(255) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `abreviasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `nama_game`, `path_logo`, `id_genre`, `abreviasi`) VALUES
(0, 'Counter Strike: GLobal Offensive', 'Games_CSGO.png', 1, 'csgo'),
(1, 'Apex Legends', 'Games_APEX.png', 2, 'apex-legends'),
(2, 'Dota 2', 'Games_Dota2.jpg', 3, 'dota-2'),
(3, 'League of Legends', 'Games_LoL.jpg', 3, 'lol'),
(4, 'Overwatch', 'Games_overwatch.jpg', 1, 'overwatch'),
(5, 'Rocket League', 'Games_RocketLeague.jpg', 4, 'rocket-league');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama`) VALUES
(1, 'FPS'),
(2, 'Battle Royale'),
(3, 'MOBA'),
(4, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `nama`) VALUES
(1, 'BRI'),
(2, 'Paypal'),
(3, 'Western Union'),
(4, 'BCA'),
(5, 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_booster` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `id_booster` int(11) NOT NULL,
  `id_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_booster`
--

CREATE TABLE `status_booster` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_booster`
--

INSERT INTO `status_booster` (`id`, `keterangan`) VALUES
(1, 'Available'),
(2, 'Not Available'),
(3, 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_boosting`
--

CREATE TABLE `tipe_boosting` (
  `id` int(11) NOT NULL,
  `nama_boosting` varchar(255) NOT NULL,
  `id_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_boosting`
--

INSERT INTO `tipe_boosting` (`id`, `nama_boosting`, `id_game`) VALUES
(1, 'Apex Legends Win Boosting', 1),
(2, 'Apex Legends Level Boost', 1),
(3, 'Apex Legends Kill Bost', 1),
(4, 'CS:GO Rank Boost', 0),
(5, 'CS:GO Win Boost', 0),
(6, 'Overwatch Rank Boost', 4),
(7, 'Overwatch Level Boost', 4),
(8, 'LoL Level Boost', 3),
(9, 'LoL Win Boost', 3),
(10, 'Dota 2 MMR Boost', 2),
(11, 'Dota 2 Level Boost', 2),
(12, 'Rocket League Rank Boost', 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_booster` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_tipe_boosting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `id_user`, `id_booster`, `id_game`, `price`, `id_tipe_boosting`) VALUES
(1, '2019-03-12', 1, 1, 1, 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'user', 'user', 'dadang', 'dadang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `kode`, `discount`) VALUES
(1, 'ABCDEFG', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booster`
--
ALTER TABLE `booster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booster` (`id_booster`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD UNIQUE KEY `id_booster` (`id_booster`,`id_game`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `status_booster`
--
ALTER TABLE `status_booster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_boosting`
--
ALTER TABLE `tipe_boosting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipe_boosting_ibfk_1` (`id_game`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booster` (`id_booster`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tipe_boosting` (`id_tipe_boosting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booster`
--
ALTER TABLE `booster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_booster`
--
ALTER TABLE `status_booster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipe_boosting`
--
ALTER TABLE `tipe_boosting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booster`
--
ALTER TABLE `booster`
  ADD CONSTRAINT `booster_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status_booster` (`id`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_booster`) REFERENCES `booster` (`id`);

--
-- Constraints for table `specialty`
--
ALTER TABLE `specialty`
  ADD CONSTRAINT `specialty_ibfk_1` FOREIGN KEY (`id_booster`) REFERENCES `booster` (`id`),
  ADD CONSTRAINT `specialty_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);

--
-- Constraints for table `tipe_boosting`
--
ALTER TABLE `tipe_boosting`
  ADD CONSTRAINT `tipe_boosting_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_booster`) REFERENCES `booster` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_tipe_boosting`) REFERENCES `tipe_boosting` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
