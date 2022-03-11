-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2022 lúc 10:23 AM
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
  `parent_id` bigint(40) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mobile', '2022-03-03 23:25:15', NULL),
(2, NULL, 'Earphone', '2022-03-03 23:25:15', NULL),
(3, NULL, 'Backup Charger', '2022-03-03 23:25:15', NULL),
(4, 1, 'iPhone', '0000-00-00 00:00:00', NULL),
(5, 1, 'Samsung', NULL, NULL),
(6, 1, 'Xiaomi', NULL, NULL),
(7, 2, 'Mozard', NULL, NULL),
(8, 2, 'Beats', NULL, NULL),
(9, 3, 'AVA+', NULL, NULL),
(10, 3, 'Xmobile', NULL, NULL);

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
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `items` (`id`, `category_id`, `name`, `price`, `quantity`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Apple IPhone 12 128GB 4GB RAM White', '12000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-12-white.jpg', '2022-03-03 23:51:38', NULL),
(2, 4, 'Apple IPhone 13 Pro Max 256GB 6GB RAM Blue', '13000000', 3, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-13-pro-max-blue.jpg', '2022-03-03 23:51:38', NULL),
(3, 4, 'Apple IPhone 13 Pro 128GB 6GB RAM Silver', '14000000', 12, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-13-pro-silver.jpg', '2022-03-03 23:51:38', NULL),
(4, 4, 'Apple IPhone 12 Pro Max 256GB 6GB RAM Blue', '15000000', 11, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-12-pro-max-blue.jpg', '2022-03-03 23:51:38', NULL),
(5, 4, 'Apple IPhone 12 Pro 512GB 6GB RAM Gold', '16000000', 22, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-12-pro-gold.jpg', '2022-03-03 23:51:38', NULL),
(6, 4, 'Apple IPhone 13 128GB 4GB RAM Black', '17000000', 5, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\apple-iphone-13-black.jpg', '2022-03-03 23:51:38', NULL),
(7, 5, 'Samsung Galaxy Z Fold3 5G 512GB 12GB RAM Phantom Silver', '32000000', 17, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-z-fold-3-5g-phantom-silver.jpg', '2022-03-03 23:51:38', NULL),
(8, 5, 'Samsung Galaxy A03s 64GB 4GB RAM White', '12000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-a03s-white.jpg', '2022-03-03 23:51:38', NULL),
(9, 5, 'Samsung Galaxy S20 FE 256GB 8GB RAM Cloud Mint', '22000000', 1, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-s20-fe-cloud-mint.jpg', '2022-03-03 23:51:38', NULL),
(10, 5, 'Samsung Galaxy Z Fold2 5G 256GB 12GB RAM Mystic Black', '32000000', 0, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-z-fold-2-5g-mystic-black.jpg', '2022-03-03 23:51:38', NULL),
(11, 5, 'Samsung Galaxy Z Flip3 5G 256GB 8GB RAM Lavender', '35000000', 3, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-z-flip-3-5g-lavender.jpg', '2022-03-03 23:51:38', NULL),
(12, 5, 'Samsung Galaxy Note 20 256GB 8GB RAM Mystic Bronze', '24000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\samsung-galaxy-note-20-mystic-bronze.jpg', '2022-03-03 23:51:38', NULL),
(13, 6, 'Xiaomi 11T 256GB 8GB RAM Moonlight White', '15000000', 7, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\xiaomi-11t-moonlight-white.jpg', '2022-03-03 23:51:38', NULL),
(14, 6, 'Xiaomi Mi 11 256GB 8GB RAM Horizon Blue', '15000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\xiaomi-mi-11-horizon-blue.jpg', '2022-03-03 23:51:38', NULL),
(15, 6, 'Xiaomi Redmi Note 10 Pro 128GB 8GB RAM Onyx Gray', '11000000', 23, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\xiaomi-redmi-note-10-pro-onyx-gray.jpg', '2022-03-03 23:51:38', NULL),
(16, 6, 'Xiaomi Redmi 9T 64GB 4GB RAM Sunrise Orange', '12000000', 5, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\xiaomi-redmi-9t-sunrise-orange.jpg', '2022-03-03 23:51:38', NULL),
(17, 8, 'Beats Flex MYMC2 Wireless Black In-ear', '2000000', 4, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\beats-flex-mymc2-wireless-black-inear.jpg', '2022-03-03 23:51:38', NULL),
(18, 7, 'Mozard Z7000A Black In-ear', '3000000', 25, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\mozard-z7000a-black-inear.jpg', '2022-03-03 23:51:38', NULL),
(19, 9, 'AVA+ PB100S', '4000000', 13, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\ava-plus-pb100s-back-up-charger.jpg', '2022-03-03 23:51:38', NULL),
(20, 10, 'Xmobile Atela 10', '1500000', 14, 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'app-assets/images/pages/eCommerce\\xmobile-atela-10-back-up-charger.jpg', '2022-03-03 23:51:38', NULL);

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
(7, '2022_03_04_043336_items', 2),
(8, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(9, '2022_03_08_071035_create_sessions_table', 3),
(10, '2022_03_09_034653_create_permission_tables', 4),
(11, '2018_12_23_120000_create_shoppingcart_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cuongle@email.com', '$2y$10$X4SIeDScvRGbvGSpCPQmIu5YuQW50Bh28TUaCojnmhSnTk5VTWkee', '2022-03-08 19:27:04'),
('lecuong@email.com', '$2y$10$EvNHVEVb3gw6lEKOTsf33enUhBgsBMdSzP5fXPcytEs.4D6dCcitS', '2022-03-08 19:28:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add to cart', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(2, 'add to wishlist', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(3, 'checkout', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(4, 'add item', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(5, 'edit item', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(6, 'delete item', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40');

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
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'web', '2022-03-08 23:52:40', '2022-03-08 23:52:40'),
(2, 'admin', 'web', '2022-03-08 23:55:15', '2022-03-08 23:55:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cMpsYjMfbfgxZB4mCimEB8x3B642rIMFLP33nBAz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36 Edg/99.0.1150.30', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWHFtVnBCNG1kN1l1Nmd1QkVUc3RpbVRiTFNiWlJ5VFJpbmNBeG5XbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaG9wIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fX0=', 1646727756);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cuongle', 'cuongle@email.com', NULL, '$2y$10$7.Q4B1J.c89Zw4rwDeFZeuZQl8NAt8xwtWyZglxg23gZOeD9yeS7e', NULL, NULL, NULL, '2022-03-08 00:35:18', '2022-03-08 00:35:18'),
(2, 'odin', 'odin@email.com', NULL, '$2y$10$nsv41T8.L9cBvKnP1kptSO0riH4vh6YvhJyfonuKMd0MBC3ITBI/u', NULL, NULL, NULL, '2022-03-08 01:04:57', '2022-03-08 01:04:57'),
(5, 'ABC', 'abc@email.com', NULL, '$2y$10$r.l0SyONEdxhoUZ8ZP6i4.yr3pkRMMY3gpferEIR9WeKgVYOl5Kx.', NULL, NULL, NULL, '2022-03-08 02:15:51', '2022-03-08 02:15:51'),
(6, 'lecuong', 'lecuong@email.com', NULL, '$2y$10$rG07yz/ymAmjJvTRSidT5.TXGX0woWXKWFOS/as1z6DkmghAcdWYC', NULL, NULL, 'thx6tbvQgIK7QWrJVhIUDz9YGxkVAmLG1kKEj618mF3FVT23UkiyKimZgOpC', '2022-03-08 19:17:07', '2022-03-08 19:17:07');

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
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
