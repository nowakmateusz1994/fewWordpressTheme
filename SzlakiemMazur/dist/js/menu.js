document.addEventListener("DOMContentLoaded", function () {
    let menuBtn = document.querySelector('.header_nav_mobile_button'),
            mobileMenu = document.querySelector('.header_nav_mobile_content'),
            mobileMenuHasChild = mobileMenu.querySelectorAll('.menu-item-has-children'),
            times = document.querySelector('.header_nav_mobile_content_close');
    if (menuBtn) {

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hide');
        });

        times.addEventListener('click', function () {
            mobileMenu.classList.add('hide');
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
            })
        })

    }

});

 