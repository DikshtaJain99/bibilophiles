-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:46 AM
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
-- Database: `department`
--

-- --------------------------------------------------------


CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `token` varchar(500) NOT NULL,
  PRIMARY KEY(`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attended`
--

INSERT INTO `administrator` (`admin_id`, `name`, `password`, `token`) VALUES
(1, 'bri','$2a$07$3tpIyRFAsdnziwTURbAHpuHNtVOBJWd3HAZyVqR0PkD5tc3cBAiky', '0');