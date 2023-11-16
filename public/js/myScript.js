var clickcount = 0
function changeColor(color, color2) {
    document.body.style.background = color;
    if(clickcount%2==0){
        document.body.style.background = color;
    }
    else{
        document.body.style.background = color2;
    }
    clickcount = clickcount + 1
}