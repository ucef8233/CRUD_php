<?php

namespace projet\Database;

// session_start();

use \PDO;

class Utulisateur extends Db
// recuperation de tout les utulisateur de la base de donnée
{
  /**
   * @return array tout les info de la base de donnée
   */
  public function select($table_name)
  {
    $sql = "SELECT * FROM $table_name ";
    $result = $this->connect()->query($sql);
    if ($result->rowCount() > 0) :
      while ($row = $result->fetch()) :
        $data[] = $row;
      endwhile;
      return $data;
    endif;
  }

  /**
   * @param array $champs tableau des info inserer par l'utuisateur
   */
  public function insert($table_name, $champs)
  {
    $implodeColumns = implode(', ', array_keys($champs));
    $implodePlaceholder = implode(", :", array_keys($champs));
    $sql = "INSERT INTO $table_name ($implodeColumns) VALUES (:" . $implodePlaceholder . ")";
    $stmt = $this->connect()->prepare($sql);
    foreach ($champs as $key => $value) :
      $stmt->bindValue(':' . $key, $value);
    endforeach;
    $stmtExec = $stmt->execute();
    if ($stmtExec) :
      if ($table_name == 'utulisateurs') :
        header('Location:utulisateurs.php?p=home');
      elseif ($table_name == 'user') :
        header('Location:user.php?p=login');
      endif;
    endif;
  }          


  /**
   * @param number $id id selectionner par l'utulisateur
   * 
   * @return [array] $result tableau des information de l'utulisateur liée a la variable $id
   */
  public function selectOne($id)
  {
    $sql = "SELECT * FROM utulisateurs WHERE id = :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }


  /**
   * @param array $champs table des info a modiffier 
   * @param number $id id de l'utulisateur a modiffier 
   */
  public function update($champs, $id)
  {
    $sql = ("UPDATE utulisateurs SET nom = :nom, mail = :mail, adress = :adress WHERE id = $id");
    $stmt = $this->connect()->prepare($sql);
    foreach ($champs as $key => $value) :
      $stmt->bindValue(':' . $key, $value);
    endforeach;
    $stmtExec = $stmt->execute();
    if ($stmtExec) :
      header('Location:utulisateurs.php?p=home');
    endif;
  }
  /**
   * @param number $id
   */
  public function delet($id)
  {
    $sql = "DELETE FROM utulisateurs WHERE id = :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmtExec = $stmt->execute();
    // if ($stmtExec) :
    //   header('Location:utulisateurs.php?p=home');
    // endif;
  }
}
