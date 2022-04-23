-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 08:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vp`
--

-- --------------------------------------------------------

--
-- Table structure for table `acquire`
--

CREATE TABLE IF NOT EXISTS `acquire` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) NOT NULL,
  `byy` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `message`, `date`) VALUES
(1, 'Oreoluwa', '07036543898', 'oladejioreoluwa94@gmail.com', 'Hello Admin', 'Sunday Aug 26, 2018 22:26');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `by` varchar(20) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `rent_sell` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type_of_house` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location_state` varchar(255) NOT NULL,
  `location_country` varchar(255) NOT NULL,
  `location_details` varchar(255) NOT NULL,
  `summary_of_house` varchar(255) NOT NULL,
  `number_room` bigint(20) NOT NULL,
  `size` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `by`, `pic`, `rent_sell`, `price`, `type_of_house`, `category`, `location_state`, `location_country`, `location_details`, `summary_of_house`, `number_room`, `size`, `status`, `date`) VALUES
(10, 'Admin', '885c0cd1d306313068c64be0d738cd6883516b2268.png', 'sale', '200', 'duplex', '200', 'Oyo state', 'Nigeria', ' eddwdw', ' dwdwd', 100, 200, 'acruired', 'Tuesday Nov 19, 2019 21:35'),
(11, 'Admin', 'effa7751c66c2ce8049d0f31b84077a01a001b68550.jpg', 'sale', '250', 'one room apartment', '230', 'England', 'UK', ' Hampshire, England, UK', ' A room apartment', 1, 150, 'acquired', 'Thursday Nov 21, 2019 05:51'),
(13, 'Admin', '60791b9a76cc752c9791be215410499da04fecbb99.jpg', 'rent', '250', 'duplex', '200', 'Oyo state', 'Nigeria', 'lagos', ' good', 1, 150, 'not acquired', 'Thursday Nov 21, 2019 17:14'),
(14, 'Admin', '5a03321a60d46c3b6db8872b466930ec2f51dbde269.jpg', 'rent', '200', 'one room apartment', '200', 'Oyo state', 'Nigeria', 'lagos', ' good', 100, 200, 'not acquired', 'Thursday Nov 21, 2019 17:15'),
(15, 'Admin', 'd4d6f81a51f249889eec04f173d6d0cf9746b4d5952.jpg', 'rent', '200', 'duplex', '230', 'Oyo state', 'Nigeria', ' lagos', ' nice', 10, 150, 'not acquired', 'Thursday Nov 21, 2019 17:17');

-- --------------------------------------------------------

--
-- Table structure for table `property_message`
--

CREATE TABLE IF NOT EXISTS `property_message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `property_message`
--

INSERT INTO `property_message` (`id`, `property_id`, `name`, `phone`, `email`, `message`, `date`) VALUES
(1, 7, 'Oladeji', '07036543898', 'oladejioreoluwa94@gmail.com', 'Please I want to buy this house', 'Thursday Aug 23, 2018 21:07'),
(2, 7, 'Oladeji', '08032882584', 'aramideemmanuel97@gmail.com', 'hello', 'Thursday Aug 23, 2018 22:58'),
(3, 8, 'Bro Biodun', '08032882584', 'aramideemmanuel97@gmail.com', 'I love it', 'Thursday Aug 23, 2018 23:02'),
(4, 8, 'emmanuel', '08032882584', 'aramideemmanuel97@gmail.com', 'good', 'Saturday Aug 25, 2018 11:21'),
(5, 8, 'Temitope', '08170628888', 'adewunitemitope69@gmail.com', 'I want to buy thishouse', 'Saturday Aug 25, 2018 16:14'),
(6, 10, 'Oladeji Oreoluwa', '+2347036543898', 'oladejioreoluwa94@gmail.com', 'hello', 'Tuesday Nov 19, 2019 21:40'),
(7, 11, 'Oladeji Oreoluwa', '+2347036543898', 'oladejioreoluwa94@gmail.com', 'i am not satisfied with this property. i need another', 'Thursday Nov 21, 2019 06:07'),
(8, 11, 'Oladeji Oreoluwa', '+2347036543898', 'oladejioreoluwa94@gmail.com', 'i am not satisfied with this property. i need another', 'Thursday Nov 21, 2019 06:07');

-- --------------------------------------------------------

--
-- Table structure for table `property_userdemand`
--

CREATE TABLE IF NOT EXISTS `property_userdemand` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `property_userdemand`
--

INSERT INTO `property_userdemand` (`id`, `property_id`, `user_id`, `name`, `message`, `date`) VALUES
(4, 13, 1, 'vabadia', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:47'),
(5, 14, 1, 'vabadia', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:48'),
(6, 13, 1, 'vabadia', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:48'),
(7, 13, 1, 'vabadia', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:48'),
(8, 15, 1, 'vabadia', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:48'),
(9, 13, 6, 'olad@gmail.com', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:50'),
(10, 15, 6, 'olad@gmail.com', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:50'),
(11, 15, 6, 'olad@gmail.com', 'I want to acquire this property', 'Thursday Nov 21, 2019 17:51'),
(12, 13, 6, 'olad@gmail.com', 'I want to acquire this property', 'Thursday Nov 21, 2019 18:01');

-- --------------------------------------------------------

--
-- Table structure for table `reply_messages`
--

CREATE TABLE IF NOT EXISTS `reply_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reply_pmessages`
--

CREATE TABLE IF NOT EXISTS `reply_pmessages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reply_pmessages`
--

INSERT INTO `reply_pmessages` (`id`, `message_id`, `email`, `message`, `dates`) VALUES
(8, 1, 'oladejioreoluwa94@gmail.com', 'ok', 'Sunday Aug 26, 2018 23:28');

-- --------------------------------------------------------

--
-- Table structure for table `reply_userpmessages`
--

CREATE TABLE IF NOT EXISTS `reply_userpmessages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `propertyid` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reply_userpmessages`
--

INSERT INTO `reply_userpmessages` (`id`, `message_id`, `userid`, `propertyid`, `email`, `message`, `dates`) VALUES
(8, 2, 6, 10, 'olad@gmail.com', '4e156b21590892de1000d32b478f7258813c95c1787.jpg', 'Wednesday Nov 20, 2019 18:15'),
(9, 3, 7, 11, 'nancy4peace2002@gmail.com', 'f2916e0bccc130b2d494adf548050229dbc4389a322.docx', 'Thursday Nov 21, 2019 06:19');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `passport` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `othernames` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `passport`, `surname`, `othernames`, `gender`, `country`, `email`, `number`, `password`, `dates`) VALUES
(2, '904d2fe115f63944bc3d0c262ae53bf7953f3f65oladejioreoluwa94@gmail.com.jpg', 'Oladeji', 'Oreoluwa Emmanuel', 'male', 'Nigeria', 'oladejioreoluwa94@gmail.com', '07036543898', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Thursday Aug 30, 2018 22:21'),
(3, '2e1dd26f98140fdbd5590843fa589eb4fd07610eoladejioreoluwa@gmail.com.jpg', 'Oladeji', 'Oreoluwa', 'female', 'NIgeria', 'oladejioreoluwa@gmail.com', '07036543899', 'adcd7048512e64b48da55b027577886ee5a36350', 'Thursday Aug 30, 2018 22:27'),
(6, '015a72f9d61ede14f956cf5988eba20cfc4d3a4e584.png', 'Oreoluwa', 'hjkl', 'male', 'Nigeria', 'olad@gmail.com', '07036543898', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Tuesday Nov 19, 2019 21:03'),
(7, 'd06aa50d524c9353ad0b72785709c0347a6846bc348.jpg', 'francis', 'peace', 'female', 'Nigeria', 'nancy4peace2002@gmail.com', '07066488477', '1ae7968e5ea43a8e6821ede1513657e3ba47584a', 'Thursday Nov 21, 2019 06:14'),
(8, 'e6664d43dbbb21179b95fbc3131d6c174294e8e3176.jpeg', 'Akanji', 'peace', 'male', 'Nigeria', 'oladejioreoluwa94@gmail.com', '123456789', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Monday Nov 25, 2019 20:11');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `page` varchar(255) NOT NULL,
  `min` varchar(20) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=193 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `page`, `min`, `hour`, `day`, `month`, `year`) VALUES
(1, '101.199.212.002', 'home', '50', '23', '30', '8', '2018'),
(2, '::1', 'about-us', '03', '21', '02', '09', '2018'),
(3, '::1', 'about-us', '12', '21', '02', '09', '2018'),
(4, '::1', 'contact', '12', '21', '02', '09', '2018'),
(5, '::1', 'contact', '50', '17', '05', '09', '2018'),
(6, '::1', 'about-us', '50', '17', '05', '09', '2018'),
(7, '::1', 'home', '38', '20', '05', '09', '2018'),
(8, '::1', 'home', '38', '20', '05', '09', '2018'),
(9, '::1', 'home', '39', '20', '05', '09', '2018'),
(10, '::1', 'circumstances', '39', '20', '05', '09', '2018'),
(11, '::1', 'home', '39', '20', '05', '09', '2018'),
(12, '::1', 'about-us', '39', '20', '05', '09', '2018'),
(13, '::1', 'home', '39', '20', '05', '09', '2018'),
(14, '::1', 'circumstances', '39', '20', '05', '09', '2018'),
(15, '::1', 'contact', '39', '20', '05', '09', '2018'),
(16, '::1', 'home', '39', '20', '05', '09', '2018'),
(17, '::1', 'home', '34', '06', '22', '09', '2018'),
(18, '::1', 'home', '36', '06', '22', '09', '2018'),
(19, '::1', 'home', '12', '12', '03', '10', '2018'),
(20, '::1', 'home', '13', '12', '03', '10', '2018'),
(21, '::1', 'home', '13', '12', '03', '10', '2018'),
(22, '::1', 'home', '13', '12', '03', '10', '2018'),
(23, '::1', 'home', '14', '12', '03', '10', '2018'),
(24, '::1', 'home', '14', '12', '03', '10', '2018'),
(25, '::1', 'home', '15', '12', '03', '10', '2018'),
(26, '::1', 'home', '15', '12', '03', '10', '2018'),
(27, '::1', 'home', '15', '12', '03', '10', '2018'),
(28, '::1', 'home', '16', '12', '03', '10', '2018'),
(29, '::1', 'home', '16', '12', '03', '10', '2018'),
(30, '::1', 'home', '18', '12', '03', '10', '2018'),
(31, '::1', 'home', '20', '12', '03', '10', '2018'),
(32, '::1', 'home', '21', '12', '03', '10', '2018'),
(33, '::1', 'home', '21', '12', '03', '10', '2018'),
(34, '::1', 'home', '21', '12', '03', '10', '2018'),
(35, '::1', 'home', '28', '12', '03', '10', '2018'),
(36, '::1', 'home', '36', '12', '03', '10', '2018'),
(37, '::1', 'home', '38', '12', '03', '10', '2018'),
(38, '::1', 'home', '38', '12', '03', '10', '2018'),
(39, '::1', 'home', '38', '12', '03', '10', '2018'),
(40, '::1', 'home', '38', '12', '03', '10', '2018'),
(41, '::1', 'home', '39', '12', '03', '10', '2018'),
(42, '::1', 'home', '55', '12', '03', '10', '2018'),
(43, '::1', 'home', '55', '12', '03', '10', '2018'),
(44, '::1', 'home', '56', '12', '03', '10', '2018'),
(45, '::1', 'home', '56', '12', '03', '10', '2018'),
(46, '::1', 'home', '11', '13', '03', '10', '2018'),
(47, '::1', 'home', '11', '13', '03', '10', '2018'),
(48, '::1', 'home', '12', '13', '03', '10', '2018'),
(49, '::1', 'home', '13', '13', '03', '10', '2018'),
(50, '::1', 'home', '13', '13', '03', '10', '2018'),
(51, '::1', 'home', '14', '13', '03', '10', '2018'),
(52, '::1', 'home', '49', '09', '26', '10', '2018'),
(53, '::1', 'home', '28', '04', '27', '10', '2018'),
(54, '::1', 'circumstances', '32', '07', '27', '10', '2018'),
(55, '::1', 'home', '32', '07', '27', '10', '2018'),
(56, '::1', 'home', '34', '07', '27', '10', '2018'),
(57, '::1', 'home', '34', '07', '27', '10', '2018'),
(58, '::1', 'home', '36', '07', '27', '10', '2018'),
(59, '::1', 'home', '50', '07', '27', '10', '2018'),
(60, '::1', 'home', '51', '07', '27', '10', '2018'),
(61, '::1', 'home', '55', '07', '27', '10', '2018'),
(62, '::1', 'home', '58', '10', '27', '10', '2018'),
(63, '::1', 'home', '00', '11', '27', '10', '2018'),
(64, '::1', 'home', '04', '12', '27', '10', '2018'),
(65, '::1', 'home', '24', '01', '29', '10', '2018'),
(66, '::1', 'home', '17', '06', '25', '10', '2019'),
(67, '::1', 'home', '18', '06', '25', '10', '2019'),
(68, '::1', 'contact', '18', '06', '25', '10', '2019'),
(69, '::1', 'home', '25', '06', '25', '10', '2019'),
(70, '::1', 'home', '30', '06', '25', '10', '2019'),
(71, '::1', 'home', '32', '06', '25', '10', '2019'),
(72, '::1', 'home', '37', '06', '25', '10', '2019'),
(73, '::1', 'about-us', '37', '06', '25', '10', '2019'),
(74, '::1', 'about-us', '38', '06', '25', '10', '2019'),
(75, '::1', 'contact', '39', '06', '25', '10', '2019'),
(76, '::1', 'contact', '40', '06', '25', '10', '2019'),
(77, '::1', 'contact', '42', '06', '25', '10', '2019'),
(78, '::1', 'home', '43', '06', '25', '10', '2019'),
(79, '::1', 'contact', '43', '06', '25', '10', '2019'),
(80, '::1', 'contact', '44', '06', '25', '10', '2019'),
(81, '::1', 'contact', '45', '06', '25', '10', '2019'),
(82, '::1', 'contact', '49', '06', '25', '10', '2019'),
(83, '::1', 'contact', '50', '06', '25', '10', '2019'),
(84, '::1', 'contact', '51', '06', '25', '10', '2019'),
(85, '::1', 'contact', '51', '06', '25', '10', '2019'),
(86, '::1', 'contact', '51', '06', '25', '10', '2019'),
(87, '::1', 'contact', '52', '06', '25', '10', '2019'),
(88, '::1', 'contact', '54', '06', '25', '10', '2019'),
(89, '::1', 'contact', '55', '06', '25', '10', '2019'),
(90, '::1', 'contact', '55', '06', '25', '10', '2019'),
(91, '::1', 'contact', '56', '06', '25', '10', '2019'),
(92, '::1', 'contact', '56', '06', '25', '10', '2019'),
(93, '::1', 'contact', '57', '06', '25', '10', '2019'),
(94, '::1', 'contact', '09', '07', '25', '10', '2019'),
(95, '::1', 'contact', '59', '08', '25', '10', '2019'),
(96, '::1', 'home', '59', '08', '25', '10', '2019'),
(97, '::1', 'home', '40', '18', '19', '11', '2019'),
(98, '::1', 'home', '40', '18', '19', '11', '2019'),
(99, '::1', 'about-us', '41', '18', '19', '11', '2019'),
(100, '::1', 'home', '42', '18', '19', '11', '2019'),
(101, '::1', 'home', '42', '18', '19', '11', '2019'),
(102, '::1', 'home', '45', '18', '19', '11', '2019'),
(103, '::1', 'home', '46', '18', '19', '11', '2019'),
(104, '::1', 'home', '48', '18', '19', '11', '2019'),
(105, '::1', 'home', '50', '18', '19', '11', '2019'),
(106, '::1', 'home', '50', '18', '19', '11', '2019'),
(107, '::1', 'home', '51', '18', '19', '11', '2019'),
(108, '::1', 'home', '51', '18', '19', '11', '2019'),
(109, '::1', 'home', '57', '18', '19', '11', '2019'),
(110, '::1', 'home', '57', '18', '19', '11', '2019'),
(111, '::1', 'home', '59', '18', '19', '11', '2019'),
(112, '::1', 'home', '00', '19', '19', '11', '2019'),
(113, '::1', 'home', '01', '19', '19', '11', '2019'),
(114, '::1', 'home', '02', '19', '19', '11', '2019'),
(115, '::1', 'home', '04', '19', '19', '11', '2019'),
(116, '::1', 'home', '05', '19', '19', '11', '2019'),
(117, '::1', 'home', '05', '19', '19', '11', '2019'),
(118, '::1', 'home', '06', '19', '19', '11', '2019'),
(119, '::1', 'home', '06', '19', '19', '11', '2019'),
(120, '::1', 'about-us', '10', '19', '19', '11', '2019'),
(121, '::1', 'about-us', '10', '19', '19', '11', '2019'),
(122, '::1', 'about-us', '11', '19', '19', '11', '2019'),
(123, '::1', 'about-us', '11', '19', '19', '11', '2019'),
(124, '::1', 'about-us', '21', '19', '19', '11', '2019'),
(125, '::1', 'about-us', '22', '19', '19', '11', '2019'),
(126, '::1', 'about-us', '22', '19', '19', '11', '2019'),
(127, '::1', 'about-us', '22', '19', '19', '11', '2019'),
(128, '::1', 'about-us', '23', '19', '19', '11', '2019'),
(129, '::1', 'about-us', '38', '19', '19', '11', '2019'),
(130, '::1', 'about-us', '38', '19', '19', '11', '2019'),
(131, '::1', 'about-us', '45', '20', '19', '11', '2019'),
(132, '::1', 'about-us', '50', '20', '19', '11', '2019'),
(133, '::1', 'about-us', '50', '20', '19', '11', '2019'),
(134, '::1', 'about-us', '50', '20', '19', '11', '2019'),
(135, '::1', 'about-us', '50', '20', '19', '11', '2019'),
(136, '::1', 'about-us', '51', '20', '19', '11', '2019'),
(137, '::1', 'about-us', '51', '20', '19', '11', '2019'),
(138, '::1', 'about-us', '53', '20', '19', '11', '2019'),
(139, '::1', 'about-us', '53', '20', '19', '11', '2019'),
(140, '::1', 'about-us', '54', '20', '19', '11', '2019'),
(141, '::1', 'about-us', '54', '20', '19', '11', '2019'),
(142, '::1', 'about-us', '55', '20', '19', '11', '2019'),
(143, '::1', 'about-us', '55', '20', '19', '11', '2019'),
(144, '::1', 'about-us', '56', '20', '19', '11', '2019'),
(145, '::1', 'about-us', '57', '20', '19', '11', '2019'),
(146, '::1', 'about-us', '57', '20', '19', '11', '2019'),
(147, '::1', 'about-us', '57', '20', '19', '11', '2019'),
(148, '::1', 'about-us', '58', '20', '19', '11', '2019'),
(149, '::1', 'about-us', '01', '21', '19', '11', '2019'),
(150, '::1', 'about-us', '01', '21', '19', '11', '2019'),
(151, '::1', 'about-us', '02', '21', '19', '11', '2019'),
(152, '::1', 'about-us', '03', '21', '19', '11', '2019'),
(153, '::1', 'about-us', '03', '21', '19', '11', '2019'),
(154, '::1', 'about-us', '04', '21', '19', '11', '2019'),
(155, '::1', 'home', '11', '21', '19', '11', '2019'),
(156, '::1', 'home', '40', '21', '19', '11', '2019'),
(157, '::1', 'home', '40', '21', '19', '11', '2019'),
(158, '::1', 'home', '54', '07', '20', '11', '2019'),
(159, '::1', 'home', '32', '17', '20', '11', '2019'),
(160, '::1', 'home', '56', '17', '20', '11', '2019'),
(161, '::1', 'home', '16', '18', '20', '11', '2019'),
(162, '::1', 'home', '46', '18', '20', '11', '2019'),
(163, '::1', 'home', '46', '18', '20', '11', '2019'),
(164, '::1', 'home', '44', '05', '21', '11', '2019'),
(165, '::1', 'home', '53', '05', '21', '11', '2019'),
(166, '::1', 'about-us', '54', '05', '21', '11', '2019'),
(167, '::1', 'contact', '54', '05', '21', '11', '2019'),
(168, '::1', 'home', '06', '06', '21', '11', '2019'),
(169, '::1', 'home', '07', '06', '21', '11', '2019'),
(170, '::1', 'home', '07', '06', '21', '11', '2019'),
(171, '::1', 'home', '08', '06', '21', '11', '2019'),
(172, '::1', 'home', '14', '06', '21', '11', '2019'),
(173, '::1', 'home', '15', '06', '21', '11', '2019'),
(174, '::1', 'home', '16', '06', '21', '11', '2019'),
(175, '::1', 'home', '21', '06', '21', '11', '2019'),
(176, '::1', 'home', '05', '17', '21', '11', '2019'),
(177, '::1', 'home', '09', '17', '21', '11', '2019'),
(178, '::1', 'home', '09', '17', '21', '11', '2019'),
(179, '::1', 'home', '17', '17', '21', '11', '2019'),
(180, '::1', 'home', '49', '17', '21', '11', '2019'),
(181, '::1', 'home', '50', '17', '21', '11', '2019'),
(182, '::1', 'home', '46', '19', '25', '11', '2019'),
(183, '::1', 'home', '55', '19', '25', '11', '2019'),
(184, '::1', 'home', '57', '19', '25', '11', '2019'),
(185, '::1', 'home', '59', '19', '25', '11', '2019'),
(186, '::1', 'home', '10', '20', '25', '11', '2019'),
(187, '::1', 'home', '10', '20', '25', '11', '2019'),
(188, '::1', 'home', '11', '20', '25', '11', '2019'),
(189, '::1', 'home', '12', '20', '25', '11', '2019'),
(190, '::1', 'home', '14', '20', '25', '11', '2019'),
(191, '::1', 'home', '14', '20', '25', '11', '2019'),
(192, '::1', 'home', '15', '20', '25', '11', '2019');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
