-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 08:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `usershelf`
--

CREATE TABLE `usershelf` (
  `book_id` INT(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(10) NOT NULL,
   PRIMARY KEY(`user_id`))
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

ALTER TABLE `usershelf`
  ADD CONSTRAINT `foreign key user_id` FOREIGN KEY (`user_id`) REFERENCES `userdetails` (`user_id`) ON UPDATE CASCADE;

INSERT INTO `usershelf` (`book_id`, `user_id`, `rating`) VALUES
(1, 1, 6);