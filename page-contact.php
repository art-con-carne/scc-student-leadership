<?php

/*
Template Name: Contact
*/

	//response generation function
	
	$response = "";
	
	//function to generate response
	function my_contact_form_generate_response($type, $message){
	
		global $response;
		
		if($type == "success") $response = "<div class='success'>{$message}</div>";
		else $response = "<div class='error'>{$message}</div>";
    
	}		

	//response message
	$not_human = "Human Verification is not correct.";
	$missing_content = "Please provide all information.";
	$email_invalid = "Your email address is invalid.";
	$message_unsent = "Your message did not go through, please try again.";
	$message_sent = "Thanks! Your message has been sent.";
	
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "You've received a message from ".get_bloginfo('name');
	$headers = 'From: ' . $email . "\r\n" .
		'Reply-To: ' . $email . "\r\n";
		
	if(!$human == 0){
		if($human != 2) my_contact_form_generate_response("error", $not_human); //not human
		else {
		   //validate email
		   if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		     my_contact_form_generate_response("error", $email_invalid);
		   else //email is valid
		 {
		 //validate that there is a name and message
		 if(empty($name) || empty($message)){
		   my_contact_form_generate_response("error", $missing_content);
		}
		else //all set
		{
		$sent = wp_mail($to, $subject, strip_tags($message), $headers);
		if($sent) my_contact_form_generate_response("success", $message_sent); //message
		successful
		else my_contact_form_generate_response("error", $message_unsent);//messaged failed
	
		}
	 }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content

?>

<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

  <div id="contactmain" class="maincontent">
	<div id="content" role="main">
    
        <?php while ( have_posts() ) : the_post(); ?>
		
           <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
               <h1> class="entry-title'><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content">
            <?php the_content(); ?>
			
            </div> <!--end entry content class -->
           </article> <!--  end #post -->
            

  
           <div id="respond"> 
		    <?php echo $response; ?>
		    <form action="<?php the_permalink(); ?>" method="post">
			 <p><label for="name">Your Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
			 <p><label for="message_email">Your Email: <span>*</span> <br><input type="text" name="message_email" value"<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
			 <p><label for="message_text">Your Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
			 <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 7 = 12</label></p>
			 <p><input type="submit"></p>
		    </form>
           </div> <!--end respond id-->
		
	     </div><!-- end entry-content class-->
		 
        </article><!-- #post -->
	 
       <?php endwhile; ?> //this ends the loop      

      </div> <!--end contactmain id -->
    </div> <!--end maincontent id -->
  <!--START SIDEBAR-->
  <?php get_sidebar( 'secondary' ); ?>
  <!END SIDEBAR-->
  <?php get_footer(); ?>