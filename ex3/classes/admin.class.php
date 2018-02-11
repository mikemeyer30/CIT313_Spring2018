<?php

  class Admin extends User {

    public function __construct($user_level, $user_id) {

      $this->user_type = "2";
      $this->user_level= $user_level;
      $this->user_id = $user_id;
      parent::__construct($user_level);



    }


  }

?>
