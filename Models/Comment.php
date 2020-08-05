<?php
	namespace App\Models;

	class Comment
	{
		protected $c_id;
		protected $p_id;
		protected $c_pseudo;
		protected $c_added_datetime;
		protected $c_validation;
		protected $c_content;

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
		
		public function getC_id():int
	    {
	        return $this->c_id;
	    }

	    public function setC_id(int $c_id):self
	    {
	        $this->c_id = $c_id;

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

	    public function getC_pseudo():string
	    {
	        return $this->c_pseudo;
	    }
	    
	    public function setC_pseudo(string $c_pseudo):self
	    {
	        $this->c_pseudo = $c_pseudo;

	        return $this;
	    }
	    
	    public function getC_added_datetime():string
	    {
	        return $this->c_added_datetime;
	    }

	    public function setC_added_datetime(string $c_added_datetime):self
	    {
	        $this->c_added_datetime = $c_added_datetime;

	        return $this;
	    }

	    public function getC_validation():int
	    {
	        return $this->c_validation;
	    }

	    public function setC_validation(int $c_validation):self
	    {
	        $this->c_validation = $c_validation;

	        return $this;
	    }

	    public function getC_content():string
	    {
	        return $this->c_content;
	    }

	    public function setC_content(string $c_content):self
	    {
	        $this->c_content = $c_content;

	        return $this;
	    }
	}