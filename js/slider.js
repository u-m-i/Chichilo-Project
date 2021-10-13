//Slider script

function changeImg(){
    document.slide.scr = images[i];

    if(i < images.length - 1){
        i++;
    }else{
        i = 0;
    }

    setTimeout("changeImg()", time);
}

var i = 0;
var images = [];
var time = 3000;

window.onload = changeImg;