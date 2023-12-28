-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2023 at 08:31 PM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant_detail`
--

CREATE TABLE `accountant_detail` (
  `id` int NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accountant_detail`
--

INSERT INTO `accountant_detail` (`id`, `admno`, `frtn`, `lstn`, `gen`, `dobe`, `blgp`, `regin`, `mail`, `teapass`, `adres`, `ponh`, `facd`, `insd`, `twitd`, `mesae`, `uspoto`, `save_time`) VALUES
(4, 'ACNT-264', 'gajodhar', 'Kumar', '', '2023-12-16', '', '', 'kishansiku97@gmail.com', '84097', 'Gautam Budh Nagar , Greater Noida , Uttarpradesh', '08541934685', 'facebook.com', 'instagram.com', 'twitter.com', 'hlo i am a good teacher', '', '2023-12-17 18:08:46'),
(6, '1', 'ram', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2023-12-18 10:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `add_new_students`
--

CREATE TABLE `add_new_students` (
  `id` int NOT NULL,
  `first_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blood_group` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_occupation` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_occupation` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pasword` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admission_date` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admission_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `section` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `roll` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adress` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitter_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `short_bio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `upload_student_hoto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_new_students`
--

INSERT INTO `add_new_students` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `blood_group`, `religion`, `father_occupation`, `mother_occupation`, `email`, `pasword`, `admission_date`, `admission_id`, `class`, `section`, `roll`, `adress`, `phone`, `facebook_id`, `instagram_id`, `twitter_id`, `short_bio`, `upload_student_hoto`) VALUES
(1, '$FirstName', '$LastName', ' $FatherName', '$mother_name', '$DateOfBorth', '$Gender', '$BloodGroop', '$Religion', '$FatherOccuapation', '$MotherOccuapation', '$Email', '$password', '$AdmissionDate', '$AdmissionId ', '$Class', '$Section', '$RollNo', '$Address ', '$PhoneNo', '$FacebookId', '$InstagramID', '$TwitterId', '$TwitterId', '$fullImageAddress'),
(2, 'chandan kumar', 'chaubey', ' Anil chaubey', 'Bibha devi', '', 'Male', 'A+', 'Hindu', 'fgfdbd', 'vdvdfv', '', 'Admin1234#@', '2023-12-19', 'wefefefr ', 'Nursery', '', '1432', 'chennai, tamilnadu 600073 ', '9771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(3, 'chandan kumar', 'chaubey', ' Anil chaubey', 'Bibha devi', '', 'Female', 'A+', 'Islam', 'fgfdbd', 'vdvdfv', 'root@gmail.com', 'Admin1234#@', '2023-12-19', 'wefefefr ', 'Nursery', '', '1432', 'chennai, tamilnadu 600073 ', '09771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(4, 'chandan kumar', 'chaubey', ' Anil chaubey', 'Bibha devi', '', 'Female', 'A+', 'Islam', 'fgfdbd', 'vdvdfv', 'root@gmail.com', 'Admin1234#@', '2023-12-19', 'wefefefr ', 'Nursery', '', '1432', 'chennai, tamilnadu 600073 ', '09771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(5, 'chandan kumar', 'chaubey', ' Anil chaubey', 'Bibha devi', '', 'Female', 'A+', 'Islam', 'fgfdbd', 'vdvdfv', 'root@gmail.com', 'Admin1234#@', '2023-12-19', 'wefefefr ', 'Nursery', '', '1432', 'chennai, tamilnadu 600073 ', '09771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(6, 'akriti', 'kumari', ' hjdhsyus', 'dfsfss', '', 'Female', 'A-', 'Islam', 'fgfdbdds', 'dfsdfsfsf', 'root23@gmail.com', 'Admin1234#@', '2023-12-19', 'wefefefre3edw ', 'Nursery', '', '1432 ', 'fsdfdsfsfs ', '9771672650', 'http://localhost/phpmyadmin/index.edswphp?route=/table/structure/save', 'http://localhost/phpmyadmindsfsf/index.php?route=/table/structure/save', 'http://localhost/phpmyadminefwd/index.php?route=/table/structure/save', 'http://localhost/phpmyadminefwd/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(7, 'dgdfgd', 'dfgdfgdg', ' fffd', 'dfsdfdf', '', 'Male', 'A-', 'Hindu', 'sdfsdfsf', 'dfsdfsfsfs', 'rootewrer@gmail.com', 'Admin1234#@', '2023-12-19', 'wefefefr ', 'Play', '', '1432', 'chennai, tamilnadu 600073 ', '09771572650', 'http://localhost/phpmyadmin/index.phpfdroute=/table/structure/savefd', 'http://localhost/phpmyadmin/index.phdfp?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=ftable/structure/savefff', 'http://localhost/phpmyadmin/index.php?route=ftable/structure/savefff', 'http://localhost/admission_platform/uploads/102183504.png'),
(8, 'robin bhaitya', 'kjdhd', ' dfddf', 'fddd', '', 'Male', 'A+', 'Christian', 'fdfd', 'dfddf', 'root123@gmail.com', 'Admin1234#@sdfsf', '2023-12-27', 'grgfeg ', 'Nursery', '', '1231', 'rgergeref ', '09771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png'),
(9, 'eww', 'werwerwe', ' werwerw', 'ewwerw', '2023-12-27', 'Female', 'A+', 'Christian', 'fgfdbdds', 'vdvdfv', 'rootwefwdew@gmail.com', 'Admin1234#@dfef', '2023-12-27', 'fds ', 'One', '', '12', 'rgedf ', '09771572650', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmindsfsf/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/phpmyadmin/index.php?route=/table/structure/save', 'http://localhost/admission_platform/uploads/102183504.png');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int NOT NULL,
  `logo` varchar(250) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `about` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mainbody`
--

INSERT INTO `mainbody` (`id`, `name`, `about`, `image`, `upload_time`) VALUES
(5, 'saraswati shishu vidya mandir ', 'turaha patti taadwa tola , viswas siriya , bettiah bihar', '', '2023-12-16 23:23:33'),
(6, 'saraswati shishu mandir', 'viswas siriya ', '', '2023-12-16 23:26:07'),
(7, 'saraswati shishu vidya mandir ', 'turaha patti taadwa tola , viswas siriya , bettiah bihar', 'http://localhost/admission_plateform/uploads/download.png', '2023-12-17 11:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `id` int NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `details` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `posted_by` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dinak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`id`, `title`, `details`, `assigned_role`, `posted_by`, `dinak`) VALUES
(1, 'jdshsjs', 'sdfss', 'sdfsdf', 'sdsdcs', '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int NOT NULL,
  `heading_notice` varchar(250) NOT NULL,
  `description_notice` varchar(250) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `heading_notice`, `description_notice`, `upload_time`) VALUES
(1, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:27:00'),
(2, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:27:09'),
(3, 'school leave news', 'school will be close of 10 year', '2023-12-17 11:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `details` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `posted_by` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dinak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `details`, `assigned_role`, `posted_by`, `dinak`) VALUES
(1, 'sfsdfsf', 'sdfsfssd', 'fdfsdf', 'dsfs', '2023-12-20'),
(2, 'sfsdfsf', 'sdfsfssd', 'fdfsdf', 'dsfs', '2023-12-20'),
(3, 'chanda', 'chandah', 'chandan', 'chandan', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `staffANDworkers`
--

CREATE TABLE `staffANDworkers` (
  `id` int NOT NULL,
  `admno` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `frtn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lstn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gen` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dobe` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blgp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regin` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teapass` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ponh` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `insd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mesae` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uspoto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `admno` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `frtn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lstn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gen` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dobe` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blgp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regin` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teapass` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ponh` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `insd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mesae` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uspoto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `admno`, `frtn`, `lstn`, `gen`, `dobe`, `blgp`, `regin`, `mail`, `teapass`, `adres`, `ponh`, `facd`, `insd`, `twitd`, `mesae`, `uspoto`, `save_time`) VALUES
(1, '20scse1010605', 'Bipul', 'Kumar', 'Male', '03-02-2002', 'O+', 'gaya', 'bipulkumar64767@gmail.com', 'Infy@123', 'Juri tola bechubigha', '6202825645', 'bipul.com', 'bipul_03', 'bipul.twitter', 'I am a student', 'photo isnt available', '2023-12-20 12:59:10'),
(2, 'ADM001', 'John', 'Doe', 'Male', '1990-01-01', 'B+', 'Region1', 'john.doe@example.com', 'password123', '123 Main St', '1234567890', 'Faculty1', 'Institute1', 'TwitterHandle1', 'Message1', 'photo_url1', '2023-12-20 13:27:39'),
(3, 'ADM002', 'Jane', 'Smith', 'Female', '1995-05-15', 'AB', 'Region2', 'jane.smith@example.com', 'securepassword', '456 Oak St', '9876543210', 'Faculty2', 'Institute2', 'TwitterHandle2', 'Message2', 'photo_url2', '2023-12-20 13:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_trans`
--

CREATE TABLE `student_trans` (
  `Sys_no` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adm_no` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fee_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trans_mode` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trans_no` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_trans`
--

INSERT INTO `student_trans` (`Sys_no`, `name`, `adm_no`, `fee_type`, `trans_mode`, `trans_no`, `amount`, `time`) VALUES
(7, 'Bipul Kumar', '20scs', 'tuition', 'upi', '3141378637', '400.00', '2023-12-20 16:30:51'),
(8, 'Bipul Kumar', '20scse1010605', 'tuition', 'upi', '23704870274', '400.00', '2023-12-27 16:10:03'),
(9, 'Bipul Kumar', '20scse1010605', 'tuition', 'upi', '43534', '3423', '2023-12-27 16:21:18'),
(10, 'Bipul Kumar', '4353', 'tuition', 'upi', '4396', '452', '2023-12-27 16:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int NOT NULL,
  `admno` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `frtn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lstn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gen` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dobe` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blgp` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regin` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teapass` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ponh` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `insd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mesae` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uspoto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `admno`, `frtn`, `lstn`, `gen`, `dobe`, `blgp`, `regin`, `mail`, `teapass`, `adres`, `ponh`, `facd`, `insd`, `twitd`, `mesae`, `uspoto`, `save_time`) VALUES
(1, 'ACCNT-646', 'Kishan', 'kumar\r\n\r\n\r\n\r\n', 'male', '03/02/2002', 'O+', 'HINDU', 'kishan.kesharwani@gmail.com', 'priye_bhavi', 'chuha bazar', '6202825645', 'kishan_ka_facebook', 'sexy_kishan', 'badmoosh_kishan', 'I am gunda amongs teachers', 'PICTURE NAHI H ', '2023-12-18 12:30:42');

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
-- Indexes for table `add_new_students`
--
ALTER TABLE `add_new_students`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffANDworkers`
--
ALTER TABLE `staffANDworkers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_trans`
--
ALTER TABLE `student_trans`
  ADD PRIMARY KEY (`Sys_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant_detail`
--
ALTER TABLE `accountant_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_new_students`
--
ALTER TABLE `add_new_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mainbody`
--
ALTER TABLE `mainbody`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffANDworkers`
--
ALTER TABLE `staffANDworkers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_trans`
--
ALTER TABLE `student_trans`
  MODIFY `Sys_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
