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
        let hamberger = document.querySelector('.bars')
        let closebtn = document.querySelector('.top_nav_movwe_img-2')


        leftNav.style.display = 'none'
        leftDiv.style.display = 'none'
        closebtn.style.display = 'none'

        logoButton.addEventListener('click', () => {
            if (leftNav.style.display === 'none') {
                leftNav.style.display = 'block'
                hamberger.style.display = 'none'
                closebtn.style.display = 'block'

                // leftDiv.style.display = 'block'

            }
            else {
                closebtn.style.display = 'none'
                leftNav.style.display = 'none'
                hamberger.style.display = 'block'

                // leftDiv.style.display = 'none'

            }

        })

        
        closebtn.addEventListener('click', () =>{

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
                MovieHeight.style.height = '180px'
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
                StoreHeight.style.height = '125px'
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

        // const carBox = document.querySelector('.car_box')
        // const forumBox = document.querySelector('.forum_box')
        // const MoviesBox = document.querySelector('.Movies_box')
        // const addMoviesBtn = document.querySelector('.add_movies')

        // addMoviesBtn.addEventListener('click',()=>{
        //     MoviesBox.style.opacity = '1'

        // })


        $(window).scroll(function () {
            // console.log('scrollTop', $(window).scrollTop());
            // console.log('window height', $(window).height());
            // console.log('body height', $('body').height());
    
            const scorllTop = $(window).scrollTop();
            const widowHeight = $(window).height();
            const bodyHeight = $('body').height();
            // console.log('scrollTop/ widow height', `${Math.floor(scorllTop / (bodyHeight - widowHeight) * 100)}%`);
            $('.bar').css('width', `${scorllTop / (bodyHeight - widowHeight) * 100}%`)
    
            if (scorllTop > 5) {
                $('.top_nav').css('background-color', 'rgba(43, 44, 49, 0.959)');


            }
            else {
                $('.top_nav').css('background-color', 'rgba(43, 44, 49, 0)');
            }
    
    
        })
    