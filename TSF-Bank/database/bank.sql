-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 02:32 PM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `accno` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `accno`, `name`, `email`, `balance`) VALUES
(1, 601158, 'Akshay Ugale', 'akshay@gmail.com', 45000),
(2, 111111, 'Sunny Gaikwad', 'sunny@gmail.com', 75000),
(3, 333333, 'Namdev Karle', 'namdev@gmail.com', 50000),

(4, 222222, 'Gayatri Chimne', 'gayu@gmail.com', 84000),

(5, 555555, 'Pavan chavan', 'pavan@gmail.com', 25000),
(6, 666666, 'Prashant Dhere', 'prashant@gmail.com', 78000),
(7, 777777, 'Prasad Sawant', 'prasad@gmail.com', 45000),
(8, 888888, 'Gauri Deshmukh', 'gauri@gmail.com', 50000),
(9, 999999, 'Monika Chavan', 'monika@gmail.com', 78000);

-- --------------------------------------------------------

--
-- Table structure for table `transferhistory`
--

CREATE TABLE `transferhistory` (
  `accno` int(11) NOT NULL,
  `name` text NOT NULL,
  `balance` float NOT NULL,
  `remark` text NOT NULL,
  `transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferhistory`
--

INSERT INTO `transferhistory` (`accno`, `name`, `balance`, `remark`, `transfer`) VALUES
(601158, 'Akshay Ugale', 15000, 'friend', 'Prashant Dhere'),
(111111, 'Sunny Gaikwad', 15000, 'friend', 'Gayu Chimne'),
(333333, 'Namdev Karle', 5000, 'sds', 'Prasad Sawant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
