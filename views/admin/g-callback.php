<?php
require_once "config.php";
if (isset($_GET['code'])) {
  $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
  $_SESSION['access_token'] = $token;
  $oAuth = new Google_Service_Oauth2($gClient);
  $oAccount = $oAuth->userinfo->get();
  $_SESSION['id_google'] = $oAccount['id'];
  setcookie('iduser', $_SESSION['id_google'], time());
  header('location: utulisateurs.php?p=home');
} else {
  header('location: utulisateurs.php?p=login');
};