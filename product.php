<?php

require './parts/movwe_connect_db.php';
// $pageName = 'login';
$title = 'MOVWE-孤單又燦爛的神-鬼怪 周邊娃娃';

?>

<?php include __DIR__ . '/parts/movwe_head.php' ?>


<link rel="stylesheet" href="./css/mystyle.css">
<link rel="stylesheet" href="./css/product.css">


</head>


<body>
    <!----------nav_top-------------->
    <div class="top_nav">
        <?php

        require './parts/movwe_connect_db.php';

        ?>
        <div class="top_nav_left">
            <div class="top_nav_logo">
                <div class="top_nav_logo_box">
                    <img class="top_nav_movwe_img-2" src="../img/nav_images/LOGO.png" alt="">
                    <i class="fa-solid fa-bars top_nav_movwe_img bars"></i>
                </div>
            </div>
            <div class="top_nav_movwe">
                <div class="top_nav_movwe_box">
                    <img class="top_nav_movwe_img" src="../img/nav_images/Movwe-.png" alt="">
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
                        <div class="h-60px movie_btn">影劇 <span class="down"><i class="fa-solid fa-angle-down"></i></span></div>
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
                        <div class="h-60px store_btn">商城 <span class="down"><i class="fa-solid fa-angle-down"></i></span></div>
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
        <div class="container">

            <!--banner__container----------------->
            <!-- <div class="banner__container">
                <img src="./nav_images/carousel-1.jpeg" alt="">
            </div> -->

            <!--text__container------內容放這邊------------->
            <div class="text__container mt-80">
                <!-- 商品資訊 -->
                <div class="product d-flex flex-col">
                    <!-- 電腦版: 左邊商品圖 -->
                    <div class="product-left">
                        <div class="product-demo">
                            <div class="product-img-wrap-demo">
                                <img src="../img/mall/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-img-row d-flex">
                            <div class="product-img-wrap">
                                <img src="../img/mall/1.jpg" alt="">
                            </div>
                            <div class="product-img-wrap">
                                <img src="../img/mall/2.jpg" alt="">
                            </div>
                            <div class="product-img-wrap">
                                <img src="../img/mall/3.jpg" alt="">
                            </div>
                            <div class="product-img-wrap product-img-wrap-last">
                                <img src="../img/mall/4.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <h3 class="main-color">孤單又燦爛的神-鬼怪 周邊娃娃</h3>
                        <h4 class="mt-10">選擇商品規格、尺寸、數量 >> </h4>
                        <!-- 電腦版: 右邊商品敘述 -->
                        <div class="product-description-pc">
                            <div class="mt-20">
                                <h4 class="yellow mb-10">材質</h4>
                                <p>毛絨面料及填充棉花</p>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">顏色</h4>
                                <div class="d-flex">
                                    <div class="d-flex align-item-center mr-20">
                                        <div class="color mr-10" style="--color:#000"></div>
                                        <p>蕎麥君</p>
                                    </div>
                                    <div class="d-flex align-item-center mr-20">
                                        <div class="color mr-10" style="--color:#fff"></div>
                                        <p>紅豆君</p>
                                    </div>
                                    <div class="d-flex align-item-center">
                                        <div class="color mr-10" style="--color:#00f"></div>
                                        <p>鬼怪大叔</p>
                                    </div>
                                    <div class="d-flex align-item-center mr-20">
                                        <div class="color mr-10" style="--color:#fff"></div>
                                        <p>地獄阿使</p>
                                    </div>
                                    <div class="d-flex align-item-center">
                                        <div class="color mr-10" style="--color:#00f"></div>
                                        <p>德華娃娃</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">尺寸</h4>
                                <div class="d-flex align-item-center">
                                    <button class="product-size mr-20">S</button>
                                    <button class="product-size mr-20">M</button>
                                    <button class="product-size mr-20">L</button>
                                </div>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">數量</h4>
                                <div class="d-flex">
                                    <button class="button-number button-number-minus mr-10" onclick="subPCFunction()">-</button>
                                    <input type="text" value="1" id="quantityPC">
                                    <button class="button-number button-number-plus ml-10" onclick="addPCFunction()">+</button>
                                    <p class="ml-20"> 剩餘29件</p>
                                </div>
                            </div>
                            <div class="mt-20">
                                <span class="yellow mr-10">NTD</span>
                                <h3 class="inline orange">890</h3>
                            </div>
                            <!-- 購買按鈕 -->
                            <div class="button-buy mt-20">
                                <button class="buy d-flex justify-center align-item-center">
                                    <h4 class="mr-10">加入購物車</h4>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2281 10.4877H3.74425C3.54564 10.4877 3.35517 10.4087 3.21473 10.2683C3.0743 10.1278 2.9954 9.93722 2.9954 9.73855C2.9954 9.53987 3.0743 9.34933 3.21473 9.20884C3.35517 9.06835 3.54564 8.98943 3.74425 8.98943H11.5622C12.063 8.98946 12.5493 8.82214 12.9441 8.51406C13.3389 8.20597 13.6196 7.77477 13.7414 7.28893L14.977 2.42715C15.005 2.31658 15.0075 2.20107 14.9841 2.08942C14.9608 1.97777 14.9122 1.87293 14.8422 1.7829C14.7694 1.69056 14.6758 1.61667 14.5692 1.56722C14.4625 1.51776 14.3457 1.49413 14.2281 1.49824H3.56452C3.41003 1.06109 3.12415 0.682446 2.74608 0.414217C2.36801 0.145987 1.91626 0.0013031 1.45277 0H0.74885C0.550242 0 0.35977 0.0789248 0.219333 0.219412C0.0788964 0.359899 0 0.55044 0 0.749119C0 0.947798 0.0788964 1.13834 0.219333 1.27883C0.35977 1.41931 0.550242 1.49824 0.74885 1.49824H1.45277C1.62383 1.49325 1.79144 1.54703 1.92769 1.65062C2.06394 1.75421 2.16062 1.90136 2.20162 2.06757L2.24655 2.42715L3.54206 7.49119C2.94624 7.51801 2.38547 7.78051 1.98312 8.22093C1.58077 8.66136 1.36979 9.24364 1.3966 9.83968C1.42342 10.4357 1.68582 10.9967 2.12609 11.3992C2.56636 11.8017 3.14843 12.0127 3.74425 11.9859H3.87904C3.75588 12.3254 3.71631 12.6895 3.76367 13.0475C3.81103 13.4055 3.94393 13.7468 4.15111 14.0425C4.3583 14.3382 4.63367 14.5796 4.95391 14.7463C5.27414 14.913 5.62981 15 5.9908 15C6.35178 15 6.70745 14.913 7.02769 14.7463C7.34793 14.5796 7.6233 14.3382 7.83048 14.0425C8.03767 13.7468 8.17057 13.4055 8.21793 13.0475C8.26529 12.6895 8.22571 12.3254 8.10255 11.9859H9.86984C9.74668 12.3254 9.7071 12.6895 9.75446 13.0475C9.80182 13.4055 9.93472 13.7468 10.1419 14.0425C10.3491 14.3382 10.6245 14.5796 10.9447 14.7463C11.2649 14.913 11.6206 15 11.9816 15C12.3426 15 12.6983 14.913 13.0185 14.7463C13.3387 14.5796 13.6141 14.3382 13.8213 14.0425C14.0285 13.7468 14.1614 13.4055 14.2087 13.0475C14.2561 12.6895 14.2165 12.3254 14.0934 11.9859H14.2281C14.4268 11.9859 14.6172 11.907 14.7577 11.7665C14.8981 11.626 14.977 11.4355 14.977 11.2368C14.977 11.0381 14.8981 10.8476 14.7577 10.7071C14.6172 10.5666 14.4268 10.4877 14.2281 10.4877ZM13.2696 2.99648L12.2886 6.92186C12.2476 7.08807 12.1509 7.23522 12.0147 7.33881C11.8784 7.4424 11.7108 7.49617 11.5398 7.49119H5.0772L3.95393 2.99648H13.2696ZM5.9908 13.4841C5.84269 13.4841 5.69791 13.4402 5.57476 13.3579C5.45161 13.2756 5.35563 13.1586 5.29895 13.0217C5.24227 12.8848 5.22744 12.7342 5.25634 12.5889C5.28523 12.4436 5.35655 12.3101 5.46128 12.2053C5.56601 12.1005 5.69944 12.0292 5.8447 12.0003C5.98997 11.9714 6.14054 11.9862 6.27737 12.0429C6.4142 12.0996 6.53116 12.1956 6.61344 12.3188C6.69573 12.442 6.73965 12.5869 6.73965 12.735C6.73965 12.9337 6.66075 13.1242 6.52031 13.2647C6.37988 13.4052 6.18941 13.4841 5.9908 13.4841ZM11.9816 13.4841C11.8335 13.4841 11.6887 13.4402 11.5656 13.3579C11.4424 13.2756 11.3464 13.1586 11.2897 13.0217C11.2331 12.8848 11.2182 12.7342 11.2471 12.5889C11.276 12.4436 11.3473 12.3101 11.4521 12.2053C11.5568 12.1005 11.6902 12.0292 11.8355 12.0003C11.9808 11.9714 12.1313 11.9862 12.2682 12.0429C12.405 12.0996 12.522 12.1956 12.6042 12.3188C12.6865 12.442 12.7304 12.5869 12.7304 12.735C12.7304 12.9337 12.6515 13.1242 12.5111 13.2647C12.3707 13.4052 12.1802 13.4841 11.9816 13.4841Z" fill="#10FFA2" />
                                    </svg>
                                </button>
                                <button class="buy d-flex justify-center align-item-center mt-10">
                                    <h4>直接購買</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- 手機版商品敘述 -->
                    <div class="product-description-m">
                        <div class="mt-20">
                            <h4 class="yellow mb-10">材質</h4>
                            <p>100%純棉</p>
                        </div>
                        <div class="mt-20">
                            <h4 class="yellow mb-10">顏色</h4>
                            <div class="d-flex">
                                <div class="d-flex align-item-center mr-20">
                                    <div class="color mr-10" style="--color:#000"></div>
                                    <p>黑</p>
                                </div>
                                <div class="d-flex align-item-center mr-20">
                                    <div class="color mr-10" style="--color:#fff"></div>
                                    <p>白</p>
                                </div>
                                <div class="d-flex align-item-center">
                                    <div class="color mr-10" style="--color:#00f"></div>
                                    <p>藍</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-20">
                            <h4 class="yellow mb-10">尺寸</h4>
                            <div class="d-flex align-item-center">
                                <button class="product-size mr-20">S</button>
                                <button class="product-size mr-20">M</button>
                                <button class="product-size mr-20">L</button>
                                <button class="product-size">XL</button>
                            </div>
                        </div>
                        <div class="mt-20">
                            <h4 class="yellow mb-10">數量</h4>
                            <div class="d-flex">
                                <button class="button-number button-number-minus mr-10" onclick="subFunction()">-</button>
                                <input type="text" value="1" id="quantityM">
                                <button class="button-number button-number-plus ml-10" onclick="addFunction()">+</button>
                                <p class="ml-20"> 剩餘99件</p>
                            </div>
                        </div>
                        <div class="mt-20">
                            <span class="yellow mr-10">NTD</span>
                            <h3 class="inline orange">890</h3>
                        </div>
                        <!-- 購買按鈕 -->
                        <div class="button-buy mt-20">
                            <button class="buy d-flex justify-center align-item-center">
                                <h4 class="mr-10">加入購物車</h4>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2281 10.4877H3.74425C3.54564 10.4877 3.35517 10.4087 3.21473 10.2683C3.0743 10.1278 2.9954 9.93722 2.9954 9.73855C2.9954 9.53987 3.0743 9.34933 3.21473 9.20884C3.35517 9.06835 3.54564 8.98943 3.74425 8.98943H11.5622C12.063 8.98946 12.5493 8.82214 12.9441 8.51406C13.3389 8.20597 13.6196 7.77477 13.7414 7.28893L14.977 2.42715C15.005 2.31658 15.0075 2.20107 14.9841 2.08942C14.9608 1.97777 14.9122 1.87293 14.8422 1.7829C14.7694 1.69056 14.6758 1.61667 14.5692 1.56722C14.4625 1.51776 14.3457 1.49413 14.2281 1.49824H3.56452C3.41003 1.06109 3.12415 0.682446 2.74608 0.414217C2.36801 0.145987 1.91626 0.0013031 1.45277 0H0.74885C0.550242 0 0.35977 0.0789248 0.219333 0.219412C0.0788964 0.359899 0 0.55044 0 0.749119C0 0.947798 0.0788964 1.13834 0.219333 1.27883C0.35977 1.41931 0.550242 1.49824 0.74885 1.49824H1.45277C1.62383 1.49325 1.79144 1.54703 1.92769 1.65062C2.06394 1.75421 2.16062 1.90136 2.20162 2.06757L2.24655 2.42715L3.54206 7.49119C2.94624 7.51801 2.38547 7.78051 1.98312 8.22093C1.58077 8.66136 1.36979 9.24364 1.3966 9.83968C1.42342 10.4357 1.68582 10.9967 2.12609 11.3992C2.56636 11.8017 3.14843 12.0127 3.74425 11.9859H3.87904C3.75588 12.3254 3.71631 12.6895 3.76367 13.0475C3.81103 13.4055 3.94393 13.7468 4.15111 14.0425C4.3583 14.3382 4.63367 14.5796 4.95391 14.7463C5.27414 14.913 5.62981 15 5.9908 15C6.35178 15 6.70745 14.913 7.02769 14.7463C7.34793 14.5796 7.6233 14.3382 7.83048 14.0425C8.03767 13.7468 8.17057 13.4055 8.21793 13.0475C8.26529 12.6895 8.22571 12.3254 8.10255 11.9859H9.86984C9.74668 12.3254 9.7071 12.6895 9.75446 13.0475C9.80182 13.4055 9.93472 13.7468 10.1419 14.0425C10.3491 14.3382 10.6245 14.5796 10.9447 14.7463C11.2649 14.913 11.6206 15 11.9816 15C12.3426 15 12.6983 14.913 13.0185 14.7463C13.3387 14.5796 13.6141 14.3382 13.8213 14.0425C14.0285 13.7468 14.1614 13.4055 14.2087 13.0475C14.2561 12.6895 14.2165 12.3254 14.0934 11.9859H14.2281C14.4268 11.9859 14.6172 11.907 14.7577 11.7665C14.8981 11.626 14.977 11.4355 14.977 11.2368C14.977 11.0381 14.8981 10.8476 14.7577 10.7071C14.6172 10.5666 14.4268 10.4877 14.2281 10.4877ZM13.2696 2.99648L12.2886 6.92186C12.2476 7.08807 12.1509 7.23522 12.0147 7.33881C11.8784 7.4424 11.7108 7.49617 11.5398 7.49119H5.0772L3.95393 2.99648H13.2696ZM5.9908 13.4841C5.84269 13.4841 5.69791 13.4402 5.57476 13.3579C5.45161 13.2756 5.35563 13.1586 5.29895 13.0217C5.24227 12.8848 5.22744 12.7342 5.25634 12.5889C5.28523 12.4436 5.35655 12.3101 5.46128 12.2053C5.56601 12.1005 5.69944 12.0292 5.8447 12.0003C5.98997 11.9714 6.14054 11.9862 6.27737 12.0429C6.4142 12.0996 6.53116 12.1956 6.61344 12.3188C6.69573 12.442 6.73965 12.5869 6.73965 12.735C6.73965 12.9337 6.66075 13.1242 6.52031 13.2647C6.37988 13.4052 6.18941 13.4841 5.9908 13.4841ZM11.9816 13.4841C11.8335 13.4841 11.6887 13.4402 11.5656 13.3579C11.4424 13.2756 11.3464 13.1586 11.2897 13.0217C11.2331 12.8848 11.2182 12.7342 11.2471 12.5889C11.276 12.4436 11.3473 12.3101 11.4521 12.2053C11.5568 12.1005 11.6902 12.0292 11.8355 12.0003C11.9808 11.9714 12.1313 11.9862 12.2682 12.0429C12.405 12.0996 12.522 12.1956 12.6042 12.3188C12.6865 12.442 12.7304 12.5869 12.7304 12.735C12.7304 12.9337 12.6515 13.1242 12.5111 13.2647C12.3707 13.4052 12.1802 13.4841 11.9816 13.4841Z" fill="#10FFA2" />
                                </svg>
                            </button>
                            <button class="buy d-flex justify-center align-item-center mt-10">
                                <h4>直接購買</h4>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 電腦版: 優惠券與規格說明 -->
                <div class="product-discount-pc mt-20">
                    <div class="d-flex">
                        <div class="d-flex w-50">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">商品規格</h3>
                        </div>
                        <div class="d-flex w-50">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">領取優惠券</h3>
                        </div>
                    </div>
                    <div class="d-flex align-item-center">
                        <!-- 商品規格說明 -->
                        <div class="product-info">

                            <div>
                                <h4 class="orange">-關於</h4>
                                <p>
                                    經典熱門韓劇《孤單又燦爛的神：鬼怪》上演了一場跨國、跨歷史、跨年齡段的人鬼愛情，劇中無論是男女CP還是男男CP，他們之間妙不可言的甜膩感情，無疑是再一次向廣大觀衆撒了一大波狗糧，而劇中女主角愛不釋手的娃娃一蕎麥君更是讓影迷們大呼一定要收藏!
                                </p>
                            </div>

                            <div>
                                <h4 class="orange">-尺寸</h4>
                                <p>
                                    S ： 15*12*27公分 / 194公克
                                    <br>
                                    M ： 30*24*54公分 / 388公克
                                    <br>
                                    L ： 45*36*81公分 / 582公克
                                </p>
                            </div>

                            <div>
                                <h4 class="orange">-產地 &nbsp;</h4>
                                <p>韓國製造</p>
                            </div>

                            <div>
                                <p class="yellow">
                                    * 產品圖片可能因為每個裝置螢幕色彩規格而與實際產品不同。
                                    <br>
                                    * 尺寸規格正負2公分內皆為正常範圍。
                                </p>
                            </div>
                        </div>
                        <!-- 優惠券 -->
                        <div class="discount">
                            <div class="d-flex justify-center align-item-center flex-grow">
                                <svg width="350" height="120" viewBox="0 0 350 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2173_26287)">
                                        <path d="M333.528 1.05264H284.697V118.947H333.528V1.05264Z" fill="#8DFFCB" stroke="#00FF99" stroke-width="2.86" stroke-miterlimit="10" />
                                        <path d="M293.982 0.701752H291.23V118.596H293.982V0.701752Z" fill="#00FF99" />
                                        <path d="M326.995 1.40351H324.244V119.298H326.995V1.40351Z" fill="#00FF99" />
                                        <path d="M247.979 113.039H40.0628V112.147C40.0628 100.625 30.8744 91.2561 19.5883 91.2561H18.7148V28.3439L19.7671 28.3789C19.9391 28.3789 20.1179 28.393 20.2898 28.393C31.3971 28.393 40.5787 19.1719 40.7575 7.84561L40.7712 6.96842H247.972L247.986 7.84561C248.165 19.1789 257.346 28.393 268.453 28.393H269.327V91.2491H268.453C257.161 91.2491 247.979 100.625 247.979 112.14V113.032V113.039ZM41.8029 111.256H246.246C246.693 99.4596 256.019 89.9439 267.58 89.4877V30.1614C262.037 29.9439 256.837 27.6561 252.862 23.6561C248.887 19.6632 246.569 14.4 246.266 8.75088H42.4769C42.1743 14.4 39.8565 19.6632 35.8813 23.6561C31.741 27.8175 26.2733 30.1333 20.4617 30.1754V89.4807C32.023 89.9368 41.349 99.4526 41.796 111.249L41.8029 111.256Z" fill="#10FFA2" />
                                        <path d="M48.3846 16.8281L43.7422 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M54.1267 16.8281L49.4844 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M59.8709 16.8281L55.2285 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M65.6189 16.8281L60.9766 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M71.3631 16.8281L66.7207 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M77.1062 16.8281L72.4707 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M83.7342 16.8281L79.0918 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M89.4764 16.8281L84.834 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M95.2195 16.8281L90.584 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M100.969 16.8281L96.3262 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M106.713 16.8281L102.07 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M112.456 16.8281L107.82 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M179.635 16.8281L175 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M185.385 16.8281L180.742 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M191.129 16.8281L186.486 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M196.87 16.8281L192.234 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M202.621 16.8281L197.979 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M208.363 16.8281L203.721 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M214.994 16.8281L210.352 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M220.736 16.8281L216.094 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M226.48 16.8281L221.838 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M232.228 16.8281L227.586 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M237.972 16.8281L233.33 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M243.716 16.8281L239.08 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M61.3338 95.0386L56.6914 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M67.076 95.0386L62.4336 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M72.8191 95.0386L68.1836 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M78.5681 95.0386L73.9258 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M84.3123 95.0386L79.6699 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M90.0554 95.0386L85.4199 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M96.6853 95.0386L92.043 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M102.428 95.0386L97.7852 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M108.171 95.0386L103.535 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M113.92 95.0386L109.277 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M119.664 95.0386L115.021 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M125.407 95.0386L120.771 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M202.387 95.3965L197.752 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M208.137 95.3965L203.494 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M213.881 95.3965L209.238 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M219.622 95.3965L214.986 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M225.373 95.3965L220.73 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M231.115 95.3965L226.473 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M132.738 95.3965L128.096 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M138.48 95.3965L133.838 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M144.223 95.3965L139.588 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M149.972 95.3965L145.33 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M155.717 95.3965L151.074 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M161.46 95.3965L156.824 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M168.088 95.3965L163.445 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M173.831 95.3965L169.195 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M179.58 95.3965L174.938 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M185.322 95.3965L180.68 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M191.065 95.3965L186.43 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M196.816 95.3965L192.174 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M122.895 22.4912H120.24V21.0947H120.687V18.0632H120.24V16.6667H122.971C123.596 16.6667 124.105 16.7088 124.497 16.786C124.896 16.8632 125.268 17.0246 125.618 17.2702C125.962 17.5158 126.237 17.8456 126.437 18.2667C126.533 18.4702 126.609 18.6807 126.664 18.9123C126.719 19.1439 126.74 19.3825 126.74 19.6351C126.74 20.1403 126.636 20.6035 126.423 21.0175C126.217 21.4316 125.949 21.7474 125.632 21.9649C125.323 22.1825 124.979 22.3298 124.607 22.393C124.236 22.4632 123.665 22.4912 122.895 22.4912V22.4912ZM122.895 18.0632V21.0947H123.101C123.624 21.0947 123.961 20.9544 124.112 20.6737C124.264 20.393 124.339 20.0351 124.339 19.614C124.339 19.3544 124.305 19.1018 124.243 18.8491C124.174 18.5965 124.057 18.407 123.885 18.2667C123.713 18.1333 123.411 18.0632 122.978 18.0632H122.895V18.0632Z" fill="#FEB73A" />
                                        <path d="M130.708 22.4912H127.455V21.0947H127.978V18.0632H127.455V16.6667H130.708V18.0632H130.185V21.0947H130.708V22.4912Z" fill="#FEB73A" />
                                        <path d="M132.675 22.4912H131.389V20.6246H132.675C132.826 21.1298 133.115 21.3895 133.542 21.3895C133.851 21.3895 134.002 21.2632 134.002 21.0105C134.002 20.8772 133.947 20.7719 133.844 20.6807C133.727 20.5825 133.487 20.4561 133.115 20.2877C132.648 20.0702 132.311 19.8877 132.09 19.7333C131.884 19.593 131.712 19.3965 131.568 19.1439C131.423 18.8982 131.348 18.6175 131.348 18.3228C131.348 17.7825 131.52 17.3614 131.863 17.0526C132.207 16.7509 132.627 16.5965 133.129 16.5965C133.631 16.5965 134.051 16.7439 134.401 17.0316V16.6737H135.694V18.3298H134.422C134.264 17.8737 133.989 17.6421 133.597 17.6421C133.315 17.6421 133.177 17.7614 133.177 18.007C133.177 18.1263 133.218 18.2105 133.294 18.2737C133.37 18.3368 133.617 18.4702 134.037 18.6807C134.601 18.9684 134.972 19.1719 135.158 19.3053C135.254 19.3684 135.35 19.4596 135.454 19.5719C135.557 19.6842 135.639 19.8035 135.701 19.9298C135.852 20.2035 135.928 20.4982 135.928 20.814C135.928 21.3053 135.749 21.7123 135.392 22.0561C135.034 22.4 134.587 22.5684 134.044 22.5684C133.542 22.5684 133.088 22.414 132.675 22.1123V22.4912Z" fill="#FEB73A" />
                                        <path d="M141.161 19.9298L142.64 20.4632C142.516 21.0877 142.227 21.593 141.773 21.993C141.319 22.393 140.686 22.5895 139.889 22.5895C138.795 22.5895 137.984 22.2947 137.461 21.7123C136.931 21.1298 136.67 20.421 136.67 19.586C136.67 18.7509 136.931 18.0281 137.447 17.4386C137.963 16.8491 138.637 16.5544 139.462 16.5544C140.129 16.5544 140.68 16.7228 141.099 17.0596V16.6737H142.468V18.8H141.044C140.968 18.5333 140.845 18.3228 140.673 18.1754C140.501 18.0281 140.301 17.9509 140.074 17.9509C139.455 17.9509 139.146 18.4912 139.146 19.5789C139.146 20.6667 139.469 21.214 140.109 21.214C140.673 21.214 141.023 20.786 141.168 19.9368L141.161 19.9298Z" fill="#FEB73A" />
                                        <path d="M143.41 19.5719C143.41 19.0877 143.527 18.6175 143.761 18.1614C143.988 17.7123 144.346 17.3263 144.834 17.0175C145.006 16.9053 145.185 16.821 145.363 16.7579C145.542 16.6947 145.742 16.6456 145.955 16.6105C146.168 16.5754 146.395 16.5614 146.629 16.5614C147.654 16.5614 148.445 16.8702 149.002 17.4807C149.284 17.7825 149.49 18.1053 149.634 18.4632C149.779 18.821 149.848 19.186 149.848 19.5789C149.848 20.393 149.559 21.0947 148.981 21.6982C148.403 22.3018 147.619 22.5965 146.629 22.5965C145.638 22.5965 144.903 22.3158 144.304 21.7544C143.706 21.193 143.41 20.4702 143.41 19.5789V19.5719ZM145.886 19.5719C145.886 20.2175 145.948 20.6526 146.072 20.8842C146.189 21.1158 146.374 21.2281 146.629 21.2281C146.883 21.2281 147.062 21.1158 147.186 20.8982C147.31 20.6737 147.372 20.2316 147.372 19.5789C147.372 18.9263 147.31 18.5053 147.193 18.2737C147.076 18.0421 146.89 17.9298 146.629 17.9298C146.368 17.9298 146.196 18.0421 146.072 18.2596C145.948 18.4772 145.886 18.9193 145.886 19.5789V19.5719Z" fill="#FEB73A" />
                                        <path d="M150.948 18.0632H150.508V16.6667H153.431V18.0632H153.163V20.0281C153.163 20.4982 153.204 20.814 153.293 20.9895C153.383 21.1579 153.541 21.2421 153.768 21.2421C153.953 21.2421 154.091 21.1719 154.18 21.0316C154.263 20.8912 154.304 20.6035 154.304 20.1754V18.0772H154.015V16.6807H156.161V18.0772H155.707V20.1895C155.707 20.7298 155.632 21.1719 155.48 21.5088C155.329 21.8526 155.075 22.1123 154.717 22.3088C154.359 22.5053 153.926 22.5965 153.403 22.5965C152.984 22.5965 152.612 22.5474 152.289 22.4421C151.959 22.3439 151.705 22.1895 151.512 21.9789C151.319 21.7754 151.182 21.5298 151.092 21.2351C150.996 20.9544 150.955 20.5193 150.955 19.9368V18.0702L150.948 18.0632Z" fill="#FEB73A" />
                                        <path d="M159.002 22.4912H156.656V21.0947H157.158V18.0632H156.656V16.6667H159.359L161.436 19.7123V18.0632H160.975V16.6667H163.279V18.0632H162.784V22.5684H160.907L158.506 19.0456V21.0947H159.008V22.4912H159.002Z" fill="#FEB73A" />
                                        <path d="M168.315 22.4912H165.11V21.0947H165.605V18.0632H164.952V19.1228H163.879V16.6737H169.532V19.1228H168.459V18.0632H167.806V21.0947H168.308V22.4912H168.315Z" fill="#FEB73A" />
                                        <path d="M95.0957 61.0807L98.8096 60.8421C99.1397 61.6351 99.7724 62.0351 100.708 62.0351C101.265 62.0351 101.733 61.8807 102.111 61.5719C102.482 61.2632 102.668 60.786 102.668 60.1263C102.668 59.4667 102.482 59.0105 102.111 58.7158C101.733 58.4211 101.299 58.2737 100.797 58.2737C100.034 58.2737 99.3873 58.5614 98.8715 59.1298L95.7628 58.007L96.1961 50.4351H106.705V54.2456H104.298L103.961 53.3544H98.8646L98.7408 56.2456C99.6555 55.6632 100.749 55.3684 102.015 55.3684C103.562 55.3684 104.841 55.7895 105.852 56.6316C106.863 57.4737 107.372 58.6316 107.372 60.1053C107.372 61.5789 106.836 62.7368 105.77 63.6912C104.697 64.6456 103.204 65.1228 101.286 65.1228C99.6005 65.1228 98.2112 64.7579 97.1108 64.0351C96.0173 63.3193 95.3502 62.3298 95.1026 61.0737L95.0957 61.0807Z" fill="#FEB73A" />
                                        <path d="M123.218 64.9965H114.883V61.5088H116.265V53.9228H114.883V50.4351H123.631C125.639 50.4351 127.111 50.6316 128.04 51.0316C128.968 51.4386 129.656 51.986 130.089 52.6877C130.529 53.3825 130.743 54.1474 130.743 54.9825C130.743 56.007 130.481 56.8561 129.965 57.5368C129.443 58.2175 128.762 58.7158 127.902 59.0246C127.063 59.3263 125.763 59.4737 124.002 59.4737H121.774V61.5158H123.212V65.0035L123.218 64.9965ZM121.781 53.6351V56.3649H122.861C123.61 56.3649 124.161 56.2737 124.505 56.0912C124.835 55.9088 125 55.5579 125 55.0316C125 54.6877 124.91 54.4 124.732 54.1614C124.56 53.9298 124.333 53.7825 124.044 53.7193C123.769 53.6561 123.308 53.6281 122.648 53.6281H121.788L121.781 53.6351Z" fill="#FEB73A" />
                                        <path d="M132.289 57.6772C132.289 56.4632 132.578 55.2912 133.163 54.1544C133.733 53.0246 134.627 52.0702 135.838 51.2982C136.271 51.0246 136.711 50.807 137.165 50.6526C137.619 50.4912 138.114 50.3649 138.644 50.2807C139.18 50.1965 139.737 50.1474 140.329 50.1474C142.887 50.1474 144.868 50.9123 146.264 52.4421C146.959 53.193 147.489 54.014 147.846 54.8912C148.204 55.7684 148.383 56.7018 148.383 57.6842C148.383 59.7123 147.66 61.4807 146.209 62.9754C144.758 64.4772 142.798 65.2281 140.336 65.2281C137.874 65.2281 136.017 64.5263 134.531 63.1158C133.039 61.7123 132.296 59.9018 132.296 57.6842L132.289 57.6772ZM138.486 57.6772C138.486 59.2982 138.637 60.386 138.947 60.9544C139.242 61.5298 139.703 61.8105 140.329 61.8105C140.955 61.8105 141.416 61.5368 141.725 60.9825C142.035 60.4211 142.186 59.3193 142.186 57.6772C142.186 56.0351 142.035 54.9895 141.732 54.414C141.436 53.8386 140.969 53.5579 140.329 53.5579C139.689 53.5579 139.249 53.8316 138.947 54.386C138.644 54.9404 138.486 56.0351 138.486 57.6842V57.6772Z" fill="#FEB73A" />
                                        <path d="M158.287 64.9965H150.158V61.5088H151.472V53.9228H150.158V50.4351H158.287V53.9228H156.988V61.5088H158.287V64.9965Z" fill="#FEB73A" />
                                        <path d="M165.577 64.9965H159.725V61.5088H160.976V53.9228H159.725V50.4351H166.485L171.671 58.0421V53.9228H170.516V50.4351H176.265V53.9228H175.027V65.1789H170.33L164.319 56.3789V61.5088H165.577V64.9965Z" fill="#FEB73A" />
                                        <path d="M188.865 64.9965H180.86V61.5088H182.091V53.9228H180.447V56.5684H177.771V50.4351H191.912V56.5684H189.236V53.9228H187.606V61.5088H188.865V64.9965V64.9965Z" fill="#FEB73A" />
                                        <path d="M255.33 32.8561H36.2168V34.6386H255.33V32.8561Z" fill="#FEB73A" />
                                        <path d="M255.33 81.2491H36.2168V83.0316H255.33V81.2491Z" fill="#FEB73A" />
                                        <path d="M54.1539 41.9439L58.418 50.7719L67.9641 52.1825L61.059 59.0526L62.689 68.7509L54.1539 64.1684L45.6189 68.7509L47.2488 59.0526L40.3438 52.1825L49.883 50.7719L54.1539 41.9439Z" fill="#FEB73A" />
                                        <path d="M234.759 41.586L239.03 50.414L248.576 51.8246L241.664 58.6947L243.294 68.393L234.759 63.8176L226.224 68.393L227.854 58.6947L220.949 51.8246L230.495 50.414L234.759 41.586Z" fill="#FEB73A" />
                                        <path d="M350 120H0V113.951L0.832187 113.775C3.36314 113.235 4.7249 112.161 4.7249 111.432C4.7249 110.702 3.36314 109.628 0.832187 109.088L0 108.912V101.102L0.832187 100.926C3.36314 100.386 4.7249 99.3123 4.7249 98.5825C4.7249 97.8526 3.36314 96.7789 0.832187 96.2386L0 96.0632V88.2526L0.832187 88.0772C3.36314 87.5368 4.7249 86.4632 4.7249 85.7333C4.7249 85.0035 3.36314 83.9298 0.832187 83.3895L0 83.214V75.4035L0.832187 75.2281C3.36314 74.6877 4.7249 73.614 4.7249 72.8842C4.7249 72.1544 3.36314 71.0807 0.832187 70.5403L0 70.3649V62.5544L0.832187 62.3789C3.36314 61.8386 4.7249 60.7649 4.7249 60.0351C4.7249 59.3053 3.36314 58.2316 0.832187 57.6912L0 57.5158V49.7053L0.832187 49.5298C3.36314 48.9895 4.7249 47.9158 4.7249 47.186C4.7249 46.4561 3.36314 45.3825 0.832187 44.8421L0 44.6667V36.8561L0.832187 36.6807C3.36314 36.1404 4.7249 35.0667 4.7249 34.3368C4.7249 33.607 3.36314 32.5333 0.832187 31.993L0 31.8175V24.007L0.832187 23.8316C3.36314 23.2912 4.7249 22.2175 4.7249 21.4877C4.7249 20.7579 3.36314 19.6842 0.832187 19.1439L0 18.9684V11.0947L0.832187 10.9193C3.36314 10.3789 4.7249 9.30526 4.7249 8.57544C4.7249 7.84561 3.36314 6.77193 0.832187 6.23158L0 6.05614V0H350V6.04912L349.168 6.22456C346.637 6.76491 345.275 7.8386 345.275 8.56842C345.275 9.29825 346.637 10.3719 349.168 10.9123L350 11.0877V18.8982L349.168 19.0737C346.637 19.614 345.275 20.6877 345.275 21.4175C345.275 22.1474 346.637 23.2211 349.168 23.7614L350 23.9368V31.7474L349.168 31.9228C346.637 32.4632 345.275 33.5368 345.275 34.2667C345.275 34.9965 346.637 36.0702 349.168 36.6105L350 36.786V44.5965L349.168 44.7719C346.637 45.3123 345.275 46.386 345.275 47.1158C345.275 47.8456 346.637 48.9193 349.168 49.4597L350 49.6351V57.4456L349.168 57.6211C346.637 58.1614 345.275 59.2351 345.275 59.9649C345.275 60.6947 346.637 61.7684 349.168 62.3088L350 62.4842V70.2947L349.168 70.4702C346.637 71.0105 345.275 72.0842 345.275 72.814C345.275 73.5439 346.637 74.6175 349.168 75.1579L350 75.3333V83.1439L349.168 83.3193C346.637 83.8597 345.275 84.9333 345.275 85.6632C345.275 86.393 346.637 87.4667 349.168 88.007L350 88.1825V95.993L349.168 96.1684C346.637 96.7088 345.275 97.7825 345.275 98.5123C345.275 99.2421 346.637 100.316 349.168 100.856L350 101.032V108.842L349.168 109.018C346.637 109.558 345.275 110.632 345.275 111.361C345.275 112.091 346.637 113.165 349.168 113.705L350 113.881V119.93V120ZM2.09766 117.86H347.902V115.67C344.924 114.849 343.177 113.298 343.177 111.432C343.177 109.565 344.924 108.014 347.902 107.193V102.814C344.924 101.993 343.177 100.442 343.177 98.5754C343.177 96.7088 344.924 95.1579 347.902 94.3368V89.9579C344.924 89.1368 343.177 87.586 343.177 85.7193C343.177 83.8526 344.924 82.3018 347.902 81.4807V77.1018C344.924 76.2807 343.177 74.7298 343.177 72.8632C343.177 70.9965 344.924 69.4456 347.902 68.6246V64.2456C344.924 63.4246 343.177 61.8737 343.177 60.007C343.177 58.1404 344.924 56.5895 347.902 55.7684V51.3895C344.924 50.5684 343.177 49.0175 343.177 47.1509C343.177 45.2842 344.924 43.7333 347.902 42.9123V38.5333C344.924 37.7123 343.177 36.1614 343.177 34.2947C343.177 32.4281 344.924 30.8772 347.902 30.0561V25.6772C344.924 24.8561 343.177 23.3053 343.177 21.4386C343.177 19.5719 344.924 18.0211 347.902 17.2V12.8211C344.924 12 343.177 10.4491 343.177 8.58246C343.177 6.71579 344.924 5.16491 347.902 4.34386V2.14035H2.09766V4.32982C5.07565 5.15088 6.82256 6.70175 6.82256 8.56842C6.82256 10.4351 5.07565 11.986 2.09766 12.807V17.186C5.07565 18.007 6.82256 19.5579 6.82256 21.4246C6.82256 23.2912 5.07565 24.8421 2.09766 25.6632V30.0421C5.07565 30.8632 6.82256 32.414 6.82256 34.2807C6.82256 36.1474 5.07565 37.6982 2.09766 38.5193V42.8982C5.07565 43.7193 6.82256 45.2702 6.82256 47.1368C6.82256 49.0035 5.07565 50.5544 2.09766 51.3754V55.7544C5.07565 56.5754 6.82256 58.1263 6.82256 59.993C6.82256 61.8596 5.07565 63.4105 2.09766 64.2316V68.6105C5.07565 69.4316 6.82256 70.9825 6.82256 72.8491C6.82256 74.7158 5.07565 76.2667 2.09766 77.0877V81.4667C5.07565 82.2877 6.82256 83.8386 6.82256 85.7053C6.82256 87.5719 5.07565 89.1228 2.09766 89.9439V94.3228C5.07565 95.1439 6.82256 96.6947 6.82256 98.5614C6.82256 100.428 5.07565 101.979 2.09766 102.8V107.179C5.07565 108 6.82256 109.551 6.82256 111.418C6.82256 113.284 5.07565 114.835 2.09766 115.656V117.846V117.86Z" fill="#00FF99" />
                                        <path d="M302.141 49.3357V50.4077H307.501V49.3357H302.141ZM303.373 46.7597V47.7997H307.357V46.7597H303.373ZM303.853 49.8957V57.3517H304.941V49.8957H303.853ZM306.957 49.3357V54.0717C306.957 54.2157 306.925 54.2637 306.765 54.2797C306.589 54.2957 306.093 54.2957 305.453 54.2797C305.597 54.5677 305.725 54.9997 305.741 55.3197C306.605 55.3197 307.181 55.3037 307.565 55.1277C307.949 54.9357 308.029 54.6157 308.029 54.0877V49.3357H306.957ZM308.333 43.3997V44.4397H316.413V43.3997H308.333ZM310.061 49.3517H314.749V50.9197H310.061V49.3517ZM310.061 51.7997H314.749V53.3837H310.061V51.7997ZM310.061 46.9037H314.749V48.4557H310.061V46.9037ZM308.941 45.9757V54.3277H315.917V45.9757H308.941ZM311.773 43.9117C311.677 44.6477 311.453 45.7517 311.261 46.4717L312.317 46.6797C312.573 46.0077 312.861 44.9997 313.133 44.0717L311.773 43.9117ZM310.541 54.6157C309.853 55.3197 308.413 56.1517 307.133 56.6157C307.373 56.8237 307.757 57.1917 307.933 57.4317C309.213 56.9517 310.717 56.0877 311.597 55.2397L310.541 54.6157ZM313.021 55.3037C314.013 55.9117 315.245 56.8237 315.837 57.4157L316.797 56.7277C316.141 56.1197 314.909 55.2557 313.933 54.6957L313.021 55.3037ZM304.669 42.6637C304.109 44.0557 303.053 45.8477 301.517 47.1757C301.741 47.3517 302.061 47.7837 302.221 48.0397C303.949 46.4717 305.037 44.5997 305.693 43.2397V42.9197H305.325V42.6637H304.669ZM304.813 42.6637V43.5597H305.053C306.109 44.4397 307.357 45.9437 307.965 46.8397L308.749 45.8317C308.125 44.9357 306.797 43.5757 305.725 42.6637H304.813ZM309.373 63.8557V65.0237H315.277V63.8557H309.373ZM301.949 62.6557V63.7757H309.773V62.6557H301.949ZM303.821 65.9037V67.0077H307.981V65.9037H303.821ZM303.821 69.2317V70.3197H307.981V69.2317H303.821ZM314.925 63.8557V64.1437C314.237 69.7597 311.853 73.5197 308.685 75.1677C308.957 75.3917 309.293 75.8397 309.485 76.1437C312.909 74.1597 315.357 70.3997 316.125 64.0317L315.357 63.8237L315.133 63.8557H314.925ZM310.829 65.0877L309.677 65.3117C310.669 70.3357 312.509 74.2397 315.981 76.2077C316.173 75.8877 316.557 75.4397 316.829 75.1997C313.533 73.5037 311.677 69.7117 310.829 65.0877ZM303.197 63.0877V73.4717H304.349V63.0877H303.197ZM307.485 63.0877V76.3357H308.637V63.0877H307.485ZM301.629 73.1197L301.853 74.3197C303.517 74.0637 305.821 73.6957 308.013 73.3437L307.949 72.2397C305.613 72.5917 303.197 72.9277 301.629 73.1197Z" fill="#1A1D24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2173_26287">
                                            <rect width="350" height="120" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="350" height="120" viewBox="0 0 350 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2173_26287)">
                                        <path d="M333.528 1.05264H284.697V118.947H333.528V1.05264Z" fill="#8DFFCB" stroke="#00FF99" stroke-width="2.86" stroke-miterlimit="10" />
                                        <path d="M293.982 0.701752H291.23V118.596H293.982V0.701752Z" fill="#00FF99" />
                                        <path d="M326.995 1.40351H324.244V119.298H326.995V1.40351Z" fill="#00FF99" />
                                        <path d="M247.979 113.039H40.0628V112.147C40.0628 100.625 30.8744 91.2561 19.5883 91.2561H18.7148V28.3439L19.7671 28.3789C19.9391 28.3789 20.1179 28.393 20.2898 28.393C31.3971 28.393 40.5787 19.1719 40.7575 7.84561L40.7712 6.96842H247.972L247.986 7.84561C248.165 19.1789 257.346 28.393 268.453 28.393H269.327V91.2491H268.453C257.161 91.2491 247.979 100.625 247.979 112.14V113.032V113.039ZM41.8029 111.256H246.246C246.693 99.4596 256.019 89.9439 267.58 89.4877V30.1614C262.037 29.9439 256.837 27.6561 252.862 23.6561C248.887 19.6632 246.569 14.4 246.266 8.75088H42.4769C42.1743 14.4 39.8565 19.6632 35.8813 23.6561C31.741 27.8175 26.2733 30.1333 20.4617 30.1754V89.4807C32.023 89.9368 41.349 99.4526 41.796 111.249L41.8029 111.256Z" fill="#10FFA2" />
                                        <path d="M48.3846 16.8281L43.7422 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M54.1267 16.8281L49.4844 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M59.8709 16.8281L55.2285 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M65.6189 16.8281L60.9766 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M71.3631 16.8281L66.7207 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M77.1062 16.8281L72.4707 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M83.7342 16.8281L79.0918 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M89.4764 16.8281L84.834 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M95.2195 16.8281L90.584 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M100.969 16.8281L96.3262 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M106.713 16.8281L102.07 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M112.456 16.8281L107.82 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M179.635 16.8281L175 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M185.385 16.8281L180.742 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M191.129 16.8281L186.486 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M196.87 16.8281L192.234 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M202.621 16.8281L197.979 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M208.363 16.8281L203.721 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M214.994 16.8281L210.352 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M220.736 16.8281L216.094 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M226.48 16.8281L221.838 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M232.228 16.8281L227.586 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M237.972 16.8281L233.33 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M243.716 16.8281L239.08 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M61.3338 95.0386L56.6914 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M67.076 95.0386L62.4336 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M72.8191 95.0386L68.1836 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M78.5681 95.0386L73.9258 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M84.3123 95.0386L79.6699 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M90.0554 95.0386L85.4199 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M96.6853 95.0386L92.043 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M102.428 95.0386L97.7852 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M108.171 95.0386L103.535 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M113.92 95.0386L109.277 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M119.664 95.0386L115.021 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M125.407 95.0386L120.771 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M202.387 95.3965L197.752 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M208.137 95.3965L203.494 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M213.881 95.3965L209.238 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M219.622 95.3965L214.986 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M225.373 95.3965L220.73 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M231.115 95.3965L226.473 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M132.738 95.3965L128.096 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M138.48 95.3965L133.838 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M144.223 95.3965L139.588 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M149.972 95.3965L145.33 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M155.717 95.3965L151.074 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M161.46 95.3965L156.824 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M168.088 95.3965L163.445 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M173.831 95.3965L169.195 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M179.58 95.3965L174.938 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M185.322 95.3965L180.68 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M191.065 95.3965L186.43 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M196.816 95.3965L192.174 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                        <path d="M122.895 22.4912H120.24V21.0947H120.687V18.0632H120.24V16.6667H122.971C123.596 16.6667 124.105 16.7088 124.497 16.786C124.896 16.8632 125.268 17.0246 125.618 17.2702C125.962 17.5158 126.237 17.8456 126.437 18.2667C126.533 18.4702 126.609 18.6807 126.664 18.9123C126.719 19.1439 126.74 19.3825 126.74 19.6351C126.74 20.1403 126.636 20.6035 126.423 21.0175C126.217 21.4316 125.949 21.7474 125.632 21.9649C125.323 22.1825 124.979 22.3298 124.607 22.393C124.236 22.4632 123.665 22.4912 122.895 22.4912V22.4912ZM122.895 18.0632V21.0947H123.101C123.624 21.0947 123.961 20.9544 124.112 20.6737C124.264 20.393 124.339 20.0351 124.339 19.614C124.339 19.3544 124.305 19.1018 124.243 18.8491C124.174 18.5965 124.057 18.407 123.885 18.2667C123.713 18.1333 123.411 18.0632 122.978 18.0632H122.895V18.0632Z" fill="#FEB73A" />
                                        <path d="M130.708 22.4912H127.455V21.0947H127.978V18.0632H127.455V16.6667H130.708V18.0632H130.185V21.0947H130.708V22.4912Z" fill="#FEB73A" />
                                        <path d="M132.675 22.4912H131.389V20.6246H132.675C132.826 21.1298 133.115 21.3895 133.542 21.3895C133.851 21.3895 134.002 21.2632 134.002 21.0105C134.002 20.8772 133.947 20.7719 133.844 20.6807C133.727 20.5825 133.487 20.4561 133.115 20.2877C132.648 20.0702 132.311 19.8877 132.09 19.7333C131.884 19.593 131.712 19.3965 131.568 19.1439C131.423 18.8982 131.348 18.6175 131.348 18.3228C131.348 17.7825 131.52 17.3614 131.863 17.0526C132.207 16.7509 132.627 16.5965 133.129 16.5965C133.631 16.5965 134.051 16.7439 134.401 17.0316V16.6737H135.694V18.3298H134.422C134.264 17.8737 133.989 17.6421 133.597 17.6421C133.315 17.6421 133.177 17.7614 133.177 18.007C133.177 18.1263 133.218 18.2105 133.294 18.2737C133.37 18.3368 133.617 18.4702 134.037 18.6807C134.601 18.9684 134.972 19.1719 135.158 19.3053C135.254 19.3684 135.35 19.4596 135.454 19.5719C135.557 19.6842 135.639 19.8035 135.701 19.9298C135.852 20.2035 135.928 20.4982 135.928 20.814C135.928 21.3053 135.749 21.7123 135.392 22.0561C135.034 22.4 134.587 22.5684 134.044 22.5684C133.542 22.5684 133.088 22.414 132.675 22.1123V22.4912Z" fill="#FEB73A" />
                                        <path d="M141.161 19.9298L142.64 20.4632C142.516 21.0877 142.227 21.593 141.773 21.993C141.319 22.393 140.686 22.5895 139.889 22.5895C138.795 22.5895 137.984 22.2947 137.461 21.7123C136.931 21.1298 136.67 20.421 136.67 19.586C136.67 18.7509 136.931 18.0281 137.447 17.4386C137.963 16.8491 138.637 16.5544 139.462 16.5544C140.129 16.5544 140.68 16.7228 141.099 17.0596V16.6737H142.468V18.8H141.044C140.968 18.5333 140.845 18.3228 140.673 18.1754C140.501 18.0281 140.301 17.9509 140.074 17.9509C139.455 17.9509 139.146 18.4912 139.146 19.5789C139.146 20.6667 139.469 21.214 140.109 21.214C140.673 21.214 141.023 20.786 141.168 19.9368L141.161 19.9298Z" fill="#FEB73A" />
                                        <path d="M143.41 19.5719C143.41 19.0877 143.527 18.6175 143.761 18.1614C143.988 17.7123 144.346 17.3263 144.834 17.0175C145.006 16.9053 145.185 16.821 145.363 16.7579C145.542 16.6947 145.742 16.6456 145.955 16.6105C146.168 16.5754 146.395 16.5614 146.629 16.5614C147.654 16.5614 148.445 16.8702 149.002 17.4807C149.284 17.7825 149.49 18.1053 149.634 18.4632C149.779 18.821 149.848 19.186 149.848 19.5789C149.848 20.393 149.559 21.0947 148.981 21.6982C148.403 22.3018 147.619 22.5965 146.629 22.5965C145.638 22.5965 144.903 22.3158 144.304 21.7544C143.706 21.193 143.41 20.4702 143.41 19.5789V19.5719ZM145.886 19.5719C145.886 20.2175 145.948 20.6526 146.072 20.8842C146.189 21.1158 146.374 21.2281 146.629 21.2281C146.883 21.2281 147.062 21.1158 147.186 20.8982C147.31 20.6737 147.372 20.2316 147.372 19.5789C147.372 18.9263 147.31 18.5053 147.193 18.2737C147.076 18.0421 146.89 17.9298 146.629 17.9298C146.368 17.9298 146.196 18.0421 146.072 18.2596C145.948 18.4772 145.886 18.9193 145.886 19.5789V19.5719Z" fill="#FEB73A" />
                                        <path d="M150.948 18.0632H150.508V16.6667H153.431V18.0632H153.163V20.0281C153.163 20.4982 153.204 20.814 153.293 20.9895C153.383 21.1579 153.541 21.2421 153.768 21.2421C153.953 21.2421 154.091 21.1719 154.18 21.0316C154.263 20.8912 154.304 20.6035 154.304 20.1754V18.0772H154.015V16.6807H156.161V18.0772H155.707V20.1895C155.707 20.7298 155.632 21.1719 155.48 21.5088C155.329 21.8526 155.075 22.1123 154.717 22.3088C154.359 22.5053 153.926 22.5965 153.403 22.5965C152.984 22.5965 152.612 22.5474 152.289 22.4421C151.959 22.3439 151.705 22.1895 151.512 21.9789C151.319 21.7754 151.182 21.5298 151.092 21.2351C150.996 20.9544 150.955 20.5193 150.955 19.9368V18.0702L150.948 18.0632Z" fill="#FEB73A" />
                                        <path d="M159.002 22.4912H156.656V21.0947H157.158V18.0632H156.656V16.6667H159.359L161.436 19.7123V18.0632H160.975V16.6667H163.279V18.0632H162.784V22.5684H160.907L158.506 19.0456V21.0947H159.008V22.4912H159.002Z" fill="#FEB73A" />
                                        <path d="M168.315 22.4912H165.11V21.0947H165.605V18.0632H164.952V19.1228H163.879V16.6737H169.532V19.1228H168.459V18.0632H167.806V21.0947H168.308V22.4912H168.315Z" fill="#FEB73A" />
                                        <path d="M95.0957 61.0807L98.8096 60.8421C99.1397 61.6351 99.7724 62.0351 100.708 62.0351C101.265 62.0351 101.733 61.8807 102.111 61.5719C102.482 61.2632 102.668 60.786 102.668 60.1263C102.668 59.4667 102.482 59.0105 102.111 58.7158C101.733 58.4211 101.299 58.2737 100.797 58.2737C100.034 58.2737 99.3873 58.5614 98.8715 59.1298L95.7628 58.007L96.1961 50.4351H106.705V54.2456H104.298L103.961 53.3544H98.8646L98.7408 56.2456C99.6555 55.6632 100.749 55.3684 102.015 55.3684C103.562 55.3684 104.841 55.7895 105.852 56.6316C106.863 57.4737 107.372 58.6316 107.372 60.1053C107.372 61.5789 106.836 62.7368 105.77 63.6912C104.697 64.6456 103.204 65.1228 101.286 65.1228C99.6005 65.1228 98.2112 64.7579 97.1108 64.0351C96.0173 63.3193 95.3502 62.3298 95.1026 61.0737L95.0957 61.0807Z" fill="#FEB73A" />
                                        <path d="M123.218 64.9965H114.883V61.5088H116.265V53.9228H114.883V50.4351H123.631C125.639 50.4351 127.111 50.6316 128.04 51.0316C128.968 51.4386 129.656 51.986 130.089 52.6877C130.529 53.3825 130.743 54.1474 130.743 54.9825C130.743 56.007 130.481 56.8561 129.965 57.5368C129.443 58.2175 128.762 58.7158 127.902 59.0246C127.063 59.3263 125.763 59.4737 124.002 59.4737H121.774V61.5158H123.212V65.0035L123.218 64.9965ZM121.781 53.6351V56.3649H122.861C123.61 56.3649 124.161 56.2737 124.505 56.0912C124.835 55.9088 125 55.5579 125 55.0316C125 54.6877 124.91 54.4 124.732 54.1614C124.56 53.9298 124.333 53.7825 124.044 53.7193C123.769 53.6561 123.308 53.6281 122.648 53.6281H121.788L121.781 53.6351Z" fill="#FEB73A" />
                                        <path d="M132.289 57.6772C132.289 56.4632 132.578 55.2912 133.163 54.1544C133.733 53.0246 134.627 52.0702 135.838 51.2982C136.271 51.0246 136.711 50.807 137.165 50.6526C137.619 50.4912 138.114 50.3649 138.644 50.2807C139.18 50.1965 139.737 50.1474 140.329 50.1474C142.887 50.1474 144.868 50.9123 146.264 52.4421C146.959 53.193 147.489 54.014 147.846 54.8912C148.204 55.7684 148.383 56.7018 148.383 57.6842C148.383 59.7123 147.66 61.4807 146.209 62.9754C144.758 64.4772 142.798 65.2281 140.336 65.2281C137.874 65.2281 136.017 64.5263 134.531 63.1158C133.039 61.7123 132.296 59.9018 132.296 57.6842L132.289 57.6772ZM138.486 57.6772C138.486 59.2982 138.637 60.386 138.947 60.9544C139.242 61.5298 139.703 61.8105 140.329 61.8105C140.955 61.8105 141.416 61.5368 141.725 60.9825C142.035 60.4211 142.186 59.3193 142.186 57.6772C142.186 56.0351 142.035 54.9895 141.732 54.414C141.436 53.8386 140.969 53.5579 140.329 53.5579C139.689 53.5579 139.249 53.8316 138.947 54.386C138.644 54.9404 138.486 56.0351 138.486 57.6842V57.6772Z" fill="#FEB73A" />
                                        <path d="M158.287 64.9965H150.158V61.5088H151.472V53.9228H150.158V50.4351H158.287V53.9228H156.988V61.5088H158.287V64.9965Z" fill="#FEB73A" />
                                        <path d="M165.577 64.9965H159.725V61.5088H160.976V53.9228H159.725V50.4351H166.485L171.671 58.0421V53.9228H170.516V50.4351H176.265V53.9228H175.027V65.1789H170.33L164.319 56.3789V61.5088H165.577V64.9965Z" fill="#FEB73A" />
                                        <path d="M188.865 64.9965H180.86V61.5088H182.091V53.9228H180.447V56.5684H177.771V50.4351H191.912V56.5684H189.236V53.9228H187.606V61.5088H188.865V64.9965V64.9965Z" fill="#FEB73A" />
                                        <path d="M255.33 32.8561H36.2168V34.6386H255.33V32.8561Z" fill="#FEB73A" />
                                        <path d="M255.33 81.2491H36.2168V83.0316H255.33V81.2491Z" fill="#FEB73A" />
                                        <path d="M54.1539 41.9439L58.418 50.7719L67.9641 52.1825L61.059 59.0526L62.689 68.7509L54.1539 64.1684L45.6189 68.7509L47.2488 59.0526L40.3438 52.1825L49.883 50.7719L54.1539 41.9439Z" fill="#FEB73A" />
                                        <path d="M234.759 41.586L239.03 50.414L248.576 51.8246L241.664 58.6947L243.294 68.393L234.759 63.8176L226.224 68.393L227.854 58.6947L220.949 51.8246L230.495 50.414L234.759 41.586Z" fill="#FEB73A" />
                                        <path d="M350 120H0V113.951L0.832187 113.775C3.36314 113.235 4.7249 112.161 4.7249 111.432C4.7249 110.702 3.36314 109.628 0.832187 109.088L0 108.912V101.102L0.832187 100.926C3.36314 100.386 4.7249 99.3123 4.7249 98.5825C4.7249 97.8526 3.36314 96.7789 0.832187 96.2386L0 96.0632V88.2526L0.832187 88.0772C3.36314 87.5368 4.7249 86.4632 4.7249 85.7333C4.7249 85.0035 3.36314 83.9298 0.832187 83.3895L0 83.214V75.4035L0.832187 75.2281C3.36314 74.6877 4.7249 73.614 4.7249 72.8842C4.7249 72.1544 3.36314 71.0807 0.832187 70.5403L0 70.3649V62.5544L0.832187 62.3789C3.36314 61.8386 4.7249 60.7649 4.7249 60.0351C4.7249 59.3053 3.36314 58.2316 0.832187 57.6912L0 57.5158V49.7053L0.832187 49.5298C3.36314 48.9895 4.7249 47.9158 4.7249 47.186C4.7249 46.4561 3.36314 45.3825 0.832187 44.8421L0 44.6667V36.8561L0.832187 36.6807C3.36314 36.1404 4.7249 35.0667 4.7249 34.3368C4.7249 33.607 3.36314 32.5333 0.832187 31.993L0 31.8175V24.007L0.832187 23.8316C3.36314 23.2912 4.7249 22.2175 4.7249 21.4877C4.7249 20.7579 3.36314 19.6842 0.832187 19.1439L0 18.9684V11.0947L0.832187 10.9193C3.36314 10.3789 4.7249 9.30526 4.7249 8.57544C4.7249 7.84561 3.36314 6.77193 0.832187 6.23158L0 6.05614V0H350V6.04912L349.168 6.22456C346.637 6.76491 345.275 7.8386 345.275 8.56842C345.275 9.29825 346.637 10.3719 349.168 10.9123L350 11.0877V18.8982L349.168 19.0737C346.637 19.614 345.275 20.6877 345.275 21.4175C345.275 22.1474 346.637 23.2211 349.168 23.7614L350 23.9368V31.7474L349.168 31.9228C346.637 32.4632 345.275 33.5368 345.275 34.2667C345.275 34.9965 346.637 36.0702 349.168 36.6105L350 36.786V44.5965L349.168 44.7719C346.637 45.3123 345.275 46.386 345.275 47.1158C345.275 47.8456 346.637 48.9193 349.168 49.4597L350 49.6351V57.4456L349.168 57.6211C346.637 58.1614 345.275 59.2351 345.275 59.9649C345.275 60.6947 346.637 61.7684 349.168 62.3088L350 62.4842V70.2947L349.168 70.4702C346.637 71.0105 345.275 72.0842 345.275 72.814C345.275 73.5439 346.637 74.6175 349.168 75.1579L350 75.3333V83.1439L349.168 83.3193C346.637 83.8597 345.275 84.9333 345.275 85.6632C345.275 86.393 346.637 87.4667 349.168 88.007L350 88.1825V95.993L349.168 96.1684C346.637 96.7088 345.275 97.7825 345.275 98.5123C345.275 99.2421 346.637 100.316 349.168 100.856L350 101.032V108.842L349.168 109.018C346.637 109.558 345.275 110.632 345.275 111.361C345.275 112.091 346.637 113.165 349.168 113.705L350 113.881V119.93V120ZM2.09766 117.86H347.902V115.67C344.924 114.849 343.177 113.298 343.177 111.432C343.177 109.565 344.924 108.014 347.902 107.193V102.814C344.924 101.993 343.177 100.442 343.177 98.5754C343.177 96.7088 344.924 95.1579 347.902 94.3368V89.9579C344.924 89.1368 343.177 87.586 343.177 85.7193C343.177 83.8526 344.924 82.3018 347.902 81.4807V77.1018C344.924 76.2807 343.177 74.7298 343.177 72.8632C343.177 70.9965 344.924 69.4456 347.902 68.6246V64.2456C344.924 63.4246 343.177 61.8737 343.177 60.007C343.177 58.1404 344.924 56.5895 347.902 55.7684V51.3895C344.924 50.5684 343.177 49.0175 343.177 47.1509C343.177 45.2842 344.924 43.7333 347.902 42.9123V38.5333C344.924 37.7123 343.177 36.1614 343.177 34.2947C343.177 32.4281 344.924 30.8772 347.902 30.0561V25.6772C344.924 24.8561 343.177 23.3053 343.177 21.4386C343.177 19.5719 344.924 18.0211 347.902 17.2V12.8211C344.924 12 343.177 10.4491 343.177 8.58246C343.177 6.71579 344.924 5.16491 347.902 4.34386V2.14035H2.09766V4.32982C5.07565 5.15088 6.82256 6.70175 6.82256 8.56842C6.82256 10.4351 5.07565 11.986 2.09766 12.807V17.186C5.07565 18.007 6.82256 19.5579 6.82256 21.4246C6.82256 23.2912 5.07565 24.8421 2.09766 25.6632V30.0421C5.07565 30.8632 6.82256 32.414 6.82256 34.2807C6.82256 36.1474 5.07565 37.6982 2.09766 38.5193V42.8982C5.07565 43.7193 6.82256 45.2702 6.82256 47.1368C6.82256 49.0035 5.07565 50.5544 2.09766 51.3754V55.7544C5.07565 56.5754 6.82256 58.1263 6.82256 59.993C6.82256 61.8596 5.07565 63.4105 2.09766 64.2316V68.6105C5.07565 69.4316 6.82256 70.9825 6.82256 72.8491C6.82256 74.7158 5.07565 76.2667 2.09766 77.0877V81.4667C5.07565 82.2877 6.82256 83.8386 6.82256 85.7053C6.82256 87.5719 5.07565 89.1228 2.09766 89.9439V94.3228C5.07565 95.1439 6.82256 96.6947 6.82256 98.5614C6.82256 100.428 5.07565 101.979 2.09766 102.8V107.179C5.07565 108 6.82256 109.551 6.82256 111.418C6.82256 113.284 5.07565 114.835 2.09766 115.656V117.846V117.86Z" fill="#00FF99" />
                                        <path d="M302.141 49.3357V50.4077H307.501V49.3357H302.141ZM303.373 46.7597V47.7997H307.357V46.7597H303.373ZM303.853 49.8957V57.3517H304.941V49.8957H303.853ZM306.957 49.3357V54.0717C306.957 54.2157 306.925 54.2637 306.765 54.2797C306.589 54.2957 306.093 54.2957 305.453 54.2797C305.597 54.5677 305.725 54.9997 305.741 55.3197C306.605 55.3197 307.181 55.3037 307.565 55.1277C307.949 54.9357 308.029 54.6157 308.029 54.0877V49.3357H306.957ZM308.333 43.3997V44.4397H316.413V43.3997H308.333ZM310.061 49.3517H314.749V50.9197H310.061V49.3517ZM310.061 51.7997H314.749V53.3837H310.061V51.7997ZM310.061 46.9037H314.749V48.4557H310.061V46.9037ZM308.941 45.9757V54.3277H315.917V45.9757H308.941ZM311.773 43.9117C311.677 44.6477 311.453 45.7517 311.261 46.4717L312.317 46.6797C312.573 46.0077 312.861 44.9997 313.133 44.0717L311.773 43.9117ZM310.541 54.6157C309.853 55.3197 308.413 56.1517 307.133 56.6157C307.373 56.8237 307.757 57.1917 307.933 57.4317C309.213 56.9517 310.717 56.0877 311.597 55.2397L310.541 54.6157ZM313.021 55.3037C314.013 55.9117 315.245 56.8237 315.837 57.4157L316.797 56.7277C316.141 56.1197 314.909 55.2557 313.933 54.6957L313.021 55.3037ZM304.669 42.6637C304.109 44.0557 303.053 45.8477 301.517 47.1757C301.741 47.3517 302.061 47.7837 302.221 48.0397C303.949 46.4717 305.037 44.5997 305.693 43.2397V42.9197H305.325V42.6637H304.669ZM304.813 42.6637V43.5597H305.053C306.109 44.4397 307.357 45.9437 307.965 46.8397L308.749 45.8317C308.125 44.9357 306.797 43.5757 305.725 42.6637H304.813ZM309.373 63.8557V65.0237H315.277V63.8557H309.373ZM301.949 62.6557V63.7757H309.773V62.6557H301.949ZM303.821 65.9037V67.0077H307.981V65.9037H303.821ZM303.821 69.2317V70.3197H307.981V69.2317H303.821ZM314.925 63.8557V64.1437C314.237 69.7597 311.853 73.5197 308.685 75.1677C308.957 75.3917 309.293 75.8397 309.485 76.1437C312.909 74.1597 315.357 70.3997 316.125 64.0317L315.357 63.8237L315.133 63.8557H314.925ZM310.829 65.0877L309.677 65.3117C310.669 70.3357 312.509 74.2397 315.981 76.2077C316.173 75.8877 316.557 75.4397 316.829 75.1997C313.533 73.5037 311.677 69.7117 310.829 65.0877ZM303.197 63.0877V73.4717H304.349V63.0877H303.197ZM307.485 63.0877V76.3357H308.637V63.0877H307.485ZM301.629 73.1197L301.853 74.3197C303.517 74.0637 305.821 73.6957 308.013 73.3437L307.949 72.2397C305.613 72.5917 303.197 72.9277 301.629 73.1197Z" fill="#1A1D24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2173_26287">
                                            <rect width="350" height="120" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 手機版: 優惠券與規格說明 -->
                <div class="product-discount-m mt-20">
                    <!-- 商品規格說明 -->
                    <div class="product-info">
                        <div class="d-flex w-50">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">商品規格</h3>
                        </div>

                        <h4>● 關於</h4>
                        <p>TV動畫「王者排名」的「影」T卹登場！“影”在黑體上採　　用紫色線條設計。最終卷樣式中出現的角色名稱設計在背部頸部。“Kage”的可愛插圖以易於融入日常協調的T卹完成。</p>
                        <h4>● 尺寸</h4>
                        <p>
                            S 尺寸： 大約高 66 厘米、 寬 49 厘米、 肩寬 44 厘米、 袖長 19 厘米
                            <br>
                            M 尺寸： 大約高 70 厘米、 寬 52 厘米、 肩寬 47 厘米、 袖長 20 厘米
                            <br>
                            L 尺寸： 大約高 74 厘米、 寬 55 厘米、 肩寬 50 厘米、 袖長 22 厘米
                        </p>
                        <h4>● 原產國</h4>
                        <p>
                            衣服：越南
                            <br>
                            印刷：日本
                        </p>
                        <p class="yellow">
                            * 產品圖片是圖片。它可能與實際產品不同。請注意。
                            <br>
                            * 尺寸規格可能與正負略有不同。
                        </p>
                    </div>
                    <!-- 優惠券 -->
                    <div class="discount">
                        <div class="d-flex w-50">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">領取優惠券</h3>
                        </div>
                        <div>
                            <svg width="350" height="120" viewBox="0 0 350 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2173_26287)">
                                    <path d="M333.528 1.05264H284.697V118.947H333.528V1.05264Z" fill="#8DFFCB" stroke="#00FF99" stroke-width="2.86" stroke-miterlimit="10" />
                                    <path d="M293.982 0.701752H291.23V118.596H293.982V0.701752Z" fill="#00FF99" />
                                    <path d="M326.995 1.40351H324.244V119.298H326.995V1.40351Z" fill="#00FF99" />
                                    <path d="M247.979 113.039H40.0628V112.147C40.0628 100.625 30.8744 91.2561 19.5883 91.2561H18.7148V28.3439L19.7671 28.3789C19.9391 28.3789 20.1179 28.393 20.2898 28.393C31.3971 28.393 40.5787 19.1719 40.7575 7.84561L40.7712 6.96842H247.972L247.986 7.84561C248.165 19.1789 257.346 28.393 268.453 28.393H269.327V91.2491H268.453C257.161 91.2491 247.979 100.625 247.979 112.14V113.032V113.039ZM41.8029 111.256H246.246C246.693 99.4596 256.019 89.9439 267.58 89.4877V30.1614C262.037 29.9439 256.837 27.6561 252.862 23.6561C248.887 19.6632 246.569 14.4 246.266 8.75088H42.4769C42.1743 14.4 39.8565 19.6632 35.8813 23.6561C31.741 27.8175 26.2733 30.1333 20.4617 30.1754V89.4807C32.023 89.9368 41.349 99.4526 41.796 111.249L41.8029 111.256Z" fill="#10FFA2" />
                                    <path d="M48.3846 16.8281L43.7422 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M54.1267 16.8281L49.4844 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M59.8709 16.8281L55.2285 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M65.6189 16.8281L60.9766 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M71.3631 16.8281L66.7207 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M77.1062 16.8281L72.4707 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M83.7342 16.8281L79.0918 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M89.4764 16.8281L84.834 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M95.2195 16.8281L90.584 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M100.969 16.8281L96.3262 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M106.713 16.8281L102.07 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M112.456 16.8281L107.82 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M179.635 16.8281L175 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M185.385 16.8281L180.742 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M191.129 16.8281L186.486 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M196.87 16.8281L192.234 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M202.621 16.8281L197.979 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M208.363 16.8281L203.721 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M214.994 16.8281L210.352 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M220.736 16.8281L216.094 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M226.48 16.8281L221.838 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M232.228 16.8281L227.586 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M237.972 16.8281L233.33 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M243.716 16.8281L239.08 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M61.3338 95.0386L56.6914 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M67.076 95.0386L62.4336 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M72.8191 95.0386L68.1836 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M78.5681 95.0386L73.9258 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M84.3123 95.0386L79.6699 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M90.0554 95.0386L85.4199 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M96.6853 95.0386L92.043 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M102.428 95.0386L97.7852 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M108.171 95.0386L103.535 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M113.92 95.0386L109.277 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M119.664 95.0386L115.021 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M125.407 95.0386L120.771 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M202.387 95.3965L197.752 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M208.137 95.3965L203.494 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M213.881 95.3965L209.238 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M219.622 95.3965L214.986 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M225.373 95.3965L220.73 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M231.115 95.3965L226.473 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M132.738 95.3965L128.096 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M138.48 95.3965L133.838 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M144.223 95.3965L139.588 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M149.972 95.3965L145.33 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M155.717 95.3965L151.074 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M161.46 95.3965L156.824 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M168.088 95.3965L163.445 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M173.831 95.3965L169.195 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M179.58 95.3965L174.938 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M185.322 95.3965L180.68 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M191.065 95.3965L186.43 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M196.816 95.3965L192.174 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M122.895 22.4912H120.24V21.0947H120.687V18.0632H120.24V16.6667H122.971C123.596 16.6667 124.105 16.7088 124.497 16.786C124.896 16.8632 125.268 17.0246 125.618 17.2702C125.962 17.5158 126.237 17.8456 126.437 18.2667C126.533 18.4702 126.609 18.6807 126.664 18.9123C126.719 19.1439 126.74 19.3825 126.74 19.6351C126.74 20.1403 126.636 20.6035 126.423 21.0175C126.217 21.4316 125.949 21.7474 125.632 21.9649C125.323 22.1825 124.979 22.3298 124.607 22.393C124.236 22.4632 123.665 22.4912 122.895 22.4912V22.4912ZM122.895 18.0632V21.0947H123.101C123.624 21.0947 123.961 20.9544 124.112 20.6737C124.264 20.393 124.339 20.0351 124.339 19.614C124.339 19.3544 124.305 19.1018 124.243 18.8491C124.174 18.5965 124.057 18.407 123.885 18.2667C123.713 18.1333 123.411 18.0632 122.978 18.0632H122.895V18.0632Z" fill="#FEB73A" />
                                    <path d="M130.708 22.4912H127.455V21.0947H127.978V18.0632H127.455V16.6667H130.708V18.0632H130.185V21.0947H130.708V22.4912Z" fill="#FEB73A" />
                                    <path d="M132.675 22.4912H131.389V20.6246H132.675C132.826 21.1298 133.115 21.3895 133.542 21.3895C133.851 21.3895 134.002 21.2632 134.002 21.0105C134.002 20.8772 133.947 20.7719 133.844 20.6807C133.727 20.5825 133.487 20.4561 133.115 20.2877C132.648 20.0702 132.311 19.8877 132.09 19.7333C131.884 19.593 131.712 19.3965 131.568 19.1439C131.423 18.8982 131.348 18.6175 131.348 18.3228C131.348 17.7825 131.52 17.3614 131.863 17.0526C132.207 16.7509 132.627 16.5965 133.129 16.5965C133.631 16.5965 134.051 16.7439 134.401 17.0316V16.6737H135.694V18.3298H134.422C134.264 17.8737 133.989 17.6421 133.597 17.6421C133.315 17.6421 133.177 17.7614 133.177 18.007C133.177 18.1263 133.218 18.2105 133.294 18.2737C133.37 18.3368 133.617 18.4702 134.037 18.6807C134.601 18.9684 134.972 19.1719 135.158 19.3053C135.254 19.3684 135.35 19.4596 135.454 19.5719C135.557 19.6842 135.639 19.8035 135.701 19.9298C135.852 20.2035 135.928 20.4982 135.928 20.814C135.928 21.3053 135.749 21.7123 135.392 22.0561C135.034 22.4 134.587 22.5684 134.044 22.5684C133.542 22.5684 133.088 22.414 132.675 22.1123V22.4912Z" fill="#FEB73A" />
                                    <path d="M141.161 19.9298L142.64 20.4632C142.516 21.0877 142.227 21.593 141.773 21.993C141.319 22.393 140.686 22.5895 139.889 22.5895C138.795 22.5895 137.984 22.2947 137.461 21.7123C136.931 21.1298 136.67 20.421 136.67 19.586C136.67 18.7509 136.931 18.0281 137.447 17.4386C137.963 16.8491 138.637 16.5544 139.462 16.5544C140.129 16.5544 140.68 16.7228 141.099 17.0596V16.6737H142.468V18.8H141.044C140.968 18.5333 140.845 18.3228 140.673 18.1754C140.501 18.0281 140.301 17.9509 140.074 17.9509C139.455 17.9509 139.146 18.4912 139.146 19.5789C139.146 20.6667 139.469 21.214 140.109 21.214C140.673 21.214 141.023 20.786 141.168 19.9368L141.161 19.9298Z" fill="#FEB73A" />
                                    <path d="M143.41 19.5719C143.41 19.0877 143.527 18.6175 143.761 18.1614C143.988 17.7123 144.346 17.3263 144.834 17.0175C145.006 16.9053 145.185 16.821 145.363 16.7579C145.542 16.6947 145.742 16.6456 145.955 16.6105C146.168 16.5754 146.395 16.5614 146.629 16.5614C147.654 16.5614 148.445 16.8702 149.002 17.4807C149.284 17.7825 149.49 18.1053 149.634 18.4632C149.779 18.821 149.848 19.186 149.848 19.5789C149.848 20.393 149.559 21.0947 148.981 21.6982C148.403 22.3018 147.619 22.5965 146.629 22.5965C145.638 22.5965 144.903 22.3158 144.304 21.7544C143.706 21.193 143.41 20.4702 143.41 19.5789V19.5719ZM145.886 19.5719C145.886 20.2175 145.948 20.6526 146.072 20.8842C146.189 21.1158 146.374 21.2281 146.629 21.2281C146.883 21.2281 147.062 21.1158 147.186 20.8982C147.31 20.6737 147.372 20.2316 147.372 19.5789C147.372 18.9263 147.31 18.5053 147.193 18.2737C147.076 18.0421 146.89 17.9298 146.629 17.9298C146.368 17.9298 146.196 18.0421 146.072 18.2596C145.948 18.4772 145.886 18.9193 145.886 19.5789V19.5719Z" fill="#FEB73A" />
                                    <path d="M150.948 18.0632H150.508V16.6667H153.431V18.0632H153.163V20.0281C153.163 20.4982 153.204 20.814 153.293 20.9895C153.383 21.1579 153.541 21.2421 153.768 21.2421C153.953 21.2421 154.091 21.1719 154.18 21.0316C154.263 20.8912 154.304 20.6035 154.304 20.1754V18.0772H154.015V16.6807H156.161V18.0772H155.707V20.1895C155.707 20.7298 155.632 21.1719 155.48 21.5088C155.329 21.8526 155.075 22.1123 154.717 22.3088C154.359 22.5053 153.926 22.5965 153.403 22.5965C152.984 22.5965 152.612 22.5474 152.289 22.4421C151.959 22.3439 151.705 22.1895 151.512 21.9789C151.319 21.7754 151.182 21.5298 151.092 21.2351C150.996 20.9544 150.955 20.5193 150.955 19.9368V18.0702L150.948 18.0632Z" fill="#FEB73A" />
                                    <path d="M159.002 22.4912H156.656V21.0947H157.158V18.0632H156.656V16.6667H159.359L161.436 19.7123V18.0632H160.975V16.6667H163.279V18.0632H162.784V22.5684H160.907L158.506 19.0456V21.0947H159.008V22.4912H159.002Z" fill="#FEB73A" />
                                    <path d="M168.315 22.4912H165.11V21.0947H165.605V18.0632H164.952V19.1228H163.879V16.6737H169.532V19.1228H168.459V18.0632H167.806V21.0947H168.308V22.4912H168.315Z" fill="#FEB73A" />
                                    <path d="M95.0957 61.0807L98.8096 60.8421C99.1397 61.6351 99.7724 62.0351 100.708 62.0351C101.265 62.0351 101.733 61.8807 102.111 61.5719C102.482 61.2632 102.668 60.786 102.668 60.1263C102.668 59.4667 102.482 59.0105 102.111 58.7158C101.733 58.4211 101.299 58.2737 100.797 58.2737C100.034 58.2737 99.3873 58.5614 98.8715 59.1298L95.7628 58.007L96.1961 50.4351H106.705V54.2456H104.298L103.961 53.3544H98.8646L98.7408 56.2456C99.6555 55.6632 100.749 55.3684 102.015 55.3684C103.562 55.3684 104.841 55.7895 105.852 56.6316C106.863 57.4737 107.372 58.6316 107.372 60.1053C107.372 61.5789 106.836 62.7368 105.77 63.6912C104.697 64.6456 103.204 65.1228 101.286 65.1228C99.6005 65.1228 98.2112 64.7579 97.1108 64.0351C96.0173 63.3193 95.3502 62.3298 95.1026 61.0737L95.0957 61.0807Z" fill="#FEB73A" />
                                    <path d="M123.218 64.9965H114.883V61.5088H116.265V53.9228H114.883V50.4351H123.631C125.639 50.4351 127.111 50.6316 128.04 51.0316C128.968 51.4386 129.656 51.986 130.089 52.6877C130.529 53.3825 130.743 54.1474 130.743 54.9825C130.743 56.007 130.481 56.8561 129.965 57.5368C129.443 58.2175 128.762 58.7158 127.902 59.0246C127.063 59.3263 125.763 59.4737 124.002 59.4737H121.774V61.5158H123.212V65.0035L123.218 64.9965ZM121.781 53.6351V56.3649H122.861C123.61 56.3649 124.161 56.2737 124.505 56.0912C124.835 55.9088 125 55.5579 125 55.0316C125 54.6877 124.91 54.4 124.732 54.1614C124.56 53.9298 124.333 53.7825 124.044 53.7193C123.769 53.6561 123.308 53.6281 122.648 53.6281H121.788L121.781 53.6351Z" fill="#FEB73A" />
                                    <path d="M132.289 57.6772C132.289 56.4632 132.578 55.2912 133.163 54.1544C133.733 53.0246 134.627 52.0702 135.838 51.2982C136.271 51.0246 136.711 50.807 137.165 50.6526C137.619 50.4912 138.114 50.3649 138.644 50.2807C139.18 50.1965 139.737 50.1474 140.329 50.1474C142.887 50.1474 144.868 50.9123 146.264 52.4421C146.959 53.193 147.489 54.014 147.846 54.8912C148.204 55.7684 148.383 56.7018 148.383 57.6842C148.383 59.7123 147.66 61.4807 146.209 62.9754C144.758 64.4772 142.798 65.2281 140.336 65.2281C137.874 65.2281 136.017 64.5263 134.531 63.1158C133.039 61.7123 132.296 59.9018 132.296 57.6842L132.289 57.6772ZM138.486 57.6772C138.486 59.2982 138.637 60.386 138.947 60.9544C139.242 61.5298 139.703 61.8105 140.329 61.8105C140.955 61.8105 141.416 61.5368 141.725 60.9825C142.035 60.4211 142.186 59.3193 142.186 57.6772C142.186 56.0351 142.035 54.9895 141.732 54.414C141.436 53.8386 140.969 53.5579 140.329 53.5579C139.689 53.5579 139.249 53.8316 138.947 54.386C138.644 54.9404 138.486 56.0351 138.486 57.6842V57.6772Z" fill="#FEB73A" />
                                    <path d="M158.287 64.9965H150.158V61.5088H151.472V53.9228H150.158V50.4351H158.287V53.9228H156.988V61.5088H158.287V64.9965Z" fill="#FEB73A" />
                                    <path d="M165.577 64.9965H159.725V61.5088H160.976V53.9228H159.725V50.4351H166.485L171.671 58.0421V53.9228H170.516V50.4351H176.265V53.9228H175.027V65.1789H170.33L164.319 56.3789V61.5088H165.577V64.9965Z" fill="#FEB73A" />
                                    <path d="M188.865 64.9965H180.86V61.5088H182.091V53.9228H180.447V56.5684H177.771V50.4351H191.912V56.5684H189.236V53.9228H187.606V61.5088H188.865V64.9965V64.9965Z" fill="#FEB73A" />
                                    <path d="M255.33 32.8561H36.2168V34.6386H255.33V32.8561Z" fill="#FEB73A" />
                                    <path d="M255.33 81.2491H36.2168V83.0316H255.33V81.2491Z" fill="#FEB73A" />
                                    <path d="M54.1539 41.9439L58.418 50.7719L67.9641 52.1825L61.059 59.0526L62.689 68.7509L54.1539 64.1684L45.6189 68.7509L47.2488 59.0526L40.3438 52.1825L49.883 50.7719L54.1539 41.9439Z" fill="#FEB73A" />
                                    <path d="M234.759 41.586L239.03 50.414L248.576 51.8246L241.664 58.6947L243.294 68.393L234.759 63.8176L226.224 68.393L227.854 58.6947L220.949 51.8246L230.495 50.414L234.759 41.586Z" fill="#FEB73A" />
                                    <path d="M350 120H0V113.951L0.832187 113.775C3.36314 113.235 4.7249 112.161 4.7249 111.432C4.7249 110.702 3.36314 109.628 0.832187 109.088L0 108.912V101.102L0.832187 100.926C3.36314 100.386 4.7249 99.3123 4.7249 98.5825C4.7249 97.8526 3.36314 96.7789 0.832187 96.2386L0 96.0632V88.2526L0.832187 88.0772C3.36314 87.5368 4.7249 86.4632 4.7249 85.7333C4.7249 85.0035 3.36314 83.9298 0.832187 83.3895L0 83.214V75.4035L0.832187 75.2281C3.36314 74.6877 4.7249 73.614 4.7249 72.8842C4.7249 72.1544 3.36314 71.0807 0.832187 70.5403L0 70.3649V62.5544L0.832187 62.3789C3.36314 61.8386 4.7249 60.7649 4.7249 60.0351C4.7249 59.3053 3.36314 58.2316 0.832187 57.6912L0 57.5158V49.7053L0.832187 49.5298C3.36314 48.9895 4.7249 47.9158 4.7249 47.186C4.7249 46.4561 3.36314 45.3825 0.832187 44.8421L0 44.6667V36.8561L0.832187 36.6807C3.36314 36.1404 4.7249 35.0667 4.7249 34.3368C4.7249 33.607 3.36314 32.5333 0.832187 31.993L0 31.8175V24.007L0.832187 23.8316C3.36314 23.2912 4.7249 22.2175 4.7249 21.4877C4.7249 20.7579 3.36314 19.6842 0.832187 19.1439L0 18.9684V11.0947L0.832187 10.9193C3.36314 10.3789 4.7249 9.30526 4.7249 8.57544C4.7249 7.84561 3.36314 6.77193 0.832187 6.23158L0 6.05614V0H350V6.04912L349.168 6.22456C346.637 6.76491 345.275 7.8386 345.275 8.56842C345.275 9.29825 346.637 10.3719 349.168 10.9123L350 11.0877V18.8982L349.168 19.0737C346.637 19.614 345.275 20.6877 345.275 21.4175C345.275 22.1474 346.637 23.2211 349.168 23.7614L350 23.9368V31.7474L349.168 31.9228C346.637 32.4632 345.275 33.5368 345.275 34.2667C345.275 34.9965 346.637 36.0702 349.168 36.6105L350 36.786V44.5965L349.168 44.7719C346.637 45.3123 345.275 46.386 345.275 47.1158C345.275 47.8456 346.637 48.9193 349.168 49.4597L350 49.6351V57.4456L349.168 57.6211C346.637 58.1614 345.275 59.2351 345.275 59.9649C345.275 60.6947 346.637 61.7684 349.168 62.3088L350 62.4842V70.2947L349.168 70.4702C346.637 71.0105 345.275 72.0842 345.275 72.814C345.275 73.5439 346.637 74.6175 349.168 75.1579L350 75.3333V83.1439L349.168 83.3193C346.637 83.8597 345.275 84.9333 345.275 85.6632C345.275 86.393 346.637 87.4667 349.168 88.007L350 88.1825V95.993L349.168 96.1684C346.637 96.7088 345.275 97.7825 345.275 98.5123C345.275 99.2421 346.637 100.316 349.168 100.856L350 101.032V108.842L349.168 109.018C346.637 109.558 345.275 110.632 345.275 111.361C345.275 112.091 346.637 113.165 349.168 113.705L350 113.881V119.93V120ZM2.09766 117.86H347.902V115.67C344.924 114.849 343.177 113.298 343.177 111.432C343.177 109.565 344.924 108.014 347.902 107.193V102.814C344.924 101.993 343.177 100.442 343.177 98.5754C343.177 96.7088 344.924 95.1579 347.902 94.3368V89.9579C344.924 89.1368 343.177 87.586 343.177 85.7193C343.177 83.8526 344.924 82.3018 347.902 81.4807V77.1018C344.924 76.2807 343.177 74.7298 343.177 72.8632C343.177 70.9965 344.924 69.4456 347.902 68.6246V64.2456C344.924 63.4246 343.177 61.8737 343.177 60.007C343.177 58.1404 344.924 56.5895 347.902 55.7684V51.3895C344.924 50.5684 343.177 49.0175 343.177 47.1509C343.177 45.2842 344.924 43.7333 347.902 42.9123V38.5333C344.924 37.7123 343.177 36.1614 343.177 34.2947C343.177 32.4281 344.924 30.8772 347.902 30.0561V25.6772C344.924 24.8561 343.177 23.3053 343.177 21.4386C343.177 19.5719 344.924 18.0211 347.902 17.2V12.8211C344.924 12 343.177 10.4491 343.177 8.58246C343.177 6.71579 344.924 5.16491 347.902 4.34386V2.14035H2.09766V4.32982C5.07565 5.15088 6.82256 6.70175 6.82256 8.56842C6.82256 10.4351 5.07565 11.986 2.09766 12.807V17.186C5.07565 18.007 6.82256 19.5579 6.82256 21.4246C6.82256 23.2912 5.07565 24.8421 2.09766 25.6632V30.0421C5.07565 30.8632 6.82256 32.414 6.82256 34.2807C6.82256 36.1474 5.07565 37.6982 2.09766 38.5193V42.8982C5.07565 43.7193 6.82256 45.2702 6.82256 47.1368C6.82256 49.0035 5.07565 50.5544 2.09766 51.3754V55.7544C5.07565 56.5754 6.82256 58.1263 6.82256 59.993C6.82256 61.8596 5.07565 63.4105 2.09766 64.2316V68.6105C5.07565 69.4316 6.82256 70.9825 6.82256 72.8491C6.82256 74.7158 5.07565 76.2667 2.09766 77.0877V81.4667C5.07565 82.2877 6.82256 83.8386 6.82256 85.7053C6.82256 87.5719 5.07565 89.1228 2.09766 89.9439V94.3228C5.07565 95.1439 6.82256 96.6947 6.82256 98.5614C6.82256 100.428 5.07565 101.979 2.09766 102.8V107.179C5.07565 108 6.82256 109.551 6.82256 111.418C6.82256 113.284 5.07565 114.835 2.09766 115.656V117.846V117.86Z" fill="#00FF99" />
                                    <path d="M302.141 49.3357V50.4077H307.501V49.3357H302.141ZM303.373 46.7597V47.7997H307.357V46.7597H303.373ZM303.853 49.8957V57.3517H304.941V49.8957H303.853ZM306.957 49.3357V54.0717C306.957 54.2157 306.925 54.2637 306.765 54.2797C306.589 54.2957 306.093 54.2957 305.453 54.2797C305.597 54.5677 305.725 54.9997 305.741 55.3197C306.605 55.3197 307.181 55.3037 307.565 55.1277C307.949 54.9357 308.029 54.6157 308.029 54.0877V49.3357H306.957ZM308.333 43.3997V44.4397H316.413V43.3997H308.333ZM310.061 49.3517H314.749V50.9197H310.061V49.3517ZM310.061 51.7997H314.749V53.3837H310.061V51.7997ZM310.061 46.9037H314.749V48.4557H310.061V46.9037ZM308.941 45.9757V54.3277H315.917V45.9757H308.941ZM311.773 43.9117C311.677 44.6477 311.453 45.7517 311.261 46.4717L312.317 46.6797C312.573 46.0077 312.861 44.9997 313.133 44.0717L311.773 43.9117ZM310.541 54.6157C309.853 55.3197 308.413 56.1517 307.133 56.6157C307.373 56.8237 307.757 57.1917 307.933 57.4317C309.213 56.9517 310.717 56.0877 311.597 55.2397L310.541 54.6157ZM313.021 55.3037C314.013 55.9117 315.245 56.8237 315.837 57.4157L316.797 56.7277C316.141 56.1197 314.909 55.2557 313.933 54.6957L313.021 55.3037ZM304.669 42.6637C304.109 44.0557 303.053 45.8477 301.517 47.1757C301.741 47.3517 302.061 47.7837 302.221 48.0397C303.949 46.4717 305.037 44.5997 305.693 43.2397V42.9197H305.325V42.6637H304.669ZM304.813 42.6637V43.5597H305.053C306.109 44.4397 307.357 45.9437 307.965 46.8397L308.749 45.8317C308.125 44.9357 306.797 43.5757 305.725 42.6637H304.813ZM309.373 63.8557V65.0237H315.277V63.8557H309.373ZM301.949 62.6557V63.7757H309.773V62.6557H301.949ZM303.821 65.9037V67.0077H307.981V65.9037H303.821ZM303.821 69.2317V70.3197H307.981V69.2317H303.821ZM314.925 63.8557V64.1437C314.237 69.7597 311.853 73.5197 308.685 75.1677C308.957 75.3917 309.293 75.8397 309.485 76.1437C312.909 74.1597 315.357 70.3997 316.125 64.0317L315.357 63.8237L315.133 63.8557H314.925ZM310.829 65.0877L309.677 65.3117C310.669 70.3357 312.509 74.2397 315.981 76.2077C316.173 75.8877 316.557 75.4397 316.829 75.1997C313.533 73.5037 311.677 69.7117 310.829 65.0877ZM303.197 63.0877V73.4717H304.349V63.0877H303.197ZM307.485 63.0877V76.3357H308.637V63.0877H307.485ZM301.629 73.1197L301.853 74.3197C303.517 74.0637 305.821 73.6957 308.013 73.3437L307.949 72.2397C305.613 72.5917 303.197 72.9277 301.629 73.1197Z" fill="#1A1D24" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2173_26287">
                                        <rect width="350" height="120" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="350" height="120" viewBox="0 0 350 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2173_26287)">
                                    <path d="M333.528 1.05264H284.697V118.947H333.528V1.05264Z" fill="#8DFFCB" stroke="#00FF99" stroke-width="2.86" stroke-miterlimit="10" />
                                    <path d="M293.982 0.701752H291.23V118.596H293.982V0.701752Z" fill="#00FF99" />
                                    <path d="M326.995 1.40351H324.244V119.298H326.995V1.40351Z" fill="#00FF99" />
                                    <path d="M247.979 113.039H40.0628V112.147C40.0628 100.625 30.8744 91.2561 19.5883 91.2561H18.7148V28.3439L19.7671 28.3789C19.9391 28.3789 20.1179 28.393 20.2898 28.393C31.3971 28.393 40.5787 19.1719 40.7575 7.84561L40.7712 6.96842H247.972L247.986 7.84561C248.165 19.1789 257.346 28.393 268.453 28.393H269.327V91.2491H268.453C257.161 91.2491 247.979 100.625 247.979 112.14V113.032V113.039ZM41.8029 111.256H246.246C246.693 99.4596 256.019 89.9439 267.58 89.4877V30.1614C262.037 29.9439 256.837 27.6561 252.862 23.6561C248.887 19.6632 246.569 14.4 246.266 8.75088H42.4769C42.1743 14.4 39.8565 19.6632 35.8813 23.6561C31.741 27.8175 26.2733 30.1333 20.4617 30.1754V89.4807C32.023 89.9368 41.349 99.4526 41.796 111.249L41.8029 111.256Z" fill="#10FFA2" />
                                    <path d="M48.3846 16.8281L43.7422 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M54.1267 16.8281L49.4844 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M59.8709 16.8281L55.2285 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M65.6189 16.8281L60.9766 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M71.3631 16.8281L66.7207 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M77.1062 16.8281L72.4707 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M83.7342 16.8281L79.0918 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M89.4764 16.8281L84.834 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M95.2195 16.8281L90.584 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M100.969 16.8281L96.3262 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M106.713 16.8281L102.07 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M112.456 16.8281L107.82 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M179.635 16.8281L175 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M185.385 16.8281L180.742 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M191.129 16.8281L186.486 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M196.87 16.8281L192.234 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M202.621 16.8281L197.979 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M208.363 16.8281L203.721 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M214.994 16.8281L210.352 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M220.736 16.8281L216.094 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M226.48 16.8281L221.838 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M232.228 16.8281L227.586 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M237.972 16.8281L233.33 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M243.716 16.8281L239.08 21.7825" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M61.3338 95.0386L56.6914 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M67.076 95.0386L62.4336 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M72.8191 95.0386L68.1836 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M78.5681 95.0386L73.9258 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M84.3123 95.0386L79.6699 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M90.0554 95.0386L85.4199 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M96.6853 95.0386L92.043 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M102.428 95.0386L97.7852 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M108.171 95.0386L103.535 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M113.92 95.0386L109.277 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M119.664 95.0386L115.021 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M125.407 95.0386L120.771 100" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M202.387 95.3965L197.752 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M208.137 95.3965L203.494 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M213.881 95.3965L209.238 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M219.622 95.3965L214.986 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M225.373 95.3965L220.73 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M231.115 95.3965L226.473 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M132.738 95.3965L128.096 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M138.48 95.3965L133.838 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M144.223 95.3965L139.588 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M149.972 95.3965L145.33 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M155.717 95.3965L151.074 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M161.46 95.3965L156.824 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M168.088 95.3965L163.445 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M173.831 95.3965L169.195 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M179.58 95.3965L174.938 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M185.322 95.3965L180.68 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M191.065 95.3965L186.43 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M196.816 95.3965L192.174 100.358" stroke="#10FFA2" stroke-width="2.54" stroke-miterlimit="10" />
                                    <path d="M122.895 22.4912H120.24V21.0947H120.687V18.0632H120.24V16.6667H122.971C123.596 16.6667 124.105 16.7088 124.497 16.786C124.896 16.8632 125.268 17.0246 125.618 17.2702C125.962 17.5158 126.237 17.8456 126.437 18.2667C126.533 18.4702 126.609 18.6807 126.664 18.9123C126.719 19.1439 126.74 19.3825 126.74 19.6351C126.74 20.1403 126.636 20.6035 126.423 21.0175C126.217 21.4316 125.949 21.7474 125.632 21.9649C125.323 22.1825 124.979 22.3298 124.607 22.393C124.236 22.4632 123.665 22.4912 122.895 22.4912V22.4912ZM122.895 18.0632V21.0947H123.101C123.624 21.0947 123.961 20.9544 124.112 20.6737C124.264 20.393 124.339 20.0351 124.339 19.614C124.339 19.3544 124.305 19.1018 124.243 18.8491C124.174 18.5965 124.057 18.407 123.885 18.2667C123.713 18.1333 123.411 18.0632 122.978 18.0632H122.895V18.0632Z" fill="#FEB73A" />
                                    <path d="M130.708 22.4912H127.455V21.0947H127.978V18.0632H127.455V16.6667H130.708V18.0632H130.185V21.0947H130.708V22.4912Z" fill="#FEB73A" />
                                    <path d="M132.675 22.4912H131.389V20.6246H132.675C132.826 21.1298 133.115 21.3895 133.542 21.3895C133.851 21.3895 134.002 21.2632 134.002 21.0105C134.002 20.8772 133.947 20.7719 133.844 20.6807C133.727 20.5825 133.487 20.4561 133.115 20.2877C132.648 20.0702 132.311 19.8877 132.09 19.7333C131.884 19.593 131.712 19.3965 131.568 19.1439C131.423 18.8982 131.348 18.6175 131.348 18.3228C131.348 17.7825 131.52 17.3614 131.863 17.0526C132.207 16.7509 132.627 16.5965 133.129 16.5965C133.631 16.5965 134.051 16.7439 134.401 17.0316V16.6737H135.694V18.3298H134.422C134.264 17.8737 133.989 17.6421 133.597 17.6421C133.315 17.6421 133.177 17.7614 133.177 18.007C133.177 18.1263 133.218 18.2105 133.294 18.2737C133.37 18.3368 133.617 18.4702 134.037 18.6807C134.601 18.9684 134.972 19.1719 135.158 19.3053C135.254 19.3684 135.35 19.4596 135.454 19.5719C135.557 19.6842 135.639 19.8035 135.701 19.9298C135.852 20.2035 135.928 20.4982 135.928 20.814C135.928 21.3053 135.749 21.7123 135.392 22.0561C135.034 22.4 134.587 22.5684 134.044 22.5684C133.542 22.5684 133.088 22.414 132.675 22.1123V22.4912Z" fill="#FEB73A" />
                                    <path d="M141.161 19.9298L142.64 20.4632C142.516 21.0877 142.227 21.593 141.773 21.993C141.319 22.393 140.686 22.5895 139.889 22.5895C138.795 22.5895 137.984 22.2947 137.461 21.7123C136.931 21.1298 136.67 20.421 136.67 19.586C136.67 18.7509 136.931 18.0281 137.447 17.4386C137.963 16.8491 138.637 16.5544 139.462 16.5544C140.129 16.5544 140.68 16.7228 141.099 17.0596V16.6737H142.468V18.8H141.044C140.968 18.5333 140.845 18.3228 140.673 18.1754C140.501 18.0281 140.301 17.9509 140.074 17.9509C139.455 17.9509 139.146 18.4912 139.146 19.5789C139.146 20.6667 139.469 21.214 140.109 21.214C140.673 21.214 141.023 20.786 141.168 19.9368L141.161 19.9298Z" fill="#FEB73A" />
                                    <path d="M143.41 19.5719C143.41 19.0877 143.527 18.6175 143.761 18.1614C143.988 17.7123 144.346 17.3263 144.834 17.0175C145.006 16.9053 145.185 16.821 145.363 16.7579C145.542 16.6947 145.742 16.6456 145.955 16.6105C146.168 16.5754 146.395 16.5614 146.629 16.5614C147.654 16.5614 148.445 16.8702 149.002 17.4807C149.284 17.7825 149.49 18.1053 149.634 18.4632C149.779 18.821 149.848 19.186 149.848 19.5789C149.848 20.393 149.559 21.0947 148.981 21.6982C148.403 22.3018 147.619 22.5965 146.629 22.5965C145.638 22.5965 144.903 22.3158 144.304 21.7544C143.706 21.193 143.41 20.4702 143.41 19.5789V19.5719ZM145.886 19.5719C145.886 20.2175 145.948 20.6526 146.072 20.8842C146.189 21.1158 146.374 21.2281 146.629 21.2281C146.883 21.2281 147.062 21.1158 147.186 20.8982C147.31 20.6737 147.372 20.2316 147.372 19.5789C147.372 18.9263 147.31 18.5053 147.193 18.2737C147.076 18.0421 146.89 17.9298 146.629 17.9298C146.368 17.9298 146.196 18.0421 146.072 18.2596C145.948 18.4772 145.886 18.9193 145.886 19.5789V19.5719Z" fill="#FEB73A" />
                                    <path d="M150.948 18.0632H150.508V16.6667H153.431V18.0632H153.163V20.0281C153.163 20.4982 153.204 20.814 153.293 20.9895C153.383 21.1579 153.541 21.2421 153.768 21.2421C153.953 21.2421 154.091 21.1719 154.18 21.0316C154.263 20.8912 154.304 20.6035 154.304 20.1754V18.0772H154.015V16.6807H156.161V18.0772H155.707V20.1895C155.707 20.7298 155.632 21.1719 155.48 21.5088C155.329 21.8526 155.075 22.1123 154.717 22.3088C154.359 22.5053 153.926 22.5965 153.403 22.5965C152.984 22.5965 152.612 22.5474 152.289 22.4421C151.959 22.3439 151.705 22.1895 151.512 21.9789C151.319 21.7754 151.182 21.5298 151.092 21.2351C150.996 20.9544 150.955 20.5193 150.955 19.9368V18.0702L150.948 18.0632Z" fill="#FEB73A" />
                                    <path d="M159.002 22.4912H156.656V21.0947H157.158V18.0632H156.656V16.6667H159.359L161.436 19.7123V18.0632H160.975V16.6667H163.279V18.0632H162.784V22.5684H160.907L158.506 19.0456V21.0947H159.008V22.4912H159.002Z" fill="#FEB73A" />
                                    <path d="M168.315 22.4912H165.11V21.0947H165.605V18.0632H164.952V19.1228H163.879V16.6737H169.532V19.1228H168.459V18.0632H167.806V21.0947H168.308V22.4912H168.315Z" fill="#FEB73A" />
                                    <path d="M95.0957 61.0807L98.8096 60.8421C99.1397 61.6351 99.7724 62.0351 100.708 62.0351C101.265 62.0351 101.733 61.8807 102.111 61.5719C102.482 61.2632 102.668 60.786 102.668 60.1263C102.668 59.4667 102.482 59.0105 102.111 58.7158C101.733 58.4211 101.299 58.2737 100.797 58.2737C100.034 58.2737 99.3873 58.5614 98.8715 59.1298L95.7628 58.007L96.1961 50.4351H106.705V54.2456H104.298L103.961 53.3544H98.8646L98.7408 56.2456C99.6555 55.6632 100.749 55.3684 102.015 55.3684C103.562 55.3684 104.841 55.7895 105.852 56.6316C106.863 57.4737 107.372 58.6316 107.372 60.1053C107.372 61.5789 106.836 62.7368 105.77 63.6912C104.697 64.6456 103.204 65.1228 101.286 65.1228C99.6005 65.1228 98.2112 64.7579 97.1108 64.0351C96.0173 63.3193 95.3502 62.3298 95.1026 61.0737L95.0957 61.0807Z" fill="#FEB73A" />
                                    <path d="M123.218 64.9965H114.883V61.5088H116.265V53.9228H114.883V50.4351H123.631C125.639 50.4351 127.111 50.6316 128.04 51.0316C128.968 51.4386 129.656 51.986 130.089 52.6877C130.529 53.3825 130.743 54.1474 130.743 54.9825C130.743 56.007 130.481 56.8561 129.965 57.5368C129.443 58.2175 128.762 58.7158 127.902 59.0246C127.063 59.3263 125.763 59.4737 124.002 59.4737H121.774V61.5158H123.212V65.0035L123.218 64.9965ZM121.781 53.6351V56.3649H122.861C123.61 56.3649 124.161 56.2737 124.505 56.0912C124.835 55.9088 125 55.5579 125 55.0316C125 54.6877 124.91 54.4 124.732 54.1614C124.56 53.9298 124.333 53.7825 124.044 53.7193C123.769 53.6561 123.308 53.6281 122.648 53.6281H121.788L121.781 53.6351Z" fill="#FEB73A" />
                                    <path d="M132.289 57.6772C132.289 56.4632 132.578 55.2912 133.163 54.1544C133.733 53.0246 134.627 52.0702 135.838 51.2982C136.271 51.0246 136.711 50.807 137.165 50.6526C137.619 50.4912 138.114 50.3649 138.644 50.2807C139.18 50.1965 139.737 50.1474 140.329 50.1474C142.887 50.1474 144.868 50.9123 146.264 52.4421C146.959 53.193 147.489 54.014 147.846 54.8912C148.204 55.7684 148.383 56.7018 148.383 57.6842C148.383 59.7123 147.66 61.4807 146.209 62.9754C144.758 64.4772 142.798 65.2281 140.336 65.2281C137.874 65.2281 136.017 64.5263 134.531 63.1158C133.039 61.7123 132.296 59.9018 132.296 57.6842L132.289 57.6772ZM138.486 57.6772C138.486 59.2982 138.637 60.386 138.947 60.9544C139.242 61.5298 139.703 61.8105 140.329 61.8105C140.955 61.8105 141.416 61.5368 141.725 60.9825C142.035 60.4211 142.186 59.3193 142.186 57.6772C142.186 56.0351 142.035 54.9895 141.732 54.414C141.436 53.8386 140.969 53.5579 140.329 53.5579C139.689 53.5579 139.249 53.8316 138.947 54.386C138.644 54.9404 138.486 56.0351 138.486 57.6842V57.6772Z" fill="#FEB73A" />
                                    <path d="M158.287 64.9965H150.158V61.5088H151.472V53.9228H150.158V50.4351H158.287V53.9228H156.988V61.5088H158.287V64.9965Z" fill="#FEB73A" />
                                    <path d="M165.577 64.9965H159.725V61.5088H160.976V53.9228H159.725V50.4351H166.485L171.671 58.0421V53.9228H170.516V50.4351H176.265V53.9228H175.027V65.1789H170.33L164.319 56.3789V61.5088H165.577V64.9965Z" fill="#FEB73A" />
                                    <path d="M188.865 64.9965H180.86V61.5088H182.091V53.9228H180.447V56.5684H177.771V50.4351H191.912V56.5684H189.236V53.9228H187.606V61.5088H188.865V64.9965V64.9965Z" fill="#FEB73A" />
                                    <path d="M255.33 32.8561H36.2168V34.6386H255.33V32.8561Z" fill="#FEB73A" />
                                    <path d="M255.33 81.2491H36.2168V83.0316H255.33V81.2491Z" fill="#FEB73A" />
                                    <path d="M54.1539 41.9439L58.418 50.7719L67.9641 52.1825L61.059 59.0526L62.689 68.7509L54.1539 64.1684L45.6189 68.7509L47.2488 59.0526L40.3438 52.1825L49.883 50.7719L54.1539 41.9439Z" fill="#FEB73A" />
                                    <path d="M234.759 41.586L239.03 50.414L248.576 51.8246L241.664 58.6947L243.294 68.393L234.759 63.8176L226.224 68.393L227.854 58.6947L220.949 51.8246L230.495 50.414L234.759 41.586Z" fill="#FEB73A" />
                                    <path d="M350 120H0V113.951L0.832187 113.775C3.36314 113.235 4.7249 112.161 4.7249 111.432C4.7249 110.702 3.36314 109.628 0.832187 109.088L0 108.912V101.102L0.832187 100.926C3.36314 100.386 4.7249 99.3123 4.7249 98.5825C4.7249 97.8526 3.36314 96.7789 0.832187 96.2386L0 96.0632V88.2526L0.832187 88.0772C3.36314 87.5368 4.7249 86.4632 4.7249 85.7333C4.7249 85.0035 3.36314 83.9298 0.832187 83.3895L0 83.214V75.4035L0.832187 75.2281C3.36314 74.6877 4.7249 73.614 4.7249 72.8842C4.7249 72.1544 3.36314 71.0807 0.832187 70.5403L0 70.3649V62.5544L0.832187 62.3789C3.36314 61.8386 4.7249 60.7649 4.7249 60.0351C4.7249 59.3053 3.36314 58.2316 0.832187 57.6912L0 57.5158V49.7053L0.832187 49.5298C3.36314 48.9895 4.7249 47.9158 4.7249 47.186C4.7249 46.4561 3.36314 45.3825 0.832187 44.8421L0 44.6667V36.8561L0.832187 36.6807C3.36314 36.1404 4.7249 35.0667 4.7249 34.3368C4.7249 33.607 3.36314 32.5333 0.832187 31.993L0 31.8175V24.007L0.832187 23.8316C3.36314 23.2912 4.7249 22.2175 4.7249 21.4877C4.7249 20.7579 3.36314 19.6842 0.832187 19.1439L0 18.9684V11.0947L0.832187 10.9193C3.36314 10.3789 4.7249 9.30526 4.7249 8.57544C4.7249 7.84561 3.36314 6.77193 0.832187 6.23158L0 6.05614V0H350V6.04912L349.168 6.22456C346.637 6.76491 345.275 7.8386 345.275 8.56842C345.275 9.29825 346.637 10.3719 349.168 10.9123L350 11.0877V18.8982L349.168 19.0737C346.637 19.614 345.275 20.6877 345.275 21.4175C345.275 22.1474 346.637 23.2211 349.168 23.7614L350 23.9368V31.7474L349.168 31.9228C346.637 32.4632 345.275 33.5368 345.275 34.2667C345.275 34.9965 346.637 36.0702 349.168 36.6105L350 36.786V44.5965L349.168 44.7719C346.637 45.3123 345.275 46.386 345.275 47.1158C345.275 47.8456 346.637 48.9193 349.168 49.4597L350 49.6351V57.4456L349.168 57.6211C346.637 58.1614 345.275 59.2351 345.275 59.9649C345.275 60.6947 346.637 61.7684 349.168 62.3088L350 62.4842V70.2947L349.168 70.4702C346.637 71.0105 345.275 72.0842 345.275 72.814C345.275 73.5439 346.637 74.6175 349.168 75.1579L350 75.3333V83.1439L349.168 83.3193C346.637 83.8597 345.275 84.9333 345.275 85.6632C345.275 86.393 346.637 87.4667 349.168 88.007L350 88.1825V95.993L349.168 96.1684C346.637 96.7088 345.275 97.7825 345.275 98.5123C345.275 99.2421 346.637 100.316 349.168 100.856L350 101.032V108.842L349.168 109.018C346.637 109.558 345.275 110.632 345.275 111.361C345.275 112.091 346.637 113.165 349.168 113.705L350 113.881V119.93V120ZM2.09766 117.86H347.902V115.67C344.924 114.849 343.177 113.298 343.177 111.432C343.177 109.565 344.924 108.014 347.902 107.193V102.814C344.924 101.993 343.177 100.442 343.177 98.5754C343.177 96.7088 344.924 95.1579 347.902 94.3368V89.9579C344.924 89.1368 343.177 87.586 343.177 85.7193C343.177 83.8526 344.924 82.3018 347.902 81.4807V77.1018C344.924 76.2807 343.177 74.7298 343.177 72.8632C343.177 70.9965 344.924 69.4456 347.902 68.6246V64.2456C344.924 63.4246 343.177 61.8737 343.177 60.007C343.177 58.1404 344.924 56.5895 347.902 55.7684V51.3895C344.924 50.5684 343.177 49.0175 343.177 47.1509C343.177 45.2842 344.924 43.7333 347.902 42.9123V38.5333C344.924 37.7123 343.177 36.1614 343.177 34.2947C343.177 32.4281 344.924 30.8772 347.902 30.0561V25.6772C344.924 24.8561 343.177 23.3053 343.177 21.4386C343.177 19.5719 344.924 18.0211 347.902 17.2V12.8211C344.924 12 343.177 10.4491 343.177 8.58246C343.177 6.71579 344.924 5.16491 347.902 4.34386V2.14035H2.09766V4.32982C5.07565 5.15088 6.82256 6.70175 6.82256 8.56842C6.82256 10.4351 5.07565 11.986 2.09766 12.807V17.186C5.07565 18.007 6.82256 19.5579 6.82256 21.4246C6.82256 23.2912 5.07565 24.8421 2.09766 25.6632V30.0421C5.07565 30.8632 6.82256 32.414 6.82256 34.2807C6.82256 36.1474 5.07565 37.6982 2.09766 38.5193V42.8982C5.07565 43.7193 6.82256 45.2702 6.82256 47.1368C6.82256 49.0035 5.07565 50.5544 2.09766 51.3754V55.7544C5.07565 56.5754 6.82256 58.1263 6.82256 59.993C6.82256 61.8596 5.07565 63.4105 2.09766 64.2316V68.6105C5.07565 69.4316 6.82256 70.9825 6.82256 72.8491C6.82256 74.7158 5.07565 76.2667 2.09766 77.0877V81.4667C5.07565 82.2877 6.82256 83.8386 6.82256 85.7053C6.82256 87.5719 5.07565 89.1228 2.09766 89.9439V94.3228C5.07565 95.1439 6.82256 96.6947 6.82256 98.5614C6.82256 100.428 5.07565 101.979 2.09766 102.8V107.179C5.07565 108 6.82256 109.551 6.82256 111.418C6.82256 113.284 5.07565 114.835 2.09766 115.656V117.846V117.86Z" fill="#00FF99" />
                                    <path d="M302.141 49.3357V50.4077H307.501V49.3357H302.141ZM303.373 46.7597V47.7997H307.357V46.7597H303.373ZM303.853 49.8957V57.3517H304.941V49.8957H303.853ZM306.957 49.3357V54.0717C306.957 54.2157 306.925 54.2637 306.765 54.2797C306.589 54.2957 306.093 54.2957 305.453 54.2797C305.597 54.5677 305.725 54.9997 305.741 55.3197C306.605 55.3197 307.181 55.3037 307.565 55.1277C307.949 54.9357 308.029 54.6157 308.029 54.0877V49.3357H306.957ZM308.333 43.3997V44.4397H316.413V43.3997H308.333ZM310.061 49.3517H314.749V50.9197H310.061V49.3517ZM310.061 51.7997H314.749V53.3837H310.061V51.7997ZM310.061 46.9037H314.749V48.4557H310.061V46.9037ZM308.941 45.9757V54.3277H315.917V45.9757H308.941ZM311.773 43.9117C311.677 44.6477 311.453 45.7517 311.261 46.4717L312.317 46.6797C312.573 46.0077 312.861 44.9997 313.133 44.0717L311.773 43.9117ZM310.541 54.6157C309.853 55.3197 308.413 56.1517 307.133 56.6157C307.373 56.8237 307.757 57.1917 307.933 57.4317C309.213 56.9517 310.717 56.0877 311.597 55.2397L310.541 54.6157ZM313.021 55.3037C314.013 55.9117 315.245 56.8237 315.837 57.4157L316.797 56.7277C316.141 56.1197 314.909 55.2557 313.933 54.6957L313.021 55.3037ZM304.669 42.6637C304.109 44.0557 303.053 45.8477 301.517 47.1757C301.741 47.3517 302.061 47.7837 302.221 48.0397C303.949 46.4717 305.037 44.5997 305.693 43.2397V42.9197H305.325V42.6637H304.669ZM304.813 42.6637V43.5597H305.053C306.109 44.4397 307.357 45.9437 307.965 46.8397L308.749 45.8317C308.125 44.9357 306.797 43.5757 305.725 42.6637H304.813ZM309.373 63.8557V65.0237H315.277V63.8557H309.373ZM301.949 62.6557V63.7757H309.773V62.6557H301.949ZM303.821 65.9037V67.0077H307.981V65.9037H303.821ZM303.821 69.2317V70.3197H307.981V69.2317H303.821ZM314.925 63.8557V64.1437C314.237 69.7597 311.853 73.5197 308.685 75.1677C308.957 75.3917 309.293 75.8397 309.485 76.1437C312.909 74.1597 315.357 70.3997 316.125 64.0317L315.357 63.8237L315.133 63.8557H314.925ZM310.829 65.0877L309.677 65.3117C310.669 70.3357 312.509 74.2397 315.981 76.2077C316.173 75.8877 316.557 75.4397 316.829 75.1997C313.533 73.5037 311.677 69.7117 310.829 65.0877ZM303.197 63.0877V73.4717H304.349V63.0877H303.197ZM307.485 63.0877V76.3357H308.637V63.0877H307.485ZM301.629 73.1197L301.853 74.3197C303.517 74.0637 305.821 73.6957 308.013 73.3437L307.949 72.2397C305.613 72.5917 303.197 72.9277 301.629 73.1197Z" fill="#1A1D24" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2173_26287">
                                        <rect width="350" height="120" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- 下面商品ROW -->
                <div class="mt-20">
                    <div class="d-flex align-item-center mt-20">
                        <div class="stick_desk"></div>
                        <h3>推薦商品</h3>
                    </div>
                    <div class="row_products mt-20">
                        <div class="mall_product">
                            <img src="../img/p.png" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="../img/p.png" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="../img/p.png" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="../img/p.png" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="../img/p.png" alt="">
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



        <script src="../js/jquery-3.6.0.js"></script>
        <script src="../js/Nav.js"></script>
        <script>
            // 商品圖 點小圖換大圖

            $('.product-img-wrap img').click(function() {
                console.log('img src:', $(this).attr('src'));
                const thisImg = $(this).attr('src')
                $('.product-img-wrap-demo img').attr('src', thisImg)
            })

            // 商品顏色

            $('.color').click(function() {
                console.log('hello', this);
                $(this).css('border', '2px solid #10FFA2');
                $(this).parent().siblings().children('div').css('border', '2px solid transparent');
            })

            // 商品規格

            $('.product-size').click(function() {
                console.log('hello', this);
                $(this).css('border', '2px solid #10FFA2');
                $(this).css('color', '#10FFA2');
                $(this).siblings().css('border', '2px solid #fff');
                $(this).siblings().css('color', '#fff');
            })

            // 商品數量調整

            $('.button-number-minus').click(function() {
                console.log('hello -', this);
            })

            $('.button-number-plus').click(function() {
                console.log('hello +', this);
            })


            // 手機

            let qm = document.getElementById('quantityM');

            // 偵測input的值改變

            document.getElementById('quantityM').addEventListener('change', myFunction);

            function myFunction() {
                console.log('qm', qm.value);
            }

            function subFunction() {
                if (qm.value > 1) {
                    qm.value--;
                }
            }

            function addFunction() {
                qm.value++;
            };

            // 電腦

            let qpc = document.getElementById('quantityPC');

            // 偵測input的值改變

            document.getElementById('quantityPC').addEventListener('change', myPCFunction);

            function myPCFunction() {
                console.log('qpc', qpc.value);
            }

            function subPCFunction() {
                if (qpc.value > 1) {
                    qpc.value--;
                }
            }

            function addPCFunction() {
                qpc.value++;
            };
        </script>
</body>

</html>