document.addEventListener("DOMContentLoaded", function () {
    let header_wrap = document.querySelector('.header_top_wrap'),
        header = document.querySelector('.header_top'),
        top = header.offsetTop;

    header.style.height = header_wrap.offsetHeight + 'px';

    window.addEventListener('scroll', function () {
        if (this.window.scrollY >= top) {
            header_wrap.classList.add('fixed');
        } else {
            header_wrap.classList.remove('fixed');
        }
    });
});
