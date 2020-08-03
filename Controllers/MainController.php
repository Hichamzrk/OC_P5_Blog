<?php  
	namespace App\Controllers;

	class MainController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{	
			if ($_POST['email']) {
				mail('dragonoffairy@gmail.com','test', $_POST['content']);
			}
			$this->render('main/index');
		}
	}