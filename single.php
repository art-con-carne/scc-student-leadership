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
			$slug = get_post_meta($post->ID, "club", true);
			if (!$slug) $slug = get_post_meta($post->ID, "committee", true);
			if (!$slug) $slug = get_post_meta($post->ID, "board", true);
				
				$query = new WP_Query(
					array(
						'category_name' => $slug,
						'posts_per_page' => -1
						)
					);
			?>	
			
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				 
                <div id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt('<p class="serif">More &raquo;</p>'); ?>
			
            </div><!--/post-->
   
			<?php endwhile; 
			else:?>
				<h5>Sorry, no posts yet but please check back soon.</h5>
			<?php endif; ?>
    </div><!--/content-->

<!-- START SIDEBAR -->
<?php get_sidebar( 'secondary' ); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>