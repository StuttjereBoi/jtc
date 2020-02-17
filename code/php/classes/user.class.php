<?php

class User extends Dbh{

  protected function getUser($id = false, $all = false, $max = false){

    $c_1 = $all ? 'users.*, departments.departmentName' : '';
    $c_2 = $all ? 'INNER JOIN departments ON users.departmentID = departments.departmentID' : '';
    $c_3 = $id ? 'WHERE employeeID = ?' : '';
    $c_4 = $max ? 'MAX(employeeID) as `max`' : '';

    $sql = "SELECT {$c_4} {$c_1} FROM users {$c_2} {$c_3}";

    $stmt = $this->conn()->prepare($sql);
    $stmt->execute([$id]);

    if($stmt->rowCount()){
      return $stmt->fetchAll();
    }

  }

  protected function setUser(){

  }

}
