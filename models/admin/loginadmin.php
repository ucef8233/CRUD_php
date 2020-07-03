<?php


/////   add session pour deconexion si precedent 


use \projet\classes\HTML\Form;
use \projet\classes\HTML\Error;

$title = "connexion admin";
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
<?php