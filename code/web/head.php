<?php

if(!isset($_SESSION)){session_start();}
require_once "../code/php/loader.php";

$pageName = str_replace(".php", "",  basename($_SERVER["PHP_SELF"]));

function getName($page){
  switch($page){
    case "login":
      return "JTC | Login";
  }
}

?>
<head>
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
  </script>
  <script src="../code/js/login.code.js"></script>
  <script src="../code/js/functions.code.js"></script>
  <link rel="stylesheet" href="../assets/css/style.min.css">
  <title><?php echo getName($pageName); ?></title>
</head>
