-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 08:29 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `carviet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdon`
--

CREATE TABLE `chitietdon` (
  `madon` int(11) NOT NULL,
  `maxe` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdon`
--

INSERT INTO `chitietdon` (`madon`, `maxe`, `gia`) VALUES
(2, 'X011', '848000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathen`
--

CREATE TABLE `dondathen` (
  `madon` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cmnd` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngayhen` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trangthai` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathen`
--

INSERT INTO `dondathen` (`madon`, `hoten`, `sdt`, `cmnd`, `email`, `ngayhen`, `diachi`, `ghichu`, `trangthai`) VALUES
(2, 'Phạm Ngọc Tuân', '0928230347', '123123123123', 'tuanpn.tb@gmail.com', '2020/10/10', 'số 41, Mai Dịch, Cầu giấy, Hà Nội', 'Tôi sẽ tới lúc 8h sáng', 'Chờ xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidap`
--

CREATE TABLE `hoidap` (
  `id` int(11) NOT NULL,
  `hoten` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` varchar(2000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoidap`
--

INSERT INTO `hoidap` (`id`, `hoten`, `diachi`, `sdt`, `email`, `noidung`) VALUES
(1, 'Phạm Ngọc Tuân', 'Hà Nội', '0928230347', 'ngoctuan1102000@gmai', 'Tôi muốn biết thêm thông tin về chiếc Vinfas Lux 2.0 Hãy liên lạc lại cho tôi!'),
(2, 'Phạm Ngọc Tuân', 'Hưng Yên', '0976415525', 'mai@gmail.com', 'Sản phẩm Ok đấy'),
(3, 'Phạm Ngọc Tuân', 'Hải Phòng', '0928230347', 'tuanpn.tb@gmail.com', 'Chất lượng xe rất tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `maloaitintuc` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenloaitintuc` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitintuc`
--

INSERT INTO `loaitintuc` (`maloaitintuc`, `tenloaitintuc`) VALUES
('T01', 'Review Xe'),
('T02', 'Tin Tức mới về Xe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `maloaixe` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenloaixe` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`maloaixe`, `tenloaixe`) VALUES
('L01', 'Vinfast'),
('L02', 'KIA'),
('L03', 'Ford'),
('L04', 'Huyndai'),
('L05', 'Nissan'),
('L06', 'Suzuki'),
('L07', 'Mercedes'),
('L08', 'BMW'),
('L09', 'Audi'),
('L10', 'Lexus'),
('L11', 'Honda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `taikhoan`, `matkhau`, `quyen`) VALUES
(1, 'admin', 'admin123', 2),
(2, 'user', 'user', 1),
(4, 'Pham Ngoc Tuan', '123456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showroom`
--

CREATE TABLE `showroom` (
  `id` int(11) NOT NULL,
  `tenshowroom` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hotline` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `showroom`
--

INSERT INTO `showroom` (`id`, `tenshowroom`, `diachi`, `hotline`) VALUES
(1, 'VinFast Times City', 'Tầng B1, TTTM Vincom Mega Mall Times City - 458 Minh Khai, Vĩnh Tuy, Hai Bà Trưng, Hà Nội', '0981335503'),
(2, 'VinFast Long Biên', 'Tầng 1, TTTM Vincom Plaza Long Biên - Khu đô thị Vinhomes Riverside, Phường Phúc Lợi, Quận Long Biên, Hà Nội', '0981335504'),
(3, 'VinFast-Chevrolet', 'Số 1 Đường Nguyễn Văn Linh, Phường Gia Thụy, Quận Long Biên, Thành phố Hà Nội', '1900636903'),
(4, 'VietCar Auto', '34T, Trung Hòa, Nhân Chính, Thanh Xuân, Hà Nội', '0976415525'),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `maloaitintuc` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tentintuc` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidungtin` mediumtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matintuc`, `maloaitintuc`, `tentintuc`, `noidungtin`, `anh`) VALUES
('MT01', 'T01', 'Review về xe Vinfast President', 'Trước đó những hình ảnh tổng thể đầu tiên của VinFast President cũng đã được chụp lại trong quá trình xe quay phim chụp ảnh quảng cáo tại Bình Dương.  Theo nhiều nguồn tin VinFast President chính là bản thương mại của mẫu Lux V8 đã ra mắt tại triển lãm Geneva Motor Show 2019. Đồng thời VinFast President cũng là đứa con tiếp theo được VinFast ra mắt sau thành công của Fadil, Vinfast Lux A2.0 và Vinfast Lux SA2.0.\r\n\r\nĐánh giá xe VinFast President năm 2020 về động cơ\r\n\r\nTheo nhiều nguồn tin thì VinFast President 2020 sẽ sở hữu khối động cơ mạnh mẽ của Lux V8. Cụ thể VinFast President trang bị động cơ V8 8 xilanh xếp hình chữ V dung tích 6.2L. Công suất tối đa 455 mã lực và mô men xoắn cực đại 624 Nm. \r\n\r\nGiá thành đắt đỏ nên khối động cơ khủng của VinFast President hoàn toàn xứng đáng. Nhiều nguồn tin cho hay VinFast President sở hữu hộp số ZF 8 cấp cùng hệ dẫn động 4 bánh. Do đó khả năng tăng tốc tối đa của VinFast President lên đến 300km/h.\r\n\r\nNếu bạn thấy khối động cơ này quen thuộc là bởi nó thường xuất hiện ở những mẫu xe cơ bắp nổi tiếng đến từ Mỹ (Chevrolet Corvette). Chính vì vậy mà nhiều người suy đoán President sẽ sở hữu trục cơ sở dài cùng khung gầm vững chắc mới có thể chịu được sức mạnh từ khối động cơ khủng này. \r\n\r\nĐánh giá xe VinFast President năm 2020 về cảm giác lái\r\n\r\nVinFast President vẫn là mẫu xe nằm trong vòng bí ẩn khi hãng không đưa ra bất kỳ thông tin chính nào. Tuy nhiên với khối động cơ khủng cùng giá thành cao thì President chắc hẳn sẽ mang đến cảm giác lái mượt mà với trải nghiệm tuyệt vời. Khả năng cao cảm giác lái của President sẽ giống như Vinfast Lux V8 - đẳng cấp y hệ một xe đua cao cấp. \r\n\r\nĐánh giá xe VinFast President năm 2020 về mức tiêu hao nhiên liệu\r\n\r\nVinFast President 2020 hiện chưa có thông tin cụ thể về khả năng tiêu hao nhiên liệu. Tuy nhiên chiếc Vinfast Lux V8 lại nổi tiếng là mẫu xe có khả năng tiết kiệm nhiên liệu tốt. Do vậy khả năng cao chiếc VinFast President cũng sẽ sở hữu mức tiêu hao nhiên liệu ấn tượng không kém.\r\n\r\nMàu sắc của VinFast President 2020\r\n\r\nHiện nay VinFast chưa có chia sẻ bất kỳ thông tin chính thức nào liên quan đến President. Do đó việc VinFast President có bao nhiêu màu sắc vẫn còn là ẩn số. Tuy nhiên những hình ảnh rò rỉ khi quay phim chụp ảnh tại Bình Dương cho thấy VinFast President sẽ có màu đen mờ sang trọng và đẳng cấp.\r\n\r\nBảng giá xe VinFast President năm 2020 \r\n\r\nTheo như hãng chia sẻ thì VinFast President sẽ được sản xuất với số lượng giới hạn là 500 chiếc. Giá thành dự kiến của chiếc VinFast President này sẽ ngang tầm phân khúc SUV cao cấp đang có mặt ở Việt Nam (hơn 7 tỷ đồng). Bạn có thể tham khảo bảng giá xe VinFast President sẽ được cập nhật ngay khi hãng công bố chính thức. ', 'vinfastPresident.png'),
('MT02', 'T02', 'Review Về Xe Vinfast Lux A2.0', 'VinFast Lux A2.0 là một mẫu xe thuộc dòng Sedan đến từ thương hiệu Việt sở hữu thiết kế sang trọng, thời thượng cùng nhiều tính năng cao cấp và hiện đại.\r\n\r\nVới nền tảng công nghệ xe hơi Đức, thiết kế mang linh hồn của xe hơi Ý cộng thêm sự hỗ trợ tư duy chiều sâu đến từ ngành công nghiệp ô tô Châu Âu và Mỹ đã giúp cho dòng xe VinFast Lux A2.0 2020 vừa ra mắt thì đã nhanh chóng được nhiều khách hàng cả trong nước và quốc tế yêu thích.\r\n\r\nBảng giá xe VinFast Lux A2.0 2020\r\n\r\nHiện nay, VinFast Lux A2.0 2020 đang được bán tại thị trường Việt Nam gồm 4 phiên bản và giá bán khác nhau để cho khách hàng có thể dễ dàng lựa chọn.\r\n\r\nĐánh giá xe VinFast Lux A2.0 2020 về động cơ\r\n\r\nXe VinFast Lux A2.0 2020 sử dụng động cơ turbo I4 DOHC 2 Lít với công suất là 228 mã lực, mô men xoắn cực đại là 350Nm kèm theo đó là hộp số 8 cấp tự động. Với những thông số này xe có thể chạy nước rút đến 100km trong vòng 9.8s và 9.1s.\r\n\r\nVề hệ thống treo, mẫu xe dòng Sedan này được thiết kế xương đòn kép phía trước độc lập, giá đỡ bằng chất liệu nhôm và lo xo cuộn. Ở phía sau, xe được quản lý bởi một trực đa liên kết có 5 khớp cùng với đòn dẫn hướng và một thanh chống lật có hình ống và giảm chấn khí nén.\r\n\r\nVinFast Lux A2.0 2020 được trang bị một bộ mâm khá lớn, lớn hơn so với những chiếc Sedan cao cấp hiện nay. Đây là một yếu tố là VinFast muốn khẳng định rằng VinFast Lux A2.0 2020 là một chiếc ô tô có chất lượng tốt và an toàn cho người dùng.\r\n\r\nĐánh giá xe VinFast Lux A2.0 2020 về cảm giác lái xe\r\n\r\nNgồi trên chiếc VinFast Lux A2.0 2020, người dùng sẽ cảm nhận được sự êm ái, mượt mà. Xe có độ bám khá tốt nên sẽ di chuyển dễ dàng và trơn tru ở cả những địa hình xấu hay di chuyển với tốc độ dao. Tốc độ xử lý của xe khá nhanh nhẹn và dứt khoát nhờ vào điều khiển điện và tay lái trợ lực.\r\n\r\nĐối với chiếc xế hộp này, bạn có thể dễ dàng điều khiển và kiểm soát kể cả những người chưa có nhiều kinh nghiệm vẫn có thể làm quen dễ dàng bởi cảm biến dự phòng và camera đều được trang bị nên việc đỗ xe sẽ vô cùng dễ dàng và nhanh chóng.\r\n\r\nĐánh giá xe VinFast Lux A2.0 2020 về mức tiêu hao nhiên liệu\r\n\r\nĐối với phiên bản sử dụng hệ dẫn động 4 bánh, xe tiêu tốn khá nhiều nhiên liệu. Chính vì thế mà nhà sản xuất đã bổ sung phiên bản tiêu chuẩn với hệ dẫn động cầu sau dành cho những người không có yêu cầu quá cao về hiệu năng có thể sử dụng nhằm tiết kiệm được nhiên liệu.\r\n\r\nSo sánh giá xe trong cùng phân khúc\r\n\r\nHiện tại, VinFast Lux A2.0 2020 đang phải chịu sự cạnh tranh với những mẫu xe khác về giá bán trong số những dòng Sedan như Mazda 6, Mercedes C200, Toyota Camry và KIA Optima. \r\n\r\nVinFast Lux A2.0 2020 thì mang nhiều đường nét thiết kế thể thao và có giá bán cao hơn đối thủ của mình trong khi đó Mazda 6 thì khoác lên mình nhiều đường nét thiết kế thanh lịch. Vì thế, tùy theo nhu cầu và sở thích của mỗi người mà chúng ta có thể lựa chọn cho mình dòng xe phù hợp, còn trong phân khúc sedan hạng D đăng cạnh tranh khốc liệt của Honda Accord, Toyota Camry, Mec C180, và Hyundai Sonata.', 'vinfastLux.png'),
('MT03', 'T02', 'Ra mắt trước Mercedes-Maybach S-Class 2021, Bentley Flying Spur V8 đang được phân phối đến tay khách hàng', 'Theo Bentley, với hệ thống lai điện mild-hybrid 48V, Flying Spur V8 mới sẽ sở hữu khả năng tiết kiệm nhiên liệu đáng nể. Khi động cơ hoạt động dưới tốc độ 3.000 vòng/phút và mô-men xoắn dưới 235 Nm, xe có thể tắt 4 trong số 8 xy-lanh giúp tiết kiệm 16% lượng nhiên liệu tiêu hao và tăng phạm vi hoạt động của xe lên đến 706 km. Sự thay đổi số lượng xy-lanh hoạt động chỉ diễn ra trong khoảng 20 mili-giây, bằng 1/10 thời gian chớp mắt, và người lái cũng như hành khách rất khó nhận ra sự khác biệt.\r\n\r\nNội thất của Flying Spur V8 độc đáo với bảng táp-lô có màn hình xoay 3 chế độ. Bentley trang bị cho chiếc xe hệ thống âm thanh tiêu chuẩn với 10 loa. Ngoài ra, khách hàng còn có thể lựa chọn hệ thống 16 loa Bang & Olufsen công suất 1.500 watt hoặc hệ thống 19 loa Naim công suất lên đến 2.200 watt.\r\n\r\nHàng ghế phía sau vừa rộng hơn, vừa sang trọng hơn với một loạt trang bị tiện ích như tủ ủ rượu lạnh đặt giữa, màn hình cảm ứng điều khiển chiếc xe có thể tháo rời, ghế ngồi sưởi, chỉnh điện, massage… Bên cạnh bọc da tiêu chuẩn, khách hàng còn được cung cấp tuỳ chọn 15 màu sắc nội thất khác nhau cùng nhiều tuỳ chọn gỗ ốp.', 'ramatxe.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `maxe` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloaixe` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tendongxe` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`maxe`, `maloaixe`, `tendongxe`, `gia`, `anh`, `mota`, `ngaydang`) VALUES
('X001', 'L01', 'Vinfast Lux A2.0', '940000000', 'vinfastLux.png', 'Thông số chính Vinfast Lux A2.0Kiểu dáng SedanĐộng cơ 2.0L, DOHC, I-4, tăng áp ống kép, van biến thiên, phun nhiên liệu trực tiếpHộp số ZF - Tự động 8 cấpDung tích (cc) Đang cập nhậtChỗ ngồi 05', '2020-10-08'),
('X002', 'L01', 'Vinfast President', '4600000000', 'vinfastPresident.png', 'Thông số chính Vinfast President\r\nKiểu dáng	SUV\r\nĐộng cơ	V8 - 6.2L\r\nHộp số	ZF - Tự động 8 cấp\r\nDung tích (cc)	Đang cập nhật\r\nChỗ ngồi	07\r\nNăm SX', '2020-09-10'),
('X003', 'L01', 'Vinfast Lux Sa 2.0', '1300000000', 'vinfastSa.png', 'Thông số chính Vinfast Lux sa2.0\r\nKiểu dáng	SUV\r\nĐộng cơ	2,0L, I-4, DOHC, tăng áp\r\nHộp số	AT 8 cấp ZF\r\nDung tích (cc)	Đang cập nhật\r\nChỗ ngồi	07', '2020-09-01'),
('X004', 'L01', 'Vinfast Fadil', '390000000', 'vinfastFadil.png', 'Thông số chính Vinfast Fadil\r\nKiểu dáng	Hatchback\r\nĐộng cơ	1.4 I4\r\nHộp số	Vô cấp, CVT\r\nDung tích (cc)	1.395cc\r\nChỗ ngồi	05', '2020-09-10'),
('X005', 'L02', 'KIA Seltos 1.4 ', '540000000', 'kia001.jpg', 'Giá sản phẩm : Hết hàng\r\n\r\nXuất xứ : Kia\r\n\r\nBảo hành : 3 năm hoặc 100.000 Km\r\n\r\nDài x Rộng x Cao (mm) 4.315 x 1.800 x 1.645 mm\r\nChiều dài cơ sở xe 2.610 mm\r\nĐộng cơ xe Kappa 1.4 T-GDi\r\nHộp số ly hợp kép 7 cấp\r\nCông suất cực đại 138 Nm\r\nMô-men xoán cực đại 242 Nm\r\nHệ thống túi khí 6 túi khí', '2020-10-13'),
('X006', 'L02', 'KIA Seltos 1.4', '720000000', 'kia002.jpg', 'Dài x Rộng x Cao: 4.315 x 1.800 x 1.645 mm\r\nChiều dài cơ sở xe: 2.610 mm\r\nĐộng cơ xe: Kappa 1.4 T-GDi\r\nHộp số: số tự động 6 cấp\r\nCông suất cực đại: 138 Nm\r\nMô-men xoán cực đại: 242 Nm\r\nHệ thống túi khí: 6 túi khí', '0000-00-00'),
('X007', 'L02', 'KIA Soluto AT Luxury', '470000000', 'kia003.jpg', '', '2020-10-05'),
('X008', 'L02', ' ‹› KIA Soluto', '430000000', 'kia004.jpg', '', '2020-11-09'),
('X009', 'L03', 'FORD FIESTA', '500000000', 'ford001.jpg', 'Ford Fiesta 2017 được giới thiệu đến người tiêu dùng Việt Nam tại Vietnam Motor Show.', '2020-09-08'),
('X011', 'L01', 'Terrar', '848000000', 'terrar.jpg', 'Bền bỉ', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD PRIMARY KEY (`madon`),
  ADD KEY `fk_maxe` (`maxe`);

--
-- Chỉ mục cho bảng `dondathen`
--
ALTER TABLE `dondathen`
  ADD PRIMARY KEY (`madon`);

--
-- Chỉ mục cho bảng `hoidap`
--
ALTER TABLE `hoidap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`maloaitintuc`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`maloaixe`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`,`taikhoan`);

--
-- Chỉ mục cho bảng `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD KEY `fk_maloaitintuc` (`maloaitintuc`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`maxe`),
  ADD KEY `fk_maloaixe` (`maloaixe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  MODIFY `madon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dondathen`
--
ALTER TABLE `dondathen`
  MODIFY `madon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoidap`
--
ALTER TABLE `hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `showroom`
--
ALTER TABLE `showroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD CONSTRAINT `fk_maxe` FOREIGN KEY (`maxe`) REFERENCES `xe` (`maxe`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_maloaitintuc` FOREIGN KEY (`maloaitintuc`) REFERENCES `loaitintuc` (`maloaitintuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `fk_maloaixe` FOREIGN KEY (`maloaixe`) REFERENCES `loaixe` (`maloaixe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
