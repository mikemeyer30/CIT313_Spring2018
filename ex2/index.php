<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("classes/user.class.php");
include_once("classes/registered.class.php");
include_once("classes/admin.class.php");

// Instantiate regular user object
$regUser = new registered("Regular User", "michmeye");

// Instantiate Admin user object
$adminUser = new admin("Administrator", "bobroberts");

// Set reg user properties
$regUser->first_name = "Mike";
$regUser->last_name = "Meyer";
$regUser->email_address = "mikemeyer30@gmail.com";

// Set admin user properties
$adminUser->first_name = "Bob";
$adminUser->last_name = "Roberts";
$adminUser->email_address = "bob@bob.com";

//echo out object properties
echo "User Level: " . $regUser->user_level ." <br/>";
echo "Registered User ID: " . $regUser->user_id ." <br/>";
echo "Registered User Type: " . $regUser->user_type ." <br/>";
echo "Registered First Name: " . $regUser->first_name ." <br/>";
echo "Registered Last Name: " . $regUser->last_name ." <br/>";
echo "Registered Email: " . $regUser->email_address ." <br/>";
echo "<hr>";
echo "User Level: " . $adminUser->user_level ." <br/>";
echo "Admin User ID: " . $adminUser->user_id ." <br/>";
echo "Admin User Type: " . $adminUser->user_type ." <br/>";
echo "Admin First Name: " . $adminUser->first_name ." <br/>";
echo "Admin Last Name: " . $adminUser->last_name ." <br/>";
echo "Admin Email: " . $adminUser->email_address ."<br/>";

?>
