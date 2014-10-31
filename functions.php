<?php

function sccslResources(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'sccslResources');

//Register custom menus
function register_my_menus() {
	register_nav_menus(
		array( 
		  'main-menu' => __( 'Main Menu' )
		)	
	);

  add_action( 'init', 'register_my_menus' );

}

/* Add custom menus to Dashboard > Menus */       
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu'
		)
	);
}