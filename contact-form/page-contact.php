<?php get_header(); ?>

<div id="contactmain" class="maincontent">
	<div id="content" role="main">
    
        <?php while ( have_posts() ) : the_post(); ?>
		
        	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <h1 class="entry-title'><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content">
            <?php the_content(); ?>
			
            </div> <!--end entry content class -->
            </article> <!--  end #post -->
            
  <?php endwhile; ?> //this ends the loop          
  
  </div> <!--end contactmain id -->
  </div> <!--end maincontent id -->
  <!--START SIDEBAR-->
  <?php get_sidebar( 'secondary' ); ?>
  <!END SIDEBAR-->
  <?php get_footer(); ?>