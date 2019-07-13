<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '108516420771-5tlvp3ela6l77pgger3nbc97oec5dslg.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'cyJ3NLN3BuPvAXE10FczloUW'; //Google client secret
$redirectURL = 'http://localhost/course-tube/info.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('course-tube');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
