jQuery(document).ready(function ($) {

    $('.home_logos_items').slick({
        dots: true,
        speed: 300,
        infinite: true,
        autoplay: true,
        fade: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true,
        cssEase: 'ease-out',
        arrows: true,
        responsive: [
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ]
    });

}); 