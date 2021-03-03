

            // var toggle;
    
            // document.getElementsByClassName('toggle12')[0].onclick = function(){
                
            //     if(!toggle){
            //         document.documentElement.style.setProperty('--color-bg', 'white');
            //         document.documentElement.style.setProperty('--color-bg2', 'black');
            //         document.documentElement.style.setProperty('--color-font', 'black');
            //         document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
    
            //     }
            //     else{
            //         document.documentElement.style.setProperty('--color-bg', 'black');
            //         document.documentElement.style.setProperty('--color-bg2', 'white');
            //         document.documentElement.style.setProperty('--color-font', 'white');
            //         document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
                
            //     }
            //     toggle = !toggle
            // }
    

            

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
              
            // with mobile-----

            document.getElementsByClassName('change1')[0].onclick = function () {
            
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