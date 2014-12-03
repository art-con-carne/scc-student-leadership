<div id="wrapper">
	<div id="middle">
		<div id="sidebar-primary">
			
			<?php if ( is_active_sidebar( 'primary' ) ) : ?>

				<?php dynamic_sidebar( 'primary' ); ?>

			<?php else : ?>

			<?php
				global $wp_query;
				$postid = $wp_query->post->ID;
				$image = get_post_meta($postid, 'board', true);
				wp_reset_query();

				if ( $image != '' ) { ?>
					<img src="<?php echo $image; ?>" />
			<?php 
			} else { ?>
			   <img src="<?php bloginfo('template_directory');?>/images/Student-Leadership/SL2010.png" alt="SCCSL Logo" width="50%" height="50%"/>
			<?php } ?>
		
			<?php endif; ?>	
		</div><!--/#sidebar-primary-->
	</div><!--/#middle-->