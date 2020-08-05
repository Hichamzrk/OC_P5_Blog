<?php  
	namespace App\Controllers;

	class MainController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{	
			if (isset($_POST['email'])) {
				mail('dragonoffairy@gmail.com','test', $_POST['content']);
				echo "<pre>";
				var_dump($_POST);
				echo "</pre>";
			}
			$this->render('main/index');
		}
	}