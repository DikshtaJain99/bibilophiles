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

CREATE TABLE `userdetails` (
  `user_id` INT(11) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(20) NOT NULL,
  `userage` INT(11) NOT NULL,
  `password` VARCHAR(500) Not NULL,
  PRIMARY KEY(`user_id`))
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `name`, `email`, `userage`, `password`) VALUES
(1, 'test', 'a@b.c', '1', '$2y$04$hn33Rf8HBMUvGGF7IS8IiORAXQv6pie1h5kpkH6jrGsBsNFsdy3VW');

set foreign_key_checks = 0;

ALTER TABLE `userdetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  set foreign_key_checks = 1;