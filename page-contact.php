<?php get_header(); ?>

<div id="contactmain" class="maincontent">
	<div id="content" role="main">
    
        <?php while ( have_posts() ) : the_post(); ?>
		
        	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <h1 class="entry-title'><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content">
            <?php the_content(); ?>
			
            </div> <!--end entry content class -->
            </article> <!--  end #post -->
            
  <?php endwhile; ?> //this ends the loop          
  
  </div> <!--end contactmain id -->
  </div> <!--end maincontent id -->
  <!--START SIDEBAR-->
  <?php get_sidebar( 'secondary' ); ?>
  <!END SIDEBAR-->
  <?php get_footer(); ?>
  
  <div id="respond">
		<?php echo $response; ?>
		<form action="<?php the_permalink(); ?>" method="post">
			<p><label for="name">Your Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
			<p><label for="message_email">Your Email: <span>*</span> <br><input type="text" name="message_email" value"<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
			<p><label for="message_text">Your Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
			<p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 7 = 12</label></p>
			<p><input type="submit"></p>
		</form>
</div>