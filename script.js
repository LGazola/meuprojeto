const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

let idx = 0;

function carrosel(){
    idx++

    if(idx > img.length - 1){
        idx=0
    }
    imgs.style.transform = `translateX(${-idx * 550}px)`;
    
}
interval = setInterval(carrosel, 1800);

document.getElementById('carrossel').addEventListener('mouseenter', stop);
function stop(){
    clearInterval(interval)
}

document.getElementById('carrossel').addEventListener('mouseleave',start);
function start(){
    interval = setInterval(carrosel, 1800)
}







       

