-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`, `gender`) VALUES
(17, 'ff', 'f', 'bb@aa', 'c4ca4238a0b923820dcc509a6f75849b', 'male'),
(22, 'dddf', 'fdfd', 'ff@gjkg', 'c4ca4238a0b923820dcc509a6f75849b', 'male'),
(23, 'dddf', 'fdfd', 'ff@gj', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'female'),
(24, 'a', 'a', 'a@a', '202cb962ac59075b964b07152d234b70', 'male'),
(25, 'b', 'b', 'b@b', '202cb962ac59075b964b07152d234b70', 'female'),
(26, 'c', 'c', 'c@c', 'c4ca4238a0b923820dcc509a6f75849b', 'female'),
(27, 'emran', 'ahmed', 'emran@gmail', '202cb962ac59075b964b07152d234b70', 'female'),
(28, 'a1', 'a1', 'a1@a', '202cb962ac59075b964b07152d234b70', 'male'),
(29, 'faculty', '1', 'f@gmail', '202cb962ac59075b964b07152d234b70', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `email`, `password`, `gender`) VALUES
(1, 'anis', 'islam', 'anis@gmail', '123', 'male'),
(2, 'faculty', '1', 'f@gmail', '202cb962ac59075b964b', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `tr` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `email`, `class`, `tr`, `username`, `password`) VALUES
(1, 'A B C', 'dhaka', '1@s', '5', '123488', 's1', '123'),
(3, 'ABC', 'Kuril', '2@s', '6', '46896456', 's2', '202cb962ac'),
(4, 'A B C', 'Gazipur', '3@s', '9', '45432598', 's@', '202cb962ac'),
(5, 'A B C', 'Gazipur', '4@s', '6', '98653298', 's4', '202cb962ac'),
(6, 'student', 'dhaka', 'st@gmail', '6', '565625964', 'st', '202cb962ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
