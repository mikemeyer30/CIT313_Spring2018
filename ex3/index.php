<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Error checking
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Load Classes
    function classLoad($class) {
      include_once('classes/'.strtolower($class).'.class.php');
    }
    spl_autoload_register('classLoad');

    // Output results of the static mathFunction method from the Registered user class
    $mathResult = Registered::mathFunction(3,3);
    echo "Before You Fill Out This Form, lets do some math!: ".$mathResult;

    ?>

<!-- Conctact form for gathering First name, Last Name, and Email -->
<form id="contactForm" name="contactForm" action="results.php" method="post">
    <table width="500" border="0" cellpadding="5" cellspacing="5">
        <tbody>
        <tr>
          <td width="169">First Name:</td>
          <td width="321"><label for="firstName"></label><input type="text" name="firstName" id="firstName"></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="lastName" id="lastName"></td>
        </tr>
        <tr>
          <td>Email Address:</td>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="submit" id="submit" value="Register"></td>
        </tr>
      </tbody>
    </table>
</form>

  </body>
</html>
