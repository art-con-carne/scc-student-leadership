<div id="wrapper">
	<div id="middle">
		<div id="sidebar-primary">
			<?php if ( is_active_sidebar( 'primary' ) ) : ?>

				<?php dynamic_sidebar( 'primary' ); ?>

			<?php else : ?>

			<!-- Create some custom HTML or call the_widget().-->
			<!--<img src="http://ec2-54-68-141-55.us-west-2.compute.amazonaws.com/wp-content/themes/scc-student-leadership/images/Student-Leadership/SL2010.png" width="50%" height="50%" alt="SCCSL Logo" />-->
			<img src="<?php bloginfo('template_directory');?>/images/SORC/SORC2010.png" alt="SORC Logo" width="50%" height="50%"/>
			<?php endif; ?>	
		</div><!--/#sidebar-primary-->
	</div><!--/#middle-->