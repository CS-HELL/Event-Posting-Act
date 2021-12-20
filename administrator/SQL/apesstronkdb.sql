-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2021 at 06:20 AM
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
  `UID` int(100) NOT NULL AUTO_INCREMENT,
  `Account_Type` varchar(15) NOT NULL,
  `Username` varchar(8) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Profile_Pic` text NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Account_Creation_Date` varchar(40) NOT NULL,
  `About` varchar(100) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UID`, `Account_Type`, `Username`, `Password`, `Profile_Pic`, `First_Name`, `Last_Name`, `Account_Creation_Date`, `About`) VALUES
(1, 'ADMIN', 'root', '63a9f0ea7bb98050796b649e85481845', 'root_1.jpg', 'Jeremy', 'Madriaga', '10/21/2021', 'Babonkers'),
(2, 'ADMIN', 'Saiph', '63a9f0ea7bb98050796b649e85481845', 'saiph_1.jpg', 'Bryan', 'Capistrano', '12/3/2021', 'CSboi'),
(3, 'ADMIN', 'Teng', '63a9f0ea7bb98050796b649e85481845', 'teng_1.png', 'Austin', 'Andres', '12/03/2021', 'CSnoob'),
(4, 'MEMBER', 'Memeber', '63a9f0ea7bb98050796b649e85481845', 'exttra_1.png', 'Ara ara', 'Kawaii neko', '11/12/2021', 'Ara ara'),
(5, 'ADMIN', 'kaiser', '80c74513e7126a4d94574653b1b7f86d', 'defaultpfp.png', 'Kaiser', 'Napeek', '11/12/2021', ''),
(6, 'ADMIN', 'miguel', '9eb0c9605dc81a68731f61b3e0838937', 'defaultpfp.png', 'Miguel', 'Ferrer', '11/12/2021', 'elo');

-- --------------------------------------------------------

--
-- Table structure for table `event_posts`
--

DROP TABLE IF EXISTS `event_posts`;
CREATE TABLE IF NOT EXISTS `event_posts` (
  `event_post_id` int(20) NOT NULL AUTO_INCREMENT,
  `event_author` varchar(20) NOT NULL,
  `event_title` varchar(30) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_description` varchar(2000) NOT NULL,
  `event_start_date_time` datetime NOT NULL,
  `event_end_date_time` datetime NOT NULL,
  `event_banner_image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`event_post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_posts`
--

INSERT INTO `event_posts` (`event_post_id`, `event_author`, `event_title`, `event_location`, `event_description`, `event_start_date_time`, `event_end_date_time`, `event_banner_image`) VALUES
(1, 'root', 'Africa Games Week 2021', 'Baguio City', 'Off the back of the last 4 year’s events Africa Games Week continues to drive exposure, opportunities, knowledge and investment to African Game Developers connecting them to the world. AGW', '2021-12-10 00:00:00', '2021-12-15 03:00:00', 'defaultpfp.png'),
(2, 'Saiph', 'PAX Unplugged 2021', 'Castillejos, Zambales', 'PAX Unplugged 2021 will be an exciting analog-focused extension of our already existing portfolio of PAX events. We’ve found that the Tabletop parts of PAX have grown and grown to', '2021-12-15 17:52:59', '2021-12-23 17:52:59', 'exttra_1.png'),
(3, 'Saiph', 'wqe', 'qwew', 'asd', '2021-12-21 12:00:00', '2021-12-22 12:00:00', NULL),
(4, 'root', 'sd', 'sd', 'asd', '2021-12-22 12:00:00', '2021-12-22 12:00:00', NULL),
(5, 'root', 'df', 'df', 'df', '2021-12-22 12:00:00', '2021-12-22 12:00:00', ''),
(6, 'root', 'df', 'df', 'df', '2021-12-23 12:00:00', '2021-12-23 12:00:00', ''),
(7, 'root', 'sd', 'sd', 'asd', '2021-12-22 12:00:00', '2021-12-22 12:00:00', ''),
(8, 'root', 'sd', 'sd', 'sd', '2021-12-16 12:00:00', '2021-12-16 12:00:00', ''),
(9, 'root', 'sd', 'sd', 'sd', '2021-12-23 12:00:00', '2021-12-23 12:00:00', ''),
(10, 'root', 'asd', 'asd', 'asd', '2021-12-23 12:00:00', '2021-12-23 12:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

DROP TABLE IF EXISTS `user_posts`;
CREATE TABLE IF NOT EXISTS `user_posts` (
  `post_id` int(50) NOT NULL AUTO_INCREMENT,
  `post_author_uid` int(100) NOT NULL,
  `post_type` enum('Regular','Media','Poll','Event') NOT NULL,
  `post_datetime` varchar(50) NOT NULL,
  `post_datetime_update` varchar(50) NOT NULL,
  `post_title` varchar(256) DEFAULT NULL,
  `post_content` varchar(1000) NOT NULL,
  `post_image` longtext,
  `likers_uid` int(100) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`post_id`, `post_author_uid`, `post_type`, `post_datetime`, `post_datetime_update`, `post_title`, `post_content`, `post_image`, `likers_uid`) VALUES
(1, 1, 'Regular', 'Jun 25, 2021 at 7:50 pm', '', 'Reburn', '\"I thought I were no more than a bystander till I felt a touch so real\" - Mei (Nagazora, 2014). \"I will no longer be a transient when I see smiles with tears\" - Bronya (St. Freya, 2016). \"If I have never known the sore of farewell and pain of sacrifice\" - Kiana (Schiksal HQ, 2016 - Nagazora, 2017). Edit: Until now have I noticed how it came full circle to the very place the story started.', '', NULL),
(2, 2, 'Regular', 'Jun 25, 2021 at 3:50 pm', '', 'Testing', 'Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma - which is living with the results of other people\'s thinking.\" \n\n- Steve Jobs', '', NULL),
(3, 1, 'Regular', 'Jul 25, 2021 at 3:50 pm', '', 'Testing', '\"The whole secret of a successful life is to find out what is one\'s destiny to do, and then do it.\"\n\n- Henry Ford', '', NULL),
(4, 4, 'Regular', 'Jun 25, 2021 at 3:50 pm', '', '17701*', '$name = $_FILES[\'file\'][\'name\'];\r\n$target_dir = \"upload/\";\r\n$target_file = $target_dir . basename($_FILES[\"file\"][\"name\"]);', NULL, NULL),
(5, 4, 'Regular', 'Jun 25, 2021 at 3:50 pm', '', '17701*', '\"The world isn\'t perfect. But it\'s there for us, doing the best it can....that\'s what makes it so damn beautiful.\"\r\n- Roy Mustang (Full Metal Alchemist)', NULL, NULL),
(6, 4, 'Regular', 'Jun 25, 2021 at 3:50 pm', '', 'NOTHING ', '\"We are all like fireworks: we climb, we shine and always go our separate ways and become further apart. But even when that time comes, let\'s not disappear like a firework and continue to shine.. forever.\"', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
