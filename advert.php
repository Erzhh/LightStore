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


    <form method="POST">


    <div class="nik_main">
        <h1><?=$L['aDvert']?></h1>
        <div class="nik_title div">
            <h2><?=$L['TITle']?></h2><br>

            <label for="ad_title"><?=$L['TITle']?>*</label><br>
            <input class="tit" type="text" id="ad_title" name="title"><br>

           
            <div id="ad.category">
                <label for="ad_сategory"><?=$L['CATEGory']?>*</label>
                <!-- <div class="chooseC">
                    
                </div> -->
            </div>

        </div>


        <div class="nik_location div">
            <h2><?=$L['LOCation']?></h2>

            <label for="ad_city"><?=$L['CIty']?>*</label><br>
            <select class="opt" id="ad_city" name="location">
                    <option>Astana</option>
                    <option>Almaty</option>
                    <option>Shymkent</option>
                    <option>Qaraǵandy</option>
                    <option>Aqtóbe</option>
                    <option>Taraz</option>
                </select>
        </div>


        <div class="nik_price  div">
            <h2><?=$L['COst']?></h2>
            <div class="rrr">
                <div class="radio" onclick="free()">
                    <p><?=$L['FRee']?></p>
                    <input class="r r1" type="radio" id="ad_cost1" name="da">
                </div> 
                <div class="radio" onclick="exchange()">
                    <p><?=$L['EXCHange']?></p>
                    <input class="r r2" type="radio" id="ad_cost2" name="da">
                </div>
                <div class="radio" onclick="price()">
                    <p><?=$L['COst']?></p>
                    <input class="r r3" type="radio" id="ad_cost3" name="da"><br>    
                </div>
            </div>

            <input class="cost" type="text" name="price"><br>

            <div class="contract">
                <h2><?=$L['CONTract']?></h2>
                <div class="slideTwo">	
                    <input type="checkbox" value="None" id="slideTwo" name="check" style="display: none;" />
                    <label for="slideTwo"></label>
                </div>
            </div>

        </div>



        <div class="nik_discription  div">
            <h2><?=$L['DISCription']?></h2>

            <label for="ad_text"><?=$L['DISCription']?>*</label><br>
            <textarea class="text" id="ad_text" name="discription"></textarea>
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
                        <span class="title"><?=$L['FIle']?></span>
                        <input type="file" name="images">
                    </label>
                </div>
            </div>

        </div>    
            
        </div>


        <div class="nik_doIt  div">
            <button><h2><?=$L['PUBLik']?></h2></button>
        </div>
    </div>

    </form>

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
        }

        LightOrDark(localStorage.getItem('toogle'));

        function bekaaa(){
                if(window.innerWidth<600){
                    window.location.href = 'mobile.php'

                }   
            }
            window.onresize = function(){
                bekaaa()           
            }

            bekaaa()

            console.log( localStorage.getItem('toogle') );
            //localStorage.setItem('toogle', 'dark');

    </script>



        <?php
          
          if(isset($_POST['title'])){
         $c = mysqli_connect('localhost', 'root' , 'root' , 'lightstore');
        mysqli_query( $c , "INSERT INTO `advert`(`description`,`title`,`price`,`images`,`city_id`); 
        VALUES ('$_POST[title]','$_POST[description]','$_POST[prise]','$_POST[images]','$_POST[location]')");
        }

        ?> 

</body>
</html>