<?php

class MembersController extends Controller{

  public $memberObject;

  public function  defaultTask(){

    $this->memberObject = new User();
    $users = $this->memberObject->getAllUsers();
    $this->set('users', $users);


  }

  public function view($uID){
    $this->memberObject = new User();
    $user = $this->memberObject->getUser($uID);
    $this->set('user', $user);
  }
}

 ?>
