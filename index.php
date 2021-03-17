<?php include "includes/head.php";?>

</head>
<div class="wrapper">


<!-- if(isset($_POST['search']) && $_POST['search'] !== '' ){
  $query=mysqli_query($connect,"SELECT * FROM `r1` WHERE `title` LIKE '%$_POST[search]%'");
}
else{
  $query=mysqli_query($connect,"SELECT * FROM `r1`"); -->
}
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

                        <div class="select_box">             
                                       <select class = "select_city">                               
                                      <?php
                                      $query = mysqli_query($c,"SELECT * FROM `city`");
                                       while($fetch=mysqli_fetch_assoc($query)){
                                         echo " <option>$fetch[title_ru]</option>";
                                       }
                                       ?>  
                                       </select>        
                        </div>
                        <div class="margin_div"></div>
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
                                <div class='img' style=\"background-image: url('assets/img/categories/$newArray[image]');\"></div> 
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
                    $f = mysqli_query($c, "SELECT `name` FROM `users` WHERE `id`='$newArray[author_id]'");
                    $arr = mysqli_fetch_assoc($f);
                  
                    $a = mysqli_query($c, "SELECT `title_kz` FROM `city` WHERE `id`='$newArray[city_id]'");
                    $arrR = mysqli_fetch_assoc($a);
                   
                echo "
                <li rel='' class='wrap tleft rel fleft ad_idj604A '>
                    <div class='mheight tcenter'>
                        <a href='about_advert.php'
                            class='thumb tdnone scale1 rel detailsLinkPromoted linkWithHash '>
                            <img alt=''
                                src='assets/img/advert/$newArray[images]' style='background-size: cover;'>
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
                        <li>$arrR[title_kz], $arr[name]</li>
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