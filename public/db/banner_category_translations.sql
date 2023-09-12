-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 03:38 AM
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
-- Dumping data for table `banner_category_translations`
--

INSERT INTO `banner_category_translations` (`id`, `category_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'الصفحة الرئيسية'),
(2, 1, 'en', 'الصفحة الرئيسية'),
(3, 2, 'ar', 'سلايد 2'),
(4, 2, 'en', 'سلايد 2'),
(5, 3, 'ar', 'Dark'),
(6, 3, 'en', 'Dark'),
(7, 4, 'ar', 'رئيسية الموقع'),
(8, 4, 'en', 'رئيسية الموقع');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
