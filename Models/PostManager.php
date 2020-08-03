<?php 
	namespace App\Models;
	use App\Models\Manager;

	class PostManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_post';
	    }
	}