<?php

require './parts/movwe_connect_db.php';
$title = 'MOVWE-商城';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>

<!-- <link href="./fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="./css/Nav.css">
<link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/index_store.css">
<link rel="stylesheet" href="./css/Carousel_12.css">

<!-- <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap" rel="stylesheet"> -->

<style>
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__. '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <div class="left_div"></div>
        <!----------nav_left-------------->

        <!--------------------------------------------------------------------------->
        <div class="container outline">

            <!--banner__container----------------->
            <!-- 電商banner -->
            <div class="banner__container ">
                <!-- 手機圖 -->
                <img class="mall_banner_s" src="./img/banner/mall_banner_s.jpg" alt="">
                <!-- <img class="mall_banner_s" src="./imgs/forum_banner03_s.jpg" alt=""> -->

                <!-- 桌機圖 -->
                <img class="mall_banner" src="./img/banner/mall_banner.jpg" alt="">
                <!-- <img class="mall_banner" src="./imgs/forum_banner03.jpg" alt=""> -->
            </div>

            <!--text__container------內容放這邊------------->
            <div class="text__container ">
                <div>

                    <!-- 優惠券連結 -->
                    <div class="title_item">
                        <div class="stick_desk"></div>
                        <h3>優惠券專區</h3>
                    </div>

                    <div class="mall_discount">
                        <div class="mall_content">
                            <p>使用Movwe點數來換取優惠折價券吧！<br>
                            透過Movwe商城點數換取更多種商城折價券，累積點數越多折扣越高！<br>
                            Movwe商城與各大品牌合作，含括迪士尼、漫威、星戰、其他熱門影劇相關周邊，每季定期換新賣場商品。</p>
                        </div>
                        <div class="img_wrap"><img src="./img/banner/mell_point.jpg" alt=""></div>
                    </div>


                    <!-- 主題周邊篩選 -->
                    <div class="title_item mt_60">
                        <div class="stick_desk"></div>
                        <h3>主題商品</h3>
                    </div>

                    <div class="products_filter mt_60">
                        <div class="w_300 main__btn" href=""><img src="./img/other/brand01.png" alt=""></div>
                        <div class="w_300 star__btn" href=""><img src="./img/other/brand02.png" alt=""></div>
                        <div class="w_300 dis__btn" href=""><img src="./img/other/brand03.png" alt=""></div>
                        <div class="w_300 marvel__btn" href=""><img src="./img/other/brand04.png" alt=""></div>


                    </div>


                    <!-- 商品選擇 -->
                    <ul class="title mt_60">
                        <li class="title_item">
                            <div class="stick_desk"></div>
                            <a class="brand_color" href="">精選商品</a>
                        </li>
                        <li class="title_item">
                            <div class="stick_desk opacity"></div>
                            <a href="">熱門商品</a>
                        </li>
                        <li class="title_item">
                            <div class="stick_desk opacity"></div>
                            <a href="">最新商品</a>
                        </li>
                    </ul>
                    <!-- 商品Row -->
                    <div class="products store__main mt_20">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst11.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪娃娃經典系列組
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    899

                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst02.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                韓劇鬼怪PVC夾鍊袋
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    190
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst03.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                孔劉亞克力手機支架人形立牌
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    360
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst04.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                孤單又燦爛的神-桌上小台曆
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    350
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst05.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                韓劇鬼怪照片集
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    500
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst13.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪原子筆
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        280
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst14.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪筆記本
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    199
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst15.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪行李箱吊牌
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    250
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst16.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪原聲帶
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    800
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/gst/gst17.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鬼怪隨身鏡子
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        180
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="products store__star mt_20">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star01.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                   黑風暴兵公仔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        399
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star02.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                達斯維德鬧鐘
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                    499
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star03.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                電影原聲夜燈鬧鐘
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        799
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star04.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                尤達公仔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        299
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star05.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                天行者公仔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        499
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star06.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                曼達洛人頭盔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1050
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star07.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                白卜庭公仔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1399
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star08.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                千年鷹短T
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        699
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star09.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                原力海報短T
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        799
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/star/star10.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                達斯魔公仔
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1450
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="products store__dis mt_20">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis01.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    三眼怪A4 10層檔案資料夾
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        285
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis02.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                三眼怪日製A4 5層檔案資料夾
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        190
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis03.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                玩具總動員輕薄口罩收納夾
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        120
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis04.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                三眼怪USB桌上型加濕器
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1050
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis05.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                玩具總動員噴霧瓶/噴罐-200ml
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        400
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis06.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                怪獸電力公司純棉嬰兒浴巾
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        790
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis07.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                胡迪棉質小方巾/手帕
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        260
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis08.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                玩具總動員棉質小方巾/手帕
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        260
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis09.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                怪獸電力公司PP置物圓桶/垃圾桶
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        250
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/dis/dis10.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                小熊維尼A4 6層檔案資料夾附夾鍊袋
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        285
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="products store__marvel mt_20">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar01.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威Logomania黑帶涼鞋
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        800
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar02.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威傳奇-九頭蛇士兵
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        559
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar03.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                盾牌藍牙音箱

                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        2080
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar04.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威防水藍牙喇叭

                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        2190
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar05.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威猛毒黑色短T

                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1280
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar06.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威拋棄式兒童口罩

                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        199
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar07.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威蜘蛛人收藏組
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        999
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar08.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威防水藍牙喇叭
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        1490
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar09.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                鋼鐵人舒適拖鞋
                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        399
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/mall/mar/mar11.jpg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                漫威表情符號繁中桌遊

                                                </p>

                                                <button class="Shop__card__icon__box">
                                                    <i class="fa-solid fa-cart-shopping shop__card Shop__card__icon"></i>
                                                    </b>
                                            </div>
                                            <div class="movie__icons__12">
                                                <div class="movie__icon__box__12">
                                                    <p class="Price">
                                                        550
                                                    </p>
                                                    <p class="ntd">
                                                        NTD
                                                    </p>
                                                </div>
                                                <div class="movie__icon__box__12">
                                                    <p class="product__typ-1">
                                                        鬼怪
                                                    </p>
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

            <?php include __DIR__. '/parts/movwe_footer.php' ?>
        </div>
    </div>



    <!-- <script src="./js/jquery-3.6.0.js"></script> -->
    <script src="./js/Nav.js"></script>
    <script src="./js/store.js"></script>
</body>

</html>