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
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
        
    } else {
        document.documentElement.style.setProperty('--color-bg', '#386caa');
        document.documentElement.style.setProperty('--color-bg2', 'white');
        document.documentElement.style.setProperty('--color-bg1232', 'white');
    
       
        document.documentElement.style.setProperty('--color-font12', 'black');
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
       
    }
    }
    
    LightOrDark(localStorage.getItem('toogle'));