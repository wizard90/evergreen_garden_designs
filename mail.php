<?php
/**
 * form validation file
 *
 * 
 *
 * PHP version 5
 *
 * @package    .
 * @author     Renjith VR
 * @since      Version 1.0
 * @link       
 */

if(isset($_POST['submit']))
{
	if(isset($_POST['message']) && strlen(trim($_POST['message'])) > 20)
	{
		$message = trim($_POST['message']);
	}
	else
	{
		$error = 'Your message must be greater than 20 characters!';	
	}

	if(isset($_POST['email']) && strlen(trim($_POST['email'])) > 0)
	{
		if(filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL))
		{
			$email = trim($_POST['email']);
		}
		else
		{
			$error = 'Please Enter A Valid Email';
			echo $error;
		}
	}
	else
	{
		$error = 'Please Enter An Email';
	}
	
	if(isset($_POST['name']) && strlen(trim($_POST['name'])) > 0) 
	{
		$name = trim($_POST['name']);
	}
	else
	{
		$error = 'Please Enter Your  Name';
	}

	if(!isset($error))
	{
		$to = 'gardendesigns4evergreen@gmail.com';
		$subject = 'Ever Green Garden Designs';
		$headers = $name . '<' . $email . ">\r\n".
		    'Reply-To:' . $email . "\r\n";
		mail($to, $subject, $message, $headers);
		header('location:ack.php');
	}
}

?>