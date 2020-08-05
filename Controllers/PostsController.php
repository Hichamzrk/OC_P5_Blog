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
			$posts = new PostManager;
			$post = $posts->find($id[0], 'p_id');

			$comment = new CommentManager;
			$comments = $comment->findBy([
				'p_id' => $id[0],
				'c_validation' => 1
			]);

			if (isset($_POST['c_content']) AND !empty($_POST['c_content'])) {
				$comment = new Comment;

				$comment->hydrate($_POST);
				
				$commentManager = new CommentManager;
				$commentManager->createComment($comment);
				
				//header("Refresh:0");
			}

			$this->render('post/index', compact('post','comments'));
		}
	}