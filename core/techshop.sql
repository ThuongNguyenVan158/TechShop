-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2022 lúc 07:09 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `techshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--
CREATE DATABASE techshop;

CREATE TABLE `bill` (
  `BillId` int(11) NOT NULL,
  `PaymentMethod` varchar(50) DEFAULT NULL,
  `TotalPrice` int(11) NOT NULL DEFAULT 0,
  `CustomerId` int(11) NOT NULL,
  `Huyen` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL,
  `Thon` varchar(50) DEFAULT NULL,
  `Tinh` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) NOT NULL,
  `Xa` varchar(50) DEFAULT NULL,
  `DateCreateBill` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`BillId`, `PaymentMethod`, `TotalPrice`, `CustomerId`, `Huyen`, `PhoneNumber`, `Thon`, `Tinh`, `UserName`, `Xa`, `DateCreateBill`) VALUES
(38, 'Ví điện tử Momo', 4140000, 27, 'Vạn Ninh', '0356210784', '123', 'Khánh Hoà', 'thuongnguyen', '123', '2022-06-04 18:38:00'),
(39, 'Ví điện tử AirPay', 12300000, 27, 'Vạn Ninh', '0356210784', '123', 'Khánh Hoà', 'thuongnguyen', '123', '2022-06-04 18:41:00'),
(40, 'Ví điện tử Momo', 91490000, 27, 'Vạn Ninh', '0356210784', '123', 'Khánh Hoà', 'thuongnguyen', '123', '2022-06-11 13:13:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billproduct`
--

CREATE TABLE `billproduct` (
  `BillId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalProductPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `billproduct`
--

INSERT INTO `billproduct` (`BillId`, `ProductId`, `ProductName`, `ProductPrice`, `Quantity`, `TotalProductPrice`) VALUES
(38, 3, 'Tai nghe Bluetooth Xiaomi ', 690000, 6, 4140000),
(39, 11, 'Xiaomi Mi 10S', 12300000, 1, 12300000),
(40, 2, 'Acer Nitro 5 gaming', 26490000, 1, 26490000),
(40, 17, 'Acer Swift 3', 13000000, 5, 65000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Point` int(11) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `BirthDay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Id`, `UserName`, `Password`, `Email`, `PhoneNumber`, `FullName`, `Gender`, `Point`, `Admin`, `BirthDay`) VALUES
(27, 'thuongnguyen', '$2y$10$onCNG/VuwSAPz/ovTTwed.wCaSTOhb0MCoFCNQ8A0Qsr/MIxxmnTy', 'thuongkhung158@gmail.com', '4336557', 'Nguyen Van Thuong 12347', 0, 1, 0, '2022-07-08'),
(28, 'hoang.vu130301', '$2y$10$CZyTRVW8c.R2eAl8DfIBh.lu/4BXtw/5fHjQBvDuAfoRxdV8GSeKe', 'a@gmail.com', '034353435345', 'Nguyen Van Thuong', 0, 1, 0, '2001-02-10'),
(29, 'thuyennong', '$2y$10$z9F.UIQP9AH/CIascPXrA.KrPPUEj9g4hEnwQtXlvYp9nYgnVF6B6', 'thuyen@gmail.com', '0', 'Nông Trọng Thuyên', 0, 1, 1, '2001-02-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `description`
--

CREATE TABLE `description` (
  `DescId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Descip` varchar(2000) NOT NULL,
  `ImgUrl` varchar(100) NOT NULL,
  `MainDesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `description`
--

INSERT INTO `description` (`DescId`, `ProductId`, `Descip`, `ImgUrl`, `MainDesc`) VALUES
(1, 3, 'Redmi Buds 3 Lite là thế hệ kế thừa của dòng Redmi Buds 3. Nó có thiết kế đơn giản kích thước không quá lớn, dễ dàng mang theo và sử dụng. Bộ tai nghe bao gồm, đầu tiên là chiếc tai nghe Xiaomi Buds 3 Lite, kèm theo đó là bộ mở rộng tai và tờ chi tiết sử dụng hỗ trợ bạn sử dụng dễ dàng hơn.\r\n\r\nTai nghe được tạo từ nhựa có dạng nhám, hạn chế được khá nhiều việc bám vết và trầy xước.\r\n\r\n', 'https://clickbuy.cdn.vccloud.vn/uploads/2022/02/redmi-buds-3-lite-global-xiaomi-21-867x540-1.jpg', 'Thiết kế đơn giản cao cấp, thoải mái sử dụng\r\n'),
(2, 3, 'Tai nghe Redmi Buds 3 Lite được trang bị một viên pin dung lượng lớn cho thời lượng sử dụng vượt trội, tới 18 giờ. Bên cạnh đó, thiết bị còn được trang bị cổng sạc Type-C giúp bổ sung năng lượng nhanh chóng.', 'https://clickbuy.cdn.vccloud.vn/uploads/2022/02/Redmi_Buds_3_Youth_Edition_Headphones_in_Ear.jpg', 'Dung lượng pin lớn, sử dụng 18 giờ'),
(3, 3, 'Về chất lượng âm thanh, Redmi Buds 3 Lite với trình điều khiển 6nm được tinh chỉnh bởi Xiaomi Sound Lab giúp mang lại chất lượng âm thanh vượt trội. Bên cạnh đó, Redmi Buds 3 Lite còn được trang bị công nghệ khử tiếng ồn mang lại những cuộc đàm thoại rõ nét.', 'https://clickbuy.cdn.vccloud.vn/uploads/2022/02/XiaomiRedmiBuds3YEvsQCYT17.jpg', 'Âm thanh chất lượng với drive 6nm, khử tiếng ồn hiệu quả\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluation`
--

CREATE TABLE `evaluation` (
  `EvalId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comment` varchar(3000) NOT NULL,
  `EvalTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `evaluation`
--

INSERT INTO `evaluation` (`EvalId`, `ProductId`, `CustomerId`, `Rating`, `Comment`, `EvalTime`) VALUES
(1, 4, 27, 3, '46636', '2022-06-05 07:04:19'),
(2, 4, 27, 3, '', '2022-06-05 07:05:21'),
(3, 4, 27, 3, '46636', '2022-06-05 07:17:25'),
(6, 3, 27, 3, '46636', '2022-06-05 07:47:15'),
(7, 3, 27, 2, '46636r66', '2022-06-05 08:13:49'),
(8, 3, 27, 2, '46636r66', '2022-06-05 08:14:11'),
(9, 2, 27, 3, 'này cùi lắm', '2022-06-11 13:11:29'),
(10, 3, 27, 3, '56756', '2022-06-11 17:37:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `ImgUrl` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Special` varchar(50) NOT NULL,
  `SellOff` int(11) NOT NULL,
  `TimeSellOff` int(11) NOT NULL,
  `OldPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductId`, `Name`, `BrandName`, `Price`, `Type`, `ImgUrl`, `Rating`, `Special`, `SellOff`, `TimeSellOff`, `OldPrice`) VALUES
(2, 'Acer Nitro 5 gaming', 'Acer', 26490000, 'laptop', 'https://laptophainam.com/wp-content/uploads/2021/12/laptop-gaming-cu-acer-nitro-5-ryzen-3.jpg', 3, 'khuyenmai', 10, 0, 29433000),
(3, 'Tai nghe Bluetooth Xiaomi ', 'headphone', 690000, 'accessory', 'https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-thumb-1-600x600.jpeg', 3, 'khuyenmai', 30, 0, 985710),
(4, 'Iphone 13 Pro Max', 'Apple', 35000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/09/13-pro-gold.jpg', 5, 'moi', 0, 0, 0),
(6, 'Iphone 13 Mini', 'Apple', 30000000, 'smartphone', 'https://vcdn-sohoa.vnecdn.net/2021/10/16/a2-1506-1634356850.jpg', 4, 'moi', 0, 0, 0),
(7, 'Xiaomi Black Shark', 'Xiaomi', 12000000, 'smartphone', 'https://cdn.tgdd.vn/Products/Images/42/217844/xiaomi-black-shark-3-600x600-2-600x600.jpg', 3, 'moi', 0, 0, 0),
(8, 'Samsung Galaxy Z Flip', 'Samsung', 30000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/08/cream-2.jpg', 4, 'banchay', 0, 0, 0),
(9, 'Samsung Fold 3', 'Samsung', 25000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/08/3-black.jpg', 2, 'banchay', 0, 0, 0),
(10, 'Samsung Galaxy A52s 5G', 'Samsung', 27000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/09/thumb_IP12Pro_3.jpg', 0, 'banchay', 0, 0, 0),
(11, 'Xiaomi Mi 10S', 'Xiaomi', 12300000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/08/2.jpg', 1, 'khuyenmai', 40, 0, 20500000),
(12, 'Xiaomi 11', 'Xiaomi', 13200000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/xiaomi-11t-001.jpg', 3, 'khuyenmai', 50, 0, 26400000),
(13, 'Oppo A74', 'Oppo', 7558000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/13-pro-black-copy.jpg', 2, 'khuyenmai', 60, 99999, 18895000),
(14, 'Oppo Reno6 Z 5G', 'Oppo', 8500000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/07/reno6z.jpg', 3, 'khuyenmai', 30, 0, 12142900),
(15, 'Realme 8 Ram 8gb', 'Realme', 6200000, 'smartphone', 'https://clickbuy.com.vn/uploads/2020/09/thumb_X7_2.jpg', 2, 'khuyenmai', 20, 0, 7750000),
(16, 'Realme X7', 'Realme', 5800000, 'smartphone', 'https://clickbuy.com.vn/uploads/2020/09/thumb_X7_2.jpg', 2, 'khuyenmai', 10, 0, 6444400),
(17, 'Acer Swift 3', 'Acer', 13000000, 'laptop', 'https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/acer-swift-3-sf313-53-bac-8.jpg', 3, 'moi', 0, 0, 0),
(18, 'Asus Zenbook', 'Asus', 19000000, 'laptop', 'https://www.sieuthimaychu.vn/datafiles/setone/15873698094282.jpg', 3, 'moi', 0, 0, 0),
(19, 'Oppo A55', 'Oppo', 4000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/oppo-a55-black.jpg', 2, 'moi', 0, 0, 0),
(20, '\r\nOppo A54', 'Oppo', 4500000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/oppo-a54-4g-black.jpg', 1, 'moi', 0, 0, 0),
(21, 'Xiaomi Redme Note 11 Pro', 'Xiaomi', 15000000, 'smartphone', 'https://cdn.mobilecity.vn/mobilecity-vn/images/2021/11/redmi-note-11-pro-xanh-rung-sau.jpg', 2, 'moi', 0, 0, 0),
(22, 'Oppo A55', 'Oppo', 4000000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/oppo-a55-black.jpg', 2, 'moi', 0, 0, 0),
(23, '\r\nOppo A54', 'Oppo', 4500000, 'smartphone', 'https://clickbuy.com.vn/uploads/2021/10/oppo-a54-4g-black.jpg', 1, 'moi', 0, 0, 0),
(25, 'Tai nghe Bluetooth Apple', 'headphone', 4990000, 'accessory', 'https://cdn.tgdd.vn/Products/Images/54/236016/bluetooth-airpods-2-apple-mv7n2-imei-ava-600x600.jpg', 4, 'banchay', 0, 0, 0),
(26, 'Dán chống xước màn hình', 'dan', 290000, 'accessory', 'https://cf.shopee.vn/file/30da670004287e6bd11cb38f731e242f', 3, 'banchay', 0, 0, 0),
(27, 'Giá Đỡ Tản Nhiệt', 'giado', 650000, 'accessory', 'https://salt.tikicdn.com/ts/product/2c/f0/66/2ab49c8adf78e3c5c804a2f74faa16fa.jpg', 3, 'banchay', 0, 0, 0),
(28, 'Chuột Apple', 'mouse', 2100000, 'accessory', 'https://cdn.tgdd.vn/Products/Images/86/251787/chuot-bluetooth-apple-mk2e3-trang-thumb-600x600.jpg', 4, 'banchay', 0, 0, 0),
(29, 'Pin dự phòng 10000mAh', 'pin', 390000, 'accessory', 'https://product.hstatic.net/1000120104/product/zv0e_4ab31f7156d3487aad79bf38a30a5690_master.jpg', 3, '', 12, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillId`),
  ADD KEY `customerid` (`CustomerId`);

--
-- Chỉ mục cho bảng `billproduct`
--
ALTER TABLE `billproduct`
  ADD PRIMARY KEY (`BillId`,`ProductId`),
  ADD KEY `productid` (`ProductId`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`DescId`),
  ADD KEY `desproid` (`ProductId`);

--
-- Chỉ mục cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EvalId`),
  ADD KEY `evalpro` (`ProductId`),
  ADD KEY `evalcusid` (`CustomerId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `BillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `description`
--
ALTER TABLE `description`
  MODIFY `DescId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `EvalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `customerid` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `billproduct`
--
ALTER TABLE `billproduct`
  ADD CONSTRAINT `billid` FOREIGN KEY (`BillId`) REFERENCES `bill` (`BillId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productid` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `desproid` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evalcusid` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evalpro` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
