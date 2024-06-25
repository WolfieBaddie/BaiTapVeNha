-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 07:53 PM
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
-- Database: `baitap`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `brandLogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`, `brandLogo`) VALUES
(1, 'Lamborghinhi 1', '1704209fe1.png'),
(4, 'Ferrari', '3b2280c6a3.png'),
(5, 'Koenigsegg ', '077ec9c788.png'),
(7, 'Porsche', '4dd8d9b572.jpg'),
(8, 'Nissan', 'e260b8b418.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerAge` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customerName`, `customerAge`, `email`) VALUES
(1, 'quy', 21, 'nguyenquy');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL,
  `newsName` varchar(255) NOT NULL,
  `newsDesc` mediumtext NOT NULL,
  `postedAt` date NOT NULL,
  `newsImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `newsName`, `newsDesc`, `postedAt`, `newsImage`) VALUES
(2, 'Sơn Tùng Mua Siêu Xe Mới', 'Thành công và được săn đón bậc nhất hiện nay, Sơn Tùng M-TP đang sở hữu nhiều thành tích mà ai cũng mơ ước. Tuy nhiên, có 1 điều thú vị là anh không chơi nhiều siêu xe như các nam nghệ sĩ khác. Tính đến nay, nam ca sĩ chỉ mới tậu 2 chiếc xế hộp.  Tuy nhiên, đây là hai chiếc xế khá chất và thuộc hàng xế sang ở thị trường Việt Nam.', '2024-06-23', '27f0209f9f.jpg'),
(3, 'Cường Đô La Mua Siêu Xe', 'Đại gia Cường Đô la vừa đặt mua chiếc siêu xe Ferrari SF90 Stradale mới nhất của hãng xe Ý, nối tiếp cuộc đua đưa dòng siêu xe trang bị động cơ hybrid về Việt Nam.  Bằng việc “khoe” ảnh chụp biên bản hợp đồng tại đại lý Ferrari ở Tp.HCM, doanh nhân Nguyễn Quốc Cường (thường được biết đến với cái tên Cường Đôla) ngầm thông báo trước về chiếc siêu xe chuẩn bị tậu trong năm 2021. Đó là Ferrari SF90 Stradale, chiếc siêu xe hybrid thứ 2 của hãng siêu xe nước Ý đã ra mắt trong năm 2019.', '2024-06-24', 'f5b7878fa7.jpg'),
(4, 'Đại gia Minh Nhựa khoe \"kiệt tác Thần Gió\" ước tính không dưới 80 tỷ đồng', 'Doanh nhân Phạm Trần Nhật Minh (Minh Nhựa) chia sẻ: \'\'Pagani Huayra theo Minh thấy là một tác phẩm tuyệt hảo khi kết hợp chỉn chu giữa sự mạnh mẽ của động cơ và vẻ độc đáo trong thiết kế của nó từ trong ra ngoài\". Trước khi sở hữu Pagani Huayra, Minh Nhựa vốn đã được biết tới là người dẫn đầu trào lưu chơi xe độc. Doanh nhân này từng có trong tay chiếc Lamborghini Murcielago LP670 SV và Bugatti Veyron độc nhất Việt Nam.  Theo những người nhập xe sang tại TP.HCM, nếu đóng đầy đủ các khoản thuế để ra biển trắng tại TP.HCM, siêu xe của Minh Nhựa có giá không dưới 80 tỷ đồng.', '2024-06-25', 'e85dae7696.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDesc` text DEFAULT NULL,
  `importedAt` varchar(255) DEFAULT NULL,
  `productImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productBrand`, `productDesc`, `importedAt`, `productImage`) VALUES
(1, 'Lamborghinhi Hurrican', '450000', 'Lamborghinhi', '', '2024-01-01', '668a6758d7.png'),
(7, 'Ferrari 488 Spider', '400000', 'Ferrari', 'Emission Standard BS4\r\n\r\nTransmission Automatic - 7 Gears, Paddle Shift, Sport Mode\r\n\r\nDrivetrain RWD\r\n\r\nMileage (ARAI) 8.77 kmpl\r\n\r\nMax Torque (Nm@rpm) 760 Nm @ 3000 rpm\r\n\r\nMax Power (bhp@rpm) 660 bhp @ 8000 rpm\r\n\r\nFuel Type --- Petrol', '2024-01-01', '75dc4eb833.png'),
(8, 'Nissan GTR R35', '2500000', 'NISSAN', '', '2024-01-01', 'f9339f8618.png'),
(9, 'Koenigsegg', '1500000', 'Koenigsegg', '', '2024-01-01', '620788baae.png'),
(14, 'Pagani Zonda', '10000000', 'Pagani', '', '2024-01-01', '134838e42e.png'),
(15, 'Porsche 911', '4500000', 'Porsche', '', '2024-01-01', 'ff9a09c65f.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userRole` varchar(20) NOT NULL,
  `userActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `userPassword`, `userRole`, `userActive`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user', 'user', 'user', 1),
(3, 'user1', 'user1', 'user', 1),
(4, 'user1', 'user1', 'user', 1),
(5, 'user12', 'user12', 'user', 1),
(6, 'user12', 'user12', 'user', 1),
(7, 'user12', 'user12', 'user', 1),
(8, 'user12', 'user12', 'user', 1),
(9, 'user12', 'user12', 'user', 1),
(10, 'user12', 'user12', 'user', 1),
(11, 'user13', 'user13', 'user', 1),
(12, 'user13', 'user13', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
