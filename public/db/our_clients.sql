-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 09:02 PM
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
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `photo`, `photo_thum_1`, `is_active`, `postion`, `created_at`, `updated_at`) VALUES
(4, 'images/client/4/pharco-b-international.webp', 'images/client/4/pharco-b-international_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:08'),
(5, 'images/client/5/nile-linen-group.webp', 'images/client/5/nile-linen-group_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:08'),
(6, 'images/client/6/pharmaplast.webp', 'images/client/6/pharmaplast_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:08'),
(7, 'images/client/7/alexandria-company-for-pharmaceuticals-industries.webp', 'images/client/7/alexandria-company-for-pharmaceuticals-industries_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:08'),
(8, 'images/client/8/pharo-pharma-for-pharmaceuticals.webp', 'images/client/8/pharo-pharma-for-pharmaceuticals_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:09'),
(9, 'images/client/9/abo-el-hol-company-for-oils-and-detergents.webp', 'images/client/9/abo-el-hol-company-for-oils-and-detergents_1.webp', 1, 0, '2023-08-24 15:39:37', '2023-08-24 16:00:09'),
(10, 'images/client/10/senyorita-food-industries.webp', 'images/client/10/senyorita-food-industries_1.webp', 1, 0, '2023-08-24 15:39:38', '2023-08-24 16:00:09'),
(11, 'images/client/11/sun-nile-co-family-market.webp', 'images/client/11/sun-nile-co-family-market_1.webp', 1, 0, '2023-08-24 15:39:38', '2023-08-24 16:00:09'),
(12, 'images/client/12/alexandria-company-for-consumer-complexes.webp', 'images/client/12/alexandria-company-for-consumer-complexes_1.webp', 1, 0, '2023-08-24 15:39:38', '2023-08-24 16:00:09'),
(13, 'images/client/13/egyptian-airports-company.webp', 'images/client/13/egyptian-airports-company_1.webp', 1, 0, '2023-08-24 15:39:38', '2023-08-24 16:00:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
