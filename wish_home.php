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
    <div class="Navbar__container">
        <div class="top_nav">
            <div class="top_nav_left">
                <div class="top_nav_logo">
                    <div class="top_nav_logo_box">
                        <img class="top_nav_movwe_img-2" src="./img/icons/close.svg" alt="">
                        <i class="fa-solid fa-bars top_nav_movwe_img bars"></i>
                        <img class="origin__logo" src="./img/logo/logo.svg" alt="">
                    </div>
                </div>
                <a href="Home-0516-final copy.html">
                    <div class="top_nav_movwe_box">
                        <img class="top_nav_movwe_img mobil__show" src="./img/logo/logo_movwe_word.svg" alt="">
                        <img class="top_nav_movwe_img desk__show" src="./img/logo/logo_word.svg" alt="">
                    </div>
                </a>
            </div>
            <div class="top_nav_right">
                <div class="top_nav_searchbar_box">
                    <input type="text" class="top_nav_searchbar" placeholder="輸入片名">
                    <div class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                </div>

                <a class="top__nav__icon__box " href="#">
                    <div class="top__nav__member">
                        <div class="nav_icon_box icon_W-H">
                            <i class="fa-solid fa-cart-shopping shop__card"></i>
                        </div>
                        <p class="shopcard__text">購物車</p>
                    </div>
                </a>

                <a class="top__nav__icon__box" href="#">
                    <div class="top__nav__member">
                        <div class="nav_icon_box icon_W-H">
                            <i class="fa-solid fa-file-video movie__likes"></i>
                        </div>
                        <p class="movie__like__text">片單</p>
                    </div>
                </a>

                <a class="top__nav__icon__box" href="#">
                    <div class="top__nav__member">
                        <div class="nav_icon_box icon_W-H">
                            <i class="fa-solid fa-user member__login"></i>
                            <div class="nav__member__picture__box">
                                <img class="nav__member__picture" src="./img/center/actor-1.jpeg" alt="">
                            </div>
                        </div>
                        <p class="home__logout">登出</p>
                        <p class="home__login">登入</p>
                    </div>
                </a>

            </div>
        </div>
        <div class="left_nav">
            <div class="left_nav_box">
            </div>
            <!-- <div class="left_nav_box ">
                <div class="left_nav_home icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-house "></i>
                    </div>
                </div>
                <div class="nav_text_01 ">
                    <div class="h-60px">首頁 <span class="down">
                        </span> </div>
                </div>

            </div>
            <div class="title_bottom">
                <div class="title_">首頁</div>
            </div> -->
            <div class="left_nav_box Movie">
                <div class="left_nav_movie icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-film"></i>
                    </div>
                    <div class="nav_text_01 ">
                        <div class="h-60px movie_btn">影劇 <span class="down"><i
                                    class="fa-solid fa-angle-down"></i></span></div>
                        <a href="#">
                            <p class="text_a">影劇搜尋器</p>
                        </a>
                        <a href="#">
                            <p class="text_a">ott上片資訊</p>
                        </a>
                        <a href="#">
                            <p class="text_a">許願池</p>
                        </a>
                        <a href="#">
                            <p class="text_a">心理測驗</p>
                        </a>
                        <a href="#">
                            <p class="text_a">我的片單</p>
                        </a>
                        <a href="#">
                            <p class="text_a">預約片單</p>
                        </a>
                        <a href="#">
                            <p class="text_a">許願清單</p>
                        </a>
                        <a href="#">
                            <p class="text_a">曾經瀏覽</p>
                        </a>
                        <a href="#">
                            <p class="text_a">ott優惠卷</p>
                        </a>

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
                        <a href="#">
                            <p class="text_a">主打活動</p>
                        </a>
                        <a href="#">
                            <p class="text_a">商品總覽</p>
                        </a>
                        <a href="#">
                            <p class="text_a">購物車</p>
                        </a>
                        <a href="#">
                            <p class="text_a">我的訂單</p>
                        </a>
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
                        <a href="#">
                            <p class="text_a">文章總覽</p>
                        </a>
                        <a href="#">
                            <p class="text_a">熱門作者</p>
                        </a>
                        <a href="#">
                            <p class="text_a">熱門文章</p>
                        </a>
                        <a href="#">
                            <p class="text_a">我的收藏</p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">文章</div>
            </div>

            <!-- <div class="left_nav_box">
                <div class="left_nav_member icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">會員 <span class="down">
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
            </div> -->

            <div class="left_nav_box">
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
                <div class="title_">優惠</div>
            </div>
            <!-- <div class="left_nav_box">
                <div class="left_nav_discount icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">點數 <span class="down">
                            </span></div>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">點數</div>
            </div> -->


        </div>
    </div>
    <div class="layout">
        <div class="left_div"></div>
        <!----------nav_left-------------->

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
                                推薦給您
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
                                                        src="./img/center/movie_card-W-1.jpeg" alt="">
                                                </div>
                                                <div class="information__bottom">
                                                    <div class="information__bottom_1 Bottom__display">
                                                        <p class="information__typ">
                                                            影劇
                                                        </p>
                                                        <div class="bottom_6_icon_box">
                                                            <a href="#">
                                                                <!-- <p class="bottom_6_icon">
                                                                    <img src="./img/logo/friday_s.svg" alt="">
                                                                </p> -->
                                                            </a>
                                                            <a href="#">
                                                                <p class="bottom_6_icon">
                                                                    <img src="./img/logo/iqiyi_s.svg" alt="">
                                                            </a>
                                                            </p>
                                                            <a href="#">
                                                                <!-- <p class="bottom_6_icon">
                                                                    <img src="./img/logo/kktv_s.svg" alt="">
                                                                </p> -->
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
                                                                查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_1.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            孤單又燦爛的神 鬼怪
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_16w.jpeg" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <!-- <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p>
                                                                </a> -->
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                分秒幣爭
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
                                                                    4.5
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                懸疑推理/
                                                            </p>
                                                            <p>
                                                                社會現場
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    金惠秀
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    劉亞仁
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    許峻豪
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-7.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            分秒幣爭
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_17w.jpeg" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
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
                                                                驅魔使者
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
                                                                    4.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                懸疑推理 /
                                                            </p>
                                                            <p>
                                                                社會現場
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    朴敘俊
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    安聖基
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    禹棹煥
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-6.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            驅魔使者
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_18w.jpeg" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                婚禮的那一天
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
                                                                    4.5
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                輕鬆喜劇
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    樸寶英
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    金英光
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    高圭弼
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-5.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            婚禮的那一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_19w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
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
                                                                臥底巨星
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
                                                                    4.7
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                輕鬆喜劇 /
                                                            </p>
                                                            <p>
                                                                運動競技
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    陳奕迅
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李榮浩
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    李一桐
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-4.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            臥底巨星
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_20w.jpeg" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                愛上變身情人
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
                                                                    4.6
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
                                                                    韓孝周
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李凡秀
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    樸信惠
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-3.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_21w.jpeg" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                霹靂交鋒
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
                                                                    4.3
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                運動競技
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    羅美蘭
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李聖經
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    尹相鉉
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h-2.jpeg" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            霹靂交鋒
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
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
                                                        src="./img/center/h_2w.webp" alt="">
                                                </div>
                                                <a href="#">
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
                                                                <a href="#">
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
                                                                國王排名
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
                                                                    5.0
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                奇幻冒險 /
                                                            </p>
                                                            <p>
                                                                闔家觀賞
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    日向未南
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    村瀨步
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    梶裕貴
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_2.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            國王排名
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_3w.webp" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
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
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                MIU404
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
                                                                    4.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                社會現場 /
                                                            </p>
                                                            <p>
                                                                懸疑推理
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    綾野剛
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    星野源
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    岡田健史
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_3.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            MIU404
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_4w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                動畫
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                你的名字
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
                                                                    4.6
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
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    神木隆之介
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    上白石萌音
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    市原悅子
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_4.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            你的名字
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_5w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                電影
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="information__bottom_2 Bottom__display">
                                                            <p class="information__name">
                                                                活下去Alive
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
                                                                    4.3
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
                                                                    松下奈緒
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    倉光泰子
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    巖城隆一
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_5.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            活下去Alive
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_6w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                駭客軍團
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
                                                                    4.6
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                社會現場 /
                                                            </p>
                                                            <p>
                                                                懸疑推理
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    馬利克
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    克利斯汀 
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    波西亞
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_6.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            駭客軍團
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_7w.webp" alt="">
                                                </div>
                                                <a href="#">
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
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                鋼之鍊金術師
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
                                                                    濱田賢二
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    志村知幸
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    早志勇紀
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_7.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_8w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                電影
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                非賣品
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
                                                                    4.5
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                社會現場 /
                                                            </p>
                                                            <p>
                                                                懸疑推理
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    馬東石
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    宋智孝
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    金盛吳
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_8.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            非賣品
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

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
                                                        src="./img/center/h_9w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                動畫
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
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
                                                                    工作細胞
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
                                                                    4.7
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
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    榎木淳彌
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    KENN
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    橫山遵
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_9.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            工作細胞
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_10w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                電影
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
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
                                                                酒鬼都市女人們
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
                                                                    4.9
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                輕鬆喜劇
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李善彬
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    韓善伙
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    崔始源
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_10.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            酒鬼都市女人們
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_12w.webp" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                Bad and Crazy
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
                                                                    4.9
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                社會現場
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    魏嘏雋
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李棟旭
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    韓智恩
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_12.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            Bad and Crazy
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card4">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_11w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
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
                                                                優秀巫師賈斗心
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
                                                                    4.5
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
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_11.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            優秀巫師賈斗心
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card5">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_13w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                電影
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="bottom_6_icon">
                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                </a>
                                                                </p>
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/kktv_s.svg" alt="">
                                                                    </p> -->
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
                                                                東京愛情故事
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
                                                                    4.6
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                闔家觀賞
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    江口洋介
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    鈴木保奈美
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    有森也實
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_13.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            東京愛情故事
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card6">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_14w.webp" alt="">
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
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p>
                                                                </a>
                                                                <a href="#">
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
                                                                我可能不會愛你
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
                                                                    4.3
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                輕鬆喜劇
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    李陣郁
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    河智苑
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    尹鈞相
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_14.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            真愛每一天
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card card7">
                                            <div class="imge__card__information">
                                                <div class="information__top">
                                                    <img class="information__video"
                                                        src="./img/center/h_15w.webp" alt="">
                                                </div>
                                                <a href="#">
                                                    <div class="information__bottom">
                                                        <div class="information__bottom_1 Bottom__display">
                                                            <p class="information__typ">
                                                                影劇
                                                            </p>
                                                            <div class="bottom_6_icon_box">
                                                                <a href="#">
                                                                    <!-- <p class="bottom_6_icon">
                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                    </p> -->
                                                                </a>
                                                                <a href="#">
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
                                                                一起吃晚餐媽
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
                                                                    4.8
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="information__bottom_4 Bottom__display">
                                                            <p>
                                                                浪漫愛情 /
                                                            </p>
                                                            <p>
                                                                闔家觀賞
                                                            </p>
                                                        </div>
                                                        <div class="information__bottom_5 Bottom__display">
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    徐智慧
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">
                                                                <p class="information__actor__name">
                                                                    宋承憲
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                            <a href="#">

                                                                <p class="information__actor__name">
                                                                    孫娜恩
                                                                </p>
                                                            </a>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
                                                            <a href="./single-movie-page0511.html">
                                                                <p class="detail">
                                                                    查看詳細..
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
                                                <img class="carousel__images" src="./img/center/h_15.webp" alt="">
                                                <div class="image__card__text">
                                                    <div class="movie__name">
                                                        <p>
                                                            一起吃晚餐嗎
                                                        </p>
                                                    </div>
                                                    <div class="movie__icons">
                                                        <!-- <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="movie__icon__box"> <a href=""></a>
                                                            <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                        </div>
                                                        <div class="movie__icon__box">
                                                            <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>

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
                                            <img class="carousel__images__5" src="./img/center/w-1.jpg" alt="">
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
                                            <img class="carousel__images__5" src="./img/center/w-2.jpg" alt="">
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