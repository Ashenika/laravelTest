-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 09:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `mobile_no` int(100) NOT NULL,
  `amount` double NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user_id`, `mobile_no`, `amount`, `balance`) VALUES
(1, 1, 774155518, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `sender_id` int(100) NOT NULL,
  `amount` double NOT NULL,
  `balance` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `sender_id`, `amount`, `balance`, `created_at`, `updated_at`) VALUES
(1, 0, 4, 50, NULL, '2020-09-10 06:19:26', '2020-09-10 06:19:26'),
(2, 0, 4, 50, NULL, '2020-09-10 06:20:55', '2020-09-10 06:20:55'),
(3, 0, 4, 60, NULL, '2020-09-10 06:21:19', '2020-09-10 06:21:19'),
(4, 0, 4, 60, NULL, '2020-09-10 06:21:37', '2020-09-10 06:21:37'),
(5, 0, 4, 60, NULL, '2020-09-10 06:22:16', '2020-09-10 06:22:16'),
(6, 0, 4, 60, NULL, '2020-09-10 06:22:44', '2020-09-10 06:22:44'),
(7, 1, 4, 560, NULL, '2020-09-10 06:44:18', '2020-09-10 06:44:18'),
(8, 1, 4, 560, NULL, '2020-09-10 06:45:10', '2020-09-10 06:45:10'),
(9, 1, 4, 560, NULL, '2020-09-10 06:45:30', '2020-09-10 06:45:30'),
(10, 1, 4, 560, NULL, '2020-09-10 06:46:15', '2020-09-10 06:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `mobile_no` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `mobile_no`, `name`, `created_at`, `updated_at`) VALUES
(1, 774155518, 'Asheni Perera', '2020-09-10 05:17:43', '2020-09-10 05:17:43'),
(4, 774155519, 'Asheni', '2020-09-10 05:31:18', '2020-09-10 05:31:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
