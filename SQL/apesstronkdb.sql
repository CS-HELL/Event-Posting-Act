-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2021 at 06:45 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apesstronkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `UID` int(9) NOT NULL AUTO_INCREMENT,
  `Username` varchar(8) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Account_Creation_Date` varchar(40) NOT NULL,
  `About` varchar(100) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UID`, `Username`, `Password`, `First_Name`, `Last_Name`, `Account_Creation_Date`, `About`) VALUES
(1, 'root', 'root', 'Jeremy', 'Madriaga', '10/21/2021', 'Babonkers');

-- --------------------------------------------------------

--
-- Table structure for table `posts_events`
--

DROP TABLE IF EXISTS `posts_events`;
CREATE TABLE IF NOT EXISTS `posts_events` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_event_ID` int(4) NOT NULL AUTO_INCREMENT,
  `Post_Event_Decription` varchar(100) NOT NULL,
  `Post_Event_Location` varchar(40) NOT NULL,
  PRIMARY KEY (`Post_event_ID`),
  KEY `FK_Posts_Events` (`Post_general_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_general`
--

DROP TABLE IF EXISTS `posts_general`;
CREATE TABLE IF NOT EXISTS `posts_general` (
  `Post_general_ID` int(9) NOT NULL AUTO_INCREMENT,
  `Post_date` varchar(20) NOT NULL,
  `Post_tags` varchar(20) NOT NULL,
  PRIMARY KEY (`Post_general_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls`
--

DROP TABLE IF EXISTS `posts_polls`;
CREATE TABLE IF NOT EXISTS `posts_polls` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_poll_ID` int(4) NOT NULL AUTO_INCREMENT,
  `Post_poll_choices` varchar(1000) NOT NULL,
  PRIMARY KEY (`Post_poll_ID`),
  KEY `FK_Post_Polls` (`Post_general_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_regular`
--

DROP TABLE IF EXISTS `posts_regular`;
CREATE TABLE IF NOT EXISTS `posts_regular` (
  `Post_general_ID` int(9) NOT NULL,
  `Post_regular_ID` int(4) NOT NULL AUTO_INCREMENT,
  `Post_regular_main_body` varchar(1000) NOT NULL,
  PRIMARY KEY (`Post_regular_ID`),
  KEY `FK_Post_Regular` (`Post_general_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
