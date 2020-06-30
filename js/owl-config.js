$(".owl-customfade").owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    animateOut: "fadeOut",
    dots: true,
    autoplay: true,
});

$(".owl-2rows").owlCarousel({
    multipleRow: true,
    rows: 2,
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        864: {
            items: 3,
        },
        1000: {
            items: 4,
            loop: true,
        },
        1440: {
            items: 5,
        },
    },
});

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        400: {
            items: 2,
            center: true,
        },
        600: {
            items: 3,
        },
        864: {
            items: 3,
        },
        1000: {
            items: 4,
            loop: true,
        },
        1440: {
            items: 5,
        },
    },
});

$(".owl-carousel-navlist").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    center: true,
    nav: false,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        864: {
            items: 4,
        },
        1000: {
            items: 6,
        },
    },
});

$("#owl-comments").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        864: {
            items: 3,
        },
        1000: {
            items: 3,
            loop: true,
        },
    },
});
