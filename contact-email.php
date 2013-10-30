<html>
	<body>
		<?php $name =$_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$formcontent ="From: $name \n Message: $message";
		$recipient = "youremail@address.com"; //Enter in your email address
		$subject ="Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo "Thank You! Someone will be in contact with you soon.";

		?>
	</body>
</html>
