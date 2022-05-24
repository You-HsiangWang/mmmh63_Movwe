let slides___1, indicators___1;
let prevSlide___1, nextSlide___1;
let currentSlideIndex___1 = 1;
let interval___1 = 5000;
let timer___1;
let windowEvent___1;
window.addEventListener('load', function (e) {
    windowEvent___1 = e;
    slides___1 = document.getElementsByClassName('slide');
    if (document.getElementsByClassName('carousel-indicators___1')) {
        if (document.getElementsByClassName('carousel-indicators___1').length > 0) {
            indicators___1 = document.getElementsByClassName('carousel-indicators___1')[0].children;
            if (indicators___1) {
                for (let indicatorIndex = 0; indicatorIndex < indicators___1.length; indicatorIndex++) {
                    indicators___1[indicatorIndex].addEventListener('click', function (e) {
                        goToCurrentSlide(indicatorIndex + 1, false, e);
                    });
                    indicators___1[indicatorIndex].addEventListener('keydown', function (e) {
                        goToCurrentSlide(indicatorIndex + 1, true, e);
                    });
                }
            }
        }
    }
    if (document.getElementsByClassName('prevSlide___1')) {
        prevSlide___1 = document.getElementsByClassName('prevSlide___1')[0];
        prevSlide___1.addEventListener('click', function (e) {
            goToPrevSlide(false, e);
        });
        prevSlide___1.addEventListener('keydown', function (e) {
            goToPrevSlide(true, e);
        });
    }
    if (document.getElementsByClassName('nextSlide___1')) {
        nextSlide___1 = document.getElementsByClassName('nextSlide___1')[0];
        nextSlide___1.addEventListener('click', function (e) {
            goToNextSlide(false, e);
        });
        nextSlide___1.addEventListener('keydown', function (e) {
            goToNextSlide(true, e);
        });
    }
    if (slides___1 && slides___1.length > 1) {
        currentSlideIndex___1 = getCurrentSlideIndex___1();
        setControlButton(currentSlideIndex___1);
        autoPlay(windowEvent___1, interval___1);
    }
});
function setControlButton(currentSlideIndex___1) {
    if (currentSlideIndex___1 == 1) {
        prevSlide___1.classList.add('inactive');
    } else {
        prevSlide___1.classList.remove('inactive');
    }
    if (currentSlideIndex___1 == slides___1.length) {
        nextSlide___1.classList.add('inactive');
    } else {
        nextSlide___1.classList.remove('inactive');
    }
}
function goToPrevSlide(isKey, event) {
    currentSlideIndex___1 = getCurrentSlideIndex___1() - 1;
    if (currentSlideIndex___1 >= 1) {
        if (isKey) {
            if (event.keyCode === 13) {
                showCurrentSlide(currentSlideIndex___1);
            }
        } else {
            showCurrentSlide(currentSlideIndex___1);
        }
        setControlButton(currentSlideIndex___1);
    }
}
function goToNextSlide(isKey, event) {
    currentSlideIndex___1 = getCurrentSlideIndex___1() + 1;
    if (currentSlideIndex___1 <= slides___1.length) {
        if (isKey) {
            if (event.keyCode === 13) {
                showCurrentSlide(currentSlideIndex___1);
            }
        } else {
            showCurrentSlide(currentSlideIndex___1);
        }
        setControlButton(currentSlideIndex___1);
    }
}
function getCurrentSlideIndex___1() {
    for (let slideIndex = 0; slideIndex < slides___1.length; slideIndex++) {
        if (slides___1[slideIndex].classList.contains('active')) {
            currentSlideIndex___1 = slideIndex;
        }
    }
    return currentSlideIndex___1 + 1;
}
function goToCurrentSlide(slideIndex, isKey, event) {
    if (isKey) {
        if (event.keyCode === 13) {
            showCurrentSlide(slideIndex);
        }
    } else {
        showCurrentSlide(slideIndex);
    }
}
function showCurrentSlide(slideIndex) {
    if (slides___1 && slides___1.length > 0) {
        for (let slide of slides___1) {
            slide.classList.remove('active');
        }
        slides___1[slideIndex - 1].classList.add('active');
    }
    if (indicators___1 && indicators___1.length > 0) {
        for (let indicator of indicators___1) {
            indicator.classList.remove('active');
            indicator.setAttribute('aria-disabled', 'true');
        }
        indicators___1[slideIndex - 1].classList.add('active');
        indicators___1[slideIndex - 1].setAttribute('aria-disabled', 'false');
    }
    setControlButton(slideIndex);
    clearInterval(timer___1);
    autoPlay(windowEvent___1, interval___1);
}
function autoPlay(event, interval___1) {
    if (interval___1 === 0) return;
    timer___1 = setInterval(function () {
        if (currentSlideIndex___1 <= slides___1.length) {
            goToNextSlide(false, event);
        }
        if (currentSlideIndex___1 > slides___1.length) {
            currentSlideIndex___1 = 1;
            showCurrentSlide(currentSlideIndex___1);
        }
    }, interval___1);
}
