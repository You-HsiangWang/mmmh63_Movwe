<?php

require './parts/movwe_connect_db.php';
$pageName = 'point_index';
$title = 'MOVWE-如何累積Movwe點數';

?>

<?php include __DIR__ . '/parts/movwe_head.php' ?>
<link rel="stylesheet" href="./css/point_nav.css">
<link rel="stylesheet" href="./css/point_coupon_exchange.css">
<link rel="stylesheet" href="./css/point_mycoupon.css">
<link rel="stylesheet" href="./css/point_index.css">
<link rel="stylesheet" href="./css/dropdown_customstyle.css">
</head>

<body>

    <!----------nav_top-------------->
    <div class="top_nav">
        <div class="top_nav_left">
            <div class="top_nav_logo">
                <div class="top_nav_logo_box">
                    <img class="top_nav_movwe_img-2" src="./img/logo/logo.png" alt="">
                    <i class="fa-solid fa-bars top_nav_movwe_img bars"></i>
                </div>
            </div>
            <div class="top_nav_movwe">
                <div class="top_nav_movwe_box">
                    <img class="top_nav_movwe_img" src="./img/logo/logo_word.png" alt="">
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
            <!-- 點數專區navbar TODO: 需要判斷登入和抓資料和判斷頁面 -->
            <!-- 點數專區navbar 定義大小 -->
            <div class="point-section_nav">
                <!-- 點數專區navbar 排版 -->
                <div class="point-section_nav-container">
                    <!-- 點數專區navbar 下拉式選單 切換當前頁面-->
                    <div class="custom-select" style="width: 160px;" data-page="1" data-which="point">
                        <select name="pointSection_Nav_Dropdown" id="" class="point-section_nav-dropdown">
                            <option value="">
                                <a href="">如何累積MOVWE點數</a>
                            </option>
                            <option value="">
                                <a href="">兌換優惠券</a>
                            </option>
                            <option value="">
                                <a href="">我的優惠券</a>
                            </option>
                        </select>
                    </div>
                    <!-- 點數專區navbar 顯示目前點數 判斷是否登入 抓取資料庫中的點數-->
                    <div class="point-section_nav-showpoints">
                        <img src="./img/other/coin.svg" alt="" class="point-section_nav-showpoints-img">
                        <div class="point-section_nav-showpoints-container">
                            <p class="point-section_nav-showpoints-points">
                                目前點數
                            </p>
                            <p class="point-section_nav-showpoints-points">
                                <!-- 這邊要抓資料庫中的點數 -->
                                <span id=""><?php if(isset($_SESSION['admin']['member_loginstatus'])){
                                    echo $_SESSION['admin']['member_loginstatus'] == 1 ? $_SESSION['admin']['member_points'] : '尚未登入';
                                }else{
                                    echo '尚未登入';
                                }?></span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="point-section_banner">
                <div class="point-section_banner_container">
                    <img src="./img/banner/point_banner.png" alt="">
                    <h1>用MOVWE<br>換Movie</h1>
                </div>
            </div>
            <div class="point-section_info_one">
                <div class="point-section_info_title">
                    <img src="./img/icons/stick-s.svg" alt="">
                    <h2>什麼是MOVWE點數？</h2>
                </div>
                <div class="point-section_info_wrap">
                    <div class="point-section_info_text">
                        <p>
                            MOVWE點數是提供會員使用MOVWE的服務時所獲得的行動點數。可以在兌換區兌換<span>OTT折價券</span>，<span>商品折扣</span>等優惠！
                        </p>
                    </div>
                    <div class="point-section_info_img">
                        <img src="./img/banner/point.png" alt="">
                    </div>
                </div>
                <div class="point-section_animate_roll">
                    <div class="point-section_animate_roll_train rollone">
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/netflix.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap"><img src="./img/other/discount_01.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/kktv.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_02.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/IQiyi.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_03.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/friday.svg" alt="">
                        </div>
                    </div>
                    <div class="point-section_animate_roll_train rolltwo">
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/netflix.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap"><img src="./img/other/discount_01.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/kktv.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_02.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/IQiyi.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_03.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/friday.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 這邊可以加消失出現的動畫 -->
            <div class="point-section_info_two">
                <div class="point-section_info_title">
                    <img src="./img/icons/stick-s.svg" alt="">
                    <h2>MOVWE點數可以換什麼東西？</h2>
                </div>
                <div class="point-section_info_cardwrap">
                    <div class="point-section_info_card">
                        <div class="point-section_info_card_imgwrap">
                            <div class="point-section_info_card_imganimation">
                                <img src="./img/logo/netflix_s.svg" alt="">
                            </div>
                        </div>
                        <p>
                            商城折價券
                        </p>
                    </div>
                    <div class="point-section_info_card">
                        <div class="point-section_info_card_imgwrap">
                            <div class="point-section_info_card_imganimation">
                                <img src="./img/other/discount_02.svg" alt="">
                            </div>

                        </div>
                        <p>
                            OTT平台優惠
                        </p>
                    </div>
                </div>
                <div class="point-section_animate_roll_fullsize">
                    <div class="point-section_animate_roll_train rollone">
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/netflix.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap"><img src="./img/other/discount_01.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/kktv.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_02.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/IQiyi.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_03.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/friday.svg" alt="">
                        </div>
                    </div>
                    <div class="point-section_animate_roll_train rolltwo">
                        <div class="point-section_animate_roll_train_imgwrap"><img src="./img/other/discount_01.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/netflix.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_02.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/kktv.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/other/discount_03.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/IQiyi.svg" alt="">
                        </div>
                        <div class="point-section_animate_roll_train_imgwrap">
                            <img src="./img/logo/friday.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--text__container------內容放這邊------------->
            <div class="text__container point_index_width-60_destkoponly">
                <div class="point-section_info_three">
                    <div class="point-section_info_title">
                        <img src="./img/icons/stick-s.svg" alt="">
                        <h2>如何獲得MOVWE點數？</h2>
                    </div>
                    <!-- TODO: 這邊可以夾輪播牆 -->
                    <div class="point-section_info_numberpicphone">
                        <img src="./img/banner/point.png" alt="">
                    </div>
                    <div class="point-section_info_numbercardwrap">
                        <div class="point-section_info_numbercard_fullsize">
                            <div class="point-section_info_numbercard">
                                <div class="point-section_info_numbercard_numwrap">

                                    <img src="./img/other/num_01.svg" alt="">

                                </div>
                                <div class="point-section_info_card_pwrap">
                                    <h2>會員專屬集點活動</h2>
                                    <p>會員透過Movwe連結觀看影片，即可領取50點! 點數可用來兌換訂閱影音平台優惠，快來加入我們!</p>
                                </div>
                            </div>
                            <div class="point-section_info_numberpic">
                                <img src="./img/banner/point.png" alt="">
                            </div>
                        </div>
                        <div class="point-section_info_numbercard_fullsize">
                            <div class="point-section_info_numbercard">
                                <div class="point-section_info_numbercard_numwrap">

                                    <img src="./img/other/num_02.svg" alt="">

                                </div>
                                <div class="point-section_info_card_pwrap">
                                    <h2>與朋友分享專屬連結
                                    </h2>
                                    <p>朋友透過您的專屬連結註冊Movwe會員，即可獲得100點we point! 同時您也會收到100點we points回饋唷!
                                    </p>
                                </div>
                            </div>
                            <div class="point-section_info_numberpic">
                                <img src="./img/banner/share.png" alt="">
                            </div>
                        </div>
                        <div class="point-section_info_numbercard_fullsize">
                            <div class="point-section_info_numbercard">
                                <div class="point-section_info_numbercard_numwrap">

                                    <img src="./img/other/num_03.svg" alt="">

                                </div>
                                <div class="point-section_info_card_pwrap">
                                    <h2>至商城購買周邊商品</h2>
                                    <p>會員在Movwe商城購買周邊，每500塊即可獲得500we points! we point點數可用來兌換訂閱影音平台優惠，快來加入我們!</p>
                                </div>
                            </div>
                            <div class="point-section_info_numberpic">
                                <img src="./img/banner/point.png" alt="">
                            </div>
                        </div>
                        <div class="point-section_info_numbercard_fullsize">
                            <div class="point-section_info_numbercard">
                                <div class="point-section_info_numbercard_numwrap">

                                    <img src="./img/other/num_04.svg" alt="">

                                </div>
                                <div class="point-section_info_card_pwrap">
                                    <h2>在討論區發文</h2>
                                    <p>會員在討論區發的前5篇文章每篇可以獲得30we points! 之後成為熱門作者可獲得大量we points!</p>
                                </div>
                            </div>
                            <div class="point-section_info_numberpic">
                                <img src="./img/banner/share.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/Nav.js"></script>
    <script src="./js/dropdown_customstyle.js"></script>

</body>

</html>