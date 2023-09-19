-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2023 lúc 01:15 AM
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
-- Cơ sở dữ liệu: `carstore2`
--

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
  `category` varchar(255) NOT NULL DEFAULT 'car',
  `sale` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`, `quantity`, `category`, `sale`) VALUES
(2, 'g1', 'Best iPhone', '2.jpg', 4, '2021-09-30 17:00:00', '2023-09-06 05:27:09', 0, 'Automobile', 'Hết Hàng'),
(4, 'husa3', 'steal', '4.jpg', 10014, '2021-09-30 17:00:00', '2023-09-04 17:10:17', 0, 'Automobile', 'Hết Hàng'),
(5, 'Ferrari', 'xe mới nhập', '5.jpg', 10000000000, '2023-09-04 11:33:24', '2023-09-04 17:04:57', 0, 'Automobile', 'Hết Hàng'),
(6, 'Ferrari', 'xe mới nhập', '6.jpg', 10000000000, '2023-09-04 11:35:58', '2023-09-04 17:10:37', 0, 'Automobile', 'Hết Hàng'),
(7, 'lambor', 'minh họa', '7.jpg', 57183909913, '2023-09-04 11:36:39', '2023-09-04 17:05:07', 0, 'Automobile', 'Hết Hàng'),
(8, 'Takagi', 'Takagi is the best', '8.jpg', 9999999999999, '2023-09-04 15:25:43', '2023-09-07 08:00:23', 12, 'Automobile', 'Hot'),
(9, 'F40', 'white ferrari', '9.jpg', 10000, '2023-09-04 17:34:48', '2023-09-04 17:34:48', 0, 'Automobile', 'Hết Hàng'),
(10, 'vien', 'con lon', '15.png', 13314180, '2023-09-06 09:09:44', '2023-09-06 09:09:44', 13, 'Automobile', 'Hot'),
(16, 'Linh', 'svsdv', '16.jpg', 134, '2023-09-06 09:23:48', '2023-09-06 09:23:48', 2, 'Automobile', 'Hot'),
(17, 'thinh', 'adv', '17.jpg', 74913, '2023-09-07 20:29:49', '2023-09-10 18:39:39', 14, 'Car parts', 'New'),
(18, 'banh xe', 'banh xe', '18.jpg', 1578000, '2023-09-12 11:10:18', '2023-09-12 11:10:18', 1, 'Car parts', 'New'),
(19, 'an', 'ascbas', '19.webp', 1419489, '2023-09-13 18:27:29', '2023-09-13 18:27:29', 24, 'Car parts', 'New'),
(20, 'new car', 'cas', '20.jpg', 1479, '2023-09-13 18:34:16', '2023-09-13 18:34:16', 145, 'Automobile', 'Hot');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
