
const track__2 = document.querySelector(".carousel__track__2");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__2 = Array.from(track__2.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__2 = document.querySelector('.carousel__button--right__2');
const prevButton__2 = document.querySelector('.carousel__button--left__2');
const dotsNav__2 = document.querySelector('.carousel__nav__2');
const dots__2 = Array.from(dotsNav__2.children);
const images__2 = document.querySelector('.carousel__images__2');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__2 = images__2.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__2 = document.querySelector('.carousel__track-container__2');
const imagesHeight__2 = imagesSize__2.height;
// console.log(imagesHeight);
// carouselTrackContainer__2.style.height = imagesHeight__2 + 'px';
// // console.log();
// console.log(imagesHeight__2);


const slideSize__2 = slides__2[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__2 = slideSize__2.width;
const slideHeight__2 = slideSize__2.height;

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
const setSlidePosition__2 = (slide__2, index__2) => {
    slide__2.style.left = slideWidth__2 * index__2 + "px";
};

slides__2.forEach(setSlidePosition__2);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__2 = document.querySelector(".carousel__track__2");
    const slides__2 = Array.from(track__2.children);
    const nextButton__2 = document.querySelector('.carousel__button--right__2');
    const prevButton__2 = document.querySelector('.carousel__button--left__2');
    const dotsNav__2 = document.querySelector('.carousel__nav__2');
    const dots__2 = Array.from(dotsNav__2.children);
    const images__2 = document.querySelector('.carousel__images__2');
    const imagesSize__2 = images__2.getBoundingClientRect();
    const carouselTrackContainer__2 = document.querySelector('.carousel__track-container__2');
    const imagesHeight__2 = imagesSize__2.height;
    carouselTrackContainer__2.style.height = imagesHeight__2 + 'px';
    const slideSize__2 = slides__2[0].getBoundingClientRect();
    const slideWidth__2 = slideSize__2.width;
    const slideHeight__2 = slideSize__2.height;
    const setSlidePosition__2 = (slide__2, index__2) => {
        slide__2.style.left = slideWidth__2 * index__2 + "px";
    };
    slides__2.forEach(setSlidePosition__2);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__2 = (track__2, currentSlide__2, targetSlide__2) => { //需要理解
    track__2.style.transform = 'translateX(-' + targetSlide__2.style.left + ')';
    currentSlide__2.classList.remove('current-slide__2');
    targetSlide__2.classList.add('current-slide__2');
}

const updataDots__2 = (currentDot__2, targetDot__2) => {
    currentDot__2.classList.remove('current-slide__2');
    targetDot__2.classList.add('current-slide__2');
}

const hideShowArrows__2 = (slides__2, prevButton__2, nextButton__2, targetIndex__2) => {
    if (targetIndex__2 === 0) {
        prevButton__2.classList.add('is-hidden__2');
        nextButton__2.classList.remove('is-hidden__2')
    } else if (targetIndex__2 === slides__2.length - 1) {
        prevButton__2.classList.remove('is-hidden__2');
        nextButton__2.classList.add('is-hidden__2');

    } else {
        prevButton__2.classList.remove('is-hidden__2');
        nextButton__2.classList.remove('is-hidden__2');
    }

}

// when I click left, move slide to the left
prevButton__2.addEventListener('click', e => {
    const currentSlide__2 = track__2.querySelector('.current-slide__2');
    const prevSlide__2 = currentSlide__2.previousElementSibling;
    const currentDot__2 = dotsNav__2.querySelector('.current-slide__2');
    const prevDot__2 = currentDot__2.previousElementSibling;
    const prevIndex__2 = slides__2.findIndex(slide__2 => slide__2 === prevSlide__2);



    moveToSlide__2(track__2, currentSlide__2, prevSlide__2);
    updataDots__2(currentDot__2, prevDot__2);
    hideShowArrows__2(slides__2, prevButton__2, nextButton__2, prevIndex__2)
})



// when I click right, move slide to the right
nextButton__2.addEventListener('click', e => {
    const currentSlide__2 = track__2.querySelector('.current-slide__2');
    const nextSlide__2 = currentSlide__2.nextElementSibling; //需要理解
    const currentDot__2 = dotsNav__2.querySelector('.current-slide__2');
    const nextDot__2 = currentDot__2.nextElementSibling;
    const nextIndex__2 = slides__2.findIndex(slide__2 => slide__2 === nextSlide__2);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__2(track__2, currentSlide__2, nextSlide__2);
    updataDots__2(currentDot__2, nextDot__2);
    hideShowArrows__2(slides__2, prevButton__2, nextButton__2, nextIndex__2);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__2.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__2 = e.target.closest('button__2');

    // console.log('test1');
    if (!targetDot__2) return;
    // console.log('test2');
    const currentSlide__2 = track__2.querySelector('.current-slide__2');
    const currentDot__2 = dotsNav__2.querySelector('.current-slide__2');
    const targetIndex__2 = dots__2.findIndex(dot__2 => dot__2 === targetDot__2);
    const targetSlide__2 = slides__2[targetIndex__2];

    moveToSlide__2(track__2, currentSlide__2, targetSlide__2);
    updataDots__2(currentDot__2, targetDot__2);
    hideShowArrows__2(slides__2, prevButton__2, nextButton__2, targetIndex__2)

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
