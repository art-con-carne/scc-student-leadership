<div id="sidebar-secondary">
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
	<p>
			&#8220 Student Leadership facilitates leadership development and supports student involvement, creating connections for student success.	&#8221
	</p>
	
	<h3><?php _e('Search'); ?></h3>
		<ul>	
			<?php get_search_form(); ?>
		</ul>
	
	<!--insert calendar here-->
	
	
	<h4>Admin</h4>
	
	<?php endif; ?>
</div><!--/sidebar-secondary-->
</div><!--/middle-->