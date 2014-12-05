<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="main">
    <div id="content">
        <?php global $post; ?>
		<h2><?php echo $post->post_title;?></h2>
		<p><?php echo $post->post_content;?></p>
		
		<?php
			$clublist = array(
							'post_type' => 'sccsl-org',
							'category_name' => 'club-info',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'ASC'
							);
							
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