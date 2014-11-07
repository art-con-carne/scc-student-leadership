<div id="sidebar-secondary">
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
	<p>
		Student Leadership facilitates<br>
		leadership development and supports<br>
		student involvement, creating<br>
		connections for student success.
	</p>
	
	<h3><?php _e('Search'); ?></h3>
		<ul>	
			<?php get_search_form(); ?>
		</ul>

	<h4>Admin</h4>
	
	<?php endif; ?>
</div><!--/sidebar-secondary-->
</div><!--/middle-->