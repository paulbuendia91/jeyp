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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
