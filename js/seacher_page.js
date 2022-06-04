const forumButton = document.querySelector('#searchpage__forum_button')
const movieButton = document.querySelector('#searchpage__movie_button')
const productButton = document.querySelector('#searchpage__product_button')
console.log(forumButton);


const carouselBigBox = document.querySelector('.carousel__big__box')

const articleContainer = document.querySelector('.article__container')

const carouselBigBox__7 = document.querySelector('.carousel__big__box__7')



articleContainer.style.display = 'none'
forumButton.addEventListener('click',()=>{

    if(forumButton.style.backgroundColor === 'rgb(16, 255, 162)'){
        forumButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
        forumButton.style.color = 'rgba(255, 255, 255, 0.3)'
    }
    else{
        forumButton.style.backgroundColor = 'rgb(16, 255, 162)'
        forumButton.style.color = 'black'

    }

    articleContainer.style.display = 'block'
    carouselBigBox.style.display = 'none'
    carouselBigBox__7.style.display = 'none'

    movieButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    movieButton.style.color = 'rgba(255, 255, 255, 0.3)'

    productButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    productButton.style.color = 'rgba(255, 255, 255, 0.3)'


})


movieButton.style.backgroundColor = 'rgb(16, 255, 162)'
movieButton.style.color = 'black'
movieButton.addEventListener('click',()=>{
    if(movieButton.style.backgroundColor === 'rgb(16, 255, 162)'){
        movieButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
        movieButton.style.color = 'rgba(255, 255, 255, 0.3)'
    }
    else{
        movieButton.style.backgroundColor = 'rgb(16, 255, 162)'
        movieButton.style.color = 'black'

    }
    carouselBigBox.style.display = 'block'
    articleContainer.style.display = 'none'
    carouselBigBox__7.style.display = 'none'

    forumButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    forumButton.style.color = 'rgba(255, 255, 255, 0.3)'

    productButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    productButton.style.color = 'rgba(255, 255, 255, 0.3)'



})

carouselBigBox__7.style.display = 'none'
productButton.addEventListener('click',()=>{
    if(productButton.style.backgroundColor === 'rgb(16, 255, 162)'){
        productButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
        productButton.style.color = 'rgba(255, 255, 255, 0.3)'
    }
    else{
        productButton.style.backgroundColor = 'rgb(16, 255, 162)'
        productButton.style.color = 'black'

    }


    carouselBigBox__7.style.display = 'block'
    carouselBigBox.style.display = 'none'
    articleContainer.style.display = 'none'

    forumButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    forumButton.style.color = 'rgba(255, 255, 255, 0.3)'

    movieButton.style.backgroundColor = 'rgba(0, 0, 0, 0)'
    movieButton.style.color = 'rgba(255, 255, 255, 0.3)'


})


var eId = "Title";
var inputId = "myInput";
var hElement = document.getElementById(eId);
var inputElement = document.getElementById(inputId);

inputElement.addEventListener("input",function () {
    var value = inputElement.value
    hElement.innerHTML = value

})


var input = document.getElementById("myInput");
var inputbtn = document.getElementById("myInput");
input.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("search__Btn").click();
    }
});

const searchFinal = document.querySelector('.search__final')
const searchBtn = document.querySelector('#search__Btn')
const searchInputSwitch = document.querySelector('.search__input__switch')
const searchInputSwitch02 = document.querySelector('.search__input__switch-2')
const carouselSearch = document.querySelector('.carousel')
const searchCaryContainer = document.querySelector('.search__Cary__container')


console.log(searchBtn);

searchInputSwitch02.style.display = 'none'
searchCaryContainer.style.display = 'none'
searchBtn.addEventListener('click',()=>{

    searchInputSwitch.style.display = 'none'
    searchInputSwitch02.style.display = 'block'
    carouselSearch.style.display = 'none'
    searchCaryContainer.style.display = 'block'

})






// var testInput = document.getElementById('myInput')
// var submitBtn = document.querySelector('.submitBtn')
// var searchPoint = document.querySelector('.search__point')

// function FsubmitBtn(value) {
//     var str = "";
//     var submitValue = testInput.value;
//     str = submitValue;
//     alert(str);
// }
// submitBtn.addEventListener('click',FsubmitBtn);




