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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>index.html</title>
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
            <a href="aa.php">
            <i class="far fa-heart" ></i>
</a>
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


    <div class="bekax"></div>
    <div class="bekaobw">
        <div class="bekaSearch">
            <div class="bekaSearch1">
                <input type="poisk" placeholder="Поиск" class="bekasearch"></input>

            </div>

            <div class="bekaregion">
                <select class="opt" id="ad_city">
                    <option>Astana</option>
                    <option>Almaty</option>
                    <option>Shymkent</option>
                    <option>Qaraǵandy</option>
                    <option>Aqtóbe</option>
                    <option>Taraz</option>
                </select>
            </div>
            <div class="bekafind"><button><?=$L['find']?></button></div>
        </div>

        <div class="bekaadvert">
            <div class="glav_slider">
                <div class="slider2">
                    <div class="sli"></div>
                    <div class="sli"></div>
                    <div class="sli"></div>
                    <div class="sli"></div>
                    <button class ="btn_send">send</button>
                </div>
            </div>
        </div>


        <div class="bekaVipAd">
        <?=$L['vipad']?>
        </div>


        <div class="bekaAd">
            <div class="bekaAdImg"><img src="assets/img/вело.jpg" alt=""></div>
              
                <div class="bekaTitle">
                    <a href="about_advert.php">Велосипед</a>
                    <div class="bekaTime">25.03.2021</div>
                    <div class="bekaPrice"></div>
                </div>
                
            
                
        </div>

        <div class="bekaAd">
            <div class="bekaAdImg"><img src="assets/img/вело.jpg" alt=""></div>
              
                <div class="bekaTitle">
                    <a href="about_advert.php">Велосипед</a>
                    <div class="bekaTime">25.03.2021</div>
                    <div class="bekaPrice"></div>
                </div>
                
            
                
        </div>
        <div class="bekaAd">
            <div class="bekaAdImg"><img src="assets/img/вело.jpg" alt=""></div>
              
                <div class="bekaTitle">
                    <a href="about_advert.php">Велосипед</a>
                    <div class="bekaTime">25.03.2021</div>
                    <div class="bekaPrice"></div>
                </div>
                
            
                
        </div>
        <div class="bekaAd">
            <div class="bekaAdImg"><img src="assets/img/вело.jpg" alt=""></div>
              
                <div class="bekaTitle">
                    <a href="about_advert.php">Велосипед</a>
                    <div class="bekaTime">25.03.2021</div>
                    <div class="bekaPrice"></div>
                </div>
                
            
                
        </div>



        <div class="headerxx">
            Мобильные приложения<br>
            Помощь и Обратная связь<br>
            Платные услуги<br>
            Реклама на сайте<br>
            Сотрудничество<br>
            Блог OLX<br>
            Условия использования<br>
            Политика конфиденциальности
        </div>
    </div>

    <div class="bekax"></div>

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

        LightOrDark(localStorage.getItem('toogle'));

        // function bekaaa(){
        //         if(window.innerWidth<600){
        //             window.location.href = 'mobile.php'

        //         }   
        //     }
        //     window.onresize = function(){
        //         bekaaa()           
        //     }

        //     bekaaa()

        //     console.log( localStorage.getItem('toogle') );
        //     //localStorage.setItem('toogle', 'dark');

    </script>
    <script src = "assets/js/slider.js"></script> 
</body>

</html>