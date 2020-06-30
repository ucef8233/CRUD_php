<?php

namespace projet\Database;

session_start();
class Connexion_exec
{
  public static function Cnx($table_name)
  {
    if (isset($_POST['submit'])) :
      $email = $_POST['email'];
      $connexion = new Connexion;
      $result = $connexion->Cnx($table_name, $email);
      $password_post = $_POST['password'];
      $password_hash = $result['password'];
      if (password_verify($password_post, $password_hash)) :
        if ($table_name == 'utulisateurs') :
          header("Location: index.php?p=home");
          exit();
        endif;
      else :
        header("Location: index.php?p=login&error=ko");
        exit();
      endif;
      if (password_verify($password_post, $password_hash)) :
        if ($table_name == 'user') :
          header("Location: user.php?p=home");
          exit();
        endif;
      else :
        header("Location: user.php?p=login&error=ko");
        exit();
      endif;

      // return $result;
      $_SESSION[$table_name] = $result;
    endif;
  }
}
