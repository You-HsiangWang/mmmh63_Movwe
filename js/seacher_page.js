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





