<?php
//Database configuration
$dbHost = '50.62.209.185';
$dbUsername = 'marianne';
$dbPassword = 'password123';
$dbName = 'mariannepaulson_';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
endif;
?>