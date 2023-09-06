-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 11:56 PM
-- Server version: 8.0.32-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freestulau_etman`
--

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `photo`, `photo_thum_1`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'images/faq/3/addresses-and-branches-2ogX9Zddyr.webp', 'images/faq/3/addresses-and-branches-zylgbOzqDx.webp', 1, NULL, '2023-08-27 12:01:47', '2023-09-04 17:31:22'),
(4, 'images/faq/4/orders-Z43w16Piaa.webp', 'images/faq/4/orders-InsqX8PYCK.webp', 1, NULL, '2023-08-27 12:02:11', '2023-09-04 17:21:09'),
(5, 'images/faq/5/delivery-services-2l3zVhShyK.webp', 'images/faq/5/delivery-services-myRoBVtBNN.webp', 1, NULL, '2023-08-27 12:02:34', '2023-09-04 17:34:35'),
(6, 'images/faq/6/shipping-services-to-governorates-N1nNSGhs3y.webp', 'images/faq/6/shipping-services-to-governorates-C0V2L8U3x8.webp', 1, NULL, '2023-09-04 17:32:24', '2023-09-04 17:37:38'),
(7, 'images/faq/7/return-policy-RehZSdRBQc.webp', 'images/faq/7/return-policy-T52ZJYpPeG.webp', 1, NULL, '2023-09-04 17:40:47', '2023-09-04 18:00:57'),
(8, 'images/faq/8/special-requests-Q7daV2qDjO.webp', 'images/faq/8/special-requests-SxtYreiw8X.webp', 1, NULL, '2023-09-04 17:42:50', '2023-09-04 17:47:30'),
(9, 'images/faq/9/export-services-0683Y1LNcz.webp', 'images/faq/9/export-services-Kl51UaGbET.webp', 1, NULL, '2023-09-04 17:48:53', '2023-09-04 17:54:44'),
(10, NULL, NULL, 1, NULL, '2023-09-04 18:02:07', '2023-09-04 18:02:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
