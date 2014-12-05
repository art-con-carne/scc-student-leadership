<?php

add_action('init', 'sccsl_create_post_type');

function sccsl_create_post_type() {
  register_post_type('sccsl-org', array(
    'labels' => array(
      'name' => 'Organizations',
      'singular_name' => 'Organization',
    ),
	'public' => true,
	'publicly_queryable' => true,
    'menu_position' => 5,
	'taxonomies' => array('category'),
    'hierarchical' => false,
	'register_meta_box_cb' => 'add_sccsl_metabox',
    'supports' => array( 'title', 'thumbnail', 'revisions', 'editor','post-formats', 'custom-fields' ),
  ));
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'page', 'sccsl-org' ) );
  return $query;
}


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
		  'clubs-menu' => __( 'Clubs Menu' ),
		  'committees-menu' => __( 'Committees Menu' ),
		  'boards-menu' => __( 'Boards Menu' ),
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
		  'clubs-menu' => 'Clubs Menu',
		  'committees-menu' => 'Committees Menu',
		  'boards-menu' => 'Boards Menu'
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
	

}