<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '218148818631019'; //Facebook App ID
$appSecret = '436cbd020a7a3b68a6fd22ec4281e7d4'; // Facebook App Secret
$redirectURL = 'http://localhost:8888/shopStopMA/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>