<?php  
	namespace App\Models;

	use App\Core\Db\Db;

	class Manager extends Db{
		//Table de la base de donnée en cours
		protected $table;

		//Instance de connexion
		Private $db;

		//Methode d'execution des requètes 
		public function requete(string $sql, array $attributs = null)
		{
		    // On récupère l'instance de Db
		    $this->db = Db::getInstance();

		    // On vérifie si on a des attributs
		    if($attributs !== null){
		        // Requête préparée
		        $query = $this->db->prepare($sql);
		        $query->execute($attributs);
		        return $query;
		    }else{
		        // Requête simple
		        return $this->db->query($sql);
		    }
		}

		//Methode selectionne tous les enregistrement d'une table
		public function findAll()
		{
			$query = $this->requete('SELECT * FROM '.$this->table.' ORDER BY p_id DESC');
			return $query->fetchAll();
		}

		//Methode recherche des elements précis
		public function findBy(array $criteres)
		{
			$champs = [];
			$valeurs = [];

			//On boucle pour "éclater le tableau de critère"
			foreach ($criteres as $champ => $valeur) {
				$champs[] = "$champ = ?";
				$valeurs[] = $valeur;
			}

			//On transforme le tableau en chaîne de caractère séparée par des AND

			$liste_champs = implode('AND ', $champs);

			//On exécute la requête
			return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
		}

		//Methode de recherche d'un élement
		public function find($id, $table)
		{
			return $this->requete("SELECT * FROM {$this->table} WHERE $table = $id")->fetch();
		}

		//Methode de création d'un élément
		public function create($donnes)
		{
		    $champs = [];
		    $inter = [];
		    $valeurs = [];

		    // On boucle pour éclater le tableau
		    foreach($donnes as $champ => $valeur){
		        // INSERT INTO annonces (titre, description, actif) VALUES (?, ?, ?)
		        if($valeur !== null && $champ != 'db' && $champ != 'table'){
		            $champs[] = $champ;
		            $inter[] = "?";
		            $valeurs[] = $valeur;
		        }
		    }

		    // On transforme le tableau "champs" en une chaine de caractères
		    $liste_champs = implode(', ', $champs);
		    $liste_inter = implode(', ', $inter);

		    // On exécute la requête
		    return $this->requete('INSERT INTO '.$this->table.' ('. $liste_champs.')VALUES('.$liste_inter.')', $valeurs);

		}

		//Methode de suppression d'une donnée
		public function delete(string $id, $column)
   		{
       		return $this->requete("DELETE FROM {$this->table} WHERE $column = ?", [$id]);
    	}	

    	//Methode d'update
    	public function update(int $id, $model, $table)
		{
		    $champs = [];
		    $valeurs = [];

		    // On boucle pour éclater le tableau
		    foreach($model as $champ => $valeur){
		        // UPDATE annonces SET titre = ?, description = ?, actif = ? WHERE id= ?
		        if($valeur !== null && $champ != 'db' && $champ != 'table'){
		            $champs[] = "$champ = ?";
		            $valeurs[] = $valeur;
		        }
		    }
		    $valeurs[] = $id;

		    // On transforme le tableau "champs" en une chaine de caractères
		    $liste_champs = implode(', ', $champs);

		    // On exécute la requête
		    return $this->requete('UPDATE '.$this->table.' SET '. $liste_champs.' WHERE '.$table.' = ?', $valeurs);
		}
		
		//Selectionne tous à partir d'un element
		public function findOneByEmail($element){
			return $this->requete("SELECT * FROM {$this->table} WHERE u_email = ?",[$element])->fetch();
		}

		//Compte le nombre d'element selon critére
		public function numberverify($donnes){
			$query = $this->findBy($donnes);
			$NumberVerify = $query->rowCount();
				
			return $NumberVerify;
		}
	}