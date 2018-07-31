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
                        <div class="logo-fill">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/logo--trans.png" alt="" id="logo-temp">
                        </div>
                        <h1 class="title prod-title"></h1>
                        <p class="prod-text"></p>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nuestros clientes -->
<section>
    <div class="sec-clients" id="clientes">
        <div class="container">
            <?php query_posts('post_type=clientes&posts_per_page=1'); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="columns">
                    <div class="column subtitle">
                        <p>Nuestros Clientes</p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            <div class="columns">
                <?php query_posts('post_type=clientes&order=ASC'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <div class="column client">
                        <?php if( get_field('logo_cliente') ): ?>
                            <a href="<?php the_field('link') ?>" target="_blank">
                                <img src="<?php the_field('logo_cliente') ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; endif; ?>
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
                <?php query_posts('post_type=contacto'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <?php the_content(  ) ?>
                <?php endwhile; endif; ?>
            </form>
        </div>
    </div>
</section>
<button id="toTop" class=portfolio" title="toTop">
    <i class="fas fa-angle-double-up fa-2x"></i>
    <p>To Top</p>
</button>

<?php get_footer(); ?>