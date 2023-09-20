-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2023 lúc 08:58 AM
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
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `quantity`, `category`, `condition`, `created_at`, `updated_at`) VALUES
(2, 'Ferrari', 'âcs', '2.jpg', 145678, 3142, 'car', 'hot', '2023-09-19 22:40:50', '2023-09-19 23:55:17'),
(3, 'TOYOTA YARIS 2023', 'Toyota Yaris 2023 là mẫu xe Hatchbach duy nhất của Toyota được nhập khẩu nguyên chiếc từ Thái Lan và bán ra duy nhất 1 phiên bản là Yaris 1.5G 2023. Xe Yaris 2023 có thiết kế trẻ trung, bắt mắt, nhiều màu xe lựa chọn cùng với đó là tính năng vận hành, khả năng tiết kiệm nhiên liệu, tính năng an toàn vượt trội cùng những tiện nghi đầy đủ trên xe. Cùng Thế Giới Xe Ô Tô tìm hiểu chi tiết về giá xe Yaris 2023, giá xe Yaris 2023 lăn bánh, hình ảnh chi tiết về nội ngoại thất, màu xe, thông số kỹ thuật mới nhất.', '3.jpg', 684000000, 1314, 'TOYOTA', 'hot', '2023-09-19 23:21:47', '2023-09-19 23:21:47'),
(4, 'MERCEDES-BENZ GLC ALL NEW 2023', 'Mercedes-Benz GLC 2023 được chính thức ra mắt tại Việt Nam với 2 phiên bản được lắp ráp chính hãng bởi Mercedes Benz Việt Nam bao gồm Mercedes GLC 200 4Matic có giá 2,299 tỷ, Mercedes GLC 300 AMG có giá 2,799 tỷ. Tất cả các phiên bản Mercedes GLC 2023 đều được trang bị options cao cấp nhất và đầy đủ nhất với tính năng an toàn và vận hành vượt trội. Cùng Thế Giới Xe Ô Tô tìm hiểu chi tiết về giá xe Mercedes GLC 2023, giá xe Mercedes GLC lăn bánh, hình ảnh, thông số kỹ thuật và đánh giá xe Mercedes GLC 2023 chi tiết nhất để khách hàng lựa chọn khi mua xe', '4.jpg', 2299000000, 179, 'MERCEDES-BENZ GLC', 'hot', '2023-09-19 23:24:47', '2023-09-19 23:24:47'),
(5, 'MERCEDES-BENZ GLC ALL NEW Xe Toyota Camry 2.5HV 2022', '\"Xe trang bị:\r\nĐộng cơ xăng 2.5L kết hợp động cơ điện, Hộp số vô cấp E-CVT\r\nGói an toàn Toyota Safety Sensen: Phanh khoảng cách, cảnh báo lệch làn, giữ làn, Ga tự động, điều khiển hành trình chủ động (bám đuổi xe phía trước), đèn pha tự động điều chỉnh cường độ và góc chiếu mở rộng\r\nĐèn full led, auto, đèn chờ dẫn đường, 4 ghế chỉnh điện, ghế lái nhớ 2 vị trí, Vô lăng chỉnh điện, tích hợp nút điều chỉnh âm thanh, đàm thoại rảnh tay, nút an toàn phanh khoảng cách, giữ làn đường, Đề start/stop khoá thông minh.\"', '5.jpg', 1355000000, 1456, 'Toyata Camry', 'hot', '2023-09-19 23:26:24', '2023-09-19 23:26:25'),
(6, 'Mazda 3 2023', 'Mazda 3 là dòng xe hạng C được nhập khẩu từ Thái Lan, cạnh tranh với đối thủ như Kia K3, Hyundai Elantra, Toyota Altis, Honda Civic...Trong năm 2022, Mazda 3 gây ấn tượng khi bán được đến 9812 xe (817 xe/tháng), đứng thứ 2 sau Kia K3 (11.404 xe). Mazda3 thế hệ thứ 4 trình làng đầu tiên tại Los Angeles Auto Show tháng 11/2018. Xe được phát triển dựa trên nền tảng khung gầm Skyactiv-Vehicle Architecture, với hai bản sedan 4 cửa và hatchback 5 cửa.', 'Mazda 3 2023.jpg', 789000000, 14, 'Mazda', 'còn hàng', '2023-09-19 23:46:14', '2023-09-19 23:46:14'),
(7, 'Mitsubishi Xpander 2024', '\"Mitsubishi Xpander là mẫu xe SUV lai MPV 7 chỗ cạnh tranh với các đối thủ như Toyota Avanza/Veloz, Honda HRV, Suzuki Ertiga/XL7... Trong năm 2022, Xpander bán được 21.803 xe, đứng thứ 3 trong top 10 xe bán chạy nhất Việt Nam. Ra mắt lần đầu năm 2017, đến nay Xpander vừa bước vào thế hệ thứ 2. Mitsubishi Xpander facelift ra mắt tại Việt Nam tháng 06-2022 với tạo hình bộ đèn chữ T mới. Xe có 20 điểm mới so với bản tiền nhiệm của năm 2021.Phiên bản Xpander 2024 vẫn chưa có gì thay đổi so với bản facelift kể trên. Đối thủ của mẫu xe đa dụng Mitsubishi Xpander là Toyota Avanza, Suzuki Ertiga...Xpander Cross 2024 cũng được ra mắt trong tháng 03-2023 với nhiều nâng cấp về thiết kế cũng như trang bị, điều này giúp tạo thêm sức ép lên đối thủ Toyota Veloz, Suzuki XL7..\r\n\r\n\r\n\r\n\r\n\"', 'Mitsubishi Xpander 2024.jpg', 680000000, 4, 'Mitsubishi', 'còn hàng', '2023-09-19 23:53:14', '2023-09-19 23:53:14'),
(8, 'Vinfast VF8 2023', '\"Đánh giá sơ bộ Vinfast VF8 của Giaxeotovn\r\nPhong cách thiết kế của Vinfast VF8 do hãng thiết kế hàng đầu Châu Âu là Pininfarina chấp bút, quả thực rất lôi cuốn, đậm chất châu Âu dù nhiều người vẫn chê xe điện đơn điệu phần đầu xe. Vẻ lai SUV Coupe đầy hào nhoáng mà tinh tế. Độ hoàn thiện thân vỏ tuyệt vời. Độ nhận diện thương hiệu Việt ở mọi góc nhìn khiến team đánh giá của chúng tôi rất tâm đắc.Đánh giá chung VF8 (4.7/5): Mức giá của VF8 rất tốt, nhất là còn linh hoạt do chính sách ưu đãi và dùng Voucher của VinGroup. Hạn chế là nguồn cung và hệ thống trạm sạc cần rộng khắp hơn. Bản thân team đánh giá xe của chúng tôi có 5/5 người ở chung cư nhưng chỉ có 3/5 người có thể thấy trạm xạc trong phạm vi cách nhà 500m.\"', 'Vinfast VF8 2023.jpg', 1344000000, 1, 'Vinfast', 'hết hàng', '2023-09-19 23:54:28', '2023-09-19 23:54:28');

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
(7, 'hao', 'hao@ha.m', NULL, '$2y$10$BXXJdihSO7sfA370pmaYcOE9orIopshYp53cjsHAKP1JNC2rZ0l2S', NULL, '2023-09-11 01:17:08', '2023-09-19 11:41:55', '0', -144826, 'hao.jpg'),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
