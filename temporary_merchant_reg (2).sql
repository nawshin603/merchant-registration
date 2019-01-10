-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 12:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `temporary_merchant_reg`
--

CREATE TABLE `temporary_merchant_reg` (
  `applyid` int(11) NOT NULL,
  `merchantName` varchar(100) NOT NULL,
  `shopMarket` varchar(15) NOT NULL,
  `contactPerson` varchar(100) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `thanaid` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `productNature` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `companyPhone` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `accountName` varchar(50) DEFAULT NULL,
  `accountNumber` varchar(50) DEFAULT NULL,
  `bankName` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `routeNumber` varchar(30) DEFAULT NULL,
  `paymentMode` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporary_merchant_reg`
--

INSERT INTO `temporary_merchant_reg` (`applyid`, `merchantName`, `shopMarket`, `contactPerson`, `contactNumber`, `address`, `thanaid`, `district`, `creation_date`, `productNature`, `website`, `facebook`, `companyPhone`, `designation`, `accountName`, `accountNumber`, `bankName`, `branch`, `routeNumber`, `paymentMode`) VALUES
(1, 'TEST', '', 'TEST', '01900000000', 'Tejgaon', 0, 0, '2019-01-09 22:48:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'TEST', '', 'TEST', '01900000000', 'tejgaon', 0, 0, '2019-01-10 00:03:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'fff', '', 'fff', '01900000000', 'fff', 0, 0, '2019-01-10 00:03:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'bbb', '', 'xd', '01900000000', 'zzzzzzzzz', 0, 0, '2019-01-10 16:54:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'nawshin', '', 'tuli', '01900000000', 'tejgaon', 0, 0, '2019-01-10 17:38:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ss', '', 'ss', '01900000000', 'ssss', 0, 0, '2019-01-10 18:23:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'xx', '', 'xx', '01900000000', 'xxx', 0, 0, '2019-01-10 18:29:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'xx', '', 'xx', '01900000000', 'xxx', 0, 0, '2019-01-10 18:31:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'xx', '', 'xx', '01900000000', 'xxx', 0, 0, '2019-01-10 18:31:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'xx', '', 'xx', '01900000000', 'xxx', 0, 0, '2019-01-10 18:33:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'ss', '', 'ss', '01900000000', 'ssss', 0, 0, '2019-01-10 18:45:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'ss', '', 'ss', '01900000000', 'ssss', 0, 0, '2019-01-10 18:46:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ss', '', 'ss', '01900000000', 'ssss', 0, 0, '2019-01-10 18:46:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'n', '', 'bnnn', '01900000000', 'ssa', 0, 0, '2019-01-10 18:46:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'n', '', 'bnnn', '01900000000', 'ssa', 0, 0, '2019-01-10 18:47:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'n', '', 'bnnn', '01900000000', 'ssa', 0, 0, '2019-01-10 18:48:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'n', '', 'bnnn', '01900000000', 'ssa', 0, 0, '2019-01-10 18:59:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Alavi Sristi', '', 'hhhhhhhhh', '01900000000', 'asasas', 0, 0, '2019-01-10 19:12:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Alavi Sristi', '', 'hhhhhhhhh', '01900000000', 'asasas', 0, 0, '2019-01-10 19:22:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Alavi Sristi', '', 'hhhhhhhhh', '01900000000', 'asasas', 0, 0, '2019-01-10 19:25:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Alavi Sristi', '', 'hhhhhhhhh', '01900000000', 'asasas', 0, 0, '2019-01-10 19:47:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'TEST', '', 'TEST', '01680067688', 'dsdssa', 0, 0, '2019-01-10 20:00:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'TEST', '', 'TEST', '01680067688', 'asasasa', 0, 0, '2019-01-10 20:15:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'lll', '', 'TEST', '01680067688', 'fdfd', 0, 0, '2019-01-10 22:45:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temporary_merchant_reg`
--
ALTER TABLE `temporary_merchant_reg`
  ADD PRIMARY KEY (`applyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temporary_merchant_reg`
--
ALTER TABLE `temporary_merchant_reg`
  MODIFY `applyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
