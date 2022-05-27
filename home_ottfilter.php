<?php

require './parts/movwe_connect_db.php';

?>

<?php include __DIR__ . '/parts/movwe_head.php'; ?>
<link rel="stylesheet" href="./css/Home.css">
<link rel="stylesheet" href="./css/filter.css">
<link rel="stylesheet" href="./css/Carousel_1.css">
<script src="./js/jquery-3.6.0.js"></script>
<style>
    .Filter__text__box {
        display: flex;
    }
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
                    <button class="filter_2w genre_item__3 filter_function ff_genr" data-filter='3'>綜藝
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
                            歐美
                        </button>
                        <button class="browse-filter-item filter_2w browse_item__4 filter_function ff_plac" data-filter='4'>
                            台灣 </button>
                        <button class="browse-filter-item filter_2w browse_item__5 filter_function ff_plac" data-filter='5'>
                            中國 </button>
                    </ul>
                </li>
                <li class="browse-filter">
                    <div class="browse-filter-title">
                        <span>風格 /</span>
                    </div>
                    <ul class="browse-filter-items">
                        <button class="browse-filter-item filter_2w style_item__1 filter_function ff_styl" data-filter='1'>
                            浪漫愛情</button>
                        <button class="browse-filter-item filter_2w style_item__2 filter_function ff_styl" data-filter='2'>
                            輕鬆喜劇</button>
                        <button class="browse-filter-item filter_2w style_item__3 filter_function ff_styl" data-filter='3'>
                            劇情文藝</button>
                        <button class="browse-filter-item filter_2w style_item__4 filter_function ff_styl" data-filter='4'>
                            青春校園</button>
                        <button class="browse-filter-item filter_2w style_item__5 filter_function ff_styl" data-filter='5'>
                            奇幻冒險</button>
                        <button class="browse-filter-item filter_2w style_item__6 filter_function ff_styl" data-filter='6'>
                            科技未來</button>
                        <button class="browse-filter-item filter_2w style_item__7 filter_function ff_styl" data-filter='7'>
                            犯罪動作</button>
                        <button class="browse-filter-item filter_2w style_item__8 filter_function ff_styl" data-filter='8'>
                            懸疑推理</button>
                        <button class="browse-filter-item filter_2w style_item__9 filter_function ff_styl" data-filter='9'>
                            靈異驚悚</button>

                    </ul>
                </li>
            </ul>
        </div>

        <!------篩選後_BOX----------------------------------->
        <div class="Filter__text__box" id="ottFilterSearchFunc">
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
            </div> -->
        </div>

    </div>

    <!-- <script src="./js/Carousel_1.js"></script> -->
    <script src="./js/Filter.js"></script>

    <script>
        // 綁定filterbtn點擊後要觸發的功能 filterApi---------------------------------------
        const filterBtns = document.querySelectorAll('.filter_function');
        for (let i = 0; i < filterBtns.length; i++) {
            filterBtns[i].addEventListener('click', filterActive);
        };

        // 切換filterbtn active的狀態 並呼叫filterGetData--------------------------------
        function filterActive() {
            // 將btn拆成4列 第一列多選
            // 1-1.判斷ott平台btn 被點擊的active狀態 原本active
            if ($(this).hasClass('ff_plat filterActive')) {
                $(this).removeClass('filterActive');
                filterGetData();
            }
            // 原本不active
            else if ($(this).hasClass('ff_plat') && !$(this).hasClass('filterActive')) {
                $(this).addClass('filterActive');
                filterGetData();
            }
            // 1-2.判斷其他單選btn 被點擊的active狀態 原本active
            else if ($(this).hasClass('ff_genr filterActive') || $(this).hasClass('ff_plac filterActive') || $(this).hasClass('ff_styl filterActive')) {
                $(this).removeClass('filterActive');
                filterGetData();
            }
            // 原本不active
            else if (($(this).hasClass('ff_genr') || $(this).hasClass('ff_plac') || $(this).hasClass('ff_styl')) && !$(this).hasClass('filterActive')) {
                $(this).addClass('filterActive');
                $(this).siblings().removeClass('filterActive');
                filterGetData();
            };
        };
        // 將filterbtn拆成四組 判斷情況每一行activebtn的數量 1.都沒有就返回預設 2.有任一個 取得data-值 並呼叫api----------------------------------------------------------------------------
        function filterGetData() {
            // 宣告變數 拿到4個row 全部有active的btn
            const fPlat = document.querySelectorAll('.ff_plat.filterActive.filter_function');
            const fGenre = document.querySelectorAll('.ff_genr.filterActive.filter_function');
            const fPlace = document.querySelectorAll('.ff_plac.filterActive.filter_function');
            const fStyle = document.querySelectorAll('.ff_styl.filterActive.filter_function');
            // 宣告儲存data-filter的變數 用來送值到api
            let fPlatArray = [];
            let dPlarData;
            let fGenrData;
            let fPlacData;
            let fStylData;
            // 宣告傳去api的物件 
            let fDataObj = {};

            // 若四個row都返回空陣列 => 返回初始狀態 
            if (fPlat.length == 0 && fGenre.length == 0 && fPlace.length == 0 && fStyle.length == 0) {
                // display none filter
                // display block 
                console.log('返回初始狀態');
            } else {
                console.log('要呼叫api');
                // 先判斷是否沒有被點擊
                if (fPlat.length != 0) {
                    // ottbtn 特別多選 要傳陣列 
                    for (let i1 = 0; i1 < fPlat.length; i1++) {
                        // 拿到data-filter
                        fPlatData = fPlat[i1].getAttribute('data-filter');
                        // 傳這個到api
                        fPlatArray.push(fPlatData);
                    };
                } else {
                    fPlatArray = '0';
                };

                // 其餘三個直接拿陣列的第一個 data-filter 若有被點擊拿data 若沒有拿0
                fGenrData = (fGenre.length != 0) ? fGenre[0].getAttribute('data-filter') : '0';
                fPlacData = (fPlace.length != 0) ? fPlace[0].getAttribute('data-filter') : '0';
                fStylData = (fStyle.length != 0) ? fStyle[0].getAttribute('data-filter') : '0';

                //f_ott陣列裡面放數字 其他都是數字
                fDataObj = {
                    "f_ott": fPlatArray,
                    "f_genre": fGenrData,
                    "f_place": fPlacData,
                    "f_style": fStylData,
                };
                // console.log(fPlatArray, fGenrData, fPlacData, fStylData, fDataObj);
                // 呼叫傳送api 把obj傳過去
                filterApi(fDataObj);
            };
        };
        // 傳給api然後對api回傳的內容做壞壞的事---------------------------------------------
        // function filterApi(par) {
        //     $.get('api_home_ottfilter_test.php', par, function(data) {
        //         console.log(data);
                // 這邊應該要傳回api寫好的html
        //     }, 'json');
        // };
        function filterApi(par) {
            $.get('api_home_ottfilter.php', par, function(data){
                $('#ottFilterSearchFunc').html(data);
            }, 'text');

/*
            $.ajax({
                type: 'get',
                url: 'api_home_ottfilter.php',
                async: true,
                cache: false,
                dataType: 'json',
                data: par,
                success: function(){
                    console.log('success');
                },
                error: function(){
                    console.log('error');
                },
                complete: function(){
                    console.log('complete');
                },
            }).done(function(data){
                console.log('done');
                console.log(data);
                $('#ottFilterSearchFunc').html(data.dom);
            });
            */
        };
        // loading時給預設值
        const fDefaultObj = {
            f_ott: '0',
            f_genre: '0',
            f_place: '0',
            f_style: '0',
        };
        filterApi(fDefaultObj);
    </script>

</body>

</html>