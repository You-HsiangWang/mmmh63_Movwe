<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
<!-- <link href="./fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/single_movie.css">
<link rel="stylesheet" href="./css/Carousel_1.css">
<link rel="stylesheet" href="./css/Carousel_5.css">
<link rel="stylesheet" href="./css/Home.css">
<link rel="stylesheet" href="./css/slider.css">
<link rel="stylesheet" href="./css/wish_page.css">
<!-- <link rel="stylesheet" href="./css/reset.css"> -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->

<!-- <link rel="stylesheet" href="./css/single_movie.css"> -->
<!-- <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap"
        rel="stylesheet"> -->

<!-- <title>Document</title> -->
<style>
    * {
        /* outline: 1px solid greenyellow; */
    }
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <!----------nav_left-------------->
        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>

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
                                許個願吧
                            </p>
                            <div class="Page__4__genie__box_home">
                                <img class="Page__4__genie" src="./img/wish_img/Aladdin__logo.svg" alt="">
                            </div>
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







                <div class="carousel__big__box__5__wish">
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
                                                <img class="carousel__images__5" src="./img/center/pd.jpg" alt="">
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
                                                        天國之吻
                                                    </p>
                                                </div>
                                                <div class="wish__text__03">
                                                    <div class="wish__line-1 pd"></div>
                                                    <div class="wish__line-2__wish pd"></div>
                                                    <div class="wish__line-3__wish pd"></div>
                                                </div>
                                                <div class="wish__text__04">
                                                    <p>
                                                        已有1人參與投票
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image__card__5 wish__card-2">
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



            </div>
            <a class="dragon_a" href="./dragon_quest.php">
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
                                已有2345678人完成檢測
                            </div>
                            <div class="join__box">
                                <button class="btn_4w">立即檢測</button>
                            </div>
                        </div>
                        <div class="discount__img__box game__box">
                            <img src="./img/banner/game_s.png" alt="">
                        </div>
                    </div>
                </div>
            </a>


            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>
    </div>



    <!-- <script src="./js/jquery-3.6.0.js"></script> -->
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