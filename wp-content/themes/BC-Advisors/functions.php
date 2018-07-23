<?php 

function bc_style() {
		$theme_data = wp_get_theme();

		/*registro de estilos*/

		wp_register_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css', null, null, 'screen' );
		wp_register_style('Font_Awesome', 'https://use.fontawesome.com/releases/v5.1.1/css/all.css', null, null, 'screen');
		wp_register_style( 'main', get_parent_theme_file_uri('/assets/css/style.css'), null, null, 'screen' );

		/*llamar estilos*/

		wp_enqueue_style('bulma');
		wp_enqueue_style('Font_Awesome');
		wp_enqueue_style('main');
	}

	add_action( 'wp_enqueue_scripts', 'bc_style' );


function bc_scripts() {

	/* Register Scripts */
	wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js', null, null, true);
	wp_register_script('js', get_parent_theme_file_uri('/assets/js/script.js'), null, null, true);
	

	wp_enqueue_script('jQuery');
	wp_enqueue_script('js');
	
	}
add_action( 'wp_enqueue_scripts', 'bc_scripts' );
?>	