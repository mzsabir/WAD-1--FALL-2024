-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2024 at 09:49 AM
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
-- Database: `autos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `model`, `picture`, `detail`, `date_created`) VALUES
(1, 'Honda', '2002', '', 'Modern technology: Includes Bluetooth connectivity, GPS navigation, and rear-view camera\r\n\r\nHigh performance: Powerful V6 engine with excellent fuel efficiency\r\n\r\nComfort and luxury: Premium leather interior with climate control\r\n\r\nSpacious design: Ample legroom and luggage space for long trips\r\n\r\nSafety features: Advanced airbags, anti-lock braking system (ABS), and stability control\r\n', '2024-12-09 08:47:05'),
(2, 'Suzuki', '2004', '', 'Modern technology: Includes Bluetooth connectivity, GPS navigation, and rear-view camera\r\n\r\nHigh performance: Powerful V6 engine with excellent fuel efficiency\r\n\r\nComfort and luxury: Premium leather interior with climate control\r\n\r\nSpacious design: Ample legroom and luggage space for long trips\r\n\r\nSafety features: Advanced airbags, anti-lock braking system (ABS), and stability control\r\n', '2024-12-09 08:47:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
