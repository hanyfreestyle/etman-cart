-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 11:50 AM
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
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `cat_id`, `view_name`, `banner_id`, `photo`, `photo_thum_1`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, 1, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(2, 'OurClient', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(3, 'LastNews', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(4, 'ErrorPage', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(5, 'FaqList', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(6, 'TermsConditions', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(7, 'ContactUs', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(8, 'AboutUs', NULL, 0, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34'),
(9, 'DarkMode', NULL, 3, NULL, NULL, NULL, '2023-08-29 06:41:34', '2023-08-29 06:41:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
