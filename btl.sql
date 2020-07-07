-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2020 at 12:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`, `adminName`, `adminEmail`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Tuanamdin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `comment_createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `comment_content` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`commentId`, `userId`, `productId`, `comment_createdDate`, `comment_content`, `type`) VALUES
(1, 1, 1, '2020-07-05 00:20:32', 'áddddddddddddddddddddddddddddsad', 1),
(2, 1, 2, '2020-07-05 00:21:49', 'áddddddddddddddddddddddddddddsad', 1),
(3, 15, 28, '2020-07-06 00:34:26', 'đẹp quá', 1),
(4, 15, 28, '2020-07-06 00:53:17', 'thêm 1 cái đẹp', 1),
(5, 15, 24, '2020-07-06 00:54:50', 'chạy xe gì đó', 1),
(6, 15, 24, '2020-07-06 00:55:19', 'có diệp tui sẽ thử', 1),
(7, 16, 24, '2020-07-06 01:00:14', 'tui là tuấn', 1),
(8, 17, 27, '2020-07-06 21:21:05', '123123\r\n', 1),
(9, 17, 27, '2020-07-06 21:21:13', 'abc', 1),
(10, 15, 24, '2020-07-07 04:03:43', 'alo', 1),
(11, 15, 25, '2020-07-07 04:23:42', 'What to expects\r\n', 1),
(12, 15, 25, '2020-07-07 04:24:59', 'What to expects\r\n', 1),
(13, 26, 23, '2020-07-07 05:21:44', 'ko ai cmt vậy', 1),
(14, 22, 27, '2020-07-08 03:09:56', 'aloooo', 1),
(15, 22, 26, '2020-07-08 05:03:12', 'Xin chào', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contactId` int(11) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `contactPhone` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
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
-- Table structure for table `tbl_product`
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
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `vote_1s`, `vote_2s`, `vote_3s`, `vote_4s`, `vote_5s`, `productName`, `productImage`, `product_desc`, `vitriId`, `productPrice`, `type`) VALUES
(23, 0, 0, 0, 0, 0, 'Câu cá ', '305cd579b9.jpg', 'Câu con cá', 10, 12000, 1),
(24, 0, 0, 0, 0, 0, 'Chạy xe', 'c9c1019ffa.jpg', 'chạy chiếc xe', 11, 23000, 1),
(25, 0, 0, 0, 0, 0, 'Trải nghiệm chụp ảnh', '811fccb271.jpg', 'kiến thức chụp ảnh', 12, 10400, 1),
(26, 0, 0, 0, 0, 0, 'Chèo thuyền trên biển', '6cf8f20f37.jpg', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 12, 45000, 1),
(27, 0, 0, 0, 0, 0, 'Ngắm hoàng hôn', '0f9204be01.jpg', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 9, 5000, 1),
(28, 0, 0, 0, 0, 0, 'Ngắm chim', '9c02f8baa1.jpg', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 13, 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) NOT NULL,
  `sliderImage` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `sliderImage`, `type`) VALUES
(1, 'slider 1', '131a9667b2.gif', 1),
(4, 'slider 3', 'f1d0156c66.jpg', 1),
(6, 'slider 5', '3d4b9309df.jpg', 0),
(7, 'slider 8', 'e5777ee16e.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userUser` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `userImage` varchar(255) NOT NULL DEFAULT 'defaultavatar.png',
  `userPhone` varchar(15) DEFAULT 'No infomation',
  `userAddress` varchar(255) DEFAULT 'No infomation',
  `userInsta` varchar(255) DEFAULT '',
  `userFb` varchar(255) DEFAULT '',
  `userTwitter` varchar(255) DEFAULT '',
  `userCreateOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `userName`, `userUser`, `userPass`, `userEmail`, `type`, `userImage`, `userPhone`, `userAddress`, `userInsta`, `userFb`, `userTwitter`, `userCreateOn`) VALUES
(15, 'kiệt', 'kietteik', '81dc9bdb52d04dc20036dbd8313ed055', 'kiet@gmail.com', 1, '73fd9f800e.jpg', 'No infomation', 'No infomation', '', '', '', '0000-00-00 00:00:00'),
(16, 'tuan', 'tuan2', '202cb962ac59075b964b07152d234b70', 'tuan@a.di', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '0000-00-00 00:00:00'),
(17, '1233', 'test', '202cb962ac59075b964b07152d234b70', 'kiet@1', 0, '73fd9f800e.jpg', '$phone', '$address', '', 'https://www.fb.com/kietteik', '', '2020-07-06 00:00:00'),
(18, 'ssone', 'kietteik1', '202cb962ac59075b964b07152d234b70', 'som@gmale.com', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 00:00:00'),
(19, '$name', '$username', '$password', '$email', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-07 03:06:45'),
(20, 'asd', 'kit2', '202cb962ac59075b964b07152d234b70', 'qwd@qwe.qw', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 20:11:25'),
(21, 'askjdb', 'k3', '202cb962ac59075b964b07152d234b70', 'jkbd@kjadsk.wq', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 20:18:56'),
(22, 'qwe', 'k2', '202cb962ac59075b964b07152d234b70', 'q@qe.q', 0, 'ade857909f.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 20:20:25'),
(23, 'qwe', 'kiasd', '202cb962ac59075b964b07152d234b70', 'qwe@1.qwe', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 20:42:16'),
(24, '77', '77', '202cb962ac59075b964b07152d234b70', '7@awd.w', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '#', '#', '#', '2020-07-06 20:54:04'),
(25, 'mtfk', 'ki4', '202cb962ac59075b964b07152d234b70', 'k@gmail.com', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '', '', '', '2020-07-07 04:04:31'),
(26, 'k12', 'k12', '202cb962ac59075b964b07152d234b70', 'kd@gmail.com', 0, '73fd9f800e.jpg', 'No infomation', 'No infomation', '', '', '', '2020-07-07 05:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vitri`
--

CREATE TABLE `tbl_vitri` (
  `vitriId` int(11) NOT NULL,
  `vitriName` varchar(255) NOT NULL,
  `vitriImage` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vitri`
--

INSERT INTO `tbl_vitri` (`vitriId`, `vitriName`, `vitriImage`, `type`) VALUES
(9, 'Hà Giang', '055cead28e.jpg', 1),
(10, 'An Giang', '0c819b1545.jpg', 1),
(11, 'Hội An', '4f020cdfc6.jpg', 1),
(12, 'Phú Quốc', '4404217cdb.jpg', 1),
(13, 'Hà Nội', 'ac48cb9542.jpg', 1),
(14, 'Vũng Tàu', 'ef0671166e.jpg', 1),
(15, 'Huế', '8975a15acc.jpg', 1),
(16, 'Bình Định', '744958dd1f.jpg', 1),
(17, 'Ninh Bình', '874505a5a4.jpg', 1),
(18, 'Clone', '265e6e38ab.jpg', 1),
(19, 'Clone2', 'b3ed3cc22d.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`),
  ADD UNIQUE KEY `sliderName` (`sliderName`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userUser` (`userUser`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  ADD PRIMARY KEY (`vitriId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  MODIFY `vitriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
