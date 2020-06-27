<?php
class Utulisateur extends Db
// recuperation de tout les utulisateur de la base de donnée
{
  /**
   * @return array
   */
  public function select()
  {
    $sql = "SELECT * FROM utulisateurs ";
    $result = $this->connect()->query($sql);
    if ($result->rowCount() > 0) :
      while ($row = $result->fetch()) :
        $data[] = $row;
      endwhile;
      return $data;
    endif;
  }

  /**
   * @param mixed $champs
   * 
   * @return [type]
   */
  public function insert($champs)
  {
    $implodeColumns = implode(', ', array_keys($champs));
    $implodePlaceholder = implode(", :", array_keys($champs));
    $sql = "INSERT INTO utulisateurs ($implodeColumns) VALUES (:" . $implodePlaceholder . ")";
    $stmt = $this->connect()->prepare($sql);
    foreach ($champs as $key => $value) :
      $stmt->bindValue(':' . $key, $value);
    endforeach;
    $stmtExec = $stmt->execute();
    if ($stmtExec) :
      header('Location: index.php');
    endif;
  }


  public function selectOne($id)
  {
    $sql = "SELECT * FROM utulisateurs WHERE id = :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }


  public function update($champs, $id)
  {
    $sql = ("UPDATE utulisateurs SET nom = :nom, mail = :mail, adress = :adress WHERE id = $id");
    $stmt = $this->connect()->prepare($sql);
    foreach ($champs as $key => $value) :
      $stmt->bindValue(':' . $key, $value);
    endforeach;
    $stmtExec = $stmt->execute();
    if ($stmtExec) :
      header('Location: index.php');
    endif;
  }
  public function delet($id)
  {
    $sql = "DELETE FROM utulisateurs WHERE id = :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmtExec = $stmt->execute();
  }
}
