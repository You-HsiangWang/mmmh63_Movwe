
const track__11 = document.querySelector(".carousel__track__11");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__11 = Array.from(track__11.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__11 = document.querySelector('.carousel__button--right__11');
const prevButton__11 = document.querySelector('.carousel__button--left__11');
const dotsNav__11 = document.querySelector('.carousel__nav__11');
const dots__11 = Array.from(dotsNav__11.children);
const images__11 = document.querySelector('.carousel__images__11');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__11 = images__11.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__11 = document.querySelector('.carousel__track-container__11');
const imagesHeight__11 = imagesSize__11.height;
// console.log(imagesHeight);
// carouselTrackContainer__11.style.height = imagesHeight__11 + 'px';
// // console.log();
// console.log(imagesHeight__11);


const slideSize__11 = slides__11[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__11 = slideSize__11.width;
const slideHeight__11 = slideSize__11.height;

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
const setSlidePosition__11 = (slide__11, index__11) => {
    slide__11.style.left = slideWidth__11 * index__11 + "px";
};

slides__11.forEach(setSlidePosition__11);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__11 = document.querySelector(".carousel__track__11");
    const slides__11 = Array.from(track__11.children);
    const nextButton__11 = document.querySelector('.carousel__button--right__11');
    const prevButton__11 = document.querySelector('.carousel__button--left__11');
    const dotsNav__11 = document.querySelector('.carousel__nav__11');
    const dots__11 = Array.from(dotsNav__11.children);
    const images__11 = document.querySelector('.carousel__images__11');
    const imagesSize__11 = images__11.getBoundingClientRect();
    const carouselTrackContainer__11 = document.querySelector('.carousel__track-container__11');
    const imagesHeight__11 = imagesSize__11.height;
    carouselTrackContainer__11.style.height = imagesHeight__11 + 'px';
    const slideSize__11 = slides__11[0].getBoundingClientRect();
    const slideWidth__11 = slideSize__11.width;
    const slideHeight__11 = slideSize__11.height;
    const setSlidePosition__11 = (slide__11, index__11) => {
        slide__11.style.left = slideWidth__11 * index__11 + "px";
    };
    slides__11.forEach(setSlidePosition__11);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__11 = (track__11, currentSlide__11, targetSlide__11) => { //需要理解
    track__11.style.transform = 'translateX(-' + targetSlide__11.style.left + ')';
    currentSlide__11.classList.remove('current-slide__11');
    targetSlide__11.classList.add('current-slide__11');
}

const updataDots__11 = (currentDot__11, targetDot__11) => {
    currentDot__11.classList.remove('current-slide__11');
    targetDot__11.classList.add('current-slide__11');
}

const hideShowArrows__11 = (slides__11, prevButton__11, nextButton__11, targetIndex__11) => {
    if (targetIndex__11 === 0) {
        prevButton__11.classList.add('is-hidden__11');
        nextButton__11.classList.remove('is-hidden__11')
    } else if (targetIndex__11 === slides__11.length - 1) {
        prevButton__11.classList.remove('is-hidden__11');
        nextButton__11.classList.add('is-hidden__11');

    } else {
        prevButton__11.classList.remove('is-hidden__11');
        nextButton__11.classList.remove('is-hidden__11');
    }

}

// when I click left, move slide to the left
prevButton__11.addEventListener('click', e => {
    const currentSlide__11 = track__11.querySelector('.current-slide__11');
    const prevSlide__11 = currentSlide__11.previousElementSibling;
    const currentDot__11 = dotsNav__11.querySelector('.current-slide__11');
    const prevDot__11 = currentDot__11.previousElementSibling;
    const prevIndex__11 = slides__11.findIndex(slide__11 => slide__11 === prevSlide__11);



    moveToSlide__11(track__11, currentSlide__11, prevSlide__11);
    updataDots__11(currentDot__11, prevDot__11);
    hideShowArrows__11(slides__11, prevButton__11, nextButton__11, prevIndex__11)
})



// when I click right, move slide to the right
nextButton__11.addEventListener('click', e => {
    const currentSlide__11 = track__11.querySelector('.current-slide__11');
    const nextSlide__11 = currentSlide__11.nextElementSibling; //需要理解
    const currentDot__11 = dotsNav__11.querySelector('.current-slide__11');
    const nextDot__11 = currentDot__11.nextElementSibling;
    const nextIndex__11 = slides__11.findIndex(slide__11 => slide__11 === nextSlide__11);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__11(track__11, currentSlide__11, nextSlide__11);
    updataDots__11(currentDot__11, nextDot__11);
    hideShowArrows__11(slides__11, prevButton__11, nextButton__11, nextIndex__11);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__11.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__11 = e.target.closest('button__11');

    // console.log('test1');
    if (!targetDot__11) return;
    // console.log('test2');
    const currentSlide__11 = track__11.querySelector('.current-slide__11');
    const currentDot__11 = dotsNav__11.querySelector('.current-slide__11');
    const targetIndex__11 = dots__11.findIndex(dot__11 => dot__11 === targetDot__11);
    const targetSlide__11 = slides__11[targetIndex__11];

    moveToSlide__11(track__11, currentSlide__11, targetSlide__11);
    updataDots__11(currentDot__11, targetDot__11);
    hideShowArrows__11(slides__11, prevButton__11, nextButton__11, targetIndex__11)

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
