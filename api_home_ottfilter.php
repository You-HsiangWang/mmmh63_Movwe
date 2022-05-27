<?php 

require './parts/movwe_connect_db.php';

$output = [
    'filtsuccess' => false,
    'code' => 0,
];

// 判斷是否有拿到參數
$fOtt = is_array($_GET['f_ott']) ? $_GET['f_ott'] : 0;
$fGenre = isset($_GET['f_genre']) ? $_GET['f_genre'] : 0;
$fPlace = isset($_GET['f_place']) ? $_GET['f_place'] : 0;
$fStyle = isset($_GET['f_style']) ? $_GET['f_style'] : 0;




// echo json_encode($fOtt);
