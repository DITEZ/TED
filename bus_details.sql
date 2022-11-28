-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus details`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_location` char(100) NOT NULL,
  `destination` char(100) NOT NULL,
  `payment` char(100) NOT NULL,
  `price` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `Driver` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `Route_number` int(11) NOT NULL,
  `start_location` char(30) NOT NULL,
  `destination` char(30) NOT NULL,
  `payment` text NOT NULL DEFAULT 'cash',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Route_number`, `start_location`, `destination`, `payment`, `price`) VALUES
(1, 'School', 'Nairobi', 'cash', 300),
(2, 'Mlolongo', 'Syokimau', 'cash', 100),
(3, 'school', 'Mlolongo', 'cash', 150),
(4, 'Nairobi', 'Devki', 'cash', 200),
(5, 'Nairobi', 'Syokimau', 'cash', 150),
(7, 'Nairobi', 'Cabanas', 'cash', 150);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `adm_no`, `phone_no`) VALUES
(1, 'teddy', '1234', '', ''),
(2, 'ted', '1234', '20-0909', '070000000'),
(3, 'Teddy Nyagaka', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '20-0000', '0789089090'),
(4, 'Muterian', '7c222fb2927d828af22f592134e8932480637c0d', '20-0934', '0702552626'),
(5, 'JLevis', '5554515012ffb135b0a8f99e8d9385e5fde64721', '20-1022', '0111726476'),
(6, 'JLevis', '5554515012ffb135b0a8f99e8d9385e5fde64721', '20-1022', '0111726476'),
(7, 'Dennis', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', '20-0622', '0703634578');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route` (`route_id`),
  ADD KEY `student` (`student_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Route_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `Route_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `route` FOREIGN KEY (`route_id`) REFERENCES `routes` (`Route_number`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
