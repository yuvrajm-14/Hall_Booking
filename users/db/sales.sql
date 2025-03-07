-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 01:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--
CREATE DATABASE IF NOT EXISTS `sales` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sales`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin2', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pmid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pmid`, `name`, `type`, `date`) VALUES
(3, 'Mobile model 123', '8', '2020-02-26 11:09:46'),
(4, 'Mobile model 2', '8', '2020-02-26 11:11:05'),
(5, 'sads sdsd ', '7', '2020-02-27 05:22:55'),
(6, 'A30 - WHITE', '8', '2020-02-27 08:54:42'),
(7, 'WIFI one', '9', '2020-03-02 07:13:52'),
(8, 'V7y', '10', '2020-03-02 12:03:07'),
(9, 'Model one', '11', '2020-03-02 13:16:11'),
(10, 'etop', '12', '2020-03-02 13:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pid`, `name`, `date`) VALUES
(7, 'Simcards', '2020-02-26 08:40:22'),
(8, 'Mobile', '2020-02-26 09:13:31'),
(9, 'Wifi Router', '2020-02-26 09:29:07'),
(10, 'TV', '2020-03-02 12:02:46'),
(11, 'Pen Drive', '2020-03-02 13:15:51'),
(12, 'Connectivity', '2020-03-02 13:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pid` int(11) NOT NULL,
  `order_amount` varchar(15) NOT NULL,
  `top_up` varchar(15) NOT NULL,
  `type` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `location` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pid`, `order_amount`, `top_up`, `type`, `model`, `qty`, `location`, `status`, `date`) VALUES
(9, '121232', '7880', 11, 9, 23, 'sdasd', 'completed', '2020-03-07'),
(10, '1000', '65', 8, 3, 20, 'juyvuv uvy ', 'pending', '2020-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `qid` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_model` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`qid`, `product_type`, `product_model`, `quantity`, `date`) VALUES
(2, 8, 4, 190, '2020-02-27 07:22:12'),
(3, 8, 6, 150, '2020-02-27 08:55:20'),
(4, 7, 5, 200, '2020-02-27 13:02:06'),
(5, 9, 7, 210, '2020-03-02 08:59:39'),
(6, 10, 8, 100, '2020-03-02 12:03:32'),
(7, 11, 9, 123, '2020-03-02 13:17:06'),
(8, 12, 10, 10017, '2020-03-02 13:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `rid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`rid`, `name`) VALUES
(6, 'sd asdsyyyyyycs asadasdds'),
(7, 'sd ads sdas dsd'),
(8, 'd dasssd'),
(9, 'd asds sds'),
(10, 's aas asdds'),
(11, 'da sdsd sdss');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(11) NOT NULL,
  `retailer_name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ref_no` varchar(30) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `total_amount` varchar(30) NOT NULL,
  `top_up` varchar(30) NOT NULL,
  `paid_amount` varchar(30) NOT NULL,
  `payment_mode` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `retailer_name`, `date`, `ref_no`, `product_type`, `product`, `qty`, `total_amount`, `top_up`, `paid_amount`, `payment_mode`, `status`) VALUES
(2, 'sad', '2020-02-18', '32', '8', '6', '34', '33', '', '200', 'cash', 'paid'),
(3, 'sad sassdasd sadsadas', '2020-02-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(4, 'sad sassdasd sadsadas', '2020-03-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(5, 'sad sassdasd sadsadas', '2020-04-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(6, 'sad sassdasd sadsadas', '2020-05-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(7, 'sad sassdasd sadsadas', '2020-06-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(8, 'sad sassdasd sadsadas', '2020-07-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(9, 'sad sassdasd sadsadas', '2020-08-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(10, 'sad sassdasd sadsadas', '2020-09-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(11, 'sad sassdasd sadsadas', '2020-10-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(12, 'sad sassdasd sadsadas', '2020-11-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(13, 'sad sassdasd sadsadas', '2020-12-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(14, 'sad sassdasd sadsadas', '2020-08-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(15, 'sad sassdasd sadsadas', '2020-10-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(16, 'sad sassdasd sadsadas', '2020-10-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(17, 'sad sassdasd sadsadas', '2020-10-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(18, 'sad sassdasd sadsadas', '2020-06-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(19, 'sad sassdasd sadsadas', '2020-08-12', '3423', '8', '6', '50', '5000', '', '4500', 'cash', 'unpaid'),
(20, ' adsadasasads', '2020-03-02', '32', '8', '4', '10', '5000', '', '4000', 'cash', 'unpaid'),
(21, ' adsadasasadssda s', '2020-03-02', '23', '10', '8', '10', '5000', '', '4500', 'cash', 'paid'),
(22, ' adsadasasads', '2020-03-04', '32', '12', '10', '50', '5000', '', '4000', 'cash', 'unpaid'),
(23, 'sd ads sdas dsd', '2020-03-07', '23', '12', '10', '10', '1000', '65', '200', 'cash', 'unpaid'),
(24, 'd dasssd', '2020-03-14', '23', '12', '10', '23', '50000', '3250', '23', 'cash', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `advance` varchar(20) NOT NULL,
  `reamining` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `credit`, `client_name`, `details`, `advance`, `reamining`) VALUES
(2, '3000', 'nj', 'gh', '3000', '0'),
(4, '9000', 'dfsdfd dfsdf ', 'dfs dsdfdds', '9000', '0'),
(5, '9000', 'dfsdfd dfsdf ', 'sdasdasds', '9000', '0'),
(6, '8000', 'ads ', 'a asd', '5000', '3000'),
(7, '5000', 'dfsdfd dfsdf ', 'sdasdasds', '3000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wid` int(11) NOT NULL,
  `amount` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wid`, `amount`, `date`) VALUES
(1, '25117.4', '2020-02-28 06:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_history`
--

CREATE TABLE `wallet_history` (
  `whid` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tran_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet_history`
--

INSERT INTO `wallet_history` (`whid`, `amount`, `status`, `tran_type`, `date`) VALUES
(3, '7880', 'P', 'purchase', '2020-03-07 07:34:17'),
(4, '65', 'P', 'purchase', '2020-03-07 09:25:20'),
(5, '65', 'M', 'sale', '2020-03-07 11:34:03'),
(6, '3250', 'M', 'sale', '2020-03-07 11:41:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pmid`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `wallet_history`
--
ALTER TABLE `wallet_history`
  ADD PRIMARY KEY (`whid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_history`
--
ALTER TABLE `wallet_history`
  MODIFY `whid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
