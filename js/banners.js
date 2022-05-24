const track = document.querySelector(".carousel_02_track");
// track 被賦予一個值 = .carousel_02_track = 整列火車

const slides = Array.from(track.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton = document.querySelector('.carousel_02_button--right');
const prevButton = document.querySelector('.carousel_02_button--left');
const dotsNav = document.querySelector('.carousel_02_nav');
const dots = Array.from(dotsNav.children);
const images = document.querySelector('.carousel_02_images');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize = images.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer = document.querySelector('.carousel_02_track-container');
const imagesHeight = imagesSize.height;
// console.log(imagesHeight);
carouselTrackContainer.style.height = imagesHeight + 'px';
// console.log();
console.log(imagesHeight);


const slideSize = slides[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth = slideSize.width;
const slideHeight = slideSize.height;

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
const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + "px";
};

slides.forEach(setSlidePosition);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track = document.querySelector(".carousel_02_track");
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel_02_button--right');
    const prevButton = document.querySelector('.carousel_02_button--left');
    const dotsNav = document.querySelector('.carousel_02_nav');
    const dots = Array.from(dotsNav.children);
    const images = document.querySelector('.carousel_02_images');
    const imagesSize = images.getBoundingClientRect();
    const carouselTrackContainer = document.querySelector('.carousel_02_track-container');
    const imagesHeight = imagesSize.height;
    carouselTrackContainer.style.height = imagesHeight + 'px';
    const slideSize = slides[0].getBoundingClientRect();
    const slideWidth = slideSize.width;
    const slideHeight = slideSize.height;
    const setSlidePosition = (slide, index) => {
        slide.style.left = slideWidth * index + "px";
    };
    slides.forEach(setSlidePosition);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide = (track, currentSlide, targetSlide) => { //需要理解
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide02');
    targetSlide.classList.add('current-slide02');
}

const updataDots = (currentDot, targetDot) => {
    currentDot.classList.remove('current-slide02');
    targetDot.classList.add('current-slide02');
}

const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
    if (targetIndex === 0) {
        prevButton.classList.add('is-hidden02');
        nextButton.classList.remove('is-hidden02')
    } else if (targetIndex === slides.length - 1) {
        prevButton.classList.remove('is-hidden02');
        nextButton.classList.add('is-hidden02');

    } else {
        prevButton.classList.remove('is-hidden02');
        nextButton.classList.remove('is-hidden02');
    }

}

// when I click left, move slide to the left
prevButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide02');
    const prevSlide = currentSlide.previousElementSibling;
    const currentDot = dotsNav.querySelector('.current-slide02');
    const prevDot = currentDot.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide);



    moveToSlide(track, currentSlide, prevSlide);
    updataDots(currentDot, prevDot);
    hideShowArrows(slides, prevButton, nextButton, prevIndex)
})



// when I click right, move slide to the right
nextButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide02');
    const nextSlide = currentSlide.nextElementSibling; //需要理解
    const currentDot = dotsNav.querySelector('.current-slide02');
    const nextDot = currentDot.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide02');
    // nextSlide.classList.add('current-slide02');

    moveToSlide(track, currentSlide, nextSlide);
    updataDots(currentDot, nextDot);
    hideShowArrows(slides, prevButton, nextButton, nextIndex);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot = e.target.closest('button');

    // console.log('test1');
    if (!targetDot) return;
    // console.log('test2');
    const currentSlide = track.querySelector('.current-slide02');
    const currentDot = dotsNav.querySelector('.current-slide02');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];

    moveToSlide(track, currentSlide, targetSlide);
    updataDots(currentDot, targetDot);
    hideShowArrows(slides, prevButton, nextButton, targetIndex)

    // if (targetIndex === 0) {
    //     prevButton.classList.add('is-hidden02');
    //     nextButton.classList.remove('is-hidden02')
    // }else if (targetIndex === slides.length - 1){
    //     prevButton.classList.remove('is-hidden02');
    //     nextButton.classList.add('is-hidden02');

    // }else{
    //     prevButton.classList.remove('is-hidden02');
    //     nextButton.classList.remove('is-hidden02');
    // }

})
