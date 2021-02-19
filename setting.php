<?php 
include "setting/language.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/setting.css">
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
        <a href ="?lang=kz" class = "a_class a1" style = "text-decoration: none;">каз</a>
        <a href ="?lang=ru" class = "a_class a2">рус</a>
        <div class="profile"><?=$L['profile']?></div>
        <div class="post">
          <div class="post1"><?=$L['advert']?></div>
        </div>
      </div>
        <div class="x"></div>
    </header>
    <div class="kas1">
        <div class="kas2"></div>
        <h2 class="kas_h2"><?=$L['settings']?></h2>
        <ul class="kas_ul">
            <li class="kas_li"><?=$L['settings']?></li>
            <li class="kas_li f1">
                <a class="kas_a" href="self_advert.php"><?=$L['advert_j']?></a>
            </li>
        </ul>
    </div>
    <div class="kas3">
        <div class="kas_div1">
            <div class="kas_d1">
                <div class="kas_span_div">
                    <div class="kas_sp"></div>
                    <span class="kas_span"><?= $L['change_password'] ?></span>
                </div>
            </div>

            <div class="kas_password_glav_div">
                <div class="kas_pass_k1">
                    <div class="kas_password_div">
                        <span class="span_class_pass"><?= $L['old_password']?></span>
                        <input type="text" class="kas_password_input">
                    </div>
                    <div class="kas_password_div">
                        <span class="span_class_pass"><?= $L['current_password']?></span>
                        <input type="text" class="kas_password_input">
                    </div>
                    <button class="kas_btn_password"><?= $L['change_password'] ?></button>
                </div>

            </div>
            <div class="kas_d1">
                <div class="kas_span_div">
                    <div class="kas_sp"></div>
                    <span class="kas_span"><?=$L['change_data'] ?></span>
                    
                </div>
            </div>
            
            <div class="kas_password_glav_div">
                <div class="kas_pass_k1">
                    <div class="kas_password_div">
                        <span class="span_class_pass"><?=$L['select_city'] ?></span>
                        <input type="text" class="kas_password_input i1">

                    </div>
                    <hr class="kas_hr1">
                    <div class="kas_password_div">
                        <span class="span_class_pass"><?=$L['contacts'] ?></span>
                        <input type="text" class="kas_password_input">
                    </div>
                    <div class="kas_password_div">
                        <span class="span_class_pass"><?=$L['phone'] ?></span>
                        <input type="text" class="kas_password_input">
                    </div>
                    <button class="kas_btn_password"><?=$L['save'] ?></button>
                </div>
            </div>




            <div class="kas_d1"> </div>
  
        </div>
    </div>
    <script src="assets/js/nast.js"></script>
</body>

</html>
<?php   
    session_start(); 
    
    if(isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
        //                     kz | ru
    }
    $Lang = [ 
        'kz'=>[
            'profile' => 'Менің профилім',
            'advert' => 'объявление жарнамалау',
            'enter' => 'Кіру',
            'registration' => 'Тіркеу',
            'advert_j' => 'Жарнама',
            'settings' => 'Параметірлер',
            'iPhone_description' => 'Тегін iPhone',
            'Street' => 'Шымкент, Абай көшесі',
            'change_password' => 'Парольді ауыстыру'
        ],

        'ru'=>[
            'profile' => ' Мой профиль',
            'advert' => 'Подать объявение',
            'enter' => 'Войти',
            'registration' => 'Регистрация',
            'advert_j' => 'Объявление',
            'settings' => 'Настройки',
            'iPhone_description' => 'Халявный айфон даром',
            'Street' => 'Шымкент, Абайский район',
            'change_password' => 'Изменить пароль'
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>