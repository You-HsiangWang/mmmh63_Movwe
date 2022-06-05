<?php

require './parts/movwe_connect_db.php';
$title = 'MOVWE-孤單又燦爛的神-鬼怪';

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
<link rel="stylesheet" href="./css/lightbox.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="./css/footer.css"> -->
<style>
    * {
        /* outline: 1px solid greenyellow; */
    }

    /*  */
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <!----------nav_left-------------->
        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>

        <!--------------------------------------------------------------------------->
        <div class="container overflow-x">

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

                                <!-- <a href=""><img class="bottom_6_icon" src="./img/logo/friday_s.svg" alt=""></a> -->
                                <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw" target="_blank"><img class="bottom_6_icon" src="./img/logo/iqiyi_s.svg" alt=""></a>
                                <!-- <a href=""><img class="bottom_6_icon" src="./img/logo/kktv_s.svg" alt=""></a> -->
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
                                <!-- <h1 class="movie__poster__box__h1">精彩劇照</h1> -->

                                <div id="slider" style="max-height: 400px; width: 90%; max-width: 960px; margin: 0 auto">
                                    <div class="slide">
                                        <a href="./img/center/single__post-1.png" rel="lightbox[plants]"><img src="./img/center/single__post-1.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-2.png" rel="lightbox[plants]"><img src="./img/center/single__post-2.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-3.png" rel="lightbox[plants]"><img src="./img/center/single__post-3.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-4.png" rel="lightbox[plants]"><img src="./img/center/single__post-4.png" alt="" /></a>
                                    </div>
                                    <div class="slide">
                                        <a href="./img/center/single__post-5.png" rel="lightbox[plants]"><img src="./img/center/single__post-5.png" alt="" /></a>
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
                                    <img src="./img/center/actor-6.jpeg" alt="">
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
                                    <img src="./img/center/actor-4.jpeg" alt="">
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
                                            <a href="https://www.iq.com/play/%E9%AC%BC%E6%80%AA-%E7%AC%AC1%E9%9B%86-19rr9zts4k?lang=zh_tw">
                                                <div class="carousel__images__box__6">
                                                    <img class="carousel__images__6" src="./img/center/Episode-1.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="single__page__dark_box switch__iQiyi">
                                                <img class="carousel__images__6" src="./img/center/Episode-1.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex">
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num01.png" alt="">
                                            </div>
                                        </div>

                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-2.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_2">
                                                <img class="carousel__images__6" src="./img/center/Episode-2.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_2">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num02.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-3.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_3">
                                                <img class="carousel__images__6" src="./img/center/Episode-3.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_3">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num03.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-4.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_4">
                                                <img class="carousel__images__6" src="./img/center/Episode-4.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_4">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num04.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_5">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_5">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num05.png" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="image__box__6 single__displaynone">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-6.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_6">
                                                <img class="carousel__images__6" src="./img/center/Episode-6.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_6">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num06.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-7.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_7">
                                                <img class="carousel__images__6" src="./img/center/Episode-7.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_7">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num07.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-8.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_8">
                                                <img class="carousel__images__6" src="./img/center/Episode-8.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_8">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num08.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-9.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_9">
                                                <img class="carousel__images__6" src="./img/center/Episode-9.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_9">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num09.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__iQiyi_10">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box switch__netflex_10">
                                                <img class="carousel__images__6" src="./img/center/Episode-5.jpg" alt="">
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
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-11.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num11.png" alt="">
                                            </div>
                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-12.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num12.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-13.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num13.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-14.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num14.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-15.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num15.png" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="image__box__6 single__displaynone">
                                        <div class="image__card__6">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-16.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num16.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-17.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num17.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-18.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num18.png" alt="">
                                            </div>

                                        </div>
                                        <div class="image__card__6 wish__card-2">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-19.jpg" alt="">

                                            </div>
                                            <div class="single__page__dark_number">
                                                <img src="./img/other/num19.png" alt="">
                                            </div>
                                        </div>
                                        <div class="image__card__6 wish__card-2 carousel__opacity_0">
                                            <div class="carousel__images__box__6">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg" alt="">
                                            </div>
                                            <div class="single__page__dark_box">
                                                <img class="carousel__images__6" src="./img/center/Episode-10.jpg" alt="">

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

                <div class="carousel__big__box__7 single__page__mt">
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst01.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪限量貼紙組
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                        <p class="Product__id product__name__single">
                                                            韓劇鬼怪PVC夾鍊袋
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                190
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
                                                        <p class="Product__id product__name__single">
                                                            手機支架人形立牌
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                360
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
                                                        <p class="Product__id product__name__single">
                                                            桌上小台曆
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                        <p class="Product__id product__name__single">
                                                            韓劇鬼怪照片集
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                500
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
                                                        <p class="Product__id product__name__single">
                                                            鬼怪哇娃 白色
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst07.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪娃娃 黑色
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst08.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪娃娃 白色
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst09.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪娃娃 藍色
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst10.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪娃娃 紅色
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst11.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪娃娃經典系列組
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
                                                    </div>
                                                    <div class="movie__icons__7">
                                                        <div class="movie__icon__box__7">
                                                            <p class="Price">
                                                                899
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
                                                        <p class="Product__id product__name__single">
                                                            鬼怪鑰匙圈
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
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
                                                <img class="carousel__images__7" src="./img/mall/gst/gst13.jpg" alt="">
                                                <div class="image__card__text__7">
                                                    <div class="movie__name__7">
                                                        <p class="Product__id product__name__single">
                                                            鬼怪原子筆
                                                        </p>
                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                        <p class="Product__id product__name__single">
                                                            鬼怪筆記本
                                                        </p>

                                                        <button class="Shop__card__icon__box">
                                                            <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                            </b>
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
                                                    <img class="carousel__images__8" src="./img/center/single__post-5.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    孤獨又燦爛的神--鬼怪，神提的問題是命運，而答案是...
                                                </div>
                                                <div class="ott__article__productprice">
                                                    去年2016年，年初最最最有名的電影就是"釜山行"，男主角也是同一個人【孔侑】，年底上檔的鬼怪也讓孔侑這位男神又大出風頭了一次。
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                34
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                145
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-4.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    超夯韓劇《孤單又燦爛的神－鬼怪》裡，這些細膩的外語插曲是他們唱的
                                                </div>
                                                <div class="ott__article__productprice">
                                                    劇中的「使鬼CP」為了拯救被綁架的恩倬，從煙霧中帥氣現身所響起的〈Round and round〉，以及男女主角30年後再次重逢時所播出的〈Winter is coming〉，兩首唯美的歌都是由出道12年的女歌手韓秀芝所演唱。
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div></div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                112
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                324
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-3.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    鬼怪》背後的鬼怪（四）：「高富帥」鬼怪Oppa篇
                                                </div>
                                                <div class="ott__article__productprice">
                                                    前文我們提到日本人透過教科書灌輸來自日本鬼怪原型給朝鮮半島人民，迄今這樣的日本鬼在韓國人的生活世界內可見。
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>37</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                76
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                34
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-2.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    21世紀童話書的鬼怪篇
                                                </div>
                                                <div class="ott__article__productprice">
                                                    我們在《鬼怪》劇中，可以看到女主角池恩晫為了「調查」孔劉鬼怪身份，來到書局翻閱一些鬼怪童書，這些童話書都是韓國人極為熟悉的。筆者鑑於國內對於韓國文學仍顯陌生，挑出幾則同時也是女主角翻閱的童話書加以介紹。


                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>56</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                234
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                51
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-1.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    高麗到日據時代鬼怪篇
                                                </div>
                                                <div class="ott__article__productprice">
                                                    韓國鬼怪的形象，來到高麗時代（918-1392）漸漸形成百姓人們信仰的對象，也逐漸昇華為如同之後朝鮮時代（1392-1897）張繼弛（장계이）《海東雜錄》（해동잡록） 內所記載，言「鬼怪」（도깨비）為「民間信仰中，具有超自然能力存在的一種」
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>500</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
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
                                                    <img class="carousel__images__8" src="./img/center/single__post-5.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    新羅鬼怪篇
                                                </div>
                                                <div class="ott__article__productprice">
                                                    鬼怪（特別是在第十、十一集）言及他活了935歲，真正的名字叫做金信（김신），且提到自己的身份為將軍，與高麗奸臣朴中元、畫他妹妹金善（김선）的王黎畫家等線索，許多網友考察出，金信的原型為崔瑩（최영，1316-1388）。
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>332</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                234
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                524
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-4.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    鬼怪中最愛的使者和Sunny
                                                </div>
                                                <div class="ott__article__productprice">
                                                    孤單又燦爛的神-鬼怪 是現在最紅的韓劇了吧
                                                    一直沒有去追 昨天一口氣把1-12集看完
                                                    很多人喜歡召喚cp 死鬼cp
                                                    但我最喜歡的是地獄使者跟Sunny的故事
                                                    他們的前世是王 和王后
                                                    兩人之間有滿滿的愧疚和懊悔
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>334</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                253
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                768
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-3.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    水島太太#孔劉
                                                </div>
                                                <div class="ott__article__productprice">
                                                    你怎麼那麼像水島太太啦！
                                                    吼你這樣我真的不知道該怎麼繼續看下去餒
                                                    雖然孔劉看第一眼沒有很帥
                                                    但怎麼可以越看越帥啦
                                                    不說了 我要去看我的水島太太了
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>341</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                665
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                737
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-2.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    重新思考生命意義的好劇
                                                </div>
                                                <div class="ott__article__productprice">
                                                    看完這整部戲，影響我最多的
                                                    應該是「對生命的態度」吧！
                                                    很喜歡每一集小使茶館裡的劇情
                                                    每一個亡者都有著自己的故事
                                                    不管是自然死亡還是意外死亡
                                                    都是在告訴我們要「活在當下」
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>343</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                234
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                827
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__8 image__card__8__mob_none">
                                            <div class="carousel__images__box__8">
                                                <div class="ott__article__imgbox">
                                                    <img class="carousel__images__8" src="./img/center/single__post-1.png" alt="">
                                                </div>
                                                <div class="ott__article__typ">
                                                    電視劇
                                                </div>
                                                <div class="ott__article__productname">
                                                    看鬼怪結局有哭的舉手
                                                </div>
                                                <div class="ott__article__productprice">
                                                    我是個幾乎不追劇的人，除非電視有播
                                                    我可以忍受每個禮拜在電視前固定觀看
                                                    卻無法忍受自己一集一集狂看
                                                    靠著電視看完的韓劇大概七部？
                                                </div>
                                                <div class="ott__likeicons">
                                                    <div class="ott__likeicon-box">
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/heart.svg" alt=""></div>
                                                            <div>434</div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/message.svg" alt=""></div>
                                                            <div>
                                                                323
                                                            </div>
                                                        </div>
                                                        <div class="likeicon__box">
                                                            <div class="mr__6px"><img src="./img/icons/tag.svg" alt="">
                                                            </div>
                                                            <div>
                                                                126
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


                <div class="carousel__big__box mb_single_page">
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
                                                    <img class="information__video" src="./img/center/movie_card-W-1.jpeg" alt="">
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
                                                    <div class="movie__name main_movie">
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
                                                    <img class="information__video" src="./img/center/h_16w.jpeg" alt="">
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
                                                    <img class="information__video" src="./img/center/h_17w.jpeg" alt="">
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
                                                    <img class="information__video" src="./img/center/h_18w.jpeg" alt="">
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
                                                    <img class="information__video" src="./img/center/h_19w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_20w.jpeg" alt="">
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
                                                    <img class="information__video" src="./img/center/h_21w.jpeg" alt="">
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
                                                    <img class="information__video" src="./img/center/h_2w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_3w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_4w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_5w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_6w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_7w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_8w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_9w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_10w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_12w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_11w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_13w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_14w.webp" alt="">
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
                                                    <img class="information__video" src="./img/center/h_15w.webp" alt="">
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

            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>
    </div>




    <!-- <script src="./js/jquery-3.6.0.js"></script> -->
    <script src="./js/Nav.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_6.js"></script>
    <script src="./js/Carousel_7.js"></script>
    <script src="./js/Carousel_8.js"></script>
    <script src="./js/Carousel_9.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/jquery-1.7.2.min.js"></script>
    <script src="./js/lightbox.js"></script>
    <!-- <script src="./js/jquery-ui-1.8.18.custom.min.js"></script> -->
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