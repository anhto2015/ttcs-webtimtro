-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2019 lúc 04:27 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtimtro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblanh`
--

CREATE TABLE `tblanh` (
  `Idanh` int(11) NOT NULL,
  `Idtin` int(11) NOT NULL,
  `Lienket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblanh`
--

INSERT INTO `tblanh` (`Idanh`, `Idtin`, `Lienket`) VALUES
(1, 1, '20180825_154220_5cacb55ba902d77297d6279dcab4208e.jpg'),
(2, 1, '20180825_154229_13f322a820b9faf3b862e9c9c9055967.jpg'),
(3, 1, '20180825_154247_4996376d9f666ef63a4e3796da484bc6.jpg'),
(4, 2, '1567133658.jpg'),
(5, 2, '1567133669.jpg'),
(6, 2, '1567133681.jpg'),
(7, 2, '1567134440.jpg'),
(8, 3, '1575343826.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaitin`
--

CREATE TABLE `tblloaitin` (
  `Malt` int(11) NOT NULL,
  `Tenlt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblloaitin`
--

INSERT INTO `tblloaitin` (`Malt`, `Tenlt`) VALUES
(1, 'Phòng trọ'),
(2, 'Ở ghép'),
(3, 'Chung cư mini');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblphuong`
--

CREATE TABLE `tblphuong` (
  `Idphuong` int(11) NOT NULL,
  `Tenphuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblphuong`
--

INSERT INTO `tblphuong` (`Idphuong`, `Tenphuong`) VALUES
(10, 'Bến Thủy'),
(11, 'Cửa Nam'),
(12, 'Đội Cung'),
(13, 'Đông Vĩnh'),
(14, 'Hà Huy Tập'),
(15, 'Hồng Sơn'),
(16, 'Hưng Bình'),
(17, 'Hưng Dũng'),
(18, 'Hưng Phúc '),
(19, 'Lê Lợi'),
(20, 'Lê Mao'),
(21, 'Quán Bàu'),
(22, 'Quang Trung'),
(23, 'Trung Đô'),
(24, 'Trường Thi'),
(25, 'Vinh Tân'),
(26, 'Hưng Chính'),
(27, 'Hưng Đông'),
(28, 'Hưng Hòa'),
(29, 'Hưng Lộc'),
(30, 'Nghi Ân'),
(31, 'Nghi Đức'),
(32, 'Nghi Kim'),
(33, 'Nghi Liên'),
(34, 'Nghi Phú');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltin`
--

CREATE TABLE `tbltin` (
  `Idtin` int(11) NOT NULL,
  `Tieude` varchar(255) NOT NULL,
  `Noidung` text DEFAULT NULL,
  `Sdt` int(11) NOT NULL,
  `Ngaydang` date NOT NULL,
  `Malt` int(11) NOT NULL,
  `Iduser` int(11) NOT NULL,
  `Idphuong` int(11) NOT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Dientich` int(3) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Anh` varchar(255) NOT NULL,
  `Tinhot` bit(1) NOT NULL,
  `Thongtinlh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbltin`
--

INSERT INTO `tbltin` (`Idtin`, `Tieude`, `Noidung`, `Sdt`, `Ngaydang`, `Malt`, `Iduser`, `Idphuong`, `Gia`, `Dientich`, `Diachi`, `Anh`, `Tinhot`, `Thongtinlh`) VALUES
(1, 'Căn hộ mini cao cấp mới xây - giá 2.5 tr/tháng\r\n', 'Tòa nhà chung cư mini mới xây cần cho thuê với 20 căn hộ cao cấp\r\nDiện tích đa dạng từ 40 m2 - 50m2\r\n\r\nGiá ưu đãi chỉ từ 2tr/ tháng – 2.5 triêu/tháng\r\n\r\nKhu căn hộ yên tĩnh, sạch sẽ, an ninh, không gian riêng, không bị làm phiền bởi những phòng xung quanh. không ồn ào khói bụi.\r\n\r\nKhông mất phí quản lý, phí đậu xe\r\n\r\nCó nhà để xe riêng,Camera an ninh hoạt động 24/ 24h.\r\n\r\nCó SÂN VƯỜN lớn –tận hưởng không gian xanh tại căn hộ.\r\n\r\nGần chợ, bệnh viên , trường tiểu học , trường đại học , phường bến thủy , TP Vinh , Nghệ An\r\n\r\nNơi an cư lý tưởng cho căp vợ chồng mới cưới, nhân viên văn phòng độc thân vui tính.', 954959594, '2019-06-28', 1, 2, 10, 1800000, 25, ' phường bến thủy , TP Vinh , Nghệ An', 'info-tro.png', b'1', 'TRần Huấn'),
(2, 'Cho thuê phòng cao cấp giá rẻ\r\n', '242 Trần Phú - TP.Vinh -Nghệ An\r\nƯu tiên: người đi làm hoặc đã có gia đình\r\nGiá cả liên hệ sđt: 0903 467 457\r\n0915 792 627\r\nP/s: còn 1 phòng mới trả để đi mua chung cư\r\n\r\n', 915792627, '2019-07-01', 1, 3, 11, 1600000, 20, '242 Trần Phú - TP.Vinh -Nghệ An', '1567133577.jpg', b'1', 'Tú'),
(3, 'Cho thuê nhà 3 tầng làm văn phòng số 81 Hoàng Phan Thái\r\n', 'Chủ nhà dễ tính, không gian sử dụng rộng rãi\r\nĐịa chỉ: 81 Hoàng Phan Thái, cách cây xăng Nghi Phú 100m\r\nXem nhà liên hệ 0979 727 557', 979727557, '2019-07-05', 1, 3, 34, 2500000, 30, '81 Hoàng Phan Thái-Nghi Phú', '1576140846.jpg', b'1', 'Không'),
(4, 'Cho thuê phòng cao cấp', '242 Trần Phú - TP.Vinh -Nghệ An\r\nƯu tiên: người đi làm hoặc đã có gia đình\r\nGiá cả liên hệ sđt: 0903 467 457\r\n0915 792 627\r\nP/s: còn 1 phòng mới trả để đi mua chung cư\r\n\r\n', 915792627, '2019-07-10', 1, 2, 22, 1200000, 20, '242 Trần Phú - TP.Vinh -Nghệ An', '1567133577.jpg', b'1', 'Hảo'),
(5, 'Cho thuê phòng giá rẻ gần chợ', '242 Trần Phú - TP.Vinh -Nghệ An\r\nƯu tiên: người đi làm hoặc đã có gia đình\r\nGiá cả liên hệ sđt: 0903 467 457\r\n0915 792 627\r\nP/s: còn 1 phòng mới trả để đi mua chung cư\r\n\r\n', 915792627, '2019-08-01', 1, 2, 10, 1500000, 20, 'Phạm Kinh Vỹ-Bến Thủy - TP.Vinh -Nghệ An', '20180825_154239_6c2a0131496a97d46e7eb15ebd282fe3.jpg', b'1', 'Kinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbluser`
--

CREATE TABLE `tbluser` (
  `Iduser` int(11) NOT NULL,
  `Taikhoan` varchar(50) NOT NULL,
  `Matkhau` varchar(255) NOT NULL,
  `Hoten` varchar(255) NOT NULL,
  `Sdt` int(11) NOT NULL,
  `Quyen` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbluser`
--

INSERT INTO `tbluser` (`Iduser`, `Taikhoan`, `Matkhau`, `Hoten`, `Sdt`, `Quyen`) VALUES
(1, 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', 'Admin', 9999999, b'1'),
(2, 'test1', '202cb962ac59075b964b07152d234b70', 'Test1', 90099, b'0'),
(3, 'test2', '202cb962ac59075b964b07152d234b70', 'Test2', 99988, b'0'),
(4, 'Test3', '202cb962ac59075b964b07152d234b70', 'Test3', 9988, b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblanh`
--
ALTER TABLE `tblanh`
  ADD PRIMARY KEY (`Idanh`),
  ADD KEY `Idtin` (`Idtin`);

--
-- Chỉ mục cho bảng `tblloaitin`
--
ALTER TABLE `tblloaitin`
  ADD PRIMARY KEY (`Malt`);

--
-- Chỉ mục cho bảng `tblphuong`
--
ALTER TABLE `tblphuong`
  ADD PRIMARY KEY (`Idphuong`);

--
-- Chỉ mục cho bảng `tbltin`
--
ALTER TABLE `tbltin`
  ADD PRIMARY KEY (`Idtin`),
  ADD KEY `Malt` (`Malt`),
  ADD KEY `Idphuong` (`Idphuong`),
  ADD KEY `Iduser` (`Iduser`);

--
-- Chỉ mục cho bảng `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblanh`
--
ALTER TABLE `tblanh`
  MODIFY `Idanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbltin`
--
ALTER TABLE `tbltin`
  MODIFY `Idtin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblanh`
--
ALTER TABLE `tblanh`
  ADD CONSTRAINT `tblanh_ibfk_1` FOREIGN KEY (`Idtin`) REFERENCES `tbltin` (`Idtin`);

--
-- Các ràng buộc cho bảng `tbltin`
--
ALTER TABLE `tbltin`
  ADD CONSTRAINT `tbltin_ibfk_1` FOREIGN KEY (`Malt`) REFERENCES `tblloaitin` (`Malt`),
  ADD CONSTRAINT `tbltin_ibfk_2` FOREIGN KEY (`Idphuong`) REFERENCES `tblphuong` (`Idphuong`),
  ADD CONSTRAINT `tbltin_ibfk_3` FOREIGN KEY (`Iduser`) REFERENCES `tbluser` (`Iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
