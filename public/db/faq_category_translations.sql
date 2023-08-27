-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 05:07 PM
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
-- Dumping data for table `faq_category_translations`
--

INSERT INTO `faq_category_translations` (`id`, `category_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(5, 3, 'ar', 'مجموعة-1', 'مجموعة 1', 'مجموعة 1', 'مجموعة 1', 'مجموعة 1'),
(6, 3, 'en', 'category-1', 'Category 1', 'Category 1', 'Category 1', 'Category 1'),
(7, 4, 'ar', 'مجموعة-2', 'مجموعة 2', 'مجموعة 2', 'مجموعة 2', 'مجموعة 2'),
(8, 4, 'en', 'category-2', 'Category 2', 'Category 2', 'Category 2', 'Category 2'),
(9, 5, 'ar', 'مجموعة-3', 'مجموعة 3', 'مجموعة 3', 'مجموعة 3', 'مجموعة 3'),
(10, 5, 'en', 'category-3', 'Category 3', 'Category 3', 'Category 3', 'Category 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
