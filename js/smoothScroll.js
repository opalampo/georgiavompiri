$(document).ready(function () {


    $('.smooth_scroll_anchor').click(function(e){

        e.preventDefault();

        if (e.target === '.scroll-home') {
            $('html, body').animate({
                scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
            }, 900, 'swing');
        }
        else if (((e.target === '#scroll-projects') || (e.target === '#scroll-contant')) && ($(window).width() > 1200) && ($(document).scrollTop() <= 179)) {
            $('html, body').animate({
                'scrollTop': ($('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top + 140)
            }, 900, 'swing');
        }
        else {
            $('html, body').animate({
                'scrollTop': ($('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top - 60)
            }, 900, 'swing');
        }

    });


/*    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);
        var round = Math.round($target.offset().top);

        *//* ------compensation of separator height and fixed top bar height animation------ *//*
        if (target === '#home') {
            $('html, body').animate({
                'scrollTop': 0
            }, 900, 'swing');
        }
        else if (((target === '#projects-separator') || (target === '#contact-separator')) && ($(window).width() > 1200) && ($(document).scrollTop() <= 179)) {
            $('html, body').animate({
                'scrollTop': (round + 140)
            }, 900, 'swing');
        }
        else {
            $('html, body').animate({
                'scrollTop': (round - 60)
            }, 900, 'swing');
        }
    });*/
});