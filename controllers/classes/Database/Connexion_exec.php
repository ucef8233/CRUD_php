<?php

namespace projet\classes\Database;
// session_start();
class Connexion_exec
{
  public static function Cnx($table_name)
  {
    if (isset($_POST['submit'])) :
      $email = $_POST['email'];
      $connexion = new Connexion;
      $result = $connexion->Cnx($table_name, $email);
      if ($result) :
        $password_post = $_POST['password'];
        $password_hash = $result['password'];
        var_dump(password_verify($password_post, $password_hash));
        if (password_verify($password_post, $password_hash)) :
          header("Location: $table_name.php?p=home");
        // else :
        //   header("Location: login.php?p=$table_name&erreur=ko");
        //   exit();
        endif;
      endif;
    endif;
  }
}