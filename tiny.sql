-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 17, 2022 at 05:04 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiny`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter_table`
--

INSERT INTO `counter_table` (`id`, `ip_address`, `visit_date`) VALUES
(2, '12:!2:12:12', '2022-07-26 11:13:20'),
(3, '::1', '2022-07-26 11:16:14'),
(4, '54:45:45', '2022-07-26 11:17:05'),
(5, '54:54:54:54', '2022-07-26 11:18:20'),
(6, '54:54:24:54', '2022-08-07 19:19:21'),
(7, '54:54:24:54', '2022-08-07 19:19:21'),
(8, '54:54:24:54', '2022-08-07 19:19:21'),
(9, '54:54:24:54', '2022-08-07 19:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `linkID` int(255) NOT NULL,
  `uniqueNo` varchar(255) DEFAULT NULL,
  `linkIsFor` varchar(255) DEFAULT NULL,
  `originalLink` varchar(255) DEFAULT NULL,
  `shortenLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`linkID`, `uniqueNo`, `linkIsFor`, `originalLink`, `shortenLink`) VALUES
(1, 'shorty', NULL, 'https://meet.google.com/', 'V15Ez'),
(6, 'shorty', NULL, 'https://code.tutsplus.com/tutorials/10-best-php-url-shortener-scripts--cms-28675', 'czox6');

-- --------------------------------------------------------

--
-- Table structure for table `total_clicks`
--

CREATE TABLE `total_clicks` (
  `id` int(255) NOT NULL,
  `total_clicks` int(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_clicks`
--

INSERT INTO `total_clicks` (`id`, `total_clicks`) VALUES
(1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uniqueNo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT '../assets/img/inside-header-logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uniqueNo`, `username`, `email`, `password`, `img`) VALUES
('2205f7', '01da3d', 'apoorv.aron02@gmail.com', 'd0e8ee0c2de7ff843ae1fe69abfa7e16', '../assets/img/inside-header-logo.png'),
('c99fc8', '06a7d2', 'wertsdfygjh@gmail.com', 'f61c64613a6ea4d4d8c0349815e4bd09', '../assets/user-img/1660224834pic.jpg'),
('db94c5', '3bf838', 'rwetretf@gmail.com', '61893e6ab95c05a0b1c20387da0d0ded', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEZ-l9cc182qgeeI13xo4iv2ZimdcXeYe1Sg&usqp=CAU'),
('eba198', 'ecb70b', 'qwert@gmail.com', '3875a0e32aa168eeb4b95c72bc070071', '../assets/user-img/1660224659pic.jpg'),
('shorty', 'shorty', 'shorty@gmail.com', '62b5fe5724b08db455672377fb31e95b', '../assets/user-img/1659983584admin-img.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`linkID`),
  ADD UNIQUE KEY `shortenLink` (`shortenLink`);

--
-- Indexes for table `total_clicks`
--
ALTER TABLE `total_clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `uniqueNo` (`uniqueNo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `linkID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
