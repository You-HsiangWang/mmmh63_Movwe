// 商品圖 點小圖換大圖

$('.product-img-wrap img').click(function () {
    console.log('img src:', $(this).attr('src'));
    const thisImg = $(this).attr('src')
    $('.product-img-wrap-demo img').attr('src', thisImg)
})

// 商品數量調整

$('.button-number-minus').click(function () {
    console.log('hello -', this);
})

$('.button-number-plus').click(function () {
    console.log('hello +', this);
})


// 手機

let qm = document.getElementById('quantityM');

// 偵測input的值改變

document.getElementById('quantityM').addEventListener('change', myFunction);

function myFunction() {
    console.log('qm', qm.value);
}

function subFunction() {
    if (qm.value > 1) {
        qm.value--;
    }
}

function addFunction() {
    qm.value++;
};

// 電腦

let qpc = document.getElementById('quantityPC');

// 偵測input的值改變

document.getElementById('quantityPC').addEventListener('change', myPCFunction);

function myPCFunction() {
    console.log('qpc', qpc.value);
}

function subPCFunction() {
    if (qpc.value > 1) {
        qpc.value--;
    }
}

function addPCFunction() {
    qpc.value++;
};


// 加入購物車 彈跳視窗

$('.buy').click(function () {
    console.log('hello', this);
    $('.blackblack').css('display', 'flex');
});

// 點選關閉彈跳視窗

$('.close').click(function () {
    console.log('hello', this);
    $('.blackblack').css('display', 'none');
});

// 印出所選的商品選項

function WWW() {
    var ww = document.querySelector('input[name="selectdoll"]:checked').value;
    console.log(ww);
};

// 選尺寸 顯示相對應的金額

function CCC() {

    // const sss = document.querySelector('input[value="S"]');
    // const mmm = document.querySelector('input[value="M"]');
    // const lll = document.querySelector('input[value="L"]');

    // console.log(sss,mmm,lll);
    
    // $(sss).prop("checked", true) 
    // $('#productPrice').text('899');
    
    if(document.querySelector('input[value="S"]').checked) {
        $('#productPrice').text('899');
      }else if(document.querySelector('input[value="M"]').checked) {
        $('#productPrice').text('999');
      }

    $('input[value="L"]').click(function(){
        $('#productPrice').text('1099');
    })
}

// 加入購物車

function AddtoCart() {
    const item = document.getElementById('itemName').innerText;  // 商品名稱
    const xx = document.querySelector('input[name="selectdoll"]:checked').value;  // 商品選項
    const yy = document.querySelector('input[name="productsize"]:checked').value; // 尺寸
    const zz = document.querySelector('#quantityPC').value; // 數量
    const zzz = document.getElementById('productPrice').innerText; // 單價


    const aa = {
        'ProductName': item,
        'ProductChoice': xx,
        'ProductSize': yy,
        'ProductQuantity': zz,
        'ProductPrice': zzz,
        'SubTotalPrice': zz * zzz,
    };

    $.get('api_product.php', aa, function (data) { console.log(data); }, 'json')

};