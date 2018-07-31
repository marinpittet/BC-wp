<footer>
        <div class="container">
            <div class="columns">
                <div class="column">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/logo--trans.png">
                    <?php query_posts('post_type=footer'); ?>
            		<?php if(have_posts()): while(have_posts()): the_post(); ?>
                    	<p class="">Teléfono: <?php the_field('telefono') ?> | Dirección: <?php the_field('direccion') ?>  | Correo: <?php the_field('correo') ?> </p>
                    <?php endwhile; endif; ?>	
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>