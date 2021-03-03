var kas_d1 = document.getElementsByClassName("kas_d1");
var kas_password_glav_div = document.getElementsByClassName("kas_password_glav_div");

var kas_hr = document.getElementsByClassName("kas_hr");
kas_d1[0].onclick = function(){
    for(i=0; i<kas_d1.length; i++){       
        kas_password_glav_div[0].classList.toggle('open1');  
        kas_hr[0].classList.toggle('open_hr')
    }
}  
kas_d1[1].onclick = function(){
    for(i=0; i<kas_d1.length; i++){       
        kas_password_glav_div[1].classList.toggle('open1');  
        kas_hr[1].classList.toggle('open_hr')
    }
}
var toggle;

document.getElementsByClassName('l')[0].onclick = function(){
    
    if(!toggle){
        document.documentElement.style.setProperty('--color-fontbl', 'white');
        document.documentElement.style.setProperty('--color-bg_3', '#2b2929');
        document.documentElement.style.setProperty('--color-border', '#2b2929');
        document.documentElement.style.setProperty('--color-bg', 'white');
        document.documentElement.style.setProperty('--color-bg2', 'black');
        document.documentElement.style.setProperty('--color-font', 'black');
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");

    }
    else{
        document.documentElement.style.setProperty('--color-bg', 'black');
        document.documentElement.style.setProperty('--color-bg2', 'white');
        document.documentElement.style.setProperty('--color-bg_3', '#f2f4f5');
        document.documentElement.style.setProperty('--color-font', 'white');
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
        document.documentElement.style.setProperty('--color-fontbl', 'black');
        document.documentElement.style.setProperty('--color-border', 'white');
    }
}