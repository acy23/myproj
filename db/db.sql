-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Jun 06, 2022 at 12:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid_id` int(11) NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`bid_id`, `bid_amount`, `created_at`, `user_id`, `product_id`) VALUES
(1, 650, '2022-05-21 14:13:11', 18, 31),
(2, 600, '2022-05-21 14:18:41', 18, 30),
(4, 800, '2022-05-21 14:18:51', 18, 30),
(6, 700, '2022-05-21 14:38:29', 18, 31),
(7, 750, '2022-05-21 14:38:58', 18, 31),
(8, 400, '2022-05-21 14:39:21', 18, 31),
(9, 850, '2022-05-21 15:41:57', 1, 30),
(10, 800, '2022-05-21 15:42:02', 1, 31),
(11, 900, '2022-05-21 15:42:21', 1, 30),
(12, 915, '2022-05-21 15:43:13', 1, 31),
(13, 1000, '2022-05-21 15:45:10', 1, 29),
(14, 550, '2022-05-21 15:47:02', 18, 37),
(15, 1850, '2022-05-21 15:47:22', 18, 34),
(16, 1900, '2022-05-21 15:49:02', 18, 34),
(17, 1905, '2022-05-21 15:49:07', 18, 34),
(18, 922, '2022-05-21 16:13:26', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `fav_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favs`
--

INSERT INTO `favs` (`fav_id`, `product_id`, `user_id`, `created_at`) VALUES
(8, 31, 13, '2022-05-21 09:46:28'),
(12, 31, 1, '2022-05-21 16:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` varchar(555) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `from_email` varchar(225) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `from_id`, `to_id`, `message`, `created_at`, `from_email`, `product_id`) VALUES
(14, 13, 1, 'hey admin', '2022-05-21 10:02:46', 'acy@acy.com', 30),
(16, 1, 13, 'babakooo', '2022-05-21 15:42:53', 'admin@admin.com', 34),
(18, 18, 1, 'amdinnnnnnnnnn', '2022-05-21 15:50:25', 'cancan@cancan.com', 30);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `conditionn` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(555) DEFAULT NULL,
  `is_listing` int(11) DEFAULT NULL,
  `is_auction` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `price` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category`, `conditionn`, `brand`, `image`, `description`, `is_listing`, `is_auction`, `created_at`, `price`, `user_id`, `name`) VALUES
(29, 'Mobile', 'Used', 'Huawei', 'IMG-628696f7bf4c92.59631367.jpg', '			\r\n			hey its really good product man no technical issues done on the phone really first hand quality...', 0, 1, '2022-05-19 19:13:59', 700, 13, 'beles fiyatina, kacirilmaz!'),
(30, 'Computer', 'New', 'adminBrand', 'IMG-628771f5b36c68.47926770.jpg', '			asdsadsdsadsa\r\n			', 0, 1, '2022-05-20 10:48:21', 550, 1, 'sifir urun Yeni Version'),
(31, 'Mobile', 'Used', 'adminBrand', 'IMG-6287932cbc5107.03444287.jpg', '			\r\n			asgdgfdfddsfdsfdsfds', 0, 1, '2022-05-20 13:10:04', 600, 1, 'ucuz super telefon'),
(33, 'Computer', 'New', 'acyBrand', 'IMG-6288b8a8391b74.37672817.jpg', '			dfdsfs\r\n			', 1, 0, '2022-05-21 10:02:16', 1000, 13, 'nice item gel'),
(34, 'Watch', 'Used', 'mybrand', 'IMG-6288b90f0fd543.59125523.jpeg', '			\r\n			dsfsdfasfadf', 0, 1, '2022-05-21 10:03:59', 1001, 13, 'babako'),
(37, 'Computer', 'New', 'cancancan', 'IMG-6289095c755d21.54823348.jpg', '			\r\n			fdsfdsfdsfds', 0, 1, '2022-05-21 15:46:36', 600, 18, 'cancan item deneme'),
(39, 'Computer', 'New', 'brandbrand', 'IMG-62890a174b40d6.82137936.jpg', '			\r\n			sdfdsfdsf', 1, 0, '2022-05-21 15:49:43', 123, 18, 'buy it');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `product_id`, `user_id`, `created_at`) VALUES
(5, 33, 13, '2022-05-21 10:02:24'),
(6, 33, 18, '2022-05-21 10:53:59'),
(7, 33, 18, '2022-05-21 13:42:48'),
(8, 33, 1, '2022-05-21 15:43:25'),
(9, 39, 18, '2022-05-21 15:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwrd` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `username`, `passwrd`, `phone`, `image`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin', 123123123, ''),
(13, 'ahmet can', 'yildiz', 'acy@acy.com', 'acy', '12345', 12341234, ''),
(18, 'can can', 'yıldızzz', 'cancan@cancan.com', 'cancan', '1234', 2132121, 'IMG-6288c4b34c8c89.35098790.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `from_id` (`from_id`),
  ADD KEY `to_id` (`to_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `favs`
--
ALTER TABLE `favs`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `bids_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bids_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bids_ibfk_5` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `favs_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `favs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchases_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
