jQuery(document).ready(function ($) {

    $('.home_header_slider').slick({
        dots: false,
        speed: 300,
        infinite: true,
        autoplay: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true,
        cssEase: 'ease-out',
        arrows: true,
    });

    $('.home_header_organizers_slider_items').slick({
        dots: false,
        speed: 10000,
        infinite: true,
        autoplay: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 1,
        centerMode: true,
        cssEase: 'linear',
        arrows: false,
    });

});