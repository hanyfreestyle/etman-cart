-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 05:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_etman`
--

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_id`, `product_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 6, 7),
(6, 7, 9),
(7, 7, 10),
(8, 14, 12),
(9, 14, 13),
(10, 10, 14),
(11, 17, 15),
(12, 24, 16),
(13, 24, 17),
(14, 24, 18),
(15, 25, 19),
(16, 26, 21),
(17, 26, 22),
(18, 3, 37),
(19, 3, 38),
(20, 13, 40),
(21, 36, 41),
(22, 6, 42),
(23, 6, 43),
(24, 6, 44),
(25, 19, 45),
(26, 19, 46),
(27, 19, 48),
(28, 19, 49),
(29, 16, 50),
(30, 16, 51),
(31, 16, 52),
(32, 17, 53),
(33, 37, 55),
(34, 39, 56),
(35, 39, 57),
(36, 39, 58),
(37, 39, 59),
(38, 39, 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
