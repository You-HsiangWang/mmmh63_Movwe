    <?php

    require './parts/movwe_connect_db.php';
    $pageName = 'my_film_list';
    $title = 'MOVWE-我的片單';

    // 拿到所有電影
    // $getFilmList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 10";
    // $stmtFL = $pdo->query($getFilmList);
    // $FLrow = $stmtFL->fetchAll();

    //我的片單7部 
    $getFilmList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 3";
    $stmtFL = $pdo->query($getFilmList);
    $FLrow = $stmtFL->fetchAll();

    //瀏覽紀錄10部 
    $getHistoryList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 10";
    $stmtHL = $pdo->query($getHistoryList);
    $HLrow = $stmtHL->fetchAll();

    // 拿會員點數/暱稱/頭貼欄位
    $getPoints = "SELECT * FROM `member` WHERE `member_sid` = 1";
    $stmtHL = $pdo->query($getPoints);
    $getP = $stmtHL->fetchAll();


    // 拿到這個會員sid=1的許願清單
    $memid = $_SESSION['admin']['member_sid'];
    $getWish = 'SELECT * FROM `member_has_wishlist` FULL JOIN `wishlist` ON `mhw_wishlist_sid` = `wish_sid` WHERE `mhw_member_sid` =?';
    $stmtWl = $pdo->prepare($getWish);
    $stmtWl->execute([$memid]);
    $getW = $stmtWl->fetchAll();

    // 拿到這個會員sid=1的文章
    $Artid = $_SESSION['admin']['member_sid'];
    $getArt = 'SELECT * FROM `forum` FULL JOIN `member` ON `forum_arthur` = `member_sid` WHERE `member_sid` =?';
    $stmtAl = $pdo->prepare($getArt);
    $stmtAl->execute([$Artid]);
    $getA = $stmtAl->fetchAll();

    // 拿文章暱稱/頭貼欄位
    // $getArtPic = "SELECT * FROM `member` WHERE `member_sid` = 1";
    // $stmtAP = $pdo->query($getArtPic);
    // $getAP = $stmtAP->fetchAll();

    // 資料庫文章
    $forumsql = 'SELECT * FROM `forum` FULL join `member` WHERE `forum_arthur` = `member_sid` AND `member_sid` = ? ORDER BY `forum_sid` DESC LIMIT 7;';
    // $forumsql = 'SELECT * FROM `forum` ORDER BY `forum_sid` DESC LIMIT 7;';
    $forumstmt = $pdo->prepare($forumsql);
    $forumstmt->execute([$Artid]);
    $forumrows = $forumstmt->fetchAll();
    // 除錯
    if (!empty($forumrows)) {
    };

    // 用forumsid去查找所有的hashtag
    $forumid = [];
    foreach ($forumrows as $fr) {
    $forumid[] = $fr['forum_sid'];
    };  

    // 用forumsid去查找所有的tag
    $tagsql = sprintf("SELECT * FROM `forum_has_hastag` WHERE `f_has_forum_sid` IN (%s)", implode(',', $forumid));
    $tags = $pdo->query($tagsql)->fetchAll();
    ?>

    <?php include __DIR__ . '/parts/movwe_head.php' ?>

    <link rel="stylesheet" href="./css/bubbles_bg.css">
    <link rel="stylesheet" href="./css/member-info-php.css">
    <link rel="stylesheet" href="./css/kuang.css">
    <link rel="stylesheet" href="./css/no-article.css">
    <link rel="stylesheet" href="./css/Carousel_1.css">


    <!-- <script src="./js/jquery-3.6.0.js"></script>     -->


    <style>
        /* 飄點點背景 */
        .hidden {
            position: relative;
            overflow: hidden;
        }

        .display_none {
            display: none;
        }

        .wish_pic {
            overflow: hidden;
            border-radius: 7px
        }

        .d-filter-a {
            color: #1CD8FF;
            border: 1px solid #1CD8FF;
        }

        .d-filter-d {
            color: #FC6F51;
            border: 1px solid #FC6F51;
        }

        .d-filter-m {
            color: #10FFA2;
            border: 1px solid #10FFA2;
        }

        .d-filter-e {
            color: #FEB73A;
            border: 1px solid #FEB73A;
        }

        .wishcard:hover {
            transform: translateY(-5%);
            border-radius: 8px;
            transform: scale(1.02);
            transition: .5s;
        }

        .wishcard:hover .wish_vote {
            color: rgb(16, 255, 163);
        }

        .wishcard:hover .wish_word_middle {
            color: rgb(16, 255, 163);
        }

        .wishcard:hover .wish_total::after {
            filter: brightness(130%);
            background-color: rgb(16, 255, 163);
            box-shadow: 0 0 5px rgb(16, 255, 163)
        }

        .wishcard:hover .wish_total_1::after {
            filter: brightness(130%);
            background-color: rgb(16, 255, 163);
            box-shadow: 0 0 5px rgb(16, 255, 163)
        }

        .wishcard:hover .wish_total_2::after {
            filter: brightness(130%);
            background-color: rgb(16, 255, 163);
            box-shadow: 0 0 5px rgb(16, 255, 163)
        }

        .wishcard:hover .wish_total_3::after {
            filter: brightness(130%);
            background-color: rgb(16, 255, 163);
            box-shadow: 0 0 5px rgb(16, 255, 163)
        }

        .wishcard:hover .wish_total_4::after {
            filter: brightness(130%);
            background-color: rgb(16, 255, 163);
            box-shadow: 0 0 5px rgb(16, 255, 163)
        }

        .image__card {
            width: 110px;
        }

        .imge__card__information {
            display: none;
        }

        .push__up p {
            color: #1A1D24;
        }
        .art-mb{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .mb-artpic{
            margin-top: 28px;
            margin-left: 5px;
        }
        .pc-time{
            display:none;
        }
        .duanduan{
            height:65px ;
        }
        .mw_none{
            display:none;
        }

        /* 進度條動畫 */
        @keyframes runrunani {
            from {
                width: 0;
            }
            to {
                width: <?= $Winfo['wish_number']*0.04 ?>%;
            }
        }
        @media screen and (min-width: 750px) {
            .imge__card__information {
                display: block;
            }

            .image__card {
                width: 200px;
            }

            .image__card {
                margin-bottom: 60px;
            }

            .image__card:hover .imge__card__information {
                border-top: 2px solid rgba(16, 255, 163, 0);
                border-bottom: 2px solid rgba(16, 255, 163, 0);
                box-shadow: 0 -15px 5px -16px rgba(16, 255, 163, 0);
            }

            .card-article:hover {
                transform: translateY(-5%);
                border-radius: 8px;
                transform: scale(1.02);
                transition: .5s;
            }

            .posticon-hashtag {
                cursor: pointer;
            }

            .account_children {
                margin-bottom: 100px;
            }

            .kuang_bg {
                transform: translate(-3vw, -105vh);
            }
            .mb-time{
                display:none;
            }
            .pc-time{
            display:block;
            }
            .mb-artpic{
                margin-top: 0px;
                margin-left: 20px ;
            }
            .duanduan{
            height:30px ;
            }
            .mw_none{
                display:block;
            }
        }
    </style>
    </head>

    <body>
        <!----------nav_top-------------->
        <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>

        <div class="layout">
            <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>


            <div class="container hidden">
                <div class="bubbles">
                    <span style="--i:11;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:28;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:30;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:29;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:27;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:29;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:27;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:30;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                </div>

                <div class="bubbles2 ">
                    <span style="--i:11;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:28;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:30;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:29;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:27;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:29;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:27;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:30;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:21;"></span>
                </div>
                
                <!--text__container------內容放這邊------------->
                <div class="text__container">
                    <div class="account-container">
                        <div class="account">
                            <div class="account-left">
                                <div class="account-pic">
                                    <?php foreach ($getP as $Pinfo) : ?>
                                        <img class="img-ori" src="./img/member/<?= $Pinfo['member_avatar'] ?>" alt="">
                                    <?php endforeach; ?> 
                                    <img class="img-new display_none" src="./img/talls_img/hehe.png" alt="">
                                </div>
                                <?php foreach ($getP as $Pinfo) : ?>
                                    <div class="account-name"><?= $Pinfo['member_nickname'] ?></div>
                                <?php endforeach; ?>    
                            </div>
                            <div class="account-info">
                                <?php foreach ($getP as $Pinfo) : ?>
                                    <?= $Pinfo['member_info'] ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="account-line"></div>
                            <div class="account-myMovie">我的片單：6部影片</div>
                            <div class="account-myPost">我的貼文：2篇貼文</div>
                            <div class="account-right">
                                <?php foreach ($getP as $Pinfo) : ?>
                                    <div class="account-myPoint"> <span>點數：</span>
                                        <div class="account-myPoint-logo">
                                            <img src="./img/other/coin.svg" alt="">
                                        </div>
                                        <?= $Pinfo['member_points'] ?>點
                                    </div>
                                <?php endforeach; ?>
                                <a href="point_coupon_exchange.php"><button class="account-pointExchange">兌換專區</button></a>
                            </div>


                        </div>

                        <div class="account-pc-right">
                            <!-- 上方4大頁籤 -->
                            <div class="account-nav">
                                <div class="account_filter">
                                    <ul class="account_filter_word">
                                        <li class="account_films">影劇</li>
                                        <li class="account_product">商品</li>
                                        <li class="account_forum">討論區</li>
                                        <li class="account_info">個人資料</li>
                                        <li class="account_space01 mw_none"><a href=""></a></li>
                                        <li class="account_space02 mw_none"><a href=""></a></li>
                                    </ul>
                                    <div class="account_underline"></div>
                                </div>
                            </div>

                            <!-- 分類tablet -->
                            <div class="account_bottom">
                                <div id="acc_films" class="tab-inner">
                                    <div class="info_child">
                                        <ul class="info_child_content films_content">
                                            <span>分類 / </span>
                                            <li class="info_child01 filter_4w">我的片單</li>
                                            <li class="info_child02 filter_4w">許願清單</li>
                                            <li class="info_child04 filter_4w">曾經瀏覽</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="acc_product" class="tab-inner">
                                    <div class="info_child">
                                        <ul class="info_child_content">
                                            <span>分類 / </span>
                                            <li class="info_child_order01 filter_4w"><a href="#historyOrder">歷史訂單</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="acc_forum" class="tab-inner">
                                    <div class="info_child">
                                        <ul class="info_child_content forum-content">
                                            <span>分類 / </span>
                                            <li class="info_child_forum01 filter_4w">我的貼文</li>
                                            <li class="info_child_forum02 filter_4w">收藏文章</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="acc_info" class="tab-inner">
                                    <div class="info_child">
                                        <ul class="info_child_content info_content">
                                            <span>分類 / </span>
                                            <li class="info_child_acc01 filter_4w">帳戶資料</li>
                                            <li class="info_child_acc02 filter_4w">一般資料</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 下方顯示內容 -->
                            <div class="account_children">
                                <div class="account_children_films">
                                    <div id="myList" class="child-inner">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">我的片單</div>
                                        </div>
                                        <!-- 我的片單row -->
                                        <div class="actor_flims">
                                            <div class="image__card">
                                                <div class="imge__card__information">

                                                    <div class="information__top">
                                                        <img class="information__video" src="./img/movie-poster/spy.png" alt="">
                                                    </div>

                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                動畫
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw" target="_blank">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                SPY x FAMILY間諜家家酒
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_3 Bottom__display">
                                                            <div class="information__star">
                                                                <div class="information__staricon_box">
                                                                    <img src="./img/icons/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    9.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                輕鬆喜劇 /
                                                            </p>
                                                            <p>
                                                                闔家觀賞
                                                            </p>
                                                        </div>
                                                        <!-- <div class="information__bottom_5 Bottom__display">
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            安妮亞
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            洛伊德
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">

                                                                        <p class="information__actor__name">
                                                                            約兒
                                                                        </p>
                                                                    </a>

                                                                </div> -->

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="actor_flim">
                                                    <div class="ac_flim_pic">
                                                        <img src="./img/movie-poster/spy.webp" alt="">
                                                    </div>
                                                    <div class="ac_flim_name">
                                                        SPY X FAMILY間諜家家酒
                                                    </div>
                                                    <div class="ac_ott">
                                                        <div class="ac_friday">
                                                            <img src="./img/logo/friday_s.svg" alt="">
                                                        </div>
                                                        <div class="ac_iqiyi">
                                                            <img src="./img/logo/iqiyi_s.svg" alt="">
                                                        </div>
                                                        <div class="ac_kktv">
                                                            <img src="./img/logo/kktv_s.svg" alt="">
                                                        </div>
                                                        <div class="ac_netflix">
                                                            <img src="./img/logo/netflix_s.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__card">
                                                <div class="imge__card__information">

                                                    <div class="information__top">
                                                        <img class="information__video" src="./img/movie-poster/w_doctor_hor.jpg" alt="">
                                                    </div>

                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ d-filter-d">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                村裡來了個暴走女外科
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_3 Bottom__display">
                                                            <div class="information__star">
                                                                <div class="information__staricon_box">
                                                                    <img src="./img/icons/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    9.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                輕鬆喜劇 /
                                                            </p>
                                                            <p>
                                                                闔家觀賞
                                                            </p>
                                                        </div>
                                                        <!-- <div class="information__bottom_5 Bottom__display">
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            蔡淑臻
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            朱軒洋
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">

                                                                        <p class="information__actor__name">
                                                                            湯志偉
                                                                        </p>
                                                                    </a>

                                                                </div> -->

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="actor_flim">
                                                    <div class="ac_flim_pic">
                                                        <img src="./img/movie-poster/w_doctor.jpg" alt="">
                                                    </div>
                                                    <div class="ac_flim_name">
                                                        村裡來了個暴走女外科
                                                    </div>
                                                    <div class="ac_ott">
                                                        <div class="ac_netflix">
                                                            <img src="./img/logo/netflix_s.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__card">
                                                <div class="imge__card__information">

                                                    <div class="information__top">
                                                        <img class="information__video" src="./img/movie-poster/love_robot.jpeg" alt="">
                                                    </div>

                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ d-filter-a">
                                                                動畫
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <!-- <a href="#">
                                                                            <p class="bottom_6_icon">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                            </p>
                                                                        </a>
                                                                        <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw"
                                                                            target="_blank">
                                                                            <p class="bottom_6_icon">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </a>
                                                                        </p>
                                                                        <a href="#">
                                                                            <p class="bottom_6_icon">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                            </p>
                                                                        </a> -->
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                愛x死x機器人
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_3 Bottom__display">
                                                            <div class="information__star">
                                                                <div class="information__staricon_box">
                                                                    <img src="./img/icons/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    9.6
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                靈異驚悚 /
                                                            </p>
                                                            <p>
                                                                懸疑推理
                                                            </p>
                                                        </div>
                                                        <!-- <div class="information__bottom_5 Bottom__display">
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            大衛·芬奇
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            喬舒亞·多南
                                                                        </p>
                                                                    </a>

                                                                </div> -->

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="actor_flim">
                                                    <div class="ac_flim_pic">
                                                        <img src="./img/movie-poster/love_robot_ver.jpg" alt="">
                                                    </div>
                                                    <div class="ac_flim_name">
                                                        愛x死x機器人
                                                    </div>
                                                    <div class="ac_ott">
                                                        <div class="ac_netflix">
                                                            <img src="./img/logo/netflix_s.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- 動態產生 -->
                                            <?php foreach ($FLrow as $FLrowinfo) : ?>
                                                <div class="image__card">
                                                    <div class="imge__card__information">

                                                        <div class="information__top">
                                                            <img class="information__video" src="./videodb/video/<?= $FLrowinfo['video_poster_hor'] ?>" alt="">
                                                        </div>

                                                        <div class="information__bottom">
                                                            <div class="information__bottom_1 Bottom__display">
                                                                <p class="information__typ" style="<?php
                                                                                                    $ottcolor = [
                                                                                                        '2' => '#10FFA2',
                                                                                                        '3' => '#1CD8FF',
                                                                                                        '1' => '#FC6F51',
                                                                                                    ];
                                                                                                    if ($FLrowinfo['video_genre'] == '影劇') {
                                                                                                        $color = $ottcolor['1'];
                                                                                                    } else if ($FLrowinfo['video_genre'] == '電影') {
                                                                                                        $color = $ottcolor['2'];
                                                                                                    } else if ($FLrowinfo['video_genre'] == '動畫') {
                                                                                                        $color = $ottcolor['3'];
                                                                                                    };
                                                                                                    echo 'color:' . $color . '; border: 1px solid' . $color;
                                                                                                    ?>"><?= $FLrowinfo['video_genre'] ?>
                                                                </p>

                                                                <div class="bottom_6_icon_box">
                                                                    <?php
                                                                    $ottdata = [
                                                                        '4' => 'friday_s.svg',
                                                                        '2' => 'iqiyi_s.svg',
                                                                        '3' => 'kktv_s.svg',
                                                                        '1' => 'netflix_s.svg',
                                                                    ];

                                                                    $ar = json_decode($FLrowinfo['video_ott'], true);
                                                                    if ($ar and count($ar)) {
                                                                        foreach ($ar as $v) {
                                                                            if (!empty($ottdata[$v])) {
                                                                                echo '<a href="#">
                                                                                            <p class="bottom_6_icon">
                                                                                                <img src="./img/logo/' . $ottdata[$v] . '" alt="">
                                                                                            </p>
                                                                                        </a>';
                                                                            }
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>

                                                            </div>
                                                            <div class="information__bottom_2 Bottom__display">
                                                                <p class="information__name">
                                                                    <?= $FLrowinfo['video_name'] ?>
                                                                </p>
                                                            </div>
                                                            <div class="information__bottom_3 Bottom__display">
                                                                <div class="information__star">
                                                                    <div class="information__staricon_box">
                                                                        <img src="./img/icons/start.svg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="information__point">
                                                                    <p>
                                                                        <?= $FLrowinfo['video_rating'] ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="information__bottom_4 Bottom__display">
                                                                <p>
                                                                    <?= str_replace('，', ' / ', str_replace(' ', '', $FLrowinfo['video_style'])) ?>
                                                                </p>
                                                                <!-- <p>
                                                                                奇幻冒險
                                                                            </p> -->
                                                            </div>
                                                            <!-- <div class="information__bottom_5 Bottom__display">
                                                                            <a href="#">
                                                                                <p class="information__actor__name">
                                                                                    孔劉
                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">
                                                                                <p class="information__actor__name">
                                                                                    金高銀
                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">
                                                                                    劉寅娜
                                                                                </p>
                                                                            </a>

                                                                        </div> -->

                                                            <div class="information__bottom_6-5 Bottom__display">
                                                                <a href="./single-movie-page0511.html">
                                                                    <p class="detail">
                                                                        查看詳細...
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="actor_flim">
                                                        <div class="ac_flim_pic">
                                                            <img src="./videodb/video/<?= $FLrowinfo['video_poster_ver'] ?>" alt="">
                                                        </div>
                                                        <div class="ac_flim_name">
                                                            <?= $FLrowinfo['video_name'] ?>
                                                        </div>

                                                        <div class="ac_ott">
                                                            <?php
                                                            $ottdata = [
                                                                '4' => 'friday_s.svg',
                                                                '2' => 'iqiyi_s.svg',
                                                                '3' => 'kktv_s.svg',
                                                                '1' => 'netflix_s.svg',
                                                            ];
                                                            $ar = json_decode($FLrowinfo['video_ott'], true);
                                                            if ($ar and count($ar)) {
                                                                foreach ($ar as $v) {
                                                                    if (!empty($ottdata[$v])) {
                                                                        echo '<a href="#">
                                                                                <div class="ac_netflix">
                                                                                    <img src="./img/logo/' . $ottdata[$v] . '" alt="">
                                                                                </div>
                                                                                
                                                                            </a>';
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>

                                    <div id="myWishList" class="child-inner">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">許願清單</div>
                                        </div>

                                        <!-- 許願清單 -->
                                        
                                        <div class="wishlist_cards">
                                            <?php foreach ($getW as $Winfo) : ?>
                                                <div class="wishcard">
                                                    <div class="wish_pic">
                                                        <img src="./img/movie-poster/<?= $Winfo['wish_pic'] ?>" alt="">
                                                    </div>
                                                    <div class="wish_words">
                                                        <div class="wish_word_top">
                                                            <div class="wish_type" style="<?php
                                                                                                    $ottcolor = [
                                                                                                        '4' => '#FEB73A',
                                                                                                        '2' => '#10FFA2',
                                                                                                        '3' => '#1CD8FF',
                                                                                                        '1' => '#FC6F51',
                                                                                                    ];
                                                                                                    if ($Winfo['wish_label'] == '影劇') {
                                                                                                        $color = $ottcolor['1'];
                                                                                                    } else if ($Winfo['wish_label'] == '電影') {
                                                                                                        $color = $ottcolor['2'];
                                                                                                    } else if ($Winfo['wish_label'] == '動畫') {
                                                                                                        $color = $ottcolor['3'];
                                                                                                    }else if ($Winfo['wish_label'] == '綜藝') {
                                                                                                        $color = $ottcolor['4'];
                                                                                                    };
                                                                                                    echo 'color:' . $color . '; border: 1px solid' . $color;
                                                                                                    ?>">

                                                            

                                                                <?= $Winfo['wish_label'] ?>
                                                            </div>
                                                            <button class="wish_btn">
                                                                <div class="wish_icon">
                                                                    <img src="./img/icons/wish.svg" alt="">
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div class="wish_word_middle">
                                                            <?= $Winfo['wish_name'] ?>
                                                        </div>
                                                        <div class="wish_word_bottom">
                                                            <div class="wish_total progress-striped">
                                                                <div class="wish_people" style="width: <?= $Winfo['wish_number']*0.04 ?>%"></div>
                                                            </div>
                                                            <div class="wish_vote">
                                                                已有 <span><?= $Winfo['wish_number'] ?></span> 人參與許願
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            </div>
                                            
                                        
                                        </div>

                                    <!-- 瀏覽紀錄 -->
                                    <div id="myHistory" class="child-inner">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">曾經瀏覽</div>
                                        </div>

                                        <div class="actor_flims">
                                            <div class="image__card">
                                                <div class="imge__card__information">

                                                    <div class="information__top">
                                                        <img class="information__video" src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>

                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ d-filter-d">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">

                                                                <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw" target="_blank">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <!-- <a href="#">
                                                                            <p class="bottom_6_icon">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                            </p>
                                                                        </a> -->
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                孤單又燦爛的神-鬼怪
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_3 Bottom__display">
                                                            <div class="information__star">
                                                                <div class="information__staricon_box">
                                                                    <img src="./img/icons/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    9.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                奇幻冒險
                                                            </p>
                                                        </div>
                                                        <!-- <div class="information__bottom_5 Bottom__display">
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            孔劉
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">
                                                                        <p class="information__actor__name">
                                                                            金高銀
                                                                        </p>
                                                                    </a>
                                                                    <span class="speace"> / </span>
                                                                    <a href="#">

                                                                        <p class="information__actor__name">
                                                                            劉寅娜
                                                                        </p>
                                                                    </a>

                                                                </div> -->

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up add_movies">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="actor_flim">
                                                    <div class="ac_flim_pic">
                                                        <img src="./img/center/h_1.jpeg" alt="">
                                                    </div>
                                                    <div class="ac_flim_name">
                                                        孤單又燦爛的神－鬼怪
                                                    </div>
                                                    <div class="ac_ott">

                                                        <div class="ac_iqiyi">
                                                            <img src="./img/logo/iqiyi_s.svg" alt="">
                                                        </div>
                                                        <!-- <div class="ac_kktv">
                                                                    <img src="./img/logo/kktv_s.svg" alt="">
                                                                </div> -->
                                                        <div class="ac_netflix">
                                                            <img src="./img/logo/netflix_s.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 動態產生 -->
                                            <?php foreach ($HLrow as $HLrowinfo) : ?>
                                                <div class="image__card">
                                                    <div class="imge__card__information">

                                                        <div class="information__top">
                                                            <img class="information__video" src="./videodb/video/<?= $HLrowinfo['video_poster_hor'] ?>" alt="">
                                                        </div>

                                                        <div class="information__bottom">
                                                            <div class="information__bottom_1 Bottom__display">

                                                                <p class="information__typ" style="<?php
                                                                                                    $ottcolor = [
                                                                                                        '2' => '#10FFA2',
                                                                                                        '3' => '#1CD8FF',
                                                                                                        '1' => '#FC6F51',
                                                                                                    ];
                                                                                                    if ($HLrowinfo['video_genre'] == '影劇') {
                                                                                                        $color = $ottcolor['1'];
                                                                                                    } else if ($HLrowinfo['video_genre'] == '電影') {
                                                                                                        $color = $ottcolor['2'];
                                                                                                    } else if ($HLrowinfo['video_genre'] == '動畫') {
                                                                                                        $color = $ottcolor['3'];
                                                                                                    };
                                                                                                    echo 'color:' . $color . '; border: 1px solid' . $color;
                                                                                                    ?>"><?= $HLrowinfo['video_genre'] ?>
                                                                </p>

                                                                <div class="bottom_6_icon_box">
                                                                    <?php
                                                                    $ottdata = [
                                                                        '4' => 'friday_s.svg',
                                                                        '2' => 'iqiyi_s.svg',
                                                                        '3' => 'kktv_s.svg',
                                                                        '1' => 'netflix_s.svg',
                                                                    ];

                                                                    $ar = json_decode($HLrowinfo['video_ott'], true);
                                                                    if ($ar and count($ar)) {
                                                                        foreach ($ar as $v) {
                                                                            if (!empty($ottdata[$v])) {
                                                                                echo '<a href="#">
                                                                                            <p class="bottom_6_icon">
                                                                                                <img src="./img/logo/' . $ottdata[$v] . '" alt="">
                                                                                            </p>
                                                                                        </a>';
                                                                            }
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>

                                                            </div>
                                                            <div class="information__bottom_2 Bottom__display">
                                                                <p class="information__name">
                                                                    <?= $HLrowinfo['video_name'] ?>
                                                                </p>
                                                            </div>
                                                            <div class="information__bottom_3 Bottom__display">
                                                                <div class="information__star">
                                                                    <div class="information__staricon_box">
                                                                        <img src="./img/icons/start.svg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="information__point">
                                                                    <p>
                                                                        <?= $HLrowinfo['video_rating'] ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="information__bottom_4 Bottom__display">
                                                                <p>
                                                                    <?= str_replace('，', ' / ', str_replace(' ', '', $HLrowinfo['video_style'])) ?>
                                                                </p>
                                                                <!-- <p>
                                                                                奇幻冒險
                                                                            </p> -->
                                                            </div>
                                                            <!-- <div class="information__bottom_5 Bottom__display">
                                                                            <a href="#">
                                                                                <p class="information__actor__name">
                                                                                    孔劉
                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">
                                                                                <p class="information__actor__name">
                                                                                    金高銀
                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">
                                                                                    劉寅娜
                                                                                </p>
                                                                            </a>

                                                                        </div> -->

                                                            <div class="information__bottom_6-5 Bottom__display">
                                                                <a href="./single-movie-page0511.html">
                                                                    <p class="detail">
                                                                        查看詳細...
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div class="information__bottom_6 Bottom__display">
                                                                <button class="push__up add_movies">
                                                                    <p>
                                                                        ＋ 加入片單
                                                                    </p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="actor_flim">
                                                        <div class="ac_flim_pic">
                                                            <img src="./videodb/video/<?= $HLrowinfo['video_poster_ver'] ?>" alt="">
                                                        </div>
                                                        <div class="ac_flim_name">
                                                            <?= $HLrowinfo['video_name'] ?>
                                                        </div>
                                                        <div class="ac_ott">
                                                            <?php
                                                            $ottdata = [
                                                                '4' => 'friday_s.svg',
                                                                '2' => 'iqiyi_s.svg',
                                                                '3' => 'kktv_s.svg',
                                                                '1' => 'netflix_s.svg',
                                                            ];
                                                            $ar = json_decode($HLrowinfo['video_ott'], true);
                                                            if ($ar and count($ar)) {
                                                                foreach ($ar as $v) {
                                                                    if (!empty($ottdata[$v])) {
                                                                        echo '<a href="#">
                                                                                <div class="ac_netflix">
                                                                                    <img src="./img/logo/' . $ottdata[$v] . '" alt="">
                                                                                </div>
                                                                                
                                                                            </a>';
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="account_children_mall">
                                    <!-- 歷史訂單 -->
                                    <div id="info_mall" class="child-inner hs-order">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">歷史訂單</div>
                                        </div>
                                        <div class="account-order-table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>訂單編號</th>
                                                        <th>訂購日期</th>
                                                        <th>金額總計</th>
                                                        <th>付款方式</th>
                                                        <th>訂單狀態</th>
                                                        <th>配送情況</th>
                                                        <th>詳情</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td class="order_tit" data-title="訂單編號">087-016836-003</td>
                                                        <td data-title="訂購日期">2022-06-08 09:51:20</td>
                                                        <td data-title="金額總計">NTD4,745</td>
                                                        <td data-title="付款方式">線上刷卡</td>
                                                        <td data-title="訂單狀態">訂單成立</td>
                                                        <td data-title="配送情況">備貨中</td>
                                                        <td class="orderDetail-btn" data-title="詳情"><a href="#">詳情</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="order_tit" data-title="訂單編號">066-236126-323</td>
                                                        <td data-title="訂購日期">2022-04-25 12:22:10</td>
                                                        <td data-title="金額總計">NTD1,239</td>
                                                        <td data-title="付款方式">線上刷卡</td>
                                                        <td data-title="訂單狀態">已完成</td>
                                                        <td data-title="配送情況">已取貨</td>
                                                        <td data-title="詳情"><a href="#">詳情</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="order_tit" data-title="訂單編號">092-123946-129</td>
                                                        <td data-title="訂購日期">2022-01-03 23:11:20</td>
                                                        <td data-title="金額總計">NTD399</td>
                                                        <td data-title="付款方式">線上刷卡</td>
                                                        <td data-title="訂單狀態">已完成</td>
                                                        <td data-title="配送情況">已取貨</td>
                                                        <td data-title="詳情"><a href="#">詳情</a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- 訂單明細 -->
                                    <div id="info_mall-02 order-detail " class="child-inner cuxian">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">訂單明細</div>
                                        </div>

                                        <div class="account-order-table-dd">
                                            <!-- 訂單明細1 -->
                                            <table class="orderDetail-table-1">
                                                <thead>
                                                    <tr>
                                                        <th>訂單編號</th>
                                                        <th>訂購日期</th>
                                                        <th>訂單狀態</th>
                                                        <th>配送情況</th>
                                                        <th>收件人</th>
                                                        <th>收件地址</th>
                                                        <th>付款方式</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="order_tit" data-title="訂單編號">087-016836-003</td>
                                                        <td data-title="訂購日期">2022-06-08 09:51:20</td>
                                                        <td data-title="訂單狀態">訂單成立</td>
                                                        <td data-title="配送情況">備貨中</td>
                                                        <td data-title="收件人">王笠鴿</td>
                                                        <td data-title="收件地址">臺北市信義區松高路68號</td>
                                                        <td data-title="付款方式">線上刷卡</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <br>
                                            <!-- 訂單明細2 -->
                                            <table class="orderDetail-table-2 od-pc">
                                                <thead>
                                                    <tr>
                                                        <th>商品名</th>
                                                        <th>選項</th>
                                                        <th>尺寸</th>
                                                        <th>價格</th>
                                                        <th>數量</th>
                                                        <th>小計</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="od-product">
                                                            <div class="od-num">1.</div>
                                                            <div class="od-pic">
                                                                <img src="./img/mall/1.jpg" alt="">
                                                            </div>
                                                            <div class="od-nam">孤單又燦爛的神-鬼怪 周邊娃娃</div>
                                                        </td>
                                                        <td>蕎麥君</td>
                                                        <td>M</td>
                                                        <td>NTD999</td>
                                                        <td>5</td>
                                                        <td class="gw">NTD4,745</td>
                                                        
                                                </tbody>
                                            </table>

                                            <table class="orderDetail-table-2 od-mweb">

                                                <thead>
                                                    <tr>
                                                        <th>商品名</th>
                                                        <th>選項</th>
                                                        <th>尺寸</th>
                                                        <th>價格</th>
                                                        <th>數量</th>
                                                        <th>小計</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="od-left">
                                                            <div class="od-pic">
                                                                <img src="./img/mall/1.jpg" alt="">
                                                            </div>
                                                            <div class="od-info">
                                                                <div class="od-nam">孤單又燦爛的神-鬼怪 周邊娃娃</div>
                                                                <div class="od-col">選項：蕎麥君</div>
                                                                <div class="od-size">尺寸：M</div>
                                                            </div>
                                                        </td>
                                                        <td class="od-right">
                                                            <div class="od-quantity">
                                                                數量：5
                                                            </div>
                                                            <div class="od-price">
                                                                NTD999
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <br>
                                            <!-- 訂單明細3 -->
                                            <table class="orderDetail-table-1">
                                                <thead>
                                                    <tr>
                                                        <th>商品總計</th>
                                                        <th>運費</th>
                                            
                                                        <th>使用優惠券</th>
                                                        <th>總計金額</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-title="商品總計">NTD 4,995</td>
                                                        <td data-title="運費">NTD 0</td>
                                                        
                                                        <td data-title="使用優惠券">NTD 250</td>
                                                        <td data-title="總計金額"> <span class="gw">NTD 4,745</span> </td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <a href="#"><button class="account-pointExchange od-btn">返回歷史訂單</button></a>
                                    </div>
                                </div>

                                <div class="account_children_forum">

                                    <div id="myArtCollect" class="child-inner">
                                        <div class="myArtCollect-top">
                                            <div class="info_acc_title">
                                                <div class="stick_mobile"></div>
                                                <div class="info_acc_word">收藏文章</div>
                                            </div>
                                            <div class="art-edit">
                                                <button class="art-setting">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1427_26040)">
                                                            <path d="M13.5307 7.99493C13.4105 7.85808 13.3442 7.68216 13.3442 7.5C13.3442 7.31784 13.4105 7.14192 13.5307 7.00507L14.4906 5.92521C14.5964 5.80723 14.6621 5.65878 14.6782 5.50115C14.6944 5.34353 14.6602 5.18483 14.5806 5.04783L13.0808 2.45319C13.002 2.31635 12.882 2.20788 12.7379 2.14324C12.5938 2.07861 12.433 2.06111 12.2784 2.09324L10.8686 2.3782C10.6892 2.41526 10.5025 2.38539 10.3436 2.29421C10.1847 2.20303 10.0647 2.05685 10.0062 1.88326L9.54879 0.510951C9.49848 0.362005 9.40264 0.232637 9.2748 0.141132C9.14696 0.0496274 8.9936 0.000614014 8.83639 0.00101983H5.83679C5.67327 -0.00751554 5.51144 0.0377096 5.37603 0.129788C5.24062 0.221866 5.13907 0.355736 5.0869 0.510951L4.66695 1.88326C4.60846 2.05685 4.48846 2.20303 4.32958 2.29421C4.17071 2.38539 3.98396 2.41526 3.80457 2.3782L2.35727 2.09324C2.2107 2.07252 2.06128 2.09565 1.92784 2.15971C1.79439 2.22376 1.68289 2.32587 1.60737 2.45319L0.107574 5.04783C0.0259547 5.1833 -0.0107437 5.34111 0.00272479 5.49869C0.0161933 5.65627 0.0791392 5.80556 0.182563 5.92521L1.13493 7.00507C1.25516 7.14192 1.32146 7.31784 1.32146 7.5C1.32146 7.68216 1.25516 7.85808 1.13493 7.99493L0.182563 9.07479C0.0791392 9.19444 0.0161933 9.34373 0.00272479 9.50131C-0.0107437 9.65889 0.0259547 9.8167 0.107574 9.95217L1.60737 12.5468C1.68618 12.6837 1.80618 12.7921 1.95026 12.8568C2.09434 12.9214 2.25515 12.9389 2.40976 12.9068L3.81957 12.6218C3.99896 12.5847 4.18571 12.6146 4.34458 12.7058C4.50345 12.797 4.62346 12.9431 4.68195 13.1167L5.13939 14.489C5.19157 14.6443 5.29311 14.7781 5.42852 14.8702C5.56393 14.9623 5.72576 15.0075 5.88929 14.999H8.88888C9.04609 14.9994 9.19945 14.9504 9.32729 14.8589C9.45513 14.7674 9.55097 14.638 9.60128 14.489L10.0587 13.1167C10.1172 12.9431 10.2372 12.797 10.3961 12.7058C10.555 12.6146 10.7417 12.5847 10.9211 12.6218L12.3309 12.9068C12.4855 12.9389 12.6463 12.9214 12.7904 12.8568C12.9345 12.7921 13.0545 12.6837 13.1333 12.5468L14.6331 9.95217C14.7127 9.81517 14.7469 9.65647 14.7307 9.49885C14.7146 9.34122 14.6489 9.19277 14.5431 9.07479L13.5307 7.99493ZM12.4134 8.9998L13.0133 9.6747L12.0534 11.3395L11.1686 11.1595C10.6285 11.0491 10.0666 11.1408 9.58973 11.4173C9.11281 11.6938 8.75401 12.1357 8.58142 12.6593L8.29646 13.4992H6.37672L6.10676 12.6443C5.93417 12.1208 5.57537 11.6788 5.09845 11.4023C4.62153 11.1258 4.0597 11.0341 3.51961 11.1445L2.63473 11.3245L1.65986 9.66721L2.25978 8.9923C2.6287 8.57984 2.83265 8.04587 2.83265 7.4925C2.83265 6.93913 2.6287 6.40517 2.25978 5.9927L1.65986 5.3178L2.61973 3.66802L3.50461 3.848C4.0447 3.9584 4.60653 3.86665 5.08345 3.59018C5.56037 3.31371 5.91917 2.87175 6.09176 2.3482L6.37672 1.50082H8.29646L8.58142 2.3557C8.75401 2.87925 9.11281 3.32121 9.58973 3.59768C10.0666 3.87415 10.6285 3.9659 11.1686 3.8555L12.0534 3.67552L13.0133 5.34029L12.4134 6.0152C12.0486 6.42672 11.8472 6.95759 11.8472 7.5075C11.8472 8.05741 12.0486 8.58828 12.4134 8.9998V8.9998ZM7.33659 4.50041C6.74333 4.50041 6.16339 4.67633 5.67011 5.00593C5.17683 5.33553 4.79236 5.804 4.56533 6.35211C4.3383 6.90021 4.27889 7.50333 4.39463 8.08519C4.51037 8.66706 4.79606 9.20153 5.21556 9.62103C5.63506 10.0405 6.16954 10.3262 6.7514 10.442C7.33326 10.5577 7.93638 10.4983 8.48448 10.2713C9.03259 10.0442 9.50106 9.65976 9.83066 9.16648C10.1603 8.6732 10.3362 8.09326 10.3362 7.5C10.3362 6.70446 10.0202 5.9415 9.45762 5.37897C8.89509 4.81644 8.13213 4.50041 7.33659 4.50041V4.50041ZM7.33659 8.9998C7.03996 8.9998 6.74999 8.91183 6.50335 8.74703C6.25671 8.58223 6.06448 8.348 5.95096 8.07395C5.83744 7.79989 5.80774 7.49834 5.86561 7.2074C5.92348 6.91647 6.06632 6.64923 6.27607 6.43948C6.48582 6.22973 6.75306 6.08689 7.04399 6.02902C7.33493 5.97115 7.63649 6.00085 7.91054 6.11437C8.18459 6.22788 8.41883 6.42012 8.58363 6.66676C8.74842 6.9134 8.83639 7.20337 8.83639 7.5C8.83639 7.89777 8.67837 8.27925 8.39711 8.56052C8.11584 8.84178 7.73436 8.9998 7.33659 8.9998Z" fill="#10FFA2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1427_26040">
                                                                <rect width="14.7346" height="15" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                                <button class="art-trash appear">
                                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1427_26050)">
                                                            <path d="M5.25 12C5.44891 12 5.63968 11.921 5.78033 11.7803C5.92098 11.6397 6 11.4489 6 11.25V6.75C6 6.55109 5.92098 6.36032 5.78033 6.21967C5.63968 6.07902 5.44891 6 5.25 6C5.05109 6 4.86032 6.07902 4.71967 6.21967C4.57902 6.36032 4.5 6.55109 4.5 6.75V11.25C4.5 11.4489 4.57902 11.6397 4.71967 11.7803C4.86032 11.921 5.05109 12 5.25 12ZM12.75 3H9.75V2.25C9.75 1.65326 9.51295 1.08097 9.09099 0.65901C8.66903 0.237053 8.09674 0 7.5 0H6C5.40326 0 4.83097 0.237053 4.40901 0.65901C3.98705 1.08097 3.75 1.65326 3.75 2.25V3H0.75C0.551088 3 0.360322 3.07902 0.21967 3.21967C0.0790176 3.36032 0 3.55109 0 3.75C0 3.94891 0.0790176 4.13968 0.21967 4.28033C0.360322 4.42098 0.551088 4.5 0.75 4.5H1.5V12.75C1.5 13.3467 1.73705 13.919 2.15901 14.341C2.58097 14.7629 3.15326 15 3.75 15H9.75C10.3467 15 10.919 14.7629 11.341 14.341C11.7629 13.919 12 13.3467 12 12.75V4.5H12.75C12.9489 4.5 13.1397 4.42098 13.2803 4.28033C13.421 4.13968 13.5 3.94891 13.5 3.75C13.5 3.55109 13.421 3.36032 13.2803 3.21967C13.1397 3.07902 12.9489 3 12.75 3ZM5.25 2.25C5.25 2.05109 5.32902 1.86032 5.46967 1.71967C5.61032 1.57902 5.80109 1.5 6 1.5H7.5C7.69891 1.5 7.88968 1.57902 8.03033 1.71967C8.17098 1.86032 8.25 2.05109 8.25 2.25V3H5.25V2.25ZM10.5 12.75C10.5 12.9489 10.421 13.1397 10.2803 13.2803C10.1397 13.421 9.94891 13.5 9.75 13.5H3.75C3.55109 13.5 3.36032 13.421 3.21967 13.2803C3.07902 13.1397 3 12.9489 3 12.75V4.5H10.5V12.75ZM8.25 12C8.44891 12 8.63968 11.921 8.78033 11.7803C8.92098 11.6397 9 11.4489 9 11.25V6.75C9 6.55109 8.92098 6.36032 8.78033 6.21967C8.63968 6.07902 8.44891 6 8.25 6C8.05109 6 7.86032 6.07902 7.71967 6.21967C7.57902 6.36032 7.5 6.55109 7.5 6.75V11.25C7.5 11.4489 7.57902 11.6397 7.71967 11.7803C7.86032 11.921 8.05109 12 8.25 12Z" fill="#10FFA2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1427_26050">
                                                                <rect width="13.5" height="15" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- 假的一鍵刪除用 -->
                                        <div class="art-card co-art-card short-one">
                                            <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                            </svg>
                                            <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                            </svg>
                                            
                                        </div>
                                        <div class="art-card co-art-card">
                                            <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                            </svg>
                                            <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                            </svg>
                                            <div class="card-article d-flex justify-between align-item-center">
                                                <!-- 文章內文(左邊) -->
                                                <div class="flex-grow">
                                                    <div class="d-flex justify-between align-item-center">
                                                        <div class="d-flex">
                                                            <!-- 文章分類 -->
                                                            <a class="d-filter d-filter-a mr-20" href="#">動畫</a>
                                                            <!-- 文章作者 -->
                                                            <div class="d-flex align-item-center">
                                                                <!-- 文章作者圖片 -->
                                                                <div class="ar-img-wrap mr-10">
                                                                    <a href="#"><img src="./img/member/member_pic3.jpeg" alt=""></a>
                                                                </div>
                                                                <a href="#"><span>Elsa</span></a>
                                                            </div>
                                                        </div>
                                                        <!-- 發文時間 -->
                                                        <div><span class="pc-time">2022-06-03 09:37:27</span></div>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <h2 class="mt-10 art-title too_long">#台劇《村裡來了個暴走女外科》原聲帶音樂分享 有雷</h2>
                                                        </a>
                                                        <p class="mt-10 too_long">最近很常在臉書刷到一部台劇的預告，而且預告就超火辣XD就好奇點開這部劇，看得差點笑瘋 沒錯就是由...</p>
                                                    </div>
                                                    <!-- 愛心 留言 收藏 hashtag -->
                                                    <div class="d-flex justify-between mt-30">
                                                        <!-- 包svgㄉdiv -->
                                                        <div class="posticon-hashtag">
                                                            <div class="d-flex align-item-center">
                                                                <input type="button" hidden>
                                                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1427_26189)">
                                                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#10FFA2" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1427_26189">
                                                                            <rect width="17.5403" height="15" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">22</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#10FFA2" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">43</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" fill="#10FFA2" />
                                                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#1A1D24" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">19</span>
                                                            </div>
                                                            <div class="art-hash">
                                                                <ul class="d-flex ar-filter">
                                                                    <li class="filter_4w"><a href="#">#暴走女外科</a></li>
                                                                    <li class="filter_4w ml-10"><a href="#">#蔡淑臻</a></li>
                                                                    <li class="filter_3w ml-10"><a href="#">#有雷</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- 文章圖(右邊) -->
                                                <div>
                                                    <div class="art-mb">
                                                        <div><span class="mb-time">2022-06-03 08:25:43</span></div>
                                                        <div class="card-img-wrap ml-20 mb-artpic">
                                                            <img src="./img/movie-poster/w_doctor.jpg" alt="">
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="art-card co-art-card">
                                            <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                            </svg>
                                            <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                            </svg>
                                            <div class="card-article d-flex justify-between align-item-center">
                                                <!-- 文章內文(左邊) -->
                                                <div class="flex-grow">
                                                    <div class="d-flex justify-between align-item-center">
                                                        <div class="d-flex">
                                                            <!-- 文章分類 -->
                                                            <a class="d-filter d-filter-d mr-20" href="#">影劇</a>
                                                            <!-- 文章作者 -->
                                                            <div class="d-flex align-item-center">
                                                                <!-- 文章作者圖片 -->
                                                                <div class="ar-img-wrap mr-10">
                                                                    <a href="#"><img src="./img/member/member_pic4.jpeg" alt=""></a>
                                                                </div>
                                                                <a href="#"><span>Anya</span></a>
                                                            </div>
                                                        </div>
                                                        <!-- 發文時間 -->
                                                        <div><span class="pc-time">2022-06-02 09:37:27</span></div>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <h2 class="mt-10 art-title too_long">✨2022韓劇清單✨男神們要回歸了</h2>
                                                        </a>
                                                        <p class="mt-10 too_long">以下排序不分排名，也並非播出時間順序，隨機排序：1.《警校菜鳥》姜丹尼爾 2.《社內相親》安孝燮 3《...</p>
                                                    </div>
                                                    <!-- 愛心 留言 收藏 hashtag -->
                                                    <div class="d-flex justify-between mt-30">
                                                        <!-- 包svgㄉdiv -->
                                                        <div class="posticon-hashtag">
                                                            <div class="d-flex align-item-center">
                                                                <input type="button" hidden>
                                                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1427_26189)">
                                                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#10FFA2" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1427_26189">
                                                                            <rect width="17.5403" height="15" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">36</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#10FFA2" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">48</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" fill="#10FFA2" />
                                                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#1A1D24" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">32</span>
                                                            </div>
                                                            <div class="art-hash">
                                                                <ul class="d-flex ar-filter">
                                                                    <li class="filter_4w"><a href="#">#韓劇推薦</a></li>
                                                                    <li class="filter_4w ml-10"><a href="#">#安孝燮</a></li>
                                                                    <li class="filter_3w ml-10"><a href="#">#南柱赫</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- 文章圖(右邊) -->
                                                <div>
                                                    <div class="art-mb">
                                                        <div><span class="mb-time">2022-06-02 09:37:27</span></div>
                                                        <div class="card-img-wrap ml-20 mb-artpic">
                                                            <img src="./img/member/account.jfif" alt="">
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="art-card co-art-card">
                                            <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                            </svg>
                                            <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                            </svg>
                                            <div class="card-article d-flex justify-between align-item-center">
                                                <!-- 文章內文(左邊) -->
                                                <div class="flex-grow">
                                                    <div class="d-flex justify-between align-item-center">
                                                        <div class="d-flex">
                                                            <!-- 文章分類 -->
                                                            <a class="d-filter d-filter-m mr-20" href="#">電影</a>
                                                            <!-- 文章作者 -->
                                                            <div class="d-flex align-item-center">
                                                                <!-- 文章作者圖片 -->
                                                                <div class="ar-img-wrap mr-10">
                                                                    <a href="#"><img src="./img/member/member_pic3.jpeg" alt=""></a>
                                                                </div>
                                                                <a href="#"><span>Elsa</span></a>
                                                            </div>
                                                        </div>
                                                        <!-- 發文時間 -->
                                                        <div><span class="pc-time">2022-06-06 19:21:48</span></div>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <h2 class="mt-10 art-title too_long">⚠️重度雷 媽的多重宇宙影評</h2>
                                                        </a>
                                                        <p class="mt-10 too_long">媽的多重宇宙 這部我打得很主觀 其實我想了整整一天才有辦法恢復情緒好好講解影評 本篇不涉及爛翻譯的問題...</p>
                                                    </div>
                                                    <!-- 愛心 留言 收藏 hashtag -->
                                                    <div class="d-flex justify-between mt-30">
                                                        <!-- 包svgㄉdiv -->
                                                        <div class="posticon-hashtag">
                                                            <div class="d-flex align-item-center">
                                                                <input type="button" hidden>
                                                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1427_26189)">
                                                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#10FFA2" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1427_26189">
                                                                            <rect width="17.5403" height="15" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">25</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#10FFA2" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">45</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" fill="#10FFA2" />
                                                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#1A1D24" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">21</span>
                                                            </div>
                                                            <div class="art-hash">
                                                                <ul class="d-flex ar-filter">
                                                                    <li class="filter_4w"><a href="#">#電影</a></li>
                                                                    <li class="filter_4w ml-10"><a href="#">#媽的</a></li>
                                                                    <li class="filter_3w ml-10"><a href="#">#多重宇宙</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- 文章圖(右邊) -->
                                                <div>
                                                    <div class="art-mb">
                                                        <div><span class="mb-time">2022-06-01 11:16:07</span></div>
                                                        <div class="card-img-wrap ml-20 mb-artpic">
                                                            <img src="./img/movie-poster/mama.jpg" alt="">
                                                        </div>                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="no-article">
                                            <div class="no-article-pic">
                                                <img src="./img/talls_img/crying.gif" alt="">
                                            </div>
                                            <div class="no-article-word">
                                                目前沒有收藏的文章
                                            </div>
                                            <div class="no-article-btn">
                                                <a href="forum.php">快去討論區逛逛吧！</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="myArtPost" class="child-inner">
                                        <div class="myArtCollect-top">
                                            <div class="info_acc_title">
                                                <div class="stick_mobile"></div>
                                                <div class="info_acc_word">我的貼文</div>
                                            </div>
                                            <div class="art-edit">
                                                <button class="art-setting">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1427_26040)">
                                                            <path d="M13.5307 7.99493C13.4105 7.85808 13.3442 7.68216 13.3442 7.5C13.3442 7.31784 13.4105 7.14192 13.5307 7.00507L14.4906 5.92521C14.5964 5.80723 14.6621 5.65878 14.6782 5.50115C14.6944 5.34353 14.6602 5.18483 14.5806 5.04783L13.0808 2.45319C13.002 2.31635 12.882 2.20788 12.7379 2.14324C12.5938 2.07861 12.433 2.06111 12.2784 2.09324L10.8686 2.3782C10.6892 2.41526 10.5025 2.38539 10.3436 2.29421C10.1847 2.20303 10.0647 2.05685 10.0062 1.88326L9.54879 0.510951C9.49848 0.362005 9.40264 0.232637 9.2748 0.141132C9.14696 0.0496274 8.9936 0.000614014 8.83639 0.00101983H5.83679C5.67327 -0.00751554 5.51144 0.0377096 5.37603 0.129788C5.24062 0.221866 5.13907 0.355736 5.0869 0.510951L4.66695 1.88326C4.60846 2.05685 4.48846 2.20303 4.32958 2.29421C4.17071 2.38539 3.98396 2.41526 3.80457 2.3782L2.35727 2.09324C2.2107 2.07252 2.06128 2.09565 1.92784 2.15971C1.79439 2.22376 1.68289 2.32587 1.60737 2.45319L0.107574 5.04783C0.0259547 5.1833 -0.0107437 5.34111 0.00272479 5.49869C0.0161933 5.65627 0.0791392 5.80556 0.182563 5.92521L1.13493 7.00507C1.25516 7.14192 1.32146 7.31784 1.32146 7.5C1.32146 7.68216 1.25516 7.85808 1.13493 7.99493L0.182563 9.07479C0.0791392 9.19444 0.0161933 9.34373 0.00272479 9.50131C-0.0107437 9.65889 0.0259547 9.8167 0.107574 9.95217L1.60737 12.5468C1.68618 12.6837 1.80618 12.7921 1.95026 12.8568C2.09434 12.9214 2.25515 12.9389 2.40976 12.9068L3.81957 12.6218C3.99896 12.5847 4.18571 12.6146 4.34458 12.7058C4.50345 12.797 4.62346 12.9431 4.68195 13.1167L5.13939 14.489C5.19157 14.6443 5.29311 14.7781 5.42852 14.8702C5.56393 14.9623 5.72576 15.0075 5.88929 14.999H8.88888C9.04609 14.9994 9.19945 14.9504 9.32729 14.8589C9.45513 14.7674 9.55097 14.638 9.60128 14.489L10.0587 13.1167C10.1172 12.9431 10.2372 12.797 10.3961 12.7058C10.555 12.6146 10.7417 12.5847 10.9211 12.6218L12.3309 12.9068C12.4855 12.9389 12.6463 12.9214 12.7904 12.8568C12.9345 12.7921 13.0545 12.6837 13.1333 12.5468L14.6331 9.95217C14.7127 9.81517 14.7469 9.65647 14.7307 9.49885C14.7146 9.34122 14.6489 9.19277 14.5431 9.07479L13.5307 7.99493ZM12.4134 8.9998L13.0133 9.6747L12.0534 11.3395L11.1686 11.1595C10.6285 11.0491 10.0666 11.1408 9.58973 11.4173C9.11281 11.6938 8.75401 12.1357 8.58142 12.6593L8.29646 13.4992H6.37672L6.10676 12.6443C5.93417 12.1208 5.57537 11.6788 5.09845 11.4023C4.62153 11.1258 4.0597 11.0341 3.51961 11.1445L2.63473 11.3245L1.65986 9.66721L2.25978 8.9923C2.6287 8.57984 2.83265 8.04587 2.83265 7.4925C2.83265 6.93913 2.6287 6.40517 2.25978 5.9927L1.65986 5.3178L2.61973 3.66802L3.50461 3.848C4.0447 3.9584 4.60653 3.86665 5.08345 3.59018C5.56037 3.31371 5.91917 2.87175 6.09176 2.3482L6.37672 1.50082H8.29646L8.58142 2.3557C8.75401 2.87925 9.11281 3.32121 9.58973 3.59768C10.0666 3.87415 10.6285 3.9659 11.1686 3.8555L12.0534 3.67552L13.0133 5.34029L12.4134 6.0152C12.0486 6.42672 11.8472 6.95759 11.8472 7.5075C11.8472 8.05741 12.0486 8.58828 12.4134 8.9998V8.9998ZM7.33659 4.50041C6.74333 4.50041 6.16339 4.67633 5.67011 5.00593C5.17683 5.33553 4.79236 5.804 4.56533 6.35211C4.3383 6.90021 4.27889 7.50333 4.39463 8.08519C4.51037 8.66706 4.79606 9.20153 5.21556 9.62103C5.63506 10.0405 6.16954 10.3262 6.7514 10.442C7.33326 10.5577 7.93638 10.4983 8.48448 10.2713C9.03259 10.0442 9.50106 9.65976 9.83066 9.16648C10.1603 8.6732 10.3362 8.09326 10.3362 7.5C10.3362 6.70446 10.0202 5.9415 9.45762 5.37897C8.89509 4.81644 8.13213 4.50041 7.33659 4.50041V4.50041ZM7.33659 8.9998C7.03996 8.9998 6.74999 8.91183 6.50335 8.74703C6.25671 8.58223 6.06448 8.348 5.95096 8.07395C5.83744 7.79989 5.80774 7.49834 5.86561 7.2074C5.92348 6.91647 6.06632 6.64923 6.27607 6.43948C6.48582 6.22973 6.75306 6.08689 7.04399 6.02902C7.33493 5.97115 7.63649 6.00085 7.91054 6.11437C8.18459 6.22788 8.41883 6.42012 8.58363 6.66676C8.74842 6.9134 8.83639 7.20337 8.83639 7.5C8.83639 7.89777 8.67837 8.27925 8.39711 8.56052C8.11584 8.84178 7.73436 8.9998 7.33659 8.9998Z" fill="#10FFA2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1427_26040">
                                                                <rect width="14.7346" height="15" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                                <button class="art-trash appear">
                                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1427_26050)">
                                                            <path d="M5.25 12C5.44891 12 5.63968 11.921 5.78033 11.7803C5.92098 11.6397 6 11.4489 6 11.25V6.75C6 6.55109 5.92098 6.36032 5.78033 6.21967C5.63968 6.07902 5.44891 6 5.25 6C5.05109 6 4.86032 6.07902 4.71967 6.21967C4.57902 6.36032 4.5 6.55109 4.5 6.75V11.25C4.5 11.4489 4.57902 11.6397 4.71967 11.7803C4.86032 11.921 5.05109 12 5.25 12ZM12.75 3H9.75V2.25C9.75 1.65326 9.51295 1.08097 9.09099 0.65901C8.66903 0.237053 8.09674 0 7.5 0H6C5.40326 0 4.83097 0.237053 4.40901 0.65901C3.98705 1.08097 3.75 1.65326 3.75 2.25V3H0.75C0.551088 3 0.360322 3.07902 0.21967 3.21967C0.0790176 3.36032 0 3.55109 0 3.75C0 3.94891 0.0790176 4.13968 0.21967 4.28033C0.360322 4.42098 0.551088 4.5 0.75 4.5H1.5V12.75C1.5 13.3467 1.73705 13.919 2.15901 14.341C2.58097 14.7629 3.15326 15 3.75 15H9.75C10.3467 15 10.919 14.7629 11.341 14.341C11.7629 13.919 12 13.3467 12 12.75V4.5H12.75C12.9489 4.5 13.1397 4.42098 13.2803 4.28033C13.421 4.13968 13.5 3.94891 13.5 3.75C13.5 3.55109 13.421 3.36032 13.2803 3.21967C13.1397 3.07902 12.9489 3 12.75 3ZM5.25 2.25C5.25 2.05109 5.32902 1.86032 5.46967 1.71967C5.61032 1.57902 5.80109 1.5 6 1.5H7.5C7.69891 1.5 7.88968 1.57902 8.03033 1.71967C8.17098 1.86032 8.25 2.05109 8.25 2.25V3H5.25V2.25ZM10.5 12.75C10.5 12.9489 10.421 13.1397 10.2803 13.2803C10.1397 13.421 9.94891 13.5 9.75 13.5H3.75C3.55109 13.5 3.36032 13.421 3.21967 13.2803C3.07902 13.1397 3 12.9489 3 12.75V4.5H10.5V12.75ZM8.25 12C8.44891 12 8.63968 11.921 8.78033 11.7803C8.92098 11.6397 9 11.4489 9 11.25V6.75C9 6.55109 8.92098 6.36032 8.78033 6.21967C8.63968 6.07902 8.44891 6 8.25 6C8.05109 6 7.86032 6.07902 7.71967 6.21967C7.57902 6.36032 7.5 6.55109 7.5 6.75V11.25C7.5 11.4489 7.57902 11.6397 7.71967 11.7803C7.86032 11.921 8.05109 12 8.25 12Z" fill="#10FFA2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1427_26050">
                                                                <rect width="13.5" height="15" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                                                           

                                        <?php foreach ($forumrows as $f) : ?>
                                            <div class="art-card">
                                                <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                    <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                                </svg>
                                                <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                </svg>
                                                <div class="card-article d-flex justify-between align-item-center">
                                                    <!-- 文章內文(左邊) -->
                                                    <div class="flex-grow">
                                                        <div class="d-flex justify-between align-item-center">
                                                            <div class="d-flex">
                                                                <!-- 文章分類 -->
                                                                <a class="d-filter mr-20" href="#" style="<?php
                                                                                    $ottcolor = [
                                                                                        '2' => '#10FFA2',
                                                                                        '3' => '#1CD8FF',
                                                                                        '1' => '#FC6F51',
                                                                                    ];
                                                                                    if ($f['forum_type'] == '影劇') {
                                                                                        $color = $ottcolor['1'];
                                                                                    } else if ($f['forum_type'] == '電影') {
                                                                                        $color = $ottcolor['2'];
                                                                                    } else if ($f['forum_type'] == '動畫') {
                                                                                        $color = $ottcolor['3'];
                                                                                    };
                                                                                    echo 'color:' . $color . '; border: 1px solid' . $color;
                                                                                    ?>"><?= $f['forum_type'] ?></a>
                                                                <!-- 文章作者 -->
                                                                <div class="d-flex align-item-center">
                                                                    <!-- 文章作者圖片 -->
                                                                    
                                                                        <div class="ar-img-wrap mr-10">
                                                                            <a href="#"><img src="./img/member/<?= $f['member_avatar'] ?>" alt=""></a>
                                                                        </div>
                                                                        <a href="#"><span><?= $f['member_nickname'] ?></span></a>
                                                                   
                                                                </div>
                                                            </div>
                                                            <!-- 發文時間 -->
                                                            <div><span class="pc-time"><?= $f['forum_uploadtime'] ?></span></div>
                                                        </div>
                                                        <div>
                                                            <a href="#">
                                                                <h2 class="mt-10 art-title"><?= $f['forum_title'] ?></h2>
                                                            </a>
                                                            <p class="mt-10 too_long"><?= $f['forum_content_preview'] ?></p>
                                                            
                                                        </div>
                                                        <!-- 愛心 留言 收藏 hashtag -->
                                                        <div class="d-flex justify-between mt-30">
                                                            <!-- 包svgㄉdiv -->
                                                            <div class="posticon-hashtag">
                                                                <div class="d-flex align-item-center">
                                                                    <input type="button" hidden>
                                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_1427_26189)">
                                                                            <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#10FFA2" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1427_26189">
                                                                                <rect width="17.5403" height="15" fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                    </input>
                                                                    <span class="mr-20">0</span>
                                                                    <input type="button" hidden>
                                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#10FFA2" />
                                                                    </svg>
                                                                    </input>
                                                                    <span class="mr-20">0</span>
                                                                    <input type="button" hidden>
                                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#10FFA2" />
                                                                        <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#10FFA2" />
                                                                    </svg>
                                                                    </input>
                                                                    <span class="mr-20">0</span>
                                                                </div>
                                                                <div class="art-hash">
                                                                    <ul class="d-flex ar-filter">
                                                                        
                                                                        <!-- <li class="filter_4w"><a href="#">#間諜家家酒</a></li> -->
                                                                    <?php foreach ($tags as $t) {
                                                                        if ($t['f_has_forum_sid'] == $f['forum_sid']) {
                                                                            echo '<li class="filter_4w mr-10"><a class="hashtag">' . $t['f_has_hastag_name'] . '&nbsp;</a></li>';
                                                                        }
                                                                    } ?>
                                                                        <!-- <li class="filter_4w"><a href="#">#間諜家家酒</a></li>
                                                                        <li class="filter_4w ml-10"><a href="#">#安妮亞</a></li>
                                                                        <li class="filter_3w ml-10"><a href="#">#呵</a></li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                                           
                                                        </div>
                                                    </div>
                                                    <!-- 文章圖(右邊) -->
                                                    <div>
                                                        <div class="art-mb">
                                                            <div><span class="mb-time"><?= $f['forum_uploadtime'] ?></span></div>
                                                            <div class="card-img-wrap ml-20 mb-artpic">
                                                                <img src="./img/forum/<?= $f['forum_pic'] ?>" alt="">
                                                            </div>                                                       
                                                        </div>
                                                        <!-- <div class="card-img-wrap ml-20">
                                                            <img src="./img/forum/<?= $f['forum_pic'] ?>" alt="">
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>


                                        <div class="art-card">
                                            <svg class="art-card-checked appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                                <path d="M11.8117 4.20543C12.0628 4.4789 12.0628 4.92082 11.8117 5.19429L6.66851 10.7949C6.41738 11.0684 6.01155 11.0684 5.76042 10.7949L3.18829 7.99459C2.93724 7.72113 2.93724 7.2792 3.18829 7.00574C3.43938 6.73227 3.84641 6.73227 4.09754 7.00574L6.19638 9.30942L10.9036 4.20543C11.1547 3.93152 11.5605 3.93152 11.8117 4.20543Z" fill="#10FFA2" />
                                            </svg>
                                            <svg class="art-card-check appear" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.25 0H0.75C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75V14.25C0 14.4489 0.0790176 14.6397 0.21967 14.7803C0.360322 14.921 0.551088 15 0.75 15H14.25C14.4489 15 14.6397 14.921 14.7803 14.7803C14.921 14.6397 15 14.4489 15 14.25V0.75C15 0.551088 14.921 0.360322 14.7803 0.21967C14.6397 0.0790176 14.4489 0 14.25 0V0ZM13.5 13.5H1.5V1.5H13.5V13.5Z" fill="#10FFA2" />
                                            </svg>
                                            <div class="card-article d-flex justify-between align-item-center">
                                                <!-- 文章內文(左邊) -->
                                                <div class="flex-grow">
                                                    <div class="d-flex justify-between align-item-center">
                                                        <div class="d-flex">
                                                            <!-- 文章分類 -->
                                                            <a class="d-filter d-filter-a mr-20" href="#">動畫</a>
                                                            <!-- 文章作者 -->
                                                            <div class="d-flex align-item-center">
                                                                <!-- 文章作者圖片 -->
                                                                <?php foreach ($getP as $Pinfo) : ?>
                                                                    <div class="ar-img-wrap mr-10">
                                                                        <a href="#"><img src="./img/member/<?= $Pinfo['member_avatar'] ?>" alt=""></a>
                                                                    </div>
                                                                    <a href="#"><span><?= $Pinfo['member_nickname'] ?></span></a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                        <!-- 發文時間 -->
                                                        <div><span class="pc-time">2022-06-01 22:23:49</span></div>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <h2 class="mt-10 art-title too_long">#閒聊 愛死機器人的吉巴羅劇情有點不懂？</h2>
                                                        </a>
                                                        <p class="mt-10 too_long">愛死機器人前導預告剛出來時，就超超超期待 吉巴羅 這集，因為不論美術還有帶宗教詭異氣息的風格，都非常對我胃口。而星期五看完後，依然覺得這集不負眾望，就是超讚。</p>
                                                    </div>
                                                    <!-- 愛心 留言 收藏 hashtag -->
                                                    <div class="d-flex justify-between mt-30">
                                                        <!-- 包svgㄉdiv -->
                                                        <div class="posticon-hashtag">
                                                            <div class="d-flex align-item-center">
                                                                <input type="button" hidden>
                                                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1427_26189)">
                                                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#10FFA2" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1427_26189">
                                                                            <rect width="17.5403" height="15" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">39</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#10FFA2" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">65</span>
                                                                <input type="button" hidden>
                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#10FFA2" />
                                                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#10FFA2" />
                                                                </svg>
                                                                </input>
                                                                <span class="mr-20">13</span>
                                                            </div>
                                                            <div class="art-hash">
                                                                <ul class="d-flex ar-filter">
                                                                    <li class="filter_4w"><a href="#">#愛死機器人</a></li>
                                                                    <li class="filter_4w ml-10"><a href="#">#吉巴羅</a></li>
                                                                    <li class="filter_3w ml-10"><a href="#">#求解</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- 文章圖(右邊) -->
                                                <div>
                                                    <div class="art-mb">
                                                        <div><span class="mb-time">2022-06-01 22:23:49</span></div>
                                                        <div class="card-img-wrap ml-20 mb-artpic">
                                                            <img src="./img/talls_img/robot.jpg" alt="">
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="account_children_account">
                                    <div id="info_acc" class="child-inner">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">帳戶資料</div>
                                        </div>
                                        <div class="info_acc_email">
                                            <div class="acc_email_title">Email</div>
                                            <input class="acc_input" type="email" id="" name="acc_email" value="example@gmail.com" readOnly />
                                        </div>
                                        <div class="info_acc_change">
                                            <a href="#">
                                                <div class="info_acc_chPW">
                                                    變更密碼
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="info_acc_cgEmail">
                                                    變更Email
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="info_gen" class="child-inner">
                                        <div class="info_acc_title">
                                            <div class="stick_mobile"></div>
                                            <div class="info_acc_word">一般資料</div>
                                        </div>

                                        <div class="info_gen01">
                                            <div class="info_upload_word">
                                                為您的會員頁面附上特色頭像
                                            </div>
                                            <div class="info_upload">
                                                <div class="info_upload_square">
                                                    <div id="preview" class="info_gen_img">
                                                        <?php foreach ($getP as $Pinfo) : ?>
                                                            <img src="./img/member/<?= $Pinfo['member_avatar'] ?>" alt="">
                                                        <?php endforeach; ?> 
                                                    </div>
                                                </div>

                                                <input type="file" id="fileUploader" class="display_none" onchange="handleFiles(this.files)" />
                                                <button id="upload_zone" class="up_accpic upload_zone">上傳頭像</button>
                                            </div>

                                        </div>

                                        <!-- <form action="member-info-index-got.php" method='post'> -->

                                            <div class="info_gen02">
                                                <?php foreach ($getP as $Pinfo) : ?>
                                                    <div class="info_gen_nickname">暱稱</div>
                                                    <input id="nick_acc" class="acc_input acc_nickname" type="text" id="" name='acc_nickname' value="<?= $Pinfo['member_nickname'] ?>" />
                                                    <p id="valueInput"></p> 
                                                <?php endforeach; ?>
                                            </div>

                                            <div class="info_gen03">
                                                <div class="info_gen_intro">簡介</div>
                                                <?php foreach ($getP as $Pinfo) : ?>
                                                    <textarea id="insfo_acc" class="acc_input acc_info duanduan" type="text" name='acc_intro' value=""><?= $Pinfo['member_info'] ?></textarea>
                                                <?php endforeach; ?>
                                                <p id="infoInput"></p> 
                                            </div>

                                            <div class="info_gen04">
                                                <button type='submit' class="info_save" onclick="getmemInput()">儲存資料</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kuang_bg display_none">
                        <div class="kuang">
                            <div class="kuang-top">
                                <div class="kuang-logo">
                                    <div class="kuang_logopic">
                                        <img src="./img/logo/logo.png" alt="">
                                    </div>
                                    <div class="kuang_logoword">
                                        <img src="./img/logo/logo_word.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="kuang-center">
                                <div class="with-kuang">
                                    <div class="kuang-word">
                                        資料更新成功！
                                    </div>
                                </div>
                            </div>
                            <div class="kuang-last">
                                <div class="confirm_btn">
                                    確認
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php include __DIR__ . '/parts/movwe_footer.php' ?>

            </div>





            <script src="./js/Nav.js"></script>



            <!-- 影劇/商品/討論區/個人資料filter click綠色 -->
            <script>
                $('.account_filter_word a').click(function() {
                    console.log('yap');
                    $(this).css('color', '#10ffa2').parent().siblings().children().css('color', '#ffffff80')
                })
            </script>

            <!-- tablet a click綠色 -->
            <script>
                $('.info_child_content li').click(function() {
                    $(this).css('color', '#10ffa2').parent().siblings().children().css('color', '#ffffff80')
                })
            </script>

            <!-- 文章一鍵刪除 -->
            <script>
                $('.art-setting').click(function() {
                    $('.art-trash').toggle();
                    $('.art-card-check').toggle();
                })
                $('.art-card-check').click(function() {
                    $('.art-card-checked').removeClass('appear')
                    $('.art-card-check').hide();
                })

                $('.art-trash').click(function() {
                    console.log('rty');
                    $('.co-art-card').hide();
                    $('.no-article').css('display', 'flex')
                })
            </script>


            <!-- 影劇>我的片單 -->
            <script>
                function accinitial() {

                    // 4個大頁籤 影劇發亮
                    $('.account_films').css('color', '#10ffa2')
                    $('.account_films').siblings().css('color', '#ffffff80');


                    // 影劇的tablet分類 僅顯示"影劇區"
                    $('#acc_films').css('display', 'flex')
                    $('#acc_films').siblings().css('display', 'none');

                    // 僅顯示影劇內容
                    $('.account_children_films').css('display', 'block')
                    $('.account_children_films').siblings().css('display', 'none');

                    //影劇tablet分類 我的片單亮起 
                    $('.info_child01').css('color', '#10ffa2')
                    $('.info_child01').css('border', '1px solid #10ffa2')
                    $('.info_child01').siblings().css('color', '#ffffff80')
                    $('.info_child02').css('border', '1px solid #ffffff80')
                    $('.info_child04').css('border', '1px solid #ffffff80')

                    //影劇下方內容 僅顯示"我的片單
                    $('#myList').css('display', 'block')
                    $('#myList').siblings().css('display', 'none');


                };

                accinitial();
                $('.account_films').on('click', accinitial);
                $('.info_child01').on('click', accinitial);
                $('.account_films').css('border-bottom', '1px solid #10ffa2')

                //影劇底線亮起 其餘底線消失
                $('.account_films').click(function() {
                    console.log();
                    $('.account_films').css('border-bottom', '1px solid #10ffa2')
                    $('.account_films').siblings().css('border-bottom', '1px solid rgba(255, 255, 253, 0)')
                })
            </script>

            <!-- 影劇>我的許願清單 -->
            <script>
                function wishList() {

                    //影劇tablet分類 許願清單亮起 
                    $('.info_child02').css('color', '#10ffa2')
                    $('.info_child02').css('border', '1px solid #10ffa2')
                    $('.info_child02').siblings().css('color', '#ffffff80')
                    $('.info_child01').css('border', '1px solid #ffffff80')
                    $('.info_child04').css('border', '1px solid #ffffff80')

                    //影劇下方內容 僅顯示"我的片單
                    $('#myWishList').css('display', 'block')
                    $('#myWishList').siblings().css('display', 'none');

                }
                $('.info_child02').on('click', wishList);
            </script>


            <!-- 影劇>曾經瀏覽 -->
            <script>
                function historyview() {

                    //影劇tablet分類 曾經瀏覽亮起 
                    $('.info_child04').css('color', '#10ffa2')
                    $('.info_child04').css('border', '1px solid #10ffa2')
                    $('.info_child04').siblings().css('color', '#ffffff80')
                    $('.info_child01').css('border', '1px solid #ffffff80')
                    $('.info_child02').css('border', '1px solid #ffffff80');

                    //影劇下方內容 僅顯示"曾經瀏覽
                    $('#myHistory').css('display', 'block')
                    $('#myHistory').siblings().css('display', 'none');

                }

                $('.info_child04').on('click', historyview);
            </script>


            <!-- 商品>歷史訂單 -->
            <script>
                function oldOreder() {

                    // 4個大頁籤 商品發亮
                    $('.account_product').css('color', '#10ffa2')
                    $('.account_product').siblings().css('color', '#ffffff80');

                    // 影劇的tablet分類 僅顯示"影劇區"
                    $('#acc_product').css('display', 'flex')
                    $('#acc_product').siblings().css('display', 'none');

                    // 僅顯示商品內容
                    $('.account_children_mall').css('display', 'block')
                    $('.account_children_mall').siblings().css('display', 'none');


                    //商品tablet分類 歷史訂單亮起 
                    $('.info_child_order01 a').css('color', '#10ffa2')
                    $('.info_child_order01').css('border', '1px solid #10ffa2')
                    $('.info_child_order01').siblings('li').css('color', '#ffffff80');
                };

                //影劇下方內容 僅顯示"歷史訂單
                $('#info_mall').css('display', 'block')
                $('#info_mall').siblings().css('display', 'none');

                $('.account_product').on('click', oldOreder);


                //商品底線亮起 其餘底線消失
                $('.account_product').click(function() {
                    console.log();
                    $('.account_product').css('border-bottom', '1px solid #10ffa2')
                    $('.account_product').siblings().css('border-bottom', '1px solid rgba(255, 255, 253, 0)')
                })
            </script>

            <!-- 文章>我的收藏 -->
            <script>
                function test() {

                    // 4個大頁籤 文章發亮
                    $('.account_forum').css('color', '#10ffa2')
                    $('.account_forum').siblings().css('color', '#ffffff80');

                    // 影劇的tablet分類 僅顯示"討論區"
                    $('#acc_forum').css('display', 'flex')
                    $('#acc_forum').siblings().css('display', 'none');

                    // 僅顯示討論內容
                    $('.account_children_forum').css('display', 'block')
                    $('.account_children_forum').siblings().css('display', 'none');

                    //影劇下方內容 僅顯示"收藏文章
                    $('#myArtPost').css('display', 'block')
                    $('#myArtPost').siblings().css('display', 'none');

                    //討論tablet分類 收藏文章亮起 
                    $('.info_child_forum01').css('color', '#10ffa2')
                    $('.info_child_forum01').css('border', '1px solid #10ffa2')
                    $('.info_child_forum02').css('color', '#ffffff80')
                    $('.info_child_forum02').css('border', '1px solid #ffffff80')

                }
                $('.account_forum').on('click', test);
                $('.info_child_forum01').on('click', test);

                //文章底線亮起 其餘底線消失
                $('.account_forum').click(function() {
                    console.log();
                    $('.account_forum').css('border-bottom', '1px solid #10ffa2')
                    $('.account_forum').siblings().css('border-bottom', '1px solid rgba(255, 255, 253, 0)')
                })
            </script>

            <!-- 文章>我的發文 -->
            <script>
                function mypost() {

                    //影劇tablet分類 我的發文亮起 
                    $('.info_child_forum02').css('color', '#10ffa2')
                    $('.info_child_forum02').css('border', '1px solid #10ffa2')
                    $('.info_child_forum01').css('color', '#ffffff80')
                    $('.info_child_forum01').css('border', '1px solid #ffffff80')

                    //影劇下方內容 僅顯示"我的發文
                    $('#myArtCollect').css('display', 'block')
                    $('#myArtCollect').siblings().css('display', 'none');

                }

                $('.info_child_forum02').on('click', mypost);
            </script>

            <!-- 個人>帳戶資料 -->
            <script>
                function memberpage() {

                    // 4個大頁籤 個人發亮
                    $('.account_info').css('color', '#10ffa2')
                    $('.account_info').siblings().css('color', '#ffffff80');

                    // 影劇的tablet分類 僅顯示"個人區"
                    $('#acc_info').css('display', 'flex')
                    $('#acc_info').siblings().css('display', 'none');

                    // 僅顯示個人內容
                    $('.account_children_account').css('display', 'block')
                    $('.account_children_account').siblings().css('display', 'none');

                    //影劇tablet分類 帳戶資料亮起 
                    $('.info_child_acc01').css('color', '#10ffa2')
                    $('.info_child_acc01').css('border', '1px solid #10ffa2')
                    $('.info_child_acc02').css('color', '#ffffff80')
                    $('.info_child_acc02').css('border', '1px solid #ffffff80')

                    //影劇下方內容 僅顯示"帳戶資料
                    $('#info_acc').css('display', 'block')
                    $('#info_acc').siblings().css('display', 'none');


                };

                $('.account_info').on('click', memberpage);
                $('.info_child_acc01').on('click', memberpage);

                //個人底線亮起 其餘底線消失
                $('.account_info').click(function() {
                    console.log();
                    $('.account_info').css('border-bottom', '1px solid #10ffa2')
                    $('.account_info').siblings().css('border-bottom', '1px solid rgba(255, 255, 253, 0)')
                })
            </script>

            <!-- 個人>一般資料 -->
            <script>
                function generalMember() {

                    //影劇tablet分類 一般資料 亮起 
                    $('.info_child_acc02').css('color', '#10ffa2')
                    $('.info_child_acc02').css('border', '1px solid #10ffa2')
                    $('.info_child_acc01').css('color', '#ffffff80')
                    $('.info_child_acc01').css('border', '1px solid #ffffff80')


                    //影劇下方內容 僅顯示"一般資料 
                    $('#info_gen').css('display', 'block')
                    $('#info_gen').siblings().css('display', 'none');

                }

                $('.info_child_acc02').on('click', generalMember);
            </script>

            <!-- 商品 歷史訂單切換 -->
            <script>
                $('.orderDetail-btn a').click(function() {
                    console.log('bujian');
                    $('.hs-order').css('display', 'none')
                    $('.cuxian').css('display', 'block')

                })

                $('.od-btn').click(function() {
                    $('#info_mall').css('display', 'block')
                    $('.cuxian').css('display', 'none')
                })
            </script>

            <!-- 上傳頭貼 -->
            <script>
                const dropbox = document.getElementById("upload_zone");
                const preview = document.getElementById("preview");

                function handleFileSelect(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    const fileUploader = document.getElementById("fileUploader");
                    fileUploader.click();
                }

                const click = e => handleFileSelect(e);

                // prevent the default method working
                function dragenter(e) {
                    // add the styling to div
                    dropbox.classList.add("upload_zone_enter");
                    e.stopPropagation();
                    e.preventDefault();
                }

                const dragleave = () => dropbox.classList.remove("upload_zone_enter");

                // prevent the default method working
                function dragover(e) {
                    e.stopPropagation();
                    e.preventDefault();
                }

                function handleFiles(files) {
                    for (var i = 0; i < files.length; i++) {
                        const file = files[i];
                        console.log(files[i].name);
                        const picname = files[i].name;
                        // change html
                        $('.account-pic > .img-new').attr('src', `./img/member/${picname}`);
                        // 這邊偷偷串資料庫
                        $.get('api_picto_db.php', {
                            picname
                        }, function(data) {
                            console.log(data);
                        }, 'json');
                        const imageType = /image.*/;
                        if (!file.type.match(imageType)) {
                            continue;
                        };

                        // 這邊偷偷改nav
                        const navAva = $('.tn_avatar_wrap > a > img').attr('src', `./img/member/${picname}`);

                        const img = document.createElement("img");
                        img.classList.add("obj");
                        img.file = file;
                        preview.appendChild(img);

                        const reader = new FileReader();
                        reader.onload = (e => img.src = e.target.result);
                        reader.readAsDataURL(file);

                        $('.kuang_bg').css('display', 'block')
                    }
                }

                function drop(e) {
                    e.stopPropagation();
                    e.preventDefault();

                    const dt = e.dataTransfer;
                    const files = dt.files;

                    handleFiles(files);
                    dropbox.classList.remove("upload_zone_enter");
                }

                dropbox.addEventListener("click", click, false);
                dropbox.addEventListener("dragenter", dragenter, false);
                dropbox.addEventListener("dragleave", dragleave, false);
                dropbox.addEventListener("dragover", dragover, false);
                dropbox.addEventListener("drop", drop, false);
            </script>

            <script>
                $('.up_accpic').click(function() {
                    $('.info_gen_img img').css('display', 'none')
                })

                $('.confirm_btn').click(function() {
                    $('.kuang_bg').css('display', 'none')
                    $('.img-ori').css('display', 'none')
                    $('.img-new').css('display', 'block')
                })
            </script>

            <!-- footer -->
            <script>
                $('.han1').click(function() {
                    $('.f-con1').toggle()
                })
                $('.han2').click(function() {
                    $('.f-con2').toggle()
                })
                $('.han3').click(function() {
                    $('.f-con3').toggle()
                })
            </script>

            <!-- 改暱稱 -->
            <script>
                let inputValuea;
                let inputValueb;
                // step1
                const getmemInput = () =>{
                    inputValuea = document.getElementById("nick_acc").value; 
                    inputValueb = document.getElementById("insfo_acc").value; 
                    // document.getElementById("valueInput").innerHTML = inputValueb;
                    throwtoapi(inputValuea, inputValueb);   
                };
                // step2
                function throwtoapi (a,b){
                    $('.account-info').text(b);
                    $('.account-name').text(a);
                    const obj = {
                        'nn': a,
                        'ii':b,
                    };
                    $.post('api_member_info_db.php', obj, function(data){
                        console.log('okok');
                        
                    }, 'json');
                    $('.kuang_bg').css('display', 'block')
                }

            </script>
    </body>

    </html>