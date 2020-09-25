<?php
    
    $name = $email = $website = $subject = $comment = $sentStatus = '';
    $errName = $errEmail = $errWebsite = $errSubject = $errComment = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['name'])){
			$errName = '<span style="color: red;">Name is Required</span>';
		}elseif(!preg_match('/^[a-zA-Z ]*$/',$name)){
			$errName = '<span style="color: orange;">Only letters and white space allowed</span>';
		}else{
			$name = validate($_POST['name']);
			$errName = '';
		}
		
		if(empty($_POST['email'])){
			$errEmail = '<span style="color: red;">Email is Required</span>';
		}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$errEmail = '<span style="color: orange;">Invalid E-mail format</span>';
		}else{
			$email = validate($_POST['email']);
			$errEmail = '';
		}
		
		if(empty($_POST['website'])){
			$errWebsite = '';
		}elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
			$errWebsite = '<span style="color: orange;">Invalid URL</span>';
		}else{
			$website = 'Website: '. validate($_POST['website']); 
			$errWebsite = '';
		}
		
		if(empty($_POST['subject'])){
			$errSubject = '<span style="color: red;">Subject is Required</span>';
		}else{
			$subject = validate($_POST['subject']);
			$errSubject = '';
		}
		
		if(empty($_POST['comment'])){
			$errComment = '<span style="color: red;">Message field is Required</span>';
		}else{
			$comment = validate($_POST['comment']);
			$errComment = '';
		}
		
		if($errName == '' and $errEmail == '' and $errWebsite == '' and $errSubject == '' and $errComment == ''){
			$to = 'practice@wasekbellah.com';
			$headers = 'You have a E-mail from Practice PHP';
			$messageDetails =	"Name: $name \n".
								"Subject: $subject \n".
								"E-mail: $email \n".
								"$website \n\n".
								"$comment";
			
			if(mail($to, $subject, $messageDetails, $headers)){
				$sentStatus = '<span style="color: green;">Thank you for your message. It has been sent.</span>';
				$name = $email = $website = $subject = $comment = '';
			}
		}
	}
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en_US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Full Contact Form</title>
</head>

<body>
	<div class="container">
		
		<h1 class="headline">Contact Us</h1>
		<p class="text">Got a question? We'd love to here from you. Send us a message and we'll respond as soon as possible</p>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			
			<p class="required">Fields marked with * are required</p>
			
			<input class="float_left" type="text" name="name" placeholder="*Full Name" />
			
			<input class="float_right" type="text" name="email" placeholder="*E-mail" />
			
			<div class="clearfix"></div>
			
			<input class="float_left" type="text" name="website" placeholder="Website" />
			
			<input class="float_right" type="text" name="subject" placeholder="*Subject" />
			
			<div class="clearfix"></div>
			
			<textarea class="" name="comment" id="comment" placeholder="*Your Message"></textarea>
			
			<input class="float_right submit" name="submit" type="submit" value="Send">	
			
			<div class="clearfix"></div>		

		</form>
		
		<div class="formAlert">
			<?php
				echo $errName;
				echo $errEmail;
				echo $errWebsite;
				echo $errSubject;
				echo $errComment;
				echo $sentStatus;
			?>
		</div>
	
	</div>
</body>

</html>
