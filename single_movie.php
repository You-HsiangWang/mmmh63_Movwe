<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
    <!-- <link href="./fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css"> -->
    <link rel="stylesheet" href="./css/single_movie.css">
    <link rel="stylesheet" href="./css/Carousel_1.css">
    <link rel="stylesheet" href="./css/Carousel_6.css">
    <link rel="stylesheet" href="./css/Carousel_7.css">
    <link rel="stylesheet" href="./css/Carousel_8.css">
    <link rel="stylesheet" href="./css/slider.css">
    <!-- <link rel="stylesheet" href="./css/footer.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
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
            font-family: 'Cairo', sans-serif;
    font-family: 'Noto Sans TC', sans-serif;
            overflow-x: hidden;

        }

        html {
            font-size: 12px;
            /* overflow-x: hidden; */

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
            <div class="banner__container">
                <!-- <img src="./img/center/single_page_banner-2.png" alt=""> -->
                <video src="./img/video_dino/single_mv-2.mov" autoplay loop muted></video>
                <!-- autoplay  loop  muted -->
                <div class="shadow"></div>
                <div class="shadow2"></div>
                <div class="banner__logo">
                    <img src="./img/other/movie_title.png" alt="">
                </div>
            </div>

            <!--text__container------內容放這邊------------->
            <div class="text__container">
                <section class="section__1">
                    <div class="section__1_bigbox">
                        <div class="section__1_left_box">
                            <div class="section__1_imgbox">
                                <img src="./img/center/h_1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="section__1_rightbox">
                            <div class="star__box">
                                <div class="star_box_1">
                                    <div class="typ_1">
                                        <p>
                                            戲劇
                                        </p>
                                    </div>
                                    <div class="typ_2">
                                        <p>
                                            韓國
                                        </p>
                                    </div>
                                </div>
                                <div class="star_box_1-2">
                                    <p>2016</p>
                                </div>
                                <div class="star_box_2">
                                    <div class="star_icon">
                                        <div class="star_icon-img">
                                            <img src="./img/icons/start.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="star_point">
                                        <p>9.9</p>
                                    </div>
                                </div>
                                <div class="star_box_3">
                                    <div class="typ_3">
                                        <p>
                                            浪漫愛情 / 奇幻冒險
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="icon__box">

                                <a href=""><img class="bottom_6_icon" src="./img/logo/friday_s.svg" alt=""></a>
                                <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw"
                                    target="_blank"><img class="bottom_6_icon" src="./img/logo/iqiyi_s.svg" alt=""></a>
                                <a href=""><img class="bottom_6_icon" src="./img/logo/kktv_s.svg" alt=""></a>
                                <a href=""><img class="bottom_6_icon" src="./img/logo/netflix_s.svg" alt=""></a>
                            </div>
                            <div class="section__1_bottombox display__show mobile__none">
                                <div class="add__mymovie__box">
                                    <button class="push__up-2">
                                        <p>
                                            + 加入片單
                                        </p>
                                    </button>
                                </div>
                                <div class="movie__text">
                                    <p>
                                        一個想結束長生不死生命的妖怪金信（孔劉飾）與一個患有失憶症的陰間使者（李棟旭
                                        飾），陰差陽錯的同居在一起，並且共同為前往陰間的亡者們送行之間發生的傷感又美麗的故事。 身披血光、手撕敵軍的他是名副其實的戰神，但他卻死在自己主君的刀下。
                                        從那開始的939年間一直作為鬼怪活著，就像在心上插了一把劍一般。
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="movie__poster">
                            <div class="movie__poster__box">
                                <h1 class="movie__poster__box__h1">精彩劇照</h1>

                                <div id="slider"
                                    style="max-height: 400px; width: 90%; max-width: 960px; margin: 0 auto">
                                    <div class="slide">
                                        <a href="./img/center/single__post-1.png" rel="lightbox[plants]"><img
                                                src="./img/center/single__post-1.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-2.png" rel="lightbox[plants]"><img
                                                src="./img/center/single__post-2.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-3.png" rel="lightbox[plants]"><img
                                                src="./img/center/single__post-3.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-4.png" rel="lightbox[plants]"><img
                                                src="./img/center/single__post-4.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-5.png" rel="lightbox[plants]"><img
                                                src="./img/center/single__post-5.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__1_bottombox desk__disp__none">
                        <button class="add_mymoviebtn">
                            <p>
                                + 加入片單
                            </p>
                        </button>
                        <div class="movie__text">
                            <p>
                                讓角色化阻力為助力，設法克服缺陷更上一層樓，是勾勒劇情張力的關鍵要素之一。例如電影《雷神索爾》中主角曾一度失去神力，經歷一番酸甜苦辣才取回，也實現精神上的成長。但如果面對的是物理上無法改善的問題，到底人讓角色化阻力為助力，設法克服缺陷更上一層樓，是勾勒劇情張力的關鍵要素之一。例如電影《雷神索爾》中主角曾一度失去神力，經歷一番酸甜苦辣才取回，也實現精神上的成長。但如果面對的是物理上無法改善的問題，到底人..
                            </p>
                        </div>
                    </div>
                </section>

                <!--演員-------------------------------------------- -->

                <section class="section__2">
                    <div class="section__2_bigbox">
                        <div class="section__title">
                            <div class="stick_desk"></div>
                            <div class="ott__update">
                                <div class="ott__update__box">
                                    <p>演員 / 製作團隊</p>
                                </div>
                            </div>
                        </div>
                        <div class="actor__card__box">
                            <a href="actor_page.php" style="text-decoration:none;">
                                <div class="actor__card">
                                    <div class="actor__img-box">
                                        <img class="actor__img" src="./img/center/actor-1.jpeg" alt="">
                                        <img class="actor__img_filter" src="./img/center/actor-1.jpeg" alt="">
                                    </div>
                                    <div class="actor__card__text">
                                        <p class="Actor__name">孔劉</p>
                                        <p>Yoo Gong</p>
                                    </div>
                                </div>
                            </a>
                            <div class="actor__card">
                                <div class="actor__img-box">
                                    <img src="./img/center/actor-2.jpeg" alt="">
                                    alt="">
                                </div>
                                <div class="actor__card__text">
                                    <p class="Actor__name">金高銀</p>
                                    <p>Kim Go-eun</p>
                                </div>
                            </div>
                            <div class="actor__card">
                                <div class="actor__img-box">
                                    <img src="./img/center/actor-3.jpeg" alt="">
                                </div>
                                <div class="actor__card__text">
                                    <p class="Actor__name">陸星材</p>
                                    <p>Sung-Jae Yook</p>
                                </div>
                            </div>
                            <div class="actor__card">
                                <div class="actor__img-box">
                                    <img src="./img/center/actor-4.jpeg" alt="">
                                </div>
                                <div class="actor__card__text">
                                    <p class="Actor__name">郭東延</p>
                                    <p>Kwak Dong-Yeon</p>
                                </div>
                            </div>
                            <div class="actor__card">
                                <div class="actor__img-box">
                                    <img src="./img/center/actor-7.jpeg" alt="">
                                </div>
                                <div class="actor__card__text">
                                    <p class="Actor__name">李應福</p>
                                    <p>Lee Eung-bok</p>
                                </div>
                            </div>
                            <div class="actor__card">
                                <div class="actor__img-box">
                                    <img src="./img/center/actor-6.jpeg" alt="">
                                </div>
                                <div class="actor__card__text">
                                    <p class="Actor__name">劉寅娜</p>
                                    <p>Yoo In-Na</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!--集數-------------------------------------------- -->




                <div class="carousel__big__box__6">
                    <div class="carousel__title__section__6">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__6">
                            <p>
                                更新集數
                            </p>
                            <p class="single__page__iQiYi">
                                IQiYi
                            </p>
                            <p class="single__page__Netflix">
                                Netflix
                            </p>

                        </div>
                    </div>
                    <div class="carousel__6">
                        <div class="carousel__track-container__6">
                            <button class="carousle__button__6 carousel__button--left__6 is-hidden__6">
                                <div class="side__left__6">
                                    <i class="fa-solid fa-chevron-left left__icon__6"></i>
                                </div>
                            </button>
                            <ul class="carousel__track__6 ">
                                <li class="carousel__slide__6 current-slide__6 ">
                                    <div class="image__box__6">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi">
                                                <img class="carousel__images__6" src="./img/center/Episode-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex">
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num01.png" alt="">
                                            </div>
                                        </div>

                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_2">
                                                <img class="carousel__images__6" src="./img/center/Episode-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_2">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num02.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_3">
                                                <img class="carousel__images__6" src="./img/center/Episode-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_3">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num03.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_4">
                                                <img class="carousel__images__6" src="./img/center/Episode-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_4">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num04.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_5">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_5">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num05.png" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="image__box__6">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-6.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_6">
                                                <img class="carousel__images__6" src="./img/center/Episode-6.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_6">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num06.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-7.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_7">
                                                <img class="carousel__images__6" src="./img/center/Episode-7.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_7">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num07.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-8.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_8">
                                                <img class="carousel__images__6" src="./img/center/Episode-8.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_8">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num08.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-9.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_9">
                                                <img class="carousel__images__6" src="./img/center/Episode-9.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_9">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num09.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_10">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_10">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num10.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel__slide__6 current-slide__6 switch__iQiyi">
                                    <div class="image__box__6">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num11.png" alt="">
                                            </div>
                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num12.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num13.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num14.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num15.png" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="image__box__6">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num16.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num17.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num18.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                            <img src="./img/other/num19.png" alt="">
                                            </div>
                                        </div>
                                        <div class="image__card__6 wish__card-2 carousel__opacity_0">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg"
                                                    alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/center/10.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="carousle__button__6 carousel__button--right__6">
                                <div class="side__right__6">
                                    <i class="fa-solid fa-chevron-right right__icon__6"></i>
                                </div>
                            </button>
                            <div class="carousel__nav__6">
                                <button class="carousel__indicator__6 current-slide__6"></button>
                                <button class="carousel__indicator__6"></button>
                                <button class="carousel__indicator__6"></button>
                                <button class="carousel__indicator__6"></button>
                                <button class="carousel__indicator__6"></button>
                            </div>

                        </div>
                    </div>
                </div>






                <!--商品-------------------------------------------- -->

                <div class="carousel__big__box__7">
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
                            <button class="carousle__button__7 carousel__button--left__7 is-hidden__7">
                                <div class="side__left__7">
                                    <i class="fa-solid fa-chevron-left left__icon__7"></i>
                                </div>
                            </button>
                            <ul class="carousel__track__7">
                                <li class="carousel__slide__7 current-slide__7">
                                    <div class="image__box__7">
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                <li class="carousel__slide__7 current-slide__7">
                                    <div class="image__box__7">
                                        <div class="image__card__7">
                                            <div class="carousel__images__box__7">
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>
                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                <img class="carousel__images__7" src="./img/center/product-3.jpeg"
                                                    alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id">
                                                            豪華精裝典藏A版/2CD
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i
                                                                class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                            <button class="carousle__button__7 carousel__button--right__7">
                                <div class="side__right__7">
                                    <i class="fa-solid fa-chevron-right right__icon__7"></i>
                                </div>
                            </button>
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



                <!--商品-------------------------------------------- -->





                <div class="carousel__big__box__8">
                    <div class="carousel__title__section__8">
                        <div class="stick_desk"></div>
                        <div class="carousel__title__8">
                            <p>
                                相關討論
                            </p>
                        </div>
                    </div>
                    <div class="carousel__8">
                        <div class="carousel__track-container__8">
                            <button class="carousle__button__8 carousel__button--left__8 is-hidden__8">
                                <div class="side__left__8">
                                    <i class="fa-solid fa-chevron-left left__icon__8"></i>
                                </div>
                            </button>
                            <ul class="carousel__track__8">
                                <li class="carousel__slide__8 current-slide__8">
                                    <div class="image__box__8">
                                        <div class="image__card__8">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-5.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-4.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-3.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-2.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-1.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel__slide__8 current-slide__8">
                                    <div class="image__box__8">
                                        <div class="image__card__8">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-5.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-4.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-3.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-2.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-1.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel__slide__8 current-slide__8">
                                    <div class="image__box__8">
                                        <div class="image__card__8">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-5.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-4.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-3.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-2.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8"
                                                        src="./img/center/single__post-1.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    明天也想見到你明信片
                                                </div>
                                                <div class="ott__article__productprice">
                                                    加油吧威基基2 為韓國JTBC於2019年3月25日事月火連續劇。本劇講述高中同學聚集在「威基..
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg"
                                                                    alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg"
                                                                    alt=""></div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                500
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="carousle__button__8 carousel__button--right__8">
                                <div class="side__right__8">
                                    <i class="fa-solid fa-chevron-right right__icon__8"></i>
                                </div>
                            </button>
                            <div class="carousel__nav__8">
                                <button class="carousel__indicator__8 current-slide__8"></button>
                                <button class="carousel__indicator__8"></button>
                                <button class="carousel__indicator__8"></button>
                                <button class="carousel__indicator__8"></button>
                                <button class="carousel__indicator__8"></button>
                            </div>


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






                <!--文章-------------------------------------------- -->



            </div>

        </div>
    </div>




    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/jquery-1.7.2.min.js"></script>
    <script src="./js/Nav.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_6.js"></script>
    <script src="./js/Carousel_7.js"></script>
    <script src="./js/Carousel_8.js"></script>
    <script src="./js/Carousel_9.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/lightbox.js"></script>
    <script src="./js/jquery-ui-1.8.18.custom.min.js"></script>
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