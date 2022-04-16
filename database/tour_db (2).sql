-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 03:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `status` enum('cart','complete') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `date`, `user_id`, `package_id`, `status`) VALUES
(27, '2022-03-29 15:26:36', 13, 1, 'cart'),
(29, '2022-04-01 06:53:29', 13, 3, 'cart'),
(30, '2022-04-01 06:53:48', 13, 5, 'cart'),
(31, '2022-04-01 06:54:32', 13, 17, 'cart'),
(33, '2022-04-01 07:06:59', 7, 1, 'cart'),
(34, '2022-04-04 14:09:10', 13, 13, 'cart'),
(41, '2022-04-06 06:37:57', 20, 3, 'cart'),
(49, '2022-04-08 07:36:28', 20, 1, 'cart'),
(51, '2022-04-08 07:37:11', 20, 4, 'cart'),
(52, '2022-04-08 08:01:25', 23, 17, 'cart'),
(54, '2022-04-08 08:02:11', 23, 3, 'cart'),
(57, '2022-04-08 08:13:32', 23, 4, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_package`
--

CREATE TABLE `tb_package` (
  `package_id` int(10) NOT NULL,
  `place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL,
  `count_people` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://res.cloudinary.com/dnshsje8a/image/upload/v1648304241/default/download_elwy6b.png',
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_package`
--

INSERT INTO `tb_package` (`package_id`, `place`, `price`, `date`, `count_people`, `image`, `detail`) VALUES
(1, 'วัดพระธาตุเชิงชุม ', '10000', '2022-03-24 17:04:48', 20, 'https://th.bing.com/th/id/R.4c5fab59bd530ec6b1952839eb8239cd?rik=58mbJ2vXZC6P7A&pid=ImgRaw&r=0', 'วัดพระธาตุเชิงชุมวรวิหาร\r\n\r\nที่ตั้ง   วัดพระธาตุเชิงชุมวรวิหาร เป็นพระอารามหลวงชั้นโท ชนิด วรวิหาร ตั้งอยู่เลขที่ 1255 ตำบลพระธาตุเชิงชุม อำเภอเมืองสกลนคร จังหวัดสกลนคร สังกัดคณะสงฆ์มหานิกาย ตั้งวัดเมื่อ พ.ศ. 2300  ได้รับพระราชทานวิสุงคามสีมา เมื่อวันที่ '),
(3, 'วัดถ้ำผาแด่น ', '10000', '2022-03-24 17:04:48', 20, 'https://sakonnakhonguide.com/wp-content/uploads/2019/04/52352385_1501606913304567_499991286254665728_n-1.jpg', 'วัดถ้ำผาแด่น  ตั้งอยู่บนเทือกเขาภูพาน ตำบลดงมะไฟ อำเภอเมือง จังหวัดสกลนคร ห่างจากตัวจังหวัด 17 กม.  เป็นอีกหนึ่งในสถานที่ห้ามพลาดของสกลนคร  โดดเด่นด้วยรูปปั้นองค์พญานาคปรกขนาดใหญ่  ภาพแกะสลักบนหน้าผาหินมีเอกลักษณ์วิจิตรงดงาม พญาเต่าภูผาแด่นงดงามอลังการ ตั'),
(4, 'วัดพระธาตุภูเพ็ก สกลนคร ', '15000', '2022-03-24 17:04:48', 25, 'https://okchanthaburi.com/wp-content/uploads/2019/05/28A22052562-6-of-8.jpg', 'พระธาตุภูเพ็ก เป็นปราสาทขอมขนาดใหญ่ ก่อสร้างด้วยหินทราย เรือนธาตุตั้งอยู่บนฐานยกสูง ตอนหน้าของปราสาทมีฐานหินเป็นก้อนเรียงซ้อน ๆ กัน ยื่นออกคล้ายกากบาทเรียกว่า โคปุระ สูงกว่าฐานของเรือนฐานเล็กน้อย ตัวเรือนธาตุทั้งสี่ด้านย่อมุม ๆ ละ 5 เหลี่ยม รวมเป็น 20 เหล'),
(5, 'พิพิธภัณฑ์พระอาจารย์ฝั้น อาจาโร ', '30000', '2022-03-27 11:06:47', 30, 'https://www.iotopsakon.com/wp-content/uploads/2018/10/20181008-watpa-Udum_28.jpg', 'วัดป่าอุดมพรเป็นวัดที่พระอาจารย์ฝั้น อาจาโร เกจิอาจารย์สายวิปัสสนากรรมฐานเคยจำพรรษาอยู่ ลักษณะพื้นที่ของวัดป่าอุดมสมพร เป็นสวนป่าขนาดใหญ่ โดยอาคารพิพิธภัณฑ์ตั้งอยู่ภายในสวน เจดีย์พิพิธภัณฑ์แห่งนี้ก่อสร้างขึ้นในปี 2523 โดยพระบาทสมเด็จพระเจ้าอยู่หัวฯ '),
(11, 'อุทยานบัวเฉลิมพระเกียรติ ', '50000', '2022-03-29 17:51:07', 20, 'https://www.paiduaykan.com/travel/wp-content/uploads/2021/03/1-DEW_7612.jpg', 'อุทยานบัวเฉลิมพระเกียรติ ตั้งอยู่ตรงข้ามกับบึงหนองหาร อำเภอเมือง จังหวัดสกลนคร มีความสวยงามของดอกบัวหลากสีสัน ที่มีมากกว่าหลายร้อยสายพันธุ์ นับเป็นอุทยานบัวที่ใหญ่ที่สุดในประเทศไทย ที่นี่เป็นสถานที่ศึกษาและค้นคว้าของนักศึกษาและประชาชนทั่วไป รวมทั้งยังเป็น'),
(12, 'พระตำหนักภูพานราชนิเวศน์ ', '10000', '2022-03-29 17:52:53', 20, 'https://paiduaykan.com/province/Northeast/sakonnakhon/pic/phuphanpalace.jpg', 'พระตำหนักภูพานราชนิเวศน์  จังหวัดสกลนคร เป็นพระตำหนักที่สร้างขึ้นในบริเวณเทือกเขาภูพาน โดยในหลงรัชกาลที่ 9 เป็นผู้ทรงเลือกพื้นที่สร้างพระตำหนักด้วยพระองค์เอง  ภายในเขตพระราชฐานที่เรียกรวมๆ ว่า “หมู่พระตำหนัก” มีสไตล์การตกแต่งที่เรียบหรู ดูคลาสสิก ส่วนใหญ่'),
(13, 'หมู่บ้านท่าแร่', '5000', '2022-03-29 17:53:50', 20, 'https://www.paiduaykan.com/travel/wp-content/uploads/2021/02/1-%E0%B8%9B%E0%B8%81%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B9%88.jpg', 'ตั้งอยู่ริมหนองหาร ห่างจากตัวเมืองประมาณ 21 กม. หมู่บ้านท่าแร่ เป็นที่รู้จักกันทั่วไปว่าเป็นหมู่บ้านที่มีประชากรนับถือศาสนาคริสต์มากที่สุดในประเทศไทย เป็นชุมชนที่เก่าแก่มีอายุกว่า 100 ปี  สำหรับกิจกรรมท่องเที่ยวภายในหมู่บ้านท่าแร่นั้น นักท่องเที่ยวจะได้พบ'),
(14, 'พิพิธภัณฑ์อาจารย์มั่น ภูริทัตโต', '5000', '2022-03-29 17:54:40', 20, 'https://paiduaykan.com/province/Northeast/sakonnakhon/pic/munmuseum1.jpg', 'ตั้งอยู่ในวัดป่าสุทธาวาส  อ.เมือง สกลนคร ตรงข้ามศูนย์ราชการจังหวัด พิพิธภัณฑ์มีลักษณะการ ก่อสร้างแบบสถาปัตยกรรมสมัยใหม่ประยุกต์ สร้างด้วยกระเบื้องดินเผา ภายในพิพิธภัณฑ์มีรูปหล่อเหมือนองค์ของพระอาจารย์มั่น ในท่านั่งสมาธิ  และมีตู้กระจกบรรจุอัฐิของท่านที่แป'),
(15, 'พญาเต่างอย ', '10000', '2022-03-29 17:55:29', 15, 'https://www.paiduaykan.com/travel/wp-content/uploads/2021/03/DEW_9422.jpg', 'เปิดตำนานความศักดิ์สิทธิ์ของนักเสี่ยงโชค พญาเต่างอย  ที่ไม่ได้เป็นเพียงชื่อที่ถูกนำมาเรียบเรียงในเพลง เต่างอย เพลงดังของคุณจินตรา พูนลาภ เต่างอย ชื่อ ที่เราคุ้นหู คือ  พญาเต่างอย สัญลักษณ์ของอำเภอเต่างอย จังหวัดสกลนคร จนมีการปั้นรูปพญาเต่างอยขึ้นมา จนกลาย'),
(16, 'พระธาตุนารายณ์เจงเวง', '2000', '2022-03-29 17:56:06', 20, 'https://www.paiduaykan.com/travel/wp-content/uploads/2021/03/DEW_9445.jpg', 'พระธาตุนารายณ์เจงเวง เป็นโบราณสถานที่สำคัญของจังหวัดสกลนคร  พระธาตุสร้างด้วยหินทราย มีลักษณะปรางค์แบบขอมที่ส่วนใหญ่สร้วบรางกันในสมัยนั้น ส่วนฐานก่อด้วยศิลาแลงขนาดใหญ่ องค์เจดีย์รูปทรงสี่เหลี่ยมมีซุ้มประตูแต่ละด้าน ภายใต้ซุ้มข้างบนสลักรูปนารายณ์บรรทมสินธุ์'),
(17, 'ฟาร์มฮัก Farm Hug  ', '10000', '2022-03-29 17:57:12', 25, 'https://www.paiduaykan.com/travel/wp-content/uploads/2017/02/DEW_7865.jpg', 'ตั้งอยู่ที่ บ้านโพนยางคำ ตำบลโนนหอม อำเภอเมือง จังหวัดสกลนคร บริเวณถนนสกลนคร-นาแก  เป็นทั้งสถานที่ท่องเที่ยว  ร้านอาหาร ร้านกาแฟ  ฟาร์มแกะ  รวมกันอยู่ในแห่งเดียวกัน  ภายในฟาร์มมีร้านโคขุนคุณทองขายเต๊กเนื้อโคขุนโพนยางคำ รวมถึงอาหารประเภทต่างๆ เป็น จุดแวะพั');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `name`, `bdate`, `address`, `email`, `password`, `phone`, `status`) VALUES
(1, 'akira ', '0000-00-00', '', 'akira@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(2, 'akira2', '0000-00-00', '', 'akira2@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(3, 'akira3', '0000-00-00', '', 'akira3@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(7, 'tuio555', '0000-00-00', '45/12/123', 'tuio555@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 1),
(8, 'test555', '0000-00-00', '', 'test555@gmail.com', '13711bfa0db484e472f04d5aa6e8646f3058457a88ae8c30c3cd5effc2684bc1', 0, 1),
(9, 'test556', '0000-00-00', '', 'test556@gmail.com', 'f3d66abad2ae63b19e3eb5737758c4928d40918f3492299cb8255890f682bbec', 0, 0),
(10, 'asdasd', '0000-00-00', '', 'sss@gmail.com', '4d168c52eaa30be910e52a169bc76ba46241069537246ce197385aa804d9eadb', 0, 0),
(11, 'test2', '0000-00-00', '', 'test2@gmail.com', 'a3aa7614926acac14ae9c27489af9d52f76935a0c8885e8bb9851d17aab23ba9', 0, 0),
(12, 'test3', '0000-00-00', '', 'test3@gmail.com', '8b4a65b0df92be49a5449153bab5d56cb331e70b1f8dbb97d1c82b619a5cebf2', 0, 0),
(13, 'test5555', '0000-00-00', '45/12', 'test5555@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(19, 'ttoo', '0000-00-00', '67684/68798', 'ttoo@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(20, 'test63', '0000-00-00', '445/123', 'test63@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(21, 'test65@gmail.com', '0000-00-00', '', 'test65@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(22, 'test66@gmail.com', '0000-00-00', '', 'test66@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(23, 'tung', '0000-00-00', '45/12', 'tung12@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `package_id` (`package_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `tb_package`
--
ALTER TABLE `tb_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_package`
--
ALTER TABLE `tb_package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `tb_package` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
