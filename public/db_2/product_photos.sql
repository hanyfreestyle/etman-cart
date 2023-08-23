-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:51 PM
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
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `file_extension`, `file_size`, `file_h`, `file_w`, `position`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/product/1/packaging-tape-nar-tape_2.webp', 'images/product/1/packaging-tape-nar-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:15'),
(2, 1, 'images/product/1/packaging-tape-nar-tape_4.webp', 'images/product/1/packaging-tape-nar-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:15'),
(3, 1, 'images/product/1/packaging-tape-nar-tape_6.webp', 'images/product/1/packaging-tape-nar-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:15'),
(4, 2, 'images/product/2/packaging-tape-the-best-tape_2.webp', 'images/product/2/packaging-tape-the-best-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:16'),
(5, 2, 'images/product/2/packaging-tape-the-best-tape_4.webp', 'images/product/2/packaging-tape-the-best-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:16'),
(6, 2, 'images/product/2/packaging-tape-the-best-tape_6.webp', 'images/product/2/packaging-tape-the-best-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:17'),
(7, 3, 'images/product/3/packaging-tape-crystal-tape_2.webp', 'images/product/3/packaging-tape-crystal-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:17'),
(8, 3, 'images/product/3/packaging-tape-crystal-tape_4.webp', 'images/product/3/packaging-tape-crystal-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:18'),
(9, 3, 'images/product/3/packaging-tape-crystal-tape_6.webp', 'images/product/3/packaging-tape-crystal-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:18'),
(10, 4, 'images/product/4/packaging-tape-green-tape_2.webp', 'images/product/4/packaging-tape-green-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:18'),
(11, 4, 'images/product/4/packaging-tape-green-tape_4.webp', 'images/product/4/packaging-tape-green-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:19'),
(12, 4, 'images/product/4/packaging-tape-green-tape_6.webp', 'images/product/4/packaging-tape-green-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:19'),
(13, 37, 'images/product/37/packaging-tape-apple-tape_2.webp', 'images/product/37/packaging-tape-apple-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:20'),
(14, 37, 'images/product/37/packaging-tape-apple-tape_4.webp', 'images/product/37/packaging-tape-apple-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:20'),
(15, 37, 'images/product/37/packaging-tape-apple-tape_6.webp', 'images/product/37/packaging-tape-apple-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:20'),
(16, 38, 'images/product/38/packaging-tape-fire-tape_2.webp', 'images/product/38/packaging-tape-fire-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:21'),
(17, 38, 'images/product/38/packaging-tape-fire-tape_4.webp', 'images/product/38/packaging-tape-fire-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:21'),
(18, 38, 'images/product/38/packaging-tape-fire-tape_6.webp', 'images/product/38/packaging-tape-fire-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:22'),
(22, 40, 'images/product/40/self-adhesive-color-tape-hot_2.webp', 'images/product/40/self-adhesive-color-tape-hot_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:22'),
(23, 40, 'images/product/40/self-adhesive-color-tape-hot_4.webp', 'images/product/40/self-adhesive-color-tape-hot_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:22'),
(24, 40, 'images/product/40/self-adhesive-color-tape-hot_6.webp', 'images/product/40/self-adhesive-color-tape-hot_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:23'),
(25, 12, 'images/product/12/printed-self-adhesive-tape-fresh_2.webp', 'images/product/12/printed-self-adhesive-tape-fresh_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:23'),
(26, 12, 'images/product/12/printed-self-adhesive-tape-fresh_4.webp', 'images/product/12/printed-self-adhesive-tape-fresh_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:24'),
(27, 13, 'images/product/13/fragile-printed-tape_2.webp', 'images/product/13/fragile-printed-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:24'),
(28, 13, 'images/product/13/fragile-printed-tape_4.webp', 'images/product/13/fragile-printed-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:24'),
(29, 13, 'images/product/13/fragile-printed-tape_6.webp', 'images/product/13/fragile-printed-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:25'),
(30, 13, 'images/product/13/fragile-printed-tape_8.webp', 'images/product/13/fragile-printed-tape_9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:26'),
(31, 41, 'images/product/41/self-adhesive-tape-green-laser-tape_2.webp', 'images/product/41/self-adhesive-tape-green-laser-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:26'),
(32, 41, 'images/product/41/self-adhesive-tape-green-laser-tape_4.webp', 'images/product/41/self-adhesive-tape-green-laser-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:26'),
(33, 41, 'images/product/41/self-adhesive-tape-green-laser-tape_6.webp', 'images/product/41/self-adhesive-tape-green-laser-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:27'),
(34, 9, 'images/product/9/self-adhesive-tape-green-masking-tape_2.webp', 'images/product/9/self-adhesive-tape-green-masking-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:27'),
(35, 9, 'images/product/9/self-adhesive-tape-green-masking-tape_4.webp', 'images/product/9/self-adhesive-tape-green-masking-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:28'),
(36, 9, 'images/product/9/self-adhesive-tape-green-masking-tape_6.webp', 'images/product/9/self-adhesive-tape-green-masking-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:28'),
(37, 10, 'images/product/10/self-adhesive-tape-et-masking-tape_2.webp', 'images/product/10/self-adhesive-tape-et-masking-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:29'),
(38, 10, 'images/product/10/self-adhesive-tape-et-masking-tape_4.webp', 'images/product/10/self-adhesive-tape-et-masking-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:29'),
(39, 10, 'images/product/10/self-adhesive-tape-et-masking-tape_6.webp', 'images/product/10/self-adhesive-tape-et-masking-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:30'),
(40, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape_2.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:30'),
(41, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape_4.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:31'),
(42, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape_6.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:31'),
(47, 7, 'images/product/7/stationary-tape-the-best_2.webp', 'images/product/7/stationary-tape-the-best_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:31'),
(48, 7, 'images/product/7/stationary-tape-the-best_4.webp', 'images/product/7/stationary-tape-the-best_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:32'),
(49, 42, 'images/product/42/stationary-tape-piton-tape_2.webp', 'images/product/42/stationary-tape-piton-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:11', '2023-08-23 16:47:32'),
(50, 42, 'images/product/42/stationary-tape-piton-tape_4.webp', 'images/product/42/stationary-tape-piton-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:33'),
(51, 43, 'images/product/43/stationary-tape-color-tape_2.webp', 'images/product/43/stationary-tape-color-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:33'),
(52, 43, 'images/product/43/stationary-tape-color-tape_4.webp', 'images/product/43/stationary-tape-color-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:33'),
(53, 44, 'images/product/44/stationary-tape-laser-tape_2.webp', 'images/product/44/stationary-tape-laser-tape_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:34'),
(54, 44, 'images/product/44/stationary-tape-laser-tape_4.webp', 'images/product/44/stationary-tape-laser-tape_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:34'),
(55, 45, 'images/product/45/cling-warp-highmax-wrap_2.webp', 'images/product/45/cling-warp-highmax-wrap_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:35'),
(56, 45, 'images/product/45/cling-warp-highmax-wrap_4.webp', 'images/product/45/cling-warp-highmax-wrap_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:35'),
(57, 45, 'images/product/45/cling-warp-highmax-wrap_6.webp', 'images/product/45/cling-warp-highmax-wrap_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:35'),
(58, 45, 'images/product/45/cling-warp-highmax-wrap_8.webp', 'images/product/45/cling-warp-highmax-wrap_9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:36'),
(59, 45, 'images/product/45/cling-warp-highmax-wrap_10.webp', 'images/product/45/cling-warp-highmax-wrap_11.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:36'),
(60, 45, 'images/product/45/cling-warp-highmax-wrap_12.webp', 'images/product/45/cling-warp-highmax-wrap_13.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:37'),
(61, 45, 'images/product/45/cling-warp-highmax-wrap_14.webp', 'images/product/45/cling-warp-highmax-wrap_15.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:37'),
(62, 46, 'images/product/46/cling-warp-komex_2.webp', 'images/product/46/cling-warp-komex_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:38'),
(63, 46, 'images/product/46/cling-warp-komex_4.webp', 'images/product/46/cling-warp-komex_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:38'),
(64, 46, 'images/product/46/cling-warp-komex_6.webp', 'images/product/46/cling-warp-komex_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:38'),
(68, 48, 'images/product/48/cling-warp-star-maximum_2.webp', 'images/product/48/cling-warp-star-maximum_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:39'),
(69, 48, 'images/product/48/cling-warp-star-maximum_4.webp', 'images/product/48/cling-warp-star-maximum_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:39'),
(70, 49, 'images/product/49/cling-warp-highmax-wrap-2_2.webp', 'images/product/49/cling-warp-highmax-wrap-2_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:40'),
(71, 49, 'images/product/49/cling-warp-highmax-wrap-2_4.webp', 'images/product/49/cling-warp-highmax-wrap-2_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:40'),
(72, 49, 'images/product/49/cling-warp-highmax-wrap-2_6.webp', 'images/product/49/cling-warp-highmax-wrap-2_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:40'),
(73, 50, 'images/product/50/mr-foil-hookah-aluminum-foil_2.webp', 'images/product/50/mr-foil-hookah-aluminum-foil_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:41'),
(74, 50, 'images/product/50/mr-foil-hookah-aluminum-foil_4.webp', 'images/product/50/mr-foil-hookah-aluminum-foil_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:41'),
(75, 51, 'images/product/51/mr-foil-oven-2_2.webp', 'images/product/51/mr-foil-oven-2_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:42'),
(76, 51, 'images/product/51/mr-foil-oven-2_4.webp', 'images/product/51/mr-foil-oven-2_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:42'),
(77, 51, 'images/product/51/mr-foil-oven-2_6.webp', 'images/product/51/mr-foil-oven-2_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:43'),
(78, 52, 'images/product/52/mr-foil-oven_2.webp', 'images/product/52/mr-foil-oven_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:43'),
(79, 52, 'images/product/52/mr-foil-oven_4.webp', 'images/product/52/mr-foil-oven_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:43'),
(80, 52, 'images/product/52/mr-foil-oven_6.webp', 'images/product/52/mr-foil-oven_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:44'),
(81, 52, 'images/product/52/mr-foil-oven_8.webp', 'images/product/52/mr-foil-oven_9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:44'),
(82, 52, 'images/product/52/mr-foil-oven_10.webp', 'images/product/52/mr-foil-oven_11.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:44'),
(83, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_2.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:45'),
(84, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_4.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:45'),
(85, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_6.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:46'),
(86, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_8.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:46'),
(87, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_10.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_11.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:46'),
(88, 15, 'images/product/15/aluminium-foil-mr-foil-50gm_12.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_13.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:47'),
(89, 53, 'images/product/53/aluminium-foil-king_2.webp', 'images/product/53/aluminium-foil-king_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:48'),
(90, 53, 'images/product/53/aluminium-foil-king_4.webp', 'images/product/53/aluminium-foil-king_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:48'),
(91, 53, 'images/product/53/aluminium-foil-king_6.webp', 'images/product/53/aluminium-foil-king_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:49'),
(92, 21, 'images/product/21/crepe-paper-normal-color_2.webp', 'images/product/21/crepe-paper-normal-color_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:49'),
(93, 21, 'images/product/21/crepe-paper-normal-color_4.webp', 'images/product/21/crepe-paper-normal-color_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:50'),
(94, 21, 'images/product/21/crepe-paper-normal-color_6.webp', 'images/product/21/crepe-paper-normal-color_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:50'),
(95, 21, 'images/product/21/crepe-paper-normal-color_8.webp', 'images/product/21/crepe-paper-normal-color_9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:51'),
(96, 21, 'images/product/21/crepe-paper-normal-color_10.webp', 'images/product/21/crepe-paper-normal-color_11.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:51'),
(97, 21, 'images/product/21/crepe-paper-normal-color_12.webp', 'images/product/21/crepe-paper-normal-color_13.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:51'),
(98, 21, 'images/product/21/crepe-paper-normal-color_14.webp', 'images/product/21/crepe-paper-normal-color_15.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:52'),
(99, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon_2.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:52'),
(100, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon_4.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:53'),
(101, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon_6.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:53'),
(102, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon_2.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:53'),
(103, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon_4.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:54'),
(104, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon_6.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:54'),
(105, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon_2.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:55'),
(106, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon_4.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:55'),
(107, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon_6.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:55'),
(108, 19, 'images/product/19/gift-accessories-metallic-paper_2.webp', 'images/product/19/gift-accessories-metallic-paper_3.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:56'),
(109, 19, 'images/product/19/gift-accessories-metallic-paper_4.webp', 'images/product/19/gift-accessories-metallic-paper_5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:56'),
(110, 19, 'images/product/19/gift-accessories-metallic-paper_6.webp', 'images/product/19/gift-accessories-metallic-paper_7.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-08-23 15:48:12', '2023-08-23 16:47:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
