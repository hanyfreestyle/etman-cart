-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 03:16 PM
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `photo`, `photo_thum_1`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'images/category/1/self-adhesive-tape.webp', 'images/category/1/self-adhesive-tape_0.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:12:19'),
(3, 1, 'images/category/3/self-adhesive-tape-packaging-tape.webp', 'images/category/3/self-adhesive-tape-packaging-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:00'),
(6, 1, 'images/category/6/self-adhesive-tape-stationary-tape.webp', 'images/category/6/self-adhesive-tape-stationary-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:07'),
(7, 1, 'images/category/7/self-adhesive-tape-masking-tape.webp', 'images/category/7/self-adhesive-tape-masking-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:10'),
(10, 1, 'images/category/10/self-adhesive-tape-electrical-insulating-tape.webp', 'images/category/10/self-adhesive-tape-electrical-insulating-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:13'),
(12, 1, 'images/category/12/self-adhesive-tape-double-sided-tape.webp', 'images/category/12/self-adhesive-tape-double-sided-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:16'),
(13, 1, 'images/category/13/self-adhesive-color-tape.webp', 'images/category/13/self-adhesive-color-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:18'),
(14, 1, 'images/category/14/printed-self-adhesive-tape.webp', 'images/category/14/printed-self-adhesive-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:21'),
(15, NULL, 'images/category/15/aluminum-foil.webp', 'images/category/15/aluminum-foil_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:24'),
(16, 15, 'images/category/16/aluminium-foil-for-industry-use.webp', 'images/category/16/aluminium-foil-for-industry-use_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:27'),
(17, 15, 'images/category/17/aluminium-foil-for-house-hold.webp', 'images/category/17/aluminium-foil-for-house-hold_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:30'),
(18, NULL, 'images/category/18/food-and-beverage.webp', 'images/category/18/food-and-beverage_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:33'),
(19, 18, 'images/category/19/cling-warp.webp', 'images/category/19/cling-warp_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:35'),
(23, NULL, 'images/category/23/decorative-strips.webp', 'images/category/23/decorative-strips_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:38'),
(24, 23, 'images/category/24/gift-accessories-ribbon.webp', 'images/category/24/gift-accessories-ribbon_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:40'),
(25, 23, 'images/category/25/gift-accessories-gift-paper.webp', 'images/category/25/gift-accessories-gift-paper_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:43'),
(26, 23, 'images/category/26/gift-accessories-crepe-paper.webp', 'images/category/26/gift-accessories-crepe-paper_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:46'),
(36, 1, 'images/category/36/self-adhesive-tape-laser-tape.webp', 'images/category/36/self-adhesive-tape-laser-tape_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:49'),
(37, 1, 'images/category/37/jumbo-roll.webp', 'images/category/37/jumbo-roll_1.webp', 1, '2023-08-20 13:21:00', '2023-08-20 15:14:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
