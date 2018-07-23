<!DOCTYPE html>
<html>

<head>
    <meta charset=<?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>

    <?php wp_head() ?>
</head>

<body>
    <nav>
        <!-- Barra superior con fecha, hora y otros -->
        <div class="topbar">
            <div class="date">
                <i class="far fa-clock"></i><span id="date"></span>
            </div>
            <div class="indicadores">
                <span class="uf"><strong>UF: </strong> </span>
                <span class="utm"><strong>UTM: </strong></span>
                <span class="dolar"><strong>USD: </strong></span>
                <span class="euro"><strong>EUR: </strong></span>
            </div>
        </div>
        <!-- /Barra superior con fecha, hora y otros -->
        <div class="navbar">
            <a href="index.html" class="navbar__brand"><img alt="brand-logo" src="<?php bloginfo('template_url') ?>/assets/images/logo--trans.png"></a>
            <h1>BC Advisors</h1>
            <div class="navbar__toggle">
                <i class="fas fa-lg fa-bars"></i>
                <i class="fas fa-lg fa-times"></i>
            </div>
            <div class="sidenav--close">
                <ul class="sidenav__items">
                    <li><a href="#quiensomos">Quiénes Somos</a></li>
                    <li><a href="#servicios">Nuestros Servicios</a></li>
                    <li><a href="#clientes">Nuestros Clientes</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <ul class="navbar__items">
                <li><a href="#quiensomos">Quiénes Somos</a></li>
                <li><a href="#servicios">Nuestros Servicios</a></li>
                <li><a href="#clientes">Nuestros Clientes</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>