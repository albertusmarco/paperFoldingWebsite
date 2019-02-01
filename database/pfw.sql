-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 06:17 AM
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
  `id_customer` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postal_code` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `email`, `phone`, `address`, `postal_code`) VALUES
('C1', 'Fania Cecillia', 'fcecillia@student.ciputra.ac.id', '087856933365', 'Wiyung', 60228),
('C2', 'Albertus Marco', 'amarco@student.ciputra.ac.id', '088966548595', 'Pakuwon', 60112),
('C3', 'Dewi Salma Salsabila', 'dsalma@student.ciputra.ac.id', '081265996325', 'Pakuwon', 60112),
('C4', 'Dhienalight', 'dhienalight@student.ciputra.ac.id', '081256692145', 'Sepanjang', 61257),
('C5', 'Natalie Parametha', 'natalieparametha@gmail.com', '083833002258', 'Jalan Gatot Subroto 91  Probolinggo', 621217),
('C6', 'huha', '88', '88', '88', 88),
('C7', 'Priskila Fania', 'pf@gmail.com', '9383', 'haha', 8383);

-- --------------------------------------------------------

--
-- Table structure for table `design_detail`
--

CREATE TABLE IF NOT EXISTS `design_detail` (
  `id_order` varchar(50) NOT NULL,
  `path_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `design_detail`
--

INSERT INTO `design_detail` (`id_order`, `path_detail`) VALUES
('O1', 'detail/detail1.png'),
('O3', 'detail/detail3.png'),
('O5', 'detail/detail5.png'),
('O5', 'detail/detail55.png'),
('O6', 'asset/6944985-deer-art.jpg'),
('O9', 'asset/7024877-siberian-samoyed.jpg');

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
('88', '88', 2),
('admin', 'admin', 1),
('amarco@student.ciputra.ac.id', 'ampass', 2),
('bobby@gmail.com', 'bpass', 2),
('dhienalight@student.ciputra.ac.id', 'dpass', 2),
('dsalma@student.ciputra.ac.id', 'dsspass', 2),
('fcecillia@student.ciputra.ac.id', 'fcpass', 2),
('jj', 'pass', 2),
('natalieparametha@gmail.com', 'changnailie', 2),
('pf@gmail.com', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id_order` varchar(50) NOT NULL DEFAULT '',
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
  `qty` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `status` varchar(50) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path_dp` varchar(50) NOT NULL,
  `path_paid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `id_product`, `material`, `combination`, `lamination`, `available`, `size1`, `size2`, `size3`, `path_custom`, `qty`, `price`, `status`, `order_time`, `path_dp`, `path_paid`) VALUES
('O1', 'C2', 'P1', 'Corrugated', 'Sticker Vinly', NULL, NULL, NULL, NULL, NULL, 'custom/custom1.obj', 20, 100000, 'In Progress', '2019-01-16 16:01:53', 'dp/dp1.jpg', 'paid/paid1.jpg'),
('O10', 'C1', 'P3', 'Polylethylene Water Proof', 'Sablon', 'none', 'none', '6', '5', '5', 'custom/Paper Cup4.json', 100, 1000, '-', '2019-01-21 03:40:31', '', ''),
('O11', 'C5', '', 'Corrugated', 'UV Print', 'none', 'none', '60', '40', '20', 'custom/Card Board1.json', 50, 50000, '-', '2019-01-21 04:53:20', '', ''),
('O12', 'C1', 'P2', 'Art Paper 150 gr', 'Sticker Vinyl', 'none', 'none', '50', '60', '15', 'custom/Paper Bag5.json', 50, 7000, '-', '2019-01-21 04:59:31', '', ''),
('O13', 'C7', 'P7', 'Art Paper 150 gr', 'Sticker Vinyl', 'Doff', 'none', '50', '50', '50', 'custom/Soft Box1.json', 50, 30000, '-', '2019-01-21 17:28:04', '', ''),
('O2', 'C2', 'P3', 'Polylethylene [PE] Water Proof', 'Sticker Vinly', NULL, NULL, NULL, NULL, NULL, 'custom/custom2.obj', 30, 200000, 'Complete', '2019-01-16 16:13:16', 'dp/dp2.jpg', 'paid/paid2.jpg'),
('O3', 'C3', 'P2', 'Art Paper 210 gr', 'Hot Print', 'Doff', NULL, NULL, NULL, NULL, 'custom/custom3.obj', 35, 250000, 'In Progress', '2019-01-16 16:08:07', 'dp/dp3.jpg', 'paid/paid3.jpg'),
('O4', 'C1', 'P2', 'Ivory 230 gr', 'UV Print', 'Glossy', NULL, NULL, NULL, NULL, 'custom/custom4.obj', 10, 100000, 'Cancel', '2019-01-16 16:08:01', 'dp/dp4.jpg', 'paid/paid4.jpg'),
('O5', 'C4', 'P2', 'Samson 70 gr', 'UV Print', 'Glossy', NULL, NULL, NULL, NULL, 'custom/custom5.obj', 10, 100000, '-', '2019-01-19 06:05:20', 'dp/dp5.jpg', 'paid/paid5.jpg'),
('O6', 'C1', 'P2', 'none', 'Hot Print', 'none', 'none', '50', '60', '15', 'custom/Paper Bag2.json', 50, 12000, 'In Progress', '2019-01-20 13:14:40', '', ''),
('O7', 'C1', 'P8', 'Food Grade Paper', 'Sticker Vinyl', 'none', 'none', '60', '50', '10', 'custom/Food Wrap3.json', 50, 800, '-', '2019-01-20 13:35:44', '', ''),
('O8', '', 'P3', 'Polylethylene Water Proof', 'Sablon', 'none', 'none', '6', '5', '5', 'custom/Paper Cup1.json', 50, 1500, '-', '2019-01-21 03:21:21', '', ''),
('O9', '', '', 'Corrugated', 'UV Print', 'none', 'none', '60', '11', '20', 'custom/Card Board2.json', 67, 35000, '-', '2019-01-21 03:37:22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `status`) VALUES
('P1', 'Cardboard Box', 'active'),
('P2', 'Paper Bag', 'active'),
('P3', 'Paper Cup', 'active'),
('P4', 'Plastic Pouch', 'active'),
('P5', 'Paper Pouch', 'active'),
('P6', 'Pack Label', 'active'),
('P7', 'Soft Box', 'active'),
('P8', 'Food Wrap', 'active');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
