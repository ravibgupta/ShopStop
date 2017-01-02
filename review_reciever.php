<?php
		$summary = $_POST["summary"];
		$details = $_POST["details"];
        $product_id = $_POST["product_id"];
        $rating = $_POST["rating"];
       	$servername = $_POST["servername"];
	    $username = $_POST["username"];
	    $password = $_POST["password"];
	    $dbname = $_POST["dbname"];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO reviews (product_id, summary, details, rating)
					VALUES ('$product_id', '$summary', '$details', '$rating')";
					
	if ($conn->query($sql) === TRUE) {
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>