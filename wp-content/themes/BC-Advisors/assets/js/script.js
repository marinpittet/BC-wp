$(function() {
// indicadores económicos
var uf, dolar, euro, utm

    $.ajax({
        url: 'https://cors-anywhere.herokuapp.com/http://mindicador.cl/api',
        type: 'GET',
    }).done (function(data) {

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
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - 80
        }, 1000);
    }
});
// Date topbar
$(window).on('load', function () {
    // var d = new Date();
    // d = d.toLocaleString();

    var month = new Date().getMonth();
    var dia = new Date().getDay();
    var day = new Date().getDate();
    var year = new Date().getFullYear();

    if (month == 0){
       month = 'Ene'; 
    }else if(month == 1){
       month = 'Feb';
    }else if(month == 2){
       month = 'Mar';
    }else if(month == 3){
       month = 'Abr';
    }else if(month == 4){
       month = 'May';
    }else if(month == 5){
       month = 'Jun';
    }else if(month == 6){
       month = 'Jul';
    }else if(month == 7){
       month = 'Ago';
    }else if(month == 8){
       month = 'Sep';
    }else if(month == 9){
       month = 'Oct';
    }else if(month == 10){
       month = 'Nov';
    }else if(month == 11){
       month = 'Dic';
    };

    if (dia == 0){
       dia = 'Dom'; 
    }else if(dia == 1){
       dia = 'Lun';
    }else if(dia == 2){
       dia = 'Mar';
    }else if(dia == 3){
       dia = 'Mie';
    }else if(dia == 4){
       dia = 'Jue';
    }else if(dia == 5){
       dia = 'Vie';
    }else if(dia == 6){
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

    var image = $('#img-principal');
    var titulo = $('#title-current');
    var texto = $('#text-current'); 
    var image2 = $('#img-2');
    var titulo2 = $('#title-current--2');
    var texto2 = $('#text-current--2');

    $('#qs-01').click(function() {
        image.fadeOut('slow', function() {
            image.attr('src', 'http://localhost:8888/wp-content/themes/BC-Advisors/assets/images/logo--invert-01.png');
            image.fadeIn('slow');
        });
        titulo.fadeOut('slow', function() {
            titulo.text('Quiénes somos');
            titulo.fadeIn('slow');
        });
        texto.fadeOut('slow', function() {
            texto.text('Somos una consultora que cuenta con asociados expertos en finanzas y economía. Desarrollamos consultoría en evaluación de proyectos, valorización de activos financieros, valorización de empresas y estudios de impacto económico. Contamos con experiencia de años en el mercado chileno.');
            texto.fadeIn('slow');
        });

        image2.fadeOut('slow', function() {
            image2.attr('src', 'http://localhost:8888/wp-content/themes/BC-Advisors/assets/images/blank-01.png');
            image2.fadeIn('slow');
        });
        titulo2.fadeOut('slow', function() {
            titulo2.css('border-top', 'solid 0px rgba(50, 50, 50, 0.1)');
            titulo2.text('');
            titulo2.fadeIn('slow');
        });
        texto2.fadeOut('slow', function() {
            texto2.text('');
            texto2.fadeIn('slow');
        });
    })
    $('#qs-02').click(function() {
        image.fadeOut('slow', function() {
            image.attr('src', 'http://localhost:8888/wp-content/themes/BC-Advisors/assets/images/Felipe-01.jpg');
            image.fadeIn('slow');
        });
        titulo.fadeOut('slow', function() {
            titulo.text('Luis Felipe Illanes');
            titulo.fadeIn('slow');
        });
        texto.fadeOut('slow', function() {
            texto.text('Ingeniero Comercial con mención economía y Magister en Finanzas de la Universidad de Chile. Ha ejercido labores en tesorería en Banco Estado Corredores de Bolsa y Banco Estado en mesa de derivados. Ha trabajado en la Clasificadora de Riesgo Humphreys, liderando los procesos de clasificación de riesgo de empresas financieras y aseguradoras (evaluación de riesgo de instrumentos de deuda pública). Asimismo ha obtenido una amplia experiencia en valorización de fondos de inversión, estructuración de activos y evaluación de proyectos. Actualmente se desempeña como director ejecutivo de BC Advisors.');
            texto.fadeIn('slow');
        });
        

        image2.fadeOut('slow', function() {
            image2.attr('src', 'http://localhost:8888/wp-content/themes/BC-Advisors/assets/images/Christopher-01.jpg');
            image2.fadeIn('slow');
        });
        titulo2.fadeOut('slow', function() {
            titulo2.css('border-top', 'solid 2px rgba(69, 134, 234, 0.1)');
            titulo2.text('Christopher Baillarie');
            titulo2.fadeIn('slow');
        });
        texto2.fadeOut('slow', function() {
            texto2.text('Titulado en ingeniería comercial, con mención en economía y diplomado en Valorización de empresas de la Universidad Adolfo Ibáñez. Ha ejercido labores en el área de estudios de la corredora de bolsa del banco BCI y como portafolio manager en Corpbanca AGF. Ha trabajado a cargo del área de finanzas de las categorías de bebestibles de Unilever Chile. Ha realizado consultorías en materia de finanzas y evaluación de proyectos e inversiones, tanto en el ámbito de instituciones privadas como públicas. Actualmente se desempeña como director de 3 compañías privadas, dentro de las cuales se encuentra C&A.');
            texto2.fadeIn('slow');
        });
    })

    // seccion nuestros servicios, cambio de texto on click
        var titulopro = $('#prod-title');
        var textopro = $('#prod-text');
        var iso = $('.isotipo');

        $('#prod1 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text('Valorización de empresas');
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Valorizamos empresas utilizando los métodos más actualizados de la industria teniendo así una opinión experta acerca del valor de mercado de su negocio. Servicio muy útil para conocer el valor de su negocio y con ello poder vender participaciones al precio de mercado.');
                    textopro.fadeIn('slow');
                });
            iso.fadeOut('slow', function() {
                iso.html(`<i class="fas fa-chart-line fa-10x"></i>`);
                iso.fadeIn('slow');
            });

        });
        $('#prod2 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text(`Valorizacion de fondos de inversión`);
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Realizamos servicio de valorización de fondos de inversión, específicamente fondos de inversión inmobiliarios, capital privado y fondos de fondos.');
                    textopro.fadeIn('slow');
                });
             iso.fadeOut('slow', function() {
                iso.html('<i class="fas fa-chart-bar fa-10x"></i>');
                iso.fadeIn('slow');
            });
        });
        $('#prod3 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text('Evaluación de proyectos');
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Mejoramos el valor de su negocio prestando asesoría en la evaluación de nuevos proyectos en su empresa. Estudiamos las ventajas y desventajas cualitativas y cuantitativas de los nuevos proyectos, con lo cual entregamos un informe por la conveniencia o no de realizarlo.');
                    textopro.fadeIn('slow');
                });
             iso.fadeOut('slow', function() {
                iso.html('<i class="fas fa-chart-pie fa-10x"></i>');
                iso.fadeIn('slow');
            });
        });
        $('#prod4 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text('Estudios de impacto económico');
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Evaluamos el impacto económico de proyectos públicos y privados. Nuestros asociados han participado en diversos proyectos propuestos por el estado.');
                    textopro.fadeIn('slow');
                });
             iso.fadeOut('slow', function() {
                iso.html('<i class="fas fa-chart-area fa-10x"></i>');
                iso.fadeIn('slow');
            });
        });
        $('#prod5 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text('Asesoría en compra y venta de empresas ');
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Por medio de nuestro equipo profesional, realizamos procesos de due-dilligence y prestamos asesorías en la compra y venta de empresas. Proceso muy similar al de la valorización de las empresas y evaluación de los futuros efectos de la fusión mediante proyección de flujos. Los flujos se sensibilizan utilización herramientas estadísticas en las cuales se les otorga distribuciones estadísticas al comportamiento de las variables más relevantes en la conformación del flujo de caja.');
                    textopro.fadeIn('slow');
                });
             iso.fadeOut('slow', function() {
                iso.html('<i class="far fa-handshake fa-10x"></i>');
                iso.fadeIn('slow');
            });
        });
        $('#prod6 a').click(function() {
        	$('.menu-list .is-active').removeClass('is-active');
        	$(this).addClass('is-active');
        	titulopro.fadeOut('slow', function() {
                    titulopro.text('Asesoría en evaluación de rating crediticio ');
                    titulopro.fadeIn('slow');
                });
        	textopro.fadeOut('slow', function() {
                    textopro.text('Prestamos asesorías en relación al mejoramiento de su rating crediticio para presentación frente a los bancos, inversionistas y calificadoras de riesgo. Realizamos un informe completo sobre los aspectos fundamentales de la compañía que se deben fortalecer para que esta tenga mejores condiciones crediticias (tasas de interés más bajas, estructuración a largo plazo de su deuda financiera o mejoramiento de monto de las líneas crédito).');
                    textopro.fadeIn('slow');
                });
             iso.fadeOut('slow', function() {
                iso.html('<i class="far fa-handshake fa-10x"></i>');
                iso.fadeIn('slow');
            });
        });

        /* To Top button animated
----------------------------- */
// When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            $("#toTop").css("display", "block");
        } else {
            $("#toTop").css("display", "none");
        }
    }

    $('#toTop').on('click', function(topFunction) {
        topFunction.preventDefault();
        $("html, body").animate({scrollTop: 0}, 200);
    });

    $('#down').on('click', function(topFunction) {
        topFunction.preventDefault();
        $("html, body").animate({scrollTop: $(window).height()*1}, 1000);
    });

/* fin To Top button animated
----------------------------- */

});