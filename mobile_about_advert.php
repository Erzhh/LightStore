<?php 
    include "setting/language.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mobile_advert.css">
    <link rel="stylesheet" href="assets/font/css/all.min.css">
    <title>mobile_about_advert</title>
</head>
<body>
    
    <div class="header112">
        <a href="mobile.php">
                    <i class="fas fa-angle-left"></i>
        </a>
        <div class="change1">
                <i class="fas fa-star-half-alt"></i>
                
                <!-- смена режима -->              
            </div>
    </div>

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
            <div class="bektradeviews"><?=$L['views']?>:1972</div>
            <div class="bektr">Велосипед. цена оканчательная</div>
            <div class="bektrade">78000 тг </div>
            <div class="bekdescription"> <?=$L['description']?> <button onclick="bekdescription1()"><i class="fas fa-angle-down"></i> 
               <!-- style="vertical-align: middle">--></button></p></button> </div>  
            
            <div class="bekdescription1"> 
                Велосипед новый цена оканчательная dwdwdwdwwdscd fdfe dce ced  dwcedf ecd  wde cew dw sc e d cedfe  cefefef edwds  ws wd w ws  wdwdwdwd w dwdwdwdw </div>
            <script>
                var turn = 0;
                    function bekdescription1(){
                
                        if(turn ==0){
                            turn = 1;
                            document.getElementsByClassName('bekdescription1')[0].style.height='max-content';
                
                
                        }
                
                        else if(turn == 1){
                            turn = 0
                            document.getElementsByClassName('bekdescription1')[0].style.height='15px';
                        }
                    }
                
                
                
                </script>
                
            
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

            
        </div>

        

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

    <div class="bektradehistory">
        <div class="bektradehistory1">Добавлено в 27.02.21</div>
        <div class="bektradeid">id:27783748</div>
    </div>
    
    <div class="bektelmess">
        <div class="bektel"><?=$L['tell']?></div>
        <div class="bekmess"><?=$L['mess']?></div>
    </div>
    
</div>




<script>

document.getElementsByClassName('change1')[0].onclick = function(){
            
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
                document.documentElement.style.setProperty('--color-bg', '#233547');
                document.documentElement.style.setProperty('--color-bg2', '#232526');
                document.documentElement.style.setProperty('--color-font', 'white');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
            }
            else{
                document.documentElement.style.setProperty('--color-bg', '#386caa');
                document.documentElement.style.setProperty('--color-bg2', 'white');
                document.documentElement.style.setProperty('--color-font', 'black');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
            }
        }


function bekaaa(){
                if(window.innerWidth>600){
                    window.location.href = 'about_advert.php'

                }   
            }

            window.onresize = function(){
                bekaaa()           
            }

            bekaaa()
// </script>





</body>
</html>