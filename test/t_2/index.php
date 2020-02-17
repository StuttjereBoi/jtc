<?php
  include('loader.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8mb4">
    <title></title>
  </head>
  <body>
    <?php
      $user = new UsersView();
      $user->showUser();
      $user = new UsersContr();
      $user->create("s", "bakker");
     ?>
  </body>
</html>
