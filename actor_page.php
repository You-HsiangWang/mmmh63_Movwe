<?php

require './parts/movwe_connect_db.php';
$title = 'MOVWE-孔劉';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
<!-- <link href="./fontawesome/css/all.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/actor_02.css">
<link rel="stylesheet" href="./css/Carousel_1.css">
<link rel="stylesheet" href="./css/go_to_ott-3.css">
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
<!-- <title>Document</title> -->
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
        overflow-x: hidden;

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
            transform: scale(1);
        }
    }
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>

    <div class="go-to-ott-03">
        <div class="with-coupon-top">
            <div class="coupon-logo">
                <div class="coupon_logopic">
                    <img src="./img/logo/logo.svg" alt="">
                </div>
                <div class="coupon_logoword">
                    <img src="./img/logo/logo_word.svg" alt="">
                </div>

            </div>
            <div class="coupon-thanks"> 謝謝您使用MOVWE的服務！</div>
        </div>
        <div class="with-coupon-center">
            <div class="with-coupon">
                <div class="with-coupon-pic">
                    <img src="./img/logo/coupon-for-ott.svg" alt="">
                </div>
                <div class="with-coupon-word">
                    恭喜！獲得 <a href="#">10</a> 點！<br>
                    前往 <a href="#">優惠券專區</a>
                </div>
            </div>
        </div>
        <div class="with-coupon-last">
            還沒登入MOVWE嗎？
        </div>
        <div class="go_to_ott_box">
            <a href="member_login.php" class="saveurl">
                <button class="btn_2w close_ott_box">
                    前往登入
                </button>
            </a>
        </div>
    </div>

    <div class="layout">
        <div class="left_div"></div>
        <!----------nav_left-------------->




        <!--------------------------------------------------------------------------->
        <div class="container">
            <!----------------------------------------------------------------------->








            <!--banner__container----------------->
            <div class="banner__container_2">
                <!-- <img src="./nav_images/carousel-1.jpeg" alt=""> -->
            </div>

            <!--text__container------內容放這邊------------->
            <div class="text__container">
                <a href="./wish_page.php">
                    <div class="wish__lamp__box">
                        <div class="home__make__a__wish">
                            <p>
                                來許個願吧～
                            </p>
                        </div>
                        <img class="magic__lamp-1" src="./img/center/magic_lamp_hover.png" alt="">
                        <img class="magic__lamp-2" src="./img/center/magic_lamp.png" alt="">
                    </div>
                </a>


                <div class="actor">
                    <div class="actor-top">
                        <div class="actor_pic">
                            <img src="./img/center/actor-kong.png" alt="">
                        </div>
                        <div class="actor_name">GONG <br> YOO</div>
                    </div>
                    <div class="actor__right__container">
                        <div class="actor_right">
                            <div class="actor_filter" id="actor_tab">
                                <ul class="actor_filter_word">
                                    <li class="actor_all"><a class="actor_all_2" href="#ac_all">全部</a></li>
                                    <li class="actor_movie"><a class="actor_movie_2" href="#ac_movie">電影</a></li>
                                    <li class="actor_tvshow"><a class="actor_tv_2" href="#ac_tv">電視劇</a></li>
                                    <li class="actor_show"><a class="actor_show_2" href="#ac_show">綜藝</a></li>
                                    <li class="actor_sho"><a href="#ac_sho"></a></li>
                                    <li class="actor_sho"><a href="#ac_sho"></a></li>

                                </ul>
                                <div class="actor_underline"></div>
                            </div>
                            <div class="actor_bottom">
                                <div class="carousel__big__box Actor__all">
                                    <div class="carousel__title__section">
                                        <div class="stick_desk"></div>
                                        <div class="carousel__title">
                                            <p>
                                                全部結果
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel">
                                        <div class="carousel__track-container">
                                            <button class="carousle__button carousel__button--left is-hidden carousle__button__actor carousle__button__actor--left">
                                                <div class="side__left">
                                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                                </div>
                                            </button>
                                            <ul class="carousel__track">
                                                <li class="carousel__slide current-slide ">
                                                    <div class="image__box ">
                                                        <div class="image__card image__card__actor ">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/movie_card-W-1.jpeg" alt="">
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
                                                                                        <img src="./img/logo/friday_s.svg"
                                                                                            alt="">
                                                                                    </p> -->
                                                                                </a>
                                                                                <a href="https://www.iq.com/album/%E9%AC%BC%E6%80%AA-2016-19rrh9vpnt?lang=zh_tw" target="_blank">
                                                                                    <p class="bottom_6_icon go_to_ott">
                                                                                        <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                                </a>
                                                                                </p>
                                                                                <a href="#">
                                                                                    <!-- <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/kktv_s.svg"
                                                                                            alt="">
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="./single_movie.php">
                                                                                <p class="detail ">
                                                                                    查看詳細..
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div class="information__bottom_6 Bottom__display">
                                                                            <button class="push__up addtofild">
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
                                                                        <p class="actor__movie_name">
                                                                            孤單又燦爛的神 鬼怪
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor actor__none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/ky-all-1.jpeg" alt="">
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
                                                                                        <img src="./img/logo/kktv_s.svg"
                                                                                            alt="">
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
                                                                                屍速列車
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
                                                                                    8.6
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                社會現場 /
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            屍速列車
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                                <a href="">
                                                                                    <img src="./img/logo/kktv_s.svg"
                                                                                        alt="">
                                                                            </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/ky-all-2.jpeg" alt="">
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
                                                                                        <img src="./img/logo/friday_s.svg"
                                                                                            alt="">
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
                                                                                密探
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
                                                                                    9.5
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            密探
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/ky-all-3.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                影劇
                                                                            </p>
                                                                            <div class="bottom_6_icon_box">
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/friday_s.svg"
                                                                                            alt="">
                                                                                    </p>
                                                                                </a> -->
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/iqiyi_s.svg"
                                                                                            alt="">
                                                                                </a> -->
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
                                                                                關不住的誘惑
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
                                                                                    8.6
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-3.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            關不住的誘惑
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card5 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.4
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card6 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.8
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card7 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.7
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__slide current-slide">
                                                    <div class="image__box">
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-1.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
                                                                            </p>
                                                                            <div class="bottom_6_icon_box">
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
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
                                                                                柳喜烈的寫生簿
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
                                                                                    8.7
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            柳喜烈的寫生簿
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-2.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
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
                                                                                李棟旭脫口秀
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
                                                                                    8.9
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            李棟旭脫口秀
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-3.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
                                                                            </p>
                                                                            <div class="bottom_6_icon_box">
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
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
                                                                                QUIZ ON THE BLOCK
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
                                                                                    9.1
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-3.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            QUIZ ON THE BLOCK
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-4.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
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
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
                                                                            </div>

                                                                        </div>
                                                                        <div class="information__bottom_2 Bottom__display">
                                                                            <p class="information__name">
                                                                                Running man
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
                                                                                    9.3
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-4.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            Running man
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card5 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.4
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card6 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.8
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card7 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.7
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="carousel__slide current-slide">
                                                    <div class="image__box">
                                                    <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-5.jpeg" alt="">
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
                                                                                碟影殺機
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
                                                                                社會現場 /
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-5.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            諜影殺機
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-tvl-1.jpeg" alt="">
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
                                                                                魷魚遊戲
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
                                                                                    9.2
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-tvl-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            真愛上錯身
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-tv-2.jpeg" alt="">
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
                                                                                真愛上錯身
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
                                                                                    9.7
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-tv-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            真愛上錯身
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-4.jpeg" alt="">
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
                                                                                        <img src="./img/logo/friday_s.svg" alt=""> -->
                                                                                    </p>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <!-- <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/iqiyi_s.svg" alt=""> -->
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
                                                                                寧靜海
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
                                                                                    9.2
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-4.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            寧靜海
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card5 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.4
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card6 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.8
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card7 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.7
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button class="carousle__button carousel__button--right carousle__button__actor carousle__button__actor--right">
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



                                <!----------------------------------------------------->


                                <div class="carousel__big__box Actor__movie">
                                    <div class="carousel__title__section">
                                        <div class="stick_desk"></div>
                                        <div class="carousel__title">
                                            <p>
                                                電影
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel">
                                        <div class="carousel__track-container">
                                            <!-- <button
                                                class="carousle__button carousel__button--left is-hidden carousle__button__actor carousle__button__actor--left">
                                                <div class="side__left">
                                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                                </div>
                                            </button> -->
                                            <ul class="carousel__track">
                                                <li class="carousel__slide current-slide">
                                                    <div class="image__box">
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/ky-all-1.jpeg" alt="">
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
                                                                                        <img src="./img/logo/kktv_s.svg"
                                                                                            alt="">
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
                                                                                屍速列車
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
                                                                                    8.6
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                社會現場 /
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            屍速列車
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                                <a href="">
                                                                                    <img src="./img/logo/kktv_s.svg"
                                                                                        alt="">
                                                                            </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-2.jpeg" alt="">
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
                                                                                        <img src="./img/logo/friday_s.svg"
                                                                                            alt="">
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
                                                                                密探
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
                                                                                    8.5
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                社會寫實 /
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            密探
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg"
                                                                                    alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-3.jpeg" alt="">
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
                                                                                關不住的誘惑
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-3.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            關不住的誘惑
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-5.jpeg" alt="">
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
                                                                                碟影殺機
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
                                                                                社會現場 /
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-5.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            諜影殺機
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card5 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    9.3
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            諜影殺機
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card6 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.5
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card7 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    9.5
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- <button
                                                class="carousle__button carousel__button--right carousle__button__actor carousle__button__actor--right">
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
                                <div class="carousel__big__box Actor__TV">
                                    <div class="carousel__title__section">
                                        <div class="stick_desk"></div>
                                        <div class="carousel__title">
                                            <p>
                                                電視劇
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel">
                                        <div class="carousel__track-container">
                                            <!-- <button
                                                class="carousle__button carousel__button--left is-hidden carousle__button__actor carousle__button__actor--left">
                                                <div class="side__left">
                                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                                </div>
                                            </button> -->
                                            <ul class="carousel__track">
                                                <li class="carousel__slide current-slide">
                                                    <div class="image__box">
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./img/center/movie_card-W-1.jpeg" alt="">
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="./single_movie.php">
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
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-tvl-1.jpeg" alt="">
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
                                                                                魷魚遊戲
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
                                                                                    9.2
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-tvl-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            真愛上錯身
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-tv-2.jpeg" alt="">
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
                                                                                真愛上錯身
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
                                                                                    9.7
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-tv-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            真愛上錯身
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-all-4.jpeg" alt="">
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
                                                                                        <img src="./img/logo/friday_s.svg" alt=""> -->
                                                                                    </p>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <!-- <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/iqiyi_s.svg" alt=""> -->
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
                                                                                寧靜海
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
                                                                                    9.2
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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-all-4.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            寧靜海
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- <button
                                                class="carousle__button carousel__button--right carousle__button__actor carousle__button__actor--right">
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
                                <div class="carousel__big__box Actor__fun">
                                    <div class="carousel__title__section">
                                        <div class="stick_desk"></div>
                                        <div class="carousel__title">
                                            <p>
                                                綜藝
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel">
                                        <div class="carousel__track-container">
                                            <!-- <button
                                                class="carousle__button carousel__button--left is-hidden carousle__button__actor carousle__button__actor--left">
                                                <div class="side__left">
                                                    <i class="fa-solid fa-chevron-left left__icon"></i>
                                                </div>
                                            </button> -->
                                            <ul class="carousel__track">
                                                <li class="carousel__slide current-slide">
                                                    <div class="image__box">
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-1.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
                                                                            </p>
                                                                            <div class="bottom_6_icon_box">
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
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
                                                                                柳喜烈的寫生簿
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
                                                                                    8.7
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-1.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            柳喜烈的寫生簿
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-2.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
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
                                                                                李棟旭脫口秀
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
                                                                                    8.9
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-2.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            李棟旭脫口秀
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-3.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
                                                                            </p>
                                                                            <div class="bottom_6_icon_box">
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/friday_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
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
                                                                                QUIZ ON THE BLOCK
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
                                                                                    9.1
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-3.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            QUIZ ON THE BLOCK
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div> -->
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card image__card__actor">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="carousel__images" src="./img/center/ky-fun-4.jpeg" alt="">
                                                                </div>
                                                                <a href="#">
                                                                    <div class="information__bottom">
                                                                        <div class="information__bottom_1 Bottom__display">
                                                                            <p class="information__typ">
                                                                                綜藝
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
                                                                                <!-- <a href="#">
                                                                                    <p class="bottom_6_icon">
                                                                                        <img src="./img/logo/netflix_s.svg" alt="">
                                                                                    </p>
                                                                                </a> -->
                                                                            </div>

                                                                        </div>
                                                                        <div class="information__bottom_2 Bottom__display">
                                                                            <p class="information__name">
                                                                                Running man
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
                                                                                    9.3
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="information__bottom_4 Bottom__display">
                                                                            <p>
                                                                                闔家觀賞 /
                                                                            </p>
                                                                            <p>

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

                                                                                </p>
                                                                            </a>
                                                                            <span class="speace"> / </span>
                                                                            <a href="#">

                                                                                <p class="information__actor__name">

                                                                                </p>
                                                                            </a>

                                                                        </div>

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./img/center/ky-fun-4.jpeg" alt="">
                                                                <div class="image__card__text">
                                                                    <div class="movie__name">
                                                                        <p>
                                                                            Running man
                                                                        </p>
                                                                    </div>
                                                                    <div class="movie__icons">
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/iqiyi_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/friday_s.svg" alt="">
                                                                        </div>
                                                                        <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/kktv_s.svg" alt="">
                                                                        </div>
                                                                        <!-- <div class="movie__icon__box">
                                                                            <a href="">
                                                                                <img src="./img/logo/netflix_s.svg" alt="">
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card5 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    9.5
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-6.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card6 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.6
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-7.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image__card card7 image__card__actor_none">
                                                            <div class="imge__card__information">
                                                                <div class="information__top">
                                                                    <img class="information__video" src="./images/movie_images/W/movie_card-W-1.jpeg" alt="">
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
                                                                                    8.9
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

                                                                        <div class="information__bottom_6-5_actor Bottom__display">
                                                                            <a href="#">
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
                                                                <img class="carousel__images" src="./images/movie_images/H/h-8.webp" alt="">
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
                                                                            <a href=""><img src="./icons/tv-logo/netflix.svg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- <button
                                                class="carousle__button carousel__button--right carousle__button__actor carousle__button__actor--right">
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



                            </div>
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
    <script src="./js/actor_page.js"></script>

    <!-- <script>
        $(function () {
            var $li = $('ul.actor_filter_word li');
            $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

            $li.click(function () {
                $($(this).find('a').attr('href')).show().siblings('.tab-inner').hide();
                $(this).addClass('active').siblings('.active').removeClass('active');
            });
        });
    </script> -->
    <!-- <script>
        $('.actor_filter_word a').click(function () {
            console.log('yap');
            $(this).css('color', '#10ffa2').parent().siblings().children().css('color', '#ffffff80')
        })
    </script> -->
</body>

</html>