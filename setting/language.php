<?php   
    session_start(); 
    
    if(isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
        //                     kz | ru
    }
    $Lang = [ 
        'kz'=>[
            'profile' => 'Менің профилім',
            'advert' => 'объявение жарнамалау',
            'enter' => 'Кіру',
            'registration' => 'Тіркеу',
        ],

        'ru'=>[
            'profile' => ' Мой профиль',
            'advert' => 'Подать объявение',
            'enter' => 'Войти',
            'registration' => 'Регистрация',
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>