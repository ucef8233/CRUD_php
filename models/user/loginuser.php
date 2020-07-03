<?php


use \projet\classes\HTML\Form;
use \projet\classes\HTML\Error;
use \projet\Config;


$access = null;

if (!empty($_COOKIE['utulisateur'])) :
  $access = $_COOKIE['utulisateur'];
endif;
if ($access) :
  header('location: user.php');
else :
  $configuration = new Config;
  $gClient = $configuration->configGoogle();
  $title = "connexion User";

?>
<form action="" method="POST">
  <?= Error::error_cnx(); ?>
  <?php
    foreach (Form::addLogin() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
  <?= Form::getInput('submit', 'submit', 'submit') ?>
</form>
<a class="btn btn-danger float-right mx-5" href="<?= $gClient->createAuthUrl() ?>"> Google + </a>
<a class="btn btn-success float-right" href="login.php?p=inscription">S'inscrire</a>
<?php
endif;