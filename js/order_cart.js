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

function deleteFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("checkOneItem");
    // Get the output text
    var text = document.getElementById("text");

    var noProduct = document.getElementById('noProduct');

    if (checkBox.checked == true) {
        if (confirm("確定要移除本商品嗎?") == true) {
            text.style.display = "none";
            noProduct.style.display = 'flex';
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

// 改變商品數量

// 數量改變金額也要變

var q = parseInt(document.getElementById('quantity').value);

var singlePrice = '899';
var subTotalPrice = `<h4>${singlePrice * q}</h4>`;
// var productQuantityQQ = `<h4>總共有${q}項商品</h4>`;

// document.getElementById('subTotalPrice').innerHTML = subTotalPrice;

function addFunction() {
    // var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    q++;
    document.getElementById('quantity').value = q;
    subTotalPrice = `<h4>${singlePrice * q}</h4>`;
    document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
    // document.getElementById('productTotalPrice').innerHTML = subTotalPrice;
    // document.getElementById('productQuantityQQ').innerHTML = productQuantityQQ;
};

function subFunction() {
    // var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    if (q > 1) {
        q--;
        document.getElementById('quantity').value = q;
        subTotalPrice = `<h4>${singlePrice * q}</h4>`;
        document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
        // document.getElementById('productTotalPrice').innerHTML = subTotalPrice;
        // document.getElementById('productQuantityQQ').innerHTML = productQuantityQQ;
    }
};

// 優惠券詳情 展開

// $('#discountInfo').click(function () {
//     console.log('hello', this);
//     $('.discount-info').toggleClass('d-none');
//     $('#discountInfo').toggleClass('border-bottom-main-color');
// });


// 點優惠券折抵金額 + 商品總金額加總

function AddDiscount() {
    const ProductPrice = document.getElementById('ProductPrice').innerText;
    const rr = +ProductPrice;
    const dd = document.querySelector('input[name="discount"]:checked').value;


    discountQQ = `<h4 class="orange"> - NTD ${dd}</h4>`;
    totalPayment = `<h4 class="orange"> NTD ${rr - dd}</h4>`

    document.getElementById('discountQQ').innerHTML = discountQQ;
    document.getElementById('totalPayment').innerHTML = totalPayment;

};

// 送資料到下一頁的物流選擇

function DatatoDelivery() {
    const pp = document.getElementById('discountQQ').innerText;
    const ss = document.getElementById('totalPayment').innerText;
    const vv = document.querySelector('input[name="discount"]:checked').value;

    console.log(pp, ss, vv);

    const gg = {
        'ProductDiscount': pp,
        'ProductTotalPrice': ss,
        'DiscountValue': vv,
    };

    console.log(gg);

    $.get('api_cart.php', gg, function (data) {
        console.log(data);
        location.href = './order_delivery.php'
    }, 'json')

};

