<?php 
	namespace App\Controllers;

	abstract class Controller{
		/**
		 * @param  string
		 * @param  array
		 */
		public function render(string $fichier, array $data = []){
		    // Récupère les données et les extrait sous forme de variables
		    extract($data);

		    //buffer template
		    ob_start();

		    // Crée le chemin et inclut le fichier de vue
		    require_once(ROOT.'/Views/'.$fichier.'.php');

		    $content = ob_get_clean();
		    $css = ROOT.'Public/css/style.css';

		    //on récupére le template
		    require_once(ROOT.'/Views/default.php');
		}
	}