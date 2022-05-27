const platform__1 = document.querySelector('.platform__1')
const platform__2 = document.querySelector('.platform__2')
const platform__3 = document.querySelector('.platform__3')
const platform__4 = document.querySelector('.platform__4')

platform__1.style.backgroundColor = 'rgba(107, 107, 107, 0)'

platform__1.addEventListener('click',() =>{
    if(platform__1.style.backgroundColor === 'rgba(107, 107, 107, 0)'){
        platform__1.style.backgroundColor = 'rgb(16, 255, 162)'
        platform__1.style.color = '#000'
        platform__1.style.boxShadow = '0 0 5px rgb(16, 255, 162)'

    }
    else{
        platform__1.style.backgroundColor = 'rgba(107, 107, 107, 0)' 
        platform__1.style.color = 'rgb(134, 133, 133)'
        platform__1.style.boxShadow = '0 0 0'


        }
})
platform__2.style.backgroundColor = 'rgba(107, 107, 107, 0)'

platform__2.addEventListener('click',() =>{
    if(platform__2.style.backgroundColor === 'rgba(107, 107, 107, 0)'){
        platform__2.style.backgroundColor = 'rgb(16, 255, 162)'
        platform__2.style.color = '#000'
        platform__2.style.boxShadow = '0 0 5px rgb(16, 255, 162)'

    }
    else{
        platform__2.style.backgroundColor = 'rgba(107, 107, 107, 0)' 
        platform__2.style.color = 'rgb(134, 133, 133)'
        platform__2.style.boxShadow = '0 0 0'


        }
})
platform__3.style.backgroundColor = 'rgba(107, 107, 107, 0)'

platform__3.addEventListener('click',() =>{
    if(platform__3.style.backgroundColor === 'rgba(107, 107, 107, 0)'){
        platform__3.style.backgroundColor = 'rgb(16, 255, 162)'
        platform__3.style.color = '#000'
        platform__3.style.boxShadow = '0 0 5px rgb(16, 255, 162)'

    }
    else{
        platform__3.style.backgroundColor = 'rgba(107, 107, 107, 0)' 
        platform__3.style.color = 'rgb(134, 133, 133)'
        platform__3.style.boxShadow = '0 0 0'


        }
})
platform__4.style.backgroundColor = 'rgba(107, 107, 107, 0)'

platform__4.addEventListener('click',() =>{
    if(platform__4.style.backgroundColor === 'rgba(107, 107, 107, 0)'){
        platform__4.style.backgroundColor = 'rgb(16, 255, 162)'
        platform__4.style.color = '#000'
        platform__4.style.boxShadow = '0 0 5px rgb(16, 255, 162)'

    }
    else{
        platform__4.style.backgroundColor = 'rgba(107, 107, 107, 0)' 
        platform__4.style.color = 'rgb(134, 133, 133)'
        platform__4.style.boxShadow = '0 0 0'


        }
})



// const genre_item__1 = document.querySelector('.genre_item__1')
// const genre_item__2 = document.querySelector('.genre_item__2')
// const genre_item__3 = document.querySelector('.genre_item__3')
// const genre_item__4 = document.querySelector('.genre_item__4')


// genre_item__1.style.backgroundColor = 'rgba(107, 107, 107, 0)'

// genre_item__1.addEventListener('click',() =>{
//     if(genre_item__1.style.backgroundColor === 'rgba(107, 107, 107, 0)'){
//         genre_item__1.style.backgroundColor = 'rgb(16, 255, 162)'
//         genre_item__1.style.color = '#000'
//         genre_item__1.style.boxShadow = '0 0 5px rgb(16, 255, 162)'

//     }
//     else{
//         genre_item__1.style.backgroundColor = 'rgba(107, 107, 107, 0)' 
//         genre_item__1.style.color = 'rgb(134, 133, 133)'
//         genre_item__1.style.boxShadow = '0 0 0'


//         }
// })





// genre_item__1.addEventListener('mouseenter',()=>{
//     genre_item__1.style.color = 'rgb(16, 255, 162)'
// })
// genre_item__1.addEventListener('mouseleave',()=>{
//     genre_item__1.style.color = 'rgb(134, 133, 133)'
// })






$(".genre_item__1").each(function(){

    $(this).click(function(){
            $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
            // $(this).css({"color":"#000"})
    
            $(".genre_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".genre_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".genre_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    
    });
})

$(".genre_item__2").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".genre_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})

$(".genre_item__3").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".genre_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})

$(".genre_item__4").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".genre_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".genre_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})









// -------------------------------------------------------------------------







$(".browse_item__1").each(function(){

    $(this).click(function(){
            $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
            // $(this).css({"color":"#000"})
    
            $(".browse_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".browse_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".browse_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".browse_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    
    });
})

$(".browse_item__2").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".browse_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})

$(".browse_item__3").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".browse_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})

$(".browse_item__4").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".browse_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})
$(".browse_item__5").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".browse_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".browse_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    });
})





// -------------------------------------------------------------------------






$(".style_item__1").each(function(){

    $(this).click(function(){
            $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
            // $(this).css({"color":"#000"})
    
            $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
            $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
    
    });
})

$(".style_item__2").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})

$(".style_item__3").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})

$(".style_item__4").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__5").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__6").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__7").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__8").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__9").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__10").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__11").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})
$(".style_item__11").each(function(){

    $(this).click(function(){
        $(this).css({"backgroundColor":"rgb(16, 255, 162)","color":"#000"})
        $(".style_item__2").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__3").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__4").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__5").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__6").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__7").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__8").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__9").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__10").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
        $(".style_item__1").css({"backgroundColor":"rgba(107, 107, 107, 0)","color":"rgb(134, 133, 133)"})
});
})





