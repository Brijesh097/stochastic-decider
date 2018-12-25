-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 01:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luckydraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_role` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `user_role`, `email`, `contact`, `password`, `profile_photo`) VALUES
(3, 'Brijesh', 'admin', 'brijesh@luckydraw.com', 2147483647, '$2y$12$okXaX/N/OL/mgeQ1549s6eTiMZ3ymw2I8fECSWF8NJwrWRLiB60/G', 'Programmer 01.jpg'),
(4, 'Cara Delevingne', 'subscriber', 'cara@luckydraw.com', 2147483647, '$2y$12$ozo/6q.6o3oZxDgBS1SU9eBm/2TTNHLniz2ql52WTI0yhUOp4lFve', 'Black Apple Logo 01.jpg'),
(5, 'Eminem', 'subscriber', 'eminem@luckdraw.com', 192837465, '$2y$12$YMQ7k5vn1G6ysATnNfEnhuYcpJzgmQIIIHfKo5dxSxB4Fadj5GRy6', 'Mercy.jpg'),
(6, 'Archit', 'admin', 'Archit@luckydraw.com', 12345678, '$2y$12$kX3yJeTM0yeeutYTTx6TfOyxWGl6tS0MUr6Io2Le.qGIAdOg.aC2a', ''),
(7, 'aa', 'admin', 'aa@gmail.com', 0, '$2y$12$TDuz67uDX7J5/orz3wxQgOzcldc01.LtMWhvOX2/1So2v.8x8SHVu', ''),
(8, 'abc', 'subscriber', 'abc@gmail.com', 0, '$2y$12$E5uhiRf8FnW5aIjg.4GXIegvB7XySEwY9GoE2POpl.9KfYJdf46/q', '');

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `prize_id` int(3) NOT NULL,
  `prize_text` varchar(255) NOT NULL,
  `prize_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`prize_id`, `prize_text`, `prize_image`) VALUES
(14, 'Carrera GTS 911', 'carrera.jpg'),
(15, 'Space Travel', 'space_travel.jpg'),
(16, 'Norway Trip', 'norway.jpg'),
(17, 'Concert Ticket', 'concert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `month` text NOT NULL,
  `date` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `month`, `date`, `year`) VALUES
(1, 'november', '1', '2018'),
(3, 'december', '1', '2018'),
(4, 'december', '1', '2018'),
(5, 'Aug', '1', '2019'),
(6, 'Aug', '1', '2019'),
(7, 'Aug', '1', '2019'),
(8, 'Dec', '25', '2018'),
(9, 'Dec', '25', '2018'),
(10, 'Dec', '25', '2018'),
(11, 'Dec', '25', '2018'),
(12, 'Dec', '25', '2018'),
(13, 'Dec', '25', '2018'),
(14, 'Dec', '25', '2018'),
(15, 'Dec', '25', '2018'),
(16, 'Dec', '25', '2018'),
(17, 'Dec', '25', '2018'),
(18, 'Dec', '25', '2018'),
(19, 'Dec', '25', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `winner_id` int(3) NOT NULL,
  `winner_name` varchar(255) NOT NULL,
  `winner_email` varchar(255) NOT NULL,
  `winner_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`winner_id`, `winner_name`, `winner_email`, `winner_photo`) VALUES
(84, '', '', ''),
(85, 'Eminem', 'eminem@luckdraw.com', 'Mercy.jpg'),
(86, '', '', ''),
(87, 'Cara Delevingne', 'cara@luckydraw.com', 'Black Apple Logo 01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`prize_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`winner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `prize_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
