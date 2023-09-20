-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 19, 2023 at 11:06 AM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christmas_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` enum('dolls','mechanic','puzzle','') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id`, `name`, `price`, `photo`, `type`, `description`) VALUES
(1, 'Barbie', 33.37, 'img/toys.jpeg', 'dolls', ''),
(2, 'Barbie', 33.37, 'img/toys.jpeg', 'dolls', '                                                        '),
(3, 'car', 0.8, 'img/toys.jpeg', 'mechanic', '                            fdfdgjsh jdh  d sjfdj dk fkdjf djfjkfk'),
(4, 'ewerdwe', 5.88, 'img/toys.jpeg', 'puzzle', '          ewlmkrweöklrmflw elfnwel fkewfjelkjrnlekjnre jerljernlekjne rleknleknlke ferlflerknle lelkenrlkenle erjleqjnleqknf erkenlekl                                                                                                                                  '),
(5, 'guess what', 89.99, '', 'puzzle', '                    kjdfkwejbfke kjefnekjrfnekjb jerh kewjr kewj ekjr ekwjrkje kej keqjkeqjr                                                                '),
(6, 'Anuta', 0.01, 'no', 'dolls', '                     37912837 2873782                                                                                                                       ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
