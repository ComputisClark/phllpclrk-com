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

   <div class="form-group w-25">
	   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 m-5 p-1" style="justify-content:space-around; align-content: center; ">
   <form class="contact" method="post" action="">
			<h1 class="row row-cols-1">Contact Form</h1>
			<div class="form-group">
				<label for="email">
					<input class="form-control" id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">
					<input class="form-control" type="text" name="name" placeholder="Your Name" required>
				<label>
				<input class="form-control" type="text" name="subject" placeholder="Subject" required>
				<textarea class="form-control" name="msg" placeholder="Message" required></textarea>
			</div>

            <?php if ($responses): ?>
<p class="responses"><?php echo implode('<br>', $responses); ?></p>
<?php endif; ?>
			<input type="submit">
		</div>			
	</div>			




<!--End Page Content-->    


<?php include('Footer.php'); ?>