<?php
$title = 'ajouter un utilisateur';
// function autoload classes //
// namespace projet;
use \projet\HTML\Form;
?>
<form action="" method="POST">
  <?php
  foreach (Form::addForm() as list($a, $b, $c)) :
    echo  Form::getForm($a, $b, $c);
  endforeach;
  ?>
  <?= Form::getInput('submit', 'submit', 'submit') ?>
</form>