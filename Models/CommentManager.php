<?php 
	namespace App\Models;
	use App\Models\Manager;

	class CommentManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_comment';
	    }
	}