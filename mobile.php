<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mobile_style.css">
    <link rel="stylesheet" href="assets/font/css/icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
    
        <div class="header12">
            <input type="bikpoisk" placeholder="Пойск" class="biksearch"></input>
        </div>

                <div class="bikadvert">
                    <img src="assets/img/iphone.jpg" alt="">
                </div>

                    <div class="bikVipAd">
                        <?=$L['vipad']?>
                    </div>
                    <div class="bikad">
                      <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                         <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                         <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                         <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                         <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                         <a href="mobile_about_advert.html">
                        <div class="bikAd1">
                            <div class="bikImg"><img src="assets/img/вело.jpg" alt=""></div>
                            <div class="bekTitle">Продается велосипед</div>
                            <div class="bikPrice">50000тг</div>
                            <div class="bikTime">13.01.21</div>
                        </div>
                      </a>
                    </div>

        <div class="bikHeaderx">
            <div class="bikhome">
                <i class="fas fa-home"></i>
                <p11>Главная</p11>
            </div>
            <div class="bikchosen">
                <i class="far fa-heart"></i>
                <p12>Избранные</p12>
            </div>
            <div class="bikCreate">
                <i class="fas fa-cart-plus"></i>
                <p13>Создать</p13>
            </div>
            <div class="bikprofile">
                <i class="far fa-user"></i>
                <p14>Профиль</p14>
            </div>
            
            <div class="change1">
                <i class="fas fa-star-half-alt"></i>
                <p15>L/d</p15>
                <!-- смена режима -->              
            </div>
        </div>


        <script>

            var toggle;
    
            document.getElementsByClassName('change1')[0].onclick = function(){
                
                if(!toggle){
                    document.documentElement.style.setProperty('--color-bg103', '#101010');
                    document.documentElement.style.setProperty('--color-bg104', '#272727');
                    document.documentElement.style.setProperty('--color-font', 'white');
                    ;
    
                }
                else{
                    document.documentElement.style.setProperty('--color-bg103', '#6e6e6e');
                    document.documentElement.style.setProperty('--color-bg104', '#bcbcbc');
                    document.documentElement.style.setProperty('--color-font', 'black');
                    
                
                }
                toggle = !toggle
            }
    


            

            function bekaaa(){
                if(window.innerWidth>600){
                    window.location.href = 'index.php'

                }   
            }

            window.onresize = function(){
                bekaaa()           
            }

            bekaaa()


        </script>
</body>
</html>