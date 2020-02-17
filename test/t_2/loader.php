<?php

spl_autoload_register('loader');

function loader($className){

  $path = '';
  $extension = '.class.php';
  $fileName = "{$path}{$className}{$extension}";

  if(!file_exists($fileName)){
    return;
  }

  include_once $fileName;
  
}
