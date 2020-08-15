<?php 
	namespace App\Models;
	use App\Models\Manager;

	class CommentManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_comment';
	    }

	    public function updateComment($id, Comment $comment){
	    	$comments = ([
					'c_validation'=> $comment->getC_validation(),
				]);
	    	$this->update($id,$comments, 'c_id');
	    }

	    public function createComment(Comment $comment){
	    	$comments = ([
					'c_pseudo' => $comment->getC_pseudo(),
					'p_id' => $comment->getP_id(),
					'c_content' => $comment->getC_content(),
				]);
	    	$this->create($comments);
	    }

	    public function filter(){
	   		$filter = array(
	   			'c_pseudo' => FILTER_SANITIZE_STRING,
	   			'p_id' => FILTER_VALIDATE_INT,
	   			'c_content' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
	   		);

	   		return $filter; 
	    }
	}