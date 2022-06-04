-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 01:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `movwe_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productchoice` varchar(100) NOT NULL,
  `productmaterial` varchar(60) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `productsize` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `productphoho` varchar(5000) NOT NULL,
  `introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sid`, `productname`, `productchoice`, `productmaterial`, `product_id`, `productsize`, `price`, `productphoho`, `introduction`) VALUES
(1, '孤單又燦爛的神-鬼怪 娃娃', '[\"蕎麥君\",\"紅豆君\",\"鬼怪\",\"阿使\",\"德華\"]', '毛絨面料及填充棉花', 'product01', '[\"S\",\"M\",\"L\"]', '[\"899\",\"999\",\"1099\"]', 'tbd', '經典熱門韓劇《孤單又燦爛的神：鬼怪》上演了一場跨國、跨歷史、跨年齡段的人鬼愛情，劇中無論是男女主角的愛情還是與其他角色的友情，他們之間妙不可言的甜膩感情，無疑是再一次向廣大觀衆撒了一大波狗糧，而劇中女主角愛不釋手的娃娃一蕎麥君更是讓影迷們大呼一定要收藏!'),
(2, '韓劇鬼怪PVC夾鍊袋', '[\"蕎麥君\",\"紅豆君\",\"鬼怪\",\"阿使\",\"德華\"]', '塑膠尼龍', 'product02', '[\"S\",\"M\",\"L\"]', '[\"399\",\"499\",\"599\"]', 'tbd', '經典熱門韓劇《孤單又燦爛的神：鬼怪》上演了一場跨國、跨歷史、跨年齡段的人鬼愛情，劇中無論是男女主角的愛情還是與其他角色的友情，他們之間妙不可言的甜膩感情，無疑是再一次向廣大觀衆撒了一大波狗糧');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;
