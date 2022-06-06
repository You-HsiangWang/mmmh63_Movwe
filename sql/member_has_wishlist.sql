-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 06 日 05:29
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫: `movwe_database`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member_has_wishlist`
--

CREATE TABLE `member_has_wishlist` (
  `mhw_sid` int(11) NOT NULL,
  `mhw_member_sid` int(11) NOT NULL,
  `mhw_wishlist_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member_has_wishlist`
--

INSERT INTO `member_has_wishlist` (`mhw_sid`, `mhw_member_sid`, `mhw_wishlist_sid`) VALUES
(233, 1, 1),
(234, 1, 2),
(235, 1, 3),
(236, 1, 4),
(237, 1, 5);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member_has_wishlist`
--
ALTER TABLE `member_has_wishlist`
  ADD PRIMARY KEY (`mhw_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_has_wishlist`
--
ALTER TABLE `member_has_wishlist`
  MODIFY `mhw_sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
COMMIT;
