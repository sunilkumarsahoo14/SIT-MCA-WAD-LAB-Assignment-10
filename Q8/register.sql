-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 02, 2024 at 12:39 PM
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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `fname`, `dob`, `mobile`, `email`, `address`) VALUES
('Sunil Kumar Sahoo', 'Niranjan Sahoo', '2002-01-14', '6372855655', 'mca.23mmci38@silicon.ac.in', 'Angul'),
('P P Sahoo', 'Niranjan Sahoo', '1999-02-02', '7978555121', 'pp@gmail.com', 'Angul'),
('Sibu Sahoo', 'Niranjan Sahoo', '1999-02-22', '7978500121', 'kajak@gmail.com', 'BBSR'),
('Dambarudhar Sahoo', 'Sunil Sahoo', '2004-05-05', '7978888812', 'chitta@gmail.com', 'CTC'),
('Akash', 'hjdf', '2007-05-23', '123456678', 'subhendu@gmail.com', 'eeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
