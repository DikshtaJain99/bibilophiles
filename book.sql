-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 06:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `name`, `email`, `password`) VALUES
(0, 'admin', 'admin@gmail.com', 'YWRtaW4=');

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `dop` date NOT NULL,
  `agegroup` int(100) NOT NULL,
  `onshelf` varchar(10) NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  `url` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`book_id`, `book_name`, `author`, `genre`, `dop`, `agegroup`, `onshelf`, `imgpath`, `url`) VALUES
(6, 'Alchemist', 'Paulo Coelho', 'Philosophy', '2010-06-16', 80, 'n', 'img/alchemist.jpg', 'harrypotter.php'),
(7, 'Assassins Creed', 'Oliver Bowden', 'Fantasy, Adventure', '2012-09-18', 50, 'n', 'img/assassins_creed.jpg', 'harrypotter.php'),
(8, 'Lord of the rings', 'J.R.R Tolkein', 'Fantasy', '2014-02-05', 40, 'n', 'img/lotr.jpg', 'harrypotter.php'),
(9, 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', 'Fantasy', '2020-01-14', 50, 'n', '', 'harrypotter.php'),
(10, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Fantasy', '2020-01-09', 50, 'n', '', 'harrypotter.php'),
(11, 'Harry Potter and the Prisoner of Azkaban', 'J.K Rowling', 'Fantasy', '2019-11-20', 50, 'n', '', 'harrypotter.php');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` varchar(5000) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userage` int(11) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `name`, `email`, `userage`, `password`) VALUES
(1, 'Brinda', 'brinda.ashar@somaiya.edu', 20, '$2y$04$N3VxmjWEJyvh8BeRHAGj5.1WgKohU8fFrqCsCKJx4laOC/xGHEUma'),
(2, 'Avinash', 'avi.bharadwaj@somaiya.edu', 20, '$2y$04$5lyhIyXeRF/SY5G8VsTyRui1X3yQ/sYdBpxivNGSoLMMGE9pcpgjK'),
(3, 'Sanjana', 'sanjana.j@somaiya.edu', 20, '$2y$04$2tnacvj0An7BvXmYPQus5O2GBsOkibVGvReC5KBS9EmNWFmpAgIzu'),
(4, 'Rushabh', 'rushabh.bid@somaiya.edu', 21, '$2y$04$j.It4tO/i28gopNRjCZXOekhSecnRKqKEtvGXExzNQ5HOL9DWM2mS');

-- --------------------------------------------------------

--
-- Table structure for table `usershelf`
--

CREATE TABLE `usershelf` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usershelf`
--

INSERT INTO `usershelf` (`book_id`, `user_id`, `rating`) VALUES
(6, 2, 8),
(6, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
