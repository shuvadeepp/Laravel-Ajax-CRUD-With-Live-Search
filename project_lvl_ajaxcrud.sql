-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 12:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_lvl_ajaxcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `intId` int(11) NOT NULL,
  `vch_FirstName` varchar(45) DEFAULT NULL,
  `vch_LastName` varchar(45) DEFAULT NULL,
  `vch_Mob` varchar(45) DEFAULT NULL,
  `vch_addrs` varchar(45) DEFAULT NULL,
  `dtmCreatedOn` datetime DEFAULT NULL,
  `dtmUpdatedOn` datetime DEFAULT NULL,
  `DeletedFlag` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`intId`, `vch_FirstName`, `vch_LastName`, `vch_Mob`, `vch_addrs`, `dtmCreatedOn`, `dtmUpdatedOn`, `DeletedFlag`) VALUES
(1, 'shuvadeep', 'podder', '9888888888', 'bbsr', '2022-07-17 17:45:32', NULL, b'0'),
(2, 'raw', 'knee', '8888888888', 'cuttack', '2022-07-17 17:45:50', NULL, b'0'),
(3, 'shuva', 'shree', '9765555555', 'kolkata', '2022-07-23 14:29:47', NULL, b'0'),
(5, 'biswanath', 'podder', '9198888888', 'mahadev nagar', '2022-07-23 16:47:07', NULL, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`intId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
