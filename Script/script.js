// main page 

let intro = 'Your health, our priority Providing trusted care and quality service for a healthier community.';
let i = 1;

function autoWrite(){
    if (i < 26){
        if (i < 14){
            document.querySelector('h1').innerHTML = intro.slice(0, i);
        }
        else{
            document.getElementById('headcolor').style.color = '#2D9596';
            document.getElementById('headcolor').innerHTML = intro.slice(13, i);
        }
    }
    else{
        document.querySelector('p').innerHTML = intro.slice(25, i);
    }
    i++;
    if (i > intro.length){
        return;
    }
}

setInterval(function(){autoWrite()}, 100)
// product button 



