// 購物車詳情 展開

$('#cartInfo').click(function () {
    console.log('hello', this);
    $('.booking-list').toggleClass('d-none');
    $('#cartInfo').toggleClass('border-bottom-main-color');
});


// 優惠券詳情 展開

$('#discountInfo').click(function () {
    console.log('hello', this);
    $('.discount-info').toggleClass('d-none');
    $('#discountInfo').toggleClass('border-bottom-main-color');
});

// 物流選擇

$('.delivery').click(function () {
    console.log('delivery', this);
    $(this).css('border', '1.5px solid #10FFA2');
    $(this).children().css('color', '#10FFA2');
    $(this).children().children().css('stroke', '#10FFA2');
    $(this).siblings().css('border', '1.5px solid #fff');
    $(this).siblings().children().css('color', '#fff');
    $(this).siblings().children().children().css('stroke', '#fff');
});
