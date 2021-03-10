<?php include "includes/head.php";?>

</head>
<div class="wrapper">



<body class="homepage">

    <div id="innerLayout" class="index121">
        <div id="div-gpt-ad-listing-branding" class=""></div>
        <div id="div-gpt-ad-listing-branding-after" class=""></div>

        
        <section id="searchmain-container">
             <?php include "includes/header.php";?>
            <form class="searchmain" id="searchmain" method="POST">
                <div class="wrapper">
                    <fieldset>
                        <div class="fblock fquery fleft clr rel">
                            <div class="rel clr lheight16">
                                <div class="clearbox rel fleft input-container">
                                    <input autocomplete="off" type="text" defaultval="2 919 151 объявлений рядом"
                                        data-cy="homepage_input_textsearch"
                                        class="fleft ca2 light large queryfield defaultval with-x-clear-button autosuggest-input {suggesturl:'https://www.olx.kz/ajax/suggest/get/'}"
                                        id="headerSearch" value="" name="q">
                                    <a class="clear-input-button hidden" href="" data-icon="close"></a>
                                </div>
                                <i data-icon="search"></i>
                                <div id="autosuggest-div"></div>
                            </div>
                        </div>

                        <div class="fblock fleft fcity clr rel">
                            <div class="locationrequest  has-dist-picker" id="locationBox">
                                <div class="clr rel">
                                    <div class="rel fleft input-container">
                                       <select class = "select_city">
                                      <?php
                                      $query = mysqli_query($c,"SELECT * FROM `city`");
                                       while($fetch=mysqli_fetch_assoc($query)){
                                         echo " <option>$fetch[title_ru]</option>";
                                       }
                                       ?>  
                                       
                                       </select>
                                        <div class="cityfield" id="cityFieldGray">
                                            <span class="fbold vishid"></span><span class="color-9"> </span>
                                        </div>
                                        <a href="#" class="clear-input-button hidden" data-icon="close"></a>
                                        <div class="distanceseparator abs"></div>
                                        <i data-icon="location"></i>
                                      <div class="proposals hidden" id="proposalContainer">
                                            <div class="lastbox">
                                                <p>Недавно избранные:</p>
                                                <ul id="last-locations-ul">
                                                </ul>
                                            </div>
                                            <div class="abs categorySelectContainer">
                                                <ul class="categorySelectList regionsList">
                                                </ul>
                                            </div>
                                        </div>
                                        <input class="autosuggest-geo-input" type="hidden" name="search[city_id]"
                                            value="">
                                        <input class="autosuggest-geo-input-region" type="hidden"
                                            name="search[region_id]" value="">
                                        <input class="autosuggest-geo-district-input" type="hidden"
                                            name="search[district_id]" value="0">
                                        <input class="autosuggest-geo-dist-input" type="hidden" name="search[dist]"
                                            value="">

                                        <div class="autosuggest-geo-div suggestmain">
                                            <!-- via ajax -->
                                        </div>
                                        <div id="geo-suggestions" class="chooselocation br3 hidden">
                                            <div class="target abs"></div>
                                            <a id="geo-suggestions-close" href="#" class="abs close"
                                                data-icon="close"></a>
                                            <p>Где Вы:</p>
                                            <div id="geo-suggestions-options" class="items"></div>
                                        </div>
                                    </div>
                                    <dl class="distancelist fleft  " id="distanceSelect">
                                        <dt>
                                            <a href="#" class="topLink">
                                                <span class="label">+ 0 km</span>
                                                <span class="value">0</span>
                                            </a>
                                        </dt>
                                        <dd>
                                            <ul style="display: none;">
                                                <li class="">
                                                    <a href="#" class="dist">+ 0 km<span class="value">0</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 2 km<span class="value">2</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 5 km<span class="value">5</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 10 km<span class="value">10</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 15 km<span class="value">15</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 30 km<span class="value">30</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 50 km<span class="value">50</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 75 km<span class="value">75</span></a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="dist">+ 100 km<span class="value">100</span></a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="suggest bottom abs zi2 br3 error hidden" id="cityFieldError">
                                    <p>Выберите населенный пункт или почтовый код</p>
                                </div>
                            </div>
                        </div>
                        <span class="button big4 fright br3">
                            <i data-icon="search"></i>
                            <input id="submit-searchmain" data-cy="homepage_button_search" type="submit" value="Поиск"
                                class="cfff x-large margintop-1">
                        </span>
                    </fieldset>
                </div>
            </form>


            <div class="maincategories">
                
                    <header>
                        <h3>Главные рубрики</h3>
                    </header>
                    <div class="maincategories-list clr">
                    <?php
                        $c = mysqli_connect('localhost', 'root', 'root', 'lightstore');

                        $q = mysqli_query($c, "SELECT * FROM `categories`");

                        while($newArray = mysqli_fetch_assoc($q)){

                            echo"

                            <div class='categories'>
                                <div class='img' style=\"background-image: url('images/$newArray[image]');\"></div> 
                                <p>$newArray[title_ru]</p>               
                            </div>

                            ";

                        }
                    ?>
                    </div>

                
            </div>


        <!-- </section>
        <section class="mainpage-gallery clr" > -->
            <header>
                <h3>
                    VIP-объявления </h3>
            </header>
            <ul class="gallerywide clr normal" id="gallerywide">
            <?php 
                
                $q = mysqli_query($c, "SELECT * FROM `advert`");

                while($newArray = mysqli_fetch_assoc($q)){

                echo "
                <li rel='' class='wrap tleft rel fleft ad_idj604A '>
                    <div class='mheight tcenter'>
                        <a href='about_advert.php'
                            class='thumb tdnone scale1 rel detailsLinkPromoted linkWithHash '>
                            <img alt=''
                                src='assets/img/$newArray[images]' style='background-size: cover;'>
                            <span class='inlblk icon paid  abs zi2'></span>
                        </a>
                    </div>
                    <div class='inner'>

                        <h4 class='normal'>
                            <a href='about_advert.php'
                                class='link linkWithHash detailsLinkPromoted'>
                                <strong>$newArray[title]</strong>
                            </a>
                        </h4>
                        <p class='lheight14 color-1 margintop2 brkword'>
                            <span class='breadcrumb small'></span>
                        </p>
                    </div>
                    <ul class='date-location'>
                        <li>$newArray[city_id], $newArray[author_id]</li>
                        <li>$newArray[public_time]</li>
                    </ul>
                    <div class='price '>
                    </div>
                    <div class='favtab abs zi3 observelinkgallery'>
                        <a class='inlblk lheight16 tdnone observe-link  {id:282180636}' href='#'
                            data-statkey='ad.observed.list'>
                            <span class='icon inlblk observe2 vtop observed-282180636' data-icon='star'></span>
                        </a>
                        <div class='suggesttitle small top abs br4 hidden'>
                            <p>В избранные</p>
                        </div>
                    </div>
                </li>
                ";
                }
            ?>
            </ul>

        </section>

</div>
        <?php include "includes/footer.php";?>
    <script>
        function bekaaa(){
                if(window.innerWidth<600){
                    window.location.href = 'mobile.php'

                }   
            }

            window.onresize = function(){
                bekaaa()           
            }

            bekaaa()


            
    </script>

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
    document.documentElement.style.setProperty('--color-bg2', '#1c1f20');
    document.documentElement.style.setProperty('--color-bg1232', '#232526');
   
    document.documentElement.style.setProperty('--color-font12', 'white');
    document.documentElement.style.setProperty('--logo-theme', "url('/assets/img/logo-dark.png')");
    
} else {
    document.documentElement.style.setProperty('--color-bg', '#386caa');
    document.documentElement.style.setProperty('--color-bg2', 'white');
    document.documentElement.style.setProperty('--color-bg1232', 'white');

   
    document.documentElement.style.setProperty('--color-font12', 'black');
    document.documentElement.style.setProperty('--logo-theme', "url('/assets/img/logo-light.png')");
    
   
}
}

LightOrDark(localStorage.getItem('toogle'));
    </script>
        
    </div> <!-- BODY CONTRIB -->

    <?php
        // $q = mysqli_query($c, "SELECT * FROM `advert`");

        // while($newArray = mysqli_fetch_assoc($q)){

        //     echo"

        //         <div class='adverts'>
        //             <div class='img_adv' style=\"background-image: url('images/$newArray[images]');\"></div> 
        //             <h3 class='title_adv'>$newArray[title]</h3> 
        //             <div class='info'>
        //                 <h5>$newArray[city_id],$newArray[author_id]</h5>
        //                 <h5>$newArray[public_time]</h5>  
        //             </div>
        //         </div>

        //     ";

        // }
    ?>
</body>

</html>