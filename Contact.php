<?php ?>

<?php $title = 'Contact'; ?>
<?php include('Header.php'); ?>


<?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// If there are no errors
	if (!$responses) {
		// Where to send the mail? It should be your email address
		$to      = 'phllpclrk@gmail.com';
		// Send mail from which email address?
		$from = 'noreply@phllpclrk.com';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}
?>


   <!-- Page Content-->
<div class="container-sm mt-5 d-flex justify-content-center" style="width:200px">
				
		<div class="row">
   				
				<h1 class="text-center justify-content-center">Contact Me</h1><br>
			
				<form class="contact" method="post" action="">	

				<label for="email">
					<input class="form-control flex-fill" style="width:300px" id="email" type="email" name="email" placeholder="Your Email" required>
				</label>


				<label for="name">
					<input class="form-control flex-fill"style="width:300px"type="text" name="name" placeholder="Your Name" required>
				<label>


				<input class="form-control flex-fill" style="width:300px" type="text" name="subject" placeholder="Subject" required>


				<textarea class="form-control flex-fill" style="width:300px" name="msg" placeholder="Message" required></textarea>
			

            	<?php if ($responses): ?>
				<p class="responses"><?php echo implode('<br>', $responses); ?></p>
				<?php endif; ?>
				<input type="submit">
			
			
		</div>				
</div>

<!--End Page Content-->    


<?php include('Footer.php'); ?>