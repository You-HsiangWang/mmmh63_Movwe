<?php

require './parts/movwe_connect_db.php';
$title = 'MOVWE-商城';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>

<!-- <link href="./fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="./css/Nav.css">
<link rel="stylesheet" href="./css/BS.css"> -->
<link rel="stylesheet" href="./css/bubbles_bg.css">
<link rel="stylesheet" href="./css/store.css">
<link rel="stylesheet" href="./css/Carousel_12.css">



<!-- <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap" rel="stylesheet"> -->

<style>
</style>
</head>

<body>
    <!----------nav_top-------------->
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">
        <div class="left_div"></div>
        <!----------nav_left-------------->

        <!--------------------------------------------------------------------------->
        <div class="container hidden">

            <!--banner__container----------------->
            <!-- 電商banner -->
            <div class="bubbles">
                <span style="--i:11;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:22;"></span>
                <span style="--i:12;"></span>
                <span style="--i:28;"></span>
                <span style="--i:17;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:30;"></span>
                <span style="--i:11;"></span>
                <span style="--i:23;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:29;"></span>
                <span style="--i:12;"></span>
                <span style="--i:14;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:23;"></span>
                <span style="--i:18;"></span>
                <span style="--i:12;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:27;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:29;"></span>
                <span style="--i:21;"></span>
                <span style="--i:13;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:14;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:22;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:27;"></span>
                <span style="--i:16;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:16;"></span>
                <span style="--i:13;"></span>
                <span style="--i:14;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:24;"></span>
                <span style="--i:19;"></span>
                <span style="--i:22;"></span>
                <span style="--i:30;"></span>
                <span style="--i:12;"></span>
                <span style="--i:24;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
               
               
            </div>

            <div class="bubbles2 ">
                <span style="--i:11;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:22;"></span>
                <span style="--i:12;"></span>
                <span style="--i:28;"></span>
                <span style="--i:17;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:30;"></span>
                <span style="--i:11;"></span>
                <span style="--i:23;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:29;"></span>
                <span style="--i:12;"></span>
                <span style="--i:14;"></span>
                <span style="--i:25;"></span>
                <span style="--i:18;"></span>
                <span style="--i:23;"></span>
                <span style="--i:18;"></span>
                <span style="--i:12;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:27;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
                <span style="--i:15;"></span>
                <span style="--i:29;"></span>
                <span style="--i:21;"></span>
                <span style="--i:13;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:14;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:22;"></span>
                <span style="--i:20;"></span>
                <span style="--i:22;"></span>
                <span style="--i:16;"></span>
                <span style="--i:12;"></span>
                <span style="--i:27;"></span>
                <span style="--i:16;"></span>
                <span style="--i:17;"></span>
                <span style="--i:23;"></span>
                <span style="--i:16;"></span>
                <span style="--i:13;"></span>
                <span style="--i:14;"></span>
                <span style="--i:26;"></span>
                <span style="--i:17;"></span>
                <span style="--i:24;"></span>
                <span style="--i:19;"></span>
                <span style="--i:22;"></span>
                <span style="--i:30;"></span>
                <span style="--i:12;"></span>
                <span style="--i:24;"></span>
                <span style="--i:16;"></span>
                <span style="--i:21;"></span>
                
            </div>

            <div class="banner__container ">
                <!-- 手機圖 -->
                <img class="mall_banner_s" src="./img/banner/mall_banner_s.jpg" alt="">
                <!-- <img class="mall_banner_s" src="./imgs/forum_banner03_s.jpg" alt=""> -->

                <!-- 桌機圖 -->
                <img class="mall_banner" src="./img/banner/mall_banner.jpg" alt="">
                <!-- <img class="mall_banner" src="./imgs/forum_banner03.jpg" alt=""> -->
            </div>



            <!--text__container------內容放這邊------------->
            <div class="text__container mb_150">
                <div>

                    <!-- 優惠券連結 -->
                    <div class="title_item mt_48">
                        <div class="stick_desk"></div>
                        <h3>優惠券專區</h3>

                    </div>

                    <div class="mall_discount mt_24">
                        <svg class="product_svg" width="222" height="223" viewBox="0 0 222 223" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="111.014" cy="111.446" r="79.5" transform="rotate(-30 111.014 111.446)" stroke="#10FFA2" stroke-width="3" />
                            <ellipse cx="135.467" cy="59.8008" rx="7" ry="7.5" transform="rotate(-15 135.467 59.8008)" fill="#10FFA2" />
                            <path d="M49.3676 109.731C52.2113 108.969 54.4479 109.032 56.0774 109.921C57.7219 110.783 58.8313 112.286 59.4056 114.429C59.6651 115.398 59.7693 116.364 59.7182 117.327C59.6617 118.27 59.3872 119.183 58.8949 120.065C58.4177 120.922 57.6855 121.693 56.6983 122.377C55.7111 123.061 54.4138 123.618 52.8065 124.049L50.7974 124.587L52.9011 132.438L48.2337 133.689L42.3202 111.619L49.3676 109.731ZM50.1473 113.63L48.0146 114.202L49.7704 120.754L51.3159 120.34C52.2019 120.103 52.934 119.785 53.5121 119.387C54.0901 118.99 54.4881 118.497 54.7059 117.908C54.9236 117.32 54.9276 116.634 54.7178 115.851C54.4252 114.759 53.9111 114.035 53.1754 113.68C52.4343 113.305 51.4249 113.288 50.1473 113.63ZM72.0944 108.876C72.3211 108.815 72.5917 108.754 72.9063 108.691C73.2209 108.629 73.4765 108.594 73.673 108.585L74.4925 113.004C74.3372 113.001 74.1126 113.028 73.8185 113.085C73.5396 113.116 73.2971 113.158 73.0911 113.214C72.4935 113.374 71.9386 113.611 71.4264 113.925C70.9087 114.218 70.4673 114.59 70.1023 115.042C69.7579 115.487 69.5263 116.024 69.4075 116.652C69.3038 117.254 69.3596 117.957 69.5749 118.761L71.8774 127.354L67.2719 128.588L62.7498 111.711L66.2426 110.775L67.6845 113.437L67.9009 113.379C68.076 112.713 68.3473 112.077 68.7149 111.471C69.0824 110.865 69.547 110.331 70.1085 109.872C70.6906 109.407 71.3525 109.075 72.0944 108.876ZM93.7661 112.411C94.1416 113.813 94.2798 115.112 94.181 116.309C94.1027 117.5 93.8051 118.574 93.2882 119.53C92.7863 120.459 92.083 121.255 91.1782 121.917C90.2679 122.558 89.1739 123.05 87.8963 123.393C86.7217 123.707 85.5799 123.815 84.4708 123.714C83.3768 123.588 82.3698 123.25 81.4498 122.702C80.5243 122.132 79.7091 121.357 79.0043 120.375C78.3202 119.388 77.7904 118.194 77.4149 116.793C76.9125 114.917 76.8198 113.253 77.1368 111.798C77.4484 110.323 78.1313 109.08 79.1854 108.069C80.2396 107.058 81.6116 106.326 83.3013 105.873C84.888 105.448 86.3803 105.412 87.7783 105.767C89.1763 106.121 90.3995 106.853 91.448 107.964C92.4909 109.054 93.2636 110.536 93.7661 112.411ZM82.1132 115.534C82.4113 116.646 82.7759 117.554 83.2069 118.255C83.6529 118.931 84.186 119.395 84.806 119.649C85.4206 119.882 86.14 119.888 86.9642 119.667C87.7885 119.446 88.3982 119.084 88.7934 118.581C89.2036 118.051 89.4227 117.385 89.4506 116.582C89.4936 115.754 89.366 114.783 89.0678 113.67C88.7697 112.557 88.3976 111.663 87.9515 110.988C87.5261 110.307 87.0061 109.85 86.3915 109.617C85.777 109.384 85.0576 109.378 84.2333 109.599C83.0176 109.924 82.2447 110.584 81.9147 111.578C81.5998 112.546 81.6659 113.865 82.1132 115.534ZM105.272 118.737C103.397 119.239 101.665 118.919 100.078 117.776C98.5062 116.607 97.3364 114.591 96.5689 111.727C95.7959 108.842 95.8082 106.497 96.6058 104.693C97.4034 102.889 98.7707 101.728 100.708 101.209C101.511 100.994 102.253 100.916 102.932 100.977C103.605 101.018 104.208 101.166 104.74 101.421C105.293 101.67 105.787 101.99 106.223 102.381L106.378 102.34C106.228 102.027 106.028 101.572 105.78 100.976C105.527 100.359 105.312 99.7213 105.135 99.0619L103.686 93.6528L108.291 92.4187L114.586 115.91L111.062 116.854L109.577 114.9L109.392 114.949C109.225 115.48 108.967 116.002 108.619 116.515C108.285 117.002 107.85 117.439 107.314 117.825C106.777 118.212 106.096 118.516 105.272 118.737ZM105.894 114.628C107.171 114.286 107.968 113.675 108.285 112.795C108.595 111.894 108.56 110.689 108.177 109.179L108.045 108.685C107.603 107.036 107.009 105.848 106.261 105.121C105.535 104.388 104.492 104.204 103.132 104.568C102.122 104.839 101.447 105.494 101.108 106.535C100.763 107.555 100.811 108.889 101.253 110.538C101.695 112.186 102.317 113.356 103.12 114.046C103.918 114.716 104.843 114.91 105.894 114.628ZM130.365 93.5935L134.887 110.47L131.364 111.414L130.166 109.416L129.918 109.483C129.723 110.153 129.396 110.749 128.939 111.269C128.498 111.763 127.969 112.18 127.354 112.522C126.744 112.884 126.089 113.159 125.388 113.347C124.193 113.667 123.084 113.732 122.062 113.542C121.039 113.353 120.159 112.871 119.421 112.096C118.684 111.322 118.122 110.214 117.735 108.772L114.787 97.7677L119.392 96.5337L122.034 106.394C122.355 107.589 122.814 108.438 123.412 108.94C124.011 109.442 124.784 109.566 125.732 109.312C126.68 109.058 127.353 108.646 127.752 108.075C128.172 107.499 128.375 106.771 128.36 105.892C128.366 105.007 128.209 103.967 127.888 102.771L125.76 94.8276L130.365 93.5935ZM146.661 107.647C144.992 108.094 143.49 108.176 142.155 107.893C140.815 107.59 139.665 106.882 138.704 105.77C137.744 104.658 136.996 103.103 136.46 101.104C135.908 99.0433 135.808 97.27 136.161 95.7841C136.514 94.2982 137.226 93.0805 138.296 92.131C139.388 91.176 140.747 90.4804 142.375 90.0442C143.529 89.735 144.559 89.5805 145.464 89.5808C146.391 89.5756 147.215 89.6419 147.936 89.7799L147.529 93.6989C146.73 93.6037 145.987 93.5489 145.298 93.5346C144.63 93.5148 143.987 93.5877 143.369 93.7533C142.565 93.9687 141.948 94.3439 141.517 94.879C141.081 95.3934 140.831 96.0678 140.767 96.902C140.719 97.7101 140.846 98.6808 141.15 99.8142C141.448 100.927 141.831 101.818 142.297 102.488C142.779 103.132 143.337 103.568 143.973 103.795C144.602 104.002 145.298 104.003 146.061 103.799C147.029 103.539 147.851 103.187 148.527 102.741C149.197 102.274 149.821 101.72 150.401 101.079L151.452 105.005C150.873 105.646 150.217 106.164 149.484 106.559C148.776 106.969 147.836 107.332 146.661 107.647ZM161.8 99.6479C162.315 99.5098 162.796 99.3258 163.242 99.0958C163.689 98.8657 164.13 98.6151 164.565 98.3439L165.484 101.775C165.045 102.113 164.474 102.454 163.77 102.797C163.093 103.155 162.322 103.45 161.457 103.682C160.447 103.953 159.496 104.031 158.604 103.917C157.733 103.797 156.952 103.398 156.263 102.722C155.589 102.019 155.058 100.946 154.672 99.5039L152.494 91.3746L150.299 91.9627L149.777 90.0154L151.898 87.7907L152.275 83.88L155.211 83.0932L156.172 86.6787L160.901 85.4115L161.828 88.8734L157.099 90.1406L159.278 98.2698C159.449 98.9086 159.764 99.3432 160.223 99.5735C160.677 99.7832 161.203 99.808 161.8 99.6479ZM179.431 93.1679C179.734 94.3013 179.726 95.3416 179.406 96.2888C179.08 97.2154 178.436 98.0283 177.475 98.7275C176.514 99.4268 175.24 99.989 173.653 100.414C172.479 100.729 171.447 100.917 170.558 100.979C169.674 101.061 168.763 101.04 167.825 100.916L166.806 97.1139C167.823 97.2831 168.893 97.3609 170.016 97.3472C171.138 97.3334 172.101 97.2189 172.905 97.0036C173.812 96.7606 174.415 96.4555 174.714 96.0883C175.034 95.7155 175.135 95.3127 175.02 94.88C174.942 94.5915 174.791 94.356 174.565 94.1735C174.36 93.9855 173.962 93.8162 173.369 93.6658C172.777 93.5153 171.874 93.3597 170.66 93.199C169.488 93.0273 168.503 92.8162 167.707 92.5656C166.906 92.2945 166.257 91.894 165.762 91.3642C165.261 90.8137 164.884 90.0645 164.63 89.1166C164.21 87.5506 164.503 86.2131 165.509 85.1043C166.515 83.9955 168.028 83.1705 170.047 82.6294C171.098 82.3478 172.125 82.1831 173.128 82.1351C174.132 82.0872 175.202 82.165 176.338 82.3683L175.833 86.0484C175.211 85.9502 174.617 85.8774 174.052 85.83C173.487 85.7825 172.944 85.7736 172.422 85.803C171.92 85.827 171.412 85.908 170.897 86.046C170.217 86.2283 169.726 86.459 169.426 86.7383C169.146 87.0121 169.055 87.3345 169.155 87.7054C169.227 87.9733 169.375 88.1985 169.601 88.381C169.842 88.5374 170.242 88.6729 170.803 88.7877C171.384 88.8969 172.225 89.0251 173.325 89.1722C174.398 89.3042 175.343 89.4927 176.159 89.7377C176.971 89.9621 177.647 90.344 178.189 90.8834C178.746 91.3967 179.16 92.1582 179.431 93.1679Z" fill="#10FFA2" />
                            <path d="M103.813 173.984L110.891 147.069L122.974 157.186L127.043 141.067L148.359 159.406L154.166 140.509L165.676 153.638L173.556 130.413" stroke="#10FFA2" stroke-width="3" />
                        </svg>
                        <div class="mall_content mt_24">

                            <p>使用Movwe點數來換取優惠折價券吧！
                                <br>
                                <br>
                                透過Movwe商城點數換取更多種商城折價券，累積點數越多折扣越高！
                                <br>
                                <br>
                                Movwe商城與各大品牌合作，含括迪士尼、漫威、星戰、其他熱門影劇相關周邊，每季定期換新賣場商品。
                            </p>
                        </div>
                        <a class="img_wrap " href="./point_index.php"><img src="./img/banner/mell_point.jpg" alt=""></a>

                    </div>


                    <!-- 主題周邊篩選 -->
                    <div class="title_item mt_72">
                        <div class="stick_desk"></div>
                        <h3>主題商品</h3>
                    </div>

                    <div class="products_filter mt_24">
                        <div class=" __btn main__btn shadow" href=""><img src="./img/other/brand01.svg" alt=""></div>
                        <div class=" __btn star__btn" href=""><img src="./img/other/brand02.svg" alt=""></div>
                        <div class=" __btn dis__btn" href=""><img src="./img/other/brand03.svg" alt=""></div>
                        <div class=" __btn marvel__btn" href=""><img src="./img/other/brand04.svg" alt=""></div>

                    </div>

                    <!-- 商品選擇 -->
                    <ul class="title mt_72">
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
                                        <a href="./product.php"><img class="carousel__images__12" src="./img/mall/gst/gst11.jpg" alt=""></a>

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
                    <div class="products store__star">
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
                    <div class="products store__dis">
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
                    <div class="products store__marvel">
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


            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>
    </div>



    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/Nav.js"></script>
    <script src="./js/store.js"></script>

    <script>

    </script>
</body>

</html>