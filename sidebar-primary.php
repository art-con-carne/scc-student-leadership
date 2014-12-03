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
			   <img src="http://54.213.153.237/wp-content/uploads/2014/11/SL2010-site.png" alt="SCCSL Logo" />
			<?php } ?>
		
			<?php endif; ?>	
		</div><!--/#sidebar-primary-->
	</div><!--/#middle-->