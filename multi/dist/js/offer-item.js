document.addEventListener("DOMContentLoaded", function () {
    // $("#slider").on("input change", (e) => {
    //     const sliderPos = e.target.value;
    //     // Update the width of the foreground image
    //     $('.first').css('width', `${sliderPos}%`)
    // });

    let galleryItems = document.querySelectorAll('.offer_item_galleries_items');
    if (galleryItems) {
        galleryItems.forEach(e => {

            let slider = e.querySelector('#slider'),
                first = e.querySelector('.offer_item_galleries_item.first');

            slider.addEventListener("input", (event) => {

                first.style.marginLeft = slider.value + '%';
                first.style.maxWidth = 100 - slider.value + '%';
            });
        })
    }

});