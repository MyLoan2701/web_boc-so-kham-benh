-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th12 29, 2021 lúc 03:16 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clinic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacsi`
--

CREATE TABLE `bacsi` (
  `MaBS` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaCK` int(11) NOT NULL,
  `HocVi` varchar(255) DEFAULT NULL,
  `KinhNghiem` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bacsi`
--

INSERT INTO `bacsi` (`MaBS`, `MaNV`, `MaCK`, `HocVi`, `KinhNghiem`, `MoTa`) VALUES
(1, 1, 2, 'PGS.TS.BS', '30 năm', 'Bác sĩ đã có gần 30 năm kinh nghiệm chẩn đoán và điều trị các bệnh lý về cơ-xương-khớp. Với hàng chục năm làm việc tại các bệnh viện lớn như Bệnh viện A, Bệnh viện B, Bệnh viện C, Bệnh viện Z,… Bác sĩ Đỗ Minh Hùng đã giúp hàng ngàn bệnh nhân được chẩn đoán sớm và điều trị kịp thời các bệnh lý từ đơn giản đến phức tạp.<br>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis commodo nulla vel varius. Morbi pulvinar condimentum scelerisque. Sed quis facilisis lorem. Nunc et purus sit amet augue hendrerit aliquet et a quam. Integer eleifend at diam nec pharetra. Nullam diam quam, lobortis eu est ut, posuere ullamcorper nibh. Aenean scelerisque venenatis rhoncus. Curabitur ac risus at metus scelerisque laoreet. Fusce rhoncus, justo ut finibus semper, est libero egestas neque, tempor condimentum magna ex at diam. In tristique, ex nec hendrerit ullamcorper, ante nibh tincidunt neque, sit amet ultrices erat nisi non libero. Quisque at risus id nisl ullamcorper scelerisque vel vitae leo.<br>\r\n\r\nCurabitur auctor arcu urna, et sodales nulla lacinia non. Nullam tortor tellus, posuere vel egestas gravida, imperdiet quis leo. Maecenas vel mi euismod, pretium sapien ut, sagittis arcu. Nullam et vestibulum enim, eu viverra velit. In eget turpis placerat, egestas metus in, fermentum leo. Nam nec sem diam. Quisque neque urna, elementum ac est nec, egestas hendrerit dolor.<br>\r\n\r\nCurabitur id nisl et libero pretium tempus eget sed dui. Integer ut consectetur leo. Nullam placerat lectus vel cursus blandit. Ut laoreet dolor augue, ac blandit mauris dictum a. Proin at malesuada eros. Curabitur ut erat quis nisl interdum interdum vitae quis elit. Curabitur vulputate elementum mattis. Nunc eget commodo odio. Nulla id ante vitae risus efficitur lobortis in et sapien. Sed a dui eu mi vehicula porta vitae vitae tortor. Donec varius eget sapien non gravida. Vivamus porttitor sem ut dui egestas, quis venenatis nulla pulvinar. Integer in vestibulum dolor. Ut rhoncus luctus leo, vitae tincidunt quam imperdiet quis. Ut pulvinar, sem eget vulputate elementum, enim risus pulvinar ligula, sit amet hendrerit massa libero non urna.'),
(2, 2, 2, 'ThS.BS', '20 năm', 'ThS.BS Lê Công Thắng với 20 năm kinh nghiệm thực tiễn và đạt được nhiều thành tựu nhất định trong ngành y, đặc biệt là lĩnh vực nội- cơ xương khớp. Tốt nghiệp bác sĩ Đa khoa tại Học Viện X vào năm 2010 và tiếp tục hoàn thành văn bằng Thạc sĩ năm 2020 tại Trường Đại học Y, bác sĩ Lê Công Thắng đã không ngừng học hỏi, cập nhật những kiến thức mới và nâng cao nghiệp vụ để cung cấp dịch vụ thăm khám, chẩn đoán, điều trị và tư vấn sức khỏe toàn diện cho bệnh nhân.<br> \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis commodo nulla vel varius. Morbi pulvinar condimentum scelerisque. Sed quis facilisis lorem. Nunc et purus sit amet augue hendrerit aliquet et a quam. Integer eleifend at diam nec pharetra. Nullam diam quam, lobortis eu est ut, posuere ullamcorper nibh. Aenean scelerisque venenatis rhoncus. Curabitur ac risus at metus scelerisque laoreet. Fusce rhoncus, justo ut finibus semper, est libero egestas neque, tempor condimentum magna ex at diam. In tristique, ex nec hendrerit ullamcorper, ante nibh tincidunt neque, sit amet ultrices erat nisi non libero. Quisque at risus id nisl ullamcorper scelerisque vel vitae leo.<br>\r\n\r\nCurabitur auctor arcu urna, et sodales nulla lacinia non. Nullam tortor tellus, posuere vel egestas gravida, imperdiet quis leo. Maecenas vel mi euismod, pretium sapien ut, sagittis arcu. Nullam et vestibulum enim, eu viverra velit. In eget turpis placerat, egestas metus in, fermentum leo. Nam nec sem diam. Quisque neque urna, elementum ac est nec, egestas hendrerit dolor.<br>\r\n\r\nCurabitur id nisl et libero pretium tempus eget sed dui. Integer ut consectetur leo. Nullam placerat lectus vel cursus blandit. Ut laoreet dolor augue, ac blandit mauris dictum a. Proin at malesuada eros. Curabitur ut erat quis nisl interdum interdum vitae quis elit. Curabitur vulputate elementum mattis. Nunc eget commodo odio. Nulla id ante vitae risus efficitur lobortis in et sapien. Sed a dui eu mi vehicula porta vitae vitae tortor. Donec varius eget sapien non gravida. Vivamus porttitor sem ut dui egestas, quis venenatis nulla pulvinar. Integer in vestibulum dolor. Ut rhoncus luctus leo, vitae tincidunt quam imperdiet quis. Ut pulvinar, sem eget vulputate elementum, enim risus pulvinar ligula, sit amet hendrerit massa libero non urna.'),
(3, 5, 1, 'PGS.TS.BS', '30 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(4, 6, 1, 'PGS.TS.BS', '35 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(5, 7, 1, 'GS.TS.BS', '40 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(6, 8, 3, 'TS.BS', '20 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(7, 9, 3, 'PGS.TS.BS', '30 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(8, 10, 5, 'PGS.TS.BS', '30 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(9, 11, 5, 'TS.BS', '25 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.'),
(10, 12, 5, 'PGS.TS.BS', '40 năm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada molestie interdum. Nam euismod sed elit nec aliquet. Nunc consectetur fringilla lectus non pellentesque. Sed tempor metus sit amet massa varius, ac commodo neque accumsan. In vulputate neque nisi, sed auctor nisi imperdiet ac. Aliquam suscipit dui nisl, vitae imperdiet est faucibus vel. Suspendisse potenti. Phasellus libero sapien, fermentum eu volutpat eu, ultrices sodales tellus. Sed vitae tempus eros. Phasellus blandit quis orci ac sodales.\r\n<br>\r\nCras et nunc eu mauris vehicula suscipit. Praesent accumsan faucibus auctor. Aliquam a ultricies dui. Quisque eu posuere eros, eget fermentum ipsum. Aenean quis dignissim lacus. Nulla rhoncus ex enim, ut ultricies eros ornare id. Aenean dignissim interdum turpis nec eleifend. Sed metus ante, egestas at viverra sed, tristique id lectus. Praesent quis nisi tincidunt, consectetur dolor vel, egestas nisl.\r\n<br>\r\nSed luctus convallis magna, sed rhoncus felis placerat quis. Vivamus urna diam, placerat ac fringilla ullamcorper, rutrum vel neque. Vivamus accumsan felis risus. Aliquam tempor tellus ut sapien ullamcorper, sit amet egestas nulla bibendum. Integer lorem purus, consequat in ligula ac, maximus porta dolor. Cras et facilisis quam. Etiam non cursus velit.\r\n<br>\r\nDonec varius velit nibh, eget elementum massa faucibus a. Maecenas porta vulputate diam sit amet porta. In finibus tellus nisi, ac scelerisque lacus ultrices imperdiet. Fusce faucibus accumsan ligula, a feugiat enim vulputate vitae. Quisque eu suscipit mauris, nec efficitur augue. Praesent pretium, diam non scelerisque porta, ipsum velit condimentum arcu, vel bibendum mauris sapien sit amet lorem. Maecenas finibus accumsan rutrum. Aenean ut quam fringilla, euismod leo vitae, mattis neque. Suspendisse scelerisque elit ac sapien dapibus luctus. Integer nec metus lacus. Praesent et sagittis massa.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baohiem`
--

CREATE TABLE `baohiem` (
  `MaBH` int(11) NOT NULL,
  `NgayCap` datetime DEFAULT NULL,
  `NgayHetHan` datetime DEFAULT NULL,
  `PhiGiaHan` bigint(20) DEFAULT NULL,
  `TrangThai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baohiem`
--

INSERT INTO `baohiem` (`MaBH`, `NgayCap`, `NgayHetHan`, `PhiGiaHan`, `TrangThai`) VALUES
(1234, '2021-11-19 10:21:24', '2021-11-25 10:21:24', 500000, 'het han'),
(12345, '2021-11-25 09:39:24', '2021-12-31 09:39:24', 500000, 'con han'),
(123123, '2021-12-28 17:54:21', '2021-12-31 17:54:21', 500000, 'con han'),
(123456, '2021-12-21 17:54:21', '2021-12-31 17:54:21', 500000, 'con han');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `MaBN` int(11) NOT NULL,
  `MaBH` int(11) NOT NULL,
  `MaTTYT` int(11) NOT NULL,
  `MaHS` int(11) NOT NULL,
  `HoVaTen` varchar(255) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `Sdt` varchar(100) DEFAULT NULL,
  `SdtNha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`MaBN`, `MaBH`, `MaTTYT`, `MaHS`, `HoVaTen`, `NgaySinh`, `DiaChi`, `Sdt`, `SdtNha`) VALUES
(3, 12345, 1, 1, 'Nguyễn Văn A', NULL, NULL, NULL, NULL),
(4, 123123, 2, 3, 'Nguyễn Văn B', '2000-12-01', NULL, '0123456788', NULL),
(5, 123456, 3, 4, 'Lê Hoàng Ánh', '2000-12-02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catruc`
--

CREATE TABLE `catruc` (
  `MaCT` int(11) NOT NULL,
  `MaBS` int(11) NOT NULL,
  `MaPhongKham` int(11) NOT NULL,
  `NgayTruc` date DEFAULT NULL,
  `CaTruc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catruc`
--

INSERT INTO `catruc` (`MaCT`, `MaBS`, `MaPhongKham`, `NgayTruc`, `CaTruc`) VALUES
(1, 2, 2, '2021-12-30', 2),
(2, 1, 1, '2021-12-30', 2),
(3, 3, 3, '2021-12-30', 2),
(4, 4, 4, '2021-12-30', 2),
(5, 5, 5, '2021-12-30', 2),
(6, 6, 6, '2021-12-30', 2),
(7, 7, 7, '2021-12-30', 2),
(8, 8, 8, '2021-12-30', 2),
(9, 9, 9, '2021-12-30', 2),
(10, 10, 10, '2021-12-30', 2),
(11, 1, 2, '2021-12-31', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chiphikham`
--

CREATE TABLE `chiphikham` (
  `MaCPK` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonVi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chiphithuoc`
--

CREATE TABLE `chiphithuoc` (
  `MaCPT` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaDT` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenkhoa`
--

CREATE TABLE `chuyenkhoa` (
  `MaCK` int(11) NOT NULL,
  `TenKhoa` varchar(255) DEFAULT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuyenkhoa`
--

INSERT INTO `chuyenkhoa` (`MaCK`, `TenKhoa`, `HinhAnh`) VALUES
(1, 'Chuẩn đoán hình ảnh', 'icon1.png'),
(2, 'Cơ-Xương-Khớp', 'icon2.png'),
(3, 'Nhi Khoa', 'icon3.png'),
(4, 'Sản - Phụ khoa', 'icon4.png'),
(5, 'Tai - Mũi - Họng', 'icon5.png'),
(6, 'Tim Mạch', 'icon6.png'),
(7, 'Hô hấp và miễn dịch dị ứng lâm sàng', 'icon7.png'),
(8, 'Nội soi', 'icon8.png'),
(9, 'Tiêu hoá Gan mật', 'icon9.png'),
(10, 'Xét nghiệm', 'icon10.png'),
(11, 'Khoa ngoại', 'icon3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkikham`
--

CREATE TABLE `dangkikham` (
  `id` int(11) NOT NULL,
  `MaPhongKham` int(11) NOT NULL,
  `MaBenhNhan` int(11) NOT NULL,
  `SttKham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangkikham`
--

INSERT INTO `dangkikham` (`id`, `MaPhongKham`, `MaBenhNhan`, `SttKham`) VALUES
(14, 1, 4, 20),
(15, 1, 3, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` int(11) NOT NULL,
  `TenDV` varchar(255) DEFAULT NULL,
  `DonGia` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

CREATE TABLE `donthuoc` (
  `MaDT` int(11) NOT NULL,
  `MaThuoc` int(11) NOT NULL,
  `MaPK` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonVi` varchar(100) DEFAULT NULL,
  `LieuDung` varchar(100) DEFAULT NULL,
  `CachDung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaBN` int(11) NOT NULL,
  `NgayTao` date DEFAULT NULL,
  `TrangThai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso`
--

CREATE TABLE `hoso` (
  `MaHS` int(11) NOT NULL,
  `NgayTao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoso`
--

INSERT INTO `hoso` (`MaHS`, `NgayTao`) VALUES
(1, NULL),
(2, '2021-12-02'),
(3, '2021-12-29'),
(4, '2021-12-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `Sdt` varchar(20) DEFAULT NULL,
  `Luong` bigint(20) DEFAULT NULL,
  `ChucVu` varchar(255) DEFAULT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `MaTK`, `Email`, `Ten`, `Sdt`, `Luong`, `ChucVu`, `HinhAnh`) VALUES
(1, 1, 'nva@gmail.com', 'Nguyễn Văn Trường', '0123456789', NULL, 'Chuyên khoa Xương Khớp', NULL),
(2, 2, 'nvb@gmail.com', 'Lê Công Thắng', '0123456788', NULL, 'Chuyên khoa Xương Khớp', NULL),
(5, 4, NULL, 'Nguyễn Quốc Đạt', '0123456787', NULL, 'Chuyên khoa Chuẩn đoán hình ảnh', NULL),
(6, 5, NULL, 'Trần Thị Xuân Mai', '0123456786', NULL, 'Chuyên khoa Chuẩn đoán hình ảnh', NULL),
(7, 6, NULL, 'Lê Quang Huy', '0123456785', NULL, 'Chuyên khoa Chuẩn đoán hình ảnh', NULL),
(8, 7, NULL, 'Đặng Kim Dung', '0123456784', NULL, 'Chuyên Khoa Nhi', NULL),
(9, 8, NULL, 'Nguyễn Thị Thanh Nhàn', '0123456783', NULL, 'Chuyên khoa Nhi', NULL),
(10, 9, NULL, 'Lê Văn Trường Sơn', '0123456782', NULL, 'Chuyên khoa Tai - Mũi - Họng', NULL),
(11, 10, NULL, 'Trần Văn Cường', '0123456781', NULL, 'Chuyên khoa Tai - Mũi - Họng', NULL),
(12, 11, NULL, 'Hoàng Thái Vũ', '0123456780', NULL, 'Chuyên Khoa Tai - Mũi - Họng', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieukham`
--

CREATE TABLE `phieukham` (
  `MaPK` int(11) NOT NULL,
  `MaBS` int(11) NOT NULL,
  `MaHS` int(11) NOT NULL,
  `NgayKham` date DEFAULT NULL,
  `TrieuChung` varchar(255) DEFAULT NULL,
  `TenBenh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phieukham`
--

INSERT INTO `phieukham` (`MaPK`, `MaBS`, `MaHS`, `NgayKham`, `TrieuChung`, `TenBenh`) VALUES
(1, 1, 1, '2021-12-29', 'đau lưng', 'thoái hóa cột sống'),
(2, 1, 3, '2021-12-29', 'aaaa', 'a'),
(3, 1, 3, '2021-12-29', '', ''),
(4, 1, 3, '2021-12-29', '', ''),
(5, 1, 3, '2021-12-29', '', ''),
(6, 1, 3, '2021-12-29', '', ''),
(7, 1, 3, '2021-12-29', '', ''),
(8, 1, 3, '2021-12-29', 'ádas', 'aaaa đá'),
(9, 1, 3, '2021-12-29', '', ''),
(10, 1, 3, '2021-12-29', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongkham`
--

CREATE TABLE `phongkham` (
  `MaPK` int(11) NOT NULL,
  `SoPhong` varchar(255) DEFAULT NULL,
  `SoThuTuKham` int(11) DEFAULT NULL,
  `SoNguoiCho` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongkham`
--

INSERT INTO `phongkham` (`MaPK`, `SoPhong`, `SoThuTuKham`, `SoNguoiCho`) VALUES
(1, 'A-003', 20, 1),
(2, 'A-004', 13, 0),
(3, 'B-002', 15, 0),
(4, 'B-003', 20, 0),
(5, 'B-004', 10, 0),
(6, 'C-002', 17, 0),
(7, 'C-003', 15, 0),
(8, 'D-002', 20, 0),
(9, 'D-003', 18, 0),
(10, 'D-004', 17, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `TenDangNhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `Role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenDangNhap`, `MatKhau`, `TrangThai`, `Role`) VALUES
(1, 'nva', 'nva', NULL, 2),
(2, 'nvb', 'nvb', NULL, 2),
(3, 'nvc', 'nvc', NULL, 2),
(4, 'd', 'd', NULL, 2),
(5, 'e', 'e', NULL, 2),
(6, 'f', 'f', NULL, 2),
(7, 'g', 'g', NULL, 2),
(8, 'i', 'i', NULL, 2),
(9, 'k', 'k', NULL, 2),
(10, 'l', 'l', NULL, 2),
(11, 'm', 'm', NULL, 2),
(12, 'n', 'n', NULL, 2),
(13, 'e', 'e', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinyte`
--

CREATE TABLE `thongtinyte` (
  `MaTTYT` int(11) NOT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `NhomMau` varchar(100) DEFAULT NULL,
  `CanNang` int(11) DEFAULT NULL,
  `ChieuCao` int(11) DEFAULT NULL,
  `NhipTim` int(11) DEFAULT NULL,
  `NgayCapNhat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinyte`
--

INSERT INTO `thongtinyte` (`MaTTYT`, `GioiTinh`, `NhomMau`, `CanNang`, `ChieuCao`, `NhipTim`, `NgayCapNhat`) VALUES
(1, 1, NULL, 42, 148, NULL, '2021-12-21'),
(2, 2, 'A', 50, 172, NULL, '2021-12-29'),
(3, 1, 'O', 45, 160, NULL, '2021-12-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `MaThuoc` int(11) NOT NULL,
  `TenThuoc` varchar(255) DEFAULT NULL,
  `SoLuongCon` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `DonGia` bigint(20) DEFAULT NULL,
  `DonViTinh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`MaBS`),
  ADD UNIQUE KEY `idNhanVien` (`MaNV`),
  ADD KEY `idchuyenkhoa` (`MaCK`);

--
-- Chỉ mục cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  ADD PRIMARY KEY (`MaBH`);

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`MaBN`),
  ADD KEY `id_baohiem` (`MaBH`),
  ADD KEY `id_ttyt` (`MaTTYT`),
  ADD KEY `id_hoso` (`MaHS`);

--
-- Chỉ mục cho bảng `catruc`
--
ALTER TABLE `catruc`
  ADD PRIMARY KEY (`MaCT`),
  ADD UNIQUE KEY `idCaTruc` (`MaBS`,`MaPhongKham`),
  ADD KEY `idPhongKham` (`MaPhongKham`);

--
-- Chỉ mục cho bảng `chiphikham`
--
ALTER TABLE `chiphikham`
  ADD PRIMARY KEY (`MaCPK`),
  ADD KEY `id_hoadon` (`MaHD`),
  ADD KEY `id_dichvu` (`MaDV`);

--
-- Chỉ mục cho bảng `chiphithuoc`
--
ALTER TABLE `chiphithuoc`
  ADD PRIMARY KEY (`MaCPT`),
  ADD KEY `id_hoadon` (`MaHD`),
  ADD KEY `id_donthuoc` (`MaDT`);

--
-- Chỉ mục cho bảng `chuyenkhoa`
--
ALTER TABLE `chuyenkhoa`
  ADD PRIMARY KEY (`MaCK`);

--
-- Chỉ mục cho bảng `dangkikham`
--
ALTER TABLE `dangkikham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`);

--
-- Chỉ mục cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD PRIMARY KEY (`MaDT`),
  ADD KEY `id_thuoc` (`MaThuoc`),
  ADD KEY `id_phieukham` (`MaPK`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `id_nhanvien` (`MaNV`),
  ADD KEY `id_benhnhan` (`MaBN`);

--
-- Chỉ mục cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`MaHS`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `idTaiKhoan` (`MaTK`);

--
-- Chỉ mục cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  ADD PRIMARY KEY (`MaPK`),
  ADD KEY `id_bacsi` (`MaBS`),
  ADD KEY `id_hoso` (`MaHS`);

--
-- Chỉ mục cho bảng `phongkham`
--
ALTER TABLE `phongkham`
  ADD PRIMARY KEY (`MaPK`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- Chỉ mục cho bảng `thongtinyte`
--
ALTER TABLE `thongtinyte`
  ADD PRIMARY KEY (`MaTTYT`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`MaThuoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `MaBS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `baohiem`
--
ALTER TABLE `baohiem`
  MODIFY `MaBH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `MaBN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `catruc`
--
ALTER TABLE `catruc`
  MODIFY `MaCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `chiphikham`
--
ALTER TABLE `chiphikham`
  MODIFY `MaCPK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chiphithuoc`
--
ALTER TABLE `chiphithuoc`
  MODIFY `MaCPT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuyenkhoa`
--
ALTER TABLE `chuyenkhoa`
  MODIFY `MaCK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `dangkikham`
--
ALTER TABLE `dangkikham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoso`
--
ALTER TABLE `hoso`
  MODIFY `MaHS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phongkham`
--
ALTER TABLE `phongkham`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `thongtinyte`
--
ALTER TABLE `thongtinyte`
  MODIFY `MaTTYT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `MaThuoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD CONSTRAINT `bacsi_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `bacsi_ibfk_2` FOREIGN KEY (`MaCK`) REFERENCES `chuyenkhoa` (`MaCK`);

--
-- Các ràng buộc cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD CONSTRAINT `benhnhan_ibfk_1` FOREIGN KEY (`MaTTYT`) REFERENCES `thongtinyte` (`MaTTYT`),
  ADD CONSTRAINT `benhnhan_ibfk_2` FOREIGN KEY (`MaHS`) REFERENCES `hoso` (`MaHS`),
  ADD CONSTRAINT `benhnhan_ibfk_3` FOREIGN KEY (`MaBH`) REFERENCES `baohiem` (`MaBH`);

--
-- Các ràng buộc cho bảng `catruc`
--
ALTER TABLE `catruc`
  ADD CONSTRAINT `catruc_ibfk_1` FOREIGN KEY (`MaPhongKham`) REFERENCES `phongkham` (`MaPK`),
  ADD CONSTRAINT `catruc_ibfk_2` FOREIGN KEY (`MaBS`) REFERENCES `bacsi` (`MaBS`);

--
-- Các ràng buộc cho bảng `chiphikham`
--
ALTER TABLE `chiphikham`
  ADD CONSTRAINT `chiphikham_ibfk_1` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`),
  ADD CONSTRAINT `chiphikham_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `chiphithuoc`
--
ALTER TABLE `chiphithuoc`
  ADD CONSTRAINT `chiphithuoc_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chiphithuoc_ibfk_2` FOREIGN KEY (`MaDT`) REFERENCES `donthuoc` (`MaDT`);

--
-- Các ràng buộc cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD CONSTRAINT `donthuoc_ibfk_1` FOREIGN KEY (`MaThuoc`) REFERENCES `thuoc` (`MaThuoc`),
  ADD CONSTRAINT `donthuoc_ibfk_2` FOREIGN KEY (`MaPK`) REFERENCES `phieukham` (`MaPK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Các ràng buộc cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  ADD CONSTRAINT `phieukham_ibfk_1` FOREIGN KEY (`MaBS`) REFERENCES `bacsi` (`MaBS`),
  ADD CONSTRAINT `phieukham_ibfk_2` FOREIGN KEY (`MaHS`) REFERENCES `hoso` (`MaHS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
