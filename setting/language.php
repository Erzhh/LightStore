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
            'aDvert' => 'Lightstore-ға хабарландыру беру',
            'TITle' => 'Тақырыбы',
            'PHOTos' => 'Суреттер',
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
            'aDvert' => 'Подать объявление на Light Store',
            'TITle' => 'Заголовок',
            'PHOTos' => 'Фотографии',
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
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>