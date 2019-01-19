-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 06:37 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_item`
--

CREATE TABLE `all_item` (
  `sl` int(11) NOT NULL,
  `shop_code` varchar(100) NOT NULL,
  `item` varchar(2000) NOT NULL,
  `brand` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `photo` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_item`
--

INSERT INTO `all_item` (`sl`, `shop_code`, `item`, `brand`, `type`, `price`, `qty`, `photo`) VALUES
(2, '2', 'Bread', 'mother', 'grocery', '11', 'pack', 'uploads/item_images/img__1545407483_Bread.jpg'),
(3, '2', 'Butter', 'loccal', 'grocery', '20', '100 gm', 'uploads/item_images/img__1545407509_Butter.jpg'),
(4, '2', 'Jira Masla', 'JK', 'grocery', '15', 'pack', 'uploads/item_images/img__1545407537_Jira Masla.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_shop`
--

CREATE TABLE `all_shop` (
  `sl` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `shop_name` varchar(2000) DEFAULT NULL,
  `owner` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(2000) DEFAULT NULL,
  `lati` varchar(1000) DEFAULT NULL,
  `longi` varchar(1000) DEFAULT NULL,
  `shop_open` varchar(10) DEFAULT NULL,
  `shop_close` varchar(10) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `one_star` int(11) NOT NULL DEFAULT '0',
  `two_star` int(11) NOT NULL DEFAULT '0',
  `three_star` int(11) NOT NULL DEFAULT '0',
  `four_star` int(11) NOT NULL DEFAULT '0',
  `five_star` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_shop`
--

INSERT INTO `all_shop` (`sl`, `status`, `shop_name`, `owner`, `email`, `mobile`, `address`, `lati`, `longi`, `shop_open`, `shop_close`, `rating`, `one_star`, `two_star`, `three_star`, `four_star`, `five_star`, `photo`) VALUES
(2, 'verified', 'Basumoti Vandar', 'PURNENDU DAS', 'a123@gmail.com', '7501352674', 'Radhikanagar,Berhampore', '22.572646', '88.36389500000001', '10:00 AM', '08:00 PM', 5, 0, 0, 0, 1, 1, 'uploads/shop_images/img__1545407247_Basumoti Vandar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating_code`
--

CREATE TABLE `rating_code` (
  `sl` int(11) NOT NULL,
  `shop_code` varchar(100) NOT NULL,
  `rating_code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'seller',
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl`, `name`, `type`, `email`, `password`, `regtime`) VALUES
(6, 'PURNENDU DAS', 'seller', 'a123@gmail.com', 'a123@gmail.com', '2018-12-21 15:41:08'),
(7, 'Admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', '2018-12-21 18:34:58'),
(3, 'Purnendu Das', 'admin', 'purnendu@gmail.com', 'admin321', '2018-12-21 06:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_item`
--
ALTER TABLE `all_item`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `all_shop`
--
ALTER TABLE `all_shop`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `rating_code`
--
ALTER TABLE `rating_code`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_item`
--
ALTER TABLE `all_item`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `all_shop`
--
ALTER TABLE `all_shop`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rating_code`
--
ALTER TABLE `rating_code`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
