<?php   
    session_start(); 
    
    if(isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
        //                     kz | ru
    }
    else{
        $_SESSION['lang']= 'ru';
    }
    $Lang = [ 
        'kz'=>[
            'profile' => 'Менің профилім',
            'advert' => 'объявение жарнамалау',
            'vipad' => 'Vip-жарнама',
            'find' => 'Табу',
            'user' => 'Тұтынушы',
            'mess' => 'Авторға жазу',
            'tell' => 'Телефонды көрсету',
            'add' => 'Нақты адрес',
            'mapadd' => 'Шымкент <br> Түркістан облысы',
            'aduser' => 'Автордың басқа жарнамалары ',
            'description' => 'Описание',
            'views' => 'Просмотры',
            
            'enter' => 'Кіру',
            'registration' => 'Тіркеу',
<<<<<<< HEAD

=======
>>>>>>> c3c1b3f03d76ccee4dc5f06ced33c1d9349c7828
            'mp' => 'мобильді қосымшалар',
           'nick' => 'сіздің ағымдағы Nick',
           'email' => 'Email жазыңыз',
            'password' => 'Сіздің ағымдағы Light Store пароліңіз',
            'nickr' => 'Nick ойлап табыңыз',
            'phone' => 'Телефон нөмірі',
            'passwordr' => 'Пароль ойлап табыңыз және',
            'aDvert' => 'Lightstore-ға хабарландыру беру',
            'TITle' => 'Тақырыбы',
            'PHOTos' => 'Суреттер',
<<<<<<< HEAD
            'CATEGory' => 'Айдар',
            'LOCation' => 'Местоположение',
            'CIty' => 'Қаласы',
            'COst' => 'Бағасы',
            'FRee' => 'Тегін',
            'EXCHange' => 'Алмасу',
            'CONTract' => 'Шарттық',
            'DISCription' => 'Сипаттамасы',
            'PUBLik' => 'Жариялау',
            'FIle' => 'Файлды қосу',
=======
>>>>>>> c3c1b3f03d76ccee4dc5f06ced33c1d9349c7828
        ],

        'ru'=>[
            'profile' => ' Мой профиль',
            'advert' => 'Подать объявение',           
            'vipad' => 'Vip-объявление',
            'find' => 'Найти',
            'user' => 'пользователь',
            'mess' => 'Написать автору',
            'tell' => 'Показть телефон',
            'add' => 'Точный адрес',
            'mapadd' => 'Шымкент <br> Туркестанская область ',
            'aduser' => 'Другие объявления автора',
            'description' => 'Описание',
            'views' => 'Просмотры',

            'advert' => 'Подать объявение',
            'enter' => 'Войти',
            'registration' => 'Регистрация',
            'mp' => 'мобильные приложения',
<<<<<<< HEAD

=======
>>>>>>> c3c1b3f03d76ccee4dc5f06ced33c1d9349c7828
            'nick' => 'Ваш текущий Nick',
            'email' => 'Впишите ваш Email',
            'password' => 'Ваш текущий пороль от Light Store',
            'nickr' => 'Придумайте Nick',
            'phone' => 'Номер телефона',
            'passwordr' => 'Придумайте пороль',
           
            'aDvert' => 'Подать объявление на Light Store',
            'TITle' => 'Заголовок',
            'PHOTos' => 'Фотографии',
<<<<<<< HEAD
            'CATEGory' => 'Рубрика',
            'LOCation' => 'Местоположение',
            'CIty' => 'Город',
            'COst' => 'Цена',
            'FRee' => 'Бесплатно',
            'EXCHange' => 'Обмен',
            'CONTract' => 'Договорная',
            'DISCription' => 'Описание',
            'PUBLik' => 'Опубликовать',
            'FIle' => 'Добавить файл',

=======
>>>>>>> c3c1b3f03d76ccee4dc5f06ced33c1d9349c7828
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>