<?php
/*
Template Name: Contact Form
*/
?>


<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Indiquez votre nom.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'Indiquez une adresse e-mail valide.';
			$hasError = true;
		} else     if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
		{
			$emailError = 'Adresse e-mail invalide.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'Entrez votre message.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'messaoudabenchikh@yahoo.fr';
			$subject = 'Formulaire de contact de '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'De : mon site <'.$emailTo.'>' . "\r\n" . 'R&eacute;pondre &agrave; : ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'Formulaire de contact';
				$headers = 'De : <messaoudabench@gmail.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>


<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contact-form.js"></script>



<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<h1>Merci, <?=$name;?></h1>
		<p>Votre message a été envoyé avec succès -</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error text-center mt-3">Une erreur est survenue lors de l'envoi du formulaire.</p>
		<?php } ?>
		
		<div class="container">
		<form action="<?php the_permalink(); ?>" id="contactForm" class=" form-horizontal text-center mt-5" method="post">
	    <h1>Contactez-nous</h1>
			<ol class="forms mx-auto">
				<li><label for="contactName">Nom</label>
					<input type="text" name="contactName" id="contactName" class="form-control mb-3"  placeholder="Nom" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
				
				<li><label for="email">Email</label>
					<input type="text" name="email" id="email"  class="form-control mb-3" name="email" placeholder="Email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
				
				<li class="textarea mx-auto"><label for="commentsText">Message</label>
					<textarea name="comments" id="commentsText" rows="10" class="form-control requiredField mb-3" placeholder="Votre message..."><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span> 
					<?php } ?>
				</li>
	
				<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit" class=" btn bg text-white w-25">Envoyer</button></li>
			</ol>
		</form>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>

<?php get_footer(); ?>