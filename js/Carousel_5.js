
const track__5 = document.querySelector(".carousel__track__5");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__5 = Array.from(track__5.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__5 = document.querySelector('.carousel__button--right__5');
const prevButton__5 = document.querySelector('.carousel__button--left__5');
const dotsNav__5 = document.querySelector('.carousel__nav__5');
const dots__5 = Array.from(dotsNav__5.children);
const images__5 = document.querySelector('.carousel__images__5');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__5 = images__5.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__5 = document.querySelector('.carousel__track-container__5');
const imagesHeight__5 = imagesSize__5.height;
// console.log(imagesHeight);
// carouselTrackContainer__5.style.height = imagesHeight__5 + 'px';
// // console.log();
// console.log(imagesHeight__5);


const slideSize__5 = slides__5[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__5 = slideSize__5.width;
const slideHeight__5 = slideSize__5.height;

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
const setSlidePosition__5 = (slide__5, index__5) => {
    slide__5.style.left = slideWidth__5 * index__5 + "px";
};

slides__5.forEach(setSlidePosition__5);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__5 = document.querySelector(".carousel__track__5");
    const slides__5 = Array.from(track__5.children);
    const nextButton__5 = document.querySelector('.carousel__button--right__5');
    const prevButton__5 = document.querySelector('.carousel__button--left__5');
    const dotsNav__5 = document.querySelector('.carousel__nav__5');
    const dots__5 = Array.from(dotsNav__5.children);
    const images__5 = document.querySelector('.carousel__images__5');
    const imagesSize__5 = images__5.getBoundingClientRect();
    const carouselTrackContainer__5 = document.querySelector('.carousel__track-container__5');
    const imagesHeight__5 = imagesSize__5.height;
    carouselTrackContainer__5.style.height = imagesHeight__5 + 'px';
    const slideSize__5 = slides__5[0].getBoundingClientRect();
    const slideWidth__5 = slideSize__5.width;
    const slideHeight__5 = slideSize__5.height;
    const setSlidePosition__5 = (slide__5, index__5) => {
        slide__5.style.left = slideWidth__5 * index__5 + "px";
    };
    slides__5.forEach(setSlidePosition__5);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__5 = (track__5, currentSlide__5, targetSlide__5) => { //需要理解
    track__5.style.transform = 'translateX(-' + targetSlide__5.style.left + ')';
    currentSlide__5.classList.remove('current-slide__5');
    targetSlide__5.classList.add('current-slide__5');
}

const updataDots__5 = (currentDot__5, targetDot__5) => {
    currentDot__5.classList.remove('current-slide__5');
    targetDot__5.classList.add('current-slide__5');
}

const hideShowArrows__5 = (slides__5, prevButton__5, nextButton__5, targetIndex__5) => {
    if (targetIndex__5 === 0) {
        prevButton__5.classList.add('is-hidden__5');
        nextButton__5.classList.remove('is-hidden__5')
    } else if (targetIndex__5 === slides__5.length - 1) {
        prevButton__5.classList.remove('is-hidden__5');
        nextButton__5.classList.add('is-hidden__5');

    } else {
        prevButton__5.classList.remove('is-hidden__5');
        nextButton__5.classList.remove('is-hidden__5');
    }

}

// when I click left, move slide to the left
prevButton__5.addEventListener('click', e => {
    const currentSlide__5 = track__5.querySelector('.current-slide__5');
    const prevSlide__5 = currentSlide__5.previousElementSibling;
    const currentDot__5 = dotsNav__5.querySelector('.current-slide__5');
    const prevDot__5 = currentDot__5.previousElementSibling;
    const prevIndex__5 = slides__5.findIndex(slide__5 => slide__5 === prevSlide__5);



    moveToSlide__5(track__5, currentSlide__5, prevSlide__5);
    updataDots__5(currentDot__5, prevDot__5);
    hideShowArrows__5(slides__5, prevButton__5, nextButton__5, prevIndex__5)
})



// when I click right, move slide to the right
nextButton__5.addEventListener('click', e => {
    const currentSlide__5 = track__5.querySelector('.current-slide__5');
    const nextSlide__5 = currentSlide__5.nextElementSibling; //需要理解
    const currentDot__5 = dotsNav__5.querySelector('.current-slide__5');
    const nextDot__5 = currentDot__5.nextElementSibling;
    const nextIndex__5 = slides__5.findIndex(slide__5 => slide__5 === nextSlide__5);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__5(track__5, currentSlide__5, nextSlide__5);
    updataDots__5(currentDot__5, nextDot__5);
    hideShowArrows__5(slides__5, prevButton__5, nextButton__5, nextIndex__5);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__5.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__5 = e.target.closest('button__5');

    // console.log('test1');
    if (!targetDot__5) return;
    // console.log('test2');
    const currentSlide__5 = track__5.querySelector('.current-slide__5');
    const currentDot__5 = dotsNav__5.querySelector('.current-slide__5');
    const targetIndex__5 = dots__5.findIndex(dot__5 => dot__5 === targetDot__5);
    const targetSlide__5 = slides__5[targetIndex__5];

    moveToSlide__5(track__5, currentSlide__5, targetSlide__5);
    updataDots__5(currentDot__5, targetDot__5);
    hideShowArrows__5(slides__5, prevButton__5, nextButton__5, targetIndex__5)

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
