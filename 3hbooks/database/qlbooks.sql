-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 08:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `book1`
--

CREATE TABLE `book1` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(11, '180 Thủ Thuật Và Mẹo Hay Trong Flash CS4  	180 Thủ Thuật Và Mẹo Hay Trong Flash CS4 ', 'Th.S Nguyễn Nam Thuận.', 72, '<h1>Giới thiệu về nội dung</h1>\r\n\r\nAdobe Flash Professional CS4 là phiên bản mới nhất của công cụ thiết kế Web đang rất thịnh hành hiện nay. Chương trình không những được sử dụng để tạo các hoạt hình đơn giản mà còn có công dụng rất cao trong việc tạo những Website ấn tượng và những ứng dụng Web chuyên nghiệp. Quyển sách \"180 Thủ thuật và mẹo hay trong Flash CS4\" sẽ hướng dẫn bạn đọc về các tính năng của ứng dụng này và cách vận dụng chúng một cách khéo léo và sáng tạo vào việc tạo hoạt hình.\r\n\r\nSách gồm 12 chương, được thiết kế phù hợp cho những người mới bắt đầu sử dụng Flash và những chuyên viên thiết kế Flash muốn tìm hiểu thêm về Flash CS4. Các chương đầu trình bày những vấn đề căn bản về việc tạo các thành phần đồ họa bằng cách sử dụng các công cụ vẽ của Flash CS4. Các chương tiếp theo sau đó sẽ hướng dẫn cách biến đổi các thành phần đồ họa thành những cảnh hoạt hình ấn tượng. Bên cạnh đó sách còn hướng dẫn nhiều nội dung thú vị khác liên quan đến hoạt hình với Flash. Sách được bố cục rõ ràng theo từng chương và đề mục, nội dung trình bày ngắn gọn kèm hình ảnh minh họa.\r\n\r\nMời bạn đón đọc.', 'NXB Hồng Đức ', 448, '16 x 24 cm ', '05 - 2010', '672e2abed0978_11.jpg'),
(16, 'Thủ Thuật Lập Trình PHP', 'Phạm Mạnh Lâm. ', 12, '<h1>Giới thiệu về nội dung</h1>\r\nThủ Thuật Lập Trình PHP\r\n\r\nNội sách dung gồm 3 phần:\r\nPhần I: Hướng dẫn cho bạn cách thực hiện việc kiểm thử (test) các ứng dụng PHP: Phương pháp kiểm thử từng thành phần (unit test), cách tự động sinh mã lệnh kiểm thử, cách tạo robot kiểm thử…\r\nPhần II: Mang đến cho bạn đọc những thủ thuật để viết các ứng dụng chạy trên mọi hệ điều hành Windows, Linux, Macintosh và thậm chí cả PlayStation Portable (PSP), thủ thuật lập trình gửi tin nhắn (instant message)…. \r\nPhần III: Cung cấp những đoạn mã PHP để thực hiện những tính năng rất thú vị như bạn có thể tự tạo ra bản đồ giống như bản đồ của Google, xây dựng ứng dụng web chơi nhạc MP3…\r\n\r\nMời bạn đón đọc.', 'Giao thông vận tải ', 52, '19x27 cm', '12 - 2006', '672e2ade5a19e_16.jpg'),
(12, 'Thực Hành AutoCad 2010 Bằng Hình Minh Họa  	Thực Hành AutoCad 2010 Bằng Hình Minh Họa', 'Nhiều Tác Giả.', 63, '<h1>Giới thiệu về nội dung</h1>\r\n\r\nKể từ năm 1982 AutoCAD đã là công cụ vẽ phổ biến cho những người sử dụng máy tính cá nhân. Cho đến nay, có thể nói có hàng triệu triệu người sử dụng AutoCAD để tạo bản vẽ, bao gồm các kiến trúc sư, kỹ sư, chuyên viên vẽ sơ đồ thiết kế, các quản lý dự án, và các học sinh sinh viên chuyên ngành thiết kế xây dựng.\r\n\r\n\"Giáo trình AutoCAD 2010 thiết kế 2D và 3D\" này được đặc biệt biên soạn dành cho các học sinh sinh viên làm quen với AutoCAD 2010. Đây cũng là giáo trình rất tiện lợi cho các thầy cô giáo dạy vẽ tại các trường cao đẳng và đại học sử dụng làm tài liệu hướng dẫn học tập cho các em.\r\n\r\nSách gồm 10 chương, hướng dẫn các thao tác thực hiện căn bản với AutoCAD 2010, vẽ các đối tượng khác nhau một cách nhanh chóng và chính xác, thiết lập các bản vẽ, tạo bản vẽ bằng những bước đơn giản, chỉnh sửa các đối tượng trong bản vẽ, tạo và chèn các khối vẽ, sử dụng các mẫu ký hiệu mặt cắt, tạo các bảng và chú thích, chèn và hiệu chỉnh các kích thước, chuẩn bị và in bản vẽ.\r\n\r\nBên cạnh những nội dung nêu trên, sách còn có 40 bài tập và 21 bài thực hành nhằm mục đích giúp các bạn học sinh sinh viên nhanh chóng nắm bắt vấn đề và vận dụng những kiến thức mình đã học được vào công việc thực tiễn. Cuối mỗi chương đều có phần câu hỏi ôn tập nhằm giúp bạn tự kiểm tra lại mức độ hiểu bài của mình.\r\n\r\nMời bạn đón đọc.', 'NXB Hồng Đức ', 346, '19x24', '4 - 2010', '672e2ae632174_12.jpg'),
(13, 'Hướng Dẫn Thiết Kế Website', 'Water PC. ', 36, '<h1>Giới thiệu về nội dung</h1>\r\n\r\nNội dung cuốn sách này bao gồm:\r\n\r\nBài 1: Đôi điều với người thiết kế website\r\n\r\nBài 2: Tìm hiểu về ngôn ngữ HTML căn bản trong thiết kế Website\r\n\r\nBài 3: XML trong thiết kế Website\r\n\r\nBài 4: Sử dụng ngôn ngữ JavaScript trong thiết kế Website\r\n\r\nBài 5: Làm quen với Dreamweaver MX trong thiết kế web\r\n\r\nBài 6: Ngôn ngữ Perl\r\n\r\nBài 7: Trình duyệt web thông dụng\r\n\r\nMời bạn đón đọc.', 'Nxb Văn hóa Thông tin ', 256, '13 x 20.5 ', '11 - 2009 ', '672e2aef0409b_13.jpg'),
(14, 'Giáo Trình Lập Trình Web PHP Và MY SQL - CD', 'T. Hoa ', 28, '', '', 0, '', '', '672e2af7602db_14.jpg'),
(15, 'Thiết Kế Web Động Với PHP5', 'STEVEN HOLZNER', 57, '', '', 0, '', '', '672e2b0267c40_15.jpg'),
(17, 'Tự Học PHP Trong 24 Giờ', 'Thuận Thành.', 63, '', '', 0, '', '', '672e2b0c3a04f_17.jpg'),
(18, ' Quản Trị Windows Server 2008 - Tập 2 	Quản Trị Windows Server 2008 - Tập 2', 'Tô Thanh Hải.', 62, '', '', 0, '', '', '672e2b19431fb_18.jpg'),
(19, 'hoiafn', 'hoàn', 25000, '', '', 0, '', '', '672e2b461f940_01adf43e-b3c2-4be7-9cc1-0cb8be265362.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book2`
--

CREATE TABLE `book2` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book2`
--

INSERT INTO `book2` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(21, 'Tương lai của quản trị', 'Gary Hamel', 125, '<h1>Giới thiệu về nội dung:</h1>\r\n\r\nTrong tương lai của quản trị, Gary Hamel chứng minh rằng ngày nay các tổ chức đang cần đổi mới quản trị hơn bao giời hết. Mô hình quản trị hiện tại tập trung vào kiểm soát và tính hiệu quả - không còn phù hợp trong một thế giới mà khả năng thích nghi và tính sáng tạo là không thể thiếu để kinh doanh thành công. Không chỉ phá bỏ triệt để hệ thống niền tin cố hữu ngăn cản các công ty của thế kỷ XXI vượt qua những thách thức mới, Hamel còn đưa ra cách thức giúp các công ty từng bước trở thành nhà đổi mới quản trị, Hamel tiết lộ:\r\n\r\nNhững thách thức sống còn sẽ quyết định lợi thế cạnh tranh trong thế giới đầy biến động ngày nay.\r\n\r\nẢnh hưởng tiêu cực của những niềm tin cố hữu trong quản trị\r\n\r\nTiềm năng của Web trong quá trình dân chủ hóa việc thực hành quản trị\r\n\r\nNhững hành động mà công ty của bạn có thể thực hiện bây giờ để tạo dựng lợi thế quản trị cho bản thân.\r\n\r\nMời bạn đón đọc.\r\n', 'Nxb Đại học Kinh tế quốc dân', 404, '14.5x20.5 cm', '03/2010 ', '672e2b5c2ced7_21.jpg'),
(22, 'Nghiệp Vụ Ngân Hàng Quốc Tế  ', 'Lê Văn Tư.', 122, '<h1>Giới thiệu về nội dung:</h1>\r\n\r\nNgày nay, mọi hoạt động thương mại, sản xuất và đầu tư ngày càng mang tính chất quốc tế hóa ở nhiều quốc gia. Chính sự toàn cầu hóa nền kinh tế thế giới đã làm tăng lượng giao dịch trong hoạt động tài chính, tiền tệ giữa các nước. Một nền kinh tế mở, tiến tới hội nhập với thị trường thế giới phải được một cơ cấu tài chính hiện đại vững mạnh hỗ trợ, trong đó hệ thống ngân hàng thông qua nghiệp vụ ngân hàng quốc tế, hỗ trợ cho sự phát triển của hoạt động ngoại thương và thu hút đầu tư quốc tế, thúc đẩy sự thành công của quá trình hội nhập kinh tế quốc tế.\r\nNghiệp vụ ngân hàng quốc tế của hệ thống ngân hàng phát triển sẽ thúc đẩy mạnh mẽ hoạt động xuất nhập khẩu của quốc gia, đồng thời là nhân tố tích cực kích thích sự luân chuyển các luồng vốn đầu tư quốc tế vào quốc gia đó. Chính thông qua nghiệp vụ ngân hàng quốc tế, các nhà kinh doanh và đầu tư nhanh chóng nắm bắt và làm chủ các thông lệ về tài chính quốc tế, để có thể thực hiện tốt và cạnh tranh trên lộ trình hội nhập với các nước phát triển có  kinh nghiệm và năng lực, nguồn lực gấp nhiều lần so với chúng ta.\r\nQuyển sách này giới thiệu các cơ chế cơ bản của nghiệp vụ ngân hàng quốc tế, cũng như các kỹ thuật trực tiếp rút ra từ các cơ chế này. Tác giả đã cố gắng thể hiện đơn giản và dễ hiểu các kỹ thuật chuyên sâu, và hy vọng quyển sách sẽ đáp ứng nhu cầu tìm hiểu của các nhà xuất nhập khẩu, các nhà hoạt động ngân hàng, các nhà nghiên cứu và các sinh viên của các trường cao đẳng và đại học khối kinh tế – tài chính – ngân hàng – ngoại thương – kinh doanh quốc tế....', ' Nxb Thanh Niên', 608, '16x24 cm', '2009', '672e2b64718af_22.jpg'),
(23, 'Quản Trị Tài Chính Quốc Tế', 'Ngô Thị Ngọc Huyền.', 60, '', '', 0, '', '', '672e2b6d3dcd0_23.jpg'),
(24, '36 Kế Ứng Dụng Trong Kinh Doanh Và Cuộc Sống', 'Ngọc Bích.', 55, '', '', 0, '', '', '672e2b74a7ffc_24.jpg'),
(25, 'Khác Biệt Hay Là Chết ', 'Jack Trout.', 68, '', '', 0, '', '', '672e2b7e6dd8a_25.jpg'),
(26, '50 Lời Bàn Về Thành Công Của Những Người Nổi Tiếng', 'Hoàng Kim.', 23, '', '', 0, '', '', '672e2b897ba6c_26.jpg'),
(27, '22 Quy Luật Cơ Bản Của Quảng Cáo - Những Quy Luật Cần Biết Để Xây Dựng Một Thương Hiệu Mạnh  	22 Quy Luật Cơ Bản Của Quảng Cáo - Những Quy Luật Cần Biết Để Xây Dựng Một Thương Hiệu Mạnh', 'Michael Newman.', 42, '', '', 0, '', '', '672e2b95ec256_27.jpg'),
(29, 'hoho', 'hoàn', 30, 'hoahsochoashcio123', 'ns1234', 210, '14x14', '2003', '672e281f88fff_464190357_1124358342386851_789472881702852891_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book3`
--

CREATE TABLE `book3` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book3`
--

INSERT INTO `book3` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(31, 'Luật đất đai', 'Trần Thị Thu Hạnh', 55, '<h1>Giới thiệu về nội dung:</h1>\r\n\r\nMục lục:\r\n\r\n \r\n\r\nChương I. Những qui định chung\r\n\r\nChương II.  Quyền của  Nhà nước đối với đất đai  và quản lý Nhà nước về đất đai \r\nChương III.  Chế độ sử dụng các loại đất.\r\nChương IV. Quyền và nghĩa vụ của người sử dụng đất.\r\nChương V.  Thủ tục hành chính về quản lý và sử dụng đất đai.\r\nChương VI. Thanh tra, giải quyết tranh chấp, khiếu nại tố cáo và xử lý vi phạm pháp luật về đất đai.       \r\nChương VII.  Điều khoản thi hành.\r\nPhụ lục ', 'Nxb Thống kê', 282, '14.5x20.5 cm', '2008', '672e2ba2d42fd_31.jpg'),
(32, 'Luật Đấu Thầu Và Văn Bản Hướng Dẫn Thực Hiện ', 'Nhiều Tác Giả.', 24, '', '', 0, '', '', '672e2baba3e11_32.jpg'),
(33, 'Luật Thương Mại  	Luật Thương Mại', 'Nhiều Tác Giả.', 27, '', '', 0, '', '', '672e2bb464adf_33.jpg'),
(34, 'Luật Kinh Doanh Việt Nam  	Luật Kinh Doanh Việt Nam', 'Nguyễn Quốc Sỹ.', 70, '', '', 0, '', '', '672e2bbc8c86a_34.jpg'),
(35, 'Pháp Luật Đại Cương', 'Lê Học Lâm.', 43, '', '', 0, '', '', '672e2bc4b9ddc_35.jpg'),
(36, '3450 Thuật Ngữ Pháp Lý Phổ Thông  	3450 Thuật Ngữ Pháp Lý Phổ Thông', 'Nguyễn Ngọc Điệp.', 125, '', '', 0, '', '', '672e2bce886d3_36.jpg'),
(37, 'Giáo Trình Pháp Luật Đại Cương', 'Nguyễn Đăng Liêm.', 25, '', '', 0, '', '', '672e2be4ea135_37.jpg'),
(38, 'Luật Giáo Dục', 'Nhiều Tác Giả.', 8, '', '', 0, '', '', '672e2bf0af98a_38.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book4`
--

CREATE TABLE `book4` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book4`
--

INSERT INTO `book4` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(41, 'Kỳ Thi Năng Lực Tiếng Nhật J.Test (A - D)', 'Nhiều Tác Giả.', 60, '', '', 0, '', '', '672e2bfe5b616_41.jpg'),
(42, 'Essential Skills For Ielts - Expanding Vocabulary Through Reading  	', ': Hu Min - John A Gordon ', 78, '', '', 0, '', '', '672e2c1e96adf_42.jpg'),
(43, 'English Communication For Your Career - Health Science (Kèm CD) ', 'Soh Yoon Hee.', 136, '', '', 0, '', '', '672e2c293c277_43.jpg'),
(44, 'A Practical English Grammar  	A Practical English Grammar', 'Le Ton Hien.', 48, '', '', 0, '', '', '672e2c319e5cb_44.jpg'),
(46, '54 Trọng Điểm Làm Bài Thi Môn Tiếng Anh', 'Nguyễn Hà Phương.', 60, '', '', 0, '', '', '672e2c3ce60c7_46.jpg'),
(47, 'Essential Speaking For Ielts (Dùng Kèm 1 Đĩa MP3)', 'Hu Min.', 110, '', '', 0, '', '', '672e2c08b6b87_47.jpg'),
(48, 'Interactions 2 - Grammar', 'Patricia K. Werner.', 115, '', '', 0, '', '', '672e2c133f1a9_48.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book5`
--

CREATE TABLE `book5` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book5`
--

INSERT INTO `book5` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(51, 'Thương trường đẫm lệ', 'Phù Thạch', 120, '', '', 0, '', '', '672e2c6919a06_51.jpg'),
(52, ' Xứ Cát - Tiểu Thuyết Khoa Học Giả Tưởng Lớn Nhất Mọi Thời Đại', 'Frank Herbert', 120, '', '', 0, '', '', '672e2c72e631c_52.jpg'),
(53, 'Người Đàn Ông Đa Cảm', 'Javier Marias', 39, '', '', 0, '', '', '672e2c7d045b8_53.jpg'),
(54, 'Viết', 'Marguerite Duras ', 28, '', '', 0, '', '', '672e2c8721086_54.jpg'),
(55, 'Hot Girl Tây Ban Nha ', 'Lisi Harrison. An Chi. ', 55, '', '', 0, '', '', '672e2c9112ad1_55.jpg'),
(56, 'Cung Bậc Tình Yêu 2(Truyện Hay Song Ngữ Việt - Anh)', 'TÔN THẤT LAN', 28, '', '', 0, '', '', '672e2c5d21aea_56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book6`
--

CREATE TABLE `book6` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book6`
--

INSERT INTO `book6` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(62, 'Kim Dung Giữa Đời Tôi - Toàn Tập', 'Vũ Sao Đức Biển', 125, '', '', 0, '', '', '672e2ca5d66b7_62.jpg'),
(61, 'Đảo mộng mơ - (bìa cứng)', 'Nguyễn Nhật Ánh ', 99, '', '', 0, '', '', '672e2cafe95b4_61.jpg'),
(63, 'Đường Cái Quan', 'Bùi Quang Đạt', 25, '', '', 0, '', '', '672e2cba0589a_63.jpg'),
(64, 'Đài các tiểu thư', 'Hồng Sakura', 35, '', '', 0, '', '', '672e2cc5dbcae_64.jpg'),
(65, 'Hai bầu trời', 'Khánh Phương', 24, '', '', 0, '', '', '672e2cd004c83_65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book7`
--

CREATE TABLE `book7` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book7`
--

INSERT INTO `book7` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(71, 'Bí mật của một trí nhớ siêu phàm', 'Eran Katz', 59, '', '', 0, '', '', '672e2d27c1e26_71.jpg'),
(72, 'Trí tuệ Do Thái - Jerome Becomes a Genius', 'Eran Katz', 79, '', '', 0, '', '', '672e2d1fafc61_72.jpg'),
(73, 'Sao biển và nhện', 'Ori Brafman. Rod A. Beckstrom. ', 79, '', '', 0, '', '', '672e2d1686c45_73.jpg'),
(74, 'Những Nguyên Tắc Thành Công ', 'JACK CANFIELD ', 119, '', '', 0, '', '', '672e2d0e56d9a_74.jpg'),
(75, 'Ngụ Ngôn Nhỏ Trí Tuệ Lớn Thành Thông - ', 'Thành Thông', 39, '', '', 0, '', '', '672e2d0581124_75.jpg'),
(76, 'Bài Học Từ Loài Chó - Sống Đơn Giản Để Thành Công Và Hạnh Phúc ', 'William Cottringer. ', 69, '', '', 0, '', '', '672e2cfb679d6_76.jpg'),
(77, 'Lời Nói Có Đáng Tin?', 'Navarro', 140, '', '', 0, '', '', '672e2cf065fe7_77.jpg'),
(78, 'ÉMILE HAY LÀ VỀ GIÁO DỤC', 'Jean-Jacques Rousseau', 131, '', '', 0, '', '', '672e2ce302803_78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book8`
--

CREATE TABLE `book8` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book8`
--

INSERT INTO `book8` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(81, 'Em Phải Đến Harvard Học Kinh Tế (Trọn Bộ 4 Tập)', 'Harriet Beecher Stowe ', 254, '', '', 0, '', '', '672e2d99609c9_81.jpg'),
(82, 'NHỮNG CHẶNG ĐƯỜNG LỊCH SỬ', 'Võ Nguyên Giáp', 97, '', '', 0, '', '', '672e2d8d4e378_82.jpg'),
(83, 'Cảm hứng theo 7 thói quen thành đạt ', 'Stephen R.Covey ', 95, '', '', 0, '', '', '672e2d8336cb7_83.jpg'),
(84, ' Trần Huy Liệu - Cõi Người  ', 'TRẦN CHIẾN', 45, '', '', 0, '', '', '672e2d759f1f7_84.jpg'),
(85, 'Những Người Nổi Tiếng ', 'Carolyn Keene', 55, '', '', 0, '', '', '672e2d6ab6cc3_85.jpg'),
(86, '100 Người Phụ Nữ Có Ảnh Hưởng Lớn Ở Mọi Thời Đại ', 'Bùi Loan Thùy ', 75, '', '', 0, '', '', '672e2d5dac29e_86.jpg'),
(87, 'Nguyễn Ái Quốc Với Nhật Ký Chìm Tàu ', 'Phạm Quý Thích', 75, '', '', 0, '', '', '672e2d4dcf0ef_87.jpg'),
(88, 'Cuộc Chiến Bí Mật Của Roosevelt FDR Và Hoạt Động Gián Điệp Trong Thế Chiến II ', 'Joseph E.Persico ', 135, '', '', 0, '', '', '672e2d40a8f73_88.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book9`
--

CREATE TABLE `book9` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book9`
--

INSERT INTO `book9` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(92, 'Cây Giác Ngộ ', 'THÍCH TÂM QUANG', 49, '', '', 0, '', '', '672e2de9a4afb_92.jpg'),
(93, 'Các Nhà Tư Tưởng Lớn Của Kitô Giáo', 'Hans Kung. - Dịch giả: Nguyễn Nghị', 70, '', '', 0, '', '', '672e2ddf92e89_93.jpg'),
(94, '365 Ngày Chiêm Nghiệm Thiền Định Để Sống Đời Hạnh Phúc', 'DALAI LAMA ', 42, '', '', 0, '', '', '672e2dd33c3e8_94.jpg'),
(95, 'PHƯƠNG PHÁP NGỒI THIỀN', ' NGUYỄN TUỆ CHÂN', 56, '', '', 0, '', '', '672e2dc7f3c19_95.jpg'),
(96, 'Thuật Giả Kim Mới Hướng Bạn Vào Trong ', 'Osho ', 35, '', '', 0, '', '', '672e2dbe55a4b_96.jpg'),
(97, 'Tôn Giáo Học Nhập Môn ', 'Đỗ Minh Hợp', 83, '', '', 0, '', '', '672e2db47a5ea_97.jpg'),
(98, 'Nền Tảng Đạo Phật - Tỉnh Thức Giác Ngộ Sống Đời Ý Nghĩa ', 'Sarah Napthali', 39, '', '', 0, '', '', '672e2da7ca276_98.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book10`
--

CREATE TABLE `book10` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book10`
--

INSERT INTO `book10` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(101, 'Giúp bạn tự xử lý 175 bệnh thường gặp Tác Giả : BS. Donald M. Vickery -', 'James F. Fries ', 110, '', '', 0, '', '', '672e2e3e2b953_101.jpg'),
(102, 'Ăn Gì Để Phòng Bệnh ', 'BÁC SĨ LÊ THUÝ TƯƠI', 30, '', '', 0, '', '', '672e2e357df49_102.jpg'),
(103, 'Sức Khỏe Người Cao Tuổi ', 'Nguyễn Ý Đức ', 62, '', '', 0, '', '', '672e2e2d79667_103.jpg'),
(104, 'Tiếng Nói Cơ Thể Phụ Nữ ', 'HOÀNG ANH', 34, '', '', 0, '', '', '672e2e24ad862_104.jpg'),
(105, 'Chẩn Đoán Qua Tay Chữa Trị Bằng Chân - Các Bệnh Thường Gặp ', 'Đường Bình', 35, '', '', 0, '', '', '672e2e19ed657_105.jpg'),
(106, 'Trị Bệnh Bằng Thực Phẩm Thường Ngày', ' VƯƠNG MỘNG BƯU', 40, '', '', 0, '', '', '672e2e108c6ed_106.jpg'),
(107, 'Những Quy Tắc Để Sống Khỏe ', 'Alpha Books', 49, '', '', 0, '', '', '672e2e055515e_107.jpg'),
(108, 'Bệnh Tuyến Tiền Liệt Và Thực Đơn Phòng Chữa Trị ', 'Hải Minh ', 29, '', '', 0, '', '', '672e2df8288bd_108.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book11`
--

CREATE TABLE `book11` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book11`
--

INSERT INTO `book11` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(111, 'Tập bản đồ hành chính Việt Nam, khổ A2 ', 'Nxb Bản đồ', 1080, '', '', 0, '', '', '672e2e9196e34_111.jpg'),
(112, 'Non Nước Việt Nam - Sắc Nét Trung Bộ ', 'Phạm Côn Sơn', 60, '', '', 0, '', '', '672e2e86cf70b_112.jpg'),
(113, 'Đồng Bằng Sông Cửu Long - Nét Sinh Hoạt Xưa Và Văn Minh Miệt Vườn (Biên Khảo Sơn Nam, Bìa Cứng) ', 'Sơn Nam', 84, '<h1>Giới thiệu về nội dung:</h1>\r\n\r\nVới hơn 60 năm sống, đọc, tìm hiểu, nghiên cứu và viết, nhà văn - nhà Nam Bộ học Sơn Nam đã trao cho cuộc đời một gia tài thật đồ sộ - gần 60 tác phẩm đã được xuất bản, trong đó có không ít hơn 50 tác phẩm là của riêng ông.\r\n\r\n\r\nNói đến tác phẩm Sơn Nam là nói đến chủ đề về Nam Kỳ Lục Tỉnh, về đất, về người, về lịch sử khẩn hoang và phát triển của Nam Bộ.\r\nTừ sáu tỉnh ban đầu dưới triều Nguyễn gồm Biên Hòa, Gia Định, Định Tường, Vĩnh Long, An Giang và Hà Tiên trong đó có bốn tỉnh thuộc đồng bằng sông (trừ Biên Hòa và Gia Định) nay chúng ta có 13 tỉnh và thành phố trực ương. Sự phát triển không ngừng của đồng bằng sông Cửu Long trong những năm qua luôn hàm chứa những giá trị văn hóa tinh thần lớn lao do tiền nhân - những người đi khai hoang mở đất buổi đầu và qua nhiều thế hệ. Tìm hiểu về những giá trị văn hóa tinh thần đó cũng là tìm hiểu về nền văn minh của người mở đất, tìm hiểu nết ăn, nếp ở, tập quán sinh hoạt của một bộ phận người đã tạo nên diện mạo của một vùng văn hóa. \r\n\r\n\r\nTrong tinh thần đó, Nhà xuất bản Trẻ đã cho xuất bản tập sách Đồng Bằng Sông Cửu Long - Nét Sinh Hoạt Xưa Và Văn Minh Miệt Vườn.\r\nVăn minh miệt vườn là tác phẩm được tác giả hoàn thành giữa năm 1970 và được xuất bản lần đầu tại Sài Gòn năm 1970 bởi Nhà xuất bản An Tiêm. Còn Đồng bằng Sông Cửu Long - Nét sinh hoạt xưa là tác phẩm được viết sau ngày 30.4.1975 và được in lần đầu bởi Nhà xuất bản Thành phố Hồ Chí Minh năm 1985.\r\nTrong lần xuất bản này, 2 tác phẩm được in gộp thành một cuốn để bạn đọc tiện nghiên cứu.\r\nSách được trình bày bìa cứng, xin trân trọng giới thiệu cùng bạn. ', 'Nxb Trẻ', 423, '14x20 cm', ' 2008', '672e2e7cbeaba_113.jpg'),
(114, 'Tìm Hiểu Các Nước TrênThế Giới (202 Quốc Gia Và Vùng Lãnh Thổ) ', 'NGUYỄN VĂN DƯƠNG', 180, '', '', 0, '', '', '672e2e72ab724_114.jpg'),
(115, 'Quần Thể Di Tích Huế (Việt Nam - Di Sản Thế Giới)', ' Phan Thuận An', 51, '', '', 0, '', '', '672e2e6885d85_115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book12`
--

CREATE TABLE `book12` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book12`
--

INSERT INTO `book12` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(121, 'Đại Việt Sử Ký Toàn Thư ( Trọn Bộ 3 cuốn )', 'NGÔ ĐỨC THỌ', 270, '', '', 0, '', '', '672e2ec2b192b_121.jpg'),
(122, 'Triều Nguyễn và lịch sử của chúng ta', 'Trúc Phương', 70, '', '', 0, '', '', '672e2eb77f2df_122.jpg'),
(123, 'Bí mật ở CANNES – The secret of Cannes', 'Trung Nghĩa', 48, '', '', 0, '', '', '672e2eade2da1_123.jpg'),
(124, 'Trường Sơn có một thời như thế', 'Nhiều tác giả', 78, '', '', 0, '', '', '672e2ea00a3b2_124.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book13`
--

CREATE TABLE `book13` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book13`
--

INSERT INTO `book13` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(131, 'Học Đệm Ghi Ta', 'Cù Minh Nhật', 60, '', '', 0, '', '', '672e2ef428dcd_131.jpg'),
(132, 'Đặng Thái Sơn - Người Được Chopin Chọn ', 'Ikuma Yoshiko', 45, '', '', 0, '', '', '672e2eea82e93_132.jpg'),
(133, 'Tự Học Piano Qua Hình Ảnh ', 'Mary Sue. Tere Stouffer', 45, '', '', 0, '', '', '672e2ee1cba91_133.jpg'),
(134, 'Trịnh Công Sơn - Vết Chân Dã Tràng ', 'Ban Mai', 85, '', '', 0, '', '', '672e2ed8cf36c_134.jpg'),
(135, 'Chơi Đàn Guitar Bằng Hình Ảnh', 'Arthur Dick - Joe Bennett  ', 20, '', '', 0, '', '', '672e2ecf88daa_135.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book14`
--

CREATE TABLE `book14` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book14`
--

INSERT INTO `book14` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(142, 'Tinh Túy Võ Thuật: Ngũ Đại Môn Phái', 'Trần Tuấn Kiệt ', 30, '', '', 0, '', '', '672e2f18f0a43_142.jpg'),
(143, 'Tôi Yêu Thể Thao - Bóng Rổ ', 'Cát Lợi. Lý Hưởng', 18, '', '', 0, '', '', '672e2f111e286_143.jpg'),
(144, 'Võ Thuật Cổ Truyền Ứng Dụng Vào Sân Khấu - Điện Ảnh ', 'Nguyễn Thu Vân', 40, '', '', 0, '', '', '672e2f093e1cb_144.jpg'),
(145, 'Dưới Ánh Sáng Của Thiền ', 'Mike George', 68, '', '', 0, '', '', '672e2f00dd4a4_145.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book15`
--

CREATE TABLE `book15` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book15`
--

INSERT INTO `book15` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(151, 'Phụ Nữ Thời Trang Và Phong Cách', ' Nina Garcia. Ruben Toledo', 85, '', '', 0, '', '', '672e2f4103c41_151.jpg'),
(152, 'Những Phương Thuốc Làm Đẹp Từ Trái Cây ', 'Thiên Kim', 50, '', '', 0, '', '', '672e2f38b791f_152.jpg'),
(153, 'Làm Đẹp 365 Ngày ', 'Hứa Nguyện', 85, '', '', 0, '', '', '672e2f2f4b046_153.jpg'),
(155, ' Móng Đẹp Ngày Xuân', 'NXB Mỹ Thuật', 25, '', '', 0, '', '', '672e2f26eccf3_155.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book16`
--

CREATE TABLE `book16` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `sotrang` int(11) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL,
  `namxb` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book16`
--

INSERT INTO `book16` (`id`, `title`, `author`, `price`, `tomtat`, `nxb`, `sotrang`, `kichthuoc`, `namxb`, `image`) VALUES
(161, 'Hào Kiệt Đêm Thế Kỷ ', 'Minh Khoa', 125, '', '', 0, '', '', '672e2f6e9bf69_161.jpg'),
(162, 'Nghệ thuật kiến trúc thế giới ', 'Nguyễn Huy Côn', 37, '', '', 0, '', '', '672e2f673b25c_162.jpg'),
(163, 'Áo Dài Hoa Hậu Mai Phương Thuý', 'Nhiều Tác Giả', 55, '', '', 0, '', '', '672e2f5f22104_163.jpg'),
(164, '10 bí quyết hình ảnh', 'Lê Minh', 50, '', '', 0, '', '', '672e2f563e724_164.jpg'),
(165, '10 Bí Quyết Thành Công Của Những Diễn Giả MC Tài Năng Nhất Thế Giới', ' Carmine Gallo', 48, '', '', 0, '', '', '672e2f4c8abfb_165.jpg'),
(166, 'Nghệ Thuật tấu hề', 'ahihi', 36, 'tấu hề mọi lúc mọi nơi', 'nháp', 200, '20x20', '2004', '672e2fcf770ac_463867496_420377074437356_5560306958060071085_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `Madm` int(11) NOT NULL,
  `Tendm` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`Madm`, `Tendm`) VALUES
(1, 'Tin học'),
(2, 'Kinh tế'),
(3, 'Pháp luật'),
(4, 'Sách ngoại ngữ'),
(5, 'Văn học nước ngoài'),
(6, 'Văn học trong nước'),
(7, 'Sách học làm người'),
(8, 'Danh nhân'),
(9, 'Sách tôn giáo'),
(10, 'Sách y khoa'),
(11, 'Địa lý'),
(12, 'Lịch sử'),
(13, 'Âm nhạc'),
(14, 'Thể thao'),
(15, 'Làm đẹp'),
(16, 'Nghệ thuật');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hoadon_id` int(11) UNSIGNED NOT NULL,
  `hoadon_khachhang` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hoadon_sanpham` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hoadon_tongtien` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaymua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hoadon_id`, `hoadon_khachhang`, `hoadon_sanpham`, `hoadon_tongtien`, `diachi`, `ngaymua`) VALUES
(128, 'minh', '166', '36', 'nga trường', '2024-11-08 15:41:15'),
(127, 'hoàng', '71,19,26', '25082', 'bắc giang', '2024-11-08 14:12:54'),
(126, 'hoàng', '71,19,26', '25082', 'bắc giang', '2024-11-08 14:12:28'),
(125, 'hoàng', '16,12', '87', 'bắc giang', '2024-11-08 14:01:23'),
(123, 'hoàn hihi', '26', '46', 'hà nội', '2024-11-06 16:34:25'),
(124, 'hoàn hihi', '11,16', '84', 'hà nội', '2024-11-08 05:10:04'),
(129, 'hoàn', '11,12', '198', 'thị trấn', '2024-11-08 18:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Birthday` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `diachi`, `Name`, `Birthday`, `admin`) VALUES
(1, 'ADMIN', '21232f297a57a5a743894a0e4a801fc3', 'duchoan77482003@gmail.com', 'thanh hóa', 'hoàn', '07/07/2003', 1),
(59, 'hoan123', '202cb962ac59075b964b07152d234b70', 'duchoan772003@gmail.com', 'thị trấn', 'hoàn', '07/07/2003', 0),
(58, 'minh', '202cb962ac59075b964b07152d234b70', 'minh@gmail.com', 'nga trường', 'minh', '10/6/2003', 0),
(57, 'hoang', '202cb962ac59075b964b07152d234b70', 'txhoang@gmail.com', 'bắc giang', 'hoàng', '28/11/2003', 0),
(56, 'hoan', '827ccb0eea8a706c4c34a16891f84e7b', 'hoan@gmail.com', 'hà nội', 'hoàn hihi', '07/07/2003', 0);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book1`
--
ALTER TABLE `book1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `book2`
--
ALTER TABLE `book2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book3`
--
ALTER TABLE `book3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book4`
--
ALTER TABLE `book4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book5`
--
ALTER TABLE `book5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book6`
--
ALTER TABLE `book6`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book7`
--
ALTER TABLE `book7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book8`
--
ALTER TABLE `book8`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book9`
--
ALTER TABLE `book9`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book10`
--
ALTER TABLE `book10`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book11`
--
ALTER TABLE `book11`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book12`
--
ALTER TABLE `book12`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `title_2` (`title`);

--
-- Indexes for table `book13`
--
ALTER TABLE `book13`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book14`
--
ALTER TABLE `book14`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book15`
--
ALTER TABLE `book15`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `book16`
--
ALTER TABLE `book16`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`Madm`),
  ADD UNIQUE KEY `Madm` (`Madm`),
  ADD UNIQUE KEY `Madm_2` (`Madm`),
  ADD UNIQUE KEY `Madm_5` (`Madm`),
  ADD UNIQUE KEY `Tendm_3` (`Tendm`),
  ADD KEY `Madm_3` (`Madm`),
  ADD KEY `Madm_4` (`Madm`),
  ADD KEY `Tendm` (`Tendm`),
  ADD KEY `Tendm_2` (`Tendm`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD UNIQUE KEY `hoadon_id` (`hoadon_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
ALTER TABLE `members` ADD FULLTEXT KEY `username` (`username`);
ALTER TABLE `members` ADD FULLTEXT KEY `password` (`password`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book1`
--
ALTER TABLE `book1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book2`
--
ALTER TABLE `book2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `book3`
--
ALTER TABLE `book3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `book4`
--
ALTER TABLE `book4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `book5`
--
ALTER TABLE `book5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `book6`
--
ALTER TABLE `book6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `book7`
--
ALTER TABLE `book7`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `book8`
--
ALTER TABLE `book8`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `book9`
--
ALTER TABLE `book9`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `book10`
--
ALTER TABLE `book10`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `book11`
--
ALTER TABLE `book11`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `book12`
--
ALTER TABLE `book12`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `book13`
--
ALTER TABLE `book13`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `book14`
--
ALTER TABLE `book14`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `book15`
--
ALTER TABLE `book15`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `book16`
--
ALTER TABLE `book16`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hoadon_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9613;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
