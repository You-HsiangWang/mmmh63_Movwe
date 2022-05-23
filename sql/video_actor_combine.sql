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
-- 資料表結構 `video_actor_combine`
--

CREATE TABLE `video_actor_combine` (
  `sid` int(11) NOT NULL,
  `linkkey` int(11) DEFAULT NULL,
  `vac_actor_sid` int(11) NOT NULL,
  `vac_actorname` varchar(255) DEFAULT NULL,
  `vac_video_sid` int(11) NOT NULL,
  `vac_video_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `video_actor_combine`
--

INSERT INTO `video_actor_combine` (`sid`, `linkkey`, `vac_actor_sid`, `vac_actorname`, `vac_video_sid`, `vac_video_name`) VALUES
(1, NULL, 1, '李秀賢', 1, 'Shooting Stars流星'),
(2, NULL, 2, '李聖經', 1, 'Shooting Stars流星'),
(3, NULL, 3, '金永大', 1, 'Shooting Stars流星'),
(4, NULL, 4, '尹鐘焄', 1, 'Shooting Stars流星'),
(5, NULL, 5, '金允慧', 1, 'Shooting Stars流星'),
(6, NULL, 6, '素珍', 1, 'Shooting Stars流星'),
(7, NULL, 7, '李正信', 1, 'Shooting Stars流星'),
(8, NULL, 8, '李承協', 1, 'Shooting Stars流星'),
(9, NULL, 9, '河道權', 1, 'Shooting Stars流星'),
(10, NULL, 10, '朴寶藍', 2, '解讀惡之心的人們'),
(11, NULL, 11, '金南佶', 2, '解讀惡之心的人們'),
(12, NULL, 12, '陳善圭', 2, '解讀惡之心的人們'),
(13, NULL, 13, '金素真', 2, '解讀惡之心的人們'),
(14, NULL, 14, '劉善東', 3, 'Bad and Crazy邪惡與瘋狂'),
(15, NULL, 15, '李棟旭', 3, 'Bad and Crazy邪惡與瘋狂'),
(16, NULL, 16, '魏嘏隽', 3, 'Bad and Crazy邪惡與瘋狂'),
(17, NULL, 17, '韓知㒚', 3, 'Bad and Crazy邪惡與瘋狂'),
(18, NULL, 18, '車學渷', 3, 'Bad and Crazy邪惡與瘋狂'),
(19, NULL, 19, '朴晧鎭', 4, '優秀巫師賈斗心'),
(20, NULL, 20, '宋濟泳', 4, '優秀巫師賈斗心'),
(21, NULL, 21, '金賽綸', 4, '優秀巫師賈斗心'),
(22, NULL, 22, '南多凜', 4, '優秀巫師賈斗心'),
(23, NULL, 23, '姜孝鎮', 5, '法外搜查'),
(24, NULL, 24, '車太鉉', 5, '法外搜查'),
(25, NULL, 25, '李先彬', 5, '法外搜查'),
(26, NULL, 26, '鄭尚勳', 5, '法外搜查'),
(27, NULL, 27, '池承炫', 5, '法外搜查'),
(28, NULL, 28, 'Gao Zai Xian', 6, '一起吃晚餐嗎'),
(29, NULL, 29, '宋承憲', 6, '一起吃晚餐嗎'),
(30, NULL, 30, '徐智慧', 6, '一起吃晚餐嗎'),
(31, NULL, 31, '崔英勳', 7, 'One The Woman雙重人生'),
(32, NULL, 32, '李荷妮', 7, 'One The Woman雙重人生'),
(33, NULL, 33, '李相侖', 7, 'One The Woman雙重人生'),
(34, NULL, 34, '陳瑞妍', 7, 'One The Woman雙重人生'),
(35, NULL, 35, '李源根', 7, 'One The Woman雙重人生'),
(36, NULL, 36, '陳亨旭', 8, '重生Born Again'),
(37, NULL, 37, '張基龍', 8, '重生Born Again'),
(38, NULL, 38, '李洙赫', 8, '重生Born Again'),
(39, NULL, 39, '陳世娫', 8, '重生Born Again'),
(40, NULL, 40, '朴珍錫', 9, '大發不動產'),
(41, NULL, 41, '張娜拉', 9, '大發不動產'),
(42, NULL, 42, '鄭容和', 9, '大發不動產'),
(43, NULL, 43, '權榮日', 10, '某一天滅亡來到我家門前'),
(44, NULL, 44, '朴寶英', 10, '某一天滅亡來到我家門前'),
(45, NULL, 45, '徐仁國', 10, '某一天滅亡來到我家門前'),
(46, NULL, 38, '李洙赫', 10, '某一天滅亡來到我家門前'),
(47, NULL, 46, '姜泰伍', 10, '某一天滅亡來到我家門前'),
(48, NULL, 47, '申度賢', 10, '某一天滅亡來到我家門前'),
(49, NULL, 48, '南成宇', 11, '我的室友是九尾狐'),
(50, NULL, 37, '張基龍', 11, '我的室友是九尾狐'),
(51, NULL, 49, '李惠利', 11, '我的室友是九尾狐'),
(52, NULL, 50, '姜漢娜', 11, '我的室友是九尾狐'),
(53, NULL, 51, '金度完', 11, '我的室友是九尾狐'),
(54, NULL, 52, '裴仁爀', 11, '我的室友是九尾狐'),
(55, NULL, 53, '安吉鎬', 12, 'Happiness毒樓'),
(56, NULL, 54, '韓孝周', 12, 'Happiness毒樓'),
(57, NULL, 55, '朴炯植', 12, 'Happiness毒樓'),
(58, NULL, 56, '趙宇鎮', 12, 'Happiness毒樓'),
(59, NULL, 57, '李尚燁', 13, '柔美的細胞小將'),
(60, NULL, 58, '金高銀', 13, '柔美的細胞小將'),
(61, NULL, 59, '安普賢', 13, '柔美的細胞小將'),
(62, NULL, 60, '李侑菲', 13, '柔美的細胞小將'),
(63, NULL, 61, '朴珍榮', 13, '柔美的細胞小將'),
(64, NULL, 62, '朴智賢', 13, '柔美的細胞小將'),
(65, NULL, 63, '金正植', 14, '酒鬼都市女人們'),
(66, NULL, 25, '李先彬', 14, '酒鬼都市女人們'),
(67, NULL, 64, '韓善伙', 14, '酒鬼都市女人們'),
(68, NULL, 65, '鄭恩地', 14, '酒鬼都市女人們'),
(69, NULL, 66, '崔始源', 14, '酒鬼都市女人們'),
(70, NULL, 67, '李政燮', 15, '達利和馬鈴薯湯'),
(71, NULL, 68, '金旻載', 15, '達利和馬鈴薯湯'),
(72, NULL, 69, '朴珪瑛', 15, '達利和馬鈴薯湯'),
(73, NULL, 70, '權律', 15, '達利和馬鈴薯湯'),
(74, NULL, 71, '姜信孝', 16, '九尾狐傳'),
(75, NULL, 15, '李棟旭', 16, '九尾狐傳'),
(76, NULL, 72, '曹寶兒', 16, '九尾狐傳'),
(77, NULL, 73, '金汎', 16, '九尾狐傳'),
(78, NULL, 74, '姜哲宇', 17, '所以我和黑粉結婚了'),
(79, NULL, 75, '崔秀榮', 17, '所以我和黑粉結婚了'),
(80, NULL, 76, '崔泰俊', 17, '所以我和黑粉結婚了'),
(81, NULL, 77, '黃燦盛（2PM）', 17, '所以我和黑粉結婚了'),
(82, NULL, 78, '韓智安', 17, '所以我和黑粉結婚了'),
(83, NULL, 79, '朴秀元', 18, '產後調理院'),
(84, NULL, 80, '嚴智苑', 18, '產後調理院'),
(85, NULL, 81, '朴河宣', 18, '產後調理院'),
(86, NULL, 82, '張慧珍', 18, '產後調理院'),
(87, NULL, 83, '宋賢旭', 19, '優雅的朋友們'),
(88, NULL, 84, '劉俊相', 19, '優雅的朋友們'),
(89, NULL, 85, '宋玧妸', 19, '優雅的朋友們'),
(90, NULL, 86, '裴秀彬', 19, '優雅的朋友們'),
(91, NULL, 87, '金盛吳', 19, '優雅的朋友們'),
(92, NULL, 88, '鄭石勇', 19, '優雅的朋友們'),
(93, NULL, 89, '金元海', 19, '優雅的朋友們'),
(94, NULL, 90, '金惠恩', 19, '優雅的朋友們'),
(95, NULL, 91, '李仁譓', 19, '優雅的朋友們'),
(96, NULL, 92, '金志映', 19, '優雅的朋友們'),
(97, NULL, 93, '韓多感', 19, '優雅的朋友們'),
(98, NULL, 94, '李泰煥', 19, '優雅的朋友們');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `video_actor_combine`
--
ALTER TABLE `video_actor_combine`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video_actor_combine`
--
ALTER TABLE `video_actor_combine`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;
