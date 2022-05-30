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
                        <div class="w_50">
                            <p>一起來換取優惠券吧！</p>
                            <p>Movwe商城點數換取更多種商城折價券，累積點數越多折扣越高!</p>
                        </div>
                        <div class="img_wrap"><img src="./img/banner/point.png" alt=""></div>
                    </div>


                    <!-- 主題周邊篩選 -->
                    <div class="title_item">
                        <div class="stick_desk"></div>
                        <h3>主題商品</h3>
                    </div>

                    <div class="products_filter">
                        <div class="w_300 main__btn" href=""><img src="./img/other/brand01.png" alt=""></div>
                        <div class="w_300 star__btn" href=""><img src="./img/other/brand02.png" alt=""></div>
                        <div class="w_300 dis__btn" href=""><img src="./img/other/brand03.png" alt=""></div>
                        <div class="w_300 marvel__btn" href=""><img src="./img/other/brand04.png" alt=""></div>


                    </div>


                    <!-- 商品選擇 -->
                    <ul class="title">
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
                    <div class="products store__main">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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



                            </div>
                        </div>
                    </div>
                    <div class="products store__star">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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



                            </div>
                        </div>
                    </div>
                    <div class="products store__dis">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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



                            </div>
                        </div>
                    </div>
                    <div class="products store__marvel">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="image__card__12">
                                    <div class="carousel__images__box__12">
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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
                                        <img class="carousel__images__12" src="./img/center/product-3.jpeg" alt="">
                                        <div class="image__card__text__12">
                                            <div class="movie__name__12">
                                                <p class="Product__id">
                                                    豪華精裝典藏A版/2CD
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