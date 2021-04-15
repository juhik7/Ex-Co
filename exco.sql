-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 07:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exco`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `tran_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `tran_date` date NOT NULL,
  `source` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`tran_id`, `username`, `amount`, `tran_date`, `source`, `remark`) VALUES
(1, 'Atishay', 226, '2021-04-12', 'Study Material', NULL),
(2, 'Atishay', 1255, '2021-03-01', 'Clothes Shopping', NULL),
(3, 'Atishay', 899, '2021-04-03', 'Online Course', NULL),
(7, 'Atishay', 500, '2021-04-14', 'Birthday Party', NULL),
(8, 'Atishay', 50, '2021-04-14', 'Gift by friend', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `tran_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `tran_date` date NOT NULL,
  `source` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`tran_id`, `username`, `amount`, `tran_date`, `source`, `remark`) VALUES
(1, 'Atishay', 5000, '2021-04-06', 'Income', NULL),
(2, 'Atishay', 550, '2021-04-13', 'SOLD WATCH', NULL),
(3, 'Atishay', 2500, '2021-03-02', 'Pocket Money March', NULL),
(5, 'Atishay', 2000, '2021-04-14', 'Pocket Money', NULL),
(6, 'Juhi', 522, '2021-04-12', 'PG RENT REFUND', NULL),
(7, 'Atishay', 10, '2021-04-14', 'Test Income', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `age`) VALUES
(5, 'Juhi', '$2y$10$cGvtdHa0olZPBJpQ9WlBROKo2dcjKeNw7CH6X5iPeVYQp7rOLS9W.', 'juhi@gmail.com', 24),
(13, 'tushar', '$2y$10$Fx7i2pc9W3DmAGdZxyKutOHtx/FDVndFq7Ff3J9IffvO3RVvuNSze', 'tushar@gmail.com', 22),
(14, 'Atishay', '$2y$10$kPmntKmC3joAMSm1CaMZyeA1pcJOuLQpUku3Nc.8y3Q.gI.0Tv8OK', 'bhanujain850@gmail.com', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`tran_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`tran_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
