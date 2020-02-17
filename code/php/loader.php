<?php

spl_autoload_register('autoloader');



function autoloader($className){

  $rootPath = substr($_SERVER['PHP_SELF'], 1);
  $pathArr = explode('/', $rootPath);

  $fileName = "classes/{$className}.class.php";

  require_once $fileName;

}
