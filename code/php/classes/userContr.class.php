<?php

class UserContr extends User{

  public function insert(){
    // $gender, $initial, $surname, $departmentID, $internCell
    $max = $this->getUser(false, false, true);

    echo $max[0]['max'] += 1;
  }

}
