-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 07, 2022 at 10:56 AM
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
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `linkID` int(255) NOT NULL,
  `uniqueNo` varchar(255) NOT NULL,
  `linkIsFor` varchar(255) NOT NULL,
  `originalLink` varchar(1000) NOT NULL,
  `shortenLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`linkID`, `uniqueNo`, `linkIsFor`, `originalLink`, `shortenLink`) VALUES
(6, '2bc18f', 'sedfwrghg', 'http://localhost:8888/tiny/user/newLink.php?username=saksham7865@gmail.com&uno=2bc18f', '999cbf'),
(7, '2bc18f', 'efwrgetryt', 'http://localhost:8888/tiny/user/newLink.php?username=saksham7865@gmail.com&uno=2bc18f', '6cd2a7'),
(8, 'f1b8d2', 'efwretryth', 'http://localhost:8888/tiny/user/newLink.php?username=udit@gmail.com&uno=f1b8d2', '148c4d'),
(9, 'c23675', 'wersedtg', 'http://localhost:8888/tiny/user/newLink.php?username=a@gmail.com&uno=d06d90', 'cce39e'),
(10, 'd88fb1', 'defrtryht', 'http://localhost:8888/tiny/user/newLink.php?username=a@gmail.com&uno=d06d90', 'cce39e'),
(17, '97bf8e', 'fergdtfhg', 'http://localhost:8888/tiny/user/newLink.php?username=a@gmail.com&uno=d06d90', '398c07'),
(18, '97bf8e', 'wdertyhtg', 'http://localhost:8888/tiny/user/newLink.php?username=nid@gmail.com&uno=97bf8e', '0f5376');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uniqueNo` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uniqueNo`, `email`, `username`, `password`, `img`) VALUES
('f1b8d2', 'anu@gmail.com    ', 'anu@gmail.com', '0aa2aa1e30405cdb2325ab790e3c1776', '../assets/user-img/1659866239pic.jpg'),
('d88fb1', 'f@gmail.com', 'f@gmail.com', '0800518c30146a079a9b7e2e09247589', '../assets/user-img/1659867552pic.jpg'),
('97bf8e', 'nid@gmail.com', 'nid@gmail.com', 'bb4a405bdf12df826e430cf037a2de5d', '../assets/user-img/1659869179pic.jpg'),
('158755', 'plk1@gmail.com ', 'plk1@gmail.com', '0246c81d0f122acc8b35a4360f2a4023', '../assets/user-img/1659866102pic.jpg'),
('2bc18f', 'saksham@gmail.com ', 'saksham@gmail.com', 'f723aebcea1cb89dd5c058b446628105', '../assets/user-img/1659865969pic.jpg'),
('7689a8', 'suhani.j2002@gmail.com ', 'suhani.j2002@gmail.com', 'd0e8ee0c2de7ff843ae1fe69abfa7e16', '../assets/user-img/1659864911pic.jpg'),
('a7f11e', 'uditt@gmail.com ', 'uditt@gmail.com', '10a8d27a2fa2e2cce0f9c46fb55fd351', '../assets/user-img/1659865861IMG-20190604-WA0031.jpg'),
('c23675', 'zz@gmail.com  ', 'zz@gmail.com', '8df3bb0d05a08245b6140092b0a4a123', '../assets/user-img/1659867347pic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`linkID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uniqueNo` (`uniqueNo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `linkID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
