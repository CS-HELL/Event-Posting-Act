-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2021 at 08:40 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UID`, `Account_Type`, `Username`, `Password`, `Profile_Pic`, `First_Name`, `Last_Name`, `Account_Creation_Date`, `About`) VALUES
(1, 'ADMIN', 'root', '63a9f0ea7bb98050796b649e85481845', 'root_1.jpg', 'Jeremy', 'Madriaga', '10/21/2021', 'Babonkers'),
(2, 'ADMIN', 'Saiph', '63a9f0ea7bb98050796b649e85481845', 'saiph_1.jpg', 'Bryan', 'Capistrano', '12/3/2021', 'CSboi'),
(3, 'ADMIN', 'Teng', '63a9f0ea7bb98050796b649e85481845', 'teng_1.png', 'Austin', 'Andres', '12/03/2021', 'CSnoob'),
(4, 'MEMBER', 'Memeber', '63a9f0ea7bb98050796b649e85481845', 'exttra_1.png', 'Ara ara', 'Kawaii neko', '11/12/2021', 'Ara ara'),
(5, 'ADMIN', 'kaiser', '80c74513e7126a4d94574653b1b7f86d', 'defaultpfp.png', 'Kaiser', 'Napeek', '11/12/2021', ''),
(6, 'ADMIN', 'miguel', '9eb0c9605dc81a68731f61b3e0838937', 'defaultpfp.png', 'Miguel', 'Ferrer', '11/12/2021', 'elo'),
(7, 'ORGANIZER', 'yuri', '63a9f0ea7bb98050796b649e85481845', 'temp.png', 'Graeven Yuri', 'Videz', '11/12/2021', 'Elo');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(22) NOT NULL AUTO_INCREMENT,
  `comment_author` varchar(22) NOT NULL,
  `user_post_id_target` int(22) NOT NULL,
  `comment_body` varchar(1000) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

DROP TABLE IF EXISTS `event_participants`;
CREATE TABLE IF NOT EXISTS `event_participants` (
  `event_join_id` int(22) NOT NULL AUTO_INCREMENT,
  `participant` varchar(22) NOT NULL,
  `event_target_id` int(22) NOT NULL,
  `event_join_date` datetime NOT NULL,
  PRIMARY KEY (`event_join_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`event_join_id`, `participant`, `event_target_id`, `event_join_date`) VALUES
(2, 'Saiph', 2, '2021-12-20 00:50:58'),
(3, 'kaiser', 2, '2021-12-20 00:50:58'),
(40, 'root', 2, '2021-12-20 20:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `event_posts`
--

DROP TABLE IF EXISTS `event_posts`;
CREATE TABLE IF NOT EXISTS `event_posts` (
  `event_post_id` int(20) NOT NULL AUTO_INCREMENT,
  `event_author` varchar(20) NOT NULL,
  `event_title` varchar(500) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_description` varchar(20000) NOT NULL,
  `event_start_date_time` datetime NOT NULL,
  `event_end_date_time` datetime NOT NULL,
  `event_banner_image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`event_post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_posts`
--

INSERT INTO `event_posts` (`event_post_id`, `event_author`, `event_title`, `event_location`, `event_description`, `event_start_date_time`, `event_end_date_time`, `event_banner_image`) VALUES
(1, 'root', 'Africa Games Week 2021', 'Baguio City', 'Off the back of the last 4 year’s events Africa Games Week continues to drive exposure, opportunities, knowledge and investment to African Game Developers connecting them to the world. AGW', '2021-12-10 00:00:00', '2021-12-15 03:00:00', 'defaultpfp.png'),
(2, 'Saiph', 'PAX Unplugged 2021', 'Castillejos, Zambales', 'PAX Unplugged 2021 will be an exciting analog-focused extension of our already existing portfolio of PAX events. We’ve found that the Tabletop parts of PAX have grown and grown to', '2021-12-15 17:52:59', '2021-12-23 17:52:59', 'exttra_1.png'),
(19, 'root', 'CES 2022 (Hybrid)', 'Virtual', 'CESÂ® is the most influential tech event in the world â€” the proving ground for breakthrough technologies and global innovators. This is where the worldâ€™s biggest brands do business and meet new partners, and the sharpest innovators hit the stage. Owned and produced by the Consumer Technology Association (CTA)Â®, CES features every aspect of the tech sector.\n\nCES showcases companies including manufacturers, developers and suppliers of consumer technology hardware, content, technology delivery systems and more.\n\nIt also includes a conference program where the worldâ€™s business leaders and pioneering thinkers address the industryâ€™s most relevant issues.', '2021-12-27 12:00:00', '2021-12-27 12:00:00', 'IMG-61c05c504a0eb1.25653880.jpg'),
(21, 'yuri', 'TEKKEN 7 TOURNAMENT', 'Quantum, SM Baguio City', 'READY FOR THE RAMBULAN?\nGather your GROUPS OF THREE for a chance to win 30,000 pesos!\n\nREQUIREMENTS:\n-Must be 18 and above only\n-1 Valid ID (School ID accepted)\n-Entrance fee of 600/Team', '2022-01-10 10:00:00', '2022-01-10 10:00:00', 'IMG-61c067c778ffa9.04422691.png'),
(25, 'root', 'GamesBeat and Facebook Gaming Summit 2022 (Online)', 'Virtual', 'The 2nd Annual GamesBeat and Facebook Gaming Summit will uncover future gaming markets and trends, explore the major changes that are impacting the industry, and unveil new growth and monetization opportunities.', '2021-12-19 12:00:00', '2021-12-26 12:00:00', 'IMG-61c07e1fbe1e03.26343102.jpg'),
(26, 'root', 'GamesBeat: Into the Metaverse 2 (Online)', 'Virtual', 'From GamesBeat: â€œThe Metaverse seemed like science fiction for so many decades, but now, it feels like weâ€™re nearly there. Join GamesBeatâ€™s lead writer, Dean Takahashi, as we dive into the Metaverse one more time with top speakers and industry leaders.\n\nThree days of cutting-edge, highly curated content across the main stage, special focus tracks, and private boardroom sessions at the largest industry event exploring the Metaverse.\n\nWeâ€™ll delve into all of the avenues that could lead to the metaverse, and all of the different threads of the future that could unfold. Will it be accidental? Will it start with a walled garden? Or will we move straight into the open metaverse that will be decentralized and controlled by no one? Is it all just an illusion, or will the metaverse govern the commerce of the future?â€', '2021-12-12 12:00:00', '2021-12-12 12:00:00', 'IMG-61c0814a96f1f9.92530156.jpg'),
(27, 'root', 'Global Game Jam 2022', 'Virtual', 'The Global Game JamÂ® (GGJ) is the worldâ€™s largest game creation event taking place around the globe, typically at physical locations. A â€œgame jamâ€ is essentially a hackathon focused on game development. It is the growth of an idea that in todayâ€™s heavily connected world, we could come together, be creative, share experiences and express ourselves in a multitude of ways using video games â€“ it is very universal. The weekend stirs a global creative buzz in games, while at the same time exploring the process of development, be it programming, iterative design, narrative exploration or artistic expression. It is all condensed into a 48 hour development cycle. The GGJ encourages people with all kinds of backgrounds to participate and contribute to this global spread of game development and creativity.\n\nThe structure of a jam is usually that everyone gathers on Friday late afternoon, watches a short video keynote with advice from leading game developers, and then a secret theme is announced. All sites worldwide are then challenged to make games based on that same theme, with games to be completed by Sunday afternoon. In January 2020, we had a record-breaking year with 934 locations in 118 countries create 9,601 games in one weekend! And then in January 2021, we shifted GGJ to an online-only format due to the global pandemic and still hosted a great event with 585 virtual locations in 104 countries which made 6,383 games!\n\nThe jam is known for helping foster new friendships, increase confidence and opportunities within the community. The jam is always an intellectual challenge. People are invited to explore new technology tools, trying on new roles in development and testing their skills to do something that requires them to design, develop create, test and make a new game in the time span of 48 hours.', '2021-12-12 12:00:00', '2021-12-12 12:00:00', 'IMG-61c08183aaffe6.12334099.jpg'),
(54, 'root', 'Hamburg Games Conference 2022 (Hybrid)', 'Hamburg', 'The Hamburg Games Conference features B2B networking, talks and opportunities for companies, professionals and students. The 2021 edition was fully online and offered a digital interactive multiplayer experience which drew more than 650 visitors. This next edition will combine the successful online experience with in-person events in Hamburg.', '2021-12-12 12:00:00', '2021-12-12 12:00:00', 'IMG-61c08ac5a46d24.32229399.jpg');

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
