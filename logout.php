<?php
//Include FB config file
require_once 'fbConfig.php';

//Unset user data from session
unset($_SESSION['username']);

//Destroy session data
$facebook->destroySession();

//Redirect to homepage
header("Location:index.php");
?>