<?php

use \projet\classes\HTML\Error;

use \projet\classes\HTML\Form;

// session_start();
if (isset($_SESSION['admin']['id']) || isset($_SESSION['id_google'])) :
  $title = 'ajouter un utilisateur';

?>
<form action="" method="POST">
  <?= Error::error_exist(); ?>
  <?php
    foreach (Form::addForm() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
  <?= Form::getInput('submit', 'submit', 'add') ?>
</form>
<?php
else :
  header('location: admin.php?p=loginadmin');
endif;
?>