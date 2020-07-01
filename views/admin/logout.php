<?php
require_once "config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
// Suppression du cookie designPrefere
unset($_COOKIE['utulisateur']);
setcookie('utulisateur', '', time() - 10);
session_destroy();
header('location:utulisateurs.php?p=login');
exit();