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
           'nick' => 'сіздің ағымдағы Nick',
           'email' => 'Email жазыңыз',
            'password' => 'Сіздің ағымдағы Light Store пароліңіз',
            'nickr' => 'Nick ойлап табыңыз',
            'phone' => 'Телефон нөмірі',
            'passwordr' => 'Пароль ойлап табыңыз және',
        ],

        'ru'=>[
            'profile' => ' Мой профиль',
            'advert' => 'Подать объявение',
            'enter' => 'Войти',
            'registration' => 'Регистрация',
            'nick' => 'Ваш текущий Nick',
            'email' => 'Впишите ваш Email',
            'password' => 'Ваш текущий пороль от Light Store',
            'nickr' => 'Придумайте Nick',
            'phone' => 'Номер телефона',
            'passwordr' => 'Придумайте пороль',
           
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>