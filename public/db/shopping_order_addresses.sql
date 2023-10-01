-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 02:00 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `shopping_order_addresses`
--

CREATE TABLE `shopping_order_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_order_addresses`
--

INSERT INTO `shopping_order_addresses` (`id`, `name`, `city`, `address`, `recipient_name`, `phone`, `phone_option`, `notes`) VALUES
(1, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(2, 'بحرى الجمرك', 'الاسكندرية', '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '4867311', NULL),
(3, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(4, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(5, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(6, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping_order_addresses`
--
ALTER TABLE `shopping_order_addresses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping_order_addresses`
--
ALTER TABLE `shopping_order_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
