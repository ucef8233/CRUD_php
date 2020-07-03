<?php

use \projet\classes\HTML\Form;

$access = null;

if (isset($_COOKIE['utulisateur'])) :
  $access = $_COOKIE['utulisateur'];
endif;
if ($access) :
  header('location: user.php?p=home');
else :
  $title = "Inscription User";

?>
<form action="" method="POST">
  <?php
    foreach (Form::addForm() as list($a, $b, $c)) :
      echo  Form::getForm($a, $b, $c);
    endforeach;
    ?>
  <?= Form::getInput('submit', 'submit', 's\'inscrire') ?>
  <a class="btn btn-success" href="login.php?p=loginuser">j'ai deja un compte</a>
</form>
<?php endif;