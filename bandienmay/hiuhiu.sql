-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 11, 2023 lúc 07:34 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hiuhiu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Đặng Quốc Huy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'Bài 1 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '7.jpg'),
(2, 'Bài 2: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '6.jpg'),
(3, 'Bài 3: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, '8.jpg'),
(4, 'Bài 4 :Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, '5.jpg'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Bài 5 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, '8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Đồng Hồ Nam'),
(2, 'Đồng Hồ Nữ'),
(3, 'Smart Watch'),
(4, 'Hàng Hiệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tin`
--

CREATE TABLE `tbl_danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tin`
--

INSERT INTO `tbl_danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Kiến thức Đồng Hồ Nam'),
(2, 'Kiến thức Đồng Hồ Nữ'),
(3, 'Kiến thức Smart Watch'),
(4, 'Kiến thức Hàng Hiệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(10, 17, 7, '3060', 12, '2019-10-01 04:11:55', 1, 0),
(11, 21, 5, '8979', 14, '2019-10-04 02:29:52', 0, 0),
(12, 26, 6, '8979', 14, '2019-10-04 02:29:52', 0, 0),
(13, 20, 3, '4236', 15, '2019-10-04 02:33:55', 0, 0),
(14, 21, 4, '4236', 15, '2019-10-04 02:33:56', 0, 0),
(15, 20, 3, '6503', 16, '2019-10-04 02:34:56', 0, 0),
(16, 21, 4, '6503', 16, '2019-10-04 02:34:56', 0, 0),
(17, 21, 1, '2508', 17, '2019-10-04 02:35:19', 0, 0),
(18, 26, 3, '4249', 18, '2019-10-04 02:45:46', 0, 0),
(19, 26, 3, '8728', 19, '2019-10-04 02:46:40', 0, 0),
(20, 21, 1, '5037', 20, '2019-10-04 02:48:16', 0, 0),
(21, 20, 1, '5037', 20, '2019-10-04 02:48:17', 0, 0),
(22, 21, 1, '1594', 21, '2019-10-04 02:51:05', 0, 0),
(23, 20, 1, '1594', 21, '2019-10-04 02:51:05', 0, 0),
(24, 20, 1, '2323', 22, '2019-10-04 02:54:27', 0, 0),
(25, 21, 3, '2323', 22, '2019-10-04 02:54:27', 0, 0),
(26, 21, 2, '5737', 23, '2019-10-04 02:57:00', 0, 0),
(28, 25, 3, '7785', 25, '2019-10-04 03:11:51', 0, 0),
(29, 22, 5, '7785', 25, '2019-10-04 03:11:52', 0, 0),
(30, 27, 2, '7785', 25, '2019-10-04 03:11:52', 0, 0),
(31, 21, 1, '5396', 26, '2019-10-04 03:49:08', 0, 0),
(32, 20, 3, '5396', 26, '2019-10-04 03:49:08', 0, 0),
(33, 20, 3, '7914', 28, '2019-10-05 05:38:42', 0, 0),
(34, 26, 1, '7914', 28, '2019-10-05 05:38:42', 0, 0),
(35, 25, 2, '6687', 27, '2019-10-09 09:48:42', 1, 2),
(36, 26, 3, '6687', 27, '2019-10-09 09:48:42', 1, 2),
(37, 27, 1, '6687', 27, '2019-10-09 09:48:42', 1, 2),
(38, 22, 1, '1125', 27, '2019-10-09 09:47:17', 1, 2),
(39, 24, 1, '1125', 27, '2019-10-09 09:47:17', 1, 2),
(40, 20, 1, '555', 27, '2019-10-09 09:50:07', 0, 2),
(58, 24, 1, '9693', 37, '2023-03-02 09:12:08', 0, 0),
(59, 26, 3, '9693', 37, '2023-03-02 09:12:08', 0, 0),
(60, 27, 4, '9693', 37, '2023-03-02 09:12:08', 0, 0),
(61, 18, 2, '9693', 37, '2023-03-02 09:12:08', 0, 0),
(62, 40, 1, '9693', 37, '2023-03-02 09:12:08', 0, 0),
(77, 21, 1, '3650', 38, '2023-03-03 06:07:54', 0, 0),
(78, 19, 1, '2820', 38, '2023-03-03 06:20:12', 0, 0),
(79, 20, 1, '2820', 38, '2023-03-03 06:20:12', 0, 0),
(80, 23, 1, '7632', 39, '2023-03-05 16:08:00', 0, 0),
(81, 19, 1, '6725', 40, '2023-03-05 16:08:38', 0, 0),
(82, 19, 1, '3470', 41, '2023-03-05 16:10:27', 0, 0),
(83, 20, 1, '4750', 42, '2023-03-05 16:12:06', 0, 0),
(84, 19, 1, '281', 43, '2023-03-05 16:12:59', 0, 0),
(85, 21, 1, '347', 44, '2023-03-05 16:20:23', 0, 0),
(86, 19, 5, '347', 44, '2023-03-05 16:20:23', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(3, 21, 2, '5737', '2019-10-04 02:57:00', 23, 0, 0),
(4, 26, 1, '6219', '2019-10-04 02:58:34', 24, 0, 0),
(5, 25, 3, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(6, 22, 5, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(7, 27, 2, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(8, 21, 1, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(9, 20, 3, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(10, 20, 3, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(11, 26, 1, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(12, 25, 2, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(13, 26, 3, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(14, 27, 1, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(15, 22, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(16, 24, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(17, 20, 1, '555', '2019-10-09 09:50:08', 27, 0, 2),
(18, 23, 1, '5910', '2023-03-03 02:44:36', 29, 0, 2),
(19, 24, 4, '6424', '2023-03-03 02:44:43', 30, 0, 2),
(20, 23, 1, '1196', '2023-03-03 03:40:49', 31, 1, 0),
(21, 21, 1, '1196', '2023-03-03 03:40:49', 31, 1, 0),
(22, 18, 1, '6221', '2023-03-02 04:39:19', 32, 0, 0),
(23, 20, 1, '6221', '2023-03-02 04:39:19', 32, 0, 0),
(24, 20, 1, '8321', '2023-03-03 02:44:52', 33, 1, 2),
(25, 19, 1, '8321', '2023-03-03 02:44:52', 33, 1, 2),
(26, 18, 1, '7150', '2023-03-02 06:07:28', 34, 0, 0),
(27, 19, 1, '7150', '2023-03-02 06:07:28', 34, 0, 0),
(28, 20, 1, '7150', '2023-03-02 06:07:28', 34, 0, 0),
(29, 21, 1, '7314', '2023-03-02 06:17:12', 35, 0, 0),
(30, 21, 1, '1944', '2023-03-03 02:44:41', 36, 0, 2),
(31, 22, 1, '350', '2023-03-02 06:30:47', 36, 0, 0),
(32, 19, 1, '350', '2023-03-02 06:30:47', 36, 0, 0),
(33, 39, 1, '350', '2023-03-02 06:30:47', 36, 0, 0),
(34, 32, 1, '6572', '2023-03-02 07:09:41', 36, 0, 0),
(35, 24, 1, '9693', '2023-03-02 09:12:08', 37, 0, 0),
(36, 26, 3, '9693', '2023-03-02 09:12:08', 37, 0, 0),
(37, 27, 4, '9693', '2023-03-02 09:12:08', 37, 0, 0),
(38, 18, 2, '9693', '2023-03-02 09:12:08', 37, 0, 0),
(39, 40, 1, '9693', '2023-03-02 09:12:08', 37, 0, 0),
(40, 19, 1, '2962', '2023-03-02 09:12:41', 37, 0, 0),
(41, 20, 1, '6203', '2023-03-02 09:13:07', 37, 0, 0),
(42, 20, 1, '6741', '2023-03-02 09:17:51', 37, 0, 0),
(43, 19, 1, '6741', '2023-03-02 09:17:51', 37, 0, 0),
(44, 20, 1, '9502', '2023-03-02 09:19:50', 37, 0, 0),
(45, 19, 1, '9502', '2023-03-02 09:19:50', 37, 0, 0),
(46, 18, 2, '3980', '2023-03-03 02:36:00', 38, 0, 0),
(47, 21, 1, '2880', '2023-03-03 03:47:00', 38, 0, 1),
(48, 21, 1, '7888', '2023-03-03 03:46:40', 38, 0, 2),
(49, 21, 1, '2244', '2023-03-03 03:46:22', 38, 0, 2),
(50, 27, 1, '3134', '2023-03-03 03:43:31', 38, 0, 0),
(51, 19, 1, '3134', '2023-03-03 03:43:31', 38, 0, 0),
(52, 31, 1, '3134', '2023-03-03 03:43:31', 38, 0, 0),
(53, 21, 1, '7251', '2023-03-03 03:44:28', 38, 0, 0),
(54, 21, 1, '3650', '2023-03-03 06:07:54', 38, 0, 0),
(55, 19, 1, '2820', '2023-03-03 06:20:12', 38, 0, 0),
(56, 20, 1, '2820', '2023-03-03 06:20:12', 38, 0, 0),
(57, 23, 1, '7632', '2023-03-05 16:08:00', 39, 0, 0),
(58, 19, 1, '6725', '2023-03-05 16:08:38', 40, 0, 0),
(59, 19, 1, '3470', '2023-03-05 16:10:27', 41, 0, 0),
(60, 20, 1, '4750', '2023-03-05 16:12:06', 42, 0, 0),
(61, 19, 1, '281', '2023-03-05 16:12:59', 43, 0, 0),
(62, 21, 1, '347', '2023-03-05 16:20:23', 44, 0, 0),
(63, 19, 5, '347', '2023-03-05 16:20:23', 44, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(29, 'huy', '0334630884', 'ds', '56h5', 'dqh28092001@gmail.com', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(30, 'Đặng Quôc Huy', '0334630884', 'ds', 'qưdf', 'dqh28092001@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(31, 'Đặng Quôc Huy', '0334630884', 'ds', 'dưqf', 'huyhuydai059@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(32, 'Đặng Quôc Huy', '0334630884', '123', 'dừ', 'huyhuydai059@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(33, 'Đặng Quôc Huy', '0334630884', 'ds', 'dfgssdf', 'dqh28092001@gmail.com', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 1),
(34, 'haha', '0334630884', 'ds', '213', 'tien46614@donga.edu.vn', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(35, 'Huy hóng hách', '0334630884', 'ád', 'ád', 'dqh28092001@gmail.com', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 1),
(36, 'Huy hóng hách', '0334630884', 'ád', 'ád', 'dqh28092001@gmail.com', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 1),
(37, 'Đặng Quôc Huy', '0334630884', 'ds', 'sda', 'tien46614@donga.edu.vn', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(38, 'Đặng Quôc Huy', '0334630884', 'ds', 'egwe', 'tien46614@donga.edu.vn', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(39, 'Huy hóng hách', '0334630884', 'ds', 'ádfas', '0339184489', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(40, 'Đặng Quôc Huy', '0334630884', '123', 'sdafsadf', 'dqh28092001@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(41, 'Đặng Quôc Huy', '0334630884', 'ds', 'sdasd', 'huy46608@donga.edu.vn', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(42, 'Đặng Quôc Huy', '0334630884', 'ds', 'ádas', 'huyhuydai059@gmail.com', '0eaf53cc8578cf0cd2cd7b2e9a2cb605', 0),
(43, 'Đặng Quôc Huyf', 'sadfsad', 'fasfas', 'dfas', 'dfasdfa', 'b3a91fdeeff141eede04fb67686bac76', 0),
(44, 'Đặng Quôc Huy', '0334630884', 'dsqưe', 'ádasd', 'sdfas', 'd241ec8d05916285c4c5e0cc7571f35e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(17, 2, 'MaNa A10', 'dasdasdasadasd', 'dasdasddsadasds', '6000000', '5500000', 0, 0, 10, '5.jpg'),
(18, 4, 'Boruto', 'asdasd', 'dasdasd', '5000000', '4500000', 0, 0, 1, '5.jpg'),
(19, 4, 'Sony', 'asdasd', 'dasdasd', '5600000', '4800000', 0, 0, 1, '6.jpg'),
(20, 4, 'Galaxy ', 'dasdad', 'dasdas', '15000000', '14000000', 0, 0, 10, '7.jpg'),
(21, 4, 'PaLu', 'dasdad', 'dasdas', '15000000', '14000000', 0, 0, 10, '8.jpg'),
(22, 1, 'Sonay ', 'dasdad', 'dasdas', '75000000', '68000000', 0, 0, 5, '5.jpg'),
(23, 1, ' Samsung', 'dasdaddasda', 'dasdasdasd', '105000000', '94000000', 0, 0, 10, '8.jpg'),
(24, 1, 'So', 'sfsdf', 'adsf', '6000000', '5500000', 0, 0, 10, '5.jpg'),
(25, 1, 'Lato', 'sfsdf', 'adsf', '6600000', '5300000', 0, 0, 10, '6.jpg'),
(26, 1, ' Samun', 'dasdas', 'dsadas', '105000000', '99000000', 0, 0, 10, '7.jpg'),
(27, 1, 'Shark', 'dasdas', 'dsadas', '75000000', '63000000', 0, 0, 10, '8.jpg'),
(28, 2, 'Suraka', 'sadsadcs', 'cádcsacas', '1200000', '20000000', 0, 0, 10, '5.jpg'),
(29, 2, 'HuHu', 'fqwfe', 'qwqef', '2000000', '3000000', 0, 0, 10, '6.jpg'),
(30, 2, 'LaLa', 'ưqfwf', 'qfew', '3000000', '4000000', 0, 0, 10, '5.jpg'),
(31, 2, 'ChiChaRito', 'sadsadfs', 'vádvas', '3000000', '3000000', 0, 0, 10, '7.jpg'),
(32, 2, 'MaMa', 'sdfsdvs', 'svsadv', '400000', '5000000', 0, 0, 10, '8.jpg'),
(33, 3, 'LuKu', 'fasdf', 'ádfasdf', '340000', '2900000', 0, 0, 10, '5.jpg'),
(34, 3, 'PhaLa', 'ádfasd', 'ádfasdf', '30000', '5900000', 0, 0, 10, '6.jpg'),
(35, 3, 'TuTo', 'qègqwefqw', 'ưefvwqv', '400000', '500000', 0, 0, 10, '7.jpg'),
(36, 3, 'QaTa', 'sadvsa', 'qưevwq', '400000', '500000', 0, 0, 10, '8.jpg'),
(37, 3, 'LukaKu', 'ăevvasdv', 'ádvasas', '400000', '5400000', 0, 0, 10, '6.jpg'),
(38, 3, 'HaHu', 'vádvasv', 'ávdsadvasd', '50000', '900000', 0, 0, 10, '8.jpg'),
(39, 1, 'PoPo', 'fvqwevc', 'vqwevwq', '300000', '800000', 0, 0, 10, '7.jpg'),
(40, 1, 'MaLo', 'vqwveqw', 'vqwevwqev', '500000', '6000000', 0, 0, 10, '8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userphp`
--

CREATE TABLE `userphp` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `userphp`
--

INSERT INTO `userphp` (`id`, `username`, `password`, `name`, `email`, `usertype`) VALUES
(18, 'Huy hóng hách', '123', 'Đặng Quôc Huy', 'dqh28092001@gmail.com', 'user'),
(19, 'dangquochuy', '123', 'Đặng Quôc Huy', 'dqh28092001@gmail.com', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `userphp`
--
ALTER TABLE `userphp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `userphp`
--
ALTER TABLE `userphp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
