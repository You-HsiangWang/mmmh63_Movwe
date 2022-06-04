-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-04 13:55:14
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫: `movwe_database`
--

-- --------------------------------------------------------

--
-- 資料表結構 `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_sid` int(11) NOT NULL,
  `wish_name` varchar(255) NOT NULL COMMENT '片名',
  `wish_label` varchar(255) NOT NULL COMMENT '影片類型',
  `wish_number` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '許願人數',
  `wish_pic` varchar(255) NOT NULL COMMENT '海報',
  `wish_year` int(11) NOT NULL COMMENT '年份'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `wishlist`
--

INSERT INTO `wishlist` (`wish_sid`, `wish_name`, `wish_label`, `wish_number`, `wish_pic`, `wish_year`) VALUES
(1, '天國之吻', '動畫', '1', 'pd.jpg', 2005),
(2, '媽的多重宇宙', '電影', '2467', 'mader.jfif', 2022),
(3, 'Keroro', '動畫', '1004', 'forum_img01.jpg', 2003),
(4, '乘風破浪的姊姊 第三季', '綜藝', '459', 'sister.png', 2022),
(5, '變身國王', '電影', '1584', 'wish_movie-7.jpeg', 2000),
(6, '末日之戰 Z', '電影', '1345', 'forum_img04.jpg', 2013),
(7, 'NANA', '電影', '457', 'forum_img02.jpg', 2005),
(8, '湯姆貓與傑利鼠', '動畫', '342', 'tomjerry.png', 1940),
(9, '外星人田中太郎', '動畫', '457', 'tailang.jfif', 2000),
(10, '飛龍在天', '影劇', '146', 'fly.jpg', 2000),
(11, '麻辣鮮師', '影劇', '347', 'teacher.jfif', 2000),
(12, '惡魔在身邊', '影劇', '231', 'devil.jpg', 2005),
(13, '洛奇亞爆誕', '電影', '439', 'luoluo.jpg', 1999),
(14, 'GLEE歡樂合唱團', '影劇', '381', 'glee.jpg', 2009),
(15, '幽遊白書', '動畫', '672', 'book.jfif', 1997),
(16, '小查與寇弟的頂級生活', '影劇', '689', 'zack.png', 2005);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
