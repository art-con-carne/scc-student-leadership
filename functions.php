<?php

function sccslResources(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'sccslResources');

//Register custom menus
function register_my_menus() {
	register_nav_menus(
		array( 
		  'main-menu' => __( 'Main Menu' ),
		  'footer-menu' => __( 'Footer Menu' ),
		  'clubs-menu' => __( 'Clubs Menu' )
		)	
	);

  add_action( 'init', 'register_my_menus' );

}

/* Add custom menus to Dashboard > Menus */       
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'footer_menu' => 'Footer Menu',
		  'clubs-menu' => __( 'Clubs Menu' )
		)
	);
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

	/* Register the 'secondary' sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}