<div id="middle">
	<div id="sidebar-primary">
		<?php if ( is_active_sidebar( 'primary' ) ) : ?>

			<?php dynamic_sidebar( 'primary' ); ?>

		<?php else : ?>

		<!-- Create some custom HTML or call the_widget().-->
	    

		<?php endif; ?>	
	</div><!--#sidebar-primary-->