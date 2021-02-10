

            var toggle;
    
            document.getElementsByClassName('toggle12')[0].onclick = function(){
                
                if(!toggle){
                    document.documentElement.style.setProperty('--color-bg', 'white');
                    document.documentElement.style.setProperty('--color-bg2', 'black');
                    document.documentElement.style.setProperty('--color-font', 'black');
                    document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
    
                }
                else{
                    document.documentElement.style.setProperty('--color-bg', 'black');
                    document.documentElement.style.setProperty('--color-bg2', 'white');
                    document.documentElement.style.setProperty('--color-font', 'white');
                    document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
                
                }
                toggle = !toggle
            }
    
        