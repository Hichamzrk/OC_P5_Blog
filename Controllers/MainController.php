<?php  
	namespace App\Controllers;
	use App\Models\Post;
	use App\Models\PostManager;

	class MainController extends Controller
	{
		/**
		 * Page d'accueil
		 */
		public function index()
		{	
			$postManager = new PostManager;
			$post = $postManager->findLast();

			//Systeme de mail
			if (!empty($_POST) AND !in_array('',$_POST)) {
				mail('dragonoffairy@gmail.com','test', strip_tags($_POST['content']));
			}
			$this->render('main/index', compact('post'));
		}
	}