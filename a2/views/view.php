<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Model View Controller</title>
  </head>
  <body>
    <h1>Hello from my view!</h1>

    <?php
      echo "<ul>";
      echo "<li>" . "User ID: " . $userID ."</li>";
      echo "<li>" . "First Name: " . $first ."</li>";
      echo "<li>" . "Last Name: " . $last ."</li>";
      echo "<li>" . "Email: " . $email ."</li>";
      echo "<li>" . "Role: " . $role ."</li>";
      echo "</ul>";
    ?>

  </body>
</html>
