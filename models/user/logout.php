
<?php

use projet\Config;

$configuration = new Config;
$gClient = $configuration->configGoogle();
unset($_SESSION['access_token']);
$gClient->revokeToken();

unset($_COOKIE['utulisateur']);
setcookie('utulisateur', '', time() - 10);
session_destroy();
header('location:login.php?p=loginuser');
exit();