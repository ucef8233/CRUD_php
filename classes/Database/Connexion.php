<?php

namespace projet\Database;


use \PDO;

class Connexion extends Db
{
  public function Cnx($table_name, $email)
  {
    $sql = "SELECT * FROM $table_name WHERE mail = :email";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }
}
