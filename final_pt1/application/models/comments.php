<?php
class Comments extends Model{




  public function getPostComments($pID) {
      $sql = 'select * from posts where postID = ?';

      $results = $this->db->execute($sql, $pID);

      while ($row=$results->fetchrow()) {
          $comments[] = $row;
      }

      return $comments;




      // $sql = 'SELECT comments.commentText, users.first_name, users.last_name,
      // FROM comments
      // INNER JOIN posts on posts.pID = comments.postID
      // INNER JOIN user on users.uID = comments.uID
      // WHERE post.pID = ?';
      //
      // $results = $this->db->execute($sql, array($pID));
      //
      //
      // $comments = $results;
      // // while ($row=$results->getrow()) {
      // //     $comments[] = $row;
      // // }
      //
      // return $comments;



}






public function addComment($data){
  $sql='INSERT INTO comments (uID, commentText, date, postID) VALUES (?,?,now(),?)';
  // echo 'My SQL:'.$sql;
  // die();
  $this->db->execute($sql,$data);
  $message = 'Comment Saved.';
  return $message;

}

}
