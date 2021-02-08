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