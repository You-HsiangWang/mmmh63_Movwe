(() => {
    function cartFive() {
        const addfive = document.querySelectorAll('h6.forcart5');
        for(let i = 0; i < addfive.length; i++){
            $(addfive[i]).css('opacity', '1');
        };
    };

    const buybuy = document.querySelector('.buycart5');
    buybuy.addeventlistener('click', cartFive);

})();