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
-- Database: `tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(6) NOT NULL,
  `truck_name` varchar(191) NOT NULL,
  `area` varchar(191) NOT NULL,
  `division` varchar(191) NOT NULL,
  `time_slot` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `date` date NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date`, `image`, `type`) VALUES
(25, 'tan', 'tan', 'tan123345', 'tan@gmail.com', '$2y$04$1GwNBRJiZY/yB.fNAFvNG.QKfJ30hF8T18XM3JWffZPlK2H8aHovC', '2022-11-20', NULL, ''),
(26, 'uhh', 'uhh', 'uhh789', 'uh@gmail.com', '$2y$04$qwxQywW3YYHHxqzPaACGbOOFe2EYNRjk//kNdPxTmg9diI8DrzRee', '2022-11-20', NULL, '12'),
(27, 'taniya', 'taniya', 'Taniya', 'tan123@gmail.com', '$2y$04$tsb9MI3xIy5h5XQr3cD54O6nAe.5aIfQ/rpJ94H7Had2ua1x0ctwy', '2022-11-20', NULL, 'Citizen'),
(28, 'ballon', 'ballon', 'ballon', 'bal@gmail.com', '$2y$04$5Isx3XNHygb3MVpnzbmH/uB2iX2/NpP4ZS/OhCfvq2sBERQ5twI5C', '2022-11-20', NULL, 'Restaurant'),
(29, 'kihansa', 'jaya', 'kiha123', 'kiha123@gmail.com', '$2y$04$/qOp.R0SvBg6VfttZtnkCuXmYLqdCcwqZhSWVp9psuMh8l9dXfPsy', '2022-11-20', NULL, 'Citizen'),
(30, 'ben', 'azlert', 'benny', 'ben@gmail.com', '$2y$04$7WfxvHjbADBK3Yv58VhuqOEX8CbEVSDwQ4FBH/pO7vtbfkgqLQBJe', '2022-11-20', NULL, 'Citizen'),
(31, 'deela', 'john', 'deee', 'dee@gmail.com', '$2y$04$O9uWmxalhnayK1f8hjrlMuBxOZA5SwpTD/LD9aYADN/O83J0EHKeC', '2022-11-21', NULL, 'Citizen'),
(32, 'lihasa', 'taniya', 'liha', 'liha@gmail.com', '$2y$04$wsH0sfJ7smOVU1GBiO9sEOguz788E2bv0kt8IXeopwLL2cSVHUmSW', '2022-11-21', NULL, 'Citizen'),
(33, 'katie', 'katie', 'Katie', 'katie@gmail.com', '$2y$04$q0Y28eDwPz0P0mYmB22lPuOWvT46M/tI/efYSWGoSdb6PuQ3SRlsm', '2022-11-21', NULL, 'Restaurant'),
(34, 'methma', 'poo', 'poo', 'poojani@gmail.com', '$2y$04$zWbf4Y1SzlgTvHhLQWC8MO5J6xuwrWJKT14.H4yMSjmuvtAeCPYRG', '2022-11-21', NULL, 'Restaurant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
