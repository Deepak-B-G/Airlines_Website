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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment01`
--

CREATE TABLE `payment01` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `card_number` bigint(16) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` bigint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment01`
--

INSERT INTO `payment01` (`id`, `name`, `card_number`, `card_type`, `exp_date`, `cvv`) VALUES
(2, 'Deepak B G', 123456789123456, 'Visa', '2022-06-04', 123),
(3, 'Deepak B G', 123456789123456, 'Visa', '2022-06-04', 123),
(4, 'Deepak B G', 123456789123456, 'RuPay', '2022-06-04', 132),
(5, 'lkmmn', 12345687955446, 'Visa', '2022-06-04', 100),
(6, '88', 88, 'Visa', '0000-00-00', 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment01`
--
ALTER TABLE `payment01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment01`
--
ALTER TABLE `payment01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



