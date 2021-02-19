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
            'change_password' => 'Парольді ауыстыру',
            'old_password' => 'Бұрынғы пароль',
            'current_password' => 'Қазіргі пароль',
            'change_data' => 'Байланыс деректерін өзгерту',
            'select_city' => 'Қаланды тандау',
            'contacts' => 'Байланыс',
            'phone' => 'Телефон номері',
            'save' => 'Сақтау'
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
            'save' => 'Сохранить'
        ],

    ];

    $L = $Lang[$_SESSION['lang']];
  
?>