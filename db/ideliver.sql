-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 08:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideliver`
--

-- --------------------------------------------------------

--
-- Table structure for table `dawnwing_quote`
--

CREATE TABLE `dawnwing_quote` (
  `id` int(11) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `quoteNo` varchar(255) NOT NULL,
  `customerRef` varchar(255) DEFAULT NULL,
  `successful` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `chargeableMass` varchar(255) NOT NULL,
  `vat` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `discountValue` decimal(8,2) NOT NULL,
  `deliveryCharge` decimal(8,2) NOT NULL,
  `freightValue` decimal(8,2) NOT NULL,
  `totalVolume` int(11) NOT NULL,
  `apiErrors` text DEFAULT NULL,
  `charges` text NOT NULL,
  `insurance` decimal(8,2) NOT NULL,
  `originAreaType` varchar(255) NOT NULL,
  `destinationAreaType` varchar(255) NOT NULL,
  `earliestCollectionDate` date NOT NULL,
  `earliestCollectionTime` time NOT NULL,
  `latestDeliveryDate` date NOT NULL,
  `latestDeliveryTime` time NOT NULL,
  `accountNo` varchar(255) NOT NULL,
  `otherCharge` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dawnwing_quote`
--

INSERT INTO `dawnwing_quote` (`id`, `orderNumber`, `quoteNo`, `customerRef`, `successful`, `account`, `rate`, `service`, `chargeableMass`, `vat`, `total`, `discountValue`, `deliveryCharge`, `freightValue`, `totalVolume`, `apiErrors`, `charges`, `insurance`, `originAreaType`, `destinationAreaType`, `earliestCollectionDate`, `earliestCollectionTime`, `latestDeliveryDate`, `latestDeliveryTime`, `accountNo`, `otherCharge`) VALUES
(1, '000000001', 'IITT0154275', NULL, 1, 'TESTING', NULL, 'ONX', '10', '105.31', '807.40', '0.00', '0.00', '186.30', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":10.79},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":10}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '515.79'),
(2, '00000002', 'IITT0154276', NULL, 1, 'TESTING', NULL, 'ONX', '10', '105.31', '807.40', '0.00', '0.00', '186.30', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":10.79},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":10}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '515.79'),
(3, '00000003', 'IITT0154278', NULL, 1, 'TESTING', NULL, 'ONX', '4', '94.56', '724.95', '0.00', '0.00', '124.20', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":7.19},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":4}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '506.19'),
(4, '00000004', 'IITT0154279', NULL, 1, 'TESTING', NULL, 'ONX', '7', '99.94', '766.18', '0.00', '0.00', '155.25', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":8.99},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":7}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '510.99'),
(5, '00000005', 'IITT0154280', NULL, 1, 'TESTING', NULL, 'ONX', '2', '90.97', '697.46', '0.00', '0.00', '103.50', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":5.99},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":2}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '502.99'),
(6, '00000006', 'IITT0154281', NULL, 1, 'TESTING', NULL, 'ONX', '2', '90.82', '696.31', '0.00', '0.00', '103.50', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":5.99},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":1}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '501.99'),
(7, '00000007', 'IITT0154282', NULL, 1, 'TESTING', NULL, 'ONX', '2', '90.82', '696.31', '0.00', '0.00', '103.50', 0, NULL, '[{\"code\":\"03\",\"value\":165},{\"code\":\"36\",\"value\":165},{\"code\":\"01\",\"value\":0},{\"code\":\"30\",\"value\":165},{\"code\":\"FU\",\"value\":5.99},{\"code\":\"LH\",\"value\":0},{\"code\":\"SL\",\"value\":1}]', '0.00', 'JOHANNESBURG TOWNSHIPS', 'PRETORIA CENTRAL AREAS', '2022-06-20', '08:00:00', '2022-06-21', '11:00:00', 'TESTING', '501.99');

-- --------------------------------------------------------

--
-- Table structure for table `dawnwing_token`
--

CREATE TABLE `dawnwing_token` (
  `id` int(11) NOT NULL,
  `d_token` text NOT NULL,
  `valid` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dawnwing_token`
--

INSERT INTO `dawnwing_token` (`id`, `d_token`, `valid`, `createdAt`) VALUES
(1, 'eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJJZCI6IjEiLCJleHAiOjE2NTcyOTQ0NDgsImlzcyI6Imh0dHA6Ly80MS4wLjY5LjE5Ny8iLCJhdWQiOiJodHRwOi8vNDEuMC42OS4xOTcvIn0.6lNThj4zKhH13Ns9xtfRF8I8I9jbHxghG4zTRtMfWhA5hSPi4wnkWjbRQxyskUsB0uIYTl46BWqiXO0WAzlXIg', 1, '2022-06-08 17:33:47'),
(2, 'eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJJZCI6IjEiLCJleHAiOjE2NTczMDEwOTIsImlzcyI6Imh0dHA6Ly80MS4wLjY5LjE5Ny8iLCJhdWQiOiJodHRwOi8vNDEuMC42OS4xOTcvIn0.pL2ayDd0BBpZnUhZkgSJzMSrb-xaquvBF_JwNn7dleNrKt9rOA9VuCVB4f1RQ9GoCcnVgp3ZpQLiWlpRJo8E6w', 1, '2022-06-08 19:24:30'),
(3, 'eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJJZCI6IjEiLCJleHAiOjE2NTczMDIwOTAsImlzcyI6Imh0dHA6Ly80MS4wLjY5LjE5Ny8iLCJhdWQiOiJodHRwOi8vNDEuMC42OS4xOTcvIn0.hDHK1dNA_9vgFEF76t7ZMb4anrLC0ff5xXHZrJFlpejapFUWdWBme_9hPBykF0ejKcZINbv99jyFV4Qh1XniUQ', 1, '2022-06-08 19:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `skynet_token`
--

CREATE TABLE `skynet_token` (
  `id` int(11) NOT NULL,
  `s_token` varchar(255) NOT NULL,
  `valid` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skynet_token`
--

INSERT INTO `skynet_token` (`id`, `s_token`, `valid`, `createdAt`) VALUES
(1, '2_1854294c-c125-4062-acff-9042f7d92988', 1, '2022-06-07 11:52:05'),
(2, '2_0d4c8b17-41c2-487e-acaf-d3c3bb24f543', 1, '2022-06-07 12:36:49'),
(3, '2_6b290cba-d574-4345-8836-db81e71a2b96', 1, '2022-06-07 15:27:11'),
(4, '2_19b75f5f-5201-4223-a231-54c0be7e0fc4', 1, '2022-06-07 16:07:25'),
(5, '2_59081655-7ff1-4842-a48c-d614e16831e2', 1, '2022-06-07 16:42:48'),
(6, '2_e3921c15-23cc-4d61-9401-ff88ec36c3cb', 1, '2022-06-07 19:36:27'),
(7, '2_57ed1234-32e6-4a9b-898a-4588e8001dab', 1, '2022-06-09 12:45:09'),
(8, '2_124028b9-c358-43d2-b222-7d673d9e4e15', 1, '2022-06-09 13:04:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dawnwing_quote`
--
ALTER TABLE `dawnwing_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dawnwing_token`
--
ALTER TABLE `dawnwing_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skynet_token`
--
ALTER TABLE `skynet_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dawnwing_quote`
--
ALTER TABLE `dawnwing_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dawnwing_token`
--
ALTER TABLE `dawnwing_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skynet_token`
--
ALTER TABLE `skynet_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
