<?php

namespace projet\Database;

class Functions
{
  // fonction d'ajout d'utulisateur'
  public static function submit()
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
      $utulisateurs->insert($champs);
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

  /// function de modification d'utulisateur
  public static function edit()
  {
    if (isset($_GET['id'])) :
      $userId = $_GET['id'];
      $utulisateurs = new Utulisateur;
      $result =  $utulisateurs->selectOne($userId);
    endif;
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
}
