-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 07:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seat_reserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_id` varchar(3) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `seat_id`, `show_id`) VALUES
(1, 23, 'B4', 2),
(2, 23, 'E2', 2),
(3, 23, 'C5', 2),
(4, 23, 'A10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seat_id`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'B1'),
(12, 'B2'),
(13, 'B3'),
(14, 'B4'),
(15, 'B5'),
(16, 'B6'),
(17, 'B7'),
(18, 'B8'),
(19, 'B9'),
(20, 'B10'),
(21, 'C1'),
(22, 'C2'),
(23, 'C3'),
(24, 'C4'),
(25, 'C5'),
(26, 'C6'),
(27, 'C7'),
(28, 'C8'),
(29, 'C9'),
(30, 'C10'),
(31, 'D1'),
(32, 'D2'),
(33, 'D3'),
(34, 'D4'),
(35, 'D5'),
(36, 'D6'),
(37, 'D7'),
(38, 'D8'),
(39, 'D9'),
(40, 'D10'),
(41, 'E1'),
(42, 'E2'),
(43, 'E3'),
(44, 'E4'),
(45, 'E5'),
(46, 'E6'),
(47, 'E7'),
(48, 'E8'),
(49, 'E9'),
(50, 'E10'),
(51, 'F1'),
(52, 'F2'),
(53, 'F3'),
(54, 'F4'),
(55, 'F5'),
(56, 'F6'),
(57, 'F7'),
(58, 'F8'),
(59, 'F9'),
(60, 'F10'),
(61, 'G1'),
(62, 'G2'),
(63, 'G3'),
(64, 'G4'),
(65, 'G5'),
(66, 'G6'),
(67, 'G7'),
(68, 'G8'),
(69, 'G9'),
(70, 'G10');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `show_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `show_title`) VALUES
(1, 'Show #1'),
(2, 'Show #2'),
(3, 'Show #3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
