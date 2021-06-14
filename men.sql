-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 04:47 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `men`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `prd_img` varchar(50) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `prd_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `prd_price` varchar(5) NOT NULL,
  `prd_status` int(4) NOT NULL,
  `prd_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prd_img`, `prd_name`, `prd_price`, `prd_status`, `prd_detail`) VALUES
(22, '001.jpg', 'เสื้อกันหนาวสีเทา', '375', 4, 'เสื้อกันหนาวสีเทา'),
(23, '002.jpg', 'เสื้อกันหนาวสีดำ', '375', 4, 'เสื้อกันหนาวสีดำ'),
(24, '003.jpg', 'เสื้อกันหนาวคราม', '375', 4, 'เสื้อกันหนาวสีคราม'),
(25, '004.jpg', 'เสื้อกันหนาวลายดำตัดขาว', '375', 4, 'เสื้อกันหนาวลายดำตัดขาว'),
(26, '005.jpg', 'เสื้อกันหนาวสีดำ', '375', 4, 'เสื้อกันหนาวลายสีดำ'),
(27, '006.jpg', 'เสื้อกันหนาวสีขาวแถบดำ', '375', 4, 'เสื้อกันหนาวสีขาวแถบดำ'),
(28, '007.jpg', 'เสื้อกันหนาวสีขาวเลขสอง', '375', 4, 'เสื้อกันหนาวสีขาวเลขสอง'),
(29, '008.jpg', 'เสื้อกันหนาวสีเทา', '375', 4, 'เสื้อกันหนาวสีเทา'),
(30, '009.jpg', 'เสื้อกันหนาวสีน้ำเงินเข้ม', '375', 4, 'เสื้อกันหนาวสีน้ำเงินเข้ม'),
(31, '010.jpg', 'เสื้อกันหนาวสีดำ', '375', 4, 'เสื้อกันหนาวสีดำ'),
(32, '1.jpg', 'เสื้อฮาวายสีขาว', '405', 1, 'เสื้อฮาวายสีขาว'),
(33, '2.jpg', 'เสื้อฮาวายสีน้ำตาล', '385', 1, 'เสื้อฮาวายสีน้ำตาล'),
(34, '3.jpg', 'เสื้อฮาวายสีเขียวอ่อน', '385', 1, 'เสื้อฮาวายสีเขียวอ่อน'),
(35, '4.jpg', 'เสื้อฮาวายสีน้ำเงินเข้ม', '345', 1, 'เสื้อฮาวายสีน้ำเงินเข้ม'),
(36, '5.jpg', 'เสื้อฮาวายสีดำ', '460', 1, 'เสื้อฮาวายสีดำ'),
(37, '6.jpg', 'เสื้อฮาวายสีเขียวลายใบไม้', '460', 1, 'เสื้อฮาวายสีเขียวลายใบไม้'),
(38, '7.jpg', 'เสื้อฮาวายสีน้ำตาลลายใบไม้', '460', 1, 'เสื้อฮาวายสีน้ำตาลลายใบไม้'),
(39, '8.jpg', 'เสื้อฮาวายลายทะเล', '460', 1, 'เสื้อฮาวายลายทะเล'),
(40, '9.jpg', 'เสื้อฮาวายสีดำ', '460', 1, 'เสื้อฮาวายสีดำ'),
(41, '10.jpg', 'เสื้อฮาวายสีน้ำตาลอ่อน', '460', 1, 'เสื้อฮาวายสีน้ำตาลอ่อน'),
(42, '01.jpg', 'เสื้อยืดคอกลมสีดำลายUSA', '255', 2, 'เสื้อยืดคอกลมสีดำลายUSA'),
(43, '02.jpg', 'เสื้อยืดคอกลมลายกูล', '275', 2, 'เสื้อยืดคอกลมลายกูล'),
(44, '03.jpg', 'เสื้อยืดคอกลมลายมิคุ', '275', 2, 'เสื้อยืดคอกลมลายมิคุ'),
(45, '04.jpg', 'เสื้อยืดคอกลมลายสไปเดอร์แมน', '225', 2, 'เสื้อยืดคอกลมลายมิคุ'),
(46, '05.jpg', 'เสื้อยืดคอกลมสีดำ', '225', 2, 'เสื้อยืดคอกลม'),
(47, '06.jpg', 'เสื้อยืดคอกลมสีดำลายUSA', '270', 2, 'เสื้อยืดคอกลม'),
(48, '07.jpg', 'เสื้อยืดคอกลมสีเลือดหมู', '270', 2, 'เสื้อยืดคอกลม'),
(49, '08.jpg', 'เสื้อยืดคอกลมสีเนื้อเงิน', '270', 2, 'เสื้อยืดคอกลม'),
(50, '09.jpg', 'เสื้อยืดคอกลมสีเทา', '270', 2, 'เสื้อยืดคอกลม'),
(51, '000010.jpg', 'เสื้อยืดคอกลมสีดำลายฟ้า', '270', 2, 'เสื้อยืดคอกลม'),
(52, '0001.jpg', 'เสื้อยืดคอวีสีเทา', '199', 3, 'เสื้อยืดคอวี'),
(53, '0002.jpg', 'เสื้อยืดคอวีสีฟ้าออ่น', '210', 3, 'เสื้อยืดคอวี'),
(54, '0003.jpg', 'เสื้อยืดคอวีสีน้ำตาลอ่อน', '220', 3, 'เสื้อยืดคอวี'),
(55, '0004.jpg', 'เสื้อยืดคอวีสีขาว', '189', 3, 'เสื้อยืดคอวี'),
(56, '0005.jpg', 'เสื้อยืดคอวีสีดำ', '180', 3, 'เสื้อยืดคอวี'),
(57, '0006.jpg', 'เสื้อยืดคอวีสีดำ', '240', 3, 'เสื้อยืดคอวี'),
(58, '0007.jpg', 'เสื้อยืดคอวีสีขาวแดง', '240', 3, 'เสื้อยืดคอวี'),
(59, '0008.jpg', 'เสื้อยืดคอวีสีดำ', '255', 3, 'เสื้อยืดคอวี'),
(60, '0009.jpg', 'เสื้อยืดคอวีสีเขียวแก่', '215', 3, 'เสื้อยืดคอวี'),
(61, '000000010.jpg', 'เสื้อยืดคอวีสีเลือดหมู', '215', 3, 'เสื้อยืดคอวี');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` int(1) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `name`, `address`, `email`, `phone`, `order_status`, `order_date`) VALUES
(25, 'ugtfyfgu', 'fujghgguuyu', 'jaygame665@gmail.com', '45464747775', 1, '2018-03-21 15:10:52'),
(24, 'dfhddrd', 'cfdfhd', 'jaygame665@gmail.com', '34264', 1, '2018-03-21 11:24:08'),
(23, 'eetreye', 'eruqawtrwet', 'jaygame665@gmail.com', '35263457', 1, '2018-03-19 16:58:17'),
(22, 'พงt145', 'etert', 'jaygame665@gmail.com', '09342344444', 1, '2018-03-19 12:20:44'),
(21, 'ำพดไำพ', 'wuioiuytr', 'jaygame665@gmail.com', '1234', 1, '2018-03-19 12:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `d_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`d_id`, `order_id`, `p_id`, `p_qty`, `total`) VALUES
(15, 25, 0, 0, 0),
(14, 25, 0, 0, 0),
(13, 24, 0, 0, 0),
(12, 23, 0, 0, 0),
(11, 23, 0, 0, 0),
(10, 22, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tm_member`
--

CREATE TABLE `tm_member` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `m_level` int(1) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางสมาชิก';

--
-- Dumping data for table `tm_member`
--

INSERT INTO `tm_member` (`m_id`, `m_username`, `m_password`, `m_name`, `Email`, `Address`, `m_level`, `datesave`) VALUES
(1, 'jaygame5', '032287123', 'นาย ภูวดล นิลอ่างทอง', '', '', 1, '2018-03-08 06:45:05'),
(2, 'dturersg', 'sdgfhturta', 'sfafdghfjg', '', '', 2, '2018-03-08 06:45:19'),
(3, 'jaygame6', '032287123', 'fwetwfdsf', '', '', 2, '2018-03-08 07:16:04'),
(4, '123456', '123456789', 'Ooooooooooo', '', '', 0, '2018-03-20 05:01:58'),
(5, '987654321', '123456789', 'นาย ภูวดล นิลอ่างทอง', 'jaygame665@gmail.com', 'wedfejrgosioghioghrioh', 0, '2018-03-21 06:42:46'),
(6, 'ploy', '1203', 'rgreg', 'rjbaerjehOPE', ' REBABN', 0, '2018-03-22 04:25:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tm_member`
--
ALTER TABLE `tm_member`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tm_member`
--
ALTER TABLE `tm_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
