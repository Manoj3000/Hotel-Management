-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 10:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoteldemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `done`
--

CREATE TABLE IF NOT EXISTS `done` (
  `receipt_no` varchar(100) NOT NULL,
  `usrname` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `guests` int(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `days` varchar(100) NOT NULL,
  `total_bill` varchar(100) NOT NULL,
  PRIMARY KEY (`receipt_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(4, 'admin', '1234'),
(5, 'manoj', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact no` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `roomtype` varchar(30) NOT NULL,
  `rooms` int(30) NOT NULL,
  `guests` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `room_no` int(30) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `room_type`, `price`, `status`, `checkin`, `checkout`) VALUES
(8, 101, 'Single', 1200, 'Available', '0000-00-00', '0000-00-00'),
(9, 102, 'Single', 1200, 'Available', '0000-00-00', '0000-00-00'),
(10, 103, 'Single', 1200, 'Available', '0000-00-00', '0000-00-00'),
(11, 201, 'Double', 1800, 'Available', '0000-00-00', '0000-00-00'),
(12, 202, 'Double', 1800, 'Available', '0000-00-00', '0000-00-00'),
(13, 203, 'Double', 1800, 'Available', '0000-00-00', '0000-00-00'),
(14, 301, 'Family', 2200, 'Available', '0000-00-00', '0000-00-00'),
(15, 302, 'Family', 2200, 'Available', '0000-00-00', '0000-00-00'),
(16, 303, 'Family', 2200, 'Available', '0000-00-00', '0000-00-00'),
(17, 401, 'Luxury', 4200, 'Available', '0000-00-00', '0000-00-00'),
(18, 402, 'Luxury', 4200, 'Available', '0000-00-00', '0000-00-00'),
(19, 403, 'Luxury', 4200, 'Available', '0000-00-00', '0000-00-00'),
(20, 501, 'Honeymoon', 3500, 'Available', '0000-00-00', '0000-00-00'),
(21, 502, 'Honeymoon', 3500, 'Available', '0000-00-00', '0000-00-00'),
(22, 503, 'Honeymoon', 3500, 'Available', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `rooms` int(30) NOT NULL,
  `guests` int(30) NOT NULL,
  `roomno` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
