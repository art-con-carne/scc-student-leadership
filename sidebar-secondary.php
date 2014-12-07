<div id="sidebar-secondary">
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
	
	<h3><?php _e('Search'); ?></h3>
		<ul>	
			<?php get_search_form(); ?>
		</ul>
	
	<!--insert calendar here-->
	

	
	<?php endif; ?>
</div><!--/sidebar-secondary-->
