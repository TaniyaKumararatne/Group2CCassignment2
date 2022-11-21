-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 07:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(6) NOT NULL,
  `truck_name` varchar(191) NOT NULL,
  `area` varchar(191) NOT NULL,
  `division` varchar(191) NOT NULL,
  `clock` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `truck_name`, `area`, `division`, `clock`) VALUES
(12, 'WP JS 9876 - PLASTIC/POLYTHENE WASTE', 'Nug', 'Gangdowila-526A', '10.00a.m-10.40 a.m'),
(13, 'WP JS 9876 - PLASTIC/POLYTHENE WASTE', 'Nug', 'jambugasmulla -205', '11.00a.m-12.00 p.m'),
(15, 'WP HAP 3080 - GENERAL WASTE', 'Nug', 'pepliyana-535', '10.00a.m-10.45 a.m'),
(16, 'WP JS 9876 - PLASTIC/POLYTHENE WASTE', 'Nug', 'wijerama-195', '11.00a.m-12.00 p.m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
