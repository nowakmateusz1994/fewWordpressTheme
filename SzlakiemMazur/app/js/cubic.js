document.addEventListener("DOMContentLoaded", function () {
    let cubic = document.querySelectorAll('.cubic');
    if (cubic) {
        cubic.forEach((e) => {
            e.style.minHeight = e.offsetWidth + 'px';
        });

        window.addEventListener('resize', function () {
            cubic.forEach((e) => {
                e.style.minHeight = e.offsetWidth + 'px';
            });
        });
    }
});