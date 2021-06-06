-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:55 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
