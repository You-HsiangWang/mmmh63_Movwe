<?php

require './parts/movwe_connect_db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css">
    <link rel="stylesheet" href="./css/Home.css">
    <link rel="stylesheet" href="./css/filter.css">
    <link rel="stylesheet" href="./css/Carousel_1.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/LOGO.png">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap" rel="stylesheet">
    <script src="./js/jquery-3.6.0.js"></script>

    <title>Movwe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 1px solid greenyellow;
        }

        body {
            background-color: rgb(26, 29, 36);
            font-family: 'Caveat', cursive;
            font-family: 'Cormorant Garamond', serif;
            font-family: 'Noto Serif TC', serif;
            /* overflow-x: hidden; */

        }

        html {
            font-size: 12px;
            overflow-x: hidden;


        }


        footer {
            width: 100%;
            height: 100px;
            background-color: rgb(0, 0, 0);
            margin-top: 100px;


        }


        .dino__footer {
            height: 500px;
            background-color: #fff;
            width: 100%;
            /* height: 50vh; */
            /* background-color: rgb(124, 124, 124); */
            margin: 0 auto;
            /* overflow: hidden; */
            position: absolute;
            top: 100%;

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

        /* --------------------- */
    </style>
</head>

<body>
    <!----------nav_top-------------->

    <!--text__container------內容放這邊------------->

    <div class="text__container">
        <div class="index_filter">
            <div class="ott_platform">
                <div class="ott_platform_title">
                    <span>平台 / </span>
                </div>
                <ul class="platform">
                    <button class="filter_2w platform__1 filter_function ff_plat" data-filter='1'>Netflix
                    </button>
                    <button class="filter_2w platform__2 filter_function ff_plat" data-filter='2'>iQiYi
                    </button>
                    <button class="filter_2w platform__3 filter_function ff_plat" data-filter='3'>KKTV
                    </button>
                    <button class="filter_2w platform__4 filter_function ff_plat" data-filter='4'>Friday
                    </button>
                </ul>
            </div>
            <div class="genre">
                <div class="genre_title">
                    <span>類別 / </span>
                </div>
                <ul class="genre_item">
                    <button class="filter_2w genre_item__1 filter_function ff_genr" data-filter='1'>電影
                    </button>
                    <button class="filter_2w genre_item__2 filter_function ff_genr" data-filter='2'>電視劇
                    </button>
                    <button class="filter_2w genre_item__3 ff_genr" data-filter='3'>綜藝
                    </button>
                    <button class="filter_2w genre_item__4 filter_function ff_genr" data-filter='4'>動畫
                    </button>
                </ul>
            </div>
            <ul class="browse-filters">
                <li class="browse-filter">
                    <div class="browse-filter-title">
                        <span>地區 /</span>
                    </div>
                    <ul class="browse-filter-items">
                        <button class="browse-filter-item filter_2w browse_item__1 filter_function ff_plac" data-filter='1'>
                            韓國
                        </button>
                        <button class="browse-filter-item filter_2w browse_item__2 filter_function ff_plac" data-filter='2'>
                            日本
                        </button>
                        <button class="browse-filter-item filter_2w browse_item__3 filter_function ff_plac" data-filter='3'>
                            歐美西洋
                        </button>
                        <button class="browse-filter-item filter_2w browse_item__4 ff_plac" data-filter='4'>
                            台灣 </button>
                        <button class="browse-filter-item filter_2w browse_item__5 ff_plac" data-filter='5'>
                            中國 </button>
                    </ul>
                </li>
                <li class="browse-filter">
                    <div class="browse-filter-title">
                        <span>風格 /</span>
                    </div>
                    <ul class="browse-filter-items">
                        <button class="browse-filter-item filter_2w style_item__1 filter_function ff_styl" data-filter='1'>
                            浪漫愛情 </button>
                        <button class="browse-filter-item filter_2w style_item__2 filter_function ff_styl" data-filter='2'>
                            懸疑推理 </button>
                        <button class="browse-filter-item filter_2w style_item__3 filter_function ff_styl" data-filter='3'>
                            社會現場 </button>
                        <button class="browse-filter-item filter_2w style_item__4 filter_function ff_styl" data-filter='4'>
                            輕鬆喜劇 </button>
                        <button class="browse-filter-item filter_2w style_item__5 filter_function ff_styl" data-filter='5'>
                            靈異驚悚 </button>
                        <button class="browse-filter-item filter_2w style_item__6 filter_function ff_styl" data-filter='6'>
                            奇幻冒險 </button>
                        <button class="browse-filter-item filter_2w style_item__7 filter_function ff_styl" data-filter='7'>
                            青春校園 </button>
                        <button class="browse-filter-item filter_2w style_item__8 filter_function ff_styl" data-filter='8'>
                            時代史劇 </button>
                        <button class="browse-filter-item filter_2w style_item__9 filter_function ff_styl" data-filter='9'>
                            闔家觀賞 </button>
                        <button class="browse-filter-item filter_2w style_item__10 filter_function ff_styl" data-filter='10'>
                            運動競技 </button>
                        <button class="browse-filter-item filter_2w style_item__11 filter_function ff_styl" data-filter='11'>
                            實境遊戲 </button>
                    </ul>
                </li>
            </ul>
        </div>

        <!------篩選後_BOX----------------------------------->
        <div class="Filter__text__box">

            <!-- <div class="filter__card">
                <div class="imge__card__information">
                    <div class="information__top">
                        <img class="information__video" src="./videodb/video/a_100394134_m_601_m1_1013_638.webp" alt="">
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
                    <img class="carousel__images" src="./videodb/video/a_100394134_m_601_m1_260_360.webp" alt="">
                    <div class="image__card__text">
                        <div class="movie__name">
                            <p>
                                真愛每一天
                            </p>
                        </div>
                        <div class="movie__icons">
                            <div class="movie__icon__box">
                                <a href=""><img src="../img/logo/friday_s.svg" alt=""></a>
                            </div>
                            <div class="movie__icon__box"> <a href=""></a>
                                <a href=""><img src="../img/logo/iqiyi_s.svg" alt=""></a>
                            </div>
                            <div class="movie__icon__box">
                                <a href=""><img src="../img/logo/kktv_s.svg" alt=""></a>
                            </div>
                            <div class="movie__icon__box">
                                <a href=""><img src="../img/logo/netflix_s.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>


        <script src="./js/Carousel_1.js"></script>

        <script>
            const filterBtns = document.querySelectorAll('.filter_function');

            function filterApi() {
                // 宣告變數
                let filtPlat;
                let filtGenre;
                let filtPlace;
                let filtStyle;
                const filtPlatArray = [];

                // 判斷
                if ($(this).hasClass('.ff_plat.filterActive')) {
                    $(this).removeClass('filterActive');
                    filtPlat = document.querySelectorAll('.ff_plat.filterActive.filter_function');

                    for (let i = 0; i < filtPlat.length; i++) {
                        filtPlatArray.push(filtPlat[i].getAttribute('data-filter'))
                    };
                } else if ($(this).hasClass('.ff_plat') && !$(this).hasClass('.filterActive')) {
                    $(this).addClass('filterActive');
                };




                $.get('ott_filter_api.php', {}, function(data) {}, 'json');
            };


            for (let i = 0; i < filterBtns.length; i++) {
                filterBtns[i].addEventListener('click', filterApi);
            };
        </script>

</body>

</html>