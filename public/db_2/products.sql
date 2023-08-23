-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 05:11 PM
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `photo`, `photo_thum_1`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, 'images/product/1/packaging-tape-nar-tape.webp', 'images/product/1/packaging-tape-nar-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(2, 3, 'images/product/2/packaging-tape-the-best-tape.webp', 'images/product/2/packaging-tape-the-best-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(3, 3, 'images/product/3/packaging-tape-crystal-tape.webp', 'images/product/3/packaging-tape-crystal-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(4, 3, 'images/product/4/packaging-tape-green-tape.webp', 'images/product/4/packaging-tape-green-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(7, 6, 'images/product/7/stationary-tape-the-best.webp', 'images/product/7/stationary-tape-the-best_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(9, 7, 'images/product/9/self-adhesive-tape-green-masking-tape.webp', 'images/product/9/self-adhesive-tape-green-masking-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(10, 7, 'images/product/10/self-adhesive-tape-et-masking-tape.webp', 'images/product/10/self-adhesive-tape-et-masking-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(12, 14, 'images/product/12/printed-self-adhesive-tape-fresh.webp', 'images/product/12/printed-self-adhesive-tape-fresh_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(13, 14, 'images/product/13/fragile-printed-tape.webp', 'images/product/13/fragile-printed-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(14, 10, 'images/product/14/self-adhesive-tape-electrical-insulating-tape.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:07'),
(15, 17, 'images/product/15/aluminium-foil-mr-foil-50gm.webp', 'images/product/15/aluminium-foil-mr-foil-50gm_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:08'),
(16, 24, 'images/product/16/gift-accessories-05-cm-pp-ribbon.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:08'),
(17, 24, 'images/product/17/gift-accessories-5-cm-pp-ribbon.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:08'),
(18, 24, 'images/product/18/gift-accessories-metallic-pp-ribbon.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:08'),
(19, 25, 'images/product/19/gift-accessories-metallic-paper.webp', 'images/product/19/gift-accessories-metallic-paper_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:08'),
(21, 26, 'images/product/21/crepe-paper-normal-color.webp', 'images/product/21/crepe-paper-normal-color_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(22, 26, 'images/product/22/crepe-paper-metallic-color.webp', 'images/product/22/crepe-paper-metallic-color_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(37, 3, 'images/product/37/packaging-tape-apple-tape.webp', 'images/product/37/packaging-tape-apple-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(38, 3, 'images/product/38/packaging-tape-fire-tape.webp', 'images/product/38/packaging-tape-fire-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(40, 13, 'images/product/40/self-adhesive-color-tape-hot.webp', 'images/product/40/self-adhesive-color-tape-hot_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(41, 36, 'images/product/41/self-adhesive-tape-green-laser-tape.webp', 'images/product/41/self-adhesive-tape-green-laser-tape_1.webp', 1, '2023-08-23 10:35:05', '2023-08-23 12:07:09'),
(42, 6, 'images/product/42/stationary-tape-piton-tape.webp', 'images/product/42/stationary-tape-piton-tape_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:09'),
(43, 6, 'images/product/43/stationary-tape-color-tape.webp', 'images/product/43/stationary-tape-color-tape_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:09'),
(44, 6, 'images/product/44/stationary-tape-laser-tape.webp', 'images/product/44/stationary-tape-laser-tape_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(45, 19, 'images/product/45/cling-warp-highmax-wrap.webp', 'images/product/45/cling-warp-highmax-wrap_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(46, 19, 'images/product/46/cling-warp-komex.webp', 'images/product/46/cling-warp-komex_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(48, 19, 'images/product/48/cling-warp-star-maximum.webp', 'images/product/48/cling-warp-star-maximum_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(49, 19, 'images/product/49/cling-warp-highmax-wrap-2.webp', 'images/product/49/cling-warp-highmax-wrap-2_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(50, 16, 'images/product/50/mr-foil-hookah-aluminum-foil.webp', 'images/product/50/mr-foil-hookah-aluminum-foil_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:10'),
(51, 16, 'images/product/51/mr-foil-oven-2.webp', 'images/product/51/mr-foil-oven-2_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:11'),
(52, 16, 'images/product/52/mr-foil-oven.webp', 'images/product/52/mr-foil-oven_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:11'),
(53, 17, 'images/product/53/aluminium-foil-king.webp', 'images/product/53/aluminium-foil-king_1.webp', 1, '2023-08-23 10:35:06', '2023-08-23 12:07:11'),
(55, 37, '', '', 1, '2023-08-23 10:35:06', '2023-08-23 10:35:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
