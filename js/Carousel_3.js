
const track__3 = document.querySelector(".carousel__track__3");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__3 = Array.from(track__3.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__3 = document.querySelector('.carousel__button--right__3');
const prevButton__3 = document.querySelector('.carousel__button--left__3');
const dotsNav__3 = document.querySelector('.carousel__nav__3');
const dots__3 = Array.from(dotsNav__3.children);
const images__3 = document.querySelector('.carousel__images__3');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__3 = images__3.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__3 = document.querySelector('.carousel__track-container__3');
const imagesHeight__3 = imagesSize__3.height;
// console.log(imagesHeight);
// carouselTrackContainer__3.style.height = imagesHeight__3 + 'px';
// // console.log();
// console.log(imagesHeight__3);


const slideSize__3 = slides__3[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__3 = slideSize__3.width;
const slideHeight__3 = slideSize__3.height;

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
const setSlidePosition__3 = (slide__3, index__3) => {
    slide__3.style.left = slideWidth__3 * index__3 + "px";
};

slides__3.forEach(setSlidePosition__3);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__3 = document.querySelector(".carousel__track__3");
    const slides__3 = Array.from(track__3.children);
    const nextButton__3 = document.querySelector('.carousel__button--right__3');
    const prevButton__3 = document.querySelector('.carousel__button--left__3');
    const dotsNav__3 = document.querySelector('.carousel__nav__3');
    const dots__3 = Array.from(dotsNav__3.children);
    const images__3 = document.querySelector('.carousel__images__3');
    const imagesSize__3 = images__3.getBoundingClientRect();
    const carouselTrackContainer__3 = document.querySelector('.carousel__track-container__3');
    const imagesHeight__3 = imagesSize__3.height;
    carouselTrackContainer__3.style.height = imagesHeight__3 + 'px';
    const slideSize__3 = slides__3[0].getBoundingClientRect();
    const slideWidth__3 = slideSize__3.width;
    const slideHeight__3 = slideSize__3.height;
    const setSlidePosition__3 = (slide__3, index__3) => {
        slide__3.style.left = slideWidth__3 * index__3 + "px";
    };
    slides__3.forEach(setSlidePosition__3);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__3 = (track__3, currentSlide__3, targetSlide__3) => { //需要理解
    track__3.style.transform = 'translateX(-' + targetSlide__3.style.left + ')';
    currentSlide__3.classList.remove('current-slide__3');
    targetSlide__3.classList.add('current-slide__3');
}

const updataDots__3 = (currentDot__3, targetDot__3) => {
    currentDot__3.classList.remove('current-slide__3');
    targetDot__3.classList.add('current-slide__3');
}

const hideShowArrows__3 = (slides__3, prevButton__3, nextButton__3, targetIndex__3) => {
    if (targetIndex__3 === 0) {
        prevButton__3.classList.add('is-hidden__3');
        nextButton__3.classList.remove('is-hidden__3')
    } else if (targetIndex__3 === slides__3.length - 1) {
        prevButton__3.classList.remove('is-hidden__3');
        nextButton__3.classList.add('is-hidden__3');

    } else {
        prevButton__3.classList.remove('is-hidden__3');
        nextButton__3.classList.remove('is-hidden__3');
    }

}

// when I click left, move slide to the left
prevButton__3.addEventListener('click', e => {
    const currentSlide__3 = track__3.querySelector('.current-slide__3');
    const prevSlide__3 = currentSlide__3.previousElementSibling;
    const currentDot__3 = dotsNav__3.querySelector('.current-slide__3');
    const prevDot__3 = currentDot__3.previousElementSibling;
    const prevIndex__3 = slides__3.findIndex(slide__3 => slide__3 === prevSlide__3);



    moveToSlide__3(track__3, currentSlide__3, prevSlide__3);
    updataDots__3(currentDot__3, prevDot__3);
    hideShowArrows__3(slides__3, prevButton__3, nextButton__3, prevIndex__3)
})



// when I click right, move slide to the right
nextButton__3.addEventListener('click', e => {
    const currentSlide__3 = track__3.querySelector('.current-slide__3');
    const nextSlide__3 = currentSlide__3.nextElementSibling; //需要理解
    const currentDot__3 = dotsNav__3.querySelector('.current-slide__3');
    const nextDot__3 = currentDot__3.nextElementSibling;
    const nextIndex__3 = slides__3.findIndex(slide__3 => slide__3 === nextSlide__3);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__3(track__3, currentSlide__3, nextSlide__3);
    updataDots__3(currentDot__3, nextDot__3);
    hideShowArrows__3(slides__3, prevButton__3, nextButton__3, nextIndex__3);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__3.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__3 = e.target.closest('button__3');

    // console.log('test1');
    if (!targetDot__3) return;
    // console.log('test2');
    const currentSlide__3 = track__3.querySelector('.current-slide__3');
    const currentDot__3 = dotsNav__3.querySelector('.current-slide__3');
    const targetIndex__3 = dots__3.findIndex(dot__3 => dot__3 === targetDot__3);
    const targetSlide__3 = slides__3[targetIndex__3];

    moveToSlide__3(track__3, currentSlide__3, targetSlide__3);
    updataDots__3(currentDot__3, targetDot__3);
    hideShowArrows__3(slides__3, prevButton__3, nextButton__3, targetIndex__3)

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
