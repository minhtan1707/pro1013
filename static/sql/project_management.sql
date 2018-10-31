-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2018 lúc 07:56 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL COMMENT 'Mã bình luận',
  `task_id` int(11) NOT NULL COMMENT 'Mã công việc',
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên',
  `created_at` date NOT NULL COMMENT 'Ngày viết bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL COMMENT 'Mã cuộc họp',
  `created_by` int(11) NOT NULL COMMENT 'Mã thành viên tạo cuộc họp',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung cuộc họp',
  `meetting_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Địa điểm họp',
  `meetting_date` date NOT NULL COMMENT 'Ngày họp',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `created_at` date NOT NULL COMMENT 'Ngày tạo cuộc họp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên',
  `member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên thành viên',
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh đại diên thành viên ',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email thành viên',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mật khẩu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `pro_leader` int(11) NOT NULL COMMENT 'Người Leader của dự án',
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên dự án',
  `created_at` date NOT NULL COMMENT 'Ngày tạo dự án',
  `member_id_list` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL COMMENT 'Danh sách các thành viên',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung dự án'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_detail`
--

CREATE TABLE `pro_detail` (
  `pro_detail_id` int(11) NOT NULL COMMENT 'Mã chi tiết dự án',
  `added_at` date NOT NULL COMMENT 'Ngày tạo',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL COMMENT 'Mã công việc',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `task_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên công việc',
  `created_at` date NOT NULL COMMENT 'Ngày tạo công vệc',
  `member_id_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Danh sách thành viên',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tình trạng công việc',
  `end_date` date NOT NULL COMMENT 'Ngày kết thúc công việc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `pro_detail`
--
ALTER TABLE `pro_detail`
  ADD PRIMARY KEY (`pro_detail_id`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận';

--
-- AUTO_INCREMENT cho bảng `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã cuộc họp';

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã thành viên';

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã dự án';

--
-- AUTO_INCREMENT cho bảng `pro_detail`
--
ALTER TABLE `pro_detail`
  MODIFY `pro_detail_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết dự án';

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã công việc';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
