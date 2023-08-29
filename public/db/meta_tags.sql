-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 03:53 PM
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
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `cat_id`, `banner_id`, `photo`, `photo_thum_1`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', 1, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 08:11:01'),
(2, 'OurClient', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:52:13'),
(3, 'LastNews', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:50:47'),
(4, 'ErrorPage', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:50:07'),
(5, 'FaqList', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:48:27'),
(6, 'TermsConditions', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:47:19'),
(7, 'ContactUs', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:46:45'),
(8, 'AboutUs', NULL, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 10:41:39'),
(9, 'DarkMode', 3, NULL, NULL, NULL, '2023-08-28 08:11:01', '2023-08-28 08:11:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
