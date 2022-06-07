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
    $('#discountInfo .arrow0').toggleClass('rotate-90');

});

// 物流展開

$('#deliveryFunc').click(function () {
    console.log('hello', this);
    $('.delivery-func').toggleClass('d-none');
    $('#deliveryFunc').toggleClass('border-bottom-main-color');
    $('#deliveryFunc .arrow0').toggleClass('rotate-90');
});

// 收件資料展開

$('#deliveryInfo').click(function () {
    console.log('hello', this);
    $('.delivery-info').toggleClass('d-none');
    $('#deliveryInfo').toggleClass('border-bottom-main-color');
    $('#deliveryInfo .arrow0').toggleClass('rotate-90');
});

// 信用卡格式

$('.creditCardText').keyup(function() {
    var foo = $(this).val().split("-").join(""); // remove hyphens
    if (foo.length > 0) {
      foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
    }
    $(this).val(foo);
  });