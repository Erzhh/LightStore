<?php include "includes/head.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <link rel="stylesheet" href="assets/css/aa.css">

    <link href="assets/font/css/icons.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <?php include "includes/header.php";?>

        <h2 style="margin-top:130px "><?=$L['izbrannoe']?></h2>      
        <button class="ds"><?=$L['Dizbrannoe']?></button>
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
                            <button class="fas fa-heart bn1"> </button>
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
    </div>
    <script>
        document.getElementsByClassName('btn1')[0].onclick = function () {
            var all_div = document.getElementsByClassName('c1')
            console.log(all_div)
            for (i = 0; i < all_div.length; i++) {
                all_div[i].classList.toggle('g1')
            }
        }

        // function bekaaa(){
        //         if(window.innerWidth<600){
        //             window.location.href = 'mobile.php'
        //         }   
        //     }
        //     window.onresize = function(){
        //         bekaaa()           
        //     }
        //     bekaaa()
        //localStorage.setItem('toogle', 'dark');
    </script>
    <script src="assets/js/dark_light.js"></script>
</html>
</body>