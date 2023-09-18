-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 11:12 AM
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

INSERT INTO `products` (`id`, `category_id`, `ref_code`, `price`, `discount_price`, `qty`, `pro_shop`, `pro_web`, `pro_web_data`, `photo`, `photo_thum_1`, `is_active`, `is_archived`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/1/packaging-tape-nar-tape-pK1ZZAx1Bt.webp', 'images/product/1/packaging-tape-nar-tape-LFzfDCr9rp.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 16:54:49'),
(2, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/2/packaging-tape-the-best-tape-8zgUD7Hfkp.webp', 'images/product/2/packaging-tape-the-best-tape-hjyO94ihAN.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:05:47'),
(3, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/3/packaging-tape-crystal-tape-ljwDFxKIPu.webp', 'images/product/3/packaging-tape-crystal-tape-TkKyhiYvz8.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:13:14'),
(4, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/4/packaging-tape-green-tape-ilUbH2ePnE.webp', 'images/product/4/packaging-tape-green-tape-yPLuJXhgFL.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:18:14'),
(7, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/7/stationary-tape-the-best-7FWnIfoPlI.webp', 'images/product/7/stationary-tape-the-best-IbCNlBm4Uj.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:22:05'),
(9, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/9/self-adhesive-tape-green-masking-tape-NCfPjsHDXS.webp', 'images/product/9/self-adhesive-tape-green-masking-tape-yzuVu0CJw8.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:28:02'),
(10, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/10/self-adhesive-tape-et-masking-tape-fQdOqUmjb1.webp', 'images/product/10/self-adhesive-tape-et-masking-tape-cWTN4GKJrF.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:32:52'),
(12, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/12/printed-self-adhesive-tape-fresh-UZumeqD8dU.webp', 'images/product/12/printed-self-adhesive-tape-fresh-2Lj9QYtvse.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:42:41'),
(13, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/13/fragile-printed-tape-R6ecWKxeWV.webp', 'images/product/13/fragile-printed-tape-ymdW2WWcxP.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:43:34'),
(14, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-ZOxQuBhQU7.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-mqmIDu7ihj.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:50:10'),
(15, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/15/aluminium-foil-mr-foil-50gm-7uaB5YjzrQ.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-PWjJh3vB0C.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 17:57:07'),
(16, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/16/gift-accessories-05-cm-pp-ribbon-zwyM4puoK9.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon-QIZM2YAPgZ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:03:47'),
(17, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/17/gift-accessories-5-cm-pp-ribbon-xviMPSkCuh.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-iOyYTkC9nd.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:08:22'),
(18, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/18/gift-accessories-metallic-pp-ribbon-NuJVioSBPr.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon-PApwOGHEnJ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:12:53'),
(19, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/19/gift-accessories-metallic-paper-eNuol9MjIF.webp', 'images/product/19/gift-accessories-metallic-paper-5y0avc0CU4.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:19:49'),
(21, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/21/crepe-paper-normal-color-aNqnBla7MW.webp', 'images/product/21/crepe-paper-normal-color-amNuIdNDry.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:26:36'),
(22, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/22/crepe-paper-metallic-color-fJu6bd6Nsn.webp', 'images/product/22/crepe-paper-metallic-color-gsTeE7PkS2.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:29:03'),
(37, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/37/packaging-tape-apple-tape-7yX0ISRHI6.webp', 'images/product/37/packaging-tape-apple-tape-vgqJ7Ls0kh.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:33:05'),
(38, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/38/packaging-tape-fire-tape-VCxzQz3Fdo.webp', 'images/product/38/packaging-tape-fire-tape-Oro6SUeUZQ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:36:18'),
(40, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/40/self-adhesive-color-tape-hot-WTnQB2g5ZF.webp', 'images/product/40/self-adhesive-color-tape-hot-KqNOtw3NXC.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:40:13'),
(41, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/41/self-adhesive-tape-green-laser-tape-psaCVPiAfS.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-gQD1rysa6V.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-17 18:46:02'),
(42, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/42/stationary-tape-piton-tape-FsDY7r8lVx.webp', 'images/product/42/stationary-tape-piton-tape-fGYHF0Tgaz.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 18:49:16'),
(43, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/43/stationary-tape-color-tape-i1glwV6Q48.webp', 'images/product/43/stationary-tape-color-tape-ooycBqDvGL.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 18:53:25'),
(44, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/44/stationary-tape-laser-tape-Ai68jqJyVT.webp', 'images/product/44/stationary-tape-laser-tape-UYPgBvDUT3.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 18:55:45'),
(45, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/45/cling-warp-highmax-wrap-uv2GLm8jp9.webp', 'images/product/45/cling-warp-highmax-wrap-asxtMYmyz9.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:01:12'),
(46, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/46/cling-warp-komex-7JWSLYYfLZ.webp', 'images/product/46/cling-warp-komex-Eawszrxetm.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:05:33'),
(48, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/48/cling-warp-star-maximum-Fa8RxK8RcK.webp', 'images/product/48/cling-warp-star-maximum-MnG5FDQWAQ.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:10:03'),
(49, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/49/cling-warp-highmax-wrap-2-YUgKxOaSNC.webp', 'images/product/49/cling-warp-highmax-wrap-2-NowG1BuO0N.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:13:35'),
(50, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/50/mr-foil-hookah-aluminum-foil-guLXJ1c3d8.webp', 'images/product/50/mr-foil-hookah-aluminum-foil-p3gTxGIEWV.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:17:28'),
(51, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/51/mr-foil-oven-2-Wd2ha3nq0v.webp', 'images/product/51/mr-foil-oven-2-SgPMhrq2RR.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:21:26'),
(52, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/52/mr-foil-oven-SXzyUg37Pu.webp', 'images/product/52/mr-foil-oven-9GHCVHjBP5.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:28:57'),
(53, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/53/aluminium-foil-king-qpIGRI3afb.webp', 'images/product/53/aluminium-foil-king-hW0yT2II1O.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-17 19:32:15'),
(55, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/55/jumbo-roll-avoY1LBh67.webp', 'images/product/55/jumbo-roll-Vsrz2ajWCS.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-18 06:07:30'),
(56, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 'images/product/56/مسدس-شمع-بسلك-كهرباء-من-يوني-تي-موديل-eh430-27KFKArcIK.webp', 'images/product/56/مسدس-شمع-بسلك-كهرباء-من-يوني-تي-موديل-eh430-2PI1TFWSZe.webp', 1, 0, '2023-09-11 17:04:54', '2023-09-17 19:34:17'),
(57, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 'images/product/57/مسدس-شمع-st-03-20w-حجم-صغير-ازرق-RIJhHKr9RU.webp', 'images/product/57/مسدس-شمع-st-03-20w-حجم-صغير-ازرق-0BiTOSAKTw.webp', 1, 0, '2023-09-11 17:11:43', '2023-09-17 19:35:30'),
(58, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 'images/product/58/مسدس-شمع-برو-جلو-من-ستانلي-gr100-1RhDP71AO3.webp', 'images/product/58/مسدس-شمع-برو-جلو-من-ستانلي-gr100-WGykuxK7pV.webp', 1, 0, '2023-09-11 17:13:31', '2023-09-17 19:36:28'),
(59, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'images/product/59/مسدس-شمع-من-عتمان-جروب-متعدد-الألوان-tRbKwi2gQE.webp', 'images/product/59/مسدس-شمع-من-عتمان-جروب-متعدد-الألوان-ttXSIKzJjo.webp', 1, 0, '2023-09-11 17:14:46', '2023-09-11 17:14:47'),
(60, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'images/product/60/1694990299_zfbU0TI2Q3REyLO_.webp', 'images/product/60/1694990299_MMfnPgB0lkSxjGz_.webp', 1, 0, '2023-09-11 17:18:06', '2023-09-17 19:38:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
