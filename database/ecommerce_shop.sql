-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2022 lúc 10:21 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerce_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', '2022-03-03 23:25:15', NULL),
(2, 'Earphone', '2022-03-03 23:25:15', NULL),
(3, 'Backup Charger', '2022-03-03 23:25:15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'iPhone', '2022-03-03 23:28:04', NULL),
(2, 1, 'Samsung', '2022-03-03 23:28:04', NULL),
(3, 1, 'Xiaomi', '2022-03-03 23:28:04', NULL),
(4, 2, 'Mozard', '2022-03-03 23:28:04', NULL),
(5, 2, 'Beats', '2022-03-03 23:28:04', NULL),
(6, 3, 'AVA+', '2022-03-03 23:28:04', NULL),
(7, 3, 'Xmobile', '2022-03-03 23:28:04', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(19,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`id`, `category_id`, `group_id`, `name`, `price`, `quantity`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Apple IPhone 12 128GB 4GB RAM White', '12000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-12-white.jpg', '2022-03-03 23:51:38', NULL),
(2, 1, 1, 'Apple IPhone 13 Pro Max 256GB 6GB RAM Blue', '13000000', 3, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-13-pro-max-blue.jpg', '2022-03-03 23:51:38', NULL),
(3, 1, 1, 'Apple IPhone 13 Pro 128GB 6GB RAM Silver', '14000000', 12, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-13-pro-silver.jpg', '2022-03-03 23:51:38', NULL),
(4, 1, 1, 'Apple IPhone 12 Pro Max 256GB 6GB RAM Blue', '15000000', 11, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-12-pro-max-blue.jpg', '2022-03-03 23:51:38', NULL),
(5, 1, 1, 'Apple IPhone 12 Pro 512GB 6GB RAM Gold', '16000000', 22, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-12-pro-gold.jpg', '2022-03-03 23:51:38', NULL),
(6, 1, 1, 'Apple IPhone 13 128GB 4GB RAM Black', '17000000', 5, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'apple-iphone-13-black.jpg', '2022-03-03 23:51:38', NULL),
(7, 1, 2, 'Samsung Galaxy Z Fold3 5G 512GB 12GB RAM Phantom Silver', '32000000', 17, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-z-fold-3-5g-phantom-silver.jpg', '2022-03-03 23:51:38', NULL),
(8, 1, 2, 'Samsung Galaxy A03s 64GB 4GB RAM White', '12000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-a03s-white.jpg', '2022-03-03 23:51:38', NULL),
(9, 1, 2, 'Samsung Galaxy S20 FE 256GB 8GB RAM Cloud Mint', '22000000', 1, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-s20-fe-cloud-mint.jpg', '2022-03-03 23:51:38', NULL),
(10, 1, 2, 'Samsung Galaxy Z Fold2 5G 256GB 12GB RAM Mystic Black', '32000000', 0, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-z-fold-2-5g-mystic-black.jpg', '2022-03-03 23:51:38', NULL),
(11, 1, 2, 'Samsung Galaxy Z Flip3 5G 256GB 8GB RAM Lavender', '35000000', 3, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-z-flip-3-5g-lavender.jpg', '2022-03-03 23:51:38', NULL),
(12, 1, 2, 'Samsung Galaxy Note 20 256GB 8GB RAM Mystic Bronze', '24000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'samsung-galaxy-note-20-mystic-bronze.jpg', '2022-03-03 23:51:38', NULL),
(13, 1, 3, 'Xiaomi 11T 256GB 8GB RAM Moonlight White', '15000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'xiaomi-11t-moonlight-white.jpg', '2022-03-03 23:51:38', NULL),
(14, 1, 3, 'Xiaomi Mi 11 256GB 8GB RAM Horizon Blue', '15000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'xiaomi-mi-11-horizon-blue.jpg', '2022-03-03 23:51:38', NULL),
(15, 1, 3, 'Xiaomi Redmi Note 10 Pro 128GB 8GB RAM Onyx Gray', '11000000', 23, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'xiaomi-redmi-note-10-pro-onyx-gray.jpg', '2022-03-03 23:51:38', NULL),
(16, 1, 3, 'Xiaomi Redmi 9T 64GB 4GB RAM Sunrise Orange', '12000000', 5, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'xiaomi-redmi-9t-sunrise-orange.jpg', '2022-03-03 23:51:38', NULL),
(17, 1, 5, 'Beats Flex MYMC2 Wireless Black In-ear', '2000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'beats-flex-mymc2-wireless-black-inear.jpg', '2022-03-03 23:51:38', NULL),
(18, 2, 4, 'Mozard Z7000A Black In-ear', '3000000', 25, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'mozard-z7000a-black-inear.jpg', '2022-03-03 23:51:38', NULL),
(19, 3, 6, 'AVA+ PB100S', '4000000', 13, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'ava-plus-pb100s-back-up-charger.jpg', '2022-03-03 23:51:38', NULL),
(20, 3, 7, 'Xmobile Atela 10', '1500000', 14, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'xmobile-atela-10-back-up-charger.jpg', '2022-03-03 23:51:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_04_042905_categories', 1),
(6, '2022_03_04_043318_groups', 2),
(7, '2022_03_04_043336_items', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`),
  ADD KEY `items_group_id_foreign` (`group_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
