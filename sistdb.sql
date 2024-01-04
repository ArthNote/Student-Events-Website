-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2023 at 11:00 AM
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
-- Database: `sistdb`
--
CREATE DATABASE IF NOT EXISTS `sistdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistdb`;

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
CREATE TABLE IF NOT EXISTS `event_details` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_description` varchar(10000) NOT NULL,
  `video_url` varchar(10000) DEFAULT NULL,
  `image_url` varchar(10000) NOT NULL,
  `image2` varchar(10000) DEFAULT NULL,
  `image3` varchar(10000) DEFAULT NULL,
  `video2` varchar(10000) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `user_id`, `event_name`, `event_description`, `video_url`, `image_url`, `image2`, `image3`, `video2`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(60, 1, 'Open Day', ' Join us for our annual Open House event, where you\'ll have the opportunity to explore our campus and learn more about the programs and resources we have to offer. Meet with professors, current students, and admissions staff to get a feel for what it\'s like to be a student here. There will also be a variety of activities and information sessions available for attendees.\n\n', '', 'https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/2422294/pexels-photo-2422294.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/3952080/pexels-photo-3952080.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '', '2023-06-11', '2023-06-14', '09:00:00', '05:00:00'),
(63, 1, 'Research Symposium', ' The Research Symposium is a showcase of the cutting-edge research being conducted by our faculty and students. Attendees will have the opportunity to hear presentations and view posters on a wide variety of topics, from the latest advancements in medicine to new technologies and innovations.', '', 'https://images.pexels.com/photos/9574517/pexels-photo-9574517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/7230836/pexels-photo-7230836.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '', '2023-04-12', '2023-04-12', '09:00:00', '05:00:00'),
(64, 1, 'Career Fair', 'The Career Fair is an excellent opportunity for students and recent graduates to connect with potential employers and learn about job and internship opportunities. Companies from a variety of industries will be in attendance, and there will be networking events and resume review sessions available as well.', '', 'https://images.pexels.com/photos/5673488/pexels-photo-5673488.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/7413999/pexels-photo-7413999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/7652329/pexels-photo-7652329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '', '2023-01-10', '2023-01-12', '09:00:00', '05:00:00'),
(65, 1, 'Guest Speaker Series', 'The Guest Speaker Series brings accomplished individuals from a wide range of fields to campus to share their experiences and insights with students. Past speakers have included business leaders, politicians, scientists, and more.', '', 'https://images.pexels.com/photos/3761509/pexels-photo-3761509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/6954162/pexels-photo-6954162.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/3321793/pexels-photo-3321793.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '', '2023-02-09', '2023-02-09', '09:00:00', '05:00:00'),
(66, 1, 'Campus Cultural Festival', ' The Campus Cultural Festival is a celebration of the diverse cultures represented at our university. The event will feature a variety of performances, food, and activities from various cultures, and is a great opportunity to learn more about different customs, traditions, and ways of life.', '', 'https://images.pexels.com/photos/2348182/pexels-photo-2348182.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/1165607/pexels-photo-1165607.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'https://images.pexels.com/photos/12727865/pexels-photo-12727865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '', '2022-12-03', '2022-12-08', '09:00:00', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `adress1` varchar(50) NOT NULL,
  `adress2` varchar(50) DEFAULT NULL,
  `adress3` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `title`, `firstname`, `lastname`, `gender`, `adress1`, `adress2`, `adress3`, `email`) VALUES
(1, 'admin', 'admin', 'student', 'yassine', 'moussaid', 'male', 'casablanca loupiot', '', '', 'taehyungykim10@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_details`
--
ALTER TABLE `event_details`
  ADD CONSTRAINT `event_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
