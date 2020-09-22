$(function(){

$(document).ready(function () {

    $('#gallery-slider-wrapper').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        arrows: true,
        nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
        centerMode: false,
        swipe: true,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Scroll to top services page
    $(window).scroll(function () {
        var currentScroll = $(window).scrollTop();
        if (currentScroll >= 100) {
            $('.scroll-to-top').show();
        } else {
            $('.scroll-to-top').hide();
        }
    });

    if ($(window).scrollTop() > 100) $('.scroll-to-top').show();

    $('.scroll-to-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

});

})