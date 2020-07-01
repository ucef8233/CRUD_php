<?php


/////   add session pour deconexion si precedent 


use \projet\HTML\Form;
use \projet\HTML\Error;


if (!isset($_SESSION['utulisateurs']['password']) || !isset($_SESSION['id_google'])) :
  require_once "config.php";
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
else :
  header('location: utulisateurs.php?p=login');
endif;