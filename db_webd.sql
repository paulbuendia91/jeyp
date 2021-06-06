-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:54 PM
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
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `POSITION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`ID`, `NAME`, `USERNAME`, `PASSWORD`, `POSITION`) VALUES
(0, 'lascona', 'aljon', 'aljon12', 'Customer'),
(1, 'godwyn', 'miles', 'casas12', 'Customer'),
(2, 'lorna', 'loreng', 'loreng12', 'Employee'),
(3, 'molly', 'molay', 'molipot12', 'Adminstrator'),
(5, 'nathan', 'dd', '1234', 'Customer'),
(6, 'Jampol', 'bikersboso', 'jp123', 'Admin'),
(13, 'Aljon', 'Lascona', 'junie', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `ID` int(11) NOT NULL,
  `PRODNAME` varchar(30) NOT NULL,
  `SIZE` int(11) NOT NULL,
  `IMAGE` varchar(30) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`ID`, `PRODNAME`, `SIZE`, `IMAGE`, `PRICE`, `QUANTITY`, `TOTAL`) VALUES
(1, 'Boy Black Shoes', 10, 'blackshoe1.jpg', 650, 25, 0),
(2, 'Boy Black Shoes', 10, 'blackshoe5.jpg', 800, 15, 0),
(3, 'Boy Black Shoes', 10, 'blackshoe4.jpg', 550, 15, 0),
(4, 'Girl Black Shoes', 6, 'girlshoe1.jpg', 550, 10, 0),
(5, 'Girl Black Shoes', 6, 'girlshoe3.jpg', 400, 10, 0),
(6, 'Girl Black Shoes', 9, 'girlshoe4.jpg', 500, 10, 0),
(7, 'Girl Black Shoes', 8, 'girlshoe2.jpg', 650, 10, 0),
(8, 'Kid Black Shoes', 4, 'kidshoe3.jpg', 350, 5, 0),
(9, 'Kid Black Shoes', 5, 'kidshoe.jpg', 430, 10, 0),
(10, 'Kid Black Shoes', 4, 'kidshoe2.jpg', 350, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `ID` int(30) NOT NULL,
  `USER` varchar(30) NOT NULL,
  `ACTION` varchar(30) NOT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`ID`, `USER`, `ACTION`, `DATE`) VALUES
(1, 'miles', 'Logged In', '2021-05-10 11:33:34'),
(2, 'bikersboso', 'Logged In', '2021-06-04 16:11:59'),
(3, 'aljon', 'Logged In', '2021-06-04 16:15:12'),
(4, 'dd', 'Logged In', '2021-06-04 16:18:39'),
(5, 'bikersboso', 'Logged In', '2021-06-04 16:19:19'),
(6, '', 'Logged In', '2021-06-04 22:24:13'),
(7, 'bikersboso', 'Logged In', '2021-06-05 16:31:45'),
(8, 'aljon', 'Logged In', '2021-06-05 16:42:24'),
(9, 'aljon', 'Logged In', '2021-06-05 16:45:08'),
(10, 'Las', 'Logged In', '2021-06-05 16:57:51'),
(11, 'Lascona', 'Logged In', '2021-06-05 16:58:02'),
(12, 'aljon', 'Logged In', '2021-06-05 17:03:29'),
(13, 'bikersboso', 'Logged In', '2021-06-05 22:09:30'),
(14, 'aljon', 'Logged In', '2021-06-05 22:26:56');

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
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`ORDERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
