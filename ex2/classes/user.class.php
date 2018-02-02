<?php
  class user {

    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    public function __construct($user_level) {
      $this->$user_level = $user_level;

    }

    public function __set($name, $value) {
      $this->$name = $value;
      return;

    }

    public function __get($name) {
      return $this->$name;

    }

    public function __destruct() {


    }

  }
?>

<!--
To instantiate:

1.) Include the class
include_once('classes/class_name.class.php');

2.) Set variable equal to class object
$newObject = new class_name(optional_parameters);

3.) To access methods and properties, use "->"
$car_make = $hotrod->make;


 -->
