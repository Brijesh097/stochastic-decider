-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 09:47 AM
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
(4, 'Cara Delevingne', 'subscriber', 'cara@luckydraw.com', 2147483647, '$2y$12$ozo/6q.6o3oZxDgBS1SU9eBm/2TTNHLniz2ql52WTI0yhUOp4lFve', 'Mercy.jpg'),
(5, 'Eminem', 'subscriber', 'eminem@luckdraw.com', 192837465, '$2y$12$YMQ7k5vn1G6ysATnNfEnhuYcpJzgmQIIIHfKo5dxSxB4Fadj5GRy6', 'Black Apple Logo 01.jpg'),
(9, 'studyleague', 'admin', 'studyleague@gmail.com', 0, '$2y$12$DO6J8XYkvvkHc7mzPUzEwOfjTA8NWmMqnwj1izoz1fpnVcr77vunC', ''),
(12, 'asd', 'subscriber', 'sad@gmail.com', 231, '$2y$12$/RMAz/MlZqyML9GHFJsOTOQDn9dWZU8YBQjrdyTIXDPq4qdcX4SAe', ''),
(13, 'prashant', 'subscriber', 'prashantsharma@gmail.com', 2147483647, '$2y$12$lFttbsmDaPFvZ69m5dZtpu/NbSzLkzMU7ubqlj6Jsecbj.nt8K21u', 'concert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `message`) VALUES
(1, 'asd', 'sad@gmail.com', 'asdada'),
(2, 'asd', 'sad@gmail.com', 'asdada'),
(3, 'asd', 'sad@gmail.com', 'asdada');

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
(20, 'Jan', '12', '2019'),
(21, 'Feb', '1', '2019'),
(22, 'Jan', '5', '2019'),
(23, 'Jan', '5', '2019'),
(24, 'Feb', '5', '2019'),
(25, 'Jan', '2', '2019'),
(26, 'Jan', '2', '2019'),
(27, 'Jan', '2', '2019'),
(28, 'Jan', '2', '2019'),
(29, 'Jan', '2', '2019'),
(30, 'Jan', '2', '2019'),
(31, 'Jan', '2', '2019'),
(32, 'Jan', '2', '2019'),
(33, 'Jan', '2', '2019'),
(34, 'Jan', '2', '2019');

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
(127, 'Cara Delevingne', 'cara@luckydraw.com', 'Mercy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `prize_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
