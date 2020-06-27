<?php
class Functions
{
  public $test;

  function submit()
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

  function delet()
  {
    if (isset($_GET['del'])) :
      $id = $_GET['del'];
      $utulisateur = new Utulisateur;
      $utulisateur->delet($id);
    endif;
  }

  function edit()
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
