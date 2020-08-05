<?php  
	namespace App\Controllers;
	use App\Models\Post;
	use App\Models\PostManager;

	class MainController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{	
			$postManager = new PostManager;
			$post = $postManager->findLast();

			if (isset($_POST['email'])) {
				mail('dragonoffairy@gmail.com','test', $_POST['content']);
			}
			$this->render('main/index', compact('post'));
		}
	}