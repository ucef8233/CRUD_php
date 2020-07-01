<?php
require_once "config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
// Suppression du cookie designPrefere
setcookie('designPrefere');
// Suppression de la valeur du tableau $_COOKIE
unset($_COOKIE['designPrefere']);
session_destroy();
header('location:utulisateurs.php?p=login');
exit();