<?php
$title = "Inscription User";

use \projet\classes\HTML\Form;
?>
<form action="" method="POST">
  <?php
  foreach (Form::addForm() as list($a, $b, $c)) :
    echo  Form::getForm($a, $b, $c);
  endforeach;
  ?>
  <?= Form::getInput('submit', 'submit', 'submit') ?>
</form>