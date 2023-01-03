-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jetebike`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `GSTIN` varchar(50) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Price` text NOT NULL,
  `Discount` text NOT NULL,
  `Qty` text NOT NULL,
  `Gst` int(11) NOT NULL,
  `TaxableAmount` int(11) NOT NULL,
  `Accessories` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Amount` text NOT NULL,
  `TotalAmount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `Name`, `Address`, `Mobile`, `Email`, `GSTIN`, `Product`, `Price`, `Discount`, `Qty`, `Gst`, `TaxableAmount`, `Accessories`, `Date`, `Amount`, `TotalAmount`) VALUES
(29, 'Mallikarjun', 'Karadiguddi', '8951106537', 'mallikarjunpatil@gmail.com', 'sdhvwehf', 'E-Tron Plus', '31999', '2999', '1', 1381, 27619, 'Charger', '2020-05-11', '29000', '29000'),
(32, 'Dr. Rajesh Talathi', 'Mudhol-587313', '9448125933', 'rajeshtalathi@gmail.com', 'dvjdbvka', 'E-Tron Plus', '31999', '999', '1', 1476, 29524, 'Charger,Rench kit', '2020-06-09', '31000', '31000'),
(33, 'Sanjay', 'Belagavi', '9986139305', 'sanjaydeshpande03@gmail.com', 'Array', 'E-Tron Plus', '31999', '999', '1', 1476, 29524, 'Charger and Rench Kit', '2020-09-20', '31000', '31000'),
(34, 'Amogh', 'Mudhol', '9743340940', 'amoghphadnis20@gmail.com', 'GGFFT572u94', 'E-Tron Plus', '31999', '1999', '1', 1429, 28571, 'Rench Kit', '2020-08-08', '30000', '30000'),
(35, 'Aditya', 'Belgaum', '8660865895', 'adityaphadnis03@gmail.com', 'Array', 'E-Tron Plus', '31999', '999', '2', 1476, 29524, 'Charger', '2020-09-17', '31000', '62000'),
(36, 'Aditya Phadnis', 'Mudhol', '8660865895', 'adityaphadnis03@gmail.com', 'skdjv47t98lnl', 'E-Gnite', '46999', '6999', '1', 1905, 38095, 'Rench Kit', '2020-08-08', '40000', '40000'),
(37, 'Aditya', 'Belgaum', '7899427021', 'adityaphadnis03@gmail.com', '54654fvef546fvd', 'E-Pluto 7g', '85999', '-2001', '1', 4190, 83810, 'Seat Cover, Side guard', '2020-08-08', '88000', '88000'),
(39, 'Swati Phadnis', 'Mudhol', '9449801822', 'swatiphadnis@gmail.com', 'sjbckj7yvd', 'E-Trance', '49999', '4999', '1', 2143, 42857, 'Seat Cover', '2020-08-08', '45000', '45000'),
(40, 'Swati Phadnis', 'Mudhol', '9449801822', 'swatiphadnis@gmail.com', 'sjbckj7yvd', 'E-Trance', '49999', '4999', '1', 2143, 42857, 'Seat Cover', '2020-08-08', '45000', '45000'),
(41, 'Swati', 'Mudhol', '9449801822', 'swati@gmail.com', 'sdnlvn87978kj', 'E-Trance', '49999', '4999', '1', 2143, 42857, 'Seat Cover', '0000-00-00', '45000', '45000'),
(43, 'Amogh Phadnis', 'Belgaum', '9743340940', 'amoghphadnis20@gmail.com', 'dkjvbw979ewfj', 'E-Gnite', '46999', '3999', '1', 2048, 40952, 'Rench Kit', '2020-08-08', '43000', '43000'),
(46, 'Mallikarjun Patil', 'Karadiguddi', '8951106537', 'mallik.patil@gmail.com', '651kknb87swbv', 'E-Gnite', '46999', '1999', '1', 2143, 42857, 'Rench Kit', '2020-08-08', '45000', '45000'),
(47, 'Anand Phadnis', 'Mudhol', '9448125933', 'phadnisas@gmail.com', 'sjbv+4fvs', 'E-Gnite', '46999', '6999', '1', 1905, 38095, 'Rench Kit', '2020-08-08', '40000', '40000'),
(51, 'Swati Phadnis', 'Mudhol', '8495051922', 'swatiphadnis@gmail.com', 'ebn978blksfrg335', 'E-Trance', '49999', '6999', '1', 2048, 40952, 'Seat cover', '2020-08-08', '43000', '43000'),
(52, 'Amogh', 'Belgaum', '9743340940', 'amoghphadnis20@gmail.com', 'jwkbd89sdvjn', 'E-Pluto 7g', '85999', '-3001', '1', 4238, 84762, 'Side Guard,Seat Cover', '2020-08-09', '89000', '89000'),
(60, 'Amogh', 'Belgaum', '9743340940', 'amoghphadnis20@gmail.com', 'jwkbd89sdvjn', 'E-Trance', '49999', '9999', '1', 1905, 38095, 'Side Guard,Seat Cover', '2020-08-09', '40000', '40000'),
(61, 'Affan Sharief', 'Hindwadi', '7353562713', 'affansharief999@gmail.com', 'Ewtupp678nh', 'E-Tron Plus', '31999', '999', '2', 1476, 29524, 'Charger, Rench Kit', '2020-09-13', '31000', '62000'),
(62, 'Mallikarjun', 'Karadigudi', '8951106537', 'mallikarjunpatil@gmail.com', 'sshjvg876sdf', 'E-Tron Plus', '31999', '999', '2', 1476, 29524, 'Charger, Rench Kit', '2020-09-13', '31000', '62000'),
(63, 'amogh', 'mudhol', '9743340940', 'amoghphadnis@gmail.com', 'wkdwfnwl3656', 'E-Tron', '29999', '14999', '1', 714, 14286, 'charger', '2021-06-17', '15000', '15000'),
(64, 'Amogh', 'Mudhol', '9743340940', 'amogh@gmail.com', 'sdjfb235436', 'E-Tron', '29999', '14999', '1', 714, 14286, 'charger', '2021-06-18', '15000', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Etron` int(11) NOT NULL,
  `Etronplus` int(11) NOT NULL,
  `Egnite` int(11) NOT NULL,
  `Etrance` int(11) NOT NULL,
  `Epluto` int(11) NOT NULL,
  `Epluto7g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Id`, `Date`, `Etron`, `Etronplus`, `Egnite`, `Etrance`, `Epluto`, `Epluto7g`) VALUES
(1, '2020-05-29', 0, 2, 1, 3, 3, 5),
(2, '2020-06-19', 0, 1, 2, 1, 3, 1),
(3, '2020-09-22', 4, 2, 2, 2, 6, 2),
(5, '2020-09-22', 0, 1, 2, 3, 4, 5),
(6, '2020-09-22', 1, 1, 2, 1, 1, 1),
(7, '2020-09-22', 1, 3, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`) VALUES
(1, 'jetebike', '$2y$10$NeAF1YYi4WpALOnlcRWri.8mvZeavgoFq7KhvI9n4IbMjoCPF714y'),
(2, 'aap', '$2y$10$yLjiojh89zfw8TN3anegpe2ZFi9GzfFNjJ3Bascv6u4EYz57xBKa.'),
(3, 'aap', '$2y$10$Bz4DQSiPAKSHLheS3l8eeudyTt4onnC1VZTlplxtkyPrF29NbcHvO'),
(4, 'aap123', '$2y$10$Jnhg.CL8dvBTtkxwavZs9OWf1GjpIhHBQdOeRJoGkdMHGfmb.6tQO'),
(5, 'asp', '$2y$10$tsT.PFx5DomyrC09Vsr5Ueyw2qZB9Sr/j175linTb7LRhMDhaaHL.'),
(6, 'asp', '$2y$10$M1MCNtnZItC20pp4NKAnjO2PGtX3d4bSL/T2w92E3KqlCCjL3U2ma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
