-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 25, 2018 lúc 02:01 PM
-- Phiên bản máy phục vụ: 5.7.22-0ubuntu0.16.04.1
-- Phiên bản PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ToDoList`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `status` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `work_name` varchar(111) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`id`, `starting_date`, `ending_date`, `status`, `work_name`) VALUES
(1, '2018-07-01', '2018-07-17', '3', 'coding'),
(2, '2018-07-18', '2018-07-29', '2', 'testing'),
(3, '2018-07-30', '2018-07-31', '1', 'selling');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
