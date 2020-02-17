<?php

require_once 'loader.php';

if(!isset($_SESSION)){session_start();}

$userV = new UserView();

$userC = new UserContr();
