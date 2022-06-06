<?php

require './parts/movwe_connect_db.php';
$title = '孤單又燦爛的神-鬼怪 娃娃';

// $productname = $_GET['productname'];  
//apple banana car dog

//isset 該變數再不再?
//$_GET 取得網址變數
//intval 
//? : 判斷式子 if true ? do this : 

// $sql = sprintf("SELECT * FROM products ");
$sql = sprintf("SELECT * FROM products WHERE productname = \"$title\"");
// print_r($sql);
// print_r("<br>");
$rows = $pdo->query($sql)->fetchAll();
//$pdo 資料庫 模組
//query 模組的資料挑選 () 帶入SQL指令
//fetchAll() query 模組的功能
// $rows = $output['rows'];
//
// print_r($rows);

// print_r("<br>");
$myproductchoices = $rows[0]["productchoice"];
// print_r('eddie' . "myproductchoices ->" . $rows[0]["productchoice"]);


//["蕎麥君","紅豆君","鬼怪","阿使","德華"]
// sizeof($myproductchoices);
//$myproductchoices $rows $r foreach
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
                        <h3 class="main-color" id="itemName">孤單又燦爛的神-鬼怪 周邊娃娃</h3>
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
                                        <?php foreach ($rows as $m) : ?>
                                            <?php foreach (json_decode($m['productchoice']) as $mm) : ?>
                                                <div class="d-flex align-item-center mr-10">
                                                    <input type="radio" id="" name="selectdoll" class="mr-10" onclick="WWW()" value="<?= $mm ?>">
                                                    <label for="">
                                                        <p class="white-space">
                                                            <?= $mm ?>
                                                        </p>
                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="mt-20">
                                <h4 class="yellow mb-10">尺寸</h4>
                                <div class="d-flex align-item-center">
                                    <fieldset class="d-flex justify-around">
                                        <?php foreach ($rows as $s) : ?>
                                            <?php foreach (json_decode($s['productsize']) as $ss) : ?>
                                                <div class="d-flex align-item-center mr-20">
                                                    <input type="radio" class="product-size mr-10" name="productsize" value="<?= $ss ?>" onclick="CCC()">
                                                    <label for="" class="white">
                                                        <?= $ss ?>
                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
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
                                <h3 class="inline orange" id="productPrice">899～1099</h3>
                            </div>
                            <!-- 購買按鈕 -->
                            <div class="d-flex justify-between">
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
                                    <fieldset class="d-flex justify-around">
                                        <div class="d-flex align-item-center mr-20">
                                            <input type="radio" class="product-size mr-10" name="productsize" onclick="CCC()">
                                            <label for="" class="white">S</label>
                                            <input type="radio" class="product-size ml-20 mr-10" name="productsize" onclick="CCC()">
                                            <label for="" class="white">M</label>
                                            <input type="radio" class="product-size ml-20 mr-10" name="productsize" onclick="CCC()">
                                            <label for="" class="white">L</label>
                                        </div>
                                    </fieldset>
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
                            <div class="d-flex justify-center align-item-center mt-20">
                                <img class="mgr-15" src="./img/banner/mell_point.jpg" alt="" href="./point_index.php">
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
            <div class="gooood">
                <svg width="201" height="165" viewBox="0 0 201 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle r="79.5" transform="matrix(0.866919 -0.498448 0.501553 0.865127 82.1178 81.4187)" stroke="#10FFA2" stroke-width="3" />
                    <ellipse rx="7" ry="7.5" transform="matrix(0.866919 -0.498448 0.501553 0.865127 106.563 29.8753)" fill="#10FFA2" />
                    <path d="M22.956 83.1269C25.8034 82.3686 28.0435 82.4338 29.6764 83.3224C31.3243 84.185 32.4367 85.6864 33.0138 87.8266C33.2746 88.7938 33.3798 89.7584 33.3295 90.7202C33.2737 91.6615 32.9997 92.5726 32.5074 93.4536C32.0302 94.3086 31.2976 95.0771 30.3094 95.7593C29.3213 96.4416 28.0225 96.9969 26.4131 97.4255L24.4013 97.9612L26.5153 105.802L21.8419 107.046L15.8994 85.006L22.956 83.1269ZM23.7404 87.0206L21.6049 87.5892L23.3693 94.1335L24.9168 93.7214C25.8041 93.4851 26.537 93.1686 27.1156 92.7719C27.6942 92.3752 28.0923 91.8832 28.3099 91.2959C28.5275 90.7086 28.5309 90.024 28.32 89.2419C28.0259 88.1512 27.5104 87.4283 26.7733 87.0732C26.0307 86.6974 25.0197 86.6799 23.7404 87.0206ZM45.7173 82.2933C45.9442 82.2328 46.2152 82.1717 46.5303 82.1099C46.8453 82.048 47.1013 82.0129 47.2981 82.0047L48.1228 86.417C47.9673 86.4143 47.7423 86.4411 47.4479 86.4974C47.1686 86.5277 46.9257 86.5703 46.7194 86.6253C46.121 86.7846 45.5655 87.0208 45.0528 87.3338C44.5345 87.6262 44.0928 87.9974 43.7276 88.4476C43.3831 88.8922 43.1516 89.4281 43.0332 90.0552C42.9299 90.6562 42.9864 91.358 43.2028 92.1605L45.5165 100.742L40.905 101.97L36.3607 85.1157L39.8581 84.1844L41.3047 86.843L41.5213 86.7853C41.6961 86.1212 41.9673 85.4865 42.3349 84.8813C42.7025 84.2761 43.1672 83.7443 43.7292 83.2859C44.3118 82.8219 44.9745 82.4911 45.7173 82.2933ZM67.4258 85.8426C67.8031 87.242 67.9427 88.5392 67.8448 89.7343C67.7675 90.9239 67.4704 91.9956 66.9535 92.9493C66.4517 93.877 65.748 94.6709 64.8424 95.3312C63.9312 95.9708 62.836 96.461 61.5567 96.8016C60.3806 97.1148 59.2371 97.2208 58.1262 97.1196C57.0304 96.9924 56.0215 96.6544 55.0996 96.1059C54.1721 95.5368 53.355 94.7618 52.6483 93.781C51.9622 92.7947 51.4305 91.6018 51.0532 90.2024C50.5482 88.3297 50.4539 86.6675 50.7702 85.2157C51.0809 83.7434 51.7637 82.5029 52.8186 81.4941C53.8735 80.4853 55.2469 79.7556 56.9389 79.3051C58.5276 78.882 60.0223 78.8479 61.4227 79.2029C62.8232 79.5578 64.049 80.2901 65.1001 81.3998C66.1456 82.4889 66.9209 83.9698 67.4258 85.8426ZM55.7576 88.9497C56.0572 90.061 56.4231 90.9671 56.8554 91.6681C57.3028 92.343 57.8371 92.8073 58.4583 93.061C59.074 93.294 59.7946 93.3007 60.6199 93.0809C61.4452 92.8611 62.0556 92.5001 62.4509 91.9978C62.8613 91.4694 63.0801 90.8046 63.1073 90.0033C63.1496 89.1759 63.021 88.2066 62.7214 87.0953C62.4217 85.984 62.0483 85.0909 61.6009 84.416C61.1742 83.7356 60.653 83.2788 60.0373 83.0458C59.4216 82.8127 58.701 82.8061 57.8757 83.0258C56.6583 83.35 55.8848 84.0081 55.5552 85.0003C55.2407 85.9663 55.3081 87.2828 55.7576 88.9497ZM78.955 92.1687C77.0774 92.6687 75.3432 92.3474 73.7526 91.205C72.177 90.0364 71.0035 88.0219 70.2323 85.1614C69.4555 82.2803 69.4657 79.9395 70.263 78.1391C71.0602 76.3388 72.4286 75.1803 74.3681 74.6638C75.1728 74.4496 75.9152 74.3732 76.5952 74.4347C77.2697 74.4757 77.8736 74.6237 78.4067 74.8787C78.9605 75.1283 79.456 75.4485 79.8931 75.8394L80.0479 75.7982C79.8972 75.4854 79.6974 75.0313 79.4484 74.4359C79.1938 73.8199 78.9778 73.1827 78.8002 72.5241L77.3437 67.1221L81.9553 65.8941L88.2806 89.3545L84.7523 90.2941L83.2639 88.3414L83.0782 88.3908C82.9114 88.9205 82.6537 89.4413 82.3052 89.9531C81.9718 90.439 81.5364 90.8747 80.9991 91.2604C80.4617 91.6461 79.7804 91.9489 78.955 92.1687ZM79.574 88.0667C80.8533 87.726 81.651 87.1166 81.9671 86.2384C82.2776 85.3396 82.2407 84.1363 81.8563 82.6285L81.7231 82.1346C81.2792 80.4882 80.6828 79.3016 79.934 78.5746C79.2057 77.8422 78.1607 77.6572 76.7989 78.0199C75.7879 78.2891 75.1128 78.9431 74.7736 79.9819C74.4289 81 74.4785 82.3323 74.9224 83.9786C75.3663 85.625 75.9908 86.7931 76.7961 87.483C77.5957 88.1523 78.5217 88.3469 79.574 88.0667ZM104.065 67.0868L108.609 83.9413L105.081 84.8808L103.879 82.8848L103.632 82.9507C103.436 83.6204 103.11 84.2146 102.653 84.7334C102.21 85.2261 101.681 85.6426 101.066 85.9831C100.455 86.3441 99.7993 86.6181 99.0978 86.8049C97.901 87.1235 96.7905 87.1877 95.7661 86.9973C94.7417 86.8069 93.8598 86.3248 93.1205 85.5512C92.3811 84.7776 91.8173 83.6705 91.4289 82.23L88.466 71.2406L93.0775 70.0126L95.7325 79.8598C96.0543 81.0534 96.5151 81.9012 97.1149 82.4032C97.7146 82.9052 98.4891 83.0298 99.4382 82.7771C100.387 82.5243 101.062 82.1132 101.461 81.5437C101.881 80.9686 102.083 80.2421 102.067 79.3639C102.072 78.4803 101.914 77.4417 101.592 76.2481L99.4532 68.3148L104.065 67.0868ZM120.398 81.1327C118.727 81.5778 117.223 81.6585 115.886 81.3749C114.543 81.0707 113.391 80.363 112.428 79.2519C111.465 78.1409 110.714 76.5872 110.176 74.591C109.621 72.5331 109.519 70.7625 109.871 69.2792C110.223 67.7959 110.935 66.5807 112.007 65.6336C113.099 64.6811 114.46 63.9878 116.09 63.5537C117.246 63.246 118.277 63.0927 119.184 63.0938C120.111 63.0894 120.937 63.1564 121.66 63.2948L121.255 67.2074C120.455 67.1116 119.71 67.0562 119.021 67.0413C118.352 67.0209 117.708 67.0932 117.089 67.258C116.284 67.4723 115.666 67.8464 115.235 68.3802C114.799 68.8935 114.549 69.5666 114.486 70.3994C114.438 71.2062 114.567 72.1756 114.872 73.3074C115.172 74.4187 115.555 75.3091 116.023 75.9785C116.506 76.6218 117.066 77.0573 117.702 77.2849C118.333 77.4919 119.03 77.4937 119.794 77.2904C120.764 77.0322 121.587 76.6807 122.263 76.2359C122.933 75.7706 123.558 75.2182 124.138 74.5786L125.195 78.499C124.615 79.1385 123.959 79.6553 123.225 80.0493C122.517 80.4584 121.575 80.8195 120.398 81.1327ZM135.554 73.1599C136.07 73.0225 136.551 72.8392 136.998 72.6099C137.445 72.3806 137.886 72.1308 138.322 71.8604L139.246 75.2868C138.806 75.6245 138.234 75.9642 137.53 76.3061C136.852 76.663 136.08 76.9569 135.213 77.1877C134.202 77.4569 133.25 77.534 132.357 77.419C131.484 77.2985 130.702 76.9002 130.011 76.224C129.335 75.5217 128.803 74.4502 128.415 73.0097L126.226 64.8912L124.028 65.4763L123.504 63.5316L125.626 61.3123L125.999 57.408L128.94 56.625L129.905 60.2058L134.64 58.9448L135.573 62.4022L130.837 63.6631L133.026 71.7817C133.198 72.4196 133.514 72.8538 133.974 73.0842C134.429 73.294 134.955 73.3192 135.554 73.1599ZM153.206 66.7058C153.511 67.8376 153.504 68.8763 153.184 69.8217C152.858 70.7466 152.214 71.5577 151.252 72.255C150.29 72.9523 149.015 73.5125 147.426 73.9355C146.25 74.2487 145.217 74.4356 144.326 74.4963C143.442 74.5775 142.529 74.5558 141.589 74.4312L140.565 70.6343C141.584 70.8042 142.656 70.8827 143.78 70.8701C144.904 70.8574 145.869 70.7439 146.674 70.5296C147.582 70.2878 148.185 69.9838 148.484 69.6173C148.804 69.2454 148.906 68.8434 148.789 68.4112C148.712 68.1231 148.56 67.8878 148.334 67.7054C148.128 67.5175 147.729 67.3482 147.135 67.1974C146.542 67.0467 145.637 66.8905 144.422 66.729C143.247 66.5564 142.261 66.3448 141.464 66.0939C140.661 65.8225 140.011 65.422 139.515 64.8926C139.012 64.3425 138.634 63.5942 138.379 62.6475C137.957 61.0835 138.249 59.7484 139.256 58.6422C140.262 57.536 141.777 56.7137 143.799 56.1752C144.851 55.895 145.879 55.7314 146.884 55.6845C147.889 55.6375 148.96 55.7161 150.099 55.9202L149.597 59.594C148.973 59.4954 148.378 59.4222 147.813 59.3744C147.247 59.3265 146.702 59.3171 146.18 59.346C145.677 59.3695 145.168 59.4499 144.652 59.5873C143.971 59.7686 143.481 59.9986 143.18 60.2772C142.899 60.5503 142.809 60.8721 142.909 61.2425C142.981 61.5101 143.13 61.735 143.357 61.9175C143.598 62.0738 143.999 62.2095 144.561 62.3246C145.143 62.4342 145.985 62.5629 147.087 62.7108C148.162 62.8435 149.109 63.0326 149.927 63.2779C150.739 63.5027 151.417 63.8846 151.96 64.4237C152.519 64.9367 152.934 65.6974 153.206 66.7058Z" fill="#10FFA2" />
                    <path d="M74.8917 143.745L82.0407 116.9L94.1198 127.049L98.2309 110.972L119.539 129.368L125.397 110.523L136.896 123.678L144.84 100.521" stroke="#10FFA2" stroke-width="3" />
                </svg>
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

        <script src="./js/Nav.js"></script>
        <script src="./js/product.js"></script>
</body>

</html>