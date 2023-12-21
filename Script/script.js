// main page 

let intro = 'Your health, our priority';
let i = 1;

function autoWrite(){
        if (i < 14){
            document.querySelector('h1').innerHTML = intro.slice(0, i);
        }
        else{
            document.getElementById('headcolor').style.color = '#2D9596';
            document.getElementById('headcolor').innerHTML = intro.slice(13, i);
        }
    i++;
    if (i > intro.length){
        setTimeout(() => {
        document.querySelectorAll('div')[1].outerHTML = '<div id="main" style="margin-top: 110px;"> <input type="search" placeholder="Search for the product"> </div>'
     }, 2000);
        return;
    }
}

setInterval(function(){autoWrite()}, 100)
// product button 

