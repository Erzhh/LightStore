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
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <div class="x"></div>
        <div class="logo">
            <div class="img"></div>
          <a3>
          </a3>
        </div>
        <div class="xx">
            
            
        </div>
      <div class="ob">
          <div class="toggle12">
        <input class="l" type="checkbox">
          </div>
          <a href="?lang=kz">каз</a>
          <a href="?lang=ru">рус</a>
        <div class="bikchosen1">
            <i class="far fa-heart"></i>
            
        </div>
        <div class="profile">
            <i class="far fa-user"></i>
            <?=$L['profile']?>
        </div>
        <div class="post">
          <div class="post1">
          <?=$L['advert']?>
          </div>
        </div>
      </div>
        <div class="x"></div>
    </header>



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


       
    
        <script>

document.getElementsByClassName('l')[0].onclick = function(){
            
            if(localStorage.getItem('toogle')){
                if(localStorage.getItem('toogle')=='dark'){
                    LightOrDark('light')
                    localStorage.setItem('toogle','light');
                }
                else{
                    LightOrDark('dark')
                    localStorage.setItem('toogle','dark');
                }
            }
            else{
                localStorage.setItem('toogle','light');
                LightOrDark('light')
            }
           
        }


function LightOrDark(color){
            if(color == 'dark'){
                document.documentElement.style.setProperty('--color-bg', '#454545');
                document.documentElement.style.setProperty('--color-bg2', '#202020');
                document.documentElement.style.setProperty('--color-font', 'black');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
            }
            else{
                document.documentElement.style.setProperty('--color-bg', '#9b9b9b');
                document.documentElement.style.setProperty('--color-bg2', '#bcbcbc');
                document.documentElement.style.setProperty('--color-font', 'white');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
            }
        }

            

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