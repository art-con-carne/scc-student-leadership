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

/*Contact Shortcode*/
add_shortcode('contact', 'contactUs');
function contactUs()
 {
   return <form action="http://54.213.153.237/contact/"><input type="submit" value="Contact Us!" /></form>;
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
	
	/* Breadcrumbs. Special thanks to the people at Cazue at http://cazue.com/articles/wordpress-creating-breadcrumbs-without-a-plugin-2013  for their excellent code*/
		function the_breadcrumb() {
			global $post;
			echo '<ul id="breadcrumbs">';
			if (!is_home()) {
				echo '<li><a href="';
				echo get_option('home');
				echo '">';
				echo 'Home';
				echo '</a></li><li class="separator"> / </li>';
				if (is_category() || is_single()) {
					echo '<li>';
					the_category(' </li><li class="separator"> / </li><li> ');
					if (is_single()) {
						echo '</li><li class="separator"> / </li><li>';
						the_title();
						echo '</li>';
					}
				} elseif (is_page()) {
					if($post->post_parent){
						$anc = get_post_ancestors( $post->ID );
						$title = get_the_title();
						foreach ( $anc as $ancestor ) {
							$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
						}
						echo $output;
						echo '<strong title="'.$title.'"> '.$title.'</strong>';
					} else {
						echo '<li><strong> '.get_the_title().'</strong></li>';
					}
				}
			}
			elseif (is_tag()) {single_tag_title();}
			elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
			elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
			elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
			elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
			elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
			echo '</ul>';
		}

	

}