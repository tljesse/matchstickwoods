<?php
/*
 Template Name: Contact Template
*/
?>

<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }

  //response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	 
	//user posted variables
	$type = $_POST['message_type'];
	$name = strip_tags($_POST['message_name']);
	$email = strip_tags($_POST['message_email']);
	$phone = strip_tags($_POST['message_phone']);
	$message = strip_tags($_POST['message_text']);
	$human = intval($_POST['message_human']);
	 
	//php mailer variables
	$subject = get_bloginfo('name') . ' Contact Form Message';
	$headers = 'Reply-To: ' . $email . "\r\n";

	if(!$human == 0){
	  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
	  else {
	 
	    //validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email))
		  my_contact_form_generate_response("error", $email_invalid);
		else //email is valid
		{
	    //validate presence of name and message
		  if(empty($name) || empty($phone) || empty($type) || empty($message)){
		    my_contact_form_generate_response("error", $missing_content);
		  }
		  else //ready to go!
		  {
		  	$messageContent = "From: $name \n Phone: $phone \n Message: $message";
		  	if ($type == 'counter') {
		  		$to = get_option('countertops_email');
		  	} else {
		  		$to = get_option('siding_email');
		  	}
		    $sent = wp_mail($to, $subject, $messageContent, $headers);
				if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
				else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
		  }
		}
	  }
	}
	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>

<?php get_header(); ?>

<div id="content">

	<main id="main" class="m-all cf pagination" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div id="inner-content" class="wrap cf">

			<header class="article-header">
				<h1><?php echo get_the_title(); ?><?php echo __( ' Us', APP_TD); ?></h1>
				<?php dynamic_sidebar( 'Contact Page Description' ); ?>
			</header>

			<style type="text/css">
			  
			</style>
			<div class="m-all t-1of3 d-1of3">
				<?php dynamic_sidebar( 'Contact Page Description 2' ); ?>
			</div>
			 
			<div id="respond" class="m-all t-2of3 d-2of3">
			  <?php echo $response; ?>
			  <form action="<?php the_permalink(); ?>" method="post">
			  	<p>
			  		<label for="message_type">Service: <span>*</span> <br><input type="radio" name="message_type" value="counter"> Countertops
			  		<br/><input type="radio" name="message_type" value="siding"> Siding</label>
			  	</p>
			    <p><label for="message_name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
			    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
			    <p><label for="message_phone">Phone: <span>*</span> <br><input type="text" name="message_phone" value="<?php echo esc_attr($_POST['message_phone']); ?>"></label></p>
			    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
			    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
			    <input type="hidden" name="submitted" value="1">
			    <p><input type="submit" class="button"></p>
			  </form>
			</div>
			
		</div>

	</main>

</div>


<?php get_footer(); ?>