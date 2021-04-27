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
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `book_id` INT(11) NOT NULL,
  `book_name` VARCHAR(100) NOT NULL,
  `author` VARCHAR(20) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `dop` date NOT NULL,
  `agegroup` int(100) Not NULL,
  `onshelf` VARCHAR(10) NOT NULL,
  PRIMARY KEY(`book_id`))
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`book_id`, `book_name`, `author`, `genre`, `dop`, `agegroup`, `onshelf`) VALUES
(1, 'test', 'bri', 'mystery', '2017-12-08', '20', 'y');

set foreign_key_checks = 0;

ALTER TABLE `bookdetails`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  set foreign_key_checks = 1;