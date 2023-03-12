-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2021 lúc 12:19 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(225) NOT NULL,
  `iduser` varchar(50) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(10, 'Dễ thương quá đê shop ơi', 'hongphuong', 12, '06:06:34am 22/11/21'),
(11, 'Aó ni còn hàng ko shop', 'hongphuong', 6, '06:09:27am 22/11/21'),
(13, 'Đẹp quá', 'hongphuong', 11, '05:15:42pm 22/11/21'),
(14, 'Qúa đẹp', 'hongphuong', 11, '05:15:54pm 22/11/21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Quần áo thể thao'),
(2, 'Quần áo nam'),
(3, 'Quần áo nữ'),
(4, 'Trẻ em'),
(5, 'Gia đình'),
(6, 'Phụ Kiện'),
(7, 'Giày dép');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(350) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `subject_name`, `note`, `status`, `created_at`) VALUES
(1, 'Phương', 'Mang Hồng', 'hp205125@gmail.com', '0853736682', 'Mang Hồng Phương', 'Shop ra nhiều sản phẩm nha shop, e rất ưng cái shop này ghê há', 0, NULL),
(4, 'Cường', 'Tấn', 'tc32444@gmail.com', '0853736432', 'Nguyễn Tấn Cường', 'shop ơi cứ yên tâm đã có Cường ở đây bảo kê rồi . ', 0, NULL),
(5, 'văn', 'thủy', 'vt3546@gmail.com', '0853736346', 'Nguyễn Văn Thủy', 'ta cx như mày há Cường', 0, NULL),
(7, 'Phương', 'Hồng Phương', 'hp205125@gmail.com', '0853736682', 'Mang Hồng Phương', 'shop ', 0, NULL),
(8, 'Phương', 'Hồng', 'hp205125@gmail.com', '0853736682', 'Mang Hồng Phương', 'bvnvm, m', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_tv` int(11) NOT NULL COMMENT '1.Mang Hồng Phương 2.Nguyễn Tấn Cường 3.Nguyễn Văn Thủy',
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `chitiet` text NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `id_tv`, `name`, `img`, `mota`, `chitiet`, `day`) VALUES
(12, 1, 'SIÊU SALE 12.12 - SALE TO CUỐI NĂM - ĐỒNG GIÁ 12K', 'tt1.jpg', 'ShopFashion siêu sale cuối năm – chơi lớn giảm giá nhiều mặt hàng đồ đông cực hot chỉ với 12K. Dịp 12.12 cũng là cơ hội cuối để bạn có thể mua được nhiều sản phẩm thời trang trend với giá tốt nhất. ', '<p><span style=\"color:#3498db\"><strong>ShopFashion</strong></span> si&ecirc;u sale cuối năm &ndash; chơi lớn giảm gi&aacute; nhiều mặt h&agrave;ng đồ đ&ocirc;ng cực hot chỉ với 12K. Dịp 12.12 cũng l&agrave; cơ hội cuối để bạn c&oacute; thể mua được nhiều sản phẩm thời trang trend với gi&aacute; tốt nhất.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">&Aacute;p dụng đặt h&agrave;ng online tại trang website của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> hoặc mua trực tiếp tại tất cả c&aacute;c cửa h&agrave;ng thuộc hệ thống <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> tr&ecirc;n to&agrave;n quốc.&nbsp;</p>\r\n\r\n<p>Thời gian bắt đầu chương tr&igrave;nh bắt đầu từ ng&agrave;y 3/12 đến 12/12. Sản phẩm hot &ndash; ưu đ&atilde;i chưa từng c&oacute; &ndash; chia sẻ ngay với bạn b&egrave; để c&ugrave;ng gh&eacute; <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> để sắm ngay về nh&agrave; th&ocirc;i n&agrave;o.</p>\r\n\r\n<p>Khi mua h&agrave;ng trong khu vực sale, đối với sản phẩm thứ 2,4,6,... c&oacute; gi&aacute; trị thấp hơn hoặc bằng th&igrave; kh&aacute;ch h&agrave;ng sẽ được mua với gi&aacute; 12K. C&aacute;c sản phẩm trong chương tr&igrave;nh bạn c&oacute; thể gh&eacute; xem tại mục 12.12 SALE nh&eacute;!</p>\r\n\r\n<p>Lưu &yacute;:&nbsp;</p>\r\n\r\n<p>- Chương tr&igrave;nh chỉ &aacute;p dụng trong khu vực c&aacute;c sản phẩm sale.</p>\r\n\r\n<p>- Gi&aacute; 12K chỉ &aacute;p dụng cho sản phẩm c&oacute; gi&aacute; trị thấp hơn hoặc bằng.&nbsp;</p>\r\n\r\n<p>- Chương tr&igrave;nh &aacute;p dụng với cả h&agrave;ng nam v&agrave; nữ.</p>\r\n\r\n<p>Đặc biệt, kh&ocirc;ng giới hạn số lượng mua của mỗi kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n\r\n<p>H&atilde;y đến ngay c&aacute;c Cửa h&agrave;ng của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> gần nhất hoặc gh&eacute; ngay trang Website của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> để mua sắm ngay.&nbsp;</p>\r\n', '09:22:35am 05/12/2021'),
(13, 2, 'BLACK FRIDAY COMEBACK TẠI FM - GIẢM GIÁ 70% TẤT CẢ', 'tt2.jpg', 'Black Friday đang quay trở lại tại FM, giảm giá 70% tất cả các mặt hàng. \r\nÁp dụng đặt hàng online tại trang website của FM hoặc mua trực tiếp tại tất cả các cửa hàng thuộc hệ thống FM trên toàn quốc.', '<p>Black Friday đang quay trở lại tại <span style=\"color:#3498db\"><strong>ShopFashion</strong></span>, giảm gi&aacute; 70% tất cả c&aacute;c mặt h&agrave;ng.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">&Aacute;p dụng đặt h&agrave;ng online tại trang website của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> hoặc mua trực tiếp tại tất cả c&aacute;c cửa h&agrave;ng thuộc hệ thống <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> tr&ecirc;n to&agrave;n quốc.&nbsp;</p>\r\n\r\n<p>Thời gian bắt đầu chương tr&igrave;nh bắt đầu từ ng&agrave;y&nbsp;<strong>25</strong><strong>/11 đến 30/11</strong>. Sản phẩm hot &ndash; si&ecirc;u ưu đ&atilde;i &ndash; chia sẻ ngay với bạn b&egrave; để c&ugrave;ng gh&eacute; <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> mang cả &ldquo;kho &aacute;o quần&rdquo; về nh&agrave; nh&eacute;!</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<ul>\r\n	<li>Kh&ocirc;ng &aacute;p dụng đồng thời với c&aacute;c chương tr&igrave;nh khuyến m&atilde;i/chiết khấu kh&aacute;c.</li>\r\n	<li><strong>Kh&ocirc;ng bao gồm c&aacute;c sản phẩm &lt;=70.000, sản phẩm kh&ocirc;ng chiết khấu</strong></li>\r\n	<li>Chương tr&igrave;nh &aacute;p dụng với cả h&agrave;ng nam v&agrave; nữ, em b&eacute;.</li>\r\n</ul>\r\n\r\n<p>Đặc biệt, kh&ocirc;ng giới hạn số lượng mua của mỗi kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n\r\n<p>H&atilde;y đến ngay c&aacute;c Cửa h&agrave;ng của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> gần nhất hoặc gh&eacute; ngay trang Website của&nbsp;<span style=\"color:#3498db\"><strong>ShopFashion</strong></span> để mua sắm ngay nh&eacute;!</p>\r\n', '09:25:19am 05/12/2021'),
(14, 3, 'SIÊU SALE 11/11 - GIẢM 50% HÀNG NGÀN SẢN PHẨM NAM ', 'tt3.jpg', 'ShopFashion  gửi tới khách hàng chương trình ưu đãi cực lớn, từ ngày 11 - 14/11 Hệ thống thời trang ShopFashion giảm 50% hàng ngàn sản phẩm thu đông hot - Săn hàng xịn chưa bao giờ \"đã\" đến thế', '<h2 style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong>GIẢM 50% H&Agrave;NG NG&Agrave;N SẢN PHẨM NAM NỮ CỰC HOT</strong></span></h2>\r\n\r\n<p><span style=\"color:#3498db\"><strong>ShopFashion</strong></span> gửi tới kh&aacute;ch h&agrave;ng chương tr&igrave;nh ưu đ&atilde;i cực lớn, từ ng&agrave;y 11 - 14/11 Hệ thống thời trang <span style=\"color:#3498db\"><strong>ShopFashion</strong></span> giảm 50% h&agrave;ng ng&agrave;n sản phẩm thu đ&ocirc;ng hot - Săn h&agrave;ng xịn chưa bao giờ &quot;đ&atilde;&quot; đến thế</p>\r\n\r\n<p>Chương tr&igrave;nh ưu đ&atilde;i &aacute;p dụng tại tất cả chi nh&aacute;nh của <span style=\"color:#3498db\"><strong>ShopFashion</strong></span></p>\r\n\r\n<p>Điều kiện &aacute;p dụng:&nbsp;</p>\r\n\r\n<p>- Khi mua 1 sản phẩm nguy&ecirc;n gi&aacute; bạn sẽ được mua k&egrave;m 1 sản phẩm trong khu vực giảm 50%&nbsp;</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p>- Chương tr&igrave;nh chỉ &aacute;p dụng cho kh&aacute;ch h&agrave;ng mua h&agrave;ng trực tiếp tại cửa h&agrave;ng&nbsp;</p>\r\n\r\n<p>- Chương tr&igrave;nh chỉ &aacute;p dụng cho h&agrave;ng nam/nữ&nbsp;</p>\r\n', '09:30:18am 05/12/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Chuyển khoản trực tuyến 2. Kiểm tra thanh toán 3.Paypal',
  `note` varchar(1000) DEFAULT NULL,
  `order_date` varchar(50) DEFAULT NULL,
  `delivery_date` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Chưa xử lý 2.Đang giao hàng 3.Đã giao hàng',
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `pttt`, `note`, `order_date`, `delivery_date`, `status`, `total_money`) VALUES
(91, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 2, '', '05/12/2021', '05/12/2021', 3, 190000),
(92, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 1, '', '05/12/2021', '13/12/2021', 2, 360000),
(93, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 2, '', '05/12/2021', '13/12/2021', 1, 360000),
(94, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 2, 'giao nhanh nha shop', '05/12/2021', '', 0, 420000),
(95, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 0, 'giao hang nhnh', '05/12/2021', '', 0, 170000),
(96, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 2, '', '05/12/2021', '', 0, 420000),
(97, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 2, 'giao hàng', '05/12/2021', '', 0, 190000),
(98, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 1, '', '05/12/2021', '', 0, 360000),
(99, 1, 'mang hong phuong', NULL, '0853737789', 'Khánh Hòa', 0, '', '05/12/2021', '', 0, 314000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `iduser`, `order_id`, `product_id`, `name`, `img`, `price`, `num`, `total_money`) VALUES
(29, 4, 34, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(30, 4, 35, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(31, 4, 36, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(32, 4, 37, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(33, 4, 38, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(34, 4, 39, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(35, 4, 39, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(36, 4, 40, 6, 'ÁO SƠ MI CỔ BẺ TAY DÀI TAY PHỒNG', 'n5.jpg', 155000, 1, 155000),
(37, 4, 41, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(39, 4, 43, 5, 'QUẦN BAGGY ĐAI TRƯỚC CH2402C', 'n4.jpg', 235000, 1, 235000),
(40, 4, 43, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(41, 4, 44, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(42, 4, 45, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(43, 4, 45, 10, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 'b3.jpg', 235000, 1, 235000),
(44, 4, 46, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(45, 4, 47, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(46, 4, 48, 7, 'ÁO KHOÁC ẤM CHO BÉ', 'n6.jpg', 405000, 1, 405000),
(47, 4, 49, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(48, 4, 50, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(49, 4, 51, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(50, 4, 52, 10, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 'b3.jpg', 235000, 1, 235000),
(51, 4, 52, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(52, 4, 53, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(53, 4, 53, 6, 'ÁO SƠ MI CỔ BẺ TAY DÀI TAY PHỒNG', 'n5.jpg', 155000, 1, 155000),
(54, 4, 54, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(55, 4, 54, 6, 'ÁO SƠ MI CỔ BẺ TAY DÀI TAY PHỒNG', 'n5.jpg', 155000, 1, 155000),
(56, 4, 55, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(57, 4, 55, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(58, 4, 55, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(59, 4, 58, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(60, 4, 58, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(61, 4, 59, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(62, 4, 59, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(63, 4, 60, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(64, 4, 60, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(65, 4, 61, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(66, 4, 61, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(67, 4, 62, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(68, 4, 62, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(69, 4, 63, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(70, 4, 63, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(71, 4, 65, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(72, 4, 68, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(73, 4, 69, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(74, 4, 69, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(75, 4, 70, 10, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 'b3.jpg', 235000, 1, 235000),
(76, 4, 70, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(77, 4, 70, 5, 'QUẦN BAGGY ĐAI TRƯỚC CH2402C', 'n4.jpg', 235000, 1, 235000),
(78, 4, 71, 10, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 'b3.jpg', 235000, 1, 235000),
(79, 4, 72, 10, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 'b3.jpg', 235000, 1, 235000),
(80, 4, 73, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(81, 4, 78, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(82, 4, 81, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(83, 4, 82, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(84, 4, 83, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(85, 4, 85, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(86, 4, 85, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(87, 4, 86, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(88, 1, 87, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000),
(89, 1, 87, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(90, 1, 88, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(91, 0, 89, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(92, 1, 90, 11, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 'b4.jpg', 335000, 1, 335000),
(93, 1, 91, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(94, 1, 92, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(95, 1, 93, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(96, 1, 94, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(97, 1, 95, 6, 'ÁO SƠ MI CỔ BẺ TAY DÀI TAY PHỒNG', 'n5.jpg', 155000, 1, 155000),
(98, 1, 96, 13, 'ÁO KHOÁC ẤM CHO BÉ', '11.jpg', 405000, 1, 405000),
(99, 1, 97, 12, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 'e1.jpg', 175000, 1, 175000),
(100, 1, 98, 8, 'KHOÁC GIÓ NAM 2 LỚP', 'b1.jpg', 345000, 1, 345000),
(101, 1, 99, 9, 'ÁO LEN CỔ TRÒN THỔ CẨM', 'b2.jpg', 299000, 1, 299000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `mota` longtext DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `img`, `mota`, `created_at`, `updated_at`) VALUES
(2, 3, 'ÁO KIỂU TÀ CHÉO CÀI NÚT BỌC', 145000, NULL, 'n1.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Ngắn tay</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổ &aacute;o</td>\r\n			<td>Cổ V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>Trơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Xu&acirc;n&nbsp;Hạ&nbsp;Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Thanh lịch&nbsp;Hấp Dẫn&nbsp;Dễ Thương&nbsp;Cơ bản</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>M&ocirc; tả sản phẩm</h3>\r\n\r\n<p>Nội dung sản phẩm đang cập nhật...</p>\r\n', NULL, NULL),
(3, 3, 'KHOÁC NHUNG NỮ', 239000, NULL, 'n2.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Tay d&agrave;i c&oacute; mũ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>Trơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Xu&acirc;n&nbsp;Hạ&nbsp;Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Thể thao&nbsp;Giải tr&iacute;&nbsp;Boho&nbsp;Gợi cảm&nbsp;Thanh lịch&nbsp;Hấp Dẫn&nbsp;Dễ Thương&nbsp;Sẵn s&agrave;ng&nbsp;Cơ bản&nbsp;Khi&ecirc;m tốn&nbsp;L&atilde;ng mạn&nbsp;Retro</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><strong>M&ocirc; tả sản phẩm</strong></h3>\r\n\r\n<p>&Aacute;o kho&aacute;c nhung nữ l&agrave; mẫu &aacute;o kho&aacute;c mới ra từ đầu m&ugrave;a đ&ocirc;ng 2021 của nh&agrave; FM. Với thiết kế thời trang, trending c&ugrave;ng chất liệu nhung g&acirc;n d&agrave;y, mịn v&agrave; giữ ấm cao v&agrave; d&aacute;ng croptop, bo chun eo lạ mắt chắc chắn mẫu n&agrave;y sẽ được c&aacute;c n&agrave;ng săn l&ugrave;ng trong thời gian tới.</p>\r\n\r\n<p>- Chất liệu: vải nhung g&acirc;n, chất liệu vải kh&aacute; mịn, mượt v&agrave; xốp với khả năng giữ ấm kh&aacute; tốt, lại c&oacute; m&agrave;u sắc ưa nh&igrave;n hơn rất nhiều so với vải len.</p>\r\n\r\n<p>- M&agrave;u sắc: hồng, xanh l&aacute;, n&acirc;u, v&agrave;ng, ghi</p>\r\n\r\n<p>- &Aacute;o tay d&agrave;i, c&oacute; d&acirc;y k&eacute;o cực k&igrave; d&agrave;y dặn</p>\r\n\r\n<p>- Kiểu mẫu trơn, basic c&oacute; thể kết hợp với nhiều kiểu &aacute;o</p>\r\n\r\n<p>- Hướng dẫn bảo quản: c&oacute; thể giặt tay v&agrave; giặt m&aacute;y</p>\r\n\r\n<p>Ph&ugrave; hợp cho:</p>\r\n\r\n<p>- &Aacute;o kho&aacute;c chống gi&oacute;, nắng, mưa, bụi</p>\r\n\r\n<p>- C&oacute; mũ đội che k&iacute;n đầu, c&oacute; thể th&aacute;o rời, gi&uacute;p tr&aacute;nh nắng tr&aacute;nh gi&oacute; lại rất thời trang</p>\r\n\r\n<p>- C&oacute; thể mua để l&agrave;m &aacute;o đ&ocirc;i rất đẹp</p>\r\n\r\n<p>- C&oacute; thể kết hợp với ch&acirc;n v&aacute;y, quần jean, quần ống rộng để mang đi l&agrave;m hoặc đi học</p>\r\n\r\n<p>Th&ocirc;ng số kĩ thuật:</p>\r\n\r\n<p>- &Aacute;o freesize</p>\r\n', NULL, '0000-00-00'),
(4, 3, 'ÁO CỔ VEST CHẠY CHỈ NỔI', 139000, NULL, 'n3.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td><a href=\"https://fmstyle.com.vn/\">Fmstyle</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Ngắn tay</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổ &aacute;o</td>\r\n			<td>Cổ V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>Vải đũi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>Trơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Xu&acirc;n&nbsp;Hạ&nbsp;Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Gợi cảm&nbsp;Thanh lịch&nbsp;Hấp Dẫn&nbsp;Dễ Thương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><strong>M&ocirc; tả sản phẩm</strong></h3>\r\n\r\n<p>&nbsp;&Aacute;o xinh em về đủ m&agrave;u như ảnh. Chất cao cấp chất nhẹ m&aacute;t.</p>\r\n\r\n<p>Em n&agrave;y đẹp từ form d&aacute;ng cho đến m&agrave;u sắc. Mix g&igrave; cũng cho ra những outfit xịn x&ograve; <img alt=\"????\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t58/1/16/1f929.png\" width=\"16\" /></p>\r\n\r\n<p>Nhanh tay rinh em ấy về để mặc đi l&agrave;m, đi chơi c&aacute;c chị ạ <img alt=\"????\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t57/1/16/1f609.png\" width=\"16\" /></p>\r\n', NULL, '0000-00-00'),
(5, 3, 'QUẦN BAGGY ĐAI TRƯỚC CH2402C', 235000, NULL, 'n4.jpg', '', NULL, '0000-00-00'),
(6, 3, 'ÁO SƠ MI CỔ BẺ TAY DÀI TAY PHỒNG', 155000, NULL, 'n5.jpg', '', NULL, '0000-00-00'),
(7, 3, 'SET  KHOÁC CỔ SEN 2 TÚI 3 NÚT NGỌC', 405000, NULL, 'n6.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Tay D&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổ &aacute;o</td>\r\n			<td>Cổ Vest</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>Nỉ&nbsp;B&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Dễ Thương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>M&ocirc; tả sản phẩm</h3>\r\n\r\n<p>????TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- T&ecirc;n sản phẩm: &Aacute;o kho&aacute;c ấm cho b&eacute; si&ecirc;u xinh&nbsp;</p>\r\n\r\n<p>- M&ocirc; tả sản phẩm:</p>\r\n\r\n<p>&nbsp;✔️&Aacute;o kho&aacute;c&nbsp; với c&aacute;c họa tiết sọc caro ph&ugrave; hợp cho b&eacute; g&aacute;i mặc ở nh&agrave;, đi chơi, sinh hoạt ngo&agrave;i trời.&nbsp;</p>\r\n\r\n<p>✔️Chất liệu: l&ocirc;ng cừu mền mại giữ ấm cho b&eacute;</p>\r\n', NULL, '0000-00-00'),
(8, 2, 'KHOÁC GIÓ NAM 2 LỚP', 345000, NULL, 'b1.jpg', '', NULL, '0000-00-00'),
(9, 2, 'ÁO LEN CỔ TRÒN THỔ CẨM', 299000, NULL, 'b2.jpg', '', NULL, '0000-00-00'),
(10, 2, 'ÁO THUN NAM CỔ BẺ SỌC NGANG', 235000, NULL, 'b3.jpg', '', NULL, '0000-00-00'),
(11, 2, 'QUẦN JEAN NAM XÁM, RÁCH GỐI 1382', 335000, NULL, 'b4.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu quần</td>\r\n			<td>Ch&acirc;n thẳng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i quần</td>\r\n			<td>D&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>Jean</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>Trơn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Xu&acirc;n&nbsp;Hạ&nbsp;Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Thể thao&nbsp;Giải tr&iacute;&nbsp;Thanh lịch&nbsp;Cơ bản</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>M&ocirc; tả sản phẩm</h3>\r\n\r\n<p>Những chiếc quần jean năng động như thế n&agrave;y l&agrave;m sao c&oacute; thể thiếu trong tủ đồ của c&aacute;c ch&agrave;ng đ&uacute;ng kh&ocirc;ng n&agrave;o? Quần nh&agrave; FM với m&agrave;u sắc nhẹ nh&agrave;ng c&ugrave;ng kiểu d&aacute;ng basic hẳn sẽ l&agrave; item kh&ocirc;ng thể thiếu trong tủ đồ của mọi người.</p>\r\n\r\n<p>- Chất liệu: Jean b&ograve; l&agrave; loại vải th&ocirc; được sản xuất từ chất liệu Cotton Duck c&oacute; m&agrave;u xanh đặc trưng. Vải c&oacute; đặc t&iacute;nh bền bỉ, kh&ocirc;ng co nhăn, m&ograve;n r&aacute;ch như nhiều chất vải kh&aacute;c sau mỗi nhiều lần giặt.</p>\r\n\r\n<p>- M&agrave;u sắc: xanh dương</p>\r\n\r\n<p>- Kiểu quần trơn, kh&ocirc;ng r&aacute;ch</p>\r\n\r\n<p>- From d&aacute;ng &ocirc;m s&aacute;t cơ thể, d&aacute;ng đứng tạo cảm gi&aacute;c người mặc ch&acirc;n d&agrave;i hơn</p>\r\n\r\n<p>- Hướng dẫn bảo quản: FM khuyến kh&iacute;ch bạn n&ecirc;n giặt tay, v&igrave; quần jean giặt m&aacute;y n&oacute; sẽ nhanh d&atilde;n hơn giặt tay</p>\r\n\r\n<p>Ph&ugrave; hợp cho:</p>\r\n\r\n<p>- Quần jean c&oacute; thể phối với &aacute;o thun để mặc đi chơi</p>\r\n\r\n<p>- C&oacute; thể phối với sơ mi, &aacute;o len, &aacute;o polo để mặc đi l&agrave;m</p>\r\n\r\n<p>Th&ocirc;ng số kĩ thuật: - C&oacute; c&aacute;c size 28, 29, 30, 31, 32</p>\r\n', NULL, '0000-00-00'),
(12, 4, 'VÁY CÔNG CHÚA CHO BÉ YÊU', 175000, NULL, 'e1.jpg', '<h1><strong>Chi tiết sản phẩm</strong></h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Tay D&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổ &aacute;o</td>\r\n			<td>Cổ tr&ograve;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>Voan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Dễ Thương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h1><strong>M&ocirc; tả sản phẩm</strong></h1>\r\n\r\n<p>T&ecirc;n sản phẩm: V&aacute;y cho b&eacute; si&ecirc;u dễ thương fmstyle d&agrave;nh cho b&eacute; từ 11-17kg</p>\r\n\r\n<p>- M&ocirc; tả sản phẩm:</p>\r\n\r\n<p>&nbsp;✔️V&aacute;y c&ocirc;ng ch&uacute;a si&ecirc;u xinh cho b&eacute; diện đi chơi đi tiệc.&nbsp;</p>\r\n\r\n<p>✔️Chất liệu: sợi tổng hợp dẹt kim mềm m&aacute;t mịn</p>\r\n', NULL, '0000-00-00'),
(13, 4, 'ÁO KHOÁC ẤM CHO BÉ', 405000, NULL, '11.jpg', '<h3><strong>Chi tiết sản phẩm</strong></h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>ShopFashion</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i tay &aacute;o</td>\r\n			<td>Tay D&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổ &aacute;o</td>\r\n			<td>Cổ Vest</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ</td>\r\n			<td>Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chất liệu</td>\r\n			<td>Nỉ&nbsp;B&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kiểu mẫu</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&ugrave;a</td>\r\n			<td>Thu&nbsp;Đ&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phong c&aacute;ch</td>\r\n			<td>Dễ Thương</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kho h&agrave;ng</td>\r\n			<td>...</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gửi từ</td>\r\n			<td>...</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><strong>M&ocirc; tả sản phẩm</strong></h3>\r\n\r\n<p>????TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- T&ecirc;n sản phẩm: &Aacute;o kho&aacute;c ấm cho b&eacute; si&ecirc;u xinh&nbsp;</p>\r\n\r\n<p>- M&ocirc; tả sản phẩm:</p>\r\n\r\n<p>&nbsp;✔️&Aacute;o kho&aacute;c&nbsp; với c&aacute;c họa tiết sọc caro ph&ugrave; hợp cho b&eacute; g&aacute;i mặc ở nh&agrave;, đi chơi, sinh hoạt ngo&agrave;i trời.&nbsp;</p>\r\n\r\n<p>✔️Chất liệu: l&ocirc;ng cừu mền mại giữ ấm cho b&eacute;</p>\r\n', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `chucvu` varchar(225) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `fullname`, `email`, `address`, `phone_number`, `chucvu`, `role_id`) VALUES
(1, 'Mang Hồng Phương', 'phuongmhpd04395@fpt.edu.vn', 'Khánh Hòa', '0853737789', 'Quản trị viên ', 1),
(2, 'Nguyễn Tấn Cường', 'tc32444@gmail.com', 'Quảng Ngãi', '082324354', 'Nhân viên', 1),
(3, 'Nguyễn Văn Thủy', 'vt3546@gmail.com', 'Quảng Trị', '0645342446', 'Nhân viên', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ma` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `chucvu` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ma`, `username`, `fullname`, `email`, `phone_number`, `address`, `password`, `chucvu`, `role_id`) VALUES
(1, 'hongphuong', 'mang hong phuong', 'phuongmhpd04395@fpt.edu.vn', '0853737789', 'Khánh Hòa', '12345678', NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tv_lk_news` (`id_tv`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_thanhvien` (`role_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `tv_lk_news` FOREIGN KEY (`id_tv`) REFERENCES `thanhvien` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `role_thanhvien` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
