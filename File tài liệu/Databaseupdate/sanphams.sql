-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 02, 2023 lúc 07:01 PM
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
-- Cơ sở dữ liệu: `carstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `loai` varchar(20) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`id`, `tensp`, `hinhanh`, `gia`, `loai`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Xe', '1.jpg', 500.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:47:32'),
(2, 'Dầu Nhớt 1', '2.jpg', 20.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-02 16:45:30'),
(3, 'Dầu Nhớt 2', '3.jpg', 22.00, 'Dầu Nhớt', 0, '2023-09-02 13:49:22', '2023-09-02 16:47:55'),
(4, 'Linh kiện 1', '4.jpg', 15.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:48:09'),
(5, 'Linh kiện 2', '5.jpg', 18.00, 'Linh kiện', 0, '2023-09-02 13:49:22', '2023-09-02 16:45:53');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
