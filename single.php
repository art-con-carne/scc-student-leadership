<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="main">
    <div id="content">
 			
			
			<?php 
			$slug = get_post_meta($post->ID, "club", true);
				
				$query = new WP_Query(
					array(
						'category_name' => $slug
						)
					);
			?>	
			
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				 
                <div id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content('<p class="serif">More &raquo;</p>'); ?>
			
            </div><!--/post-->
   
			<?php endwhile; 
			else:?>
				<p>Sorry, no posts to be found.</p>
			<?php endif; ?>
    </div><!--/content-->

<!-- START SIDEBAR -->
<?php get_sidebar( 'secondary' ); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>