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
-- Database: `shorty`
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


CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) DEFAULT NULL,
  `replies` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
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


INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(2, 'Why should I use a link shortener?', ' Link shorteners are useful for several reasons. They make long URLs more manageable and easier to share, particularly on platforms with character limitations like social media.'),
(3, ' Can I delete or edit a shortened URL?', ' Unfortunately, once a URL is shortened using our service, it cannot be edited or deleted. We recommend double-checking the URL before shortening it to avoid any inconveniences later.'),
(4, 'hi', 'hey shorty user!!'),
(5, 'what does this website do?', 'Hi! This website shortens URL of any Webpage and the best part - ITS FREE!'),
(6, 'what is the advantage of this service?', 'The advantage is that your link will be shorter. This is important for platforms having character limit, like twitter. Type "example" to get an example'),
(7, 'advantage', 'The advantage is that your link will be shorter. This is important for platforms having character limit, like twitter. Type "example" to get an example'),
(8, 'what is the advantage', 'The advantage is that your link will be shorter. This is important for platforms having character limit, like twitter. Type "example" to get an example'),
(9, 'help', 'Sure! This website shortens any link. This can be the URL of a website, a link to a youtube video, and all other possibilities. Type any of the following to get more info: 1.time 2.price 3.example 4.another example 5.advantage'),
(10, 'price?', 'This is the best part: ITS FREE!!'),
(11, 'what is the price?', 'This is the best part: ITS FREE!!'),
(12, 'what is the cost?', 'This is the best part: ITS FREE!!'),
(13, 'cost?', 'This is the best part: ITS FREE!!'),
(14, 'how much per link?', 'This is the best part: ITS FREE!!'),
(15, 'is it free?', 'YES! This service is absolutely Free!'),
(16, 'How much time does it take?', 'Within the blink of an eye! Its fast!'),
(17, 'time?', 'Within the blink of an eye! Its fast!'),
(18, 'fast?', 'Within the blink of an eye! Its fast!'),
(19, 'Is it slow?', 'Within the blink of an eye! Its fast!'),
(20, 'is it anonymous', "YES! it is 100 % anonymous. This is an open source project. Don't worry !"),
(21, 'privacy', "It is 100% anonymous. Don't worry!"),
(22, 'is data stored?', 'No data about the user is stored!'),
(23, 'can others see my data?','No, your data is 100% private. No worries!'),
(24, 'is it safe?', 'YES it is absolutely safe! It is an open source project. No worries !'),
(25, 'is it legal?', 'YES it is legal. It is an open source project. No worries!'),
(26, 'is it illegal?', 'NO, it is ABSOLUTELY legal. It is an open source project. No worries!'),
(27, 'thanks', "you're Welcome!"),
(28, 'example', 'Original: https://www.youtube.com/watch?v=dQw4w9WgXcQ , Short Version: http://shrty.rf.gd/zvUci'),
(29, 'give me an example', 'Original: https://www.youtube.com/watch?v=dQw4w9WgXcQ , Short Version: http://shrty.rf.gd/zvUci'),
(30, 'show me', 'Original: https://www.youtube.com/watch?v=dQw4w9WgXcQ , Short Version: http://shrty.rf.gd/zvUci'),
(31, 'Show me an example', 'Original: https://www.youtube.com/watch?v=dQw4w9WgXcQ , Short Version: http://shrty.rf.gd/zvUci'),
(32, 'usecase', 'Original: https://www.youtube.com/watch?v=dQw4w9WgXcQ , Short Version: http://shrty.rf.gd/zvUci'),
(33, 'another example', 'Sure, here is another example: https://www.youtube.com/watch?v=ZyhrYis509A&pp=ygURaSBtIGEgYmFyYmllIGdpcmw%3D Short: http://shrty.rf.gd/d3AtC'),
(34, 'how short', 'It varies. But it will be smaller than the given URL'),
(35, 'length?', 'It varies. But it will be smaller than the given URL'),
(36, 'who is Apoorv', 'Apoorv is an aspiring Software Development Engineer (SDE) having strong technical and a background in Full Stack Development (Web). He is also the creator of this website'),
(37, 'about', 'To help you grow, scale, and dominate through the power of link management. Whether you’re sharing one link or millions, Shorty lets you personalize, share, and track your content links, while capturing data with every click'),
(38, 'about shorty project', 'To help you grow, scale, and dominate through the power of link management. Whether you’re sharing one link or millions, Shorty lets you personalize, share, and track your content links, while capturing data with every click'),
(39, 'social profile of Apoorv', 'Here you go: Github: https://github.com/apoorvaron Twitter: https://twitter.com/AronApoorv Linkedin: https://www.linkedin.com/in/apoorv-aron-742882212/'),
(40, 'redirect', 'Sure: http://shrty.rf.gd/user/login'),
(41, 'redirect me to login page', 'Sure: http://shrty.rf.gd/user/login'),
(42, 'show login page', 'Sure: http://shrty.rf.gd/user/login'),
(43, 'login page', 'Sure: http://shrty.rf.gd/user/login'),
(44, 'login', 'Sure: http://shrty.rf.gd/user/login'),
(45, 'goto login page','Sure: http://shrty.rf.gd/user/login'),
(46, 'Upload profile pic in register page meaning', 'This is your account picture. It will be shown when you are logged in'),
(47, 'profile pic','This is your account picture. It will be shown when you are logged in'),
(48, 'profile pic meaning', 'This is your account picture. It will be shown when you are logged in'),
(49, 'can i customize link without registering', 'No, You must be registered user in order to customize links'),
(50, 'how are you', 'Hey shorty user! I am fine, How are you? Nice to have you here'),
(51, 'hello', 'Hey shorty user ! Nice to have you here'),
(52, 'Hello', 'Hey shorty user ! Nice to have you here'),
(53, 'hola', 'Hey shorty user ! Nice to have you here'),
(54, 'Hi', 'Hey shorty user ! Nice to have you here'),
(55, 'How are you', 'Hey shorty user ! Nice to have you here'),
(56, 'hlw', 'Hey shorty user ! Nice to have you here');







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

ALTER TABLE `chatbot`
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
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `linkID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
