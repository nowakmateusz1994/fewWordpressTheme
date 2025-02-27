var opinionSplide = new Splide('.opinion_splide', {
    type: 'loop',
    arrows: false,
    autoplay: true,
    pagination: true,
    rewindSpeed: 500,
    speed: 3000,
    gap: '32px',
    perPage: 2,
    perMove: 1,
    rewind: true,
    breakpoints: {
        640: {
            type: 'slide',
            perPage: 1,
            padding: { left: 0, right: '9.5rem' }
        },
    },
});

opinionSplide.mount();
