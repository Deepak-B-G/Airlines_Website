-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 07:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passengers_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengers01`
--

CREATE TABLE `passengers01` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers01`
--

INSERT INTO `passengers01` (`id`, `name`, `age`, `gender`) VALUES
(1, '', 0, ''),
(2, '', 0, ''),
(3, '', 0, ''),
(4, '', 0, ''),
(5, '', 0, ''),
(6, '', 0, ''),
(7, '', 0, ''),
(8, '', 0, ''),
(9, '', 0, ''),
(10, '', 0, ''),
(11, '', 0, ''),
(12, '', 0, ''),
(13, '', 0, ''),
(14, 'manco', 45, 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers01`
--
ALTER TABLE `passengers01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers01`
--
ALTER TABLE `passengers01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



