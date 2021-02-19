<?php
    include "setting/language.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Light Store</title>    
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/form.css">

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
    <div class="nik_main">
        <h1><?=$L['aDvert']?></h1>
        <div class="nik_title div">
            <h2><?=$L['TITle']?></h2><br>

            <label for="ad_title"><?=$L['TITle']?>*</label><br>
            <input class="tit" type="text" id="ad_title"><br>

           
            <div id="ad.category">
                <label for="ad_сategory">Рубрика*</label>
                <!-- <div class="chooseC">
                    
                </div> -->
            </div>

        </div>


        <div class="nik_location div">
            <h2>Местоположение</h2>

            <label for="ad_city">Город*</label><br>
            <select class="opt" id="ad_city">
                    <option>Astana</option>
                    <option>Almaty</option>
                    <option>Shymkent</option>
                    <option>Qaraǵandy</option>
                    <option>Aqtóbe</option>
                    <option>Taraz</option>
                </select>
        </div>


        <div class="nik_price  div">
            <h2>Цена</h2>
            <div class="rrr">
                <div class="radio" onclick="free()">
                    <p>Бесплатно</p>
                    <input class="r r1" type="radio" id="ad_cost1" name="da">
                </div> 
                <div class="radio" onclick="exchange()">
                    <p>Обмен</p>
                    <input class="r r2" type="radio" id="ad_cost2" name="da">
                </div>
                <div class="radio" onclick="price()">
                    <p>Цена</p>
                    <input class="r r3" type="radio" id="ad_cost3" name="da"><br>    
                </div>
            </div>

            <input class="cost" type="text"><br>

            <div class="contract">
                <h2>Договорная</h2>
                <div class="slideTwo">	
                    <input type="checkbox" value="None" id="slideTwo" name="check" style="display: none;" />
                    <label for="slideTwo"></label>
                </div>
            </div>

        </div>



        <div class="nik_discription  div">
            <h2>Описание</h2>

            <label for="ad_text">Описание*</label><br>
            <textarea class="text" id="ad_text"></textarea>
        </div>


        <div class="nik_images  div">
            <h2><?=$L['PHOTos']?></h2>

            <label for="ad_img"><?=$L['PHOTos']?>*</label><br>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="inputfile">    
            <div class="example-1">
                <div class="form-group">
                    <label class="label">
                        <i class="material-icons">attach_file</i>
                        <span class="title">Добавить файл</span>
                        <input type="file">
                    </label>
                </div>
            </div>

        </div>    
            
        </div>


        <div class="nik_doIt  div">
            <button><h2>Опубликовать</h2></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>

        function free(){
            document.getElementsByClassName('radio')[0].style.backgroundColor='#FCFF00';
            document.getElementsByClassName('radio')[1].style.backgroundColor='';
            document.getElementsByClassName('radio')[2].style.backgroundColor='';
            document.getElementsByClassName('cost')[0].style.display = 'none';
            document.getElementsByClassName('contract')[0].style.display = 'none';
        }
        function exchange(){
            document.getElementsByClassName('radio')[0].style.backgroundColor='';
            document.getElementsByClassName('radio')[1].style.backgroundColor='#FCFF00';
            document.getElementsByClassName('radio')[2].style.backgroundColor='';
            document.getElementsByClassName('cost')[0].style.display = 'none';
            document.getElementsByClassName('contract')[0].style.display = 'none';
        }
        function price(){
            document.getElementsByClassName('radio')[0].style.backgroundColor='';
            document.getElementsByClassName('radio')[1].style.backgroundColor='';
            document.getElementsByClassName('radio')[2].style.backgroundColor='#FCFF00';
            document.getElementsByClassName('cost')[0].style.display = 'block';
            document.getElementsByClassName('contract')[0].style.display = 'flex';
        }

    </script>
    <script>

        var toggle;

        document.getElementsByClassName('toggle12')[0].onclick = function(){
            
            if(!toggle){
                document.documentElement.style.setProperty('--color-bg', 'white');
                document.documentElement.style.setProperty('--color-bg2', 'black');
                document.documentElement.style.setProperty('--color-font', 'black');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
                document.documentElement.style.setProperty('--color-bgD', '#333333');
            }
            else{
                document.documentElement.style.setProperty('--color-bg', 'black');
                document.documentElement.style.setProperty('--color-bg2', 'white');
                document.documentElement.style.setProperty('--color-font', 'white');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
                document.documentElement.style.setProperty('--color-bgD', 'white');
            }
            toggle = !toggle
        }

    </script>

</body>
</html>