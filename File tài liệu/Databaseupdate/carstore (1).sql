-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 17, 2023 lúc 07:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `carstore`
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
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`id`, `quantity`, `price`, `order_id`, `store_id`, `created_at`, `updated_at`) VALUES
(1, 2, 10000000000, 1, 6, '2023-09-04 19:14:25', '2023-09-04 19:14:25'),
(2, 2, 57183909913, 1, 7, '2023-09-04 19:14:25', '2023-09-04 19:14:25'),
(3, 1, 9999999999999, 1, 8, '2023-09-04 19:14:25', '2023-09-04 19:14:25'),
(4, 2, 10000000000, 2, 6, '2023-09-04 19:15:07', '2023-09-04 19:15:07'),
(5, 2, 57183909913, 2, 7, '2023-09-04 19:15:07', '2023-09-04 19:15:07'),
(6, 1, 9999999999999, 2, 8, '2023-09-04 19:15:07', '2023-09-04 19:15:07'),
(7, 2, 10000000000, 3, 6, '2023-09-04 19:20:19', '2023-09-04 19:20:19'),
(8, 2, 57183909913, 3, 7, '2023-09-04 19:20:19', '2023-09-04 19:20:19'),
(9, 1, 9999999999999, 3, 8, '2023-09-04 19:20:19', '2023-09-04 19:20:19'),
(10, 2, 10000000000, 4, 6, '2023-09-04 19:21:30', '2023-09-04 19:21:30'),
(11, 2, 57183909913, 4, 7, '2023-09-04 19:21:30', '2023-09-04 19:21:30'),
(12, 1, 9999999999999, 4, 8, '2023-09-04 19:21:30', '2023-09-04 19:21:30'),
(13, 2, 10000000000, 5, 6, '2023-09-04 19:46:01', '2023-09-04 19:46:01'),
(14, 2, 57183909913, 5, 7, '2023-09-04 19:46:01', '2023-09-04 19:46:01'),
(15, 1, 9999999999999, 5, 8, '2023-09-04 19:46:01', '2023-09-04 19:46:01'),
(16, 2, 10000000000, 6, 6, '2023-09-04 20:14:41', '2023-09-04 20:14:41'),
(17, 2, 57183909913, 6, 7, '2023-09-04 20:14:41', '2023-09-04 20:14:41'),
(18, 1, 9999999999999, 6, 8, '2023-09-04 20:14:41', '2023-09-04 20:14:41'),
(19, 2, 9999999999999, 7, 8, '2023-09-06 09:25:35', '2023-09-06 09:25:35');

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
(17, '2023_09_11_011812_themloaisp', 13);

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
(1, 10134367819825, 4, '2023-09-04 19:14:25', '2023-09-04 19:14:25'),
(2, 10134367819825, 4, '2023-09-04 19:15:07', '2023-09-04 19:15:07'),
(3, 10134367819825, 4, '2023-09-04 19:20:19', '2023-09-04 19:20:19'),
(4, 10134367819825, 4, '2023-09-04 19:21:30', '2023-09-04 19:21:30'),
(5, 10134367819825, 4, '2023-09-04 19:46:01', '2023-09-04 19:46:01'),
(6, 10134367819825, 4, '2023-09-04 20:14:41', '2023-09-04 20:14:41'),
(7, 19999999999998, 4, '2023-09-06 09:25:35', '2023-09-06 09:25:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`id`, `name`, `image`, `price`, `description`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Xe', '1.jpg', 500.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:47:32'),
(2, 'Dầu Nhớt 1', '2.jpg', 20.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-02 16:45:30'),
(3, 'Dầu Nhớt 2', '3.jpg', 22.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-02 16:47:55'),
(4, 'Linh kiện 1', '4.jpg', 15.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:48:09'),
(5, 'Linh kiện 2', '5.jpg', 18.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:45:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `category` varchar(255) NOT NULL DEFAULT 'car'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`, `quantity`, `category`) VALUES
(2, 'g1', 'Best iPhone', '2.jpg', 4, '2021-09-30 17:00:00', '2023-09-06 05:27:09', 0, 'car'),
(4, 'husa3', 'steal', '4.jpg', 10014, '2021-09-30 17:00:00', '2023-09-04 17:10:17', 0, 'car'),
(5, 'Ferrari', 'xe mới nhập', '5.jpg', 10000000000, '2023-09-04 11:33:24', '2023-09-04 17:04:57', 0, 'car'),
(6, 'Ferrari', 'xe mới nhập', '6.jpg', 10000000000, '2023-09-04 11:35:58', '2023-09-04 17:10:37', 0, 'car'),
(7, 'lambor', 'minh họa', '7.jpg', 57183909913, '2023-09-04 11:36:39', '2023-09-04 17:05:07', 0, 'car'),
(8, 'Takagi', 'Takagi is the best', '8.jpg', 9999999999999, '2023-09-04 15:25:43', '2023-09-07 08:00:23', 12, 'car'),
(9, 'F40', 'white ferrari', '9.jpg', 10000, '2023-09-04 17:34:48', '2023-09-04 17:34:48', 0, 'car'),
(10, 'vien', 'con lon', '15.png', 13314180, '2023-09-06 09:09:44', '2023-09-06 09:09:44', 13, 'car'),
(16, 'Linh', 'svsdv', '16.jpg', 134, '2023-09-06 09:23:48', '2023-09-06 09:23:48', 2, 'car'),
(17, 'thinh', 'adv', '17.jpg', 74913, '2023-09-07 20:29:49', '2023-09-10 18:39:39', 14, 'linhkien'),
(18, 'banh xe', 'banh xe', '18.jpg', 1578000, '2023-09-12 11:10:18', '2023-09-12 11:10:18', 1, 'linhkien'),
(19, 'an', 'ascbas', '19.webp', 1419489, '2023-09-13 18:27:29', '2023-09-13 18:27:29', 24, 'linhkien'),
(20, 'new car', 'cas', '20.jpg', 1479, '2023-09-13 18:34:16', '2023-09-13 18:34:16', 145, 'car');

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
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `balance`, `avatar`) VALUES
(1, 'thinh', 'admin@demo.com', NULL, '$2y$10$C/wReFypegkHDIBM3GeJO.6a8Y97WhqG1JH4NWzl/wsHUf/jld9xG', NULL, '2023-09-02 11:25:55', '2023-09-02 11:25:55', '0', 10000, 'user.png'),
(2, 'thinh', 'thinhnguyenphuc51@gmail.com', NULL, '$2y$10$dntXylK0MyE4bqof3bMPduwLqm/95OAz8q/BVAzWMmDeKbS3.gX2e', NULL, '2023-09-02 12:09:33', '2023-09-02 12:09:33', '0', 0, 'user.png'),
(3, 'thinh', 'beta@beta.com', NULL, '$2y$10$5Ufdao65J20VJozYsClKkeT43QNNeO5XeOCv0vcC0LyocUKEcmM8e', NULL, '2023-09-02 12:20:33', '2023-09-02 12:20:33', '0', 0, 'user.png'),
(4, 'Oranty', 'abc@beta.com', NULL, '$2y$10$9dfZE9cpipktV6K296.wFuVM5u41tLNlp4XmAPLYySGCDascwsDFq', NULL, '2023-09-03 00:05:25', '2023-09-06 09:25:35', '0', -60537471274298, 'user.png'),
(5, 'Oranty', 'qw@hfsmlk.cpm', NULL, '$2y$10$YOos6bwX8TvPVcQkB/QdS.CyjweAgXKLc8i2e1yRTExicHliPtJMG', NULL, '2023-09-10 21:17:01', '2023-09-10 21:17:01', '0', 5000, 'user.png'),
(6, 'beslinh', 'asbc@thas.asc', NULL, '$2y$10$Hdcynrc8NK0Zm66SqMO3PeE5/Vc9mxSVH51zFosbKpzpgY1qaZawO', NULL, '2023-09-11 00:54:09', '2023-09-11 00:54:09', '0', 5000, 'asbc@thas.asc.jpg'),
(7, 'hao', 'hao@ha.m', NULL, '$2y$10$BXXJdihSO7sfA370pmaYcOE9orIopshYp53cjsHAKP1JNC2rZ0l2S', NULL, '2023-09-11 01:17:08', '2023-09-11 01:17:08', '0', 5000, 'hao.jpg'),
(8, 'hoanh', 'ha@nh.ol', NULL, '$2y$10$GuCMZmyIVRJ65HixVVDrtuy06xCNY4zfZGqRRGQJDW6enF371egA2', NULL, '2023-09-11 01:19:19', '2023-09-11 01:19:19', '0', 5000, 'hoanh.jpg'),
(9, 'ngu', 'ngu@game.choi', NULL, '$2y$10$Eq9AiHSeTptFtbQBhbkV7uCwG39c.e5Xt00bWB8BgexipqdTo3l16', NULL, '2023-09-11 10:53:00', '2023-09-11 10:53:00', '0', 5000, 'ngu@game.choi.jpg'),
(10, 'napt', 'napt@h.com', NULL, '$2y$10$6AV4StguCvnLDX1/dzgoXe/3MhCXCfRvCjiHgGiE2ewGsB4fwJyR.', NULL, '2023-09-11 17:15:51', '2023-09-11 17:15:51', 'admin', 5000, 'napt@h.com.jpg'),
(11, 'Oranty', 'asss@g.com', NULL, '$2y$10$v6SNbKM/Gf3fuh1VV0HzJ.mQR9b7.cvZVeELemfcuxrkliuiiD2AS', NULL, '2023-09-11 22:22:56', '2023-09-11 22:22:56', NULL, 5000, 'asss@g.com.jpg'),
(12, 'newAccount', 'account@gmail.com', NULL, '$2y$10$4VCUH4DbEkpZI/6yw0IcHO.toQ2Y8i/5alCMMO5ODrGuF0tdxKQza', NULL, '2023-09-13 18:32:36', '2023-09-13 18:32:36', 'admin', 5000, 'account@gmail.com.jpg'),
(13, 'Oranty', 'hieu@bui.com', NULL, '$2y$10$LjpKvnfwOYcT5f.3hCqMIusYsvP9PGng/.gXT3tQQRJzDKGWqRQ.y', NULL, '2023-09-13 19:01:48', '2023-09-13 19:01:48', 'client', 5000, 'hieu@bui.com.jpg'),
(14, 'logg', 'log@s.com', NULL, '$2y$10$sxuUxwQVun519vBIV0dCjO2JHuRTno5jH36.JtUDtASm3Hlny8O9G', NULL, '2023-09-13 19:04:03', '2023-09-13 19:04:03', 'client', 5000, 'logg.jpg');

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
  ADD KEY `items_store_id_foreign` (`store_id`);

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
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `items_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
