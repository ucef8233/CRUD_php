<?php

use \projet\HTML\Form;
use \projet\Database\Functions;


// session_start();

if ($_SESSION) :
  $title = 'Modiffier l\'utilisateur';
  $result = Functions::edit();

?>
  <!-- Modiffier des employer  -->
  <form action="" method="post">
    <?= Form::getInput('id', 'hidden', $result['id']) ?>
    <?php
    foreach (Form::editForm() as list($a, $b, $c, $d)) :
      echo  Form::getForm($a, $b, $c, $d);
    endforeach;
    echo Form::getInput('submit', 'submit', 'edit');
    ?>
  </form>
<?php
else :
  header('location: index.php?p=login');
endif;
?>
<!-- fin d'ajout des employées  -->