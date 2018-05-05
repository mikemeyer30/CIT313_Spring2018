<?php

class BlogController extends Controller{

	public $postObject;
	public $commentsObject;



	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	public function post($pID){
    $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
  	$this->set('post',$post);
		$this->commentsObject = new Comments();
		$result = $this->commentsObject->getPostComments($pID);
		$this->set('comments', $result);
   	}

	public function addComment() {
		$this->commentsObject = new Comments();
		$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['pID']);
		$result = $this->commentsObject->saveComment($data);
		$this->set('message', $result);
		header("Location: " . BASE_URL . "blog/post/" . $_POST['pID']);
	}

	public function deleteComment($commentID) {
		$this->commentsObject = new Comments();
		$result = $this->commentsObject->deleteComment($commentID);
		$this->set('message', $result);
		header("Location: " . BASE_URL . "blog/post/" . $_POST['pID']);
	}

	public function category($cID){
		$this->postObject = new Post();
		$posts = $this->postObject->getCatPosts($cID);
		$this->set('title', 'Posts filtered by category');
		$this->set('posts',$posts);
	}


}

?>
