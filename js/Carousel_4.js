
const track__4 = document.querySelector(".carousel__track__4");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__4 = Array.from(track__4.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__4 = document.querySelector('.carousel__button--right__4');
const prevButton__4 = document.querySelector('.carousel__button--left__4');
const dotsNav__4 = document.querySelector('.carousel__nav__4');
const dots__4 = Array.from(dotsNav__4.children);
const images__4 = document.querySelector('.carousel__images__4');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__4 = images__4.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__4 = document.querySelector('.carousel__track-container__4');
const imagesHeight__4 = imagesSize__4.height;
// console.log(imagesHeight);
// carouselTrackContainer__4.style.height = imagesHeight__4 + 'px';
// // console.log();
// console.log(imagesHeight__4);


const slideSize__4 = slides__4[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__4 = slideSize__4.width;
const slideHeight__4 = slideSize__4.height;

// nextButton.style.height = slideHeight + 'px'
// prevButton.style.height = slideHeight + 'px'


// const card = document.querySelector('.image__card');
// const cardSize = slides[0].getBoundingClientRect();
// const cardHeight = cardSize.height;
// card.style.height = slideHeight + 'px';



// console.log(slideWidth);
// console.log(slideHeight);
// slideWidth 被賦予 slideSize 的寬
// console.log(slideWidth);
// console.log(slideSize);


//--------每個車廂往右邊移動一個車廂的寬度--------
// slides[0].style.left = slideWidth * 0 + "px";
// slides[1].style.left = slideWidth * 1 + "px";
// slides[2].style.left = slideWidth * 2 + "px";
// slides[3].style.left = slideWidth * 3 + "px";
// slides[4].style.left = slideWidth * 4 + "px";
//------------------------------------------



// -----需要理解----------------------------------
const setSlidePosition__4 = (slide__4, index__4) => {
    slide__4.style.left = slideWidth__4 * index__4 + "px";
};

slides__4.forEach(setSlidePosition__4);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__4 = document.querySelector(".carousel__track__4");
    const slides__4 = Array.from(track__4.children);
    const nextButton__4 = document.querySelector('.carousel__button--right__4');
    const prevButton__4 = document.querySelector('.carousel__button--left__4');
    const dotsNav__4 = document.querySelector('.carousel__nav__4');
    const dots__4 = Array.from(dotsNav__4.children);
    const images__4 = document.querySelector('.carousel__images__4');
    const imagesSize__4 = images__4.getBoundingClientRect();
    const carouselTrackContainer__4 = document.querySelector('.carousel__track-container__4');
    const imagesHeight__4 = imagesSize__4.height;
    carouselTrackContainer__4.style.height = imagesHeight__4 + 'px';
    const slideSize__4 = slides__4[0].getBoundingClientRect();
    const slideWidth__4 = slideSize__4.width;
    const slideHeight__4 = slideSize__4.height;
    const setSlidePosition__4 = (slide__4, index__4) => {
        slide__4.style.left = slideWidth__4 * index__4 + "px";
    };
    slides__4.forEach(setSlidePosition__4);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__4 = (track__4, currentSlide__4, targetSlide__4) => { //需要理解
    track__4.style.transform = 'translateX(-' + targetSlide__4.style.left + ')';
    currentSlide__4.classList.remove('current-slide__4');
    targetSlide__4.classList.add('current-slide__4');
}

const updataDots__4 = (currentDot__4, targetDot__4) => {
    currentDot__4.classList.remove('current-slide__4');
    targetDot__4.classList.add('current-slide__4');
}

const hideShowArrows__4 = (slides__4, prevButton__4, nextButton__4, targetIndex__4) => {
    if (targetIndex__4 === 0) {
        prevButton__4.classList.add('is-hidden__4');
        nextButton__4.classList.remove('is-hidden__4')
    } else if (targetIndex__4 === slides__4.length - 1) {
        prevButton__4.classList.remove('is-hidden__4');
        nextButton__4.classList.add('is-hidden__4');

    } else {
        prevButton__4.classList.remove('is-hidden__4');
        nextButton__4.classList.remove('is-hidden__4');
    }

}

// when I click left, move slide to the left
prevButton__4.addEventListener('click', e => {
    const currentSlide__4 = track__4.querySelector('.current-slide__4');
    const prevSlide__4 = currentSlide__4.previousElementSibling;
    const currentDot__4 = dotsNav__4.querySelector('.current-slide__4');
    const prevDot__4 = currentDot__4.previousElementSibling;
    const prevIndex__4 = slides__4.findIndex(slide__4 => slide__4 === prevSlide__4);



    moveToSlide__4(track__4, currentSlide__4, prevSlide__4);
    updataDots__4(currentDot__4, prevDot__4);
    hideShowArrows__4(slides__4, prevButton__4, nextButton__4, prevIndex__4)
})



// when I click right, move slide to the right
nextButton__4.addEventListener('click', e => {
    const currentSlide__4 = track__4.querySelector('.current-slide__4');
    const nextSlide__4 = currentSlide__4.nextElementSibling; //需要理解
    const currentDot__4 = dotsNav__4.querySelector('.current-slide__4');
    const nextDot__4 = currentDot__4.nextElementSibling;
    const nextIndex__4 = slides__4.findIndex(slide__4 => slide__4 === nextSlide__4);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__4(track__4, currentSlide__4, nextSlide__4);
    updataDots__4(currentDot__4, nextDot__4);
    hideShowArrows__4(slides__4, prevButton__4, nextButton__4, nextIndex__4);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__4.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__4 = e.target.closest('button__4');

    // console.log('test1');
    if (!targetDot__4) return;
    // console.log('test2');
    const currentSlide__4 = track__4.querySelector('.current-slide__4');
    const currentDot__4 = dotsNav__4.querySelector('.current-slide__4');
    const targetIndex__4 = dots__4.findIndex(dot__4 => dot__4 === targetDot__4);
    const targetSlide__4 = slides__4[targetIndex__4];

    moveToSlide__4(track__4, currentSlide__4, targetSlide__4);
    updataDots__4(currentDot__4, targetDot__4);
    hideShowArrows__4(slides__4, prevButton__4, nextButton__4, targetIndex__4)

    // if (targetIndex === 0) {
    //     prevButton.classList.add('is-hidden');
    //     nextButton.classList.remove('is-hidden')
    // }else if (targetIndex === slides.length - 1){
    //     prevButton.classList.remove('is-hidden');
    //     nextButton.classList.add('is-hidden');

    // }else{
    //     prevButton.classList.remove('is-hidden');
    //     nextButton.classList.remove('is-hidden');
    // }

})
