<?php

require './parts/movwe_connect_db.php';
// $pageName = 'login';
$title = 'Movwe-發文成功';

?>

<?php include __DIR__ . '/parts/movwe_head.php' ?>

<link rel="stylesheet" href="./css/mystyle.css">
<link rel="stylesheet" href="./css/forum_article.css">

</head>

<body>
    <?php include __DIR__ . '/parts/movwe_nav_fin.php' ?>
    <div class="layout">

        <?php include __DIR__ . '/parts/movwe_nav_leftdiv.php' ?>

        <div class="container" style="width: 70%; margin: auto;">
            <!--text__container------內容放這邊------------->
            <div class="text__container d-flex justify-between" style="flex-direction: column;">
                <div class="btn-bottom">
                    <button class="btn_4w btn-preview mt-10" onclick="gobackforum()">回到文章首頁</button>
                </div>
            </div>

            <?php include __DIR__ . '/parts/movwe_footer.php' ?>
        </div>

        <script src="./js/Nav.js"></script>
        <script>
            function gobackforum(){
                location.href = './forum_n.php';
            };
        </script>
</body>


</body>