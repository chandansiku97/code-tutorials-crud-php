-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2023 at 02:16 PM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `recovery_db`
--

CREATE TABLE `recovery_db` (
  `id` int NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `useremail` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usercontact` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_status` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `termination_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recovery_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `recovery_status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `activation_code` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `useremail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `usercontact` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recovery_db`
--
ALTER TABLE `recovery_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recovery_db`
--
ALTER TABLE `recovery_db`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
