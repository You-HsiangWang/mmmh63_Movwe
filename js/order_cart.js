// 移除單一商品 警告
// 移除單一商品 remove

// document.querySelector('.delete-one-button');
// function deleteOneFunction() {
//     if (document.getElementById('checkOneItem').attr)
//         confirm("確定要移除本商品嗎?");
// }

// 移除單一商品

function deleteFunction(b) {
    var checkBox = document.getElementById(`checkOneItem${b}`);
    // console.log(checkBox);

    var text = document.getElementById(`text${b}`);

    if (checkBox.checked == true) {
        if (confirm("確認要移除此商品嗎?") == true) {
            text.remove();
        }
    }
};

// 改變商品數量

// 數量改變金額也要變

// var q = parseInt(document.getElementById('quantity').value);

// var singlePrice = document.getElementById('singlePrice').getAttribute("data-value");

// console.log(singlePrice);

// var subTotalPrice = `<h4>${singlePrice * q}</h4>`;

function addFunction(a) {
    q = parseInt(document.getElementById(`quantity${a}`).value);
    console.log('value', q);
    q = isNaN(q) ? 0 : q;
    q++;
    document.getElementById(`quantity${a}`).value = q;
    console.log('value', q);
    singlePrice = document.getElementById(`singlePrice${a}`).getAttribute("data-value");
    subTotalPrice = `<h4>${singlePrice * q}</h4>`;
    // console.log('subTotalPrice',subTotalPrice);

    document.getElementById(`subTotalPrice${a}`).innerHTML = subTotalPrice;
    // console.log('singlePrice',singlePrice);

    // document.getElementById('productTotalPrice').innerHTML = subTotalPrice;
    // document.getElementById('productQuantityQQ').innerHTML = productQuantityQQ;
};

function subFunction(a) {
    q = parseInt(document.getElementById(`quantity${a}`).value);
    q = isNaN(q) ? 0 : q;
    if (q > 1) {
        q--;
        document.getElementById(`quantity${a}`).value = q;
        console.log('value', q);
        singlePrice = document.getElementById(`singlePrice${a}`).getAttribute("data-value");
        subTotalPrice = `<h4>${singlePrice * q}</h4>`;
        document.getElementById(`subTotalPrice${a}`).innerHTML = subTotalPrice;

    }
};

// 點優惠券折抵金額 + 商品總金額加總

function AddDiscount() {

    const subTotalPriceS = document.getElementById("subTotalPriceS") ? document.getElementById("subTotalPriceS").innerText : 0;  // 如果有抓到id=subTotalPriceS, 請給我他的value(單價*數量=小計金額)，如果沒有請回傳0
    const subTotalPriceM = document.getElementById("subTotalPriceM") ? document.getElementById("subTotalPriceM").innerText : 0;  // 如果有抓到id=subTotalPriceM, 請給我他的value(單價*數量=小計金額)，如果沒有請回傳0
    const subTotalPriceL = document.getElementById("subTotalPriceL") ? document.getElementById("subTotalPriceL").innerText : 0;  // 如果有抓到id=subTotalPriceL, 請給我他的value(單價*數量=小計金額)，如果沒有請回傳0

    const ss = document.getElementById("quantityS") ? document.getElementById("quantityS").value : 0;
    // 如果有抓到id=quantityS, 請給我他的value(數量)，如果沒有請回傳0
    const mm = document.getElementById("quantityM") ? document.getElementById("quantityM").value : 0;
    // 如果有抓到id=quantityM, 請給我他的value(數量)，如果沒有請回傳0
    const ll = document.getElementById("quantityL") ? document.getElementById("quantityL").value : 0;
    // 如果有抓到id=quantityL, 請給我他的value(數量)，如果沒有請回傳0

    const ps = +ss;
    const pm = +mm;
    const pl = +ll;
    // 把變數的數值取出

    const rr = ps + pm + pl;
    // 把商品數量加總

    const sss = +subTotalPriceS;
    const mmm = +subTotalPriceM;
    const lll = +subTotalPriceL;
    // 把變數的數值取出

    const rrr = sss + mmm + lll;
    // 把商品金額加總

    // console.log(rrr, sss, mmm, lll);

    const ddd = document.querySelector('input[name="discount"]:checked').value;
    // 抓優惠券金額的value

    productQuantityQQ = `<h4 class="yellow"> 總共有${rr}項商品</h4>`;  // 商品總共有多少個
    productTotalPrice = `<h4 class="yellow"> NTD ${rrr}</h4>`;  // 商品總計多少錢
    discountQQ = `<h4 class="orange"> - NTD ${ddd}</h4>`;  // 優惠券金額
    totalPayment = `<h4 class="orange"> NTD ${rrr - ddd}</h4>`  // 總共要付 (商品總價 - 優惠券金額)

    document.getElementById('productQuantityQQ').innerHTML = productQuantityQQ;
    document.getElementById('productTotalPrice').innerHTML = productTotalPrice;
    document.getElementById('discountQQ').innerHTML = discountQQ;
    document.getElementById('totalPayment').innerHTML = totalPayment;
    // 把值帶回html填入

};

// 送資料到下一頁的物流選擇

function DatatoDelivery(g) {

    // const bookingListTable = document.getElementById('bookingList');

    const subTotalPriceS1 = document.getElementById("subTotalPriceS") ? document.getElementById("subTotalPriceS").innerText : 0;
    const subTotalPriceM1 = document.getElementById("subTotalPriceM") ? document.getElementById("subTotalPriceM").innerText : 0;
    const subTotalPriceL1 = document.getElementById("subTotalPriceL") ? document.getElementById("subTotalPriceL").innerText : 0;

    const sss1 = +subTotalPriceS1;
    const mmm1 = +subTotalPriceM1;
    const lll1 = +subTotalPriceL1;

    const rrr1 = sss1 + mmm1 + lll1;

    const ss1 = document.getElementById("quantityS") ? document.getElementById("quantityS").value : 0;
    const mm1 = document.getElementById("quantityM") ? document.getElementById("quantityM").value : 0;
    const ll1 = document.getElementById("quantityL") ? document.getElementById("quantityL").value : 0;

    const ps1 = +ss1;
    const pm1 = +mm1;
    const pl1 = +ll1;

    const rr1 = ps1 + pm1 + pl1;

    const pp = document.getElementById('discountQQ').innerText;
    const ss = document.getElementById('totalPayment').innerText;
    const vv = document.querySelector('input[name="discount"]:checked').value;

    console.log(pp, ss, vv);

    // --------------------------------------------------

    // 抓更新後的表格資料

    // --------------------------------------------------

    const gg = {
        'ProductQuantity': rr1,
        'ProductTotalPrice': rrr1,
        'ProductDiscount': pp,
        'ProductTotalPayment': ss,
        'DiscountValue': vv,
    };

    console.log(gg);

    $.get('api_cart.php', gg, function (data) {
        console.log(data);
        location.href = './order_delivery.php'
    }, 'json')

};

