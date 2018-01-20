<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


  <?php
    include '_includes/config.php';
    include '_includes/header.inc.php';
  ?>

  <body>

    <?php
      $preferences = array("Name" => 'Mike Meyer', "Color" => 'Grey', "Movie" => 'The Toxic Avenger', "Book" => 'Fear and Loathing in Las Vegas', "Website" => 'Reddit');
      echo "<h1>".$preferences["Name"]."</h1>";
      unset($preferences["Name"]);
      echo "<ul>";
      foreach($preferences as $key => $value) {
        echo "<li>". $key .":". " " . $value."</li>";
      }
      echo "</ul>";
    ?>

  </body>

  <?php
    include '_includes/footer.inc.php';
  ?>
</html>
