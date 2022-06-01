<?php

// require './parts/movwe_connect_db.php';
session_start();

// $output = [
//     'getmycoupondetail' => false,
//     'code' => 0,
//     'error' => '',
// ];

if(! empty($_GET['ProductName'])){
    $_SESSION['cart'] = $_GET;
    $output['sess'] = $_SESSION;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);