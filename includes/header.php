<?php 
    include "components/db.php";
    include "setting/language.php";
    
?>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/olx-demo.css">


<header id="header-container">
            <div class="navi">
                <div class="wrapper clr rel">

                    <div class="col-md-3">
                        <div class="logo">
                            <img src="assets/img/logo-light.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="l" type="checkbox">
                        
                        <div class="lang-selector small">
                            <ul class="breaklist inlblk">
                                <li class="inlblk">
                                    <span class="x-normal">
                                    
                                     <a href="?lang=ru">рус</a>
                                    </span>
                                </li>
                                <li class="inlblk">
                                    <a class="x-normal" id="changeLang"
                                    <a href="?lang=kz">каз</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="userbox fright marginleft10">
                            <li class="hidden inlblk nowrap rel vtop" id="observed-counter">
                                <a href="https://www.olx.kz/favorites/" class="tdnone inlblk hidden"
                                    id="observed-ads-link" title="Избранные">
                                    <i data-icon="star"></i>
                                    <strong class="counter" data-cy="common_text_header_observed_ads_counter"></strong>
                                </a>
                                <a href="https://www.olx.kz/favorites/search/" class="tdnone inlblk "
                                    id="observed-search-link" title="Избранные"
                                    data-cy="common_button_observed_searches">
                                    <i data-icon="star"></i>
                                    <strong class="counter"></strong>
                                </a>
                            </li>
                            <li class="inlblk nowrap vtop noslash " id="my-account-link">
                                <div class="inlblk rel">
                                    <a href="self_advert.php" class="userbox-login tdnone"
                                        id="topLoginLink">
                                        <i data-icon="account"></i>
                                        <span class="link inlblk" data-cy="common_link_header_myaccount">
                                            <strong><?=$L['profile']?></strong>
                                        </span>
                                    </a>

                                </div>
                            </li>
                        </ul>

                        <a id="postNewAdLink" data-cy="common_link_header_postnewad" class="postnewlink fbold tdnone"
                            href="advert.php">
                            <span><?=$L['advert']?></span>
                        </a>
                    </div>

                </div>
            </div>
        </header>

        <script>
        document.getElementsByClassName('l')[0].onclick = function () {

            if (localStorage.getItem('toogle')) {
                if (localStorage.getItem('toogle') == 'dark') {
                    LightOrDark('light')
                    localStorage.setItem('toogle', 'light');
                } else {
                    LightOrDark('dark')
                    localStorage.setItem('toogle', 'dark');
                }
            } else {
                localStorage.setItem('toogle', 'light');
                LightOrDark('light')
            }

        }

        function LightOrDark(color) {
            if (color == 'dark') {
                document.documentElement.style.setProperty('--color-bg', '#233447');
               
                document.documentElement.style.setProperty('--color-font', 'black');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
                
            } else {
                document.documentElement.style.setProperty('--color-bg', '#386caa');
               
                document.documentElement.style.setProperty('--color-font', 'white');
                document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
               
            }
        }

        LightOrDark(localStorage.getItem('toogle'));
    </script>

