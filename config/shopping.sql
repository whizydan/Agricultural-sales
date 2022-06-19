-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 05:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `user_id`, `pro_id`, `total`) VALUES
(8, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `id`) VALUES
('cereals', 1),
('vegetables', 2),
('fruits', 3),
('legumes', 4),
('seeds', 6),
('tubers', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email_id`, `mobile`, `password`, `address`, `photo`, `status`) VALUES
(1, 'test', 'test@gmail.com', '071123456', '827ccb0eea8a706c4c34a16891f84e7b', 'kenyatta ave', 'dp.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `tprice` int(11) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `for_whom` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Scharge` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` text NOT NULL,
  `offer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `Qty`, `tprice`, `category`, `price`, `for_whom`, `quantity`, `image`, `Scharge`, `discount`, `description`, `offer`) VALUES
(1, 'maize', 20, 400, 'cereals', 20, 1, 18, 'cumin.jpg', 10, 5, 'The best quality from pioneer seed.certified and tested.', 1),
(2, 'mustard', 400, 4000, 'vegetables', 40, 2, 8, 'mustard.jpg', 30, 2, 'hii ukila sema kuhara tu', 1),
(3, 'cloves', 120, 1200, 'cereals', 12, 1, 100, 'clove.jpg', 20, 12, 'goes really well when making herbal tea.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sold_product`
--

CREATE TABLE `sold_product` (
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `tprice` int(11) DEFAULT NULL,
  `b_date` int(11) DEFAULT NULL,
  `s_date` int(11) DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `ad1` int(11) DEFAULT NULL,
  `ad2` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `card_name` int(11) DEFAULT NULL,
  `card` int(11) DEFAULT NULL,
  `card_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold_product`
--

INSERT INTO `sold_product` (`user_id`, `pro_id`, `Qty`, `tprice`, `b_date`, `s_date`, `name`, `email`, `ad1`, `ad2`, `city`, `pin`, `card_name`, `card`, `card_no`) VALUES
(1, 1, 1, 29, 2022, 2022, 0, 0, 0, 0, 0, 1568, 0, 0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `pro_id`) VALUES
(1, 1),
(1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_product`
--
ALTER TABLE `sold_product`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
