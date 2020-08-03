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
				'p_id' => $id[0]
			]);

			if (isset($_POST['content']) AND !empty($_POST['content'])) {
				$comment = new Comment;
				$comment->hydrate([
					'c_pseudo' => $_POST['pseudo'],
					'c_content' => $_POST['content'],
					'p_id' => $_POST['id'] 
				]);
				
				$commentManager = new CommentManager;
				$commentManager->create([
					'c_pseudo' => $_POST['pseudo'],
					'c_content'=> $_POST['content'],
					'p_id' => $_POST['id'] 
				]);
				header("Refresh:0");
			}

			$this->render('post/index', compact('post','comments'));
		}
	}