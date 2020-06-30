<?php

namespace projet\Database;

// session_start();
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
      // if ($table_name == 'utulisateurs') :
      if (password_verify($password_post, $password_hash)) :
        header("Location: utulisateurs.php?p=home");
        exit();
      else :
        header("Location: utulisateurs.php?p=error");
        exit();
      endif;
      // elseif ($table_name == 'user') :
      //   if (password_verify($password_post, $password_hash)) :
      //     header("Location: user.php?p=home");
      //     exit();
      //   else :
      //     header("Location: user.php?p=login&error=ko");
      //     exit();
      //   endif;
      // endif;
      return $result;
    // $_SESSION[$table_name] = $result;
    endif;
  }
}
