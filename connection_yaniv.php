<?php
	

	function yanivConnection(){

		$servername = "107.180.46.159:3306";
		$username = "shaurya1";
		$password = "mittal";
		$dbname = "ycuser";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;

	}


?>