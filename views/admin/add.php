<?php


use \projet\HTML\Form;

// session_start();
if (isset($_SESSION['utulisateurs']['id']) || isset($_SESSION['id_google'])) :
  $title = 'ajouter un utilisateur';
  // $name = $_SESSION['utulisateurs']['nom'];
?>
<form action="" method="POST">
  <?php
    foreach (Form::addForm() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
  <?= Form::getInput('submit', 'submit', 'add') ?>
</form>
<?php
else :
  header('location: utulisateurs.php?p=login');
endif;
?>