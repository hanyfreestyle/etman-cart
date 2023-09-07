-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 05:00 PM
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
-- Dumping data for table `config_def_photos`
--

INSERT INTO `config_def_photos` (`id`, `cat_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'light-logo', 'images/def-photo/light-logo-AJG4FyEGq8.webp', NULL, NULL, 2, '2023-09-03 15:03:13', '2023-09-03 15:04:25'),
(2, 'dark-logo', 'images/def-photo/dark-logo-yHavtqPGm6.webp', NULL, NULL, 1, '2023-09-03 15:04:17', '2023-09-03 15:04:25'),
(3, 'about-1', 'images/def-photo/about-1-yn7io2tGJe.webp', NULL, NULL, 0, '2023-09-04 14:21:50', '2023-09-04 14:21:50'),
(4, 'about-2', 'images/def-photo/about-2-hRbvFjEYBB.webp', NULL, NULL, 0, '2023-09-04 14:22:23', '2023-09-04 14:22:23'),
(5, 'faq-icon', 'images/def-photo/faq-icon-Trcw3x3A7W.webp', 'images/def-photo/faq-icon-Ns5XjqT77R.webp', NULL, 0, '2023-09-04 18:17:24', '2023-09-04 18:24:42'),
(6, 'contact-from', 'images/def-photo/contact-from-taOS5rT9SI.webp', NULL, NULL, 0, '2023-09-06 19:37:35', '2023-09-06 19:37:35'),
(7, 'blog', 'images/def-photo/blog-CDdCixPmfn.webp', 'images/def-photo/blog-EE6OS73peP.webp', NULL, 0, '2023-09-07 11:29:31', '2023-09-07 11:32:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
