-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 03, 2023 at 08:20 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `candy`
--

CREATE TABLE `candy` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `categ_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candy`
--

INSERT INTO `candy` (`id`, `name`, `price`, `categ_id`) VALUES
(1, 'Strawberry Gummies', 2.99, 1),
(2, 'Cola Bottles', 1.49, 1),
(3, 'Cherry Lollipops', 0.99, 2),
(4, 'Rainbow Swirl Lollipops', 1.25, 2),
(5, 'Sea Salt Caramel', 3.5, 3),
(6, 'Caramel Popcorn', 2.75, 3),
(7, 'Sour Apple Gummies', 2.49, 1),
(8, 'Cherry Caramel', 1.99, 3),
(9, 'Orange Lollipops', 0.99, 2),
(10, 'Mint Caramel', 2.99, 3),
(11, 'Taart', 24.99, 3),
(12, 'BirthdayCake', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` enum('Gummies','Lollipops','Caramel','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Gummies'),
(2, 'Lollipops'),
(3, 'Caramel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candy`
--
ALTER TABLE `candy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candy`
--
ALTER TABLE `candy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
