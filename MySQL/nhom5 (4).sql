-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2022 at 07:20 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom5`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(150) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `password`, `first_name`, `last_name`) VALUES
('thinhle@gmail.com', '202cb962ac59075b964b07152d234b70', 'thinh', 'đức'),
('20211tt2540@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Quang 3', 'Dương'),
('duongvanquang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Quang ', 'Dương'),
('hoangthinh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Thịnh ', 'Hoàng '),
('quangduong@gmail.com', '202cb962ac59075b964b07152d234b70', 'Hoàng', 'Dung'),
('thinhle123@gmail.com', '202cb962ac59075b964b07152d234b70', 'nhóm ', '5');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

DROP TABLE IF EXISTS `chart`;
CREATE TABLE IF NOT EXISTS `chart` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `qty`) VALUES
(10, 53),
(12, 97),
(11, 71),
(14, 125),
(15, 45),
(16, 17),
(17, 12),
(23, 43),
(22, 66),
(21, 12),
(20, 65),
(18, 22),
(19, 36);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Sony'),
(2, 'SamSung'),
(3, 'Apple'),
(4, 'Xiaomi'),
(5, 'LG'),
(6, 'Oppo'),
(7, 'Dell'),
(8, 'MSI'),
(9, 'Lenovo'),
(10, 'HP'),
(11, 'Anker'),
(12, 'Logitech'),
(13, 'Toshiba'),
(177, 'nhom5e');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `madonhang` int(100) NOT NULL AUTO_INCREMENT,
  `ngaymua` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` int(11) NOT NULL,
  `trangthai` text COLLATE utf8_unicode_ci NOT NULL,
  `sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`madonhang`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `madonhang`, `ngaymua`, `tongtien`, `trangthai`, `sanpham`) VALUES
('20211tt2540@gmail.com', 44, '2021-12-14 12:55:04', 25990000, 'Active', 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB và 0 sản phẩm khác'),
('thinhle123@gmail.com', 134, '2021-12-17 03:39:07', 27735800, 'Active', 'Tai nghe Apple AirPods Max - Hàng chính hãng và 1 sản phẩm khác'),
('quangduong@gmail.com', 132, '2021-12-17 03:24:12', 11990000, 'Active', 'Điện thoại Xiaomi 11T 5G 256GB và 0 sản phẩm khác'),
('quangduong@gmail.com', 133, '2021-12-17 03:37:16', 16140000, 'Active', 'Tai Nghe Bluetooth True Wireless Samsung Galaxy Buds Live - Hàng Chính Hãng và 1 sản phẩm khác'),
('quangduong@gmail.com', 131, '2021-12-17 03:24:02', 3983200, 'Active', 'Tai nghe không dây Bluetooth LG TONE Free HBS-FN6 - Hàng chính hãng và 0 sản phẩm khác'),
('quangduong@gmail.com', 130, '2021-12-17 03:20:59', 32019964, 'Active', ' G PAD 5 10.1IN 32GB 4G LTE BLK, LM-T600QSCCASV và 2 sản phẩm khác'),
('quangduong@gmail.com', 129, '2021-12-17 03:20:45', 1890000, 'Active', 'Tai Nghe Bluetooth True Wireless Samsung Galaxy Buds Live - Hàng Chính Hãng và 0 sản phẩm khác');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` int(100) NOT NULL,
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `id`, `product_id`, `qty`) VALUES
(130, 'quangduong@gmail.com', 25, 2),
(90, 'thinhle@gmail.com', 12, 1),
(91, 'thinhle@gmail.com', 16, 1),
(91, 'thinhle@gmail.com', 12, 1),
(91, 'thinhle@gmail.com', 2, 1),
(91, 'thinhle@gmail.com', 18, 1),
(91, 'thinhle@gmail.com', 18, 1),
(91, 'thinhle@gmail.com', 12, 1),
(91, 'thinhle@gmail.com', 12, 1),
(91, 'thinhle@gmail.com', 19, 1),
(91, 'thinhle@gmail.com', 19, 1),
(91, 'thinhle@gmail.com', 12, 2),
(91, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 22, 1),
(91, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 22, 1),
(92, 'thinhle@gmail.com', 12, 1),
(92, 'thinhle@gmail.com', 12, 1),
(109, 'thinhle@gmail.com', 12, 1),
(110, 'thinhle@gmail.com', 12, 1),
(111, 'thinhle@gmail.com', 16, 2),
(111, 'thinhle@gmail.com', 12, 1),
(111, 'thinhle@gmail.com', 19, 3),
(112, 'thinhle@gmail.com', 12, 1),
(113, 'thinhle@gmail.com', 18, 2),
(113, 'thinhle@gmail.com', 16, 1),
(113, 'thinhle@gmail.com', 22, 3),
(114, 'thinhle@gmail.com', 24, 1),
(115, 'thinhle@gmail.com', 25, 1),
(116, 'thinhle@gmail.com', 14, 2),
(116, 'thinhle@gmail.com', 16, 1),
(116, 'thinhle@gmail.com', 12, 3),
(117, 'thinhle@gmail.com', 12, 1),
(118, 'thinhle@gmail.com', 12, 1),
(119, 'thinhle@gmail.com', 12, 1),
(120, 'thinhle@gmail.com', 12, 1),
(121, 'thinhle@gmail.com', 13, 2),
(121, 'thinhle@gmail.com', 12, 2),
(122, 'thinhle@gmail.com', 12, 1),
(123, 'thinhle@gmail.com', 15, 1),
(124, 'thinhle@gmail.com', 12, 1),
(125, 'thinhle@gmail.com', 12, 1),
(126, 'thinhle@gmail.com', 11, 1),
(127, 'thinhle@gmail.com', 11, 100),
(129, 'quangduong@gmail.com', 12, 1),
(130, 'quangduong@gmail.com', 18, 1),
(130, 'quangduong@gmail.com', 5, 3),
(131, 'quangduong@gmail.com', 15, 2),
(132, 'quangduong@gmail.com', 4, 1),
(132, 'quangduong@gmail.com', 12, 1),
(132, 'quangduong@gmail.com', 18, 5),
(134, 'thinhle123@gmail.com', 13, 2),
(134, 'thinhle123@gmail.com', 12, 2),
(135, 'thinhle@gmail.com', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(11, 'Tai Nghe Bluetooth Chụp Tai Sony WH-1000XM4 Hi-Res Noise Canceling - Hàng Chính Hãng', 1, 1, 5990000, 'a4a99b75569caf25c351b8bed5def5af.jpg', 'nhom5', 1, '2021-10-20 09:30:30'),
(12, 'Tai Nghe Bluetooth True Wireless Samsung Galaxy Buds Live - Hàng Chính Hãng', 2, 3, 1890000, 'c9cf77710c5b5c86f20a8f1b271f6094.jpg', NULL, 1, '2021-10-20 09:30:30'),
(13, 'Tai nghe Apple AirPods Max - Hàng chính hãng', 3, 3, 11977900, '2811f32c1b10f9ea190747c36d2cdcbd.jpg\r\n', NULL, 1, '2021-10-20 09:30:30'),
(14, 'Tai nghe Xiaomi Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL - Hàng Chính Hãng', 4, 3, 975700, '41f68a21996e283d77f05dd2cbe0317d.png', NULL, 1, '2021-10-20 09:30:30'),
(15, 'Tai nghe không dây Bluetooth LG TONE Free HBS-FN6 - Hàng chính hãng', 5, 3, 1991600, '53226135650fd33490123c6e5603d486.png', NULL, 1, '2021-10-20 09:30:30'),
(16, 'Bàn phím Sony SVE14 SVE141C11L SVE141D11L SVE141J11W - keyboard Sony', 1, 4, 273000, '45105fb1a39158209860d74ef45ddc1c.jpg_720x720q80.jpg_.jpg', NULL, 1, '2021-10-20 09:30:30'),
(17, 'Bàn phím không dây Samsung Smart Keyboard Trio 500 - Hàng Chính Hãng', 2, 4, 910000, '88dd4cf4a949c9939c2a41d39b4b4596.jpg', NULL, 1, '2021-10-20 09:30:30'),
(18, 'Bàn phím Apple Magic Keyboard 2 | Chính hãng Apple Việt Nam', 3, 4, 2850000, 'keyboard-macbook-gen-2.jpg', NULL, 1, '2021-10-20 09:30:30'),
(19, 'Bàn Phím Xiaomi MIIW Bluetooth Phím Hợp Nhôm Và Nhựa ABS', 4, 4, 720000, '7f6b19e1d0dd89a220987f5f346ac06b.jpg', NULL, 1, '2021-10-20 09:30:30'),
(20, 'Bàn Phím Laptop LG R580', 5, 4, 320000, 'ban-phim-lg-r580-1000x1000.jpg', NULL, 1, '2021-10-20 09:30:30'),
(21, 'Máy tính bảng Sony Xperia Z4 SGP771 32GB 10.1 inch LTE mở khóa nhà máy (Trắng)', 1, 5, 23530060, '61lTpBZdfHL._SR476,476_.jpg', NULL, 1, '2021-10-20 09:30:30'),
(22, 'Samsung Galaxy Tab S7 FE', 2, 5, 13300000, 'samsung-galaxy-tab-s7-fe-chinh-hang_1.jpg', NULL, 1, '2021-10-20 09:30:30'),
(23, 'iPad Pro 11 2021 M1 Wi-Fi 2TB (No.00750627)', 3, 5, 51999000, '637546013884494743_ipad-pro-11-wifi-xam-1.jpg', NULL, 1, '2021-10-20 09:30:30'),
(24, 'Máy Tính Bảng Xiaomi Mi Pad 5 Hỗ trợ Wifi (128GB Ram 6GB) - Hàng Nhập Khẩu', 4, 5, 8225000, 'fc72545dd92db61e02d9cd6956337d5d.jpg_720x720q80.jpg_.jpg', NULL, 1, '2021-10-20 09:30:30'),
(25, ' G PAD 5 10.1IN 32GB 4G LTE BLK, LM-T600QSCCASV', 5, 5, 5749982, '61pViJO3FhS._SR476,476_.jpg', NULL, 1, '2021-10-20 09:30:30'),
(2, 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB', 1, 1, 25990000, 'samsung-galaxy-z-flip-3-violet-gc-org.jpg', 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.\r\nThiết kế nhỏ gọn đầy lôi cuốn\r\nSamsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.', 1, '2021-10-22 20:11:22'),
(4, 'Điện thoại Xiaomi 11T 5G 256GB', 2, 1, 11990000, 'iaomi-11t-xam-1.jpg', 'Xiaomi 11T 5G sở hữu màn hình AMOLED, viên pin siêu khủng cùng camera độ phân giải 108 MP, chiếc smartphone này của Xiaomi sẽ đáp ứng mọi nhu cầu sử dụng của bạn, từ giải trí đến làm việc đều vô cùng mượt mà. \r\nCho ra những tác phẩm đầy chân thật với camera 108 MP\r\nXiaomi đã trang bị cho máy cụm 3 camera sau gồm camera chính 108 MP, camera góc rộng có độ phân giải 8 MP cùng camera telemacro 5 MP kết hợp cùng phần cứng bên trong cho khả năng lấy nét, thu sáng và zoom cực tốt để cho ra những bức ảnh chi tiết dù bạn chụp gần hay chụp xa.', 1, '2021-10-22 19:06:06'),
(3, 'Điện thoại iPhone 12 Pro Max 128GB', 3, 1, 32990000, 'iphone-12-pro-max-xanh-duong-1-org.jpg', 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.\r\nThay đổi thiết kế mới sau 6 năm\r\nTheo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.\r\n\r\niPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.', 1, '2021-10-22 20:11:22'),
(1, 'Xperia 1 III | Màn hình OLED 4K HDR 21:9 6.5 inch 120 Hz', 1, 1, 34990000, 'xperia1iii_5_1280x720-800-resize.jpg', 'Ngay từ cái nhìn đầu tiên, Sony Xperia 1 Mark III đã để lại cho mình ấn tượng đặc biệt với thiết kế OmniBalance huyền thoại. Có thể nói, thiết kế này đã duy trì qua nhiều thế hệ nhà Sony từ những ngày đầu tiên của thế hệ Xperia Z, đơn giản, ít màu mè nhưng vẫn toát lên một cái chất riêng và khác biệt.\r\n\r\nĐộ hoàn thiện trên các thiết bị Sony thì phải nói là vô cùng chắc chắn với khung viền được hoàn thiện bằng kim loại và vát phẳng các cạnh. Tổng thể máy dài, có thể cầm gọn trong lòng bàn tay, kết hợp cùng với mặt lưng kính liền mạch với phần viền đã làm cho máy trông cứng cáp và vô cùng nam tính.', 1, '2021-10-20 08:14:21'),
(5, 'LG Velvet 5G (8GB - 128GB) Like New 99%', 5, 1, 5890000, 'lg-velvet-viettablet.jpg', 'LG Velvet là mẫu smartphone ra mắt trong ngày hôm nay 7/5, khi thông số kỹ thuật của siêu phẩm LG Velvet xách tay xuất hiện ngày càng nhiều thời gian gần đây. Cùng Viettablet đánh giá nhanh sản phẩm này có gì đặc biệt nhé.\r\n\r\nCụ thể thông số cấu hình của mẫu smartphone LG Velvet nổi bật với màn hình P-OLED độ phân giải Full HD+, bên trong máy là con chip xử lý Snapdragon 765G 5G, đi kèm với bộ nhớ RAM 8 GB cùng bộ nhớ trong lưu trữ ROM 128 GB, có hỗ trợ thẻ nhớ mở rộng. Về camera, hãng điện thoại LG trang bị cho LG Velvet 3 camera với cảm biến chính độ phân giải 48 MP hứa hẹn cho khả năng chụp ảnh sắc nét.', 0, '2021-10-22 19:06:06'),
(6, 'VAIO SX12', 1, 2, 34884103, 'VAIO-SX12-2.png', 'VAIO SX12 là máy tính xách tay mới nhất của VAIO. Nó có thể nhỏ về kích thước nhưng chắc chắn không thiếu hiệu suất. Đây có thể là máy tính xách tay 12 inch NHANH NHẤT ở bất kỳ đâu với bộ vi xử lý Intel thế hệ thứ 10 mới nhất (có sẵn 6 lõi) được cải tiến bởi VAIO TruePerformance. Với Windows Hello và máy quét dấu vân tay, tính năng bảo mật được tích hợp sẵn. Thêm vào đó là sự tiện lợi của mọi cổng mà bạn có thể cần, VGA, LAN, USB, HDMU và USB Type-C. Tất cả những điều này trong khi chỉ nặng 2,01 lbs và mỏng khoảng 0,59 inch.', 0, '2021-10-22 20:11:22'),
(7, 'SAMSUNG Galaxy Book S 13.3', 2, 2, 23573000, '51icdppvRVL._SR476,476_.jpg', 'Ứng dụng Điện thoại của bạn cung cấp cho bạn sức mạnh để truy cập điện thoại mà không cần phải cắm điện. Người dùng phải liên kết điện thoại di động của họ với PC thông qua \'Liên kết với Windows\' trên điện thoại di động của họ nếu có hoặc thông qua ứng dụng \'Điện thoại của bạn trên PC của họ. Ứng dụng Điện thoại của bạn được cài đặt sẵn trên PC có Bản cập nhật Windows 10 tháng 10 năm 2018 trở lên và có thể tải xuống cho Bản cập nhật Windows 10 tháng 4 năm 2018 hoặc các phiên bản mới hơn. Yêu cầu Tài khoản Microsoft và điện thoại Android 7.0 trở lên. • Wi-Fi 6 (Gig-plus): Mở khóa tốc độ mạng nhanh hơn gấp 3 lần so với Wi-Fi thế hệ trước. 1802. 11ax 2x2 160 MHz cho phép tốc độ dữ liệu lý thuyết tối đa 2402 Mbps, nhanh hơn 3X (2. 8X) so với tiêu chuẩn 802. 11ac 2x2 80 MHz (867 Mbps) như được ghi trong IEEE 802. 11 thông số kỹ thuật tiêu chuẩn không dây và yêu cầu sử dụng cấu hình tương tự 802. Bộ định tuyến mạng không dây 11ax.', 1, '2021-10-20 08:14:21'),
(8, 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU', 3, 2, 28990000, 'grey-1-org.jpg', 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.\r\nChip Apple M1 tốc độ xử lý nhanh gấp 3.5 lần thế hệ trước\r\nChiếc laptop này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tính trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc, xử lý mọi tác vụ văn phòng một cách mượt mà như Word, Excel, Powerpoint,... thực hiện tốt các nhiệm vụ chỉnh sửa hình ảnh, kết xuất 2D trên các phần mềm Photoshop, AI,... máy còn hỗ trợ tiết kiệm được điện năng cao.', 1, '2021-10-22 20:11:22'),
(9, 'Laptop Xiaomi Mi Notebook Pro 15.6 inch', 4, 2, 19000000, '15-1-e1614760899687.jpg', 'Xiaomi Mi Notebook Pro sẽ được cung cấp ở một số biến thể, với phiên bản cao cấp nhất được trang bị thế hệ thứ tám của bộ vi xử lý Intel Core i7 xây dựng trên kiến trúc Kaby Lake. Nếu bạn chưa biết thì CPU quad-core đặc biệt này có tần số cơ sở là 1.80GHz (i7-8550U) hoặc 1.90Ghz (i7-8650U), tùy thuộc vào mô hình chính xác, đồng thời cũng có khả năng hoạt động với tốc độ lên đến 4.0GHz và tự hào với 8MB bộ nhớ độc quyền của Intel SmartCache. Chip được sản xuất bằng dây chuyền 14nm, tốc độ GPU bus lên đến 4 GT / s OPI (tích hợp Intel Graphics UHD 620) vưới tần số hoạt động cơ sở là 300MHz tới 1.15GHz. Nó cũng sẽ tương thích với DirectX 12 và OpenGL 4.4, công nghệ 3D InTru của Intel…', 0, '2021-10-22 20:11:22'),
(10, 'Laptop LG Gram 2021', 5, 2, 34900000, 'may-tinh-xach-tay-laptop-lg-gram-2021-14zd90p-g-ax51a5-i5-1135g7-trang.jpg', 'Máy tính xách tay/ Laptop LG Gram 2021 14ZD90P-G.AX51A5 (Trắng) là một trong những chiếc laptop thuộc series Gram cao cấp đến từ thương hiệu LG. Sở hữu thiết kế nổi bật cùng hiệu năng ấn tượng, phiên bản laptop trên hứa hẹn sẽ là sự lựa chọn xứng đáng với sự đầu tư của bạn khi có thể đáp ứng tốt các nhu cầu sử dụng từ công việc đến giải trí. \r\nThiết kế gọn nhẹ thanh lịch, màn hình 14 inch WUXGA IPS\r\nMáy tính xách tay/ Laptop LG Gram 2021 14ZD90P-G.AX51A5 (Trắng) thu hút mọi ánh nhìn nhờ vào thiết kế nguyên khối với mức độ hoàn thiện cao cấp trong từng đường nét. Gam màu trắng trang nhã càng làm tôn lên nét đẹp thanh lịch và sang trọng của chiếc laptop. ', 1, '2021-10-22 20:11:22'),
(26, 'Mi 9T', 2, 1, 6000000, 'mi9t.jpg', NULL, 1, NULL),
(27, 'Loa Bluetooth Sony SRS-XB13', 1, 6, 1160000, 'bluetooth-sony-srs-xb13-2.2-1-org.jpg', 'Sony SRS-XB13 nhỏ gọn, tích hợp dây treo dễ mang theo bên mình\r\nChất liệu vỏ nhựa cao cấp chắc chắn, có lớp UV coating hạn chế trầy xước, kích cỡ nhỏ nhắn, dây đeo dải bền cho bạn sử dụng theo nhiều cách khác nhau, dùng tại nhà, treo vào balo khi đi phượt, thậm chí là móc lên dù che nắng đặt trên bãi biển để nghe nhạc linh hoạt hơn bao giờ hết.\r\n\r\nCó 2 phiên bản cho bạn lựa chọn tùy thích: màu đen lịch lãm và màu xanh dương sang trọng.', 1, '2021-11-22 05:53:38'),
(28, 'Loa thanh Samsung HW-Q950 ', 2, 6, 33990000, 'thanh-samsung-hw-q950a-(6)-780x433.jpg', 'Thiết kế đơn giản, thanh lịch, tạo điểm nhấn cho không gian sống thêm sang trọng\r\nLoa thanh Samsung HW-Q950 có tông màu đen tối giản, thiết kế cũng khá gọn gàng không hề có nhiều dây điện như các sản phẩm khác. Vỏ được làm từ nhựa, kim loại và vải Kvadrat dễ dàng vệ sinh, đẹp mắt và cứng cáp.\r\n\r\nLoa gồm 2 bộ phần là loa thanh và loa Subwoofer kết nối không dây với nhau tiện lợi cho việc lắp đặt. ', 0, '2021-11-22 05:53:38'),
(29, 'Chuột máy tính Dell MS116 (Đen)', 7, 7, 105000, 'tải xuống.jpg', 'Đánh giá Chuột máy tính Dell MS116\r\nSơ lược sản phẩm\r\nChuột quang máy tính giá rẻ dell MS116 (đen) USB không chỉ mang đến thiết kế đơn giản và thân thiện với người dùng, mà khả năng sử dụng đem lại cũng không hề làm ta thất vọng. Đầu tiên là về ngoại hình của Chuột máy tính dell (đen) USB một lần nữa phải khẳng định rất đơn giản, nhưng chính sự đơn giản đó lại tạo nên một nét rất riêng đẳng cấp, khó lẫn với các loại chuột thông thường khác. Sản phẩm mang thiết kế đối xứng tiện dụng, các phím bấm được bố trí hợp lý giúp sử dụng một cách dễ dàng. Với độ cảm biến quang học lên tới 1000 dpi, những thao tác chuột trở nên nhanh chóng và linh hoạt, đáp ứng nhu cầu sử dụng của bạn như làm việc, học tập hay chơi game giải trí. Đầu cắm USB cho tốc độ kết nối và xử lý tín hiệu chính xác cùng tính năng Plug and Play giúp bạn đồng bộ với máy tính và sử dụng tức thời. Sản phẩm tương thích với đa dạng các hệ điều hành phổ biến hiện nay như: Windows XP, Windows 7, Windows 8, Mac OS,...', 0, '2021-11-22 06:03:15'),
(30, 'Chuột không dây HP X4000 Đen', 10, 7, 700000, 'Chuot-khong-day-HP-X4000-den-l.jpg', 'Chuột không dây HP X4000 - Tiện dụng và hiệu quả\r\nChuột không dây HP X4000 được sản xuất theo công nghệ hiện đại của HP, với các yếu tố khá hấp dẫn người mua, kiểu dáng hài hòa, rất hợp thời trang. X4000 phục vụ các nhu cầu về văn phòng, thoải mái với giải trí, thỏa mãn khi chơi game, học tập hăng say.', 1, '2021-11-22 06:05:14'),
(31, 'Apple Watch Series 7 LTE 45mm dây thép', 3, 8, 22990000, 'vi-vn-apple-watch-s7-lte-45mm-day-thep-1.jpg', 'Thiết kế thời thượng, hiện đại, mang đặc trưng của thương hiệu Apple\r\nApple Watch S7 LTE 45 mm sở hữu khung viền thép không gỉ cứng cáp, sang trọng cùng thiết kế bo cong mềm mại ở phần góc và mặt kính Sapphire có kích thước 1.77 inch (diện tích màn hình tăng 20% so với phiên bản cũ), bảo vệ tốt mặt kính trước những va đập. Phần viền đồng hồ được được làm mỏng nhẹ chỉ 1.7 mm, tạo cảm giác tràn viền nhiều hơn (phần viền mỏng hơn 60% so với Apple Watch S6).', 1, '2021-11-22 06:06:48'),
(32, 'Oppo Watch 46mm dây silicone đen', 6, 8, 5752000, 'oppo-watch-46mm-day-silicone-1-1-org.jpg', 'hiết kế sang trọng, tinh tế\r\nĐồng hồ thông minh Oppo Watch màu đen phiên bản 46mm sử dụng mặt đồng hồ vuông, bo cong nhẹ ở 4 cạnh, cùng với mặt kính bo cong 2D sang hai bên có chiều sâu tạo cảm giác như mặt kính cong 3D, màn hình AMOLED 1.91 inch độ phân giải 402 x 476 pixels, mật độ điểm ảnh 326 ppi và dải màu rộng chuẩn DCI-P3 cho chất lượng hiển thị sắc nét, sống động. Dây đeo silicone cho cảm giác mang được dễ chịu và thoải mái.\r\n\r\nDù vẻ ngoài khá giống với Apple Watch, tuy nhiên Oppo Watch vẫn có một số điểm khác như:\r\n\r\n- Cạnh phải là nơi đặt hai phím cứng, trong đó phím home có thêm đường chỉ xanh chạy dọc.\r\n\r\n- Cạnh trái là nơi đặt loa ngoài dùng để phát nhạc, cũng như đàm thoại.\r\n\r\n- Mặt sau được trang bị các cảm biến để đo nhịp tim và logo thương hiệu OPPO.', 0, '2021-11-22 06:09:05'),
(33, 'Logitech C310 HD Webcam - 720p Widescreen - Black', 12, 9, 500000, 'tải xuống (1).jpg', 'VẺ NGOÀI CHUYÊN NGHIỆP\r\nThể hiện phong cách chuyên nghiệp của bạn trong mỗi cuộc gọi video. C925e đem lại chất lượng HD 1080p/30 fps và tính năng lấy nét tự động HD cho độ rõ ràng chân thực ở trường ngắm 78° cố định, là góc độ rất phù hợp cho cá nhân. Ngoài ra, công nghệ RightLight™ 2 hoạt động nền để liên tục điều chỉnh chất lượng hình ảnh một cách thông minh.', 0, '2021-11-22 06:19:28'),
(34, 'C922 Pro HD', 12, 9, 650000, 'c922-glamour-lg.png', 'ĐƯỢC THIẾT KẾ CHO NHỮNG NGƯỜI TRUYỀN TRỰC TUYẾN THỰC SỰ\r\nKết nối với sự rõ nét ưu việt mỗi lần bạn phát trực tiếp trên các kênh như Twitch và YouTube. Truyền trực tuyến mọi thứ bạn muốn với lựa chọn Full 1080p ở 30 fps hay siêu nhanh HD 720p ở 60 fps. Truyền phát xuất sắc với âm thanh ổn định không mất mát, tính năng lấy nét tự động và góc xem chéo 78°. Bao gồm bản quyền XSplit thành viên cao cấp 3 tháng miễn phí.', 1, '2021-11-22 06:25:31'),
(35, 'SSD Samsung 870 Evo 250GB 2.5-Inch SATA III MZ-77E250BW', 7, 10, 1150000, 'cablesata-samsung-860-evo-9b0b4330-714d-47f1-a0c9-6e431d79afc4.jpg', 'Ổ cứng SSD Samsung 870 Evo là dòng ổ cứng được nâng cấp từ dòng 860 EVO danh tiếng và bán chạy nhất toàn cầu, là sự lựa chọn tốt nhất dành cho game thủ cả về giá và hiệu năng hoạt động được khẳng định và đánh giá chi tiết bởi các tạp chí công nghệ hàng đầu thế giới như Cnet, thessdreview, the PC World. TweakTown..', 1, '2021-11-22 06:27:50'),
(36, 'SSD Samsung 980 PCIe NVMe V-NAND M.2 2280 500GB MZ-V8V500BW', 7, 10, 1650000, 'mz-v8v500-01.jpg', 'Ổ cứng SSD Samsung 980 PCIe NVMe M.2 2280 V-NAND là sự lựa chọn tốt nhất hiện nay dành cho game thủ cả về giá và hiệu năng hoạt động được khẳng định và đánh giá chi tiết bởi các tạp chí công nghệ hàng đầu thế giới như Cnet, thessdreview, the PC World. TweakTown...\r\n\r\n', 1, '2021-11-22 06:31:16'),
(49, 'Samssung galaxy 20', 2, 1, 1000000, 'samsung-galaxy-a32-4g-thumb-tim-600x600-600x600.jpg', 'Mắc tiền', NULL, NULL),
(50, 'Chuột Apple', 3, 7, 40000, 'MLA02_AV1-1400x1060.jpeg', 'Rẻ', NULL, NULL),
(51, 'nhom5', 2, 1, 500000, 'MLA02_AV1-1400x1060.jpeg', 'nhom5e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại'),
(2, 'Laptop'),
(3, 'Tai nghe'),
(4, 'Bàn phím'),
(5, 'Máy Tính bảng'),
(6, 'Loa'),
(7, 'Chuột'),
(8, 'Đồng Hồ'),
(9, 'Camera'),
(10, 'Ổ cứng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin1', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'quang123', '827ccb0eea8a706c4c34a16891f84e7b', 4),
(3, 'thinh123', '827ccb0eea8a706c4c34a16891f84e7b', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
