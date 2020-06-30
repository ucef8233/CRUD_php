<?php


session_start();
if ($_SESSION) :
  $title = "profil User";
  $session = $_SESSION['user']['nom'];
else :
  header('location: index.php?p=login');
endif;
