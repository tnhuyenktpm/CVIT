-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2018 lúc 06:07 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do-an-3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chung_chi`
--

CREATE TABLE `chung_chi` (
  `id_chung_chi` int(11) NOT NULL,
  `ten_chung_chi` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chung_chi`
--

INSERT INTO `chung_chi` (`id_chung_chi`, `ten_chung_chi`, `time`, `id_tv`) VALUES
(1, 'Chứng chỉ toeic 450', '2018', 1),
(2, 'chứng chỉ toeic 350', '2018', 4),
(3, 'Chứng chỉ anh văn B1', '2017', 3),
(4, 'Chứng chỉ toeic 450', '2017', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_nganh`
--

CREATE TABLE `chuyen_nganh` (
  `id_chuyen_nganh` varchar(5) NOT NULL,
  `ten_chuyen_nganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chuyen_nganh`
--

INSERT INTO `chuyen_nganh` (`id_chuyen_nganh`, `ten_chuyen_nganh`) VALUES
('HTTT', 'Hệ Thống Thông Tin'),
('KHMT', 'Khoa Học Máy Tính'),
('KTPM', 'Kỹ Thuật Phần Mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_tt`
--

CREATE TABLE `dang_tt` (
  `id_tt` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `noi_dung` varchar(1000) NOT NULL,
  `id_ntd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dang_tt`
--

INSERT INTO `dang_tt` (`id_tt`, `tieu_de`, `noi_dung`, `id_ntd`) VALUES
(1, 'Lập Trình Viên Kinh Nghiệm (Senior/junior Developer)', '- Thiết kế, xây dựng và phát triển các module cho hệ thống phần mềm trên nền tảng web hoặc mobile: Hệ thống ví điện tử, hệ thống cổng thanh toán, quản lý bán hàng, quản lý CRM, Quản lý văn bản, Hành chính công một cửa,... Tham gia nghiên cứu áp dụng các kỹ thuật công nghệ mới áp dụng vào trong dự án. Xây dựng và phân tích cơ sở dữ liệu cho dự án. Nghiên cứu công nghệ cho dự án. Báo cáo tiến độ công việc cho quản lý dự án và Ban giám đốc.', 1),
(2, 'Android/ios Mobile Developer', '- Miraway mong muốn cộng tác với các lập trình viên Mobile có kinh nghiệm, có đam mê và nhiệt huyết trong việc phát triển sản phẩm. Phân tích yêu cầu bài toán, thiết kế và phát triển sản phẩm trên nền tảng mobile (iOS/Android), Làm việc trực tiếp với khách hàng, đối tác trong và ngoài nước', 1),
(3, 'Chuyên Viên IT Phần Mềm ( Vb.net, C, C ++) - Up to 1000$', '- Quản trị Cơ sở dữ liệu hệ thống CoreBanking; Quản trị các hệ thống ứng dụng trong CoreBanking và các hệ thống ứng dụng phần mềm TYM, Chịu trách nhiệm về phát triển một số phần mềm ứng dụng trong tổ chức,Hỗ trợ điều phối các hoạt động, đàm phán với các nhà cung ứng phần mềm và dịch vụ', 1),
(4, '.NET Developer - Lập Trình Viên .NET (Salary Up to $1000)', '-	Tham gia lập trình phát triển phần mềm quản lý cho các doanh nghiệp. Lập trình trên ngôn ngữ .NET, CSDL SQL Server. (Biết về lập trình web ASP.NET, JS... là một lợi thế). Làm việc tại Trung tâm nghiên cứu và phát triển sản phẩm (R&D).', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `du_an`
--

CREATE TABLE `du_an` (
  `id_du_an` int(11) NOT NULL,
  `ten_du_an` varchar(100) NOT NULL,
  `time` varchar(15) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `so_luong` int(2) NOT NULL,
  `vi_tri_cong_viec` varchar(50) NOT NULL,
  `vai_tro` varchar(200) NOT NULL,
  `cong_nghe` varchar(200) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `du_an`
--

INSERT INTO `du_an` (`id_du_an`, `ten_du_an`, `time`, `mo_ta`, `so_luong`, `vi_tri_cong_viec`, `vai_tro`, `cong_nghe`, `id_tv`) VALUES
(1, 'Rainway Group', '(2016-2017)', '- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.', 8, 'Lập trình viên', '- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi', '- Android Studio 1.4, Java, Android 4.0; Google Could Message', 1),
(2, 'Rainway Group', '(2016-2017)', '- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.', 8, 'Tester', '- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi', '- Android Studio 1.4, Java, Android 4.0; Google Could Message', 4),
(3, 'Rainway Group', '(2016-2017)', '- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.', 8, 'Lập trình viên', '- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi', '- Android Studio 1.4, Java, Android 4.0; Google Could Message', 3),
(4, 'Rainway Group', '(2016-2017)', '- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.', 8, 'Tester', '- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi', '- Android Studio 1.4, Java, Android 4.0; Google Could Message', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giai_thuong`
--

CREATE TABLE `giai_thuong` (
  `id_giai_thuong` int(11) NOT NULL,
  `ten_giai_thuong` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giai_thuong`
--

INSERT INTO `giai_thuong` (`id_giai_thuong`, `ten_giai_thuong`, `time`, `id_tv`) VALUES
(1, '2016', 'Học bổng học tập (Loại giỏi)', 1),
(2, '2017', 'Học bổng học tập (Loại giỏi)', 4),
(3, '2015', 'Học bổng học tập (Loại giỏi)', 3),
(4, '2018', 'Học bổng học tập (Loại giỏi)', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoat_dong`
--

CREATE TABLE `hoat_dong` (
  `id_hoat_dong` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `ten_hoat_dong` varchar(100) NOT NULL,
  `noi_dung` varchar(200) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoat_dong`
--

INSERT INTO `hoat_dong` (`id_hoat_dong`, `time`, `ten_hoat_dong`, `noi_dung`, `id_tv`) VALUES
(1, 'Hè 2015', 'Nhóm tình nguyện hè', 'Tham gia chiến dịch tình nguyện Mùa Hè Xanh', 1),
(2, 'Hè 2016', 'Nhóm tình nguyện hè', 'Tham gia hiến máu nhân đạo', 4),
(3, 'Hè 2017', 'Nhóm tình nguyện hè', 'Tham gia chiến dịch tình nguyện Mùa Hè Xanh', 3),
(4, 'Hè 2018', 'Nhóm tình nguyện hè', 'Tham gia hiến máu nhân đạo', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_van`
--

CREATE TABLE `hoc_van` (
  `id_hv` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `noi_hoc` varchar(100) NOT NULL,
  `chi_tiet` varchar(100) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoc_van`
--

INSERT INTO `hoc_van` (`id_hv`, `time`, `noi_hoc`, `chi_tiet`, `id_tv`) VALUES
(1, '2015 - 2019', 'Đại học KT-CN Cần Thơ', 'Tốt nghiệp loại Xuất sắc, điểm trung bình 9.0', 2),
(2, '2015-2019', 'Đại học KT-CN Cần Thơ', 'Tốt nghiệp loại Khá', 4),
(3, '2015-2019', 'Đại học KT-CN Cần Thơ', 'Tốt nghiệp loại giỏi', 1),
(4, '2015-2019', 'Đại học KT-CN Cần Thơ', 'Tốt nghiệp loại giỏi', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinh_nghiem`
--

CREATE TABLE `kinh_nghiem` (
  `id_kinh_nghiem` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `noi_lam` varchar(100) NOT NULL,
  `chi_tiet` varchar(100) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kinh_nghiem`
--

INSERT INTO `kinh_nghiem` (`id_kinh_nghiem`, `time`, `noi_lam`, `chi_tiet`, `id_tv`) VALUES
(1, '2017', 'Đồ án Kỹ thuật phần mềm 2', 'Xây dựng App quản lý giảng viên', 1),
(2, '2017', 'Đồ án Kỹ thuật phần mềm 2', 'Tìm hiểu công nghệ Ajax, MongoBD, xây dựng hệ thống website Quản lý CV', 4),
(3, 'Hè 2017', 'Thực tập thực tế', 'Thực tập ở vị trí Nhân viên SEO ở công ty Cổ phần đầu tư Mua Hàng Tại Nhà', 3),
(4, '2017', 'Đồ án Kỹ Thuật Phần Mềm 2', 'Xây dựng website bán hàng online', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ky_nang`
--

CREATE TABLE `ky_nang` (
  `id_kn` int(11) NOT NULL,
  `ten_ky_nang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ky_nang`
--

INSERT INTO `ky_nang` (`id_kn`, `ten_ky_nang`) VALUES
(1, 'Html'),
(2, 'Css'),
(3, 'PHP'),
(4, 'Java'),
(5, 'C#'),
(6, 'C++'),
(7, 'Python'),
(8, 'JavaScript');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `so_thich`
--

CREATE TABLE `so_thich` (
  `id_so_thich` int(11) NOT NULL,
  `ten_so_thich` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `so_thich`
--

INSERT INTO `so_thich` (`id_so_thich`, `ten_so_thich`) VALUES
(1, 'Bơi lội'),
(2, 'Shopping'),
(3, 'Nghe nhạc'),
(4, 'Du Lịch'),
(5, 'Đọc sách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_thanh`
--

CREATE TABLE `tinh_thanh` (
  `id_tinh` int(11) NOT NULL,
  `ten_tinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tinh_thanh`
--

INSERT INTO `tinh_thanh` (`id_tinh`, `ten_tinh`) VALUES
(1, 'Cần Thơ'),
(2, 'Hà Nội'),
(3, 'TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_ky_nang`
--

CREATE TABLE `tt_ky_nang` (
  `id_tv` int(11) NOT NULL,
  `id_kn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tt_ky_nang`
--

INSERT INTO `tt_ky_nang` (`id_tv`, `id_kn`) VALUES
(1, 4),
(1, 5),
(1, 3),
(1, 1),
(4, 2),
(4, 1),
(4, 8),
(4, 5),
(3, 3),
(3, 1),
(3, 7),
(3, 5),
(2, 5),
(2, 3),
(2, 8),
(2, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_so_thich`
--

CREATE TABLE `tt_so_thich` (
  `id_so_thich` int(11) NOT NULL,
  `id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tt_so_thich`
--

INSERT INTO `tt_so_thich` (`id_so_thich`, `id_tv`) VALUES
(1, 1),
(4, 1),
(3, 4),
(4, 4),
(2, 3),
(5, 3),
(5, 2),
(1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_thanh_vien`
--

CREATE TABLE `tt_thanh_vien` (
  `id_tv` int(11) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` int(1) NOT NULL,
  `phone` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `quoc_tich` varchar(50) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `mo_ta_ngan` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chuyen_nganh` varchar(5) NOT NULL,
  `id_tinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tt_thanh_vien`
--

INSERT INTO `tt_thanh_vien` (`id_tv`, `ngay_sinh`, `gioi_tinh`, `phone`, `website`, `quoc_tich`, `hinh_anh`, `mo_ta_ngan`, `id_user`, `id_chuyen_nganh`, `id_tinh`) VALUES
(1, '1997-01-20', 0, 362323040, 'https://www.facebook.com/dangvui.123', 'Việt Nam', '../assets/img/2.jpg', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 8, 'HTTT', 1),
(2, '1997-11-27', 0, 985236478, 'https://www.facebook.com/phithi.ngocminh', 'Việt Nam', '../assets/img/1.jpg', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 9, 'KHMT', 1),
(3, '1997-01-21', 0, 376404446, 'https://www.facebook.com/lethidiemphuong0197', 'Việt Nam', '../assets/img/4.jpg', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 7, 'KTPM', 1),
(4, '1997-09-19', 0, 962739775, 'https://www.facebook.com/kaitran19', 'Việt Nam', '../assets/img/1.jpg', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 6, 'KTPM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ho_ten`, `email`, `pass`) VALUES
(6, 'Trần Ngọc Huyền', 'kai.tnhuyen1997@gmail.com', '123456'),
(7, 'Lê Thị Diễm Phượng', 'phuong123@gmail.com', '123456'),
(8, 'Đặng Thị Mộng Vui', 'vui123@gmail.com', '123456'),
(9, 'Phí Thị Ngọc Minh', 'minh123@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_ntd`
--

CREATE TABLE `user_ntd` (
  `id_ntd` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user_ntd`
--

INSERT INTO `user_ntd` (`id_ntd`, `email`, `pass`) VALUES
(1, 'nhatuyendung@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chung_chi`
--
ALTER TABLE `chung_chi`
  ADD PRIMARY KEY (`id_chung_chi`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `chuyen_nganh`
--
ALTER TABLE `chuyen_nganh`
  ADD PRIMARY KEY (`id_chuyen_nganh`);

--
-- Chỉ mục cho bảng `dang_tt`
--
ALTER TABLE `dang_tt`
  ADD PRIMARY KEY (`id_tt`),
  ADD KEY `id_ntd` (`id_ntd`);

--
-- Chỉ mục cho bảng `du_an`
--
ALTER TABLE `du_an`
  ADD PRIMARY KEY (`id_du_an`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `giai_thuong`
--
ALTER TABLE `giai_thuong`
  ADD PRIMARY KEY (`id_giai_thuong`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `hoat_dong`
--
ALTER TABLE `hoat_dong`
  ADD PRIMARY KEY (`id_hoat_dong`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  ADD PRIMARY KEY (`id_hv`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `kinh_nghiem`
--
ALTER TABLE `kinh_nghiem`
  ADD PRIMARY KEY (`id_kinh_nghiem`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `ky_nang`
--
ALTER TABLE `ky_nang`
  ADD PRIMARY KEY (`id_kn`);

--
-- Chỉ mục cho bảng `so_thich`
--
ALTER TABLE `so_thich`
  ADD PRIMARY KEY (`id_so_thich`);

--
-- Chỉ mục cho bảng `tinh_thanh`
--
ALTER TABLE `tinh_thanh`
  ADD PRIMARY KEY (`id_tinh`);

--
-- Chỉ mục cho bảng `tt_ky_nang`
--
ALTER TABLE `tt_ky_nang`
  ADD KEY `id_tv` (`id_tv`),
  ADD KEY `id_tv_2` (`id_tv`),
  ADD KEY `id_kn` (`id_kn`);

--
-- Chỉ mục cho bảng `tt_so_thich`
--
ALTER TABLE `tt_so_thich`
  ADD KEY `id_so_thich` (`id_so_thich`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `tt_thanh_vien`
--
ALTER TABLE `tt_thanh_vien`
  ADD PRIMARY KEY (`id_tv`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_chuyen_nganh` (`id_chuyen_nganh`),
  ADD KEY `id_chuyen_nganh_2` (`id_chuyen_nganh`),
  ADD KEY `id_tinh` (`id_tinh`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `user_ntd`
--
ALTER TABLE `user_ntd`
  ADD PRIMARY KEY (`id_ntd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chung_chi`
--
ALTER TABLE `chung_chi`
  MODIFY `id_chung_chi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dang_tt`
--
ALTER TABLE `dang_tt`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `du_an`
--
ALTER TABLE `du_an`
  MODIFY `id_du_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giai_thuong`
--
ALTER TABLE `giai_thuong`
  MODIFY `id_giai_thuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoat_dong`
--
ALTER TABLE `hoat_dong`
  MODIFY `id_hoat_dong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  MODIFY `id_hv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `kinh_nghiem`
--
ALTER TABLE `kinh_nghiem`
  MODIFY `id_kinh_nghiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ky_nang`
--
ALTER TABLE `ky_nang`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `so_thich`
--
ALTER TABLE `so_thich`
  MODIFY `id_so_thich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tinh_thanh`
--
ALTER TABLE `tinh_thanh`
  MODIFY `id_tinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tt_thanh_vien`
--
ALTER TABLE `tt_thanh_vien`
  MODIFY `id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user_ntd`
--
ALTER TABLE `user_ntd`
  MODIFY `id_ntd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chung_chi`
--
ALTER TABLE `chung_chi`
  ADD CONSTRAINT `chung_chi_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `dang_tt`
--
ALTER TABLE `dang_tt`
  ADD CONSTRAINT `dang_tt_ibfk_1` FOREIGN KEY (`id_ntd`) REFERENCES `user_ntd` (`id_ntd`);

--
-- Các ràng buộc cho bảng `du_an`
--
ALTER TABLE `du_an`
  ADD CONSTRAINT `du_an_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `giai_thuong`
--
ALTER TABLE `giai_thuong`
  ADD CONSTRAINT `giai_thuong_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `hoat_dong`
--
ALTER TABLE `hoat_dong`
  ADD CONSTRAINT `hoat_dong_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  ADD CONSTRAINT `hoc_van_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `kinh_nghiem`
--
ALTER TABLE `kinh_nghiem`
  ADD CONSTRAINT `kinh_nghiem_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`);

--
-- Các ràng buộc cho bảng `tt_ky_nang`
--
ALTER TABLE `tt_ky_nang`
  ADD CONSTRAINT `tt_ky_nang_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`),
  ADD CONSTRAINT `tt_ky_nang_ibfk_2` FOREIGN KEY (`id_kn`) REFERENCES `ky_nang` (`id_kn`);

--
-- Các ràng buộc cho bảng `tt_so_thich`
--
ALTER TABLE `tt_so_thich`
  ADD CONSTRAINT `tt_so_thich_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `tt_thanh_vien` (`id_tv`),
  ADD CONSTRAINT `tt_so_thich_ibfk_2` FOREIGN KEY (`id_so_thich`) REFERENCES `so_thich` (`id_so_thich`);

--
-- Các ràng buộc cho bảng `tt_thanh_vien`
--
ALTER TABLE `tt_thanh_vien`
  ADD CONSTRAINT `tt_thanh_vien_ibfk_1` FOREIGN KEY (`id_chuyen_nganh`) REFERENCES `chuyen_nganh` (`id_chuyen_nganh`),
  ADD CONSTRAINT `tt_thanh_vien_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tt_thanh_vien_ibfk_3` FOREIGN KEY (`id_tinh`) REFERENCES `tinh_thanh` (`id_tinh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
