-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 09:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `easyparcel`
--

CREATE TABLE `easyparcel` (
  `name_parcel` varchar(50) NOT NULL,
  `date_received` datetime NOT NULL,
  `courier` varchar(50) NOT NULL,
  `tracking_num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `easyparcel`
--

INSERT INTO `easyparcel` (`name_parcel`, `date_received`, `courier`, `tracking_num`) VALUES
('John Doe', '2023-08-16 09:00:00', 'J&T EXPRESS', 123456),
('Jane Smith', '2023-08-16 10:30:00', 'SHOPEE EXPRESS', 789012),
('Michael Johnson', '2023-08-16 11:45:00', 'GDEX EXPRESS', 345678),
('Emily Williams', '2023-08-16 13:15:00', 'CITYLINK EXPRESS', 901234),
('Jennifer Miller', '2023-08-17 09:45:00', 'J&T EXPRESS', 123451),
('William Davis', '2023-08-17 11:00:00', 'SHOPEE EXPRESS', 789013),
('Mary Jones', '2023-08-17 12:30:00', 'GDEX EXPRESS', 345679),
('James Wilson', '2023-08-17 14:00:00', 'CITYLINK EXPRESS', 901235),
('Patricia Martinez', '2023-08-17 15:15:00', 'POSLAJU EXPRESS', 567891),
('Robert Anderson', '2023-08-18 10:30:00', 'J&T EXPRESS', 123452),
('Linda Taylor', '2023-08-18 11:45:00', 'SHOPEE EXPRESS', 789014),
('Michael Clark', '2023-08-18 13:00:00', 'GDEX EXPRESS', 345680),
('Barbara Rodriguez', '2023-08-18 14:30:00', 'CITYLINK EXPRESS', 901236),
('Richard Martinez', '2023-08-18 16:00:00', 'POSLAJU EXPRESS', 567892),
('Elizabeth Wilson', '2023-08-19 09:45:00', 'J&T EXPRESS', 123453),
('David Thomas', '2023-08-19 11:15:00', 'SHOPEE EXPRESS', 789015),
('Jennifer Garcia', '2023-08-19 12:30:00', 'GDEX EXPRESS', 345681),
('William Davis', '2023-08-19 14:00:00', 'CITYLINK EXPRESS', 901237),
('Mary Johnson', '2023-08-19 15:15:00', 'POSLAJU EXPRESS', 567893),
('Jessica Brown', '2023-08-20 14:30:00', 'CITYLINK EXPRESS', 901239),
('Daniel Taylor', '2023-08-20 16:00:00', 'POSLAJU EXPRESS', 567895),
('MEGAT IRFAN', '2023-08-25 15:10:00', 'POSLAJU EXPRESS', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
