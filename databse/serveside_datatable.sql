-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 04:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serveside_datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `sd_student`
--

CREATE TABLE `sd_student` (
  `sd_student_id` int(11) NOT NULL,
  `student_name` varchar(123) NOT NULL,
  `studnet_email` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sd_student`
--

INSERT INTO `sd_student` (`sd_student_id`, `student_name`, `studnet_email`) VALUES
(1, 'Pratik Lochawala', 'pratikk@yahoo.com'),
(2, 'Lochawala Pratik', 'lochawala@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sd_student`
--
ALTER TABLE `sd_student`
  ADD PRIMARY KEY (`sd_student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sd_student`
--
ALTER TABLE `sd_student`
  MODIFY `sd_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
