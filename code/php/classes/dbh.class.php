<?php

class Dbh{

  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'mat_db';
  private $char = 'utf8mb4';

  protected function conn(){
    try {
      $dsn = "mysql:host={$this->host};dbname={$this->name};charset={$this->char}";
      $pdo = new PDO($dsn, $this->user, $this->pass);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "CONNECTION FAILED: {$pdo->getMessage()}";
    }
  }
}
