-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 11:19 PM
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
-- Dumping data for table `users_customers_addresses`
--

INSERT INTO `users_customers_addresses` (`id`, `is_default`, `uuid`, `customer_id`, `name`, `city_id`, `address`, `recipient_name`, `phone`, `phone_option`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, '6907412f-6b65-43a1-a358-c8a53116b9b5', 1, 'بحرى الجمرك', 3, '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '4867311', NULL, '2023-09-29 16:19:38', '2023-09-29 18:07:50'),
(2, 1, 'eee698b6-3c8b-4ca4-9194-86b9df96bed8', 1, 'المنزل', 3, '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL, '2023-09-29 17:11:13', '2023-09-29 18:07:50'),
(3, 0, '72c9671b-ea2e-4a5b-8912-1cff8e8ab9c0', 1, 'سابا باشا', 3, '336 طريق الجيش امام نادي التجاريين\r\nعمارات رويال بلازا - سابا باشا\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '5868324', NULL, '2023-09-29 17:12:37', '2023-09-29 18:07:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
