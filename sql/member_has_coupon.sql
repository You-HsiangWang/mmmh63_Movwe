-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 02 日 04:00
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
-- 資料表結構 `member_has_coupon`
--

CREATE TABLE `member_has_coupon` (
  `mhc_sid` int(11) NOT NULL,
  `mhc_member_sid` int(11) NOT NULL,
  `mhc_coupon_sid` int(11) NOT NULL,
  `mhc_coupon_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member_has_coupon`
--

INSERT INTO `member_has_coupon` (`mhc_sid`, `mhc_member_sid`, `mhc_coupon_sid`, `mhc_coupon_code`) VALUES
(133, 1, 4, '97LP2BQ0TQYE'),
(134, 1, 4, 'SSS68PKJX3JX'),
(135, 1, 1, 'NLW9J0T3KKC9'),
(136, 1, 1, 'BLB1X3R3QHH0'),
(137, 1, 6, 'AQU0IOBXPPTA'),
(138, 1, 4, '4WTFTCQIE48N'),
(139, 1, 10, '6RX3DOF8AVHP'),
(140, 1, 2, 'PJG3O8PMTQTB'),
(141, 1, 2, 'J3Z0IDTWY1QA');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member_has_coupon`
--
ALTER TABLE `member_has_coupon`
  ADD PRIMARY KEY (`mhc_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_has_coupon`
--
ALTER TABLE `member_has_coupon`
  MODIFY `mhc_sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;
