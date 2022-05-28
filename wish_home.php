<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
    <link href="./fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css">
    <link rel="stylesheet" href="./css/single_movie.css">
    <link rel="stylesheet" href="./css/Carousel_1.css">
    <link rel="stylesheet" href="./css/Carousel_5.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/wish_page.css">
    <!-- <link rel="stylesheet" href="./css/single_movie.css"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap"
        rel="stylesheet">

    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /* outline: 1px solid greenyellow; */
        }

        body {
            background-color: rgb(26, 29, 36);
            font-family: 'Caveat', cursive;
            font-family: 'Cormorant Garamond', serif;
            font-family: 'Noto Serif TC', serif;
            overflow-x: hidden;

        }

        html {
            font-size: 12px;
        }



        /* @media screen and (max-width: 500px) {
            .left_nav {
                display: none;
            }

        } */




        @media screen and (min-width: 750px) {
            .text__container {
                width: 94%;
                height: 100vh;
                /* background-color: rgb(124, 124, 124); */
                margin: 80px auto 0 auto;

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
                display: none !important;
            }
        }

        /* ---------------------------------------- */



        /* ---------------------------------------- */
    </style>
</head>

<body>
    <!----------nav_top-------------->
    <div class="top_nav">
        <div class="top_nav_left">
            <div class="top_nav_logo">
                <div class="top_nav_logo_box">
                    <img class="top_nav_movwe_img-2" src="./images/icons/forum/close.svg" alt="">
                    <i class="fa-solid fa-bars top_nav_movwe_img bars"></i>
                    <img class="origin__logo" src="./images/LOGO.png" alt="">
                </div>
            </div>
            <div class="top_nav_movwe">
                <div class="top_nav_movwe_box">
                    <img class="top_nav_movwe_img mobil__show" src="./images/LOGO-m.svg" alt="">
                    <img class="top_nav_movwe_img desk__show" src="./images/Movwe-.png" alt="">
                </div>
            </div>
        </div>
        <div class="top_nav_right">
            <div class="top_nav_searchbar_box">
                <input type="text" class="top_nav_searchbar" placeholder="輸入片名">
                <div class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></div>

            </div>
        </div>
    </div>
    <div class="layout">
        <!----------nav_left-------------->
        <div class="left_nav">
            <div class="left_nav_box">
            </div>
            <div class="left_nav_box ">
                <div class="left_nav_home icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-house "></i>
                    </div>
                </div>
                <div class="nav_text_01 ">
                    <div class="h-60px">首頁 <span class="down">
                            <!-- <i class="fa-solid fa-angle-down"></i> -->
                        </span> </div>
                </div>

            </div>
            <div class="title_bottom">
                <div class="title_">首頁</div>
            </div>
            <div class="left_nav_box Movie">
                <div class="left_nav_movie icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-film"></i>
                    </div>
                    <div class="nav_text_01 ">
                        <div class="h-60px movie_btn">影劇 <span class="down"><i
                                    class="fa-solid fa-angle-down"></i></span></div>
                        <p class="text_a">影劇搜尋器</p>
                        <p class="text_a">ott上片資訊</p>
                        <p class="text_a">許願池</p>
                        <p class="text_a">心理測驗</p>
                        <p class="text_a">我的片單</p>
                        <p class="text_a">預約片單</p>
                        <p class="text_a">許願清單</p>
                        <p class="text_a">曾經瀏覽</p>
                        <p class="text_a">ott優惠卷</p>

                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">影劇</div>
            </div>
            <div class="left_nav_box Store">
                <div class="left_nav_store icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <div class="nav_text_01 ">
                        <div class="h-60px store_btn">商城 <span class="down"><i
                                    class="fa-solid fa-angle-down"></i></span></div>
                        <p class="text_a">主打活動</p>
                        <p class="text_a">商品總覽</p>
                        <p class="text_a">購物車</p>
                        <p class="text_a">我的訂單</p>
                        < class="text_a">商城優或卷</>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">商城</div>
            </div>

            <div class="left_nav_box Form">
                <div class="left_nav_forum icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-pencil pp"></i>
                    </div>
                    <div class="nav_text_01 ">
                        <div class="h-60px form_btn">文章 <span class="down"><i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <p class="text_a">文章總覽</p>
                        <p class="text_a">熱門作者</p>
                        <p class="text_a">熱門文章</p>
                        <p class="text_a">我的收藏</p>

                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">文章</div>
            </div>

            <div class="left_nav_box">
                <div class="left_nav_member icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">會員 <span class="down">
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
                            </span></div>
                        <p>00</p>
                        <p>00</p>
                        <p>00</p>
                        <p>00</p>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">會員</div>
            </div>

            <div class="left_nav_box Left__nav__bd">
                <div class="left_nav_discount icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">優惠 <span class="down">
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
                            </span></div>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_ Left__nav__bd">優惠</div>
            </div>
            <div class="left_nav_box Left__nav__bd">
                <div class="left_nav_discount icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">點數 <span class="down">
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
                            </span></div>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_ Left__nav__bd">點數</div>
            </div>


        </div>
        <div class="left_div"></div>

        <!--------------------------------------------------------------------------->
        <div class="container">

            <!--banner__container----------------->

            <!--text__container------內容放這邊------------->
            <div class="text__container">

                <div class="carousel__big__box__wish__page">
                    <div class="carousel__title__section__wish__page">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__wish__page">
                            <p>
                                快速許願
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wish__input__container">
                    <div class="wish__input__box">
                        <div class="wish__input__title">
                            <p>
                                新增影劇
                            </p>
                        </div>
                        <div class="wish__input__">
                            <input type="text" class="wish__input">
                        </div>
                        <div class="wish__button__box">
                            <button class="btn_2w wish__button">
                                確認        
                            </button>
                        </div>
                    </div>
                </div>


                <!--文章-------------------------------------------- -->


                <div class="carousel__big__box">
                    <div class="carousel__title__section">
                        <div class="stick_desk"></div>
                        <div class="carousel__title">
                            <p>
                                搜尋結果
                            </p>
                        </div>
                    </div>
                    <div class="carousel">
                        <div class="carousel__track-container">
                            <button class="carousle__button carousel__button--left is-hidden">
                                <div class="side__left">
                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                </div>
                            </button>
                            <ul class="carousel__track">
                                <li class="carousel__slide current-slide">
                                    <div class="image__box">
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-2.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <video class="information__video"
                                                        src="./images/video/single_mv-2.mov" autoplay loop
                                                        muted></video>
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-3.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-4.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-5.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel__slide current-slide">
                                    <div class="image__box">
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-2.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <video class="information__video"
                                                        src="./images/video/single_mv-2.mov" autoplay loop
                                                        muted></video>
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-3.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-4.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-5.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel__slide current-slide">
                                    <div class="image__box">
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-2.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <video class="information__video"
                                                        src="./images/video/single_mv-2.mov" autoplay loop
                                                        muted></video>
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-3.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-4.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-5.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/friday.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/iqiyi.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/netflix.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./icons/tv-logo/kktv.svg" alt="">
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
                                                                    <img src="./images/icons/core/start.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="information__point">
                                                                <p>
                                                                    4.9
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
                                                        <div class="information__bottom_5 Bottom__display">
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

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細...
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="information__bottom_6 Bottom__display">
                                                            <button class="push__up">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="carousel__images__box">
                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp"
                                                    alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/kktv.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/friday.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/iqiyi.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./icons/tv-logo/netflix.svg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="carousle__button carousel__button--right">
                                <div class="side__right">
                                    <i class="fa-solid fa-chevron-right right__icon"></i>
                                </div>
                            </button>
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



                <!--文章-------------------------------------------- -->


                <div class="carousel__big__box__5">
                    <div class="carousel__title__section__5">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__5">
                            <p>
                                許願池
                            </p>
                        </div>
                    </div>
                    <div class="carousel__5">
                        <div class="carousel__track-container__5">
                            <button class="carousle__button__5 carousel__button--left__5 is-hidden__5">
                                <div class="side__left__5">
                                    <i class="fa-solid fa-chevron-left left__icon__5"></i>
                                </div>
                            </button>
                            <ul class="carousel__track__5">
                                <li class="carousel__slide__5 current-slide__5">
                                    <div class="image__box__5">
                                        <div class="image__card__5">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__5 wish__card-2">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="carousel__slide__5 current-slide__5">
                                    <div class="image__box__5">
                                        <div class="image__card__5">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-6.webp"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__5 wish__card-2">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-7.jpg"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="carousel__slide__5 current-slide__5">
                                    <div class="image__box__5">
                                        <div class="image__card__5">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__5 wish__card-2">
                                            <div class="carousel__images__box__5">
                                                <img class="carousel__images__5" src="./images/movie_images/W/w-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="wish__text__box">
                                                <div class="wish__text__top">
                                                    <div class="wish__card__typ">
                                                        <p>
                                                            電視劇
                                                        </p>
                                                    </div>
                                                    <div class="wish__icon">
                                                        <img src="./icons/core/wish-clicked.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="wish__text__02">
                                                    <p>
                                                        星際效應
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1"></div>
                                                    <div class="wish__line-2"></div>
                                                    <div class="wish__line-3"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有6543人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <button class="carousle__button__5 carousel__button--right__5">
                                <div class="side__right__5">
                                    <i class="fa-solid fa-chevron-right right__icon__5"></i>
                                </div>
                            </button>
                            <div class="carousel__nav__5">
                                <button class="carousel__indicator__5 current-slide__5"></button>
                                <button class="carousel__indicator__5"></button>
                                <button class="carousel__indicator__5"></button>
                                <button class="carousel__indicator__5"></button>
                                <button class="carousel__indicator__5"></button>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/Nav.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_5.js"></script>
    <script src="./js/slider.js"></script>
    <script>
        var slider = new Slider("slider", {
            play_icon: '<i class="fas fa-play"></i>',
            pause_icon: '<i class="far fa-pause-circle"></i>',
            prev_icon: '<i class="fas fa-angle-left"></i>',
            next_icon: '<i class="fas fa-angle-right"></i>'
        });
    </script>

</body>

</html>