-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 06:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$6.NjiOtQWz3Jc7HDWEuqKufZ1DOHnsYRCoh/jvJ1tGwxKs6s2eyLm');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `evntname` varchar(35) NOT NULL,
  `service` varchar(35) NOT NULL,
  `evntdate` date NOT NULL,
  `cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `phone`, `evntname`, `service`, `evntdate`, `cmt`) VALUES
(1, 'KASIM', '6369865319', 'MARRIAGE', 'Face Care', '2024-11-09', 'I know You will do best'),
(2, 'KASIM', '454545', 'MARRIAGE', 'Manicure & Pedicure', '2024-11-02', 'I know You will do best'),
(3, 'jasee', '1111', 'game', 'Bridal Makeup', '2025-01-18', 'hey'),
(4, 'mathina', '8883767671ev', 'ev', 'Wedding Makeup', '2025-01-06', 'mn'),
(5, 'sumaiya', '9025353095', 'babyshower', 'Basic Makeup', '2025-06-30', 'the very good work website'),
(6, 'gopi', '7540043343', 'kalyaNAM', 'Wedding Makeup', '2025-02-28', 'NALLA PANNUNGA');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `ename` varchar(25) NOT NULL,
  `ecnt` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `created_at` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ename`, `ecnt`, `photo`, `created_at`) VALUES
(1, 'marriage', 'At This marriage  We wnjoyed', 'bp5.jpg', ''),
(2, 'wahid', 'fntion', '3.jpg', ''),
(3, 'fntion', 'hellooo', '5.jpg', ''),
(4, 'ev', 'nice', 'ab.jpg', ''),
(5, 'kalyanam', 'haldi', 'wa.jpeg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
