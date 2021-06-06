-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `ORDERID` int(11) NOT NULL,
  `PRODUCTID` int(11) NOT NULL,
  `PRODNAME` varchar(30) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `NUMOFITEMS` int(11) NOT NULL,
  `TOTAL` float NOT NULL,
  `DATE` datetime NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`ORDERID`, `PRODUCTID`, `PRODNAME`, `PRICE`, `NUMOFITEMS`, `TOTAL`, `DATE`, `CUSTOMERID`, `STATUS`) VALUES
(22, 1, 'Boy Black Shoes', 600, 1, 600, '2021-06-05 15:01:39', 1, 'CHECKOUT'),
(23, 1, 'Boy Black Shoes', 600, 2, 1200, '2021-06-05 15:12:01', 1, 'CHECKOUT'),
(24, 1, 'Boy Black Shoes', 600, 2, 1200, '2021-06-05 15:12:45', 1, 'CHECKOUT'),
(25, 1, 'Boy Black Shoes', 600, 1, 600, '2021-06-05 15:13:40', 1, 'CHECKOUT'),
(26, 1, 'Boy Black Shoes', 600, 1, 600, '2021-06-05 15:14:03', 1, 'CHECKOUT'),
(27, 10, 'Kid Black Shoes', 350, 1, 350, '2021-06-05 15:26:45', 1, 'CHECKOUT'),
(28, 10, 'Kid Black Shoes', 350, 2, 700, '2021-06-05 16:18:20', 1, 'CHECKOUT'),
(29, 10, 'Kid Black Shoes', 350, 1, 350, '2021-06-05 16:52:58', 1, 'CHECKOUT'),
(30, 1, 'Boy Black Shoes', 650, 5, 3250, '2021-06-05 21:42:33', 1, 'CHECKOUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`ORDERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
