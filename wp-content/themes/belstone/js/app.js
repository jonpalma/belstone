$(window).scroll(function () {
    if(($(window).width() <= '767') && ($(window).scrollTop() >= '1') && (!$('.navbar').hasClass('navbar-fixed-top')))
    {
        $('.navbar').addClass('navbar-fixed-top');
    }
    else if(($(window).width() <= '767') && ($(window).scrollTop() < '1') && ($('.navbar').hasClass('navbar-fixed-top')))
    {
        $('.navbar').removeClass('navbar-fixed-top');
    }
    else if(($(window).width() > '767') && ($(window).scrollTop() >= '15') && (!$('.navbar').hasClass('navbar-fixed-top')))
    {
        $('.navbar').addClass('navbar-fixed-top');
    }
    else if(($(window).width() > '767') && ($(window).scrollTop() < '15') && ($('.navbar').hasClass('navbar-fixed-top')))
    {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav li').click(function() {
    $('.navbar-nav li').removeClass('active');
    $(this).addClass('active');
});

$(".mapa").click(function() {
    $(this).find("iframe").css("pointer-events", "all");
});

/* Resize Element */
var rtime;
var timeout = false;
var delta = 200;

$(document).ready(function() {
    $('.resizeheight').each(function() {
        var $element = $(this);
        setHeight($element);
    });
});

$(window).resize(function() {
    rtime = new Date();
    if(timeout === false)
    {
        timeout = true;
        setTimeout(resizeend, delta);
    }
});

function resizeend() {
    if(new Date() - rtime < delta)
    {
        setTimeout(resizeend, delta);
    }
    else
    {
        timeout = false;
        $('.resizeheight').each(function() {
            var $element = $(this);
            setHeight($element);
        });
    }
}

function setHeight($element) {
    var $height = 0;

    $element.find('li').each(function() {
        $(this).css('height', 'auto', 'important');

        if(!$(this).is(':empty'))
        {
            if(parseInt($(this).css('height').substring(0, $(this).css('height').indexOf('p'))) > parseInt($height))
            {
                $height = $(this).css('height').substring(0, $(this).css('height').indexOf('p'));
            }
        }
    });

    $element.find('li').each(function() {
        $(this).css('height', $height, 'important');
    });
}

/* PAGE LOAD WITH HASH OFFSET */
(function($, window) {
    $navbar_height = 70;
    var adjustAnchor= function() {
        var $anchor = $(':target'),
            fixedElementHeight = $navbar_height;
        if ($anchor.length > 0) {
            $('html, body')
                .stop()
                .animate({
                    scrollTop: $anchor.offset().top - fixedElementHeight
                }, 800);
        }
    };
    $(window).on('hashchange load', function() {
        adjustAnchor();
    });
})(jQuery, window)

$('.contact-form input, .contact-form textarea').not('input[type=submit]').focusout(function () {
    var input = $(this);

    if(input.val() !== '') {
        input.addClass('has-content')
    } else {
        input.removeClass('has-content')
    }
});

sucursales = {
    chosen: null,
}

$(".btn-msg").click(function () {
    var btn = $(this),
        sucursal = btn.data('sucursal');

    sucursales.chosen = sucursal;
});

$("#contact-modal").on('hide.bs.modal',function () {
    sucursales.chosen = null;
});

//Ajax contact form
$(function() {
    // Set up an event listener for the contact form.
    $('.contact-form').submit(function(e) {
        var form = $(this),
            formMessages = form.find('.form-output'),// Get the messages div.
            name = form.find('input[name=name]'),
            tel = form.find('input[name=tel]'),
            email = form.find('input[name=email]'),
            msg = form.find('textarea[name=msg]'),
            form_type = form.find('input[name=form_type]'),
            submitBtn = form.find('input[type=submit]');


        // Stop the browser from submitting the form.
        e.preventDefault();
        submitBtn.val("Enviando...");

        var form_data = {
            name: name.val(),
            tel: tel.val(),
            email: email.val(),
            msg: msg.val(),
            action: "contact_form",
            sucursal: sucursales.chosen,
            form_type: form_type.val()
        };

        if(form_type.val() === 'cot') {
            var city = form.find('input[name=city]'),
                budget = form.find('select[name=budget]'),
                type = form.find('select[name=type]');
            form_data.city = city.val();
            form_data.budget = budget.val();
            form_data.type = type.val();
        }

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: form_data
        })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.
                formMessages.removeClass('alert alert-danger');
                formMessages.addClass('alert alert-success');

                // Set the message text.
                formMessages.text(response);

                // Clear the form.
                name.val('');
                tel.val('');
                email.val('');
                msg.val('');
                submitBtn.val("Enviar");

                if(form_type.val() === 'cot') {
                    city.val('');
                    budget.val('');
                    type.val('');
                }
            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                formMessages.removeClass('alert alert-success');
                formMessages.addClass('alert alert-danger');

                // Set the message text.
                if (data.responseText !== '') {
                    formMessages.text(data.responseText);
                    submitBtn.val("Enviar");
                } else {
                    formMessages.text('Oops! Ocurrido un error no se pudo enviar la forma.');
                    submitBtn.val("Enviar");
                }
            })
            .always(function () {
                $('.has-contetn').removeClass('has-content');
            });

    });

});