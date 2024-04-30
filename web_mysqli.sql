-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2021 lúc 04:20 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'trungtinh', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `noithem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tieude`, `noidung`, `hinhanh`, `noithem`) VALUES
(39, '3 người thầy vĩ đại ', '“Tôi đã nếm trải nhiều thất bại trong hành trình đi qua những tháng ngày của mình. Thế nhưng, mỗi chướng ngại cuối cùng đều lại chính là một bàn đạp đưa tôi gần hơn nữa tới chân lý trong tâm khảm và cuộc đời tốt đẹp nhất của mình\r\n', '1633493894_3 người thầy vĩ đại.jpg', 1),
(40, 'Tony buổi sáng ', 'Chúng tôi tin rằng những người trẻ tuổi luôn mang trong mình khát khao vươn lên và tấm lòng hướng thiện, và có nhiều cách để động viên họ biến điều đó thành hành động. Nếu như tập sách nhỏ này có thể khơi gợi trong lòng bạn đọc trẻ một cảm hứng tốt đẹp, như tách cà phê thơm vào đầu ngày nắng mới, thì đó là niềm vui lớn của tác giả Tony Buổi Sáng.', '1633493975_tony.png', 1),
(41, 'Đắc nhân tâm ', '\"Đắc nhân tâm\" đã mang đến cho chúng ta bài học vô cùng giá trị đó là nghệ thuật ứng xử để được lòng người. \"Đắc nhân tâm\" là quyển sách nổi tiếng và bán chạy nhất và có mặt ở hàng trăm quốc gia khác nhau, và hơn thế nữa đây còn là quyển sách liên tục đứng đầu danh mục sách bán chạy nhất do thời báo NewYork Times bình chọn trọng suốt 10 năm liền', '1633494258_đắc nhân tâm.jpg', 1),
(42, 'Làm đĩ ', 'Làm đĩ là một trong số những cuốn sách gây ra nhiều cuộc tranh luận trong hơn suốt nửa thế kỷ qua. Từ Nhất Linh, Thái Phỉ, Hoài Thanh trước đây đã có khá nhiều bài đăng trên các báo Tân văn, Tương lai, Ngày nay, Hà Nội báo phê phán quan niệm văn chương của Vũ Trọng Phụng xung quanh tiểu thuyết Làm đĩ của ông; cho đến Hoàng Văn Hoan sau này, khi Vũ Trọng Phụng đã mất gần 25 năm, còn cố tình tìm mọi lời lẽ sặc mùi chính trị phê phán Làm đĩ là một cuốn sách dâm uế và có hại cho sự giáo hóa đạo đức và luân lý đối với thế hệ trẻ Việt Nam. (Vũ Trọng Phụng)', '1633494448_làm đĩ.jpg', 0),
(43, 'Số đỏ ', 'Số đỏ là một tiểu thuyết văn học của nhà văn Vũ Trọng Phụng, đăng ở Hà Nội báo từ số 40 ngày 7 tháng 10 1936 và được in thành sách lần đầu vào năm 1938. Nhiều nhân vật và câu nói trong tác phẩm đã đi vào cuộc sống đời thường và tác phẩm đã được dựng thành kịch, phim. Nhân vật chính của Số đỏ là Xuân – biệt danh là Xuân Tóc đỏ, từ chỗ là một kẻ bị coi là hạ lưu, bỗng nhảy lên tầng lớp danh giá của xã hội nhờ trào lưu Âu hóa của giới tiểu tư sản Hà Nội khi đó.\r\n\r\nTác phẩm Số đỏ, cũng như các tác phẩm khác của Vũ Trọng Phụng đã từng bị cấm lưu hành tại Việt Nam Dân chủ Cộng hòa trước năm 1975 cũng như tại Việt Nam thống nhất cho đến năm 1986.', '1633494585_2160a52816265cd80ea8cdc7519418f2.jpg', 0),
(44, 'Tắt đèn ', 'Tắt đèn của nhà văn Ngô Tất Tố phản ánh rất chân thực cuộc sống khốn khổ của tầng lớp nông dân Việt Nam đầu thế kỷ XX dưới ách đô hộ của thực dân Pháp. Tác phẩm xoay quanh nhân vật chị Dậu và gia đình - một điển hình của cuộc sống bần cùng hóa sưu cao thuế nặng mà chế độ thực dân áp đặt lên xã hội Việt Nam. Trong cơn cùng cực chị Dậu phải bán khoai, bán bầy chó đẻ và bán cả đứa con để lấy tiền nộp sưu thuế cho chồng nhưng cuộc sống vẫn đi vào bế tắc, không lối thoát.\r\n\r\nTrong tác phẩm, cảnh đời tràn nước mắt của gia đình chị Dậu đã được tái hiện một cách sống động trong từng câu chữ, chi tiết văn học với nhiều cung bậc cảm xúc  của tác giả khiến người đọc không khỏi xúc động.', '1633494717_13147425._UY1000_SS1000_.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `tenbanner` varchar(255) NOT NULL,
  `noidungbanner` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `tenbanner`, `noidungbanner`, `hinhanh`) VALUES
(1, 'sách làm đĩ', 'Vũ Trọng Phụng có truyện ngắn đăng trên nhiều tờ báo từ năm 1930. Tác phẩm của nhà văn hầu hết đăng báo trước khi in thành sách. Tác phẩm chính: Không một tiếng vang (kịch, 1931), Cạm bẫy người (phóng sự, 1933), Dứt tình (tiểu thuyết, 1934), Kỹ nghệ lấy Tây (phóng sự, 1934), Giông tố (tiểu thuyết, 1936), Cơm thầy cơm cô (phóng sự, 1936), Vỡ đê (tiểu thuyết, 1936), Số đỏ (tiểu thuyết, 1936), Làm đĩ (tiểu thuyết, 1936), Lấy nhau vì tình (tiểu thuyết, 1937), Lục sì (phóng sự, 1937), Trúng số độc đắc (tiểu thuyết, 1938), và nhiều truyện ngắn', '1635066970_bg_lamdy.png'),
(2, 'Dế Mèn phiêu lưu ký', ' \"Dế Mèn phiêu lưu kí\" gồm 148 trang, trên khổ giấy 18x25 cm với nhiều minh hoạ sinh động của hoạ sĩ Tạ Huy Long - một hoạ sĩ chuyên vẽ cho sách thiếu nhi. Bằng cách sử dụng màu nước điêu luyện, hoạ sĩ Tạ Huy Long đã làm sống động thêm tác phẩm bất hủ của nhà văn Tô Hoài. Cuốn sách là món quà đẹp cả về hình thức lẫn nội dung, là món quà ý nghĩa và bổ ích mà các bậc phụ huynh tặng cho con em của mình. Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành.', '1635068876_bg_demem.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(27, 21, '6480', 1),
(28, 21, '3033', 1),
(29, 25, '6505', 1),
(31, 25, '6168', 1),
(32, 25, '7409', 0),
(33, 31, '8920', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(36, '6480', 63, 1),
(37, '6480', 66, 1),
(38, '3033', 59, 3),
(39, '3033', 60, 1),
(40, '6505', 65, 1),
(42, '6168', 66, 31),
(43, '7409', 47, 50),
(44, '8920', 66, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cmt`
--

CREATE TABLE `tbl_cmt` (
  `id_cmt` int(11) NOT NULL,
  `ten_cmt` text NOT NULL,
  `noidung_cmt` text NOT NULL,
  `id_sanpham` varchar(255) NOT NULL,
  `ngay_cmt` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `duyet_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cmt`
--

INSERT INTO `tbl_cmt` (`id_cmt`, `ten_cmt`, `noidung_cmt`, `id_sanpham`, `ngay_cmt`, `id_kh`, `duyet_cmt`) VALUES
(29, 'nhân đẹp trai', 'hay ạ', '66', '22/10/2021', 25, 0),
(33, 'Thành Nhân', 'hay quá ạ', '66', '02/11/2021', 25, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`, `phanquyen`) VALUES
(9, 'Nguyễn Trung', 'nguyentrungvn2002@gmail.com', '193 Nguyễn Lương Bằng', 'a51befa81ac04ba25fe209ce66d058c8', '0935666433', 0),
(21, 'nguyễn thành nhân', 'nhan01294530906@gmail.com', 'hà lam', 'a51befa81ac04ba25fe209ce66d058c8', '0586191872', 2),
(25, 'Thành Nhân', 'nhandeptrai@gmail.com', 'hà lam, thăng bình', 'a51befa81ac04ba25fe209ce66d058c8', '0586191872', 1),
(30, 'admin', 'admin@gmail.com', 'đà nẵng ', '21232f297a57a5a743894a0e4a801fc3', '0123456789', 1),
(31, 'nhân', 'nhan@gmail.com', 'đà nẵng', 'bb4e31f2d20f8e7f88e2b8459263657f', '0586191872', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(9, 'truyện ', 0),
(14, 'tâm lý-kỹ năng sống', 0),
(15, 'Văn học Việt Nam ', 0),
(16, 'phiêu Lưu - Mạo Hiểm ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id_footer` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `linkfb` varchar(255) NOT NULL,
  `linkig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_footer`
--

INSERT INTO `tbl_footer` (`id_footer`, `diachi`, `sdt`, `email`, `linkfb`, `linkig`) VALUES
(1, '470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam', '+842363667117', 'ntnhan.20it8@vku.udn.vn', 'https://www.facebook.com/nhan192002/', 'https://www.instagram.com/nhan192002/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `xacnhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `ten`, `email`, `noidung`, `xacnhan`) VALUES
(3, 'Nguyễn Thành Nhân', 'nhan01294430906@gmail.com', 'asdasdasd', 0),
(5, 'Nhân', 'nhandeptrai192002@gmail.com', 'nhan', 1),
(6, 'nhan', 'thanhnhan192002@gmail.com', 'lien he 3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `sao1` int(11) NOT NULL,
  `sao2` int(11) NOT NULL,
  `sao3` int(11) NOT NULL,
  `sao4` int(11) NOT NULL,
  `sao5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `sao1`, `sao2`, `sao3`, `sao4`, `sao5`) VALUES
(47, 'Sách - Cò Và Cáo', 'tt23', '16000', 23, '1634615380_1633400885_9847d412c9e4531e9de5d9d71bf5790d.png', 'Cuốn sách nằm trong bộ \"Truyện tranh ngụ ngôn dành cho thiếu nhi\" (song ngữ Anh - Việt) gồm những câu chuyện nổi tiếng trong văn học dành cho thiếu nhi, sách được thiết kế và vẽ câu chuyện theo tranh , sách được thiết kế phần tiếng anh và tiếng việt , với sự kết hợp cả hai thứ tiếng , giúp các bạn nhỏ thích thú hơn trong từng câu chuyện hay nhất được chọn lọc , bạn nhỏ có thể vừa đọc truyện tiếng anh và tiếng việt , để nâng cao phần ngoại ngữ thêm cho bé , cuối mỗi cuốn truyện đều có phần câu hỏi theo tranh cho bé thích thú hơn khi đọc xong câu chuyện, Bộ sách này có 10 chủ đề các em nhỏ tìm cho đủ tập nhé. Chúc các bạn thiếu nhi học tập tốt.', '', 1, 9, 0, 0, 0, 0, 1),
(50, 'Đắc nhân tâm', 'dn2', '150000', 17, '1634615370_1633485133_dac-nhan-tam.png', 'Chủ đề sách Tâm lý - Kỹ năng sống là chủ đề rất đáng để đọc trong cuộc sống. Cung cấp những kiến thức giá trị giúp bạn đối mặt khó khăn, thoát khỏi vùng an toàn để thành công trong công việc, đời sống. Siêu thị sách Nhân Văn cung cấp những cuốn sách hay với nội dung tinh tế, trực quan giúp bạn thay đổi tư duy ngay hôm nay, đổi mới góc nhìn tốt đẹp về cuộc sống. Thay đổi quan điểm, thay đổi cách nhìn nhận vấn đề, thay đổi hành động để thành công ngay hôm nay!', '', 1, 14, 0, 0, 0, 0, 0),
(51, 'Đời ngắn đừng ngủ dài', 'dn32', '180000', 9, '1634615360_1633485266_sach-doi-ngan-dung.png', '“Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”', '', 1, 14, 0, 0, 0, 0, 0),
(52, 'Nói trước công chúng', 'nt43', '75000', 6, '1634615344_nghethuat.png', 'Đắc Nhân Tâm là cuốn sách đưa ra các lời khuyên về cách thức cư xử, ứng xử và giao tiếp với mọi người để đạt được thành công trong cuộc sống. Đắc Nhân Tâm cụ thể và chi tiết với những chỉ dẫn để dẫn đạo người, để gây thiện cảm và dẫn dắt người khác,... những hướng dẫn ấy, qua thời gian, có thể không còn thích hợp trong cuộc sống hiện đại nhưng nếu người đọc có thể cảm và hiểu được những thông điệp tác giả muốn truyền đạt thì việc áp dụng nó vào cuộc sống trở nên dễ dàng và hiệu quả.', '', 1, 14, 0, 0, 0, 0, 0),
(53, 'Cha giàu cha nghèo ', 'A435', '50000', 24, '1634615329_1633491367_cha giau cha ngheo.png', 'Những sự khác nhau trong quan điểm của họ, nhất là khi đề cập đến tiền bạc, khiến Robert trở nên tò mò và bắt đầu suy nghĩ và tổng kết trong cuốn sách Rich Dad, Poor Dad (Cha giàu, cha nghèo) - một trong những cuốn sách về tài chính cá nhân bán chạy nhất trên toàn thế giới với hơn 26 triệu bản.\r\nTrong cuốn sách này, ông Robert Kiyosaki minh họa các quan điểm và niềm tin làm giàu bằng cách so sánh giữa lời khuyên của cha đẻ và cha nuôi.\r\nCuốn sách sẽ không dạy bạn những thủ thuật để làm giàu, nó giúp bạn hiểu được về quyền lực của đồng tiền và tác động của suy nghĩ lên tương lai và túi tiền của con người như thế nào', '', 1, 14, 0, 0, 0, 0, 0),
(54, 'Ba người thầy vĩ đại ', 'adnvd', '100000', 13, '1634615315_1633491591_3 người thầy vĩ đại.png', '“Tôi đã nếm trải nhiều thất bại trong hành trình đi qua những tháng ngày của mình. Thế nhưng, mỗi chướng ngại cuối cùng đều lại chính là một bàn đạp đưa tôi gần hơn nữa tới chân lý trong tâm khảm và cuộc đời tốt đẹp nhất của mình.\r\nCuốn sách này là một tác phẩm hư cấu. Đây là câu chuyện về một người đàn ông có tên Jack Valentine mà đường đời có nhiều điểm giống với tôi. Có cảm nhận rất không đầy đủ với tư cách một con người, anh ấy lên kế hoạch tìm kiếm tri thức để sống một cuộc sống hạnh phúc hơn, khoẻ khoắn hơn và đẹp hơn.', '', 1, 14, 0, 0, 0, 0, 0),
(55, 'Tony buổi sáng ', 'tnbs24', '400000', 41, '1634615303_1633491795_tony.png', 'Có đôi khi vào những tháng năm bắt đầu vào đời, giữa vô vàn ngả rẽ và lời khuyên, khi rất nhiều dự định mà thiếu đôi phần định hướng, thì CẢM HỨNG là điều quan trọng để bạn trẻ bắt đầu bước chân đầu tiên trên con đường theo đuổi giấc mơ của mình. Cà Phê Cùng Tony là tập hợp những bài viết của tác giả Tony Buổi Sáng. Đúng như tên gọi, mỗi bài nhẹ nhàng như một tách cà phê, mà bạn trẻ có thể nhận ra một chút gì của chính mình hay bạn bè mình trong đó: Từ chuyện lớn như định vị bản thân giữa bạn bè quốc tế, cho đến chuyện nhỏ như nên chú ý những phép tắc xã giao thông thường.\r\nChúng tôi tin rằng những người trẻ tuổi luôn mang trong mình khát khao vươn lên và tấm lòng hướng thiện, và có nhiều cách để động viên họ biến điều đó thành hành động. Nếu như tập sách nhỏ này có thể khơi gợi trong lòng bạn đọc trẻ một cảm hứng tốt đẹp, như tách cà phê thơm vào đầu ngày nắng mới, thì đó là niềm vui lớn của tác giả Tony buổi sáng .', '', 1, 14, 0, 0, 0, 0, 0),
(56, 'Tôi tự học ', 'tth374', '45000', 35, '1634615293_1633491943_tôi tự học.png', 'Sách “Tôi tự học” của tác giả Nguyễn Duy Cần đề cập đến khái niệm, mục đích của học vấn đối với con người đồng thời nêu lên một số phương pháp học tập đúng đắn và hiệu quả. Tác giả cho rằng giá trị của học vấn nằm ở sự lĩnh hội và mở mang tri thức của con người chứ không đơn thuần thể hiện trên bằng cấp. Trong xã hội ngày nay, không ít người quên đi ý nghĩa đích thực của học vấn, biến việc học của mình thành công cụ để kiếm tiền nhưng thực ra nó chỉ là phương tiện để  đưa con người đến thành công mà thôi. Bởi vì học không phải để lấy bằng mà học còn để “biết mình” và để “đối nhân xử thế”.', '', 1, 14, 0, 1, 0, 0, 0),
(57, 'Đi tìm lẽ sống ', 'dtls456', '49900', 65, '1634615282_1633492046_đi tìm lẽ sống.png', 'Đi tìm lẽ sống của Viktor Frankl là một trong những quyển sách kinh điển của thời đại. Thông thường, nếu một quyển sách chỉ có một đoạn văn, một ý tưởng có sức mạnh thay đổi cuộc sống của một người, thì chỉ riêng điều đó cũng đã đủ để chúng ta đọc đi đọc lại và dành cho nó một chỗ trên kệ sách của mình. Quyển sách này có nhiều đoạn văn như thế.', '', 1, 14, 0, 0, 0, 0, 0),
(59, 'Làm đĩ ', 'lswhs', '67000', 23, '1634615271_1633495042_làm đĩ.png', 'Vũ Trọng Phụng có truyện ngắn đăng trên nhiều tờ báo từ năm 1930. Tác phẩm của nhà văn hầu hết đăng báo trước khi in thành sách.\r\nTác phẩm chính: Không một tiếng vang (kịch, 1931), Cạm bẫy người (phóng sự, 1933), Dứt tình (tiểu thuyết, 1934), Kỹ nghệ lấy Tây (phóng sự, 1934), Giông tố (tiểu thuyết, 1936), Cơm thầy cơm cô (phóng sự, 1936), Vỡ đê (tiểu thuyết, 1936), Số đỏ (tiểu thuyết, 1936), Làm đĩ (tiểu thuyết, 1936), Lấy nhau vì tình (tiểu thuyết, 1937), Lục sì (phóng sự, 1937), Trúng số độc đắc (tiểu thuyết, 1938), và nhiều truyện ngắn.\r\nÔng mất ngày 13 tháng 10 năm 1939 vì bệnh lao.\r\nLàm đĩ là một trong số những cuốn sách gây ra nhiều cuộc tranh luận trong hơn suốt nửa thế kỷ qua. Từ Nhất Linh, Thái Phỉ, Hoài Thanh trước đây đã có khá nhiều bài đăng trên các báo Tân văn, Tương lai, Ngày nay, Hà Nội báo phê phán quan niệm văn chương của Vũ Trọng Phụng xung quanh tiểu thuyết Làm đĩ của ông; cho đến Hoàng Văn Hoan sau này, khi Vũ Trọng Phụng đã mất gần 25 năm, còn cố tình tìm mọi lời lẽ sặc mùi chính trị phê phán Làm đĩ là một cuốn sách dâm uế và có hại cho sự giáo hóa đạo đức và luân lý đối với thế hệ trẻ Việt Nam. (Vũ Trọng Phụng)', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 15, 0, 0, 0, 0, 2),
(60, 'Tắt Đèn ', 'fsdsdfs', '89000', 43, '1634615260_tatden.png', 'Tắt đèn đã dựng lên một bức tranh chân thực, điển hình về xã hội nông thôn Việt Nam đương thời, có sức tố cáo mãnh liệt. Qua mấy ngày sưu thuế – tác giả xoáy sâu vào nạn thuế thân, một thứ thuế dã man, quái gở, “một di tích Trung cổ” – tác phẩm đã vạch trần bộ mặt tàn bạo của trật tự thực dân nửa phong kiến và thể hiện thật cảm động cuộc sống cùng quẫn, thê thảm của người nông dân lao động bị áp bức, bóc lột. Tác phẩm tập trung làm nổi bật mối mâu thuẫn giai cấp đối kháng gay gắt trong lòng nông thôn Việt Nam trước Cách mạng. Tuy dung lượng không lớn, Tắt đèn đã đưa ra đủ mặt những đại diện của giai cấp thống trị trong xã hội nông thôn khi đó: Bọn địa chủ độc ác, keo kiệt; Bọn cường hào tham lam, thô lỗ; Bọn quan lại dâm ô bỉ ổi, bọn tay sai đầu trâu mặt ngựa... Sau bọn chúng, thấp thoáng bóng “ông Tây” với chính sách sưu thuế dã man.', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 15, 0, 0, 0, 0, 0),
(61, 'Số Đỏ ', 'sd456', '87000', 33, '1634615249_sodo.png', 'Văn học Việt Nam thời xưa có nhiều tác phẩm có giá trị to lớn về mặt nhân văn và nghệ thuật, đã được công nhận và chứng thực qua thời gian. Bộ sách Việt Nam danh tác bao gồm loạt tác phẩm đi cùng năm tháng như: Số đỏ (Vũ Trọng Phụng), Việc làng (Ngô Tất Tố), Gió đầu mùa, Hà Nội băm sáu phố phường (Thạch Lam), Miếng ngon Hà Nội (Vũ Bằng), Vang bóng một thời (Nguyễn Tuân). Hy vọng bộ sách sau khi tái bản sẽ giúp đông đảo tầng lớp độc giả thêm hiểu, tự hào và nâng niu kho tàng văn học nước nhà.\r\n', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 15, 0, 0, 0, 0, 0),
(62, 'Lời Nguyền Lỗ Ban ', 'lqlb234', '350000', 23, '1633495577_loi-.gif', 'Được mệnh danh là “một cuốn tiểu thuyết thần kỳ nhất năm 2011” ngay khi tập 1 vừa xuất bản, Lời Nguyền Lỗ Ban đã tạo nên một cơn sốt tới hàng triệu độc giả.\r\nLời Nguyền Lỗ Ban khai thác một đề tài hoàn toàn mới mẻ và kỳ bí: giải mã trận pháp, cạm bẫy, ám khí,… Tác phẩm đã thức dậy một lượng lớn những tri thức đã bị lãng quên trong cổ tịch tàn văn…‏\r\nNội dung câu chuyện bắt đầu từ chàng thanh niên Lỗ Nhất Khí từ nhỏ đã bị tách khỏi gia đình, đến ở nhờ một người họ hàng rất xa để theo học trường Tây. Say mê với cổ thư, cổ vật trong hiệu đổ cổ của nơi trọ học, cậu đã phát giác ra khả năng linh cảm siêu việt của bản thân.\r\nTrong một lần người bác ghé thăm, đã tiết lộ cho cậu biết bí mật về thân thế, đồng thời cũng trao lại cho cậu một sứ mệnh truyền kiếp cả ngàn năm của dòng dõi Lỗ Ban…', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 16, 1, 0, 0, 0, 1),
(63, 'Vương Quốc Bí Ẩn', 'vqba89', '150000', 65, '1634615235_1633698571_Ảnh chụp.png', 'Truyện viết về cuộc phiêu lưu tìm kiếm một ngôi nhà của Zobayza và Timoken – hai vị tổ tiên của Charlie Bone.\r\n\r\nTimoken và Zobayza là hai người con của nhà vua Vương quốc Bí ẩn. Một hôm, có một vị thần rừng bị thương chạy lạc đến vương quốc, để đền ơn cứu mạng của nhà vua và hoàng hậu, vị thần rừng đã trao tặng cho nhà vua tấm tơ của con nhện mặt trăng cuối cùng, chiếc nhẫn có phép thuật và nước Alixir có tác dụng giữ người ta trẻ mãi không già, hai vật trên có quyền năng vô biên, có thể bảo vệ người sở hữu nó an toàn trước mọi hiểm nguy. Lúc đó công chúa Zobayza chỉ gần 2 tuổi và hoàng tử Timoken thì chưa ra đời.\r\n\r\nRồi đến một ngày vương quốc bị bọn ma quỉ xâm lấn, hai chị em lên đường tìm kiếm một ngôi nhà mới với hai bảo vật của vị thần rừng ban tặng cùng lọ Alixir – loại nước thần giúp người ta trẻ mãi không già. Hai chị em gặp được một chú lạc đà biết nói trên đường rong rủi, thế là cả ba bắt đầu cuộc phiêu lưu kỳ thú, và cũng là những cuộc chạy trốn triền miên. Cuộc hành trình kéo dài hơn hai trăm năm, đầy nguy hiểm nhưng cũng lắm điều thú vị.', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 16, 0, 0, 0, 1, 2),
(65, 'Dế Mèn phiêu lưu ký ', 'fyrt', '69000', 23, '1634615224_1633496609_de-men-phieu-luu-ky (1).png', 'Trong hơn nửa thế kỉ kể từ ngày ra mắt bạn đọc lần đầu tiên năm 1941, \"Dế Mèn phiêu lưu kí\" là một trong những sáng tác tâm đắc nhất của nhà văn Tô Hoài. \r\n\r\nTác phẩm đã được tái bản nhiều lần và được dịch ra hơn 20 thứ tiếng trên thế giới và luôn được các thế hệ độc giả nhỏ tuổi đón nhận. \r\n\r\nTác phẩm đã được xuất bản với nhiều hình thức khác nhau. \r\n\r\nTrong đó cuốn \"Dế Mèn phiêu lưu kí\" gồm 148 trang, trên khổ giấy 18x25 cm với nhiều minh hoạ sinh động của hoạ sĩ Tạ Huy Long - một hoạ sĩ chuyên vẽ cho sách thiếu nhi. \r\n\r\nBằng cách sử dụng màu nước điêu luyện, hoạ sĩ Tạ Huy Long đã làm sống động thêm tác phẩm bất hủ của nhà văn Tô Hoài. \r\n\r\nCuốn sách là món quà đẹp cả về hình thức lẫn nội dung, là món quà ý nghĩa và bổ ích mà các bậc phụ huynh tặng cho con em của mình.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, .....', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 9, 0, 0, 0, 0, 5),
(66, 'Đảo giấu vàng ', 'dgv454', '49820', 34, '1634615139_daovang.png', 'Đảo giấu vàng - cái tên nghe hấp dẫn như chuyện cổ tích ấy lại là một câu chuyện về xã hội Anh hồi thế kỉ thứ XVIII, cái thế kỉ tanh \"máu và bùn\" của vương triều London đang mở rộng cuộc hành trình chinh phạt và xâm chiếm thuộc địa để biến nước Anh thành một đế quốc \"không có mặt trời lặn\". Một chế độ kẻ cướp ắt sinh ra những tên cướp. Ấy là nguồn gốc mọc lên \"Đảo giấu vàng\" trong xứ sở những hòn đảo Britain kia.\r\n\r\nMột hòn đảo nằm chơi vơi giữa biển, đem ngày ầm ầm sóng vỗ, nhấp nhô những trái đồi trọc bên những vạt rừng thông cổ thụ, nơi ẩn náu của chim trời chỉ  gợi lên cái cô quạnh hãi hùng trước sức mạnh ngự trị của thiên nhiên lại bỗng có một sức cuốn hút kì diệu. Chỉ vì nó chứa trong lòng mình một kho vàng do băng cướp của một viên thuyền trưởng tên là Flin cất giấu. Vàng - cái ma lực phi thường của xã hội Châu Âu - kéo những con người của nước Anh kia vào cuộc. Ai sẽ đoạt được kho vàng, bọn cướp còn lại trong băng nhóm của Flin hay những kẻ khác?...', 'Truyện Kiều của Nguyễn Du chính là kiệt tác văn học của Việt Nam, tập thơ như một bài ca lớn về giá trị hiện thực và nhân đạo đồng thời đây cũng là bản cáo trạng về tội ác về xã hội cũ coi đồng tiền là sức mạnh, luôn chèn ép số phận con người đặc biệt là người phụ nữ. Giá trị nội dung của tác phẩm mang hai giá trị hiện thực và nhân đạo to lớn.\r\n\r\nGiá trị hiện thực mà đại thi hào Nguyễn Du muốn khắc hoạ trong tác phẩm chính là bức tranh xã hội đương thời. Nhà thơ muốn lên án, tố cáo giai cấp phong kiến, những thế lực đã chà đạp lên quyền sống, quyền hạnh phúc của con người. Và xã hội này có tiền sẽ có sức mạnh nên ai ai cũng tham tiền gây bao đau thương cho người khác đặc biệt là người phụ nữ.\r\n\r\nGia đình nhà Vương ông đang sống yên bình nhưng vì thằng bán tơ tham tiền đã buông lời “vu oan giá hoạ” thế là cả gia đình gặp biến cố lớn, cha và em trai Thuý Kiều vào ngục. Bọn quan sai cũng nhờ cái cớ đó mà tiến vào nhà Kiều cướp phá, đánh đập. Để cứu được cha và em, bọn quan lại yêu cầu ba trăm lạng bạc, Thuý Kiều phải bán thân từ bỏ mối nhân duyên đẹp với Kim Trọng để làm tròn chữ hiếu. Sau đó, Kiều bị bán vào lầu xanh nơi có Tú bà, Mã Giám Sinh, Sở Khanh đều là những người chạy theo đồng tiền, chà đạp lên thân phận người khác nhằm chuộc lợi. Không chỉ Kiều mà biết bao người con gái khác cũng bị chôn vùi tuổi thanh xuân nơi lầu xanh nhơ nhớt ấy. Ngoài ra, giá trị hiện thực của tác phẩm còn thể hiện ở việc Nguyễn Du tố cáo sự thối nát, mục ruỗng của chính quyền phong kiến, đại diện trong tác phẩm này là Hồ Tôn Hiến và bè lũ sai nha của hắn, chúng lộng quyền, tham lam hơn nữa còn trắc dâm ô tàn bạo.\r\n\r\nĐồng tiền khi rơi vào tay kẻ xấu chính là công cụ gây ra tội ác cho “kẻ yếu” hơn. Và Truyện Kiều chính là một bản tự sự đầy nước mắt về cuộc đời người con gái tài sắc Thuý Kiều đang bị chính sức mạnh và sự bất nhân của đồng tiền gây ra. Nhưng điều khiến tác phẩm này trở thành linh hồn chính là giá trị nhân đạo mà Nguyễn Du truyền tới người thưởng thức.\r\n\r\nThông qua nhân vật chính của tác phẩm là Thuý Kiều, Nguyễn Du muốn thể hiện niềm đồng cảm sâu sắc của ông với những số phận bất hạnh nhất là người phụ nữ. Trong xã hội phong kiến, trọng nam khinh nữ, thân phận người phụ nữ như chỉ mua vui, họ bèo bọt, rẻ rúng. Tuổi xuân của họ của người phụ nữ xinh đẹp như Kiều đáng phải được nâng niu, trân trọng thì nay lại bị những kẻ cậy quyền, tham lam lợi dụng, lừa lọc để làm công cụ kiếm tiền nơi lầu xanh.\r\n\r\nNguyễn Du cũng là người “yêu” vẻ đẹp con người. Ông đã tạo dựng thành công hình ảnh chàng Kim Trọng hết mực chung tình với Thuý Kiều, chàng Từ Hải người anh hùng giỏi giang, đầu đội trời, chân đạp đất. Đặc biệt là người con gái thuỳ mị xinh đẹp Thuý Kiều sẵn sàng hi sinh bản thân để giữ trọn nghĩa hiếu. Và qua tác phẩm ta cũng thấy được niềm tin ở hạnh phúc của con người, người tốt thiện lương sẽ luôn được hưởng hạnh phúc còn kẻ ác, tham lam sẽ bị trừng trị thích đáng.\r\n\r\nHai giá trị hiện thực và nhân đạo trong thơ Nguyễn Du đã tạo ra bức tranh âm thanh, màu sắc hiện thực đa dạng nhưng dạt dào xúc cảm vừa có sự yêu thương chân thành, vừa là nỗi căm giận sâu sắc. Điều này cũng giúp Truyện Kiều trở thành một kiệt tác văn học của dân tộc Việt Nam và thế giới.', 1, 9, 5, 2, 1, 1, 14),
(70, 'người thầy vĩ đại', 'ntvd', '30000', 5, '1638764898_demo.png', 'tom tắt', 'tóm tắt', 0, 9, 0, 0, 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_cmt`
--
ALTER TABLE `tbl_cmt`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_cmt`
--
ALTER TABLE `tbl_cmt`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
