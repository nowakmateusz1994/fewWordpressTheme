jQuery(document).ready(function ($) {

    $('.home_realization_items').slick({
        dots: false,
        speed: 300,
        infinite: true,
        autoplay: false,
        fade: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true,
        cssEase: 'ease-out',
        arrows: true,
        responsive: [
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ]
    });


});