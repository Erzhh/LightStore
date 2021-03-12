<?php 
    include "setting/language.php";
?>
<?php include "includes/head.php";?>
<?php

    include "connect.php";

      $check_query = mysqli_query($c,"SELECT * FROM `view` WHERE `advert_id`='$_GET[advert_id]' and
      `ip_address`='$_SERVER[REMOTE_ADDR]'");

      if(!mysqli_num_rows($check_query)){
         mysqli_query($c , "INSERT INTO `view`(`advert_id`, `ip_address`) VALUES('$_GET[advert_id]','$_SERVER[REMOTE_ADDR]')");
       }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    
    <title>Document</title>
</head>
<body>
<div class="wrapper">
<section id="searchmain-container">
         <?php include "includes/header.php";?>


        <div class="bekasylobw">
                <div class="bekx"></div>
             <div class="bekasylobw1">

                <div class="bekimg">
                    <div class="bekimg1">
                        <img src="assets/img/вело.jpg" alt="">
                    </div>
                    <div class="bekbigimg">
                        <div class="bekbigimg1"></div>
                        <div class="bekbigimgxx"></div>
                        <div class="bekbigimg2">Большие фото</div>
                    </div>
                </div>

                <div class="bekxx2"></div>

               
                <div class="bekasyltrade">
                    <div class="bektr">Велосипед. цена оканчательная</div>                                                                         
                    <div class="bektrade">78000 тг </div>
                    <div class="bekdescription"><?=$L['description']?></div>
                    <div class="bekdescription1">Велосипед новый цена оканчательная</div>
                    <div class="bektradehistory">
                        <div class="bektradehistory1">Добавлено в 18:48,27 января 2021</div>
                        <div class="bektradeviews"> <?=$L['views']?> </div>
                        <div class="bektradeid">Номер объявления:27783748</div>
                    </div>
                </div>

            </div>


            <div class="bekxx"></div>

            <div class="bekusermap">
                <div class="bekuser">
                    
                    <div class="bekuser1"> <?=$L['user']?> </div>

                    <div class="userbek">
                        <div class="bekimguser">
                            <img src="assets/img/user.png" alt="">
                        </div>
                        <div class="bekadnik">
                        <div class="beknik">Бекасыл</div>
                        <div class="bekaduser"><?=$L['aduser']?></div>
                        </div>
                    </div>

                    <div class="bektelmess">
                        <div class="bektel"><?=$L['tell']?></div>
                        <div class="bekmess"><?=$L['mess']?></div>
                    </div>
                </div>

                <div class="bek1x"></div>

                <div class="bekmap1">
                    <div class="bekadd"><?=$L['add']?></div>
                    <div class="bekmapadd">
                    <?=$L['mapadd']?>

                    </div>
                    <div class="bekmap">
                        <img src="assets/img/карта-шымкента.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>

            <div class="bekx"></div>
        </div>

        <div class="bek1x"></div>


       
  </session>  
</div>
  <script src="assets/js/dark_light.js"></script>
       
        <script>



            

            // console.log( window.innerWidth )
             
                    
            
           

            function bekaaa(){
                if(window.innerWidth<600){
                    window.location.href = 'mobile_about_advert.php'

                }   
            }

            window.onresize = function(){
                bekaaa()           
            }

            bekaaa()


        </script>

</body>
</html>