<?php
	if(isset($_POST["signup"])){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$post = 'firstname='.$firstname.'&lastname='.$lastname.'&email='.$email.'&username='.$username.'&password='.$password;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.shauryamittal.info/cmpe272/signup_reciever.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.venkateshweb.com/signup_reciever.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.momconsulting.org/signup_reciever.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);
	}	
?>