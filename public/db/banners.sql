-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 09:40 PM
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
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category_id`, `photo`, `photo_thum_1`, `is_active`, `postion`, `text_view`, `url_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 'images/banner/4/01.webp', 'images/banner/4/01_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:20'),
(5, 1, 'images/banner/5/pvc.webp', 'images/banner/5/pvc_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:20'),
(6, 1, 'images/banner/6/offer.webp', 'images/banner/6/offer_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:21'),
(7, 2, 'images/banner/7/01.webp', 'images/banner/7/01_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:21'),
(8, 2, 'images/banner/8/02.webp', 'images/banner/8/02_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:21'),
(9, 2, 'images/banner/9/03.webp', 'images/banner/9/03_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:21'),
(10, 3, 'images/banner/10/dark.webp', 'images/banner/10/dark_1.webp', 1, 0, 1, 1, NULL, '2023-08-26 16:33:11', '2023-08-26 16:39:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
