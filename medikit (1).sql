-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 08:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medikit`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` bigint(100) NOT NULL,
  `doctorID` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timeslot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `doctorID`, `userid`, `name`, `phone`, `email`, `date`, `timeslot`) VALUES
(17, 1, 3, 'PRAKASH KUMAR', 9931021948, 'prakashpusa@gmail.com', '08/02/2018', '9:30-10:00'),
(19, 3, 3, 'PRAKASH KUMAR', 9931021947, 'prakashpu@gmail.com', '08/02/2018', '10:00-10:30'),
(20, 2, 4, 'Prachi', 7465896456, 'abc@gmail.com', '08/16/2018', '10:00-10:30');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorID` int(50) NOT NULL,
  `doct_name` varchar(100) NOT NULL,
  `doct_mail` varchar(100) NOT NULL,
  `doct_pass` varchar(30) NOT NULL,
  `doct_phone` bigint(20) NOT NULL,
  `doct_spec` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorID`, `doct_name`, `doct_mail`, `doct_pass`, `doct_phone`, `doct_spec`) VALUES
(1, 'Amit Kumar', 'amitkumar@gmail.com', 'amit12345', 9931021941, 'Heart'),
(2, 'Anil KUmar', 'anilarys2k@gmail.com', 'anil12345', 9931021942, 'Child'),
(3, 'Adnan Khan', 'adnan@gmail.com', 'adnan12345', 9931021946, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblchild`
--

CREATE TABLE `tblchild` (
  `childid` int(10) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `allergy` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `pfname` varchar(50) NOT NULL,
  `plname` varchar(50) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `medication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchild`
--

INSERT INTO `tblchild` (`childid`, `userid`, `f_name`, `l_name`, `email`, `dob`, `gender`, `height`, `weight`, `bloodgrp`, `allergy`, `addr`, `pfname`, `plname`, `relation`, `mobile`, `medication`) VALUES
(1, 4, 'Soham', 'Sharma', 'prakashpusa@gmail.com', '15/07/2015', 'Male', '100', '45', 'A+', 'Irritants', '', 'Deepak', 'Kumar', 'Grandmother', 8863867067, 'zdxfcgvhbjnkm,');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(3, 'Soham', 'Sharma', 'prakashpusa@gmail.com', 8863867067, '12345678'),
(4, 'Prakash', 'Kumar', 'munnabhai.4746@gmail.com', 8845654565, '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_2` (`phone`),
  ADD UNIQUE KEY `phone_3` (`phone`),
  ADD UNIQUE KEY `phone_4` (`phone`),
  ADD KEY `phone_5` (`phone`),
  ADD KEY `doctorID` (`doctorID`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblchild`
--
ALTER TABLE `tblchild`
  ADD PRIMARY KEY (`childid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblchild`
--
ALTER TABLE `tblchild`
  MODIFY `childid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`doctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblchild`
--
ALTER TABLE `tblchild`
  ADD CONSTRAINT `tblchild_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
