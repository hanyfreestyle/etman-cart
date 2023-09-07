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
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `youtube`, `photo`, `photo_thum_1`, `is_active`, `deleted_at`, `published_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'images/blog/1/launching-the-trial-version-of-the-etman-group-website-www-etman-group-com.webp', 'images/blog/1/launching-the-trial-version-of-the-etman-group-website-www-etman-group-com_1.webp', 1, NULL, '2023-09-05 00:00:00', '2023-08-26 12:34:43', '2023-09-07 11:06:11'),
(2, NULL, 'images/blog/2/etman-group-account-on-the-social-networking-instagram.webp', 'images/blog/2/etman-group-account-on-the-social-networking-instagram_1.webp', 1, NULL, '2023-08-01 00:00:00', '2023-08-26 12:34:43', '2023-09-07 11:03:06'),
(3, NULL, 'images/blog/3/best-wishes-to-you-on-the-occasion-of-the-new-year-2022.webp', 'images/blog/3/best-wishes-to-you-on-the-occasion-of-the-new-year-2022_1.webp', 1, NULL, '2023-08-26 15:34:43', '2023-08-26 12:34:43', '2023-08-26 12:45:13'),
(4, NULL, NULL, NULL, 1, NULL, '2023-09-07 00:00:00', '2023-09-07 10:56:32', '2023-09-07 11:55:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
