<?php

class UsersContr extends Users{

  public function create($initial, $surname){

    $this->setUser($initial, $surname);
    
  }

}
