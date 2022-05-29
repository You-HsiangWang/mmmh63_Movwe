// 一鍵移除 警告
// 一鍵移除 remove

// document.querySelector('.delete-button');
// function deleteFunction() {
//     confirm("確定要移除勾選的商品嗎?");
// };

// 移除單一商品 警告
// 移除單一商品 remove

// document.querySelector('.delete-one-button');
// function deleteOneFunction() {
//     if (document.getElementById('checkOneItem').attr)
//         confirm("確定要移除本商品嗎?");

// }

// Get the checkbox
var checkBox = document.getElementById("checkOneItem");
// Get the output text
var text = document.getElementById("text");

var nn = document.getElementById('noProduct');


function deleteFunction() {
    if (checkBox.checked == true) {
        if (confirm("確定要移除本商品嗎?") == true) {
            text.style.display = "none";
            // 如果購物車裡沒有商品
            nn.style.removeProperty('display', 'none');
            nn.style.setProperty('display', 'flex');
        }
    } else {
        alert("請勾選要移除的商品");
    }
};

// 購物車詳情 展開

// $('#cartInfo').click(function () {
//     console.log('hello', this);
//     $('.booking-list').toggleClass('d-none');
//     $('#cartInfo').toggleClass('border-bottom-main-color');
// });

// 商品數量調整

// $('.button-number-minus').click(function () {
//     console.log('hello -', this);
// });

// $('.button-number-plus').click(function () {
//     console.log('hello +', this);
// });

// 改變商品數量

// 數量改變金額也要變

var singlePrice = '840';
var subTotalPrice = `<h4>${singlePrice * q}</h4>`;
document.getElementById('subTotalPrice').innerHTML = subTotalPrice;

function addFunction() {
    var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    q++;
    document.getElementById('quantity').value = q;
    subTotalPrice = `<h4>${singlePrice * q}</h4>`;
    document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
};

function subFunction() {
    var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    if (q > 1) {
        q--;
        document.getElementById('quantity').value = q;
        subTotalPrice = `<h4>${singlePrice * q}</h4>`;
        document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
    }
};

// 優惠券詳情 展開

$('#discountInfo').click(function () {
    console.log('hello', this);
    $('.discount-info').toggleClass('d-none');
    $('#discountInfo').toggleClass('border-bottom-main-color');
});


