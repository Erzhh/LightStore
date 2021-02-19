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
            'enter' => 'Кіру',
            'registration' => 'Тіркеу',
            'advert_j' => 'Жарнама',
            'settings' => 'Параметірлер',
            'iPhone_description' => 'Тегін iPhone',
            'Street' => 'Шымкент, Абай көшесі',
            'change_password' => 'Парольді ауыстыру',
            'old_password' => 'Бұрынғы пароль',
            'current_password' => 'Қазіргі пароль',
            'change_data' => 'Байланыс деректерін өзгерту',
            'select_city' => 'Қаланды тандау',
            'contacts' => 'Байланыс',
            'phone' => 'Телефон номері',
            'save' => 'Сақтау',
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
            'what'=>'не ?',
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
            'change_password' => 'Изменить пароль',
            'old_password' => 'Cтарый пароль',
            'current_password' => 'Текущий пароль*',
            'change_data' => 'Изменить контактные данные',
            'select_city' => 'Выбрать город',
            'contacts' => 'Контактное лицо',
            'phone' => 'Номер телефона',
            'save' => 'Сохранить',        
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
            'nick' => 'Ваш текущий Nick',
            'email' => 'Впишите ваш Email',
            'password' => 'Ваш текущий пороль от Light Store',
            'nickr' => 'Придумайте Nick',
            'phone' => 'Номер телефона',
            'passwordr' => 'Придумайте пороль',
           
            'aDvert' => 'Подать объявление на Light Store',
            'TITle' => 'Заголовок',
            'PHOTos' => 'Фотографии',
            'what'=>'что ?',

        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>