
const track__8 = document.querySelector(".carousel__track__8");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__8 = Array.from(track__8.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__8 = document.querySelector('.carousel__button--right__8');
const prevButton__8 = document.querySelector('.carousel__button--left__8');
const dotsNav__8 = document.querySelector('.carousel__nav__8');
const dots__8 = Array.from(dotsNav__8.children);
const images__8 = document.querySelector('.carousel__images__8');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__8 = images__8.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__8 = document.querySelector('.carousel__track-container__8');
const imagesHeight__8 = imagesSize__8.height;
// console.log(imagesHeight);
// carouselTrackContainer__8.style.height = imagesHeight__8 + 'px';
// // console.log();
// console.log(imagesHeight__8);


const slideSize__8 = slides__8[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__8 = slideSize__8.width;
const slideHeight__8 = slideSize__8.height;

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
const setSlidePosition__8 = (slide__8, index__8) => {
    slide__8.style.left = slideWidth__8 * index__8 + "px";
};

slides__8.forEach(setSlidePosition__8);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__8 = document.querySelector(".carousel__track__8");
    const slides__8 = Array.from(track__8.children);
    const nextButton__8 = document.querySelector('.carousel__button--right__8');
    const prevButton__8 = document.querySelector('.carousel__button--left__8');
    const dotsNav__8 = document.querySelector('.carousel__nav__8');
    const dots__8 = Array.from(dotsNav__8.children);
    const images__8 = document.querySelector('.carousel__images__8');
    const imagesSize__8 = images__8.getBoundingClientRect();
    const carouselTrackContainer__8 = document.querySelector('.carousel__track-container__8');
    const imagesHeight__8 = imagesSize__8.height;
    carouselTrackContainer__8.style.height = imagesHeight__8 + 'px';
    const slideSize__8 = slides__8[0].getBoundingClientRect();
    const slideWidth__8 = slideSize__8.width;
    const slideHeight__8 = slideSize__8.height;
    const setSlidePosition__8 = (slide__8, index__8) => {
        slide__8.style.left = slideWidth__8 * index__8 + "px";
    };
    slides__8.forEach(setSlidePosition__8);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__8 = (track__8, currentSlide__8, targetSlide__8) => { //需要理解
    track__8.style.transform = 'translateX(-' + targetSlide__8.style.left + ')';
    currentSlide__8.classList.remove('current-slide__8');
    targetSlide__8.classList.add('current-slide__8');
}

const updataDots__8 = (currentDot__8, targetDot__8) => {
    currentDot__8.classList.remove('current-slide__8');
    targetDot__8.classList.add('current-slide__8');
}

const hideShowArrows__8 = (slides__8, prevButton__8, nextButton__8, targetIndex__8) => {
    if (targetIndex__8 === 0) {
        prevButton__8.classList.add('is-hidden__8');
        nextButton__8.classList.remove('is-hidden__8')
    } else if (targetIndex__8 === slides__8.length - 1) {
        prevButton__8.classList.remove('is-hidden__8');
        nextButton__8.classList.add('is-hidden__8');

    } else {
        prevButton__8.classList.remove('is-hidden__8');
        nextButton__8.classList.remove('is-hidden__8');
    }

}

// when I click left, move slide to the left
prevButton__8.addEventListener('click', e => {
    const currentSlide__8 = track__8.querySelector('.current-slide__8');
    const prevSlide__8 = currentSlide__8.previousElementSibling;
    const currentDot__8 = dotsNav__8.querySelector('.current-slide__8');
    const prevDot__8 = currentDot__8.previousElementSibling;
    const prevIndex__8 = slides__8.findIndex(slide__8 => slide__8 === prevSlide__8);



    moveToSlide__8(track__8, currentSlide__8, prevSlide__8);
    updataDots__8(currentDot__8, prevDot__8);
    hideShowArrows__8(slides__8, prevButton__8, nextButton__8, prevIndex__8)
})



// when I click right, move slide to the right
nextButton__8.addEventListener('click', e => {
    const currentSlide__8 = track__8.querySelector('.current-slide__8');
    const nextSlide__8 = currentSlide__8.nextElementSibling; //需要理解
    const currentDot__8 = dotsNav__8.querySelector('.current-slide__8');
    const nextDot__8 = currentDot__8.nextElementSibling;
    const nextIndex__8 = slides__8.findIndex(slide__8 => slide__8 === nextSlide__8);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__8(track__8, currentSlide__8, nextSlide__8);
    updataDots__8(currentDot__8, nextDot__8);
    hideShowArrows__8(slides__8, prevButton__8, nextButton__8, nextIndex__8);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__8.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__8 = e.target.closest('button__8');

    // console.log('test1');
    if (!targetDot__8) return;
    // console.log('test2');
    const currentSlide__8 = track__8.querySelector('.current-slide__8');
    const currentDot__8 = dotsNav__8.querySelector('.current-slide__8');
    const targetIndex__8 = dots__8.findIndex(dot__8 => dot__8 === targetDot__8);
    const targetSlide__8 = slides__8[targetIndex__8];

    moveToSlide__8(track__8, currentSlide__8, targetSlide__8);
    updataDots__8(currentDot__8, targetDot__8);
    hideShowArrows__8(slides__8, prevButton__8, nextButton__8, targetIndex__8)

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
