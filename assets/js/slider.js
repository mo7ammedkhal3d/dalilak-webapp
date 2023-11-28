const slides =document.getElementsByClassName('slide');

let amount = 0;

function nextSlide(){

    if(amount > -(slides.length-3)*(100/9)){
        amount +=100/slides.length;
        document.getElementsByClassName('inner')[0].style.transform=`translateX(${amount}%)`;
    }        
}

function previousSlide(){

    if(amount<0){
        amount -=100/slides.length;
        document.getElementsByClassName('inner')[0].style.transform=`translateX(${amount}%)`;
    }
}