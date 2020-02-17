<?php

class UsersView extends Users{

  public function showUser($id = false){

    $result = $this->getUser($id);

    foreach($result as $person){
      echo "Full name: {$person['initial']}<br>";
    }

  }

}
