-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 12:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `book_name` varchar(500) NOT NULL,
  `author` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `dop` date NOT NULL,
  `agegroup` int(100) NOT NULL,
  `onshelf` varchar(10) NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`book_id`, `book_name`, `author`, `genre`, `dop`, `agegroup`, `onshelf`, `imgpath`) VALUES
(6, 'Alchemist', 'Paulo Coelho', 'Philosophy', '2010-06-16', 80, 'n', 'img/alchemist.jpg'),
(7, 'Assassins Creed', 'Oliver Bowden', 'Fantasy, Adventure', '2012-09-18', 50, 'n', 'img/assassins_creed.jpg'),
(8, 'Lord of the rings', 'J.R.R Tolkein', 'Fantasy', '2014-02-05', 40, 'n', 'img/lotr.jpg'),
(10, 'Elon Musk', 'Ashlee Vance', 'Biography', '2016-10-29', 60, 'n', 'img/musk.jpg'),
(11, 'Harry Potter and the Philosopher\'s Stone', 'J.K Rowling', 'Fantasy', '2018-10-10', 40, 'n', 'img/harrypotter.jpg'),
(13, 'Game of thrones', 'GRRM', 'Fantasy', '2018-10-13', 40, 'n', 'img/game_thrones.jpg'),
(14, 'Chicken Soup', 'joe', 'self help', '2018-10-20', 80, 'n', 'img/chicken soup.jpg');

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
  `password` varchar(500) NOT NULL,
  `imgpath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `name`, `email`, `userage`, `password`, `imgpath`) VALUES
(1, 'Brinda', 'brinda.ashar@somaiya.edu', 20, '$2y$04$N3VxmjWEJyvh8BeRHAGj5.1WgKohU8fFrqCsCKJx4laOC/xGHEUma', 'img/the notebook.jpg'),
(2, 'Avinash', 'avi.bharadwaj@somaiya.edu', 20, '$2y$04$5lyhIyXeRF/SY5G8VsTyRui1X3yQ/sYdBpxivNGSoLMMGE9pcpgjK', 'img/upload.jpg'),
(3, 'Sanjana', 'sanjana.j@somaiya.edu', 20, '$2y$04$2tnacvj0An7BvXmYPQus5O2GBsOkibVGvReC5KBS9EmNWFmpAgIzu', 'img/chicken soup.jpg'),
(4, 'Neha', 'nehaashar4@gmail.com', 22, '$2y$04$w8qdgYIGiZi93rTDJWQXg.1EGBJRkeCyj9nxi0yiZHBVq7UNDEyU2', ''),
(5, 'Rushabh', 'rushabh.bid@somaiya.edu', 21, '$2y$04$QhRPJHz2WRJr249hPYF5aeRYcMj04yYfFNdB7rY0r1YIlHKKcGRd2', ''),
(6, 'Parshva', 'parshva.barbhaya@somaiya.edu', 20, '$2y$04$J3OSbTZj97CbN9nULkdu..kvv5pefo35gGfQ5OiEFRDSh2ykwOudG', ''),
(7, 'Ruchi', 'ruchi.bhatia@somaiya.edu', 20, '$2y$04$8dAfUsPHFvlqzPC/3ESa1eaOLkucIW4lRNR9zYPBHHQCrA1jGNtQ.', ''),
(8, 'Mihir', 'mihir.mg@somaiya.edu', 20, '$2y$04$InWsGaWAYkAKkotmjd2yQO2ZlX0t.QXxC0sJCoXT0YHTVg5UOJ2hu', '');

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
(6, 1, 6),
(7, 2, 9),
(8, 1, 7),
(0, 1, 0);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
