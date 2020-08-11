<?php 
	namespace App\Models;
	use App\Models\Manager;

	class UserManager extends Manager
	{
		Public function __construct()
	    {
	        $this->table = 'b_user';
	    }
	    /**
	     * @param User
	     */
	    public function setSession(User $user){
	   		$_SESSION['user'] = [
		        'id' => $user->getU_id(),
		        'email' => $user->getU_email()
	   		];
		}
	}