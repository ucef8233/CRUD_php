<?php
session_start();
require_once "GoogleApi/vendor/autoload.php";
$gClient = new Google_Client();
unset($_SESSION['token']);
$gClient->revokeToken();
session_destroy();
header('location:utulisateurs.php?p=login');
exit();