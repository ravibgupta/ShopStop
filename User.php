<?php
class User {
	private $dbHost     = "l107.180.48.124:3306";
    private $dbUsername = "shaurya";
    private $dbPassword = "mittal";
    private $dbName     = "sjdu";
	private $userTbl    = 'market_users';
	
	function __construct(){
		if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
	}
	
	function checkUser($userData = array()){
		if(!empty($userData)){
			//Check whether user data already exists in database
			$prevQuery = "SELECT * FROM ".$this->userTbl." WHERE email = '".$userData['email']."'";
			$prevResult = $this->db->query($prevQuery);
			if($prevResult->num_rows > 0){
				//Update user data if already exists
			//	$query = "UPDATE ".$this->userTbl." SET firstname = '".$userData['first_name']."', lastname = '".$userData['last_name']."', email = '".$userData['email']."' WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
			//	$update = $this->db->query($query);
			}else{
				//Insert user data
				$query = "INSERT INTO ".$this->userTbl." SET firstname = '".$userData['first_name']."', lastname = '".$userData['last_name']."', email = '".$userData['email']."'";
				$insert = $this->db->query($query);
			}
			
			//Get user data from the database
			$result = $this->db->query($prevQuery);
			//$userData = $result->fetch_assoc();
		}
		
		//Return user data
		return $userData;
	}
}
?>