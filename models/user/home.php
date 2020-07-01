<?php


if ($_SESSION['user']['password']) :
  $title = "profil User";
// $session = $_SESSION['user']['nom'];
else :
  header('location: user.php?p=login');
endif;
