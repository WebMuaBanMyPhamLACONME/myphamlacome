-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2024 lúc 04:49 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_mypham_lacome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDatHang` int(10) UNSIGNED NOT NULL,
  `MaSanPham` int(10) UNSIGNED NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `GiaSanPham` int(11) NOT NULL,
  `SoLuongMua` int(11) NOT NULL,
  `MaDatHang` int(10) UNSIGNED NOT NULL,
  `HinhAnhSanPham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(10) UNSIGNED NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL,
  `KichHoat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `KichHoat`) VALUES
(1, 'Son', 'True'),
(2, 'Nước hoa', 'True'),
(3, 'Kem chống nắng', 'True'),
(4, 'Kẻ lông mày', 'True'),
(7, 'Dưỡng Thể', 'True');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `MaDatHang` int(10) UNSIGNED NOT NULL,
  `MaNguoiDung` int(10) UNSIGNED NOT NULL,
  `NgayDat` date NOT NULL,
  `NgayGiao` date NOT NULL,
  `TrangThaiThanhToan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `MaLoaiNguoiDung` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(256) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MaDangNhap` varchar(50) DEFAULT NULL,
  `DiaChi` varchar(500) NOT NULL,
  `SDT` char(10) NOT NULL,
  `LoaiNguoiDung` int(11) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `AnhDaiDien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(10) UNSIGNED NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `Hinh1` varchar(50) NOT NULL,
  `Hinh2` varchar(50) NOT NULL,
  `Hinh3` varchar(50) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `SoLuongDaBan` int(11) NOT NULL,
  `MoTa` varchar(290) NOT NULL,
  `MaDanhMuc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `Gia`, `SoLuotXem`, `Hinh1`, `Hinh2`, `Hinh3`, `SoLuong`, `SoLuongDaBan`, `MoTa`, `MaDanhMuc`) VALUES
(1, 'Son Thỏi Lì 3CE Vỏ Trong Suốt ', 200000, 300, 'son1.jpg', 'son2.jpg', 'son3.jpg', 10, 2323, 'Son kem MAC có chất son mềm mại, dễ dàng tán đều, có hệ sắc tố màu cao, lên màu chuẩn đẹp chỉ sau một lần chạm. Càng apply chồng nhiều lớp, son càng lên màu đẹp và sắc nét. Sản phẩm sử dụng công thức chứa các thành phần dưỡng chất có khả năng dưỡng ẩm, nuôi dưỡng đôi môi mềm mượt.', 1),
(4, 'Son Dưỡng Dior Addict Lip Glow #000', 220000, 500, 'sondio2r.jpeg', 'dior2.jpg', 'dior3.jpg', 200, 432, 'Son dưỡng dior Addict Lip Glow màu 000 Universal Clear - Không Màu là cây son cao cấp và quen thuộc trong dòng Dior Addict Lip Glow. Với công thức độc đáo, chứa nhiều thành phần dưỡng ẩm tự nhiên cho môi, Dior Addict 000 sẽ khiến cho đôi môi của bạn trở nên tươi tắn, căng mọng và đầy sức s', 1),
(5, 'Dior Sauvage EDP', 540000, 543, 'dior.jpg', 'dior2.jpg', 'dior3.jpg', 321, 3213, 'Sự tươi mát mạnh mẽ của Dior Sauvage toát lên các khía cạnh gợi cảm và bí ẩn mới. Đổi mới dấu ấn của nó với một thành phần khéo léo. Thành phần được giữ ở phiên bản gốc gồm cam bergamot ngon ngọt. Cho bạn cảm giác fresh-tươi mới khi vừa xịt lên cơ thể.', 2),
(6, 'Son Dưỡng Tom Ford 24k', 600000, 432, 'sond.jpeg', 'sond2.jpeg', 'son2.jpeg', 432, 2623, 'Tom Ford là một trong những thương hiệu high-end đình đám nhất trên thế giới hiện nay. Không chỉ thành công ở lĩnh vực thời trang, Tom Ford còn ghi đậm dấu ấn ở lĩnh vực làm đẹp với nhiều sản phẩm trang điểm cao cấp, đáp ứng được nhu cầu làm đẹp của mo', 1),
(7, ' LAVIE EST BELLE', 1200000, 124, 'lavie1.jpg', 'lavie2.jpg', 'lavie3.jpg', 12, 2134, ' Bằng sự kết hợp độc đáo giữa mùi hương thanh khiết của hoa diên vĩ, cùng một chút sâu lắng của hoắc hương và một chút hương trái cây ngọt ngào như người con gái Pháp, Lancôme đã tạo ra được hương nước hoa tinh tế đến tuyệt vời, không lẫn vào đâu của La vie est belle Eau de Parfum.', 2),
(8, 'LA NUIT TRÉSOR FLEUR DE NUIT’S', 2000000, 120, 'LANUT.jpg', 'Lanut2.jpg', 'Lanut3.jpg', 89, 3321, ' HƯƠNG HOA NGỌT NGÀO MANG PHONG THÁI THI VỊ\r\n— HOA HỒNG ISPAHAN HÒA QUYỆN CÙNG NỐT HƯƠNG BELLE DE NUIT, QUYẾN RŨ NHƯ MỘT LÀN GIÓ\r\n— HOA HỒNG ISPAHAN LÀ NGUYÊN LIỆU BỀN VỮNG CÓ NGUỒN GỐC TỪ BULGARIA, HOA NHÀI TỪ ẤN ĐỘ VÀ HOẮC HƯƠNG TỪ INDONÉSIA', 2),
(9, 'Serum Dưỡng Thể Vaseline Chống Nắng Sáng Da 300ml', 136000, 200000, 'vaseline2.png', 'vaseline3.jpg', 'duongthevaseline1.png', 134, 2003, 'Serum Chống Nắng Cơ Thể Vaseline Healthy Bright Sun + Pollution Protection SPF 50+ PA++++ là dòng sản phẩm dưỡng thể kết hợp chống nắng toàn thân đến từ thương hiệu mỹ phẩm Vaseline. Phiên bản nâng cấp mới nhất cho khả năng bảo vệ da trước 5 tác nhân có hại (UVA / UVB / ô nhiễm / ánh sáng ', 7),
(10, 'Sữa Dưỡng Thể Nivea Sáng Da Ban Đêm Từ 8 Super Food 350ml', 230000, 543, 'n.jpg', 'nivea2.jpg', 'nivea3.jpg', 1234, 12, 'Nivea Extra Bright 8 Super Food Body Lotion là dòng sản phẩm sữa dưỡng thể làm sáng da toàn thân nổi tiếng của thương hiệu NIVEA, nay được cải tiến với công thức chứa đến 50X Vitamin C chiết xuất từ 8 Siêu dưỡng chất cho hiệu quả phục hồi da khô sạm và dưỡng sáng chuyên sâu chỉ sau 7 ngày.', 7),
(11, 'Tinh Chất Vichy Liftactiv B3 ', 0, 114, 'kcn.jpg', 'kcn1.jpg', 'kcn3.jpg', 432, 2333, 'Tinh Chất Vichy Liftactiv B3 Serum Dark Spots & Wrinkles 30ml Tặng Kem Dưỡng Liftactiv Collagen 15ml + Chống nắng Capital Soleil 15ml là một bộ sản phẩm chăm sóc da chuyên biệt dành riêng cho da đang gặp các vấn đề về thâm nám, đốm nâu đến từ thương hiệu Vichy thuộc tập đoàn L’oreal Pháp.', 3),
(12, 'Kem Chống Nắng Espoir Water Splash Sun Cream Fresh CICA SPF50+ PA++++ Xanh', 300000, 1233, 'kcnn.jpeg', 'kcnn2.jpeg', 'kcnn3.jpeg', 41, 234, 'Kem Chống Nắng Espoir Water Splash Ceramide SPF50+ PA++++ Hồng là kem chống nắng thuần chay, thân thiện với làn da. Trong đó, thành phần nổi bật là Ceramide NP (100ppm), chiếm nhiều nhất trong số 12 loại ceramide có trong da người, giúp tăng cường lớp hàng rào ẩm của da.', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uudai`
--

CREATE TABLE `uudai` (
  `MaUuDai` int(10) UNSIGNED NOT NULL,
  `TenUuDai` varchar(150) DEFAULT NULL,
  `HinhAnh` varchar(200) DEFAULT NULL,
  `MoTa` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `uudai`
--

INSERT INTO `uudai` (`MaUuDai`, `TenUuDai`, `HinhAnh`, `MoTa`) VALUES
(1, 'GIAO HÀNG MIỄN PHÍ ĐẾN 30K\r\n', 'uudai1.jpg', 'Miễn phí vận chuyển cho tất cả các đơn đặt hàng dành cho Khách hàng thành viên. Trang webs hoạt động 24/7 để cùng bạn khám phá vẻ đẹp sang trọng bất cứ lúc nào.'),
(2, 'MY LANCÔME REWARDS', 'uudai2.jpg', 'Chương trình ưu đãi độc quyền dành cho thành viên: Giảm giá 10% cho đơn hàng đầu tiên của bạn và Freeship đến 30k. Hãy để chúng tôi làm bạn thích thú với những bất ngờ đặc biệt từ Lancôme.'),
(3, 'ƯU ĐÃI ĐỘC QUYỀN', 'uudai3.jpeg', 'Hãy luôn là người tiêu dùng thông thái và nhanh tay mua hàng ngay để tận hưởng những ưu đãi độc quyền dành cho bạn khi sử dụng các dịch vụ trực tuyến từ Lancome.'),
(4, 'NHẬN MẪU THỬ MIỄN PHÍ', 'uudai4.jpg', 'Đặt hàng ngay và tận hưởng 3 mẫu thử sang trọng trong mỗi đơn hàng. Trải nghiệm các sản phẩm mới và khám phá các sản phẩm làm đẹp yêu thích trong tương lai của bạn.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDatHang`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaDatHang` (`MaDatHang`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`MaDatHang`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`MaLoaiNguoiDung`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `uudai`
--
ALTER TABLE `uudai`
  ADD PRIMARY KEY (`MaUuDai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaChiTietDatHang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `MaDatHang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `MaLoaiNguoiDung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `uudai`
--
ALTER TABLE `uudai`
  MODIFY `MaUuDai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaDatHang`) REFERENCES `dathang` (`MaDatHang`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
