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