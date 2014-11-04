<div id="middle">
	<div id="sidebar-primary">
		<?php if ( is_active_sidebar( 'primary' ) ) : ?>

			<?php dynamic_sidebar( 'primary' ); ?>

		<?php else : ?>

		<!-- Create some custom HTML or call the_widget().-->
	    <a href="#"><img class="sccsl-logo" src="images/Student-Leadership/SL2010.png" alt="sccsl logo"/></a>

		<?php endif; ?>	
	</div><!--#sidebar-primary-->