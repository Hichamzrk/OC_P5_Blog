<?php 
	namespace App\Models;
	use App\Models\Manager;

	class UserManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_user';
	    }
	}