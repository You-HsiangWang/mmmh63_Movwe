var slider = new Slider("slider", {
    play_icon: '<i class="fas fa-play"></i>',
    pause_icon: '<i class="far fa-pause-circle"></i>',
    prev_icon: '<i class="fas fa-angle-left"></i>',
    next_icon: '<i class="fas fa-angle-right"></i>'
});

// 最上面的filter點選切換顏色

$('.filter-top ul h4').click(function () {
    console.log('hello', this);
    $(this).addClass('main-color')
    $(this).parent().parent().siblings().children().children().removeClass('main-color');
});

// 熱門文章輪播牆

// 熱門創作者輪播牆

var page = 0;

$('.arrow-right').click(function () {
    page++;

    if (page >= 5) {
        page = 0
    }

    pageUpdate()

})

function pageUpdate() {
    console.log('hello', this);
    $('.hot-creator-train').css('transform', `translateX(${page * -$('.train-list').width()}px)`)

}

// 我自己寫ㄉ 我好棒 \ ( ^ 0 ^ ) /
