<?php

require './parts/movwe_connect_db.php';
// $pageName = 'login';
$title = 'MOVWE-孤單又燦爛的神-鬼怪 周邊娃娃';

?>

<?php include __DIR__ . '/parts/movwe_head.php' ?>


<link rel="stylesheet" href="./css/mystyle.css">
<link rel="stylesheet" href="./css/product.css">
<link rel="stylesheet" href="./css/Carousel_12.css">


</head>

<body>

    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>

    <div class="layout">

        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>

        <div class="container">

            <!--text__container------內容放這邊------------->
            <div class="text__container mt-80">
                <!-- 商品資訊 -->
                <div class="product d-flex flex-col">
                    <!-- 商品圖 -->
                    <div class="product-left">
                        <div class="product-demo">
                            <div class="product-img-wrap-demo">
                                <img src="./img/mall/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-img-row d-flex justify-between">
                            <div class="product-img-wrap">
                                <img src="./img/mall/1.jpg" alt="">
                            </div>
                            <div class="product-img-wrap">
                                <img src="./img/mall/2.jpg" alt="">
                            </div>
                            <div class="product-img-wrap">
                                <img src="./img/mall/3.jpg" alt="">
                            </div>
                            <div class="product-img-wrap product-img-wrap-last">
                                <img src="./img/mall/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-20 justify-between">
                        <h3 class="main-color">孤單又燦爛的神-鬼怪 周邊娃娃</h3>
                        <h4 class="mt-10">選擇商品規格、尺寸、數量 >> </h4>
                        <!-- 電腦版: 右邊商品敘述 -->
                        <div class="product-description-pc ">
                            <div class="mt-20">
                                <h4 class="yellow mb-10">材質</h4>
                                <p>毛絨面料及填充棉花</p>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">選項</h4>
                                <div class="d-flex">
                                    <fieldset class="d-flex justify-around">
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="蕎麥君">
                                            <label for="">
                                                <p class="white-space">蕎麥君</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="紅豆君">
                                            <label for="">
                                                <p class="white-space">紅豆君</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="鬼怪">
                                            <label for="">
                                                <p class="white-space">鬼怪</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="阿使">
                                            <label for="">
                                                <p class="white-space">阿使</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="德華">
                                            <label for="">
                                                <p class="white-space">德華</p>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">尺寸</h4>
                                <div class="d-flex align-item-center">
                                    <fieldset>
                                        <input type="radio" class="product-size mr-20" name="productsize" value="S">
                                        <label for="">S</label>
                                     
                                        <input type="radio" class="product-size mr-20" name="productsize" value="M">
                                        <label for="">M</label>
                                   
                                        <input type="radio" class="product-size mr-20" name="productsize" value="L">
                                        <label for="">L</label>
                               
                                    </fieldset>
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
                                <button class="buy d-flex justify-center align-item-center" type="submit" id="addCart" onclick="AddtoCart()">
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
                    <!-- 手機版: 下方商品敘述 -->
                    <div class="product-description-m">
                        <div class="mt-20">
                            <h4 class="yellow mb-10">材質</h4>
                            <p>毛絨面料及填充棉花</p>
                        </div>
                        <div class="mt-20">
                            <h4 class="yellow mb-10">選項</h4>
                            <div class="d-flex">
                                <div class="d-flex align-item-center mr-20">
                                    <fieldset class="d-flex justify-around">
                                        <!-- <legend>Select a maintenance drone:</legend> -->
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10">
                                            <label for="">
                                                <p class="white-space">蕎麥君</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10">
                                            <label for="">
                                                <p class="white-space">紅豆君</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10">
                                            <label for="">
                                                <p class="white-space">鬼怪</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10">
                                            <label for="">
                                                <p class="white-space">阿使</p>
                                            </label>
                                        </div>
                                        <div class="d-flex align-item-center mr-10">
                                            <input type="radio" id="" name="selectdoll" class="mr-10">
                                            <label for="">
                                                <p class="white-space">德華</p>
                                            </label>
                                        </div>
                                    </fieldset>
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
                                    <button class="button-number button-number-minus mr-10" onclick="subFunction()">-</button>
                                    <input type="text" value="1" id="quantityM">
                                    <button class="button-number button-number-plus ml-10" onclick="addFunction()">+</button>
                                    <p class="ml-20"> 剩餘29件</p>
                                </div>
                            </div>
                            <div class="mt-20">
                                <span class="yellow mr-10">NTD</span>
                                <h3 class="inline orange">890</h3>
                            </div>
                            <!-- 購買按鈕 -->
                            <div class="button-buy mt-20">
                                <button class="buycart5 buy d-flex justify-center align-item-center">
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
                </div>
                <!-- 電腦版: 規格說明與優惠券 -->
                <div class="product-discount-pc mt-20">
                    <div class="d-flex w-100">
                        <div class="d-flex w-70">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">商品規格</h3>
                        </div>
                        <div class="d-flex w-30">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">領取優惠券</h3>
                        </div>
                    </div>
                    <div class="d-flex w-100 mt-20">
                        <!-- 商品規格說明 -->
                        <div class="product-info w-70">
                            <div class="mr-50">
                                <h4 class="yellow">關於</h4>
                                <p class="mt-10">
                                    經典熱門韓劇《孤單又燦爛的神：鬼怪》上演了一場跨國、跨歷史、跨年齡段的人鬼愛情，劇中無論是男女主角的愛情還是與其他角色的友情，他們之間妙不可言的甜膩感情，無疑是再一次向廣大觀衆撒了一大波狗糧，而劇中女主角愛不釋手的娃娃一蕎麥君更是讓影迷們大呼一定要收藏!
                                </p>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow">尺寸</h4>
                                <table class="size mt-10">
                                    <tr>
                                        <th>規格</th>
                                        <th>長 x 寬 x 高 (公分)</th>
                                        <th>重量 (公克)</th>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>15 x 12 x 27</td>
                                        <td>194</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>30 x 24 x 54</td>
                                        <td>388</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>45 x 36 x 81</td>
                                        <td>582</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow">產地</h4>
                                <p class="mt-10">韓國設計、韓國製造</p>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow">注意事項</h4>
                                <p class="orange mt-10">
                                    * 產品圖片可能因為每個裝置螢幕色彩規格而與實際產品不同。
                                    <br>
                                    * 尺寸正負2公分內以及重量正負10公克以內皆為正常範圍。
                                </p>
                            </div>
                        </div>
                        <!-- 優惠券 -->
                        <div class="discount w-30">
                            <div>
                                <h4>想知道Movwe會員才能獨享的折扣嗎?
                                    請到優惠券專區了解詳情!</h4>
                            </div>
                            <div class="d-flex justify-center align-item-center mt-10">
                                <img src="./img/banner/mell_point.jpg" alt="" href="./point_index.php">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 手機版: 優惠券與規格說明 -->
                <div class="product-discount-m mt-30">
                    <!-- 商品規格說明 -->
                    <div class="product-info">
                        <div class="d-flex">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">商品規格</h3>
                        </div>

                        <div class="mt-20">
                            <h4 class="yellow">關於</h4>
                            <p class="white mt-10">
                                經典熱門韓劇《孤單又燦爛的神：鬼怪》上演了一場跨國、跨歷史、跨年齡段的人鬼愛情，劇中無論是男女主角的愛情還是與其他角色的友情，他們之間妙不可言的甜膩感情，無疑是再一次向廣大觀衆撒了一大波狗糧，而劇中女主角愛不釋手的娃娃一蕎麥君更是讓影迷們大呼一定要收藏!
                            </p>
                        </div>

                        <div class="mt-20">
                            <h4 class="yellow">尺寸</h4>
                            <table class="size mt-10">
                                <tr>
                                    <th>規格</th>
                                    <th>長 x 寬 x 高 (公分)</th>
                                    <th>重量 (公克)</th>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>15 x 12 x 27</td>
                                    <td>194</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>30 x 24 x 54</td>
                                    <td>388</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>45 x 36 x 81</td>
                                    <td>582</td>
                                </tr>
                            </table>
                        </div>

                        <div class="mt-20">
                            <h4 class="yellow">產地 &nbsp;</h4>
                            <p class="white mt-10">韓國設計、韓國製造</p>
                        </div>

                        <div class="mt-20">
                            <h4 class="yellow">注意事項</h4>
                            <p class="orange mt-10">
                                * 產品圖片可能因為每個裝置螢幕規格而與實際產品不同。
                                <br>
                                * 尺寸正負2公分及重量正負10公克內皆為正常範圍。
                            </p>
                        </div>
                    </div>
                    <!-- 優惠券 -->
                    <div class="discount mt-30">
                        <div class="d-flex">
                            <div class="stick_desk"></div>
                            <h3 class="main-color">領取優惠券</h3>
                        </div>
                        <div class="mt-10">
                            <div>
                                <h4>想知道Movwe會員才能獨享的折扣嗎?
                                    請到優惠券專區了解詳情!</h4>
                            </div>
                            <div class="mt-10">
                                <img src="./img/banner/mell_point.jpg" alt="" href="./point_index.php">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 下面商品ROW -->
                <!-- <div class="mt-30">
                    <div class="d-flex align-item-center">
                        <div class="stick_desk"></div>
                        <h3 class="main-color">推薦商品</h3>
                    </div>
                    <div class="row_products mt-10">
                        <div class="mall_product">
                            <img src="./img/forum/1.jpg" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="./img/forum/1.jpg" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="./img/forum/1.jpg" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="./img/forum/1.jpg" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                        <div class="mall_product">
                            <img src="./img/forum/1.jpg" alt="">
                            <div class="container_product_details">
                                <p>波吉卡克 1/7 PVC模型</p>
                                <div class="product_text">
                                    <p class="price">2,350<span>NTD</span></p>
                                    <p class="tag">國王排名</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                                手機支架人形立牌
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
                                                桌上小台曆
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
            </div>
            <!-- 商品已成功加入購物車 彈跳視窗 -->
            <div class="blackblack">
                <div class="cart-success">
                    <div class="d-flex align-item-center mt-30">
                        <div class="success-logo-img-wrap">
                            <img src="./img/other/gif/logo_gif.gif" alt="">
                        </div>
                        <div class="success-logo-word-img-wrap">
                            <img src="./img/logo/logo_word.png" alt="">
                        </div>
                    </div>
                    <div class="close d-flex justify-center align-item-center">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div>
                        <p class="orange mt-30">商品已成功加入購物車!</p>
                    </div>
                </div>
            </div>

            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>

        <script src="./js/product.js"></script>
</body>

</html>