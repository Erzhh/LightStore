<?php 
include "setting/language.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    <link rel="stylesheet" href="assets/css/sait.css">
    <?php include "includes/head.php";?>
    <title>:D</title>
    
</head>
<body>   
<div class="wrapper">
         <?php include "includes/header.php";?>
       <div class="kas1">
        <div class="kas2"></div>
            <h2 class="kas_h2"><?=$L['advert_j']?></h2>
                <ul class = "kas_ul">
                        <li class="kas_li"><?=$L['advert_j']?></li>
                            <li class="kas_li f1">
                                    
                                    <a class="kas_a" href="setting.php"><?=$L['settings']?></a>
                            </li>
                </ul>
                
                <div  class="btn1"> <i class="fas fa-bars"></i></div>
   
    <div class="kas3">
        <div class="tt">
            
        </div>
        <div class="kas4">
                    <div class="kas_ob " id="kas_ob">
                                    <img src="assets/img/iphone.jpg" alt="" class="kas_img i1">
                            <div class="kas_op">
                                <p class="kas_h3"><?=$L['iPhone_description'] ?></p>
                                <p class="kas_p">0тг</p>
                                <p class="kas_p"><?= $L['Street'] ?></p>
                            </div>
                    </div>

                    <div class="kas_ob" id="kas_ob">
                        <img src="assets/img/iphone.jpg" alt="" class="kas_img i1">
                        <div class="kas_op">
                            <p class="kas_h3"><?=$L['iPhone_description'] ?></p>
                            <p class="kas_p">0тг</p>
                            <p class="kas_p"><?= $L['Street'] ?></p>
                        </div>
</div>
        </div>
        
    </div>
    <script src="assets/js/dark_light.js"></script>
<div class="wrapper">
</body> 
</html>