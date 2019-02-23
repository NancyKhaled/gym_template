/* global $, window, document */

//to back 
$(document).on('click', '.back', function () {

    'use strict';

    parent.history.back();
});


//loading screen
$(window).on('load', function () {

    'use strict';

    $('.loading-overlay .spinner').fadeOut(1000, function () {
        $(this).parent().fadeOut(800, function () {
            $('body').css('overflow', 'auto');
            $(this).remove();
        });
    });
});


//featured work shuffle imgs
$('.featured-work button').on('click', function () {

    'use strict';

    if ($(this).data('class') === 'all') {
        $('.shuffle-img img').css('opacity', 1);
    } else {
        $('.shuffle-img img').css('opacity', 0.2);
        $($(this).data('class')).css('opacity', 1);
    }
});


//testimonial
$('.carousel').carousel({
    interval: 3000
});


//scroll to top button
$(window).scroll(function () {

    var st = $('.scrollTop');

    if ($(window).scrollTop() >= 1500) {
        if (st.is(':hidden'))
            st.fadeIn(400);

    } else {
        st.fadeOut(400);
    }

});

//click on scroll to top button
$('.scrollTop').click(function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 800);
});

//magnific-popup video
$('.popup_v').magnificPopup({
    type: 'iframe'
});

//nice scroll to section
$('.navbar li a, .footer li a').click(function (e) {
    e.preventDefault(); //بمنع السلوك الافتراضي

    $('html, body').animate({
        scrollTop: $($(this).data('scroll')).offset().top - 65
    }, 800);
});

//owl carousel
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


