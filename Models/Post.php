<?php
	namespace App\Models;

	class Post
	{
		protected $p_id;
		protected $p_author;
		protected $p_title;
		protected $p_chapo;
		protected $p_content;
		protected $p_added_datetime;
		protected $p_update_datetime;

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
		
		public function getP_id():int
	    {
	        return $this->p_id;
	    }

	    public function setP_id(int $p_id):self
	    {
	        $this->p_id = $p_id;

	        return $this;
	    }

	    public function getP_author():string
	    {
	        return $this->p_author;
	    }
	    
	    public function setP_author(string $p_author):self
	    {
	        $this->p_author = $p_author;

	        return $this;
	    }
	    
	    public function getP_chapo():string
	    {
	        return $this->p_chapo;
	    }

	    public function setP_chapo(string $p_chapo):self
	    {
	        $this->p_chapo = $p_chapo;

	        return $this;
	    }

	    public function getP_title():string
	    {
	        return $this->p_title;
	    }

	    public function setP_title(string $p_title):self
	    {
	        $this->p_title = $p_title;

	        return $this;
	    }

	    public function getP_content():string
	    {
	        return $this->p_content;
	    }

	    public function setP_content(string $p_content):self
	    {
	        $this->p_content = $p_content;

	        return $this;
	    }

	     public function getP_added_datetime():string
	    {
	        return $this->p_added_datetime;
	    }

	    public function setP_added_datetime(string $p_added_datetime):self
	    {
	        $this->p_added_datetime = $p_added_datetime;

	        return $this;
	    }

	     public function getP_update_datetime():string
	    {
	        return $this->p_update_datetime;
	    }

	    public function setP_update_datetime(string $p_update_datetime):self
	    {
	        $this->p_update_datetime = $p_update_datetime;

	        return $this;
	    }
	}