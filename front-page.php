<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="main">
    <div id="content">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
		        <h2><?php the_title(); ?></h2>     
				<?php the_content('<p class="serif">More &raquo;</p>'); ?>
				<?php wp_link_pages(); ?>
			</div>
   
			<?php endwhile; 
			else:?>
				<h4>Sorry, no posts yet but please check back soon.</h4>
			<?php endif; ?>
    </div>

<!-- START SIDEBAR -->
<?php get_sidebar( 'secondary' ); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>