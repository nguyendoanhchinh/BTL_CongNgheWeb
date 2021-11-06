-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 06:03 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thicuoiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ac_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_resdate` datetime NOT NULL DEFAULT current_timestamp(),
  `ac_status` tinyint(1) NOT NULL DEFAULT 0,
  `ac_level` tinyint(1) NOT NULL DEFAULT 0,
  `ac_confirmed` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ac_email`, `ac_pass`, `ac_resdate`, `ac_status`, `ac_level`, `ac_confirmed`) VALUES
('29112001ndc@gmail.com', '$2y$10$zgwX6/ESHmtElpM0lp3u6edIDiG3TZVUMKEEBKDyDeUNpyb384TIe', '2021-11-03 23:14:40', 1, 0, '11f997f10678d03f0e1157efaf5a7c4b'),
('aducodong@gmail.com', '$2y$10$0zjBfgmrHMyx6Vr2QoFWve9FOymPD79jUmVrTJR9esC3pf/4bk4ue', '2021-10-31 23:16:19', 1, 1, '6e5b1b1510481f30d22629910142aa81'),
('haidinh@gmail.com', '123456', '2021-11-05 15:40:59', 0, 0, ''),
('thangtran282001@gmail.com', '$2y$10$sLMXrf/1cCRStf0NrveIUuUwhxST5a/Y4Cz/5Nl5xmJCJaYYGY6sS', '2021-10-31 17:09:16', 1, 0, 'e2d1e0ba15aca81aee2845b53a23a0d4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend`
--

CREATE TABLE `friend` (
  `fr_id` int(10) NOT NULL,
  `user_add` int(10) NOT NULL,
  `user_confirm` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `friend`
--

INSERT INTO `friend` (`fr_id`, `user_add`, `user_confirm`, `status`) VALUES
(14, 69, 64, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(1, '69', '112234'),
(2, '64', '1234'),
(3, '64', 'alo alo'),
(4, '64', 'alo alo'),
(5, '69', 'ok'),
(6, '64', 'ok r'),
(7, '69', 'hahahah');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plan`
--

CREATE TABLE `plan` (
  `id` int(10) NOT NULL,
  `ngay` date NOT NULL,
  `chude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plan`
--

INSERT INTO `plan` (`id`, `ngay`, `chude`, `congviec`, `us_id`) VALUES
(3, '2021-11-18', 'đi học', 'đi bay', 64),
(4, '2021-11-08', 'btl', 'btl', 64),
(5, '2021-11-18', 'haha', 'haha', 69);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `us_id` int(10) NOT NULL,
  `us_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_career` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_resDate` date NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`us_id`, `us_name`, `us_email`, `us_phone`, `us_city`, `us_career`, `us_resDate`, `avatar`) VALUES
(64, 'Trần Đức Thắng', 'thangtran282001@gmail.com', '123', 'hai phong', '', '2021-10-31', 'assets/img/avatar.png'),
(69, 'Nguyễn Doanh Chính', '29112001ndc@gmail.com', '0123453xxxx', 'hà nội', 'sinh vien', '2021-11-03', 'assets/img/profile-img.jpg'),
(70, 'Nguyễn Hải Đình', 'haidinh@gmail.com', '09856456', 'Hà Nội', 'Sinh Viên', '2021-11-05', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ac_email`);

--
-- Chỉ mục cho bảng `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`fr_id`),
  ADD KEY `user_add` (`user_add`),
  ADD KEY `user_confirm` (`user_confirm`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `us_id` (`us_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `us_email` (`us_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `friend`
--
ALTER TABLE `friend`
  MODIFY `fr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`user_add`) REFERENCES `user` (`us_id`),
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`user_confirm`) REFERENCES `user` (`us_id`);

--
-- Các ràng buộc cho bảng `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`us_email`) REFERENCES `account` (`ac_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
