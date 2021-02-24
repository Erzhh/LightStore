wi = window.innerWidth
console.log(wi)
// var sli_elements = document.getElementsByClassName('sli');
// sli_elements[0].style.width = wi
// sli_elements[1].style.width = wi
// sli_elements[2].style.width = wi
// sli_elements[3].style.width = wi
document.getElementsByClassName('sli')[0].style.width = wi + 'px'
document.getElementsByClassName('sli')[1].style.width = wi + 'px'
document.getElementsByClassName('sli')[2].style.width = wi + 'px'
document.getElementsByClassName('sli')[3].style.width = wi + 'px'

var slider2 = document.getElementsByClassName('slider2')[0];

var btn = document.getElementsByClassName('btn_send')[0];
left = 0
btn.onclick = function Slider(){

slider2.style.left = left - wi + 'px'
}

