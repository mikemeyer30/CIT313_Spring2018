<?php
class RegisterController extends Controller{

public $userObject;

public function defaultTask(){

  $this->userObject = new User();
  $this->set('task', 'register');

}

public function register() {

  $this->userObject = new User();

  $data = array('email'=>$_POST['email'], 'password'=>$_POST['password'], 'first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name']);

  $results = $this->userObject->addUser($data);

  $this->set('message', $result);
}

}

 ?>
