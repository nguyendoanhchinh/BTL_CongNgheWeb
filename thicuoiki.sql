-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 06:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

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
('aducodong@gmail.com', '$2y$10$Ua3hBgDxsSNYJoMYaZ/VQO5Q8FZjQNy.uwg73ecSAzrF2QIXmYele', '2021-10-30 16:19:22', 1, 0, '92fbb1389eea40504ac381e233bcc2f1'),
('wwducanhtran@gmail.com', '789', '2021-10-28 17:56:23', 1, 0, ''),
('wwhungtranduy@gmail.com', '234', '2021-10-28 17:56:23', 0, 0, ''),
('wwtranminhduc@gmail.com', '468', '2021-10-28 17:56:23', 0, 0, ''),
('wwwhainguyendinh@gmail.com', '267', '2021-10-28 17:56:23', 0, 0, ''),
('wwwvannguyentuan@yahoo.com', '123', '2021-10-28 17:56:23', 0, 0, ''),
('wwwvantuantran@tlu.edu.vn', '456', '2021-10-28 17:56:23', 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team`
--

CREATE TABLE `team` (
  `tm_id` int(10) NOT NULL,
  `tm_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_memberid` int(10) NOT NULL,
  `tm_managerid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `team`
--

INSERT INTO `team` (`tm_id`, `tm_name`, `tm_memberid`, `tm_managerid`) VALUES
(1, 'Nhóm IT', 1, 3);

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
(1, 'Nguyễn Anh Đức', 'wwwvannguyentuan@yahoo.com', '1900651252', 'dsfdgfhf', 'dfgdfh', '2021-04-14', 'assets/img/avatar1.png'),
(2, 'Trần Văn Tuấn', 'wwwvantuantran@tlu.edu.vn', '1900650252', '', '', '2021-10-27', 'assets/img/profile-img.jpg'),
(3, 'Trần Đức Anh', 'wwducanhtran@gmail.com', '943369523', '', '', '2021-10-04', 'assets/img/profile-img.jpg'),
(4, 'Nguyễn Hải Đình', 'wwwhainguyendinh@gmail.com', '943369523', '', '', '2021-09-24', 'assets/img/profile-img.jpg'),
(5, 'Trần Minh Đức', 'wwtranminhduc@gmail.com', '943369523', '', '', '2021-09-01', 'assets/img/profile-img.jpg'),
(6, 'Trần Duy Hưng', 'wwhungtranduy@gmail.com', '943369523', '', '', '2021-09-16', 'assets/img/profile-img.jpg'),
(62, 'Nguyễn Thu Hồng', 'aducodong@gmail.com', '0987799', 'Hà Nội', 'Sinh Viên', '2021-10-30', 'assets/img/profile-img.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ac_email`);

--
-- Chỉ mục cho bảng `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`tm_id`),
  ADD KEY `gr_memberid` (`tm_memberid`),
  ADD KEY `gr_managerid` (`tm_managerid`);

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
-- AUTO_INCREMENT cho bảng `team`
--
ALTER TABLE `team`
  MODIFY `tm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`tm_memberid`) REFERENCES `user` (`us_id`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`tm_managerid`) REFERENCES `user` (`us_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`us_email`) REFERENCES `account` (`ac_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
