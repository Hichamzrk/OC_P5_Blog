<?php
	namespace App\Models;

	class User
	{
		protected $u_id;
		protected $u_email;
		protected $u_password;

		public function hydrate($donnees)
		{
			foreach ($donnees as $key => $value) {
				//on récupere le nom du setter correspondant à l'attribut.
				$method = 'set'.ucfirst($key);

				//Si le setter correspondant exite
				if (method_exists($this, $method)) {
					//On appelle le setter.
					$this->$method($value);
				}
			}
			return $this;
		}

		public function getU_id():int
	    {
	        return $this->u_id;
	    }

	    public function setU_id(int $u_id):self
	    {
	        $this->u_id = $u_id;

	        return $this;
	    }

	    public function getU_email():string
	    {
	        return $this->u_email;
	    }
	    
	    public function setU_email(string $u_email):self
	    {
	        $this->u_email = $u_email;

	        return $this;
	    }
	    
	    public function getU_password():string
	    {
	        return $this->u_password;
	    }

	    public function setU_password(string $u_password):self
	    {
	        $this->u_password = $u_password;

	        return $this;
	    }
	}