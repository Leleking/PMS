-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 10:34 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `inmate`
--

CREATE TABLE `inmate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `complexion` varchar(255) NOT NULL,
  `tribe` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `height` decimal(6,2) NOT NULL,
  `weight` decimal(6,2) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmate`
--

INSERT INTO `inmate` (`id`, `name`, `age`, `complexion`, `tribe`, `country`, `height`, `weight`, `occupation`, `religion`, `education`, `features`, `image`, `timestamp`, `user_id`) VALUES
(1, 'samuel', 0, '', '', '', '0.00', '0.00', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(2, 'samuel', 0, '', '', '', '0.00', '0.00', '', '', '', '', '59436746_194x291.jpeg', '2018-02-23 13:34:18', 0),
(3, 'samuel', 50, 'dark', 'Ga', 'con', '11.00', '4.00', '654654', '65465465', '54654654', '5464564', '', '2018-02-23 13:34:18', 0),
(4, 'samuel', 56, '', '', '', '0.00', '0.00', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(5, 'samuel', 56, 'kl', 'so', '', '0.00', '0.00', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(7, 'samuel', 56, 'kl', 'so', 'sih', '0.00', '0.00', '', '', '', '', 'programmer-wallpaper.png', '2018-02-23 13:34:18', 0),
(8, 'samuel', 56, 'kl', 'so', 'sih', '0.00', '0.00', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(9, 'samuel', 56, 'kl', 'so', 'sih', '9.99', '9.99', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(10, 'samuel', 56, 'kl', 'so', 'sih', '9.99', '9.99', '', '', '', '', 'vlcsnap-error549.png', '2018-02-23 13:34:18', 0),
(11, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '9.99', '', '', '', '', '', '2018-02-23 13:34:18', 0),
(12, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '9.99', '', '', '', '', '5325704-battle-arena-ghost-rider-vs-spawn-459515.jpg', '2018-02-23 13:34:18', 0),
(13, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '88.21', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(14, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '88.21', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(15, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '88.21', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(16, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '88.21', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(17, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(18, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(19, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(20, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(21, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(22, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(23, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(24, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(25, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(26, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(27, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(28, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(29, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(30, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(31, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(32, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(33, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(34, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(35, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(36, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'null', '', '2018-02-23 13:34:18', 0),
(37, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is working', '', '2018-02-23 13:34:18', 0),
(38, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is working', '', '2018-02-23 13:34:18', 0),
(39, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is working', '', '2018-02-23 13:34:18', 0),
(40, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is working', '', '2018-02-23 13:34:18', 0),
(41, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is a test', '', '2018-02-23 13:34:18', 0),
(42, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is a test', '', '2018-02-23 13:34:18', 0),
(43, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is a test', '', '2018-02-23 13:34:18', 0),
(44, 'samuel', 56, 'kl', 'so', 'sih', '77.23', '1.00', 'asjdk', 'sk', 'kjsk', 'this is casdi', '', '2018-02-23 13:34:18', 0),
(45, 'samuel', 56, 'nkn', 'knkn', ' k', '0.01', '2.00', '2', 'knn', 'jbj', 'scar on the face', 'vlcsnap-error435.png', '2018-02-23 13:34:18', 0),
(46, 'sdf', 788, 'sdkjf', 'skjdf', 'sdkj', '7.00', '7.00', 'sdkjf', 'skdjf', 'skdj', 'ksj', '', '2018-02-23 13:34:18', 0),
(47, 'David GOHni', 12, 'dark', 'Ewe', 'Togo', '3.00', '72.00', 'Dentist', 'Christian', 'JHS', 'scar on the left arm', 'just_do_it_by_theunknownbeing-d52lmuf.png', '2018-02-23 13:34:18', 0),
(48, 'David GOHni', 12, 'dark', 'Ewe', 'Togo', '3.00', '72.00', 'Dentist', 'Christian', 'JHS', 'scar on the left arm', 'lauren.png', '2018-02-23 13:34:18', 0),
(50, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 19:47:39', 3),
(51, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 19:49:04', 3),
(52, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 19:50:50', 0),
(53, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 20:50:25', 0),
(54, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 20:53:02', 0),
(55, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 20:56:25', 0),
(56, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 20:56:27', 0),
(57, 'JImmy', 72, 'dartk', 'sioe', 'askdhf', '7.00', '7.00', '7', '7', '7', '7', '', '2018-02-23 20:57:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inmate_sentence_info`
--

CREATE TABLE `inmate_sentence_info` (
  `id` int(11) NOT NULL,
  `inmate_id` int(11) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `offence` varchar(255) NOT NULL,
  `p_arrest` varchar(255) DEFAULT NULL,
  `p_conviction` varchar(255) NOT NULL,
  `d_conviction` datetime NOT NULL,
  `d_sentence` datetime NOT NULL,
  `d_expire` datetime NOT NULL,
  `p_committal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmate_sentence_info`
--

INSERT INTO `inmate_sentence_info` (`id`, `inmate_id`, `serial_no`, `offence`, `p_arrest`, `p_conviction`, `d_conviction`, `d_sentence`, `d_expire`, `p_committal`) VALUES
(1, 34, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(2, 36, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(3, 36, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(4, 38, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(5, 38, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(6, 40, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(7, 40, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(8, 42, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(9, 42, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(10, 43, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(11, 43, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(12, 44, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(13, 44, 'sjadjf7', 'ksdjk', '0000-00-00 00:00:00', 'sdfd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2016-01-01 00:00:00', ''),
(14, 45, 'W17000', 'stealing', 'jhjh', 'i dont knwo', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'bnn'),
(15, 46, 'askdjf', 'kj', 'dfg', 'sdf', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', ''),
(16, 47, 'W17839999768', 'destruction of Government Property', 'Kwashiman', 'Kwashiman', '2013-01-27 00:00:00', '2017-12-01 00:00:00', '2018-01-01 00:00:00', ''),
(17, 48, 'W17839999768', 'destruction of Government Property', 'somewhere', 'sjd', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', ''),
(18, 53, '88888', '7', 'knk', 'knk', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'africa'),
(19, 54, '88888', '7', 'knk', 'knk', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'africa'),
(20, 55, '88888', '7', 'knk', 'knk', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'africa'),
(21, 56, '88888', '7', 'knk', 'knk', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'africa'),
(22, 57, '88888', '7', 'knk', 'knk', '2018-01-01 00:00:00', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 'africa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`, `timestamp`, `active`) VALUES
(1, 'simeonnortey@gmail.com', '$2y$10$gUqP1KBoDad4/AfdGvpys.xftfpahAVAK5MGs9nrkwKKOfRbwwxkO', 0, '2018-02-22 11:22:07', 1),
(2, 'simeon', '$2y$10$i/0rYohpGchYcs2lbkZJZu1hM/j73Xjquu0qe3GwAFOdcM8Wkeqbq', 1, '2018-02-22 11:23:15', 0),
(3, 'simeon1', '$2y$10$qP7Vg5H3xIlWC2o4TPb3bu0MAbn5Z59z7.xct5JjmnlPwYfivgK7i', 1, '2018-02-22 11:24:25', 1),
(4, 'nonadmin', '$2y$10$Y59U0Ai95T8Hu.1.qMNDR.cJTe1dIWq1U1IjFRpXKppGN4xQLgIZG', 0, '2018-02-22 20:29:57', 1),
(5, 'test3', '$2y$10$J.mtFVwoDZz5Zo1526vee.IGrzV.Qjbx8.lt4Z.Cl2s7iZEjIbbFy', 0, '2018-02-23 04:48:34', 0),
(6, 'test5', '$2y$10$Nm0P9RKbOwNr80AqeUdDAul49DD9Vgfq.e39yrxT8G6qtOg6N9IWe', 0, '2018-02-23 04:49:32', 0),
(7, 'test4', '$2y$10$gBtNbN9oriaw0BvInmJJLuXuq9n0Kl9rvJpsPFEcjQxp6Z6UXZWUW', 0, '2018-02-23 19:42:36', 0),
(8, 'test8', '$2y$10$je5sjuIRGSRUy1Y57iqJJ.z5SaUA0Y/2pL60qwuYQoLGjZjMTNcf.', 1, '2018-02-24 21:16:42', 1),
(9, 'Gilbert', '$2y$10$ExIGFwhIhWoA4vqcT/sljOBJU2QTehlPlR4h1VhTEBrWH47jLS7bO', 1, '2018-02-24 21:17:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `inmate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `arrival` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `depatcher` datetime DEFAULT NULL,
  `card_no` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `inmate_id`, `name`, `items`, `occupation`, `arrival`, `depatcher`, `card_no`, `contact`, `address`) VALUES
(1, 47, 'jd', 'aisdfi', 'sadf', '2018-02-23 01:50:21', '2018-02-23 01:50:21', 'adsfa', '898', 'iasdif'),
(2, 47, 'jd', 'aisdfi', 'sadf', '2018-02-23 02:23:40', '2018-02-23 02:23:40', 'adsfa', '898', 'iasdif'),
(3, 48, 'samuel L jackson', 'briefcase', 'lawyer', '2018-02-23 03:19:35', '2018-02-23 03:19:35', '78941515', '02442513625', 'station'),
(4, 48, 'the mask', 'pop corn and money', 'Lawyer', '2018-02-23 03:27:27', '2018-02-23 03:27:27', '8484884', '02553612478', 'Kwashiman'),
(5, 48, 'sdfo', 'sdfhi', 'sdf', '2018-02-23 04:26:20', '2018-02-23 04:26:20', 'sdifh', 'sdkfh', 'sdihf\r\n\r\nsdf'),
(6, 48, 'jjbjbjbjbkjbjkb', 'vhvhvhvjhvjhvjhjvhcchcjfyucyfiuguuctyctcycgcvvyuvuyvyuvyuvuy', 'vvucuhjucv', '2018-02-23 04:27:15', '2018-02-23 04:27:15', 'vhvuyvuvyvuvyuvyucvtcttctctctct', 'jbjvhvghuuyyuvyu', 'fffffffffffffffffffffffffff ggggggggggggggggggggggggg cccccccccccccccccccccyyyyyyyyyyyyyy yyyyyyyyyyyy'),
(7, 48, 'asdkfaisdfna iadfaosdf askdfnasdfas df', 'vhvhvhvjhvjhvjhjvhcchcjfyucyasdfnjads asdhfashdf asdhfiah iashdifh asd asidhfas oasdf ihasdof adshf adsiohf aisdhf asodhf aioashdf oo asdofhoadshfiasdoif aisdfi asdfo fiuguuctyctcycgcvvyuvuyvyuvyuvuy', 'Lawyer', '2018-02-23 04:47:31', '2018-02-23 04:47:31', 'vhvuyvuvyvu  adshfia  aisdhfi   asdhf     aosidhf ads ivyuvyucvtcttctctctct', '5165651519515', 'fffffffffffffffffffffaidhfia asidfi asdifha sdifh asodihfioasd fia dihfoasd foadf aodf asodihfi asdfhaisdf asdihf asdfoiashd fasdf asiodhf affffff ggggggggggggggggggggggggg cccccccccccccccccccccyyyyyyyyyyyyyy yyyyyyyyyyyy'),
(9, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:55', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(10, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:56', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(11, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:57', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(12, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:57', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(13, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:58', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(14, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:58', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(15, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:37:59', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(16, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:38:00', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(17, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:38:00', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(18, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:38:00', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(19, 11, 'iwhdf', 'skdfkn', 'kdnfk', '2018-02-24 13:38:01', '2018-01-01 01:00:00', 'dknkn', 'sdknk', 'nk'),
(20, 9, 'vhvh', 'gcg', 'vgc', '2018-02-24 20:42:46', '2018-01-04 13:00:00', 'gc', 'h n ', 'gcg\r\n'),
(21, 9, 'vhvh', 'gcg', 'vgc', '2018-02-24 20:44:46', '2018-01-04 13:00:00', 'gc', 'h n ', 'gcg\r\n'),
(22, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:26', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(23, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:39', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(24, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:40', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(25, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:40', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(26, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(27, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(28, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(29, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(30, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(31, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:41', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(32, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:56:42', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(33, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:59:36', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(34, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:59:36', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(35, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:59:36', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(36, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 20:59:37', '2018-01-01 13:00:00', 'sdf', 'df', 'sdv'),
(37, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 21:02:53', NULL, 'sdf', 'df', 'sdv'),
(38, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 21:02:53', NULL, 'sdf', 'df', 'sdv'),
(39, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 21:02:53', NULL, 'sdf', 'df', 'sdv'),
(40, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 21:02:53', '2018-01-01 01:05:00', 'sdf', 'df', 'sdv'),
(41, 10, 'sdf', 'sdf', 'sdf', '2018-02-24 21:02:54', NULL, 'sdf', 'df', 'sdv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inmate`
--
ALTER TABLE `inmate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inmate_sentence_info`
--
ALTER TABLE `inmate_sentence_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inmate`
--
ALTER TABLE `inmate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `inmate_sentence_info`
--
ALTER TABLE `inmate_sentence_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
