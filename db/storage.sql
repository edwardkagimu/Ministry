-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 09:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `desktop`
--

CREATE TABLE `desktop` (
  `deck_serial_no` varchar(250) NOT NULL,
  `engrave_no` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `ram` varchar(250) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `funder` varchar(250) NOT NULL,
  `financial_year` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desktop`
--

INSERT INTO `desktop` (`deck_serial_no`, `engrave_no`, `brand`, `model`, `ram`, `storage`, `funder`, `financial_year`, `status`) VALUES
('2J7Q3R1', 'GEN/MIN/12334/YT', 'DELL', 'Dell latitude', '2GB', '500GB HDD', 'World Back', '12/12/2020/YEAR', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(11) NOT NULL,
  `deck_serial_no` varchar(250) NOT NULL,
  `lap_serial_no` varchar(250) NOT NULL,
  `print_serial_no` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `stationary_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `office` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_items`
--

CREATE TABLE `general_items` (
  `id` int(11) NOT NULL,
  `items` varchar(250) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `lap_serial_no` varchar(250) NOT NULL,
  `engrave_no` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `financial_year` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `ram` varchar(250) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `funder` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `print_serial_no` varchar(250) NOT NULL,
  `printer_no` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `printer_color` varchar(250) NOT NULL,
  `financial_year` varchar(250) NOT NULL,
  `funder` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `engravement_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `items` varchar(250) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `stationary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desktop`
--
ALTER TABLE `desktop`
  ADD PRIMARY KEY (`deck_serial_no`),
  ADD UNIQUE KEY `unique_key` (`engrave_no`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lap` (`lap_serial_no`),
  ADD KEY `fk_deck` (`deck_serial_no`),
  ADD KEY `fk_print` (`print_serial_no`),
  ADD KEY `fk_station` (`stationary_id`);

--
-- Indexes for table `general_items`
--
ALTER TABLE `general_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lap_serial_no`),
  ADD UNIQUE KEY `e_unique` (`engrave_no`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`print_serial_no`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`stationary_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD CONSTRAINT `fk_deck` FOREIGN KEY (`deck_serial_no`) REFERENCES `desktop` (`deck_serial_no`),
  ADD CONSTRAINT `fk_lap` FOREIGN KEY (`lap_serial_no`) REFERENCES `laptop` (`lap_serial_no`),
  ADD CONSTRAINT `fk_print` FOREIGN KEY (`print_serial_no`) REFERENCES `printers` (`print_serial_no`),
  ADD CONSTRAINT `fk_station` FOREIGN KEY (`stationary_id`) REFERENCES `stationary` (`stationary_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
