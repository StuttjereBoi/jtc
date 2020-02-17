<?php

class UserView extends User{

  private $data = array();
  public $ja;

  // public function __set($name, $value){}


  public function login($id, $password){

    $result = $this->getUser($id);
    $password = hash('sha256', $password);

    if($password == $result[0]['password']){
      $_SESSION['user'] = $id;
    }else{
      echo "Het medewerkersnummer en/of wachtwoord is verkeerd";
    }

  }

  public function info($id = false){

    $result = $this->getUser($id, true);

    foreach($result as $person): ?>
      <table>
        <tr>
          <td>Geslacht</td>
          <td><?php echo ($person['sex']) ? 'Vrouw' : 'Man'; ?></td>
        </tr>
        <tr>
          <td>Naam</td>
          <td><?php echo "{$person['initial']}. {$person['surname']}"; ?></td>
        </tr>
        <tr>
          <td>ID</td>
          <td><?php echo "{$person['employeeID']}"; ?></td>
        </tr>
        <tr>
          <td>Afdeling</td>
          <td><?php echo $person['departmentName']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $person['email']; ?></td>
        </tr>
        <tr>
          <td>Intern telefoonnummer</td>
          <td><?php echo $person['internCell']; ?></td>
        </tr>
      </table>
    <?php endforeach;

  }

}
