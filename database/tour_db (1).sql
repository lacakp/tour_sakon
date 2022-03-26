-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Mar 26, 2022 at 03:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2


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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `passwrd` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Sakon65436345', '55555', '2022-03-24 17:04:48', 10, 'https://picsum.photos/seed/picsum/200/300', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown'),
(2, 'Mukdahan', '155555', '2022-03-24 17:04:48', 16, 'https://picsum.photos/200/300?grayscale', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown'),
(3, 'KrungThep', '222222', '2022-03-24 17:04:48', 20, 'https://picsum.photos/200/300/?blur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown'),
(4, 'KrungThep', '222222', '2022-03-24 17:04:48', 20, 'https://picsum.photos/200/300/?blur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown'),
(5, 'KrungThep', '222222', '2022-03-24 17:04:48', 20, 'https://picsum.photos/200/300/?blur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown'),
(6, 'KrungThep', '222222', '2022-03-24 17:04:48', 20, 'https://picsum.photos/200/300/?blur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown');

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

(7, 'tuio', '0000-00-00', '', 'tuio@gmail.com', '7a59e9017b94a3d9f0892a2a2f52c6d0a8442b6d79e253de9f6d3ea14e520c7f', 0, 0),
(8, 'test555', '0000-00-00', '', 'test555@gmail.com', '13711bfa0db484e472f04d5aa6e8646f3058457a88ae8c30c3cd5effc2684bc1', 0, 1),
(9, 'test556', '0000-00-00', '', 'test556@gmail.com', 'f3d66abad2ae63b19e3eb5737758c4928d40918f3492299cb8255890f682bbec', 0, 0),
(10, 'asdasd', '0000-00-00', '', 'sss@gmail.com', '4d168c52eaa30be910e52a169bc76ba46241069537246ce197385aa804d9eadb', 0, 0);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `package_id` (`package_id`);

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
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_package`
--
ALTER TABLE `tb_package`

  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`

  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;



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
