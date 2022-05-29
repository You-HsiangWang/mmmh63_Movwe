// 文章分類click

$('.d-filter-m').click(function () {
    console.log('hello', this);
    $(this).css('box-shadow' , '0 0 5px #10FFA2');
    $(this).siblings().css('box-shadow' , '0 0 5px transparent');
});

$('.d-filter-d').click(function () {
    console.log('hello', this);
    $(this).css('box-shadow' , '0 0 5px #FC6F51');
    $(this).siblings().css('box-shadow' , '0 0 5px transparent');
});

$('.d-filter-e').click(function () {
    console.log('hello', this);
    $(this).css('box-shadow' , '0 0 5px #FEB73A');
    $(this).siblings().css('box-shadow' , '0 0 5px transparent');
});

$('.d-filter-a').click(function () {
    console.log('hello', this);
    $(this).css('box-shadow' , '0 0 5px #1CD8FF');
    $(this).siblings().css('box-shadow' , '0 0 5px transparent');
});


// 文章編輯器
// https://github.com/pulipulichen/TinyMCE-Online-Editor




// 捨棄文章

document.querySelector('.delete');
function myFunction() {
    confirm("確定要捨棄文章嗎?");
}