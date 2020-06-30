<?php


use \projet\HTML\Form;

session_start();
if ($_SESSION) :
  $title = 'ajouter un utilisateur';
  // $name = $_SESSION['utulisateurs']['nom'];
?>
  <form action="" method="POST">
    <?php
    foreach (Form::addForm() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
    <?= Form::getInput('submit', 'submit', 'submit') ?>
  </form>
<?php
else :
  header('location: index.php?p=login');
endif;
?>