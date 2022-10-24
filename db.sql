-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2022 at 03:30 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtoapp_aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ips_tbl_orders`
--

CREATE TABLE `ips_tbl_orders` (
  `order_id` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order_for` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ips_tbl_orders`
--

INSERT INTO `ips_tbl_orders` (`order_id`, `status`, `order_for`, `amount`) VALUES
('demo', 'Success', 'demo', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ips_tbl_orders`
--
ALTER TABLE `ips_tbl_orders`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
