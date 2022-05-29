const mainBtn = document.querySelector('.main__btn')
const starBtn = document.querySelector('.star__btn')
const disBtn = document.querySelector('.dis__btn')
const marvelBtn = document.querySelector('.marvel__btn')


const storeMain = document.querySelector('.store__main')
const storeStar = document.querySelector('.store__star')
const storeDis = document.querySelector('.store__dis')
const storeMarvel = document.querySelector('.store__marvel')


mainBtn.addEventListener('click',()=>{
    storeMain.style.display = 'block'
    storeStar.style.display = 'none'
    storeDis.style.display = 'none'
    storeMarvel.style.display = 'none'
})

starBtn.addEventListener('click',()=>{
    storeMain.style.display = 'none'
    storeStar.style.display = 'block'
    storeDis.style.display = 'none'
    storeMarvel.style.display = 'none'
})

disBtn.addEventListener('click',()=>{
    storeMain.style.display = 'none'
    storeStar.style.display = 'none'
    storeDis.style.display = 'block'
    storeMarvel.style.display = 'none'
})

marvelBtn.addEventListener('click',()=>{
    storeMain.style.display = 'none'
    storeStar.style.display = 'none'
    storeDis.style.display = 'none'
    storeMarvel.style.display = 'block'
})

