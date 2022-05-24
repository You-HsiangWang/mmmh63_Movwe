
    const track__9 = document.querySelector(".carousel__track__9");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__9 = Array.from(track__9.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__9 = document.querySelector('.carousel__button--right__9');
const prevButton__9 = document.querySelector('.carousel__button--left__9');
const dotsNav__9 = document.querySelector('.carousel__nav__9');
const dots__9 = Array.from(dotsNav__9.children);
const images__9 = document.querySelector('.carousel__images__9');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__9 = images__9.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__9 = document.querySelector('.carousel__track-container__9');
const imagesHeight__9 = imagesSize__9.height;
// console.log(imagesHeight);
// carouselTrackContainer__9.style.height = imagesHeight__9 + 'px';
// // console.log();
// console.log(imagesHeight__9);


const slideSize__9 = slides__9[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__9 = slideSize__9.width;
const slideHeight__9 = slideSize__9.height;

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
const setSlidePosition__9 = (slide__9, index__9) => {
    slide__9.style.left = slideWidth__9 * index__9 + "px";
};

slides__9.forEach(setSlidePosition__9);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__9 = document.querySelector(".carousel__track__9");
    const slides__9 = Array.from(track__9.children);
    const nextButton__9 = document.querySelector('.carousel__button--right__9');
    const prevButton__9 = document.querySelector('.carousel__button--left__9');
    const dotsNav__9 = document.querySelector('.carousel__nav__9');
    const dots__9 = Array.from(dotsNav__9.children);
    const images__9 = document.querySelector('.carousel__images__9');
    const imagesSize__9 = images__9.getBoundingClientRect();
    const carouselTrackContainer__9 = document.querySelector('.carousel__track-container__9');
    const imagesHeight__9 = imagesSize__9.height;
    carouselTrackContainer__9.style.height = imagesHeight__9 + 'px';
    const slideSize__9 = slides__9[0].getBoundingClientRect();
    const slideWidth__9 = slideSize__9.width;
    const slideHeight__9 = slideSize__9.height;
    const setSlidePosition__9 = (slide__9, index__9) => {
        slide__9.style.left = slideWidth__9 * index__9 + "px";
    };
    slides__9.forEach(setSlidePosition__9);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__9 = (track__9, currentSlide__9, targetSlide__9) => { //需要理解
    track__9.style.transform = 'translateX(-' + targetSlide__9.style.left + ')';
    currentSlide__9.classList.remove('current-slide__9');
    targetSlide__9.classList.add('current-slide__9');
}

const updataDots__9 = (currentDot__9, targetDot__9) => {
    currentDot__9.classList.remove('current-slide__9');
    targetDot__9.classList.add('current-slide__9');
}

const hideShowArrows__9 = (slides__9, prevButton__9, nextButton__9, targetIndex__9) => {
    if (targetIndex__9 === 0) {
        prevButton__9.classList.add('is-hidden__9');
        nextButton__9.classList.remove('is-hidden__9')
    } else if (targetIndex__9 === slides__9.length - 1) {
        prevButton__9.classList.remove('is-hidden__9');
        nextButton__9.classList.add('is-hidden__9');

    } else {
        prevButton__9.classList.remove('is-hidden__9');
        nextButton__9.classList.remove('is-hidden__9');
    }

}

// when I click left, move slide to the left
prevButton__9.addEventListener('click', e => {
    const currentSlide__9 = track__9.querySelector('.current-slide__9');
    const prevSlide__9 = currentSlide__9.previousElementSibling;
    const currentDot__9 = dotsNav__9.querySelector('.current-slide__9');
    const prevDot__9 = currentDot__9.previousElementSibling;
    const prevIndex__9 = slides__9.findIndex(slide__9 => slide__9 === prevSlide__9);



    moveToSlide__9(track__9, currentSlide__9, prevSlide__9);
    updataDots__9(currentDot__9, prevDot__9);
    hideShowArrows__9(slides__9, prevButton__9, nextButton__9, prevIndex__9)
})



// when I click right, move slide to the right
nextButton__9.addEventListener('click', e => {
    const currentSlide__9 = track__9.querySelector('.current-slide__9');
    const nextSlide__9 = currentSlide__9.nextElementSibling; //需要理解
    const currentDot__9 = dotsNav__9.querySelector('.current-slide__9');
    const nextDot__9 = currentDot__9.nextElementSibling;
    const nextIndex__9 = slides__9.findIndex(slide__9 => slide__9 === nextSlide__9);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__9(track__9, currentSlide__9, nextSlide__9);
    updataDots__9(currentDot__9, nextDot__9);
    hideShowArrows__9(slides__9, prevButton__9, nextButton__9, nextIndex__9);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__9.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__9 = e.target.closest('button__9');

    // console.log('test1');
    if (!targetDot__9) return;
    // console.log('test2');
    const currentSlide__9 = track__9.querySelector('.current-slide__9');
    const currentDot__9 = dotsNav__9.querySelector('.current-slide__9');
    const targetIndex__9 = dots__9.findIndex(dot__9 => dot__9 === targetDot__9);
    const targetSlide__9 = slides__9[targetIndex__9];

    moveToSlide__9(track__9, currentSlide__9, targetSlide__9);
    updataDots__9(currentDot__9, targetDot__9);
    hideShowArrows__9(slides__9, prevButton__9, nextButton__9, targetIndex__9)

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
