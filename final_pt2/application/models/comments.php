<?php
class Comments extends Model{




  public function getPostComments($pID) {
    $sql = 'SELECT c.commentID, c.commentText, c.date, u.first_name, u.last_name
    FROM comments c
    INNER JOIN users u ON c.uID = u.uID
    INNER JOIN posts p on p.pID = c.postID
    WHERE p.pID = ?
    ORDER BY c.date DESC';
    $results = $this->db->execute($sql, array($pID));
    $comments = $results;
    return $comments;
}

  public function saveComment($data){
    $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
    $this->db->execute($sql,$data);
    $message = 'Comment Saved.';
    return $message;

  }

  public function deleteComment($commentID){
    $sql = 'DELETE FROM comments WHERE commentID = ?';
    $this->db->execute($sql, $commentID);
    $message = "Comment Deleted";
    return $message;
  }

}
