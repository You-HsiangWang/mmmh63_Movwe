<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>

<link href="./fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css">
    <link rel="stylesheet" href="./css/index_store.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,300&family=Noto+Serif+TC:wght@200;300;500;700;900&display=swap"
        rel="stylesheet">

    <title>mall_index</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /* outline: 1px solid greenyellow; */
        }

        body {
            background-color: rgb(26, 29, 36);
            font-family: 'Caveat', cursive;
            font-family: 'Cormorant Garamond', serif;
            font-family: 'Noto Serif TC', serif;
        }

        html {
            font-size: 12px;
        }

        /* @media screen and (max-width: 500px) {
            .left_nav {
                display: none;
            }

        } */

        @media screen and (min-width: 750px) {
            .text__container {
                width: 94%;
                /* height: 100vh; */
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
    <div class="top_nav">
        <div class="top_nav_left">
            <div class="top_nav_logo">
                <div class="top_nav_logo_box">
                    <img class="top_nav_movwe_img-2" src="./nav_images/LOGO.png" alt="">
                    <i class="fa-solid fa-bars top_nav_movwe_img bars"></i>
                </div>
            </div>
            <div class="top_nav_movwe">
                <div class="top_nav_movwe_box">
                    <img class="top_nav_movwe_img" src="./nav_images/Movwe-.png" alt="">
                </div>
            </div>
        </div>
        <div class="top_nav_right">
            <div class="top_nav_searchbar_box">
                <input type="text" class="top_nav_searchbar" placeholder="輸入片名">
                <div class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></div>

            </div>
        </div>
    </div>
    <div class="layout">
        <!----------nav_left-------------->
        <div class="left_nav">
            <div class="left_nav_box">
            </div>
            <div class="left_nav_box ">
                <div class="left_nav_home icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-house "></i>
                    </div>
                </div>
                <div class="nav_text_01 ">
                    <div class="h-60px">首頁 <span class="down">
                            <!-- <i class="fa-solid fa-angle-down"></i> -->
                        </span> </div>
                </div>

            </div>
            <div class="title_bottom">
                <div class="title_">首頁</div>
            </div>
            <div class="left_nav_box Movie">
                <div class="left_nav_movie icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-film"></i>
                    </div>
                    <div class="nav_text_01 ">
                        <div class="h-60px movie_btn">影劇 <span class="down"><i
                                    class="fa-solid fa-angle-down"></i></span></div>
                        <p class="text_a">影劇搜尋器</p>
                        <p class="text_a">ott上片資訊</p>
                        <p class="text_a">許願池</p>
                        <p class="text_a">心理測驗</p>
                        <p class="text_a">我的片單</p>
                        <p class="text_a">預約片單</p>
                        <p class="text_a">許願清單</p>
                        <p class="text_a">曾經瀏覽</p>
                        <p class="text_a">ott優惠卷</p>

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
                        <p class="text_a">主打活動</p>
                        <p class="text_a">商品總覽</p>
                        <p class="text_a">購物車</p>
                        <p class="text_a">我的訂單</p>
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
                        <p class="text_a">文章總覽</p>
                        <p class="text_a">熱門作者</p>
                        <p class="text_a">熱門文章</p>
                        <p class="text_a">我的收藏</p>

                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">文章</div>
            </div>

            <div class="left_nav_box">
                <div class="left_nav_member icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">會員 <span class="down">
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
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
            </div>

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
            <div class="left_nav_box">
                <div class="left_nav_discount icon_box_W-H">
                    <div class="nav_icon_box icon_W-H">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="nav_text_01">
                        <div class="h-60px">點數 <span class="down">
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
                            </span></div>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                <div class="title_">點數</div>
            </div>


        </div>
        <div class="left_div"></div>

        <!--------------------------------------------------------------------------->
        <div class="container outline">

            <!--banner__container----------------->
            <!-- 電商banner -->
            <div class="banner__container ">
                <!-- 手機圖 -->
                <img class="mall_banner_s" src="./imgs/mall_banner_s.jpg" alt="">
                <!-- <img class="mall_banner_s" src="./imgs/forum_banner03_s.jpg" alt=""> -->

                <!-- 桌機圖 -->
                <img class="mall_banner" src="./imgs/mall_banner.jpg" alt="">
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
                        <div class="img_wrap"><img src="./imgs/point.png" alt=""></div>
                    </div>
                    

                    <!-- 主題周邊篩選 -->
                    <div class="title_item">
                        <div class="stick_desk"></div>
                        <h3>主題商品</h3>
                    </div>

                    <div class="products_filter">
                        <a class="w_300" href=""><img  src="./imgs/brand01.png" alt=""></a>
                        <a class="w_300" href=""><img class="" src="./img/brand02.png" alt=""></a>
                        <a class="w_300" href=""><img class="" src="./imgs/brand03.png" alt=""></a>
                        <a class="w_300" href=""><img class="" src="./imgs/brand04.png" alt=""></a>
                      
          
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
                    <div class="products ">
                        <div class="container_prodcts">
                            <div class="row_products">
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./img/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mall_product">
                                    <img src="./imgs/img01.png" alt="">
                                    <div class="container_product_details">
                                        <p>波吉卡克 1/7 PVC模型</p>
                                        <div class="product_text">
                                            <p class="price">2,350<span>NTD</span></p>
                                            <p class="tag">國王排名</p>
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
    <script>




    </script>
</body>

</html>