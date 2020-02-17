<?php

include 'loader.php';

if(!isset($_SESSION)){session_start();}

$userV = new UserView();

if(isset($_POST['login'])){

  $id = $_POST['id'];
  $pass = $_POST['pass'];

  $userV->login($id, $pass);

}
