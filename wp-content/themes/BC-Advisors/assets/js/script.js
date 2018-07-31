$(function() {
    // indicadores económicos
    var uf, dolar, euro, utm

    $.ajax({
        url: 'https://cors-anywhere.herokuapp.com/http://mindicador.cl/api',
        type: 'GET',
    }).done(function(data) {

        console.log(data)

        uf = data.uf.valor
        dolar = data.dolar.valor
        euro = data.euro.valor
        utm = data.utm.valor

        $(".uf").append(' $' + uf.toLocaleString())
        $(".dolar").append(' $' + dolar)
        $(".euro").append(' $' + euro)
        $(".utm").append(' $' + utm.toLocaleString())

        $(".result").append(dolar)


    }).fail(function() {
        console.log('Error al consumir la API!');
    })
    // animacion de desplazamiento    
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    // Date topbar
    $(window).on('load', function() {
        // var d = new Date();
        // d = d.toLocaleString();

        var month = new Date().getMonth();
        var dia = new Date().getDay();
        var day = new Date().getDate();
        var year = new Date().getFullYear();

        if (month == 0) {
            month = 'Ene';
        } else if (month == 1) {
            month = 'Feb';
        } else if (month == 2) {
            month = 'Mar';
        } else if (month == 3) {
            month = 'Abr';
        } else if (month == 4) {
            month = 'May';
        } else if (month == 5) {
            month = 'Jun';
        } else if (month == 6) {
            month = 'Jul';
        } else if (month == 7) {
            month = 'Ago';
        } else if (month == 8) {
            month = 'Sep';
        } else if (month == 9) {
            month = 'Oct';
        } else if (month == 10) {
            month = 'Nov';
        } else if (month == 11) {
            month = 'Dic';
        };

        if (dia == 0) {
            dia = 'Dom';
        } else if (dia == 1) {
            dia = 'Lun';
        } else if (dia == 2) {
            dia = 'Mar';
        } else if (dia == 3) {
            dia = 'Mie';
        } else if (dia == 4) {
            dia = 'Jue';
        } else if (dia == 5) {
            dia = 'Vie';
        } else if (dia == 6) {
            dia = 'Sab';
        };

        // console.log(h, m, s);
        $('#date').text(' ' + dia + ' ' + day + ' / ' + month + ' / ' + year);

    });
    // /Date topbar

    // Toggleable Navbar
    $('.navbar__toggle').click(function() {

        $('.sidenav--close').addClass('sidenav--open');


        var sidewidth = $('.sidenav--open').css('width');


        if (sidewidth === '0px') {
            $('.navbar__toggle .fa-bars').animate({
                opacity: 0
            }, 100);
            $('.sidenav--open').css('width', '100%');
            $('.navbar__toggle .fa-bars').css('display', 'none');
            $('.navbar__toggle .fa-times').css('display', 'block');
            $('.navbar__toggle .fa-times, .sidenav__items').animate({
                opacity: .8
            }, 100);
        } else {
            $('.navbar__toggle .fa-times').animate({
                opacity: 0
            }, 100);
            $('.sidenav__items').css('opacity', '0');
            $('.sidenav--open').css('width', '0px');
            $('.navbar__toggle .fa-times').css('display', 'none');
            $('.navbar__toggle .fa-bars').css('display', 'block');
            $('.navbar__toggle .fa-bars').animate({
                opacity: .8
            }, 100);
        }

    })

    $('.sidenav__items').click(function() {
        $('.navbar__toggle .fa-times').animate({
            opacity: 0
        }, 100);
        $('.sidenav__items').css('opacity', '0');
        $('.sidenav--open').css('width', '0px');
        $('.navbar__toggle .fa-times').css('display', 'none');
        $('.navbar__toggle .fa-bars').css('display', 'block');
        $('.navbar__toggle .fa-bars').animate({
            opacity: .8
        }, 100);
    })
    // /Toggleable Navbar

    // seccion quienes somos, cambio de imagen y texto on click

    var equipo = $('.equipo');
    var nosotros = $('.quienes-somos');
    var bloque = $('#bloque');

    $('#qs-01').click(function() {
        bloque.fadeOut('slow', function() {
            equipo.css('display', 'none');
            nosotros.css('display', 'block');
            bloque.fadeIn('slow');
        });
    });
    $('#qs-02').click(function() {
        bloque.fadeOut('slow', function() {
            equipo.css('display', 'block');
            nosotros.css('display', 'none');
            bloque.fadeIn('slow');
        });
    });

    // seccion nuestros servicios, cambio de texto on click
    var titulopro = $('.prod-title');
    var textopro = $('.prod-text');
    var logo = $('#logo-temp');

    $('.menu-list a').click(function() {
        logo.fadeOut('slow', function() {
            logo.css('display', 'none');
        });
        var theTitle = $(this, '.list-title').text();
        var theContent = $(this).siblings('.content').html();
        $('.menu-list .is-active').removeClass('is-active');
        $(this).addClass('is-active');
        titulopro.fadeOut('slow', function() {
            titulopro.text(theTitle);
            titulopro.fadeIn('slow');
        });
        textopro.fadeOut('slow', function() {
            textopro.html(theContent);
            textopro.fadeIn('slow');
        });

    });

    /* To Top button animated
----------------------------- */
    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            $("#toTop").css("display", "block");
        } else {
            $("#toTop").css("display", "none");
        }
    }

    $('#toTop').on('click', function(topFunction) {
        topFunction.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 200);
    });

    $('#down').on('click', function(topFunction) {
        topFunction.preventDefault();
        $("html, body").animate({ scrollTop: $(window).height() * 1 }, 1000);
    });

    /* fin To Top button animated
    ----------------------------- */

    /* contact form
    ----------------------------- */
    $('#contact-form').click(function(e){
        e.preventDefault();
    })

});