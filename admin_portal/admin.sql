-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 09:11 PM
-- Server version: 5.7.42-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant_detail`
--

CREATE TABLE `accountant_detail` (
  `id` int(11) NOT NULL,
  `admno` varchar(250) NOT NULL,
  `frtn` varchar(250) NOT NULL,
  `lstn` varchar(250) NOT NULL,
  `gen` varchar(250) NOT NULL,
  `dobe` varchar(250) NOT NULL,
  `blgp` varchar(250) NOT NULL,
  `regin` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `teapass` varchar(250) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `ponh` varchar(250) NOT NULL,
  `facd` varchar(250) NOT NULL,
  `insd` varchar(250) NOT NULL,
  `twitd` varchar(250) NOT NULL,
  `mesae` varchar(250) NOT NULL,
  `uspoto` varchar(250) NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant_detail`
--

INSERT INTO `accountant_detail` (`id`, `admno`, `frtn`, `lstn`, `gen`, `dobe`, `blgp`, `regin`, `mail`, `teapass`, `adres`, `ponh`, `facd`, `insd`, `twitd`, `mesae`, `uspoto`, `save_time`) VALUES
(4, 'ACNT-264', 'gajodhar', 'Kumar', '', '2023-12-16', '', '', 'kishansiku97@gmail.com', '84097', 'Gautam Budh Nagar , Greater Noida , Uttarpradesh', '08541934685', 'facebook.com', 'instagram.com', 'twitter.com', 'hlo i am a good teacher', '', '2023-12-17 18:08:46'),
(6, '1', 'ram', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2023-12-18 10:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `logo`, `submit_time`) VALUES
(7, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:40:29'),
(8, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:46:49'),
(9, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:48:11'),
(10, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:48:53'),
(11, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:49:34'),
(12, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-16 22:50:54'),
(13, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-19 15:23:00'),
(14, 'http://localhost/admission_plateform/uploads/', '2023-12-19 15:24:36'),
(15, 'http://localhost/admission_plateform/uploads/', '2023-12-19 15:24:39'),
(16, 'http://localhost/admission_plateform/uploads/download.png', '2023-12-19 15:24:49'),
(17, 'http://localhost/admission_plateform/../uploads/download.png', '2023-12-19 15:25:30'),
(18, 'http://localhost/admission_plateform/../uploads/download.png', '2023-12-19 15:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `mainbody`
--

CREATE TABLE `mainbody` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `about` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainbody`
--

INSERT INTO `mainbody` (`id`, `name`, `about`, `image`, `upload_time`) VALUES
(5, 'saraswati shishu vidya mandir ', 'turaha patti taadwa tola , viswas siriya , bettiah bihar', '', '2023-12-16 23:23:33'),
(6, 'saraswati shishu mandir', 'viswas siriya ', '', '2023-12-16 23:26:07'),
(7, 'saraswati shishu vidya mandir ', 'turaha patti taadwa tola , viswas siriya , bettiah bihar', 'http://localhost/admission_plateform/uploads/download.png', '2023-12-17 11:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `heading_notice` varchar(250) NOT NULL,
  `description_notice` varchar(250) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `heading_notice`, `description_notice`, `upload_time`) VALUES
(1, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:27:00'),
(2, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:27:09'),
(3, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant_detail`
--
ALTER TABLE `accountant_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admno` (`admno`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainbody`
--
ALTER TABLE `mainbody`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant_detail`
--
ALTER TABLE `accountant_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mainbody`
--
ALTER TABLE `mainbody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
