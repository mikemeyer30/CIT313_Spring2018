<?php

class MembersController extends Controller{

	public $userObject;

   	public function users($uID){
      $this->userObject = new Users();
			$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

		public function index(){
	    $this->userObject = new Users();
			$users = $this->userObject->getAllUsers();
			$this->set('title', 'The Members View');
			$this->set('users',$users);
			$this->set('first_name',$first_name);
			$this->set('last_name',$last_name);
			$this->set('email',$email);
		}

		public function profile($uID){
			$this->userObject = new Users();
			$user = $this->userObject->getUserFromID($uID);
			$this->set('uID', $user['uID']);
			$this->set('first_name', $user['first_name']);
			$this->set('last_name', $user['last_name']);
			$this->set('email', $user['email']);
		}

		public function updateProfile($uID) {
			$this->userObject = new Users();
			$user = $this->userObject->getUserFromID($uID);
			$password = $_POST['password'];
			$passhash = password_hash($password,PASSWORD_DEFAULT);

			if ($password == "") {
				$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email']);
				$result = $this->userObject->update($data, $uID);
				$this->set('message', $result);
				header('Location: '.BASE_URL.'members/profile/'.$uID);
			}
			else {
				$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash);
				$this->userObject->update_newPass($data, $uID);
				$this->set('message', $result);
				header('Location: '.BASE_URL.'members/profile/'.$uID);

			}
		}


}

?>
