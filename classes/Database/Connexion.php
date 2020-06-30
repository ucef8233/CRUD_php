<?php

namespace projet\Database;

// session_start();

use \PDO;

class Connexion extends Db
{
  public function Cnx($table_name, $email)
  {
    $sql = "SELECT * FROM $table_name WHERE mail = :email";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION[$table_name] = $result;
    return $result;
  }
}
