-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 10:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `23mmci38`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `department` varchar(20) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `dob`, `mobile`, `email`, `address`, `department`, `cgpa`) VALUES
(9, 'Chitta Ranjan Bal', 'Male', '2000-03-06', 9876534567, 'chittaranjan@gmail.com', 'Bhadrak', 'CST', 8.93),
(10, 'Sunil Kumar Sahoo', 'Male', '2002-01-14', 6372855655, 'mca.23mmci38@silicon.ac.in', 'Angul', 'MCA', 8.41),
(12, 'Smruti Rani Das', 'Female', '2003-05-04', 9876541234, 'smruti@gmail.com', 'Cuttack', 'MSC', 7.6),
(13, 'Anil Sahoo', 'Male', '2003-08-08', 9898965432, 'anil@gmail.com', 'Berhampur', 'MCA', 8.9),
(14, 'Himansu Sekhar Lenka', 'Male', '2001-04-04', 9879876554, 'himansu@gmail.com', 'Bhubaneswar', 'CST', 9.1),
(15, 'Gurupada Pradhan', 'Male', '2000-04-04', 9876543210, 'guru@gmail.com', 'Nandankanan', 'MCA', 8.07);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MOBILE` (`mobile`),
  ADD UNIQUE KEY `EMAIL` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
