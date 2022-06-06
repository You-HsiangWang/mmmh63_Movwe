const actorAll = document.querySelector('.actor_all')
const actorMovie = document.querySelector('.actor_movie')
const actorTvshow = document.querySelector('.actor_tvshow')
const actorShow = document.querySelector('.actor_show')

const actorAll_2 = document.querySelector('.actor_all_2')
const actorMovie_2 = document.querySelector('.actor_movie_2')
const actorTvshow_2 = document.querySelector('.actor_tv_2')
const actorShow_2 = document.querySelector('.actor_show_2')




const ActorAll = document.querySelector('.Actor__all')
const ActorMovie = document.querySelector('.Actor__movie')
const ActorTV = document.querySelector('.Actor__TV')
const ActorFun = document.querySelector('.Actor__fun')



ActorAll.style.display = 'block'
actorAll_2.style.color = 'rgb(16, 255, 162)'
actorAll.addEventListener('click', () => {

    actorAll_2.style.color = 'rgb(16, 255, 162)'
    actorMovie_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorTvshow_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorShow_2.style.color = 'rgba(240, 248, 255, 0.493)'
    ActorAll.style.display = 'block'
    ActorMovie.style.display = 'none'
    ActorTV.style.display = 'none'
    ActorFun.style.display = 'none'

})

ActorMovie.style.display = 'none'
actorMovie.addEventListener('click', () => {

    actorAll_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorMovie_2.style.color = 'rgb(16, 255, 162)'
    actorTvshow_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorShow_2.style.color = 'rgba(240, 248, 255, 0.493)'
    ActorAll.style.display = 'none'
    ActorMovie.style.display = 'block'
    ActorTV.style.display = 'none'
    ActorFun.style.display = 'none'

})

ActorTV.style.display = 'none'
actorTvshow.addEventListener('click', () => {

    actorAll_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorMovie_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorTvshow_2.style.color = 'rgb(16, 255, 162)'
    actorShow_2.style.color = 'rgba(240, 248, 255, 0.493)'

    ActorAll.style.display = 'none'
    ActorMovie.style.display = 'none'
    ActorTV.style.display = 'block'
    ActorFun.style.display = 'none'

})

ActorFun.style.display = 'none'
actorShow.addEventListener('click', () => {

    actorAll_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorMovie_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorTvshow_2.style.color = 'rgba(240, 248, 255, 0.493)'
    actorShow_2.style.color = 'rgb(16, 255, 162)'

    ActorAll.style.display = 'none'
    ActorMovie.style.display = 'none'
    ActorTV.style.display = 'none'
    ActorFun.style.display = 'block'

})


const goToott03 = document.querySelector('.go-to-ott-03')
const bottom6Icon = document.querySelector('.go_to_ott')
const close_Ott_Box = document.querySelector('.close_ott_box')
const textContainer = document.querySelector('.text__container')

goToott03.style.display = 'none'
bottom6Icon.addEventListener('click', () => {
    console.log("hihi");
    goToott03.style.display = 'block'
    textContainer.style.filter = 'brightness(30%)'
})

close_Ott_Box.addEventListener('click', () => {
    goToott03.style.display = 'none'
    textContainer.style.filter = 'brightness(100%)'

})



const addTofild = document.querySelector('.addtofild');
const movieLikes = document.querySelector('.movie__likes');

addTofild.addEventListener('click',()=>{

    // movieLikes.style.color = 'rgb(16, 255, 162)'
    movieLikes.style.animationName = 'addfild'
    movieLikes.style.animationDuration = '.5s'
    // movieLikes.style.animationIterationCount = 'infinite'





})


// ----------------------------------




// 新增儲存網址
// $('.go_to_ott_box > .saveurl').on('click', function () {
//     console.log('有了');
//     const nowurl = window.location.href;
//     $.get('api_geturl.php', { nowurl }, function (data) {
//         console.log(data);
//     }, 'json');
// });







