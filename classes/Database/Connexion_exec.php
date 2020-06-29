<?php

namespace projet\Database;

class Connexion_exec
{
  public static function Admin_Cnx()
  {
    if (isset($_POST['submit'])) :
      $email = $_POST['email'];
      $connexion = new Connexion;
      $result = $connexion->Cnx('utulisateurs', $email);
      $password_post = $_POST['password'];
      $password_hash = $result['password'];
      if (password_verify($password_post, $password_hash)) :
        header("Location: index.php?p=home");
        exit();
        return $result;
      else :
        header("Location: index.php?p=login&error=ko");
        exit();
      endif;
    endif;
  }
}
