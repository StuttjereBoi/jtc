<?php

class Users extends Dbh{

  protected function getUser($id = false){

    $x = $id ? 'WHERE userID = ?' : '';

    $sql = "SELECT * FROM users {$x}";
    $stmt = $this->conn()->prepare($sql);
    $stmt->execute([$id]);

    $results = $stmt->fetchAll();
    return $results;

  }

  protected function setUser($initial, $surname){

    $sql = "INSERT INTO users (initial, surname) VALUES (?,?)";
    $stmt = $this->conn()->prepare($sql);
    $stmt->execute([$initial, $surname]);

  }

}
