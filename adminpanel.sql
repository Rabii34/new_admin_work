-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 12:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `cdescription` varchar(255) NOT NULL,
  `cstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `ctype`, `cdescription`, `cstatus`) VALUES
(3, 'sports', 'football', 'best football for your player', 1),
(5, 'flower', 'rose', 'fresh flowers', 1),
(6, 'fruit', 'banana', 'fresh banana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpassword`, `phone`, `status`) VALUES
(2, 'Alishba', 'alishba@gmail.com', '$2y$10$XCm/m5hZCxFL/FEUkid4eukmDy1BtgcxksdeBJQ92oa6k6.c1HfCO', '', '01807553318', 1),
(4, 'Kinza', 'kinza@gmail.com', '$2y$10$hgoLoN60j/MLuNRMSmLikuFkBrqoRrK9cLwWBB0NjNTZd16qhFdo.', '', '09765323575', 1),
(5, 'Rabia', 'rabii@gmail.com', '$2y$10$Mrd.FZifZlMT4ZvExYpY3OBXLIhefTbPDxTWWiiBIJcAD68JhQ1Li', '', '05236452371', 0),
(9, 'Tooba', 'tooba@gmail.com', '$2y$10$IyKiK/2xPZW6N3QePfy7yOL4P1Q07plZhUjg.1fpCmxpLcSqmtce2', '', '02873534470', 1),
(13, 'hoor', 'hhoor@gmail.com', '$2y$10$iLfAqNQFPSi0/MkB8V8MXuxZE8j3eiOIakKZVulykvPTVVJQx2Fmy', '', '08753697111', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
