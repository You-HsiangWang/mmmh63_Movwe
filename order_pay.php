<?php

require './parts/movwe_connect_db.php';
$title = 'Movwe-付款資訊';

?>

<?php include __DIR__ . '/parts/movwe_head.php' ?>


<link rel="stylesheet" href="./css/mystyle.css">
<link rel="stylesheet" href="./css/order_pay.css">

</head>

<body>
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">

        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>

        <div class="container">

            <!--text__container------內容放這邊------------->
            <div class="text__container">
                <!-- 上面進度條 -->
                <div class="progress-bar d-flex justify-between align-item-center mt-80">
                    <div class="d-flex justify-center align-item-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.7108 18.5V10.756C12.7108 10.5747 12.7108 10.3827 12.7108 10.18C12.7215 9.96667 12.7321 9.748 12.7428 9.524C12.3801 9.876 11.9588 10.1853 11.4788 10.452C10.9988 10.708 10.5081 10.8947 10.0068 11.012L9.67081 9.844C9.86281 9.82267 10.1028 9.75333 10.3908 9.636C10.6895 9.508 10.9988 9.35333 11.3188 9.172C11.6495 8.98 11.9535 8.77733 12.2308 8.564C12.5081 8.35067 12.7215 8.14267 12.8708 7.94H13.9908V18.5H12.7108Z" fill="#fff" />
                            <rect x="0.5" y="0.5" width="24" height="24" rx="12" stroke="#fff" />
                        </svg>
                        <h3 class="ml-10" style="color: #fff;">購物車</h3>
                    </div>
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1427_26206)">
                            <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1427_26206">
                                <rect width="8.75" height="15.001" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="d-flex justify-center align-item-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.01994 18.5V17.46C10.0759 16.6813 10.9559 15.9987 11.6599 15.412C12.3746 14.8253 12.9453 14.292 13.3719 13.812C13.7986 13.332 14.1026 12.8787 14.2839 12.452C14.4653 12.0147 14.5559 11.5613 14.5559 11.092C14.5559 10.4627 14.3533 9.956 13.9479 9.572C13.5533 9.17733 13.0093 8.98 12.3159 8.98C11.5906 8.98 11.0093 9.22 10.5719 9.7C10.1346 10.1693 9.8786 10.7987 9.80394 11.588L8.68394 10.916C8.77994 10.2973 8.97727 9.75333 9.27594 9.284C9.58527 8.81467 9.99594 8.44667 10.5079 8.18C11.0306 7.91333 11.6493 7.78 12.3639 7.78C12.9079 7.78 13.3933 7.86 13.8199 8.02C14.2573 8.18 14.6306 8.40933 14.9399 8.708C15.2493 8.996 15.4839 9.34267 15.6439 9.748C15.8146 10.1533 15.8999 10.6013 15.8999 11.092C15.8999 11.7533 15.7399 12.404 15.4199 13.044C15.0999 13.6733 14.5719 14.3347 13.8359 15.028C13.0999 15.7213 12.1026 16.4893 10.8439 17.332V17.348C10.9613 17.3373 11.1213 17.332 11.3239 17.332C11.5373 17.3213 11.7453 17.316 11.9479 17.316C12.1613 17.3053 12.3213 17.3 12.4279 17.3H16.1239V18.5H9.01994Z" fill="#fff" />
                            <rect x="0.5" y="0.5" width="24" height="24" rx="12" stroke="#fff" />
                        </svg>
                        <h3 class="ml-10">物流選擇</h3>
                    </div>
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1427_26206)">
                            <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1427_26206">
                                <rect width="8.75" height="15.001" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="d-flex justify-center align-item-center">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3646 18.66C12.4259 18.66 11.5939 18.4413 10.8686 18.004C10.1539 17.556 9.66861 16.9427 9.41261 16.164L10.6926 15.508C10.8206 15.9027 10.9966 16.2493 11.2206 16.548C11.4446 16.836 11.7379 17.06 12.1006 17.22C12.4739 17.38 12.9379 17.46 13.4926 17.46C13.9619 17.46 14.3566 17.3747 14.6766 17.204C14.9966 17.0333 15.2419 16.804 15.4126 16.516C15.5833 16.2173 15.6686 15.876 15.6686 15.492C15.6686 15.108 15.5939 14.788 15.4446 14.532C15.3059 14.276 15.0819 14.0893 14.7726 13.972C14.4633 13.844 14.0579 13.78 13.5566 13.78C13.4393 13.78 13.3113 13.7853 13.1726 13.796C13.0339 13.796 12.8899 13.8067 12.7406 13.828V12.548C12.8366 12.5587 12.9273 12.564 13.0126 12.564C13.1086 12.564 13.1939 12.564 13.2686 12.564C14.0473 12.564 14.6019 12.4147 14.9326 12.116C15.2633 11.8067 15.4286 11.3267 15.4286 10.676C15.4286 10.1213 15.2579 9.7 14.9166 9.412C14.5753 9.124 14.0899 8.98 13.4606 8.98C12.7886 8.98 12.2766 9.12933 11.9246 9.428C11.5726 9.716 11.2953 10.1107 11.0926 10.612L9.87661 10.036C10.0473 9.588 10.3033 9.19333 10.6446 8.852C10.9859 8.51067 11.3966 8.244 11.8766 8.052C12.3673 7.86 12.9059 7.764 13.4926 7.764C14.2286 7.764 14.8366 7.892 15.3166 8.148C15.7966 8.39333 16.1539 8.724 16.3886 9.14C16.6339 9.556 16.7566 10.0147 16.7566 10.516C16.7566 10.9 16.7033 11.2467 16.5966 11.556C16.4899 11.8547 16.3406 12.116 16.1486 12.34C15.9673 12.564 15.7593 12.7453 15.5246 12.884C15.2899 13.012 15.0393 13.0973 14.7726 13.14V13.172C15.1246 13.1827 15.4339 13.252 15.7006 13.38C15.9779 13.508 16.2126 13.6787 16.4046 13.892C16.5966 14.1053 16.7406 14.3507 16.8366 14.628C16.9433 14.8947 16.9966 15.1773 16.9966 15.476C16.9966 16.0947 16.8419 16.644 16.5326 17.124C16.2339 17.604 15.8126 17.9827 15.2686 18.26C14.7246 18.5267 14.0899 18.66 13.3646 18.66Z" fill="#10FFA2" />
                            <rect x="1.38867" y="0.5" width="24" height="24" rx="12" stroke="#10FFA2" />
                        </svg>

                        <h3 class="ml-10 main-color">付款資訊</h3>
                    </div>
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1427_26206)">
                            <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1427_26206">
                                <rect width="8.75" height="15.001" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="d-flex justify-center align-item-center">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1333 18.5V15.732H8.98134V14.788L13.7973 7.94H15.4133V14.628H17.2853V15.732H15.4133V18.5H14.1333ZM10.3413 14.628H14.1333V10.676C14.1333 10.3987 14.1387 10.116 14.1493 9.828C14.1707 9.54 14.1867 9.25733 14.1973 8.98H14.1653C14.0373 9.24667 13.872 9.54533 13.6693 9.876C13.4667 10.2067 13.28 10.4947 13.1093 10.74L10.3413 14.628Z" fill="#FFFFFD" />
                            <rect x="1.16797" y="0.5" width="24" height="24" rx="12" stroke="#FFFFFD" />
                        </svg>

                        <h3 class="ml-10">訂單完成</h3>
                    </div>
                </div>
                <!-- 購物車內商品 -->
                <div class="d-flex mt-30 pb-10 border-bottom-main-color">
                    <div class="stick_desk"></div>
                    <h3 class="main-color">購物車內商品</h3>
                </div>
                <div class="mt-10 border-bottom-main-color pb-10" id="cartInfo">
                    <p class="white">購物車內商品
                        <svg class="arrow ml-10" width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1427_26206)">
                                <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1427_26206">
                                    <rect width="8.75" height="15.001" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </p>
                </div>
                <!-- ㄚㄚㄚ是table 購物車商品詳情 -->
                <div class="booking-list mb-30 border-bottom-main-color">
                    <table>
                        <tr class="yellow">
                            <th>商品圖片</th>
                            <th>商品名稱</th>
                            <th>選項</th>
                            <th>尺寸</th>
                            <th>數量</th>
                            <th>單價</th>
                            <th>小計</th>
                        </tr>
                        <?php foreach ($_SESSION['cart'] as $f) : ?>
                            <tr id="text">
                                <td>
                                    <img src="./img/mall/1.jpg" alt="">
                                </td>
                                <td>
                                    <h4><?= $f['ProductName'] ?></h4>
                                </td>
                                <td>
                                    <h4><?= $f['ProductChoice'] ?></h4>
                                </td>
                                <td>
                                    <h4><?= $f['ProductSize'] ?></h4>
                                </td>
                                <td>
                                    <h4><?= $f['ProductQuantity'] ?></h4>
                                </td>
                                <td>
                                    <h4 id="singlePrice" data-value="<?= $f['ProductPrice'] ?>"><?= $f['ProductPrice'] ?></h4>
                                </td>
                                <td>
                                    <h4 id="subTotalPrice"><?= $f['SubTotalPrice'] ?></h4>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                    <div id="noProduct">
                        <!-- <h3>目前購物車內沒有商品</h3> -->
                    </div>
                </div>
                <!-- 優惠券 -->
                <div class="d-flex mt-30 pb-10 border-bottom-main-color">
                    <div class="stick_desk"></div>
                    <h3 class="main-color">優惠券</h3>
                </div>
                <div class="mt-10 border-bottom-main-color pb-10" id="discountInfo">
                    <p class="white">已選取的優惠券
                        <svg class="arrow0 ml-10" width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1427_26206)">
                                <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1427_26206">
                                    <rect width="8.75" height="15.001" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </p>
                </div>
                <div class="discount-info border-bottom-main-color d-none">
                    <fieldset class="d-flex justify-around">
                        <div class="d-flex align-item-center">
                            <input type="radio" id="discount1" name="discount1" class="mr-10" checked>
                            <label for="discount1">
                                <img src="./img/other/discount_<?= $_SESSION['cartcart']['DiscountValue'] ?>.png" alt="">
                            </label>
                        </div>
                    </fieldset>
                </div>
                <p class="main-color mt-10">*每次結帳限使用一張</p>

                <!-- TODO: 選擇物流 -->
                <div class="d-flex mt-30 pb-10 border-bottom-main-color">
                    <div class="stick_desk"></div>
                    <h3 class="main-color">物流方式</h3>
                </div>
                <div class="mt-10 pointer border-bottom-main-color pb-10" id="deliveryFunc">
                    <p class="white deliveryway">查看已選取的物流方式
                        <svg class="arrow0 ml-10" width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1427_26206)">
                                <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1427_26206">
                                    <rect width="8.75" height="15.001" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </p>
                </div>
                <div class="delivery-func mt-30 d-none">
                    <div class="d-flex justify-around">
                        <!-- 宅配 -->
                        <div class="delivery delivery-home d-flex flex-col justify-center align-item-center">
                            <svg width="49" height="52" viewBox="0 0 49 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11.9375L26.3906 1L37.1328 6.46875M1 11.9375V41.625L26.3906 51M1 11.9375L13.6953 17.2109M47.875 11.9375L26.3906 22.4844M47.875 11.9375V41.625L26.3906 51M47.875 11.9375L37.1328 6.46875M26.3906 22.4844V51M26.3906 22.4844L13.6953 17.2109M13.6953 17.2109L37.1328 6.46875" stroke="#10FFA2" stroke-width="1.5" />
                            </svg>
                            <h4 class="mt-10 main-color">宅配到府</h4>
                        </div>
                        <!-- 711取貨 -->
                        <div class="delivery delivery-711 d-flex flex-col justify-center align-item-center">
                            <svg width="36" height="50" viewBox="0 0 36 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.2497 17.4349C24.2497 21.1992 21.1982 24.2507 17.434 24.2507C13.6697 24.2507 10.6182 21.1992 10.6182 17.4349C10.6182 13.6707 13.6697 10.6191 17.434 10.6191C21.1982 10.6191 24.2497 13.6707 24.2497 17.4349Z" stroke="#fff" stroke-width="1.5" />
                                <path d="M34.7763 18.1102C34.7763 20.4726 33.9946 23.5397 32.7031 26.8757C31.4173 30.1967 29.6506 33.7229 27.7357 36.9831C25.8204 40.2442 23.7676 43.2206 21.9169 45.4459C20.9909 46.5594 20.1263 47.4718 19.3643 48.1353C18.6948 48.7183 18.1568 49.0623 17.7632 49.2134C17.3695 49.0623 16.8315 48.7183 16.162 48.1353C15.4001 47.4718 14.5354 46.5594 13.6094 45.4459C11.7588 43.2206 9.70597 40.2442 7.79058 36.9831C5.87571 33.7229 4.10901 30.1967 2.82327 26.8757C1.53167 23.5397 0.75 20.4726 0.75 18.1102C0.75 8.50869 8.38067 0.75 17.7632 0.75C27.1457 0.75 34.7763 8.50869 34.7763 18.1102Z" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            <h4 class="mt-10">711取貨</h4>
                        </div>
                    </div>
                </div>
                <!-- 收件資料 -->
                <div class="d-flex mt-30 pb-10 border-bottom-main-color">
                    <div class="stick_desk"></div>
                    <h3 class="main-color">收件資料</h3>
                </div>
                <div class="mt-10 border-bottom-main-color pb-10" id="deliveryInfo">
                    <p class="white seedeliveryinfo">查看收件資料
                        <svg class="arrow0 ml-10" width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1427_26206)">
                                <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1427_26206">
                                    <rect width="8.75" height="15.001" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </p>
                </div>
                <div class="delivery-info mt-30 d-none">
                    <div class="m-0" >

                        <h4 id="memberName" class="main-color border-bottom-main-color">
                            <?= $_SESSION['deliveryInfo']['memberName'] ?>
                        </h4>
                        <p id="memberAddress" class="main-color border-bottom-main-color">
                            <?= $_SESSION['deliveryInfo']['memberAddress'] ?>
                        </p>
                        <p id="memberPhone" class="main-color border-bottom-main-color">
                            <?= $_SESSION['deliveryInfo']['memberPhone'] ?>
                        </p>

                    </div>
                </div>
                <!-- 線上付款 + 總計金額 -->
                <div class="d-flex mt-30 pb-10 border-bottom-main-color">
                    <div class="stick_desk"></div>
                    <h3 class="main-color">線上付款</h3>
                </div>
                <div class="mt-10 pointer pb-10">
                    <p class="white">請以信用卡完成線上付款
                        <svg class="ml-10" width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1427_26206)">
                                <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#fff"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1427_26206">
                                    <rect width="8.75" height="15.001" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </p>
                </div>
                <!-- 信用卡資訊 -->
                <div class="d-flex flex-col justify-center align-item-center">
                    <div class="d-flex justify-between">
                        <div class="card-img-wrap mr-20">
                            <img src="./img/other/visa.jpg" alt="">
                        </div>
                        <div class="card-img-wrap">
                            <img src="./img/other/master.jpg" alt="">
                        </div>
                    </div>
                    <div class="credit-info mt-30">
                        <div class="inputCard d-flex align-item-center pb-10">
                            <h4 class="mr-20">信用卡卡號</h4>
                            <!-- <h4 class="mr-20">有效日期</h4> -->
                            <input class="creditCardText" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                        </div>
                        <div class="inputCard d-flex align-item-center mt-10 pb-10">
                            <h4 class="mr-20">有效日期</h4>
                            <input type="text" class="creditcarddate" placeholder="mm/yy">
                        </div>
                        <div class="inputCard d-flex align-item-center mt-10 pb-10">
                            <h4 class="mr-20">持卡人姓名</h4>
                            <input type="text">
                        </div>
                        <div class="inputCard d-flex align-item-center mt-10 pb-10">
                            <h4 class="mr-20">輸入安全碼</h4>
                            <input type="text" placeholder="cvv">
                        </div>
                    </div>
                </div>
                <!-- 總計金額 -->
                <div class="w-100 mt-30 d-flex justify-end">
                    <div class="w-30">
                        <div class="d-flex justify-between">
                            <h4>總共有<?= $_SESSION['cartcart']['ProductQuantity'] ?>項商品</h4>
                            <h4>NTD<?= $_SESSION['cartcart']['ProductTotalPrice'] ?></h4>
                        </div>
                        <div class="d-flex justify-between mt-10">
                            <h4>優惠券折抵</h4>
                            <h4><?= $_SESSION['cartcart']['ProductDiscount'] ?></h4>
                        </div>
                        <div class="d-flex justify-between border-bottom-main-color mt-10 pb-10">
                            <h4>運費</h4>
                            <h4 id="deliveryFee">免 運 哦</h4>
                        </div>
                        <div class="d-flex justify-between mt-10">
                            <h4><strong>商品總金額</strong></h4>
                            <h4 class="orange"><?= $_SESSION['cartcart']['ProductTotalPayment'] ?></h4>
                        </div>
                        <div class="d-flex justify-end">
                            <p class="grey">皆以新台幣付款</p>
                        </div>

                    </div>
                </div>
                <!-- 運送地區 + 上下一步 -->
                <div class="d-flex justify-between mt-30">
                    <!-- 運送地區 -->
                    <div>
                        <div class="d-flex align-item-center">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.5701 5.47263C14.5701 5.47263 14.5701 5.47263 14.5701 5.43502C14.0401 3.98796 13.0785 2.73861 11.8152 1.85597C10.5519 0.973335 9.04807 0.5 7.50702 0.5C5.96596 0.5 4.46208 0.973335 3.19883 1.85597C1.93558 2.73861 0.973909 3.98796 0.443912 5.43502C0.443912 5.43502 0.443912 5.43502 0.443912 5.47263C-0.147971 7.10556 -0.147971 8.89444 0.443912 10.5274C0.443912 10.5274 0.443912 10.5274 0.443912 10.565C0.973909 12.012 1.93558 13.2614 3.19883 14.144C4.46208 15.0267 5.96596 15.5 7.50702 15.5C9.04807 15.5 10.5519 15.0267 11.8152 14.144C13.0785 13.2614 14.0401 12.012 14.5701 10.565C14.5701 10.565 14.5701 10.565 14.5701 10.5274C15.162 8.89444 15.162 7.10556 14.5701 5.47263V5.47263ZM1.66999 9.50439C1.40915 8.51842 1.40915 7.48158 1.66999 6.49561H3.06907C2.94874 7.49493 2.94874 8.50507 3.06907 9.50439H1.66999ZM2.28679 11.0088H3.33986C3.51641 11.6796 3.76877 12.3282 4.09205 12.9419C3.35438 12.4394 2.73773 11.7791 2.28679 11.0088ZM3.33986 4.99122H2.28679C2.73124 4.2233 3.34 3.56316 4.06949 3.05808C3.75398 3.67281 3.50921 4.32133 3.33986 4.99122V4.99122ZM6.73978 13.7919C5.81591 13.1139 5.16705 12.126 4.91195 11.0088H6.73978V13.7919ZM6.73978 9.50439H4.5885C4.44814 8.50637 4.44814 7.49363 4.5885 6.49561H6.73978V9.50439ZM6.73978 4.99122H4.91195C5.16705 3.87404 5.81591 2.88607 6.73978 2.2081V4.99122ZM12.6972 4.99122H11.6441C11.4675 4.32038 11.2152 3.67183 10.8919 3.05808C11.6296 3.5606 12.2462 4.22093 12.6972 4.99122ZM8.24417 2.2081C9.16804 2.88607 9.81689 3.87404 10.072 4.99122H8.24417V2.2081ZM8.24417 13.7919V11.0088H10.072C9.81689 12.126 9.16804 13.1139 8.24417 13.7919V13.7919ZM10.3954 9.50439H8.24417V6.49561H10.3954C10.5358 7.49363 10.5358 8.50637 10.3954 9.50439ZM10.9145 12.9419C11.2377 12.3282 11.4901 11.6796 11.6666 11.0088H12.7197C12.2688 11.7791 11.6521 12.4394 10.9145 12.9419ZM13.314 9.50439H11.9149C11.976 9.00528 12.0062 8.50285 12.0051 8C12.006 7.49716 11.9758 6.99475 11.9149 6.49561H13.314C13.5748 7.48158 13.5748 8.51842 13.314 9.50439Z" fill="#FEB73A" />
                            </svg>

                            <h4 class="mr-10 ml-10 yellow">運送地區: 台灣
                            </h4>
                            <div class="star-svg">
                                <svg width="6" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1427_26206)">
                                        <path d="M1.2498 15.001C0.929961 15.001 0.609961 14.8789 0.366211 14.6348C-0.12207 14.1465 -0.12207 13.3555 0.366211 12.8672L5.73418 7.50097L0.366211 2.13379C-0.12207 1.64551 -0.12207 0.854492 0.366211 0.366211C0.854492 -0.12207 1.64551 -0.12207 2.13379 0.366211L8.38379 6.61621C8.87207 7.10449 8.87207 7.8955 8.38379 8.38379L2.13379 14.6338C1.88965 14.8799 1.56973 15.001 1.2498 15.001Z" fill="#FEB73A" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1427_26206">
                                            <rect width="8.75" height="15.001" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- 上一步 + 下一步按鈕 -->
                    <div class="w-30 d-flex justify-end">
                        <a href="./order_delivery.php">
                            <button class="prev_btn_3w">上一步</button>
                        </a>
                        <a class="ml-20" href="./order_finish.php">
                            <button class="btn_2w">結帳</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>

        <script src="./js/Nav.js"></script>

        <script src="./js/order_pay.js"></script>

</body>

</html>