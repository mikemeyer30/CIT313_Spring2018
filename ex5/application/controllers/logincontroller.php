<?php

class LoginController extends Controller{

   protected $userObject;

   public function do_login() {
     $this->userObject = new User();

     if($this->userObject->checkUser($_POST['email'], $_POST['password'])) {

       $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

       $_SESSION['uID'] = $userInfo['uID'];

       if (strlen($_SESSION['redirect']) > 0) {
         $view = $_SESSION['redirect'];
         unset($_SESSION['redirect']);
         header('Location:'.BASE_URL.$view);
       }
       else {
         header('Location: '.BASE_URL);
       }



     }
     else {
       $this->set('error', 'Invalid username/email address');
     }
   }

   public function logout() {

     // Unset session ID
     unset($_SESSION['uID']);

     // Turn off session
     session_write_close();

     // Redirect user to home page
     header('Location'.BASE_URL);


   }

}
