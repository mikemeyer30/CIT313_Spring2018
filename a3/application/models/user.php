<?php

class User extends Model {

  function getUser($uID) {

    $sql = 'SELECT uID, email, first_name, last_name FROM users WHERE uID = ?';

    $results = $this->db->getrow($sql, array($uID));


    $user = $results;

    return $user;
  }

  function getAllUsers($limit = 0){
    if($limit > 0){
      $numusers = ' LIMIT '.$limit;
    }

    $sql = 'SELECT uID, first_name, last_name, email FROM users'.$numusers;

    $results = $this->db->execute($sql);

    while ($row=$results->fetchrow()) {
      $users[] = $row;
    }

    return $users;

  }

  public function addUser($data){
    $sql='INSERT INTO users (email, password, first_name, last_name) VALUES (?,?,?,?)';
    $this->db->execute($sql, $data);
    $message = 'User added.';
    return $message;

  }

}


 ?>
