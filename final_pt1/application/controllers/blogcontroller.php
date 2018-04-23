<?php

class BlogController extends Controller{

	public $postObject;
	public $commentsObject;



 	public function post($pID){
      $this->postObject = new Post();
			$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);

			$this->commentsObject = new Comments();
			$result = $this->commentsObject->getPostComments($pID);
			$this->set('comments', $result);
			$this->set('task', 'save');
			echo $result;


   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	public function save() {
		$this->commentsObject = new Comments();
		$data = array('uID'=>$_POST['uID'], 'commentText'=>$_POST['commentText'], 'date'=>$_POST['date'],'postID'=>$_POST['pID']);
		$result = $this->commentsObject->addComment($data);
		$this->set('message', $result);
	}

}

?>
