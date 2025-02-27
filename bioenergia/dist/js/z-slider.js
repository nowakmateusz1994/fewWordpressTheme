jQuery(document).ready(function ($) {

    $('.home_slider').slick({
        dots: false,
        speed: 300,
        infinite: true,
        autoplay: false,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        centerMode: true, 
        cssEase: 'ease-out',
        arrows: false,
    });
});