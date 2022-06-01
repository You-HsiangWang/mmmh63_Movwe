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

// 商品數量調整

$('.button-number-minus').click(function () {
    console.log('hello -', this);
});

$('.button-number-plus').click(function () {
    console.log('hello +', this);
});

// 改變商品數量

// 數量改變金額也要變

var q = parseInt(document.getElementById('quantity').value);

var singlePrice = '840';
var subTotalPrice = `<h4>${singlePrice * q}</h4>`;
document.getElementById('subTotalPrice').innerHTML = subTotalPrice;

function addFunction() {
    // var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    q++;
    document.getElementById('quantity').value = q;
    subTotalPrice = `<h4>${singlePrice * q}</h4>`;
    document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
};

function subFunction() {
    // var q = parseInt(document.getElementById('quantity').value);
    q = isNaN(q) ? 0 : q;
    if (q > 1) {
        q--;
        document.getElementById('quantity').value = q;
        subTotalPrice = `<h4>${singlePrice * q}</h4>`;
        document.getElementById('subTotalPrice').innerHTML = subTotalPrice;
    }
};

// 優惠券詳情 展開

// $('#discountInfo').click(function () {
//     console.log('hello', this);
//     $('.discount-info').toggleClass('d-none');
//     $('#discountInfo').toggleClass('border-bottom-main-color');
// });

// 商品總數量與總金額

// var totalQuantity = `<h4>總共有${q}項商品</h4>`;
// document.getElementById('totalQuantity').innerHTML =
//     totalQuantity


// 點優惠券折抵金額

function AddDiscount() {
    var dd = document.querySelector('input[name="discount"]:checked').value;
    console.log('dd', dd);
    discountQQ = `<h4 class="orange"> - NTD ${dd}</h4>`;
    document.getElementById('discountQQ').innerHTML = discountQQ;
};


// 商品總金額加總
var ss = parseInt(subTotalPrice);
// var ff = document.querySelector('input[name="discount"]:checked').value;
var totalPayment = `<h4>NTD ${ss - dd}</h4>`;

console.log(ss);

document.getElementById('totalPayment').innerHTML = totalPayment;


// 購物車購物車購物車

// const dallorCommas = function (n) {
//     return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
// };

// const calcPrices = () => {
//     const trs = $('tbody > tr');

//     let totalPrice = 0;
//     trs.each(function () {
//         const tr = $(this);
//         const price = +tr.find('.price').attr('data-price');
//         tr.find('.price').text('$ ' + dallorCommas(price)); // 顯示單價
//         const quantity = +tr.find('select').val();
//         tr.find('.sub-total').text('$ ' + dallorCommas(price * quantity)); // 顯示小計
//         totalPrice += price * quantity;
//     });

//     $('#total-price').text('$ ' + dallorCommas(totalPrice));

// };
// calcPrices();

// $('.quantity').on('change', function () {
//     const me = $(this);
//     // console.log('me:', me);
//     const quantity = me.val();
//     const sid = me.closest('tr').attr('data-sid');

//     // console.log('tr:', me.find('tr'));

//     $.get('cart-api.php', {
//         sid,
//         quantity
//     }, function (data) {
//         console.log(data);
//         showCount(data);
//         calcPrices(); // 重算所有價格
//     }, 'json');

// });

// const removeItem = event => {

//     const me = $(event.currentTarget);
//     const sid = me.closest('tr').attr('data-sid');
//     $.get('cart-api.php', {
//         sid
//     }, function (data) {
//         console.log(data);
//         me.closest('tr').remove();
//         showCount(data);
//         calcPrices(); // 重算所有價格
//     }, 'json');

// }
