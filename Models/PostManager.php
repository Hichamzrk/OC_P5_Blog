<?php 
	namespace App\Models;
	use App\Models\Manager;

	class PostManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_post';
	    }

	    public function createPost(Post $post){
	    	$posts = ([
					'u_id'=> $_SESSION['user']['id'],
					'p_author' => $post->getP_author(),
					'p_title' => $post->getP_title(),
					'p_chapo' => $post->getP_chapo(),
					'p_content' => $post->getP_content(),
				]);
	    	$this->create($posts);
	    }

	    public function updatePost($id, Post $post){
	    	$posts = ([
					'u_id'=> $_SESSION['user']['id'],
					'p_author' => $post->getP_author(),
					'p_title' => $post->getP_title(),
					'p_chapo' => $post->getP_chapo(),
					'p_content' => $post->getP_content(),
				]);
	    	$this->update($id, $posts, 'p_id');
	    }

	    public function findLast(){
	    	$query = $this->requete('SELECT * FROM '.$this->table.' ORDER BY p_id DESC LIMIT 1');
			return $query->fetch();
	    }

	    
	    public function filter(){
	   		$filter = array(
	   			'p_author' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,

	   			'p_chapo' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
	   			'p_title' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
	   			'p_content' => FILTER_DEFAULT,
	   		);

	   		return $filter; 
	   	}
	}