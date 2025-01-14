-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_ivydemo`
--
CREATE DATABASE IF NOT EXISTS `website_ivydemo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `website_ivydemo`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `category_id`, `brand_name`) VALUES
(3, 28, 'NEW ARRIVALS'),
(4, 28, '50k đến 100k'),
(5, 28, '150k đến 350k'),
(6, 28, 'Từ 400k'),
(7, 27, 'SALE upto 50%'),
(8, 27, 'Áo'),
(9, 27, 'Đầm'),
(10, 27, 'Chân váy'),
(11, 27, 'Quần'),
(12, 30, 'Về IVY moda'),
(13, 30, 'Fashion Show'),
(14, 30, 'Hoạt động cộng đồng'),
(15, 25, 'NEW ARRIVALS'),
(16, 26, 'NEW ARRIVALS'),
(17, 25, 'ÁO'),
(18, 25, 'Áo sơmi'),
(19, 25, 'Áo thun'),
(20, 25, 'Áo croptop'),
(21, 25, 'Áo peplum'),
(22, 25, 'SET BỘ'),
(23, 25, 'Set bộ công sở'),
(24, 25, 'Set bộ co-ords'),
(25, 25, 'Set bộ thun/ len'),
(26, 25, 'CHÂN VÁY'),
(27, 25, 'Chân váy bút chì'),
(28, 25, 'Chân váy chữ A'),
(29, 25, 'Chân váy jeans'),
(31, 25, 'Senora - Đầm dạ hội'),
(32, 25, 'ĐẦM/ ÁO DÀI'),
(33, 25, 'Váy đầm nữ'),
(34, 25, 'Đầm công sở'),
(35, 25, 'Đầm voan hoa/ maxi'),
(36, 25, 'Áo dài'),
(37, 26, 'ÁO'),
(38, 26, 'Áo thun'),
(39, 26, 'Áo polo'),
(40, 26, 'Áo sơ mi'),
(41, 26, 'Áo khoác/vest'),
(42, 26, 'QUẦN NAM'),
(43, 26, 'Quần dài'),
(44, 26, 'Quần lửng/short'),
(45, 26, 'PHỤ KIỆN'),
(46, 26, 'Phụ kiện'),
(52, 32, 'Khau trang'),
(57, 29, 'ROSA CHARM'),
(58, 29, 'WHISPERS OF AUTUMN'),
(59, 29, 'THE DREAMER '),
(60, 29, 'MODERN STYLE '),
(61, 29, 'ETERNAL ELEGANCE'),
(62, 29, 'OCEAN JEWELS'),
(63, 29, 'URBAN CHIC'),
(64, 29, 'ARTISANAL DELICATE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(25, 'NỮ'),
(26, 'NAM'),
(27, 'SIÊU SALE T9'),
(28, 'FINAL SALE TỪ 50K'),
(29, 'BỘ SƯU TẬP'),
(30, 'VỀ CHÚNG TÔI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_price_new` varchar(255) NOT NULL,
  `product_desc` varchar(5000) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_price`, `product_price_new`, `product_desc`, `product_img`) VALUES
(20, 'Chân váy Tuysi A 2 lớp', 25, 26, '850000', '300000', '&lt;p&gt;Ch&amp;acirc;n v&amp;aacute;y Tuysi A 2 lớp&lt;/p&gt;\\r\\n', 'prd2-1.webp'),
(21, 'Áo vest Pink Sleeves JACQUARD', 25, 21, '2190000', '650000', '&lt;p&gt;&amp;Aacute;o vest Pink Sleeves JACQUARD&lt;/p&gt;\\r\\n', 'prd2-3.webp'),
(22, 'Đầm lụa Allure họa tiết', 25, 35, '1790000', '55000', '&lt;p&gt;Đầm lụa Allure họa tiết&lt;/p&gt;\\r\\n', 'prd2-5.webp'),
(23, 'Ivy moda', 30, 14, '9999999', '89999', '&lt;p&gt;Signature&lt;/p&gt;\\r\\n', 'aaaaaaaaaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_img_desc`
--

CREATE TABLE `tbl_product_img_desc` (
  `product_id` int(11) NOT NULL,
  `product_img_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product_img_desc`
--

INSERT INTO `tbl_product_img_desc` (`product_id`, `product_img_desc`) VALUES
(20, 'prd2-1.1.webp'),
(21, 'prd2-3.1.webp'),
(22, 'prd2-5.1.webp'),
(23, '11111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `password`, `role`) VALUES
(2, 'Phạm Văn A', 'Hà Nội', NULL, 'user1', '456', 0),
(8, 'admin', 'Hà Nội', 'admin123@gmail.com', 'admin', '123', 1),
(10, 'Phạm Văn B', 'Hà Nội', 'user2@gmail.com', 'user2', '456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
