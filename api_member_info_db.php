<?php
require './parts/movwe_connect_db.php';

// MAKE SURE GET NN II OR NOT
$name = isset($_POST['nn']) ? trim($_POST['nn']) : '' ;
$infoo = isset($_POST['ii']) ? trim($_POST['ii']) : '' ;

// $getmeminfo = "SELECT * FROM `member` WHERE `member_sid` = 1 " ;
$savechange = "UPDATE `member` SET`member_nickname`=?,`member_info`=? WHERE `member_sid` = 1";
$stmt = $pdo->prepare($savechange);
$stmt->execute([$name, $infoo]);

echo 'okok';

?>