
const track__6 = document.querySelector(".carousel__track__6");
// track 被賦予一個值 = .carousel__track = 整列火車

const slides__6 = Array.from(track__6.children);
// slides 被賦予一個陣列 =  track.children = 每節車廂

const nextButton__6 = document.querySelector('.carousel__button--right__6');
const prevButton__6 = document.querySelector('.carousel__button--left__6');
const dotsNav__6 = document.querySelector('.carousel__nav__6');
const dots__6 = Array.from(dotsNav__6.children);
const images__6 = document.querySelector('.carousel__images__6');


// const containerHeight = imgHeight.getBoundingClientRect();
const imagesSize__6 = images__6.getBoundingClientRect();
// console.log(imagesSize);
const carouselTrackContainer__6 = document.querySelector('.carousel__track-container__6');
const imagesHeight__6 = imagesSize__6.height;
// console.log(imagesHeight);
// carouselTrackContainer__6.style.height = imagesHeight__6 + 'px';
// // console.log();
// console.log(imagesHeight__6);


const slideSize__6 = slides__6[0].getBoundingClientRect();
// 抓 slides陣列裡第一個物件之寬高
const slideWidth__6 = slideSize__6.width;
const slideHeight__6 = slideSize__6.height;

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
const setSlidePosition__6 = (slide__6, index__6) => {
    slide__6.style.left = slideWidth__6 * index__6 + "px";
};

slides__6.forEach(setSlidePosition__6);
// ---------------------------------------------


// -----------$(window)resize--------------------------------------------------------------

$(window).resize(function () {
    const track__6 = document.querySelector(".carousel__track__6");
    const slides__6 = Array.from(track__6.children);
    const nextButton__6 = document.querySelector('.carousel__button--right__6');
    const prevButton__6 = document.querySelector('.carousel__button--left__6');
    const dotsNav__6 = document.querySelector('.carousel__nav__6');
    const dots__6 = Array.from(dotsNav__6.children);
    const images__6 = document.querySelector('.carousel__images__6');
    const imagesSize__6 = images__6.getBoundingClientRect();
    const carouselTrackContainer__6 = document.querySelector('.carousel__track-container__6');
    const imagesHeight__6 = imagesSize__6.height;
    carouselTrackContainer__6.style.height = imagesHeight__6 + 'px';
    const slideSize__6 = slides__6[0].getBoundingClientRect();
    const slideWidth__6 = slideSize__6.width;
    const slideHeight__6 = slideSize__6.height;
    const setSlidePosition__6 = (slide__6, index__6) => {
        slide__6.style.left = slideWidth__6 * index__6 + "px";
    };
    slides__6.forEach(setSlidePosition__6);
})

// -----------$(window)resize--------------------------------------------------------------







const moveToSlide__6 = (track__6, currentSlide__6, targetSlide__6) => { //需要理解
    track__6.style.transform = 'translateX(-' + targetSlide__6.style.left + ')';
    currentSlide__6.classList.remove('current-slide__6');
    targetSlide__6.classList.add('current-slide__6');
}

const updataDots__6 = (currentDot__6, targetDot__6) => {
    currentDot__6.classList.remove('current-slide__6');
    targetDot__6.classList.add('current-slide__6');
}

const hideShowArrows__6 = (slides__6, prevButton__6, nextButton__6, targetIndex__6) => {
    if (targetIndex__6 === 0) {
        prevButton__6.classList.add('is-hidden__6');
        nextButton__6.classList.remove('is-hidden__6')
    } else if (targetIndex__6 === slides__6.length - 1) {
        prevButton__6.classList.remove('is-hidden__6');
        nextButton__6.classList.add('is-hidden__6');

    } else {
        prevButton__6.classList.remove('is-hidden__6');
        nextButton__6.classList.remove('is-hidden__6');
    }

}

// when I click left, move slide to the left
prevButton__6.addEventListener('click', e => {
    const currentSlide__6 = track__6.querySelector('.current-slide__6');
    const prevSlide__6 = currentSlide__6.previousElementSibling;
    const currentDot__6 = dotsNav__6.querySelector('.current-slide__6');
    const prevDot__6 = currentDot__6.previousElementSibling;
    const prevIndex__6 = slides__6.findIndex(slide__6 => slide__6 === prevSlide__6);



    moveToSlide__6(track__6, currentSlide__6, prevSlide__6);
    updataDots__6(currentDot__6, prevDot__6);
    hideShowArrows__6(slides__6, prevButton__6, nextButton__6, prevIndex__6)
})



// when I click right, move slide to the right
nextButton__6.addEventListener('click', e => {
    const currentSlide__6 = track__6.querySelector('.current-slide__6');
    const nextSlide__6 = currentSlide__6.nextElementSibling; //需要理解
    const currentDot__6 = dotsNav__6.querySelector('.current-slide__6');
    const nextDot__6 = currentDot__6.nextElementSibling;
    const nextIndex__6 = slides__6.findIndex(slide__6 => slide__6 === nextSlide__6);
    // const amountToMove = nextSlide.style.left;

    //move to the next slide--需要理解
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('current-slide');
    // nextSlide.classList.add('current-slide');

    moveToSlide__6(track__6, currentSlide__6, nextSlide__6);
    updataDots__6(currentDot__6, nextDot__6);
    hideShowArrows__6(slides__6, prevButton__6, nextButton__6, nextIndex__6);

})

//--------------------- 需要理解-------------------------------------------
// when I click the nav indicators, move to that slide
dotsNav__6.addEventListener('click', e => {
    // what indicator was click on ?
    const targetDot__6 = e.target.closest('button__6');

    // console.log('test1');
    if (!targetDot__6) return;
    // console.log('test2');
    const currentSlide__6 = track__6.querySelector('.current-slide__6');
    const currentDot__6 = dotsNav__6.querySelector('.current-slide__6');
    const targetIndex__6 = dots__6.findIndex(dot__6 => dot__6 === targetDot__6);
    const targetSlide__6 = slides__6[targetIndex__6];

    moveToSlide__6(track__6, currentSlide__6, targetSlide__6);
    updataDots__6(currentDot__6, targetDot__6);
    hideShowArrows__6(slides__6, prevButton__6, nextButton__6, targetIndex__6)

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




const singlePageIQiYi = document.querySelector('.single__page__iQiYi')
const singlePageNetflix = document.querySelector('.single__page__Netflix')

const switchNetflex = document.querySelector('.switch__netflex')
const switchNetflex_2 = document.querySelector('.switch__netflex_2')
const switchNetflex_3 = document.querySelector('.switch__netflex_3')
const switchNetflex_4 = document.querySelector('.switch__netflex_4')
const switchNetflex_5 = document.querySelector('.switch__netflex_5')
const switchNetflex_6 = document.querySelector('.switch__netflex_6')
const switchNetflex_7 = document.querySelector('.switch__netflex_7')
const switchNetflex_8 = document.querySelector('.switch__netflex_8')
const switchNetflex_9 = document.querySelector('.switch__netflex_9')
const switchNetflex_10 = document.querySelector('.switch__netflex_10')

const switchIQiyi = document.querySelector('.switch__iQiyi')
const switchIQiyi_2 = document.querySelector('.switch__iQiyi_2')
const switchIQiyi_3 = document.querySelector('.switch__iQiyi_3')
const switchIQiyi_4 = document.querySelector('.switch__iQiyi_4')
const switchIQiyi_5 = document.querySelector('.switch__iQiyi_5')
const switchIQiyi_6 = document.querySelector('.switch__iQiyi_6')
const switchIQiyi_7 = document.querySelector('.switch__iQiyi_7')
const switchIQiyi_8 = document.querySelector('.switch__iQiyi_8')
const switchIQiyi_9 = document.querySelector('.switch__iQiyi_9')
const switchIQiyi_10 = document.querySelector('.switch__iQiyi_10')





switchIQiyi.style.display = ('block');
switchIQiyi_2.style.display = ('block');
switchIQiyi_3.style.display = ('block');
switchIQiyi_4.style.display = ('block');
switchIQiyi_5.style.display = ('block');
switchIQiyi_6.style.display = ('block');
switchIQiyi_7.style.display = ('block');
switchIQiyi_8.style.display = ('block');
switchIQiyi_9.style.display = ('block');
switchIQiyi_10.style.display = ('block');

// switchIQiyi.style.display = ('none');
// switchIQiyi_2.style.display = ('none');
// switchIQiyi_3.style.display = ('none');
// switchIQiyi_4.style.display = ('none');
// switchIQiyi_5.style.display = ('none');
// switchIQiyi_6.style.display = ('none');
// switchIQiyi_7.style.display = ('none');
// switchIQiyi_8.style.display = ('none');
// switchIQiyi_9.style.display = ('none');
// switchIQiyi_10.style.display = ('none');

singlePageIQiYi.style.borderBottom = '1px solid rgb(16, 255, 162)'
singlePageIQiYi.style.color = 'rgb(16, 255, 162)'

singlePageIQiYi.addEventListener('click',()=>{

    singlePageIQiYi.style.borderBottom = '1px solid rgb(16, 255, 162)'
    singlePageIQiYi.style.color = 'rgb(16, 255, 162)'

    singlePageNetflix.style.borderBottom = '0px solid rgba(16, 255, 163, 0)'
    singlePageNetflix.style.color = 'white'


    switchIQiyi.style.display = ('block');
    switchIQiyi_2.style.display = ('block');
    switchIQiyi_3.style.display = ('block');
    switchIQiyi_4.style.display = ('block');
    switchIQiyi_5.style.display = ('block');
    switchIQiyi_6.style.display = ('block');
    switchIQiyi_7.style.display = ('block');
    switchIQiyi_8.style.display = ('block');
    switchIQiyi_9.style.display = ('block');
    switchIQiyi_10.style.display = ('block');

    switchNetflex.style.display = ('none')
    switchNetflex_2.style.display = ('none')
    switchNetflex_3.style.display = ('none')
    switchNetflex_4.style.display = ('none')
    switchNetflex_5.style.display = ('none')
    switchNetflex_6.style.display = ('none')
    switchNetflex_7.style.display = ('none')
    switchNetflex_8.style.display = ('none')
    switchNetflex_9.style.display = ('none')
    switchNetflex_10.style.display = ('none')

})

switchNetflex.style.display = ('none')
switchNetflex_2.style.display = ('none')
switchNetflex_3.style.display = ('none')
switchNetflex_4.style.display = ('none')
switchNetflex_5.style.display = ('none')
switchNetflex_6.style.display = ('none')
switchNetflex_7.style.display = ('none')
switchNetflex_8.style.display = ('none')
switchNetflex_9.style.display = ('none')
switchNetflex_10.style.display = ('none')


singlePageNetflix.addEventListener('click',()=>{


    singlePageNetflix.style.borderBottom = '1px solid rgb(16, 255, 162)'
    singlePageNetflix.style.color = 'rgb(16, 255, 162)'

    singlePageIQiYi.style.borderBottom = '0px solid rgba(16, 255, 163, 0)'
    singlePageIQiYi.style.color = 'white'


    switchIQiyi.style.display = ('none');
    switchIQiyi_2.style.display = ('none');
    switchIQiyi_3.style.display = ('none');
    switchIQiyi_4.style.display = ('none');
    switchIQiyi_5.style.display = ('none');
    switchIQiyi_6.style.display = ('none');
    switchIQiyi_7.style.display = ('none');
    switchIQiyi_8.style.display = ('none');
    switchIQiyi_9.style.display = ('none');
    switchIQiyi_10.style.display = ('none');


    switchNetflex.style.display = ('block')
    switchNetflex_2.style.display = ('block')
    switchNetflex_3.style.display = ('block')
    switchNetflex_4.style.display = ('block')
    switchNetflex_5.style.display = ('block')
    switchNetflex_6.style.display = ('block')
    switchNetflex_7.style.display = ('block')
    switchNetflex_8.style.display = ('block')
    switchNetflex_9.style.display = ('block')
    switchNetflex_10.style.display = ('block')

})

