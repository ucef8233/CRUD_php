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
      if ($result && password_verify($password_post, $password_hash)) :
        if ($table_name == 'utulisateurs') :
          header("Location: utulisateurs.php?p=home");
          exit();
          return $result;
        elseif ($table_name == 'user') :
          header("Location: utulisateurs.php?p=home");
          exit();
          return $result;
        endif;
      else :
        header("Location: $table_name.php?p=login&erreur=ko");
        exit();
      endif;
    endif;
  }
}
