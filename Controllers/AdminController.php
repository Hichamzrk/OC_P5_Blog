<?php  
	namespace App\Controllers;
	
	Use App\Models\PostManager;
	Use App\Models\CommentManager;
	Use App\Models\Comment;
	Use App\Models\Post;

	class AdminController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{
			if (!$_SESSION['email']) {
				header('location: /user/login');
				exit;
			}
			$post = new PostManager;
			$posts = $post->findAll();

			$comment = new CommentManager;
			$comments = $comment->findBy(['c_validation' => 0]);

			$this->render('admin/index', compact('posts', 'comments'));
		}

		public function delete($id){
			$post = new PostManager;
			$post->delete($id[0]);
			
			header("location:/admin");
		}

		public function create(){

			if ($_POST) {
				$_POST += ['u_id' => 1];
				
				$post = new Post;
				$post->hydrate($_POST);

				$postManager = new PostManager;
				$postManager->createPost($post);
				
				header('location: /admin');
			}
			$this->render('createPost/index');
		}

		public function update($id){
			$postManager = new PostManager;
			$posts = $postManager->find($id[0], 'p_id');

			if ($_POST) {
				$_POST += ['u_id' => 1];
				
				$post = new Post;
				$post->hydrate($_POST);

				$postManager = new PostManager;
				$postManager->updatePost($id[0], $post);

				header('location: /admin');
			}

			$this->render('updatePost/index', compact('posts'));
		}

		public function updateComment($id){
			$comment = new Comment;
			$comments = $comment->hydrate(['c_validation' => 1]);

			$commentManager = new CommentManager;
			$commentManager->updateComment($id[0], $comment);

			header('location: /admin');
		}
	}