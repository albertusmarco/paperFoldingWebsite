-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 07:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pfw`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postal_code` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `email`, `phone`, `address`, `postal_code`) VALUES
(1, 'Fania Cecillia', 'fcecillia@student.ciputra.ac.id', '087856933365', 'Wiyung', 60228),
(2, 'Albertus Marco', 'amarco@student.ciputra.ac.id', '088966548595', 'Pakuwon', 60112),
(3, 'Dewi Salma Salsabila', 'dsalma@student.ciputra.ac.id', '081265996325', 'Pakuwon', 60112),
(4, 'Dhienalight', 'dhienalight@student.ciputra.ac.id', '081256692145', 'Sepanjang', 61257);

-- --------------------------------------------------------

--
-- Table structure for table `design_detail`
--

CREATE TABLE IF NOT EXISTS `design_detail` (
  `id_order` int(10) unsigned NOT NULL,
  `path_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `design_detail`
--

INSERT INTO `design_detail` (`id_order`, `path_detail`) VALUES
(0, 'detail.detail1.png'),
(0, 'detail.detail3.png'),
(0, 'detail.detail5.png'),
(0, 'detail.detail55.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `role`) VALUES
('admin', 'admin', 1),
('amarco@student.ciputra.ac.id', 'ampass', 2),
('bobby@gmail.com', 'bpass', 2),
('dhienalight@student.ciputra.ac.id', 'dpass', 2),
('dsalma@student.ciputra.ac.id', 'dsspass', 2),
('fcecillia@student.ciputra.ac.id', 'fcpass', 2),
('jj', 'pass', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id_order` int(10) unsigned NOT NULL,
  `id_customer` varchar(50) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `material` varchar(50) DEFAULT NULL,
  `combination` varchar(50) DEFAULT NULL,
  `lamination` varchar(50) DEFAULT NULL,
  `available` varchar(50) DEFAULT NULL,
  `size1` varchar(45) DEFAULT NULL,
  `size2` varchar(45) DEFAULT NULL,
  `size3` varchar(45) DEFAULT NULL,
  `path_custom` varchar(50) NOT NULL,
  `id_invoice` varchar(50) NOT NULL,
  `qty` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `status` varchar(50) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path_dp` varchar(50) NOT NULL,
  `path_paid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `id_product`, `material`, `combination`, `lamination`, `available`, `size1`, `size2`, `size3`, `path_custom`, `id_invoice`, `qty`, `price`, `status`, `order_time`, `path_dp`, `path_paid`) VALUES
(1, 'C2', 'P1', 'Corrugated', 'Sticker Vinly', NULL, NULL, NULL, NULL, NULL, 'custom/custom1.obj', 'IV160119-1', 20, 100000, 'Complete', '2019-01-16 16:01:53', 'dp/dp1.jpg', 'paid/paid1.jpg'),
(2, 'C2', 'P3', 'Polylethylene [PE] Water Proof', 'Sticker Vinly', NULL, NULL, NULL, NULL, NULL, 'custom/custom2.obj', 'IV160119-3', 30, 200000, 'Complete', '2019-01-16 16:13:16', 'dp/dp2.jpg', 'paid/paid2.jpg'),
(3, 'C3', 'P2', 'Art Paper 210 gr', 'Hot Print', 'Doff', NULL, NULL, NULL, NULL, 'custom/custom3.obj', 'IV160119-2', 35, 250000, 'In Progress', '2019-01-16 16:08:07', 'dp/dp3.jpg', 'paid/paid3.jpg'),
(4, 'C1', 'P2', 'Ivory 230 gr', 'UV Print', 'Glossy', NULL, NULL, NULL, NULL, 'custom/custom4.obj', 'IV180119-1', 10, 100000, 'Cancel', '2019-01-16 16:08:01', 'dp/dp4.jpg', 'paid/paid4.jpg'),
(5, 'C4', 'P2', 'Samson 70 gr', 'UV Print', 'Glossy', NULL, NULL, NULL, NULL, 'custom/custom5.obj', 'IV200119-1', 10, 100000, '-', '2019-01-19 06:05:20', 'dp/dp5.jpg', 'paid/paid5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id_product` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `path_product` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `path_product`, `status`) VALUES
(1, 'Cardboard Box', 'products/p1.obj', 'active'),
(2, 'Paper Bag', 'products/p2.obj', 'active'),
(3, 'Paper Cup', 'products/p3.obj', 'active'),
(4, 'Plastic Pouch', 'products/p4.obj', 'active'),
(5, 'Paper Pouch', 'products/p5.obj', 'active'),
(6, 'Pack Label', 'products/p6.obj', 'active'),
(7, 'Soft Box', 'products/p7.obj', 'active'),
(8, 'Food Wrap', 'products/p8.obj', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id_order` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
