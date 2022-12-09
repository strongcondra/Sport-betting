(function ($) {
    "use strict";

    $('#sidebar li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    })

    /*---------------------------------------------------
        Smooth Scroll
    ----------------------------------------------------*/
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    /*---------------------------------------------------
        Click To Top
    ----------------------------------------------------*/
    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 250) {
            $('.footer .totop').fadeIn();
        } else {
            $('.footer .totop').fadeOut();
        }

    })



}(jQuery));
