-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 05:42 PM
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

INSERT INTO `products` (`id`, `ref_code`, `price`, `discount_price`, `qty`, `pro_shop`, `pro_web`, `pro_web_data`, `photo`, `photo_thum_1`, `is_active`, `is_archived`, `created_at`, `updated_at`) VALUES
(1, 12590966, 200.00, 100.00, 36.00, 1, 1, 1, 'images/product/1/packaging-tape-nar-tape-pK1ZZAx1Bt.webp', 'images/product/1/packaging-tape-nar-tape-LFzfDCr9rp.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(2, 91103331, 500.00, NULL, 18.00, 1, 1, 1, 'images/product/2/packaging-tape-the-best-tape-8zgUD7Hfkp.webp', 'images/product/2/packaging-tape-the-best-tape-hjyO94ihAN.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(3, 42512152, 243.00, 150.00, 15.00, 1, 1, 1, 'images/product/3/packaging-tape-crystal-tape-ljwDFxKIPu.webp', 'images/product/3/packaging-tape-crystal-tape-TkKyhiYvz8.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(4, 73625246, 236.00, 175.00, 9.00, 1, 1, 1, 'images/product/4/packaging-tape-green-tape-ilUbH2ePnE.webp', 'images/product/4/packaging-tape-green-tape-yPLuJXhgFL.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(7, 73571010, 513.00, 450.00, 5.00, 1, 1, 1, 'images/product/7/stationary-tape-the-best-7FWnIfoPlI.webp', 'images/product/7/stationary-tape-the-best-IbCNlBm4Uj.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(9, 77297683, 569.00, 476.00, 1.00, 1, 1, 1, 'images/product/9/self-adhesive-tape-green-masking-tape-NCfPjsHDXS.webp', 'images/product/9/self-adhesive-tape-green-masking-tape-yzuVu0CJw8.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(10, 58919463, 450.00, 370.00, 11.00, 1, 1, 1, 'images/product/10/self-adhesive-tape-et-masking-tape-fQdOqUmjb1.webp', 'images/product/10/self-adhesive-tape-et-masking-tape-cWTN4GKJrF.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(12, 93203908, 407.00, 314.00, 6.00, 1, 1, 1, 'images/product/12/printed-self-adhesive-tape-fresh-UZumeqD8dU.webp', 'images/product/12/printed-self-adhesive-tape-fresh-2Lj9QYtvse.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(13, 99892834, 549.00, 449.00, 34.00, 1, 1, 1, 'images/product/13/fragile-printed-tape-R6ecWKxeWV.webp', 'images/product/13/fragile-printed-tape-ymdW2WWcxP.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(14, 46035437, 299.00, 232.00, 41.00, 1, 1, 1, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-ZOxQuBhQU7.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-mqmIDu7ihj.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(15, 27112927, 528.00, 461.00, 36.00, 1, 1, 1, 'images/product/15/aluminium-foil-mr-foil-50gm-7uaB5YjzrQ.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-PWjJh3vB0C.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(16, 64039482, 259.00, 196.00, 38.00, 1, 1, 1, 'images/product/16/gift-accessories-05-cm-pp-ribbon-zwyM4puoK9.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon-QIZM2YAPgZ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(17, 90065104, 410.00, 353.00, 49.00, 1, 1, 1, 'images/product/17/gift-accessories-5-cm-pp-ribbon-xviMPSkCuh.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-iOyYTkC9nd.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(18, 93851078, 464.00, 396.00, 41.00, 1, 1, 1, 'images/product/18/gift-accessories-metallic-pp-ribbon-NuJVioSBPr.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon-PApwOGHEnJ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(19, 32158449, 507.00, 454.00, 41.00, 1, 1, 1, 'images/product/19/gift-accessories-metallic-paper-eNuol9MjIF.webp', 'images/product/19/gift-accessories-metallic-paper-5y0avc0CU4.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(21, 67721246, 335.00, 269.00, 49.00, 1, 1, 1, 'images/product/21/crepe-paper-normal-color-aNqnBla7MW.webp', 'images/product/21/crepe-paper-normal-color-amNuIdNDry.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(22, 61275163, 264.00, 204.00, 19.00, 1, 1, 1, 'images/product/22/crepe-paper-metallic-color-fJu6bd6Nsn.webp', 'images/product/22/crepe-paper-metallic-color-gsTeE7PkS2.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(37, 11629530, 580.00, 516.00, 45.00, 1, 1, 1, 'images/product/37/packaging-tape-apple-tape-7yX0ISRHI6.webp', 'images/product/37/packaging-tape-apple-tape-vgqJ7Ls0kh.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(38, 71150515, 222.00, 155.00, 42.00, 1, 1, 1, 'images/product/38/packaging-tape-fire-tape-VCxzQz3Fdo.webp', 'images/product/38/packaging-tape-fire-tape-Oro6SUeUZQ.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(40, 52473774, 392.00, 320.00, 16.00, 1, 1, 1, 'images/product/40/self-adhesive-color-tape-hot-WTnQB2g5ZF.webp', 'images/product/40/self-adhesive-color-tape-hot-KqNOtw3NXC.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(41, 39546824, 529.00, 476.00, 8.00, 1, 1, 1, 'images/product/41/self-adhesive-tape-green-laser-tape-psaCVPiAfS.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-gQD1rysa6V.webp', 1, 0, '2023-08-23 10:35:05', '2023-09-22 12:52:24'),
(42, 32445837, 494.00, 415.00, 42.00, 1, 1, 1, 'images/product/42/stationary-tape-piton-tape-FsDY7r8lVx.webp', 'images/product/42/stationary-tape-piton-tape-fGYHF0Tgaz.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(43, 54798267, 491.00, 440.00, 35.00, 1, 1, 1, 'images/product/43/stationary-tape-color-tape-i1glwV6Q48.webp', 'images/product/43/stationary-tape-color-tape-ooycBqDvGL.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(44, 15174213, 582.00, 507.00, 39.00, 1, 1, 1, 'images/product/44/stationary-tape-laser-tape-Ai68jqJyVT.webp', 'images/product/44/stationary-tape-laser-tape-UYPgBvDUT3.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(45, 21274812, 483.00, 400.00, 35.00, 1, 1, 1, 'images/product/45/cling-warp-highmax-wrap-uv2GLm8jp9.webp', 'images/product/45/cling-warp-highmax-wrap-asxtMYmyz9.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(46, 38691841, 426.00, 354.00, 20.00, 1, 1, 1, 'images/product/46/cling-warp-komex-7JWSLYYfLZ.webp', 'images/product/46/cling-warp-komex-Eawszrxetm.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(48, 95719266, 437.00, 378.00, 29.00, 1, 1, 1, 'images/product/48/cling-warp-star-maximum-Fa8RxK8RcK.webp', 'images/product/48/cling-warp-star-maximum-MnG5FDQWAQ.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(49, 32269692, 289.00, 191.00, 34.00, 1, 1, 1, 'images/product/49/cling-warp-highmax-wrap-2-YUgKxOaSNC.webp', 'images/product/49/cling-warp-highmax-wrap-2-NowG1BuO0N.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(50, 93276582, 491.00, 394.00, 1.00, 1, 1, 1, 'images/product/50/mr-foil-hookah-aluminum-foil-guLXJ1c3d8.webp', 'images/product/50/mr-foil-hookah-aluminum-foil-p3gTxGIEWV.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(51, 25501127, 338.00, 282.00, 33.00, 1, 1, 1, 'images/product/51/mr-foil-oven-2-Wd2ha3nq0v.webp', 'images/product/51/mr-foil-oven-2-SgPMhrq2RR.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(52, 63421658, 551.00, 491.00, 25.00, 1, 1, 1, 'images/product/52/mr-foil-oven-SXzyUg37Pu.webp', 'images/product/52/mr-foil-oven-9GHCVHjBP5.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(53, 60959804, 308.00, 253.00, 48.00, 1, 1, 1, 'images/product/53/aluminium-foil-king-qpIGRI3afb.webp', 'images/product/53/aluminium-foil-king-hW0yT2II1O.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-22 12:52:24'),
(55, NULL, NULL, NULL, NULL, 0, 1, 1, 'images/product/55/jumbo-roll-avoY1LBh67.webp', 'images/product/55/jumbo-roll-Vsrz2ajWCS.webp', 1, 0, '2023-08-23 10:35:06', '2023-09-21 08:28:19'),
(56, 43744223, 594.00, 524.00, 11.00, 1, 0, 1, 'images/product/56/مسدس-شمع-بسلك-كهرباء-من-يوني-تي-موديل-eh430-27KFKArcIK.webp', 'images/product/56/مسدس-شمع-بسلك-كهرباء-من-يوني-تي-موديل-eh430-2PI1TFWSZe.webp', 1, 0, '2023-09-11 17:04:54', '2023-09-22 12:52:24'),
(57, 53492624, 200.00, 121.00, 43.00, 1, 0, 0, 'images/product/57/مسدس-شمع-st-03-20w-حجم-صغير-ازرق-RIJhHKr9RU.webp', 'images/product/57/مسدس-شمع-st-03-20w-حجم-صغير-ازرق-0BiTOSAKTw.webp', 1, 0, '2023-09-11 17:11:43', '2023-09-22 12:52:24'),
(58, 35945023, 525.00, 451.00, 33.00, 1, 0, 0, 'images/product/58/مسدس-شمع-برو-جلو-من-ستانلي-gr100-1RhDP71AO3.webp', 'images/product/58/مسدس-شمع-برو-جلو-من-ستانلي-gr100-WGykuxK7pV.webp', 1, 0, '2023-09-11 17:13:31', '2023-09-22 12:52:24'),
(59, 28262230, 290.00, 190.00, 35.00, 1, 1, 0, 'images/product/59/مسدس-شمع-من-عتمان-جروب-متعدد-الألوان-tRbKwi2gQE.webp', 'images/product/59/مسدس-شمع-من-عتمان-جروب-متعدد-الألوان-ttXSIKzJjo.webp', 1, 0, '2023-09-11 17:14:46', '2023-09-22 12:52:24'),
(60, 23307506, 404.00, 332.00, 43.00, 1, 1, 0, 'images/product/60/1694990299_zfbU0TI2Q3REyLO_.webp', 'images/product/60/1694990299_MMfnPgB0lkSxjGz_.webp', 1, 0, '2023-09-11 17:18:06', '2023-09-22 12:52:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
