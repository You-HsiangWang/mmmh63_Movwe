// 購物車詳情 展開

$('#cartInfo').click(function () {
    console.log('hello', this);
    $('.booking-list').toggleClass('d-none');
    $('#cartInfo').toggleClass('border-bottom-main-color');
    $('#cartInfo .arrow').toggleClass('rotate-00');
});


// 優惠券詳情 展開

$('#discountInfo').click(function () {
    console.log('hello', this);
    $('.discount-info').toggleClass('d-none');
    $('#discountInfo').toggleClass('border-bottom-main-color');
    $('#discountInfo .arrow').toggleClass('rotate-00');
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

    $('#deliveryFee').removeClass('d-none');
});


// 把資料帶到下一步

function GotoPay() {
    const memberName = document.querySelector('input[name="membername"]').value; 

    const memberAddress = document.querySelector('input[name="memberaddress"]').value; 

    const memberPhone = document.querySelector('input[name="memberphone"]').value; 

    // console.log(memberName, memberAddress, memberPhone);

    const deliveryInfo = {
        'memberName': memberName,
        'memberAddress': memberAddress,
        'memberPhone': memberPhone,
    };

    $.get('api_delivery.php', deliveryInfo, function (data) { console.log(data); }, 'json')



};
