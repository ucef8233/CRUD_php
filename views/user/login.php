<?php
$title = "connexion User";

use \projet\HTML\Form;
use \projet\HTML\Error;

?>
<form action="" method="POST">
  <?= Error::error_cnx(); ?>
  <?php
  foreach (Form::addLogin() as list($a, $b, $c)) :
    echo  Form::getForm($a, $b, $c);
  endforeach;
  ?>
  <?= Form::getInput('submit', 'submit', 'Ce connecter  ') ?>
  <a href="user.php?p=inscription">S'inscrire</a>
</form>