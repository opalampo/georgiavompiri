$(document).ready(function () {

    var duration = 500;

    //toggle menu for small devices
    $(document).on("click", ".box-shadow-menu", function () {
        $('#drop-down-nav').slideToggle();
    });

    //hide drop-down menu when window is made bigger
    $(window).resize(function () {
        if ($(this).width() > 1200) {
            $('#drop-down-nav').slideUp();
        }
    });

    //hide drop-down menu when document is clicked
    $('html').on("click", "#drop-down-nav", function () {
        $('#drop-down-nav').slideUp();
    });

    /*------------- highlight buttons (buttons that show Georgia's part of projects) ------------*/
    $("#link-Potentiaal").click(function(){
        $("#button-Potentiaal").delay(2000).effect( "highlight",
            {color:"#10D0A0"}, 1000 ).delay(100).effect( "highlight",
            {color:"#10D0A0"}, 1000 );;
    });

    $("#link-Durzam").click(function(){
        $("#button-Durzam").delay(2000).effect( "highlight",
            {color:"#10D0A0"}, 1000 ).delay(100).effect( "highlight",
            {color:"#10D0A0"}, 1000 );;
    });


    $(window).resize(function() {

        var isOpenCV = $("#CV").css("visibility");

        if ($(window).width() < 1133 && isOpenCV == "visible") {
            $('#close-modal-CV').trigger("click");
        }
    });

    /*--------------- call funtions --------------------------------------------------------*/

    //animation of nav-bar
    animateNavAndSeparator();

    //animation of home picture
    if ($(window).width() > 1150) {
        animateHomePics();
    }


    //animation of language bars
    animateLanguages();

    //scroll to projects when project pop-up is closed;
    closeProject();

    /*-------------- function declarations ------------------------------------------------------------------------------------------------*/

    function animateNavAndSeparator() {

        var checkStatus = 0;
        var $aboutSeparatorh2 = $("#about-separator").find("h2"); //$('#about-separator h2');
        $(document).scroll(function () {
            if (($(document).scrollTop() > 180) && (checkStatus == 0) && ($(window).width() > 1200)) {
                checkStatus = 1;
                $('.nav-bar').animate({
                    'top': '0px',
                    'max-width': $(window).width(),
                    'margin-left': '0',
                    'left': '0',
                    'border-radius': '0px'
                }, duration, 'linear');
                $('#about-separator').animate({
                    'max-width': $(window).width(),
                    'height': '200px',
                    'border-radius': '0px'
                }, duration, 'linear');
                $aboutSeparatorh2.animate({'line-height': '200px'}, duration, 'linear');
            }
            else if (($(document).scrollTop() <= 179) && (checkStatus == 1) && ($(window).width() > 1200)) {
                checkStatus = 0;
                $('.nav-bar').animate({
                    'top': '20px',
                    'max-width': '1200px',
                    'margin-left': '-600px',
                    'left': '50%',
                    'border-radius': '30px'
                }, duration, 'linear');
                $('#about-separator').animate({
                    'max-width': '1200px',
                    'height': '1px',
                    'border-radius': '60px'
                }, duration, 'linear');
                $aboutSeparatorh2.animate({'line-height': '40px'}, duration, 'linear');
            }
        });

        $(window).resize(function () {
            var windowWidth = $(window).width();
            if ($(this).width() > 1200) {
                if (($(document).scrollTop() > 180)) {
                    $aboutSeparatorh2.css({'line-height': '200px'});
                    $('.nav-bar').css({
                        'top': '0px',
                        'max-width': windowWidth,
                        'margin-left': '0',
                        'left': '0',
                        'border-radius': '0px'
                    });
                    $('#about-separator').css({'max-width': windowWidth, 'height': '200px', 'border-radius': '0px'});
                }
                else if (($(document).scrollTop() <= 179)) {
                    $aboutSeparatorh2.css({'line-height': '35px'});
                    $('.nav-bar').css({
                        'top': '20px',
                        'max-width': '1200px',
                        'margin-left': '-600px',
                        'left': '50%',
                        'border-radius': '30px'
                    });
                    $('#about-separator').css({'max-width': '1200px', 'height': '1px', 'border-radius': '60px'});
                }
            }
            else if ($(this).width() > 583) {
                $aboutSeparatorh2.css({'line-height': '200px'});
                $('.nav-bar').css({
                    'top': '0px',
                    'max-width': windowWidth,
                    'margin-left': '0',
                    'left': '0',
                    'border-radius': '0px'
                });
                $('#about-separator').css({'max-width': windowWidth, 'height': '200px', 'border-radius': '0px'});
            }
            else if ($(this).width() > 404) {
                $aboutSeparatorh2.css({'line-height': '130px'});
                $('.nav-bar').css({
                    'top': '0px',
                    'max-width': windowWidth,
                    'margin-left': '0',
                    'left': '0',
                    'border-radius': '0px'
                });
                $('#about-separator').css({'max-width': windowWidth, 'height': '130px', 'border-radius': '0px'});
            }
            else {
                $aboutSeparatorh2.css({'line-height': '80px'});
                $('.nav-bar').css({
                    'top': '0px',
                    'max-width': windowWidth,
                    'margin-left': '0',
                    'left': '0',
                    'border-radius': '0px'
                });
                $('#about-separator').css({'max-width': windowWidth, 'height': '80px', 'border-radius': '0px'});
            }
        });
    }

    function animateHomePics() {
        var xp = 0;
        var mouseX = 0;
        var divPhotoLeft = 280;
        var divPhotoRight = 240;
        frameRate = 40;
        timeInterval = Math.round(1000 / frameRate);


        $('#home').mouseenter(function (e) {

            //get mouse position
            $('#home').mousemove(function (e) {

                //raw mouse position
                mouseX = e.pageX;
                relMouseX = mouseX - $(window).width() / 2;
                divWidth = $('.move-pic').width();
            });
            //animate the pic and text based on mouse movement
            loop = setInterval(function () {

                //animate faster hte further the mouse is from the center and smooth out gradually
                xp += (relMouseX - xp) / 10;

                if ($(document).scrollTop() > 180) {
                    op1 = 1 + xp / 900;
                    op2 = 1 - xp / 900;
                }
                else {
                    op1 = 1 + xp / 650;
                    op2 = 1 - xp / 650;
                }
                $('.georgia-pic').css({'margin-left': -0.20 * divWidth - xp * 0.09});
                $('#integral-designer').css({'opacity': op1});
                $('#civil-engineer').css({'opacity': op2});
                $('#div-photo-left').css({'left': divPhotoLeft - xp * 0.04});
                $('#div-photo-right').css({'right': divPhotoRight + xp * 0.04});
                $('#div-photo-left').css({'opacity': op2});
                $('#div-photo-right').css({'opacity': op1});

            }, timeInterval);

        }).mouseleave(function () {
            clearInterval(loop);
            xp = 0;
            mouseX = 0;
            relMouseX = 0;

            $('.georgia-pic').animate({'margin-left': '-20%'}, duration, 'linear');
            $('#integral-designer').animate({'opacity': '1'}, duration, 'linear');
            $('#civil-engineer').animate({'opacity': '1'}, duration, 'linear');
            $('#div-photo-left').animate({'left': divPhotoLeft + 'px', 'opacity': '1'}, duration, 'linear');
            $('#div-photo-right').animate({'right': divPhotoRight + 'px', 'opacity': '1'}, duration, 'linear');
        });
    }

    function animateLanguages() {
        var width_greek = Math.round(($('#languages').width()) * 0.53);
        var width_german_english_italian = Math.round(($('#languages').width()) * 0.4);
        var width_dutch = Math.round(($('#languages').width()) * 0.25);
        var width_french = Math.round(($('#languages').width()) * 0.1);

        $(window).resize(function () {


            width_greek = Math.round(($('#languages').width()) * 0.53);
            width_german_english_italian = Math.round(($('#languages').width()) * 0.4);
            width_dutch = Math.round(($('#languages').width()) * 0.25);
            width_french = Math.round(($('#languages').width()) * 0.1);
            $('#greek-bar').delay(50).css({'width': width_greek});
            $('#german-bar').delay(50).css({'width': width_german_english_italian});
            $('#english-bar').delay(50).css({'width': width_german_english_italian});
            $('#italian-bar').delay(50).css({'width': width_german_english_italian});
            $('#dutch-bar').delay(50).css({'width': width_dutch});
            $('#french-bar').delay(50).css({'width': width_french});


        });


        $(document).scroll(function () {
            if ($(document).scrollTop() > ($('#languages').offset().top - 600)) {
                languagesScroll();
            }
        });
    }

    function languagesScroll() {

        //execute only once    
        languagesScroll = Function("");

        var width_greek = Math.round(($('#languages').width()) * 0.53);
        var width_german_english_italian = Math.round(($('#languages').width()) * 0.4);
        var width_dutch = Math.round(($('#languages').width()) * 0.25);
        var width_french = Math.round(($('#languages').width()) * 0.1);

        $('#greek-bar').animate({'width': width_greek}, duration * 4, 'linear');
        $('#german-bar').animate({'width': width_german_english_italian}, duration * 3, 'linear');
        $('#english-bar').animate({'width': width_german_english_italian}, duration * 3, 'linear');
        $('#italian-bar').animate({'width': width_german_english_italian}, duration * 3, 'linear');
        $('#dutch-bar').animate({'width': width_dutch}, duration * 2, 'linear');
        $('#french-bar').animate({'width': width_french}, duration * 1, 'linear');
    }

    function closeProject() {

        $('html').on('click', function (event) {
            if ($(window).width() >= 1008) {
                var isOpenPotentiaal = $("#zeroEnergyBuilding").css("visibility");
                var isOpenSecondPotentiaal = $("#secondModal-Potentiaal").css("visibility");
                var isOpenDurzam = $("#towardsEnergyNeutrality").css("visibility");
                var isOpenSecondDurzam = $("#secondModal-Durzam").css("visibility");

                if (((isOpenPotentiaal == "visible") && (!$(event.target).closest('#zeroEnergyBuilding').length)) ||
                    ((isOpenSecondPotentiaal == "visible") && (!$(event.target).closest('#secondModal-Potentiaal').length)) ||
                    ((isOpenSecondDurzam == "visible") && (!$(event.target).closest('#secondModal-Durzam').length)) ||
                    ((isOpenDurzam == "visible") && (!$(event.target).closest('#towardsEnergyNeutrality').length))) {
                    $('html, body').animate({
                        'scrollTop': $("#projects-separator").offset().top - 60
                    }, 900, 'swing');
                }
            }
        });
    }


});






