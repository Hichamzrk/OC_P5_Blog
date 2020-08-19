<?php  
	namespace App\Controllers;
	
	Use App\Models\PostManager;
	Use App\Models\CommentManager;
	Use App\Models\Comment;

	class PostsController extends Controller
	{
		/**
		 * Affiche les articles
		 */
		public function index()
		{
			$post = new PostManager;
			$posts = $post->findAll();

			$this->render('posts/index', compact('posts'));
		}

		/**
		 * Affiche un article
		 * @param  [Paramètre]
		 */
		public function post($parameter){
			$id = strip_tags($parameter[0]);
			
			$posts = new PostManager;
			$post = $posts->find($id, 'p_id');

			if (empty($post)) {
				  http_response_code(404);
			      echo "La page recherchée n'existe pas";
			      die();
			}

			$commentManager = new CommentManager;
			$comments = $commentManager->findBy([
				'p_id' => $id,
				'c_validation' => 1
			]);

			//Créer un commentaire
			if (!empty($_POST) AND !in_array('',$_POST)) {
				$comment = new Comment;

				$filter = $commentManager->filter();
				$donnee = filter_input_array(INPUT_POST, $filter);

				$comment->hydrate($donnee);
				
				$commentManager->createComment($comment);
			}

			$this->render('post/index', compact('post','comments'));
		}
	}