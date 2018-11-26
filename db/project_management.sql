-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 26, 2018 at 07:22 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL COMMENT 'Mã bình luận',
  `task_id` int(11) NOT NULL COMMENT 'Mã công việc',
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên',
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày viết bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `task_id`, `member_id`, `comment_content`, `created_at`) VALUES
(1, 3, 2, 'test bÃ¬nh luáº­n', '2018-11-20 09:41:32'),
(2, 4, 2, 'test comment task 4', '2018-11-20 09:52:46'),
(3, 1, 3, 'test comment', '2018-11-20 10:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL COMMENT 'Mã cuộc họp',
  `created_by` int(11) NOT NULL COMMENT 'Mã thành viên tạo cuộc họp',
  `meeting_desc` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung cuộc họp',
  `meeting_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Địa điểm họp',
  `meeting_date` date NOT NULL COMMENT 'Ngày họp',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo cuộc họp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `created_by`, `meeting_desc`, `meeting_location`, `meeting_date`, `pro_id`, `created_at`) VALUES
(1, 2, 'test add meeting', '135 NCV', '2018-11-21', 1, '2018-11-19 21:20:52'),
(2, 2, 'test test test', '1235 qwfqw', '2018-11-22', 1, '2018-11-20 09:58:10'),
(3, 2, 'test meeting 3', 'jksd 231', '2018-11-30', 1, '2018-11-20 10:11:25'),
(4, 2, 'test meeting 4', '1235 ncv', '2018-12-01', 12, '2018-11-24 10:48:24'),
(5, 2, 'Test meeting 5', '521 ads', '2018-11-23', 11, '2018-11-24 11:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên',
  `member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên thành viên',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email thành viên',
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'noimage.jpg',
  `about` text COLLATE utf8_unicode_ci,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `joined_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `email`, `pass`, `profile_picture`, `about`, `title`, `phone`, `joined_date`) VALUES
(2, 'Mike Tanny', 'minhtan1707@gmail.com', 'a0314a00671b46191de86d0b9c03fa4c.6a02cd78ee112d08631fca6634840ba4.c21d5c08d45cd4cb859cf7917adf8b3e.c5efbf4fa7acdb3006459f60c4b4bc36', 'profile1.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'Web Designer', '0907321766', '2018-11-24 12:02:51'),
(3, 'Mike Tanny', 'minhtan17071991@gmail.com', '0f517ed0ca0dfb2f4c685612560c4d09.b225fa9f1afd8307c45b85352ce8fc8d.23b2d37d438a51d8c9d07fde7743cb2c.c350619dc4f31eee26e8fc2e44d0fc93', 'avatar-4.jpg', '', '', '', '2018-11-24 12:02:51'),
(4, 'Viet Hung', 'hoangviet.hung.009@gmail.com', '12345', 'avatar-1.jpg', NULL, 'Documentation', NULL, '2018-11-24 12:02:51'),
(5, 'Suu', 'quocsuu66@gmail.com', '12345', 'avatar-3.jpg', NULL, 'Front End', NULL, '2018-11-24 12:02:51'),
(8, 'Bread', 'minhtan170791@gmail.com', 'bafec945ec2ead006b2f33ff2c4cb7cd.b9be3f4604d3c2082dba2884c43eac8d.5b8c5ebe00c22fb5709ae1263d41a03a.5cd75645470964597a4e9fa820162788', 'noimage.jpg', NULL, NULL, NULL, '2018-11-24 12:02:51'),
(9, 'mike', 'test@gmail.com', 'c3e9dd8dff26065cb4f90775f0bed32c.c0ac92f611894d7d27375d0265fbd7fd.69dbfe944f0607b2fd6b7c1b143200d6.69a3b49d199e191ff22587f498498abb', NULL, NULL, NULL, NULL, '2018-11-26 14:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `pro_leader` int(11) NOT NULL COMMENT 'Người Leader của dự án',
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên dự án',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo dự án',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung dự án',
  `pro_start` date NOT NULL,
  `pro_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_id`, `pro_leader`, `pro_name`, `created_at`, `description`, `pro_start`, `pro_end`) VALUES
(1, 2, 'Project full data', '2018-11-06 10:18:50', 'A full data project', '2018-11-01', '2018-11-30'),
(2, 2, 'Test Project 2', '2018-11-06 10:18:50', 'This is test project 2', '2018-11-20', '2018-12-05'),
(3, 5, 'Test Project 3', '2018-11-12 13:01:55', 'This is test project 3', '2018-11-08', '2018-11-22'),
(4, 2, 'Test Project 4', '2018-11-12 13:07:33', 'This is test project 4', '2018-11-01', '2018-11-11'),
(7, 8, 'Test Project 5', '2018-11-19 20:01:18', 'This is test project 5', '2018-11-20', '2018-11-29'),
(8, 3, 'Test Project 6', '2018-11-19 21:07:33', 'This is test project 6', '2018-11-20', '2018-11-30'),
(9, 2, 'Test Project 7', '2018-11-23 14:32:35', 'This is test project 7', '2018-11-24', '2018-12-07'),
(10, 2, 'Test project 10', '2018-11-24 10:20:41', 'This is test project 10', '2018-11-25', '2018-11-30'),
(11, 2, 'test project 11', '2018-11-24 10:21:54', 'this is test project 11', '2018-11-23', '2018-11-27'),
(12, 2, 'test project 12', '2018-11-24 10:22:39', 'this is test project 12', '2018-11-21', '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `pro_detail`
--

CREATE TABLE `pro_detail` (
  `pro_detail_id` int(11) NOT NULL COMMENT 'Mã chi tiết dự án',
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `member_id` int(11) NOT NULL COMMENT 'Mã thành viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pro_detail`
--

INSERT INTO `pro_detail` (`pro_detail_id`, `added_at`, `pro_id`, `member_id`) VALUES
(1, '2018-11-06 10:19:15', 1, 2),
(3, '2018-11-06 10:22:19', 2, 2),
(4, '2018-11-06 10:35:26', 1, 3),
(5, '2018-11-08 09:47:53', 1, 4),
(8, '2018-11-08 09:48:14', 2, 5),
(10, '2018-11-22 10:26:01', 1, 5),
(11, '2018-11-23 13:31:20', 4, 5),
(12, '2018-11-23 13:31:29', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL COMMENT 'Mã công việc',
  `pro_id` int(11) NOT NULL COMMENT 'Mã dự án',
  `task_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên công việc',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo công vệc',
  `assigned_member` int(11) NOT NULL COMMENT 'Danh sách thành viên',
  `status` tinyint(255) NOT NULL DEFAULT '0' COMMENT 'Tình trạng công việc',
  `task_desc` text COLLATE utf8_unicode_ci,
  `end_date` date NOT NULL COMMENT 'Ngày kết thúc công việc',
  `priority` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `pro_id`, `task_name`, `created_at`, `assigned_member`, `status`, `task_desc`, `end_date`, `priority`) VALUES
(1, 1, 'Task no.1', '2018-11-12 13:25:00', 3, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie id sem quis posuere. Aliquam non dapibus augue, ut tincidunt eros. Fusce ornare nec ligula ut pretium. Maecenas molestie ornare finibus. Nulla ultricies nisi ut dignissim dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum massa quis felis varius, at hendrerit diam imperdiet. Sed volutpat condimentum sapien, eu dapibus mauris venenatis id. ', '2018-11-21', 2),
(2, 1, 'Task no.2', '2018-11-12 13:25:00', 4, 1, 'Cras iaculis odio ac nunc sollicitudin tristique. Quisque in aliquam est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam sollicitudin magna et consequat porta. Vivamus id lorem risus.', '2018-11-23', 2),
(3, 2, 'Task no.3', '2018-11-12 21:11:09', 2, 0, 'Lorem disasd eqg sgsdg ew gewgw', '2018-11-14', 2),
(4, 1, 'Task no.4', '2018-11-12 21:11:09', 2, 1, 'sadg eg weg sdg xerhj rzj ezj zerj', '2018-11-24', 2),
(5, 1, 'test Task', '2018-11-19 20:18:22', 3, 1, 'test add task', '2018-11-28', 2),
(6, 1, 'test task 2', '2018-11-19 20:31:43', 4, 0, 'test task added 2', '2018-11-28', 2),
(7, 9, 'Nhiá»‡m vá»¥ 1', '2018-11-23 14:32:59', 2, 0, 'Nhiá»‡m vá»¥ 1 cá»§a dá»± Ã¡n máº«u 2', '2018-12-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `meeting_id` (`meeting_id`),
  ADD KEY `meeting_id_2` (`meeting_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `pro_id_2` (`pro_id`),
  ADD KEY `pro_leader` (`pro_leader`),
  ADD KEY `pro_id_3` (`pro_id`);

--
-- Indexes for table `pro_detail`
--
ALTER TABLE `pro_detail`
  ADD PRIMARY KEY (`pro_detail_id`),
  ADD KEY `pro_detail_id` (`pro_detail_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `member_id` (`assigned_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã cuộc họp', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã thành viên', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã dự án', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pro_detail`
--
ALTER TABLE `pro_detail`
  MODIFY `pro_detail_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết dự án', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã công việc', AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `project` (`pro_id`),
  ADD CONSTRAINT `meeting_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`pro_leader`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `pro_detail`
--
ALTER TABLE `pro_detail`
  ADD CONSTRAINT `pro_detail_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `project` (`pro_id`),
  ADD CONSTRAINT `pro_detail_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `project` (`pro_id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`assigned_member`) REFERENCES `member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
