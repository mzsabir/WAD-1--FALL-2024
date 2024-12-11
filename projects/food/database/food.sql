-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2024 at 01:31 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `category_id` int NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`) VALUES
(10, 'Ali', 'email@gmail.com', '1234', 'Rawalpindi'),
(12, 'Anees', 'email@gmail.com', '1234', 'Rawalpindi'),
(20, 'Chyna Cremin', 'your.email+fakedata93825@gmail.com', '', ''),
(19, 'Aneees', 'email@gmail.com', '1234', 'Rawalpindi'),
(15, 'Aneees', 'email@gmail.com', '1234', 'Rawalpindi'),
(16, 'Anees', 'email@gmail.com', '1234', 'Rawalpindi'),
(17, 'Anees', 'email@gmail.com', '1234', 'Rawalpindi'),
(18, 'Ali', 'email@gmail.com', '1234', 'Rawalpindi'),
(21, 'Sedrick Hirthe', 'your.email+fakedata89533@gmail.com', '1234', 'Milwaukee'),
(22, 'Tressa Will', 'your.email+fakedata72195@gmail.com', 'OzUjFeDaG6EVaKd', 'Citrus Heights'),
(23, 'Leonie Murphy', 'your.email+fakedata68266@gmail.com', 'Wqk4QdA7qDpWkPo', 'Turlock'),
(24, 'Muneeb', 'muneeb@gmail.com', '1234', 'Mishawaka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
