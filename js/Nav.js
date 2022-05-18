        // 祐翔 加了一個滾動時navbar會變色的 05/10/2022
        window.addEventListener('scroll',navcolorChange);
        function navcolorChange (){
            const $nccScrollTop = $(window).scrollTop();
            const $nccTopNav = $('.top_nav');
            ($nccScrollTop >= 1) ? $nccTopNav.css('background-color', '#1A1D24') : $nccTopNav.css('background-color', 'transparent');
        };
        // ------------------------------------------------------------
        $(window).resize(function () {
            let leftNav = document.querySelector('.left_nav');
            leftNav.style.display = 'none'
        })
        // ------------------------------------------------------------


        let height = window.innerWidth;
        console.log(height);
        let leftNav = document.querySelector('.left_nav');
        let logoButton = document.querySelector('.top_nav_logo');
        let leftDiv = document.querySelector('.left_div')


        leftNav.style.display = 'none'
        leftDiv.style.display = 'none'
        logoButton.addEventListener('click', () => {
            if (leftNav.style.display === 'none') {
                leftNav.style.display = 'block'
                // leftDiv.style.display = 'block'

            }
            else {
                leftNav.style.display = 'none'
                // leftDiv.style.display = 'none'

            }

        })
        // ------------------------------------------------------------

        leftNav.style.width = '64px'

        leftNav.addEventListener('mouseenter', () => {
            if (leftNav.style.width === '64px') {
                leftNav.style.width = '188px'
                leftNav.style.transition = '0.4s'
                leftNav.style.transitionDelay = '0.1s'
            }
            else {
                leftNav.style.width = '64px'
            }

        })
        // ------------------------------------------------------------

        leftNav.addEventListener('mouseleave', () => {
            if (leftNav.style.width === '64px') {
                leftNav.style.width = '188px'
                leftNav.style.transition = '0.4s'
                MovieHeight.style.height = '40px';
                StoreHeight.style.height = '40px';
                FormeHeight.style.height = '40px';

            }
            else {
                MovieHeight.style.height = '40px';
                StoreHeight.style.height = '40px';
                FormeHeight.style.height = '40px';

                leftNav.style.width = '64px'
            }


        })

        // ------------------------------------------------------------

        let movieBtn = document.querySelector('.movie_btn');
        let MovieHeight = document.querySelector('.Movie')
        MovieHeight.style.height = '40px'

        movieBtn.addEventListener('click', () => {
            if (MovieHeight.style.height === '40px') {
                MovieHeight.style.height = '280px'
                console.log("hihi");
            }
            else {
                MovieHeight.style.height = '40px';
            }
        })
        // ------------------------------------------------------------
        let storeBtn = document.querySelector('.store_btn');
        let StoreHeight = document.querySelector('.Store')
        StoreHeight.style.height = '40px'

        storeBtn.addEventListener('click', () => {
            if (StoreHeight.style.height === '40px') {
                StoreHeight.style.height = '150px'
                console.log("hihi");
            }
            else {
                StoreHeight.style.height = '40px';
            }
        })

        // ------------------------------------------------------------

        let formeBtn = document.querySelector('.form_btn');
        let FormeHeight = document.querySelector('.Form')
        FormeHeight.style.height = '40px'

        formeBtn.addEventListener('click', () => {
            if (FormeHeight.style.height === '40px') {
                FormeHeight.style.height = '150px'
                console.log("hihi");
            }
            else {
                FormeHeight.style.height = '40px';
            }
        })
