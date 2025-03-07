-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 03:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall_booking`
--
CREATE DATABASE IF NOT EXISTS `hall_booking` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `hall_booking`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `event` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL,
  `hall` varchar(10) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `user` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `paid_amount` varchar(20) NOT NULL,
  `more_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `event`, `date`, `hall`, `start_time`, `end_time`, `user`, `status`, `paid_amount`, `more_details`) VALUES
(13, 'wedding', '2020-09-17', '3', '5', '10', '11', 'pending', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `mobile`, `message`) VALUES
(2, 'mayurd30@gmail.com', '9819139687', 's asda asdas sds asdsd as  d sdasdsd sddsd asds d'),
(3, 'mayurd30@gmail.com', '9819139687', 'sdas sda sdas da sad');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `thumb` text NOT NULL,
  `address` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_username` varchar(20) NOT NULL,
  `owner_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `name`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `thumb`, `address`, `location`, `capacity`, `status`, `owner_name`, `owner_username`, `owner_password`) VALUES
(3, 'Hall Two', 'Hii, This Hall located at borivali. The events can be celebrated at hall borivali like wedding , engagement , Birthday Party , Seminar events , etc.', 'img2.jpg', 'img1.jpg', 'img3.jpg', 'img1.jpg', 'img3.jpg', 'img1.jpg', 'opp shivaji park near mohan electronics nehru chowk Borivali-2', 'Ambernath', '23223', 'open', 'Yuvraj', 'username', 'd79096188b670c2f81b7001f73801117'),
(4, 'MERCURY HALLL', 'THIS IS ONLY MARRIAGE HALL', 'marriagehall.jpg', 'seminarhall.jpg', 'smhall3.jpg', 'engagement3.jpg', 'engagement3.jpg', 'lawn.jpg', 'OPP MOHAN PARK NEAR SHIVAJI ELECTRONICSSVDSV DS', 'Andheri', '1000', 'open', 'Yuvraj', 'yuvraj', 'e97a3969cfbfef0e131b77baf2d489a8'),
(5, 'Hall Three', 'Hii, This Hall located at borivali. The events can be celebrated at hall borivali like wedding , engagement , Birthday Party , Seminar events , etc.', 'marriage3.jpg', 'marriage2.jpg', 'marriage.jpg', 'marriage3.jpg', 'marriage2.jpg', 'marriage3.jpg', 'opp shivaji park near mohan electronics nehru chowk Borivali-2', 'Ambernath', '20333', 'open', 'Yuvraj', 'Yuvraj12', 'Yuvraj');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `hall_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `joining_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `hall_id`, `name`, `mobile`, `type`, `address`, `joining_date`) VALUES
(2, '1', 'mayur3', '9819139687', 'Manager', 'dbjksdka jsdbasjdbasjkdbasj kasbdjaks dbakjsdbas', '2020-06-08'),
(3, '1', 'jil', '9817139687', 'Manaer', 'kjbsd sbdsjkbasdkjabsjdasd', '2020-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`id`, `name`) VALUES
(1, 'Manager'),
(2, 'Peun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(11, 'mayur', '9819139687', 'mayudrd30@gmail.com', 'e97a3969cfbfef0e131b77baf2d489a8'),
(13, 'Rajesh', '7262907268', 'mayurd30@gmail.com', 'e97a3969cfbfef0e131b77baf2d489a8'),
(14, 'omi', '8446440079', 'mady@gmail.com', '1bccaa632ebff7725a1b9f459dfdf3b36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
