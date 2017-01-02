<?php
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	

	$servername = "107.180.48.124:3306";
	$user = "shaurya";
	$pass = "mittal";
	$dbname = "sjdu";
	
	// Create connection
	$conn = new mysqli($servername, $user, $pass, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO market_users (firstname, lastname, email, username, password)
					VALUES('$firstname', '$lastname', '$email', '$username', '$password')";
					
	if ($conn->query($sql) === TRUE) {
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>