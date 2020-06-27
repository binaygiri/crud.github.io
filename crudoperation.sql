-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `degree`, `refer`, `lang`) VALUES
(1, 'tarun sharama', 'tarunsharma@gmail.com ', '8568547852', 'science', 'jitesh kumar giri', 'hindi, English, Math, Geo'),
(2, 'jitesh kumar giri', 'jitesh@gmail.com ', '9958521470', 'science', 'tarun', 'hindi, English, Math, Geo'),
(3, 'rahul bose', 'rahul@gmail.com ', '8545785421', 'commerce', 'tarun', 'java'),
(4, 'sumon monal', 'sumon@gmail.com ', '9658652123', 'btech', 'tarun', 'php, java'),
(5, 'bappa pramanik', 'bappa@gmail.com ', '9652125452', 'BA', 'tarun', 'pol science, english, bangla'),
(6, 'souman datta', 'soumen@gmail.com ', '9856521452', 'computer science', 'bappa', 'java, c++'),
(7, 'rakesh kumar', 'rakesh@gmail.com ', '7854215421', 'BA', 'bappa', 'java php delveloper'),
(29, 'nitin guha', 'nitin@gmail.com ', '1234567890', 'science', 'binay ', 'java php delveloper'),
(30, 'somesh sasmal', 'someshkumar10@gmail.com ', '9925124585', 'science', 'bappa', 'c++, java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
