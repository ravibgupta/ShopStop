<?php
	

	function raviConnection(){

		$servername = "107.180.51.22:3306";
		$username = "nilkanth_admin";
		$password = "root1";
		$dbname = "nilkanth_ravi";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;

	}


?>