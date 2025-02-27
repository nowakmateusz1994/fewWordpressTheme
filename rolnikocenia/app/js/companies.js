
// var companiesSplide = new Splide('.home_companies_items_wrap', {
//     arrows: false,
//     autoplay: true,
//     pagination: false,
//     rewindSpeed: 500,
//     speed: 3000,
//     gap: '32px',
//     perPage: 3,
//     perMove: 1,
//     rewind: true,
//     breakpoints: {
//         640: {
//             perPage: 1,
//         },
//     },
// });

// var bar = document.querySelector('.home_companies_items .my-slider-progress-bar');

// // Updates the bar width whenever the carousel moves:
// companiesSplide.on('mounted move', function () {
//     var end = companiesSplide.Components.Controller.getEnd() + 1;
//     var rate = Math.min((companiesSplide.index + 1) / end, 1);
//     bar.style.width = (100 * rate) + '%';


//     if (rate == 1) {
//         companiesSplide.root.classList.add('last');
//     }else{
//         companiesSplide.root.classList.remove('last');
//     }
// });

// companiesSplide.mount();