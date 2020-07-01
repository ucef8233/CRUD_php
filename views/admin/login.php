<?php


/////   add session pour deconexion si precedent 


use \projet\HTML\Form;
use \projet\HTML\Error;

require_once "GoogleApi/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("646342099462-tul0j87hj65ah5pc1eo5a5jju1sthllp.apps.googleusercontent.com");
$gClient->setClientSecret("_1YHGTNRNsWdtNKJ6XMooLYK");
// $gClient->setApplicationName("API test");
$gClient->setRedirectUri("http://localhost/CRUD_POO/public/utulisateurs.php?p=home");
$gClient->addScope("email");
$gClient->addScope("profile");
// $_SESSION['token'] = $token['access_token'];
if (isset($_GET['code'])) {
  $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
  $gClient->setAccessToken($token['access_token']);
  $oAuth = new Google_Service_Oauth2($gClient);
  $oAccount = $oAuth->userinfo->get();
  $_SESSION['token'] = $token['access_token'];
} else {
  $title = 'Connexion utulisateur';
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