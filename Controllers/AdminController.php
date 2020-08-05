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
			if (!$_SESSION['user']) {
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
			$id = strip_tags($id[0]);

			$post = new PostManager;
			$post->delete($id);
			
			header("location:/admin");
		}

		public function create(){
			if (!$_SESSION['user']) {
				header('location: /user/login');
				exit;
			}

			if (!empty($_POST) AND !in_array('', $_POST)) {
				$post = new Post;
				$postManager = new PostManager;

				$filter = $postManager->filter();
				$donnee = filter_input_array(INPUT_POST, $filter);

				$post->hydrate($donnee);

				$postManager->createPost($post);
				
				header('location: /admin');
			}
			$this->render('createPost/index');
		}

		public function update($id){
			if (!$_SESSION['user']) {
			header('location: /user/login');
			exit;
			}

			$id = strip_tags($id[0]);
			$postManager = new PostManager;
			$posts = $postManager->find($id, 'p_id');

			if (!empty($_POST) AND !in_array('', $_POST)) {
				$filter = $postManager->filter();
				$donnee = filter_input_array(INPUT_POST, $filter);

				$post = new Post;
				$post->hydrate($donnee);

				$postManager->updatePost($id, $post);

				header('location: /admin');
			}

			$this->render('updatePost/index', compact('posts'));
		}

		public function updateComment($id){
			if (!$_SESSION['user']) {
			header('location: /user/login');
			exit;
			}

			$id = strip_tags($id[0]);

			$comment = new Comment;
			$comments = $comment->hydrate(['c_validation' => 1]);

			$commentManager = new CommentManager;
			$commentManager->updateComment($id, $comment);

			header('location: /admin');
		}
	}