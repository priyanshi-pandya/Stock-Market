<?php

session_start();

//Include Configuration File
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('932998583159-das2tjh4kbb25g37eofdc78qle7nhrvh.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('TisxQ5JwcK9Wb9vPcfswXCYM');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://writesoft.co.in/Perfecthit/account.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>