-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 07:50 PM
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
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tickets01`
--

CREATE TABLE `booking_tickets01` (
  `id` int(11) NOT NULL,
  `f` varchar(20) NOT NULL,
  `t` varchar(20) NOT NULL,
  `FLIGHT` varchar(20) NOT NULL,
  `SEATING` varchar(20) NOT NULL,
  `TRIPTYPE` varchar(20) NOT NULL,
  `DATE` int(20) NOT NULL,
  `PEOPLE` int(30) NOT NULL,
  `NUMBER` int(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tickets01`
--

INSERT INTO `booking_tickets01` (`id`, `f`, `t`, `FLIGHT`, `SEATING`, `TRIPTYPE`, `DATE`, `PEOPLE`, `NUMBER`, `EMAIL`) VALUES
(1, 'Banglore', 'Mumbai', 'SELECT FLIGHT', 'SELECT SEATING', 'Round trip', 0, 0, 2147483647, 'boppanadeepak1637@gm'),
(2, '', '', '', 'SELECT SEATING', '', 0, 0, 0, ''),
(3, '', '', '', 'SELECT SEATING', '', 0, 0, 0, ''),
(4, 'Banglore', 'Ahmedabad', '', 'Economy-class', 'Round trip', 0, 0, 2147483647, '1234@gmail.com'),
(5, 'Banglore', 'Ahmedabad', '', 'Economy-class', 'Round trip', 0, 0, 2147483647, '1234@gmail.com'),
(6, 'Banglore', 'Ahmedabad', '', 'Economy-class', 'Round trip', 0, 0, 2147483647, '1234@gmail.com'),
(7, 'Banglore', 'Ahmedabad', '', 'Economy-class', 'Round trip', 0, 0, 2147483647, '1234@gmail.com'),
(8, 'Chennai', 'New Delhi', '', 'Economy-class', 'One-way trip', 0, 0, 2147483647, 'boppanadeepak1637@gm'),
(18, 'Banglore', 'Chennai', '', 'Economy-class', 'One-way trip', 0, 0, 2147483647, '1234@gmail.com'),
(19, 'Banglore', 'Chennai', '', 'Economy-class', 'One-way trip', 0, 0, 2147483647, 'boppanadeepak1637@gm'),
(20, 'Banglore', 'Chennai', '', 'Economy-class', '', 0, 0, 123, '1234@gmail.com'),
(21, '', '', '', 'SELECT SEATING', '', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tickets01`
--
ALTER TABLE `booking_tickets01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tickets01`
--
ALTER TABLE `booking_tickets01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



