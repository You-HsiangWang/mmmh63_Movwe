
const track__7 = document.querySelector(".carousel__track__7");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__7 = Array.from(track__7.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__7 = document.querySelector('.carousel__button--right__7');
const prevButton__7 = document.querySelector('.carousel__button--left__7');
const dotsNav__7 = document.querySelector('.carousel__nav__7');
const dots__7 = Array.from(dotsNav__7.children);
const images__7 = document.querySelector('.carousel__images__7');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__7 = images__7.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__7 = document.querySelector('.carousel__track-container__7');
const imagesHeight__7 = imagesSize__7.height;
// console.log(imagesHeight);
// carouselTrackContainer__7.style.height = imagesHeight__7 + 'px';
// // console.log();
// console.log(imagesHeight__7);


const slideSize__7 = slides__7[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__7 = slideSize__7.width;
const slideHeight__7 = slideSize__7.height;

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
const setSlidePosition__7 = (slide__7, index__7) => {
    slide__7.style.left = slideWidth__7 * index__7 + "px";
};

slides__7.forEach(setSlidePosition__7);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__7 = document.querySelector(".carousel__track__7");
    const slides__7 = Array.from(track__7.children);
    const nextButton__7 = document.querySelector('.carousel__button--right__7');
    const prevButton__7 = document.querySelector('.carousel__button--left__7');
    const dotsNav__7 = document.querySelector('.carousel__nav__7');
    const dots__7 = Array.from(dotsNav__7.children);
    const images__7 = document.querySelector('.carousel__images__7');
    const imagesSize__7 = images__7.getBoundingClientRect();
    const carouselTrackContainer__7 = document.querySelector('.carousel__track-container__7');
    const imagesHeight__7 = imagesSize__7.height;
    carouselTrackContainer__7.style.height = imagesHeight__7 + 'px';
    const slideSize__7 = slides__7[0].getBoundingClientRect();
    const slideWidth__7 = slideSize__7.width;
    const slideHeight__7 = slideSize__7.height;
    const setSlidePosition__7 = (slide__7, index__7) => {
        slide__7.style.left = slideWidth__7 * index__7 + "px";
    };
    slides__7.forEach(setSlidePosition__7);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__7 = (track__7, currentSlide__7, targetSlide__7) => { //需要理解
    track__7.style.transform = 'translateX(-' + targetSlide__7.style.left + ')';
    currentSlide__7.classList.remove('current-slide__7');
    targetSlide__7.classList.add('current-slide__7');
}

const updataDots__7 = (currentDot__7, targetDot__7) => {
    currentDot__7.classList.remove('current-slide__7');
    targetDot__7.classList.add('current-slide__7');
}

const hideShowArrows__7 = (slides__7, prevButton__7, nextButton__7, targetIndex__7) => {
    if (targetIndex__7 === 0) {
        prevButton__7.classList.add('is-hidden__7');
        nextButton__7.classList.remove('is-hidden__7')
    } else if (targetIndex__7 === slides__7.length - 1) {
        prevButton__7.classList.remove('is-hidden__7');
        nextButton__7.classList.add('is-hidden__7');

    } else {
        prevButton__7.classList.remove('is-hidden__7');
        nextButton__7.classList.remove('is-hidden__7');
    }

}

// when I click left, move slide to the left
prevButton__7.addEventListener('click', e => {
    const currentSlide__7 = track__7.querySelector('.current-slide__7');
    const prevSlide__7 = currentSlide__7.previousElementSibling;
    const currentDot__7 = dotsNav__7.querySelector('.current-slide__7');
    const prevDot__7 = currentDot__7.previousElementSibling;
    const prevIndex__7 = slides__7.findIndex(slide__7 => slide__7 === prevSlide__7);



    moveToSlide__7(track__7, currentSlide__7, prevSlide__7);
    updataDots__7(currentDot__7, prevDot__7);
    hideShowArrows__7(slides__7, prevButton__7, nextButton__7, prevIndex__7)
})



// when I click right, move slide to the right
nextButton__7.addEventListener('click', e => {
    const currentSlide__7 = track__7.querySelector('.current-slide__7');
    const nextSlide__7 = currentSlide__7.nextElementSibling; //需要理解
    const currentDot__7 = dotsNav__7.querySelector('.current-slide__7');
    const nextDot__7 = currentDot__7.nextElementSibling;
    const nextIndex__7 = slides__7.findIndex(slide__7 => slide__7 === nextSlide__7);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__7(track__7, currentSlide__7, nextSlide__7);
    updataDots__7(currentDot__7, nextDot__7);
    hideShowArrows__7(slides__7, prevButton__7, nextButton__7, nextIndex__7);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__7.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__7 = e.target.closest('button__7');

    // console.log('test1');
    if (!targetDot__7) return;
    // console.log('test2');
    const currentSlide__7 = track__7.querySelector('.current-slide__7');
    const currentDot__7 = dotsNav__7.querySelector('.current-slide__7');
    const targetIndex__7 = dots__7.findIndex(dot__7 => dot__7 === targetDot__7);
    const targetSlide__7 = slides__7[targetIndex__7];

    moveToSlide__7(track__7, currentSlide__7, targetSlide__7);
    updataDots__7(currentDot__7, targetDot__7);
    hideShowArrows__7(slides__7, prevButton__7, nextButton__7, targetIndex__7)

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

const ShopCardIcon = document.querySelector('.Shop__card__icon');



// ShopCardIcon.style.color = 'rgba(255, 255, 255, 0.743)';




