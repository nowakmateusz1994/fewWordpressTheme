document.addEventListener("DOMContentLoaded", function () {
    let menuBtn = document.querySelector('.mobile_menu #open');

    if (menuBtn) {

        let mobileMenu = document.querySelector('.mobile_menu_content'),
            mobileMenuHasChild = mobileMenu.querySelectorAll('.menu-item-has-children'),
            times = document.querySelector('#close');

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('show');
        });

        times.addEventListener('click', function () {
            mobileMenu.classList.remove('show');
        });

        mobileMenuHasChild.forEach(element => {
            element.addEventListener('click', function (e) {
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