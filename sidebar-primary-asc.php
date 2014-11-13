<div id="wrapper">
	<div id="middle">
		<div id="sidebar-primary">
			<?php if ( is_active_sidebar( 'primary' ) ) : ?>

				<?php dynamic_sidebar( 'primary' ); ?>

			<?php else : ?>

			
			<img src="<?php bloginfo('template_directory');?>/images/ASC/ASC2010.png" alt="ASC Logo" width="50%" height="50%"/>
			<?php endif; ?>	
		</div><!--/#sidebar-primary-->
	</div><!--/#middle-->