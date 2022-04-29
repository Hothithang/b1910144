-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 29, 2022 lúc 06:53 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct275_myproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'HT Thẳng', '0399199401', '116/12 Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ', 10, '2022-04-25 20:05:23', '2022-04-28 21:11:47'),
(12, 'HT Thẳng', '0399191221', 'Số 4 Đường Nguyễn Trãi, Ngã Bảy, Phụng Hiệp, Hậu Giang', 10, '2022-04-27 20:44:58', '2022-04-27 20:44:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image_front` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_back` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` tinyint(1) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_front`, `image_back`, `new`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Heart On Fire Tulle Mini Dress', '50', 'HeartOnFireTulleMiniDress1.jpg', 'HeartOnFireTulleMiniDress2.jpg', 1, 1, '2022-04-25 19:39:05', '2022-04-28 21:30:25'),
(7, 'Solid Lace Up Rib Knit Cami Top', '36', 'SolidLaceUpRibKnitCamiTop1.jpg', 'SolidLaceUpRibKnitCamiTop2.jpg', 0, 1, '2022-04-25 19:39:18', '2022-04-28 23:51:57'),
(8, 'Patchy Ripped Denim Jeans', '38', 'PatchyRippedDenimJeans1.jpg', 'PatchyRippedDenimJeans2.jpg', 0, 1, '2022-04-25 19:39:41', '2022-04-25 19:39:41'),
(9, 'Solid Jacquard Backless Maxi Dress', '50', 'SolidJacquardBacklessMaxiDress1.jpg', 'SolidJacquardBacklessMaxiDress2.jpg', 1, 1, '2022-04-25 19:40:19', '2022-04-25 19:40:19'),
(10, 'Boho Contrasting Sweater', '46', 'BohoContrastingSweater1.jpg', 'BohoContrastingSweater2.jpg', 1, 1, '2022-04-25 19:40:31', '2022-04-25 19:40:31'),
(11, 'Floral Embroidery Knit Vest', '36', 'FloralEmbroideryKnitVest1.jpg', 'FloralEmbroideryKnitVest2.jpg', 0, 1, '2022-04-25 19:40:49', '2022-04-25 19:40:49'),
(12, 'Knotted Layered Mini Skirt', '38', 'KnottedLayeredMiniSkirt1.jpg', 'KnottedLayeredMiniSkirt2.jpg', 0, 1, '2022-04-25 19:41:06', '2022-04-25 19:41:06'),
(13, 'Heart On Fire Tulle Mini Dress', '36', 'Heart&FloralCropTop1.jpg', 'Heart&FloralCropTop2.jpg', 1, 1, '2022-04-25 19:41:33', '2022-04-28 08:17:41'),
(14, 'Denim Retro Rose Print Jeans', '38', 'DenimRetroRosePrintJeans1.jpg', 'DenimRetroRosePrintJeans2.jpg', 1, 1, '2022-04-25 19:42:36', '2022-04-25 19:42:36'),
(15, 'Polka Dot Bows Front Maxi Dress', '50', 'PolkaDotBowsFrontMaxiDress1.jpg', 'PolkaDotBowsFrontMaxiDress2.jpg', 1, 1, '2022-04-25 19:43:11', '2022-04-25 19:43:11'),
(16, 'Plush Plaid Pattern Coat', '46', 'PlushPlaidPatternCoat1.jpg', 'PlushPlaidPatternCoat2.jpg', 0, 1, '2022-04-25 19:43:28', '2022-04-25 19:43:28'),
(17, 'Retro Solid Velvet Dress', '50', 'RetroSolidVelvetDress1.jpg', 'RetroSolidVelvetDress2.jpg', 0, 1, '2022-04-25 19:44:03', '2022-04-25 19:44:03'),
(18, 'Funky Fun Colorblock Sweater Vest', '36', 'FunkyFunColorblockSweaterVest1.jpg', 'FunkyFunColorblockSweaterVest2.jpg', 0, 1, '2022-04-25 19:44:19', '2022-04-25 19:44:19'),
(19, 'Textured Halter Long Sleeve Tee', '36', 'TexturedHalterLongSleeveTee1.jpg', 'TexturedHalterLongSleeveTee2.jpg', 0, 1, '2022-04-25 19:44:34', '2022-04-25 19:44:34'),
(21, 'Secret Garden Corset Tank Top', '38', 'SecretGardenCorsetTankTop1.jpg', 'SecretGardenCorsetTankTop2.jpg', 0, 1, '2022-04-25 19:45:20', '2022-04-25 19:45:20'),
(22, 'Retro Mini Skirt', '40', 'RetroMiniSkirt1.jpg', 'RetroMiniSkirt2.jpg', 1, 1, '2022-04-25 19:45:35', '2022-04-25 19:45:35'),
(23, 'Rhinestone Lace Knotted Top', '34', 'RhinestoneLaceKnottedTop1.jpg', 'RhinestoneLaceKnottedTop2.jpg', 0, 1, '2022-04-25 19:46:19', '2022-04-25 19:46:19'),
(24, 'Tie Front Ruffle Quilted Coat', '46', 'TieFrontRuffleQuiltedCoat1.jpg', 'TieFrontRuffleQuiltedCoat2.jpg', 1, 1, '2022-04-25 19:46:44', '2022-04-25 19:46:44'),
(25, 'Retro French Style Dress', '50', 'RetroFrenchStyleDress1.jpg', 'RetroFrenchStyleDress2.jpg', 1, 1, '2022-04-25 19:46:55', '2022-04-25 19:46:55'),
(26, 'Floral Jacquard Corset Crop Top', '36', 'FloralJacquardCorsetCropTop1.jpg', 'FloralJacquardCorsetCropTop2.jpg', 0, 1, '2022-04-25 19:47:25', '2022-04-25 19:47:25'),
(27, 'Forever With You Long Sleeve Mini Dress', '50', 'ForeverWithYouLongSleeveMiniDress1.jpg', 'ForeverWithYouLongSleeveMiniDress2.jpg', 0, 1, '2022-04-25 19:47:44', '2022-04-25 19:47:44'),
(28, 'Camel Collar Detail Jacket', '46', 'CamelCollarDetailJacket1.jpg', 'CamelCollarDetailJacket2.jpg', 0, 1, '2022-04-25 19:47:53', '2022-04-25 19:47:53'),
(29, 'Green Wide Leg Jeans', '38', 'GreenWideLegJeans1.jpg', 'GreenWideLegJeans2.jpg', 0, 1, '2022-04-25 19:48:38', '2022-04-25 19:48:38'),
(30, 'Passionand Power Ruffled Mini Skirt', '36', 'PassionandPowerRuffledMiniSkirt1.jpg', 'PassionandPowerRuffledMiniSkirt2.jpg', 0, 1, '2022-04-25 19:49:26', '2022-04-25 19:49:26'),
(34, 'Satin Brown Drawstring Midi Skirt', '34', 'SatinBrownDrawstringMidiSkirt1.jpg', 'SatinBrownDrawstringMidiSkirt2.jpg', 0, 1, '2022-04-28 20:50:19', '2022-04-28 20:50:19'),
(35, 'Solid Rib Knit Top', '34', 'SolidRibKnitTop1.jpg', 'SolidRibKnitTop2.jpg', 0, 1, '2022-04-28 21:02:25', '2022-04-28 21:02:25'),
(36, 'Solid LaceUp Corset Tank Top', '32', 'SolidLaceUpCorsetTankTop1.jpg', 'SolidLaceUpCorsetTankTop2.jpg', 0, 1, '2022-04-28 21:03:00', '2022-04-28 21:03:00'),
(37, 'Light Yellow Sweater', '36', 'LightYellowSweater1.jpg', 'LightYellowSweater2.jpg', 1, 1, '2022-04-28 21:03:47', '2022-04-28 21:03:47'),
(38, 'Paisley Pattern Slit Long Skirt', '36', 'PaisleyPatternSlitLongSkirt1.jpg', 'PaisleyPatternSlitLongSkirt2.jpg', 0, 1, '2022-04-28 21:44:57', '2022-04-28 21:44:57'),
(41, 'Short Plush Cardigan', '36', 'ShortPlushCardigan1.jpg', 'ShortPlushCardigan2.jpg', 1, 1, '2022-04-28 21:11:22', '2022-04-28 21:11:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'HT Thang', 'thang@gmail.com', '$2y$10$Use.MHRzGdW3IVu0dqVNT.Wnmibj0eNPr8q7RFlclQlbAWNUQtvPu', 1, '2022-02-22 15:20:51', '2022-02-22 15:20:51'),
(10, 'B1910144', 'b1910144@gmail.com', '$2y$10$Use.MHRzGdW3IVu0dqVNT.Wnmibj0eNPr8q7RFlclQlbAWNUQtvPu', 0, '2022-02-22 15:20:51', '2022-02-22 15:20:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
