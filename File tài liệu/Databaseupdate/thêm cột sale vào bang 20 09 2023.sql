-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2023 lúc 02:07 AM
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
  `price` decimal(20,2) DEFAULT NULL,
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
(1, 'Argento Nurburgring', '', 'car1-removebg.png', 179950.00, '2021-09-30 17:00:00', '2023-09-06 05:27:09', 0, 'Automobile', 'Hết Hàng'),
(6, 'McLaren P1', 'xe mới nhập', 'car2-removebg.png', 1350000.00, '2023-09-04 11:35:58', '2023-09-04 17:10:37', 0, 'Automobile', 'Hết Hàng'),
(7, 'lambor', 'minh họa', '7.jpg', 57183909913.00, '2023-09-04 11:36:39', '2023-09-04 17:05:07', 0, 'Automobile', 'Hết Hàng'),
(8, 'Takagi', 'Takagi is the best', '8.jpg', 9999999999999.00, '2023-09-04 15:25:43', '2023-09-07 08:00:23', 12, 'Automobile', 'Hot'),
(19, 'an', 'ascbas', '19.webp', 1419489.00, '2023-09-13 18:27:29', '2023-09-13 18:27:29', 24, 'Car parts', 'New');

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
