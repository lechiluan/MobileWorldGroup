-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 03:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobileworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C01', 'SmartPhone', 'APPLE, OPPO, SAMSUNG'),
('C02', 'Tablet', 'APPLE, SAMSUNG, HUAWEI'),
('C03', 'Watch', 'APPLE, SAMSUNG');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Le Chi Luan', 0, 'Can Tho', '0386363677', 'luanlcgcc19023@fpt.edu.vn', 6, 6, 2001, '', '', 1),
('chiluan', 'e10adc3949ba59abbe56e057f20f883e', 'luan', 0, '6466464', '464646464', 'luan@gmail.com', 16, 5, 1983, '', '', 0),
('Finn', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'Can Tho', '0903100550', 'nhdung.CPL@gmail.com', 31, 8, 1980, '', '', 0),
('luanit', 'e10adc3949ba59abbe56e057f20f883e', 'Le Luan', 0, 'Can Tho', '03869696964', 'luanit@gmail.com', 17, 8, 1988, '', '', 0),
('ngoclan', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Thi Lan', 0, 'Can Tho', '0987654321', 'lan@gmail.com', 6, 6, 2001, '', '', 0),
('ngoctien', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Ngọc Tiên', 0, 'Cai Lậy, Tiền Giang', '0344049962', 'ngoctien@gmail.com', 19, 1, 2001, '', '', 0),
('nhdung', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'Can Tho', '0903100550', 'nhdung@gmail.com', 31, 8, 1980, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Username`, `email`, `message`) VALUES
('admin', 'bhasbubdbadab', 'dsmfkofjiefhuwebfyubfuyfbyusefgbv'),
('admin', 'luan@gmail.com', 'Good product.Thanks'),
('admin', 'dasdd', 'sasadsadsadas'),
('admin', 'asssdadadasdwqdwdwq', 'wqewqeqwewqewqhudvuvdlhduyahdiusahdiuashduisahdiusad'),
('ngoctien', 'qwq', 'eewqeeee');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` int(11) NOT NULL,
  `Product_ID` varchar(10) NOT NULL,
  `price` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `unitprice` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` bigint(20) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('P01', 'Samsung Galaxy S21 5G', 1199, 1250, 'Operating system: Android 11', '<div>\r\n	Celebrate the bustling new year with the Galaxy S21 series from Samsung . The standard version for this series is Samsung Galaxy S21 5G , featuring a borderless design, impressive camera cluster to top strong performance.</div>\r\n<div>\r\n	The new &quot;outfit&quot; is outstanding and luxurious</div>\r\n<div>\r\n	Outstanding with the newly designed rear camera cluster, the rectangular frame contains a set of 3 cameras that embraces the left edge of the smartphone , the curved frame is flexible, minimizes the protrusion compared to the back, providing the overall look is harmonious and unique.</div>\r\n<div>\r\n	Galaxy S21 has 3 main colors: Purple, silver and black. For users to freely choose to suit their own style best.</div>\r\n<div>\r\n	Samsung Galaxy S21 fully supports biometric security features, maximizes your phone security with&nbsp; ultrasonic fingerprint unlock technology placed under the screen and face security . Combined with the feature of double-touch screen brightness, you can now turn on and unlock the phone extremely quickly, conveniently and securely.</div>\r\n<div>\r\n	Galaxy S21 is a water and dust resistant phone with IP68 standard, the highest standard currently. The machine can survive a depth of 1.5m up to 30 minutes, which helps to limit the possibility of damage to the device when it is spilled, rained or accidentally dropped into the water.</div>\r\n', '2021-05-05 08:24:44', 991, 'phone1.jpg', 'C01'),
('P02', 'Iphone 12 Pro', 1300, 1400, 'Operating system: iOS 14', '<h3 12=\"\" a=\"\" and=\"\" as=\"\" breakthrough=\"\" color:=\"\" completely=\"\" dejavu=\"\" font=\"\" generation=\"\" h3=\"\" has=\"\" href=\"https://www.thegioididong.com/dtdd/iphone-12\" ifan=\"\" in=\"\" introduced=\"\" iphone=\"\" last=\"\" liberation=\"\" months=\"\" new=\"\" of=\"\" officially=\"\" one=\"\" outline:=\"\" overflow:=\"\" performance=\"\" powerful=\"\" series=\"\" style=\"margin: 30px 0px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, \" target=\"_blank\" the=\"\" them.=\"\" title=\"Check out the genuine iPhone 12 at Mobile World\" to=\"\" transformed=\"\" users=\"\" well=\"\" with=\"\" zoom:=\"\">\r\n	&nbsp;</h3>\r\n<div>\r\n	Celebrate the bustling new year with the Galaxy S21 series from Samsung . The standard version for this series is Samsung Galaxy S21 5G , featuring a borderless design, impressive camera cluster to top strong performance.</div>\r\n<div>\r\n	The new &quot;outfit&quot; is outstanding and luxurious</div>\r\n<div>\r\n	Outstanding with the newly designed rear camera cluster, the rectangular frame contains a set of 3 cameras that embraces the left edge of the smartphone , the curved frame is flexible, minimizes the protrusion compared to the back, providing the overall look is harmonious and unique.</div>\r\n<div>\r\n	Galaxy S21 has 3 main colors: Purple, silver and black. For users to freely choose to suit their own style best.</div>\r\n<div>\r\n	Samsung Galaxy S21 fully supports biometric security features, maximizes your phone security with&nbsp; ultrasonic fingerprint unlock technology placed under the screen and face security . Combined with the feature of double-touch screen brightness, you can now turn on and unlock the phone extremely quickly, conveniently and securely.</div>\r\n<div>\r\n	Galaxy S21 is a water and dust resistant phone with IP68 standard, the highest standard currently. The machine can survive a depth of 1.5m up to 30 minutes, which helps to limit the possibility of damage to the device when it is spilled, rained or accidentally dropped into the water.</div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&lt;p style=&quot;margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot; dejavu=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; freesans,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 16px;&quot;=&quot;&quot;&gt; <font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Apple has equipped its latest chip (as of 11/2020) for the iPhone 12 that is&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a14-bionic-tren-iphone-12-va-ipad-1290695\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Find out what is A14 Bionic chip?\">A14 Bionic</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;, produced on a 5-nm process with more stable performance than the A13 chip equipped on the pre-version. for&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/dtdd/iphone-11\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Check out the genuine iPhone 11 phone at Mobile World\">iPhone 11</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;.</font></p>\r\n', '2021-05-05 08:26:36', 972, 'phone2.jpg', 'C01'),
('P03', 'Samsung Galaxy A32', 399, 450, 'Operating system: Android 11', '<h3 64=\"\" a=\"\" a32=\"\" advantages=\"\" and=\"\" at=\"\" but=\"\" cameras=\"\" color:=\"\" dejavu=\"\" dir=\"ltr\" font=\"\" galaxy=\"\" good=\"\" h3=\"\" high-performance=\"\" href=\"https://www.thegioididong.com/dtdd\" id=\"docs-internal-guid-4a43fe65-7fff-5f65-8400-0a75705de22a\" is=\"\" large=\"\" liberation=\"\" many=\"\" mp=\"\" of=\"\" outline:=\"\" outstanding=\"\" overflow:=\"\" possesses=\"\" price.=\"\" processor=\"\" samsung=\"\" set=\"\" sharp=\"\" sold=\"\" style=\"margin: 30px 0px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, \" target=\"_blank\" title=\"See genuine smartphone prices\" very=\"\" with=\"\" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Trendy design with eye-catching colors</font></h3>\r\n<p 4g=\"\" a=\"\" a32=\"\" also=\"\" and=\"\" back=\"\" bringing=\"\" but=\"\" classy=\"\" dejavu=\"\" design=\"\" device=\"\" dir=\"ltr\" elegant=\"\" font=\"\" font-size:=\"\" galaxy=\"\" gloss=\"\" has=\"\" helps=\"\" high-end=\"\" increases=\"\" liberation=\"\" look=\"\" not=\"\" of=\"\" only=\"\" p=\"\" plastic=\"\" protect=\"\" samsung=\"\" simple=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" that=\"\" the=\"\" to=\"\" with=\"\">\r\n	&nbsp;</p>\r\n', '2021-05-05 08:08:53', 1999, 'phone3.jpg', 'C01'),
('P04', 'OPPO A15', 150, 180, 'Operating system: Android 11', '<h3 a=\"\" c=\"\" cho=\"\" color:=\"\" dejavu=\"\" dir=\"ltr\" h3=\"\" href=\"https://www.thegioididong.com/dtdd\" i=\"\" liberation=\"\" n=\"\" ng=\"\" ng.=\"\" nh=\"\" oppo=\"\" outline:=\"\" overflow:=\"\" p=\"\" ra=\"\" style=\"margin: 30px 0px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, \" t=\"\" target=\"_blank\" tin=\"\" title=\"Tham khảo các điện thoại chính hãng tại Thegioididong.com \" u=\"\" y=\"\" zoom:=\"\">\r\n	M&agrave;n h&igrave;nh lớn, thoải m&aacute;i xem phim, đọc b&aacute;o</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&lt;p dir=&quot;ltr&quot; style=&quot;margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot; dejavu=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; freesans,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 16px;&quot;=&quot;&quot;&gt; OPPO A15 được trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD, cho độ ph&acirc;n giải HD+ (720 x 1600 Pixels), m&agrave;n h&igrave;nh lớn 6.52 inch thoải m&aacute;i nh&igrave;n khi sử dụng, đặc biệt l&agrave; d&agrave;nh cho người lớn tuổi hay sử dụng điện thoại th&ocirc;ng minh để đọc b&aacute;o, xem tin tức.</p>\r\n', '2021-05-05 08:09:03', 499, 'phone4.jpg', 'C01'),
('T01', ' iPad Pro 11 inch Wifi 128GB', 1199, 1280, 'Operating system:	iOS 14', '<h2 a=\"\" beyond=\"\" color:=\"\" configuration=\"\" dejavu=\"\" font-size:=\"\" huge=\"\" liberation=\"\" limits=\"\" of=\"\" outline:=\"\" overflow:=\"\" p=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" the=\"\" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Powered by Apple equipped with the latest A12Z Bionic processor, the 11-inch iPad Pro has an outstanding speed, comparable to&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;current&nbsp;</font></font><a href=\"https://www.thegioididong.com/laptop\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Refer to genuine laptop laptop prices at thegioididong.com\" type=\"Tham khảo giá laptop máy tính xách tay chính hãng tại thegioididong.com\">laptop</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;models&nbsp;&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">.</font></font></h2>\r\n', '2021-05-05 08:09:15', 5000, 'tablet1.jpg', 'C02'),
('T02', 'iPad Air 4', 1000, 1100, 'Operating system:	iOS 14', '<h3 color:=\"\" dejavu=\"\" display=\"\" displays=\"\" extremely=\"\" font=\"\" font-size:=\"\" liberation=\"\" liquid=\"\" outline:=\"\" overflow:=\"\" p=\"\" retina=\"\" standard=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">iPad Air 4 is equipped with a 10.9-inch Liquid Retina display with 1640 x 2360 Pixels resolution, integrated True Tone technology with a cinematic P3 color range that will bring high display quality, color self. is almost as close as the original color.&nbsp;</font></h3>\r\n', '2021-05-05 08:09:22', 100, 'tablet2.jpg', 'C02'),
('T03', 'Samsung Galaxy Tab A7', 400, 500, 'Operating system:	Android 11', '<h3 an=\"\" big=\"\" color:=\"\" dejavu=\"\" dir=\"ltr\" endless=\"\" font=\"\" font-size:=\"\" for=\"\" liberation=\"\" outline:=\"\" overflow:=\"\" p=\"\" screen=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">The Galaxy Tab A7 carries quite a lot of inheritance from the man in the high-end segment, the&nbsp;</font><a href=\"https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-s7\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Refer to the price of genuine Samsung Galaxy Tab S7 tablets\">Galaxy Tab S7,</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;just launched not long ago, possessing a solid and seamless monolithic design, completed from aluminum with a metal frame. Classy, ​​impressive.</font></h3>\r\n', '2021-05-05 08:09:31', 600, 'tablet3.jpg', 'C02'),
('T04', 'Huawei MatePad T10s', 500, 600, 'Operating system:	Android 11', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&lt;h3 style=&quot;margin: 30px 0px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot; dejavu=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; freesans,=&quot;&quot; sans-serif;=&quot;&quot; color:=&quot;&quot; rgb(51,=&quot;&quot; 51,=&quot;&quot; 51);=&quot;&quot; outline:=&quot;&quot; none;=&quot;&quot; zoom:=&quot;&quot; 1;=&quot;&quot; overflow:=&quot;&quot; hidden;&quot;=&quot;&quot;&gt; <font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">The&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/may-tinh-bang\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; color: rgb(80, 168, 227); outline: none; zoom: 1;\" target=\"_blank\" title=\"Refer to the line of good price tablets, genuine that are doing business at Thegioididong.com\" type=\"Tham khảo các dòng máy tính bảng giá tốt, chính hãng đang kinh doanh tại Thegioididong.com\">tablet</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;&nbsp;cheap considerable expectations of&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/may-tinh-bang-huawei\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; color: rgb(80, 168, 227); outline: none; zoom: 1;\" target=\"_blank\" title=\"Check out the best price Huawei tablet models at Thegioididong.com\" type=\"Tham khảo các mẫu máy tính bảng Huawei giá tốt tại Thegioididong.com\">Huawei</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;,&nbsp;</font><a href=\"https://www.thegioididong.com/may-tinh-bang/huawei-matepad-t10s\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; color: rgb(80, 168, 227); outline: none; zoom: 1;\" target=\"_blank\" title=\"Refer to Huawei MatePad T10s tablet at Thegioididong.com \">Huawei MatePad T10s</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;has finally officially launched.&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">With the 8-core processor opens up a world of entertainment smooth, vivid every moment with a huge screen, revealing a good tablet in a price range that everyone loves.</font></font></p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2021-05-05 08:09:37', 654, 'Tablet4.jpg', 'C02'),
('W01', 'Apple Watch S6', 500, 550, 'Operating system: watchOS 7.0', '<h3 a=\"\" accessory=\"\" and=\"\" asserts=\"\" color:=\"\" dejavu=\"\" design=\"\" fashion=\"\" font=\"\" font-size:=\"\" is=\"\" its=\"\" liberation=\"\" luxurious=\"\" modern=\"\" outline:=\"\" overflow:=\"\" p=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" that=\"\" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">This&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/dong-ho-thong-minh/apple-watch-s6-40mm-vien-nhom-day-cao-su\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Apple Watch S6 40mm with aluminum rubber band sold in Gioi Di Dong\">40mm Apple Watch S6 with aluminum rubber strap</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;&nbsp;retains all the sophistication and sharpness in its design so far, the&nbsp;&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">preeminent&nbsp;</font></font><span style=\"margin: 0px; padding: 0px; text-align: center;\">Ion-X strengthened glass</span><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;, the elaborate beveled aluminum bezel and&nbsp;</font><a href=\"https://www.thegioididong.com/dong-ho-thong-minh?g=silicon\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\">the high strap. rubber</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;elastic good, soft hands.</font></h3>\r\n', '2021-05-05 08:09:50', 599, 'watch1.jpg', 'C03'),
('W02', 'Huami Amazfit GTS', 199, 250, 'Operating system: watchOS 7.0', '<h3 and=\"\" color:=\"\" dejavu=\"\" font=\"\" font-size:=\"\" liberation=\"\" outline:=\"\" overflow:=\"\" p=\"\" personality=\"\" sports=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" zoom:=\"\">\r\n	<a href=\"https://www.thegioididong.com/dong-ho-thong-minh/huami-amazfit-gts-vang\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"See also the Huami Amazfit GTS gold-colored smartwatch\">Huami Amazfit GTS smart watch yellow version</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;with a multifaceted design similar to&nbsp;</font><a href=\"https://www.thegioididong.com/tim-kiem?key=apple\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"See more Apple Watch models\">Apple Watch</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;, 1.65 inch screen with a resolution of 348 x 442 pixels to help display information, images clear and sharp.&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Comes with&nbsp;</font></font><a href=\"https://www.thegioididong.com/day-dong-ho\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"See also watch strap\">a</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;20mm silicone&nbsp;</font><a href=\"https://www.thegioididong.com/day-dong-ho\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"See also watch strap\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">strap</font></a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;that feels extremely soft and comfortable to wear.</font></font></h3>\r\n', '2021-05-05 08:10:05', 969, 'watch2.jpg', 'C03'),
('W03', 'Oppo Watch', 399, 450, 'Operating system: watchOS 7.0', '<h3 and=\"\" color:=\"\" dejavu=\"\" delicate=\"\" font=\"\" font-size:=\"\" liberation=\"\" luxurious=\"\" outline:=\"\" overflow:=\"\" p=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Smart watch&nbsp;&nbsp;</font><a href=\"https://www.thegioididong.com/tim-kiem?key=oppo+watch\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Oppo Watch\" type=\"Oppo Watch\">Oppo Watch&nbsp;</a>&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-thong-minh/oppo-watch-46mm-day-silicone\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"Oppo Watch 46 mm đen\" type=\"Oppo Watch 46 mm đen\">black version of 46mm</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;using the clock face square, boron slight curve at 4 sides, with glass bo curved 2D lateral depth feels like the curved 3D AMOLED 1.91 inch with resolution of 402 x 476 pixels, pixel density of 326 ppi and wide color range of standard DCI-P3 for sharp, vivid display quality.&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;Silicone&nbsp;</font></font><a href=\"https://www.thegioididong.com/day-dong-ho\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"strap\" type=\"dây đeo\">strap</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;for a comfortable and comfortable carry feel.</font></h3>\r\n<p a=\"\" although=\"\" appearance=\"\" apple=\"\" but=\"\" dejavu=\"\" font=\"\" font-size:=\"\" has=\"\" href=\"https://www.thegioididong.com/tim-kiem?key=oppo+watch\" is=\"\" liberation=\"\" oppo=\"\" other=\"\" p=\"\" points=\"\" quite=\"\" similar=\"\" some=\"\" still=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" such=\"\" target=\"_blank\" the=\"\" title=\"See more Oppo brand smart watch models\" to=\"\" type=\"Xem thêm các mẫu đồng hồ thông minh thương hiệu Oppo\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">- The right edge is where two hard keys are located, in which the home key has more green lines running along.</font></p>\r\n<p -=\"\" as=\"\" dejavu=\"\" font=\"\" font-size:=\"\" is=\"\" left=\"\" liberation=\"\" p=\"\" play=\"\" side=\"\" speakerphone=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" the=\"\" to=\"\" used=\"\" well=\"\" where=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">- The back is equipped with sensors to measure heart rate and the&nbsp;</font><a href=\"https://www.thegioididong.com/dtdd-oppo\" style=\"margin: 0px; padding: 0px; text-decoration-line: none; color: rgb(80, 168, 227);\" target=\"_blank\" title=\"oppo\" type=\"oppo\">OPPO</a><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">&nbsp;brand logo&nbsp;&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">.</font></font></p>\r\n<div>\r\n	&nbsp;</div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&lt;h3 style=&quot;margin: 30px 0px 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot; dejavu=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; freesans,=&quot;&quot; sans-serif;=&quot;&quot; color:=&quot;&quot; rgb(51,=&quot;&quot; 51,=&quot;&quot; 51);=&quot;&quot; outline:=&quot;&quot; none;=&quot;&quot; zoom:=&quot;&quot; 1;=&quot;&quot; overflow:=&quot;&quot; hidden;&quot;=&quot;&quot;&gt; &nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2021-05-05 08:10:11', 852, 'watch3.jpg', 'C03'),
('W04', 'Huawei Watch Fit', 220, 300, 'Operating system: watchOS 7.0', '<h3 according=\"\" change=\"\" color:=\"\" dejavu=\"\" easily=\"\" face=\"\" font-size:=\"\" liberation=\"\" outfit=\"\" outline:=\"\" overflow:=\"\" p=\"\" strong=\"\" style=\"margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" the=\"\" to=\"\" watch=\"\" zoom:=\"\">\r\n	<font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">Besides the unique watch faces available from Huawei, you can also choose freely from the Watch Face Store or create your own from your personal photo gallery.&nbsp;</font><font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">In addition, Huawei Watch Fit supports changing watch face themes to match your everyday outfit.</font></font> &lt;p style=&quot;margin: 10px 0px; padding: 0px; margin-block: 0px; text-rendering: geometricprecision; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot; dejavu=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; freesans,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 16px;&quot;=&quot;&quot;&gt; <font style=\"margin: 0px; padding: 0px; vertical-align: inherit;\">You can prioritize displaying the information you care about most such as heart rate, distance, battery life, weather ... on the main watch face.</font></h3>\r\n', '2021-05-05 08:10:17', 400, 'watch4.jpg', 'C03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Username`,`message`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderID`,`Product_ID`),
  ADD KEY `2` (`Product_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`) USING BTREE,
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customer` (`Username`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customer` (`Username`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
