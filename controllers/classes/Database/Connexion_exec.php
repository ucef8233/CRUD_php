<?php

namespace projet\classes\Database;
// session_start();
class Connexion_exec
{
  public static function Cnx($table_name, $dirrection)
  {
    if (isset($_POST['submit'])) :
      $email = $_POST['email'];
      $connexion = new Utulisateur;
      $result = $connexion->selectOne($email, $table_name, 'mail');
      if ($result) :
        $password_post = $_POST['password'];
        $password_hash = $result['password'];
        if (password_verify($password_post, $password_hash)) :
          // var_dump($_SESSION);
          if ($table_name == 'admin') :
            header("Location: admin.php?p=home");
          else :
            header("Location: user.php?p=home");
          endif;
        else :
          header("Location: login.php?p=$dirrection&erreur=ko");
        endif;
      else :
        header("Location: login.php?p=$dirrection&erreur=ko");
      endif;
    endif;
  }
}