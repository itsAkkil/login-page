-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 04:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE `registrationdetails` (
  `Admission Year` int(4) NOT NULL,
  `Programme` varchar(50) NOT NULL,
  `Student Name` text NOT NULL,
  `Father Name` text NOT NULL,
  `Mother Name` varchar(20) NOT NULL,
  `Fee Category` varchar(50) NOT NULL,
  `Candidate category` varchar(10) NOT NULL,
  `Application Fee( in Rs.)` int(10) NOT NULL,
  `Student Contact No.` int(10) NOT NULL,
  `Alternate Mobile Number` int(10) DEFAULT NULL,
  `Student email` varchar(20) NOT NULL,
  `Date Time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationdetails`
--

INSERT INTO `registrationdetails` (`Admission Year`, `Programme`, `Student Name`, `Father Name`, `Mother Name`, `Fee Category`, `Candidate category`, `Application Fee( in Rs.)`, `Student Contact No.`, `Alternate Mobile Number`, `Student email`, `Date Time`) VALUES
(2024, 'bcs', 'noni', 'sonu', 'tonu', 'bca', 'bca', 1000, 999999999, 0, 'so@gmial,com', '2024-09-01 19:02:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
