-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 02:29 PM
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
-- Dumping data for table `shopping_orders`
--

INSERT INTO `shopping_orders` (`id`, `customer_id`, `address_id`, `uuid`, `order_date`, `invoice_number`, `status`, `total`, `units`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '49eb3c14-e675-469f-b455-d788eb746e1a', '2023-09-30 22:40:37', NULL, 2, 1700.00, 5, NULL, '2023-09-30 19:40:37', '2023-10-05 11:20:26'),
(2, 1, 2, '08eb13c5-1db8-493c-9229-acf1f1357e46', '2023-09-30 22:55:06', NULL, 4, 3400.00, 5, NULL, '2023-09-30 19:55:06', '2023-10-05 11:20:58'),
(3, 1, 3, 'a26da499-e94b-4c8e-acbb-9b31644a59e2', '2023-09-30 23:05:40', NULL, 4, 2856.00, 2, NULL, '2023-09-30 20:05:40', '2023-10-05 11:21:13'),
(4, 1, 4, '4df5ec79-6c41-4148-b45e-411c490f2f9e', '2023-09-30 23:06:27', NULL, 1, 2984.00, 9, NULL, '2023-09-30 20:06:27', '2023-09-30 20:06:27'),
(5, 1, 5, '88eb7097-d2a0-49f0-b62d-bfe4fd45dad1', '2023-10-01 01:18:37', NULL, 1, 2052.00, 3, NULL, '2023-09-30 22:18:37', '2023-09-30 22:18:37'),
(6, 1, 6, 'c005f00d-e921-44c2-9b23-4d5cb2d8a704', '2023-10-01 01:37:51', '5454646546', 3, 2400.00, 5, NULL, '2023-09-30 22:37:51', '2023-10-05 11:27:54'),
(7, 1, 7, 'bf3b5a19-1663-4943-b545-7a82ac25ab6c', '2023-10-05 11:21:16', '151515', 3, 8748.00, 17, NULL, '2023-10-05 08:21:16', '2023-10-05 11:23:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
