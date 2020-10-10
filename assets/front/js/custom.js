$(function () {

    $(document).ready(function () {

        $('#gallery-slider-wrapper').slick({
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            arrows: true,
            nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
            prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            centerMode: false,
            swipe: true,
            swipeToSlide: true,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true
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

        $('#client-slider-wrapper').slick({
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
            prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            centerMode: false,
            swipe: true,
            swipeToSlide: true,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true
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

        $('#academic-slider-wrapper').slick({
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
            prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            centerMode: false,
            swipe: true,
            swipeToSlide: true,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true
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

        $('#testimonial-slider').slick({
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
            prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            centerMode: false,
            swipe: true,
            swipeToSlide: true,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
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

$(document).on('click', '.tab-link', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});



$(document).ready(function() {
    $("#toggle").click(function() {
      var elem = $("#toggle").text();
      if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $("#toggle").text("Read Less");
        $("#text").slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        $("#toggle").text("Read More");
        $("#text").slideUp();
      }
    });
  });