-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 24, 2023 lúc 11:50 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `carstore3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`id`, `quantity`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 105000, 1, 2, '2023-09-22 22:28:15', '2023-09-22 22:28:15'),
(2, 1, 112950, 2, 1, '2023-09-24 09:28:26', '2023-09-24 09:28:26'),
(3, 1, 105000, 2, 2, '2023-09-24 09:28:26', '2023-09-24 09:28:26'),
(4, 2, 112950, 3, 1, '2023-09-24 13:44:32', '2023-09-24 13:44:32'),
(5, 2, 112950, 4, 1, '2023-09-24 13:45:41', '2023-09-24 13:45:41'),
(6, 2, 112950, 5, 1, '2023-09-24 14:00:22', '2023-09-24 14:00:22'),
(7, 4, 105000, 5, 2, '2023-09-24 14:00:22', '2023-09-24 14:00:22'),
(8, 2, 112950, 6, 1, '2023-09-24 14:02:50', '2023-09-24 14:02:50'),
(9, 1, 105000, 6, 2, '2023-09-24 14:02:50', '2023-09-24 14:02:50'),
(10, 2, 112950, 7, 1, '2023-09-24 14:04:36', '2023-09-24 14:04:36'),
(11, 1, 105000, 7, 2, '2023-09-24 14:04:36', '2023-09-24 14:04:36'),
(12, 1, 112950, 8, 1, '2023-09-24 14:08:07', '2023-09-24 14:08:07'),
(13, 1, 112950, 9, 1, '2023-09-24 14:08:16', '2023-09-24 14:08:16'),
(14, 1, 112950, 10, 1, '2023-09-24 14:10:59', '2023-09-24 14:10:59'),
(15, 1, 112950, 11, 1, '2023-09-24 14:49:09', '2023-09-24 14:49:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_08_26_080516_create_stores_table', 1),
(6, '2023_09_02_133544_create_sanpham_table', 2),
(7, '2023_09_03_065249_alter_users_table', 3),
(8, '2023_09_04_182555_alter_store', 4),
(9, '2023_09_05_005843_create_orders_table', 5),
(10, '2023_09_05_013336_create_orders_table', 6),
(11, '2023_09_05_013547_create_items_table', 7),
(12, '2023_09_05_021817_alter_users_table', 8),
(13, '2023_09_06_121936_alter_stores_quantity', 9),
(14, '2023_09_06_163335_add_avatar_column_to_users', 10),
(15, '2023_09_08_040232_sua_bang_sp', 11),
(16, '2023_09_08_041528_suatencottronsp', 12),
(17, '2023_09_11_011812_themloaisp', 13),
(18, '2023_09_20_045635_tai_cau_truc_d_a_t_a_b_a_s_e', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 105000, 15, '2023-09-22 22:28:15', '2023-09-22 22:28:15'),
(2, 217950, 15, '2023-09-24 09:28:26', '2023-09-24 09:28:26'),
(3, 225900, 15, '2023-09-24 13:44:32', '2023-09-24 13:44:32'),
(4, 225900, 15, '2023-09-24 13:45:41', '2023-09-24 13:45:41'),
(5, 645900, 15, '2023-09-24 14:00:22', '2023-09-24 14:00:22'),
(6, 330900, 15, '2023-09-24 14:02:50', '2023-09-24 14:02:50'),
(7, 330900, 15, '2023-09-24 14:04:36', '2023-09-24 14:04:36'),
(8, 112950, 15, '2023-09-24 14:08:07', '2023-09-24 14:08:07'),
(9, 112950, 15, '2023-09-24 14:08:16', '2023-09-24 14:08:16'),
(10, 112950, 15, '2023-09-24 14:10:59', '2023-09-24 14:10:59'),
(11, 112950, 15, '2023-09-24 14:49:09', '2023-09-24 14:49:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('napt@h.com', '$2y$10$Z.EyljarC.lroWl8vmneYOBD0LhVLKVAIufRF2tq4jFaLnPnI4loy', '2023-09-19 22:53:56'),
('thinhnguyenphuc51@gmail.com', '$2y$10$OlpkZpkwI3ujZg.XmaU7dOVupBOiTo/b7hyrrkF09gvoKHaxJ2CP2', '2023-09-19 22:49:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `category` varchar(255) NOT NULL DEFAULT 'car',
  `condition` varchar(255) NOT NULL DEFAULT 'Hot',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `quantity`, `category`, `condition`, `created_at`, `updated_at`, `sale_price`) VALUES
(1, 'Mercedes-AMG S63E', '', 'store-1.png', 112950, 10, 'Mercedes', 'NEW 2023', '2023-09-19 22:40:50', '2023-09-19 23:55:17', 135000.00),
(2, 'Mercedes AMG GT Black Series', '', 'store-2.png', 105000, 10, 'Mercedes', 'HOT', '2023-09-19 23:21:47', '2023-09-19 23:21:47', 125000.00),
(3, 'Aston Martin V12', 'Aston Martin V12', 'store-3.png', 144000, 10, 'Aston Martin', 'NEW 2023', '2023-09-19 23:26:24', '2023-09-23 09:42:50', 164000.00),
(4, 'Aston Martin Superleggera', '', 'store-4.png', 213000, 15, 'Aston Martin', 'LIÊN HỆ', '2023-09-19 23:24:47', '2023-09-19 23:24:47', 255000.00),
(5, 'Ferrari 430 Scuderia', '', 'store-5.png', 226000, 14, 'Ferrari', 'LIÊN HỆ', '2023-09-19 23:46:14', '2023-09-19 23:46:14', 240000.00),
(6, 'Audi RS Q8 Vorsprung', 'The Audi RS Q8 is the flagship SUV from Audi, brimmed with top-of the line technology. The exterior styling of the RS Q8 features an imposing front grille, giving it supreme road presence. Coupled with the sport oriented exterior styling, the RS Q8 outclasses everything in its price range with eye catching aesthetics and performance that isn’t usually possible from an SUV.', 'store-6.png', 99950, 15, 'Audi', 'Hot', NULL, NULL, NULL),
(7, 'Bentley Continental Supersports', 'With 700 bhp and 750 lb ft of torque, this Supersports is one of the fastest GT cars money can buy. Building on the previous generations example the Supersports is 40 kg lighter than the standard car thanks largely to the carbon ceramic brakes and the optional titanium exhaust used on the GT3-R. Other noticeable differences include the carbon fibre trim, new front bumper which includes a carbon fibre splitter and the rear aerodynamic diffuser. Brightware has turned to gloss black and features on the front grille, rear bumper, door handles and window surrounds, while the headlamps and rear lights are dark tinted. Side sill extension and bonnet vents are finished in', 'store-7.png', 86000, 0, 'Bentley', 'Hot', NULL, NULL, NULL),
(8, 'Bentley Bentayga W12', 'Bentley describes the Bentayga as, \"The most luxurious, hand-built, all-terrain vehicle on Earth, it is a car in which technology, speed and power have come together to offer an extraodinary driving experience.\" With 600 bhp and 664 lb ft of torque, the Bentayga accelerates from 0-62 mph in just 4.1 seconds and reaches a staggering top speed of 187 mph. Built in Crewe, all of this performance is thanks to an all-new twin-turbocharged 6.0 litre W12 engine. The mighty 12-cylinder unit combines efficiency and refinement with ultra-luxurious levels of power and torque. With bundles of technology and equipment the Bentayga represents a class-leading alternative to the Range Rover and can be considered the most prestigious of all SUVs on the market today.', 'store-8.png', 0, 0, 'Bentley', 'Offer', NULL, NULL, NULL),
(9, 'McLaren 720S Spider', 'The Evo Car of the Year 2017 was the McLaren 720S which has taken the supercar world by storm. With its radical looks inspired by aerodynamics, the 720S is one of the fastest road cars money can buy. It is the successor to the 650S and 12C and has an updated body design made from aluminium and carbon fibre. Highlight design features include the striking signature headlamp air intakes and the double skin dihedral hinged doors that all help channel', 'store-9.png', 77000, 5, 'McLaren', 'Offer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`id`, `name`, `image`, `price`, `description`, `quantity`, `created_at`, `updated_at`, `category`, `condition`, `sale_price`) VALUES
(1, 'Bánh Xe', 'carpart-1.png', 500.00, 'Linh Kiện', 0, '2023-09-02 13:49:22', '2023-09-23 15:55:30', 'Linh Kiện', 'New 2023', 600.00),
(2, 'Dầu Nhớt Motul 800 ', 'carpart-2.png', 20.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-23 15:54:34', 'Dầu Nhớt', 'Hot', NULL),
(3, 'Dầu Nhớt Shell Helix ', 'carpart-3.png', 22.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-23 15:54:45', 'Dầu Nhớt', 'Hot', NULL),
(4, 'Ghế nội thất - Black', 'carpart-4.png', 15.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-23 15:54:53', 'Nội Thất', 'New', NULL),
(5, 'Ghế nội thất - White', 'carpart-5.png', 18.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-23 15:54:57', 'Nội Thất', 'New', NULL),
(6, 'Vô lăng - Black', 'carpart-6.png', 500.00, 'Linh Kiện', 0, '2023-09-02 13:49:22', '2023-09-23 15:58:28', 'Nội Thất', 'New 2023', 600.00),
(7, 'Vô lăng - Gray ', 'carpart-7.png', 500.00, 'Linh Kiện', 0, '2023-09-02 13:49:22', '2023-09-23 15:58:34', 'Nội Thất', 'New 2023', 600.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `phone`, `service`, `date`, `description`, `created_at`, `updated_at`) VALUES
(7, 'sas', '0563759199', 'Kiểm tra chuẩn đoán', '2023-09-25', 'NTHONG', '2023-09-24 12:45:07', '2023-09-24 12:45:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT 'client',
  `balance` bigint(20) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatars/user.png',
  `phone` bigint(20) NOT NULL DEFAULT 3921432924,
  `address` varchar(255) NOT NULL DEFAULT 'address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `balance`, `avatar`, `phone`, `address`) VALUES
(15, 'john', 'john@gmail.com', NULL, '$2y$10$zTHxGH8q17FNs0bMLDinCOnlI3wDeIo2R0Luqt4EnMw.bup/fnJZK', 'Umkr3RwTDX8saXo6K6AESVcaH92UtlLqTJ91LWHvOs9BpEUCIQesdmvo1yNv', '2023-09-22 19:14:24', '2023-09-24 14:49:09', 'admin', -2529250, 'avatars/user.png', 3921432924, 'address');

--
-- Chỉ mục cho các bảng đã đổ
--

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
  ADD KEY `items_order_id_foreign` (`order_id`),
  ADD KEY `items_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
