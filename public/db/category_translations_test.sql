-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 07:25 PM
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
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`, `body_h1`, `breadcrumb`, `deleted_at`) VALUES
(1, 1, 'ar', 'مجموعة-1', 'مجموعة 1', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'en', 'مجموعة-1', 'مجموعة 1', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 'ar', 'مجموعة-2', 'مجموعة 2', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'en', 'مجموعة-2', 'مجموعة 2', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 'ar', 'مجموعة-3', 'مجموعة 3', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 3, 'en', 'مجموعة-3', 'مجموعة 3', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 4, 'ar', 'مجموعة-4', 'مجموعة 4', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 4, 'en', 'مجموعة-4', 'مجموعة 4', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 5, 'ar', 'مجموعة-5', 'مجموعة 5', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 5, 'en', 'مجموعة-5', 'مجموعة 5', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
