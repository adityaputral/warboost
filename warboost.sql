-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 09:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
  `path_profilpic` varchar(255) NOT NULL,
  `about_me` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booster`
--

INSERT INTO `booster` (`id`, `username`, `password`, `nama`, `ingame_nickname`, `tanggal_lahir`, `nomor_hp`, `email`, `rating`, `id_status`, `path_profilpic`, `about_me`) VALUES
(1, 'testing', 'testing', 'test', 'anonymous', '2018-07-08', '08123456789', 'testing@gmail.com', 4, 2, 'anonymous-test.jpg', ''),
(2, 'deaslea1', 'T8YiLr', 'Delphinia Easlea', 'Delphinia', '2018-11-30', '8562087854', 'deaslea1@hud.gov', 2, 1, 'anonymous-test.jpg', ''),
(3, 'kflade2', '2ekzeo3pC', 'Kermit Flade', 'Kermit', '2018-10-28', '6337574264', 'kflade2@phoca.cz', 5, 1, 'anonymous-test.jpg', ''),
(4, 'anethercott3', 'wcLqwgpW', 'Ardella Nethercott', 'Ardella', '2018-12-04', '8651572862', 'anethercott3@macromedia.com', 5, 2, 'anonymous-test.jpg', ''),
(5, 'emaddern4', 'Xg2cak2941X', 'Edy Maddern', 'Edy', '2018-09-22', '2305319781', 'emaddern4@com.com', 2, 2, 'anonymous-test.jpg', ''),
(6, 'lnunn5', 'tduDCLyra', 'Laina Nunn', 'Laina', '2019-02-05', '8886489082', 'lnunn5@quantcast.com', 4, 1, 'anonymous-test.jpg', ''),
(7, 'fgrocock6', 'OrujQAZx0', 'Farrand Grocock', 'Farrand', '2018-04-25', '3743512207', 'fgrocock6@quantcast.com', 2, 3, 'anonymous-test.jpg', ''),
(8, 'mstiggers7', 'GCZAVAy8h', 'Maddy Stiggers', 'Maddy', '2019-03-20', '5321405399', 'mstiggers7@squidoo.com', 1, 2, 'anonymous-test.jpg', ''),
(9, 'whulcoop8', 'kVE6BHJTZ', 'Wenona Hulcoop', 'Wenona', '2018-08-20', '5062978637', 'whulcoop8@goodreads.com', 4, 1, 'anonymous-test.jpg', ''),
(10, 'abeetlestone9', '4sZLYHgx2y', 'Althea Beetlestone', 'Althea', '2019-02-12', '8608650364', 'abeetlestone9@joomla.org', 1, 3, 'anonymous-test.jpg', ''),
(11, 'dwrighta', 'Vj4DBSy7WrkG', 'Donetta Wright', 'Donetta', '2018-06-05', '1538276683', 'dwrighta@topsy.com', 5, 3, 'anonymous-test.jpg', ''),
(12, 'tyardyb', 'H1bhonqydnC', 'Teresita Yardy', 'Teresita', '2018-09-12', '9833379703', 'tyardyb@typepad.com', 1, 2, 'anonymous-test.jpg', ''),
(13, 'erennisonc', 'pELH2rnn87Q', 'Evvy Rennison', 'Evvy', '2018-12-17', '4498769105', 'erennisonc@uiuc.edu', 2, 1, 'anonymous-test.jpg', ''),
(14, 'vguppeyd', 'ziwQLZ7qA', 'Vite Guppey', 'Vite', '2018-05-10', '8135431678', 'vguppeyd@auda.org.au', 4, 3, 'anonymous-test.jpg', ''),
(15, 'qcotmoree', '2FWry2b', 'Quintus Cotmore', 'Quintus', '2019-02-21', '3796768280', 'qcotmoree@npr.org', 1, 1, 'anonymous-test.jpg', ''),
(16, 'mgowersf', 'kCNDhHFlDhRW', 'Matelda Gowers', 'Matelda', '2019-02-19', '4963689579', 'mgowersf@sina.com.cn', 4, 1, 'anonymous-test.jpg', ''),
(17, 'bhubnerg', 's7cq6vzYf', 'Buffy Hubner', 'Buffy', '2019-02-12', '4857476720', 'bhubnerg@sfgate.com', 5, 1, 'anonymous-test.jpg', ''),
(18, 'warondelh', 'f9Upixbpp', 'Wilbur Arondel', 'Wilbur', '2018-06-02', '9864392552', 'warondelh@chronoengine.com', 4, 1, 'anonymous-test.jpg', ''),
(19, 'ajandeli', 'JRZa0yNR9m4', 'Art Jandel', 'Art', '2018-05-13', '8123032415', 'ajandeli@sakura.ne.jp', 1, 3, 'anonymous-test.jpg', ''),
(20, 'lbarnardj', 'rTzXPXdHD0', 'Linnie Barnard', 'Linnie', '2019-01-31', '3781587177', 'lbarnardj@naver.com', 3, 2, 'anonymous-test.jpg', ''),
(21, 'kmarchantk', 'zoXVkJ', 'Krisha Marchant', 'Krisha', '2018-08-01', '2316027768', 'kmarchantk@people.com.cn', 3, 2, 'anonymous-test.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_booster` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `id_tipe_boosting` int(11) NOT NULL,
  `current_rank` int(11) DEFAULT NULL,
  `desired_rank` int(11) DEFAULT NULL,
  `total_win` int(11) DEFAULT NULL,
  `current_level` int(11) DEFAULT NULL,
  `desired_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `jumlah_level` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `base_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `jumlah_level`, `id_game`, `base_price`) VALUES
(1, 1, 4, '20000'),
(2, 1, 1, '20000'),
(3, 1, 3, '20000'),
(4, 1, 2, '20000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `nama_payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `nama_payment`) VALUES
(1, 'BRI'),
(2, 'Paypal'),
(3, 'Western Union'),
(4, 'BCA'),
(5, 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id_progress` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id_progress`, `id_status`, `notes`, `id_transaksi`) VALUES
(3, 2, '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id_rank` int(11) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `id_game` int(11) NOT NULL,
  `base_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id_rank`, `rank`, `id_game`, `base_price`) VALUES
(1, 'Silver 1', 0, '20000'),
(2, 'Silver 2', 0, '70000'),
(3, 'Silver 3', 0, '120000'),
(4, 'Silver 4', 0, '170000'),
(5, 'Silver Elite', 0, '220000'),
(6, 'Silver Elite Master', 0, '270000'),
(7, 'Gold Nova 1', 0, '320000'),
(8, 'Gold Nova 3', 0, '370000'),
(9, 'Gold Nova Master', 0, '420000'),
(10, 'Master Guardian', 0, '470000'),
(11, 'Master Guardian 2', 0, '520000'),
(12, 'Master Guardian Elite', 0, '570000'),
(13, 'Distinguished Master Guardian', 0, '620000'),
(14, 'Legendary Eagle', 0, '670000'),
(15, 'Legendary Eagle Master', 0, '720000'),
(16, 'Supreme Master First Class', 0, '800000'),
(17, 'Bronze 1', 5, '40000'),
(18, 'Bronze 2', 5, '90000'),
(19, 'Bronze 3', 5, '140000'),
(20, 'Silver 1', 5, '190000'),
(21, 'Silver 2', 5, '240000'),
(22, 'Silver 3', 5, '290000'),
(23, 'Gold 1', 5, '340000'),
(24, 'Gold 2', 5, '390000'),
(25, 'Gold 3', 5, '440000'),
(26, 'Platinum 1', 5, '12'),
(27, 'Platinum 2', 5, '12'),
(28, 'Platinum 3', 5, '12'),
(29, 'Diamond 1', 5, '21'),
(30, 'Diamond 2', 5, '21'),
(31, 'Diamond 3', 5, '21'),
(32, 'Champion 1', 5, '21'),
(33, 'Champion 2', 5, '21'),
(34, 'Champion 3', 5, '21');

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

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id_booster`, `id_game`) VALUES
(1, 5),
(2, 2),
(3, 3),
(4, 4),
(5, 0),
(6, 1),
(7, 0),
(8, 2),
(9, 3),
(10, 1),
(11, 4),
(12, 5),
(13, 0),
(14, 1),
(15, 2),
(16, 3),
(17, 4),
(18, 5),
(19, 0),
(20, 0),
(21, 1);

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
-- Table structure for table `status_progress_boosting`
--

CREATE TABLE `status_progress_boosting` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_progress_boosting`
--

INSERT INTO `status_progress_boosting` (`id`, `keterangan`) VALUES
(1, 'New'),
(2, 'On Progress'),
(3, 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_boosting`
--

CREATE TABLE `tipe_boosting` (
  `id_tipeboosting` int(11) NOT NULL,
  `nama_boosting` varchar(255) NOT NULL,
  `id_game` int(11) NOT NULL,
  `jenis_boost` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_boosting`
--

INSERT INTO `tipe_boosting` (`id_tipeboosting`, `nama_boosting`, `id_game`, `jenis_boost`) VALUES
(1, 'Apex Legends Win Boosting', 1, 2),
(2, 'Apex Legends Level Boost', 1, 1),
(3, 'CS:GO Rank Boost', 0, 0),
(6, 'Overwatch Level Boost', 4, 1),
(7, 'LoL Level Boost', 3, 1),
(10, 'Dota 2 Level Boost', 2, 1),
(11, 'Rocket League Rank Boost', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaction` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_booster` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `id_tipe_boosting` int(11) NOT NULL,
  `current_rank` int(11) DEFAULT NULL,
  `desired_rank` int(11) DEFAULT NULL,
  `total_win` int(11) DEFAULT NULL,
  `current_level` int(11) DEFAULT NULL,
  `desired_level` int(11) DEFAULT NULL,
  `username_akun` varchar(255) NOT NULL,
  `password_akun` varchar(50) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaction`, `tanggal`, `id_user`, `id_booster`, `id_game`, `price`, `id_tipe_boosting`, `current_rank`, `desired_rank`, `total_win`, `current_level`, `desired_level`, `username_akun`, `password_akun`, `notes`) VALUES
(7, '2019-04-24', 4, 1, 5, '60.72', 11, 17, 25, NULL, NULL, NULL, 'dnawkndkw', 'kdamkmdwak', 'dakwmdkam');

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
(1, 'user', 'user', 'dadang', 'dadang@gmail.com'),
(2, 'tester', 'f5d1278e8109edd94e1e4197e04873b9', 'adit', 'akdmwka@gmail.com'),
(3, 'admin11', 'admin11', 'Aditya', 'kwdamdwa@gmail.com'),
(4, 'Adminis', 'adminis', 'Aditya k', 'kwdamdwa@gmail.com'),
(5, 'teeess', 'tes', 'tes', 'teawa@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `win`
--

CREATE TABLE `win` (
  `id_win` int(11) NOT NULL,
  `jumlah_win` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `base_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `win`
--

INSERT INTO `win` (`id_win`, `jumlah_win`, `id_game`, `base_price`) VALUES
(1, 1, 1, '15000'),
(2, 2, 1, '27000'),
(3, 3, 1, '40000'),
(4, 5, 1, '70000'),
(5, 10, 1, '140000');

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
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id_progress`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id_rank`),
  ADD KEY `id_game` (`id_game`);

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
-- Indexes for table `status_progress_boosting`
--
ALTER TABLE `status_progress_boosting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_boosting`
--
ALTER TABLE `tipe_boosting`
  ADD PRIMARY KEY (`id_tipeboosting`),
  ADD KEY `tipe_boosting_ibfk_1` (`id_game`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_booster` (`id_booster`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tipe_boosting` (`id_tipe_boosting`),
  ADD KEY `current_rank` (`current_rank`),
  ADD KEY `desired_rank` (`desired_rank`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `win`
--
ALTER TABLE `win`
  ADD PRIMARY KEY (`id_win`),
  ADD KEY `id_game` (`id_game`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id_rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `id_tipeboosting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `win`
--
ALTER TABLE `win`
  MODIFY `id_win` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `level_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status_progress_boosting` (`id`),
  ADD CONSTRAINT `progress_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaction`);

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);

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
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_tipe_boosting`) REFERENCES `tipe_boosting` (`id_tipeboosting`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`current_rank`) REFERENCES `rank` (`id_rank`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`desired_rank`) REFERENCES `rank` (`id_rank`);

--
-- Constraints for table `win`
--
ALTER TABLE `win`
  ADD CONSTRAINT `win_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
