<?php

// Load classes
function classLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('classLoad');

//Instantiate new Registered User
$user = new Registered("regular", "newuser");

//Set Values for new Registered user
$user->first_name= $_POST['firstName'];
$user->last_name= $_POST['lastName'];
$user->email_address= $_POST['email'];

//Check if the new user is an instance of the User class, if yes, output the results
if ($user instanceof User) {
  echo "The registered user's first name is: " . $user->first_name . "<br/>";
  echo "The registered user's last name is: " . $user->last_name . "<br/>";
  echo "The registered user's email address is: " . $user->email_address . "<br/>";
  echo "<hr/>";
  echo "Processing Complete";
}
else {
  echo "You goofed.";
}



?>
