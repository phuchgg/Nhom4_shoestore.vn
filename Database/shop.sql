-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 06:50 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `nn_admin`
--

CREATE TABLE `nn_admin` (
  `id_admin` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name_admin` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_admin`
--

INSERT INTO `nn_admin` (`id_admin`, `password`, `email`, `name_admin`) VALUES
(100, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin@gmail.com', 'Hoàng Gia Phúc'),
(101, '6d681cd9fa5ffab263b219c303f61a0f438716b6', 'user@localhost.com', 'Le van User');

-- --------------------------------------------------------

--
-- Table structure for table `nn_answer`
--

CREATE TABLE `nn_answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `order` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_answer`
--

INSERT INTO `nn_answer` (`id`, `question_id`, `content`, `order`, `vote`) VALUES
(1, 1, 'Nokia', 1, 8),
(2, 1, 'SamSung', 2, 3),
(3, 1, 'LG', 3, 3),
(4, 1, 'IPhone', 4, 2),
(5, 2, 'Đẹp', 1, 13),
(6, 2, 'Bình thường', 2, 4),
(7, 2, 'Không đẹp lắm', 3, 1),
(8, 2, 'Xấu', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nn_category`
--

CREATE TABLE `nn_category` (
  `id_cat` int(255) NOT NULL,
  `name_cat` varchar(255) NOT NULL,
  `order` int(4) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_category`
--

INSERT INTO `nn_category` (`id_cat`, `name_cat`, `order`, `active`) VALUES
(1, 'Giày chạy bộ', 1, 1),
(2, 'Giày tập gym', 2, 1),
(3, 'Giày thể thao', 3, 1),
(4, 'Giày đi bộ', 4, 1),
(5, 'Giày leo núi', 5, 1),
(6, 'Giày bóng rổ', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nn_coupon`
--

CREATE TABLE `nn_coupon` (
  `name_cou` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `active_cou` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_coupon`
--

INSERT INTO `nn_coupon` (`name_cou`, `discount`, `active_cou`, `note`) VALUES
('KM-10', 10, 1, 'Mã được áp dụng!'),
('KM-20', 20, 1, 'Mã được áp dụng!'),
('KM-30', 30, 1, 'Mã được áp dụng!'),
('KM-40', 40, 0, 'Mã khuyến mãi này đã hết hạn sử dụng!');

-- --------------------------------------------------------

--
-- Table structure for table `nn_department`
--

CREATE TABLE `nn_department` (
  `id_der` int(255) NOT NULL,
  `name_der` varchar(255) NOT NULL,
  `order` int(4) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_department`
--

INSERT INTO `nn_department` (`id_der`, `name_der`, `order`, `active`) VALUES
(2, 'Nữ', 2, 1),
(1, 'Nam', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nn_online`
--

CREATE TABLE `nn_online` (
  `id` varchar(50) NOT NULL,
  `last_access` int(11) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_online`
--

INSERT INTO `nn_online` (`id`, `last_access`, `user`) VALUES
('65k6ks411gg7q7hesos2nopq53', 1504744396, '');

-- --------------------------------------------------------

--
-- Table structure for table `nn_order`
--

CREATE TABLE `nn_order` (
  `id_order` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `ship_at` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0:Mới đặt, 1:Đã xác nhận,2:Đang giao,3:Đã giao,4:Hoàn tất,-1:Hủy'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_order`
--

INSERT INTO `nn_order` (`id_order`, `user_id`, `create_at`, `name`, `address`, `ship_at`, `email`, `mobile`, `remark`, `status`) VALUES
(50, 115, '2018-06-21 10:44:32', 'qwe', 'rrrr, rrrr ,rr', '0000-00-00 00:00:00', 'tuongnguyen0401@yahoo.com', '12', '', 0),
(48, 115, '2018-06-20 19:16:28', 'Nguyen A', '1, 3 ,weqw', '0000-00-00 00:00:00', 'NguyenA@gmail.com', '34', '', 2),
(47, 118, '2018-06-20 19:14:38', 'Trần D', '1, 3 ,HCM', '0000-00-00 00:00:00', 'TranD@gmail.com', '34', '', 1),
(45, 116, '2018-06-20 19:02:26', 'Lê B', '123, PN ,HCM', '0000-00-00 00:00:00', 'LEB@gmail.com', '123123', '', 0),
(44, 117, '2018-06-20 19:00:58', 'Phan C', '123, 3 ,HCM', '0000-00-00 00:00:00', 'PhanC@gmail.com', '12454', '', 0),
(43, 117, '2018-06-20 19:00:08', 'Phan C', '123, 2 ,HCM', '0000-00-00 00:00:00', 'PhanC@gmail.com', '34', '', 0),
(42, 117, '2018-06-20 18:59:31', 'Phan C', '1, 5 ,HCM', '0000-00-00 00:00:00', 'PhanC@gmail.com', '123123213', '', 0),
(41, 115, '2018-06-20 18:58:11', 'Nguyen A', '2321, 2 ,HCM', '0000-00-00 00:00:00', 'NguyenA@gmail.com', '2323213', '', 3),
(46, 118, '2018-06-20 19:13:53', 'Trần D', '23, PN ,HCM', '0000-00-00 00:00:00', 'TranD@gmail.com', '90908080', '', 0),
(40, 115, '2018-06-20 18:56:43', 'Nguyen A', '1, 1 ,HCM', '0000-00-00 00:00:00', 'NguyenA@gmail.com', '12323', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nn_order_detail`
--

CREATE TABLE `nn_order_detail` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_order_detail`
--

INSERT INTO `nn_order_detail` (`order_id`, `product_id`, `qty`, `price`) VALUES
(49, 3, 1, '3500000.0000'),
(48, 12, 1, '2500000.0000'),
(49, 15, 10, '8900000.0000'),
(48, 16, 1, '680000.0000'),
(47, 21, 2, '2780000.0000'),
(46, 31, 1, '5300000.0000'),
(45, 28, 1, '4300000.0000'),
(45, 3, 1, '3500000.0000'),
(45, 2, 1, '2600000.0000'),
(45, 1, 1, '3200000.0000'),
(44, 4, 1, '890000.0000'),
(44, 14, 3, '9900000.0000'),
(43, 23, 1, '3200000.0000'),
(42, 25, 4, '14400000.0000'),
(42, 28, 2, '8600000.0000'),
(42, 12, 1, '2500000.0000'),
(41, 26, 1, '2990000.0000'),
(41, 10, 4, '18000000.0000'),
(41, 27, 6, '9000000.0000'),
(40, 19, 5, '11500000.0000'),
(40, 2, 5, '13000000.0000');

-- --------------------------------------------------------

--
-- Table structure for table `nn_product`
--

CREATE TABLE `nn_product` (
  `id_pro` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `price_old` decimal(10,0) DEFAULT NULL,
  `desc` text,
  `detail` text,
  `img_url` varchar(255) NOT NULL,
  `img_url1` varchar(255) DEFAULT NULL,
  `img_url2` varchar(255) DEFAULT NULL,
  `img_url3` varchar(255) DEFAULT NULL,
  `create_at` date NOT NULL,
  `qty` int(255) NOT NULL DEFAULT '0',
  `note` varchar(500) DEFAULT NULL,
  `sold` int(255) NOT NULL DEFAULT '0',
  `view` int(255) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL,
  `brand` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_product`
--

INSERT INTO `nn_product` (`id_pro`, `category_id`, `department_id`, `name_pro`, `price`, `price_old`, `desc`, `detail`, `img_url`, `img_url1`, `img_url2`, `img_url3`, `create_at`, `qty`, `note`, `sold`, `view`, `active`, `brand`) VALUES
(1, 1, 2, 'Adidas Pureboost X Clima ', '3200000.0000', '3400000', '•	Loại : Giày tự nhiên mang lại sự linh hoạt và cảm giác mặt đất với đệm tối thiểu\r\n•	Boost là loại đệm phản ứng nhanh nhất của chúng tôi bao giờ hết: Bạn càng cung cấp nhiều năng lượng, bạn càng nhận được nhiều\r\n•	Đan trên với các khu thiết kế cho phù hợp thích nghi và cảm giác tự nhiên cao cấp; Climacool cung cấp khả năng làm mát 360 độ cho toàn bộ bàn chân; Khu vực thông gió được thiết kế ở phía trên để thở tối đa\r\n•	Lớp phủ hàn ở bảng điều khiển quý để hỗ trợ và ổn định ở giữa; Có thể tháo rời đúc sockliner\r\n•	Các khuôn vòm thích ứng với hình dạng của bàn chân của bạn cho một phù hợp nén độc đáo; Được thiết kế sử dụng thông tin chi tiết ARAMIS cho phù hợp được cải thiện\r\n•	Trọng lượng: 222g; Midsole : 8 mm (gót chân: 25,5 mm, ngón chân cái: 17,5 mm)\r\n', NULL, 'a10.jpg', 'a11.jpg', 'a12.jpg', 'a13.ipg', '2018-06-14', 76, NULL, 1, 0, 1, 'Adidas'),
(2, 4, 2, 'Adidas Alphabounce Beyond', '2600000.0000', '2900000', '•	Loại : Giày trung tính mang lại sự linh hoạt và linh hoạt, với đệm cao cấp \r\n•	Bounce đệm cung cấp tăng cường sự thoải mái và tính linh hoạt \r\n•	Dàn Forgedmesh trên được thiết kế với các khu vực hỗ trợ và kéo căng để giúp đảm bảo phù hợp tùy chỉnh phù hợp với mọi động thái Xây dựng giống như vớ cho phù hợp với snug \r\n•	Fitcounter đúc gót truy cập cung cấp một sự phù hợp tự nhiên cho phép di chuyển tối ưu của Achilles Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô \r\n•	Trọng lượng: 346g  \r\n•	Vật liệu chính: Dệt trên / Dệt lót / Cao Su đế ngoài\r\n', NULL, 'a20.jpg', 'a21.jpg', 'a22.jpg', 'a23.jpg', '2018-06-14', 74, NULL, 6, 0, 1, 'Adidas'),
(3, 1, 1, 'Adidas Energy Boost Red', '3500000.0000', '3770000', '•	Phù hợp thông thường <br>\r\n•	Ren đóng cửa<br>\r\n•	Bốn chiều căng lưới trên với lồng TPU tích hợp; Liền mạch, giống như Techfit trên\r\n•	Dệt lót; Linh hoạt Stretchweb đế ngoài; Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô\r\n•	Midsole tăng cường đáp ứng\r\n•	Trọng lượng: 318 g (cỡ Anh 8.5)\r\n•	Midsole: 10 mm (gót chân: 32 mm / ngón chân cái: 22 mm)\r\n•	Fitcounter gót chân cho phù hợp không hạn chế; Energy Rail midsole giúp hướng dẫn chân; Ổn định hệ thống xoắn\r\n', NULL, 'a30.jpg', 'a31.jpg', 'a32.jpg', 'a33.jpg', '2018-06-14', 62, NULL, 2, 18, 1, 'Adidas'),
(28, 5, 1, 'Adidas Solarboost', '4300000.0000', '4500000', '•	Phù hợp thông thường\r\n•	Ren đóng cửa\r\n•	Dệt trên; Căng ngón tay lưới\r\n•	Linh hoạt Stretchweb đế ngoài; Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô\r\n•	Midsole tăng cường đáp ứng\r\n•	Trọng lượng: 305g  \r\n•	Midsole : 10 mm (gót chân: 32 mm / ngón chân cái: 22 mm); Loại kiến trúc: Bình thường\r\n•	Fitcounter gót chân cho phù hợp không hạn chế; Ổn định hệ thống xoắn; Vị trí sợi phù hợp cho hỗ trợ  bàn chân\r\n', NULL, 'a40.jpg', 'a41.jpg', 'a42.jpg', 'a43.jpg', '2018-06-13', 67, NULL, 3, 0, 1, 'Adidas'),
(32, 3, 1, 'Adidas Solar Glide', '2400000.0000', '2550000', '•	Phù hợp thông thường\r\n•	Ren đóng cửa\r\n•	Lưới trên với rỗ trước; Đệm lưỡi\r\n•	Linh hoạt Stretchweb đế ngoài; Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô\r\n•	Midsole tăng cường đáp ứng\r\n•	Trọng lượng: 306 g (cỡ Anh 8.5)\r\n•	Midsole thả: 10 mm (gót chân: 32 mm / ngón chân cái 22 mm)\r\n•	Được đề xuất cho: Đường chạy; Loại kiến trúc: Bình thường; Solar Propulsion Rail giúp hướng dẫn chân; Ổn định hệ thống xoắn; Fitcounter gót chân cho phù hợp không hạn chế; Chi tiết phản chiếu\r\n', NULL, 'a50.jpg', 'a51.jpg', 'a52.jpg', 'a53.jpg', '2018-06-13', 90, NULL, 0, 11, 1, 'Adidas'),
(6, 2, 1, 'Adidas Energy Boost Green', '1700000.0000', '1990000', '•	Phù hợp thông thường\r\n•	Ren đóng cửa\r\n•	Bốn chiều căng lưới trên với lồng TPU tích hợp; Liền mạch, giống như Techfit trên\r\n•	Dệt lót; Linh hoạt Stretchweb đế ngoài; Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô\r\n•	Midsole tăng cường đáp ứng\r\n•	Phần ngoài của Stretchweb uốn cong tự nhiên cho một chuyến đi đầy sinh lực, trong khi Continental ™ Rubber mang lại cho bạn sức hút vượt trội\r\n•	Trọng lượng: 318 g (cỡ Anh 8.5)\r\n•	Midsole thả: 10 mm (gót chân: 32 mm / ngón chân cái: 22 mm)\r\n•	Fitcounter gót chân cho phù hợp không hạn chế; Energy Rail midsole giúp hướng dẫn chân; Ổn định hệ thống xoắn\r\n•	Vật liệu chính: Dệt và tổng hợp trên / Dệt lót / Cao Su đế ngoài\r\n', NULL, 'a60.jpg', 'a61.jpg', 'a62.jpg', 'a63.jpg', '2018-06-05', 80, NULL, 0, 20, 1, 'Adidas'),
(30, 4, 1, 'Adidas Ultraboost Uncaged', '4300000.0000', '4500000', '•	Phù hợp thông thường\r\n•	Ren đóng cửa với vớ giống như xây dựng adidas Primeknit dệt trên; Nội bộ quân tiếp viện Linh hoạt Stretchweb đế ngoài; Đế ngoài cao su Continental ™ cho lực kéo đặc biệt trong điều kiện ẩm ướt và khô \r\n•	Midsole tăng cường đáp ứng Trọng lượng: 274 g (cỡ Anh 8.5) \r\n•	Midsole thả: 10 mm (gót chân: 29 mm / ngón chân cái: 19 mm) \r\n•	Được đề xuất cho: Dài, chạy đô thị; \r\n•	Loại kiến trúc: Bình thường; Ổn định hệ thống xoắn; Fitcounter gót chân cho phù hợp không hạn chế\r\n', NULL, 'a70.jpg', 'a71.jpg', 'a72.jpg', 'a73.jpg', '2018-06-11', 75, NULL, 0, 0, 1, 'Adidas'),
(8, 1, 2, 'Adidas Adizero Adios', '3800000.0000', '4100000', '•	Loại Runner: trung tính\r\n•	boost ™ là loại đệm phản ứng nhanh nhất của chúng tôi bao giờ hết: Bạn càng cung cấp nhiều năng lượng, bạn càng nhận được nhiều\r\n•	Mở lưới trên cho hơi thở nhẹ tối đa; Lớp phủ dệt và tổng hợp để hỗ trợ thêm\r\n•	Được thiết kế cho tốc độ cao, Microfit khóa chân xuống để phù hợp trực tiếp và chạy nhanh\r\n•	TORSION® SYSTEM giữa gót chân và ngón chân cái cho một chuyến đi ổn định\r\n•	STRETCHWEB cao su đế ngoài uốn cong dưới chân cho một chuyến đi tràn đầy sinh lực; Đế ngoài cao su Continental ™ cho độ bám đặc biệt trong điều kiện ẩm ướt và khô\r\n•	Trọng lượng: 226 g (cỡ Anh 8.5)\r\n•	Midsole thả: 10 mm (gót chân: 27 mm / ngón chân cái: 17 mm)\r\n', NULL, 'a80.jpg', 'a81.jpg', 'a82.jpg', 'a83.jpg', '2018-06-10', 90, NULL, 0, 0, 1, 'Adidas'),
(25, 6, 1, 'Nike Air Max 1 Premium Retro', '3600000.0000', '3990000', '•	Da, da lộn và lưới trên \r\n•	Bọt duy nhất với đệm Max Air \r\n•	Đế giày cao su \r\n•	NIKE AIR MAX ORIGINS \r\n', NULL, 'n10.jpg', 'n11.jpg', 'n12.jpg', 'n13.jpg', '2018-06-15', 86, NULL, 4, 0, 1, 'Nike'),
(10, 3, 2, 'Nike Air Vapormax Plus', '4500000.0000', '4750000', '•	Phần trên đúc nén cung cấp sự phù hợp, an toàn \r\n•	Lớp phủ tổng hợp tăng cường độ bền \r\n•	Bọt midsole với Nike VaporMax Air cho đệm phản ứng \r\n•	Cao su bền tread cung cấp lực kéo tuyệt vời\r\n', NULL, 'n20.jpg', 'n21.jpg', 'n22.jpg', 'n23.jpg', '2018-06-15', 63, NULL, 4, 0, 1, 'Nike'),
(24, 2, 1, 'Nike Air Vapromax Flyknit 2', '6400000.0000', '6750000', '•	Cáp Flywire hoạt động với ren để cung cấp thêm hỗ trợ khi bạn siết chặt chúng\r\n•	Phần đế ngoài cao su trên gót chân và ngón chân cái cho độ bền\r\n•	Bù đắp: 10mm\r\n', NULL, 'n30.jpg', 'n31.jpg', 'n32.jpg', 'n33.jpg', '2018-06-16', 98, NULL, 0, 0, 1, 'Nike'),
(12, 2, 2, 'Nike Epic React FlYknit', '2500000.0000', '2900000', '•	Kệ gót ổn định mặt sau của bàn chân của bạn để giúp giữ cho gót chân của bạn từ rocking như chân đất của bạn Lớp lót gót da lộn tổng hợp giúp ngăn ngừa trượt và phồng rộp \r\n•	Trọng lượng: 239g. (kích thước của nam giới 9) \r\n•	Bù đắp: 10mm Phù hợp với kích thước phù hợp cho phù hợp. Nếu bạn thích phù hợp hơn một chút, chúng tôi khuyên bạn nên đặt hàng ½ kích thước lên.\r\n', NULL, 'n40.jpg', 'n41.jpg', 'n42.jpg', 'n43.jpg', '2018-06-08', 48, NULL, 2, 20, 1, 'Nike'),
(31, 5, 1, 'Nike Air Vapormax Flyknit Utility', '5300000.0000', '5770000', '•	Midkn cut giữa ôm chân từ mắt cá chân đến ngón chân cho một cảm giác ánh sáng, giống như vớ.\r\n•	Vòng trên cổ áo giúp bạn kéo giày lên chân\r\n•	Chi tiết phản chiếu trên gót chân và hai bên giúp bạn nổi bật\r\n•	Lớp phủ hỗ trợ kết thúc tốt đẹp gót chân để giúp giữ chân của bạn ổn định\r\n•	Phần đế ngoài cao su trên gót chân và ngón chân cái cho độ bền\r\n•	Bù đắp: 10mm\r\n', NULL, 'n50.jpg', 'n51.jpg', 'n52.jpg', 'n53.jpg', '2018-06-15', 19, NULL, 1, 0, 1, 'Nike'),
(14, 6, 2, 'Nike Zoom Fly', '3300000.0000', '3650000', '•	Tăng cường cao su gót chân cho độ bền lâu dài\r\n•	Bù đắp: 10mm\r\n•	Trọng lượng: 248g. (kích thước của nam giới 9)\r\n•	Màu sắc hiển thị: đen / Anthracite / trắng\r\n•	Kiểu: 880848-001\r\n•	Quốc gia / Khu vực xuất xứ: Việt Nam\r\n', NULL, 'n60.png', 'n61.png', 'n62.png', 'n63.png', '2018-06-15', 50, NULL, 3, 0, 1, 'Nike'),
(29, 4, 1, 'Nike Vapormax Chukka Slip', '3100000.0000', '3450000', '•	Vải dệt thoi gót chân cho phép dễ dàng bật-tắt\r\n•	Seam taping trên tấm vải liệm cung cấp bảo vệ thêm\r\n•	Bảo vệ bùn Toe cung cấp bảo hiểm thêm\r\n•	Điểm nhấn phản chiếu giúp bạn nổi bật\r\n', NULL, 'n70.jpg', 'n71.jpg', 'n72.jpg', 'n73.jpg', '2018-06-11', 50, NULL, 0, 0, 1, 'Nike'),
(26, 2, 1, 'Nike Air Vapormax Flyknit', '2990000.0000', '3200000', '•	Lớp phủ ở ngón chân và gót chân thêm cấu trúc cho một cảm giác ổn định\r\n•	Vỏ cao su trên đế cho độ bền\r\n•	Trọng lượng: 255 gram. (kích thước của nam giới 8)\r\n•	Bù đắp: 10mm\r\n', NULL, 'n80.jpg', 'n81.jpg', 'n82.jpg', 'n83.jpg', '2018-06-07', 55, NULL, 1, 0, 1, 'Nike'),
(17, 1, 2, 'Puma Ignite Limitless SR', '2700000.0000', '2990000', '•	Hình thức phù hợp evoKNIT trên\r\n•	Thi công chống trượt\r\n•	Ren đóng cửa cho snug phù hợp\r\n•	Mút xốp IGNITE cung cấp năng lượng trở lại, đệm ổn định và tiện nghi cao cấp\r\n•	Đế ngoài cao su cho grip\r\n•	PUMA kéo tab tại lưỡi\r\n•	Gót kéo tab để dễ dàng bật / tắt\r\n•	PUMA xây dựng thương hiệu ở gót chân\r\n', NULL, 'p10.jpg', 'p11.jpg', 'p12.jpg', 'p13.jpg', '2018-06-12', 0, NULL, 0, 0, 1, 'Puma'),
(18, 3, 2, 'Puma BMW Motorsport Speed Cat Evo', '2500000.0000', '2890000', '•	Giày thể thao cổ điển\r\n•	Một chiếc giày thoải mái với phong cách thân thiện với đường phố\r\n•	Bản cập nhật về Speed Cat OG của PUMA\r\n•	Full da lộn trên với chữ V ở bên và bên trung gian\r\n•	Chèn mí lon IGNITE\r\n•	Dụng cụ EVA đầy đủ\r\n•	Grippy, đế ngoài cao su chịu dầu\r\n•	Debossed t-toe thiết kế\r\n•	Khâu PUMA\r\n•	PUMA Cat Logo trên lưỡi\r\n', NULL, 'p20.jpg', 'p21.jpg', 'p22.jpg', 'p23.jpg', '2018-06-12', 65, NULL, 0, 0, 1, 'Puma'),
(23, 5, 1, 'Puma Avid Men Sneakers', '3200000.0000', '3550000', '•	Dệt kim dệt trên\r\n•	Sock giống như phù hợp\r\n•	Slip-on, xây dựng bootie\r\n•	Ren đóng cửa cho snug phù hợp\r\n•	Mouldole ethylene-vinyl acetate mouldole tiêm đúc với bọt IGNITE cho hiệu suất nhẹ, trở lại năng lượng cao và thoải mái\r\n•	Đế ngoài cao su cung cấp tiếp đất đầy đủ và grip\r\n', NULL, 'p30.jpg', 'p31.jpg', 'p32.jpg', 'p33.jpg', '2018-06-20', 55, NULL, 1, 1, 1, 'Puma'),
(27, 4, 1, 'Puma Ignite evoKnit 2 Lo', '1500000.0000', '1750000', '•	evoKNIT trên cho phù hợp và thoải mái tối ưu\r\n•	Dây đeo ở midfoot cung cấp thêm hỗ trợ\r\n•	Mỡ xốp IGNITE đảm bảo năng lượng vượt trội\r\n•	Đế ngoài cao su cho grip\r\n•	Forefoot flex rãnh cho một chuyển đổi dễ dàng hơn và dễ dàng hơn\r\n•	PUMA Cat nhựa nhiệt dẻo polyurethane clip ở midfoot\r\n', NULL, 'p40.jpg', 'p41.jpg', 'p42.jpg', 'p43.jpg', '2018-06-09', 79, NULL, 6, 0, 1, 'Puma'),
(21, 4, 2, 'Puma Avid evoknit Haze ', '1390000.0000', '1500000', 'Thiết bị nhanh nhất cho các vận động viên nhanh nhất (vâng, điều đó có nghĩa là bạn!). Các sản phẩm đang chạy của PUMA luôn sẵn sàng giúp bạn nhanh chóng đi bộ, đồng thời không cung cấp gì ngoài kiểu dáng đẹp mắt.', NULL, 'p50.jpg', 'p51.jpg', 'p52.jpg', 'p53.jpg', '2018-06-17', 76, NULL, 2, 0, 1, 'Puma'),
(22, 3, 2, 'Puma Tsugi Netfit v2 Firecracker', '1990000.0000', '2150000', 'Thiết bị mới cho phi hành đoàn huyền thoại nhất của chúng tôi (có, bao gồm bạn!). Các sản phẩm phong cách sống của PUMA được lấy cảm hứng từ thể thao, nhưng cung cấp một kiểu dáng đẹp, theo xu hướng.', NULL, 'p60.jpg', 'p61.jpg', 'p62.jpg', 'p63.jpg', '2018-06-11', 97, NULL, 0, 0, 1, 'Puma'),
(19, 3, 1, 'Puma NRgy Neko Engineer Knit', '2300000.0000', '2650000', 'Đào tạo mạnh mẽ hơn bao giờ hết trong thiết bị đào tạo mới nhất của PUMA. Cũng giống như bạn, nó không bao giờ từ bỏ và luôn luôn đẩy phong cách đến cấp độ tiếp theo.', NULL, 'p70.jpg', 'p71.jpg', 'p72.jpg', 'p73.jpg', '2018-06-15', 91, NULL, 5, 0, 1, 'Puma'),
(11, 2, 1, 'Puma Ignite Limitless Weave ', '2670000.0000', '2950000', '•	Bốn chiều căng Ariaprene trên cho thoải mái và thở\r\n•	Lớp vỏ bọc bằng nhựa nhiệt dẻo polyurethane xuyên qua lớp giữa cung cấp thêm hỗ trợ bên và đảm bảo bàn chân của bạn bị khóa trên nền tảng\r\n•	Mouldole ethylene-vinyl acetate được đúc bằng khuôn đúc với bọt xốp IGNITE cho hiệu suất nhẹ, khả năng hồi sinh năng lượng cao và sự thoải mái\r\n•	Mảnh nhựa nhiệt dẻo polyurethane có độ bóng cao chạy dọc theo phía trên của dụng cụ cho một chuyến đi ổn định\r\n•	Vỏ ngoài cao su tinh thể cung cấp tiếp đất đầy đủ và va li\r\n•	Gót kéo tab để dễ dàng bật / tắt\r\n•	Logo PUMA tại lưỡi\r\n', NULL, 'p80.jpg', 'p81.jpg', 'p82.jpg', 'p83.jpg', '2018-06-12', 75, NULL, 0, 0, 1, 'Puma'),
(9, 3, 1, 'Bitis Hunter Dark Tribal Orange', '890000.0000', '890000', '•	Họa tiết Aztec trên thân giày: một chút phá cách và tươi mới trên nền sắc tối, mang lại chút thú vị cho những hành trình trải nghiệm trong tháng 4 này. Ngoài ra, upper ở dòng sản phẩm còn được cải tiến với công nghệ Liteknit 2.0 co dãn hơn nhiều lần so với phiên bản đầu tiên, mang lại sự thoáng khí tối đa.\r\n•	Thiết kế đế Fishbone độc đáo: bộ đế được yêu thích nhất nữa cuối 2017, mang lại trải nghiệm nhẹ nhàng, êm ái và ôm gọn đôi bàn chân.\r\n', NULL, 'b10.jpg', 'b11.jpg', 'b12.jpg', 'b13.jpg', '2018-06-15', 65, NULL, 0, 0, 1, 'Bitis'),
(16, 3, 2, 'Bitis Hunter Red Berry', '680000.0000', '680000', 'Thuộc dòng cơ bản Biti’s Hunter, đôi giày là sự kết hợp hoàn hảo của các màu sắc lễ hội trên thân giày. Với công nghệ knit tân tiến tạo cảm giác thoáng mát khi mang, cùng công nghệ đế phylon “nhẹ như bay” đặc trưng của Biti’s Hunter, đôi giày sẽ là người bạn đồng hành tuyệt vời trong những chuyến đi mùa lễ hội', NULL, 'b20.jpg', 'b21.jpg', 'b22.jpg', 'b23.jpg', '2018-06-15', 53, NULL, 1, 0, 1, 'Bitis'),
(20, 3, 1, 'Bitis Hunter X-Dark Dust Black', '890000.0000', '1000000', '•	Công nghệ đế Phylon nhẹ êm vốn nổi tiếng trên các dòng sản phẩm Biti’s Hunter tiếp tục được cải tiến với chức năng giảm sốc tại gót chân, đem đến trải nghiệm mang “nhẹ như bay”.\r\n•	Cage TPU đắp nổi hai bên hông và gót chân giúp định hình dáng chân trong những hoạt động di chuyển phức tạp.\r\n•	Đế lót kháng khuẩn: công nghệ đế lót của riêng Biti\'s Hunter X được nâng tầm với công thức kháng khuẩn tạo độ thông thoáng tuyệt đối trong lòng giày, triệt tiêu các yếu tố gây mùi khi sử dụng thời gian dài.\r\n•	6 zones cushioning: công nghệ 06 điểm massage trong lòng giày nâng cao trải nghiệm êm ái cho người dùng.\r\n', NULL, 'b30.jpg', 'b31.jpg', 'b32.jpg', 'b33.jpg', '2018-06-11', 76, NULL, 0, 0, 1, 'Bitis'),
(4, 3, 1, 'Bitis Hunter X 2k18 Stardust Night', '890000.0000', '890000', '•	Chất liệu Phylon ứng dụng công nghệ IP “nhẹ như bay” chỉ từ 204g\r\n•	Chiều cao đế đạt tới 5cm\r\n•	Độ đàn hồi >40%\r\n', NULL, 'b40.jpg', 'b40.jpg', 'b40.jpg', 'b40.jpg', '2018-06-13', 44, NULL, 1, 0, 1, 'Bitis'),
(15, 3, 1, 'Bitis Hunter X 2k18 Sunrise Orange', '890000.0000', '890000', '•	Chất liệu Phylon ứng dụng công nghệ IP “nhẹ như bay” chỉ từ 204g\r\n•	Chiều cao đế đạt tới 5cm\r\n•	Độ đàn hồi >40%\r\n', NULL, 'b50.jpg', 'b51.jpg', 'b52.jpg', 'b53.jpg', '2018-06-12', 79, NULL, 10, 0, 1, 'Bitis'),
(7, 3, 1, 'Bitis Hunter Core 2k18 Charcoal Black', '680000.0000', '680000', '•	Chất liệu Phylon “nhẹ như bay”\r\n•	Chiều cao đế đạt tới 4.3cm\r\n', NULL, 'b60.jpg', 'b61.jpg', 'b62.jpg', 'b63.jpg', '2018-06-12', 45, NULL, 0, 0, 1, 'Bitis'),
(13, 3, 2, 'Bitis Hunter Core 2k18 Purple Phonenix', '680000.0000', '680000', '•	Chất liệu Phylon “nhẹ như bay”\r\n•	Chiều cao đế đạt tới 4.3cm\r\n', NULL, 'b70.jpg', 'b71.jpg', 'b72.jpg', 'b73.jpg', '2018-06-12', 65, NULL, 0, 0, 1, 'Bitis'),
(5, 3, 1, 'Bitis Hunter X BlueStar', '890000.0000', '890000', '“Đi, Trải Nghiệm Mùa Hè” còn đánh dấu những thay đổi lớn trong sản phẩm từ thiết kế đế hoàn toàn mới siêu nhẹ êm đến những cải tiến trong chất liệu và màu sắc cập nhật sát xu hướng và nhu cầu của người tiêu dùng,chắc chắn sẽ trở thành người bạn đồng hành đáng tin cậy của các bạn trẻ trong những chuyến đi.', NULL, 'b80.jpg', 'b81.jpg', 'b82.jpg', 'b83.jpg', '2018-06-05', 67, NULL, 0, 0, 1, 'Bitis');

-- --------------------------------------------------------

--
-- Table structure for table `nn_question`
--

CREATE TABLE `nn_question` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `order` int(11) NOT NULL,
  `active` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_question`
--

INSERT INTO `nn_question` (`id`, `content`, `order`, `active`) VALUES
(1, 'Bạn đang dùng điện thoại loại nào ?', 0, '0'),
(2, 'Bạn đánh giá website nay như thế nào', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `nn_user`
--

CREATE TABLE `nn_user` (
  `id_user` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `group_id` int(10) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_user`
--

INSERT INTO `nn_user` (`id_user`, `password`, `email`, `name_user`, `mobile`, `address`, `dob`, `gender`, `create_at`, `group_id`, `active`, `code`) VALUES
(117, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'PhanC@gmail.com', 'Phan C', '34343434314', '1 Lê Lọi Quận 1 TP.HCM', '0000-00-00', 0, '2018-06-20 11:39:38', 0, 0, ''),
(118, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'TranD@gmail.com', 'Trần D', '12323213', '123 Lê Văn Sỹ P13 Q3', '0000-00-00', 1, '2018-06-20 11:40:17', 0, 0, ''),
(116, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'LEB@gmail.com', 'Lê B', '123456780', '654 Nguyễn Trãi P10 Q1', '0000-00-00', 0, '2018-06-20 11:38:17', 0, 0, ''),
(115, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'NguyenA@gmail.com', 'Nguyen A', '090909090', '90/12 CMT8 p9 Q3', '0000-00-00', 1, '2018-06-20 11:25:21', 0, 0, ''),
(100, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'caocanhlinh@gmail.com', 'admin', '090909565', '454 Hoàng Văn Thụ p10 Q.PN', '0000-00-00', 1, '2018-06-20 12:11:55', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `nn_visit`
--

CREATE TABLE `nn_visit` (
  `id` int(11) NOT NULL,
  `cnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_visit`
--

INSERT INTO `nn_visit` (`id`, `cnt`) VALUES
(1, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nn_admin`
--
ALTER TABLE `nn_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `nn_answer`
--
ALTER TABLE `nn_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nn_category`
--
ALTER TABLE `nn_category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `nn_coupon`
--
ALTER TABLE `nn_coupon`
  ADD PRIMARY KEY (`name_cou`);

--
-- Indexes for table `nn_department`
--
ALTER TABLE `nn_department`
  ADD PRIMARY KEY (`id_der`);

--
-- Indexes for table `nn_online`
--
ALTER TABLE `nn_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nn_order`
--
ALTER TABLE `nn_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `nn_order_detail`
--
ALTER TABLE `nn_order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `nn_product`
--
ALTER TABLE `nn_product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `nn_question`
--
ALTER TABLE `nn_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nn_user`
--
ALTER TABLE `nn_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `nn_visit`
--
ALTER TABLE `nn_visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nn_admin`
--
ALTER TABLE `nn_admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `nn_answer`
--
ALTER TABLE `nn_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nn_category`
--
ALTER TABLE `nn_category`
  MODIFY `id_cat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `nn_department`
--
ALTER TABLE `nn_department`
  MODIFY `id_der` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nn_order`
--
ALTER TABLE `nn_order`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `nn_product`
--
ALTER TABLE `nn_product`
  MODIFY `id_pro` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2028;

--
-- AUTO_INCREMENT for table `nn_question`
--
ALTER TABLE `nn_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nn_user`
--
ALTER TABLE `nn_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
