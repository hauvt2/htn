-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2020 lúc 11:03 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htnsoft`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `answered_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `highlight` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `content`, `images`, `highlight`, `views`, `id_type`, `id_user`, `status`, `created_at`, `updated_at`) VALUES
(10, '333301234', '3333', '<p>3333</p>', 'Dl8d_funny face cat.PNG', 1, 0, 5, 1, 0, '2020-04-27 21:24:28', '2020-05-04 02:14:33'),
(13, '333', '3333', '<p>333</p>', '3lse_funny face cat.PNG', NULL, 0, 4, 1, 1, '2020-04-27 22:00:37', '2020-04-27 22:00:37'),
(14, 'cong nge  766', 'ểfgghhh', '<p>errr</p>', 'cTRx_cat fun.PNG', 1, 0, 6, 1, 1, '2020-04-27 22:03:36', '2020-05-04 01:29:23'),
(16, 'cong nge 2344', 'fdhdfjjf', '<p>dgfhdffj</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', '7zst_find cat.PNG', 0, 0, 6, 1, 1, '2020-04-27 22:06:52', '2020-05-04 01:29:00'),
(18, '3334', '3333', '<p>3333</p>', 'Vt4Z_cat fun.PNG', 1, 0, 4, 1, 0, '2020-04-29 20:11:53', '2020-04-29 20:11:53'),
(19, '33334444', '3333', '<p>3333</p>', 'S9Kk_cat fun.PNG', 1, 0, 4, 1, 0, '2020-04-29 20:27:57', '2020-04-29 20:27:57'),
(20, 'Công nghệ thời đại', '3333', '<p>3333</p>', '5Bu3_cat fun.PNG', 1, 0, 4, 1, 0, '2020-04-30 01:06:08', '2020-04-30 01:06:08'),
(21, '33334444', '3333', '<p>3333</p>', 'izWv_black.png', 1, 0, 4, 1, 0, '2020-04-30 02:28:50', '2020-04-30 02:28:50'),
(22, '1', '3333', '<p>3333</p>', 'o2fO_black.png', 1, 0, 4, 1, 0, '2020-04-30 02:38:07', '2020-04-30 02:38:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_comments`
--

CREATE TABLE `news_comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_types`
--

CREATE TABLE `news_types` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news_types`
--

INSERT INTO `news_types` (`id`, `name`, `status`, `updated_at`, `created_at`) VALUES
(5, 'Tin tức công nghệ mới nhất 3', 1, '2020-05-04 01:37:31', '2020-04-23 23:08:28'),
(6, 'Tin tức công nghệ mới nhất 2', 1, '2020-05-04 00:54:16', '2020-04-23 23:08:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `img_detail` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_demo` text COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `content`, `images`, `img_detail`, `link_demo`, `id_type`, `id_user`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Techgarden VĂN PHÒNG GIÁ RẺ CHO STARTUP', 'VĂN PHÒNG GIÁ RẺ CHO STARTUP', '', 'techgarden-product.png', NULL, 'http://techgarden.vn/', 1, 1, 1, '2020-04-21 03:53:34', '2020-04-21 04:06:01'),
(2, 'Thi Trực Tuyến', 'Phần mềm thi trực tuyến pháp luật phòng chống tham nhũng của Sở Tư Pháp', '', 'thi-product.png', NULL, 'http://thitructuyen.htnsoft.com/', 1, 1, 1, '2020-04-21 03:53:34', '2020-04-21 04:09:51'),
(3, 'Mạng xã hội Hodi', 'Mạng xã hội học tập miễn phí cho người Việt', '', 'hodi-product.png', NULL, 'https://hodi.vn/', 1, 1, 1, '2020-04-21 03:57:01', '2020-04-21 04:11:59'),
(6, 'Website Workstay', 'Trang web đặt phòng hàng đầu', '', 'workstay-product.png', NULL, 'https://workstay.vn/', 1, 1, 1, '2020-04-21 04:14:56', '2020-04-21 04:14:56'),
(7, 'Website huyện Thanh Oai', 'Cổng thông tin điện tử', '', 'thanhoai-product.png', NULL, 'https://thanhoai.hanoi.gov.vn/', 1, 1, 1, '2020-04-21 04:15:01', '2020-04-21 04:19:59'),
(8, 'SoKHCN', 'Cổng thông tin điện tử của Sở khoa học Công nghệ', '', 'skhcn-product.png', NULL, 'http://sokhcn.htnsoft.com/vi', 1, 1, 1, '2020-04-21 04:23:07', '2020-04-21 04:23:07'),
(9, 'Phần mềm quản lý thuế Tây Hồ', 'Phần mềm quản lý thuế Tây Hồ', '<p>Phần mềm quản l&yacute; thuế T&acirc;y Hồ</p>', '', NULL, 'https://fontawesome.com/icons?d=gallery', 2, 1, 0, '2020-05-04 19:44:04', '2020-05-04 19:49:32'),
(10, '1', '1', '<p>1</p>', '', NULL, 'https://fontawesome.com/icons?d=gallery', 2, 1, 1, '2020-05-04 20:16:32', '2020-05-04 20:16:32'),
(11, '1', 'q', '<p>1</p>', '', NULL, 'https://fontawesome.com/icons?d=gallery', 2, 1, 1, '2020-05-04 20:19:41', '2020-05-04 20:19:41'),
(12, 'q', '2', '<p>2</p>', 'A9fs_de.PNG', NULL, 'https://fontawesome.com/icons?d=gallery', 2, 1, 1, '2020-05-04 20:45:59', '2020-05-04 20:45:59'),
(13, '1', 'hhjuj', '<p>fvghhy</p>', '5uMb_de.PNG', 'YvIn_1.PNG,5jgl_cat fun.PNG,hdrP_cmnd.PNG,5uMb_de.PNG', 'https://fontawesome.com/icons?d=gallery', 19, 1, 1, '2020-05-04 21:14:41', '2020-05-04 21:14:41'),
(14, 'Mang xa hoi hoc tap Hodi.vn', '1', '<p>1</p>', 'EK9q_techgarden-product.png', 'd0WF_thanhoai-product.png,dSfS_workstay-product.png,3pXC_skhcn-product.png,moZ6_thi-product.png,NqKY_hodi-product.png,EK9q_techgarden-product.png', 'https://fontawesome.com/icons?d=gallery', 2, 1, 2, '2020-05-04 21:16:42', '2020-05-04 21:16:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_types`
--

CREATE TABLE `project_types` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project_types`
--

INSERT INTO `project_types` (`id`, `name`, `status`) VALUES
(2, 'thi truc tuyen', 1),
(3, 'Mạng xã hội học tập', 1),
(4, 'Dịch vụ thuê văn phòng', 1),
(6, 'Công thông tin điện tử', 1),
(8, 'website thi trực tuyến', 1),
(10, 'website thi trực tuyến', 0),
(11, 'Du lịch', 0),
(12, 'Giáo dục', 1),
(13, 'website  học thi trực tuyến', 2),
(14, 'website  học thi trực tuyến', 1),
(15, 'website  thi trực tuyến', 0),
(16, 'website  thi trực tuyến', 0),
(17, 'website  thi trực tuyến', 0),
(18, 'website  thi trực tuyến 1', 0),
(19, 'website  thi trực tuyến 2', 0),
(20, 'Giáo dục sinh vien', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tt` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `image`, `title`, `link`, `tt`) VALUES
(1, 'banner1.jpg', 'Ảnh silde 1', '', 1),
(2, 'banner2.png', 'Ảnh silde 2', NULL, 0),
(3, '1584187552_3951601_9517dd39fc5c6db50d75f90c56b05eda.jpg', 'Ảnh slide 3', NULL, 0),
(4, '1584187605_6262687_c65438f9a118f7551ac6eca377f75eca.jpg', 'Ảnh slide 4', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(1) NOT NULL,
  `stt` int(1) NOT NULL,
  `remember_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birth`, `email`, `phone`, `password`, `role`, `stt`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Phạm Văn Dưỡng', '28/01/1995', 'phamduong97info@gmail.com', '0904654926', '$2y$10$OHakjxdcWD0hJG8hbvIRV.oArgGj3pjPBUDePA8rT6hdg7oaa5uFy', 1, 1, 'n1EaeP3wiOE8mDLXJECjjCIOiHk2AbUfb3reXOJMSLEqQeruYY5XhagxjwbA', '2020-04-23 04:55:42', '2020-01-07 07:22:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
