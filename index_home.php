<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css">
    <link rel="stylesheet" href="./css/Home.css">
    <link rel="stylesheet" href="./css/single_movie.css">
    <link rel="stylesheet" href="./css/filter.css">
    <link rel="stylesheet" href="./css/Carousel_1.css">
    <link rel="stylesheet" href="./css/Carousel_2.css">
    <link rel="stylesheet" href="./css/Carousel_3.css">
    <link rel="stylesheet" href="./css/Carousel_4.css">
    <link rel="stylesheet" href="./css/Carousel_5.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Movwe</title>
    <style>
        /* --------------------- */
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
                            <div class="movwe_1">M</div>
                            <div class="movwe_2">o</div>
                            <div class="movwe_3">v</div>
                            <div class="movwe_4">w</div>
                            <div class="movwe_5">e</div>
                        </div>
                    </div>
                    <div class="search_p2 green">
                        <p>
                            四大平台同步搜尋
                        </p>
                    </div>
                    <div class="search_p3">
                        <input id="myInput" placeholder="輸入片名">
                        <button id="myBtn"
                            onclick="javascript:window.location.href='./search_page.php'">Button</button>

                    </div>
                    <div class="search_p4">
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
                </div>
            </div>

            <!--text__container------內容放這邊------------->

            <div class="text__container">
                <div class="index_filter">
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
                                <span>地區 /</span>
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
                                <span>風格 /</span>
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
                </div>

                <!------篩選後_BOX----------------------------------->

                <div class="Filter__text__box">
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
                </div>


                <!------預設＿篩選前_BOX----------------------------------->
                <div class="home__text__box">

                    <!--Carouse_1----------------------------->

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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ---加迴圈 -->
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
                                                            <button class="push__up add_movies">
                                                                <p>
                                                                    ＋ 加入片單
                                                                </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-1.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href="https://www.iq.com/?lang=zh_tw"><img
                                                                        src="./img/logo/iqiyi_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-5.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-7.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-6.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-4.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-1.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-5.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-7.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-6.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-4.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-1.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-5.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-7.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-6.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            src="./img/center/movie_card-W-1.jpeg" alt="">
                                                    </div>
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
                                                </div>
                                                <div class="carousel__images__box">
                                                    <img class="carousel__images" src="./img/center/h-4.jpeg" alt="">
                                                    <div class="image__card__text">
                                                        <div class="movie__name">
                                                            <p>
                                                                真愛每一天
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons">
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
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
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-1.jpeg" alt="">
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
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/02.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-2.jpeg" alt="">
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
                                            <div class="image__card__2 card3__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/03.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-3.jpeg" alt="">
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
                                            <div class="image__card__2 card4__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/04.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-4.jpeg" alt="">
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
                                            <div class="image__card__2 card5__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/05.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-5.jpeg" alt="">
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
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-6.jpeg" alt="">
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
                                            <div class="image__card__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/07.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-7.jpeg" alt="">
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
                                            <div class="image__card__2 card3__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/08.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-3.jpeg" alt="">
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
                                            <div class="image__card__2 card4__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/09.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-4.jpeg" alt="">
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
                                            <div class="image__card__2 card5__2">
                                                <div class="carousel__images__box__2">
                                                    <div class="top__10__box">
                                                        <div class="top__10__img__box">
                                                            <img class="top__10__img" src="./img/center/10.svg" alt="">
                                                        </div>
                                                        <div class="carousel__images__2__box">
                                                            <div class="dark__box">
                                                            </div>
                                                            <img class="carousel__images__2"
                                                                src="./img/center/h-6.jpeg" alt="">
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
                            <div class="carousel__title__3">
                                <p>
                                    本週上線
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__3" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__3">
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__3">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__3">
                                                        <div class="movie__name__3">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                    本週上線
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            6/7
                                                        </div>
                                                    </div>
                                                    <div class="update__img__box">
                                                        <img class="carousel__images__4" src="./img/center/h-1.jpeg"
                                                            alt="">
                                                        <div class="update__date">
                                                            <p>
                                                                6/7
                                                            </p>
                                                        </div>
                                                        <div class="movie__icons__4">
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/friday_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4"> <a href=""></a>
                                                                <a href=""><img src="./img/logo/iqiyi_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/kktv_s.svg" alt=""></a>
                                                            </div>
                                                            <div class="movie__icon__box__4">
                                                                <a href=""><img src="./img/logo/netflix_s.svg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="image__card__text__4">
                                                        <div class="movie__name__4">
                                                            <p class="movie__name__wait">
                                                                敬請期待
                                                            </p>
                                                            <p class="movie__name__bt">
                                                                真愛每一天
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
                                                            <img src="./img/icons/wish-clicked.svg" alt="">
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

                                        </div>
                                    </li>
                                    <li class="carousel__slide__5 current-slide__5">
                                        <div class="image__box__5">
                                            <div class="image__card__5">
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
                                            <div class="image__card__5 wish__card-2">
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
                                    朋友透過您的專屬連結註冊Movwe會員，即可獲得100點we point! 同時您也會收到100點we points回饋唷!
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
                                <p class="test__number">
                                    已有2345678人完成檢測
                                </p>
                                <div class="join__box">
                                    <button class="btn_4w">立即檢測</button>
                                </div>
                            </div>
                            <div class="discount__img__box game__box">
                                <img src="./img/banner/game.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <footer></footer> -->
                <!-- <div class="footer__container">
                <div class="footer-wrap">
                    <div class="footer">
                        <div class="foot bo">
                            <div class="footer-top">
                                <div class="f-head mb-3">MOVWE</div>
                                <div class="handle han1">+</div>
                            </div>

                            <div class="f-content f-con1">
                                <ul class="list-unstyled">
                                    <a href="#">
                                        <li class="mb-2">關於我們</li>
                                    </a>
                                    <a href="#">
                                        <li class="mb-2">影劇許願池</li>
                                    </a>
                                    <a href="#">
                                        <li class="mb-3">點數優惠</li>
                                    </a>

                                </ul>
                            </div>
                        </div>
                        <div class="foot bo">
                            <div class="footer-top">
                                <div class="f-head mb-3">合作夥伴</div>
                                <div class="handle han2">+</div>
                            </div>

                            <div class="f-content f-con2">
                                <ul class="list-unstyled">
                                    <a href="#">
                                        <li class="mb-2">平台合作</li>
                                    </a>
                                    <a href="#">
                                        <li class="mb-3">廣告刊登</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <div class="foot bo">
                            <div class="footer-top">
                                <div class="f-head mb-3">追蹤動態</div>
                                <div class="handle han3">+</div>
                            </div>

                            <div class="f-content f-con3">
                                <ul class="list-unstyled">
                                    <a href="#">
                                        <li class="mb-2">Facebook 粉絲團</li>
                                    </a>
                                    <a href="#">
                                        <li class="mb-3">Instagram</li>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="credit-card">
                            <ul class="list-unstyled d-flex justify-content-center ott-platform">
                                <a href="#">
                                    <li class="mr-2"><img src="./img/logo/netflix.svg" alt=""></li>
                                </a>
                                <a href="#">
                                    <li class="mr-2"><img src="./img/logo/IQiyi.svg" alt=""></li>
                                </a>
                                <a href="#">
                                    <li class="mr-2"><img src="./img/talls_img/kktv (1).svg" alt=""></li>
                                </a>
                                <a href="#">
                                    <li class="f-ott"><img src="./img/talls_img/friday.svg" alt=""></li>
                                </a>

                            </ul>
                        </div>
                    </div>

                </div>
            </div> -->


            </div>
        </div>
    </div>

    </div>




    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/Nav.js"></script>
    <script src="./js/Filter.js"></script>
    <script src="./js/Carousel_1.js"></script>
    <script src="./js/Carousel_2.js"></script>
    <script src="./js/Carousel_3.js"></script>
    <script src="./js/Carousel_4.js"></script>
    <script src="./js/Carousel_5.js"></script>
    <script src="./js/home.js"></script>
    <script>
    // </script>
    //
    <script>
    </script>
</body>

</html>