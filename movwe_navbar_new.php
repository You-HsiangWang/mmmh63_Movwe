<?php 
    require './parts/movwe_connect_db.php';
    
    // 判斷登入狀態
    if (isset($_SESSION['admin']['member_avatar'])){
        $class = 1;
        $avapic = $_SESSION['admin']['member_avatar'];
    }else{
        $class = 0;
    };
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logo.png">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/Nav.css">
    <link rel="stylesheet" href="./css/BS.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Movwe</title>
    <style>
        /* --------------------- */
    </style>
</head>

<body>
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
                        <a href="index_home.php"><img class="top_nav_movwe_img desk__show" src="./img/logo/logo_word.svg" alt=""></a>
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

                <a class="top__nav__icon__box">
                    <div class="top__nav__member">
                        <?php if ($class == 1){
                            echo '<div class="nav_icon_box icon_W-H">
                            <div class="nav__member__picture__box">
                                <img class="nav__member__picture" src="./img/member/'.$avapic.'" alt="">
                            </div>
                        </div>
                        <p class="home__logout">登出</p>';
                        };
                        if($class == 0){
                            echo '<div class="nav_icon_box icon_W-H">
                            <i class="fa-solid fa-user member__login"></i>
                        </div>
                        <p class="home__login">登入</p>';
                        };
                        ?>
                        <!-- <div class="nav_icon_box icon_W-H">
                            <i class="fa-solid fa-user member__login"></i>
                            <div class="nav__member__picture__box">
                                <img class="nav__member__picture" src="./img/center/actor-1.jpeg" alt="">
                            </div>
                        </div>
                        <p class="home__logout">登出</p>
                        <p class="home__login">登入</p> -->
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
                        <div class="h-60px movie_btn">影劇 <span class="down"><i class="fa-solid fa-angle-down"></i></span></div>
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
                        <div class="h-60px store_btn">商城 <span class="down"><i class="fa-solid fa-angle-down"></i></span></div>
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
    </div>

    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/Nav.js"></script>
    <script>
        $('.home__logout').on('click',function(){
            location.href = './member_logout.php';
        });
    </script>
</body>

</html>