<?php

require './parts/movwe_connect_db.php';
$pageName = 'login';
$title = 'MOVWE-帳戶登入';

?>
<?php include __DIR__ . '/parts/movwe_head.php' ?>
<link rel="stylesheet" href="./css/member_login.css">
</head>

<body>

<div class="login_bgc_slide">
    <div id="slide">
        <div class="box-1">
            <img src="./img/banner/search_bg.png" alt="">

        </div>
        <div class="box-2">
            <img src="./img/banner/search_bg.png" alt="">
        </div>
    </div>
</div>
<div class="login_bgc">
    <div class="login_left_col">
        <div class="login_logo">
            <img src="./img/logo/logo.png" alt="">
            <img src="./img/logo/logo_word.png" alt="">
        </div>
    </div>
    <div class="login_right_col">
        <div class="login_form_container">
            <div class="login_form_col">
                <div class="login_form_email_first">
                    <h2 class="login_form_title">登入</h2>
                    <h5 class="login_form_title_discrib">還沒有帳號媽？馬上<a>建立帳戶</a></h5>
                    <form action="" name="login_form_email" method="post" class="login_form_email" id="loginEmailForm" onsubmit="checkEmail(); return false;" novalidate>
                        <section class="login_form_email_feild">
                            <div>
                                <label for="member_email">電子郵件地址</label>
                                <input type="email" name="member_email" id="login_form_email_first_email" placeholder="example@email.com" class="member_email" autocomplete="off">
                                <div class="member_email_alert login_d_none">
                                    <p>請輸入電子郵件地址</p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="member_email_alert login_d_none">
                                    <p>找不到與該電子郵件地址相關的帳戶。<span>請</span><br>
                                        <a href="">尋找您的帳戶</a><span>或</span><a href="">建立新帳戶</a>
                                    </p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="member_email_alert login_d_none">
                                    <img src="./img/icons/check.svg" alt="">
                                </div>
                            </div>
                        </section>
                        <section class="login_form_submit_feild">
                            <div class="login_form_submit_feild_wrap">
                                <button type="submit" class="login_form_one_continue">繼續</button>
                                <div class="login_loading login_d_none">
                                    <div class="box">
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </form>
                    <div class="login_form_divideline">
                        <div class="login_form_divideline_parts"></div>
                        <p>或</p>
                        <div class="login_form_divideline_parts"></div>
                    </div>
                    <div class="login_form_thirdparty_login">
                        <div class="login_form_thirdparty_btn login_google">
                            <img src="./img/logo/google.svg" alt="">
                            <a href="">繼續使用Google</a>
                        </div>
                        <div class="login_form_thirdparty_btn login_fb">
                            <img src="./img/logo/facebook_block.svg" alt="">
                            <a href="">繼續使用Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login_form_col login_d_none">
                <div class="login_form_password_first">
                    <h2 class="login_form_title">輸入您的密碼</h2>
                    <!-- 抓資料庫的頭像 -->
                    <div class="login_form_title_usericon">
                        <div class="login_form_title_usericon_frame" style="background-image: url(./img/banner/mall_banner.jpg);">
                        </div>
                        <h5 class="login_form_title_discrib">個人帳戶
                            <br>
                            <span>example@email.com</span>
                        </h5>
                    </div>
                    <form action="" name="login_form_password" method="post" class="login_form_Password" id="loginPasswordForm" onsubmit="checkPassword(); return false;" novalidate>
                        <section class="login_form_password_feild">
                            <div>
                                <label for="member_password">密碼</label>
                                <input type="password" name="member_password" placeholder=">" class="member_password" autocomplete="off" id="login_form_password_first_password">
                                <div class="member_password_status">
                                    <i class="fa-solid fa-eye-slash"></i>
                                    <i class="fa-solid fa-eye login_d_none"></i>
                                    <i class="fa-solid fa-triangle-exclamation login_d_none"></i>
                                    <i class="fa-solid fa-check login_d_none"></i>
                                </div>
                                <div class="member_password_alert login_d_none">
                                    <p>密碼錯誤。請再試一次。</p>
                                </div>
                                <div class="member_password_alert login_d_none">
                                    <p>請輸入密碼。</p>
                                </div>
                                <div class="member_password_alert">
                                    <a href="">忘記密碼</a>
                                </div>
                            </div>
                        </section>
                        <section class="login_form_keeplogin">
                            <div class="login_form_keeplogin_btn">
                                <div class="login_form_keeplogin_btn_bgc"></div>
                                <div class="login_form_keeplogin_btn_toggle"></div>
                            </div>
                            <p>保持登入</p>
                        </section>
                        <section class="login_form_submit_feild">
                            <div class="login_form_submit_feild_wrap">
                                <button type="submit" class="login_form_one_continue">繼續</button>
                                <div class="login_loading login_d_none">
                                    <div class="box">
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                    <div class="login_form_divideline">
                        <div class="login_form_divideline_full"></div>
                    </div>
                    <div class="login_form_backtologin">
                        <a href="member_login.php">
                            登入其他帳戶
                        </a>
                    </div>
                </div>
            </div>
            <div class="login_form_col login_d_none">
                <div class="login_form_login_success">
                    <!-- 抓資料庫的頭像 -->
                    <div class="login_form_title_usericon">
                        <div class="login_form_title_usericon_frame" style="background-image: url(./img/banner/mall_banner.jpg);">
                        </div>
                        <h2 class="login_form_title"><span>Eric</span>,歡迎回來！</h2>
                    </div>
                    <div class="login_form_divideline">
                        <div class="login_form_divideline_full"></div>
                    </div>
                    <div class="login_form_toindex">
                        <p><span>3秒</span> 後為您跳轉回首頁</p>
                    </div>
                    <button onclick="location.href = 'index.php'">
                        回首頁
                    </button>
                </div>
            </div>
        </div>
        <div class="register_form_container login_d_none">
            <div class="register_form_col">
                <div class="register_form_wrap">
                    <h2 class="register_form_title">註冊</h2>
                    <h5 class="register_form_title_discrib">已經有帳戶了嗎？馬上<a>登入</a></h5>
                    <form action="" name="register_form" method="post" class="register_form" id="registerEmailForm" onsubmit="checkRegister(); return false;" novalidate>
                        <section class="register_form_data_feild">
                            <div>
                                <label for="member_email">電子郵件地址</label>
                                <input type="email" name="member_email" id="register_form_email" placeholder="example@email.com" class="member_email" autocomplete="off">
                                <div class="register_member_email_alert login_d_none">
                                    <p>請輸入電子郵件地址</p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <p>找不到與該電子郵件地址相關的帳戶。<span>請</span><br>
                                        <a href="">尋找您的帳戶</a><span>或</span><a href="">建立新帳戶</a>
                                    </p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <img src="./img/icons/check.svg" alt="">
                                </div>
                            </div>
                        </section>
                        <section class="register_form_data_feild">
                            <div>
                                <label for="member_email">密碼</label>
                                <input type="email" name="member_email" id="register_form_psd" placeholder="" class="member_email" autocomplete="off">
                                <div class="register_member_email_alert login_d_none">
                                    <p>請輸入電子郵件地址</p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <p>找不到與該電子郵件地址相關的帳戶。<span>請</span><br>
                                        <a href="">尋找您的帳戶</a><span>或</span><a href="">建立新帳戶</a>
                                    </p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <img src="./img/icons/check.svg" alt="">
                                </div>
                            </div>
                        </section>
                        <section class="register_form_data_feild">
                            <div>
                                <label for="member_email">再次輸入密碼</label>
                                <input type="email" name="member_email" id="register_form_psdpsd" placeholder="" class="member_email" autocomplete="off">
                                <div class="register_member_email_alert login_d_none">
                                    <p>請輸入電子郵件地址</p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <p>找不到與該電子郵件地址相關的帳戶。<span>請</span><br>
                                        <a href="">尋找您的帳戶</a><span>或</span><a href="">建立新帳戶</a>
                                    </p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <img src="./img/icons/check.svg" alt="">
                                </div>
                            </div>
                        </section>
                        <section class="register_form_data_feild">
                            <div>
                                <label for="member_email">輸入邀請碼</label>
                                <input type="email" name="member_email" id="register_form_invite" placeholder="非必填" class="member_email" autocomplete="off">
                                <div class="register_member_email_alert login_d_none">
                                    <p>請輸入電子郵件地址</p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <p>找不到與該電子郵件地址相關的帳戶。<span>請</span><br>
                                        <a href="">尋找您的帳戶</a><span>或</span><a href="">建立新帳戶</a>
                                    </p>
                                    <img src="./img/icons/triangle-exclamation.svg" alt="">
                                </div>
                                <div class="register_member_email_alert login_d_none">
                                    <img src="./img/icons/check.svg" alt="">
                                </div>
                            </div>
                        </section>
                        <section class="register_form_submit_feild">
                            <div class="register_form_submit_feild_wrap">
                                <button type="submit" class="register_form_one_continue">註冊</button>
                                <div class="register_loading login_d_none">
                                    <div class="box">
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                        <span><img src="./img/logo/logo.gif" alt=""></span>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </form>
                    <div class="register_form_divideline">
                        <div class="register_form_divideline_parts"></div>
                        <p>或</p>
                        <div class="register_form_divideline_parts"></div>
                    </div>
                    <div class="register_form_thirdparty_register">
                        <div class="register_form_thirdparty_btn register_google">
                            <img src="./img/logo/google.svg" alt="">
                        </div>
                        <div class="register_form_thirdparty_btn register_fb">
                            <img src="./img/logo/facebook_block.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-3.6.0.js"></script>
<script src="./js/member_login.js"></script>
<script>
    function checkEmail() {

        // TODO: 檢查欄位資料.

        let isPass = true; // 有沒有通過檢查

        if (!$('#login_form_email_first_email').val().trim()) {
            isPass = false;
            $('#loginEmailForm .member_email_alert:nth-of-type(1)').removeClass('login_d_none');
            $('#loginEmailForm .member_email_alert:nth-of-type(2)').addClass('login_d_none');
            $('#loginEmailForm .member_email_alert:nth-of-type(3)').addClass('login_d_none');
            $('.login_form_col:nth-child(1)').css('animation-name', 'formshake');
            $('.login_form_col:nth-child(1)').one('animationend', () => {
                $('.login_form_col:nth-child(1)').css('animation-name', 'none');
            });
            return; //密碼或email為空 則不讓通過
        };

        // AJAX 如果有填寫email
        if (isPass) {
            $.post('member_login_api.php', $(document.login_form_email).serialize(), function(data) {
                console.log(data);
                if (data.emailsuccess) {
                    $('#loginEmailForm .member_email_alert:nth-of-type(1)').addClass('login_d_none');
                    $('#loginEmailForm .member_email_alert:nth-of-type(2)').addClass('login_d_none');
                    $('#loginEmailForm .member_email_alert:nth-of-type(3)').removeClass('login_d_none');
                    // 動態抓到資料庫裡的會員資料
                    const mAvatar = data.mAvatar;
                    const mEmail = data.mEmail;
                    setTimeout(function() {
                        $('.login_form_password_first .login_form_title_usericon > .login_form_title_usericon_frame').css({
                            'background-image': `url(./img/member/${mAvatar})`
                        });
                        $('.login_form_password_first .login_form_title_usericon > .login_form_title_discrib > span').text(`${mEmail}`);
                        $('.login_form_col:nth-child(1)').css({
                            'transition': '.5s',
                            'transform': 'translateX(-100%)',
                            'opacity': '0'
                        });
                        $('.login_form_col:nth-child(2)').css({
                            'transition': '.5s',
                            'transform': 'translateX(100%)',
                            'opacity': '0'
                        });
                        setTimeout(function() {
                            $('.login_form_col:nth-child(1)').addClass('login_d_none');
                            $('.login_form_col:nth-child(2)').removeClass('login_d_none');
                            $('.login_form_col:nth-child(3)').addClass('login_d_none');
                            setTimeout(function() {
                                $('.login_form_col:nth-child(2)').css({
                                    'transition': '.5s',
                                    'transform': 'translateX(0%)',
                                    'opacity': '1',
                                });
                            }, 200)
                        }, 500);
                    }, 300)


                    // location.href = 'index_.php';
                } else {
                    $('#loginEmailForm .member_email_alert:nth-of-type(1)').addClass('login_d_none');
                    $('#loginEmailForm .member_email_alert:nth-of-type(2)').removeClass('login_d_none');
                    $('#loginEmailForm .member_email_alert:nth-of-type(3)').addClass('login_d_none');
                    $('.login_form_col:nth-child(1)').css('animation-name', 'formshake');
                    $('.login_form_col:nth-child(1)').one('animationend', () => {
                        $('.login_form_col:nth-child(1)').css('animation-name', 'none');
                    });
                    // location.href = 'login.php';
                };
            }, 'json');
        }
    }

    function checkPassword() {
        // TODO: 檢查欄位資料.

        let isPass = true; // 有沒有通過檢查

        if (!$('#login_form_password_first_password').val().trim()) {
            isPass = false;
            $('#loginPasswordForm .member_password_alert:nth-of-type(2)').addClass('login_d_none');
            $('#loginPasswordForm .member_password_alert:nth-of-type(3)').removeClass('login_d_none');
            $('#loginPasswordForm .member_password_status i:nth-child(3)').removeClass('login_d_none');
            $('#loginPasswordForm .member_password_status i:nth-child(4)').addClass('login_d_none');
            $('.login_form_col:nth-child(2)').css('animation-name', 'formshake');
            $('.login_form_col:nth-child(2)').one('animationend', () => {
                $('.login_form_col:nth-child(2)').css('animation-name', 'none');
            });
            return; //密碼或email為空 則不讓通過
        };

        // AJAX 如果有填寫email
        if (isPass) {
            $.post('member_login_psd_api.php', $(document.login_form_password).serialize(), function(data) {
                console.log(data);
                if (data.passwordsuccess) {
                    $('#loginPasswordForm .member_password_status:nth-of-type(1)').addClass('login_d_none');
                    $('#loginPasswordForm .member_email_alert:nth-of-type(2)').addClass('login_d_none');
                    $('#loginPasswordForm .member_email_alert:nth-of-type(3)').addClass('login_d_none');
                    $('#loginPasswordForm .member_password_status i:nth-child(1)').addClass('login_d_none');
                    $('#loginPasswordForm .member_password_status i:nth-child(2)').addClass('login_d_none');
                    $('#loginPasswordForm .member_password_status i:nth-child(3)').addClass('login_d_none');
                    $('#loginPasswordForm .member_password_status i:nth-child(4)').removeClass('login_d_none');
                    const mNickname = data.mNickname;
                    const mAvatar = data.mAvatar;
                    setTimeout(function() {
                        $('.login_form_col:nth-child(2)').css({
                            'transition': '.5s',
                            'transform': 'translateX(-100%)',
                            'opacity': '0'
                        });
                        $('.login_form_col:nth-child(3)').css({
                            'transition': '.5s',
                            'transform': 'translateX(100%)',
                            'opacity': '0'
                        });
                        $('.login_form_login_success .login_form_title_usericon > .login_form_title > span').text(`${mNickname}`);
                        $('.login_form_login_success .login_form_title_usericon > .login_form_title_usericon_frame').css({
                            'background-image': `url(./img/member/${mAvatar})`
                        });
                        setTimeout(function() {
                            $('.login_form_col:nth-child(1)').addClass('login_d_none');
                            $('.login_form_col:nth-child(2)').addClass('login_d_none');
                            $('.login_form_col:nth-child(3)').removeClass('login_d_none');
                            setTimeout(function() {
                                $('.login_form_col:nth-child(3)').css({
                                    'transition': '.5s',
                                    'transform': 'translateX(0%)',
                                    'opacity': '1',
                                });
                                setTimeout(function() {
                                    $('.login_form_toindex > p > span').text('2秒');
                                    setTimeout(function() {
                                        $('.login_form_toindex > p > span').text('1秒');
                                        setTimeout(function() {
                                            $('.login_form_toindex > p > span').text('0秒');
                                            // location.href = 'index.php';
                                        }, 1000);
                                    }, 1000);
                                }, 1000);
                            }, 200)
                        }, 500);
                    }, 300)


                    // location.href = 'index_.php';
                } else {
                    $('#loginPasswordForm .member_password_alert:nth-of-type(2)').addClass('login_d_none');
                    $('#loginPasswordForm .member_password_alert:nth-of-type(3)').removeClass('login_d_none');
                    $('.login_form_col:nth-child(2)').css('animation-name', 'formshake');
                    $('#loginPasswordForm .member_password_status i:nth-child(3)').removeClass('login_d_none');
                    $('#loginPasswordForm .member_password_status i:nth-child(4)').addClass('login_d_none');
                    $('.login_form_col:nth-child(2)').one('animationend', () => {
                        $('.login_form_col:nth-child(2)').css('animation-name', 'none');
                    });
                    // location.href = 'login.php';
                };
            }, 'json');
        }
    }
</script>

</body>
</html>