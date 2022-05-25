const forumButton = document.querySelector('#searchpage__forum_button')
const movieButton = document.querySelector('#searchpage__movie_button')
const productButton = document.querySelector('#searchpage__product_button')
console.log(forumButton);


const carouselBigBox = document.querySelector('.carousel__big__box')

const articleContainer = document.querySelector('.article__container')

const carouselBigBox__7 = document.querySelector('.carousel__big__box__7')



articleContainer.style.display = 'none'
forumButton.addEventListener('click',()=>{
    articleContainer.style.display = 'block'
    carouselBigBox.style.display = 'none'
    carouselBigBox__7.style.display = 'none'

})

movieButton.addEventListener('click',()=>{
    carouselBigBox.style.display = 'block'
    articleContainer.style.display = 'none'
    carouselBigBox__7.style.display = 'none'

})

carouselBigBox__7.style.display = 'none'
productButton.addEventListener('click',()=>{
    carouselBigBox__7.style.display = 'block'
    carouselBigBox.style.display = 'none'
    articleContainer.style.display = 'none'
})





