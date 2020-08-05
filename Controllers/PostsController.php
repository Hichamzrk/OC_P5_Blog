<?php  
	namespace App\Controllers;
	
	Use App\Models\PostManager;
	Use App\Models\CommentManager;
	Use App\Models\Comment;

	class PostsController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{
			$post = new PostManager;
			$posts = $post->findAll();

			$this->render('posts/index', compact('posts'));
		}

		public function post($id){
			$id = strip_tags($id[0]);
			
			$posts = new PostManager;
			$post = $posts->find($id, 'p_id');

			$commentManager = new CommentManager;
			$comments = $commentManager->findBy([
				'p_id' => $id,
				'c_validation' => 1
			]);

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