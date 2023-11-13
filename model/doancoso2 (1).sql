-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 05:33 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancoso2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `mota_danhmuc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id_danhmuc`, `ten_danhmuc`, `mota_danhmuc`) VALUES
(13, 'Chuột gaming ', ' một thiết bị đầu vào máy tính được thiết kế đặc biệt để đáp ứng nhu cầu chơi game của người dùng'),
(14, 'Tai nghe', 'Tai nghe là một thiết bị âm thanh được đeo trên đầu hoặc gắn vào tai để người nghe có thể trải nghiệm âm thanh một cách riêng tư và chất lượng'),
(15, 'Loa máy tính', '1.Logitech:\r\nLogitech là một trong những nhà sản xuất nổi tiếng về các sản phẩm phụ kiện máy tính, bao gồm loa máy tính và tai nghe. Các sản phẩm của Logitech thường được đánh giá cao về chất lượng âm thanh và tính năng.\r\n2.Bose:\r\nBose là một trong những thương hiệu nổi tiếng trong lĩnh vực âm thanh, tập trung vào cả tai nghe và loa. Sản phẩm của Bose thường được biết đến với chất lượng âm thanh xuất sắc và thiết kế hiện đại.'),
(16, 'Loa máy tính', '1.Logitech:\r\nLogitech là một trong những nhà sản xuất nổi tiếng về các sản phẩm phụ kiện máy tính, bao gồm loa máy tính và tai nghe. Các sản phẩm của Logitech thường được đánh giá cao về chất lượng âm thanh và tính năng.\r\n2.Bose:\r\nBose là một trong những thương hiệu nổi tiếng trong lĩnh vực âm thanh, tập trung vào cả tai nghe và loa. Sản phẩm của Bose thường được biết đến với chất lượng âm thanh xuất sắc và thiết kế hiện đại.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(11) NOT NULL,
  `soluong_sanpham` int(11) NOT NULL,
  `giasp` double NOT NULL,
  `giasp_saukm` double NOT NULL,
  `hinhanh_sanpham` text NOT NULL,
  `mota_sanpham` text NOT NULL,
  `id_danhmuc_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `lk_sanpahm_danhmuc` (`id_danhmuc_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpahm_danhmuc` FOREIGN KEY (`id_danhmuc_sanpham`) REFERENCES `danhmucsanpham` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
