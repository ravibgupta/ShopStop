<?php

	function marianneConnection(){
		$servername = "50.62.209.185:3306";
		$username = "sha1";
		$password = "sh@urya1";
		$dbname = "mariannepaulson_";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;
	}

?>