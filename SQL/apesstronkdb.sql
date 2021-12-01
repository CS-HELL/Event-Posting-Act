-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apestrongdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Account_ID` int(9) NOT NULL,
  `Account_Username` varchar(20) NOT NULL,
  `Bind_First_Name` varchar(20) NOT NULL,
  `Bind Middle Name` varchar(20) NOT NULL,
  `Bind Last Name` varchar(20) NOT NULL,
  `Account Creation Date` varchar(40) NOT NULL,
  `About` varchar(100) NOT NULL,
  `Likes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_events`
--

CREATE TABLE `posts_events` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_event_ID` int(4) NOT NULL,
  `Post_Event_Decription` varchar(100) NOT NULL,
  `Post_Event_Location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_general`
--

CREATE TABLE `posts_general` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_date` varchar(20) NOT NULL,
  `Post_tags` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls`
--

CREATE TABLE `posts_polls` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_poll_ID` int(4) NOT NULL,
  `Post_poll_choices` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_regular`
--

CREATE TABLE `posts_regular` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_regular_ID` int(4) NOT NULL,
  `Post_regular_main_body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `posts_events`
--
ALTER TABLE `posts_events`
  ADD PRIMARY KEY (`Post_event_ID`),
  ADD KEY `FK_Posts_Events` (`Post_general_ID`);

--
-- Indexes for table `posts_general`
--
ALTER TABLE `posts_general`
  ADD PRIMARY KEY (`Post_general_ID`);

--
-- Indexes for table `posts_polls`
--
ALTER TABLE `posts_polls`
  ADD PRIMARY KEY (`Post_poll_ID`),
  ADD KEY `FK_Post_Polls` (`Post_general_ID`);

--
-- Indexes for table `posts_regular`
--
ALTER TABLE `posts_regular`
  ADD PRIMARY KEY (`Post_regular_ID`),
  ADD KEY `FK_Post_Regular` (`Post_general_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_ID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_events`
--
ALTER TABLE `posts_events`
  MODIFY `Post_event_ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_general`
--
ALTER TABLE `posts_general`
  MODIFY `Post_general_ID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_polls`
--
ALTER TABLE `posts_polls`
  MODIFY `Post_poll_ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_regular`
--
ALTER TABLE `posts_regular`
  MODIFY `Post_regular_ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts_events`
--
ALTER TABLE `posts_events`
  ADD CONSTRAINT `FK_Posts_Events` FOREIGN KEY (`Post_general_ID`) REFERENCES `posts_events` (`Post_event_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `posts_general`
--
ALTER TABLE `posts_general`
  ADD CONSTRAINT `FK_Posts_Polls` FOREIGN KEY (`Post_general_ID`) REFERENCES `posts_polls` (`Post_poll_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Posts_Regular` FOREIGN KEY (`Post_general_ID`) REFERENCES `posts_regular` (`Post_regular_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
