<?php

// require './parts/movwe_connect_db.php';
session_start();

// $output = [
//     'getmycoupondetail' => false,
//     'code' => 0,
//     'error' => '',
// ];
//  $_SESSION = null;

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if(! empty($_GET['ProductName'])){
    // $_SESSION['cart'] = $_GET; //取得問號(?)後面所有東西 
    array_push($_SESSION['cart'], $_GET);

    
    // $output['sess'] = $_SESSION;
}
echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE); //單純做印出


//$_SESSION = "apple";
//$_SESSION = "banana";

// echo $_SESSION;

//會被覆蓋

