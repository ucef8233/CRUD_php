<?php


/////   add session pour deconexion si precedent 


use \projet\HTML\Form;
use \projet\HTML\Error;

require_once "GoogleApi/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("646342099462-r4h4gaaash5sg1lj4to55ma2jd6g0eo3.apps.googleusercontent.com");
$gClient->setClientSecret("L9MfQlF9kMHj_v2bBCzZgBMm");
// $gClient->setApplicationName("API test");
$gClient->setRedirectUri("http://localhost/CRUD_POO/public/utulisateurs.php?p=home");
$gClient->addScope("email");
$gClient->addScope("profile");
if (isset($_GET['code'])) {
  $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
  $gClient->setAccessToken($token['access_token']);
  $oAuth = new Google_Service_Oauth2($gClient);
  $oAccount = $oAuth->userinfo->get();
  $_SESSION['code'] = $_GET['code'];
} else {
  $title = 'Connexion utulisateur';
  var_dump($_SESSION['code']);
?>

<form action="" method="POST">
  <?= Error::error_cnx(); ?>
  <?php
    foreach (Form::addLogin() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
  <?= Form::getInput('submit', 'submit', 'Ce connecter  ') ?>
  <a href="<?= $gClient->createAuthUrl() ?>"> test </a>
</form>
<?php
}