document.addEventListener("DOMContentLoaded", function () {
    let cubic = document.querySelectorAll('.cubic');
    if (cubic) {
        cubic.forEach((e) => {
            e.style.height = e.offsetWidth + 'px';
        });

        window.addEventListener('resize', function () {
            cubic.forEach((e) => {
                e.style.height = e.offsetWidth + 'px';
            });
        });
    }
});