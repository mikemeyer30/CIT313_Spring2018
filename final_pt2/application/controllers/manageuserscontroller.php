<?php

class ManageUsersController extends Controller{

	public $userObject;
    //
   	// public function users($uID){
    //     $this->userObject = new Users();
		// $user = $this->userObject->getUser($uID);
	  // 	$this->set('user',$user);
   	// }
    //
	public function index(){
    $this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
    $this->set('user_type', $user_type);
	}

  public function delete($uID) {
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
		$result = $this->userObject->deleteUser($uID);
    $this->set('message1', $result);
  	}

  public function approve($uID) {
      $this->userObject = new Users();
      $result = $this->userObject->approveUser($uID);
      // header("Location: " . BASE_URL . "manageusers/");
      $this->set('message2', $result);
  }
}

?>
