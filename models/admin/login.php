<?php


/////   add session pour deconexion si precedent 


use \projet\classes\HTML\Form;
use \projet\classes\HTML\Error;
use \projet\Config;


$access = null;
if (!empty($_COOKIE['utulisateur'])) :
  $access = $_COOKIE['utulisateur'];
endif;

if ($access) :
  header('location: utulisateurs.php?p=home');
else :
  $configuration = new Config;
  $gClient = $configuration->configGoogle();
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
  <a class="btn btn-danger" href="<?= $gClient->createAuthUrl() ?>"> Google + </a>
</form>
<?php
endif;