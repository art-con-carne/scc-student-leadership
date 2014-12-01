<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="main">
    <div id="content">
        <?php
			$clublist = array('category_name' => 'club-info');
			$query = new WP_Query( $clublist );
		?>
	
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div id="post-<?php the_ID(); ?>">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>     
            </div><!--/post-->
   
            <?php endwhile; 
					else:?>
				Sorry, no posts to be found.
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

    </div><!--/content-->

<!-- START SIDEBAR -->
<?php get_sidebar( 'secondary' ); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>