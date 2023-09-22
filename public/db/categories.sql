-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 05:53 PM
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

INSERT INTO `categories` (`id`, `parent_id`, `cat_shop`, `cat_web`, `cat_web_data`, `photo`, `photo_thum_1`, `icon`, `is_active`, `postion_shop`, `postion_web`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, 1, 'images/category/1/1695026582_JT37FMYQWM0PhIi_.webp', 'images/category/1/1695026582_IuZylqYQtjh8paj_.webp', 'images/category/1/self-adhesive-tape-9gpZmGW9o0.webp', 1, 1, 1, '2023-08-20 13:21:00', '2023-09-22 08:15:27'),
(3, 1, 1, 1, 1, 'images/category/3/1695026739_n2ireT5gBGEC4ty_.webp', 'images/category/3/1695026739_U0n63NEpiZRcFmt_.webp', NULL, 1, 1, 1, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(6, 1, 1, 1, 1, 'images/category/6/1695026858_h4ssU2WxIcbRJaS_.webp', 'images/category/6/1695026858_tvyRO7aDZztUHmJ_.webp', NULL, 1, 2, 2, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(7, 1, 1, 1, 1, 'images/category/7/1695026888_gFyZrTLy34x4JlD_.webp', 'images/category/7/1695026889_Etls2skc2n5Lp4l_.webp', NULL, 1, 3, 3, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(10, 1, 1, 1, 1, 'images/category/10/1695026919_ipuHO1gMpQq5ogz_.webp', 'images/category/10/1695026920_xxddbEYuUP0kcr2_.webp', NULL, 1, 4, 4, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(12, 1, 1, 1, 1, 'images/category/12/self-adhesive-tape-double-sided-tape-lRaLDtvKsj.webp', 'images/category/12/self-adhesive-tape-double-sided-tape-LKSKAGpLlN.webp', NULL, 1, 5, 5, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(13, 1, 1, 1, 1, 'images/category/13/self-adhesive-color-tape-9juA9woW6Y.webp', 'images/category/13/self-adhesive-color-tape-ZQXBzq7Bmy.webp', NULL, 1, 6, 6, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(14, 1, 1, 1, 1, 'images/category/14/printed-self-adhesive-tape-wit6tOvhQO.webp', 'images/category/14/printed-self-adhesive-tape-tinLONCYiG.webp', NULL, 1, 7, 7, '2023-08-20 13:21:00', '2023-09-21 15:38:05'),
(15, NULL, 1, 1, 1, 'images/category/15/aluminum-foil-9ateYy6Y1d.webp', 'images/category/15/aluminum-foil-iUy8e9Q9Jl.webp', 'images/category/15/aluminum-foil-AewbvUheG4.webp', 1, 2, 2, '2023-08-20 13:21:00', '2023-09-22 08:15:27'),
(16, 15, 1, 1, 1, 'images/category/16/aluminium-foil-for-industry-use-rMSaQN8Qlj.webp', 'images/category/16/aluminium-foil-for-industry-use-Tq1OEZFJj6.webp', NULL, 1, 2, 0, '2023-08-20 13:21:00', '2023-09-20 06:45:10'),
(17, 15, 1, 1, 1, 'images/category/17/aluminium-foil-for-house-hold-pc1sROVpZf.webp', 'images/category/17/aluminium-foil-for-house-hold-66t8kgR2b9.webp', NULL, 1, 1, 0, '2023-08-20 13:21:00', '2023-09-20 06:45:10'),
(18, NULL, 1, 1, 1, 'images/category/18/food-and-beverage-UGrVuNbe0K.webp', 'images/category/18/food-and-beverage-MXtRd0juh7.webp', 'images/category/18/food-and-beverage-USNV3PceRM.webp', 1, 3, 4, '2023-08-20 13:21:00', '2023-09-22 08:15:27'),
(19, 18, 1, 1, 1, 'images/category/19/cling-warp-VF5V7ovvUK.webp', 'images/category/19/cling-warp-Cp2PPatSPf.webp', NULL, 1, 0, 0, '2023-08-20 13:21:00', '2023-09-18 06:09:17'),
(23, NULL, 1, 1, 1, 'images/category/23/decorative-strips-uVCrEgT04A.webp', 'images/category/23/decorative-strips-R4aFRJ0cOv.webp', 'images/category/23/decorative-strips-mTc06N9TcV.webp', 1, 5, 3, '2023-08-20 13:21:00', '2023-09-22 08:15:27'),
(24, 23, 1, 1, 1, 'images/category/24/gift-accessories-ribbon-4TNi4bVlK8.webp', 'images/category/24/gift-accessories-ribbon-bBGyJev7ol.webp', NULL, 1, 0, 0, '2023-08-20 13:21:00', '2023-09-18 06:02:02'),
(25, 23, 1, 1, 1, 'images/category/25/gift-accessories-gift-paper.webp', 'images/category/25/gift-accessories-gift-paper_1.webp', NULL, 1, 0, 0, '2023-08-20 13:21:00', '2023-08-20 15:14:43'),
(26, 23, 1, 1, 1, 'images/category/26/gift-accessories-crepe-paper-Rv5Gt8vgzz.webp', 'images/category/26/gift-accessories-crepe-paper-1OJ09MA7Xi.webp', NULL, 1, 0, 0, '2023-08-20 13:21:00', '2023-09-18 06:02:52'),
(36, 1, 1, 1, 1, 'images/category/36/self-adhesive-tape-laser-tape-H4eieh0Fo2.webp', 'images/category/36/self-adhesive-tape-laser-tape-muzyFnaaFS.webp', NULL, 1, 8, 8, '2023-08-20 13:21:00', '2023-09-21 15:38:09'),
(37, 1, 0, 1, 1, 'images/category/37/jumbo-roll-1ubGQj62Te.webp', 'images/category/37/jumbo-roll-oTATfaTpbb.webp', NULL, 1, 0, 9, '2023-08-20 13:21:00', '2023-09-21 15:38:09'),
(38, NULL, 1, 0, 1, 'images/category/38/stationary-LSf9eFzlLO.webp', 'images/category/38/stationary-s2AtrupIj3.webp', 'images/category/38/stationary-Y3SRRYgLJ9.webp', 1, 12, 0, '2023-09-03 15:42:03', '2023-09-20 07:26:17'),
(39, NULL, 1, 0, 1, 'images/category/39/glue-gun-lqgSvBfiND.webp', 'images/category/39/glue-gun-VMr0U5SiOh.webp', 'images/category/39/glue-gun-07y8xnLwBp.webp', 1, 4, 0, '2023-09-07 15:55:59', '2023-09-22 08:15:27'),
(40, NULL, 1, 0, 1, 'images/category/40/paper-cups-xd451a1MAj.webp', 'images/category/40/paper-cups-DsssGJh2az.webp', 'images/category/40/paper-cups-JWm1JaYCez.webp', 1, 6, 0, '2023-09-07 16:00:11', '2023-09-20 07:26:17'),
(41, NULL, 1, 0, 1, 'images/category/41/cash-stick-VaTB5aLJHi.webp', 'images/category/41/cash-stick-SiCwhEuF0G.webp', NULL, 1, 7, 0, '2023-09-07 16:06:27', '2023-09-20 07:26:17'),
(42, NULL, 1, 0, 1, 'images/category/42/birthday-supplies-dQl2qee3g7.webp', 'images/category/42/birthday-supplies-dGbjUbvFW0.webp', 'images/category/42/birthday-supplies-6ZaxAeFhMm.webp', 1, 8, 0, '2023-09-07 16:10:07', '2023-09-20 07:26:17'),
(43, NULL, 1, 0, 1, 'images/category/43/photocopy-paper-gDw6TlkkkY.webp', 'images/category/43/photocopy-paper-H3eTuEfs25.webp', 'images/category/43/photocopy-paper-UvO32h4Hqf.webp', 1, 9, 0, '2023-09-07 16:18:33', '2023-09-20 07:26:17'),
(44, NULL, 1, 0, 1, 'images/category/44/cutter-JJNb5LIhwh.webp', 'images/category/44/cutter-96ESreLAj4.webp', 'images/category/44/cutter-Uo6KScRpEf.webp', 1, 10, 0, '2023-09-07 16:19:43', '2023-09-20 07:26:17'),
(45, NULL, 1, 0, 1, 'images/category/45/plastic-dishes-FvI5iLqFv4.webp', 'images/category/45/plastic-dishes-eXoZPJ4s32.webp', 'images/category/45/plastic-dishes-ViXVB2m2a6.webp', 1, 11, 0, '2023-09-07 16:29:48', '2023-09-20 07:26:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
