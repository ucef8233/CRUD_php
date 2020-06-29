<?php
$title = 'Modiffier l\'utilisateur';

use \projet\HTML\Form;
use \projet\Database\Functions;

$result = Functions::edit();
?>
<!-- Modiffier des employer  -->
<form action="" method="post">
  <?= Form::getInput('id', 'hidden', $result['id']) ?>
  <?php
  foreach (Form::editForm() as list($a, $b, $c, $d)) :
    echo  Form::getForm($a, $b, $c, $d);
  endforeach;
  echo Form::getInput('submit', 'submit', 'submit');
  ?>

</form>

<!-- fin d'ajout des employées  -->