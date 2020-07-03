<?php

if (isset($_SESSION['user']['id'])) :
  setcookie('utulisateur', $_SESSION['user']['id'], time() + 60 * 160 + 24);
  $name = $_SESSION['user']['nom'];
elseif (isset($_SESSION['id_google'])) :
  setcookie('utulisateur', $_SESSION['id_google'], time() + 60 * 160 + 24);
  $name = $_SESSION['name'];
endif;




if (isset($_SESSION['user']['password']) || isset($_SESSION['id_google'])) :
  $title = "profil User";
  echo $name;
else :
  header('location: login.php?p=loginuser');
endif;