<?php
class Comments extends Model{



public function getComments($pID){

    $sql = 'select * from comments where postID = ?';

    $results = $this->db->execute($sql, $pID);

    while ($row=$results->fetchrow()) {
        $comments[] = $row;
    }

    return $comments;
}





public function addComment($data){

$sql='INSERT INTO comments (uID, commentText, `date`, postID) VALUES (?,?,now(),?)';
$this->db->execute($sql,$data);
$message = 'Comment Saved.';
return $message;

}

}
