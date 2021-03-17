<?php include "includes/head.php";?>
<header id="header-container">
<div class="wrapper">
            <div class="navi">
                <div class="wrapper clr rel">

                    <div class="col-md-3">
                      <a href="index.php">
                        <div class="logo">
                            <img src="/assets/img/logo-light.png" alt="">
                        </div>
                      </a>
                    </div>
                    <div class="col-md-9">
                        <input class="l" type="checkbox">
                        <a href="aa.php">
                        <i class="far fa-heart"></i>
                        </a>
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
</div>
        </header>
        
        <script src="assets/js/dark_light.js"></script>
        

        <?php
  
  //   if(isset($_POST['title'])){
        
  //       $time = time(); // 1977 - now time
  //       $random = mt_rand(10000,99999);
  //       $new_name = md5( $time.$random ); 
  //       //160876843567123
  //       //E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e
  //       $exp = explode('.',$_FILES['photo']['name']);   // 123.jpg to [ 123 , jpg ]
  //       $format = $exp[1];
  //       //jpg
    
  //       $img_name = $new_name.'.'.$format;
  //       //E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e.jpg
  //       $upload = move_uploaded_file( $_FILES['photo']['tmp_name'] , '../assets/img'.$img_name);
        
    
  //       mysqli_query( $c , "INSERT INTO `categories`(`image`,`city_id`,`author_id`)
  //       VALUES ('$img_name')");
    
  //   }
    
    
    ?>