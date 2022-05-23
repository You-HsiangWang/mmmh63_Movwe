-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 05 月 23 日 10:40
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
-- 資料表結構 `video_actor_data`
--

CREATE TABLE `video_actor_data` (
  `v_actor_sid` int(11) NOT NULL COMMENT '演員sid',
  `link_key` int(11) DEFAULT NULL,
  `v_actor_name` varchar(255) NOT NULL COMMENT '演員姓名',
  `v_actor_icon` varchar(255) NOT NULL COMMENT '演員縮圖網址',
  `v_actor_photo` varchar(255) DEFAULT NULL COMMENT '演員頁面用的大圖'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `video_actor_data`
--

INSERT INTO `video_actor_data` (`v_actor_sid`, `link_key`, `v_actor_name`, `v_actor_icon`, `v_actor_photo`) VALUES
(1, NULL, '李秀賢', 'p_5305529_m_601_300_300.jpg', NULL),
(2, NULL, '李聖經', 'p_5131067_m_601_m6_300_300.jpg', NULL),
(3, NULL, '金永大', 'p_5299039_m_601_m2_300_300.jpg', NULL),
(4, NULL, '尹鐘焄', 'p_2014908_m_601_m7_300_300.jpg', NULL),
(5, NULL, '金允慧', 'p_2008400_m_601_m4_300_300.jpg', NULL),
(6, NULL, '素珍', 'p_5060209_m_601_m5_300_300.jpg', NULL),
(7, NULL, '李正信', 'p_2013105_m_601_m4_300_300.jpg', NULL),
(8, NULL, '李承協', 'p_5263337_m_601_m2_300_300.jpg', NULL),
(9, NULL, '河道權', 'p_5305570_m_601_m1_300_300.jpg', NULL),
(10, NULL, '朴寶藍', 'p_5310602_m_601_m2_300_300.jpg', NULL),
(11, NULL, '金南佶', 'p_2008350_m_601_m4_300_300.jpg', NULL),
(12, NULL, '陳善圭', 'p_5157313_m_601_m3_300_300.jpg', NULL),
(13, NULL, '金素真', 'p_5276000_m_601_m2_300_300.jpg', NULL),
(14, NULL, '劉善東', 'p_5048993_m_601_m2_300_300.jpg', NULL),
(15, NULL, '李棟旭', 'p_1036831_m_601_m7_300_300.jpg', NULL),
(16, NULL, '魏嘏隽', 'p_5290055_m_601_300_300.jpg', NULL),
(17, NULL, '韓知㒚', 'p_5060169_m_601_m5_300_300.jpg', NULL),
(18, NULL, '車學渷', 'p_5141217_m_601_m2_300_300.jpg', NULL),
(19, NULL, '朴晧鎭', 'p_5304861_m_601_m3_300_300.jpg', NULL),
(20, NULL, '宋濟泳', 'p_5306489_m_601_300_300.jpg', NULL),
(21, NULL, '金賽綸', 'p_2004786_m_601_m4_300_300.jpg', NULL),
(22, NULL, '南多凜', 'p_2014221_m_601_m7_300_300.jpg', NULL),
(23, NULL, '姜孝鎮', 'p_5285933_m_601_300_300.jpg', NULL),
(24, NULL, '車太鉉', 'p_2000375_m_601_m4_300_300.jpg', NULL),
(25, NULL, '李先彬', 'p_5220974_m_601_m2_300_300.jpg', NULL),
(26, NULL, '鄭尚勳', 'p_5166550_m_601_m3_300_300.jpg', NULL),
(27, NULL, '池承炫', 'p_5285932_m_601_300_300.jpg', NULL),
(28, NULL, 'Gao Zai Xian', 'p_5257304_m_601_m1_300_300.jpg', NULL),
(29, NULL, '宋承憲', 'p_2003167_m_601_m7_300_300.jpg', NULL),
(30, NULL, '徐智慧', 'p_2002779_m_601_m3_300_300.jpg', NULL),
(31, NULL, '崔英勳', 'p_1027761_m_601_m1_300_300.jpg', NULL),
(32, NULL, '李荷妮', 'p_2008610_m_601_m4_300_300.jpg', NULL),
(33, NULL, '李相侖', 'p_2013103_m_601_m4_300_300.jpg', NULL),
(34, NULL, '陳瑞妍', 'p_5308018_m_601_m2_300_300.jpg', NULL),
(35, NULL, '李源根', 'p_2014071_m_601_m7_300_300.jpg', NULL),
(36, NULL, '陳亨旭', 'p_2009266_m_601_m4_300_300.jpg', NULL),
(37, NULL, '張基龍', 'p_5253968_m_601_m9_300_300.jpg', NULL),
(38, NULL, '李洙赫', 'p_1037302_m_601_m6_300_300.jpg', NULL),
(39, NULL, '陳世娫', 'p_5286103_m_601_300_300.jpg', NULL),
(40, NULL, '朴珍錫', 'p_5239218_m_601_300_300.jpg', NULL),
(41, NULL, '張娜拉', 'p_2004311_m_601_m8_300_300.jpg', NULL),
(42, NULL, '鄭容和', 'p_5184_m_601_m7_300_300.jpg', NULL),
(43, NULL, '權榮日', 'p_5285745_m_601_300_300.jpg', NULL),
(44, NULL, '朴寶英', 'p_2006140_m_601_m10_300_300.jpg', NULL),
(45, NULL, '徐仁國', 'p_2013021_m_601_m8_300_300.jpg', NULL),
(46, NULL, '姜泰伍', 'p_5251528_m_601_m1_300_300.jpg', NULL),
(47, NULL, '申度賢', 'p_5275408_m_601_m2_300_300.jpg', NULL),
(48, NULL, '南成宇', 'p_5262530_m_601_m1_300_300.jpg', NULL),
(49, NULL, '李惠利', 'p_5119744_m_601_m8_300_300.jpg', NULL),
(50, NULL, '姜漢娜', 'p_5005419_m_601_m8_300_300.jpg', NULL),
(51, NULL, '金度完', 'p_5303702_m_601_m7_300_300.jpg', NULL),
(52, NULL, '裴仁爀', 'p_5279268_m_601_m10_300_300.jpg', NULL),
(53, NULL, '安吉鎬', 'p_5203409_m_601_300_300.jpg', NULL),
(54, NULL, '韓孝周', 'p_2001341_m_601_m5_300_300.jpg', NULL),
(55, NULL, '朴炯植', 'p_2013140_m_601_m5_300_300.jpg', NULL),
(56, NULL, '趙宇鎮', 'p_5249180_m_601_m3_300_300.jpg', NULL),
(57, NULL, '李尚燁', 'p_5299853_m_601_300_300.jpg', NULL),
(58, NULL, '金高銀', 'p_2013180_m_601_m11_300_300.jpg', NULL),
(59, NULL, '安普賢', 'p_5264441_m_601_m2_300_300.jpg', NULL),
(60, NULL, '李侑菲', 'p_2013434_m_601_m6_300_300.jpg', NULL),
(61, NULL, '朴珍榮', 'p_5142019_m_601_m5_300_300.jpg', NULL),
(62, NULL, '朴智賢', 'p_5157619_m_601_300_300.jpg', NULL),
(63, NULL, '金正植', 'p_5308358_m_601_m2_300_300.jpg', NULL),
(64, NULL, '韓善伙', 'p_2013132_m_601_m7_300_300.jpg', NULL),
(65, NULL, '鄭恩地', 'p_2013098_m_601_m10_300_300.jpg', NULL),
(66, NULL, '崔始源', 'p_2000355_m_601_m5_300_300.jpg', NULL),
(67, NULL, '李政燮', 'p_1036543_m_601_m1_300_300.jpg', NULL),
(68, NULL, '金旻載', 'p_5251487_m_601_m5_300_300.jpg', NULL),
(69, NULL, '朴珪瑛', 'p_5276181_m_601_m2_300_300.jpg', NULL),
(70, NULL, '權律', 'p_5057050_m_601_m2_300_300.jpg', NULL),
(71, NULL, '姜信孝', 'p_5293881_m_601_300_300.jpg', NULL),
(72, NULL, '曹寶兒', 'p_2014231_m_601_m6_300_300.jpg', NULL),
(73, NULL, '金汎', 'p_1059620_m_601_m7_300_300.jpg', NULL),
(74, NULL, '姜哲宇', 'p_5153188_m_601_300_300.jpg', NULL),
(75, NULL, '崔秀榮', 'p_2012847_m_601_m5_300_300.jpg', NULL),
(76, NULL, '崔泰俊', 'p_2013796_m_601_m5_300_300.jpg', NULL),
(77, NULL, '黃燦盛（2PM）', 'p_5061266_m_601_m3_300_300.jpg', NULL),
(78, NULL, '韓智安', 'p_5275977_m_601_300_300.jpg', NULL),
(79, NULL, '朴秀元', 'p_5248076_m_601_300_300.jpg', NULL),
(80, NULL, '嚴智苑', 'p_1012593_m_601_m4_300_300.jpg', NULL),
(81, NULL, '朴河宣', 'p_1035249_m_601_m5_300_300.jpg', NULL),
(82, NULL, '張慧珍', 'p_5294466_m_601_300_300.jpg', NULL),
(83, NULL, '宋賢旭', 'p_1026034_m_601_m1_300_300.jpg', NULL),
(84, NULL, '劉俊相', 'p_2015357_m_601_m3_300_300.jpg', NULL),
(85, NULL, '宋玧妸', 'p_2003184_m_601_m4_300_300.jpg', NULL),
(86, NULL, '裴秀彬', 'p_2006125_m_601_m4_300_300.jpg', NULL),
(87, NULL, '金盛吳', 'p_5305684_m_601_300_300.jpg', NULL),
(88, NULL, '鄭石勇', 'p_5305685_m_601_300_300.jpg', NULL),
(89, NULL, '金元海', 'p_5190171_m_601_m6_300_300.jpg', NULL),
(90, NULL, '金惠恩', 'p_2014191_m_601_m12_300_300.jpg', NULL),
(91, NULL, '李仁譓', 'p_5305686_m_601_300_300.jpg', NULL),
(92, NULL, '金志映', 'p_2008406_m_601_m3_300_300.jpg', NULL),
(93, NULL, '韓多感', 'p_2008036_m_601_m7_300_300.jpg', NULL),
(94, NULL, '李泰煥', 'p_1024611_m_601_m3_300_300.jpg', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `video_actor_data`
--
ALTER TABLE `video_actor_data`
  ADD PRIMARY KEY (`v_actor_sid`),
  ADD UNIQUE KEY `v_actor_name` (`v_actor_name`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video_actor_data`
--
ALTER TABLE `video_actor_data`
  MODIFY `v_actor_sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '演員sid', AUTO_INCREMENT=95;
COMMIT;
