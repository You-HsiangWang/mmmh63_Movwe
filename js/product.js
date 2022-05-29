 // 商品圖 點小圖換大圖

 $('.product-img-wrap img').click(function() {
    console.log('img src:', $(this).attr('src'));
    const thisImg = $(this).attr('src')
    $('.product-img-wrap-demo img').attr('src', thisImg)
})

// 商品選項

// 商品規格

$('.product-size').click(function() {
    console.log('hello', this);
    $(this).css('border', '2px solid #10FFA2');
    $(this).css('color', '#10FFA2');
    $(this).siblings().css('border', '2px solid #fff');
    $(this).siblings().css('color', '#fff');
})

// 商品數量調整

$('.button-number-minus').click(function() {
    console.log('hello -', this);
})

$('.button-number-plus').click(function() {
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

$('.buy').click(function(){
    console.log('hello' , this);
    $('.blackblack').css('display' , 'flex');
});

// 點選關閉彈跳視窗

$('.close').click(function(){
    console.log('hello' , this);
    $('.blackblack').css('display' , 'none');
});

// TODO: 印出所選的商品規格跟數量