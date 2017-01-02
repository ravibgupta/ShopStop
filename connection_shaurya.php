<?php
	

	function shauryaConnection(){

		$servername = "107.180.48.124:3306";
		$username = "shaurya";
		$password = "mittal";
		$dbname = "sjdu";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;

	}


?>