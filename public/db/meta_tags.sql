-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 04:38 PM
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
-- Database: `a_test_puzzle`
--

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'home', '2023-08-16 09:18:40', '2023-08-16 09:18:40'),
(2, 'developer', '2023-08-16 11:16:16', '2023-08-16 11:16:16'),
(3, 'blog', '2023-08-16 11:30:42', '2023-08-16 11:30:42'),
(4, 'contact-us', '2023-08-16 11:32:36', '2023-08-16 11:32:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
