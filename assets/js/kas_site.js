var w =window.innerWidth;
// document.write(w)
// document.write('ffff')


document.getElementsByClassName('btn1')[0].onclick = function(){
    var all_div = document.getElementsByClassName('kas_ob')
    console.log(all_div)
    for(i=0; i<all_div.length; i++ ){
        all_div[i].classList.toggle('v1')
    }
}
var toggle;
document.getElementsByClassName('logo')[0].onclick = function(){
                
    if(!toggle){
        document.documentElement.style.setProperty('--color-fontbl', 'white');
        document.documentElement.style.setProperty('--color-bg3', '#2b2929');
        document.documentElement.style.setProperty('--color-border', '#2b2929');
        document.documentElement.style.setProperty('--color-bg', 'white');
        document.documentElement.style.setProperty('--color-bg2', 'black');
        document.documentElement.style.setProperty('--color-font', 'black');
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");

    }
    else{
        document.documentElement.style.setProperty('--color-bg', 'black');
        document.documentElement.style.setProperty('--color-bg2', 'white');
        document.documentElement.style.setProperty('--color-bg3', '#f2f4f5');
        document.documentElement.style.setProperty('--color-font', 'white');
        document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
        document.documentElement.style.setProperty('--color-fontbl', 'black');
        document.documentElement.style.setProperty('--color-border', 'white');
    }
    toggle = !toggle
}