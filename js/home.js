
        var input = document.getElementById("myInput");
        var inputbtn = document.getElementById("myInput");
        input.addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("myBtn").click();
            }
        });
    //     $('.platform li').click(function(){
    //         console.log('yolo');
    //         $(this).css('border','1px solid #10FFA2')
    //     })
    //     $('.genre_item li').click(function(){
    //         console.log('nini');
    //         $(this).css('border','1px solid #10FFA2').parent().siblings().children().css('border','1px solid #6b6b6b')
    //     })


        //     $('.browse-filter-item').click(function(){
    //         console.log('nihao');
    //         $(this).css('border','1px solid #10FFA2').siblings().css('border','1px solid #6b6b6b')
    //     })

