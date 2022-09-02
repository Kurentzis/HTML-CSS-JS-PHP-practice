
let position = 0;
const slidesToShow = 1;
const slidesToScroll = 1;
const container = document.querySelector('.slider_container');
const track = document.querySelector(".slider_track");
//const item = document.querySelector('.slider_item');
const btnPrev = document.querySelector('.prev');
const btnNext = document.querySelector('.next');
const items = document.querySelectorAll('.slider_item');    
const itemsCount = document.querySelectorAll('.slider_item').length;



const itemWidth = container.clientWidth/ slidesToShow;
const movePosition= slidesToScroll * itemWidth;

items.forEach(item => {
    item.style.minWidth = itemWidth;
});

    
btnNext.addEventListener('click', () => {
    const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
    position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
    setPosition();
    checkBtns();
});

btnPrev.addEventListener('click', () => {
    const itemsLeft = Math.abs(position) /itemWidth;
    position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
    setPosition();
    checkBtns();
});




    const setPosition = () => {
        track.style.transform =  `translateX(${position}px)`

    }

    const checkBtns = () => {
       // btnNext.prop('disabled', position <= -(itemsCount-slidesToShow) * itemWidth);
        //btnPrev.prop('disabled', position === 0);
        if ( position <= -(itemsCount-slidesToShow) * itemWidth)
        {
            position = 0;

            setPosition();
        }

    }
    checkBtns();

    setInterval(moveAuto, 3000);

    function moveAuto() {
        const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
        position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
        setPosition();
        checkBtns();
    }


