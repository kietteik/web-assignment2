-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`, `adminName`, `adminEmail`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Tuanamdin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `comment_createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `comment_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contactId` int(11) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `contactPhone` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`contactId`, `contactName`, `contactEmail`, `contactPhone`, `type`) VALUES
(1, 'Liên hệ 1', 'tuan@tuan.tuan', '0123456789', 1),
(2, 'Liên hệ 2', 'tuan@tuan.tuan', '0917016503', 0),
(3, 'Liên hệ 3', 'tuan@tuan.tuan', '0917016503', 0),
(4, 'Liên hệ 4', 'tuan@tuan.tuan', '0917016503', 0),
(5, 'Liên hệ 9', 'tuan@tuan.tuan', '0917016503', 0),
(6, 'Liên hệ 11', 'tuan@tuan.tuan', '0917016503', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `vote_1s` int(11) NOT NULL DEFAULT 0,
  `vote_2s` int(11) NOT NULL DEFAULT 0,
  `vote_3s` int(11) NOT NULL DEFAULT 0,
  `vote_4s` int(11) NOT NULL DEFAULT 0,
  `vote_5s` int(11) NOT NULL DEFAULT 0,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `product_desc` varchar(2550) NOT NULL,
  `vitriId` int(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `vote_1s`, `vote_2s`, `vote_3s`, `vote_4s`, `vote_5s`, `productName`, `productImage`, `product_desc`, `vitriId`, `productPrice`, `type`) VALUES
(1, 1, 2, 3, 5, 5, 'Phố cổ Hội An', '6a7a2283c4.gif', '<p>Phố cổ Hội An l&agrave; nơi v&ocirc; c&ugrave;ng đẹp để cho một chuyển đi tham quan.&aacute;dasdadadasdasda</p>', 1, 80000, 1),
(3, 0, 0, 0, 0, 0, 'Phố cổ Hội An 2', 'ff77c82b89.gif', '<p>hội anhội anhội anhội anhội an</p>', 1, 80000, 1),
(5, 0, 0, 0, 0, 0, '1', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(6, 0, 0, 0, 0, 0, '2', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(7, 0, 0, 0, 0, 0, '3', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(8, 0, 0, 0, 0, 0, '4', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(9, 0, 0, 0, 0, 0, '5', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(10, 0, 0, 0, 0, 0, '5', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(11, 0, 0, 0, 0, 0, '6', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(12, 0, 0, 0, 0, 0, '7', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(13, 0, 0, 0, 0, 0, '8', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(14, 0, 0, 0, 0, 0, '9', 'ádasdsa', 'sdasdasda', 1, 0, 0),
(15, 0, 0, 0, 0, 0, '10', 'ádasdsa', '<p>sdasdasda</p>\r\n', 1, 0, 0),
(16, 0, 0, 0, 0, 0, 'Phố cổ Hội An', '27a039bc61.jpg', '<p><em>&aacute;dasdấdasd<strong>&aacute;dasdadadsad</strong></em></p>\r\n', 2, 80000, 1),
(17, 0, 0, 0, 0, 0, 'Sản phẩm 1', '77e2e32214.jpg', '<p>adsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafassdfsdfadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafasadsdsdfsaaaaaaaaaaaaaaaaaaaaaaaaafsdfsafas</p>\r\n', 2, 80000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) NOT NULL,
  `sliderImage` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `sliderImage`, `type`) VALUES
(1, 'slider 1', '131a9667b2.gif', 1),
(4, 'slider 3', 'f1d0156c66.jpg', 1),
(6, 'slider 5', '3d4b9309df.jpg', 0),
(7, 'slider 8', 'e5777ee16e.gif', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userUser` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `userName`, `userUser`, `userPass`, `userEmail`, `type`) VALUES
(1, 'Nguyễn Đức Tuấn', 'tuantuan', 'tuantuan', 'tuan@tuan.tuan', 1),
(2, 'Nguyễn Tuấn Kiệt', 'kietkiet', 'kietkiet', 'kiet@kiet.kiet', 1),
(3, 'Tuấn Tuấn', 'tuan', 'tuan', 'tuan@tuan.tuan', 0),
(4, 'admin', 'tuan1', 'admin', 'tuan@tuan.tuan', 0),
(9, 'Nguyễn Đức Tuấn 1', 'tuantuan1', 'tuantuan', 'tuan@tuan.tuan', 1),
(10, 'Nguyễn Đức Tuấn 2', 'tuantuan2', 'tuantuan', 'tuan@tuan.tuan', 1),
(11, 'Nguyễn đức tuấn', 'tuantuan3', 'tuantuan', 'tuan@tuan.tuan', 1),
(12, 'Nguyễn đức tuấn 4', 'tuantuan4', 'tuantuan', 'tuan@tuan.tuan', 1),
(13, 'Nguyễn đức tuấn 5', 'tuantuan5', 'tuantuan', 'tuan@tuan.tuan', 1),
(14, 'Nguyễn đức tuấn 6', 'tuantuan6', 'tuantuan', 'tuan@tuan.tuan', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vitri`
--

CREATE TABLE `tbl_vitri` (
  `vitriId` int(11) NOT NULL,
  `vitriName` varchar(255) NOT NULL,
  `vitriImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_vitri`
--

INSERT INTO `tbl_vitri` (`vitriId`, `vitriName`, `vitriImage`) VALUES
(1, 'Hội An', ''),
(2, 'Đà Nẵng', ''),
(4, 'Lạng Sơn 2', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`userId`,`productId`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`),
  ADD UNIQUE KEY `sliderName` (`sliderName`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userUser` (`userUser`);

--
-- Chỉ mục cho bảng `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  ADD PRIMARY KEY (`vitriId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  MODIFY `vitriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
