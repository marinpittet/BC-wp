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
                        <div id="bloque">
                            <div class="quienes-somos">
                                <?php query_posts('post_type=quienes_somos'); ?>
                                <?php if(have_posts()): while(have_posts()): the_post(); ?>

                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <div class="columns">
                                        <div class="column back"> 
                                            <?php the_post_thumbnail( 'medium' ) ?>
                                        </div>
                                        <div class="column is-four-fifths">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                <?php endwhile; endif; ?>
                            </div>

                            <div class="equipo">
                                <?php query_posts('post_type=equipo&order=ASC'); ?>
                                <?php if(have_posts()): while(have_posts()): the_post(); ?>

                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <div class="columns">
                                        <div class="column back"> 
                                            <?php the_post_thumbnail( 'medium' ) ?>
                                        </div>
                                        <div class="column is-four-fifths">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                <?php endwhile; endif; ?>
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
                        <?php query_posts('post_type=servicios&order=ASC'); ?>
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <li class="prod-list">
                                <a href="#prod-block" class="list-title"> <?php the_title(); ?> <i class="fas fa-caret-right fa-lg"></i></a>
                                <div class="content">
                                    <?php the_content() ?> 
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
                
                <div class="column products" id="prod-block">
                    <div class="prod1">
                            <h1 class="title prod-title"></h1>
                            <p class="prod-text"></p>            
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