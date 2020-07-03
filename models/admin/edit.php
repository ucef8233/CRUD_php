<?php

use \projet\classes\HTML\Form;
use \projet\classes\Database\Functions;


// session_start();

if (!isset($_SESSION['admin']['id']) || !isset($_SESSION['id_google'])) :
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
  header('location: admin.php?p=loginadmin');
endif;
?>
<!-- fin d'ajout des employées  -->