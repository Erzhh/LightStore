<?php 
    include "setting/language.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/font/css/icons.css">


<link rel="stylesheet" href="assets/css/aa.css">

<link href="assets/font/css/icons.css" rel="stylesheet">
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











<h2 style="margin-top:70px "><?=$L['izbrannoe']?></h2>



<button class="ds">Очистить избранные</button>

<div class="ss">

<!-- <div class="ddd"></div> -->
    <!-- <p class="sad">Вид списка:</p> -->
     <div class="dsf">
    <i class="fas fa-bars btn1"></i>
     </div>
        
   
    
     


</div>


<div class="sdsd">


<div class="sss">
    
<div class="c1">

<div class="k2"></div>
<div class="c3"> 
  
    <p>компьютер</p>
    <p>100000тг</p>
    <p>Шымкент</p>
    <div class="d1"></div> 
    <div class="b1">
    <button class="fas fa-heart bn1">  </button>
    </div>
</div>
    

    


                 </div>
                 <div class="c1">
        <div class="c2"></div>    
        <div class="c3">
            <p>процессор</p>
             <p>300000тг</p>
             <p>Шымкент</p>
             <div class="d2"></div>
             <div class="b2">
             <button class="fas fa-heart bn2"> </button>
             </div>
        </div>
        
        
        
</div>
                </div>





</div>
<script>
    document.getElementsByClassName('btn1')[0].onclick = function(){
    var all_div = document.getElementsByClassName('c1')
    console.log(all_div)
    for(i=0; i<all_div.length; i++ ){
        all_div[i].classList.toggle('g1')
    }
}

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
            }
            else{
                document.documentElement.style.setProperty('--color-bg', 'black');
                document.documentElement.style.setProperty('--color-bg2', 'white');
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

            console.log( localStorage.getItem('toogle') );
            //localStorage.setItem('toogle', 'dark');

    </script>
</script>


    </html>
</body>
