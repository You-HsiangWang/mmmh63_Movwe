<?php

require './parts/movwe_connect_db.php';
$pageName = 'my_film_list';
$title = 'MOVWE-搜尋結果';

// 拿到所有電影
// $getFilmList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 10";
// $stmtFL = $pdo->query($getFilmList);
// $FLrow = $stmtFL->fetchAll();

//我的片單7部 
$getFilmList = "SELECT * FROM `video` WHERE `video_name` like '%鬼%' or `video_name` like '%怪%' LIMIT 13";
$stmtFL = $pdo->query($getFilmList);
$FLrow = $stmtFL->fetchAll();

// //許願清單4部 
// $getWishList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 4";
// $stmtWL = $pdo->query($getWishList);
// $WLrow = $stmtWL->fetchAll();

// //瀏覽紀錄10部 
// $getHistoryList = "SELECT * FROM `video` WHERE 1 ORDER BY RAND() LIMIT 10";
// $stmtHL = $pdo->query($getHistoryList);
// $HLrow = $stmtHL->fetchAll();

// // 拿會員點數/暱稱/頭貼欄位
// $getPoints = "SELECT * FROM `member` WHERE `member_sid` = 1";
// $stmtHL = $pdo->query($getPoints);
// $getP = $stmtHL->fetchAll();
?>


<?php include __DIR__ . '/parts/movwe_head.php'; ?>
<!-- <link href="./fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/mystyle.css">
<link rel="stylesheet" href="./css/search__filter.css">
<link rel="stylesheet" href="./css/Carousel_1.css">
<link rel="stylesheet" href="./css/Carousel_7.css">
<link rel="stylesheet" href="./css/bubbles_bg.css">
<link rel="stylesheet" href="./css/member-info-php.css">
<link rel="stylesheet" href="./css/kuang.css">
<link rel="stylesheet" href="./css/no-article.css">

<!-- <link rel="stylesheet" href="./css/reset.css"> -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="./img/nav_images/LOGO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->

<!-- <title>Movwe</title> -->
<style>
    /* 手機版 */

    * {
        /* outline: 1px solid greenyellow; */
    }

    .single {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .multiple {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* 文章 */

    .card-article {

        transition: .2s;
        width: 100%;
        padding-bottom: 10px;
        border-bottom: 1px solid #ffffff80;
    }

    .card-article:hover {

        transform: scale(1.01);
    }

    .card-article-left {
        width: 65%;
    }

    /* 文章作者頭像 */

    .author-img-wrap {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        overflow: hidden;
    }

    .author-img-wrap img {
        width: 100%;
    }

    /* 文章圖 */

    .card-article-right {
        width: 30%;
    }

    .article-img-wrap {
        width: 90%;
        overflow: hidden;

    }

    .article-img-wrap img {
        width: 100%;
        border-radius: 10px;
    }

    .article__container {
        display: none;
    }



    /* 電腦版 */

    @media screen and (min-width: 750px) {

        h4 {
            font-size: 20px;
        }

        p {
            font-size: 18px;
        }

        a {
            font-size: 16px;
        }

        span {
            font-size: 14px;
        }

        .text__container {
            width: 94%;
            /* background-color: rgb(124, 124, 124); */
            margin: 0px auto;
            /* display: flex; */
            /* justify-content: space-around; */
        }

        .top_nav_searchbar_box {
            width: 200px;
        }

        .left_nav {
            display: block !important;
        }

        .left_div {
            display: block !important;
        }

        .bars {
            opacity: 0;
        }

        .top_nav_movwe_img-2 {
            transform: scale(1);
        }

        /* 文章 */

        .article__container {

            width: 100%;
            margin: 100px auto 0 auto;
        }

        .card-article-left {
            width: 85%;
        }

        .card-article-right {
            width: 10%;
        }

        .card-article-left .multiple {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* 文章圖 */

        .article-img-wrap {
            width: 150px;
            height: 150px;
        }


    }
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>
        <!-- <div class="left_div"></div> -->
        <!----------nav_left-------------->

        <!--------------------------------------------------------------------------->
        <div class="container flex-wrap">

            <!--banner__container----------------->
            <div class="banner__container">
                <!-- <img src="./nav_images/carousel-1.jpeg" alt=""> -->

            </div>

            <!--text__container------內容放這邊------------->
            <div class="text__container flex-col margin__bt__100 flex-wrap">

                <div class="searchpage__filter">
                    <div class="big__search">
                        <input id="myInput" placeholder="輸入片名" value="">
                    </div>
                    <div class="submit__btn">
                        <button class="search__btn01" id="search__Btn">Button</button>
                    </div>
                    <div class="search__final">
                        <p class="search__input__switch-2">很抱歉! 根據您輸入的關鍵字“<span id="Title" class="search__point"></span>”, 找不到符合的相關結果</p>
                        <p class="search__input__switch">根據您輸入的關鍵字“<span id="Title" class="search__point">鬼怪</span>”, 為您找到以下搜索結果</p>
                    </div>
                    <div class="searchpage__filter__top">
                        <div class="filter__title">
                            <p>類別 /</p>
                        </div>
                        <!-- <button class="filter_4w filter__btn">所有結果</button> -->
                        <button id="searchpage__movie_button" class="filter_2w filter__btn">影劇</button>
                        <button id="searchpage__product_button" class="filter_2w filter__btn">商品</button>
                        <button id="searchpage__forum_button" class="filter_2w filter__btn">文章</button>
                    </div>
                    <div class="searchpage__filter__top">
                        <div class="filter__title">
                            <p>排序 /</p>
                        </div>
                        <button class="filter_3w filter__btn">依時間</button>
                        <button class="filter_4w filter__btn">依熱門度</button>
                    </div>
                </div>


                <!----------------------------------------------->


                <div class="carousel__big__box__7 actor__text__container mb_search_page carousel__big__box__7__search__page">
                    <div class="carousel__title__section__7">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__7">
                            <p>
                                相關周邊
                            </p>
                        </div>
                    </div>
                    <div class="carousel__7">
                        <div class="carousel__track-container__7">
                            <ul class="carousel__track__7 search__track search__height">
                                <li class="carousel__slide__7 current-slide__7 search__height_100">
                                    <div class="image__box__7">
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst01.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪限量貼紙組 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                599
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst02.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            韓劇鬼怪PVC夾鍊袋 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst03.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            機支架人形立牌 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card4__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst04.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            桌上小台曆 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                350
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card5__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst05.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            韓劇鬼怪照片集 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card6__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst06.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪哇娃 白色 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card7__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst07.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪娃娃 黑色 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="carousel__track__7 search__height">
                                <li class="carousel__slide__7 current-slide__7 search__height_100">
                                    <div class="image__box__7">
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst08.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪娃娃 白色 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst09.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪娃娃 藍色 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst10.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪娃娃 紅色 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card4__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst11.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪娃娃經典系列組 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card5__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst12.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪鑰匙圈 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                799
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card6__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst13.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪原子筆</p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                280
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__7 card7__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/mall/gst/gst14.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p>
                                                            鬼怪筆記本 </p>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                199
                                                            </p>
                                                            <p class="ntd">
                                                                NTD
                                                            </p>
                                                        </div>
                                                        <div class="movie__icon__box__7">
                                                            <p class="product__typ-1">
                                                                鬼怪
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="carousel__nav__7">
                                <button class="carousel__indicator__7 current-slide__7"></button>
                                <button class="carousel__indicator__7"></button>
                                <button class="carousel__indicator__7"></button>
                                <button class="carousel__indicator__7"></button>
                                <button class="carousel__indicator__7"></button>
                            </div>

                        </div>
                    </div>
                </div>






                <!----------------------------------------------->


                <div class="carousel__big__box margin__tp__100 mb_search_page flex-wrap">
                    <div class="carousel__title__section">
                        <div class="stick_desk"></div>
                        <div class="carousel__title">
                            <p>
                                搜尋結果
                            </p>
                        </div>
                    </div>
                    <div class="search__Cary__container">
                        <div class="cearch__Cary__box">
                            <img src="./img/talls_img/crying.gif" alt="">
                        </div>
                    </div>
                    <div class="carousel">
                        <div class="carousel__track-container">
                            <!-- <button class="carousle__button carousel__button--left is-hidden">
                                <div class="side__left">
                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                </div>
                            </button> -->
                            <ul class="carousel__track search__track">
                                <li class="carousel__slide current-slide">
                                    <div class="image__box flex-wrap">
                                        <div class="image__card image__card__search_page">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video" src="./img/center/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <div class="information__bottom">
                                                    <div class="information__bottom_1 Bottom__display">
                                                        <p class="information__typ d-filter-a">
                                                            影劇
                                                        </p>
                                                        <div class="bottom_6_icon_box">
                                                            <!-- <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a> -->
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
                                                            孤單又燦爛的神 鬼怪
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
                                                                9.9
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
                                                    <div class="information__bottom_6 Bottom__display">
                                                        <button class="push__up">
                                                            <p class="search__black">
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
                                                    孤單又燦爛的神 鬼怪
                                                </div>
                                                <div class="ac_ott">
                                                    <div class="ac_netflix">
                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                    </div>
                                                    <div class="ac_netflix">
                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card image__card__search_page">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="carousel__images" src="./img/center/search-2.sm.jpg" alt="">
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
                                                                </a> -->
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
                                                            <!-- <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a> -->
                                                        </div>


                                                    </div>
                                                    <div class="information__bottom_2 Bottom__display">
                                                        <p class="information__name">
                                                            繼怪怪守護神
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
                                                                9.4
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="information__bottom_4 Bottom__display">
                                                        <p>
                                                            輕鬆喜劇 /
                                                        </p>
                                                        <p>
                                                            奇幻冒險
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
                                                    <div class="information__bottom_6 Bottom__display">
                                                        <button class="push__up">
                                                            <p class="search__black">
                                                                ＋ 加入片單
                                                            </p>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="actor_flim">
                                                <div class="ac_flim_pic">
                                                    <img class="carousel__images" src="./img/center/search-2.sm.jpg" alt="">
                                                </div>
                                                <div class="ac_flim_name">
                                                    繼怪怪守護神
                                                </div>
                                                <div class="ac_ott">
                                                    <!-- <div class="ac_netflix">
                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                    </div> -->
                                                    <div class="ac_netflix">
                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php foreach ($FLrow as $FLrowinfo) : ?>
                                            <div class="image__card image__card__search_page">
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
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p class="search__black">
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
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

                                </li>
                            </ul>
                            <!-- <button class="carousle__button carousel__button--right">
                                <div class="side__right">
                                    <i class="fa-solid fa-chevron-right right__icon"></i>
                                </div>
                            </button> -->
                            <div class="carousel__nav">
                                <button class="carousel__indicator current-slide"></button>
                                <button class="carousel__indicator"></button>
                                <button class="carousel__indicator"></button>
                                <button class="carousel__indicator"></button>
                                <button class="carousel__indicator"></button>
                            </div>

                        </div>
                    </div>
                </div>






                <!----------------------------------------------->






                <!----------------------------------------------->


                <div class="article__container">
                    <div class="article">
                    </div>
                    <div class="carousel__title__section__7">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__7">
                            <p>
                                相關討論
                            </p>
                        </div>
                    </div>


                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-d mr-20" href="#">影劇</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/tinytall.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>胎尼頭</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">【韓劇 賞析】孤獨又燦爛的神--鬼怪，神提的問題是命運，而答案是...你說呢？</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        去年2016年，年初最最最有名的電影就是"釜山行"，男主角也是同一個人【孔侑】，年底上檔的鬼怪也讓孔侑這位男神又大出風頭了一次。這次看鬼怪這部戲，只能說男主角眼淚也沒有少，我們淚眼婆娑的時間也沒有減少過，哈比一向喜歡歡樂樂的戲劇，但卻無法停止把它看完。明明知道是個悲劇的開端，無論如何還是只能看完。厲害的是每個角色在劇中都有好幾場哭戲，統計上來說可能也能榮登近幾年算是哭戲最多的第一名。
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#韓劇心得&nbsp;</a>
                                    <a href="#" class="hashtag">#二十五二十一&nbsp;</a>
                                    <a href="#" class="hashtag">#南柱赫我公&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                    <img src="./img/center/single__post-2.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-m mr-20" href="#">電影</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/dino.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>切版王笠鴿</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">超夯韓劇《孤單又燦爛的神－鬼怪》裡，這些細膩的外語插曲是他們唱的</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        劇中的「使鬼CP」為了拯救被綁架的恩倬，從煙霧中帥氣現身所響起的〈Round and round〉，以及男女主角30年後再次重逢時所播出的〈Winter is coming〉，兩首唯美的歌都是由出道12年的女歌手韓秀芝所演唱。

                                        「See ya / Never gone my way ...」這句深深烙印在鬼怪迷腦海中的片頭曲〈Round and round〉近期則在韓國引起軒然大波。

                                        爭議起因來自原本劇中出現的片頭曲應為韓秀芝的所唱，但在公開完整版音源時歌曲的主演唱人卻換成另一名女歌手Heize，編曲與劇中原先釋出的版本有所落差而引發劇迷們的不滿，紛紛要求製作公司公開韓秀芝演唱的完整版音源，這樣的爭議則成了原聲帶的另一段「插曲」。
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#哈利波特&nbsp;</a>
                                    <a href="#" class="hashtag">#鄧不利多&nbsp;</a>
                                    <a href="#" class="hashtag">#葛林戴華德&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-3.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-d mr-20" href="#">影劇</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/dino.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>切版王笠鴿</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">看鬼怪結局有哭的舉手</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        我是個幾乎不追劇的人，除非電視有播
                                        我可以忍受每個禮拜在電視前固定觀看
                                        卻無法忍受自己一集一集狂看
                                        靠著電視看完的韓劇大概七部？
                                        主君的太陽、有理的愛情、一起吃飯吧1 2
                                        學校2015、急診男女、孤單又燦爛的神 鬼怪
                                        真的是少的可憐…，其他網路看都會放棄

                                        重點是我鬼怪大概拖了將近四個月才看完？
                                        電視一直換台播出，一下子FOX一下子星衛
                                        在星衛快結局，最後那週我有事就沒看到結局
                                        接著換FOX開始播，前面都看過不想看
                                        結果，他就完結了！！！欲哭無淚
                                        雖然我知道結局是啥啦，可是還是想親眼看
                                        最近FOX又重播了，今天隨便轉有幸看到結局
                                        果然大哭一場是可遇不可求的

                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#李秉憲&nbsp;</a>
                                    <a href="#" class="hashtag">#申敏兒&nbsp;</a>
                                    <a href="#" class="hashtag">#我們的藍調時光&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-4.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-a mr-20" href="#">動畫</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/1.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>翔子學妹</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">看鬼怪結局有哭的舉手</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        從什麼時候開始習慣了，
                                        提著沈重行李的日子呢？
                                        今天的你在奮鬥，
                                        孤零零地一個人，
                                        明天的你依然咬著牙走每一步，
                                        為了不讓愛你的人擔心，
                                        為了不被周圍的聲音淹沒，
                                        你只好小心翼翼地把自己的脆弱藏起來，
                                        最後在某個角落宣洩出來，
                                        沒事的，
                                        你不是一個人，
                                        我們都在各自的道路上前進著✨
                                        別讓情緒壓垮了自己，
                                        記得在需要的時候懂得向別人求助，
                                        會有人向你伸出援手的✨✨
                                        /
                                        如果你想要或需要被治癒一下的話，
                                        希望你能夠去看看這部作品（國王排名
                                        很暖、很窩心，
                                        同時感受到角色內心的聲音，
                                        人站在不同的立場，
                                        會做出不一樣的決定，
                                        從不同的角度去看，
                                        會得到不一樣的結論。
                                        所以請多多站在他人的角度思考，
                                        這個世界會變得更溫暖。
                                        （btw
                                        這我自己寫的不知道各位有沒有對於生活感到感慨，在公司，永遠都達不到自己所預期的，就像是國王排名的德斯帕一樣腦袋知道對手會出什麼招，但是身體卻跟不上的無力感，於是開啟我的打鼓之路之後輾轉成為前端工程師
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#國王排名&nbsp;</a>
                                    <a href="#" class="hashtag">#翔翔老師&nbsp;</a>
                                    <a href="#" class="hashtag">#前端工程師&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-5.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-d mr-20" href="#">影劇</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/tinytall.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>桌布是結衣</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">愛的迫降 狗血嗎我覺得很可以</h4>
                                    </a>
                                    <p class="mt-10 multiple">「有時錯過的火車，會將你載往目的地」要來分享近期最愛的韓劇「愛的迫降」或許評價兩極
                                        有人覺得狗血拖戲等等但對我而言是一部會永存於心中甚至是時不時會想拿出來回味的好劇❤️
                                        「第五中隊」也是五人五色，從具有領導風範的正赫、刀子嘴豆腐心的表治秀、沉默寡言的光範、熱愛追劇的韓流粉絲舟墨到心地善良的忙內殷桐，都有著不同的魅力，平常相處時就會製造出滿滿笑點。而且第五中隊雖然隸屬於北韓軍隊，卻沒有大眾想像的那麼難相處，他們遇見從南韓來的世理後，很聽從長官正赫的指令，沒有人去通報上層，反而一直保護世理，展現很多角色的可愛之處，增添劇集一大亮點！
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#愛的迫降&nbsp;</a>
                                    <a href="#" class="hashtag">#玄彬&nbsp;</a>
                                    <a href="#" class="hashtag">#孫藝珍&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-e mr-20" href="#">綜藝</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/8.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>瀚瀚子與鳥鳥</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">鬼怪E01-02】 劇情分析</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        經過上星期及上上星期的魔鬼般的考驗～本週藝人家庭們，來～營業中～過母親節嘍❤️本週只能說：跟上周比起來順暢舒服許多（因為畢竟都是自己人，而且還有不特別挑食的小朋友）所以相較起來好搞太多了～作為首個餐廳經營主題的台灣綜藝，《來吧！營業中》憑藉六名藝人真性情的互動及現實的營業流程，引起服務業者尤其餐飲業網友的共鳴，早前開放民眾用餐亦引爆排隊潮，即便未開門也吸引粉絲朝聖打卡，展現超高人氣。餐廳落腳北海岸石門區下員坑路，之前幸運一早排隊、成功嘗鮮的網友在IG上分享與炎亞綸的合照羨煞旁人，而根據曝光的餐點菜單，可見現場提供套餐含老屋凱撒沙拉、紅酒牛肉義大利麵、鬼圓圓佐奶油等，從開胃菜、正餐到甜點應有盡有。
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#來吧營業中&nbsp;</a>
                                    <a href="#" class="hashtag">#藝人餐廳&nbsp;</a>
                                    <a href="#" class="hashtag">#柯有倫女兒&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-4.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-article d-flex flex-col justify-between align-item-center mt-20">
                        <!-- 文章分類+作者+時間 -->
                        <div class="d-flex justify-between align-item-center w-100">
                            <div class="d-flex">
                                <!-- 文章分類 -->
                                <a class="d-filter d-filter-m mr-20" href="#">電影</a>
                                <!-- 文章作者 -->
                                <div class="d-flex align-item-center">
                                    <div class="author-img-wrap mr-10">
                                        <a href="#"><img src="./img/center/8.jpg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p>瀚瀚子與鳥鳥</p>
                                    </a>
                                </div>
                            </div>
                            <!-- 發文時間 -->
                            <div><span>5小時前</span></div>
                        </div>
                        <div class="d-flex justify-between">
                            <!-- 文章內文(左邊) -->
                            <div class="card-article-left">
                                <div>
                                    <a href="#">
                                        <h4 class="mt-10">鬼怪 #搞笑</h4>
                                    </a>
                                    <p class="mt-10 multiple">
                                        很難在不劇透的情況下寫出什麼東西，但這次扣除掉許多驚喜的彩蛋外，在心境的刻畫又更上層樓，感覺很像第一代陶比的蜘蛛人，那時候還會探討作為英雄的本質，而這一集也給我類似的感受，只是這次更加的深刻、心痛。作為《漫威捍衛者聯盟》的一員，夜魔俠與潔西卡瓊斯、盧克凱奇、和鐵拳俠並稱「被漫威遺忘的超級英雄」。儘管已是五部影集中唯一獲得正面評價的劇集，《夜魔俠》仍在Netflix收獲足夠觀眾群、不再需要漫威招牌後，遭到策略性的無情腰砍。雖然眾所期待的蜘蛛人三代同堂終於在《蜘蛛人：無家日》中完美圓夢，不過卻獨漏了《蜘蛛人：新宇宙》的主角邁爾斯摩拉斯。有趣的是，雖然無法讓動畫版蜘蛛人一同團圓，編劇卻以漫威最擅長的譏諷玩笑對他可愛致意。
                                    </p>
                                    <br>
                                    <a href="#" class="hashtag">#蜘蛛人無家日&nbsp;</a>
                                    <a href="#" class="hashtag">#羅伯派汀森&nbsp;</a>
                                    <a href="#" class="hashtag">#蘋果好好吃&nbsp;</a>
                                </div>

                            </div>
                            <!-- 文章圖片 -->
                            <div class="card-article-right d-flex align-item-center">
                                <div class="article-img-wrap d-flex align-item-center">
                                <img src="./img/center/single__post-3.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- 愛心 留言 收藏  -->
                        <div class="d-flex w-100 mt-20">
                            <!-- 包svgㄉdiv -->
                            <div class="d-flex align-item-center">
                                <input type="button" hidden>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26189)">
                                        <path d="M8.35907 1.43364L8.73934 1.84474L9.15044 1.43433C10.2981 0.315787 11.8877 -0.193294 13.4499 0.0667277C15.8103 0.460015 17.5403 2.50251 17.5403 4.89717V5.09587C17.5403 6.5176 16.9511 7.87766 15.9096 8.84718L9.71913 14.6266C9.46219 14.8664 9.12303 15 8.77017 15C8.41731 15 8.07815 14.8664 7.82121 14.6266L1.63036 8.84718C0.590274 7.87766 0 6.5176 0 5.09587V4.89717C0 2.50251 1.73074 0.460015 4.09046 0.0667277C5.62182 -0.193294 7.24224 0.315787 8.35907 1.43364C8.35907 1.43398 8.32824 1.43364 8.35907 1.43364ZM8.73934 4.17089L7.19771 2.5676C6.4543 1.85434 5.39914 1.51586 4.3611 1.68852C2.79378 1.94992 1.64441 3.30758 1.64441 4.89717V5.09587C1.64441 6.06196 2.04557 6.98694 2.75233 7.6447L8.77017 13.2631L14.7894 7.6447C15.4951 6.98694 15.8959 6.06196 15.8959 5.09587V4.89717C15.8959 3.30758 14.7449 1.94992 13.1792 1.68852C12.1412 1.51586 11.086 1.85434 10.3426 2.5676L8.73934 4.17089Z" fill="#ffffff80" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26189">
                                            <rect width="17.5403" height="15" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">25</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.4999 5.24993C7.35156 5.24993 7.20656 5.29391 7.08322 5.37632C6.95989 5.45873 6.86376 5.57587 6.807 5.71291C6.75023 5.84995 6.73538 6.00075 6.76432 6.14623C6.79326 6.29172 6.86469 6.42535 6.96957 6.53024C7.07446 6.63513 7.2081 6.70656 7.35358 6.7355C7.49906 6.76443 7.64986 6.74958 7.78691 6.69282C7.92395 6.63605 8.04108 6.53992 8.12349 6.41659C8.2059 6.29325 8.24989 6.14825 8.24989 5.99992C8.24989 5.80101 8.17087 5.61024 8.03022 5.46959C7.88957 5.32894 7.69881 5.24993 7.4999 5.24993ZM12.7498 0H2.24997C1.65324 0 1.08095 0.23705 0.659001 0.659001C0.23705 1.08095 0 1.65324 0 2.24997V9.74986C0 10.3466 0.23705 10.9189 0.659001 11.3408C1.08095 11.7628 1.65324 11.9998 2.24997 11.9998H10.9423L13.7173 14.7823C13.7874 14.8518 13.8705 14.9068 13.9619 14.9441C14.0533 14.9814 14.1511 15.0004 14.2498 14.9998C14.3482 15.0023 14.4458 14.9818 14.5348 14.9398C14.6718 14.8835 14.789 14.788 14.8718 14.6652C14.9545 14.5424 14.9991 14.3979 14.9998 14.2498V2.24997C14.9998 1.65324 14.7627 1.08095 14.3408 0.659001C13.9188 0.23705 13.3466 0 12.7498 0ZM13.4998 12.4423L11.7823 10.7174C11.7123 10.6478 11.6291 10.5928 11.5378 10.5555C11.4464 10.5182 11.3485 10.4993 11.2498 10.4999H2.24997C2.05106 10.4999 1.8603 10.4208 1.71965 10.2802C1.579 10.1395 1.49998 9.94877 1.49998 9.74986V2.24997C1.49998 2.05106 1.579 1.8603 1.71965 1.71965C1.8603 1.579 2.05106 1.49998 2.24997 1.49998H12.7498C12.9487 1.49998 13.1395 1.579 13.2801 1.71965C13.4208 1.8603 13.4998 2.05106 13.4998 2.24997V12.4423ZM4.49994 5.24993C4.3516 5.24993 4.2066 5.29391 4.08327 5.37632C3.95993 5.45873 3.8638 5.57587 3.80704 5.71291C3.75027 5.84995 3.73542 6.00075 3.76436 6.14623C3.7933 6.29172 3.86473 6.42535 3.96962 6.53024C4.0745 6.63513 4.20814 6.70656 4.35362 6.7355C4.49911 6.76443 4.6499 6.74958 4.78695 6.69282C4.92399 6.63605 5.04112 6.53992 5.12353 6.41659C5.20594 6.29325 5.24993 6.14825 5.24993 5.99992C5.24993 5.80101 5.17091 5.61024 5.03026 5.46959C4.88961 5.32894 4.69885 5.24993 4.49994 5.24993V5.24993ZM10.4999 5.24993C10.3515 5.24993 10.2065 5.29391 10.0832 5.37632C9.95985 5.45873 9.86372 5.57587 9.80695 5.71291C9.75019 5.84995 9.73534 6.00075 9.76428 6.14623C9.79321 6.29172 9.86464 6.42535 9.96953 6.53024C10.0744 6.63513 10.2081 6.70656 10.3535 6.7355C10.499 6.76443 10.6498 6.74958 10.7869 6.69282C10.9239 6.63605 11.041 6.53992 11.1234 6.41659C11.2059 6.29325 11.2498 6.14825 11.2498 5.99992C11.2498 5.80101 11.1708 5.61024 11.0302 5.46959C10.8895 5.32894 10.6988 5.24993 10.4999 5.24993Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10 mr-20">45</span>
                                <input type="button" hidden>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97267 1.00018L14.0048 7.03233C14.6651 7.69257 14.6651 8.77295 14.0048 9.43319L9.43319 14.0048C8.77295 14.6651 7.69257 14.6651 7.03233 14.0048L1.00018 7.97267C0.680064 7.65255 0.5 7.2224 0.5 6.77224V1.65041C0.5 1.01018 1.01018 0.5 1.65041 0.5H6.77224C7.2224 0.5 7.65255 0.680064 7.97267 1.00018Z" stroke="#ffffff80" />
                                    <path d="M3.34 4.48859C3.94199 4.48859 4.43 4.00058 4.43 3.39859C4.43 2.7966 3.94199 2.30859 3.34 2.30859C2.73801 2.30859 2.25 2.7966 2.25 3.39859C2.25 4.00058 2.73801 4.48859 3.34 4.48859Z" fill="#ffffff80" />
                                </svg>
                                </input>
                                <span class="ml-10">30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . '/parts/movwe_footer.php' ?>/
    </div>



    <!-- <script src="./js/jquery-3.6.0.js"></script> -->
    <script src="./js/Nav.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_7.js"></script>
    <script ript src="./js/seacher_page.js"></script>
</body>

</html>