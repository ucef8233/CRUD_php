<?php


/////   add session pour deconexion si precedent 


use \projet\HTML\Form;
use \projet\HTML\Error;


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
</form>
<?php
