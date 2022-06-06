<?php

require './parts/movwe_connect_db.php';
$title = 'MOVWE-就要你放膽搜';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
<!-- <link rel="stylesheet" href="./fontawesome/css/all.css">
<link rel="stylesheet" href="./css/Nav.css">
<link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/Home.css">
<link rel="stylesheet" href="./css/single_movie.css">
<link rel="stylesheet" href="./css/filter.css">
<link rel="stylesheet" href="./css/Carousel_1.css">
<link rel="stylesheet" href="./css/Carousel_2.css">
<link rel="stylesheet" href="./css/Carousel_3.css">
<link rel="stylesheet" href="./css/Carousel_4.css">
<link rel="stylesheet" href="./css/Carousel_5.css">
<!-- <link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/reset.css"> -->
<link rel="stylesheet" href="./css/filter_function.css">
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
<!-- <title>Movwe</title> -->
<style>
    /* --------------------- */
    *{
        /* outline: 1px solid greenyellow; */
    }
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <!----------nav_left-------------->
        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php'; ?>

        <!--------------------------------------------------------------------------->
        <div class="container overflow-x">

            <!--banner__container----------------->
            <div class="banner__container Home__banner">
                <div id="wrap">
                    <div class="bg_video_box">
                        <video class="bg__filter" src="./img/banner/bg__filter-2.mov" autoplay loop muted></video>
                        <!-- <img src="./images/video/filter02.gif" alt=""> -->
                        <!-- <img src="./images/search_bg (1).png" alt=""> -->
                    </div>
                    <div id="slide">
                        <div class="box-1">
                            <img class="Home__bg__img" src="./img/banner/search_bg.png" alt="">

                        </div>
                        <div class="box-2">
                            <img class="Home__bg__img" src="./img/banner/search_bg.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="search__bigbox">
                    <div class="search_p1">
                        <div class="Title__movwe__animation">
                            <div class="benner_text_box-1">
                                <div class="movwe_1">M</div>
                            </div>
                            <div class="benner_text_box-2">
                                <div class="movwe_2">o</div>
                            </div>
                            <div class="benner_text_box-3">
                                <div class="movwe_3">v</div>
                            </div>
                            <div class="benner_text_box-4">
                                <div class="movwe_4">w</div>
                            </div>
                            <div class="benner_text_box-5">
                                <div class="movwe_5">e</div>
                            </div>
                        </div>
                        <div class="search_p2">
                            <div class="home__title__box">
                                <div class="home__title-1">您</div>
                                <div class="home__title-2">的</div>
                                <div class="home__title-3">影</div>
                                <div class="home__title-4">劇</div>
                                <div class="home__title-5">搜</div>
                                <div class="home__title-6">尋</div>
                                <div class="home__title-7">神</div>
                                <div class="home__title-8">器</div>
                                <!-- <div class="home__title-9">資</div>
                                <div class="home__title-10">訊</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="search_p3">
                        <input id="myInput" placeholder="輸入片名">
                        <button id="myBtn" onclick="javascript:window.location.href='./search_page copy.php'">Button</button>

                    </div>
                    <div class="search_p4">
                        <div class="home__ott__bigbox">

                            <div class="ott__logo">
                                <img src="./img/logo/friday.svg" alt="">
                            </div>
                            <div class="ott__logo">
                                <img src="./img/logo/iqiyi.svg" alt="">
                            </div>
                            <div class="ott__logo">
                                <img src="./img/logo/kktv.svg" alt="">
                            </div>
                            <div class="ott__logo">
                                <img src="./img/logo/netflix.svg" alt="">
                            </div>

                        </div>    
                        <div class="banner__icon__bigbox">
                            <div class="banner__icon__box">
                                <img class="banner__icon_img01" src="./img/logo/friday_s.svg" alt="">
                            </div>
                            <div class="banner__icon__box">
                                <img class="banner__icon_img02" src="./img/logo/iqiyi_s.svg" alt="">
                            </div>
                            <div class="banner__icon__box">
                                <img class="banner__icon_img03" src="./img/logo/kktv_s.svg" alt="">
                            </div>
                            <div class="banner__icon__box">
                                <img class="banner__icon_img04" src="./img/logo/netflix_s.svg" alt="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!--text__container------內容放這邊------------->
            <div class="text__container">
                <!-- <div class="index_filter">
                    <div class="ott_platform">
                        <div class="ott_platform_title">
                            <span>平台 / </span>
                        </div>
                        <ul class="platform">
                            <button class="filter_2w platform__1">Netflix
                            </button>
                            <button class="filter_2w platform__2">iQiYi
                            </button>
                            <button class="filter_2w platform__3">KKTV
                            </button>
                            <button class="filter_2w platform__4">Friday
                            </button>
                        </ul>
                    </div>
                    <div class="genre">
                        <div class="genre_title">
                            <span>類別 / </span>
                        </div>
                        <ul class="genre_item">
                            <button class="filter_2w genre_item__1">電影
                            </button>
                            <button class="filter_2w genre_item__2">電視劇
                            </button>
                            <button class="filter_2w genre_item__3">綜藝
                            </button>
                            <button class="filter_2w genre_item__4">動畫
                            </button>
                        </ul>
                    </div>
                    <ul class="browse-filters">
                        <li class="browse-filter">
                            <div class="browse-filter-title">
                                <div class="location">地區 /</div>
                            </div>
                            <ul class="browse-filter-items">
                                <button class="browse-filter-item filter_2w browse_item__1">
                                    韓國
                                </button>
                                <button class="browse-filter-item filter_2w browse_item__2">
                                    日本
                                </button>
                                <button class="browse-filter-item filter_2w browse_item__3">
                                    歐美西洋
                                </button>
                                <button class="browse-filter-item filter_2w browse_item__4">
                                    台灣 </button>
                                <button class="browse-filter-item filter_2w browse_item__5">
                                    中國 </button>
                            </ul>
                        </li>
                        <li class="browse-filter">
                            <div class="browse-filter-title">
                                <div class="Style">風格 /</div>
                            </div>
                            <ul class="browse-filter-items">
                                <button class="browse-filter-item filter_2w style_item__1">
                                    浪漫愛情 </button>
                                <button class="browse-filter-item filter_2w style_item__2">
                                    懸疑推理 </button>
                                <button class="browse-filter-item filter_2w style_item__3">
                                    社會現場 </button>
                                <button class="browse-filter-item filter_2w style_item__4">
                                    輕鬆喜劇 </button>
                                <button class="browse-filter-item filter_2w style_item__5">
                                    靈異驚悚 </button>
                                <button class="browse-filter-item filter_2w style_item__6">
                                    奇幻冒險 </button>
                                <button class="browse-filter-item filter_2w style_item__7">
                                    青春校園 </button>
                                <button class="browse-filter-item filter_2w style_item__8">
                                    時代史劇 </button>
                                <button class="browse-filter-item filter_2w style_item__9">
                                    闔家觀賞 </button>
                                <button class="browse-filter-item filter_2w style_item__10">
                                    運動競技 </button>
                                <button class="browse-filter-item filter_2w style_item__11">
                                    實境遊戲 </button>
                            </ul>
                        </li>
                    </ul>
                </div> -->

                <!------篩選後_BOX----------------------------------->

                <!-- <div class="Filter__text__box">
                    <div class="filter__card">
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
                            <img class="carousel__images" src="./img/center/h-2.jpeg" alt="">
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
                </div> -->
                <?php include __DIR__ . '/parts/movwe_filter_function.php' ?>


                <!------預設＿篩選前_BOX----------------------------------->
                <div class="home__text__box">
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

                    <!--Carouse_1----------------------------->

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
                                                                        9.0
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
                                                            <a href="./actor_page.php">
                                                                <p class="information__actor__name">
                                                                    孔劉
                                                                </p>
                                                            </a>
                                                            <span class="speace"> / </span>
                                                                <p class="information__actor__name">
                                                                    金高銀
                                                                </p>
                                                            <span class="speace"> / </span>

                                                                <p class="information__actor__name">
                                                                    劉寅娜
                                                                </p>

                                                        </div>

                                                        <div class="information__bottom_6-5 Bottom__display">
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
                                                <a class="single_page_a" href="./single_movie.php">
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
                                                </a>
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
                                                                        9.0
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
                                                                        神木隆介
                                                                    </p>
                                                                </a>
                                                                <span class="speace"> / </span>
                                                                <a href="#">
                                                                    <p class="information__actor__name">
                                                                        上白石音
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
                                                                        8.5
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
                                                                        8.3
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
                                                                鋼之鍊金術師
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
                                                                        9.1
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
                                                                        9.5
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
                                                                        9.6
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
                                                                        9.8
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
                                                                        8.8
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
                                                                        8.4
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
                                                                        8.2
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
                                                                愛上變身情人
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
                                                                        9.3
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
                                                                        9.7
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
                                                                        9.2
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
                                                                        9.6
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
                                                                        8.8
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
                                                                        8.3
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
                                                                        8.9
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
                                                                        9.2
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



                    <!-- carousel_2 ------------------------------>



                    <div class="carousel__big__box__2">
                        <div class="carousel__title__section__2">
                            <div class="stick_desk"></div>
                            <div class="carousel__title__2">
                                <p>
                                    熱播前10
                                </p>
                            </div>
                        </div>
                        <div class="carousel__2">
                            <div class="carousel__track-container__2">
                                <button class="carousle__button__2 carousel__button--left__2 is-hidden__2">
                                    <div class="side__left__2">
                                        <i class="fa-solid fa-chevron-left left__icon__2"></i>
                                    </div>
                                </button>
                                <ul class="carousel__track__2">
                                    <li class="carousel__slide__2 current-slide__2">
                                        <div class="image__box__2">
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/01.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_1.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        雙面人魔
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/02.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_5.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        蠟筆小新
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card3__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/03.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_6.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        大英雄天團
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card4__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/04.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_4.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        獵魔士
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card5__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/05.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_8.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        真愛每一天
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="carousel__slide__2 current-slide__2">
                                        <div class="image__box__2">
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/06.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_2.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        信用詐欺師
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/07.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_5.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        蠟筆小新
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card3__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/08.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_10.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        星際效應
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card4__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/09.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_7.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        繼承者們
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__2 card5__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box top__10__img__box-10">
                                                            <img class="top__10__img" src="./img/center/10.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2" src="./img/center/top_9.jpg" alt="">
                                                            <div class="image__card__text image__card__text__hidden">
                                                                <div class="movie__name">
                                                                    <p>
                                                                        第五元素
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="carousle__button__2 carousel__button--right__2">
                                    <div class="side__right__2">
                                        <i class="fa-solid fa-chevron-right right__icon__2"></i>
                                    </div>
                                </button>
                                <div class="carousel__nav__2">
                                    <button class="carousel__indicator__2 current-slide__2"></button>
                                    <button class="carousel__indicator__2"></button>
                                    <button class="carousel__indicator__2"></button>
                                    <button class="carousel__indicator__2"></button>
                                    <button class="carousel__indicator__2"></button>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- carousel_3 ------------------------------>




                    <div class="carousel__big__box__3">
                        <div class="carousel__title__section__3">
                            <div class="stick_desk"></div>
                            <div class="carousel__title__3" id="goingtoupdate">
                                <p>
                                    即將上線
                                </p>
                            </div>
                        </div>
                        <div class="carousel__3">
                            <div class="carousel__track-container__3">
                                <button class="carousle__button__3 carousel__button--left__3 is-hidden__3">
                                    <div class="side__left__3">
                                        <i class="fa-solid fa-chevron-left left__icon__3"></i>
                                    </div>
                                </button>
                                <ul class="carousel__track__3">
                                    <li class="carousel__slide__3 current-slide__3">
                                        <div class="movie__update__time">
                                            <div class="update__line"></div>
                                        </div>
                                        <div class="image__box__3">
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/10
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-1.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/10
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                我的夏日大戀習
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/17
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-2.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/17
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                尋人啟弒
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/17
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-3.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/17
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                隔離巢
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card4__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/18
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-11.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/18
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                怪獸死了怎麼辦
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card5__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/17
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-5.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/17
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                法屍浪漫
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card6__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/17
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-8.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/17
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                午後彌撒
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card7__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/17
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-10.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/17
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                蘿莉塔
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="carousel__slide__3 current-slide__3">
                                        <div class="movie__update__time">
                                            <div class="update__line"></div>
                                        </div>
                                        <div class="image__box__3">
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/8
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-12.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/8
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                高畑勲影展
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/22
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-19.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/22
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                拜金女王的性愛派對
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/28
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-15.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/28
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                子彈列車
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card4__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/28
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-16.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/28
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                超級寵物
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card5__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/28
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-17.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/28
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                沼澤謀殺案
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card6__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/30
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-14.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/30
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                拜金女王的性愛派對
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__3 card7__3">
                                                <div class="carousel__images__box__3">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            8/2
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/wait-20.jpg" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                8/2
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <!-- <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <!-- <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                獸
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="carousle__button__3 carousel__button--right__3">
                                    <div class="side__right__3">
                                        <i class="fa-solid fa-chevron-right right__icon__3"></i>
                                    </div>
                                </button>
                                <div class="carousel__nav__3">
                                    <button class="carousel__indicator__3 current-slide__3"></button>
                                    <button class="carousel__indicator__3"></button>
                                    <button class="carousel__indicator__3"></button>
                                    <button class="carousel__indicator__3"></button>
                                    <button class="carousel__indicator__3"></button>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- carousel_4 ------------------------------>



                    <div class="carousel__big__box__4">
                        <div class="carousel__title__section__4">
                            <div class="stick_desk"></div>
                            <div class="carousel__title__4">
                                <p>
                                    即將下線
                                </p>
                            </div>
                        </div>
                        <div class="carousel__4">
                            <div class="carousel__track-container__4">
                                <button class="carousle__button__4 carousel__button--left__4 is-hidden__4">
                                    <div class="side__left__4">
                                        <i class="fa-solid fa-chevron-left left__icon__4"></i>
                                    </div>
                                </button>
                                <ul class="carousel__track__4">
                                    <li class="carousel__slide__4 current-slide__4">
                                        <div class="movie__update__time">
                                            <div class="update__line"></div>
                                        </div>
                                        <div class="image__box__4">
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/15
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-1.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/15
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                Legacies
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/18
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-2.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/18
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <!-- <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                Chicago MED
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/20
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-3.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/20
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                浪子神探
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card4__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/20
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-4.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/20
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                法外搜查
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card5__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/21
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-5.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/21
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                優雅的朋友們
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card6__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/25
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-6.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/25
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                獵人
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card7__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/25
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-7.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/25
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                寶可夢旅途
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="carousel__slide__4 current-slide__4">
                                        <div class="movie__update__time">
                                            <div class="update__line"></div>
                                        </div>
                                        <div class="image__box__4">
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/28
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-8.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/28
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                良醫墨非
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            6/30
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-9.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/30
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                小南的迷你情人
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/2
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-10.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/2
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                Boruto
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card4__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/5
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-11.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/5
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                庫洛魔法使
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card5__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/8
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-12.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/8
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                房仲女王2
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card6__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/15
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-13.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/15
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <!-- <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div> -->
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                大叔的愛
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__4 card7__4">
                                                <div class="carousel__images__box__4">
                                                    <div class="up__date__box">
                                                        <div class="Point"></div>
                                                        <div class="up__date">
                                                            7/18
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/down-14.webp" alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                7/18
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg" alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                火速欣賞
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                Chicago MED
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="carousle__button__4 carousel__button--right__4">
                                    <div class="side__right__4">
                                        <i class="fa-solid fa-chevron-right right__icon__4"></i>
                                    </div>
                                </button>
                                <div class="carousel__nav__4">
                                    <button class="carousel__indicator__4 current-slide__4"></button>
                                    <button class="carousel__indicator__4"></button>
                                    <button class="carousel__indicator__4"></button>
                                    <button class="carousel__indicator__4"></button>
                                    <button class="carousel__indicator__4"></button>
                                </div>

                            </div>
                        </div>
                    </div>





                    <!-- carousel_5 ------------------------------>


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
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-7.jpeg" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                動畫
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            變身國王
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有1584人參與投票
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__5 wish__card-2">
                                                <div class="carousel__images__box__5">
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-2.webp" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                電視劇
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            芝加哥醫情
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有3041人參與投票
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
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-3.webp" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                電視劇
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            默默奉獻的 灰姑娘藥師
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有1034人參與投票
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__5 wish__card-2">
                                                <div class="carousel__images__box__5">
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-4.webp" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                電視劇
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            九尾狐傳
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有2543人參與投票
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
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-5.webp" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                動畫
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            咒術迴戰
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有4523人參與投票
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__card__5 wish__card-2">
                                                <div class="carousel__images__box__5">
                                                    <img class="carousel__images__5" src="./img/center/wish_movie-6.webp" alt="">
                                                </div>
                                                <div class="wish__text__box">
                                                    <div class="wish__text__top">
                                                        <div class="wish__card__typ">
                                                            <p>
                                                                電視劇
                                                            </p>
                                                        </div>
                                                        <div class="wish__icon">
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="wish__text__02">
                                                        <p>
                                                            所以我和黑粉結婚了
                                                        </p>
                                                    </div>
                                                    <div class="wish__text__03">
                                                        <div class="wish__line-1"></div>
                                                        <div class="wish__line-2"></div>
                                                        <div class="wish__line-3"></div>
                                                    </div>
                                                    <div class="wish__text__04">
                                                        <p>
                                                            已有1543人參與投票
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
                    <div class="Movwe__member__section">
                        <div class="carousel__title__section__5">
                            <div class="stick_desk"></div>
                            <div class="carousel__title__5">
                                <p>
                                    Movwe會員獨享優惠
                                </p>
                            </div>
                        </div>
                        <div class="discoudt__bigbox">
                            <div class="discount__title">
                                <p>
                                    會員專屬集點活動
                                </p>
                                <p class="discount__text">
                                    會員透過Movwe連結觀看影片，即可領取50點we points!
                                    we point點數可用來兌換訂閱影音平台優惠，快來加入我們!
                                </p>
                            </div>
                            <div class="discount__number__box">
                                <img src="./img/center/01.svg" alt="">
                            </div>

                            <div class="discount__img__box">
                                <img src="./img/banner/point.png" alt="">
                            </div>
                        </div>
                        <div class="discoudt__bigbox">
                            <div class="discount__title Desk__none">
                                <p>
                                    與朋友分享專屬連結
                                </p>
                                <p class="discount__text">
                                    會員透過Movwe連結觀看影片，即可領取50點we points!
                                    we point點數可用來兌換訂閱影音平台優惠，快來加入我們!
                                </p>
                            </div>
                            <div class="discount__img__box">
                                <img src="./img/banner/share.png" alt="">
                            </div>
                            <div class="discount__number__box">
                                <img src="./img/center/02.svg" alt="">
                            </div>
                            <div class="discount__title Mobile__none">
                                <p>
                                    與朋友分享專屬連結
                                </p>
                                <p class="discount__text">
                                    朋友透過您的專屬連結註冊Movwe會員，即可獲得2000點we point! 同時您也會收到2000點we points回饋唷!
                                </p>
                            </div>
                        </div>
                    </div>
                        <div class="Movwe__test__section">
                            <div class="carousel__title__section__5">
                                <div class="stick_desk"></div>
                                <div class="carousel__title__5">
                                    <p>
                                        影劇平台合適度檢測
                                    </p>
                                </div>
                            </div>
                            <div class="discoudt__bigbox">
                                <div class="discount__title">
                                    <p>
                                        追劇平台如何選?
                                    </p>
                                    <p class="discount__text">
                                        4大ott平台比較：Netflix、iQiYi、KKTV、Friday影音
                                        總是在花冤枉錢？到底哪個才是最適合自己的平台呢?
                                        就讓movwe幫你找到命定的影劇平台
                                    </p>
                                    <div class="test__number">
                                        已有3474人完成檢測
                                    </div>
                                    <a class="dragon_a" href="./dragon_quest.php">
                                    <div class="join__box">
                                        <button class="btn_4w">立即檢測</button>
                                    </div>
                                    </a>

                                </div>
                                <div class="discount__img__box game__box">
                                    <img src="./img/banner/game_s.png" alt="">
                                </div>
                            </div>
                        </div>
                </div>


            </div>



            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>
    </div>
    </div>




    <!-- <script src="./js/jquery-3.6.0.js"></script> -->
    <script src="./js/Nav.js"></script>
    <script src="./js/Filter.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_2.js"></script>
    <script src="./js/Carousel_3.js"></script>
    <script src="./js/Carousel_4.js"></script>
    <script src="./js/Carousel_5.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/filter_function.js"></script>
</body>

</html>