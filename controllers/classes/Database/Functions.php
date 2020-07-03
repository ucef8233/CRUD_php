<?php


namespace projet\classes\Database;



class Functions
{
  // fonction d'ajout d'utulisateur'
  public static function submit($table_user)
  {
    if (isset($_POST['submit'])) :
      $nom = addslashes($_POST['nom']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $email = $_POST['email'];
      $adress = addslashes($_POST['adress']);
      $champs = [
        'nom' => $nom,
        'password' => $password,
        'mail' => $email,
        'adress' => $adress
      ];
      $utulisateurs = new Utulisateur;
      $result = $utulisateurs->selectOne($email, $table_user, 'mail');
      if ($result) :
        if ($table_user == 'societe') :
          header("location:admin.php?p=add&error=exist");
        elseif ($table_user == 'user') :
          header("location:login.php?p=inscription&error=exist");
        endif;
      else :
        $utulisateurs->insert($table_user, $champs);
      endif;
    endif;
  }
  /// fonction de supretion d'utulisateur 
  public static function delet()
  {
    if (isset($_GET['del'])) :
      $id = $_GET['del'];
      $utulisateur = new Utulisateur;
      $utulisateur->delet($id);
    // header('Location :../index.php');
    endif;
  }
  public static function edit($table_name)
  {
    $id = new Utulisateur;
    $userId = $id->getId();
    if (!$userId) :
      header('location:admin.php?p=404');
    endif;
    $utulisateurs = new Utulisateur;
    $result = $utulisateurs->selectOne($userId, $table_name, 'id');
    if (isset($_POST['submit'])) :
      $nom = addslashes($_POST['nom']);
      // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $email = $_POST['email'];
      $adress = addslashes($_POST['adress']);
      $champs = [
        'nom' => $nom,
        'mail' => $email,
        // 'password' => $password,
        'adress' => $adress
      ];
      $id = $_POST['id'];
      $utulisateur = new Utulisateur;
      $utulisateur->update($champs, $id);
    endif;
    return $result;
  }
  /// function de modification d'utulisateur

}