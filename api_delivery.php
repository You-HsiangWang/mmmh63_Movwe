<?php

// require './parts/movwe_connect_db.php';
session_start();

// $output = [
//     'getmycoupondetail' => false,
//     'code' => 0,
//     'error' => '',
// ];

if(! empty($_GET['memberName'])){
    $_SESSION['deliveryInfo'] = $_GET;
    $output['sessse'] = $_SESSION;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);