<?php


class Controller
{
  public $load;
  public $user;

  function __construct() {

    $this->load = new Load();
    $this->user = new User();
    $this->home();

  }

  // This function will allow the communication between the model and the view
  function home() {

    $this->user->userID = "1";
    $this->user->firstname = "Mike";
    $this->user->lastname = "Meyer";
    $this->user->email = "test@test.com";
    $this->user->role = "test";


    $data = $this->user->getName();
    $this->load->view('view.php', $data);


  }

}
?>
