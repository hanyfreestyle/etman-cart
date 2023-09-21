-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 09:03 PM
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
(1, 1, 'images/product/1/packaging-tape-nar-tape-DSCWCxa09r.webp', 'images/product/1/packaging-tape-nar-tape-vO6jwQh6Ro.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 16:55:15', '2023-09-17 17:06:24'),
(2, 1, 'images/product/1/packaging-tape-nar-tape-g4h1c1Aw6K.webp', 'images/product/1/packaging-tape-nar-tape-Og7Ou3Epfo.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 16:55:15', '2023-09-17 17:06:24'),
(3, 1, 'images/product/1/packaging-tape-nar-tape-tACIgfWIHn.webp', 'images/product/1/packaging-tape-nar-tape-IJ3ARzPO7z.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 16:55:15', '2023-09-17 17:06:24'),
(4, 2, 'images/product/2/packaging-tape-the-best-tape-9TfpuLXRIX.webp', 'images/product/2/packaging-tape-the-best-tape-uBXi7k0SEL.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:06:05', '2023-09-17 17:06:10'),
(5, 2, 'images/product/2/packaging-tape-the-best-tape-VbG89wEGiC.webp', 'images/product/2/packaging-tape-the-best-tape-puWPTnWOes.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:06:05', '2023-09-17 17:06:10'),
(6, 2, 'images/product/2/packaging-tape-the-best-tape-4W6JQugYMl.webp', 'images/product/2/packaging-tape-the-best-tape-HC5fCgNimx.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:06:05', '2023-09-17 17:06:10'),
(7, 3, 'images/product/3/packaging-tape-crystal-tape-kKur4yAqL9.webp', 'images/product/3/packaging-tape-crystal-tape-YrfA6gjUVx.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:13:29', '2023-09-17 17:13:33'),
(8, 3, 'images/product/3/packaging-tape-crystal-tape-pdSyhx4KTm.webp', 'images/product/3/packaging-tape-crystal-tape-umnvWtPFPn.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:13:29', '2023-09-17 17:13:33'),
(9, 3, 'images/product/3/packaging-tape-crystal-tape-1X1FckPAc4.webp', 'images/product/3/packaging-tape-crystal-tape-zo5v0UeunW.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:13:29', '2023-09-17 17:13:33'),
(10, 4, 'images/product/4/packaging-tape-green-tape-D3Q20r4fIg.webp', 'images/product/4/packaging-tape-green-tape-PA6LWKr2ZV.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:17:24', '2023-09-17 17:17:31'),
(11, 4, 'images/product/4/packaging-tape-green-tape-yQxkLCeUSt.webp', 'images/product/4/packaging-tape-green-tape-IoEKEX1JAv.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:17:24', '2023-09-17 17:17:31'),
(12, 4, 'images/product/4/packaging-tape-green-tape-LbFQ3Lz7tr.webp', 'images/product/4/packaging-tape-green-tape-bBVU8Qlj0A.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:17:24', '2023-09-17 17:17:31'),
(13, 7, 'images/product/7/stationary-tape-the-best-5CBLSO8gVP.webp', 'images/product/7/stationary-tape-the-best-UVT5wMWLLQ.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:22:17', '2023-09-17 17:22:17'),
(14, 7, 'images/product/7/stationary-tape-the-best-Bbu7IvxjK0.webp', 'images/product/7/stationary-tape-the-best-HvoGV1w1L2.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:22:17', '2023-09-17 17:22:17'),
(15, 9, 'images/product/9/self-adhesive-tape-green-masking-tape-muSRjpAOzJ.webp', 'images/product/9/self-adhesive-tape-green-masking-tape-v1q86o0NSi.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:28:24', '2023-09-17 17:28:24'),
(16, 9, 'images/product/9/self-adhesive-tape-green-masking-tape-gDgbjabge5.webp', 'images/product/9/self-adhesive-tape-green-masking-tape-w2aPwdUtaZ.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:28:24', '2023-09-17 17:28:24'),
(17, 9, 'images/product/9/self-adhesive-tape-green-masking-tape-e6nrCRy99X.webp', 'images/product/9/self-adhesive-tape-green-masking-tape-fk6NlX0s7e.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:28:24', '2023-09-17 17:28:24'),
(18, 10, 'images/product/10/self-adhesive-tape-et-masking-tape-1jW6VNT5uW.webp', 'images/product/10/self-adhesive-tape-et-masking-tape-evuDq0cO9u.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:33:05', '2023-09-17 17:33:05'),
(19, 10, 'images/product/10/self-adhesive-tape-et-masking-tape-RsTWl14gnI.webp', 'images/product/10/self-adhesive-tape-et-masking-tape-jNj3WPhQFR.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:33:05', '2023-09-17 17:33:05'),
(20, 10, 'images/product/10/self-adhesive-tape-et-masking-tape-CjMOw3OIGB.webp', 'images/product/10/self-adhesive-tape-et-masking-tape-PUcbtgssHT.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:33:05', '2023-09-17 17:33:05'),
(21, 12, 'images/product/12/printed-self-adhesive-tape-fresh-Rn4wCW9YY6.webp', 'images/product/12/printed-self-adhesive-tape-fresh-tHap5mfIHg.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:42:56', '2023-09-17 17:42:56'),
(22, 12, 'images/product/12/printed-self-adhesive-tape-fresh-WeYo4OBnCb.webp', 'images/product/12/printed-self-adhesive-tape-fresh-HrmgLlN24E.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 17:42:56', '2023-09-17 17:42:56'),
(23, 13, 'images/product/13/fragile-printed-tape-f5OLPpcEZp.webp', 'images/product/13/fragile-printed-tape-CO019TSXIC.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 17:43:49', '2023-09-17 17:44:01'),
(24, 13, 'images/product/13/fragile-printed-tape-Y38vZxnAay.webp', 'images/product/13/fragile-printed-tape-HtAh3ICEYs.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:43:49', '2023-09-17 17:43:59'),
(25, 13, 'images/product/13/fragile-printed-tape-0BreqDoGCV.webp', 'images/product/13/fragile-printed-tape-rcVgEQnDIl.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:43:49', '2023-09-17 17:44:01'),
(26, 13, 'images/product/13/fragile-printed-tape-aq8Yc2wSQq.webp', 'images/product/13/fragile-printed-tape-I01mXAaiqS.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:43:49', '2023-09-17 17:43:56'),
(27, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-D0OwpzXVob.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-yKcvmaKnEJ.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:50:24', '2023-09-17 17:50:40'),
(28, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-qHhoWLbavk.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-ijMbtrar4u.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 17:50:24', '2023-09-17 17:50:40'),
(29, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-B1XM1dhvjt.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-vmDqVo5Xnk.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:50:24', '2023-09-17 17:50:37'),
(30, 14, 'images/product/14/self-adhesive-tape-electrical-insulating-tape-wFY0LhQmwH.webp', 'images/product/14/self-adhesive-tape-electrical-insulating-tape-KThSplrWnr.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:50:24', '2023-09-17 17:50:33'),
(31, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-3iWGXJtuJ2.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-yQMuCqz2GA.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 17:57:43', '2023-09-17 17:58:02'),
(32, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-LaE4oBkJ1m.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-NvtZbpq1FI.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 17:57:43', '2023-09-17 17:58:02'),
(33, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-WnyZmCxLVa.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-KrvPwyIW68.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 17:57:43', '2023-09-17 17:58:02'),
(34, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-fJEbOSdpnn.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-PBwaTTAer9.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 17:57:43', '2023-09-17 17:58:02'),
(35, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-wNkTmlnl2S.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-ZtlnNvWQyp.webp', NULL, NULL, NULL, NULL, NULL, 5, 0, '2023-09-17 17:57:43', '2023-09-17 17:58:02'),
(36, 15, 'images/product/15/aluminium-foil-mr-foil-50gm-9GNanOUHx0.webp', 'images/product/15/aluminium-foil-mr-foil-50gm-qUqPjeqW95.webp', NULL, NULL, NULL, NULL, NULL, 6, 0, '2023-09-17 17:57:51', '2023-09-17 17:58:02'),
(37, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon-53mN6ToK2t.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon-ceJF2U0fRa.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:04:13', '2023-09-17 18:04:17'),
(38, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon-n4JQC8kvKd.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon-cyKftFFGhu.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:04:13', '2023-09-17 18:04:17'),
(39, 16, 'images/product/16/gift-accessories-05-cm-pp-ribbon-bVMPGAUiYQ.webp', 'images/product/16/gift-accessories-05-cm-pp-ribbon-rs7INc4Vah.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:04:13', '2023-09-17 18:04:17'),
(40, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon-NtR8FMRQxF.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-qHT1VmnKBp.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:08:43', '2023-09-17 18:08:50'),
(41, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon-DdSXq7TNi7.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-MTK9ugSunH.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 18:08:43', '2023-09-17 18:08:51'),
(42, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon-DS6BfCuNlB.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-Q1PkI0HG0n.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:08:43', '2023-09-17 18:08:50'),
(43, 17, 'images/product/17/gift-accessories-5-cm-pp-ribbon-KLczVdpHr6.webp', 'images/product/17/gift-accessories-5-cm-pp-ribbon-D7DBgPHDBQ.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:08:43', '2023-09-17 18:08:51'),
(44, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon-i0mRTiSEgf.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon-36neD0BmV2.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:13:06', '2023-09-17 18:13:15'),
(45, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon-xz8Z1hanmW.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon-uxsayz8wJD.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:13:06', '2023-09-17 18:13:15'),
(46, 18, 'images/product/18/gift-accessories-metallic-pp-ribbon-PIchyxNlri.webp', 'images/product/18/gift-accessories-metallic-pp-ribbon-9XDivsIxt1.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:13:06', '2023-09-17 18:13:15'),
(47, 19, 'images/product/19/gift-accessories-metallic-paper-xANWM0ErIP.webp', 'images/product/19/gift-accessories-metallic-paper-l8WwPkpmYD.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:20:17', '2023-09-17 18:20:17'),
(48, 19, 'images/product/19/gift-accessories-metallic-paper-Zes7qF7wp2.webp', 'images/product/19/gift-accessories-metallic-paper-OIfExDg001.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:20:17', '2023-09-17 18:20:17'),
(49, 19, 'images/product/19/gift-accessories-metallic-paper-HzTP0OBl3T.webp', 'images/product/19/gift-accessories-metallic-paper-3rCYryJgUq.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:20:17', '2023-09-17 18:20:17'),
(50, 19, 'images/product/19/gift-accessories-metallic-paper-i5oyNkfK4u.webp', 'images/product/19/gift-accessories-metallic-paper-pK4nQ8iUAf.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:20:17', '2023-09-17 18:20:17'),
(51, 21, 'images/product/21/crepe-paper-normal-color-pppK7uJ8Zx.webp', 'images/product/21/crepe-paper-normal-color-ix98EDjW66.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:26:53', '2023-09-17 18:27:09'),
(52, 21, 'images/product/21/crepe-paper-normal-color-JpmLHqHVJi.webp', 'images/product/21/crepe-paper-normal-color-WMYzBlE7yp.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 18:26:53', '2023-09-17 18:27:16'),
(53, 21, 'images/product/21/crepe-paper-normal-color-AtPinC25wf.webp', 'images/product/21/crepe-paper-normal-color-idCet2PmfZ.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:26:53', '2023-09-17 18:27:16'),
(54, 21, 'images/product/21/crepe-paper-normal-color-VcyA2U7EJd.webp', 'images/product/21/crepe-paper-normal-color-lS8baXbd3L.webp', NULL, NULL, NULL, NULL, NULL, 5, 0, '2023-09-17 18:26:53', '2023-09-17 18:27:09'),
(55, 21, 'images/product/21/crepe-paper-normal-color-JkZ4enz3VB.webp', 'images/product/21/crepe-paper-normal-color-AJe8Y0mka7.webp', NULL, NULL, NULL, NULL, NULL, 6, 0, '2023-09-17 18:26:53', '2023-09-17 18:27:09'),
(56, 21, 'images/product/21/crepe-paper-normal-color-I6YKYGdX4d.webp', 'images/product/21/crepe-paper-normal-color-FDyLWp2hfl.webp', NULL, NULL, NULL, NULL, NULL, 7, 0, '2023-09-17 18:27:04', '2023-09-17 18:27:09'),
(57, 21, 'images/product/21/crepe-paper-normal-color-RjiAY6lOwR.webp', 'images/product/21/crepe-paper-normal-color-YXzmpMQ7jI.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:27:04', '2023-09-17 18:27:09'),
(58, 37, 'images/product/37/packaging-tape-apple-tape-u2kFOH5O8I.webp', 'images/product/37/packaging-tape-apple-tape-LuMtF6ds2y.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:33:20', '2023-09-17 18:33:31'),
(59, 37, 'images/product/37/packaging-tape-apple-tape-4LLwUsRi6Z.webp', 'images/product/37/packaging-tape-apple-tape-0R8sTTPSbb.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:33:20', '2023-09-17 18:33:28'),
(60, 37, 'images/product/37/packaging-tape-apple-tape-LJHrXF6ROJ.webp', 'images/product/37/packaging-tape-apple-tape-MNKQKis5Z7.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:33:20', '2023-09-17 18:33:30'),
(61, 38, 'images/product/38/packaging-tape-fire-tape-n3Kt0vi3lm.webp', 'images/product/38/packaging-tape-fire-tape-Ej2SJ4DkOu.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:36:33', '2023-09-17 18:36:45'),
(62, 38, 'images/product/38/packaging-tape-fire-tape-Uc92Du92GL.webp', 'images/product/38/packaging-tape-fire-tape-5hd4dmEByP.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:36:33', '2023-09-17 18:36:45'),
(63, 38, 'images/product/38/packaging-tape-fire-tape-pCPUfWjBTM.webp', 'images/product/38/packaging-tape-fire-tape-CI1U7bj5Sg.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:36:33', '2023-09-17 18:36:40'),
(64, 40, 'images/product/40/self-adhesive-color-tape-hot-jD44RFUMgu.webp', 'images/product/40/self-adhesive-color-tape-hot-fdfdfDdhZH.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:40:28', '2023-09-17 18:40:42'),
(65, 40, 'images/product/40/self-adhesive-color-tape-hot-hAbFTaaY81.webp', 'images/product/40/self-adhesive-color-tape-hot-OsekbeAXiy.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 18:40:28', '2023-09-17 18:40:42'),
(66, 40, 'images/product/40/self-adhesive-color-tape-hot-8Z2oSTbcaO.webp', 'images/product/40/self-adhesive-color-tape-hot-s7jwyDDPqJ.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:40:28', '2023-09-17 18:40:40'),
(67, 40, 'images/product/40/self-adhesive-color-tape-hot-HYeAqxlUAi.webp', 'images/product/40/self-adhesive-color-tape-hot-6DEZp2aZiq.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:40:29', '2023-09-17 18:40:42'),
(68, 41, 'images/product/41/self-adhesive-tape-green-laser-tape-KWRMjiEkZV.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-MSvtUVHoFo.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 18:46:17', '2023-09-17 18:46:29'),
(69, 41, 'images/product/41/self-adhesive-tape-green-laser-tape-qsR2D3Ur2A.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-sEvJ6aQLhd.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 18:46:17', '2023-09-17 18:46:29'),
(70, 41, 'images/product/41/self-adhesive-tape-green-laser-tape-jotcPAEOh8.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-3BIdQWJWhB.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 18:46:17', '2023-09-17 18:46:26'),
(71, 41, 'images/product/41/self-adhesive-tape-green-laser-tape-N3LjA1oJSi.webp', 'images/product/41/self-adhesive-tape-green-laser-tape-KTPiJOD4uh.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 18:46:17', '2023-09-17 18:46:26'),
(72, 42, 'images/product/42/stationary-tape-piton-tape-XVtbJaZNys.webp', 'images/product/42/stationary-tape-piton-tape-YLf8qw1cVd.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:49:30', '2023-09-17 18:49:30'),
(73, 42, 'images/product/42/stationary-tape-piton-tape-37rO0B9V4D.webp', 'images/product/42/stationary-tape-piton-tape-pWb30Tt0EW.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:49:30', '2023-09-17 18:49:30'),
(74, 42, 'images/product/42/stationary-tape-piton-tape-YUaTXL4Gla.webp', 'images/product/42/stationary-tape-piton-tape-yGyfwJMDIV.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:49:30', '2023-09-17 18:49:30'),
(75, 43, 'images/product/43/stationary-tape-color-tape-Q2HO8g9xSB.webp', 'images/product/43/stationary-tape-color-tape-evxK40Qn3E.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:53:38', '2023-09-17 18:53:38'),
(76, 43, 'images/product/43/stationary-tape-color-tape-bX6gkKZBmu.webp', 'images/product/43/stationary-tape-color-tape-gXjjbj6B1F.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:53:38', '2023-09-17 18:53:38'),
(77, 44, 'images/product/44/stationary-tape-laser-tape-AaAOAwq6sv.webp', 'images/product/44/stationary-tape-laser-tape-YLxR0hcLo6.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:55:58', '2023-09-17 18:55:58'),
(78, 44, 'images/product/44/stationary-tape-laser-tape-PXaeOKJJjQ.webp', 'images/product/44/stationary-tape-laser-tape-8bYYhYNbBZ.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 18:55:58', '2023-09-17 18:55:58'),
(79, 45, 'images/product/45/cling-warp-highmax-wrap-92p3nefKzz.webp', 'images/product/45/cling-warp-highmax-wrap-cVPaVIFArb.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:30', '2023-09-17 19:01:30'),
(80, 45, 'images/product/45/cling-warp-highmax-wrap-XfTQGrPr2L.webp', 'images/product/45/cling-warp-highmax-wrap-i2340CTPtf.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:30', '2023-09-17 19:01:30'),
(81, 45, 'images/product/45/cling-warp-highmax-wrap-lSFTooO0LQ.webp', 'images/product/45/cling-warp-highmax-wrap-nYvSnFBhrB.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:30', '2023-09-17 19:01:30'),
(82, 45, 'images/product/45/cling-warp-highmax-wrap-kuhL3Ec8NO.webp', 'images/product/45/cling-warp-highmax-wrap-GyecpBrvqC.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:30', '2023-09-17 19:01:30'),
(83, 45, 'images/product/45/cling-warp-highmax-wrap-MfEGsyPIsK.webp', 'images/product/45/cling-warp-highmax-wrap-ePWqLUql1G.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:30', '2023-09-17 19:01:30'),
(84, 45, 'images/product/45/cling-warp-highmax-wrap-ZDdqbN2UO5.webp', 'images/product/45/cling-warp-highmax-wrap-O8A9Ba0rwm.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:40', '2023-09-17 19:01:40'),
(85, 45, 'images/product/45/cling-warp-highmax-wrap-jcht5EZ6ZC.webp', 'images/product/45/cling-warp-highmax-wrap-ejbJaTarRb.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:40', '2023-09-17 19:01:40'),
(86, 45, 'images/product/45/cling-warp-highmax-wrap-Yvdk1XrEij.webp', 'images/product/45/cling-warp-highmax-wrap-CUIWDuAAqX.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:01:40', '2023-09-17 19:01:40'),
(87, 46, 'images/product/46/cling-warp-komex-rONKr6Oyaz.webp', 'images/product/46/cling-warp-komex-NqEB2SL1ag.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 19:05:47', '2023-09-17 19:06:01'),
(88, 46, 'images/product/46/cling-warp-komex-WuPYtDSUc1.webp', 'images/product/46/cling-warp-komex-fVr2uKIeEi.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 19:05:47', '2023-09-17 19:05:59'),
(89, 46, 'images/product/46/cling-warp-komex-xKFr0iHdR5.webp', 'images/product/46/cling-warp-komex-MFy102pXB0.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 19:05:47', '2023-09-17 19:06:01'),
(90, 48, 'images/product/48/cling-warp-star-maximum-YtB1cTLi7w.webp', 'images/product/48/cling-warp-star-maximum-vBBkMKYGEL.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:10:15', '2023-09-17 19:10:15'),
(91, 48, 'images/product/48/cling-warp-star-maximum-snHRmlJaeL.webp', 'images/product/48/cling-warp-star-maximum-k9uXc93Kx5.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:10:15', '2023-09-17 19:10:15'),
(92, 49, 'images/product/49/cling-warp-highmax-wrap-2-Am1h8hcdK8.webp', 'images/product/49/cling-warp-highmax-wrap-2-GETHvLqkNJ.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:13:53', '2023-09-17 19:13:53'),
(93, 49, 'images/product/49/cling-warp-highmax-wrap-2-OIUqKVxnvU.webp', 'images/product/49/cling-warp-highmax-wrap-2-U2VAGCsZyO.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:13:53', '2023-09-17 19:13:53'),
(94, 49, 'images/product/49/cling-warp-highmax-wrap-2-BMLyCk3kXM.webp', 'images/product/49/cling-warp-highmax-wrap-2-jCd54y2sIv.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:13:53', '2023-09-17 19:13:53'),
(95, 50, 'images/product/50/mr-foil-hookah-aluminum-foil-BEtzIQ2oS8.webp', 'images/product/50/mr-foil-hookah-aluminum-foil-Kju4bhNaxy.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:17:41', '2023-09-17 19:17:41'),
(96, 50, 'images/product/50/mr-foil-hookah-aluminum-foil-mb6O7qF8RK.webp', 'images/product/50/mr-foil-hookah-aluminum-foil-tZ6gDinkJk.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:17:41', '2023-09-17 19:17:41'),
(97, 51, 'images/product/51/mr-foil-oven-2-WRBwJiSi6E.webp', 'images/product/51/mr-foil-oven-2-dlrLPkIvVr.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:21:42', '2023-09-17 19:21:42'),
(98, 51, 'images/product/51/mr-foil-oven-2-sxZ3XnLQLT.webp', 'images/product/51/mr-foil-oven-2-zzi0NLIrM9.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:21:42', '2023-09-17 19:21:42'),
(99, 51, 'images/product/51/mr-foil-oven-2-0HShi6M6vE.webp', 'images/product/51/mr-foil-oven-2-PT2amcfw7r.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:21:42', '2023-09-17 19:21:42'),
(100, 52, 'images/product/52/mr-foil-oven-BpxweRSeq5.webp', 'images/product/52/mr-foil-oven-b5OCxfDiCW.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-09-17 19:29:13', '2023-09-17 19:29:23'),
(101, 52, 'images/product/52/mr-foil-oven-tRNEBVBPvL.webp', 'images/product/52/mr-foil-oven-IRu12Saf2u.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-09-17 19:29:13', '2023-09-17 19:29:23'),
(102, 52, 'images/product/52/mr-foil-oven-ELwdyyRa8b.webp', 'images/product/52/mr-foil-oven-mPda7CAasb.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-17 19:29:13', '2023-09-17 19:29:17'),
(103, 52, 'images/product/52/mr-foil-oven-kXpKFyogNz.webp', 'images/product/52/mr-foil-oven-w41r9lvCNm.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-09-17 19:29:13', '2023-09-17 19:29:17'),
(104, 53, 'images/product/53/aluminium-foil-king-PZUwINZtyX.webp', 'images/product/53/aluminium-foil-king-Xje9a8e8VW.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:32:35', '2023-09-17 19:32:35'),
(105, 53, 'images/product/53/aluminium-foil-king-YZSYb0D2B2.webp', 'images/product/53/aluminium-foil-king-UnMPDKr1ZF.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:32:35', '2023-09-17 19:32:35'),
(106, 53, 'images/product/53/aluminium-foil-king-9aFCxz0qlA.webp', 'images/product/53/aluminium-foil-king-cjnLbGcXhz.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:32:35', '2023-09-17 19:32:35'),
(107, 60, 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-O1xCzFTRsX.webp', 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-12Ut2yU3ZG.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:38:34', '2023-09-17 19:38:34'),
(108, 60, 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-O4RthSxU7v.webp', 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-42YiZrd5IP.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:38:34', '2023-09-17 19:38:34'),
(109, 60, 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-8SdQUYzmxf.webp', 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-uhObfqUvFV.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:38:34', '2023-09-17 19:38:34'),
(110, 60, 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-DzTb334YIO.webp', 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-Ak9b6FZKBm.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:38:34', '2023-09-17 19:38:34'),
(111, 60, 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-do4cDRHgDw.webp', 'images/product/60/مسدس-غراء-احترافي-220-وات-من-توتال-tt301116-WhJeydB62B.webp', NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-09-17 19:38:34', '2023-09-17 19:38:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
