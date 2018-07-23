<?php get_header(); ?>
    <!-- Quienes somos -->
    <section>
        <div class="sec-us" id="quiensomos">
            <div class="banner">
                <div class="container">
                    <div class="columns info__contents">
                        <div class="column is-4 is-offset-8 info__contents--first" id="qs-01">
                            <a href="#info-us">
                                <div class="text--active">
                                    <h3 class="title"><i class="fas fa-indent"></i> Quiénes somos</h3>
                                    <h1 class="subtitle">BC Advisors</h1>
                                    <p class="subtitle">Ver más <i class="fas fa-arrow-alt-circle-right"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="columns info__contents">
                            <div class="column is-4 is-offset-8 info__contents--second" id="qs-02">
                                <a href="#info-us">
                                    <div class="text--active">
                                        <h3 class="title"><i class="fas fa-users"></i> Nuestro Equipo</h3>
                                        <h1 class="subtitle">BC Advisors</h1>
                                        <p class="subtitle">Ver más <i class="fas fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column info" id="info-us">
                        <div class="info__text">
                            <h1 class="subtitle">BC Advisors</h1>
                            <h2 id="title-current" class="title">Quiénes somos</h2>
                            <div class="columns">
                                <div class="column back">
                                    <img id="img-principal" src="<?php bloginfo('template_url') ?>/assets/images/logo--invert-01.png">
                                </div>
                                <div class="column is-four-fifths">
                                    <p id="text-current">Somos una consultora que cuenta con asociados expertos en finanzas y economía. Desarrollamos consultoría en evaluación de proyectos, valorización de activos financieros, valorización de empresas y estudios de impacto económico. Contamos con experiencia de años en el mercado chileno.</p>
                                </div>
                            </div>

                            <h2 id="title-current--2" class="title"></h2>
                            <div class="columns">
                                <div class="column back">
                                    <img id="img-2" src="<?php bloginfo('template_url') ?>/assets/images/blank-01.png">
                                </div>
                                <div class="column is-four-fifths">
                                    <p id="text-current--2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Nuestros Servicios -->
    <section>
        <div class="sec-prod" id="servicios">
            <div class="container">
                <div class="columns">
                    <div class="column headings is-one-third">
                        <h1 class="subtitle">BC Advisors</h1>
                        <h2 class="title">Nuestros Servicios</h2>
                        <ul class="menu-list">
                            <li id="prod1"><a href="#prod-block" class="is-active">Valorización de empresas <i class="fas fa-caret-right fa-lg"></i></a></li>
                            <li id="prod2"><a href="#prod-block">Valorizacion de fondos de inversión <i class="fas fa-caret-right fa-lg"></i></a></li>
                            <li id="prod3"><a href="#prod-block">Evaluación de proyectos <i class="fas fa-caret-right fa-lg"></i></a></li>
                            <li id="prod4"><a href="#prod-block">Estudios de impacto económico <i class="fas fa-caret-right fa-lg"></i></a></li>
                            <li id="prod5"><a href="#prod-block">Asesoría en compra y venta de empresas <i class="fas fa-caret-right fa-lg"></i></a></li>
                            <li id="prod6"><a href="#prod-block">Asesoría en evaluación de rating crediticio <i class="fas fa-caret-right fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <div class="column products" id="prod-block">
                        <div class="prod1">
                            <h1 id="prod-title" class="title">Valorización de empresas</h1>
                            <p id="prod-text">Valorizamos empresas utilizando los métodos más actualizados de la industria teniendo así una opinión experta acerca del valor de mercado de su negocio. Servicio muy útil para conocer el valor de su negocio y con ello poder vender participaciones al precio de mercado.</p>
                            <p class="isotipo"><i class="fas fa-chart-line fa-10x"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="sec-clients" id="clientes">
            <div class="container">
                <div class="columns">
                    <div class="column subtitle">
                        <p>Nuestros Clientes</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column client">
                        <img src="http://www.clker.com/cliparts/O/v/c/b/i/6/generic-logo.svg">
                    </div>
                    <div class="column client">
                        <img src="http://paperbackdesign.com/wp-content/uploads/2015/04/generic-logo_150ppi-600x300px.png">
                    </div>
                    <div class="column client">
                        <img src="https://root.cern.ch/img/logos/ROOT_Logo/misc/generic-logo-cyan-512.png">
                    </div>
                    <div class="column client">
                        <img src="https://seeklogo.com/images/G/generic-logo-ECC6ED04F3-seeklogo.com.png">
                    </div>
                    <div class="column client">
                        <img src="http://generic.com.sg/wp-content/uploads/2015/06/Generic-Logo-Horizontal-FA-01.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <section>
        <div class="contact" id="contacto">
            <div class="container container-contact">
                <p class="title">Contacto</p>
                <p class="subtitle">Puedes contactarnos mediante el siguiente formulario, responderemos lo antes posible.</p>
                <form>
                    <p>Nombre:</p>
                    <input type="text" name="" placeholder="Nombre">
                    <p>Apellidos:</p>
                    <input type="text" name="" placeholder="Apellidos">
                    <p>Correo electrónico:</p>
                    <input type="text" name="" placeholder="ejemplo@mail.com">
                    <p>Si deseas déjanos un mensaje:</p>
                    <textarea placeholder="Escribe aquí tu mensaje"></textarea>
                    <a class="button">Enviar <i class="far fa-paper-plane"></i></a>
                </form>
            </div>
        </div>
    </section>
    <button id="toTop" class=portfolio" title="toTop">
        <i class="fas fa-angle-double-up fa-2x"></i>
         <p>To Top</p>
    </button>
    
    <?php get_footer(); ?>