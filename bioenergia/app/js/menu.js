document.addEventListener("DOMContentLoaded", function () {
    let menuBtn = document.querySelector('.header__nav_mobile_button i'),
        menuBtnScroll = document.querySelector('.header_scrolled  .header__nav_mobile_button i'),
        mobileMenu = document.querySelector('.header__nav_mobile__content'),
        mobileMenuHasChild = mobileMenu.querySelectorAll('.menu-item-has-children'),
        times = document.querySelector('.header__nav_mobile__content_close');
    if (menuBtn) {

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hide');
        });

        times.addEventListener('click', function () {
            mobileMenu.classList.add('hide');
        });

        menuBtnScroll.addEventListener('click', function () {
            mobileMenu.classList.toggle('hide');
            console.log('test');
        });

        mobileMenuHasChild.forEach(element => {
            element.querySelector('a').addEventListener('click', function (e) {
                e.preventDefault();
                let content = element.querySelector('.sub-menu');

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    }

    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    let goTop = document.querySelector('#go_up');

    goTop.addEventListener('click', topFunction);
});
