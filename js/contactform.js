$(document).ready(function () {

    var messageDelay = 2000;  // How long to display status messages (in milliseconds)

    var contactForm = $('#contactForm');

    $(contactForm).submit(function (e) {
        e.preventDefault();
        $('#dark-background').fadeIn();
        $('#sendingMessage').fadeIn( 2000, function() {
            $.ajax({
                url: contactForm.attr('action'),
                type: contactForm.attr('method'),
                dataType: "json",
                data: contactForm.serialize()
            })
                .done(function (response) {
                    $('#sendingMessage').fadeOut();
                    $('#successMessage').fadeIn().delay(messageDelay).fadeOut();
                    $('#dark-background').delay(messageDelay).fadeOut();
                    $('#senderName').val("");
                    $('#senderEmail').val("");
                    $('#senderSubject').val("");
                    $('#message').val("");
                })
                .fail(function (data) {
                    $('#sendingMessage').fadeOut();
                    $('#failureMessage').fadeIn().delay(messageDelay).fadeOut(400, function () {
                        $('#contactForm').fadeIn();
                    });
                });
        });
    });
    $('#clear').click(function () {
        $('#senderName').val("");
        $('#senderEmail').val("");
        $('#senderSubject').val("");
        $('#message').val("");
    });
});





