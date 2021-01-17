-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Horror'),
(6, 'thriller'),
(7, 'scifi');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(3) NOT NULL,
  `movie_category_id` int(3) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `movie_director` varchar(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_content` text NOT NULL,
  `movie_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_category_id`, `movie_title`, `movie_director`, `movie_date`, `movie_content`, `movie_image`) VALUES
(51, 1, 'KGF', 'mark', '2021-01-16', '       KGF THE MOVIE', 'a2.jpg'),
(53, 1, 'AVENGERS', 'JOSS', '2021-01-16', '         AVENGERS ', 'av1.jpg'),
(55, 2, 'COOLIE NO1', 'DHAVAN', '2021-01-16', '         COOLIE ', 'c1.jpg'),
(57, 2, 'BHAGAM BHAAG', 'PRIYDARSHAN', '2021-01-16', '         BHAGAM BHAAG', 'Bha.jpg'),
(59, 3, '1920', 'jack', '2021-01-16', '         1920', 'h1.jpg'),
(61, 3, 'ALIVE', 'jack', '2021-01-16', '         ALIVE', 'h2.jpg'),
(63, 6, 'UNDERGROUND 6', 'mark', '2021-01-16', '         UNDERGROUND6', 'th.jpg'),
(65, 6, 'GEMINI MAN', 'jack', '2021-01-16', '         GEMINI MAN', 'sc1.jpg'),
(67, 7, 'THE BOSS BABAY', 'BOSS', '2021-01-16', '         THE BOSS BABAY', 'c2.jpg'),
(69, 7, 'THE LOST ISLAND', 'JACK SPARROW', '2021-01-16', '         FANTASY ISLAND', 'th2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
