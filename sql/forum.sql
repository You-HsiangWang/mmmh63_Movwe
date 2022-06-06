-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 06 日 05:26
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
-- 資料表結構 `forum`
--

CREATE TABLE `forum` (
  `forum_sid` int(11) NOT NULL COMMENT 'primary key',
  `forum_title` varchar(255) NOT NULL COMMENT '文章標題',
  `forum_content` varchar(3000) NOT NULL COMMENT '文章內容',
  `forum_pic` varchar(255) NOT NULL COMMENT '文章圖片 檔名',
  `forum_type` varchar(255) NOT NULL COMMENT '1.影劇\r\n2.電影\r\n3.綜藝\r\n4.動畫',
  `forum_hashtag` varchar(255) DEFAULT NULL COMMENT '目前用不到[''#a'',''#b'',''#c'']',
  `forum_clicks` int(11) NOT NULL DEFAULT 0 COMMENT '給亂數1~100',
  `forum_uploadtime` varchar(255) NOT NULL COMMENT '在php中寫getnow()',
  `forum_arthur` int(11) NOT NULL COMMENT '記錄發文者的sid',
  `forum_like` int(11) DEFAULT 0 COMMENT 'likes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `forum`
--

INSERT INTO `forum` (`forum_sid`, `forum_title`, `forum_content`, `forum_pic`, `forum_type`, `forum_hashtag`, `forum_clicks`, `forum_uploadtime`, `forum_arthur`, `forum_like`) VALUES
(1, '2521感想ㄧ事與願違是另有安排', '「我們總是全力以赴，但其實一切都只是練習。」易辰在最後一集所說的這一句，總結2521所說的年輕時光。拼勁全力是因就只有這些，想努力守護僅擁有的一切。這之中最殘酷的練習，莫過於失敗與失去。不斷面臨「失敗」考驗的希度，最終悟出「世上沒有絕對的悲劇，也不存在著絕對的喜劇。」「笑過以後，要忘記就容易多了！忘了才能迎來下一次的挑戰。」\r\n\r\n會不知不覺承受起這種力度打在身上。 總能從這之中領悟到些什麼，時代血淋淋的無情，使希度與易辰不得不去面對現實之冷酷。 從一次又一次的失敗練習中，她明白自己依然覺得擊劍有趣，被磨練出超強的復原力。這似乎是測試，看看到底是為受人吹捧，還是真的喜歡這件事的本質。每一次失敗都是一次直接且犀利的批評，但反而讓自己更能籍此來思考需要改進與加強的。雖會令人有些吃不消，可沒如此吃不消過，又要怎麼增加食量呢？\r\n\r\n希度就是因原來學校的擊劍社收掉，才能遇到更適合自己的教練。接著進步神速，從追夢擊劍少女一舉到國家代表。「失去」不過是殺那間，之後的總總才是重頭戲，易辰所要面對的試煉是「失去」近乎所有。家裏破產使他一夜成熟，不再是那意氣風發的少爺，而是大學輟學生。面對社會，不得不學會低頭，原來陽光的模樣也跟著消逝。「我只是因為這個工作不用跟人互動才來應徵。」第二集中易辰去應徵飯店打掃工作時說道。雖不再是富家少爺，但屬於貴族的自尊還在，僅剩的「面子」努力地守住。此時的他，不知怎麼面對看過他風光的別人，害怕遇見所以決定逃跑躲藏。但慶幸的是易辰最終還是選擇朝有光的地方走，重新站起來。\r\n\r\n易辰成功跨越了人生的一大坎，這足以讓他稍微適應未來更坎坷的路。面對挫拆後的成長，足以讓一個人改頭換面。從易辰高中時在廣播社的橋段，可以看出易辰很有「共感」能力。在加上經歷時代巨變的打擊，使他更能同感那些一夕失去所有的人，所以才能更有使命感去完成在美國的採訪。最終易辰還是到美國去了，却是在與少年時所憧憬的截然不同的位置。但也因如此，找到了更值得自己去犧牲奉獻的事，闖出了一條血汗路。\r\n\r\n因為經歷了這個「失去」，反而讓他可以好好做白易辰。不用擔心別人因物質而靠近他，也能更好地施展能力。易辰在第一集曾自嘲地說：「家裡破產還是有值得慶幸的事，讓我看清某人醜陋的一面。」', '2521_a.jpg', '影劇', '[\'#韓劇心得\', \'#2521\', \'#南柱赫\']', 55, '2022-06-03 07:09:22', 2, 0),
(2, '最佳結局 怪獸與鄧不力多的秘密', '  在這個鄧布利多對決葛林戴華德的故事中，紐特的定位究竟在哪?若紐特在這場世紀對決中有功不可沒的功勞，在哈利波特本傳中，紐特應該也會是家喻戶曉的英雄。我不算很喜歡怪獸與他們的產地(2016)，而在2018年從戲院走出來時，一部分的我已經死了(不確定是心還是邏輯)。所以我自然對系列的第三部沒抱太大的期待，也許正是因為沒有期待，觀感出奇的好，甚至讓我覺得把它當成怪獸產地的結局也許是個不錯的主意。\r\n\r\n                                            我對這個系列的懷疑從第一部的結局開始，並在後面兩部電影得到驗證。在這個鄧布利多對決葛林黛華德的故事中，紐特的定位究竟在哪?若紐特在這場世紀對決中有功不可沒的功勞，在哈利波特本傳中，紐特應該也會是家喻戶曉的英雄。於是到了第二部中，我們看到阿布思礙於血誓的限制，只能委託紐特代為執行任務(後來證明血誓也沒那麼難解嘛)。從這一刻開始，奇獸飼育學家紐特和麻瓜雅各便踏上對抗黑巫師的奇妙旅程。\r\n                                            無論JK羅琳原本是否有計畫對紐特，麗塔與哥哥之間的關係多做著墨，都隨著莉塔一同被燒成灰燼；我們反而聽了尤瑟夫講了一大段家族史，麗塔也接力說完她如何丟包了最小的弟弟(整段基本上跟魁登思的身世完全沒關係)，而無論JK羅琳原本對尤瑟夫這個腳色有甚麼規劃(也許又會說回血統論?)都跟其他記憶一起被葛林黛華德抽掉了。而第二部的人型麥高芬魁登思，這一集終於能跟阿不思一較高下並遭擊敗(畢竟人稱最偉大的巫師嘛)其身世也在幾句話中交代得比第二集更簡單明瞭。', 'harry.jpg', '電影', '[\'#哈利波特\']', 33, '2022-06-03 09:37:27', 1, 0),
(15, '#台劇《村裡來了個暴走女外科》原聲帶音樂分享 有雷', '最近很常在臉書刷到一部台劇的預告，而且預告就超火辣XD就好奇點開這部劇，看得差點笑瘋\r\n沒錯就是由蔡淑臻、朱軒洋等人主演的輕鬆超ㄎㄧㄤ職場台劇《村裡來了個暴走女外科》這部劇改編自劉宗瑀醫師的同名小說，主要講述一名個性古怪的女外科醫師劉梓旭來到偏鄉南南灣村的分院，藉著與不同病患的接觸，看到了這個村中不同的人事物。\r\n\r\n開頭女主劉子旭就以意想不到的方式出場，之後的行為也蠻古怪XD 但別看她一臉厭世，其實是個觀察力、醫學知識都超強的女醫師，看到病人在沒人的路邊發病，果斷利用找到的工具在路邊緊急開刀，救完人後又繼續一臉厭世XD \r\n男主則是村裡守護神「池王爺」的靈媒，開場就和女主結緣，第一集結尾就被女主撲倒，一夜情後想到女主就一臉癡笑，好純情好可愛XDD\r\n這部劇也有很多知名的演員、主持人、Youtuber等藝人出演，像是目前有出現的演員有知名演員湯志偉、鄭志偉、張再興、主持過《娛樂百分百》的風田、各大節目支持人海裕芬、新生代藝人杜妍、Youtuber蘇瀅、白癡公主等人。劇中大家也都放得很開，很多場面都超級爆笑。不過劇中有個「家明醫生」出現的時候都擋住臉，看演員列表也只有諧音「沒有人」的「梅友仁」，好好奇之後能不能看到正臉。\r\n看了首播的兩集真的能感受到劇組製作的用心，從小傷口、縫針，到大手術，都做得非常逼真，像是在路邊開頭顱，看著刀切下皮膚到開始鑽頭顱，場面真的驚悚，但拍攝和剪輯又讓它不那麼血腥，真的好強。\r\n\r\n劇的片頭曲〈沒有人在乎你在乎的事〉由獨立樂團那我懂你意思了演唱，一聽就上癮，非常魔性，而歌詞也和劇情非常搭，都在講述尋找希望；而片尾曲是由可愛治愈歌聲的柯泯薰演唱的〈陌生的瞳孔探險〉~\r\n\r\n劇中插曲也用了很多董事長樂團的歌，比如第一集小劉在台上唱的歌就是〈新男性的復仇〉；另一首插曲也是大家耳熟能詳的〈第一支舞〉，幾乎每次營隊都被抓來跳XD \r\n\r\n整理了原聲帶歌單~ ', 'w_doctor.jpg', '影劇', '[\'#暴走女外科\',\'#蔡淑臻\',\'#有雷\']', 10, '2022-06-03 09:37:27', 10, 0),
(16, '✨2022韓劇清單✨男神們要回歸了', '以下排序不分排名，也並非播出時間順序，隨機排序：\r\n\r\n1.《警校菜鳥》姜丹尼爾\r\n2.《社內相親》安孝燮\r\n3.《二十五，二十一》南柱赫\r\n4.《為何是吳秀才》黃寅燁\r\n5.《向你奔去的速度493km》蔡鍾協\r\n6.《Crazy Love》金材昱\r\n7.《明天》路雲\r\n8.《獵犬們》禹棹煥\r\n9.《流星》金永大\r\n10.《美男堂》徐仁國\r\n\r\n11.《Island》金南佶\r\n12.《The Glory》李到晛\r\n13.《Dr.Lawyer》蘇志燮\r\n14.《氣象廳的人們：社內戀愛殘酷史篇》宋江\r\n15.《Big Mouth》李鍾碩\r\n\r\n16.《財閥家的小兒子》宋仲基\r\n17.《我們的藍調》金宇彬\r\n18.《K-project》朴敘俊\r\n19.《Moving》趙寅成\r\n20.《柏青哥》李敏鎬\r\n\r\n－－－－－－－－－－－－－－\r\n個人最期待....《K-project》\r\n去年因魷魚遊戲爆紅的魏河俊也會演！！\r\n劇情大概是講述在京城的一家醫院，不明生物體和人類間的決鬥故事（韓韶禧又要打架啦XD）\r\n\r\n李鍾碩也好久沒演戲了\r\n這次要和潤娥演夫妻！！！（神仙夫妻顏）\r\n\r\n大家最期待哪一部呢？', 'account.jfif', '影劇', '[\'#韓劇推薦\',\'#安孝燮\',\'#南柱赫\']', 15, '2022-06-02 09:37:27', 11, 10),
(17, '⚠️重度雷 媽的多重宇宙影評', '媽的多重宇宙\n這部我打得很主觀\n\n其實我想了整整一天才有辦法恢復情緒好好講解影評\n本篇不涉及爛翻譯的問題\n純粹以我對這個跟電影的心靈交流\n不能說蓮一家跟我一模一樣\n但也可以說是相差不遠\n不過這比較是提起我小時候的回憶\n小時候我爸媽還不了解憂鬱症的時候\n他們總是會拿叛逆期的名字扣在我身上\n曾經也被爸爸把藥袋丟在我臉上跟我說有病就該吃藥\n直到有天我真的去洗胃了 他們才意識的我真的生病了\n我覺得秀蓮非常像我媽 女兒也很像我\n看了這部電影心裡一直在回想當初跳海被送往警局的時候\n我一直哭說我感情狀態糟連讀書都顧不好\n我總是一直讓你們失望\n我媽只會我：傻孩子，不管怎樣我都愛你\n\n 看這部電影一直不停的想著這句話\n貝果的存在就像我每次跳海吞藥的時候只想著只要不活\n著就自由了吧\n卻沒意識到我媽是一次一次多麼努力的把我救回來\n \n再來是爸爸的部分 \n我坦誠的說我爸媽之前吵過要離婚\n原因是因為我爸那邊（阿嬤大小姑姑一直嫌棄我媽沒工作嬌生慣養懶ㄋㄨㄚˋ雜某\n各式各樣難聽的話都講過了\n而且我爸又外遇（算是網戀？）\n我爸就是個豬隊又加媽寶\n很軟弱但同時他也很盡力在彌補自己的過錯\n跟威門一樣 \n即便軟弱也始終希望我們重回好家庭的時光\n\n而我大概就是大魔王女兒吧\n我是一個從小就很叛逆的女生\n也不算是叛逆就不想循規蹈矩\n我自己知道在做什麼並且不後悔就好\n戲裡演的那段剛好對應到我跟我家人還未磨合的狀態\n我只是希望他們也可以站在我的角度看我的貝果如何一點一滴形成的\n但我還是很愛我爸媽 到現在我們互相了解彼此\n互相當作朋友一樣\n我很知足了\n\n爺爺那段我家目前無解 無法露刺不能穿太露骨\n爺爺雖然年輕時後很潮\n但他一直堅信我跟我媽就說爛桃花一輩子\n就算帶男朋友回去他也不准我在他聽力範圍講男朋友三個字\n會直接把我抓來念1小時的類型\n總之就是我爺太寵我了 我不忍心看到我沒結婚的那天（爺爺目前還是帥哥一枚 只是光陰如梭）\n\n最後還是想說這部片是真的很好看\n你會從中體會到很多人生哲理\n楊紫瓊真的寶刀未老演技也有大大提升\n很開心她嘗試了她從未嘗試過的劇本類型\n但我還是最愛看瓊姊的武打啦\n或是亞洲富豪那個拍達給\n\n我男友甚至被我嚇到我有辦法看到哭倒哈哈哈哈哈\n總之別管翻譯了 用心去感受這三部曲節奏電影吧\n裡頭致敬了很對楊紫瓊以前接過的片\n大家可以找找看\n也歡迎大家在下面留觀後感', 'mama.jpg', '電影', '[\'#電影\',\'#媽的\',\'#多重宇宙\']', 15, '2022-06-01 11:16:07', 10, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_sid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=18;
COMMIT;
